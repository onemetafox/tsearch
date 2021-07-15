
    <!-- SPECIFIC CSS -->
    <link href="<?=asset_url()?>css/home.css" rel="stylesheet">
    <link href="<?=asset_url()?>css/account.css" rel="stylesheet">
<body>
    <main>
        <div id="carousel-home">
            <div class="owl-carousel owl-theme">            
                <div class="owl-slide cover" style="background-image: url(<?=asset_url()?>img/slides/slide_home_1.jpg);">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-12 static">
                                    <div class="slide-text text-center white">
                                        <h2 class="owl-slide-animated owl-slide-title">専門家を探す</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            予約、チャット、またはビデオ通話で相談を予約する
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="grid-listing-1.html" role="button">続きを読む</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->   
                <div class="owl-slide cover" style="background-image: url(<?=asset_url()?>img/slides/slide_home_2.jpg);">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-7 static">
                                    <div class="slide-text white">
                                        <h2 class="owl-slide-animated owl-slide-title">確認済みの専門家のみ</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            +12.000人以上の信頼できる専門家がリストされています
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="grid-listing-1.html" role="button">Read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->           
                <div class="owl-slide cover" style="background-image: url(<?=asset_url()?>img/slides/slide_home_3.jpg);">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-end">
                                <div class="col-lg-6 static">
                                    <div class="slide-text text-right white">
                                        <h2 class="owl-slide-animated owl-slide-title">あなたはプロですか？</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            Prozimに無料で参加して、より多くの可視性を手に入れましょう
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="submit-professional.html" role="button">Read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/owl-slide-->
                </div>
            </div>
            <div id="icon_drag_mobile"></div>
        </div>
        <!--/carousel-->

        <div class="bg_gray">
            <div class="container margin_60_40">
                <div class="main_title center">
                    <span><em></em></span>
                    <h2>人気のある専門家</h2>
                    <p>彼らが教育を受けた市民になると、資金調達は抑止されます。</p>
                </div>
                <!-- <div class=""> -->
                    <form method="post" id="search" action="<?=base_url()?>talents/search" method="post">
                        <div class="row no-gutters custom-search-input">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="query[keyword]" placeholder="専門家を探す...">
                                </div>
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
                <!-- /row -->
                <p class="text-center add_top_30"><a name="search" class="btn_1 medium">検索を開始します</a></p>
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_gray -->
        <div class="container margin_60_40">
            <div class="row">
                <div class="col-12">
                    <div class="main_title version_2">
                        <span><em></em></span>
                        <h2>ウィークリーレートオファー</h2>
                        <p>彼らが教育を受けた市民になると、資金調達は抑止されます。</p>
                        <a href="#0">すべて表示</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list_home">
                        <ul>
                            <li>
                                <a href="detail-page.html">
                                    <figure>
                                        <img src="<?=asset_url()?>img/professional_list_placeholder.png" data-src="<?=asset_url()?>img/professional_list_1.jpg" alt="" class="lazy">
                                    </figure>
                                    <div class="score"><strong>9.5</strong></div>
                                    <em>MARIKO</em>
                                    <h3>仕事を楽しむ。</h3>
                                    <small>東京都 / モデル / インフルエンサー / タレント・著名人 / 専門家・スペシャリスト / キャンペーンモデル / 俳優・女優
                                        <br>限界突破！美bodyトレーナー</small>
                                    <ul>
                                        <li><span class="ribbon off">+30%</span></li>
                                        <li>平均投票 35K</li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="detail-page.html">
                                    <figure>
                                        <img src="<?=asset_url()?>img/professional_list_placeholder.png" data-src="<?=asset_url()?>img/professional_list_2.jpg" alt="" class="lazy">
                                    </figure>
                                    <div class="score"><strong>8.0</strong></div>
                                    <em>SAORI</em>
                                    <h3>美少年RIO</h3>
                                    <small>表情とポージングの引き出しの多さには自信があります！ <br>東京都 / モデル / 専門家・スペシャリスト / キャンペーンモデル / 俳優・女優</small>
                                    <ul>
                                        <li><span class="ribbon off">+40%</span></li>
                                        <li>平均投票 30K</li>
                                    </ul>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list_home">
                        <ul>
                            <li>
                                <a href="detail-page.html">
                                    <figure>
                                        <img src="<?=asset_url()?>img/professional_list_placeholder.png" data-src="<?=asset_url()?>img/professional_list_3.jpg" alt="" class="lazy">
                                    </figure>
                                    <div class="score"><strong>9.5</strong></div>
                                    <em>MARINA</em>
                                    <h3>はるくん</h3>
                                    <small>東京都 / モデル / インフルエンサー / 専門家・スペシャリスト / キャンペーンモデル / アーティスト / アスリート / ライター. 笑うとエクボができるマオです。</small>
                                    <ul>
                                        <li><span class="ribbon off">+30%</span></li>
                                        <li>平均投票 20K</li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="detail-page.html">
                                    <figure>
                                        <img src="<?=asset_url()?>img/professional_list_placeholder.png" data-src="<?=asset_url()?>img/professional_list_4.jpg" alt="" class="lazy">
                                    </figure>
                                    <div class="score"><strong>8.0</strong></div>
                                    <em>florist</em>
                                    <h3>志築杏里</h3>
                                    <small>波乱万丈！歯科衛生士タレン <br>兵庫県 / モデル / インフルエンサー / タレント・著名人 / 専門家・スペシャリスト / キャンペーンモデル / アーティスト / 芸人 / アスリート / ライター / クリエイター / 俳優・女優 / DJ</small>
                                    <ul>
                                        <li><span class="ribbon off">+50%</span></li>
                                        <li>平均投票 35K</li>
                                    </ul>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->

        <div class="bg_gray">
            <div class="container margin_60_40">
                <div class="main_title center add_bottom_10">
                    <span><em></em></span>
                    <h2>それはどのように機能しますか？</h2>
                    <p>彼らが教育を受けた市民になると、資金調達は抑止されます。</p>
                </div>
                <div class="row justify-content-md-center how_2">
                    <div class="col-lg-5 text-center">
                        <figure>
                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?=asset_url()?>img/web_wireframe.svg" alt="" class="img-fluid lazy" width="360" height="380">
                        </figure>
                    </div>
                    <div class="col-lg-5">
                       <ul>
                            <li>
                                <h3><span>#01.</span> 専門家を探す</h3>
                                <p>あなたの基準に一致する12.000人以上の検証済みの専門家を検索してください。</p>
                            </li>
                            <li>
                                <h3><span>#02.</span> プロフェッショナルプロフィールを見る</h3>
                                <p>専門家の紹介を表示し、他の顧客からのレビューを読んでください。</p>
                            </li>
                            <li>
                                <h3><span>#03.</span> 相談をお楽しみください</h3>
                                <p>チャットまたはビデオ通話を介して、予約の専門家とつながりましょう！</p>
                            </li>
                        </ul>
                        <p class="add_top_30"><a href="grid-listing-1.html" class="btn_1">検索を開始します</a></p>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_gray -->

        <div class="call_section version_2 lazy" data-bg="url(<?=asset_url()?>img/bg_call_section.jpg)">
            <div class="container clearfix">
                <div class="col-lg-5 col-md-6 float-right wow">
                    <div class="box_1">
                        <div class="ribbon_promo"><span>自由</span></div>
                        <h3>あなたはプロですか？</h3>
                        <p>オンラインでの認知度を高めるためにご参加ください。 あなたは専門的なサービスや相談を探しているさらに多くの顧客にアクセスすることができます。</p>
                        <a href="submit-professional.html" class="btn_1">続きを読む</a>
                    </div>
                </div>
            </div>
        </div>
        <!--/call_section-->

    </main>

    <div id="toTop"></div><!-- Back to top button -->
    
    <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
    <div class="modal fade" id="login_modal" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
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
        <div class="modal-dialog modal-md" role="document">
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
    <!-- COMMON SCRIPTS -->

    <script src="<?=asset_url()?>scripts/index.js"></script>