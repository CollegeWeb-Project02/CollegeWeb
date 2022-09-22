<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogServiceInterface;
use App\Services\Subject\SubjectServiceInterface;

class BlogController extends Controller
{
    private $blogService;
    private $subjectService;

    public function __construct(BlogServiceInterface $blogService,
                                SubjectServiceInterface $subjectService)
    {
        $this->blogService = $blogService;
        $this->subjectService = $subjectService;
    }

    public function blogid($id){
        $blog = $this->blogService->find($id);
        $bloglimit = $this->blogService->getLatestBlogs(3);
        $subjectslimit = $this->subjectService->getLimitSubject(4);


        return view('front.menu.single', compact('blog', 'bloglimit', 'subjectslimit'));
    }

    public function index(){
        $blogs = $this->blogService->getLatestBlogs(6);
        $subjects = $this->subjectService->getFeaturedSubject();
        $bloglimit = $this->blogService->getLatestBlogs(3);
        $subjectslimit = $this->subjectService->getLimitSubject(4);

        return view('front.menu.blog', compact('blogs', 'subjects', 'bloglimit', 'subjectslimit'));
    }
}
