<?php

namespace App\Http\Controllers;

use App\Subdivision;
use App\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReferenceController extends Controller
{
    /**
     * DIVISION SECTION
     */

    public function subdivionById($id){
        return response()->json(Subdivision::where('division', '=', $id)->get(), 200);
    }

    public function villageById(Request $request, $id, $sid){
        //return $request;
        $QUERY = strtoupper($request->get('query'));
        $query = strtolower($request->get('query'));

        //return $query;


        $villages = DB::select("select * from villages where (division = ? and subdivision = ? and name like '%$QUERY%') OR (division = ? and subdivision = ? and name like '%$query%')",
            [$id, $sid, $id, $sid]);
        return $villages;

        return response()->json($villages, 200);

        /*return response()->json(Village::where('division', '=', $id)
            ->where('subdivision', '=', $sid)
            ->where('name', 'like', '%'.$query.'%')
            ->orWhere('name', 'like', '%'.$QUERY.'%')
            ->get(), 200);*/
    }

}
