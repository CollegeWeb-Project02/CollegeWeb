<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Services\Course\CourseServiceInterface;
use App\Services\Register\RegisterServiceInterface;
use App\Services\Subject\SubjectServiceInterface;
use Illuminate\Http\Request;
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
        $this->registerService->create($request->all());

        return redirect()->back();
    }
}
