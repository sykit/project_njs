<!-- Button trigger modal -->
<div class="modal fade" id="somAddProduct" tabindex="-1" aria-labelledby="somAddProductLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form enctype="multipart/form-data">
                <div class="modal-header">
                    <h1 class="modal-title fw-bold" id="somAddProductLabel">Order Detail</h1>
                    <butto  n type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></butto>
                </div>
                <div class="modal-body transaction js-order-detail">
                    <div class="row mb-2">
                        <div class="col col-lg-3">
                            <label>
                                Kategori Produk
                            </label>
                        </div>
                        <div class="col col-lg-9">
                            <?php $this->load->view('components/select-category-filter.php'); ?>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col col-lg-3">
                            <label>
                                Sub Kategori Produk
                            </label>
                        </div>
                        <div class="col col-lg-9">
                            <?php $this->load->view('components/select-subcategory-filter.php'); ?>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col col-lg-3">
                            <label>
                                Nomor Model
                            </label>
                        </div>
                        <div class="col col-lg-9">
                            <select class="form-control image-picker show-html js-product-selection d-block" name="product_class_id" required>
                               
                            </select>
                            <div class="text-center js-spinner mt-2" style="display:none;">
                                <div class="spinner-border" role="status">
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col col-lg-3">
                            <label>
                                Kode Karat
                            </label>
                        </div>
                        <div class="col col-lg-9">
                        <?php $this->load->view('/components/select-rate', array('data_id' => 'prd_rate_id')); ?>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col col-lg-3">
                            <label>
                                Kode Sepuh
                            </label>
                        </div>
                        <div class="col col-lg-9">
                            <?php $this->load->view('components/select-sepuh.php'); ?>
                        </div>
                    </div>
                    <div class="row mb-2 js-ring-size" style="display:none;">
                        <div class="col col-lg-3">
                            <label>
                                Ukuran Cincin
                            </label>
                        </div>
                        <div class="col col-lg-9">
                            <?php $this->load->view('components/select-ringsize.php',  array('data_id' => 'ring_size')); ?>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col col-lg-3">
                            <label>
                                Jumlah
                            </label>
                        </div>
                        <div class="col col-lg-9">
                            <input type="number" class="form-control" name="qty" required />
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col col-lg-3">
                            <label>
                                Keterangan
                            </label>
                        </div>
                        <div class="col col-lg-9">
                            <textarea class="form-control" name="keterangan"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary js-add-order-detail-item">Tambah</button>
                    <button type="button" class="btn btn-danger js-order-detail-reset" data-bs-dismiss="modal">Reset</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>