<?php

namespace App\Http\Controllers;

use App\Models\EBook;
use App\Models\Order;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**/
    public function showEBookDetail($id)
    {
        $id_ebook = EBook::where('ebook_id', $id)->first();
        return view('bookdetailpage', [
            'title' => 'Amazing E-Book | Detail',
            'bookdetail' => $id_ebook
        ]);       
    }

    public function requestRent(Request $request){
        $id_ebook = $request->item;
        $cart = new Order();

        $cart->account_id = auth()->user()->account_id;
        $cart->ebook_id = $id_ebook;
        $cart->order_date = now();

        $cart->save();

        return back()->with('success-rent', 'Your book is successfully rented!');
    }
}
