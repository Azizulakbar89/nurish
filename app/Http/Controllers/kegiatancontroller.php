<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kegvid;

class kegiatancontroller extends Controller
{
    public function keg(Request $request)
    {
        if($request->has('cari')){
            $keg = kegvid::where('judul','LIKE','%'.$request->cari.'%')->paginate(10);
        }else{
            $keg = kegvid::paginate(10);
        }
        return view('admin/keg', ['keg'=>$keg]);
    }

    public function addkeg()
    {
        return view('admin/keg-add');
    }

    public function storekeg(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tgl' => 'required',
            'link' => 'required'

        ]);
        $keg = kegvid::create($request->all());
        return redirect('keg')->with('status', 'Berhasil Ditambahkan');
    }

    public function deletekeg($idkeg)
    {
        $keg = kegvid::find($idkeg);
        $keg->delete();
        return redirect('keg')->with('status', 'Data Berhasil Dihapus');
    }

    public function editkeg($idkeg)
    {
        $keg = kegvid::where('idkeg', $idkeg)->first();
        return view('admin/keg-edit',['keg' => $keg]);
    }

    public function updatekeg(Request $request, $idkeg){
        $keg = kegvid::where('idkeg', $idkeg)->first();
        $keg ->update($request->all());
        return redirect('keg')->with('status', 'Berhasil Diedit');

    }
}