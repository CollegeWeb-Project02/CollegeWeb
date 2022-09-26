<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\About\AboutServiceInterface;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private $aboutService;

    public function __construct(AboutServiceInterface $aboutService)
    {
        $this->aboutService = $aboutService;
    }

    public function index(){
        return view('front.menu.about');
    }

    public function addDiscount(Request $request){
        $this->aboutService->create($request->all());

        return redirect()->back();
    }
}
