<?php

namespace Akshaynetprophets\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        $response = Http::get('https://api.first.org/data/v1/countries');

        return $response;
    }
}