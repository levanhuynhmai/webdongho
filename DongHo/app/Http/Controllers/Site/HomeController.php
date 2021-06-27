<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\UserDh;
use App\Models\product;

class HomeController extends Controller
{
    public function dangNhap(){
        return view('account.login');
    }

    
    public function __construct()
    {
        if (Auth::guard('UserDh')->check()) {
            return view()->share('UserDh',Auth::user());
        }
    }
    
    public function postdangNhap(Request $request){
        $this->validate($request,
            [   
                'email'             =>'required',
                'password'          =>'required',
            ]
            ,[
                'email.required'    =>'Ban chua nhap email',
                'password.required' =>'Ban chua nhap mat khau',
            ]);

            $UserDh = [
                'email'=>$request->email,
                'password'=>$request->password
            ];

        if(Auth::guard('UserDh')->attempt($UserDh))
        {
         
            return redirect('/');
            
        }else{
            return redirect('dangnhap')->with('thongbao','Bạn chưa kích hoạt tài khoản');
        }
       
    }
    


    public function dangKy(){
    
        return view('account.register');
    }


    
    public function postdangKy(Request $request){
        $this->validate($request,
            [
                'lastname'              =>'required|max:255',
                'firstname'             =>'required|max:255',
                'email'                 =>'required|max:255',
                'password'              =>'required',
                'passwordagain'         =>'required|same:password',
                
            ]
            ,[
                'lastname.required'     =>'Ban chua nhap ho ',
                'firstname.required'    =>'Ban chua nhap ten',
                'email.required'        =>'Ban chua nhap email',
                'email.unique'          =>'Email da ton tai',
                'password.required'     =>'Ban chua nhap mat khau',
                'passwordagain.required'=>'Ban chua nhap lai mat khau',
                'passwordagain.same'    =>'Mật khẩu không trùng nhau',
                
            ]);
        
        $code=bcrypt(md5(rand(1,99999)));
        $user= new UserDh();
        $user->lastname         =$request->lastname;
        $user->firstname        =$request->firstname;
        $user->email            =$request->email;
        $user->password         =bcrypt($request->password);
        $user->passwordagain    =bcrypt($request->password);

        
        $user->save();

         return redirect('dangky')->with('thongbao','Tạo tài khoản thành công');
    }

        
    

    public function gioHang(){
        return view('cart');
    }

   
    public function blacklink(){
        return view('products.blacklink');
    }
    
}
