@extends('app')

@section('title')
    Daftar Mitra
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
                            <h3>Daftar Kegiatan</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Daftar Kegiatan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    </div>
                    <section class="section">
                        <div class="card">
                        <div class="card-header">
                            <section class="float-start">
                                <button type="button" class="btn btn-primary btn-sm me-1 mb-1" data-bs-toggle="modal" data-bs-target="#tambahKeg">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                                <div class="modal fade" id="tambahKeg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Tambah Kegiatan</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body mb-3">
                                            <form>
                                                <div class="mb-3">
                                                  <label for="namaKeg" class="form-label">Nama Kegiatan</label>
                                                  <input type="text" class="form-control" id="namaKeg">
                                                </div>
                                                <div>
                                                    <section class="float-start mb-3" style="width: 48%;">
                                                        <label for="waktuMulai" class="form-label">Waktu Mulai</label>
                                                        <input type="date" class="form-control" id="waktuMulai">
                                                    </section>
                                                    <section class="float-end mb-3" style="width: 48%;">
                                                        <label for="waktuSelesai" class="form-label">Waktu Selesai</label>
                                                        <input type="date" class="form-control" id="waktuSelesai">
                                                    </section>
                                                </div>
                                                <div>
                                                    <section class="float-start mb-3" style="width: 48%;">
                                                        <label for="angkeg" class="form-label">Anggaran Kegiatan</label>
                                                        <input type="number" class="form-control" id="angkeg">
                                                    </section>
                                                    <section class="float-end mb-3" style="width: 48%;">
                                                        <label for="satuan" class="form-label">Satuan</label><br>
                                                        <select class="form-select mb-3" aria-label=".form-select-lg example">
                                                            <option selected>Pilih Satuan</option>
                                                            <option value="1">Blok Sensus</option>
                                                            <option value="2">Dokumen</option>
                                                            <option value="3">Segmen</option>
                                                            <option value="4">Orang/Bulan (OB)</option>
                                                            <option value="5">Responden</option>
                                                            <option value="6">Rumah Tangga</option>
                                                        </select>
                                                    </section>
                                                </div>
                                                <div class="mb-3" >  
                                                    <button class="btn-sm btn-dark nb"><i class="fa-solid fa-plus" id="addRow"></i>&nbsp;Tambah Petugas</button>
                                                </div>
                                            </form>
                                            <div>
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Mitra</th>
                                                            <th>Beban</th>
                                                            <th>Harga Satuan</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-outline-secondary dropdown-toggle me-1" type="button"
                                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        Pilih Mitra
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="#">Aang Jusnardi</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control form-control-sm" id="">
                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control form-control-sm" id=""> 
                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control form-control-sm" id="">
                                                            </td>
                                                            <td>
                                                                <section class="float-end">
                                                                    <button type="button" class="btn btn-sm" style="color: red;">
                                                                        <i class="fa-solid fa-trash"></i>
                                                                    </button>
                                                                </section>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div>
                                                <section class="float-end" style="margin-left : 10px;">
                                                    <button class="btn-sm btn-success nb">
                                                        <i class="fa-solid fa-file-import"></i>
                                                        &nbsp;impor Petugas
                                                    </button>
                                                </section>
                                                <section class="float-end">
                                                    <input type="file" class="form-control form-control-sm">
                                                </section>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                          <button type="button" class="btn btn-primary">Simpan Kegiatan</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </section>
                            <section class="float-end">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle me-1" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Tahun
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">2018</a>
                                        <a class="dropdown-item" href="#">2019</a>
                                        <a class="dropdown-item" href="#">2020</a>
                                    </div>
                                </div>
                            </section>
                            <section class="float-end">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle me-1" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Bulan
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Januari</a>
                                        <a class="dropdown-item" href="#">Februari</a>
                                        <a class="dropdown-item" href="#">Maret</a>
                                    </div>
                                </div>
                            </section>  
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama Kegiatan</th>
                                        <th>Waktu Pelaksanaan</th>
                                        <th>Jumlah Petugas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Survei Sosial Ekonomi Nasional</td>
                                        <td>
                                            <section class="float-top text" style="font-size: 13px;">
                                                <i class="fa-solid fa-circle-play"></i>
                                                <span>12 Januari 2022</span>
                                            </section>
                                            <section class="float-bottom" style="font-size: 13px;">
                                                <i class="fa-solid fa-circle-stop"></i>
                                                <span>20 Februari 2022</span>
                                            </section>
                                        </td>
                                        <td class="text-danger">
                                            <i class="fa-solid fa-clipboard-user fa-lg" data-bs-toggle="modal" data-bs-target="#lihatMitra"></i>
                                            <span>90</span>
                                        </td>
                                        <td>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" style="color: red;">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </section>
                                            <section class="float-end">
                                                <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#editKeg" style="color:black;">
                                                    <i class="fa-solid fa-edit"></i>
                                                </button>
                                            </section>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Survei Angkatan Kerja Nasional</td>
                                        <td>
                                            <section class="float-top text" style="font-size: 13px;">
                                                <i class="fa-solid fa-circle-play"></i>
                                                <span>30 Maret 2022</span>
                                            </section>
                                            <section class="float-bottom" style="font-size: 13px;">
                                                <i class="fa-solid fa-circle-stop"></i>
                                                <span>20 April 2022</span>
                                            </section>
                                        </td>
                                        <td class="text-success">
                                            <i class="fa-solid fa-clipboard-user fa-lg"></i>
                                            <span>30</span>
                                        </td>
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
                                        <td>Survei Biaya Hidup</td>
                                        <td>
                                            <section class="float-top text" style="font-size: 13px;">
                                                <i class="fa-solid fa-circle-play"></i>
                                                <span>01 Januari 2022</span>
                                            </section>
                                            <section class="float-bottom" style="font-size: 13px;">
                                                <i class="fa-solid fa-circle-stop"></i>
                                                <span>31 Desember 2022</span>
                                            </section>
                                        </td>
                                        <td class="text-danger">
                                            <i class="fa-solid fa-clipboard-user fa-lg"></i>
                                            <span>80</span>
                                        </td>
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
                        <div class="modal fade" id="lihatMitra" tabindex="-1" aria-labelledby="lihatmitralabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="lihatmitralabel">Daftar Mitra</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body mb-3">
                                    <form>
                                        <div class="mb-3">
                                          <label for="namaKeg" class="form-label">Nama Kegiatan</label>
                                          <input type="text" class="form-control" id="namaKeg" value="Survei Sosial Ekonomi Nasional" readonly>
                                        </div>
                                        <div class="float-end mb-3 text-warning" style="font-size: 12px;">
                                            Pastikan status semua mitra berwarna hijau
                                        </div>
                                    </form>
                                    <div>
                                        <table class="table table-striped" id="table1">
                                            <thead>
                                                <tr>
                                                    <th>Nama Mitra</th>
                                                    <th>Beban</th>
                                                    <th>Harga Satuan</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Aang Jusnardi
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        3450000
                                                    </td>
                                                    <td class="fw-bold">
                                                        3450000
                                                    </td>
                                                    <td>
                                                        <section>
                                                            <span class="badge bg-danger">Honor Penuh</span>
                                                        </section>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Abdul Gofar
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        3450000
                                                    </td>
                                                    <td class="fw-bold">
                                                        3450000
                                                    </td>
                                                    <td>
                                                        <section>
                                                            <span class="badge bg-success">Honor Sesuai</span>
                                                        </section>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Adminem
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        3450000
                                                    </td>
                                                    <td class="fw-bold">
                                                        3450000
                                                    </td>
                                                    <td>
                                                        <section>
                                                            <span class="badge bg-success">Honor Sesuai</span>
                                                        </section>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Anika Basa Meldion
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        3450000
                                                    </td>
                                                    <td class="fw-bold">
                                                        3450000
                                                    </td>
                                                    <td>
                                                        <section>
                                                            <span class="badge bg-success">Honor Sesuai</span>
                                                        </section>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Aang Jusnardi
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        3450000
                                                    </td>
                                                    <td class="fw-bold">
                                                        3450000
                                                    </td>
                                                    <td>
                                                        <section>
                                                            <span class="badge bg-danger">Honor Penuh</span>
                                                        </section>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Abdul Gofar
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        3450000
                                                    </td>
                                                    <td class="fw-bold">
                                                        3450000
                                                    </td>
                                                    <td>
                                                        <section>
                                                            <span class="badge bg-success">Honor Sesuai</span>
                                                        </section>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Adminem
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        3450000
                                                    </td>
                                                    <td class="fw-bold">
                                                        3450000
                                                    </td>
                                                    <td>
                                                        <section>
                                                            <span class="badge bg-success">Honor Sesuai</span>
                                                        </section>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Anika Basa Meldion
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        3450000
                                                    </td>
                                                    <td class="fw-bold">
                                                        3450000
                                                    </td>
                                                    <td>
                                                        <section>
                                                            <span class="badge bg-success">Honor Sesuai</span>
                                                        </section>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="modal fade" id="editKeg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit Kegiatan</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body mb-3">
                                    <form>
                                        <div class="mb-3">
                                          <label for="namaKeg" class="form-label">Nama Kegiatan</label>
                                          <input type="text" class="form-control" id="namaKeg" value="Survei Sosial Ekonomi Nasional">
                                        </div>
                                        <div>
                                            <section class="float-start mb-3" style="width: 48%;">
                                                <label for="waktuMulai" class="form-label">Waktu Mulai</label>
                                                <input type="date" class="form-control" id="waktuMulai" value="2022-01-12">
                                            </section>
                                            <section class="float-end mb-3" style="width: 48%;">
                                                <label for="waktuSelesai" class="form-label">Waktu Selesai</label>
                                                <input type="date" class="form-control" id="waktuSelesai" value="2022-02-20">
                                            </section>
                                        </div>
                                        <div>
                                            <section class="float-start mb-3" style="width: 48%;">
                                                <label for="angkeg" class="form-label">Anggaran Kegiatan</label>
                                                <input type="number" class="form-control" id="angkeg" value="270859526">
                                            </section>
                                            <section class="float-end mb-3" style="width: 48%;">
                                                <label for="satuan" class="form-label">Satuan</label><br>
                                                <select class="form-select mb-3" aria-label=".form-select-lg example">
                                                    <option selected>Orang/Bulan (OB)</option>
                                                    <option value="1">Blok Sensus</option>
                                                    <option value="2">Dokumen</option>
                                                    <option value="3">Segmen</option>
                                                    <option value="4">Orang/Bulan (OB)</option>
                                                    <option value="5">Responden</option>
                                                    <option value="6">Rumah Tangga</option>
                                                </select>
                                            </section>
                                        </div>
                                        <div class="mb-3">  
                                            <button class="btn-sm btn-dark nb"><i class="fa-solid fa-plus" id="addRow"></i>&nbsp;Tambah Petugas</button>
                                        </div>
                                    </form>
                                    <div>
                                        <table class="table table-striped" id="table1">
                                            <thead>
                                                <tr>
                                                    <th>Nama Mitra</th>
                                                    <th>Beban</th>
                                                    <th>Harga Satuan</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-secondary dropdown-toggle me-1" type="button"
                                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                Aang Jusnardi
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#">Aang Jusnardi</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-sm" id="" value="1">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-sm" id="" value="2700000"> 
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-sm" id="" value="2700000">
                                                    </td>
                                                    <td>
                                                        <section class="float-end">
                                                            <button type="button" class="btn btn-sm" style="color: red;">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </section>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-secondary dropdown-toggle me-1" type="button"
                                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                Abdul Gofar
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#">Aang Jusnardi</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-sm" id="" value="1">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-sm" id="" value="2700000"> 
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-sm" id="" value="2700000">
                                                    </td>
                                                    <td>
                                                        <section class="float-end">
                                                            <button type="button" class="btn btn-sm" style="color: red;">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </section>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-secondary dropdown-toggle me-1" type="button"
                                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                Adminem
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#">Aang Jusnardi</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-sm" id="" value="1">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-sm" id="" value="2700000"> 
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-sm" id="" value="2700000">
                                                    </td>
                                                    <td>
                                                        <section class="float-end">
                                                            <button type="button" class="btn btn-sm" style="color: red;">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </section>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                        <section class="float-end" style="margin-left : 10px;">
                                            <button class="btn-sm btn-success nb">
                                                <i class="fa-solid fa-file-import"></i>
                                                &nbsp;impor Petugas
                                            </button>
                                        </section>
                                        <section class="float-end">
                                            <input type="file" class="form-control form-control-sm">
                                        </section>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                  <button type="button" class="btn btn-primary">Edit Kegiatan</button>
                                </div>
                              </div>
                            </div>
                        </div>
                        </div>
                    </section>
                </div>

                <footer>
                    @include('footer')
                </footer>
                
            </div>
        </div>
    </div>
@endsection