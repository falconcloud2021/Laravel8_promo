<?php

namespace App\Http\Controllers\Promo;

use App\Http\Controllers\Controller;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        $context = ['promo' => Promo::latest()->get()];
        return view('promo.index', $context);
    }

    public function details(Promo $dtl)
    {
        return view('promo.single', ['dtl' => $dtl]);
    }

}
