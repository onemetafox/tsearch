
<!--begin::Header-->
<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Logo-->
            <div class="header-logo">
                <a href="<?=base_url()?>">
                    <img alt="Logo" src="<?= asset_url()?>img/logo_sticky.svg">
                </a>
            </div>
            <!--end::Header Logo-->
            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Header Nav-->
                <ul class="menu-nav">
                    <li class="menu-item menu-item-submenu menu-item-rel menu-item-active" aria-haspopup="true">
                        <a href="<?= base_url()?>admin/talent" class="menu-link">
                            <span class="menu-text">才能</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="menu-item menu-item-submenu menu-item-rel menu-item-active" aria-haspopup="true">
                        <a href="<?= base_url()?>admin/user" class="menu-link">
                            <span class="menu-text">管理者</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="topbar">
            <div class="topbar-item">
            </div>
        </div>
    </div>
</div>
