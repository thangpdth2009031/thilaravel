<?php

namespace App\Http\Controllers;


use App\Models\Structure;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function list(Request $request){
        $queryBuilder = Structure::query();
        $search = $request->query('search');
        $status = $request->query('available');
        if ($search && strlen($search) > 0 ) {
            $queryBuilder = $queryBuilder->where('title', 'like', '%'.$search.'%');
        }
        if ($status) {
            $queryBuilder = $queryBuilder->where('available', $status);
        }
        $event = $queryBuilder->paginate(10)->appends(['search'=>$search, 'available'=>$status]);
        return view('admin.list', ['list'=>$event, 'status'=>$status]);
    }



}
