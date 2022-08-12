<div class="modal fade" id="tambahWilayah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Wilayah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body mb-3">
                <form action="{{ route('daftar-wilayah.store')}}" method="POST">
                @csrf
                    <div>
                        <section class="float-start mb-3" style="width: 48%;">
                            <label class="form-label">Kode Kabupaten</label>
                            <input type="number" class="form-control" name='kode_satker' required/>
                        </section>
                        <section class="float-end mb-3" style="width: 48%;">
                            <label class="form-label">Kabupaten</label>
                            <input type="text" class="form-control" name='nama_satker'  required />
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
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                
            </div>
        </div>
    </div>
</div>
                           