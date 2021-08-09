<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function list(Request $request){
        $queryBuilder = Structure::query();
        $search = $request->query('search');
        if ($search && strlen($search) > 0 ) {
            $queryBuilder = $queryBuilder->where('title', 'like', '%'.$search.'%');
        }
        return view('admin.list', ['list'=>$queryBuilder]);
    }



}
