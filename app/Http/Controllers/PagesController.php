<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * 
 */
class PagesController extends Controller
{
	
	public function index()
	{
		$articles = Article::all();

		return view('home',compact('articles'));
	}
	public function showArticle($id)
	{
		// $article = Article::find($id);
		// return view('article'->with('article',$article));
		$articles = DB::table('tbl_product')->get();
		return view('article',compact('articles'));

	}
}