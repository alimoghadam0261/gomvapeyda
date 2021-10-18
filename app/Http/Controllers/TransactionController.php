<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Services\PortService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\formads;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function pay()
    {
        $formads = formads::find($_GET['formads_id']);

//dd($formads);

        switch ($formads->price) {
            case 'طلایی':
                $price = 130000;
                break;
            case 'نقره ای':
                $price = 80000;
                break;
            case 'برنزی':
                $price = 50000;
                break;
        }
        $transaction = new Transaction();
        $transaction->amount = 1000;
        $transaction->formads_id = $_GET['formads_id'];
        $transaction->user_id=Auth::user()->id;
        $transaction->save();
        $token="f74237c8b021a8a0f46eedc7e375c0aa592161fd7abbd41c67445da2097755a4";
        $args = [
            "amount" => 1000,
            "payerIdentity" => Auth::user()->id,
    "payerName" => Auth::user()->email,
    "description" => "توضیحات",
    "returnUrl" => "localhost:8000/transactions/verify",
    "clientRefId" => $transaction->id
];

$payment = new \PayPing\Payment($token);

try {
    $payment->pay($args);
} catch (Exception $e) {
    var_dump($e->getMessage());
}
//echo $payment->getPayUrl();

header('Location: ' . $payment->getPayUrl());

/*
        $transaction = new Transaction();
        $transaction->amount = $price;
        $transaction->formads_id = $_GET['formads_id'];
        $transaction->save();
//        dd($price);
//        dd($formads);
        $authorization = "Authorization: Bearer f74237c8b021a8a0f46eedc7e375c0aa592161fd7abbd41c67445da2097755a4";
//        dd($authorization);
        $curl_url = 'https://api.payping.ir/v1/pay';
        $data['amount'] = $price;
        $data['description'] = 'پرداخت هزینه آگهی گمشده';
        $data['ReturnUrl'] = 'https://gomvapeyda.ir' . '/transactions/verify';
        $data['clientRefId'] = $formads->id;
        ob_start();
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $curl_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        $server_output = json_decode( curl_exec($ch) );

//            dd($server_output);
        if(isset($server_output->code))
        {
            return redirect('https://api.payping.ir/v1/pay/gotoipg/'.$server_output->code);
        }
        else
        {

            abort('500');


//            ------------------------------------------------------------------------
//            abort('503');
//        return'خطایی در ارتباط پیش آمده لطفا دوباره تلاش کنید و اگر خطایی به وجود آمد بعد از چند دقیقه عملیات را انجام بدید(با تشکر مدیریت مالی مجموعه)';
        }
//        curl_close($ch);

//        return $server_output;
*/
}


    public function verify()
    {
        $transaction = Transaction::find($_GET['clientRefId']);
        $token = "f74237c8b021a8a0f46eedc7e375c0aa592161fd7abbd41c67445da2097755a4";

        $payment = new \PayPing\Payment($token);

        try {
            if($payment->verify($_GET['refid'], $transaction->price)){
                $transaction->verified=1;
                $transaction->save();
               return redirect()->route('transaction.done');
            }else{
                return redirect()->route('transaction.fail');
            }
        } catch (Exception $e) {
//            echo $e->getMessage();
            return redirect()->route('transaction.fail');
        }


        /*
        $formads = formads::find($_GET['clientrefid']);
        $transaction = Transaction::where('formads_id', $formads->id)->first();

        $data['refid'] = $_GET['refid'];
        $data['amount'] = $transaction->amount;

        $curl_url = 'https://api.payping.io/v1/pay/verify';
        $authorization = "Authorization: Bearer f74237c8b021a8a0f46eedc7e375c0aa592161fd7abbd41c67445da2097755a4";

        $method = "POST";
        $portService = new PortService();
        $response = $portService->Curl($curl_url, $method, $data, $authorization);
        $refid = $_GET['refid'];
        $clientrefid = $_GET['clientrefid'];
        $thearray =[$refid,$clientrefid];
//        dd($transaction);
//        place if of successfull massage
//        $transaction->paid_at;
        $transaction->refid =$refid;
        $transaction->paid_at = Carbon::now();
        $transaction->save();
        return redirect ('/transaction/done/' . $transaction->id);

//        ob_start();
//        $ch = curl_init();
//
//        curl_setopt($ch, CURLOPT_URL, $curl_url);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
//
//        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
//
//        $output = json_decode( curl_exec($ch) );
//
//        $response = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//        curl_close($ch);

        if($response == 200) {
            $transaction->paid_at;
            $transaction->refid = $data['refid'];
            $transaction->paid_at = Carbon::now();
            $transaction->save();
            return redirect ('/transaction/done' . $transaction->id);
        }
        else
        {
            echo 'error';
        }
        */
    }



//    public function done(Transaction $transaction)
//    {
////        $transaction =Transaction::where('id', $transaction)->first();
//        dd($transaction);
////        return view('transaction.done', compact('transaction'));
//          return view('test done', compact('transaction'));
//    }

public function done(){

//    $transaction =Transaction::where('id','=', $i)->where('verified','=',1)->first();
//     return view('formads', compact('transaction'));

    return view('done');
}

    public function fail()
    {
        return view('fail');
}


//    page admin
    public function adminpage()
    {
        $transaction=Transaction::all();
        $count=Transaction::all()->count();
        $user=User::all();
        $formads=formads::all();

        return view('admin.transaction.index',compact('transaction','count','user','formads'));
}
    public function profilepage()
    {
        $transaction=Transaction::all();
        $count=Transaction::all()->count();

        return view('formads',compact('transaction','count'));
    }
}
