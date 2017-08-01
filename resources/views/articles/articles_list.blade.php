@extends("../layout/master")

@section("title")
	Articles List
@endsection

@section("main_content")
	<ul>
		<a href='{{ url("/home/create")}}'><button class='btn btn-success'>Create</button></a>
		@foreach($articles as $article)
			<li><a href='{{url("/home/$article->id")}}'>{{ $article->title }}</a></li>
			<div>
				<a href='{{ url("/home/edit/$article->id")}}'><button class="btn btn-info">Edit</button></a>
				<a href='{{ url("/home/delete/$article->id")}}'><button class="btn btn-danger">Delete</button></a>
			</div>
		@endforeach
	</ul>
@endsection