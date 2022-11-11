<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
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
            $mahasiswa = mahasiswa::where('StudentID', 'LIKE', "%$keyword%")
                ->orWhere('Nama', 'LIKE', "%$keyword%")
                ->orWhere('Jurusan', 'LIKE', "%$keyword%")
                ->orWhere('Tahun_masuk', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mahasiswa = mahasiswa::latest()->paginate($perPage);
        }

        return view('admin.mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.mahasiswa.create');
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
        
        mahasiswa::create($requestData);

        return redirect('admin/mahasiswa')->with('flash_message', 'mahasiswa added!');
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
        $mahasiswa = mahasiswa::findOrFail($id);

        return view('admin.mahasiswa.show', compact('mahasiswa'));
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
        $mahasiswa = mahasiswa::findOrFail($id);

        return view('admin.mahasiswa.edit', compact('mahasiswa'));
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
        
        $mahasiswa = mahasiswa::findOrFail($id);
        $mahasiswa->update($requestData);

        return redirect('admin/mahasiswa')->with('flash_message', 'mahasiswa updated!');
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
        mahasiswa::destroy($id);

        return redirect('admin/mahasiswa')->with('flash_message', 'mahasiswa deleted!');
    }
}
