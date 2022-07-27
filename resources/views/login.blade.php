@extends('app')

@section('title')
    Masuk..
@endsection

@section('content')
    <div class="d-flex flex-column p-5 align-items-center justify-content-end" style="height: 600px;">
        <div class="p-4">
            <div class="logo">
                <a href="#">
                    <span style="color: #22a2c2; font-size : 45px;">
                    <i class="fa-solid fa-user-group fa-xs"></i>
                    Mitra-KU
                    </span>
                </a> 
            </div>
        </div>
        <div class="p-2">
            <a type="button" class="btn btn-primary" style="width: 250px;" href="{{'beranda'}}">Login SSO</a>
        </div>
        <div class="p-2">
            <button type="button" class="btn btn-outline-primary" style="width: 250px;" data-bs-toggle="modal" data-bs-target="#registModal">Registrasi</button>
            <div class="modal fade" id="registModal" tabindex="-1" aria-labelledby="registModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="registModalLabel">Registrasi</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <input type="number" class="form-control" id="kodeSatker" placeholder="Kode Satker">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" id="nipUser" placeholder="NIP Admin">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Batal</button>
                      <button type="button" class="btn btn-dark">Daftarkan Satker</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        
    </div>
    <div class="d-flex flex-column align-items-center justify-content-end p-4" style="margin-top:70px">
        <p style="font-size: 12px;">&copy; 2022 BPS Kabupaten Kayong Utara with Fenty and Sukma</p>
    </div>
@endsection
