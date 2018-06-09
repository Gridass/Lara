<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Review;
class ReviewController extends Controller
{
    public function index(){

        $reviews= DB::table('reviews')->paginate(3);
        return view('reviews.index', compact('reviews' ));


    }
    public function show($id){
        $review = Review::findOrFail($id);
        return view('reviews.show', compact('review'));
    }
    public function create(){
        return view("reviews.create", compact('review'));

    }
    public function store(){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',

        ]);

        Review::create(
            request(array( 'name','email','message'))
        );
        return redirect('/reviews');

    }
    public function edit(Review $review){
        return view("reviews.edit", compact('review'));

    }
    public function update(Review $review){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',

        ]);
        $review->update(request(['name','email','message']));
        return redirect('/reviews');
    }
    public function destroy(Review $review){
        $review->delete();
        return redirect('/reviews');
    }
}

