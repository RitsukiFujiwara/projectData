<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index(Request $request)
    {
        $user = Auth::id();
        $skills = DB::table('skills')->get();

        $keyword = $request->input('keyword');
        $search_skill = $request->input('skill');

        $query = Catalog::query();

        if (!empty($keyword)) {
            $query->where('title', 'LIKE', "%{$keyword}%");
        }
        if (!empty($search_skill)) {
            $query->where('skill', '=', $search_skill);
        }
        $query->where('user_id', '=', $user);
        $results = $query->get();
        return view('catalog', compact('skills', 'search_skill', 'keyword', 'results'));
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
        session()->flash('message', '更新が完了しました。');
        return redirect('/mypage');
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
        $catalog->user_id = Auth::id();
        $catalog->title = $request->input('title');
        $catalog->text = $request->input('text');;
        $catalog->skill = $request->input('skill');
        $catalog->save();
        session()->flash('message', '新規プロジェクトの登録が完了しました。');
        return redirect('/mypage');
    }

    public function data()
    {
        $skills = DB::table('skills')->get();
        return view('addcatalog', compact('skills'));
    }

    public function search(Request $request)
    {
        $user = Auth::id();
        $keyword = $request->input('keyword');
        $skill = $request->input('skill');

        $query = Catalog::query();

        if (!empty($keyword)) {
            $query->where('title', 'LIKE', "%{$keyword}%");
        }
        if (!empty($skill)) {
            $query->where('skill', '=', $skill);
        }
        $query->where('user_id', '=', $user);
        $result = $query->get();

        return view('catalog', compact('result', 'keyword', 'skill'));
    }
}
