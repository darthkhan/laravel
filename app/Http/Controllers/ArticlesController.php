<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
	function createArticle(){
		$new_article = new Article();
		$new_article->title = "Article 3";
		$new_article->content = "Article 3 content";
		$new_article->save();

		return redirect('/home');
	}

	function showArticles(){
		$articles = Article::all();
		return view('articles/articles_list', compact('articles'));
	}

	function displayOneArticle($id){
		$article = Article::find($id);

		return view('articles/display_one_article', compact('article'));
	}

	function deleteArticle($id){
		$article_tbd = Article::find($id);
		$article_tbd->delete();

		return back();
	}
}
