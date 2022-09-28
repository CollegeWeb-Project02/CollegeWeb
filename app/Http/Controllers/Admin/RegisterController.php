<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Course\CourseServiceInterface;
use App\Services\Register\RegisterServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\Translation\t;

class RegisterController extends Controller
{
    private $registerService;
    private $courseService;

    public function __construct(RegisterServiceInterface $registerService,
                                CourseServiceInterface $courseService)
    {
        $this->registerService = $registerService;
        $this->courseService = $courseService;
    }

    public function index(){

        $registers = $this->registerService->all();

        return view('dashboard.studentRegister.studentRegister', compact('registers'));
    }
}
