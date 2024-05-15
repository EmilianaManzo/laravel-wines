<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wine;
use Illuminate\Support\Str;

class VinesTableSeeder extends Seeder
{

    public function run(): void
    {
        $data_wine = file_get_contents('https://api.sampleapis.com/wines/reds');
        $data = json_decode($data_wine);

        foreach ($data as $item) {
            $new_wine = new Wine();
            $new_wine = $item->winery;
            $new_wine = $item->wine;
            $new_wine = $this->makeSlug($new_wine->wine);
            $new_wine = $item->rating_average;
            $new_wine = $item->rating_reviews;
            $new_wine = $item->location;
            $new_wine = $item->image;
            $new_wine->save();
        }
    }
    private function makeSlug($string)
    {
        $slug = Str::slug($string, '-');
        $original_slug = $slug;
        $exixts = Wine::where('slug', $slug)->first();
        $i = 1;
        while ($exixts) {
            $slug = $original_slug . '-' . $i;
            $exixts = Wine::where('slug', $slug)->first();
            $i++;
        }
        return $slug;
    }
}
