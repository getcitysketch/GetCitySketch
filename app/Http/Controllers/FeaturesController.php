<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Feature::all();

        return view('features.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('features.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feature = new Feature;
        $feature->title = $request->input('title');
        $feature->body = $request->input('body');

        if($request->hasFile('image')){
            $filename = $request->file('image')->getClientOriginalName();
            $feature->image = $filename;

            //Upload Image
            $path = $request->file('image')->storeAs('public/images', $filename);
        }
        $feature->save();

        return redirect('admin/features');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feature = Feature::find($id);

        return view('features.show', compact('feature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feature = Feature::find($id);

        return view('features.edit', compact('feature'));
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
        $feature = Feature::find($id);
        $feature->title = $request->input('title');
        $feature->body = $request->input('body');

        if($request->hasFile('image')){
            $filename = $request->file('image')->getClientOriginalName();
            $feature->image = $filename;

            //Upload Image
            $path = $request->file('image')->storeAs('public/images', $filename);
        }
        $feature->save();

        return redirect('admin/features/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feature = Feature::find($id);
        $feature->delete();

        return redirect('admin/features');
    }
}
