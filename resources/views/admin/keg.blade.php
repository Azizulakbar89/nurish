@extends('admin.template')

@section('title', 'Home')

@section('content')

<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">

            <form>
                <div class="mb-3 d-flex justify-content-between align-items-center">
                    <form action="{{ route('keg') }}" method="GET" class="d-flex">
                        <input type="text" name="cari" placeholder="Cari Judul Video" class="form-control me-2">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                    <a href="keg-add" class="btn btn-primary ms-3">Tambah Data Video</a>
                    <!-- Added 'ms-3' for left margin -->
                </div>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Link</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($keg as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->deskripsi}}</td>
                            <td>{{$item->tgl}}</td>
                            <td>{{$item->link}}</td>
                            <td>
                                <a href="/keg-edit/{{$item->idkeg}}"><i class='bi bi-pencil'></i></a>|
                                <a href="/deletekeg/{{$item->idkeg}}"><i class='bi bi-trash'></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Kontrol Pagination -->
                <div class="pagination">
                    {{ $keg->links() }}
                </div>

            </form>

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