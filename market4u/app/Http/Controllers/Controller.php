<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Transactions;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function makeTransaction(Request $request)
    {
        $transaction = new Transactions();
        $transaction->client = $request->client;
        $transaction->date = $request->date;
        $transaction->value = $request->value;
        $transaction->location = $request->location;
        $transaction->products = $request->products;

        if ($transaction->save()) {
            return response()->json(
                [
                    'message' => 'Transaction record created',
                ],
                201
            );
        } else {
            return response()->json(
                [
                    'message' => 'An error has occurred',
                ],
                400
            );
        }
    }

    public function getTransaction()
    {
        return Transactions::all()->toJson();
    }
}
