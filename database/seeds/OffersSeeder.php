<?php

use Illuminate\Database\Seeder;

class OffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // get data from json file
        $path = storage_path() . "/json/data.json";

        $json = json_decode(file_get_contents($path), true); 
        
        // insert each row into database table
        foreach ($json["offers"] as $offer) {
            DB::table('offers')->insert([
                'offer_id'  => $offer["offer_id"],
                'name'      => $offer["name"],
                'image_url' => $offer["image_url"],
                'cash_back' => $offer["cash_back"] * 100,
            ]);
        }
    }
}
