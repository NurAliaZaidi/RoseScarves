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
                <li class="breadcrumb-item active"><?= $title?></li>
            </ol>
        </nav>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Product</h6>
            </div>
            <div class="card-body my-3">
                <form action="<?= base_url('add-product/add'); ?>" method="post">
                <?= csrf_field() ?>
                <div class="row g-3 align-items-center my-2">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pName">
                    </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Product Category</label>
                    <div class="col-sm-10">
                        <select class="form-select form-select" aria-label=".form-select example" name="pCategory">
                            <option value="Shawl">Shawl</option>
                            <option value="Square Shawl">Square Shawl</option>
                            <option value="Square Scarf">Square Scarf</option>
                        </select>
                    </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Product Type</label>
                    <div class="col-sm-10">
                        <select class="form-select form-select" aria-label=".form-select example" name="pType">
                            <?php
                                foreach($add_product as $typeproducts) : ?>
                            <option value="<?= $typeproducts->type_name; ?>"><?= $typeproducts->type_name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Product Price (RM)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pPrice">
                    </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Product Stock</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pStock">
                    </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Product Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control"  rows="3" name="pDescription"></textarea>
                    </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Product Material</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pMaterial">
                    </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Product Finishing</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pFinishing">
                    </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Product Shape</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pShape">
                    </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Product Size (Length X Width)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pSize">
                    </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Product Packaging</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pPackaging">
                    </div>
                    <div class="col-sm-10">
                        <button href="" type="button" class="btn btn-secondary float-end m-2">Cancel</button>
                        <button href="" type="submit" class="btn btn-primary float-end mt-2">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </section>
</main>

<?= $this->endSection(); ?>