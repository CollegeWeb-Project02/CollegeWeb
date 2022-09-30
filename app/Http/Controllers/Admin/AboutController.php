<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\About\AboutServiceInterface;
use App\Services\Contact\ContactServiceInterface;
use App\Utilities\Common;
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
        $discountMails = $this->aboutService->all();

        return view('dashboard.emailBox.discountMail', compact('discountMails'));
    }

    public function destroy(User $about)
    {
        $this->aboutService->delete($about->id);

        // Xóa file
//        $file_name = $register->avatar;
//        if ($file_name != '') {
//            unlink('dashboard/img/' . $file_name);
//        }

        return redirect('admin/mail/discount');
    }
}
