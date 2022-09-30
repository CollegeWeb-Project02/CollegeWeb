<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Services\Course\CourseServiceInterface;
use App\Services\Register\RegisterServiceInterface;
use App\Services\Subject\SubjectServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CourseController extends Controller
{
    private $subjectService;
    private $courseService;
    private $registerService;

    public function __construct(SubjectServiceInterface $subjectService,
                                CourseServiceInterface  $courseService,
                                RegisterServiceInterface $registerService)
    {
        $this->registerService = $registerService;
        $this->subjectService = $subjectService;
        $this->courseService = $courseService;
    }

    public function show($id){
        $subject =$this->subjectService->all();

        $course = $this->courseService->find($id);
        $relatedCourse = $this->courseService->getRelatedCourse($course);
        $limitCourse = $this->courseService->getLimitCourse(4);

        return view('front.menu.course-details', compact('subject', 'relatedCourse', 'course', 'limitCourse'));
    }

    public function index(){
        $subjects = $this->subjectService->getFeaturedSubject();
        $relatedCourse = $this->courseService->getRelatedCourse(9);


        return view('front.menu.course', compact('subjects', 'relatedCourse'));
    }

    public function subject($subjectId){
        $courses = $this->subjectService->find($subjectId)->course;

        $subjects = $this->subjectService->all();
        return view('front.menu.subject-details', compact('subjects', 'courses'));
    }

    public function addRegister(Request $request){
        $register = $this->registerService->create($request->all());

        $this->sendEmail($register);

        return redirect()->back()->with('notification', 'Success! You was registered successful. Please check your email');
    }

    private function sendEmail($register)
    {
        $email_to = $register->email;

        Mail::send('front.sendmail.email',
            compact('register'),
            function ($message) use ($email_to){
                $message->from('hex.4b68616e68@gmail.com', 'E Course');
                $message->to($email_to, $email_to);
                $message->subject('Confirm Notification');
            });
    }
}
