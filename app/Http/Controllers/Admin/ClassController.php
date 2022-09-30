<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckMemberLogin;
use App\Models\User;
use App\Services\Classes\ClassesServiceInterface;
use App\Services\Course\CourseServiceInterface;
use App\Services\Student\StudentServiceInterface;
use App\Services\Teacher\TeacherServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    private $classesService;
    private $courseService;
    private $teacherService;
    private $studentService;

    public function __construct(ClassesServiceInterface $classesService,
                                CourseServiceInterface $courseService,
                                TeacherServiceInterface $teacherService,
                                StudentServiceInterface $studentService)
    {
        $this->classesService = $classesService;
        $this->courseService = $courseService;
        $this->teacherService = $teacherService;
        $this->studentService = $studentService;
    }

    public function index(){
        $classes = $this->classesService->getClass();

        return view('dashboard.class.allClass', compact('classes'));
    }

    public function show($id){

        $class = $this->classesService->find($id);

        $students = DB::table('users')->where('class_id', $class->id)->where('level', 1)->get();

        return view('dashboard.class.viewClass', compact('class', 'students'));
    }

    public function store(Request $request){
        $data = $request->all();

        $this->classesService->create($data);

        return redirect('admin/class');
    }

    public function create()
    {
        $d = 1;

        $courses = $this->courseService->all();

        $teachers = $this->teacherService->all()->where('level', 2);

        return view('dashboard.class.addClass',compact('d', 'courses', 'teachers'));
    }
}
