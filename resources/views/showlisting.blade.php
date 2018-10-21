@extends('layouts.app')
@section("content")

<div class="container">
 <div class="row ">
        <div class="col-md-8 col-md-8-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$listing->name}} <a href="listings" class="btn btn-default btn-xs">Bo back</a></div>


                <div class="panel-body">
                    
                 <ul class="list-group">

                  <li class="list-group-item">Address: {{$listing->address}}</li>
                  <li class="list-group-item">Website:<a href="{{$listing->website}}" target="_blank"> {{$listing->website}}</a> </li>
                  <li class="list-group-item">email: {{$listing->email}}</li>
                  <li class="list-group-item">phone: {{$listing->phone}}</li>
                  <li class="list-group-item" >
                 
                 <div class="well">
                   {{$listing->bio}}
                 </div>
                 </li>
                
                 </ul>
                 
                </div>
               
            </div>
        </div>
    </div>
    </div>







@endsection 