<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookStore;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $userId = auth()->user()->id;
        $books = BookStore::where('user_id',$userId)->cursor();
        return view('dashboard',compact('books'));
    }

    public function addBook(){
        return view('admin_view.add-book');
    }

    public function saveBook(Request $request){
        $userId = auth()->user()->id;
        $imageUrl =$request->image_url;
        BookStore::create([
            'user_id'=>$userId,
            'title'=>$request->title,
            'author'=>$request->author,
            'genre'=>$request->genre,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'image_url'=>$imageUrl,
        ]);

        return back()->with('success','book added');
    }

    public function show($bookId){

        $book = BookStore::find($bookId);
        return view('admin_view.show-book',compact('book'));
    }

    public function edit($bookId){

        $book = BookStore::find($bookId);
        return view('admin_view.edit-book',compact('book'));
    }

    public function update(Request $request,$bookId){
        $imageUrl =$request->image_url;
        $book = BookStore::where('id',$bookId)->update([
            'title'=>$request->title,
            'author'=>$request->author,
            'price'=>$request->price,
            'genre'=>$request->genre,
            'quantity'=>$request->quantity,
            // 'image_url'=>$imageUrl,
        ]);
       return back()->with('success','Book data updated.');
    }

    public function destroy($bookId){
        
        $book = BookStore::where('id',$bookId)->delete();
       return back()->with('success','Book deleted!');
}


    

    




}
