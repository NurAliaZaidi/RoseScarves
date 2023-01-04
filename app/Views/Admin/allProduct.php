<?= $this->extend('Layout/templateDashboard'); ?>
<?= $this->Section('content'); ?>

<!-- Begin Page Content -->
<main id="main" class="main">
    <div class="pagetitle">
        <h1><?= $title; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
        </nav>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Product</h6>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body my-2">
                            <a type="button" href="<?= base_url('add-product');?>" class="btn btn-primary btn-sm mb-3" >Add New Product</a>
                
                            <!-- Alert success  add new product -->
                            <?php if(session('success')) : ?>
                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <i class="fa fa-check-circle me-2" aria-hidden="true"></i>
                                <div>
                                    <?= session('success'); ?>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="table-responsive-sm">
                                <table class="table table-sm table-bordered my-2" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No.</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Date Update</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php
                                            foreach($all_product as $products) : ?>
                                        <tr class="text-center">
                                            <td><?= $no; ?></td>
                                            <td><?= $products->product_id; ?></td>
                                            <td><?= $products->product_name; ?></td>
                                            <td><?= $products->product_type; ?></td>
                                            <td><?= $products->product_category; ?></td>
                                            <td><?= $products->product_price; ?></td>
                                            <td><?= $products->product_stock; ?></td>
                                            <td><?= date('d/m/Y', strtotime($products->update_time)); ?></td>
                                            <td class="text-center">
                                                <input type="hidden" value="<?= $products->product_name; ?>" id="product_id">
                                                <button class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#productDetailModal<?= $products->product_id; ?>" id="detail">Detail</button>
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editProductModal<?= $products->product_id; ?>" id="editProduct">Edit</button>
                                                <button type="button" href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteProductModal<?= $products->product_id; ?>" id="deleteProduct">Delete</button>
                                            </td>
                                            
                                        </tr>
                                        <?php 
                                            $no++;
                                            endforeach; 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?= $this->include('admin/detailproduct'); ?>
<?= $this->include('admin/editproduct'); ?>
<?= $this->include('admin/deleteproduct'); ?>

<?= $this->endSection(); ?>