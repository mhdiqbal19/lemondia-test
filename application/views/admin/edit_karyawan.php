<div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Form Edit Karyawan</h5>
                                    <?php foreach($karyawan as $kar) :?>
                                      <form method="post" action="<?php echo base_url().'data_karyawan/update' ?>">
                                        <div class="mb-3">
                                          <label for="nama" class="form-label">Nama</label>
                                          <input type="hidden" name="id" class="form-control" value="<?php echo $kar->id ?>">
                                          <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama" value="<?php echo $kar->nama ?>">
                                        </div>
                                        <div class="mb-3">
                                          <label for="contact" class="form-label">Contact</label>
                                          <input type="text" class="form-control" name="contact" id="contact" aria-describedby="contact" value="<?php echo $kar->contact ?>">
                                        </div>
                                        <div class="mb-3">
                                          <label for="massage" class="form-label">Massage</label>
                                          <input type="text" class="form-control" name="massage" id="massage" aria-describedby="massage" value="<?php echo $kar->massage ?>">
                                        </div>
                                        <div class="mb-3">
                                          <label for="date" class="form-label">Date</label>
                                          <input type="date" class="form-control" name="date" id="date" aria-describedby="date" value="<?php echo $kar->date ?>">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                      </form>
                                      <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
</div>