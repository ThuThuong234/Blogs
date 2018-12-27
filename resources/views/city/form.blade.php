<div id="form_city" class="form-group ">
    @if(isset($city))
        <div class="row" style="margin-bottom: 25px">
            <div class="col-sm-2  mt-4 mb-4">{!! Form::label('lbcityId', 'City ID:') !!}</div>
            <div class="col-sm-10 mt-4 mb-4" id="cityId">{{$city->id}}</div>
        </div>
    @endif
    <div class="row" style="margin-bottom: 25px">
        <div class="col-sm-2 mt-4 mb-4">{!! Form::label('lbcityName', 'City Name:') !!} </div>
        <div class="col-sm-10 mt-4 mb-4">
            {!! Form::text('city_name',null,['class'=> 'form-control','id'=>'cityName']) !!}
        </div>
    </div>
    <div class="row" style="margin-bottom: 25px">
        <div class="col-sm-2" >{!! Form::label('lbzipcode', 'Zipcode:') !!} </div>
        <div class="col-sm-10 mt-4 mb-4">
            {!! Form::text('zip_code',null,['class'=> 'form-control','id'=>'cityZipcode']) !!}
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">{!! Form::submit(isset($submitText)? $submitText : 'Create',['class'=> 'btn-primary']) !!} </div>
    </div>
</div>