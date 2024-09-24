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
            'date'=>date(now()),

        ]);
        return redirect()->route('transaction.index')->with('message' , 'Store was successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if($id=='jan'){
            $formdata='2024/01/01';
            $todata='2024/01/31';
        }
        else if($id=='fab'){
            $formdata='2024/02/01';
            $todata='2024/02/28';
        }
        else if($id=='mar'){
            $formdata='2024/03/01';
            $todata='2024/03/31';
        }
        else if($id=='apr'){
            $formdata='2024/04/01';
            $todata='2024/04/30';
        }
        else if($id=='may'){
            $formdata='2024/05/01';
            $todata='2024/05/31';
        }
        else if($id=='jun'){
            $formdata='2024/06/01';
            $todata='2024/06/30';
        }
        else if($id=='juy'){
            $formdata='2024/07/01';
            $todata='2024/07/31';
        }
        else if($id=='aug'){
            $formdata='2024/08/01';
            $todata='2024/08/31';
        }
        else if($id=='sep'){
            $formdata='2024/09/01';
            $todata='2024/09/30';
            // dd($formdata);
        }
        else if($id=='oct'){
            $formdata='2024/10/01';
            $todata='2024/10/31';
        }
        else if($id=='nov'){
            $formdata='2024/11/01';
            $todata='2024/11/30';
        }
        else if($id=='dec'){
            $formdata='2024/12/01';
            $todata='2024/12/31';
        }
        $trans=DB::table('transactions')->whereBetween('date',[$formdata,$todata])->get();

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
