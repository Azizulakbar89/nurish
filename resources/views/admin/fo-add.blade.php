@extends('admin.template')

@section('title', 'Home')

@section('content')

<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">

            <div class="mt-5">

                <form action="fo-add" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="judulfo" class="form-label">Judul Kegiatan</label>
                        <input type="text" name="judulfo" id="judulfo" class="form-control"
                            placeholder="Judul Kegiatan">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Kegiatan</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control"
                            placeholder="Deskripsi Kegiatan">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Kegiatan</label>
                        <input type="file" name="image" id="img" class="form-control @error('image')
                    is-invalid @enderror" value="{{ old('image') }}" onchange="previewImage()">

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