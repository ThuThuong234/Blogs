@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div id="form_Deparment" class="form-group ">
    @if(isset($deparment))
        <div class="row" style="margin-bottom: 25px">
            <div class="col-sm-2  mt-4 mb-4">{!! Form::label('lbDeparmentId', 'Deparment ID:') !!}</div>
            <div class="col-sm-10 mt-4 mb-4" id="DeparmentId">{{$deparment->id}}</div>
        </div>
    @endif
    <div class="row" style="margin-bottom: 25px">
        <div class="col-sm-2 mt-4 mb-4">{!! Form::label('lbDeparmentName', 'Deparment Name:') !!} </div>
        <div class="col-sm-10 mt-4 mb-4">
            {!! Form::text('Deparment_name',null,['class'=> 'form-control','id'=>'deparmentName']) !!}
        </div>
    </div>
    <div class="row" style="margin-bottom: 25px">
        <div class="col-sm-2 mt-4 mb-4">{!! Form::label('lbCompanyName', 'Company Name:') !!} </div>
        <div class="col-sm-10 mt-4 mb-4">
            {!! Form::select('city_id',\App\Cities::pluck('company_name','id'),isset($deparment)?$deparment->cities->pluck('id'):null,['class'=> 'form-control','id'=>'companyName']) !!}
        </div>
    </div>
    <div class="row" style="margin-bottom: 25px">
        <div class="col-sm-2">{!! Form::label('lbmanager_id', 'manager_id:') !!} </div>
        <div class="col-sm-10 mt-4 mb-4">
            {!! Form::text('manager_id',null,['class'=> 'form-control','id'=>'manager_id']) !!}
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">{!! Form::submit(isset($submitText)? $submitText : 'Create',['class'=> 'btn-primary']) !!} </div>
    </div>
</div>