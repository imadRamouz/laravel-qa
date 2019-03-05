@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
              <div class="panel-heading flex">
              <h2>Ask Question</h2>
              <div class="">
                  <a href="{{route("questions.create")}}" class="btn btn-info">Back To All Questions</a>
              </div>
              </div>

              <div class="panel-body">
                 <form action="{{ route('questions.store') }}" method="POST">
                    {{csrf_field()}}
                   <div class="form-group">
                     <label for="question-title">Question Title: </label>
                     <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="title" id="question-title">
                     @if($errors->has('title'))
                      <div class="invalid-feedback">
                        <strong>{{$errors->first('title')}}</strong>
                      </div>
                     @endif
                   </div>
                   <div class="form-group">
                     <label for="question-body">Question Explanation: </label>
                     <textarea name="body" id="question-body" rows="10" class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}"></textarea> 
                     @if($errors->has('body'))
                      <div class="invalid-feedback">
                        <strong>{{$errors->first('body')}}</strong>
                      </div>
                     @endif
                   </div>
                  <div class="">
                    <button type="submit" class="btn btn-primary">Send Question</button>
                  </div>
                 </form>
              </div>
        </div>
    </div>
</div>
@endsection
