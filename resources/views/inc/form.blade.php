 {{csrf_field()}}
 <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
   <label for="question-title">Question Title: </label>
   <input type="text" class="form-control" value="{{ old('title', $question->title)}}" name="title" id="question-title">
   @if($errors->has('title'))
    <div class="invalid-feedback text-danger">
      <strong>{{$errors->first('title')}}</strong>
    </div>
   @endif
 </div>
 <div class="form-group {{$errors->has('body') ? 'has-error' : ''}}">
   <label for="question-body">Question Explanation: </label>
   <textarea name="body" id="question-body" rows="10" class="form-control ">{{ old('title', $question->body)}}</textarea> 
   @if($errors->has('body'))
    <div class="invalid-feedback text-danger">
      <strong>{{$errors->first('body')}}</strong>
    </div>
   @endif
 </div>
<div class="">
  <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
</div>