@extends('layouts.theme')

@section('content')
<form method="post" action="/articles">
	@csrf
	<div class="form-group">
		<label>Article Title</label>
	<input type="text" name="title" value="{{old('title')}}" class="form-control">
	@error('title')
	<p style="color:red">{{$errors->first('title')}}</p>
	@enderror
	</div>
	<div class="form-group">
		<label>Article Body</label>
	<textarea class="form-control" name="body">{{old('body')}}</textarea>
	@error('body')
	<p style="color:red">{{$errors->first('body')}}</p>
	@enderror
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Save</button>
	</div>
</form>
@endsection