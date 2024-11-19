<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fasilita;
use App\Models\mitra;
use App\Models\prestasi;
use App\Models\ekstra;
use App\Models\video;
use App\Models\kegvid;
use App\Models\guru;
use App\Models\ebook;
use App\Models\fokeg;

class profilController extends Controller
{
    public function visi()
    {
        $fo = fokeg::orderBy('created_at', 'desc')->take(2)->get();
        return view('publik/vismis', ['fo'=>$fo]);
    }


    public function fasilitas()
    {
        $fasilitas = fasilita::paginate(12);
        $fo = fokeg::orderBy('created_at', 'desc')->take(2)->get();
        return view('publik/fasilitas', ['fasilitas'=>$fasilitas, 'fo'=>$fo]);
    }

    public function eks()
    {
        $ekstra = ekstra::paginate(12);
        $fo = fokeg::orderBy('created_at', 'desc')->take(2)->get();
        return view('publik/ekstra', ['ekstra'=>$ekstra, 'fo'=>$fo]);
    }

    public function mitra()
    {
        $mitra = mitra::paginate(12);
        $fo = fokeg::orderBy('created_at', 'desc')->take(2)->get();
        return view('publik/mitra', ['mitra'=>$mitra, 'fo'=>$fo]);
    }

    public function prestasi(Request $request)
    {
        if($request->has('cari')){
            $fo = fokeg::orderBy('created_at', 'desc')->take(2)->get();
            $prestasi = prestasi::where('namaprestasi','LIKE','%'.$request->cari.'%')->paginate(12);
        }else{
            $fo = fokeg::orderBy('created_at', 'desc')->take(2)->get();
            $prestasi = prestasi::paginate(12);
        }
        return view('publik/prestasi', ['prestasi'=>$prestasi, 'fo'=>$fo]);
    }

    public function vide(Request $request)
    {
        if($request->has('cari')){
            $fo = fokeg::orderBy('created_at', 'desc')->take(2)->get();
            $vide = video::where('kelas','LIKE','%'.$request->cari.'%')->paginate(12);
        }else{
            $fo = fokeg::orderBy('created_at', 'desc')->take(2)->get();
            $vide = video::paginate(12);
        }
        
        return view('publik/video', ['vide'=>$vide, 'fo'=>$fo]);
    }

    public function vid(Request $request)
    {
        if($request->has('cari')){
            $fo = fokeg::orderBy('created_at', 'desc')->take(2)->get();
            $vid = kegvid::where('judul','LIKE','%'.$request->cari.'%')->paginate(12);
        }else{
            $fo = fokeg::orderBy('created_at', 'desc')->take(2)->get();
            $vid = kegvid::paginate(12);
        }
        return view('publik/Vid', ['vid'=>$vid, 'fo'=>$fo]);
    }

    public function guru()
    {
        $guru = guru::paginate(12);
        $fo = fokeg::orderBy('created_at', 'desc')->take(2)->get();
        return view('publik/guru', ['guru'=>$guru, 'fo'=>$fo]);
    }

    public function ebook(Request $request)
    {
        if($request->has('cari')){
            $fo = fokeg::orderBy('created_at', 'desc')->take(2)->get();
            $bok = ebook::where('judul','LIKE','%'.$request->cari.'%')->paginate(10);
        }else{
            $fo = fokeg::orderBy('created_at', 'desc')->take(2)->get();
            $bok = ebook::paginate(10);
        }
        
        return view('publik/ebook', compact('bok'),['fo'=>$fo]);
    }

}