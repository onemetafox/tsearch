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
    <link href="<?=asset_url()?>css/listing.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?=asset_url()?>css/custom.css" rel="stylesheet">
    <link href="<?=asset_url()?>css/toastr.min.css" rel="stylesheet">
    <link href="<?=asset_url()?>/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=asset_url()?>/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=asset_url()?>/css/style.bundle.css" rel="stylesheet" type="text/css" />

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
		<div class="filters_full element_to_stick">
		    <div class="container clearfix" style="padding-bottom: 15px;">
		        <a href="javascript:showSearch()"  class="btn_filters"><i class="icon_adjust-vert"></i><span>Filters</span></a>
		        <div class="search_bar_list">
				    <input id='keyword' type="text" class="form-control" placeholder="もう一度検索..."
				    value='<?=$query["keyword"]?>'>
				</div>
				<a class="btn_search_mobile btn_filters" data-toggle="collapse" href="#collapseSearch"><i class="icon_search"></i></a>
		    </div>
		  
			<div class="collapse" id="collapseSearch">
			    <div class="search_bar_list">
			        <input type="text" class="form-control" placeholder="Search again...">
			    </div>
			</div>
		</div>
		<div class="card-footer collapse">
            <form method="post" action="<?=base_url()?>talents/search" id="kt_search_form">
                <div class="form-group row">
                	<input type="hidden" id="form_page" name="query[pagination]">
                	<input type="hidden" id="form_keyword" name="query[keyword]">
                    <div class="col-lg-5 col-md-12 col-sm-12 input-group">
                        <label class="col-form-label text-right col-lg-3 col-md-3 col-sm-12">購入品</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid" name="name"  required>
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 input-group">
                        <div class="col-lg-6 col-md-6 col-sm-6 input-group">
                            <label class="col-form-label text-right col-lg-3 col-sm-3">制作中</label>
                            <div class="col-lg-9 col-sm-3">
                                <span class="switch switch-icon">
                                    <label>
                                        <input type="checkbox" id="making" name="making">
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 input-group">
                            <label class="col-form-label text-right col-lg-3 col-sm-3">お得意様</label>
                            <div class="col-lg-9 col-sm-3">
                                <span class="switch switch-icon">
                                    <label>
                                        <input type="checkbox" id="customer" name="customer">
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="card-toolbar float-right">
                        <button type="button" id="search" class="btn btn-primary font-weight-bolder">
                            </i>一覧作成</a>
                        </button>
                    </div>
                </div>
            </form>
        </div>
		<!-- /filters -->
		<div class="collapse" id="collapseSearch">
		    <div class="search_bar_list">
		        <input type="text" class="form-control" placeholder="Search again...">
		    </div>
		</div>
		<!-- /collapseSearch -->
		</div>


		<div class="content d-flex flex-column flex-column-fluid isotope-wrapper" id="kt_content">
			<div class="subheader py-2 subheader-transparen isotope-itemt" id="kt_subheader" style="color: black;">
				<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
					<!--begin::Info-->
					<div class="d-flex align-items-center flex-wrap mr-1">
						<!--begin::Heading-->
						<div class="d-flex flex-column">
							<!--begin::Breadcrumb-->
							<div class="d-flex align-items-center font-weight-bold my-2">
								<!--begin::Item-->
								<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
								<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100"><h1 style="color:black;"><?= $pagination["total"]?></h1></a>
								<!--end::Item-->
								<!--begin::Item-->
								<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
								<a class="text-white text-hover-white opacity-75 hover-opacity-100" style="color:black !important;">人が該当しました</a>
								
							</div>
							<!--end::Breadcrumb-->
						</div>
						<!--end::Heading-->
					</div>
					<!--end::Info-->
					
				</div>
			</div>
			<!--begin::Entry-->
			<div class="d-flex flex-column-fluid isotope-itemt">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Card-->
					<?php foreach ($talents as $item) { ?>	
						<div class="card card-custom gutter-b">
							<div class="card-body">
								<!--begin::Top-->
								<div class="d-flex">
									<!--begin::Pic-->
									<div class="flex-shrink-0 mr-7">
										<div class="symbol symbol-50 symbol-lg-120">
											<img alt="Pic" src="<?= upload_url() . $item["image"]?>">
										</div>
									</div>
									<!--end::Pic-->
									<!--begin: Info-->
									<div class="flex-grow-1">
										<!--begin::Title-->
										<div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
											<!--begin::User-->
											<div class="mr-3">
												<!--begin::Name-->
												<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3"><?= $item["name"]?>
												<i class="flaticon2-correct text-success icon-md ml-2"></i></a>
												<!--end::Name-->
												<!--begin::Contacts-->
												<div class="d-flex flex-wrap my-2">
													<a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
													<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"></path>
																<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"></circle>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span><?= $item["email"]?></a>
													<a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
													<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<mask fill="white">
																	<use xlink:href="#path-1"></use>
																</mask>
																<g></g>
																<path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span><?=$item["mobile"]?></a>
													<a href="#" class="text-muted text-hover-primary font-weight-bold">
													<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span><?=$item["address"]?></a>
												</div>
												<!--end::Contacts-->
											</div>
											<!--begin::User-->
											<!--begin::Actions-->
											<?php if($user) { ?>
												<div class="my-lg-0 my-1">
													<a class="btn btn-sm btn-light-primary font-weight-bolder text-uppercase mr-2">フォローする</a>
													<a class="btn btn-sm btn-primary font-weight-bolder text-uppercase">ブックマーク</a>
												</div>
											<?php } ?>
											<!--end::Actions-->
										</div>
										<!--end::Title-->
										<!--begin::Content-->
										<div class="d-flex align-items-center flex-wrap justify-content-between">
											<!--begin::Description-->
											<div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5"><?=$item["note"]?>.</div>
											<!--end::Description-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Top-->
								<!--begin::Separator-->
								<div class="separator separator-solid my-7"></div>
								<!--end::Separator-->
								<!--begin::Bottom-->
								<div class="d-flex align-items-center flex-wrap">
									<!--begin: Item-->
									<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
										<span class="mr-4">
											<i class="flaticon-youtube icon-2x text-muted font-weight-bold"></i>
										</span>
										<div class="d-flex flex-column text-dark-75">
											<span class="font-weight-bolder font-size-sm">Youtube</span>
											<span class="font-weight-bolder font-size-h5"><?=$item["yt_fw"]?$item["yt_fw"]:'0'?></span>
										</div>
									</div>
									<!--end: Item-->
									<!--begin: Item-->
									<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
										<span class="mr-4">
											<i class="flaticon-facebook-logo-button icon-2x text-muted font-weight-bold"></i>
										</span>
										<div class="d-flex flex-column text-dark-75">
											<span class="font-weight-bolder font-size-sm">Facebook</span>
											<span class="font-weight-bolder font-size-h5"><?=$item["fb_fw"]?$item["fb_fw"]:'0'?></span>
										</div>
									</div>
									<!--end: Item-->
									<!--begin: Item-->
									<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
										<span class="mr-4">
											<i class="flaticon-twitter-logo-button icon-2x text-muted font-weight-bold"></i>
										</span>
										<div class="d-flex flex-column text-dark-75">
											<span class="font-weight-bolder font-size-sm">Net</span>
											<span class="font-weight-bolder font-size-h5"><?=$item["tw_fw"]?$item["tw_fw"]:'0'?></span>
										</div>
									</div>
									<!--end: Item-->
									<!--begin: Item-->
									<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
										<span class="mr-4">
											<i class="flaticon-instagram-logo icon-2x text-muted font-weight-bold"></i>
										</span>
										<div class="d-flex flex-column flex-lg-fill"><span class="font-weight-bolder font-size-sm">Instagram</span>
											<span class="font-weight-bolder font-size-h5"><?=$item["it_fw"]?$item["it_fw"]:'0'?></span>
										</div>
									</div>
									<!--end: Item-->
									<!--begin: Item-->
									<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
										<span class="mr-4">
											<i class="flaticon-twitter-logo-button icon-2x text-muted font-weight-bold"></i>
										</span>
										<div class="d-flex flex-column">
											<span class="font-weight-bolder font-size-sm">Twitter</span>
											<span class="font-weight-bolder font-size-h5"><?=$item["tw_fw"]?$item["tw_fw"]:'0'?></span>
										</div>
									</div>
									
								</div>
								<!--end::Bottom-->
							</div>
						</div>
					<?php }?>
					<!--end::Card-->
					<!--begin::Pagination-->
					<div class="card card-custom">
						<div class="card-body py-7">
							<!--begin::Pagination-->
							<div class="d-flex justify-content-between align-items-center flex-wrap">
								<div class="d-flex flex-wrap mr-3">
									<a href="javascript:goPage(1)" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
										<i class="ki ki-bold-double-arrow-back icon-xs"></i>
									</a>
									<a href="javascript:goPage('<?= $pagination["page"]-1?>')" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
										<i class="ki ki-bold-arrow-back icon-xs"></i>
									</a>
									<?php for($i = $pagination["start_page"]; $i < $pagination["end_page"] ; $i ++) { ?>
										<a href="javascript:goPage('<?=$i ?>')" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1 <?=$i == $pagination["page"]? 'active': ''?>"><?= $i?></a>
									<?php } ?>
									<a href="javascript:goPage('<?= $pagination["page"]+1?>')" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
										<i class="ki ki-bold-arrow-next icon-xs"></i>
									</a>
									<a href="javascript:goPage('<?= $pagination["total_page"]?>')" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
										<i class="ki ki-bold-double-arrow-next icon-xs"></i>
									</a>
								</div>
							</div>
							<!--end:: Pagination-->
						</div>
					</div>
					<!--end::Pagination-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Entry-->
		</div>
	</div>
	<!-- /container -->
		
	</main>
	<!-- /main -->
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
	<script type="text/javascript"> var HOST_URL = "<?=base_url()?>"</script>
	<!-- COMMON SCRIPTS -->
    <script src="<?=asset_url()?>/plugins/global/plugins.bundle.js"></script>
	<script src="<?=asset_url()?>/plugins/custom/prismjs/prismjs.bundle.js"></script>
	<script src="<?=asset_url()?>/js/scripts.bundle.js"></script>
    <script src="<?=asset_url()?>js/common_scripts.min.js"></script>
    <script src="<?=asset_url()?>js/common_func.js"></script>
    <script src="<?=asset_url()?>assets/validate.js"></script>
    <script src="<?=asset_url()?>js/toastr.min.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="<?=asset_url()?>js/sticky_sidebar.min.js"></script>
    <script src="<?=asset_url()?>js/specific_listing.min.js"></script>
    <script src="<?=asset_url()?>js/isotope.min.js"></script>

    <script src="<?=asset_url()?>scripts/search.js"></script>
   


</body>
</html>