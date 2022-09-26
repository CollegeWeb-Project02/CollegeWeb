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

    public function checkLoginStudent(Request $request)
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

    public function checkLoginTeacher(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => Constant::user_level_teacher,
        ];

        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember)) {
//            return redirect('');
            return redirect()->intended('admin/teacherview');
        } else {
            return back()->with('notification', 'ERROR: Email or password is wrong!');
        }
    }

    public function checkLoginHost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => Constant::user_level_host,
        ];

        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember)) {
//            return redirect('');
            return redirect()->intended('admin/index');
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
