<?php

namespace App\Http\Controllers\Admin;

use App\Models\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlashControlle extends Controller
{

    public function index()
    {
        $flashs = Flash::all();
//        dd($flashs);
        return view('admin.flash.index',compact('flashs'));
    }


    public function create()
    {
        return view('admin.flash.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        Flash::created($request->all());
        return redirect()->route('admin.flash.index')->with('success','添加成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Flash  $flash
     * @return \Illuminate\Http\Response
     */
    public function show(Flash $flash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Flash  $flash
     * @return \Illuminate\Http\Response
     */
    public function edit(Flash $flash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Flash  $flash
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flash $flash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Flash  $flash
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flash $flash)
    {
        //
    }
}
