<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?= $title; ?></h3>
                <p class="text-subtitle text-muted">The default layout.</p>
                <a href='<?= base_url('/beranda/tambah-data'); ?>'class="btn btn-primary" > Tambah Data</a>
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
<div class="page-body">
    <div class="card">
        <div class="card-header">
            <h5>List Comics</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th width="20px">No.</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 1;
                        foreach ($comics as $c) { ?>
                            <tr>
                                <td><?= $id++; ?></td>
                                <td><?= $c->title; ?></td>
                                <td><?= $c->author; ?></td>
                                <td><img width="60" src="<?= base_url('img/' . $c->cover) ?>"></td>
                                <td><a href='<?= base_url('/beranda/edit-data/'.$c->id); ?>'class="btn btn-primary" >Edit</a></td>
                                <td><a href='<?= base_url('/beranda/hapus-data/'.$c->id); ?>'class="btn btn-danger" >Hapus</a></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>