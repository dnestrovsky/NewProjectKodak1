<?php

namespace App\Http\Controllers;

use App\Models\Souvenirs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function allData(){
        return view('souvenirs', ['data' => Souvenirs::all()]);
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
        $path = $request->file('image')->store('souvenirs');
        $params = $request->all();
        $params['image'] = $path;
        Souvenirs::create($params);
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

    public function showprod($id){
        $souvenir = new Souvenirs();
        return view('souvenirpage', ['data' => $souvenir->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Souvenirs  $souvenirs
     * @return \Illuminate\Http\Response
     */
    public function edit(Souvenirs $souvenir)
    {
        return view('souvenir-edit', compact('souvenir'));
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
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($souvenir->image);
            $params['image'] = $request->file('image')->store('souvenirs');
        }
        $souvenir->update($params);
        return redirect()->route('souvenirs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Souvenirs  $souvenirs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Souvenirs $souvenir)
    {
        $souvenir->delete();
        Storage::delete($souvenir->image);
        return redirect()->route('souvenirs.index');
    }

}
