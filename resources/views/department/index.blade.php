@extends('layout.layout')

@section('title', 'Departments')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                {!! Form::open(['url' => 'departments', 'method' => 'get', 'role' => 'search']) !!}
                <div class="col-sm-6"></div>
                <div class="col-sm-4">
                    <input onchange="this.form.submit()" type="text" class="form-control" name="department_name"
                           placeholder="Nhập để tìm kiếm... "></div>
                {!! Form::close() !!}
                <div class="col-sm-2">
                    <a class="btn btn-primary" href="{{url('departments/create')}}">Create new</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <table id="example" class="display table" style="width:100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Company ID</th>
                    <th>Manager ID</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>{{ $department->department_name }}</td>
                        <td>{{ $department->company_id }}</td>
                        <td>{{ $department->manage_id }}</td>
                        <td><a class="fa fa-edit fa-fw"
                               href="{{ url('/departments/' . $department->id . '/edit') }}"></a></td>
                        <td>
                            {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/departments',  $department->id],
                            'style' => 'display:inline',
                            'id' => 'formDelete'
                            ])!!}
                            <a class="fa fa-trash" data-target="#confirmDelete"
                               data-toggle="modal"></a>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-12 text-center">
            {{ $departments->appends(['department_name' => Request::get('department_name')])->render()}}
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