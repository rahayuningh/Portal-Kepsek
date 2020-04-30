        <div id="TambahData" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Masukkan Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="/database-iphone/create_iphone" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">

                  <div class="form-group row">
                      <label for="tipe" class="col-md-3 col-form-label text-md-right">Tipe</label>
                      <div class="col-md-6">
                          <input id="tipe" type="tipe" name="tipe" class="form-control" placeholder="Masukkan tipe *" required="required" data-validation-required-message="Masukkan tipe.">
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                                    

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>

            </div>
          </div>
        </div>

        <div id="UpdateData" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Masukkan Data Terbaru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="/database-iphone/update_iphone" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">

                  <div class="form-group row">
                      <label for="tipe" class="col-md-3 col-form-label text-md-right">Tipe</label>
                      <div class="col-md-6">
                          <input id="tipe" type="tipe" name="tipe" class="form-control" placeholder="Masukkan tipe *" required="required" data-validation-required-message="Masukkan tipe.">
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                                    

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>

            </div>
          </div>
        </div>

      <div class="row">
        <a type="button" class="btn btn-primary" data-toggle="modal" href="#TambahData">+Tambah data</a>
      </div>