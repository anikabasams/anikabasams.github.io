@extends('app')

@section('title')
    Beranda
@endsection

@section('content')
    <div id="app">
        @include('sidebar')
        <div id="main" class='layout-navbar'>
            @include('header')

            <div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last mb-2">
                                <h3>Daftar Mitra</h3>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{'beranda'}}">Beranda</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Daftar Mitra</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p>{{ $message }}</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <section class="float-start">
                                <button type="button" class="btn btn-primary btn-sm me-1 mb-1" data-bs-toggle="modal" data-bs-target="#tambahMitra">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                                <div class="modal fade" id="tambahMitra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Mitra</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <form action="{{ route('daftar-mitra.store')}}" method="POST">
                                            @csrf

                                            <div class="modal-body mb-3">
                                                <div>
                                                    <section class="float-start mb-3" style="width: 48%;">
                                                        <label class="form-label">Nama Mitra (Sesuai KTP)</label>
                                                        <input type="text" class="form-control" name="nama" required oninvalid="this.setCustomValidity('Harus diisi dengan nama')"/>
                                                    </section>
                                                    <section class="float-end mb-3" style="width: 48%;">
                                                        <label class="form-label">NIK</label>
                                                        <input type="number" class="form-control" name="nik" required oninvalid="this.setCustomValidity('Harus diisi angka')"/>
                                                    </section>
                                                </div>
                                                <div>
                                                    <section class="float-start mb-3" style="width: 48%;">
                                                        <label class="form-label">Asal Kecamatan</label>
                                                        <input type="text" class="form-control" name="asal_kec" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')"/>
                                                    </section>
                                                    <section class="float-end mb-3" style="width: 48%;">
                                                        <label class="form-label">Asal Desa</label>
                                                        <input type="text" class="form-control" name="asal_des" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')"/>
                                                    </section>
                                                </div>
                                                <div>
                                                    <section class="float-start mb-3" style="width: 48%;">
                                                        <label class="form-label">No HP</label>
                                                        <input type="tel" class="form-control" name="nohp" required oninvalid="this.setCustomValidity('Harus diisi minimal 10, maksimal 13')"/>
                                                    </section>
                                                    <section class="float-end mb-3" style="width: 48%;">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" class="form-control" name="email" required oninvalid="this.setCustomValidity('Harus diisi dengan tanda --@--')"/>
                                                    </section>
                                                </div>
                                                <div>
                                                    <section class="float-start mb-3" style="width: 48%;">
                                                        <label class="form-label">NPWP</label>
                                                        <input type="text" class="form-control" name="npwp" required oninvalid="this.setCustomValidity('Diisi lengkap dengan . dan -')"/>
                                                    </section>
                                                    <section class="float-end mb-3" style="width: 48%;">
                                                        <label class="form-label">No REK</label>
                                                        <input type="number" class="form-control" name="norek" required oninvalid="this.setCustomValidity('Diisi hanya angka')"/>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </section>   
                        </div>
                        <div class="card-body">
                            <table class="table table-hover" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama/ NIK</th>
                                        <th>Asal</th>
                                        <th>No HP/ Email</th>
                                        <th>No. Rekening</th>
                                        <th>NPWP</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($members as $index => $member)

                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                {{ $member->nama }}
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                {{ $member->nik }}
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                {{ $member->asal_kec }}
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                {{ $member->asal_des }}
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                {{ $member->nohp }}
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                {{ $member->email }}
                                            </section>
                                        </td>
                                        <td>{{ $member->npwp }}</td>
                                        <td>{{ $member->norek }}</td>
                                        <td>
                                            <form action="{{ route('daftar-mitra.destroy', $member->id) }}" method="POST">
                                                <section class="float-end">
                                                    
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-sm" style="color: red;">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </section>
                                                <section class="float-end">
                                                    <button type="button" class="btn btn-sm" style="color:black;" data-bs-toggle="modal" data-bs-target="#editMitra{{ $member->id }}">
                                                        <i class="fa-solid fa-edit"></i>
                                                    </button>
                                                </section>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </div>
                
                @foreach ($members as $member)

                <div class="modal fade" id="editMitra{{ $member->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Mitra</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <form action="{{ route('daftar-mitra.update', $member->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="modal-body mb-3">
                                <div>
                                    <section class="float-start mb-3" style="width: 48%;">
                                        <label class="form-label">Nama Mitra (Sesuai KTP)</label>
                                        <input type="text" class="form-control" name="nama" value="{{ $member->nama }}" required oninvalid="this.setCustomValidity('Harus diisi dengan nama')"/>
                                    </section>
                                    <section class="float-end mb-3" style="width: 48%;">
                                        <label class="form-label">NIK</label>
                                        <input type="number" class="form-control" name="nik" value="{{ $member->nik }}" required oninvalid="this.setCustomValidity('Harus diisi angka')"/>
                                    </section>
                                </div>
                                <div>
                                    <section class="float-start mb-3" style="width: 48%;">
                                        <label class="form-label">Asal Kecamatan</label>
                                        <input type="text" class="form-control" name="asal_kec" value="{{ $member->asal_kec }}" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')"/>
                                    </section>
                                    <section class="float-end mb-3" style="width: 48%;">
                                        <label class="form-label">Asal Desa</label>
                                        <input type="text" class="form-control" name="asal_des" value="{{ $member->asal_des }}" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')"/>
                                    </section>
                                </div>
                                <div>
                                    <section class="float-start mb-3" style="width: 48%;">
                                        <label class="form-label">No HP</label>
                                        <input type="tel" class="form-control" name="nohp" value="{{ $member->nohp }}" required oninvalid="this.setCustomValidity('harus diisi minimal 10, maksimal 13')"/>
                                    </section>
                                    <section class="float-end mb-3" style="width: 48%;">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $member->email }}" required oninvalid="this.setCustomValidity('Harus diisi dengan tanda --@--')"/>
                                    </section>
                                </div>
                                <div>
                                    <section class="float-start mb-3" style="width: 48%;">
                                        <label class="form-label">NPWP</label>
                                        <input type="number" class="form-control" name="npwp" value="{{ $member->npwp }}" required oninvalid="this.setCustomValidity('Diisi lengkap dengan . dan -')"/>
                                    </section>
                                    <section class="float-end mb-3" style="width: 48%;">
                                        <label class="form-label">No REK</label>
                                        <input type="number" class="form-control" name="norek" value="{{ $member->norek }}" required oninvalid="this.setCustomValidity('Diisi hanya angka')"/>
                                    </section>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                @endforeach
                
            </div>

            <footer class="p-4 m-2">
                @include('footer')
            </footer>
        </div>
    </div>
@endsection