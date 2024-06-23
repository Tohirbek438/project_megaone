<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use App\Models\Image;
use App\Services\BlogService;
use App\Services\DepartmentService;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    private $departmentService;

    public function __construct(DepartmentService $departmentService)
    {
        $this->departmentService = $departmentService;
    }

    public function index()
    {
        $department = Departments::paginate(10);
        return view('admin.department.index', ['departments' => $department]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->departmentService->departmentStore($request);
        return redirect()->route('department.index')->with('success', 'Department created successfully.');

    }
    public function show(string $id)
    {
        $department = Departments::findOrFail($id);
        if(isset($id)) {
            return view('admin.department.show', ['department' => $department]);
        }
        else{
            return view('error.404');
        }
    }
    public function edit(string $id)
    {
     $department = Departments::findOrFail($id);
     if(isset($department)) {
         return view('admin.department.edit', ['department' => $department]);
     }
     else{
         return view('error.404');
     }
     }

    public function update(Request $request, string $id)
    {
        $this->departmentService->updateStore($request,$id);
        return redirect()->route('department.index')->with('success', 'Department created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = Departments::findOrFail($id);
        $image = Image::where('id', $department->image_id);
        $image->delete();
        $department->delete();
        return redirect()->route('department.index')->with('success', 'Department created successfully.');

    }
}
