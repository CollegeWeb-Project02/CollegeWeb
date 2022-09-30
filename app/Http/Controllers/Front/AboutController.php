<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\About\AboutServiceInterface;
use App\Services\Contact\ContactServiceInterface;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private $aboutService;
    private $contactService;

    public function __construct(AboutServiceInterface $aboutService,
                                ContactServiceInterface $contactService)
    {
        $this->aboutService = $aboutService;
        $this->contactService = $contactService;
    }

    public function index(){
        return view('front.menu.about');
    }

    public function addDiscount(Request $request){
        $this->aboutService->create($request->all());

        return redirect()->back();
    }

    public function addContact(Request $request){
        $this->contactService->create($request->all());

        return redirect()->back();
    }

    public function getContactMail(){
        $contactMails = $this->contactService->all();

        return view('dashboard.emailBox.contactMail', compact('contactMails'));
    }

    public function getDiscountMail(){
        $discountMails = $this->aboutService->all();

        return view(('dashboard.emailBox.discountMail'), compact('discountMails'));
    }
}
