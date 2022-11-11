<?php

namespace App\Http\Controller\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\matakuliah;
use Illuminate\Http\Request;

class matakuliahController extends Controller
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
            $matakuliah = matakuliah::where('kode_matakuliah', 'LIKE', "%$keyword%")
                ->orWhere('nama_matakuliah', 'LIKE', "%$keyword%")
                ->orWhere('sks', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $matakuliah = matakuliah::latest()->paginate($perPage);
        }

        return view('admin.matakuliah.index', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.matakuliah.create');
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
        
        matakuliah::create($requestData);

        return redirect('admin/matakuliah')->with('flash_message', 'matakuliah added!');
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
        $matakuliah = matakuliah::findOrFail($id);

        return view('admin.matakuliah.show', compact('matakuliah'));
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
        $matakuliah = matakuliah::findOrFail($id);

        return view('admin.matakuliah.edit', compact('matakuliah'));
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
        
        $matakuliah = matakuliah::findOrFail($id);
        $matakuliah->update($requestData);

        return redirect('admin/matakuliah')->with('flash_message', 'matakuliah updated!');
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
        matakuliah::destroy($id);

        return redirect('admin/matakuliah')->with('flash_message', 'matakuliah deleted!');
    }
}
