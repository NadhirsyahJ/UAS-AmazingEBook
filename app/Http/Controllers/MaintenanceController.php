<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('accountmaintanance', [
            'title' => 'Amazing E-Book | Maintenance',
            'listAccount' => User::all()
        ]);
    }

    public function toRoleUpdates($id){
        $user = User::where('account_id', $id)->first();
        return view('roleupdates', [
            'title' => 'Amazing E-Book | Update Role',
            'user' => $user
        ]);
    } 

    public function requestDelete(Request $request){
        $id_account = $request->item;
        User::where('account_id', $id_account)->delete();
        return back();
    }

    public function requestRoleUpdates(Request $request){
        $id_account = $request->id_account;
        $id_role = $request->id_role;

        $account = User::where('account_id', $id_account)->first();
        $account->role_id = $id_role;

        $account->save();

        return redirect('/maintenance-account');
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
}
