@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
              <div class="panel-heading flex">
              <h2>{{$question->title}}</h2>
              <div class="">
                  <a href="{{route("questions.index")}}" class="btn btn-info">Back To All Questions</a>
              </div>
              </div>

              <div class="panel-body">
                {!! $question->body_html !!}
              </div>
        </div>
    </div>
</div>
@endsection
