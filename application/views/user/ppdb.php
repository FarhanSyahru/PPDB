

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-6">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8">

                            <?= form_open_multipart('user/ppdb'); ?>
                            
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Umur</label>
                                <div class="col-sm-10">
                            <input type="text" class="form-control" id="umur" name="umur">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Asal Sekolah</label>
                                <div class="col-sm-10">
                            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sekolah Tujuan</label>
                                <div class="col-sm-10">
                            <input type="text" class="form-control" id="sekolah_tujuan" name="sekolah_tujuan">
                                </div>
                            </div>
                            
                    <div class="form-group row justify-content-end mr-6">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" id="submit">Daftar</button>
                        </div>
                    </div>
                </div>
                    </div>

                    
                </div>
                <!-- /.container-fluid -->

            </div>