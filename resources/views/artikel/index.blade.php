@extends('layouts.dashboard')

@section('content')

<h4 class="fw-bold py-3 mb-4">Tabel artikel</h4>
<div class="row">
    <div class="col-md-12">
        <div class="card p-4">
            <div class="col-md-2">
                <button type="button" class="btn btn-primary mb-3 " data-bs-toggle="modal" data-bs-target="#modalCenter">
                    Tambah
                </button>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover" id="dataTables">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>judul</th>
                            <th>Konten</th>
                            <th>Penulis</th>
                            <th>Publikasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($artikels as $item)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $loop->iteration }}</strong>
                            </td>
                            <td>
                                {{ $item->judul }}
                            </td>
                            <td>
                                {{ $item->konten }}
                            </td>
                            <td>
                                {{ $item->judul }}
                            </td>
                            <td>
                                {{ $item->publikasi }}
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</a>
                                    <form method="POST" action="{{ route('artikels.destroy', $item->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger delete-button btn-sm" data-name="{{$item->name}}" data-id="{{$item->id}}">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        <!--Modal edit-->
                        <div class="modal fade" id="modalEdit" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Edit artikel</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="" method="POST">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="judul" class="form-label">Judul</label>
                                                    <input type="text" id="judul" name="judul" class="form-control" placeholder="Maasukkan judul">
                                                </div>
                                            </div>
                                            <div class="row g-2 mb-3">
                                                <div class="col mb-0">
                                                    <label for="konten" class="form-label">Konten</label>
                                                    <input type="text" id="konten" name="konten" class="form-control" placeholder="masukkan konten">
                                                </div>
                                            </div>
                                            <div class="row g-2 mb-3">
                                                <div class="col mb-0">
                                                    <label for="pwnulis" class="form-label">Penulis</label>
                                                    <input type="text" id="penulis" name="penulis" class="form-control" placeholder="Nama penulis">
                                                </div>
                                                <div class="col mb-0">
                                                    <label for="html5-date-input" class="form-label">Publikasi</label>
                                                    <input class="form-control" name="publikasi" type="date" id="html5-date-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>


<!--Modal tambah-->
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Tambah Artikel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('artikels.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" id="judul" name="judul" class="form-control" placeholder="Maasukkan judul" required>
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="konten" class="form-label">Konten</label>
                            <input type="text" id="konten" name="konten" class="form-control" placeholder="masukkan konten" required>
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="pwnulis" class="form-label">Penulis</label>
                            <input type="text" id="penulis" name="penulis" class="form-control" placeholder="Nama penulis" required>
                        </div>
                        <div class="col mb-0">
                            <label for="html5-date-input" class="form-label">Publikasi</label>
                            <input class="form-control" name="publikasi" type="date" id="html5-date-input" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection