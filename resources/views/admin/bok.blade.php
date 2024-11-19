@extends('admin.template')

@section('title', 'Home')

@section('content')

<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">

            <form>
                <div class="mb-3 d-flex justify-content-between align-items-center">
                    <form action="{{ route('bok') }}" method="GET" class="d-flex">
                        <input type="text" name="cari" placeholder="Cari Judul e-Book" class="form-control me-2">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                    <a href="bok-add" class="btn btn-primary ms-0">Tambah Data e-Book</a>
                    <!-- Added 'ms-3' for left margin -->
                </div>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">File</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($bok as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->kelas}}</td>
                            <td>{{$item->dokumen}}</td>
                            <td>
                                <a href="/bok-edit/{{$item->idb}}"><i class='bi bi-pencil'></i></a>|
                                <a href="/deletebok/{{$item->idb}}"><i class='bi bi-trash'></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Kontrol Pagination -->
                <div class="pagination">
                    {{ $bok->links() }}
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