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
                            <h3>Daftar Wilayah</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Daftar Wilayah</li>
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
                    <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <section class="float-start">
                                <button type="button" class="btn btn-primary btn-sm me-1 mb-1" data-bs-toggle="modal" data-bs-target="#tambahWilayah">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                                @include('add_loc')
                            </section>
                            <section class="float-end">
                                <select class="form-select mb-3 text-primary" aria-label=".form-select-lg example">
                                    <option selected>--Kecamatan--</option>
                                    <option value="301">Pampang Harapan</option>
                                </select>
                            </section>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Kab</th>
                                        <th>Kabupaten</th>
                                        <th>Kode Kec</th>
                                        <th>Kecamatan</th>
                                        <th>Kode Desa</th>
                                        <th>Desa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($locations as $index => $location)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td style="font-weight: bold;">
                                            {{ $location->kode_satker }}
                                        </td>
                                        <td>
                                            {{ $location->nama_satker }} 
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            <form action="{{ route('daftar-wilayah.destroy', $location->id) }}" method="Post">
                                                <section class="float-end">
                                                @csrf
                                                @method('DELETE')
                                                    <button type="submit" class="btn btn-sm" style="color: red;">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </section>
                                                <section class="float-end">
                                                    <button type="button" class="btn btn-sm" style="color:black;" data-bs-toggle="modal" data-bs-target="#editWilayah{{ $location->id }}">
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
                    </section>
                </div>
                @foreach ($locations as $location)
                <div class="modal fade" id="editWilayah{{ $location->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Wilayah</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('daftar-wilayah.update', $location->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body mb-3">
                                <div>
                                    <section class="float-start mb-3" style="width: 48%;">
                                        <label class="form-label">Kode Kabupaten</label>
                                        <input type="number" class="form-control" name='kode_satker' value="{{ $location->kode_satker }}" required/>
                                    </section>
                                    <section class="float-end mb-3" style="width: 48%;">
                                        <label class="form-label">Kabupaten</label>
                                        <input type="text" class="form-control" name='nama_satker' value="{{ $location->nama_satker }}" required />
                                    </section>
                                </div>
                                <div>
                                    <section class="float-start mb-3" style="width: 48%;">
                                        <label class="form-label">Kode Kecamatan</label>
                                        <input type="number" class="form-control" name='honor_maks'/>
                                    </section>
                                    <section class="float-end mb-3" style="width: 48%;">
                                        <label for="nama_kec" class="form-label">Kecamatan</label>
                                        <input type="text" class="form-control" id="nama_kec"/>
                                    </section>
                                </div>
                                <div>
                                    <section class="float-start mb-3" style="width: 48%;">
                                        <label for="kode_desa" class="form-label">Kode Desa</label>
                                        <input type="number" class="form-control" id="kode_desa"/>
                                    </section>
                                    <section class="float-end mb-3" style="width: 48%;">
                                        <label for="nama_desa" class="form-label">Desa</label>
                                        <input type="text" class="form-control" id="nama_desa"/>
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
                @endforeach        
                <footer>
                    @include('footer')
                </footer>
                
            </div>
        </div>
    </div>
@endsection