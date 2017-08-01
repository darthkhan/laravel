@extends('layout/master')

@section('title')
	{{ $article_tbe->title }}
@endsection

@section('main_content')
	<form method="POST" action="{{ url('/create') }}">
	{{ csrf_field() }}
		Title: <input type="text" name="title"> <br>
		Content: <input type="text" name="content"> <br>
		<input type="submit" name="submit" value="Submit" class="btn btn-success">
	</form>
@endsection