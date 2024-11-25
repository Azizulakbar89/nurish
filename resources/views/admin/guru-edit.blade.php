@extends('admin.template')

@section('title', 'Home')

@section('content')

<!-- Favicons -->
<link href="{{asset('assets1/img/favicon.jpg')}}" rel="icon">
<link href="{{asset('assets1/img/apple-touch-icon.jpg')}}" rel="apple-touch-icon">

<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">

            <div class="mt-5">

                <form action="/guru-edit/{{$guru->idg}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="namaguru" class="form-label">Nama guru</label>
                        <input type="text" name="namaguru" id="namaguru" value="{{$guru->namaguru}}"
                            class="form-control" placeholder="Isi Nama guru">
                    </div>
                    <div class="mb-3">
                        <label for="posisi" class="form-label">Posisi guru</label>
                        <input type="text" name="posisi" id="posisi" value="{{$guru->posisi}}" class="form-control"
                            placeholder="Isi Posisi guru">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" id="deskripsi" value="{{$guru->deskripsi}}"
                            class="form-control" placeholder="Isi Deskripsi">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Guru</label>
                        <input type="file" name="image" id="img" class="form-control @error('image')
                    is-invalid @enderror" onchange="previewImage()">
                        <img src="{{ asset('/storage/gambar/'. $guru->gambar) }}" alt="" width="120px" height="60px">

                        <img class="img-preview img-fluid mb-3 col-sm-7">
                        @error('image')
                        <div class="error">{{ $message }}</div>
                        @enderror
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

function previewImage() {
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