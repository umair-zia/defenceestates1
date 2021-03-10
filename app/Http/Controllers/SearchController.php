<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ad;
use App\Files;
use App\User;
use App\filesData;


class SearchController extends Controller
{
    public function filter(Request $request, User $user)
    {
        $name ='';
        $type ='';
        $phase ='';

        // Search for a user based on their name.
        if ($request->has('city')) {
            $name = $request->input('city');
        }

        // Search for a user based on their company.
        if ($request->has('type')) {
            $type = $request->input('type');
        }

        // Search for a user based on their city.
        if ($request->has('phase')) {
            $phase = $request->input('phase');
        }

        // Continue for all of the filters.

        // Get the results and return them.
        return view('home', ['name' => $name, 'type' => $type, 'phase'=> $phase]);
    }
}
