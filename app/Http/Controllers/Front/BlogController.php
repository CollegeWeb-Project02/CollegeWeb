<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogServiceInterface;
use App\Services\Comment\CommentServiceInterface;
use App\Services\Subject\SubjectServiceInterface;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogService;
    private $subjectService;
    private $commentService;

    public function __construct(BlogServiceInterface $blogService,
                                SubjectServiceInterface $subjectService,
                                CommentServiceInterface $commentService)
    {
        $this->blogService = $blogService;
        $this->subjectService = $subjectService;
        $this->commentService = $commentService;
    }

    public function blogid($id){
        $blog = $this->blogService->find($id);
        $bloglimit = $this->blogService->getLatestBlogs(3);
        $subjectslimit = $this->subjectService->getLimitSubject(4);
        $comments = $this->commentService->getComments();


        return view('front.menu.single', compact('blog', 'bloglimit', 'subjectslimit', 'comments'));
    }

    public function addComment(Request $request){
        $this->commentService->create($request->all());

        return redirect()->back();
    }
    public function index(){
        $blogs = $this->blogService->getLatestBlogs(6);
        $subjects = $this->subjectService->getFeaturedSubject();
        $bloglimit = $this->blogService->getLatestBlogs(3);
        $subjectslimit = $this->subjectService->getLimitSubject(4);

        return view('front.menu.blog', compact('blogs', 'subjects', 'bloglimit', 'subjectslimit'));
    }
}
