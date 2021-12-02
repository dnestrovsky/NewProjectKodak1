<?php

namespace App\Http\Controllers;

use App\Models\Souvenir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Imagesv;

class SouvenirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $souvenirs = Souvenir::orderBy('created_at', 'desc')->Paginate(3);
        
        return view('allsouvenirs', compact('souvenirs'));
    }

    public function allData(){
        $data = Souvenir::orderBy('created_at', 'desc')->get();
        
        return view('souvenirs', compact('data'));
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
        $params = $request->all();

        unset($params['image']);
        if($request->hasFile('image')) {
            $params['image'] = $request->file('image')->store('albums');
        }

        Souvenir::create($params);

        return redirect()->route('souvenirs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Souvenir  $souvenir
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $souvenir = Souvenir::with('Photos')->find($id);
        return view('souvenir-show', ['souvenir' => $souvenir]);;
    }

    public function showMain($id)
    {
        $souvenir = Souvenir::with('Photos')->find($id);
        return view('souvenirpage', ['souvenir' => $souvenir]);;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Souvenir  $souvenir
     * @return \Illuminate\Http\Response
     */
    public function edit(Souvenir $souvenir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Souvenir  $souvenir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Souvenir $souvenir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Souvenir  $souvenir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Souvenir $souvenir)
    {
        $souvenir->delete();
        Storage::delete($souvenir->image);
        return redirect()->route('souvenirs.index');
    }
}
