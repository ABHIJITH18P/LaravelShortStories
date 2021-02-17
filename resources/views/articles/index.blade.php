@extends('layouts.theme')
@section('content')
<a href="articles/create">Add New Article</a>
<ul class="style1">

	@foreach($articles as $article)
				<li class="first">
					<h3><a href="/articles/{{$article->id}}"> {{$article->title}}</a></h3>
					<p><a href="#">{{$article->body}}</a></p>
					<a href="/articles/{{$article->id}}/edit" class="btn btn-success">Edit</a>
				</li>
				@endforeach
			</ul>
@endsection
@if(Session::has('article_created'))
<script>
	toastr.success("{!!Session::get('article_created')!!}")
</script>
@endif