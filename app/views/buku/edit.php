<div class="modal modal-sheet position-static d-block p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">Edit Buku : <?= $data['buku']['judul'] ?></h1>
            </div>

            <div class="modal-body p-5 pt-0">
                <form action="<?= BASE_URL; ?>/buku/updateBuku" method="post">
                    <div class="class-body">
                        <input type="hidden" name="id" value="<?= $data['buku']['id']; ?>">
                        <div class="form-group mb-3">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['buku']['judul'] ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="penulis">Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $data['buku']['penulis'] ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="tgl_selesai">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" value="<?= $data['buku']['tgl_selesai'] ?>">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>