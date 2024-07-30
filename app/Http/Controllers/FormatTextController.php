<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextFormat;

class FormatTextController extends Controller
{
    public function show()
    {
        $text = 'pelayanan publik';
        
        $capitalizedText = TextFormat::capitalize($text);
        $sentenceText = TextFormat::sentence($text);
        $upperText = TextFormat::upper($text);

        return response()->json([
            'original' => $text,
            'capitalized' => $capitalizedText,
            'sentence' => $sentenceText,
            'upper' => $upperText
        ]);
    }
}
