<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use illuminate\html;
use App\Http\Requests\FormRequest;
use View;
use Session;

use App\Userss;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'name' => 'NgocNH',
            'age' => '24'
        );
        return View::make('users.index',$data);
    }

    /**
     * List users
     */
    public function listUser(){
        $aryUserData = $this->objUser->getListUsers();
        return View::make('users.show')->with('aryUsers',$aryUserData);
    }

    public function listAllUser(){
        return View::make('users.listusers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRequest $request)
    {
        $aryData = $request->all();
        unset($aryData['_token']);

        $user = new Userss();
        $user->create($aryData);

        Session::flash('message_success', 'Save successfully');
        return Redirect('show');

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
        $user = Userss::find($id)->toArray();

        return View::make('users.create')->with('userData',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormRequest $request, $id)
    {
        $aryData = $request->all();
        echo '<pre>';
        echo '<meta charset="utf-8">';
        print_r($aryData);
        echo '</pre>';
        die('xxx');
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
}
