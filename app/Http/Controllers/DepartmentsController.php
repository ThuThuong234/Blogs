<?php

namespace App\Http\Controllers;

use App\Departments;
use Validator;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{

    public function index(Request $request)
    {
        $name = $request->input('department_name');

        $departments = Departments::select('departments.*');

        if (!empty($name)) {
            $departments = Departments::where('department_name', 'LIKE', '%' . $name . '%');
        }
        $departments = $departments->paginate(3);
        return view('department.index', compact('departments'));
    }

    public function create()
    {
        return view('department.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'department_name' => 'required',
            'manage_id' => 'required',
            'company_id' => 'required|exists:companies,id',
        ]);

        if ($validator->fails()) {
            return redirect('departments/create')
                ->withErrors($validator)
                ->withInput();
        }
        Departments::create($data);
        return redirect('departments');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $department = Departments::findOrFail($id);

        return view('department.edit', compact('department'));
    }


    public function update(Request $request, $id)
    {
        $departments = Departments::findOrFail($id);
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'department_name' => 'required',
            'manage_id' => 'required',
            'company_id' => 'required|exists:companies,id',
        ]);

        if ($validator->fails()) {
            return redirect('departments/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $departments->update($data);
        return redirect('departments');
    }

    public function destroy($id)
    {
        $department = Departments::findOrFail($id);
        $department->delete();
        return redirect('departments');
    }
}
