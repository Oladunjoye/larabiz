@extends('layouts.app')
@section("content")

<div class="container">
 <div class="row ">
        <div class="col-md-8 col-md-8-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <h3>Create Listing</h3></div>


                <div class="panel-body">
                    
                  {!!Form::open(['action' => 'ListingsController@store', 'method' =>  'POST'])!!}
                  {{Form::bsText('name','',['placeholder' => 'Company name'])}}
                  {{Form::bsText('website','',['placeholder' => 'Company website'])}}
                  {{Form::bsText('email','',['placeholder' => 'Company Email'])}}
                  {{Form::bsText('phone','',['placeholder' => 'Company Phone'])}}
                  {{Form::bsText('address','',['placeholder' => 'Business address'])}}
                  {{Form::bsTextArea('bio','',['placeholder' => 'Company description'])}}
                  {{Form::bsSubmit('submit')}}
                  {!!Form::close()!!}
                </div>
               
            </div>
        </div>
    </div>
    </div>







@endsection