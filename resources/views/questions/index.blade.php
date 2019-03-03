@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">All Questions</div>

                <div class="panel-body">
                   @if(count($questions) > 0)
                        @foreach($questions as $question)
                            <div class="well">
                                <h2>{{$question->title}}</h2>
                                <p>{{str_limit($question->body, 250)}}</p>
                                <small>{{$question->created_at}}</small>
                            </div>
                        @endforeach
                   @endif
                </div>
                <div class="text-center">{{$questions->links()}}</div>
            </div>
        </div>
    </div>
</div>
@endsection
