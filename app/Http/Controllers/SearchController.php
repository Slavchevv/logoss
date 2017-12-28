<?php

namespace App\Http\Controllers;

use App\Avtor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
   /* public function autocomplete(){
        $term = Input::get('term');

        $results = array();

        $queries = DB::table('uploads')
            ->where('name', 'LIKE', '%'.$term.'%')
            ->take(5)->get();

        foreach ($queries as $query)
        {
            $results[] = [ 'id' => $query->id, 'value' => $query->name ];
        }
        return Response::json($results);
    }*/
}
