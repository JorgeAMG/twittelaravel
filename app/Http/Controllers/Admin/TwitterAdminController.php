<?php

namespace App\Http\Controllers\Admin;

use App\Twitter;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class TwitterAdminController extends Controller
{

    public function __construct()
    {
        return $this->middleware("auth");
    }

    public function create()
    {
        //

        return view("twitter.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "titulo" => "required",
            "contenido" => "required",

        ]);
        $twitters = new Twitter($request->all());
        $twitters->save();
        return redirect("/");
    }



    public function edit($id)
    {
        //
        $twitter = Twitter::where("id", $id)->first();
        return view("twitter.edit", compact("twitter"));
    }


    public function update(Request $request, $id)
    {
        //
        $twitter = Twitter::findOrFail($id);
        $twitter->fill($request->all());
        $twitter->save();
        return redirect("/");
    }


    public function destroy($id)
    {
        //
        $twitter = Twitter::findOrFail($id);
        $twitter->delete();
        return redirect("/");
    }
}
