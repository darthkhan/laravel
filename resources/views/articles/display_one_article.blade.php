@extends('layout/master')

@section('title')
	{{ $article->title }}
@endsection

@section('main_content')
	{{ $article->content }}
@endsection