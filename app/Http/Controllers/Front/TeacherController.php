<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Teacher\TeacherServiceInterface;

class TeacherController extends Controller
{
    private $teacherService;
    public function __construct(TeacherServiceInterface $teacherService)
    {
        $this->teacherService = $teacherService;
    }

    public function teacher(){
        $teachers = $this->teacherService->getTeachers();

        return view('front.menu.teacher', compact('teachers'));
    }
}
