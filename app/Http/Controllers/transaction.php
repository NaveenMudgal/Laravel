<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\account;

use Illuminate\Support\Facades\Input;

use DB;

class transaction extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function index_acc()
    {
        return view("income");
    }
    public function store_acc(Request $request)
    {
     
        $store_obj = new account;
        $x = \Auth::user()->id;
        $sel = Input::get("dest_sav");

        $oldVal = account::where('id',$x)->first()->$sel;
        $newVal = Input::get("update");
        if($newVal<=0)
        {
            $message1 = "Invalid value entered";
            echo "<script type='text/javascript'>alert('$message1');</script>"; 
            return view('income');
        }

        else
        {
        $total = $oldVal + $newVal;
        DB::table('accounts')
       ->where('id',$x)
       ->update([$sel => $total ]);
       return redirect()->route('accounts'); 
        }
    }

    public function expend_acc(Request $request)
    {
     
        $exp_obj = new account;
        $x = \Auth::user()->id;
        $sel = Input::get("gateway");

        $oldVal = account::where('id',$x)->first()->$sel;
        $newVal = Input::get("update");
        if ($newVal>$oldVal)
          {
            $message = "Insufficient balance";
            echo "<script type='text/javascript'>alert('$message');</script>"; 
            return view('expense');
          }
          elseif ($newVal<0) {
              $message7 = "Negative value not allowed";
            echo "<script type='text/javascript'>alert('$message7');</script>"; 
            return view('expense');
          }
          else
          {
        $total = $oldVal - $newVal;
        DB::table('accounts')
       ->where('id',$x)
       ->update([$sel => $total ]);
       return redirect()->route('accounts'); 
        }
    }

}
 