<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use Illuminate\Http\Request;

class payOrderController extends Controller
{
    public function store(PaymentGateway $paymentGateway )
    {

        dd($paymentGateway->charge(2000));
    }
}
