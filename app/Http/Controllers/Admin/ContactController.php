<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\About\AboutServiceInterface;
use App\Services\Contact\ContactServiceInterface;
use App\Utilities\Common;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        $contactMails = $this->contactService->all();

        return view('dashboard.emailBox.contactMail', compact('contactMails'));
    }

    public function getContactMail(){
        $contactMails = $this->contactService->all();

        return view(('dashboard.emailBox.contactMail'), compact('contactMails'));
    }

    public function destroy(User $contact)
    {
        $this->contactService->delete($contact->id);

        // Xóa file
//        $file_name = $register->avatar;
//        if ($file_name != '') {
//            unlink('dashboard/img/' . $file_name);
//        }

        return redirect('admin/mail/');
    }
}
