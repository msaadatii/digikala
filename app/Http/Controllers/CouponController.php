<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use Cart;
class CouponController extends Controller
{


    public function store(Request $request)
    {
        //
        $coupon = Coupon::where('code',$request->coupon_code)->first();
        if(!$coupon){
          return redirect()->route('cart.index')->with('error_message','کد تخفیف نا معتبر است ' );

        }
        session()->put('coupon',[
            'code'=>$coupon->code,
            'discount'=>$coupon->discount(Cart::subtotal()),
        ]);
        return redirect()->route('cart.index')->with('success_message',' کد تخفیف اعمال شد  ' );
    }

    public function destroy()
    {
        //
        session()->forget('coupon');
        return redirect()->route('cart.index')->with('success_message',' کد تخفیف حذف شد   ' );
    }
}
