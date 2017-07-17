@extends("../layout/master")

@section("title")
	Articles List
@endsection

@section("main_content")
	<ul>
		@foreach($articles as $article)
			<li><a href='{{url("/home/$article->id")}}'>{{ $article->title }}</a></li>
			<div>
				<a href='{{ url("/home/edit/$article->id")}}'><button>Edit</button></a>
				<a href='{{ url("/home/delete/$article->id")}}'><button>Delete</button></a>
			</div>
		@endforeach
	</ul>
@endsection