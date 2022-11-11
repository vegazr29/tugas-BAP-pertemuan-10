<?php

namespace App\Http\Controller\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\dosen;
use Illuminate\Http\Request;

class dosenController extends Controller
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
            $dosen = dosen::where('DosenID', 'LIKE', "%$keyword%")
                ->orWhere('nama_dosen', 'LIKE', "%$keyword%")
                ->orWhere('nama_matakuliah', 'LIKE', "%$keyword%")
                ->orWhere('kode_matakuliah', 'LIKE', "%$keyword%")
                ->orWhere('tahun_ajar', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $dosen = dosen::latest()->paginate($perPage);
        }

        return view('admin.dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.dosen.create');
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
        
        dosen::create($requestData);

        return redirect('admin/dosen')->with('flash_message', 'dosen added!');
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
        $dosen = dosen::findOrFail($id);

        return view('admin.dosen.show', compact('dosen'));
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
        $dosen = dosen::findOrFail($id);

        return view('admin.dosen.edit', compact('dosen'));
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
        
        $dosen = dosen::findOrFail($id);
        $dosen->update($requestData);

        return redirect('admin/dosen')->with('flash_message', 'dosen updated!');
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
        dosen::destroy($id);

        return redirect('admin/dosen')->with('flash_message', 'dosen deleted!');
    }
}
