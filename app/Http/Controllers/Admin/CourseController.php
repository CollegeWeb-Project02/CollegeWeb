<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Course\CourseRepositoryInterface;
use App\Utilities\Common;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    private $courseService;

    public function __construct(CourseRepositoryInterface $courseService)
    {
        $this->courseService = $courseService;
    }

    public function index(){
        $courses = $this->courseService->getCourseInDashboard();

        return view('dashboard.course.allCourse', compact('courses'));
    }

    public function show($id){

        $course = $this->courseService->find($id);

        return view('dashboard.course.viewCourse', compact('course'));
    }

    public function edit($id){
        $course = $this->courseService->find($id);

        return view('dashboard.course.updateCourse', compact('course'));
    }

    public function update(Request $request, $id){

        $course = $this->courseService->find($id);

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

        $this->courseService->update($data,$course->id);

        return redirect('/admin/course/' . $course->id);
    }

    public function create()
    {
        return view('dashboard.course.addCourse');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        /*var_dump($data);*/

        // Xử lý file:
        if ($request->hasFile('image')) {
            $data['avatar'] = Common::uploadFile($request->file('image'),'dashboard/img');
        }

        $teacher = $this->courseService->create($data);
        return redirect('/admin/course/' . $teacher->id);
    }

    public function destroy(User $course)
    {
        $this->courseService->delete($course->id);

        // Xóa file
        $file_name = $course->avatar;
        if ($file_name != '') {
            unlink('dashboard/img/' . $file_name);
        }

        return redirect('admin/course');

    }
}
