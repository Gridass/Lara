<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Review;
class ReviewController extends Controller
{
    public function index(){

        $reviews= DB::table('reviews')->paginate(6);
        return view('reviews.index', compact('reviews' ));


    }
    public function show($id){
        $article = Review::find($id);
        return view('reviews.show', compact('reviews'));

    }
    public function create(){
        return view("reviews.create", compact('review'));

    }
    public function store(){
        $this->validate(request(),[
            'name' => 'required|min:4',
            'email' => 'required',
            'message' => 'required',

        ]);

        Review::create(
            request(array( 'name','email','message'))
        );
        return redirect('/');

    }
    public function edit(Review $review){
        return view("reviews.edit", compact('review'));

    }
    public function update(Review $review){
        $this->validate(request(),[
            'name' => 'required|min:4',
            'email' => 'required',
            'message' => 'required',
        ]);
        $review->update(request(['name','email','message']));
        return redirect('/');
    }
    public function destroy(Review $review){
        $review->delete();
        return redirect('/');
    }
}

