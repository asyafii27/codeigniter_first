<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Article</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                        class="bi bi-plus"></i>Tambah</button>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Article</h5>
                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($article as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $row->category_name?></td>
                                    <td><?= $row->title ?></td>
                                    <td><?= $row->author ?></td>
                                    <td><?= $row->content ?></td>
                                    <?php if($row->status_publish == 0) {?>
                                    <td>Pending</td>
                                    <?php } else if($row->status_publish == 1) { ?>
                                    <td>Publish</td>
                                    <?php }?>
                                    <td>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editModal<?php echo $row->id ?>"><i
                                                    class="bi bi-pencil"></i> Edit</a>
                                            <a href="<?php echo base_url('index.php/category/deleteCategory/'. $row->id) ?>"
                                                class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</a>
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
                    <form method="post" action="<?php echo base_url('index.php/article/tambahArticle'); ?>">
                        <div class="form-group">
                            <label for="name">Category</label>
                            <select name="category_id" id="category_id" class="form-control select2">
                                <?php  foreach ($category as $row) : ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Author</label>
                            <input type="text" name="author" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Content</label>
                            <input type="text" name="content" class="form-control">
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

    <!-- modal untuk edit -->
    <?php $no = 0;
    foreach ($article as $row) : $no++; ?>
    <div class="modal fade" id="editModal<?php echo $row->id ?>" tabindex="-1" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="post"
                        action="<?php echo base_url('index.php/CategoryModal/ubahCategory/'.$row->id); ?>">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $row->name ?>">
                            <!-- <input type="hidden" name="id" value="<?php echo $row->id ?>"> -->
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
    <?php endforeach ?>
</main>