@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="jumbotron text-center">
        <h1>Welcome to Hussien AirLines</h1>

    </div>
   {{$currentUser}}

   @foreach($flights as $flight)
     {{ Form::open(array('url' => '/addflight','method' => 'post')) }}

    {{Form::hidden('flight_id',  $flight->id)}}
    {{Form::hidden('price',  '256')}}
    {{Form::select('isSmoking',array(0=>'smoking',1=>'nosmoking'))}}
    {{Form::select('isWindow',array(1=>'window',0=>'aisle'))}}
    {{Form::hidden('user_id',  $currentUser->id)}}
    
   

{!! Form::hidden('_token',csrf_token()) !!}

  {{Form::submit('Reserve')}}
 <br>
{{ Form::close() }}
    
   @endforeach

 
</div>
@endsection
