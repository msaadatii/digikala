<?php

namespace App\Http\Controllers;
use Cart;

use Illuminate\Http\Request;

class SaveForLaterController extends Controller
{

    public function destroy($id)
    {
        Cart::instance('saveForLater')->remove($id);
          return redirect(route('cart.index'))->with('success_message','محصول با موفقیت از لیست خرید بعدی حذف شد !');
    }

    public function saveForLater($id)
    {
      //delete from default Cart
      //insert  to saveForLater instance Cart
      $isExist = Cart::instance('default')->search(function($cartItem,$rowId)use($id){
        return $rowId === $id;
      });
      if($isExist->isNotEmpty()){
        $item = Cart::get($id);
        Cart::instance('saveForLater')->add($item->id,$item->name,1, $item->price)
        ->associate('App\Product');
        //remove from default Cart
        Cart::instance('default')->remove($id);
        return redirect(route('cart.index'))->with('success_message','محصول با موفقیت در لیست خرید بعدی اضافه شد !');
        }
      }


      public function switchFromSaveToCart($id) {
        $item = Cart::instance('saveForLater')->get($id);
        Cart::instance('saveForLater')->remove($id);
        $duplicated = Cart :: instance('default')->search(function($cartItem,$rowId)use($id){
          return $rowId === $id;
        });
          if($duplicated->isNotEmpty()){
            return redirect(route('cart.index'))->with('success_message','محصول از قبل در سبد خرید وجود دارد!');
          }else{
            Cart::instance('default')->add($item->id,$item->name,1, $item->price)
            ->associate('App\Product');
              return redirect(route('cart.index'))->with('success_message','محصول با موفقیت به سبد خرید اضافه شد!');
          }

      }

    }
