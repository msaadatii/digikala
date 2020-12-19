<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Validator;
use App\Category;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =Category ::all();
        $discount = session()->get('coupon')['discount'];

        return view('cart')->with([
          'categories'=>$categories,
          'discount' =>  $this->getNumbers()->get('discount'),
          'newTotal' => $this->getNumbers()->get('newTotal'),
          'newTax'=> $this->getNumbers()->get('newTax'),
          'newSubTotal'=>$this->getNumbers()->get('newSubTotal'),
        ]);
    }



    public function store(Request $request)
    {
        //store product information to Cart

        $duplicated = Cart :: instance('default')->search(function($cartItem,$rowId)use($request){
          return $cartItem->id === $request->id;
        });
          if($duplicated->isNotEmpty()){
            return redirect(route('cart.index'))->with('success_message','محصول از قبل در سبد خرید وجود دارد!');
          }else{
            Cart::add($request->id,$request->name,1, $request->price)
            ->associate('App\Product');
            return redirect(route('cart.index'))->with('success_message','محصول با موفقیت به سبد خرید اضافه شد !');
    }
  }



      public function update(Request $request, $id)
      {
          $validator = Validator :: make($request->all(),[
            'quantity'=> 'required|numeric|between : 1,10'
          ]);
          if ($validator->fails()) {
            session()->flash('error_message','تعداد محصول باید بین 1 تا 10 انتخاب شود ');
            return response()->json(['success' => false]);
          }
          Cart::instance('default')->update($id, $request->quantity);
          session()->flash('success_message', 'تعداد با موفقیت به روز رسانی شد');
          return response()->json(['success' => true]);
      }


  public function destroy($id)
  {
      Cart::remove($id);
      return back()->with('success_message','محصول با موفقیت از سبد خرید حذف شد !');
  }

  public function empty(){
  Cart::destroy();
  }

  private function getNumbers(){
      $tax  = config('cart.tax')/100;
      $discount = session()->get('coupon')['discount']??0;
      $newSubTotal = number_format((float)Cart::subtotal())*1000 -$discount;
      $newTax = $newSubTotal * $tax;
      $newTotal = $newSubTotal * (1+$tax);

      return collect([
        'tax'=> $tax,
        'discount'=>$discount,
        'newSubTotal'=>$newSubTotal,
        'newTax'=>$newTax,
        'newTotal'=>$newTotal,
      ]);

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

     public function create()
     {
         //
     }

}
