<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Souvenir;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $souvenir = Souvenir::find($id);
        return view('addimage')
        ->with('souvenir',$souvenir);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'souvenir_id' => 'required|numeric|exists:souvenirs,id',
            'image'=>'required|image'
          ];
      
        $input = ['souvenir_id' => null];
      
        $validator = Validator::make($request->all(), $rules);
          if($validator->fails()){
              return redirect()->route('addimage', ['id' => $request->get('souvenir_id')])->withErrors($validator)->withInput();
          }
      
        $path = $request->file('image')->store('images');
        $params = $request->all();
        $params['image'] = $path;
        Image::create($params);
      
        return redirect()->route('souvenirs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
