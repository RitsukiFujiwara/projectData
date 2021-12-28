<?php

namespace App\Http\Controllers;

use App\Models\skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $skills = DB::table('skills')->get();
        return view('skill', compact('skills'));
    }
    public function create(Request $request)
    {
        $skill = new skills;
        $skill->skill_name = $request->input('skill_name');
        $skill->save();
        return redirect('/mypage');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // $catalogs = DB::table('catalogs')->where('id', $id)->get();
        $skills = DB::table('skills')->where('id', $id)->get();
        return view('skillDetail', compact('skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $skill = skills::find($id);
        $skill->skill_name = $request->input('skill_name');
        $skill->save();
        return redirect('/skill');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        skills::destroy($id);
        return redirect('/skill');
    }
}
