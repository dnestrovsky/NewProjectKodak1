<?php

namespace App\Http\Controllers;

use App\Models\Souvenirs;
use Illuminate\Http\Request;

class SouvenirsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $souvenirs = Souvenirs::orderBy('created_at','desc')->paginate(4);
        return view('allsouvenirs', compact('souvenirs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addsouvenir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Souvenirs::create($request->all());
        return redirect()->route('souvenirs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Souvenirs  $souvenirs
     * @return \Illuminate\Http\Response
     */
    public function show(Souvenirs $souvenir)
    {
        return view('souvenir-show', compact('souvenir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Souvenirs  $souvenirs
     * @return \Illuminate\Http\Response
     */
    public function edit(Souvenirs $souvenirs)
    {
        return view('addsouvenir', compact('souvenirs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Souvenirs  $souvenirs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Souvenirs $souvenir)
    {
        $souvenir->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Souvenirs  $souvenirs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Souvenirs $souvenirs)
    {
        //
    }
}
