<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5"><?=$page_title?></h5>
                </div>
            </div>
            <div class="d-flex align-items-center">
            <a href="<?= base_url()?>admin/talent/edit" class="btn btn-light-primary font-weight-bolder btn-sm" id="new_btn">才能を追加する</a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="card card-custom">
                <div class="card-body">
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-xl-3">
                                <div class="row align-items-center">
                                    <div class="col-md-12 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="検索..." id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xl-3 mt-5 mt-lg-0">
                                <button id="search_btn" class="btn btn-light-primary px-6 font-weight-bold">検索</button>
                            </div>
                        </div>
                    </div>
                    <div class="datatable datatable-bordered datatable-head-custom" id="events"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->
<script src="<?= asset_url()?>scripts/talent.js"></script>
<script>
    var HOST_URL = '<?= base_url()?>';
</script>