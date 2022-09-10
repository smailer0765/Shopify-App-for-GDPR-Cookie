var $ = jQuery.noConflict();
/* global window, document, define, jQuery, setInterval, clearInterval */
;
(function(factory) {
    'use strict';
    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory);
    } else if (typeof exports !== 'undefined') {
        module.exports = factory(require('jquery'));
    } else {
        factory(jQuery);
    }
}(function($) {
    'use strict';

    var GDPRCookies = {};

    GDPRCookies = (function() {

        function GDPRCookies(element, settings) {
            var _ = this,
                MainDomain, ModalsOverlay, Show;

            _.MainDomain = "https://shopify-gdpr-app.stagebit.com";
            _.ModalsOverlay = "modals-overlay";
            _.Show = "_show";

            _.init(true);

        }

        return GDPRCookies;

    }());


    GDPRCookies.prototype.init = function(creation) {

        var _ = this;
        _.windowonload();
        _.customSetting();
        _.allowsetting();
        _.denysetting();
        _.add_overlay_table();
        _.amgdprcookie_options();
        _.add_overlay_setting();

    };


    GDPRCookies.prototype.customSetting = function() {

        var _ = this;
        $(document).on('click', "#custom_setting", function() {
            _.Open_setting_popup();
        });

    };


    GDPRCookies.prototype.allowsetting = function() {

        var _ = this;
        $(document).on('click', "#allow_setting", function() {
            _.Accept_cookie();
        });

    };


    GDPRCookies.prototype.denysetting = function() {

        var _ = this;
        $(document).on('click', "#deny_setting", function() {
            _.Decline_cookies();
        });

    };


    GDPRCookies.prototype.amgdprcookie_options = function() {

        var _ = this;
        $(document).on("click", ".amgdprcookie-options", function() {
            var $this = jQuery(this);
            var groupid = $this.data('groupid');
            var title = $this.data('title');
            var description = $this.data('description');
            _.Cookie_options_click(groupid, title, description);
        });

    };


    GDPRCookies.prototype.add_overlay_setting = function() {

        var _ = this;
        $(document).on("click", "#add_overlay_setting", function() {
            var $this = $(this);
            $this.toggleClass(_.ModalsOverlay);
            jQuery("aside.modal-popup.gdpr-cookie-container_setup-modal").toggleClass(_.Show);
        });

    };


    GDPRCookies.prototype.add_overlay_table = function() {

        var _ = this;
        jQuery(document).on("click", "#add_overlay_table", function() {
            var $this = $(this);
            $this.toggleClass(_.ModalsOverlay);
            jQuery("aside.modal-popup.gdpr-cookie-container_cookie-table1").toggleClass(_.Show);
        });

    }


    GDPRCookies.prototype.windowonload = function() {

        var _ = this;
        var allow_cookie_btn = 'info_allow_cookie_btn';
        var decline_cookie_btn = 'info_decline_cookie_btn';
        var accept_cookie_btn = 'info_accept_cookie_btn';
        var customize_btn = 'customize';
        var cookie_names = [];
        var cookies_list = document.cookie.split(";");
        var cookies = cookies_list;
        var count = 0;
        for (var i in cookies) {
            if (!isNaN(i)) {
                cookie_names[count] = cookies[i].split("=")[0];
                count++;
            }
        }

        var theCookies = cookie_names.map(str => str.replace(/\s/g, ''));
        var object = theCookies;
        let cookie = {};

        var e, t, cookieName;
        (e = _.MainDomain + "/banner/getBannerAjax"),
        (t = Shopify.shop),
        cookieName = _.metiz_read_cookie('DisableBanner');

        if ((cookieName != allow_cookie_btn) && (cookieName != decline_cookie_btn) && (cookieName != accept_cookie_btn) && (cookieName != customize_btn)) {
            $.ajax({
                type: "POST",
                url: e,
                data: {
                    shop_url: t
                },
                async: 1,
                success: function(e) {
                    var allow_display = 1,
                        n = $.parseJSON(e),
                        s = n.banner_data,
                        i = n.eu_countries,
                        c = n.cookies_scan_data,
                        shop_id = s.shop_id;
                    if ("1" !== s.eBannerEnable)
                        return !1;
                    if (1 == s.showOnlyInEurope) {
                        var ajaxcall = $.ajax({
                            url: "https://ipinfo.io",
                            type: "GET",
                            async: false,
                            dataType: 'json',
                        });
                        visitor = $.parseJSON(ajaxcall.responseText);
                        if (i.hasOwnProperty(visitor.country)) {
                            allow_display = true;
                        } else {
                            allow_display = false;
                        }
                    } else {
                        allow_display = true;
                    }

                    var allowEQ = " Allow_cookie=";
                    var denyEQ = " Deny_cookie=";
                    var ca = document.cookie.split(';');
                    for (var k = 0; k < ca.length; k++) {
                        var c = ca[k];
                        if (c.indexOf(allowEQ) == 0 || c.indexOf(denyEQ) == 0) {
                            allow_display = false;
                        }
                    }
                    if (1 == allow_display) {
                        var o = s.iCookieExpireTime;
                        var l = s.deny_enable;
                        $("head").append('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>');
                        $("head").append('<link rel="stylesheet" href="' + s.front_css_link_setting + '" type="text/css" />');
                        $("body").append(s.store_front_html),
                            $(".cookiebuttonbackcolor").css("background-color", "#" + s.cookie_button_back_color),
                            $(".cookie_p_fontcolor").css("color", "#" + s.cookie_fontcolor),
                            $(".cookie_p_font_size").css("font-size", s.cookie_font_size + "px"),
                            $("p:last-child").css("margin", "0"),
                            "" != s.vCustomCss;
                    }

                },
            });

        }

    };


    GDPRCookies.prototype.metiz_read_cookie = function(name) {

        var nameEQ = escape(name) + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ')
                c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0)
                return unescape(c.substring(nameEQ.length, c.length));
        }
        return null;

    };


    GDPRCookies.prototype.Decline_cookies = function() {

        var _ = this;
        var cookie_url = _.MainDomain + "/banner/GetCookieData";
        var cookie_shop_url = _.MainDomain;
        var shop_url = Shopify.shop;

        $.ajax({
            type: "POST",
            url: cookie_url,
            data: {
                cookie_shop_url: shop_url
            },
            async: 1,
            success: function(res) {

                var obj = $.parseJSON(res);
                var n = new Date();
                n.setTime(n.getTime() + 24 * 60 * 60 * 1e3);
                var s = "; expires=" + n.toGMTString();
                document.cookie = "Deny_cookie=; expires=Thu, 01 Jan 2030 00:00:00 UTC; path=/;";

                $("#add_overlay_cookie").toggleClass(_.ModalsOverlay);
                $(".amgdprcookie-bar-template.-popup").toggleClass(_.Show);

            }
        });

    };


    GDPRCookies.prototype.Accept_cookie = function() {

        var _ = this;
        var cookie_url = _.MainDomain + "/banner/GetCookieData";
        var cookie_shop_url = _.MainDomain;
        var shop_url = Shopify.shop;

        $.ajax({
            type: "POST",
            url: cookie_url,
            data: {
                cookie_shop_url: shop_url
            },
            async: 1,
            success: function(res) {
                var obj = $.parseJSON(res);
                var n = new Date();
                n.setTime(n.getTime() + 24 * 60 * 60 * 1e3);
                var s = "; expires=" + n.toGMTString();
                document.cookie = "Allow_cookie=; expires=Thu, 01 Jan 2070 00:00:00 UTC; path=/;";

                $("#add_overlay_cookie").toggleClass(_.ModalsOverlay);
                $(".amgdprcookie-bar-template.-popup").toggleClass(_.Show);
            }
        });
    };


    GDPRCookies.prototype.Open_setting_popup = function() {

        var _ = this;
        var cookie_url = _.MainDomain + "/banner/GetCookiePopup";
        var shop_url = Shopify.shop;
        $.ajax({
            type: "POST",
            url: cookie_url,
            data: {
                shop_url: shop_url,
            },
            async: 1,
            success: function(res) {
                var obj = $.parseJSON(res);
                _.Open_setting_up(obj);
            },
            complete: function() {
                $(".-settings .amgdprcookie-done").click(function() {
                    _.Accept_cookie();
                    $("#add_overlay_setting").toggleClass(_.ModalsOverlay);
                    $("aside.modal-popup.gdpr-cookie-container_setup-modal").toggleClass(_.Show);
                });
            }
        });

    };


    GDPRCookies.prototype.Cookie_options_click = function(groupid, title, description) {

        var _ = this;
        var cookie_url = _.MainDomain + "/banner/GetInfoPopup";
        var shop_url = Shopify.shop;
        $.ajax({
            url: cookie_url,
            type: 'POST',
            data: {
                groupid: groupid,
                title: title,
                description: description,
                shop_url: shop_url,
            },
            success: function(res) {
                var obj = $.parseJSON(res);
                $("#final_cookie_popup").html(obj.html);
                $("#add_overlay_table").toggleClass(_.ModalsOverlay);
                $("aside.modal-popup.gdpr-cookie-container_cookie-table1").toggleClass(_.Show);
            },
            complete: function() {
                $(".modal-footer .amgdprcookie-done").click(function() {
                    _.Accept_cookie();
                    $("#add_overlay_setting").toggleClass(_.ModalsOverlay);
                    $("#add_overlay_table").toggleClass(_.ModalsOverlay);
                    $("aside.modal-popup.gdpr-cookie-container_setup-modal").toggleClass(_.Show);
                    $("aside.modal-popup.gdpr-cookie-container_cookie-table1").toggleClass(_.Show);
                });
            }
        });

    };


    GDPRCookies.prototype.Open_setting_up = function(obj) {

        var _ = this;
        if (!$("body aside").hasClass("gdpr-cookie-container_setup-modal")) {
            $("body").append(obj.html);
            $("#add_overlay_setting").addClass(_.ModalsOverlay);
            $("aside.modal-popup.gdpr-cookie-container_setup-modal").addClass(_.Show);
        } else {
            $("#add_overlay_setting").toggleClass(_.ModalsOverlay);
            $("aside.modal-popup.gdpr-cookie-container_setup-modal").toggleClass(_.Show);
        }

    };


    $.fn.gdprCookies = function() {
        var _ = this,
            opt = arguments[0],
            args = Array.prototype.slice.call(arguments, 1),
            l = _.length,
            i,
            ret;
        for (i = 0; i < l; i++) {
            if (typeof opt == 'object' || typeof opt == 'undefined') {
                _[i].gdprCookies = new GDPRCookies(_[i], opt);
            } else {
                ret = _[i].gdprCookies[opt].apply(_[i].gdprCookies, args);
            }
            if (typeof ret != 'undefined') return ret;
        }
        return _;
    };

}));

$(document).ready(function() {
    $("body").gdprCookies();
});