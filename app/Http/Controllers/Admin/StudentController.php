<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Student\StudentRepositoryInterface;
use Illuminate\Http\Request;
use App\Utilities\Common;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    private $studentService;

    public function __construct(StudentRepositoryInterface $studentService)
    {
        $this->studentService = $studentService;
    }

    public function index(Request $request){
        $students = $this->studentService->searchStudent(1, 'name', $request->get('search'));

        return view('dashboard.student.allStudent', compact('students'));
    }

    public function show($id){

        $student = $this->studentService->find($id);

        return view('dashboard.student.viewStudent', compact('student'));
    }

    public function myClass(){
        $student = $this->studentService->find(Auth::id());

        $classes = DB::table('classes')->where('id', $student->class_id)->get();

        return view('dashboard.class.myClass', compact('classes'));
    }

    public function edit($id){
        $student = $this->studentService->find($id);

        return view('dashboard.student.updateStudent', compact('student'));
    }

    public function update(Request $request, $id){

        $student = $this->studentService->find($id);

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

        $this->studentService->update($data, $student->id);

        return redirect('/admin/student/' . $student->id);
    }

    public function create()
    {
        return view('dashboard.student.addStudent');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        /*var_dump($data);*/

        // Xử lý file:
        if ($request->hasFile('image')) {
            $data['avatar'] = Common::uploadFile($request->file('image'),'dashboard/img');
        }

        $student = $this->studentService->create($data);
        return redirect('/admin/student/' . $student->id);
    }

    public function destroy(User $student)
    {
        $this->studentService->delete($student->id);

        // Xóa file
        $file_name = $student->avatar;
        if ($file_name != '') {
            unlink('dashboard/img/' . $file_name);
        }

        return redirect('admin/student');

    }
}
