(function (jQuery) {    jQuery(function () {        var cs_google_connect = function (id) {            var google_auth = jQuery('.social_login_google_auth');            var client_id = google_auth.find('input[type=hidden][name=client_id]').val();            var redirect_uri = google_auth.find('input[type=hidden][name=redirect_uri]').val();            var is_google_auth = google_auth.find('input[type=hidden][name=is_google_auth]').val();            var is_google_auth_msg = google_auth.find('input[type=hidden][name=is_google_auth]').data('api-error-msg');                        if (is_google_auth != 1) {                jQuery(".social-login-errors").html('<div class="status error"><div class="alert alert-danger"><button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button><p><i class="icon-warning4"></i>'+is_google_auth_msg+'</p></div></div>');            }            else {                window.open(redirect_uri, '_self');            }        };                var cs_linkedin_connect = function (id, apply_job_id) {            var linkedin_auth = jQuery('.social_login_linkedin_auth');            var client_id = linkedin_auth.find('input[type=hidden][name=client_id]').val();            var redirect_uri = linkedin_auth.find('input[type=hidden][name=redirect_uri]').val();            var is_linkedin_auth = linkedin_auth.find('input[type=hidden][name=is_linkedin_auth]').val();            var is_linkedin_auth_msg = linkedin_auth.find('input[type=hidden][name=is_linkedin_auth]').data('api-error-msg');            var auth_val = linkedin_auth.find('input').eq(0).val();            var auth_name = linkedin_auth.find('input').eq(0).attr('name');            redirect_uri = redirect_uri + "&" + auth_name + "=" + auth_val + "&linkedin=yes&&apply_job_id=" + apply_job_id;                        if (is_linkedin_auth != 1) {                jQuery(".social-login-errors").html('<div class="status error"><div class="alert alert-danger"><p><button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button><i class="icon-warning4"></i>'+is_linkedin_auth_msg+'</p></div></div>');            }            else {                window.open(redirect_uri, '', 'scrollbars=no,menubar=no,height=400,width=800,resizable=yes,toolbar=no,status=no');            }        };			var cs_facebook_connect_apply = function (id, apply_job_id) {            var facebook_auth = jQuery('.social_login_facebook_auth');            var client_id = facebook_auth.find('input[type=hidden][name=client_id]').val();            var redirect_uri = facebook_auth.find('input[type=hidden][name=redirect_uri]').val();            redirect_uri = redirect_uri + "&facebook=yes&&apply_job_id=" + apply_job_id;            var is_facebook_auth = facebook_auth.find('input[type=hidden][name=is_fb_valid]').val();            var is_facebook_auth_msg = facebook_auth.find('input[type=hidden][name=is_fb_valid]').data('api-error-msg');            if (is_facebook_auth != 1) {                jQuery(".social-login-errors").html('<div class="status error"><div class="alert alert-danger"><p><button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button><i class="icon-warning4"></i>'+is_facebook_auth_msg+'</p></div></div>');            } else {                               window.open('https://graph.facebook.com/oauth/authorize?client_id=' + client_id + '&redirect_uri=' + redirect_uri + '&state='+ apply_job_id +'&scope=email',                        '', 'scrollbars=no,menubar=no,height=400,width=800,resizable=yes,toolbar=no,status=no');            }        };        var cs_twitter_connect = function (id) {            var twitter_auth = jQuery('.social_login_twitter_auth');            var client_id = twitter_auth.find('input[type=hidden][name=client_id]').val();            var redirect_uri = twitter_auth.find('input[type=hidden][name=redirect_uri]').val();            var is_twitter_auth = twitter_auth.find('input[type=hidden][name=is_twitter_valid]').val();            var is_twitter_auth_msg = twitter_auth.find('input[type=hidden][name=is_twitter_valid]').data('api-error-msg');            if (is_twitter_auth != 1) {                jQuery(".social-login-errors").html('<div class="status error"><div class="alert alert-danger"><p><button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button><i class="icon-warning4"></i>'+is_twitter_auth_msg+'</p></div></div>');            } else {                window.open(redirect_uri, '', 'scrollbars=no,menubar=no,height=400,width=800,resizable=yes,toolbar=no,status=no');            }        };		window.fbconnect = false;		var facebook_auth = jQuery('.social_login_facebook_auth');		if ( facebook_auth.length > 0 ) {			var client_id = facebook_auth.find('input[type=hidden][name=client_id]').val();			var redirect_uri =facebook_auth.find('input[type=hidden][name=redirect_uri]').val();			if (client_id != "") {				window.fbconnect = true;				$.ajax({					method: "GET", 					url: 'https://graph.facebook.com/oauth/authorize?client_id=' + client_id + '&redirect_uri=' + redirect_uri + '&scope=email',				}).done(function( msg ) {				}).error(function( obj, msg ) {					if ( obj.status !== 0 ) {						window.fbconnect = false;					}					// console.log( obj.status );					// console.log( msg );				});			}		}		        var cs_facebook_connect = function (id) {            var facebook_auth = jQuery('.social_login_facebook_auth');            var client_id = facebook_auth.find('input[type=hidden][name=client_id]').val();            var redirect_uri = facebook_auth.find('input[type=hidden][name=redirect_uri]').val();            var is_facebook_auth = facebook_auth.find('input[type=hidden][name=is_fb_valid]').val();            var is_facebook_auth_msg = facebook_auth.find('input[type=hidden][name=is_fb_valid]').data('api-error-msg');            if (is_facebook_auth != 1) {                jQuery(".social-login-errors").html('<div class="status error"><div class="alert alert-danger"><p><button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button><i class="icon-warning4"></i>'+is_facebook_auth_msg+'</p></div></div>');            } else {                               window.open('https://graph.facebook.com/oauth/authorize?client_id=' + client_id + '&redirect_uri=' + redirect_uri + '&scope=email',                        '', 'scrollbars=no,menubar=no,height=400,width=800,resizable=yes,toolbar=no,status=no');            }        };        jQuery(".social_login_login_facebook").on("click", function () {            var id = jQuery(this).attr('id');            cs_facebook_connect(id);        });        jQuery(".social_login_login_continue_facebook").on("click", function () {            var id = jQuery(this).attr('id');            cs_facebook_connect(id);        });        jQuery(".social_login_login_twitter").on("click", function () {            var id = jQuery(this).attr('id');            cs_twitter_connect(id);        });        jQuery(".social_login_login_continue_twitter").on("click", function () {            var id = jQuery(this).attr('id');            cs_twitter_connect(id);        });        jQuery(".social_login_login_google").on("click", function () {            var id = jQuery(this).attr('id');            cs_google_connect(id);        });        jQuery(".social_login_login_linkedin").on("click", function () {            //social_login_login_linkedin            var id = '';            var apply_job_id = '';            if ((jQuery(".linkedin_jobid_apply").data("applyjobid"))) {                apply_job_id = jQuery(".linkedin_jobid_apply").data("applyjobid");            }                       cs_linkedin_connect(id, apply_job_id);        });				jQuery(".social_login_login_facebook_apply").on("click", function () {            //social_login_login_linkedin            var id = '';            var apply_job_id = '';            if ((jQuery(".facebook_jobid_apply").data("applyjobid"))) {                apply_job_id = jQuery(".facebook_jobid_apply").data("applyjobid");            }                       cs_facebook_connect_apply(id, apply_job_id);        });           });})(jQuery);window.wp_social_login = function (config) {    jQuery('#loginform').unbind('submit.simplemodal-login');    var form_id = '#loginform';    if (!jQuery('#loginform').length) {        // if register form exists, just use that        if (jQuery('#registerform').length) {            form_id = '#registerform';        } else {            // create the login form            var login_uri = jQuery("#social_login_form_uri").val();            jQuery('body').append("<form id='loginform' method='post' action='" + login_uri + "'></form>");            if (!jQuery('#setupform').length) {                jQuery('#loginform').append("<input type='hidden' id='redirect_to' name='redirect_to' value='" + window.location.href + "'>");            }        }    }    jQuery.each(config, function (key, value) {        jQuery("#" + key).remove();        jQuery(form_id).append("<input type='hidden' id='" + key + "' name='" + key + "' value='" + value + "'>");    });    if (jQuery("#simplemodal-login-form").length) {        var current_url = window.location.href;        jQuery("#redirect_to").remove();        jQuery(form_id).append("<input type='hidden' id='redirect_to' name='redirect_to' value='" + current_url + "'>");    }    jQuery(form_id).submit();}