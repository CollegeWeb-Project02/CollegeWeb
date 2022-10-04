<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Classes\ClassesServiceInterface;
use App\Services\Course\CourseServiceInterface;
use App\Services\Register\RegisterServiceInterface;
use App\Utilities\Common;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use function Symfony\Component\Translation\t;

class RegisterController extends Controller
{
    private $registerService;
    private $courseService;
    private $classesService;

    public function __construct(RegisterServiceInterface $registerService,
                                CourseServiceInterface $courseService,
                                ClassesServiceInterface $classesService)
    {
        $this->registerService = $registerService;
        $this->courseService = $courseService;
        $this->classesService = $classesService;
    }

    public function show($id){

        $register = $this->registerService->find($id);

        return view('dashboard.studentRegister.studentRegister', compact('register'));
    }

    public function index(){

        $registers = DB::table('register')->where('status', 0)->get();

        return view('dashboard.studentRegister.studentRegister', compact('registers'));
    }

    public function edit($id){
        $register = $this->registerService->find($id);

        $classes = $this->classesService->all()->where('course_id', $register->course_id);

        return view('dashboard.studentRegister.editStatus', compact('register', 'classes'));
    }

    public function update(Request $request, $id){

        $register = $this->registerService->find($id);

        $data = $request->all();

        // xu ly upload anh
        if ($request->hasFile('image')) {
            //Thêm file mới:
            $data['avatar'] = Common::uploadFile($request->file('image'),'dashboard/img');

            // Xóa file cũ:
            $file_name_old = $request->get('image_old');
            if ($file_name_old != '') {
                unlink('dashboard/img' . $file_name_old);
            }
        }

        $this->registerService->update($data,$register->id);

        return redirect('/admin/register/');
    }

    public function create()
    {
        return view('dashboard.studentRegister.editStatus');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        /*var_dump($data);*/

        // Xử lý file:
        if ($request->hasFile('image')) {
            $data['avatar'] = Common::uploadFile($request->file('image'),'dashboard/img');
        }

        $register = $this->registerService->create($data);
        return redirect('/admin/register/' . $register->id);
    }

    public function destroy(User $register)
    {
        $this->registerService->delete($register->id);

        // Xóa file
//        $file_name = $register->avatar;
//        if ($file_name != '') {
//            unlink('dashboard/img/' . $file_name);
//        }

        return redirect('admin/register');
    }

    public function updateStatus($id, Request $request){

        $data = $request->all();

        $data['status'] = $request->get('status');

        $this->registerService->find($id)->update($data);

        $register = $this->registerService->find($id);

        $this->sendNoticeEmail($register);

        return redirect('admin/register');
    }

    public function checkRegister(){
        $checkRegisters = DB::table('register')->where('status', 1)->get();

        return view('dashboard.studentRegister.checkRegister', compact('checkRegisters'));
    }

    private function sendNoticeEmail($register)
    {
        $email_to = $register->email;

        Mail::send('front.sendmail.noticeEmail',
            compact('register'),
            function ($message) use ($email_to){
                $message->from('hex.4b68616e68@gmail.com', 'E Course');
                $message->to($email_to, $email_to);
                $message->subject('Confirm Notification');
            });
    }
}
