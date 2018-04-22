@extends('index')

@section('content')
	<div class="container">
		<div class="row">
			<div ><h3>questions for mcq
				<select name="quiz type">
				@foreach($quizs as $quiz)
						
							<option value="{{$quiz->type}}">{{$quiz->type}}</option>

				@endforeach
			</select>
			</h3>
			<div class="col-md-12">
				<form class="form-inline" id="form" action="{{route('postquestion')}}" method="post">
					@csrf
					<div class="form-group">
					      <label for="question">Questions:</label>
					      <input type="text" class="form-control" placeholder="Enter question" name="question">
    				</div>
					<div class="form-group">
					      <label for="answer">Answer:</label>
					      <input type="text" class="form-control" placeholder="Enter answer" name="answer1">
    				</div>
					<div class="form-group">
					      <label for="answer">Answer:</label>
					      <input type="text" class="form-control" placeholder="Enter answer" name="answer2">
    				</div>
    				<div class="form-group">
					      <label for="answer">Answer:</label>
					      <input type="text" class="form-control" placeholder="Enter answer" name="answer3">
    				</div>
    				<button  id="new" >add new</button>

    				<button class="btn btn-primary" type="submit">submit</button>

				</form>
			</div>
		</div>		

@endsection
<script>
$(document).ready(function(){
    $("#new").click(function(){
        alert("add new row");
    });

    
});
</script>