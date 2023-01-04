<!-- Modal Product Detail-->
<?php foreach($all_product as $products) : ?>
<div class="modal fade" data-bs-backdrop="static" id="deleteProductModal<?= $products->product_id; ?>" tabindex="-1" aria-labelledby="editProductLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <p class="modal-title fs-6" id="modal_body">Delete Product</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body ">
                                <form action="<?= base_url('all-product/delete/'.$products->product_id) ?>" method="post">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <div class="mb-2">
                                        <img src="../asset-admin/img/delete.gif" class="img-responsive mx-auto d-block" alt="" width="200" height="200">
                                    </div>
                                    <div class="mb-2 row">
                                        <p class="fw-bold text-center">Are you sure want to delete <?= strtoupper($products->product_name); ?>? This will PERMANENTLY delete this item from system</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>