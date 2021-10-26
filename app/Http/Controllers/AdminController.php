<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        
        return view('admin.dashboard');       
    }

    
    public function auth(Request $request)
    {
        $email=$request->post('email');
        $password=$request->post('password');

        // $result=Admin::where(['email'=>$email, 'password'=>$password])->get();
        $result=Admin::where(['email'=>$email])->first();

        if($result){

            if(app('currentTenant')->id != $result->tenant_id){
                $request->session()->flash('error','Please Enter Valid Email Address');
                return redirect('admin/login');
            }

            if(Hash::check($password,$result->password)){
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID',$result->id);
                $request->session()->put('TENANT_ID',$result->tenant_id);
                return redirect('admin');
            }else{
                $request->session()->flash('error','Please Enter Correct Password');
                return redirect('admin/login');
            }
            
        }else{
            $request->session()->flash('error','Please Enter Valid Email Address');
            return redirect('admin/login');
        }        
        
    }

    public function login(Request $request)
    {
        $tenantInformations=app('currentTenant');

        if($request->session()->has('ADMIN_LOGIN')){
            return redirect('admin');
        }

        return view('admin.auth')->with('tenantInformations', $tenantInformations);
;

    }

    
}
