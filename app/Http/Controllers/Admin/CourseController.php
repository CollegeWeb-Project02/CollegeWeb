<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use App\Repositories\Course\CourseRepositoryInterface;
use App\Utilities\Common;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    private $courseService;

    public function __construct(CourseRepositoryInterface $courseService)
    {
        $this->courseService = $courseService;
    }

    public function index(){
        $courses = DB::table('course')->get();

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

        //Xử lý file ảnh
        if ($request->hasFile('image')) {
            //Thêm file mới:
            $data['image'] = Common::uploadFile($request->file('image'),'front/img');

            // Xóa file cũ:
            $file_name_old = $request->get('image_old');
            if ($file_name_old != '') {
                unlink('front/img' . $file_name_old);
            }
        }

        //Cập nhật dữ liệu
        $this->courseService->update($data,$course->id);

        return redirect('/admin/course/' . $course->id);
    }

    public function create()
    {
        $courses = $this->courseService->all();

        $a = 1;

        return view('dashboard.course.addCourse', compact('a', 'courses'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        /*var_dump($data);*/

        // Xử lý file:
        if ($request->hasFile('image')) {
            $data['image'] = Common::uploadFile($request->file('image'),'dashboard/img');
        }

        $course = $this->courseService->create($data);
        return redirect('/admin/course/' . $course->id);
    }

    public function destroy(Course $course)
    {
        $this->courseService->delete($course->id);

        // Xóa file
        $file_name = $course->image;
        if ($file_name != '') {
            unlink('front/img/' . $file_name);
        }
        return redirect('/admin/course');
    }
}
