$((function(){var a="../../../app-assets/",e=$("#addMemberSelect");if("laravel"===$("body").attr("data-framework")&&(a=$("body").attr("data-asset-path")),e.length){function t(e){return e.id?"<div class='d-flex flex-wrap align-items-center'><div class='avatar avatar-sm my-0 me-50'><span class='avatar-content'><img src='"+a+"images/avatars/"+$(e.element).data("avatar")+"' alt='avatar' /></span></div>"+e.text+"</div>":e.text}e.wrap('<div class="position-relative"></div>').select2({placeholder:"Add project members by name or email...",dropdownParent:e.parent(),templateResult:t,templateSelection:t,escapeMarkup:function(a){return a}})}}));
