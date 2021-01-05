<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Feature;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show all products
          $categories = Category ::all();

        if(request()->category){
          $products = Product ::with('categories')->whereHas('categories',function($query)
          {
            $query->where('slug',request()->category);

          });
          $categoryName=$categories->where('slug', request()->category)->first()->name;


        }else{
            $categoryName = 'محصولات ' ;
            $products = Product ::inRandomOrder()->take(10);
        }
        //sort by price
        if(request()-> sort == 'low_hight'){
          $products = $products->orderBy('price');
        }elseif(request()-> sort == 'hight_low'){
          $products = $products->orderBy('price','desc');
        }
        //paginate
        $products = $products->paginate(8);

        return view('products')->with([
          'products'=>$products,
          'categories'=>$categories,
          'categoryName'=>$categoryName
        ]);
    }



    public function show($slug)
    {
        //show one product

        $product = Product ::where('slug',$slug)->firstOrFail();

        $mightAlsoLike = Product :: where ('slug','!=',$slug) ->inRandomOrder()->take(4)->get();

        $categories = Category ::all();
        //fetch product features
        $features = $product->features()->get();

        return view('product')->with([
        'product'=>$product,
        'mightAlsoLike'=>$mightAlsoLike,
        'categories'=>$categories,
        'features'=>$features
      ]);
    }

    public function search(Request $request){

        $request->validate(['keyword'=>'required']);
        $categories = Category ::all();
        $query = $request->input('keyword');
        //do search
        $products =Product :: search($query)->paginate(10);

        return view('search-list')->with([
          'products'=>$products,
          'categories'=>$categories,
        ]);

    }
    public function ajaxSearchData(Request $request)
    {
       $query = $request ->get('query','');
       $products = Product :: where('name','LIKE','%'.$query.'%')->get();
       return response()->json($products);
    }

  }
