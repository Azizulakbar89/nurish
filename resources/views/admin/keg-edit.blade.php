@extends('admin.template')

@section('title', 'Home')

@section('content')

<main id="main" class="main">
    <section class="section dashboard">
      <div class="row">

      <div class="mt-5">

        <form action="/keg-edit/{{$keg->idkeg}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="judul" class="form-label">Ganti Judul</label>
                <input type="text" name="judul" id="judul" value="{{$keg->judul}}" class="form-control" placeholder="Isi Judul Kegiatan" >
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Rubah deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" value="{{$keg->deskripsi}}" class="form-control" placeholder="Isi deskripsi" >
            </div>
            <div class="mb-3">
                <label for="tgl" class="form-label">Rubah Tanggal</label>
                <input type="date" name="tgl" id="tgl" value="{{$keg->tgl}}" class="form-control" placeholder="Isi Tanggal" >
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" name="link" id="link" value="{{$keg->link}}" class="form-control" placeholder="Isi Link Berdasarkan Akhir '/' Pada Link Youtube dan Sebelum tanda '='" >
            </div>

            <div>
                <button class="btn btn-success mt-3" type="submit">Simpan</button>
            </div>

        </div>
    </section>

  </main><!-- End #main -->

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js "></script>
<script>
$(document).ready(function() {
    $('.select-multiple').select2();
});
function previewImage()
{
    const img = document.querySelector("#img");
      const imgPreview = document.querySelector(".img-preview")

      imgPreview.style.display = 'block';
    //   imgPreview.style.marginTop = '5px';
    //   imgPreview.style.width = '100px';
    //   imgPreview.style.height = '60px';
      const reader = new FileReader();
      reader.readAsDataURL(img.files[0]);
      reader.onload = function(event) {

         imgPreview.src = event.target.result;
      }
}
</script>