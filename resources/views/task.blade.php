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
                            <h3>Matriks Kegiatan</h3>
                        </div>
                    </div>
                    </div>
                    <section class="section">
                        <div class="card">
                        <div class="card-header">
                            <section class="float-start" style="font-size: 13px;">
                                <h5>Honor Maksimal : Rp2.799.999,00</h5>
                                <span class="badge bg-success">
                                </span> Honor Sesuai
                                <span class="badge bg-danger" style="margin-left: 15px;">
                                </span> Honor Lebih
                                <span class="badge bg-dark" style="margin-left: 15px;">
                                </span> Honor Kosong
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
                                        <th>Identitas Mitra</th>
                                        <th>Januari</th>
                                        <th>Februari</th>
                                        <th>Maret</th>
                                        <th>April</th>
                                        <th>Mei</th>
                                        <th>Juni</th>
                                        <th>Juli</th>
                                        <th>Agustus</th>
                                        <th>September</th>
                                        <th>Oktober</th>
                                        <th>November</th>
                                        <th>Desember</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-nowrap">
                                            <section class="float-top text" style="font-weight: bold;">
                                                Aang Jusnardi
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                Sukadana - Pangkalan Buton
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                NIK &nbsp;: 6111100010001000
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                REK : 123456789123456
                                            </section>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-success nb col-24" data-bs-toggle="modal" data-bs-target="#sesuai">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24" data-bs-toggle="modal" data-bs-target="#kosong">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-success nb col-24" data-bs-toggle="modal" data-bs-target="#sesuai">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-danger nb col-24" data-bs-toggle="modal" data-bs-target="#lebih">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-success nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <section class="float-top text" style="font-weight: bold;">
                                                Aang Jusnardi
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                Sukadana - Pangkalan Buton
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                NIK &nbsp;: 6111100010001000
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                REK : 123456789123456
                                            </section>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-success nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-success nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-danger nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-success nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <section class="float-top text" style="font-weight: bold;">
                                                Aang Jusnardi
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                Sukadana - Pangkalan Buton
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                NIK &nbsp;: 6111100010001000
                                            </section>
                                            <section class="float-bottom" style="font-size: 12px;">
                                                REK : 123456789123456
                                            </section>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-success nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-success nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-danger nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-success nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn-sm btn-dark nb col-24">
                                                <i class="fa-solid fa-eye"></i>
                                                Lihat Kegiatan dan Honor
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </section>
                </div>

                <div class="modal fade" id="sesuai" tabindex="-1" aria-labelledby="sesuailabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="sesuailabel">Januari</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body mb-3">
                            <form>
                                <section class="float-start mb-3" style="width: 48%;">
                                    <label for="namaKeg" class="form-label">Nama Mitra</label>
                                    <input type="text" class="form-control" id="namaKeg" value="Aang Jusnardi" readonly>
                                </section>
                                <section class="float-end mb-3" style="width: 48%;">
                                    <label for="honor" class="form-label">Jumlah Honor</label>
                                    <input type="number" class="form-control bg-success text-white" id="honor" value="2600000" readonly>
                                </section>
                            </form>
                            <div>
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Nama Kegiatan</th>
                                            <th>Beban Mitra</th>
                                            <th>Satuan</th>
                                            <th>Honor Kegiatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Survei Sosial Ekonomi Nasional
                                            </td>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Orang/Bulan (OB)
                                            </td>
                                            <td class="fw-bold">
                                                1800000
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Survei Angkatan Kerja Nasional
                                            </td>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                                Dokumen
                                            </td>
                                            <td class="fw-bold">
                                                800000
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

                <div class="modal fade" id="lebih" tabindex="-1" aria-labelledby="lebihlabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="lebihlabel">Januari</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body mb-3">
                            <form>
                                <section class="float-start mb-3" style="width: 48%;">
                                    <label for="namaKeg" class="form-label">Nama Mitra</label>
                                    <input type="text" class="form-control" id="namaKeg" value="Aang Jusnardi" readonly>
                                </section>
                                <section class="float-end mb-3" style="width: 48%;">
                                    <label for="honor" class="form-label">Jumlah Honor</label>
                                    <input type="number" class="form-control bg-danger text-white" id="honor" value="3000000" readonly>
                                </section>
                            </form>
                            <div>
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Nama Kegiatan</th>
                                            <th>Beban Mitra</th>
                                            <th>Satuan</th>
                                            <th>Honor Kegiatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Survei Sosial Ekonomi Nasional
                                            </td>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Orang/Bulan (OB)
                                            </td>
                                            <td class="fw-bold">
                                                1800000
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Survei Angkatan Kerja Nasional
                                            </td>
                                            <td>
                                                30
                                            </td>
                                            <td>
                                                Dokumen
                                            </td>
                                            <td class="fw-bold">
                                                1200000
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

                <div class="modal fade" id="kosong" tabindex="-1" aria-labelledby="kosonglabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="kosonglabel">Januari</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body mb-3">
                            <form>
                                <section class="float-start mb-3" style="width: 48%;">
                                    <label for="namaKeg" class="form-label">Nama Mitra</label>
                                    <input type="text" class="form-control" id="namaKeg" value="Aang Jusnardi" readonly>
                                </section>
                                <section class="float-end mb-3" style="width: 48%;">
                                    <label for="honor" class="form-label">Jumlah Honor</label>
                                    <input type="number" class="form-control bg-dark text-white" id="honor" value="0" readonly>
                                </section>
                            </form>
                            <div>
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Nama Kegiatan</th>
                                            <th>Beban Mitra</th>
                                            <th>Satuan</th>
                                            <th>Honor Kegiatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                belum ada kegiatan 
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

                <footer>
                    @include('footer')
                </footer>
                
            </div>
        </div>
    </div>
@endsection