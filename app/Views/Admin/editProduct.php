<!-- Modal Product Detail-->
<?php foreach($all_product as $products) : ?>
<div class="modal fade" data-bs-backdrop="static" id="editProductModal<?= $products->product_id; ?>" tabindex="-1" aria-labelledby="editProductLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title fs-6" id="modal_body">Product Details</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-body mb-3 p-2 position-relativ">
                                <img src="../asset-admin/img/eg.jpg" class="rounded img-responsive mx-auto d-block" width="400" alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-body ">
                                <form action="<?= base_url('all-product/update/'.$products->product_id) ?>" method="post">
                                    <?= csrf_field() ?>
                                    <div class="mb-2 row">
                                        <label for="productName" class="col-sm-4 col-form-label">Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="productName" name="productName" value="<?= $products->product_name; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="productPrice" class="col-sm-4 col-form-label">Price (RM)</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="productPrice" name="productPrice" value="<?= $products->product_price; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="productCategory" class="col-sm-4 col-form-label">Category</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="productCategory" name="productCategory" value="<?= $products->product_category; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="productType" class="col-sm-4 col-form-label">Collection</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="productType" name="productType" value="<?= $products->product_type; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="productStock" class="col-sm-4 col-form-label">Stock Available</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="productStock" name="productStock" value="<?= $products->product_stock; ?>">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" readonly class="form-control-plaintext" value="pcs">
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="productDescription" class="col-sm-4 col-form-label">Description</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="productDescription" name="productDescription" rows="8"><?= $products->product_description; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="productMaterial" class="col-sm-4 col-form-label">Material</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="productMaterial" name="productMaterial" value="<?= $products->product_material; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="productFinishing" class="col-sm-4 col-form-label">Finishing</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="productFinishing" name="productFinishing" rows="3"><?= $products->product_finishing; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="productShape" class="col-sm-4 col-form-label">Shape</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="productShape" name="productShape" value="<?= $products->product_shape; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="productSize" class="col-sm-4 col-form-label">Size</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="productSize" name="productSize" value="<?= $products->product_size; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="productPackaging" class="col-sm-4 col-form-label">Packaging</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="productPackaging" name="productPackaging" rows="2"><?= $products->product_packaging; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="productPublish" class="col-sm-4 col-form-label">Date Publish</label>
                                        <div class="col-sm-8">
                                            <input type="text" readonly class="form-control-plaintext" id="productPublish" name="productPublish" value="<?= date('d/m/Y', strtotime($products->input_date)); ?>">
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="productUpdate" class="col-sm-4 col-form-label">Last Update</label>
                                        <div class="col-sm-8">
                                            <input type="text" readonly class="form-control-plaintext" id="productUpdate" name="productUpdate" value="<?= date('d/m/Y', strtotime($products->update_time)); ?>">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>