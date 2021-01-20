<?php

namespace App\Http\Controllers;

use App\Offer;

class OffersController
{
    public function show(){
        $offers = Offer::paginate(5);

        return view('offers-list', [
            'offers' => $offers
        ]);
    }
}