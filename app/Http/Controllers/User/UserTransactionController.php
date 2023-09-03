<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransactionRequest;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserTransactionController extends Controller
{
    public function store(StoreTransactionRequest $request)
    {

        try {

            DB::beginTransaction();
            $account = Account::query()->orderBy('id','desc')->where('currency', 'like', $request->currency)->whereHas('users', function ($q) {
                $q->where('user_id', auth()->id());
            })->first();
            $account = Transaction::query()->create([
                'amount' => $request->amount,
                'type' => $request->type,
                'account_id' => $account->id
            ]);
            DB::commit();
            return response()->json(["status" => 201, 'message' => 'تم اضافة   بنجاح', 'redirect_url' => route('dashboard')]);

        } catch (\Exception $ex) {
            DB::rollBack();
            return response()->json(["status" => 422, 'message' => 'لم يتم اضافة   بنجاح']);
        }
    }
}
