<?php

namespace App\Http\Controllers;

use App\Models\Comics;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumetto = Comics::all();
        return view('comics.index', compact('fumetto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'Required | String | max:50',
            'description' => 'String | nullable | max:65000',
            'thumb' => 'required| URL',
            'price' => 'required| Integer | max:500',
            'sale_date' => 'required',
            'type' => 'required| String | max:50',
            'series' => 'required| String | max:50',
        ]);

        $form_data = $request->all();

        $comic= new Comics();

        $comic->fill($form_data);
        


        /*
        $newComic->title = $form_data["title"];
        $newComic->description = $form_data["description"];
        $newComic->thumb = $form_data["thumb"];
        $newComic->price = $form_data["price"];
        $newComic->sale_date = $form_data["sale_date"];
        $newComic->type = $form_data["type"];
        $newComic->series = $form_data["series"];
        $newComic->save();
        */
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comics::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comics::findOrFail($id);
        return view('comics.edit', compact('comic'));
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
        $comic = Comics::findOrFail($id);
        $form_data = $request->all();
        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $comic)
    {
        //$comics = Comics::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');

    }
}
