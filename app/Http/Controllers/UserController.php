<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index(){ }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        //
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:100',
            'password' => 'required|confirmed',
            'first_name' => 'required|max:200',
            'last_name' => 'required|max:200',
            'mobile_no' => 'required|max:200',
        ]);

        if ($validator->fails()) // on validator found any error
        {
            // pass validator object in withErrors method & also withInput it should be null by default
            return redirect(route($this->routeName . '.create'))->withErrors($validator)->withInput();
        }

        $user=User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mobile_no' => $request->mobile_no,
            'designation' => $request->designation,
            'address' => $request->address,
        ]);


        return redirect(route($this->routeName . '.create',$user->id))->with('success', $this->modelName . ' created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:100',
            'password' => 'confirmed',
            'first_name' => 'required|max:200',
            'last_name' => 'required|max:200',
            'mobile_no' => 'required|max:200',
        ]);

        $user = User::find($id);

        if ($validator->fails()) // on validator found any error
        {
            // pass validator object in withErrors method & also withInput it should be null by default
            return redirect(route($this->routeName . '.edit', $user->id))->withErrors($validator)->withInput();
        }

        $user->update([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mobile_no' => $request->mobile_no,
            'designation' => $request->designation,
            'address' => $request->address,
        ]);


        return redirect(route($this->routeName . '.edit', $user->id))->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)
//    {
//        //
//
//    }
}
