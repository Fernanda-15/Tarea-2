<?php
require_once('Publisher.php');

class PublishersController extends Controller
{
  public function index()
  {
    return view('publisher/index', [
      'publisher' => Publisher::all(),
      'title' => 'Publisher List'
    ]);
  }
  public function show($id)
  {
    $p = Publisher::find($id);
    return view(
      'publisher/show',
      [
        'publisher' => $p,
        'title' => 'Publisher Detail'
      ]
    );
  }

  public function create(){
    return view(
      'publisher/create',
      ['title' => 'Publisher Create']
    );
  }

    public function store($_=NULL) {
    $publisher = Input::get('publisher');
    $country = Input::get('country');
    $founded = Input::get('founded');
    $genere = Input::get('genere');
    $books__book_id = Input::get('books__book_id');
    $books__title = Input::get('books__title');
    $item = [
      'publisher' => $publisher,
      'country' => $country,
      'founded' => $founded,
      'genere' => $genere,
      'books__book_id' => $books__book_id,
      'books__title' => $books__title
    ];
    Publisher::create($item);
    return redirect('/publishers');
  } 

  // public function update($_,$id) {

  //   $publisher = Input::get('publisher');
  //   $country = Input::get('country');
  //   $founded = Input::get('founded');
  //   $genere = Input::get('genere');
  //   $books__book_id = Input::get('books__book_id');
  //   $books__title = Input::get('books__title');
  //   $author_id = Input::get('author_id');
  //   $publisher = Input::get('publisher');
  //   $publisher_id = Input::get('publisher_id');
  //   $item = ['publisher'=>$publisher,'country'=>$country,
  //            'founded'=>$founded,'genere'=>$genere,
  //            'books__book_id'=>$books__book_id,
  //            'books__title'=>$books__title];
  //   Publisher::update($id,$item);
  //   return redirect('/publisher');
  // }  

  public function edit($id)
  {
    $p = Publisher::find($id);
    return view(
      'publisher/edit',
      [
        'publisher' => $p,
        'title' => 'Publisher Edit'
      ]
    );
  }
}
?>