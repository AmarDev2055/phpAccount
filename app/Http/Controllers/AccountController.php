<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Throwable;


class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $accounts = Account::all();
        return view('accounts.index')->with('accounts', $accounts);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            $input = $request->all();
            Account::create($input);
            return redirect()->route('accounts.index')->with('success', 'Account Added...!');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->route('accounts.create')->with('error', 'Exception occured');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $accounts = Account::find($id);
        return view('accounts.show')->with('accounts', $accounts);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $accounts = Account::find($id);
        return view('accounts.edit')->with('accounts', $accounts);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $accounts = Account::find($id);
        $input = $request->all();
        $accounts->update($input);
        return redirect('accounts')->with('flash_message', 'Accounts Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Account::destroy($id);
        return redirect('accounts')->with('flash_message', 'Account deleted!');
    }
}