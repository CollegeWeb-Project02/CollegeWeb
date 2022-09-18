<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogServiceInterface;
use App\Services\Course\CourseServiceInterface;
use App\Services\Comment\CommentServiceInterface;
use App\Services\Teacher\TeacherServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $courseService;
    private $blogService;
    private $commentService;
    private $teacherService;

    public function __construct(CourseServiceInterface $courseService,
                                BlogServiceInterface $blogService,
                                CommentServiceInterface $commentService,
                                TeacherServiceInterface $teacherService)
    {
        $this->courseService = $courseService;
        $this->blogService = $blogService;
        $this->commentService = $commentService;
        $this->teacherService = $teacherService;
    }

    public function index(){
        $featuredCourse = $this->courseService->getFeaturedCourse();
        $blogs = $this->blogService->getLatestBlogs();
        $comments = $this->commentService->getComments();
        $teachers = $this->teacherService->getTeachers();

        return view('front.index', compact('featuredCourse', 'blogs', 'teachers', 'comments'));
    }
}
