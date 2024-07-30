<?php

namespace App\Http\Controllers;

use App\MyClass\hotel;
use App\MyClass\rumahSakit;
use Illuminate\Http\Request;

class salamDariBinjaiController extends Controller
{
    public function logGreetings()
    {
        $hotel = new hotel('hotel');
        $rs = new rumahSakit('rs');

        Log::info($hotel->salamDariBinjai());
        Log::info($rs->salamDariBinjai());

        return response()->json([
            'message' => 'Informasi Pelayanan Publik',
            'hotel' => $hotel->salamDariBinjai(),
            'rs' => $rs->salamDariBinjai()
        ]);
    }
}
