@extends('admin.template')

@section('title', 'Home')

@section('content')

<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">

            <div class="mt-5">

                <form action="ekstra-add" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="namaekstra" class="form-label">Nama Ekstra</label>
                        <input type="text" name="namaekstra" id="namaekstra" class="form-control"
                            placeholder="Isi Nama Ekstra">
                    </div>
                    <div class="mb-3">
                        <label for="pukul" class="form-label">Jam Ekstra</label>
                        <input type="time" name="pukul" id="pukul" class="form-control" placeholder="Isi Jam Ekstra">
                    </div>
                    <div class="mb-3">
                        <label for="hari" class="form-label">Hari Ekstra</label>
                        <select name="hari" id="hari" class="form-control">
                            <option value="" disabled selected>Pilih Hari</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsikan</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control"
                            placeholder="Isi Deskripsi Ekstra">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Ekstra</label>
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