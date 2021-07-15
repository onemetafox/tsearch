arrows = {
    leftArrow: '<i class="la la-angle-right"></i>',
    rightArrow: '<i class="la la-angle-left"></i>'
}
var datatable;
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!****************************************************************!*\
  !*** ../demo1/src/js/pages/crud/ktdatatable/base/data-ajax.js ***!
  \****************************************************************/

// Class definition

var KTDatatableRemoteAjaxDemo = function() {
    // Private functions

    var temp = function (){
        $("button[name=save]").on('click', function (event) {
            var paramObj = new FormData($("form")[0]);
            var files = $('#avatar')[0].files;
            // Check file selected or not
            if(files.length > 0 ){
                paramObj.append('file',files[0]);
            }
            $.ajax({
                url: HOST_URL + "talents/save",
                type: 'post',
                data: paramObj,
                contentType: false,
                processData: false,
                success: function(response){
                    var data = JSON.parse(response);
                    if(data.success){
                        $("#id").val(data.id);
                        toastr.success(data.msg);
                    }else{
                        toastr.error(data.msg)
                    }
                },
            });
        
            event.preventDefault();
        });
    }
    return {
        // public functions
        init: function() {
            temp();
        },
    };
}();

jQuery(document).ready(function() {
    KTDatatableRemoteAjaxDemo.init();
});

/******/ })()
;
//# sourceMappingURL=data-ajax.js.map