<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Review;
class AdminReviewsController extends Controller
{
    public function index(){

        $reviews= DB::table('reviews')->paginate(3);
        return view('admin.reviews.index', compact('reviews' ));


    }
    public function show($id){
        $review = Review::findOrFail($id);
        return view('admin.reviews.show', compact('review'));
    }
    public function create(){
        return view("admin.reviews.create", compact('review'));

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
        return redirect('/admin/reviews');

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
        return redirect('/admin/reviews');
    }
    public function destroy(Review $review){
        $review->delete();
        return redirect('/admin/reviews');
    }
}

