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
                                        <li class="breadcrumb-item"><a href="{{'beranda'}}">Beranda</a></li>
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
                                    <div class="modal fade" id="tambahKeg" tabindex="-1" aria-labelledby="tambahKegModal" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="tambahKegModal">Tambah Kegiatan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <form action="{{ route('daftar-kegiatan.store')}}" method="POST">
                                                @csrf

                                                <div class="modal-body mb-3">
                                                    <div class="mb-3">
                                                        <label class="form-label">Nama Kegiatan</label>
                                                        <input type="text" class="form-control" name="judul">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Waktu Mulai</label>
                                                        <input type="date" class="form-control" name="mulai">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Waktu Selesai</label>
                                                        <input type="date" class="form-control" name="selesai">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Satuan</label><br>
                                                        <select class="form-select mb-3" aria-label=".form-select-lg example" name="satuan">
                                                            <option selected>Pilih Satuan</option>
                                                            <option value="Blok Sensus">Blok Sensus</option>
                                                            <option value="Dokumen">Dokumen</option>
                                                            <option value="Segmen">Segmen</option>
                                                            <option value="Orang/Bulan">Orang/Bulan (OB)</option>
                                                            <option value="Responden">Responden</option>
                                                            <option value="Rumah Tangga">Rumah Tangga</option>
                                                        </select>
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
                                            <th>Nama Kegiatan</th>
                                            <th>Waktu Pelaksanaan</th>
                                            <th>Jumlah Petugas</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($activities as $activity)
                                        <tr>
                                            <td>
                                                <section class="float-start">
                                                    {{ $activity->judul }}
                                                </section>
                                                <!--<section class="float-start" style="margin-left:10px;">
                                                    <button type="button" class="btn btn-sm btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#editKeg" style="font-size:13px;">
                                                        Pilih Petugas
                                                    </button>
                                                </section>-->
                                            </td>
                                            <td>
                                                <section class="float-top text" style="font-size: 13px;">
                                                    <i class="fa-solid fa-circle-play"></i>
                                                    <span>{{ $activity->mulai }}</span>
                                                </section>
                                                <section class="float-bottom" style="font-size: 13px;">
                                                    <i class="fa-solid fa-circle-stop"></i>
                                                    <span>{{ $activity->selesai }}</span>
                                                </section>
                                            </td>
                                            <td class="text-danger">
                                                <i class="fa-solid fa-clipboard-user fa-lg" data-bs-toggle="modal" data-bs-target="#lihatMitra{{ $activity->id }}"></i>
                                                <span> {{ \App\Models\Task::where(['activity_id' => $activity->id])->count() }}
                                                </span>
                                            </td>
                                            <td>
                                                <form action="{{ route('daftar-kegiatan.destroy', $activity->id) }}" method="Post">
                                                <section class="float-end">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm" style="color: red;">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </section>
                                                <section class="float-end">
                                                    <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#editKeg{{ $activity->id }}" style="color:black;">
                                                        <i class="fa-solid fa-edit"></i>
                                                    </button>
                                                </section>
                                                <section class="float-end">
                                                    <button type="button" class="btn btn-sm" style="color: black;" data-bs-toggle="modal" data-bs-target="#tambahMember{{ $activity->id }}">
                                                        <i class="fa-solid fa-user-plus"></i>
                                                    </button>
                                                </section>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            
                            @foreach ($activities as $activity)
                            <div class="modal fade" id="lihatMitra{{ $activity->id }}" tabindex="-1" aria-labelledby="lihatmitralabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="lihatmitralabel">Daftar Mitra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body mb-3">
                                            <form>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" value="{{ $activity->judul }}" readonly>
                                                </div>
                                                <div class="float-end mb-3 text-warning" style="font-size: 12px;">
                                                    Pastikan status semua mitra berwarna hijau
                                                </div>
                                            </form>
                                            <div>
                                                <table class="table table-hover" id="table1">
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
                                                        @foreach ( \App\Models\Task::where(['activity_id' => $activity->id ])->get() as $task)
                                                        <tr>
                                                            <td>
                                                                {{ \App\Models\Member::where(['id' => $task->member_id ])->value('nama') }}
                                                            </td>
                                                            <td>
                                                                {{ $task->beban }}
                                                            </td>
                                                            <td>
                                                                {{ $task->harga }}
                                                            </td>
                                                            <td class="fw-bold">
                                                                {{ $task->harga*$task->beban }}
                                                            </td>
                                                            <td>
                                                                <section>
                                                                    <span class="badge bg-danger">Honor Penuh</span>
                                                                </section>
                                                            </td>
                                                        </tr>
                                                        @endforeach
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
                            @endforeach

                            @foreach ($activities as $activity)
                            <div class="modal fade" id="editKeg{{ $activity->id }}" tabindex="-1" aria-labelledby="editKegModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editKegModal">Edit Kegiatan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('daftar-kegiatan.update', $activity->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body mb-3">
                                            <div class="mb-3">
                                                <section class="float-start" style="width: 24%;">
                                                    <label class="form-label">Nama Kegiatan</label>
                                                    <input type="text" class="form-control" name="judul" value="{{ $activity->judul }}">
                                                </section>
                                                <section class="float-start" style="width: 23%; margin-left: 1em;">
                                                    <label class="form-label">Waktu Mulai</label>
                                                    <input type="date" class="form-control" name="mulai" value="{{ $activity->mulai }}">
                                                </section>
                                                <section class="float-start" style="width: 23%; margin-left: 1em;">
                                                    <label class="form-label">Waktu Selesai</label>
                                                    <input type="date" class="form-control" name="selesai" value="{{ $activity->selesai }}">
                                                </section>
                                                <section class="float-start" style="width: 23%; margin-left: 1em;">
                                                    <label class="form-label">Satuan</label><br>
                                                    <select class="form-select mb-3" aria-label=".form-select-lg example" name="satuan">
                                                        <option selected value="{{ $activity->satuan }}">{{ $activity->satuan }}</option>
                                                        <hr>
                                                        <option value="Blok Sensus">Blok Sensus</option>
                                                        <option value="Dokumen">Dokumen</option>
                                                        <option value="Segmen">Segmen</option>
                                                        <option value="Orang/Bulan">Orang/Bulan (OB)</option>
                                                        <option value="Responden">Responden</option>
                                                        <option value="Rumah Tangga">Rumah Tangga</option>
                                                    </select>
                                                </section>                                        
                                            </div>
                                            <div>
                                                <table class="table table-hover" id="table1">
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
                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            @foreach ($activities as $activity)
                            <div class="modal fade" id="tambahMember{{ $activity->id }}" tabindex="-1" aria-labelledby="tambahMemberModal{{ $activity->id }}" aria-hidden="true"> 
                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tambahMemberModal{{ $activity->id }}">Tugaskan Mitra</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <form action="{{ route('daftar-tugas.store') }}" method="POST">
                                        @csrf

                                        <div class="modal-body mb-3">
                                            <div style="margin: 0 1em 1em 0">
                                                <section class="float-start p-1" style="width: 80%">
                                                    <input name="activity_id" value="{{ $activity->id }}" hidden></input>
                                                    <b>{{ $activity->judul }}</b>
                                                </section>
                                                <section class="float-end p-1" style="width: 20%">
                                                    <button type="button" onclick="addRow()" class="btn btn-sm btn-dark">
                                                        <i class="fa-solid fa-plus"></i> Mitra
                                                    </button>
                                                </section>
                                            </div>
                                            <div>
                                                <table class="table table-hover" >
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Mitra</th>
                                                            <th>Jabatan</th>
                                                            <th>Beban</th>
                                                            <th>Harga Satuan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table2{{ $activity->id }}">
                                                        <tr >
                                                            <td>
                                                                <select class="form-select-sm" aria-label=".form-select example" name="member_id[]">
                                                                @foreach ($members as $member)
                                                                    <option value="{{ $member->id }}">{{ $member->nama }}</option>
                                                                @endforeach
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control form-control-sm" name="jabatan[]"/>
                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control form-control-sm" name="beban[]"/>
                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control form-control-sm" name="harga[]"/> 
                                                            </td>
                                                            <td></td>
                                                        </tr>

                                                        <script>
                                                            function addRow (top) {

                                                            let table = document.getElementById("table2{{ $activity->id }}");

                                                            if (top) { var row = table.insertRow(0); }
                                                            else { var row = table.insertRow(); }

                                                            let cell = row.insertCell();
                                                            cell.innerHTML = '<select class="form-select-sm" aria-label=".form-select example" name="member_id[]"> @foreach ($members as $member) <option value="{{ $member->id }}">{{ $member->nama }}</option> @endforeach </select>';
                                                            cell = row.insertCell();
                                                            cell.innerHTML = '<input type="text" class="form-control form-control-sm" name="jabatan[]"/>';
                                                            cell = row.insertCell();
                                                            cell.innerHTML = '<input type="number" class="form-control form-control-sm" name="beban[]"/>';
                                                            cell = row.insertCell();
                                                            cell.innerHTML = '<input type="number" class="form-control form-control-sm" name="harga[]"/>';
                                                            cell = row.insertCell();
                                                            cell.innerHTML = '<button type="button" onclick="deleteRoww()" class="btn btn-sm" style="color: red;"> <i class="fa-solid fa-trash"></i> </button>';
                                                            }

                                                            function deleteRoww() {
                                                                document.getElementById("table2{{ $activity->id }}").deleteRow(1);
                                                            }
                                                        </script>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--<div>
                                                <section class="float-end" style="margin-left : 10px;">
                                                    <button class="btn-sm btn-success nb">
                                                        <i class="fa-solid fa-file-import"></i>
                                                        &nbsp;impor Petugas
                                                    </button>
                                                </section>
                                                <section class="float-end">
                                                    <input type="file" class="form-control form-control-sm">
                                                </section>
                                            </div>-->
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