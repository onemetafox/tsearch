<header class="header clearfix element_to_stick">
    <div class="container-fluid">
        <div id="logo">
            <a href="<?=base_url()?>">
                <img src="<?=asset_url()?>img/logo.svg" width="140" height="35" alt="" class="logo_normal">
                <img src="<?=asset_url()?>img/logo_sticky.svg" width="120" height="35" alt="" class="logo_sticky">
            </a>
        </div>
        <?php if($user) { ?>
            <ul id="top_menu">
                <?php if($user["type"] == 2) { ?>
                    <li><a href="<?=base_url()?>admin/user" class="btn_access">管理者</a></li>
                <?php } else{ ?> 
                    <li><a href="<?=base_url()?>talents/edit" class="btn_access">編集スキル</a></li>
                <?php } ?>
                <li><a href="<?=base_url()?>welcome/signout" class="btn_access red">ログアウト</a></li>
            </ul>
        <?php }else { ?>
            <ul id="top_menu">
                <li><a class="btn_access btn" name="signin">ログイン</a></li>
                <li><a class="btn_access green" name="signup">会員登録</a></li>
            </ul>
        <?php } ?>
        
        <!-- /top_menu -->
        <!-- <a href="#0" class="open_close">
            <i class="icon_menu"></i><span>Menu</span>
        </a> -->
    </div>
</header>
