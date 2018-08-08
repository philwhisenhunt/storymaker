<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class StoryController extends Controller
{
    //

    public function store()
    {
        // echo "hello";
        // dd(request()->all());

        DB::table('words')
        ->where('id', 1)
        ->update(['noun'=>request('noun'), 'verb'=>request('verb'), 'famous_person'=>request('famous_person')]);

        // DB::table('words')
        // ->where('id', 2)
        // ->create(['noun'=>request('noun'), 'verb'=>request('verb'), 'famous_person'=>request('famous_person')]);

       return redirect('stories');
            //create a new story
            //save it to the database

        // redirect to the homepage
    }
}
