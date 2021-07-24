<?php

namespace App\Http\Controllers;

use App\Models\catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        $catalogs = DB::table('catalogs')->get();
        $skills = DB::table('skills')->get();
        return view('catalog', compact('catalogs', 'skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $catalogs = DB::table('catalogs')->where('id', $id)->get();
        $skills = DB::table('skills')->get();
        return view('detail', compact('catalogs', 'skills'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $catalog = catalog::find($id);
        $catalog->title = $request->input('title');
        $catalog->text = $request->input('text');;
        $catalog->skill = $request->input('skill');
        $catalog->save();
        return redirect('/catalog');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        catalog::destroy($id);
        return redirect('/catalog');
    }


    public function add(Request $request)
    {
        $catalog = new catalog;
        $catalog->user_id = 1;
        $catalog->title = $request->input('title');
        $catalog->text = $request->input('text');;
        $catalog->skill = $request->input('skill');
        $catalog->save();
        return redirect('/catalog/add');
    }

    public function data()
    {
        $skills = DB::table('skills')->get();
        return view('addcatalog', compact('skills'));
    }
}
