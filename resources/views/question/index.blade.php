@extends('layouts.dashboard')

@section('content')
    @if(Session::has('success'))
        <div class="alert alert-primary alert-dismissible" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container">
        <h4 class="fw-bold py-3 mb-4">Tabel Question</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card p-4">
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalCenter">
                            Tambah
                        </button>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover" id="dataTables">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Konten</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($questions as $key => $question)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $question->judul }}</td>
                                        <td>{{ $question->konten }}</td>
                                        <td>
                                            <!-- Tombol Edit -->
                                            <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $question->id }}">Edit</a>

                                            <!-- Form Hapus -->
                                            <form method="POST" action="{{ route('questions.destroy', $question->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger delete-button btn-sm" data-name="{{ $question->judul }}" data-id="{{ $question->id }}">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <!-- Modal Update -->
                                    <div class="modal fade" id="modalEdit{{ $question->id }}" tabindex="-1" aria-hidden="true">
                                        <!-- ... Isi kode modal sesuai kebutuhan ... -->
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Modal Add -->
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Tambah Pertanyaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('questions.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="idWithTitle" class="form-label">ID</label>
                        <input type="text" id="idWithTitle" name="id" class="form-control" placeholder="Enter ID" required />
                    </div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col mb-0">
                        <label for="judulWithTitle" class="form-label">Judul</label>
                        <input type="text" id="judulWithTitle" name="judul" class="form-control" placeholder="Enter Judul" required />
                    </div>
                    <div class="col mb-0"> <!-- Fixed the class name from "Konten" to "col" -->
                        <label for="KontenWithTitle" class="form-label">Konten</label>
                        <input type="text" id="KontenWithTitle" name="konten" class="form-control" placeholder="Enter Konten" required />
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

