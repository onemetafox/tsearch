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
        $("a[name=save]").on('click', function(event){
            var loginData = new FormData($("#signup_form")[0]);
            $.ajax({
                url: HOST_URL + "welcome/signup",
                type: 'post',
                data: loginData,
                contentType: false,
                processData: false,
            }).done(function (response) {
                var data = JSON.parse(response);
                if(data.success == "true"){
                    window.location = "/";
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
                if(data.success == "true"){
                    window.location = "/";
                }else{
                    toastr.error(data.msg);
                }
            });
            event.preventDefault();
        });
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