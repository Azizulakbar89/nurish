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

                <form action="/kepsek-edit/{{$kepsek->idk}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="namakep" class="form-label">Nama Kepala Sekolah</label>
                        <input type="text" name="namakep" id="namakep" value="{{$kepsek->namakep}}" class="form-control"
                            placeholder="Nama Kepala Sekolah">
                    </div>
                    <div class="mb-3">
                        <label for="sambutan" class="form-label">Sambutan</label>
                        <input type="text" name="sambutan" id="sambutan" value="{{$kepsek->sambutan}}"
                            class="form-control" placeholder="Isi Sambutan">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Foto Kepala Sekolah</label>
                        <input type="file" name="image" id="img" class="form-control @error('image')
                    is-invalid @enderror" value="{{ asset('storage/gambar/'. $kepsek->gambar) }}"
                            onchange="previewImage()">
                        <img src="{{ asset('storage/gambar/'. $kepsek->gambar) }}" alt="" width="120px" height="60px">

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