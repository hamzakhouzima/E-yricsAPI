<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;


class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $album = Album::all();

        return response()->json($album);

    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $album = new Album();
        $album->title = $request->title;
        $album->img_path = $request->img_path;
        $album->release_date = $request->release_date;
// dd($album);
        $album->save();

        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $album = Album::find($id);

        return response()->json($album);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $album =Album::find($id);


        $album->title = $request->title;
        $album->img_path = $request->img_path;
        $album->release_date = $request->release_date;

        // $album->fill($request->only(['utitle', 'uimg_path', 'urelease_date']));
        // dd($request->only(['utitle', 'uimg_path', 'urelease_date']));
        // dd(request()->all());
        $album->save();
        // dd($album);
        return response()->json(['message' => 'User updated successfully']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $album = Album::find($id);
        $album->delete();
    }
}
