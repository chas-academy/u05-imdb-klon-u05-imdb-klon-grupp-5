<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index($movie_id)
    {
        $reviews = Review::get();
        $movie = Movie::findOrFail($movie_id);
        return view('review', compact('movie_id', 'reviews', 'movie'));
    }

    public function show()
    {
        $reviews = Review::get();
        return view('review', ['reviews' => $reviews]);
    }

    public function create()
    {
    }

    public function store(Request $request, $movie_id)
    {
        $review = new Review();
        $review->review = $request->review;
        $review->movie_id = $movie_id;
        $review->save();
        return redirect()->route('movies.reviews.index', ['movie' => $movie_id])->with('status', 'Your review has been sent for review!!!');
    }
    public function storeReview(Request $request)
    {
        $review = new Review();
        $review->review = $request->review;

        $review->save();
        return redirect('review')->with('status', 'Your review has been sent for review!!!');
    }


    public function delete($id)
    {
        $data = Review::find($id);
        $data->delete();

        return back();
    }
}
