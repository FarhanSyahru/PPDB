

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
                        <form action="" method="post">
                            <div class="form-group row">
                            <input for="id" type="hidden" name="id" value="<?= $submenu['id']; ?>">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="url" class="col-sm-2 col-form-label">URL</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
                        </div>
                    </div>
                    <div class="form-group row justify-content-end mr-6">
                        <div class="col-sm-10">
                            <a href="<?= base_url('menu/submenu'); ?>" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
                </form>
                    </div>

                    
                </div>
                <!-- /.container-fluid -->

            </div>