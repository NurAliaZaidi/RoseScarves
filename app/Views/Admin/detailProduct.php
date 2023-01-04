<!-- Modal Product Detail-->
<?php foreach($all_product as $products) : ?>
<div class="modal fade" id="productDetailModal<?= $products->product_id; ?>" tabindex="-1" aria-labelledby="productDetailLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
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
                                <div class="row row-cols-2">
                                    <div class="col-4 fw-bold">
                                        <p class="fw-bold ">Name</p>
                                    </div>
                                    <div class="col-8">
                                        <p class=""><?= $products->product_name; ?></p>
                                    </div>
                                    <div class="col-4">
                                        <p class="fw-bold">Price</p>
                                    </div>
                                    <div class="col-8" >
                                        <p>RM<?= $products->product_price; ?></p>
                                    </div>
                                    <div class="col-4 fw-bold">
                                        <p class="fw-bold ">Category</p>
                                    </div>
                                    <div class="col-8" >
                                        <p class=""><?= $products->product_category; ?></p>
                                    </div>
                                    <div class="col-4 fw-bold">
                                        <p class="fw-bold ">Collection</p>
                                    </div>
                                    <div class="col-8" >
                                        <p  class=""><?= $products->product_type; ?></p>
                                    </div>
                                    <div class="col-4 fw-bold">
                                        <p class="fw-bold ">Stock Available</p>
                                    </div>
                                    <div class="col-8" >
                                        <p class=""><?= $products->product_stock; ?> pcs</p>
                                    </div>
                                    <div class="col-4 fw-bold">
                                        <p class="fw-bold">Description</p>
                                    </div>
                                    <div class="col-8 justify-content-center" >
                                        <p class=""><?= $products->product_description; ?></p>
                                    </div>
                                    
                                    <div class="col-4 fw-bold">
                                        <p class="fw-bold">Material</p>
                                    </div>
                                    <div class="col-8 justify-content-center" >
                                        <p class=""><?= $products->product_material; ?></p>
                                    </div>
                                    
                                    <div class="col-4 fw-bold">
                                        <p class="fw-bold">Finishing</p>
                                    </div>
                                    <div class="col-8 justify-content-center" >
                                        <p class=""><?= $products->product_finishing; ?></p>
                                    </div>
                                    <div class="col-4 fw-bold">
                                        <p class="fw-bold">Shape</p>
                                    </div>
                                    <div class="col-8 justify-content-center" >
                                        <p class=""><?= $products->product_shape; ?></p>
                                    </div>
                                    <div class="col-4 fw-bold">
                                        <p class="fw-bold">Size</p>
                                    </div>
                                    <div class="col-8 justify-content-center" >
                                        <p class=""><?= $products->product_size; ?></p>
                                    </div>
                                    <div class="col-4 fw-bold">
                                        <p class="fw-bold">Packaging</p>
                                    </div>
                                    <div class="col-8 justify-content-center" >
                                        <p class=""><?= $products->product_packaging; ?></p>
                                    </div>
                                    <div class="col-4 fw-bold">
                                        <p class="fw-bold">Date Publish</p>
                                    </div>
                                    <div class="col-8 justify-content-center" >
                                        <p class=""><?= date('d/m/Y', strtotime($products->input_date)); ?></p>
                                    </div>
                                    <div class="col-4 fw-bold">
                                        <p class="fw-bold">Latest Update</p>
                                    </div>
                                    <div class="col-8 justify-content-center" >
                                        <p class=""><?= date('d/m/Y', strtotime($products->update_time)); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProductModal<?= $products->product_id; ?>" id="editProduct">Edit</button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>