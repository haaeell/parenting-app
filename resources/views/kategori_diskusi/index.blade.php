@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h2>Kategori Diskusi</h2>
        
        <button type="button" class="btn btn-primary mb-3 " data-bs-toggle="modal" data-bs-target="#modalCenter">
                        Tambah 
                    </button>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kategori_diskusis as $kategori_diskusi)
                    <tr>
                        <td>{{ $kategori_diskusi->id }}</td>
                        <td>{{ $kategori_diskusi->name }}</td>
                        <td>{{ $kategori_diskusi->description }}</td>
                        <td>
                            <a href="" class="btn btn-info btn-sm">Lihat</a>
                            <a href="" class="btn btn-primary btn-sm">Edit</a>
                            <form action="" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Tidak ada data kategori diskusi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

      <!-- Modal add-->
      <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCenterTitle">Tambah Kategori</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
              @csrf
              <div class="modal-body">
              <div class="row">
                  <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">id</label>
                    <input type="number" id="idWithTitle" name="id" class="form-control" placeholder="No" required />
                  </div>
                </div>
                <div class="row">
                  <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">Name</label>
                    <input type="text" id="nameWithTitle" name="name" class="form-control" placeholder="Enter Name" required />
                  </div>
                </div>  
                <div class="row">
                  <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">Deskripsi</label>
                    <input type="text" id="deskripsiWithTitle" name="deskripsi" class="form-control" placeholder="Masukkan deskripsi" required />
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
