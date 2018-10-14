
@extends('layouts.app')
@section('content')
    <div class="container">
        <br><h3>Edit</h3><br>
        <div class="panel panel-primary">
            <div class="panel-heading">Edit</div>
            <div class="panel-body">

                {!! Form::open(['action' => ['HomeController@update',$info -> id]]) !!}
                {!! Form::token() ;!!}
                {!! form::hidden('_method','PUT') !!}


                {!!  Form::label('fullname', ' Name',['class' => "form-group"]); !!}
                {!!   Form::text('fullname',$info -> name,['class' => "form-control"]); !!}

                {!!  Form::label('email', 'Email',['class' => "form-group"]); !!}
                {!!   Form::text('email', $info -> email ,['class' => "form-control"]);!!}

                {!!  Form::label('password', ' password  ',['class' => "form-group"]); !!}
                {{ Form::password('password', array('placeholder'=>$info -> password , 'class'=>'form-control' ) ) }}

                {!!   Form::submit('Update',['class' => " btn btn-primary"]); !!}


                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection