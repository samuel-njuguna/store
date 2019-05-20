<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MpesaController extends Controller
{
    public function confirm(Request $request)
    {
        $data = $request->all();
        $string = json_encode($data);

        Storage::put('mpesa.txt',$string);

        $mpesa = json_decode($string);

        $merchant_id = $mpesa->Body->stkCallback->MerchantRequestID;
        $result_code = $mpesa->Body->stkCallback->ResultCode;

        $payment = Payment::where('merchant_id',$merchant_id)->first();

        if ($payment and $result_code==0){
            $payment->status=true;
            $payment->save();
            // can put sms for success here
        }

    }
}
