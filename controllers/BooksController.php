<?php
  require_once('Book.php');

  class BooksController extends Controller {
    public function index() {
      return view('book/index',['books' => Book::all(), 
      'title'=>'Books List']);
   }
   public function show($id) {
    $b = Book::find($id);
    return view('book/show',
      ['book'=>$b,
       'title'=>'Book Detail']);
  }

  public function create() {
    return view('book/create',
      ['title'=>'Book Create']);
  }  

  public function store($_=NULL) {
    $title = Input::get('title');
    $edition = Input::get('edition');
    $copyright = Input::get('copyright');
    $language = Input::get('language');
    $pages = Input::get('pages');
    $author = Input::get('author');
    $author_id = Input::get('author_id');
    $publisher = Input::get('publisher');
    $publisher_id = Input::get('publisher_id');
    $item = ['title'=>$title,'edition'=>$edition,
             'copyright'=>$copyright,'language'=>$language,
             'pages'=>$pages,'author'=>$author,
             'author_id'=>$author_id,'publisher'=>$publisher,
             'publisher_id'=>$publisher_id];
    Book::create($item);
    return redirect('/books');
  }  

  public function edit($id) {
    $b = Book::find($id);
    return view('book/edit',
      ['book'=>$b,
       'title'=>'Book Edit']);
  } 

 public function update($id,$_=NULL) {
    $title = Input::get('title');
    $edition = Input::get('edition');
    $copyright = Input::get('copyright');
    $language = Input::get('language');
    $pages = Input::get('pages');
    $author = Input::get('author');
    $author_id = Input::get('author_id');
    $publisher = Input::get('publisher');
    $publisher_id = Input::get('publisher_id');
    $item = ['title'=>$title,'edition'=>$edition,
             'copyright'=>$copyright,'language'=>$language,
             'pages'=>$pages,'author'=>$author,
             'author_id'=>$author_id,'publisher'=>$publisher,
             'publisher_id'=>$publisher_id];
    Book::update($id,$item);
    return redirect('/books');
  }   

 
  }
?>