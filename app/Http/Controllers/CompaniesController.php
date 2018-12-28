<?php

namespace App\Http\Controllers;

use App\Companies;
use Validator;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('company_name');

        $companies = Companies::select('companies.*');

        if (!empty($name)) {
            $companies = Companies::where('company_name', 'LIKE', '%' . $name . '%');
        }
        $companies = $companies->paginate(3);
        return view('company.index', compact('companies'));
    }


    public function create()
    {
        return view('company.create');
    }

    public function store(Request $request)
    {

        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'company_name' => 'required',
            'logo_url' => 'required',
            'city_id' => 'required|exists:cities,id',
        ]);

        if ($validator->fails()) {
            return redirect('companies/create')
                ->withErrors($validator)
                ->withInput();
        }
        Companies::create($data);
        return redirect('companies');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $company = companies::findOrFail($id);

        return view('company.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $companies = companies::findOrFail($id);
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'company_name' => 'required',
            'logo_url' => 'required',
            'city_id' => 'required|exists:cities,id',
        ]);

        if ($validator->fails()) {
            return redirect('companies/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $companies->update($data);
        return redirect('companies');
    }

    public function destroy($id)
    {
        $company = companies::findOrFail($id);
        $company->delete();
        return redirect('companies');
    }
}
