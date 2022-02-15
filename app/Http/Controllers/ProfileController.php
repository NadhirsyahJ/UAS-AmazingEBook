<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userprofilepage', [
            'title' => 'Amazing E-Book | Home'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfileData(Request $request)
    {
        // dd($request->all());
        $validated_data = $request->validate([
            'first_name' => 'required|alpha_num|max:25',
            'middle_name' => 'max:25',
            'last_name' => 'required|alpha_num|max:25',
            'email' => 'required|email:dns',
            'password' => ['required', Password::min(8)->numbers()],
            'gender_id' => 'required',
            'display_picture_link' => 'required|image'
        ]);

        if($request->hasFile('image')){
            $request->validate([
                'display_picture_link' => 'required|image'
            ]);
        }

        $validated_data['password'] = bcrypt($validated_data['password']);
        if($validated_data['gender_id'] === 'male'){
            $validated_data['gender_id'] = 1;
        } else {
            $validated_data['gender_id'] = 2;
        }

        $user = User::where('account_id', auth()->user()->account_id)->first();
        $user->first_name = $validated_data['first_name'];
        $user->middle_name = $validated_data['middle_name'];
        $user->last_name = $validated_data['last_name'];
        $user->email = $validated_data['email'];
        $user->password = $validated_data['password'];
        $user->gender_id = $validated_data['gender_id'];
        $user['display_picture_link'] = 'storage/' . $request->file('display_picture_link')->store('images/profile');

        $user->save();

        $message = 'Saved!';
        return view('displayresultpage', [
            'title' => 'Amazing E-Book | Profile',
            'resulttitle' => $message
        ]);
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
