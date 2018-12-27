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
                {!! Form::close() !!}
                <div class="col-sm-2">
                    <button class="btn btn-primary" onclick="window.location='cities/create'">Create new</button>
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
                        <td><a class="fa fa-edit fa-fw" href="{{ url('/cities/' . $city->id . '/edit') }}"></a></td>
                        <td>
                            @if ($city->canDelete())
                                <a class="fa fa-trash" data-toggle="modal" data-target="#confirmDelete"></a>
                            @endif
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-12 text-center">
            {{ $cities->appends(['city_name' => Request::get('city_name')])->render()}}
        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection