<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserAuth;

class UserAuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function create(Request $request){
        $request->validate([
           'name'=>'required',
           'email'=>'required|email',
           'password'=>'required|min:4|max:15',
        ]);
        $user= new UserAuth();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $query=$user->save();
        if($query){
            return back()->with('success',"You have been successfuly registered");
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
    function check(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4|max:15',
        ]);

        $user=UserAuth::where('email','=',$request->email)->first();
        if ($user){
            if (Hash::check($request->password,$user->password)){
                $request->session()->put('LoggedUser',$user->id);
                return redirect('profile');
            }else{
                return back()->with('fail'.'Invail Password');
            }
        }else{
            return back()->with('fail'."No account found for this email");
        }
    }
    function profile(){
        if (session()->has('LoggedUser')){
            $uesr=UserAuth::where('id','=',session('LoggedUser'))->first();
            $data=[
                'LoggedUserInfo'=>$uesr
            ];
        }
        return view('admin.profile',$data);
    }
    function logout(){
        if (session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }

}
