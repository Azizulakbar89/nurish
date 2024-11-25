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

                <form action="/ekstra-edit/{{$ekstra->ide}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="namaekstra" class="form-label">Nama Ekstra</label>
                        <input type="text" name="namaekstra" id="namaekstra" value="{{$ekstra->namaekstra}}"
                            class="form-control" placeholder="Isi Nama Esktra">
                    </div>
                    <div class="mb-3">
                        <label for="pukul" class="form-label">Jam Ekstra</label>
                        <input type="time" name="pukul" id="pukul" value="{{$ekstra->pukul}}" class="form-control"
                            placeholder="Isi Jam Ekstra">
                    </div>
                    <div class="mb-3">
                        <label for="hari" class="form-label">Hari Ekstra</label>
                        <select name="hari" id="hari" class="form-control">
                            <option value="" disabled {{ empty($ekstra->hari) ? 'selected' : '' }}>Pilih Hari</option>
                            <option value="Senin" {{ $ekstra->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                            <option value="Selasa" {{ $ekstra->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                            <option value="Rabu" {{ $ekstra->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                            <option value="Kamis" {{ $ekstra->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                            <option value="Jumat" {{ $ekstra->hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                            <option value="Sabtu" {{ $ekstra->hari == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                            <option value="Minggu" {{ $ekstra->hari == 'Minggu' ? 'selected' : '' }}>Minggu</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" id="deskripsi" value="{{$ekstra->deskripsi}}"
                            class="form-control" placeholder="Isi Deskripsi">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Ekstra</label>
                        <input type="file" name="image" id="img" class="form-control @error('image')
                    is-invalid @enderror" onchange="previewImage()">
                        <img src="{{ asset('/storage/gambar/'. $ekstra->gambar) }}" alt="" width="120px" height="60px">

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