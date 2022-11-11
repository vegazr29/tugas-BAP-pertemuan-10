<?php

namespace App\Http\Controller\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\sertifikat;
use Illuminate\Http\Request;

class sertifikatController extends Controller
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
            $sertifikat = sertifikat::where('StudentID', 'LIKE', "%$keyword%")
                ->orWhere('judulsertifikat', 'LIKE', "%$keyword%")
                ->orWhere('penyelenggara', 'LIKE', "%$keyword%")
                ->orWhere('tahun', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $sertifikat = sertifikat::latest()->paginate($perPage);
        }

        return view('admin.sertifikat.index', compact('sertifikat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.sertifikat.create');
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
        
        sertifikat::create($requestData);

        return redirect('admin/sertifikat')->with('flash_message', 'sertifikat added!');
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
        $sertifikat = sertifikat::findOrFail($id);

        return view('admin.sertifikat.show', compact('sertifikat'));
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
        $sertifikat = sertifikat::findOrFail($id);

        return view('admin.sertifikat.edit', compact('sertifikat'));
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
        
        $sertifikat = sertifikat::findOrFail($id);
        $sertifikat->update($requestData);

        return redirect('admin/sertifikat')->with('flash_message', 'sertifikat updated!');
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
        sertifikat::destroy($id);

        return redirect('admin/sertifikat')->with('flash_message', 'sertifikat deleted!');
    }
}
