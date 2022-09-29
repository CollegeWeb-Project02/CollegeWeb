<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Classes\ClassesServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    private $classesService;

    public function __construct(ClassesServiceInterface $classesService)
    {
        $this->classesService = $classesService;
    }

    public function index(){
        $classes = $this->classesService->getClass();
        return view('dashboard.class.allClass', compact('classes'));
    }

    public function addClass(){
        return view('dashboard.class.addClass');
    }
}
