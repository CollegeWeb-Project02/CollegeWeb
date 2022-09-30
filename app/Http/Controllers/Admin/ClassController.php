<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Classes\ClassesServiceInterface;
use App\Services\Course\CourseServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    private $classesService;
    private $courseService;

    public function __construct(ClassesServiceInterface $classesService,
                                CourseServiceInterface $courseService)
    {
        $this->classesService = $classesService;
        $this->courseService = $courseService;
    }

    public function index(){
        $classes = $this->classesService->getClass();

        $b = 1;

        return view('dashboard.class.allClass', compact('classes', 'b'));
    }

    public function addClass(){

        $c = 1;

        $courses = $this->courseService->all();

        return view('dashboard.class.addClass',compact('c', 'courses'));
    }

    public function storeClass(Request $request){
        $data = $request->all();

        $class = $this->classesService->create($data);

        return redirect('class/allclass' . $class->id);
    }
}
