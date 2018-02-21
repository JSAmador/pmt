<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // Display the form

    public function showForm() {
        return "Hello";
    }

    public function checkout(Request $request) {



        $input = $request->all();
        $price = $input['price'];
        $invoice_id = $input['invoice'];

        $public_key = "tk_fad3ed93fc2b5b00ba3cfd3d";

        $currency = "EUR";
        $ok_url = '/paymentSuccess';
        $nok_url = '/paymentFail';
        $secret_key = "665a06577e96ec9b";
        $firma = $secret_key . $public_key . $invoice_id . $price . $currency . $ok_url . $nok_url;
        $signature = hash('sha512', $firma);



        return view('test', compact('price', 'invoice_id', 'signature'));

    }

}
