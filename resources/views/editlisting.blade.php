@extends('layouts.app')
@section("content")

<div class="container">
 <div class="row ">
        <div class="col-md-8 col-md-8-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <h3>Edit Listing <a href="home" class="pull-right btn btn-default">Go back</a></h3></div>


                <div class="panel-body">
                    
                  {!!Form::open(['action' => ['ListingsController@update',$listing->id], 'method' =>  'POST'])!!}
                  {{Form::bsText('name', $listing->name,['placeholder' => 'Company name'])}}
                  {{Form::bsText('website',$listing->website,['placeholder' => 'Company website'])}}
                  {{Form::bsText('email',$listing->email,['placeholder' => 'Company Email'])}}
                  {{Form::bsText('phone',$listing->phone,['placeholder' => 'Company Phone'])}}
                  {{Form::bsText('address',$listing->address,['placeholder' => 'Business address'])}}
                  {{Form::bsTextArea('bio',$listing->bio,['placeholder' => 'Company description'])}}
                  {{Form::hidden('_method','PUT')}}
                  {{Form::bsSubmit('submit')}}
                  {!!Form::close()!!}
                </div>
               
            </div>
        </div>
    </div>
    </div>







@endsection 