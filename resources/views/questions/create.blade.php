@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
              <div class="panel-heading flex">
              <h2>Ask Question</h2>
              <div class="">
                  <a href="{{route("questions.index")}}" class="btn btn-info">Back To All Questions</a>
              </div>
              </div>

              <div class="panel-body">
                 <form action="{{ route('questions.store') }}" method="POST">
                     @include('inc.form', ['buttonText' => 'Submit Question'])
                 </form>
              </div>
        </div>
    </div>
</div>
@endsection
