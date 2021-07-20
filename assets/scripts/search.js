(() => { // webpackBootstrap
"use strict";
var __webpack_exports__ = {};

var indexPage = function() {
        
    var initUI = function(){
        $("a[name=signin]").on("click", function(){
            $("#login_modal").modal('show');
        });
        $("a[name=signup]").on("click", function(){
            $("#signup_modal").modal('show');
        });
        $("a[name=search]").on('click', function(){
            $("#search").submit();
        });
        $("a[name=save]").on('click', function(event){
            var loginData = new FormData($("#signup_form")[0]);
            if(loginData.password != loginData.cf_password){
                toastr.error("不一致のパスワード");
                return;
            }
            $.ajax({
                url: HOST_URL + "welcome/signup",
                type: 'post',
                data: loginData,
                contentType: false,
                processData: false,
            }).done(function (response) {
                var data = JSON.parse(response);
                if(data.success){
                    toastr.success(data.msg);
                    $("#signup_modal").modal("hide"); 
                }else{
                    toastr.error(data.msg);
                }
            });
            event.preventDefault();
        });
        $("a[name=login]").on('click', function(event){
            var loginData = new FormData($("#login_form")[0]);
            $.ajax({
                url: HOST_URL + "welcome/signin",
                type: 'post',
                data: loginData,
                contentType: false,
                processData: false,
            }).done(function (response) {
                var data = JSON.parse(response);
                if(data.success){
                    windows.reload();
                }else{
                    toastr.error(data.msg);
                }
            });
            event.preventDefault();
        });
        $("#search").on('click', function(event){
            $('#form_keyword').val($('#keyword').val());
            $('#kt_search_form').submit();
        })
    }
    return {
        // public functions
        init: function() {
            initUI();
        },
    };
}();

jQuery(document).ready(function() {
    indexPage.init();
    $('#keyword').keypress(function(ev) {
        if (ev.keyCode === 13) {
            $('#form_keyword').val(!ev.target.value ? '' : ev.target.value);
            $('#kt_search_form').submit();
        }
    });
});

/******/ })()
;
//# sourceMappingURL=data-ajax.js.map


function showSearch(){
    var isVisible = $('.card-footer').is( ":visible" );
    if(isVisible){
        $('.card-footer').collapse('hide');
    }else{
        $('.card-footer').collapse('show');
    }
}
function goPage(page){
    $('#page').val(page);
    $('#form_keyword').val($('#keyword').val());
    $('#kt_search_form').submit();
}

function setMedia(value, el){
    $(".symbol-label").removeClass("active");
    $(el).find('.symbol-label').addClass("active");
    $("#media").val(value);

}