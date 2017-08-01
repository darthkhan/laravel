@extends('layout/master')

@section('title')
	{{ $article->title }}
@endsection

@section('main_content')
	<form class="form-horizontal" method="POST" action='{{ url("/edit/$article->id") }}'>
	{{ csrf_field() }}
		Title: <input type="text" name="title" value="{{$article->title}}"></input>
		Content: <input type="text" name="content" value="{{$article->content}}"></input>
		<input type="submit" name="submit" value="Submit" class="btn btn-success">
	</form>
@endsection