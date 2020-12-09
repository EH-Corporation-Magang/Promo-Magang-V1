<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diskon;
use App\KategoriBarang;
use App\PopularSlider;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function detailProduct($id)
    {
        $diskon = Diskon::get();
        $detailbarang = Diskon::where('id', $id)->get();
        return view('user.product-detail', ['detail' => $detailbarang, 'diskon' => $diskon]);
    }

    public function categoryView()
    {
        $kategori = KategoriBarang::get();
        $popular = PopularSlider::get();

        return view('user.shop', ['category' => $kategori, 'popular' => $popular, 'diskon' => Diskon::paginate(10)]);
    }
}