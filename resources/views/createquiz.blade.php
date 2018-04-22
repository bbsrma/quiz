
@extends('index')

@section('content')
  <div class="container">
  <h2><center>Create quiz </center></h2>
  <form class="form-horizontal" method="post" action="{{route('createquiz')}}">
    @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="title">Enter title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter title" name="title">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="type">select type</label>
      <div class="col-sm-10">
       <select name="type" class="form-control">
        <option>multiple choice</option>
        <option>yes or no</option>
        <option>other</option>
        <option>other</option>
      </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">description</label>
      <div class="col-sm-10">          
        <textarea name="description" value="description" class="form-control"> description </textarea>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Create</button>
      </div>
    </div>
  </form>
</div>
@endsection