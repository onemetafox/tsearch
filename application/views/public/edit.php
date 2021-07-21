<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Prozim - Find a Professional and Book a Consultation by Appointment, Chat or Video call">
    <meta name="author" content="Ansonika">
    <title>Prozim - Find a Professional and Book a Consultation by Appointment, Chat or Video call</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?=asset_url()?>img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?=asset_url()?>img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?=asset_url()?>img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?=asset_url()?>img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?=asset_url()?>img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="<?=asset_url()?>css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="<?=asset_url()?>css/style.css" rel="stylesheet">
    <link href="<?=asset_url()?>css/toastr.min.css" rel="stylesheet">
    <link href="<?=asset_url()?>plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=asset_url()?>plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=asset_url()?>plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=asset_url()?>css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=asset_url()?>css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="<?=asset_url()?>css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="<?=asset_url()?>css/themes/layout/brand/light.css" rel="stylesheet" type="text/css" />
    <link href="<?=asset_url()?>css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!-- SPECIFIC CSS -->
    <link href="<?=asset_url()?>css/booking-sign_up.css" rel="stylesheet">
    <link href="<?=asset_url()?>css/custom.css" rel="stylesheet">

</head>

<body>
                
    <header class="header_in shadow clearfix">
        <div class="container">
            <div id="logo">
                <a href="<?= base_url()?>">
                    <img src="<?=asset_url()?>img/logo_sticky.svg" width="120" height="35" alt="">
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
     
        </div>
    </header>
    <main class="bg_gray pattern">
        <div class="container margin_60_40 mt-20">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header" style="">
                            <div class="card-title">
                                <h3 class="card-label">才能を編集する
                                <i class="mr-2"></i>
                                <small class="">タレント情報の入力と更新</small></h3>
                            </div>
                            <div class="card-toolbar">
                                <div class="btn-group">
                                    <button type="button" name="save" class="btn btn-primary font-weight-bolder">
                                    <i class="   ki-check icon-sm"></i>データ保存</button>
                                </div>
                            </div>
                        </div>
                       <!--  <form class="form" enctype="multipart/form-data" method="post">
                            <input type="hidden" name="id" id="id" value = "<?= isset($talent)?$talent['id']:'' ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <div class="image-input image-input-outline" id="kt_image_4" style="background-image: url(assets/media/>users/blank.png)">
                                            <div class="image-input-wrapper" style="background-image: url(<?= isset($talent)?upload_url().$talent["image"]:"" ?>); width: 300px; height: 300px;"></div>

                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" name="profile_avatar" id="avatar" accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="profile_avatar_remove"/>
                                            </label>

                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>

                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>お名前:</label>
                                                <input type="text" name="name" value = "<?= isset($talent)?$talent['name']:'' ?>" class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>メールアドレス:</label>
                                                <input type="email" name="email"  value = "<?= isset($talent)?$talent['email']:'' ?>" class="form-control" >
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>プロフィール表示名:</label>
                                                <input type="email" name="profile_name"  value = "<?= isset($talent)?$talent['profile_name']:'' ?>"  class="form-control" >
                                            </div>
                                            <div class="col-lg-6">
                                                <label>宛名:</label>
                                                <input type="text" name="address"  value = "<?= isset($talent)?$talent['address']:'' ?>" class="form-control" >
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>電話番号:</label>
                                                <input type="text" name="mobile"  value = "<?= isset($talent)?$talent['mobile']:'' ?>" class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>口座名義:</label>
                                                <input type="text" name="nick_name"  value = "<?= isset($talent)?$talent['nick_name']:'' ?>" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>郵便番号:</label>
                                        <input type="email" name="post_code"  value = "<?= isset($talent)?$talent['post_code']:'' ?>" class="form-control" >
                                    </div>
                                    <div class="col-lg-4">
                                        <label>生年月日:</label>
                                        <input type="text" name="birthday" value = "<?= isset($talent)?$talent['birthday']:'' ?>" class="form-control" >
                                    </div>
                                    <div class="col-lg-4">
                                        <label>口座種別:</label>
                                        <input type="text" name="account_type"  value = "<?= isset($talent)?$talent['account_type']:'' ?>" class="form-control" >
                                            
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>都道府県:</label>
                                        <input type="email" name="pertecture"  value = "<?= isset($talent)?$talent['pertecture']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>市区町村・番地:</label>
                                        <input type="text" name="city_address"  value = "<?= isset($talent)?$talent['city_address']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>マンション・ビル名:</label>
                                        <input type="text" name="building_address"  value = "<?= isset($talent)?$talent['building_address']:'' ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>フォロワー数:</label>
                                        <input type="email" name="fw_count"  value = "<?= isset($talent)?$talent['fw_count']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>InstagramプロフィールURL:</label>
                                        <input type="text" name="it_url"  value = "<?= isset($talent)?$talent['it_url']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>依頼金額:</label>
                                        <input type="text" name="request_amount"  value = "<?= isset($talent)?$talent['request_amount']:'' ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>担当者名:</label>
                                        <input type="email" name="other_name"  value = "<?= isset($talent)?$talent['other_name']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>注意:</label>
                                        <input type="text" name="note"  value = "<?= isset($talent)?$talent['note']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>IGfw男性比率:</label>
                                        <input type="text" name="igfw_male_ratio"  value = "<?= isset($talent)?$talent['igfw_male_ratio']:'' ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>IGfw女性比率:</label>
                                        <input type="email" name="igfw_female_ratio"  value = "<?= isset($talent)?$talent['igfw_female_ratio']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>年齢:</label>
                                        <input type="text" name="age"  value = "<?= isset($talent)?$talent['age']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>活動拠点:</label>
                                        <input type="text" name="activity_base"  value = "<?= isset($talent)?$talent['activity_base']:'' ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>ご職業:</label>
                                        <input type="email" name="talent"  value = "<?= isset($talent)?$talent['talent']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>投稿ジャンル:</label>
                                        <input type="text" name="post_genre"  value = "<?= isset($talent)?$talent['post_genre']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>獲得実績:</label>
                                        <input type="text" name="acq_record"  value = "<?= isset($talent)?$talent['acq_record']:'' ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>PRポイント:</label>
                                        <input type="email" name="pr_point"  value = "<?= isset($talent)?$talent['pr_point']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>性別:</label>
                                        <input type="text" name="gender"  value = "<?= isset($talent)?$talent['gender']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>平均EG率(%):</label>
                                        <input type="text" name="fg_rate"  value = "<?= isset($talent)?$talent['fg_rate']:'' ?>" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>投稿での顔出し:</label>
                                        <input type="email" name="app_post"  value = "<?= isset($talent)?$talent['app_post']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>所属:</label>
                                        <input type="text" name="belonging"  value = "<?= isset($talent)?$talent['belonging']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>投稿実績:</label>
                                        <input type="text" name="post_result"  value = "<?= isset($talent)?$talent['post_result']:'' ?>" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>twitterフォロワー:</label>
                                        <input type="email" name="tw_fw"  value = "<?= isset($talent)?$talent['tw_fw']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Twitterアカウント URL:</label>
                                        <input type="text" name="tw_url"  value = "<?= isset($talent)?$talent['tw_url']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>FBfw:</label>
                                        <input type="text" name="fb_fw"  value = "<?= isset($talent)?$talent['fb_fw']:'' ?>" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Facebookアカウント URL:</label>
                                        <input type="email" name="fb_url"  value = "<?= isset($talent)?$talent['fb_url']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>youtube登録者数:</label>
                                        <input type="text" name="yt_registrant"  value = "<?= isset($talent)?$talent['yt_registrant']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>YouTubeチャンネル URL:</label>
                                        <input type="text" name="yt_channel_url"  value = "<?= isset($talent)?$talent['yt_channel_url']:'' ?>" class="form-control" >
                                    </div>
                                </div><div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>女性比率:</label>
                                        <input type="email" name="female_ratio"  value = "<?= isset($talent)?$talent['female_ratio']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>男性比率:</label>
                                        <input type="text" name="male_ratio"  value = "<?= isset($talent)?$talent['male_ratio']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>年齢層:</label>
                                        <input type="text" name="age_range"  value = "<?= isset($talent)?$talent['age_range']:'' ?>" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>TikTokfw数:</label>
                                        <input type="email" name="tt_fw"  value = "<?= isset($talent)?$talent['tt_fw']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>TikTokアカウント URL:</label>
                                        <input type="text" name="tt_url"  value = "<?= isset($talent)?$talent['tt_url']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>ブログ URL:</label>
                                        <input type="text" name="blog_url"  value = "<?= isset($talent)?$talent['blog_url']:'' ?>" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Blogfw数:</label>
                                        <input type="email" name="blog_fw_count"  value = "<?= isset($talent)?$talent['blog_fw_count']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>wearfw数:</label>
                                        <input type="text" name="wear_fw_count"  value = "<?= isset($talent)?$talent['wear_fw_count']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>wearURL:</label>
                                        <input type="text" name="wear_url"  value = "<?= isset($talent)?$talent['wear_url']:'' ?>" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>その他のSNS:</label>
                                        <input type="text" name="sns_url"  value = "<?= isset($talent)?$talent['sns_url']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>銀行名:</label>
                                        <input type="text" name="bank_name"  value = "<?= isset($talent)?$talent['bank_name']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>支店名:</label>
                                        <input type="text" name="branch_name"  value = "<?= isset($talent)?$talent['branch_name']:'' ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>口座番号:</label>
                                        <input type="text" name="account_number"  value = "<?= isset($talent)?$talent['account_number']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>LINE ID:</label>
                                        <input type="text" name="line_id"  value = "<?= isset($talent)?$talent['line_id']:'' ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-10"></div>
                                    <div class="col-lg-2" style="text-align: right;">
                                        <button type="button" name="save" class="btn btn-primary font-weight-bolder">
                                        <i class="   ki-check icon-sm"></i>データ保存</button>
                                    </div>
                                </div>
                            </div>
                        </form> -->
                        <form class="form" id="kt_login_signin_form" enctype="multipart/form-data" method="post">
                            <input type="hidden" name="id" value = "<?= $talent["id"]?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <div class="image-input image-input-outline" id="kt_image_4" style="background-image: url(assets/media/>users/blank.png)">
                                            <div class="image-input-wrapper" style="background-image: url(<?= isset($talent)?upload_url().$talent["image"]:"" ?>); width: 300px; height: 300px;"></div>

                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" name="profile_avatar" id="avatar" accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="profile_avatar_remove"/>
                                            </label>

                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>

                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>お名前:</label>
                                                <input type="text" name="name" value = "<?= isset($talent)?$talent['name']:'' ?>" class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>メールアドレス:</label>
                                                <input type="email" name="email"  value = "<?= isset($talent)?$talent['email']:'' ?>" class="form-control" >
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>性別:</label>
                                                <select class="form-control select2" id="kt_select2_10" name="gender">
                                                    <option value="1" <?= isset($talent) && $talent['gender'] ==1 ?'selected':'' ?>>男性</option>
                                                    <option value="2" <?= isset($talent) && $talent['gender'] ==2 ?'selected':'' ?>>女性</option>
                                                </select>
                                                <!-- <input type="text" name="gender"  value = "<?= isset($talent)?$talent['gender']:'' ?>" class="form-control"> -->
                                            </div>
                                            <div class="col-lg-6">
                                                <label>宛名:</label>
                                                <input type="text" name="address"  value = "<?= isset($talent)?$talent['address']:'' ?>" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>電話番号:</label>
                                                <input type="text" name="mobile"  value = "<?= isset($talent)?$talent['mobile']:'' ?>" class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>口座名義:</label>
                                                <input type="text" name="nick_name"  value = "<?= isset($talent)?$talent['nick_name']:'' ?>" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>郵便番号:</label>
                                        <input type="text" name="post_code"  value = "<?= isset($talent)?$talent['post_code']:'' ?>" class="form-control" >
                                    </div>
                                    <div class="col-lg-4">
                                        <label>生年月日:</label>
                                        <input type="text" name="birthday" value = "<?= isset($talent)?$talent['birthday']:'' ?>" class="form-control" >
                                    </div>
                                    <div class="col-lg-4">
                                        <label>口座種別:</label>
                                        <input type="text" name="account_type"  value = "<?= isset($talent)?$talent['account_type']:'' ?>" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>都道府県:</label>
                                        <input type="text" name="pertecture"  value = "<?= isset($talent)?$talent['pertecture']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>市区町村・番地:</label>
                                        <input type="text" name="city_address"  value = "<?= isset($talent)?$talent['city_address']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>マンション・ビル名:</label>
                                        <input type="text" name="building_address"  value = "<?= isset($talent)?$talent['building_address']:'' ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>フォロワー数:</label>
                                        <input type="number" name="fw_count"  value = "<?= isset($talent)?$talent['fw_count']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>InstagramプロフィールURL:</label>
                                        <input type="text" name="it_url"  value = "<?= isset($talent)?$talent['it_url']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>依頼金額:</label>
                                        <input type="number" name="request_amount"  value = "<?= isset($talent)?$talent['request_amount']:'' ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>担当者名:</label>
                                        <input type="text" name="other_name"  value = "<?= isset($talent)?$talent['other_name']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>口座番号:</label>
                                        <input type="number" name="account_number"  value = "<?= isset($talent)?$talent['account_number']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>IGfw男性比率:</label>
                                        <input type="number" name="igfw_male_ratio"  value = "<?= isset($talent)?$talent['igfw_male_ratio']:'' ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>IGfw女性比率:</label>
                                        <input type="number" name="igfw_female_ratio"  value = "<?= isset($talent)?$talent['igfw_female_ratio']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>年齢:</label>
                                        <input type="number" name="age"  value = "<?= isset($talent)?$talent['age']:'' ?>" class="form-control">
                                    </div>
                                    <!--  select tag -->
                                    <div class="col-lg-4">
                                        <label>活動拠点:</label>
                                         <select class="form-control select2" id="kt_select2_4" name="activity_base" multiple="multiple">
                                            <option value="CA">California</option>
                                            <option value="NV" selected="selected">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT" selected="selected">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                        <!-- <input type="text" name="activity_base"  value = "<?= isset($talent)?$talent['activity_base']:'' ?>" class="form-control"> -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <!-- select tag -->
                                    <div class="col-lg-4">
                                        <label>ご職業:</label>
                                        <select class="form-control select2" id="kt_select2_3" name="talent" multiple="multiple">
                                            <option value="CA">California</option>
                                            <option value="NV" selected="selected">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT" selected="selected">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                        <!-- <input type="text" name="talent"  value = "<?= isset($talent)?$talent['talent']:'' ?>" class="form-control"> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <label>投稿ジャンル:</label>
                                        <input type="text" name="post_genre"  value = "<?= isset($talent)?$talent['post_genre']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>LINE ID:</label>
                                        <input type="text" name="line_id"  value = "<?= isset($talent)?$talent['line_id']:'' ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>PRポイント:</label>
                                        <input type="number" name="pr_point"  value = "<?= isset($talent)?$talent['pr_point']:'' ?>" class="form-control">
                                    </div>

                                    <div class="col-lg-4">
                                        <label>プロフィール表示名:</label>
                                        <input type="text" name="profile_name"  value = "<?= isset($talent)?$talent['profile_name']:'' ?>"  class="form-control" >
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <label>平均EG率(%):</label>
                                        <input type="number" name="fg_rate"  value = "<?= isset($talent)?$talent['fg_rate']:'' ?>" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>投稿での顔出し:</label>
                                        <input type="text" name="app_post"  value = "<?= isset($talent)?$talent['app_post']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>所属:</label>
                                        <input type="text" name="belonging"  value = "<?= isset($talent)?$talent['belonging']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>投稿実績:</label>
                                        <input type="text" name="post_result"  value = "<?= isset($talent)?$talent['post_result']:'' ?>" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>twitterフォロワー:</label>
                                        <input type="number" name="tw_fw"  value = "<?= isset($talent)?$talent['tw_fw']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Twitterアカウント URL:</label>
                                        <input type="text" name="tw_url"  value = "<?= isset($talent)?$talent['tw_url']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>FBfw:</label>
                                        <input type="number" name="fb_fw"  value = "<?= isset($talent)?$talent['fb_fw']:'' ?>" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Facebookアカウント URL:</label>
                                        <input type="text" name="fb_url"  value = "<?= isset($talent)?$talent['fb_url']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>youtube登録者数:</label>
                                        <input type="number" name="yt_registrant"  value = "<?= isset($talent)?$talent['yt_registrant']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>YouTubeチャンネル URL:</label>
                                        <input type="text" name="yt_channel_url"  value = "<?= isset($talent)?$talent['yt_channel_url']:'' ?>" class="form-control" >
                                    </div>
                                </div><div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>女性比率:</label>
                                        <input type="number" name="female_ratio"  value = "<?= isset($talent)?$talent['female_ratio']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>男性比率:</label>
                                        <input type="number" name="male_ratio"  value = "<?= isset($talent)?$talent['male_ratio']:'' ?>" class="form-control">
                                    </div>
                                    <!-- select option -->
                                    <div class="col-lg-4">
                                        <label>年齢層:</label>
                                        <input type="text" name="age_range"  value = "<?= isset($talent)?$talent['age_range']:'' ?>" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>TikTokfw数:</label>
                                        <input type="number" name="tt_fw"  value = "<?= isset($talent)?$talent['tt_fw']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>TikTokアカウント URL:</label>
                                        <input type="text" name="tt_url"  value = "<?= isset($talent)?$talent['tt_url']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>ブログ URL:</label>
                                        <input type="text" name="blog_url"  value = "<?= isset($talent)?$talent['blog_url']:'' ?>" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Blogfw数:</label>
                                        <input type="number" name="blog_fw_count"  value = "<?= isset($talent)?$talent['blog_fw_count']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>wearfw数:</label>
                                        <input type="number" name="wear_fw_count"  value = "<?= isset($talent)?$talent['wear_fw_count']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>wearURL:</label>
                                        <input type="text" name="wear_url"  value = "<?= isset($talent)?$talent['wear_url']:'' ?>" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>その他のSNS:</label>
                                        <input type="text" name="sns_url"  value = "<?= isset($talent)?$talent['sns_url']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>銀行名:</label>
                                        <input type="text" name="bank_name"  value = "<?= isset($talent)?$talent['bank_name']:'' ?>" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>支店名:</label>
                                        <input type="text" name="branch_name"  value = "<?= isset($talent)?$talent['branch_name']:'' ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <!-- text editor -->
                                    <div class="col-lg-6">
                                        <label>注意:</label>
                                        <!-- <input type="text" name="note"  value = "<?= isset($talent)?$talent['note']:'' ?>" class="form-control"> -->
                                        <textarea name="note" id="kt-ckeditor-1" rows="10" style="width: 100%;"> <?= isset($talent)?$talent['note']:'' ?></textarea>
                                    </div>
                                    <!-- text editor -->
                                    <div class="col-lg-6">
                                        <label>獲得実績:</label>
                                        <textarea name="acq_record" id="kt-ckeditor-2" rows="10" style="width: 100%;"> <?= isset($talent)?$talent['acq_record']:'' ?> </textarea>
                                        <!-- <input type="text" name="acq_record"  value = "<?= isset($talent)?$talent['acq_record']:'' ?>" class="form-control"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-10"></div>
                                    <div class="col-lg-2" style="text-align: right;">
                                        <button type="button" name="save" class="btn btn-primary font-weight-bolder">
                                        <i class="   ki-check icon-sm"></i>データ保存</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_1">クイックリンク</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_1">
                        <ul>
                            <li><a>続きを読む</a></li>
                            <li><a>助けて</a></li>
                            <li><a>ログイン</a></li>
                            <li><a>連絡先</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-3 col-md-6">
                    <h3 data-target="#collapse_4">連絡を取り合う</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_4">
                        <div id="newsletter">
                            <div id="message-newsletter"></div>
                            <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                                <div class="form-group">
                                    <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="メールアドレス">
                                    <button type="button" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
                                </div>
                            </form>
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
                        <li><span>© 2021 Prozim</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div id="toTop"></div><!-- Back to top button -->
    
    <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
    <script type="text/javascript">var HOST_URL = "<?=base_url()?>"</script>
    <!-- COMMON SCRIPTS -->
    <script src="<?= asset_url()?>js/jquery.js"></script>
    <script src="<?= asset_url()?>plugins/global/plugins.bundle.js"></script>
    <script src="<?= asset_url()?>plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="<?= asset_url()?>js/scripts.bundle.js"></script>
    <script src="<?= asset_url()?>js/pages/crud/file-upload/image-input.js"></script>
    <script src="<?= asset_url()?>plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="<?=asset_url()?>js/toastr.min.js"></script>
    <script src="<?= asset_url()?>scripts/register.js">></script>


</body>
</html>