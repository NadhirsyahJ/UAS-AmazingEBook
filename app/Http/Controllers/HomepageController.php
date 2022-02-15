<?php

namespace App\Http\Controllers;

use App\Models\EBook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class HomepageController extends Controller
{
    /* index */
    public function index()
    {
        return view('homepage', [
            'title' => 'Amazing E-Book | Home',
            'listEbook' => EBook::all()
        ]);
    }

    public function toRegisterPage(){
        return view('registerpage', [
            'title' => 'Amazing E-Book | Register'
        ]);
    }

    public function toLoginPage(){
        return view('loginpage', [
            'title' => 'Amazing E-Book | Login'
        ]);
    }

    /**/
    public function create()
    {
        //
    }

    /**/
    public function requestSignUp(Request $request)
    {
        $validated_data = $request->validate([
            'first_name' => 'required|alpha_num|max:25',
            'middle_name' => 'max:25',
            'last_name' => 'required|alpha_num|max:25',
            'email' => 'required|email:dns',
            'password' => ['required', Password::min(8)->numbers()],
            'role_id' => 'required|in:1,2',
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


        $current = User::orderBy('account_id', 'desc')->first();
        $validated_data['account_id'] = (int) $current['account_id'] + 1;

        User::create($validated_data);

        if($request->file('display_picture_link')){
            $current = User::orderBy('account_id', 'desc')->first();
            $current['display_picture_link'] = 'storage/' . $request->file('display_picture_link')->store('images/profile');
        }

        $current->save();

        $request->session()->flash('signup-success', 'Your registration is Successful! Please Login Again!');
        return redirect('/login');
    }

    public function requestLogin(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('login-fail', 'Sorry, Your email or password is incorrect');
    }

    public function logout(Request $request){
        Auth::logout();
        //reset session
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        $message = 'Log Out Success!';
        return view('displayresultpage', [
            'title' => 'Amazing E-Book | Cart',
            'resulttitle' => $message
        ]);
    }


    /**/
    public function show($id)
    {
        //
    }

    /**/
    public function edit($id)
    {
        //
    }

    /**/
    public function update(Request $request, $id)
    {
        //
    }

    /**/
    public function destroy($id)
    {
        //
    }
}
