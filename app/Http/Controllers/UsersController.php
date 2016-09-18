<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\account;
use App\expense;
use App\incom;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $accs = account::all();
        // return view('account.index', ['accs' => $accs]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('users.create'); 
         // return view ('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, User::$create_validation_rules);
        $data = $request->only('name', 'email', 'password');
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        $acc = account::create($data);
        $exp = expense::create($data);
        $inc = incom::create($data);

        if($user){
          \Auth::login($user);
          return redirect()->route('wallet_main');
        }

        return back()->withInput();
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

    public function home()
    {
        return view('users.home');
    }

    public function wallet_main()
    {
        return view('wallet_main');
    }

    public function accounts()
    {
        return view('accounts');
    }

    public function income()
    {
        return view('income');
    }

    public function expense()
    {
        return view('expense');
    }
}
