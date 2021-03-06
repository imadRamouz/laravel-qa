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
                               <strong>{{$question->answers_count}}</strong> {{str_plural('answer', $question->answers_count)}}
                           </div>
                           <div class="view">
                               {{$question->views}} {{str_plural('view', $question->views)}}
                           </div>
                       </div>
                       <div class="col-md-11">

                            <div class="well">
                                <div class="flex">
                                    <h2><a href="{{$question->url}}">{{$question->title}}</a></h2>
                                    <div class="flex">
                                        @can ('update', $question)
                                            <a href="{{route('questions.edit', $question->id)}}" class="btn btn-info"  style="margin: 5px;">Edit</a>
                                        @endcan
                                        @can ('delete', $question)
                                            <form action="{{ route('questions.destroy', $question->id) }}" method="POST">
                                                {{ method_field('DELETE') }}
                                                {{csrf_field()}}
                                               <button type="submit" onclick="return confirm('Are you sure!!');" class="btn btn-danger">Delete</button>
                                             </form>
                                        @endcan
                                    </div>
                                </div>
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
