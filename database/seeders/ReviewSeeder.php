<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Review;
use App\Models\Doctor;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = config('review');
        $minDoc = DB::table('doctors')->min('id');
        $maxDoc = DB::table('doctors')->max('id');

        foreach ($reviews as $review) {
            $new_review = new review();

            $new_review->doctor_id = rand($minDoc, $maxDoc);
            $new_review->name = $review['name'];
            $new_review->text = $review['text'];
            $new_review->email = $review['email'];

            $new_review->save();
        }
    }
}
