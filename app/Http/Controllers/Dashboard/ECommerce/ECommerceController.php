<?php

namespace App\Http\Controllers\Dashboard\ECommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Bank\Entities\Invoice;
use Modules\Bank\Entities\InvoicePayment;
use Modules\Bank\Entities\Transaction;
use Modules\Store\Entities\Order;

class ECommerceController extends Controller
{
    public function orders($username)
    {
        $orders = Order::get();

        $lista = [];
        foreach ($orders as $order) {
            if ($order !== null) {
                $user = User::find($order->store_customer_id);
                $membership = Membership::find($user->id);
                $person = Person::find($membership->person_id);

                $invoice = Invoice::where('order_id', $order->id)->first();
                $invoice_payment = InvoicePayment::where('invoice_id', $invoice->id)->first();

                $transaction = Transaction::find($invoice_payment->transaction_id);
                dd($invoice_payment);

                $pedido['id'] = $order->id;
                $pedido['username'] = $user->username;
                $pedido['name'] = $person->firstname;
                $pedido['total'] = $order->amount;
                $pedido['tipo_de_pagamento'] = config('bank.invoice.payment.');
                $pedido['faturado'] = null;
                $pedido['status'] = 0;
                $pedido['aprovar'] = null;
                $pedido['aprovar_s_b'] = null;
                $pedido['data_aprovacao'] = $$order->create_at;
                $lista['data_aprovacao'] = $$order->create_at;
            }
        }

        $data = $pedido;
        $data += ['username', $user->username];
        return view('app.ecommerce.orders', $data);
    }
}
