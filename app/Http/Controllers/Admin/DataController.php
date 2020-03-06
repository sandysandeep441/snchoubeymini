<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Grain;
use App\Datum;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
		
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $data = Datum::where('type_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('qty', 'LIKE', "%$keyword%")
                ->orWhere('credited', 'LIKE', "%$keyword%")
                ->orWhere('polished', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $grains = Datum::paginate($perPage);
        }

        return view('admin.data.index', compact('grains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
		$grainsType = Grain::pluck('name','id');
		$customer = \App\customer::pluck('name','id');
        return view('admin.data.create', compact('grainsType','customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Datum::create($requestData);

        return redirect('admin/data')->with('flash_message', 'Datum added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $datum = Datum::findOrFail($id);

        return view('admin.data.show', compact('datum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $datum = Datum::findOrFail($id);
		$grainsType = Grain::pluck('name','id');
		$customer = \App\customer::pluck('name','id');
        return view('admin.data.edit', compact('grainsType','customer','datum'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {       
        $requestData = $request->all();      
        $datum = Datum::findOrFail($id);
        $datum->update($requestData);
        return redirect('admin/data')->with('flash_message', 'Datum updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Datum::destroy($id);

        return redirect('admin/data')->with('flash_message', 'Datum deleted!');
    }
}
