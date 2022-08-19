<div class="modal fade" id="tambahWilayah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Wilayah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('daftar-wilayah.store')}}" method="POST">
            @csrf

            <div class="modal-body mb-3">
                <div>
                    <section class="float-start mb-3" style="width: 48%;">
                        <label class="form-label">Kode Kabupaten</label>
                        <input type="number" class="form-control" name='kode_satker' required oninvalid="this.setCustomValidity('Bagian ini harus diisi')"/>
                    </section>
                    <section class="float-end mb-3" style="width: 48%;">
                        <label class="form-label">Kabupaten</label>
                        <input type="text" class="form-control" name='nama_satker' required oninvalid="this.setCustomValidity('Bagian ini harus diisi')"/>
                    </section>
                </div>
                <div>
                    <section class="float-start mb-3" style="width: 48%;">
                        <label class="form-label">Kode Kecamatan</label>
                        <input type="number" class="form-control" name='honor_maks'  oninvalid="this.setCustomValidity('Bagian ini harus diisi')"/>
                    </section>
                    <section class="float-end mb-3" style="width: 48%;">
                        <label for="nama_kec" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="nama_kec"  oninvalid="this.setCustomValidity('Bagian ini harus diisi')"/>
                    </section>
                </div>
                <div>
                    <section class="float-start mb-3" style="width: 48%;">
                        <label for="kode_desa" class="form-label">Kode Desa</label>
                        <input type="number" class="form-control" id="kode_desa"  oninvalid="this.setCustomValidity('Bagian ini harus diisi')"/>
                    </section>
                    <section class="float-end mb-3" style="width: 48%;">
                        <label for="nama_desa" class="form-label">Desa</label>
                        <input type="text" class="form-control" id="nama_desa"  oninvalid="this.setCustomValidity('Bagian ini harus diisi')"/>
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
                           