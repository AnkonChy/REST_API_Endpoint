<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use Exception;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreProductReviewRequest;
use App\Http\Requests\UpdateProductReviewRequest;

class ProductReviewController extends Controller
{

    public function index()
    {
        $reviews = ProductReview::get();

        return $reviews;
    }


    public function submit(Request $request)
    {
        try {
            $request->validate([
                'user_id' => 'required|integer',
                'product_id' => 'required|integer',
                'review_text' => 'required|string',
            ]);

            ProductReview::created([
                'user_id' => $request->user_id,
                'product_id' => $request->user_id,
                'review_text' => $request->user_id,
            ]);

            return response()->json(['message' => 'Review Done'], 200);

        } catch (Exception $e) {
            return response()->json(['message' => 'Review Failed'], 200);
        }



    }

}
