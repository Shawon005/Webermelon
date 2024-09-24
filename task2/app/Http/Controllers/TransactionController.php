<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trans=DB::table('transactions')->get();
        return view('show',compact('trans'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount'=>'required',
            'funds'=>'required',
            'losses'=>'required',
            'profits'=>'required',
        ]);
        DB::table('transactions')->insert([
            'amount'=>$request->amount,
            'funds'=>$request->funds,
            'losses'=>$request->losses,
            'profits'=>$request->profits,
            'date'=>date('m-Y', strtotime(now())),

        ]);
        return redirect()->route('transaction.index')->with('message' , 'Store was successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trans=DB::table('transactions')->where('date',$id)->get();
        return view('show',compact('trans'));
        // date('d-m-Y', strtotime($user->from_date));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
