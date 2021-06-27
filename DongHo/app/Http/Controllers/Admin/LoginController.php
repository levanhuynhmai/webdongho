<?php
/**
 * @author: nguyentinh
 * @create: 06/20/20, 8:21 PM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plugin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Services\ConfigService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    public function getAdminLogin(Request $request)
    {
        if($request -> isMethod('post')){
            $email = $request->input('email');
            $password = $request->input('password');
            $validator = $this->validator($request->all());
            
            if ($valodator -> fails()){
                return Redirect::to('/login')->withInput()->withErrors($validator);
            }
            if (Auth::attempt(['email' => $email, 'password' => $password, 'active'=>1]))
            {
                return Redirect::to('/intended/add');
            } else {
                return Redirect::to('/login')->withInput()->withErrors("email hoac mat khau ko dung");
            }
            return back()->withInput();
        }
        return view('admin/login.index');
    }
    // public function postAdminLogin()
    // {
    //     return view('admin/login.index');
    // }
    public function getHome(){
        return view('admin.index');
    }
}