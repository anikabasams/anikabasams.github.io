<div class="modal-body mb-3">
                                            <div>
                                                <section class="float-start mb-3" style="width: 48%;">
                                                    <label class="form-label">Nama Mitra (Sesuai KTP)</label>
                                                    <input type="text" class="form-control" name="nama" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')">
                                                </section>
                                                <section class="float-end mb-3" style="width: 48%;">
                                                    <label class="form-label">NIK</label>
                                                    <input type="number" class="form-control" name="nik" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')">
                                                </section>
                                            </div>
                                            <div>
                                                <section class="float-start mb-3" style="width: 48%;">
                                                    <label class="form-label">Asal Kecamatan</label>
                                                    <input type="text" class="form-control" name="asal_kec" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')">
                                                </section>
                                                <section class="float-end mb-3" style="width: 48%;">
                                                    <label class="form-label">Asal Desa</label>
                                                    <input type="text" class="form-control" name="asal_des" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')">
                                                </section>
                                            </div>
                                            <div>
                                                <section class="float-start mb-3" style="width: 48%;">
                                                    <label class="form-label">No HP</label>
                                                    <input type="tel" class="form-control" name="nohp" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')">
                                                </section>
                                                <section class="float-end mb-3" style="width: 48%;">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')">
                                                </section>
                                            </div>
                                            <div>
                                                <section class="float-start mb-3" style="width: 48%;">
                                                    <label class="form-label">NPWP</label>
                                                    <input type="number" class="form-control" name="npwp" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')">
                                                </section>
                                                <section class="float-end mb-3" style="width: 48%;">
                                                    <label class="form-label">No REK</label>
                                                    <input type="number" class="form-control" name="norek" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')">
                                                </section>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                          <button type="button" class="btn btn-primary">Simpan</button>
                                        </div>

                                        </form>

                                      </div>
                                    </div>
                                </div>
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

                                        <div class="mb-3" >  
                                                    <button class="btn-sm btn-dark nb"><i class="fa-solid fa-plus" id="addRow"></i>&nbsp;Tambah Petugas</button>
                                                </div>
                                            <div>
                                                <table class="table table-hover">
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



                                        $taskDataAll = $request->member_id;

foreach ((array) $taskDataAll as $key => $taskData) {
    Task::create ([
        ['member_id' => $taskData],
        ['activity_id' => $request->activity_id[$key]],
        ['jabatan' => $request->jabatan[$key]],
        ['harga' => $request->harga[$key]],
        ['beban' => $request->beban[$key]]
    ]);
}

https://laracasts.com/discuss/channels/laravel/save-multiple-row-of-data-from-one-form
https://stackoverflow.com/questions/48472015/saving-multiple-records-in-a-laravel-eloquent-create
https://codingdriver.com/how-to-save-multiple-records-in-database-using-laravel.html
https://medium.com/dot-intern/create-multiple-upload-images-laravel-plus-displaying-on-view-6074aca289d
https://postsrc.com/code-snippets/how-to-save-multiple-records-at-once-in-laravel-eloquent
