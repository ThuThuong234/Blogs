<?php

namespace App\Http\Controllers;

use App\Cities;
use App\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('city.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $data['city_name'] = $request['city_name'];
        $data['zip_code'] = $request['zip_code'];
        DB::table('cities')->insert($data);
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

        dd($data);
        $cities = Cities::findOrFail($id);
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

    }
}
