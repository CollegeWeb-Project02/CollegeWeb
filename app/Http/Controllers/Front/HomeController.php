<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogServiceInterface;
use App\Services\Course\CourseServiceInterface;
use App\Services\Comment\CommentServiceInterface;
use App\Services\Subject\SubjectServiceInterface;
use App\Services\Teacher\TeacherServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $courseService;
    private $blogService;
    private $commentService;
    private $teacherService;
    private $subjectService;

    public function __construct(CourseServiceInterface $courseService,
                                BlogServiceInterface $blogService,
                                CommentServiceInterface $commentService,
                                TeacherServiceInterface $teacherService,
                                SubjectServiceInterface $subjectService)
    {
        $this->courseService = $courseService;
        $this->blogService = $blogService;
        $this->commentService = $commentService;
        $this->teacherService = $teacherService;
        $this->subjectService = $subjectService;
    }

    public function index(){
        $relatedCourse = $this->courseService->getRelatedCourse(6);
        $blogs = $this->blogService->getLatestBlogs();
        $comments = $this->commentService->getComments();
        $teachers = $this->teacherService->getTeachers();
        $subjects = $this->subjectService->getFeaturedSubject();

        return view('front.index', compact('relatedCourse', 'blogs', 'teachers', 'comments', 'subjects'));
    }
}
