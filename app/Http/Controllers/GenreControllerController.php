<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GenreController;
use App\Http\Requests\StoreGenreControllerRequest;
use App\Http\Requests\UpdateGenreControllerRequest;

class GenreControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genre = GenreController::all();
        return view('genre');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGenreControllerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genre = new GenreController;
        $genre -> genre = $request -> genre;
        $genre -> save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GenreController  $genreController
     * @return \Illuminate\Http\Response
     */
    public function show(GenreController $genreController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GenreController  $genreController
     * @return \Illuminate\Http\Response
     */
    public function edit(GenreController $genreController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenreControllerRequest  $request
     * @param  \App\Models\GenreController  $genreController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGenreControllerRequest $request, GenreController $genreController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GenreController  $genreController
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenreController $genreController)
    {
        //
    }
}
