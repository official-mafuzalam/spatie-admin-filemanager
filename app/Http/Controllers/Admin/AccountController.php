<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccountCost;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AccountDeposit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AccountController extends Controller
{
    public function index()
    {
        $deposits = AccountDeposit::latest()
            ->limit(5)
            ->get();

        $costs = AccountCost::latest()
            ->limit(5)
            ->get();

        $total_deposit = AccountDeposit::sum('amount');

        $total_cost = AccountCost::sum('amount');

        $total_savings = $total_deposit - $total_cost;

        return view('admin.account.index', compact('total_deposit', 'deposits', 'total_cost', 'costs','total_savings'));
    }

    public function deposit_allPage(Request $request)
    {
        $users = User::all();

        $user_name = isset($request['user_name']) ? $request['user_name'] : "";

        if ($user_name != "") {

            $deposits = AccountDeposit::where('user_name', $user_name)
                ->orderBy('created_at', 'desc')->get();
            $total_deposit = $deposits->sum('amount');

        } else {

            $deposits = AccountDeposit::orderBy('created_at', 'desc')->get();
            $total_deposit = $deposits->sum('amount');

        }

        return view('admin.account.deposit_index', compact('total_deposit', 'deposits', 'users'));
    }

    public function depositPage()
    {
        $users = User::all();

        return view('admin.account.deposit_create', compact('users'));
    }

    public function deposit(Request $request)
    {
        $user = Auth::user();

        $uniqueId = Str::random(15);

        $deposit = new AccountDeposit;

        $deposit->tran_id = $uniqueId;
        $deposit->user_name = $request['user_name'];
        $deposit->deposit_date = $request['deposit_date'];
        $deposit->amount = $request['amount'];
        $deposit->comment = $request['comment'];
        $deposit->inserter_name = $user->name;
        $deposit->inserter_email = $user->email;
        $deposit->save();

        return to_route('admin.accountPage')->with('success', 'Deposit added successfully.');

        // echo "<pre>";
        // print_r($uniqueId);
        // echo "</pre>";

    }

    public function cost_allPage()
    {
        $costs = AccountCost::orderBy('created_at', 'desc')->get();

        $total_cost = $costs->sum('amount');

        return view('admin.account.cost_index', compact('costs', 'total_cost'));
    }

    public function costPage()
    {
        return view('admin.account.cost_create');
    }

    public function cost(Request $request)
    {
        $user = Auth::user();

        $cost = new AccountCost;

        $cost->cost_date = $request['cost_date'];
        $cost->cost_name = $request['cost_name'];
        $cost->amount = $request['amount'];
        $cost->reference = $request['reference'];
        $cost->comment = $request['comment'];
        $cost->inserter_name = $user->name;
        $cost->inserter_email = $user->email;
        $cost->save();

        return to_route('admin.accountPage')->with('success', 'Cost added successfully.');

    }


}