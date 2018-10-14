
@extends('layouts.app')
@section('content')
<div class="container">
    <br><h3>Create</h3><br>
    <div class="panel panel-primary">
        <div class="panel-heading">create</div>
        <div class="panel-body">

            {!! Form::open(['action' => 'HomeController@store','enctype' => 'multipart/control-data']) !!}
            {!! Form::token() ;!!}


            {!!  Form::label('fullname', ' Name',['class' => "form-group"]); !!}
            {!!   Form::text('fullname','',['class' => "form-control"]); !!}

            {!!  Form::label('email', 'Email',['class' => "form-group"]); !!}
            {!!   Form::text('email', 'example@gmail.com',['class' => "form-control"]);!!}

            {!!  Form::label('password', ' password  ',['class' => "form-group"]); !!}
            {{ Form::password('password', array('placeholder'=>'Password', 'class'=>'form-control' ) ) }}


            <br>
            {!!   Form::submit('Click !',['class' => " btn btn-primary"]); !!}


            {!! Form::close() !!}


        </div>
    </div>
</div>
@endsection