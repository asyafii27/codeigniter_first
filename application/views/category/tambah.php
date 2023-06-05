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
            <h3>Tambah Category</h3>
            <form method="post" action="<?php echo base_url('index.php/category/tambahCategory'); ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="modal-footer my-3">
                    <button type="button" class="btn btn-sm btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</main>