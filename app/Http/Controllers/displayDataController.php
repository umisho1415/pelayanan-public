<?php

namespace App\Http\Controllers;

use App\MyClass\hotel;
use App\MyClass\rumahSakit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class displayDataController extends Controller
{
    public function showData(): JsonResponse
    {
        $hotel = new hotel('hotel');
        $rs = new rumahSakit('rs');

        return response()->json([
            'hotel' => $hotel->threeMusketier(),
            'rs' => $rs->threeMusketier()
        ]);
    }
}
