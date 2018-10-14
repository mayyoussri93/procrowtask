
@extends('layouts.app')
@section('content')







    <div class="container">
        <br><h3>Accounts</h3><br>
        @foreach($posts as $post)
    <div class="col-sm-4">

        <div class="panel panel-default">
            <div class="panel-heading">{{$post -> name}} </div>
            <div class="panel-body"><span class="text-primary">{{$post -> email}}</span></div>
          <div  class="btn pull-right"><button type="button" class="btn btn-success "><a href="/posts/{{$post ->id}}"> More</a> </button></div>
        </div>

    </div>

        @endforeach
    </div>

@endsection

