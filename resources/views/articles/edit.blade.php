@extends('layouts.theme')

@section('content')
<form method="post" action="/articles/{{$article->id}}">
	@csrf
	@method("PUT")
	<div class="form-group">
		<label>Article Title</label>
	<input type="text" name="title" value="{{$article->title}}" class="form-control">
	<p style="color:red">{{$errors->first('title')}}</p>
	</div>
	<div class="form-group">
		<label>Article Body</label>
	<textarea  name="body" class="form-control">{{$article->body}}</textarea>
	<p style="color:red">{{$errors->first('body')}}</p>
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Save</button>
	</div>
</form>
@endsection