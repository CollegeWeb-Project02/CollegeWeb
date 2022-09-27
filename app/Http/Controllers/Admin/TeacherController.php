<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Teacher\TeacherRepositoryInterface;
use Illuminate\Http\Request;
use App\Utilities\Common;

class TeacherController extends Controller
{
    private $teacherService;

    public function __construct(TeacherRepositoryInterface $teacherService)
    {
        $this->teacherService = $teacherService;
    }

    public function index(){
        $teachers = $this->teacherService->getTeacherInDashboard();

        return view('dashboard.teacher.allTeacher', compact('teachers'));
    }

    public function show($id){

        $teacher = $this->teacherService->find($id);

        return view('dashboard.teacher.viewTeacher', compact('teacher'));
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
        return view('dashboard.teacher.addTeacher');
    }

    public function store(Request $request)
    {
        $data = $request->all();

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
            unlink('dashboard/img' . $file_name);
        }

        return redirect('admin/teacher');

    }
}
