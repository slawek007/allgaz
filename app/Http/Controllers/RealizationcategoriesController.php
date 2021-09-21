<?php

namespace App\Http\Controllers;

use App\Realizations;
use Illuminate\Http\Request;
use App\Realizationcategories;

class RealizationcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Realizationcategories::all();
        $realizations = Realizations::with('Realizationcategories')->inRandomOrder()->take(10)->get();
        return view('realizationsWithCat')->with([
            'categories' => $categories,
            'realizations' =>$realizations,
            ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categories = Realizationcategories::all();
        $realizationCategory = Realizationcategories::where('slug', $slug)->firstOrFail();
        $realizations = Realizations::where('realizationcategories_id', $realizationCategory->id)->orderBy('created_at','desc')->get();
        return view('realization')->with([
            'realizations' => $realizations,
            'marka' => $realizationCategory->name,
            'categories' => $categories,
            'activeSlug' => $slug,
            ]);

      }


}
