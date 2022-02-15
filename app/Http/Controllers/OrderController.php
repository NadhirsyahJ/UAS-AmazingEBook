<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function toCartPage(){
        $order = Order::where('account_id', auth()->user()->account_id)->get();
        return view('cartpage', [
            'title' => 'Amazing E-Book | Cart',
            'listEbook' => $order
        ]);       
    }
    
    public function requestDelete(Request $request){
        $id_order = $request->item;
        Order::where('order_id', $id_order)->delete();
        return back();
    }

    public function proceedOrder(){
        // delete all cart data
        $message = 'Success!';

        Order::where('account_id', auth()->user()->account_id)->delete();
        return view('displayresultpage', [
            'title' => 'Amazing E-Book | Cart',
            'resulttitle' => $message
        ]);
    }
}
