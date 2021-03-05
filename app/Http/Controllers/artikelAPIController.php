<?php

namespace App\Http\Controllers;
use App\models\artikel;
use Illuminate\Http\Request;


class artikelAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $artikel=artikel::all();

        return $artikel;
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

        $artikel=artikel::create($input);
         return $artikel;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel=artikel::find($id);
       
        return $artikel;
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

        
        $artikel=artikel::find($id);

        if(empty($artikel)){
            return response()->json(['message' => 'data tidak ditemukan . '], 404);

        }
        $artikel->update($input);

        return response()->json($artikel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel=artikel::find($id);

        if(empty($artikel)){
            return response()->json(['message' => 'data tidak ditemukan . '], 404);

        }
        $artikel->delete();

        return response()->json(['message' => 'data telah  dihapus   . ']);
    }
}
