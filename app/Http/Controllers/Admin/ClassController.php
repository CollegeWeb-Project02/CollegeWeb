<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Classes\ClassesServiceInterface;
use App\Services\Course\CourseServiceInterface;
use App\Services\Teacher\TeacherServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    private $classesService;
    private $courseService;
    private $teacherService;

    public function __construct(ClassesServiceInterface $classesService,
                                CourseServiceInterface $courseService,
                                TeacherServiceInterface $teacherService)
    {
        $this->classesService = $classesService;
        $this->courseService = $courseService;
        $this->teacherService = $teacherService;
    }

    public function index(){
        $classes = $this->classesService->getClass();

        return view('dashboard.class.allClass', compact('classes'));
    }

    public function addClass(){

        $c = 1;

        $courses = $this->courseService->all();

        $teacher = $this->teacherService->all()->where('level', 2);

        return view('dashboard.class.addClass',compact('c', 'courses'));
    }

    public function storeClass(Request $request){
        $data = $request->all();

        $class = $this->classesService->create($data);

        return redirect('class/allclass' . $class->id);
    }
}
