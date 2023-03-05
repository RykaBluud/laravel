<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Machines;
class SearchController extends Controller
{
    public function index()
    {

        $data = \DB::table('machinelist')->paginate(10)->count();
        return view('search', compact('data','name'));

    }
    public function simple(Request $request)
    {
        $data = \DB::table('machinelist');
        if( $request->input('search')){
            $data = $data->where('name','LIKE', "%" . $request->search . "%")
                         ->orwhere('machine_condition', 'LIKE',"%" . $request->search . "%")
                         ->orwhere('manufacturer', 'LIKE',"%" . $request->search . "%")
                         ->orwhere('model', 'LIKE',"%" . $request->search . "%")
                         ->orwhere('location', 'LIKE',"%" . $request->search . "%")
                         ->orwhere('year', 'LIKE',"%" . $request->search . "%")
                         ->orwhere('main_category', 'LIKE',"%" . $request->search . "%")
                         ->orwhere('sub_category', 'LIKE',"%" . $request->search . "%");

        }

        $data = $data->paginate(10);
        return view('search', compact('data',));
    }
    public function advance(Request $request)
    {
        $data = \DB::table('machinelist');
        if( $request->name){
            $data = $data->where('name', 'LIKE', "%" . $request->name . "%");
        }
        if( $request->address){
            $data = $data->where('location', 'LIKE', "%" . $request->location . "%");
        }
        if( $request->min_age && $request->year ){
            $data = $data->where('age', '>=', $request->min_year)
                         ->where('age', '<=', $request->max_year);
        }
        $data = $data->paginate(10);
        return view('search', compact('data'));
    }
}
