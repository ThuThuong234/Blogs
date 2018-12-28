<?php

namespace App\Http\Controllers;

use App\Cities;
use App\Companies;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitiesController extends Controller
{
    /**
     * Display company listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->input('city_name');

        $cities = Cities::select('cities.*');

        if (!empty($name)) {
            $cities = Cities::where('city_name', 'LIKE', '%' . $name . '%');
        }
        $cities = $cities->paginate(3);
        return view('city.index', compact('cities'));
    }

    /**
     * Show the form for creating company new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('city.create');
    }

    /**
     * Store company newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'city_name' => 'required',
            'zip_code' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('cities/create')
                ->withErrors($validator)
                ->withInput();
        }
        Cities::create($data);
        return redirect('cities');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cities $cities
     * @return \Illuminate\Http\Response
     */
    public function show(Cities $cities)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cities $cities
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = Cities::findOrFail($id);

        return view('city.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Cities $cities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $cities = Cities::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'city_name' => 'required',
            'zip_code' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('cities/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $cities->update($data);
        return redirect('cities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cities $cities
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = Cities::findOrFail($id);
        $city->delete();
        return redirect('cities');
    }
}
