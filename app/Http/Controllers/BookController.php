<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function create(Request $request){
        $Name=$request['Name'];
        $Author=$request['Author'];
        $Genre=$request['Genre'];

        $book=new books();

        $book->Name=$Name;
        $book->Author=$Author;
        $book->Genre=$Genre;

        $book->save();

        return redirect()->back(); 

    }

   
    public function show(){
       /* $books=$book::all();

       return view('index',['books'=>$books]);
       */
    }

}
