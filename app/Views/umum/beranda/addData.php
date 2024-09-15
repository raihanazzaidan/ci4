<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?= $title; ?></h3>
                <p class="text-subtitle text-muted">The default layout.</p>
                <a href='<?= base_url('/beranda'); ?>' class="btn btn-primary">Kembali</a>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href='<?= base_url(''); ?>'><?= env('appname'); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $submodule; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Comics</h4>
        </div>
        <div class="card-body">
            <form action="<?= base_url('/beranda/tambah-data/proses'); ?>" enctype="multipart/form-data" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" name="slug" class="form-control" placeholder="Enter Slug" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Author</label>
                                <input type="text" name="author" class="form-control" placeholder="Enter Author's name" required>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>