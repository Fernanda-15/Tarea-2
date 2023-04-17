<?php
  require_once('Author.php');

  class AuthorsController extends Controller {
    public function index() {
      return view('author/index',['author' => Author::all(), 
      'title'=>'Author List']);
   }
   public function show($id) {
    $a = Author::find($id);
    return view('author/show',
      ['author'=>$a,
       'title'=>'Author Detail']);
  }

  public function create() {
    return view('author/create',
      ['title'=>'Author Create']);
  }  

  public function store($_=NULL) {
    $author = Input::get('author');
    $nationality = Input::get('nationality');
    $birth_year = Input::get('birth_year');
    $fields = Input::get('fields');
    $books__book_id = Input::get('books__book_id');
    $books__title = Input::get('books__title');
    $item = ['author'=>$author,'nationality'=>$nationality,
             'birth_year'=>$birth_year,'fields'=>$fields,
             'books__book_id'=>$books__book_id,
             'books__title'=>$books__title];
    Author::create($item);
    return redirect('/authors');
  }  

/*
  public function update($_,$id) {

    $publisher = Input::get('publisher');
    $country = Input::get('country');
    $founded = Input::get('founded');
    $genere = Input::get('genere');
    $books__book_id = Input::get('books__book_id');
    $books__title = Input::get('books__title');
    $author_id = Input::get('author_id');
    $publisher = Input::get('publisher');
    $publisher_id = Input::get('publisher_id');
    $item = ['publisher'=>$publisher,'country'=>$country,
             'founded'=>$founded,'genere'=>$genere,
             'books__book_id'=>$books__book_id,
             'books__title'=>$books__title];
    Publisher::update($id,$item);
    return redirect('/publisher');
  }  
  */

  public function edit($id) {
    $p = Author::find($id);
    return view('author/edit',
      ['author'=>$p,
       'title'=>'Author Edit']);
  }  
  }
?>