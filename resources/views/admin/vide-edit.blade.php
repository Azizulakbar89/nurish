@extends('admin.template')

@section('title', 'Home')

@section('content')

<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">

            <div class="mt-5">

                <form action="/vide-edit/{{$vide->idvid}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="judul" class="form-label">Ganti Judul</label>
                        <input type="text" name="judul" id="judul" value="{{$vide->judul}}" class="form-control"
                            placeholder="Isi Judul Video">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Rubah Kelas</label>
                        <input type="text" name="kelas" id="kelas" value="{{$vide->kelas}}" class="form-control"
                            placeholder="Isi Kelas">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Rubah Link</label>
                        <input type="text" name="link" id="link" value="{{$vide->link}}" class="form-control"
                            placeholder="Isi Link Berdasarkan Akhir '/' Pada Link Youtube dan Sebelum tanda '='">
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