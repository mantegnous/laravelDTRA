<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Article;

class ArticleController extends Controller
{
    public function index() {
	 	// get all the articles
	 	$articles = Article::all();  // load the view and pass the articles 
		return View::make('index') ->with('articles', $articles); 
	}

	public function create() { 
		// load the create form (app/views/articles/create.blade.php) 
		return View::make('create');
	}

	public function store(){        
		// validate        
		// read more on validation at http://laravel.com/docs/validation        
		$rules = array(
				'title' => 'required',            
				'description' => 'required'        
			);        
		$validator = Validator::make(Input::all(), $rules);        
		// process the login        
		if ($validator->fails()) {            
			return Redirect::to('articles/create')                
				->withErrors($validator)                
				->withInput(Input::except('password'));        
		} else {           
		 // store            
		 	$article = new article;            
		 	$article->title       = Input::get('title');            
		 	$article->description      = Input::get('description');            
		 	$article->save();            
		 	// redirect            
		 	Session::flash('message', 'Successfully created article!');            
		 	return Redirect::to('articles');        
		}   
	}

	public function show($id) {
		 // get the article 
		$article= Article::find($id);
	 
		// show the view and pass the article to it 
		return View::make('show') 
			->with('article', $article); 
	}

	public function edit($id){    
		// get the example    
		$article = Article::find($id);    

		// show the edit form and pass the article    	
		return View::make('edit')
			->with('article', $article);
	}

	public function update($id){    
		// validate 
		$rules = array(
			'title'=> 'required', 
			'description'=> 'required',);   
	 	$validator = Validator::make(Input::all(), $rules);    
		// process the login    
		if ($validator->fails()) {        
		return Redirect::to('articles/' . $id . '/edit')
			->withErrors($validator)
			->withInput(Input::except('password'));    
		}else {        
			// store        
			$article = Article::find($id);        	
			$article->title = Input::get('title');        	
			$article->description = Input::get('description');        	
			$article->save();        
			// redirect        
			Session::flash('message', 'Successfully updated article!');        
			return Redirect::to('articles');    
		}
	}

	public function destroy($id) { 
		// delete 
		$article = Article::find($id); 
		$article->delete(); 
		// redirect 
		Session::flash('message', 'Successfully deleted the article!'); 
		return Redirect::to('articles');
	}

}
