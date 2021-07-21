<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Prozim - Find a Professional and Book a Consultation by Appointment, Chat or Video call">
    <meta name="author" content="Ansonika">
    <title>Prozim - 専門家を探す</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?=asset_url()?>img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?=asset_url()?>img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?=asset_url()?>img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?=asset_url()?>img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?=asset_url()?>img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="<?=asset_url()?>css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="<?=asset_url()?>css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="<?=asset_url()?>css/detail-page.css" rel="stylesheet">
    <style type="text/css">
    	.review_card .user_info figure{
    		width: 100px;
    		height: 100px;
    	}
    	.review_card .user_info figure img{
    		width: 80px;
    		height: 80px;
    	}
    	.review_card .review_content a em{
    		color: #999;
    		float: right;
    	}
    </style>
</head>

<body>
	<header class="header_in clearfix">
		<div class="container">
			<div id="logo">
				<a href="<?=base_url()?>">
					<img src="<?=asset_url()?>img/logo_sticky.svg" width="120" height="35" alt="">
				</a>
			</div>
			<ul id="top_menu">
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
		                <li><a class="btn_access" name="signin">ログイン</a></li>
		                <li><a class="btn_access green" name="signup">会員登録</a></li>
		            </ul>
		        <?php } ?>
			</ul>
		</div>
	</header>
	
	<main class="bg_color">
	    <div class="container margin_detail">
	        <div class="row">
	            <div class="col-xl-12 col-lg-12">
	                <div class="box_general">
	                	 <div class="d-none d-sm-block">
	                        <!-- <img src="<?=upload_url()?>/<?=$talent["image"]?>" alt="" class="img-fluid"> -->
	                    </div>
	                    <div class="main_info_wrapper">
	                        <div class="main_info clearfix">
	                            <div class="user_thumb">
	                                <figure><img src="<?=upload_url()?>/<?=$talent["image"]?>" alt=""></figure>
	                                <!-- <em class="online"><span></span>On line</em> -->
	                            </div>
	                            <div class="user_desc">
	                                <h3><?= $talent["name"]?></h3>
	                                <p><?=$talent["age"]?> 歳 - <?=$talent["address"] ?></p>
	                                <ul class="tags">
	                                    <li><a><?=$talent["pertecture"]?></a></li>
	                                    <li><a><?=$talent["city_address"]?></a></li>
	                                    <li><a><?=$talent["building_address"]?></a></li>
	                                </ul>
	                            </div>
	                            <div class="score_in">
	                                <div class="rating">
	                                    <div class="score"><span>従者<em>3<?=$talent["fw_count"]?> 後続</em></span><strong>8.9</strong></div>
	                                </div>
	                                <a href="#0" class="wish_bt"><i class="icon_heart_alt"></i></a>
	                            </div>
	                        </div>
	                        <!-- /main_info_wrapper -->
	                        <hr>
	                        <h4>私について</h4>
	                        <p><?=$talent["note"]?></p>
	                    </div>
	                    <!-- /main_info -->
	                </div>
	                <!-- /box_general -->
	                <div class="box_general">
	                    <div class="tabs_detail">
	                        <ul class="nav nav-tabs" role="tablist">
	                            <li class="nav-item">
	                                <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">個人情報</a>
	                            </li>
	                            <li class="nav-item">
	                                <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">社会的情報</a>
	                            </li>
	                        </ul>
	                        <div class="tab-content" role="tablist">
	                            <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
	                                <div class="card-header" role="tab" id="heading-A">
	                                    <h5>
	                                        <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
	                                            Other info
	                                        </a>
	                                    </h5>
	                                </div>
	                                <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
	                                    <div class="card-body info_content">
	                                        <div class="indent_title_in">
	                                            <i class="icon_document_alt"></i>
	                                            <h3>ユーザー情報</h3>
	                                        </div>
	                                        <div class="wrapper_indent">
	                                            <!-- p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit.</p>
	                                            <h6>Most requested services</h6> -->
	                                            <div class="row">
		                                            <div class="services_list clearfix col-lg-6">
		                                                <ul>
		                                                    <li>キャスト名 <strong> <?=$talent["name"]?></strong></li>
		                                                    <li>キャスト名 <strong><?=$talent["nick_name"]?></strong></li>
		                                                    <li>キャスト名 <strong><?=$talent["email"]?></strong></li>
		                                                    <li>キャスト名 <strong><?=$talent["mobile"]?></strong></li>
		                                                    <li>生年月日<strong> <?=$talent["birthday"]?></strong></li>
		                                                    <li>性別<strong> <?=$talent["gender"]==2 ? '女性': '男性'?></strong></li>

		                                                </ul>
		                                            </div>
		                                            <div class="services_list clearfix col-lg-6">
		                                                <ul>
		                                                	<li>年齢<strong> <?=$talent["age"]?></strong></li>
		                                                    <li>在住都道府県<strong> <?=$talent["address"]?></strong></li>
		                                                    <li>活動拠点<strong><?=$talent["activity_base"]?></strong></li>
		                                                    <li>職業<strong><?=$talent["belonging"]?></strong></li>
		                                                    <li>郵便番号<strong><?=$talent["post_code"]?></strong></li>
		                                                    <li>身長<strong>170cm</strong></li>
		                                                </ul>
		                                            </div>
		                                        </div>
	                                        </div>
	                                        <hr>
	                                        <div class="indent_title_in">
	                                            <i class="icon_document_alt"></i>
	                                            <h3>獲得実績</h3>
	                                        </div>
	                                        <div class="wrapper_indent">
	                                            <p><?= $talent["acq_record"]?></p>
	                                        </div>
	                                        <!--  End wrapper indent -->
	                                        <hr>
	                                        <div class="indent_title_in">
	                                            <i class="icon_document_alt"></i>
	                                            <h3>人材評価</h3>
	                                        </div>
	                                        <div class="wrapper_indent">
		                                        <div class="row reviews">
			                                        <div class="col-md-4">
		                                                <div id="review_summary" style="background-color: #e83e8c;">
		                                                    <strong><?= $talent["igfw_male_ratio"]?>%</strong>
		                                                    <em>IGfw男性比率</em>
		                                                    <!-- <small>Based on 4 reviews</small> -->
		                                                </div>
		                                            </div>
		                                            <div class="col-md-4">
		                                                <div id="review_summary" style="background-color:#6993FF;">
		                                                    <strong><?= $talent["igfw_female_ratio"]?>%</strong>
		                                                    <em>IGfw女性比率</em>
		                                                    <!-- <small>Based on 4 reviews</small> -->
		                                                </div>
		                                            </div>
		                                            <div class="col-md-4">
		                                                <div id="review_summary" style="background-color:#ffc107;">
		                                                    <strong><?=$talent["fg_rate"]?>%</strong>
		                                                    <em>平均EG率(%)</em>
		                                                    <!-- <small>Based on 4 reviews</small> -->
		                                                </div>
		                                            </div>
		                                            <!-- <div class="col-md-3">
		                                                <div id="review_summary" style="background-color:#1BC5BD;">
		                                                    <strong>8.5</strong>
		                                                    <em>Superb</em>
		                                                    <small>Based on 4 reviews</small>
		                                                </div>
		                                            </div> -->
	                                            </div>
	                                        </div>
	                                        <hr>
	                                       <!--  <div class="indent_title_in">
	                                            <i class="icon_document_alt"></i>
	                                            <h3>Education</h3>
	                                            <p>Mussum ipsum cacilds, vidis litro abertis.</p>
	                                        </div>
	                                        <div class="wrapper_indent add_bottom_25">
	                                            <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.</p>
	                                            <h6>Curriculum</h6>
	                                            <ul class="bullets">
	                                                <li><strong>New York Medical College</strong> - Doctor of Medicine</li>
	                                                <li><strong>Montefiore Medical Center</strong> - Residency in Internal Medicine</li>
	                                                <li><strong>New York Medical College</strong> - Master Internal Medicine</li>
	                                            </ul>
	                                        </div> -->
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- /tab -->
	                            <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
	                                <div class="card-header" role="tab" id="heading-B">
	                                    <h5>
	                                        <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
	                                            Reviews
	                                        </a>
	                                    </h5>
	                                </div>
	                                <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
	                                    <div class="card-body reviews">
	                                        <div class="row add_bottom_45 d-flex align-items-center">
	                                            <div class="col-md-3">
	                                                <div id="review_summary">
	                                                    <strong><?=$talent["fw_count"]?></strong>
	                                                    <em>フォロワー</em>
	                                                </div>
	                                            </div>
	                                            <div class="col-md-9 reviews_sum_details">
	                                                <div class="row">
	                                                    <div class="col-md-6">
	                                                        <h6>女性比率</h6>
	                                                        <div class="row">
	                                                            <div class="col-xl-10 col-lg-9 col-9">
	                                                                <div class="progress">
	                                                                    <div class="progress-bar" role="progressbar" style="width: <?=$talent["female_ratio"]?>%" aria-valuenow="<?=$talent["female_ratio"]?>" aria-valuemin="0" aria-valuemax="100"></div>
	                                                                </div>
	                                                            </div>
	                                                            <div class="col-xl-2 col-lg-3 col-3"><strong><?=$talent["female_ratio"]?></strong></div>
	                                                        </div>
	                                                    </div>
	                                                    <div class="col-md-6">
	                                                        <h6>男性比率</h6>
	                                                        <div class="row">
	                                                            <div class="col-xl-10 col-lg-9 col-9">
	                                                                <div class="progress">
	                                                                    <div class="progress-bar" role="progressbar" style="width: <?=$talent["male_ratio"]?>%" aria-valuenow="<?=$talent["male_ratio"]?>" aria-valuemin="0" aria-valuemax="100"></div>
	                                                                </div>
	                                                            </div>
	                                                            <div class="col-xl-2 col-lg-3 col-3"><strong><?=$talent["male_ratio"]?></strong></div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                                <!-- /row -->
	                                            </div>
	                                        </div>
	                                        <div id="reviews">
	                                            <div class="review_card">
	                                                <div class="row">
	                                                    <div class="col-md-2 user_info">
	                                                        <figure><img src="<?=asset_url()?>logos/sort_icon_youtube.svg" alt=""></figure>
	                                                        <h5>Yutube</h5>
	                                                    </div>
	                                                    <div class="col-md-10 review_content">
	                                                        <div class="clearfix add_bottom_15">
	                                                            <span class="rating"><?=$talent["yt_fw"]?> <strong>評価平均</strong></span>
	                                                        	<a><em><?=$talent["yt_channel_url"]?></em></a>
	                                                        </div>
	                                                        <h4>"Great!!"</h4>
	                                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
	                                                    </div>
	                                                </div>
	                                                <!-- /row -->
	                                            </div>
	                                            <!-- /review_card -->
	                                            <div class="review_card">
	                                                <div class="row">
	                                                    <div class="col-md-2 user_info">
	                                                        <figure><img src="<?=asset_url()?>logos/sort_icon_facebook.svg"alt=""></figure>
	                                                        <h5>FaceBook</h5>
	                                                    </div>
	                                                    <div class="col-md-10 review_content">
	                                                        <div class="clearfix add_bottom_15">
	                                                            <span class="rating"><?=$talent["fb_fw"]?> <strong>評価平均</strong></span>
    	                                                        <a><em><?=$talent["fb_url"]?></em></a>
	                                                        </div>
	                                                        <h4>"Awesome Experience"</h4>
	                                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
	                                                        
	                                                    </div>
	                                                </div>
	                                                <!-- /row -->
	                                            </div>
	                                            <div class="review_card">
	                                                <div class="row">
	                                                    <div class="col-md-2 user_info">
	                                                        <figure><img src="<?=asset_url()?>logos/sort_icon_tiktok.svg"alt=""></figure>
	                                                        <h5>TikTok</h5>
	                                                    </div>
	                                                    <div class="col-md-10 review_content">
	                                                        <div class="clearfix add_bottom_15">
	                                                            <span class="rating"><?=$talent["tt_fw"]?> <strong>評価平均</strong></span>
    	                                                        <a><em><?=$talent["tt_url"]?></em></a>

	                                                        </div>
	                                                        <h4>"Awesome Experience"</h4>
	                                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
	                                                    </div>
	                                                </div>
	                                                <!-- /row -->
	                                            </div>
	                                            <div class="review_card">
	                                                <div class="row">
	                                                    <div class="col-md-2 user_info">
	                                                        <figure><img src="<?=asset_url()?>logos/sort_icon_instagram.svg"alt=""></figure>
	                                                        <h5>Instagram</h5>
	                                                    </div>
	                                                    <div class="col-md-10 review_content">
	                                                        <div class="clearfix add_bottom_15">
	                                                            <span class="rating"><?=$talent["it_fw"]?><strong>評価平均</strong></span>
	                                                            <a><em><?=$talent["it_url"]?></em></a>
	                                                        </div>
	                                                        <h4>"Awesome Experience"</h4>
	                                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
	                                                    </div>
	                                                </div>
	                                                <!-- /row -->
	                                            </div>
	                                            <!-- /review_card -->
	                                            <div class="review_card">
	                                                <div class="row">
	                                                    <div class="col-md-2 user_info">
	                                                        <figure><img src="<?=asset_url()?>logos/sort_icon_twitter.svg" alt=""></figure>
	                                                        <h5>Twitter</h5>
	                                                    </div>
	                                                    <div class="col-md-10 review_content">
	                                                        <div class="clearfix add_bottom_15">
	                                                            <span class="rating"><?=$talent["tw_fw"]?><strong>評価平均</strong></span>
	                                                            <a><em><?=$talent["tw_url"]?></em></a>
	                                                        </div>
	                                                        <h4>"Really great!!"</h4>
	                                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
	                                                        
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /tab-content -->
	                    </div>
	                    <!-- /tabs_detail -->
	                </div>
	            </div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	</main>

	<footer>
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-3 col-md-6">
	                <h3 data-target="#collapse_1">クイックリンク</h3>
	                <div class="collapse dont-collapse-sm links" id="collapse_1">
	                    <ul>
	                        <li><a href="submit-professional.html">続きを読む</a></li>
	                        <li><a href="help.html">助けて</a></li>
	                        <li><a href="login.html">ログイン</a></li>
	                        <li><a href="contacts.html">連絡先</a></li>
	                    </ul>
	                </div>
	            </div>
	            <div class="col-lg-3 offset-lg-3 col-md-6">
	                <h3 data-target="#collapse_4">連絡を取り合う</h3>
	                <div class="collapse dont-collapse-sm" id="collapse_4">
	                    <div id="newsletter">
	                        <div id="message-newsletter"></div>
                            <div class="form-group">
                                <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="メールアドレス">
                                <button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
                            </div>
	                    </div>
	                    <div class="follow_us">
	                        <ul>
	                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?=asset_url()?>img/twitter_icon.svg" alt="" class="lazy"></a></li>
	                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?=asset_url()?>img/facebook_icon.svg" alt="" class="lazy"></a></li>
	                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?=asset_url()?>img/instagram_icon.svg" alt="" class="lazy"></a></li>
	                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?=asset_url()?>img/youtube_icon.svg" alt="" class="lazy"></a></li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- /row-->
	        <hr>
	        <div class="row add_bottom_25">
	            <div class="col-lg-6">
	                <ul class="footer-selector clearfix">
	                    <li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?=asset_url()?>img/cards_all.svg" alt="" width="230" height="35" class="lazy"></li>
	                </ul>
	            </div>
	            <div class="col-lg-6">
	                <ul class="additional_links">
	                    <li><a href="#0">規約と条件</a></li>
	                    <li><a href="#0">プライバシー</a></li>
	                    <li><span>© 2020 Prozim</span></li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->
	
	<div class="layer"></div><!-- Opacity Mask Menu Mobile -->
	
	
 	<div class="layer"></div><!-- Opacity Mask Menu Mobile -->
    <div class="modal fade" id="login_modal" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document" style="margin: 10.75rem auto;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">詳細を編集</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="login_form">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="メールアドレス">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" value="" placeholder="パスワード">
                        </div>
                        <a name="login" class="btn_1 full-width">ログイン Prozim</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="signup_modal" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document" style="margin: 10.75rem auto;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">詳細を編集</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="signup_form">
                        <div class="form-group">
                            <input type="hidden" name="type" value="1">
                            <input type="email" class="form-control" name="name" id="name" placeholder="お名前">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="メールアドレス">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" value="" placeholder="パスワード">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="cf_password" id="cf_password" value="" placeholder="パスワードを認証する">
                        </div>
                        <a name="save" class="btn_1 full-width">登 録</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<!-- /Sign In Modal -->

	<!-- COMMON SCRIPTS -->
   	<script src="<?=asset_url()?>js/common_scripts.min.js"></script>
    <script src="<?=asset_url()?>js/common_func.js"></script>
    <script src="<?=asset_url()?>assets/validate.js"></script>
    <script src="<?=asset_url()?>js/toastr.min.js"></script>

     <!-- SPECIFIC SCRIPTS -->
    <script src="js/specific_detail.min.js"></script>
	<script src="js/datepicker.min.js"></script>
	<script src="js/datepicker_func_1.js"></script>

	<script type="text/javascript"> var HOST_URL = "<?=base_url()?>"</script>
    <script src="<?=asset_url()?>scripts/view.js"></script>
   


</body>
</html>