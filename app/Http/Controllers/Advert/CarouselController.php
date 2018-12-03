<?php

namespace App\Http\Controllers\Advert;

use App\models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarouselController extends Controller
{

    public function index()
    {

     $carousel = Carousel::latest()->paginate(10);
        //加载模板文件
        return view('admin.advert.index',compact('carousel'));
    }


    public function create()
    {


        return view('admin.advert.create');

    }


    public function store(Request $request)
    {
        //
    }


    public function show(Carousel $carousel)
    {
        //
    }


    public function edit(Carousel $carousel)
    {
        //
    }

    public function update(Request $request, Carousel $carousel)
    {
        //
    }


    public function destroy(Carousel $carousel)
    {
        //
    }
}
