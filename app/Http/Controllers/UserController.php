<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Order;
use App\Product;

use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function edit()
    {
        $categories = Category::all();
        return view('customer-profile')->with([
          'user'=>auth()->user(),
          'categories'=>$categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
          'name'=>['required','string','max:255'],
          'email'=>['required','string','email','max:255','unique:users,email,'.auth()->id()],
          'password'=>['sometimes','nullable','string','min:6','confirmed']
        ]);
        $user = auth()->user();
        $input = $request->except('pasword','password confirmation');
         if (! $request->filled('password')){
           //password is empty
           $user->fill($input)->save();
           return back()->with('msg','اطلاعات شما با موفقیت آپدیت شد');
         }
         //password is Not empty
          $user->password = bcrypt($request->password);
          $user->fill($input)->save();
          return back()->with('msg','اطلاعات شما با موفقیت آپدیت شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function orders()
    {
      $orders = User::find(auth()->user()->id)->orders;

      $categories = Category::all();
      return view('customer-orders')->with([
        'user'=>auth()->user(),
        'orders'=>$orders,
        'categories'=>$categories,

      ]);
    }
    public function order_products($id)
    {
      $order = Order::find($id);
      $product_ids = json_decode($order->product_ids);
      $products = array();
      foreach ($product_ids as $product) {
        array_push($products,Product::find($product));
      }
      $categories = Category::all();
      return view('customer-orders-products')->with([
        'user'=>auth()->user(),
        'categories'=>$categories,
        'order_id'=>$id,
        'products'=>$products,
      ]);
    }
}
