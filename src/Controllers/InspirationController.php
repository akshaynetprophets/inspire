<?php
namespace Akshaynetprophets\Inspire\Controllers;

use Illuminate\Http\Request;
use Akshaynetprophets\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return $quote;
    }
}