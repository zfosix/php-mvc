<div class="container mt-5">
     <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
               <div class="modal-header p-5 pb-5 border-bottom-0">
                    <h1 class="fw-bold mb-2 fs-2">Tambah Buku</h1>
               </div>
               <div class="modal-body p-5 pt-0">
                    <form class="m2" action="<?= BASE_URL; ?>/buku/simpanbuku" method="post">
                         <div class="form-floating mb-3">
                              <input type="text" class="form-control rounded-3" id="judul" name="judul"
                                   autocomplete="off">
                              <label for="judul">Judul</label>
                         </div>
                         <div class="form-floating mb-3">
                              <input type="text" class="form-control rounded-3" id="penulis" name="penulis"
                                   autocomplete="off">
                              <label for="penulis">Penulis</label>
                         </div>
                         <div class="form-group mb-3">
                              <label for="tgl_selesai"></label>
                              <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai">
                         </div>
                         <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Submit</button>
                    </form>
               </div>
          </div>
     </div>
</div>

</div>