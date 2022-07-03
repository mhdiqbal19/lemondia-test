                  <div class="row">
                      <div class="col">
                          <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Data Karyawan</h5>
                                  <button type="button" class="btn btn-outline-success m-b-xs " data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
                                  <hr>
                                  <table id="zero-conf" class="display" style="width:100%">

                                      <thead>
                                          <tr>
                                              <th>No</th>
                                              <th>Nama</th>
                                              <th>Contact</th>
                                              <th>Massage</th>
                                              <th>Date</th>
                                              <th colspan="2" width="90">Aksi</th>
                                          </tr>
                                      </thead>
                                      <?php
                                        $no = 1;
                                        foreach ($karyawan as $kar) : ?>
                                          <tbody>
                                              <tr>
                                                  <td><?php echo $no++ ?></td>
                                                  <td><?php echo $kar->nama ?></td>
                                                  <td><?php echo $kar->contact ?></td>
                                                  <td><?php echo $kar->massage ?></td>
                                                  <td><?php echo $kar->date ?></td>

                                                  <td width="20px"><?php echo anchor('data_karyawan/edit/' . $kar->id, '<i class="material-icons">edit</i>') ?></td>
                                                  <td width="20px" onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('data_karyawan/hapus/' . $kar->id, '<i class="material-icons">delete</i>') ?></td>

                                              </tr>
                                          <?php endforeach ?>
                                          </tbody>
                                          <tfoot>
                                              <tr>
                                                  <th>No</th>
                                                  <th>Nama</th>
                                                  <th>Email</th>
                                                  <th>Password</th>
                                                  <th>Gambar</th>
                                                  <th colspan="2">Aksi</th>
                                              </tr>
                                          </tfoot>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Form Input Data Karyawan</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="<?php echo base_url() . 'data_karyawan/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
                                  <div class="card">
                                      <div class="card-body">
                                          <div class="mb-3">
                                              <label for="formGroupExampleInput" class="form-label">Nama</label>
                                              <input type="text" name="nama" class="form-control" id="formGroupExampleInput" placeholder="Username input placeholder">
                                          </div>
                                          <div class="mb-3">
                                              <label for="formGroupExampleInput2" class="form-label">Contact</label>
                                              <input type="text" name="contact" class="form-control" id="formGroupExampleInput2" placeholder="Contect input placeholder">
                                          </div>
                                          <div class="mb-3">
                                              <label for="formGroupExampleInput2" class="form-label">Massage</label>
                                              <input type="text" name="massage" class="form-control" id="formGroupExampleInput2" placeholder="Massage input placeholder">
                                          </div>
                                          <div class="mb-3">
                                              <label for="formGroupExampleInput2" class="form-label">Date</label>
                                              <input type="date" name="date" class="form-control" id="formGroupExampleInput2" placeholder="Date input placeholder">
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                                          <button type="submit" class="btn btn-primary">Simpan</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>