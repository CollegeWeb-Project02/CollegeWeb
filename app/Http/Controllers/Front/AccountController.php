<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Register\RegisterServiceInterface;
use App\Services\User\UserServiceInterface;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private $userService;
    private $registerService;

    public function __construct(UserServiceInterface $userService, RegisterServiceInterface $registerService)
    {
        $this->userService = $userService;
        $this->registerService = $registerService;
    }

    public function login()
    {
        return view('front.menu.login');
    }

    public function checkLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => 1, //Tải khoản cấp độ khách hàng bình thường
        ];

        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember)) {
//            return redirect('');
            return redirect()->intended('');
        } else {
            return back()->with('notification', 'ERROR: Email or password is wrong!');
        }
    }

    public function logout()
    {
        Auth::logout();

        return back();
    }
}
