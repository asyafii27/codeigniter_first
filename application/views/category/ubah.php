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
    <div class="row">
        <div class="col-lg-6">
            <h3>Ubah Category</h3>
            <form method="post" action="<?php echo base_url('index.php/category/ubahCategory/'. $category->id); ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="<?= $category->name ?>">
                </div>
                <div class="modal-footer my-3">
                    <a href="<?php echo base_url('index.php/category/index') ?>" type="button" class="btn btn-sm btn-secondary mx-2">Kembali</a>
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</main>