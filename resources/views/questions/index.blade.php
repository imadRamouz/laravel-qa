@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading flex">
                <h2>All Questions</h2>
                <div class="">
                    <a href="{{route("questions.create")}}" class="btn btn-info">Ask Question</a>
                </div>
                </div>

                <div class="panel-body">
                   <div class="row">
                        @include('inc.messages')
                        @if(count($questions) > 0)
                            @foreach($questions as $question)
                       <div class="col-md-1 text-center">
                           <div class="vote">
                               <strong>{{$question->votes}}</strong> {{str_plural('vote', $question->votes)}}
                           </div>
                           <div class="status {{$question->status}}">
                               <strong>{{$question->answers}}</strong> {{str_plural('answer', $question->answers)}}
                           </div>
                           <div class="view">
                               {{$question->views}} {{str_plural('view', $question->views)}}
                           </div>
                       </div>
                       <div class="col-md-11">
                           
                            <div class="well">
                                <h2><a href="{{$question->url}}">{{$question->title}}</a></h2>
                                <p class="lead">
                                Asked By <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                                <small>{{$question->created_date}}</small>
                                </p>
                                <p>{{str_limit($question->body, 250)}}</p>
                                
                            </div>
                              
                       </div>
                        @endforeach
                    @endif
                   </div>
                </div>
                <div class="text-center">{{$questions->links()}}</div>
            </div>
        </div>
    </div>
</div>
@endsection
