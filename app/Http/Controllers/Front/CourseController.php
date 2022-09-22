<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Course\CourseServiceInterface;
use App\Services\Subject\SubjectServiceInterface;

class CourseController extends Controller
{
    private $subjectService;
    private $courseService;

    public function __construct(SubjectServiceInterface $subjectService,
                                CourseServiceInterface  $courseService,)
    {
        $this->subjectService = $subjectService;
        $this->courseService = $courseService;
    }

    public function show($id){
        $subject =$this->subjectService->all();

        $course =$this->courseService->find($id);
        $relatedCourse = $this->courseService->getRelatedCourse($course);
        $limitCourse = $this->courseService->getLimitCourse(4);

        return view('front.menu.course-details', compact('subject', 'relatedCourse', 'course', 'limitCourse'));
    }

    public function index(){
        $subjects = $this->subjectService->getFeaturedSubject();
        $relatedCourse = $this->courseService->getRelatedCourse(9);


        return view('front.menu.course', compact('subjects', 'relatedCourse'));
    }
}
