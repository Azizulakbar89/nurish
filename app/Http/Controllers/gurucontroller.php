<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;
use App\Models\ebook;
use App\Models\fokeg;
use App\Models\kepsek;

class gurucontroller extends Controller
{
    public function guru(Request $request)
    {
        if($request->has('cari')){
            $guru = guru::where('namaguru','LIKE','%'.$request->cari.'%')->paginate(10);
        }else{
            $guru = guru::paginate(10);
        }
        
        return view('admin/guru', compact('guru'));
    }

    public function addguru()
    {
        return view('admin/guru-add');
    }

    public function storeguru(Request $request)
    {
        $validated = $request->validate([
            'namaguru' => 'required',
            'deskripsi' => 'required',
            'posisi' => 'required'
        ]);

        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->namafas.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
        }

        $request['gambar'] = $newName;
        $guru = guru::create($request->all());
        return redirect('guru')->with('status', 'Berhasil Ditambahkan');
    }

    public function deleteguru($idg)
    {
        $guru = guru::find($idg);
        $guru->delete();
        return redirect('guru')->with('status', 'Data Berhasil Dihapus');
    }

    public function edit($idg)
    {
        $guru = guru::where('idg', $idg)->first();
        return view('admin/guru-edit',['guru' => $guru]);
    }

    public function update(Request $request, $idg){
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->namaguru.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
            $request['gambar'] = $newName;
        }

        
        $guru = guru::where('idg', $idg)->first();
        $guru ->update($request->all());
        return redirect('guru')->with('status', 'Berhasil Diedit');

    }

    public function book(Request $request)
    {
        if($request->has('cari')){
            $bok = ebook::where('judul','LIKE','%'.$request->cari.'%')->paginate(10);
        }else{
            $bok = ebook::paginate(10);
        }
        
        return view('admin/bok', compact('bok'));
    }

    public function addbook()
    {
        return view('admin/bok-add');
    }

    public function storebook(Request $request)
    {
        {
            // Validasi file yang di-upload
            $request->validate([
                'dokumen' => 'required|file|mimes:pdf,docx,doc,xlsx,csv|max:20480', // Maksimal 2MB
            ]);
    
            // Mendapatkan ekstensi file
            $extension = $request->file('dokumen')->getClientOriginalExtension();
    
            // Membuat nama file yang unik
            $namaFile = $request->judul.'-' . now()->timestamp . '.' . $extension;
    
            // Menyimpan file ke storage
            $request->file('dokumen')->storeAs('dokumen', $namaFile);
    
            // Menyimpan path file ke dalam database
            $bok = ebook::create([
                'judul' => $request->input('judul'), // Assuming 'judul' is a part of the request
                'kelas' => $request->input('kelas'), 
                'dokumen' => 'dokumen/' . $namaFile,
            ]);
    
            return redirect('bok')->with('status', 'Berhasil Ditambahkan');
        }
        
    }

    public function deletebok($idb)
    {
        $bok = ebook::find($idb);
        $bok->delete();
        return redirect('bok')->with('status', 'Data Berhasil Dihapus');
    }

    public function editb($idb)
    {
        $bok = ebook::where('idb', $idb)->first();
        return view('admin/bok-edit',['bok' => $bok]);
    }

    public function updateb(Request $request, $idb)
    {
    // Validasi input lainnya
    $request->validate([
        'judul' => 'required|string|max:255',
        'kelas' => 'required|string|max:255',
        'dokumen' => 'nullable|file|mimes:pdf,docx,doc,xlsx,csv|max:20480', // Maksimal 20MB
    ]);

    // Mendapatkan model ebook
    $bok = ebook::find($idb);

    // Menyimpan nama file yang lama
    $filePath = $bok->dokumen;

    // Memeriksa apakah ada file yang di-upload
    if ($request->hasFile('dokumen')) {
        // Mendapatkan ekstensi file
        $extension = $request->file('dokumen')->getClientOriginalExtension();

        // Membuat nama file yang unik
        $namaFile = $request->judul . now()->timestamp . '.' . $extension;

        // Menyimpan file ke storage
        $request->file('dokumen')->storeAs('dokumen', $namaFile);

        // Menyimpan path file yang baru ke dalam database
        $filePath = 'dokumen/' . $namaFile;
    }

    // Memperbarui data di database
    $bok->update([
        'judul' => $request->input('judul'),
        'kelas' => $request->input('kelas'),
        'dokumen' => $filePath,
    ]);

    return redirect('bok')->with('status', 'Berhasil Diperbarui');
    }
    
    public function foto(Request $request)
    {
        if($request->has('cari')){
            $fo = fokeg::where('judulfo','LIKE','%'.$request->cari.'%')->paginate(10);
        }else{
            $fo = fokeg::paginate(10);
        }
        return view('admin/fo', compact('fo'));
    }

    public function addfoto()
    {
        return view('admin/fo-add');
    }

    public function storefoto(Request $request)
    {
        $validated = $request->validate([
            'judulfo' => 'required',
            'deskripsi' => 'required'
        ]);

        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->judulfo.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
        }

        $request['gambar'] = $newName;
        $fo = fokeg::create($request->all());
        return redirect('fo')->with('status', 'Berhasil Ditambahkan');
    }

    public function deletefo($idfo)
    {
        $fo = fokeg::find($idfo);
        $fo->delete();
        return redirect('fo')->with('status', 'Data Berhasil Dihapus');
    }

    public function editf($idfo)
    {
        $fo = fokeg::where('idfo', $idfo)->first();
        return view('admin/fo-edit',['fo' => $fo]);
    }

    public function updatef(Request $request, $idfo){
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->judulfo.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
            $request['gambar'] = $newName;
        }

        
        $fo = fokeg::where('idfo', $idfo)->first();
        $fo ->update($request->all());
        return redirect('fo')->with('status', 'Berhasil Diedit');

    }


    public function kepsek(Request $request)
    {
        if($request->has('cari')){
            $kepsek = kepsek::where('nama','LIKE','%'.$request->cari.'%')->paginate(10);
        }else{
            $kepsek = kepsek::paginate(10);
        }
        return view('admin/kepsek', compact('kepsek'));
    }

    public function addkepsek()
    {
        return view('admin/kepsek-add');
    }

    public function storekepsek(Request $request)
    {
        $validated = $request->validate([
            'namakep' => 'required',
            'sambutan' => 'required'
        ]);

        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->namakep.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
        }

        $request['gambar'] = $newName;
        $kepsek = kepsek::create($request->all());
        return redirect('kepsek')->with('status', 'Berhasil Ditambahkan');
    }

    public function deletekepsek($idk)
    {
        $kepsek = kepsek::find($idk);
        $kepsek->delete();
        return redirect('kepsek')->with('status', 'Data Berhasil Dihapus');
    }

    public function editkepsek($idk)
    {
        $kepsek = kepsek::where('idk', $idk)->first();
        return view('admin/kepsek-edit',['kepsek' => $kepsek]);
    }

    public function updatekepsek(Request $request, $idk){
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->namakep.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
            $request['gambar'] = $newName;
        }

        
        $kepsek = kepsek::where('idk', $idk)->first();
        $kepsek ->update($request->all());
        return redirect('kepsek')->with('status', 'Berhasil Diedit');

    }
}