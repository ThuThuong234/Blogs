@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div id="form_Company" class="form-group ">
    @if(isset($company))
        <div class="row" style="margin-bottom: 25px">
            <div class="col-sm-2  mt-4 mb-4">{!! Form::label('lbcompanyId', 'Company ID:') !!}</div>
            <div class="col-sm-10 mt-4 mb-4" id="companyId">{{$company->id}}</div>
        </div>
    @endif
    <div class="row" style="margin-bottom: 25px">
        <div class="col-sm-2 mt-4 mb-4">{!! Form::label('lbCompanyName', 'Company Name:') !!} </div>
        <div class="col-sm-10 mt-4 mb-4">
            {!! Form::text('company_name',null,['class'=> 'form-control','id'=>'companyName']) !!}
        </div>
    </div>
    <div class="row" style="margin-bottom: 25px">
        <div class="col-sm-2 mt-4 mb-4">{!! Form::label('lbCompanyName', 'City Name:') !!} </div>
        <div class="col-sm-10 mt-4 mb-4">
            {!! Form::select('city_id',\App\Cities::pluck('city_name','id'),isset($company)?$company->cities->pluck('id'):null,['class'=> 'form-control','id'=>'companyName']) !!}
        </div>
    </div>
    <div class="row" style="margin-bottom: 25px">
        <div class="col-sm-2">{!! Form::label('lbLogo_url', 'Logo_url:') !!} </div>
        <div class="col-sm-10 mt-4 mb-4">
            {!! Form::text('logo_url',null,['class'=> 'form-control','id'=>'CompanyLogo_url']) !!}
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">{!! Form::submit(isset($submitText)? $submitText : 'Create',['class'=> 'btn-primary']) !!} </div>
    </div>
</div>