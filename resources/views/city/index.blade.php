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
                    <input onchange="this.form.submit()" type="text" class="form-control" name="city_name"
                           placeholder="Nhập để tìm kiếm... "></div>
                {!! Form::close() !!}
                <div class="col-sm-2">
                    <a class="btn btn-primary" href="{{url('cities/create')}}">Create new</a>
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
                                {!! Form::open([
                                'method'=>'DELETE',
                                'url' => ['/cities',  $city->id],
                                'style' => 'display:inline',
                                'id' => 'formDelete'
                                ])!!}
                                <a class="fa fa-trash" data-target="#confirmDelete"
                                   data-toggle="modal" ></a>
                                {!! Form::close() !!}
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
    <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure?
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="delete-court-button">Delete</button>
                    </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#delete-court-button').on('click', function () {
            $('#formDelete').submit();
        });
    </script>
@endsection