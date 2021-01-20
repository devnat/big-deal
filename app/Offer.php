<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function format() {
        // ->map(function ($row, $key) {
        //     $row->row_number = $key + 1;
        //     $row->cash_back = number_format(($row->cash_back /100), 2, '.', ' ');
        //     return $row;
        // })

        $this->cash_back = number_format(($this->cash_back /100), 2, '.', ' ');
    }
}
