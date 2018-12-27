<div id="form_city" class="form-group ">
    @if(isset($city))
        <div class="row">
            <div class="col-sm-3  mt-4 mb-4">{!! Form::label('lbcityId', 'City ID:') !!}</div>
            <div class="col-sm-9 mt-4 mb-4" id="cityId">{{$city->id}}</div>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-3 mt-4 mb-4">{!! Form::label('lbcityName', 'City Name:') !!} </div>
        <div class="col-sm-9 mt-4 mb-4">
            {!! Form::text('city_name',null,['class'=> 'form-control','id'=>'cityName']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 mt-4 mb-4">{!! Form::label('lbzipcode', 'Zipcode:') !!} </div>
        <div class="col-sm-9 mt-4 mb-4">
            {!! Form::text('zip_code',null,['class'=> 'form-control','id'=>'cityZipcode']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 mt-4 mb-4">{!! Form::submit(isset($submitText)? $submitText : 'Create') !!} </div>
    </div>
</div>