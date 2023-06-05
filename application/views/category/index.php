<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <!-- <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                        class="bi bi-plus"></i>Tambah</button> -->
                <a href="<?php echo base_url('index.php/category/addCategory'); ?>" class="btn btn-sm btn-primary"><i
                        class="bi bi-plus"></i>Tambah</a>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Category</h5>
                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($category as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $row->name?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo base_url('index.php/category/editCategory/'. $row->id) ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                                            <a href="<?php echo base_url('index.php/category/deleteCategory/'. $row->id) ?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url(). 'category/addCategory'; ?>">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>