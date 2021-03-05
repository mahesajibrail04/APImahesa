<?php

namespace App\Http\Controllers;
use App\models\galeri;
use Illuminate\Http\Request;

class galeriApicontroller extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $galeri=galeri::all();

        return $galeri;
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();

        $galeri=galeri::create($input);
         return $galeri;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeri=galeri::find($id);
       
        return $galeri;
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
        $input=$request->all();

        
        $artikel=galeri::find($id);

        if(empty($galeri)){
            return response()->json(['message' => 'data tidak ditemukan . '], 404);

        }
        $galeri->update($input);

        return response()->json($galeri);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri=galeri::find($id);

        if(empty($galeri)){
            return response()->json(['message' => 'data tidak ditemukan . '], 404);

        }
        $galeri->delete();

        return response()->json(['message' => 'data telah  dihapus   . ']);
    }
}
