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
                                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Daftar Mitra</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    </div>
                    <section class="section">
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
                                        <div class="modal-body mb-3">
                                            <form>
                                                <div>
                                                    <section class="float-start mb-3" style="width: 48%;">
                                                        <label for="nama" class="form-label">Nama Mitra (Sesuai KTP)</label>
                                                        <input type="text" class="form-control" id="nama">
                                                    </section>
                                                    <section class="float-end mb-3" style="width: 48%;">
                                                        <label for="nik" class="form-label">NIK</label>
                                                        <input type="text" class="form-control" id="nik">
                                                    </section>
                                                </div>
                                                <div>
                                                    <section class="float-start mb-3" style="width: 48%;">
                                                        <label for="kec" class="form-label">Asal Kecamatan</label>
                                                        <select class="form-select mb-3" aria-label=".form-select example">
                                                            <option selected>--Kecamatan--</option>
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
                                                            <option selected>--Desa--</option>
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
                                                        <input type="tel" class="form-control" id="hp">
                                                    </section>
                                                    <section class="float-end mb-3" style="width: 48%;">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="email">
                                                    </section>
                                                </div>
                                                <div>
                                                    <section class="float-start mb-3" style="width: 48%;">
                                                        <label for="npwp" class="form-label">NPWP</label>
                                                        <input type="number" class="form-control" id="npwp">
                                                    </section>
                                                    <section class="float-end mb-3" style="width: 48%;">
                                                        <label for="norek" class="form-label">No REK</label>
                                                        <input type="number" class="form-control" id="norek">
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
                                    <option selected>--Desa--</option>
                                    <option value="1">Pampang Harapan</option>
                                    <option value="2">Pangkalan Buton</option>
                                    <option value="3">Nipah Kuning</option>
                                    <option value="4">Seponti Jaya</option>
                                    <option value="5">Dusun Besar</option>
                                    <option value="6">Padang</option>
                                </select>
                            </section>
                            <section class="float-end" style="margin-right: 10px;">
                                <select class="form-select mb-3 text-primary" aria-label=".form-select-lg example">
                                    <option selected>--Kecamatan--</option>
                                    <option value="1">Sukadana</option>
                                    <option value="2">Simpang Hilir</option>
                                    <option value="3">Teluk Batang</option>
                                    <option value="4">Seponti</option>
                                    <option value="5">Pulau Maya</option>
                                    <option value="6">Kepulauan Karimata</option>
                                </select>
                            </section>
                              
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
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
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Aang Jusnardi
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                6111100010001000
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Sukadana
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                Pangkalan Buton
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                082112345678
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                aangjusnardi@gmail.com
                                            </section>
                                        </td>
                                        <td>123456789123456</td>
                                        <td>123456789123456</td>
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
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Abdul Gofar
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                6111100010001000
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Simpang Hilir
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                Pemangkat
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                082112345678
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                abdgofar@gmail.com
                                            </section>
                                        </td>
                                        <td>123456789123456</td>
                                        <td>123456789123456</td>
                                        <td>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color: red;">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </section>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color:black;">
                                                    <i class="fa-solid fa-edit"></i>
                                                </button>
                                            </section>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Adminem
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                6111100010001000
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Seponti
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                Seponti Jaya
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                082112345678
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                adminemseponti@gmail.com
                                            </section>
                                        </td>
                                        <td>123456789123456</td>
                                        <td>123456789123456</td>
                                        <td>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color: red;">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </section>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color:black;">
                                                    <i class="fa-solid fa-edit"></i>
                                                </button>
                                            </section>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Aang Jusnardi
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                6111100010001000
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Sukadana
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                Pangkalan Buton
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                082112345678
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                aangjusnardi@gmail.com
                                            </section>
                                        </td>
                                        <td>123456789123456</td>
                                        <td>123456789123456</td>
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
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Aang Jusnardi
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                6111100010001000
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Sukadana
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                Pangkalan Buton
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                082112345678
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                aangjusnardi@gmail.com
                                            </section>
                                        </td>
                                        <td>123456789123456</td>
                                        <td>123456789123456</td>
                                        <td>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color: red;">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </section>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color:black;">
                                                    <i class="fa-solid fa-edit"></i>
                                                </button>
                                            </section>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Abdul Gofar
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                6111100010001000
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Simpang Hilir
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                Pemangkat
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                082112345678
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                abdgofar@gmail.com
                                            </section>
                                        </td>
                                        <td>123456789123456</td>
                                        <td>123456789123456</td>
                                        <td>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color: red;">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </section>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color:black;">
                                                    <i class="fa-solid fa-edit"></i>
                                                </button>
                                            </section>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Adminem
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                6111100010001000
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Seponti
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                Seponti Jaya
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                082112345678
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                adminemseponti@gmail.com
                                            </section>
                                        </td>
                                        <td>123456789123456</td>
                                        <td>123456789123456</td>
                                        <td>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color: red;">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </section>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color:black;">
                                                    <i class="fa-solid fa-edit"></i>
                                                </button>
                                            </section>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Aang Jusnardi
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                6111100010001000
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Sukadana
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                Pangkalan Buton
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                082112345678
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                aangjusnardi@gmail.com
                                            </section>
                                        </td>
                                        <td>123456789123456</td>
                                        <td>123456789123456</td>
                                        <td>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color: red;">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </section>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color:black;">
                                                    <i class="fa-solid fa-edit"></i>
                                                </button>
                                            </section>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Aang Jusnardi
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                6111100010001000
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Sukadana
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                Pangkalan Buton
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                082112345678
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                aangjusnardi@gmail.com
                                            </section>
                                        </td>
                                        <td>123456789123456</td>
                                        <td>123456789123456</td>
                                        <td>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color: red;">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </section>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color:black;">
                                                    <i class="fa-solid fa-edit"></i>
                                                </button>
                                            </section>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Anika Basa Meldion
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                6111100010001000
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                Sukadana
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                Sutera
                                            </section>
                                        </td>
                                        <td>
                                            <section class="float-top text" style="font-weight: bold;">
                                                082112345678
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                anika.basa@gmail.com
                                            </section>
                                        </td>
                                        <td>123456789123456</td>
                                        <td>123456789123456</td>
                                        <td>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color: red;">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </section>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color:black;">
                                                    <i class="fa-solid fa-edit"></i>
                                                </button>
                                            </section>
                                        </td>
                                    </tr>
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