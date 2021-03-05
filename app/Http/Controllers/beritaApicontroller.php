<?php

namespace App\Http\Controllers;
use App\models\berita;
use Illuminate\Http\Request;

class beritaApicontroller extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $berita=berita::all();

        return $berita;
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

        $berita=berita::create($input);
         return $berita;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita=berita::find($id);
       
        return $berita;
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

        
        $berita=berita::find($id);

        if(empty($berita)){
            return response()->json(['message' => 'data tidak ditemukan . '], 404);

        }
        $berita->update($input);

        return response()->json($berita);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita=berita::find($id);

        if(empty($berita)){
            return response()->json(['message' => 'data tidak ditemukan . '], 404);

        }
        $berita->delete();

        return response()->json(['message' => 'data telah  dihapus   . ']);
    }
}
