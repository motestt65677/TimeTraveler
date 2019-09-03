<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Letter;
use Debugbar;
class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        //
        $letters = Letter::All();
        return view('letters.index', compact('letters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('letters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Debugbar::info('abcd');
        $letter = Letter::create(
            [
                'title' => $request["title"]
                , 'body' => $request["body"]
                , 'receiver_name' => $request["receiver_name"]
                , 'show_letter_date' => $request["show_letter_date"]
                , 'hide_letter_date' => $request["hide_letter_date"]
                , 'password' => $request["password"]

            ]
        );
        return redirect(route('letters.show', ["id" => $letter -> id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $letter = Letter::findOrFail($id);
        $letter -> convertDateTimeForView();
        return view('letters.show') -> with('letter', $letter);

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $letter = Letter::find($id);
        $letter -> convertDateTimeForView();
        return view('letters.edit', compact('letter'));
        //
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
        $letter = Letter::find($id);
        $letter -> update(
            [
                'title' => $request["title"]
                , 'body' => $request["body"]
                , 'receiver_name' => $request["receiver_name"]
                , 'show_letter_date' => $request["show_letter_date"]
                , 'hide_letter_date' => $request["hide_letter_date"]
                , 'password' => $request["password"]
            ]);
        return redirect(route('letters.show', ['letter' => $id]));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Letter::destroy($id);
        return redirect(route('letters.index'));
        //
    }
}
