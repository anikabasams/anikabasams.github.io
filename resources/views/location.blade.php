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
                    <section class="section">
                        <div class="card">
                        <div class="card-header">
                            <section class="float-start">
                                <button type="button" class="btn btn-primary btn-sm me-1 mb-1" data-bs-toggle="modal" data-bs-target="#tambahWilayah">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                                <div class="modal fade" id="tambahWilayah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Tambah Mitra</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body mb-3">
                                            <form>
                                                <div>
                                                    <section class="float-start mb-3" style="width: 48%;">
                                                        <label for="kode_satker" class="form-label">Kode Kabupaten</label>
                                                        <input type="text" class="form-control" id="kode_satker">
                                                    </section>
                                                    <section class="float-end mb-3" style="width: 48%;">
                                                        <label for="nama_satker" class="form-label">Kabupaten</label>
                                                        <input type="text" class="form-control" id="nama_satker">
                                                    </section>
                                                </div>
                                                <div>
                                                    <section class="float-start mb-3" style="width: 48%;">
                                                        <label for="kode_kec" class="form-label">Kode Kecamatan</label>
                                                        <input type="text" class="form-control" id="kode_kec">
                                                    </section>
                                                    <section class="float-end mb-3" style="width: 48%;">
                                                        <label for="nama_kec" class="form-label">Kecamatan</label>
                                                        <input type="text" class="form-control" id="nama_kec">
                                                    </section>
                                                </div>
                                                <div>
                                                    <section class="float-start mb-3" style="width: 48%;">
                                                        <label for="kode_desa" class="form-label">Kode Desa</label>
                                                        <input type="text" class="form-control" id="kode_desa">
                                                    </section>
                                                    <section class="float-end mb-3" style="width: 48%;">
                                                        <label for="nama_desa" class="form-label">Desa</label>
                                                        <input type="text" class="form-control" id="nama_desa">
                                                    </section>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                          <button type="button" class="btn btn-primary">Simpan</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </section>
                            <section class="float-end">
                                <select class="form-select mb-3 text-primary" aria-label=".form-select-lg example">
                                    <option selected>--Kecamatan--</option>
                                    <option value="301">Pampang Harapan</option>
                                </select>
                            </section>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode_Kab</th>
                                        <th>Kabupaten</th>
                                        <th>Kode_Kec</th>
                                        <th>Kecamatan</th>
                                        <th>Kode_Desa</th>
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
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color: red;">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </section>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color:black;" data-bs-toggle="modal" data-bs-target="#editMitra">
                                                    <i class="fa-solid fa-edit"></i>
                                                </button>
                                            </section>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </section>
                </div>
                <div class="modal fade" id="editMitra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Mitra</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body mb-3">
                            <form>
                                <div>
                                    <section class="float-start mb-3" style="width: 48%;">
                                        <label for="nama" class="form-label">Nama Mitra (Sesuai KTP)</label>
                                        <input type="text" class="form-control" id="nama" value="Aang Jusnardi">
                                    </section>
                                    <section class="float-end mb-3" style="width: 48%;">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="nik" value="6111100010001000">
                                    </section>
                                </div>
                                <div>
                                    <section class="float-start mb-3" style="width: 48%;">
                                        <label for="kec" class="form-label">Asal Kecamatan</label>
                                        <select class="form-select mb-3" aria-label=".form-select example">
                                            <option selected>Sukadana</option>
                                            <option value="1">Sukadana</option>
                                            <option value="2">Simpang Hilir</option>
                                            <option value="3">Teluk Batang</option>
                                            <option value="4">Seponti</option>
                                            <option value="5">Pulau Maya</option>
                                            <option value="6">Kepulauan Karimata</option>
                                        </select>
                                    </section>
                                    <section class="float-end mb-3" style="width: 48%;">
                                        <label for="desa" class="form-label">Asal Desa</label>
                                        <select class="form-select mb-3" aria-label=".form-select example">
                                            <option selected>Pangkalan Buton</option>
                                            <option value="1">Pampang Harapan</option>
                                            <option value="2">Pangkalan Buton</option>
                                            <option value="3">Nipah Kuning</option>
                                            <option value="4">Seponti Jaya</option>
                                            <option value="5">Dusun Besar</option>
                                            <option value="6">Padang</option>
                                        </select>
                                    </section>
                                </div>
                                <div>
                                    <section class="float-start mb-3" style="width: 48%;">
                                        <label for="hp" class="form-label">No HP</label>
                                        <input type="tel" class="form-control" id="hp" value="6111100010001000">
                                    </section>
                                    <section class="float-end mb-3" style="width: 48%;">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" value="aangjusnardi@gmail.com">
                                    </section>
                                </div>
                                <div>
                                    <section class="float-start mb-3" style="width: 48%;">
                                        <label for="npwp" class="form-label">NPWP</label>
                                        <input type="number" class="form-control" id="npwp" value="123456789123456">
                                    </section>
                                    <section class="float-end mb-3" style="width: 48%;">
                                        <label for="norek" class="form-label">No REK</label>
                                        <input type="number" class="form-control" id="norek" value="123456789123456">
                                    </section>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                          <button type="button" class="btn btn-primary">Edit</button>
                        </div>
                      </div>
                    </div>
                </div>
                <footer>
                    @include('footer')
                </footer>
                
            </div>
        </div>
    </div>
@endsection