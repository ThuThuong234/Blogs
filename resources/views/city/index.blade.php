@extends('layout.layout')

@section('title', 'Cities')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                {!! Form::open(['url' => 'cities', 'method' => 'get', 'role' => 'search']) !!}
                <div class="col-sm-6"></div>
                <div class="col-sm-4">
                    <input onchange="this.form.submit()" type="text" class="form-control" name="city_name" placeholder="Nhập để tìm kiếm... "></div>
                <div class="col-sm-2">
                    <button class="btn btn-primary">Create new</button>
                </div>
            </div>
        </div>
        <div class="col-12">
            <table id="example" class="display table" style="width:100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Zipcode</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($cities as $city)

                    <tr>
                        <td>{{ $city->id }}</td>
                        <td>{{ $city->city_name }}</td>
                        <td>{{ $city->zip_code }}</td>
                        <td><i class="fa fa-edit fa-fw" onclick=""></i></td>
                        <td>
                            @if ($city->canDelete())
                                <i class="fa fa-trash" onclick=""></i>
                            @endif
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-12">
            {!! $cities->appends(['city_name' => Request::get('city_name')])->render() !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection