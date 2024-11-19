<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fasilita;
use App\Models\mitra;
use App\Models\prestasi;
use App\Models\ekstra;
use App\Models\video;
use App\Models\guru;
use App\Models\fokeg;
use App\Charts\PrestasiChart;
use App\Helpers\BulanHelper;

class admincontroller extends Controller
{
    public function homeadmin(PrestasiChart $chart)
    {
        $data['chart'] = $chart->build();
        $ekstracount = ekstra::count();
        $gurucount = guru::count();
        $prestasicount = prestasi::count();
        $mitracount = mitra::count();
        return view('/admin/admin', $data, ['ecount'=>$ekstracount, 'gcount'=>$gurucount, 'mcount'=>$mitracount,
         'pcount'=>$prestasicount]);
    }

    public function fas(Request $request)
    {
        if($request->has('cari')){
            $fas = fasilita::where('namafas','LIKE','%'.$request->cari.'%')->paginate(10);
        }else{
            $fas = fasilita::paginate(10);
        }
        return view('admin/fas', compact('fas'));
    }

    public function addfas()
    {
        return view('admin/fas-add');
    }

    public function storefas(Request $request)
    {
        $validated = $request->validate([
            'namafas' => 'required',
            'jmlfas' => 'required'
        ]);

        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->namafas.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
        }

        $request['gambar'] = $newName;
        $fas = fasilita::create($request->all());
        return redirect('fas')->with('status', 'Berhasil Ditambahkan');
    }

    public function deletefas($idfas)
    {
        $fas = fasilita::find($idfas);
        $fas->delete();
        return redirect('fas')->with('status', 'Data Berhasil Dihapus');
    }

    public function edit($idfas)
    {
        $fas = fasilita::where('idfas', $idfas)->first();
        return view('admin/fas-edit',['fas' => $fas]);
    }

    public function update(Request $request, $idfas){
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->namafas.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
            $request['gambar'] = $newName;
        }

        
        $fas = fasilita::where('idfas', $idfas)->first();
        $fas ->update($request->all());
        return redirect('fas')->with('status', 'Berhasil Diedit');

    }


    public function mit(Request $request)
    {
        if($request->has('cari')){
            $mit = mitra::where('namamit','LIKE','%'.$request->cari.'%')->paginate(10);
        }else{
            $mit = mitra::paginate(10);
        }
        return view('admin/mitra', ['mit'=>$mit]);
    }

    public function addmit()
    {
        return view('admin/mitra-add');
    }

    public function storemit(Request $request)
    {
        $validated = $request->validate([
            'namamit' => 'required',
            'deskripsi' => 'required'
        ]);

        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->namamit.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
        }

        $request['gambar'] = $newName;
        $mit = mitra::create($request->all());
        return redirect('mitra')->with('status', 'Berhasil Ditambahkan');
    }


    public function deletemit($idm)
    {
        $idm = mitra::find($idm);
        $idm->delete();
        return redirect('mitra')->with('status', 'Data Berhasil Dihapus');
    }

    public function editmit($idm)
    {
        $mit = mitra::where('idm', $idm)->first();
        return view('admin/mitra-edit',['mit' => $mit]);
    }

    public function updatemit(Request $request, $idm){
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->namamit.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
            $request['gambar'] = $newName;
        }

        
        $mit= mitra::where('idm', $idm)->first();
        $mit ->update($request->all());
        return redirect('mitra')->with('status', 'Berhasil Diedit');

    }

    public function prestasi(Request $request)
    {
        if($request->has('cari')){
            $prestasi = prestasi::where('namaprestasi','LIKE','%'.$request->cari.'%')->paginate(10);
        }else{
            $prestasi = prestasi::paginate(10);
        }
        return view('admin/prestasi', ['prestasi'=>$prestasi]);
    }

    public function addpres()
    {
        return view('admin/prestasi-add');
    }

    public function storeprestasi(Request $request)
    {
        $validated = $request->validate([
            'namaprestasi' => 'required',
            'tingkatprestasi' => 'required',
            'namasiswa' => 'required',
            'deskripsi' => 'required'
        ]);

        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->namaprestasi.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
        }

        $request['gambar'] = $newName;
        $prestasi = prestasi::create($request->all());
        return redirect('prestasi')->with('status', 'Berhasil Ditambahkan');
    }

    public function deleteprestasi($idp)
    {
        $idp = prestasi::find($idp);
        $idp->delete();
        return redirect('prestasi')->with('status', 'Data Berhasil Dihapus');
    }

    public function editprestasi($idp)
    {
        $prestasi = prestasi::where('idp', $idp)->first();
        return view('admin/prestasi-edit',['prestasi' => $prestasi]);
    }

    public function updateprestasi(Request $request, $idp){
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->namaprestasi.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
            $request['gambar'] = $newName;
        }

        
        $prestasi= prestasi::where('idp', $idp)->first();
        $prestasi ->update($request->all());
        return redirect('prestasi')->with('status', 'Berhasil Diedit');
    }

    public function ekstra(Request $request)
    {
        if($request->has('cari')){
            $ekstra = ekstra::where('namaekstra','LIKE','%'.$request->cari.'%')->paginate(10);
        }else{
            $ekstra = ekstra::paginate(10);
        }
        
        return view('admin/ekstra', ['ekstra'=>$ekstra]);
    }

    public function addekstra()
    {
        return view('admin/ekstra-add');
    }

    public function storeekstra(Request $request)
    {
        $validated = $request->validate([
            'namaekstra' => 'required',
            'pukul' => 'required',
            'hari' => 'required'
        ]);

        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->namaekstra.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
        }

        $request['gambar'] = $newName;
        $ekstra = ekstra::create($request->all());
        return redirect('ekstra')->with('status', 'Berhasil Ditambahkan');
    }

    public function deleteekstra($ide)
    {
        $ide = ekstra::find($ide);
        $ide->delete();
        return redirect('ekstra')->with('status', 'Data Berhasil Dihapus');
    }

    public function editekstra($ide)
    {
        $ekstra = ekstra::where('ide', $ide)->first();
        return view('admin/ekstra-edit',['ekstra' => $ekstra]);
    }

    public function updateekstra(Request $request, $ide){
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->namaekstra.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
            $request['gambar'] = $newName;
        }

        
        $ekstra= ekstra::where('ide', $ide)->first();
        $ekstra ->update($request->all());
        return redirect('ekstra')->with('status', 'Berhasil Diedit');
    }

    public function index(){
        $fo = fokeg::orderBy('created_at', 'desc')->take(2)->get();
        $ekstracount = ekstra::count();
        $gurucount = guru::count();
        $prestasicount = prestasi::count();
        $mitracount = mitra::count();
        return view('publik.welcome',['ecount'=>$ekstracount, 'gcount'=>$gurucount, 'mcount'=>$mitracount,
         'pcount'=>$prestasicount, 'fo'=>$fo]);
    }

}