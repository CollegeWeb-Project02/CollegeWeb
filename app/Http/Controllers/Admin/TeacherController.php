<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Student\StudentServiceInterface;
use App\Services\Teacher\TeacherServiceInterface;
use Illuminate\Http\Request;
use App\Utilities\Common;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\Translation\t;

class TeacherController extends Controller
{
    private $teacherService;
    private $studentService;

    public function __construct(TeacherServiceInterface $teacherService,
                                StudentServiceInterface $studentService)
    {
        $this->teacherService = $teacherService;
        $this->studentService = $studentService;
    }

    public function index(Request $request){
        $teachers = $this->teacherService->searchTeachers(2, 'name', $request->get('search'));

        return view('dashboard.teacher.allTeacher', compact('teachers'));
    }

    public function show($id){

        $teacher = $this->teacherService->find($id);

        return view('dashboard.teacher.viewTeacher', compact('teacher'));
    }

    public function myClass(){
        $teacher = $this->teacherService->find(Auth::id());

        $classes = DB::table('classes')->where('user_id', $teacher->id)->get();

        return view('dashboard.class.myClass', compact('classes'));
    }

    public function edit($id){
        $teacher = $this->teacherService->find($id);

        return view('dashboard.teacher.updateTeacher', compact('teacher'));
    }

    public function update(Request $request, $id){

        $teacher = $this->teacherService->find($id);

        $data = $request->all();

        // xu ly upload anh
        if ($request->hasFile('image')) {
            //Thêm file mới:
            $data['avatar'] = Common::uploadFile($request->file('image'),'dashboard/img');

            // Xóa file cũ:
            $file_name_old = $request->get('image_old');
            if ($file_name_old != '') {
                unlink('dashboard/img' . $file_name_old);
            }
        }

        $this->teacherService->update($data,$teacher->id);

        return redirect('/admin/teacher/' . $teacher->id);
    }

    public function create()
    {
        return view('dashboard.account.addUser');
    }


    public function store(Request $request)
    {
        $data = $request->all();

        /*var_dump($data);*/

        // Xử lý file:
        if ($request->hasFile('image')) {
            $data['avatar'] = Common::uploadFile($request->file('image'),'dashboard/img');
        }

        $teacher = $this->teacherService->create($data);
        return redirect('/admin/teacher/' . $teacher->id);
    }

    public function destroy(User $teacher)
    {
        $this->teacherService->delete($teacher->id);

        // Xóa file
        $file_name = $teacher->avatar;
        if ($file_name != '') {
            unlink('dashboard/img/' . $file_name);
        }

        return redirect('admin/teacher');

    }
}
