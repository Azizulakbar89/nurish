<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;

class elearningcontroller extends Controller
{
    public function vide(Request $request)
    {
        if($request->has('cari')){
            $vide = video::where('judul','LIKE','%'.$request->cari.'%')->paginate(10);
        }else{
            $vide = video::paginate(10);
        }
        return view('admin/vide', ['vide'=>$vide]);
    }

    public function addvide()
    {
        return view('admin/vide-add');
    }

    public function storevide(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'kelas' => 'required',
            'link' => 'required'

        ]);
        $vide = video::create($request->all());
        return redirect('vide')->with('status', 'Berhasil Ditambahkan');
    }

    public function deletevide($idvide)
    {
        $vide = video::find($idvide);
        $vide->delete();
        return redirect('vide')->with('status', 'Data Berhasil Dihapus');
    }

    public function editvide($idvid)
    {
        $vide = video::where('idvid', $idvid)->first();
        return view('admin/vide-edit',['vide' => $vide]);
    }

    public function updatevide(Request $request, $idvid){
        $vide = video::where('idvid', $idvid)->first();
        $vide ->update($request->all());
        return redirect('vide')->with('status', 'Berhasil Diedit');

    }
}