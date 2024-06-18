<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminCalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $cari = request('cari');

        if ($cari) {
            $calon = Calon::where('namalengkap', 'like', '%' . $cari . '%')->latest()->paginate(10);
        } else {
            $calon = Calon::latest()->paginate(10);
        }

        $data = [
            'calon'      => $calon,
            'content'   => 'admin.calon.index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            'jurusan'   => Jurusan::get(),
            'content'   => 'admin.calon.create'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'nisn'  => 'required|unique:calons',
            'namalengkap'  => 'required',
            'tanggal_lahir'  => 'required',
            'asal_sekolah'  => 'required',
            'jurusan_id'  => 'required',
            'status'  => 'required',
        ]);
        // die('masuk');

        // dd()->all();

        Calon::create($data);
        Alert::success('Sukses', 'Data telah ditambahkan!!');
        return redirect('/admin/calon')->with('success', 'Data telah ditambahkan!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = [
            'calon'      => Calon::find($id),
            'jurusan'   => Jurusan::get(),
            'content'   => 'admin.calon.create'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $calon = Calon::find($id);
        $data = $request->validate([
            'nisn'  => 'required|unique:calons,nisn,' . $calon->id,
            'namalengkap'  => 'required',
            'tanggal_lahir'  => 'required',
            'asal_sekolah'  => 'required',
            'jurusan_id'  => 'required',
            'status'  => 'required',
        ]);


        $calon->update($data);
        Alert::success('Sukses', 'Data telah diedit!!');
        return redirect('/admin/calon')->with('success', 'Data telah diedit!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $calon = Calon::find($id);
        $calon->delete();
        Alert::success('Sukses', 'Data telah dihapus!!');
        return redirect('/admin/calon')->with('success', 'Data telah dihapus!!');
    }
}
