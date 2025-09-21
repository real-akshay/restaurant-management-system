<?php
include('../authentication.php');

include('../../config/dbcon.php');
?>

<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Apr 2025 15:13:20 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Restaurant &#8211; Restaurantzx</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel="alternate" type="application/rss+xml" title="Restaurant DEMO &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Restaurant DEMO &raquo; Comments Feed"
        href="comments/feed/index.html" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/www.nicdark-themes.com\/themes\/restaurant\/wp\/demo\/restaurant\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.2" } };
        /*! This file is auto-generated */
        !function (i, n) { var o, s, e; function c(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function p(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function (e, t) { return e === r[t] }) } function u(e, t, n) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b") }return !1 } function f(e, t, n) { var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"), a = r.getContext("2d", { willReadFrequently: !0 }), o = (a.textBaseline = "top", a.font = "600 32px Arial", {}); return e.forEach(function (e) { o[e] = t(a, e, n) }), o } function t(e) { var t = i.createElement("script"); t.src = e, t.defer = !0, i.head.appendChild(t) } "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = { everything: !0, everythingExceptFlag: !0 }, e = new Promise(function (e) { i.addEventListener("DOMContentLoaded", e, { once: !0 }) }), new Promise(function (t) { var n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));", r = new Blob([e], { type: "text/javascript" }), a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" }); return void (a.onmessage = function (e) { c(n = e.data), a.terminate(), t(n) }) } catch (e) { } c(n = f(s, u, p)) } t(n) }).then(function (e) { for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]); n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () { n.DOMReady = !0 } }).then(function () { return e }).then(function () { var e; n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji))) })) }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='wp-includes/css/dist/block-library/style.min109c.css?ver=6.6.2' type='text/css' media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-family--inter: "Inter", sans-serif;
            --wp--preset--font-family--cardo: Cardo;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='nd_tds_style-css'
        href='wp-content/plugins/nd-theme-demos-switcher/css/style109c.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='wp-content/plugins/contact-form-7/includes/css/stylese2db.css?ver=5.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='nd_rst_style-css'
        href='wp-content/plugins/nd-restaurant-reservations/assets/css/style109c.css?ver=6.6.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='nd_options_style-css' href='wp-content/plugins/nd-shortcodes/css/style109c.css?ver=6.6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='nd_options_font_family_h-css'
        href='https://fonts.googleapis.com/css?family=Quicksand%3A300%2C400%2C500%2C700&amp;ver=6.6.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='nd_options_font_family_p-css'
        href='https://fonts.googleapis.com/css?family=Quicksand%3A300%2C400%2C500%2C700&amp;ver=6.6.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='nd_options_font_family_third-css'
        href='https://fonts.googleapis.com/css?family=Kristi&amp;ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='wp-content/plugins/revslider/public/assets/css/settings84f5.css?ver=5.4.8.1' type='text/css'
        media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='wp-content/plugins/woocommerce/assets/css/woocommerce-layoutc60b.css?ver=9.3.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreenc60b.css?ver=9.3.3' type='text/css'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='wp-content/plugins/woocommerce/assets/css/woocommercec60b.css?ver=9.3.3' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='nicdark-style-css' href='wp-content/themes/ristorante/style109c.css?ver=6.6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='nicdark-fonts-css'
        href='http://fonts.googleapis.com/css?family=Gilda%2BDisplay%7CRoboto%3A300%2C400%2C700&amp;ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'
        href='wp-content/uploads/sites/2/js_composer/js_composer_front_custom40df.css?ver=5.6' type='text/css'
        media='all' />
    <script type="text/javascript" src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min84f5.js?ver=5.4.8.1"
        id="tp-tools-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min84f5.js?ver=5.4.8.1"
        id="revmin-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.mina7df.js?ver=2.7.0-wc.9.3.3"
        id="jquery-blockui-js" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = { "ajax_url": "\/themes\/restaurant\/wp\/demo\/restaurant\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/themes\/restaurant\/wp\/demo\/restaurant\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/www.nicdark-themes.com\/themes\/restaurant\/wp\/demo\/restaurant\/cart\/", "is_cart": "", "cart_redirect_after_add": "no" };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minc60b.js?ver=9.3.3" id="wc-add-to-cart-js"
        data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.mine91a.js?ver=2.1.4-wc.9.3.3"
        id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = { "ajax_url": "\/themes\/restaurant\/wp\/demo\/restaurant\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/themes\/restaurant\/wp\/demo\/restaurant\/?wc-ajax=%%endpoint%%" };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minc60b.js?ver=9.3.3" id="woocommerce-js"
        defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart40df.js?ver=5.6"
        id="vc_woocommerce-add-to-cart-js-js"></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/8.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <meta name="generator" content="WordPress 6.6.2" />
    <meta name="generator" content="WooCommerce 9.3.3" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="wp-json/oembed/1.0/embed9813.json?url=https%3A%2F%2Fwww.nicdark-themes.com%2Fthemes%2Frestaurant%2Fwp%2Fdemo%2Frestaurant%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embed0f70?url=https%3A%2F%2Fwww.nicdark-themes.com%2Fthemes%2Frestaurant%2Fwp%2Fdemo%2Frestaurant%2F&amp;format=xml" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700|Kristi:400|Montserrat:600,700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap 5 CSS (add this line) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
        .nd_tds_background_color_1 {
            background-color: #2d2d2d;
        }

        .nd_tds_background_color_2 {
            background-color: #2d2d2d;
        }

        .nd_tds_background_color_3 {
            background-color: #c0a58a;
        }
    </style>




    <style type="text/css">
        /*color_dark_1*/
        .nd_rst_bg_dark_1 {
            background-color: #2d2d2d;
        }

        /*color_1*/
        .nd_rst_bg_color_1 {
            background-color: #c0a58a;
        }

        /*color_2*/
        .nd_rst_bg_color_2 {
            background-color: #b66565;
        }
    </style>




    <style type="text/css">
        /*START FONTS FAMILY*/
        .nd_options_customizer_fonts .nd_options_first_font,
        .nd_options_customizer_fonts h1,
        .nd_options_customizer_fonts h2,
        .nd_options_customizer_fonts h3,
        .nd_options_customizer_fonts h4,
        .nd_options_customizer_fonts h5,
        .nd_options_customizer_fonts h6 {
            font-family: 'Quicksand', sans-serif;
        }

        .nd_options_customizer_fonts,
        .nd_options_customizer_fonts .nd_options_second_font,
        .nd_options_customizer_fonts p,
        .nd_options_customizer_fonts a,
        .nd_options_customizer_fonts select,
        .nd_options_customizer_fonts textarea,
        .nd_options_customizer_fonts label,
        .nd_options_customizer_fonts input,
        #start_nicdark_framework {
            font-family: 'Quicksand', sans-serif;
        }

        .nd_options_customizer_fonts .nd_options_second_font_important {
            font-family: 'Quicksand', sans-serif !important;
        }

        .nd_options_customizer_fonts .nd_options_third_font {
            font-family: 'Kristi', sans-serif;
        }


        /*START FONTS COLOR*/
        .nd_options_customizer_fonts .nd_options_color_greydark,
        .nd_options_customizer_fonts h1,
        .nd_options_customizer_fonts h2,
        .nd_options_customizer_fonts h3,
        .nd_options_customizer_fonts h4,
        .nd_options_customizer_fonts h5,
        .nd_options_customizer_fonts h6 {
            color: #2d2d2d;
        }

        .nd_options_customizer_fonts .nd_options_color_greydark_important {
            color: #2d2d2d !important;
        }

        /*PLACEHOLDER*/
        .nd_options_customizer_fonts .nd_options_placeholder_color_greydark_important::-webkit-input-placeholder {
            color: #2d2d2d !important;
        }

        .nd_options_customizer_fonts .nd_options_placeholder_color_greydark_important::-moz-placeholder {
            color: #2d2d2d !important;
        }

        .nd_options_customizer_fonts .nd_options_placeholder_color_greydark_important:-ms-input-placeholder {
            color: #2d2d2d !important;
        }

        .nd_options_customizer_fonts .nd_options_placeholder_color_greydark_important:-moz-placeholder {
            color: #2d2d2d !important;
        }

        .nd_options_customizer_fonts,
        .nd_options_customizer_fonts .nd_options_color_grey,
        .nd_options_customizer_fonts p,
        .nd_options_customizer_fonts a,
        .nd_options_customizer_fonts select,
        .nd_options_customizer_fonts textarea,
        .nd_options_customizer_fonts label,
        .nd_options_customizer_fonts input {
            color: #7e7e7e;
        }

        .nd_options_color_grey_important {
            color: #7e7e7e !important;
        }


        /*compatibility with plugin Learning*/
        #nd_learning_calendar_single_course .ui-datepicker-title {
            font-family: 'Quicksand', sans-serif;
            color: #2d2d2d;
        }

        #nd_learning_calendar_single_course .ui-datepicker-calendar th {
            color: #2d2d2d;
        }
    </style>




    <style type="text/css">
        /*START FORMS STYLES*/
        .nd_options_customizer_forms span.wpcf7-not-valid-tip,
        .nd_options_customizer_forms .wpcf7-response-output.wpcf7-validation-errors {
            background-color: #b66565;
            border-width: 0px;
            border-color: #fff;
            border-radius: 4px;
            border-style: solid;
            padding: 10px 20px;
            color: #ffffff;
            margin: 0px;
            margin-top: 10px;
            font-size: 13px;
            line-height: 20px;
        }

        .nd_options_customizer_forms .wpcf7-response-output.wpcf7-mail-sent-ok {
            background-color: #c0a58b;
            border-width: 0px;
            border-color: #fff;
            border-radius: 4px;
            border-style: solid;
            padding: 10px 20px;
            color: #ffffff;
            margin: 0px;
            margin-top: 10px;
            font-size: 13px;
            line-height: 20px;
        }
    </style>




    <style type="text/css">
        /*START FORMS STYLES*/
        .nd_options_customizer_forms input[type="text"],
        .nd_options_customizer_forms input[type="email"],
        .nd_options_customizer_forms input[type="url"],
        .nd_options_customizer_forms input[type="tel"],
        .nd_options_customizer_forms input[type="number"],
        .nd_options_customizer_forms input[type="date"],
        .nd_options_customizer_forms input[type="file"],
        .nd_options_customizer_forms input[type="password"],
        .nd_options_customizer_forms select,
        .nd_options_customizer_forms textarea,
        .StripeElement {
            background-color: #fff;
            border-width: 1px;
            border-color: #f1f1f1;
            border-radius: 0px;
            border-style: solid;
            padding: 10px 20px;
            -webkit-appearance: none;
            color: #7e7e7e;



            border-top-width: 0px;
            border-left-width: 0px;
            border-right-width: 0px;

        }


        .nd_options_customizer_forms input[type="text"]::-webkit-input-placeholder,
        .nd_options_customizer_forms input[type="email"]::-webkit-input-placeholder,
        .nd_options_customizer_forms input[type="url"]::-webkit-input-placeholder,
        .nd_options_customizer_forms input[type="tel"]::-webkit-input-placeholder,
        .nd_options_customizer_forms input[type="password"]::-webkit-input-placeholder,
        .nd_options_customizer_forms input[type="number"]::-webkit-input-placeholder,
        .nd_options_customizer_forms textarea::-webkit-input-placeholder {
            color: #7e7e7e;
        }


        .nd_options_customizer_forms select {
            cursor: pointer;
        }

        .nd_options_customizer_forms select option {
            padding: 10px 20px;
        }
    </style>




    <style type="text/css">
        /*START FORMS STYLES*/
        .nd_options_customizer_forms input[type="submit"],
        .nd_options_customizer_forms button[type="submit"] {
            background-color: #c0a58a;
            border-width: 1px;
            border-color: #c0a58a;
            border-radius: 4px;
            border-style: solid;
            padding: 10px 20px;
            -webkit-appearance: none;
            color: #ffffff;
            cursor: pointer;
            font-family: 'Quicksand', sans-serif;

        }
    </style>



    <style type="text/css">
        .nd_options_cursor_default_a>a {
            cursor: default;
        }

        .nd_options_navigation_type .menu li.nd_options_hot_label>a:after,
        #nd_options_header_5 .menu li.nd_options_hot_label>a:after {
            content: "HOT";
            float: right;
            background-color: #b66565;
            border-radius: 3px;
            color: #fff;
            font-size: 10px;
            line-height: 10px;
            padding: 3px 5px;
        }

        .nd_options_navigation_type .menu li.nd_options_best_label>a:after,
        #nd_options_header_5 .menu li.nd_options_best_label>a:after {
            content: "BEST";
            float: right;
            background-color: #c0a58a;
            border-radius: 3px;
            color: #fff;
            font-size: 10px;
            line-height: 10px;
            padding: 3px 5px;
        }

        .nd_options_navigation_type .menu li.nd_options_new_label>a:after,
        #nd_options_header_5 .menu li.nd_options_new_label>a:after {
            content: "NEW";
            float: right;
            background-color: #2d2d2d;
            border-radius: 3px;
            color: #fff;
            font-size: 10px;
            line-height: 10px;
            padding: 3px 5px;
        }

        .nd_options_customizer_labels_color_new {
            background-color: #2d2d2d;
        }
    </style>


    <!--START css-->
    <style type="text/css">
        .nd_options_navigation_search_content_form {}

        .nd_options_navigation_search_content_form input[type="search"] {
            background: none;
            border: 0px;
            border-bottom: 2px solid #fff;
            color: #fff;
            font-size: 30px;
            line-height: 30px;
        }

        .nd_options_navigation_search_content_form input[type="search"]::-webkit-input-placeholder {
            color: #fff;
        }

        .nd_options_navigation_search_content_form input[type="submit"] {
            font-size: 25px;
            line-height: 40px;
            margin-left: 20px;
        }
    </style>
    <!--END css-->

    <style type="text/css">
        .widget_nav_menu ul {
            list-style: none;
            margin: 0px;
            padding: 0px;
        }

        .widget_nav_menu ul li {
            float: left;
            width: 100%;
        }

        .widget_nav_menu ul li a {
            background-color: initial;
            margin: 0px;
            padding: 0px;
        }

        .widget_nav_menu .sub-menu {
            padding-left: 20px;
        }
    </style>

    <!--START  for post-->
    <style type="text/css">
        /*sidebar*/
        .wpb_widgetised_column .widget {
            margin-bottom: 40px;
        }

        .wpb_widgetised_column .widget img,
        .wpb_widgetised_column .widget select {
            max-width: 100%;
        }

        .wpb_widgetised_column .widget h3 {
            margin-bottom: 20px;
            font-weight: normal;
        }

        /*search*/
        .wpb_widgetised_column .widget.widget_search input[type="text"] {
            width: 100%;
        }

        .wpb_widgetised_column .widget.widget_search input[type="submit"] {
            margin-top: 20px;
        }

        /*list*/
        .wpb_widgetised_column .widget ul {
            margin: 0px;
            padding: 0px;
            list-style: none;
        }

        .wpb_widgetised_column .widget>ul>li {
            padding: 10px;
            border-bottom: 1px solid #f1f1f1;
        }

        .wpb_widgetised_column .widget>ul>li:last-child {
            padding-bottom: 0px;
            border-bottom: 0px solid #f1f1f1;
        }

        .wpb_widgetised_column .widget ul li {
            padding: 10px;
        }

        .wpb_widgetised_column .widget ul.children {
            padding: 10px;
        }

        .wpb_widgetised_column .widget ul.children:last-child {
            padding-bottom: 0px;
        }

        /*calendar*/
        .wpb_widgetised_column .widget.widget_calendar table {
            text-align: center;
            background-color: #fff;
            width: 100%;
            border: 1px solid #f1f1f1;
            line-height: 20px;
        }

        .wpb_widgetised_column .widget.widget_calendar table th {
            padding: 10px 5px;
        }

        .wpb_widgetised_column .widget.widget_calendar table td {
            padding: 10px 5px;
        }

        .wpb_widgetised_column .widget.widget_calendar table tbody td a {
            color: #fff;
            padding: 5px;
            border-radius: 3px;
        }

        .wpb_widgetised_column .widget.widget_calendar table tfoot td a {
            color: #fff;
            background-color: #444444;
            padding: 5px;
            border-radius: 15px;
            font-size: 13px;
        }

        .wpb_widgetised_column .widget.widget_calendar table tfoot td {
            padding-bottom: 20px;
        }

        .wpb_widgetised_column .widget.widget_calendar table tfoot td#prev {
            text-align: right;
        }

        .wpb_widgetised_column .widget.widget_calendar table tfoot td#next {
            text-align: left;
        }

        .wpb_widgetised_column .widget.widget_calendar table caption {
            font-size: 20px;
            font-weight: bolder;
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #f1f1f1;
            border-bottom: 0px;
        }

        /*color calendar*/
        .wpb_widgetised_column .widget.widget_calendar table thead {
            color: #2d2d2d;
        }

        .wpb_widgetised_column .widget.widget_calendar table tbody td a {
            background-color: #c0a58a;
        }

        .wpb_widgetised_column .widget.widget_calendar table caption {
            color: #2d2d2d;
            font-family: 'Quicksand', sans-serif;
        }

        /*menu*/
        .wpb_widgetised_column .widget div ul {
            margin: 0px;
            padding: 0px;
            list-style: none;
        }

        .wpb_widgetised_column .widget div>ul>li {
            padding: 10px;
            border-bottom: 1px solid #f1f1f1;
        }

        .wpb_widgetised_column .widget div>ul>li:last-child {
            padding-bottom: 0px;
            border-bottom: 0px solid #f1f1f1;
        }

        .wpb_widgetised_column .widget div ul li {
            padding: 10px;
        }

        .wpb_widgetised_column .widget div ul.sub-menu {
            padding: 10px;
        }

        .wpb_widgetised_column .widget div ul.sub-menu:last-child {
            padding-bottom: 0px;
        }

        /*tag*/
        .wpb_widgetised_column .widget.widget_tag_cloud a {
            padding: 5px 10px;
            border: 1px solid #f1f1f1;
            border-radius: 15px;
            display: inline-block;
            margin: 5px;
            margin-left: 0px;
            font-size: 13px !important;
            line-height: 20px;
        }
    </style>
    <!--END css for post-->




    <style>
        /*-------------------------WooCommerce for 3.x-------------------------*/

        .post-type-archive-product.woocommerce .product {
            text-align: center;
        }

        /*title product*/
        .woocommerce ul.products li.product a h2.woocommerce-loop-product__title {
            font-size: 20px;
            line-height: 20px;
            padding: 10px 0px;
            font-weight: normal;
        }

        /*image*/
        .woocommerce.woocommerce-page .product figure {
            margin: 0px;
        }

        /*price*/
        .woocommerce.woocommerce-page .product .summary.entry-summary .price {
            font-size: 30px;
            line-height: 30px;
            color: #7e7e7e;
            font-family: 'Quicksand', sans-serif;
        }

        .woocommerce.woocommerce-page .product .summary.entry-summary .price span {
            display: inline-block !important;
        }

        .woocommerce.woocommerce-page .product .summary.entry-summary .price .woocommerce-Price-amount {
            display: table;
        }

        .woocommerce.woocommerce-page .product .summary.entry-summary .price .woocommerce-Price-amount .woocommerce-Price-currencySymbol {
            display: table-cell;
            vertical-align: top;
            font-size: 20px;
            line-height: 20px;
            padding-right: 10px;
        }

        .woocommerce.woocommerce-page .product .summary.entry-summary .price ins {
            text-decoration: none;
            font-weight: normal;
        }

        .woocommerce.woocommerce-page .product .summary.entry-summary .price del {
            float: left;
            margin-right: 20px;
        }


        .woocommerce .star-rating {
            height: 15px;
            line-height: 15px;
            width: 80px;
        }


        .woocommerce.post-type-archive-product .star-rating {
            width: 70px;
        }


        /*-------------------------WooCommerce Archive Page-------------------------*/
        /*page-title*/
        .woocommerce.woocommerce-page.post-type-archive-product h1.page-title,
        .woocommerce.woocommerce-page.tax-product_cat h1.page-title,
        .woocommerce.woocommerce-page.tax-product_tag h1.page-title {
            display: none;
        }

        /*result-count*/
        .woocommerce.woocommerce-page.post-type-archive-product p.woocommerce-result-count,
        .woocommerce.woocommerce-page.tax-product_cat p.woocommerce-result-count,
        .woocommerce.woocommerce-page.tax-product_tag p.woocommerce-result-count {
            display: none;
        }

        /*woocommerce-ordering*/
        .woocommerce.woocommerce-page.post-type-archive-product form.woocommerce-ordering,
        .woocommerce.woocommerce-page.tax-product_cat form.woocommerce-ordering,
        .woocommerce.woocommerce-page.tax-product_tag form.woocommerce-ordering {
            display: none;
        }

        /*img product*/
        .woocommerce ul.products li.product a img {
            margin-bottom: 10px;
        }

        /*onsale*/
        .woocommerce ul.products li.product a span.onsale {
            top: 20px !important;
            right: 20px !important;
            left: initial !important;
        }

        /*title product*/
        .woocommerce ul.products li.product a h3 {
            font-size: 20px;
            line-height: 20px;
            padding: 10px 0px;
        }

        /*price*/
        .woocommerce ul.products li.product a .price {
            color: #7e7e7e !important;
            font-size: 16px !important;
            line-height: 16px !important;
            margin-top: 20px;
        }

        .woocommerce ul.products li.product a .price del,
        .woocommerce ul.products li.product a .price ins {
            font-weight: normal;
        }



        /*-------------------------WooCommerce Single Product-------------------------*/

        /*gallery*/
        .woocommerce div.product div.images .woocommerce-product-gallery__image:nth-child(n+2) {
            width: 20%;
            display: inline-block;
            border: 4px solid #fff;
            box-sizing: border-box;
            margin-top: 4px;
        }


        /*.woocommerce.single-product .related.products > h2:after {
        width: 30px;
        height: 2px;
        background-color: #f1f1f1;
        content : "";
        position: absolute;
        left: 0px;
        bottom: -20px;
    }*/
        .woocommerce.single-product .related.products ul li {
            text-align: center;
        }

        .woocommerce.single-product .related.products>h2 {
            position: relative;
            margin-bottom: 35px;
        }


        .woocommerce.single-product .woocommerce-Reviews .comment-text .meta {
            color: #2d2d2d !important;
        }

        .woocommerce.single-product .woocommerce-Reviews .comment-text .meta strong {
            font-weight: normal;
        }


        .woocommerce.single-product table.shop_attributes {
            text-align: left;
        }

        .woocommerce.single-product table.shop_attributes th {
            font-weight: normal;
            color: #2d2d2d;
            padding: 15px 20px;
        }

        .woocommerce.single-product table.shop_attributes th,
        .woocommerce.single-product table.shop_attributes td {
            border-bottom: 1px solid #f1f1f1;
        }

        .woocommerce.single-product table.shop_attributes {
            border-top: 1px solid #f1f1f1;
        }


        .woocommerce.single-product .summary.entry-summary .woocommerce-product-rating {
            margin-top: -15px;
        }


        .woocommerce.single-product .woocommerce-product-details__short-description {
            margin-top: 10px;
            display: inline-block;
            margin-bottom: 10px;
        }

        /*title*/
        .woocommerce.single-product .product_title {
            font-weight: normal;
            margin-bottom: 30px;
        }


        .woocommerce.single-product .variations_form.cart p.stock.out-of-stock {
            background-color: #c0a58a;
            color: #fff;
            padding: 5px 10px;
        }


        /*tab description*/
        .woocommerce-Tabs-panel.woocommerce-Tabs-panel--description {
            margin-bottom: 60px !important;
        }

        .woocommerce-Tabs-panel.woocommerce-Tabs-panel--description h2 {
            font-size: 20px;
            line-height: 20px;
            font-weight: normal;
            margin-bottom: 20px;
        }

        /*tab additional*/
        .woocommerce-Tabs-panel--additional_information h2 {
            font-weight: normal;
            font-size: 20px;
            margin-bottom: 20px;
        }

        /*tab reviews*/
        .woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews {
            margin-bottom: 60px !important;
        }

        .woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews .woocommerce-Reviews #comments h2 {
            font-size: 20px;
            line-height: 20px;
            font-weight: normal;
            margin-bottom: 40px;
        }

        .woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews .woocommerce-Reviews #comments ol.commentlist {
            margin: 0px;
            padding: 0px;
        }

        .woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews .woocommerce-Reviews #comments ol.commentlist li {
            border-bottom: 1px solid #f1f1f1 !important;
        }

        .woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews .woocommerce-Reviews #comments ol.commentlist li .avatar {
            border: 0px !important;
            padding: 0px !important;
            border-radius: 100%;
            width: 40px !important;
        }

        .woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews .woocommerce-Reviews #comments ol.commentlist li div .comment-text {
            border: 0px solid #f1f1f1 !important;
            padding: 15px 10px !important;
        }

        .woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews .woocommerce-Reviews #comments ol.commentlist li div .comment-text .meta {
            font-size: 16px !important;
            line-height: 16px !important;
            font-family: 'Quicksand', sans-serif;
            font-weight: normal;
        }

        .woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews .woocommerce-Reviews #review_form .submit {
            background-color: #c0a58a !important;
            border-radius: 0px !important;
            font-weight: normal;
            padding: 10px 20px !important;
            text-transform: uppercase;
            font-family: 'Quicksand', sans-serif;
            color: #fff !important;
        }

        /*top description*/
        .woocommerce.woocommerce-page .product.type-product .summary.entry-summary div p {
            margin: 20px 0px;
        }

        /*button add to cart*/
        .woocommerce.woocommerce-page .product .summary.entry-summary form .single_add_to_cart_button {
            background-color: #c0a58a;
            border-radius: 3px;
            padding: 10px 20px;
            text-transform: uppercase;
            font-family: 'Quicksand', sans-serif;
        }

        /*qnt form*/
        .woocommerce.woocommerce-page .product .summary.entry-summary form div.quantity {
            margin-right: 20px;
        }

        /*product_meta*/
        .woocommerce.woocommerce-page .product .summary.entry-summary .product_meta {
            color: #2d2d2d;
        }

        .woocommerce.woocommerce-page .product .summary.entry-summary .product_meta>span {
            font-family: 'Quicksand', sans-serif;
            display: block;
        }

        .woocommerce.woocommerce-page .product .summary.entry-summary .product_meta span a {
            padding: 8px;
            border: 1px solid #f1f1f1;
            font-size: 13px;
            line-height: 13px;
            display: inline-block;
            margin: 5px 10px;
            margin-left: 0px;
            border-radius: 3px;
        }


        /*sku*/
        .woocommerce.woocommerce-page .product .summary.entry-summary .product_meta .sku_wrapper span.sku {
            padding: 8px;
            border: 1px solid #f1f1f1;
            font-size: 13px;
            line-height: 13px;
            display: inline-block;
            margin: 5px 10px;
            margin-left: 0px;
            border-radius: 0px;
            color: #7e7e7e;
            font-family: 'Quicksand', sans-serif !important;
        }

        /*variations*/
        .woocommerce.woocommerce-page .product .summary.entry-summary .variations .value .reset_variations {
            background-color: #c0a58a;
            margin: 0px;
            padding: 8px;
            color: #fff;
            text-transform: uppercase;
            font-family: 'Quicksand', sans-serif;
            font-size: 13px;
            line-height: 13px;
            border-radius: 0px;
        }

        .woocommerce.woocommerce-page .product .summary.entry-summary .variations .label label {
            font-size: 16px;
            line-height: 16px;
            color: #2d2d2d;
            font-family: 'Quicksand', sans-serif;
            font-weight: normal;
        }

        /*price*/
        .woocommerce.woocommerce-page .product .summary.entry-summary div .price {
            font-size: 30px;
            line-height: 30px;
            color: #7e7e7e;
            font-family: 'Quicksand', sans-serif;
        }

        .woocommerce.woocommerce-page .product .single_variation_wrap .woocommerce-variation.single_variation {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .woocommerce.woocommerce-page .product .summary.entry-summary div .price .woocommerce-Price-amount {
            display: table;
        }

        .woocommerce.woocommerce-page .product .summary.entry-summary div .price .woocommerce-Price-amount .woocommerce-Price-currencySymbol {
            display: table-cell;
            vertical-align: top;
            font-size: 20px;
            line-height: 20px;
            padding-right: 10px;
        }

        .woocommerce.woocommerce-page .product .summary.entry-summary div .price ins {
            text-decoration: none;
            font-weight: normal;
        }

        .woocommerce.woocommerce-page .product .summary.entry-summary div .price del {
            float: left;
            margin-right: 20px;
        }

        /*tab*/
        .woocommerce.woocommerce-page .product .woocommerce-tabs ul {
            margin: 0px 0px 40px 0px !important;
            padding: 0px !important;
            border-bottom: 1px solid #f1f1f1;
            overflow: visible !important;
        }

        .woocommerce.woocommerce-page .product .woocommerce-tabs ul:before {
            border-bottom: 0px solid #f1f1f1 !important;
        }

        .woocommerce.woocommerce-page .product .woocommerce-tabs ul li {
            background-color: #fff !important;
            border: 0px !important;
            margin: 0px !important;
        }

        .woocommerce.woocommerce-page .product .woocommerce-tabs ul li a {
            color: #2d2d2d !important;
            font-family: 'Quicksand', sans-serif !important;
            font-size: 17px !important;
            line-height: 17px;
            font-weight: normal !important;
            padding: 20px 10px !important;
        }

        .woocommerce.woocommerce-page .product .woocommerce-tabs ul li.active {
            box-shadow: 0px 1px 0px #c0a58a !important;
        }

        .woocommerce.woocommerce-page .product .woocommerce-tabs ul li.active:before,
        .woocommerce.woocommerce-page .product .woocommerce-tabs ul li.active:after,
        .woocommerce.woocommerce-page .product .woocommerce-tabs ul li:after,
        .woocommerce.woocommerce-page .product .woocommerce-tabs ul li:before {
            display: none;
        }


        /*-------------------------WooCommerce General-------------------------*/
        /*onsale*/
        .woocommerce span.onsale {
            top: 20px !important;
            left: 20px !important;
            border-radius: 3px;
            min-width: initial;
            min-height: initial;
            padding: 8px;
            line-height: 13px;
            font-size: 13px;
            text-transform: uppercase;
            font-weight: normal;
            font-family: 'Quicksand', sans-serif;
            background-color: #c0a58a;
        }

        /*button*/
        .add_to_cart_button,
        .button.product_type_variable,
        .button.product_type_grouped,
        .button.product_type_external {
            font-size: 13px !important;
            line-height: 13px !important;
            color: #7e7e7e !important;
            font-weight: normal !important;
            text-transform: uppercase;
            border-radius: 3px !important;
            border: 1px solid #f1f1f1 !important;
            background-color: #fff !important;
            font-family: 'Quicksand', sans-serif !important;
        }

        .added_to_cart {
            background-color: #c0a58a !important;
            color: #fff !important;
            text-transform: uppercase;
            font-size: 13px !important;
            line-height: 13px !important;
            margin: 0px;
            margin-left: 5px;
            padding: .618em 1em !important;
            font-weight: normal !important;
            border-radius: 0px !important;
            font-family: 'Quicksand', sans-serif !important;
        }


        /*return-to-shop*/
        .return-to-shop .button {
            background-color: #c0a58a !important;
            border-radius: 0px !important;
            text-transform: uppercase;
            font-family: 'Quicksand', sans-serif;
            color: #fff !important;
            margin-top: 20px !important;
            font-weight: normal !important;
            padding: 15px 20px !important;
        }


        /*qnt form*/
        .woocommerce .quantity .qty {
            min-width: 100px;
            height: 34px;
        }


        /*woocommerce-pagination*/
        .woocommerce nav.woocommerce-pagination ul {
            border: 0px;
        }

        .woocommerce nav.woocommerce-pagination ul li {
            border: 0px;
        }

        .woocommerce nav.woocommerce-pagination ul li span.current {
            background-color: #fff;
            color: #2d2d2d !important;
            font-family: 'Quicksand', sans-serif !important;
            font-size: 20px;
            line-height: 20px;
            font-weight: normal;
            padding: 5px
        }

        .woocommerce nav.woocommerce-pagination ul li a {
            font-family: 'Quicksand', sans-serif !important;
            color: #7e7e7e !important;
            font-size: 20px;
            line-height: 20px;
            font-weight: normal;
            padding: 5px;
        }

        .woocommerce nav.woocommerce-pagination ul li a:hover {
            background-color: #fff;
        }


        /*related products*/
        .related.products h2 {
            margin-bottom: 25px;
            font-weight: normal;
        }

        .woocommerce.single-product .related.products .star-rating {
            display: none;
        }

        /*upsells products*/
        .up-sells.upsells.products h2 {
            margin-bottom: 25px;
        }

        /*reviews link*/
        .woocommerce-review-link {
            display: none;
        }

        /*woocommerce-message*/
        .woocommerce-message {
            border-top: 0px;
            background-color: #c0a58a;
            border-radius: 0px;
            color: #fff;
            line-height: 36px;
        }

        .woocommerce-message:before {
            color: #fff;
        }

        .woocommerce-message a {
            background-color: #2d2d2d !important;
            border-radius: 0px !important;
            color: #fff !important;
            text-transform: uppercase;
            padding: 10px 20px !important;
            font-family: 'Quicksand', sans-serif;
        }

        /*woocommerce-error*/
        .woocommerce-error {
            border-top: 0px;
            background-color: #c0a58a;
            border-radius: 0px;
            color: #fff;
            line-height: 36px;
        }

        .woocommerce-checkout .woocommerce-error li strong {
            font-weight: normal;
        }

        .woocommerce-error:before {
            color: #fff;
        }

        .woocommerce-error a {
            color: #fff;
            text-decoration: underline;
        }

        /*woocommerce-info*/
        .woocommerce-info {
            border-top: 0px;
            background-color: #c0a58a;
            border-radius: 0px;
            color: #fff;
            line-height: 36px;
        }

        .woocommerce-info a {
            color: #fff;
            text-decoration: underline;
        }

        .woocommerce-info:before {
            color: #fff;
        }

        /*required*/
        .woocommerce form .form-row .required {
            color: #7e7e7e;
        }

        .woocommerce form .form-row.woocommerce-invalid label {
            color: #7e7e7e;
        }


        /*-------------------------WooCommerce Cart-------------------------*/
        .woocommerce-cart .woocommerce table.shop_table thead tr th {
            font-weight: normal;
            color: #2d2d2d;
        }

        .woocommerce-cart .woocommerce table.shop_table tr button[type="submit"] {
            font-weight: normal;
            color: #fff;
        }

        .woocommerce-cart .woocommerce .shop_table.cart td {
            border-color: #f1f1f1;
        }

        .woocommerce-cart .woocommerce .shop_table.cart {
            border: 1px solid #f1f1f1;
            border-radius: 0px !important;
        }

        .woocommerce-cart .woocommerce .shop_table.cart .actions {
            background-color: #f9f9f9;
        }

        .woocommerce-cart .woocommerce .shop_table.cart th,
        .woocommerce-cart .woocommerce .shop_table.cart td {
            padding: 20px;
        }

        .woocommerce-cart .woocommerce .shop_table.cart thead {
            background-color: #f9f9f9;
        }

        .woocommerce-cart .woocommerce .shop_table.cart tr.cart_item .product-thumbnail a img {
            float: left;
        }

        .woocommerce-cart .woocommerce .shop_table.cart tr.cart_item .product-name .variation {
            display: none;
        }

        .woocommerce-cart .woocommerce .shop_table.cart .product-remove .remove {
            color: #c0a58a !important;
            background-color: #fff !important;
            font-size: 15px;
            padding: 5px;
        }

        .woocommerce-cart .cart-collaterals {
            margin-top: 50px;
        }

        .woocommerce-cart .cart-collaterals h2:after {
            width: 30px;
            height: 2px;
            background-color: #f1f1f1;
            content: "";
            position: absolute;
            left: 0px;
            bottom: -20px;
        }

        .woocommerce-cart .cart-collaterals h2 {
            position: relative;
            margin-bottom: 45px;
            font-weight: normal;
        }


        .woocommerce-cart .shop_table tr th,
        .woocommerce-cart .shop_table tr td strong {
            font-weight: normal !important;
        }


        .woocommerce-cart .cart-collaterals .cart_totals table {
            border: 1px solid #f1f1f1;
            border-radius: 0px !important;
        }

        .woocommerce-cart .cart-collaterals .cart_totals table th,
        .woocommerce-cart .cart-collaterals .cart_totals table td {
            padding: 20px;
        }

        .woocommerce-cart .cart-collaterals .cart_totals .wc-proceed-to-checkout a {
            background-color: #c0a58a;
            border-radius: 0px;
            padding: 20px;
            text-transform: uppercase;
            font-family: 'Quicksand', sans-serif;
            font-weight: normal;
        }

        .woocommerce-cart .woocommerce .shop_table.cart .actions input[type="submit"] {
            background-color: #c0a58a;
            border-radius: 0px;
            padding: 10px 20px;
            text-transform: uppercase;
            font-family: 'Quicksand', sans-serif;
            color: #fff;
            font-weight: normal;
        }

        .woocommerce-cart .woocommerce .shop_table.cart .actions .coupon #coupon_code {
            border-radius: 0px;
            border: 1px solid #f1f1f1;
            min-width: 180px;
            padding: 8px 20px;
        }

        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .woocommerce-cart .woocommerce .shop_table.cart .actions .coupon #coupon_code {
                min-width: 0px;
            }
        }


        /*-------------------------WooCommerce Checkout-------------------------*/


        .woocommerce form.woocommerce-checkout .col-1 h3:after,
        .woocommerce form.woocommerce-checkout .col-2 h3:after,
        .woocommerce form.woocommerce-checkout h3#order_review_heading:after {
            width: 30px;
            height: 2px;
            background-color: #f1f1f1;
            content: "";
            position: absolute;
            left: 0px;
            bottom: -20px;
        }

        .woocommerce form.woocommerce-checkout .col-1 h3,
        .woocommerce form.woocommerce-checkout .col-2 h3,
        .woocommerce form.woocommerce-checkout h3#order_review_heading {
            position: relative;
            margin-bottom: 45px;
            font-weight: normal;
        }

        .woocommerce form.checkout_coupon button[type="submit"],
        .woocommerce form.woocommerce-checkout #order_review .woocommerce-checkout-payment .place-order button[type="submit"] {
            font-weight: normal;
        }


        .woocommerce form.woocommerce-checkout #order_review table tr th,
        .woocommerce form.woocommerce-checkout #order_review table tr td,
        .woocommerce form.woocommerce-checkout #order_review table tr td strong {
            font-weight: normal;
        }

        .woocommerce-checkout .woocommerce .checkout_coupon {
            border-radius: 0px;
            border: 1px solid #f1f1f1;
        }

        .woocommerce-checkout .woocommerce form.login {
            border-radius: 0px;
            border: 1px solid #f1f1f1;
        }

        .woocommerce-checkout .woocommerce .checkout_coupon input[type="submit"],
        .woocommerce-checkout .woocommerce form.login p .button {
            background-color: #c0a58a;
            border-radius: 0px;
            padding: 10px 20px;
            text-transform: uppercase;
            font-family: 'Quicksand', sans-serif;
            color: #fff;
            font-weight: normal;
        }

        .woocommerce-checkout .woocommerce .woocommerce-billing-fields h3,
        .woocommerce-checkout .woocommerce .woocommerce-shipping-fields h3,
        .woocommerce-checkout #order_review_heading {
            font-weight: normal;
            margin-bottom: 25px;
        }

        .woocommerce-checkout #order_review_heading {
            margin-top: 40px;
        }


        .woocommerce-checkout.checkout #customer_details .woocommerce-billing-fields p {
            margin: 0px 0px 20px 0px;
        }

        .woocommerce-checkout.checkout #customer_details .woocommerce-shipping-fields textarea {
            height: 100px;
        }

        .woocommerce-checkout.checkout #order_review .shop_table.woocommerce-checkout-review-order-table {
            border: 1px solid #f1f1f1;
            border-collapse: collapse;
        }

        .woocommerce-checkout.checkout #order_review .shop_table.woocommerce-checkout-review-order-table th,
        .woocommerce-checkout.checkout #order_review .shop_table.woocommerce-checkout-review-order-table td {
            border-color: #f1f1f1;
            padding: 20px;
        }

        .woocommerce-checkout.checkout #order_review .shop_table.woocommerce-checkout-review-order-table thead,
        .woocommerce-checkout.checkout #order_review .shop_table.woocommerce-checkout-review-order-table tfoot {
            background-color: #f9f9f9;
        }

        /*select drop*/
        .select2-container .select2-choice {
            border-color: #f1f1f1;
            color: #7e7e7e;
            border-width: 0px;
            border-bottom-width: 2px;
            font-size: 15px;
            line-height: 19px;
            padding: 10px 20px;
            border-radius: 0px;
        }

        .select2-drop.select2-drop-above {
            border-color: #f1f1f1;
        }

        .select2-drop.select2-drop-above.select2-drop-active {
            border-color: #f1f1f1;
        }

        .select2-drop-active {
            border-color: #f1f1f1;
        }

        .select2-drop {
            color: #7e7e7e !important;
        }

        .select2-results .select2-highlighted {
            color: #2d2d2d !important;
        }


        .woocommerce-checkout.checkout .woocommerce-checkout-payment .about_paypal {
            display: none;
        }

        /*placeorder*/
        .woocommerce-checkout.checkout .woocommerce-checkout-payment #place_order {
            background-color: #c0a58a;
            border-radius: 0px;
            text-transform: uppercase;
            font-family: 'Quicksand', sans-serif;
        }

        .woocommerce-checkout.checkout .woocommerce-checkout-payment .form-row.place-order {
            padding: 30px !important;
        }


        /*payment block*/
        .woocommerce-checkout.checkout .woocommerce-checkout-payment {
            background-color: #2d2d2d !important;
            border-radius: 0px !important;
        }

        .woocommerce-checkout.checkout .woocommerce-checkout-payment ul {
            border-bottom-width: 0px !important;
        }

        .woocommerce-checkout.checkout .woocommerce-checkout-payment .wc_payment_method.payment_method_paypal img {
            display: none;
        }

        .woocommerce-checkout.checkout .woocommerce-checkout-payment .wc_payment_methods {
            padding: 20px 30px 0px 30px !important;
        }

        .woocommerce-checkout.checkout .woocommerce-checkout-payment .wc_payment_methods li {
            padding: 5px 0px;
        }

        .woocommerce-checkout.checkout .woocommerce-checkout-payment .wc_payment_method div {
            background-color: #2d2d2d !important;
            padding: 0px !important;
        }

        .woocommerce-checkout.checkout .woocommerce-checkout-payment .wc_payment_method div:before {
            border-color: #2d2d2d !important;
        }

        .woocommerce-checkout.checkout .woocommerce-checkout-payment .wc_payment_method label {
            color: #fff;
            text-transform: uppercase;
        }


        .woocommerce form .form-row.woocommerce-validated input.input-text {
            border-color: #c0a58a;
        }

        .woocommerce form .form-row.woocommerce-invalid input.input-text {
            border-color: #c0a58a;
        }



        /*-------------------------WooCommerce Account-------------------------*/
        .woocommerce-account .woocommerce>h2 {
            display: none;
        }

        .woocommerce-account .woocommerce .login {
            border-radius: 0px;
            border-color: #f1f1f1;
        }

        .woocommerce-account .woocommerce .login p .woocommerce-Button,
        .woocommerce-account .lost_reset_password p .woocommerce-Button {
            background-color: #c0a58a !important;
            border-radius: 0px;
            text-transform: uppercase;
            font-family: 'Quicksand', sans-serif;
            color: #fff !important;
        }


        /*-------------------------WooCommerce Order Completed-------------------------*/
        .woocommerce-checkout .woocommerce .woocommerce-thankyou-order-details,
        .woocommerce-checkout .woocommerce .wc-bacs-bank-details.order_details.bacs_details {
            margin: 20px 0px;
            padding: 30px;
            background-color: #f9f9f9;
            border: 1px solid #f1f1f1;
        }

        .woocommerce-checkout .woocommerce .wc-bacs-bank-details.order_details.bacs_details {
            margin-bottom: 40px;
        }

        .woocommerce-checkout .woocommerce table.shop_table.order_details {
            border-color: #f1f1f1;
            border-collapse: collapse;
            margin-top: 25px;
        }

        .woocommerce-checkout .woocommerce table.shop_table.order_details thead {
            background-color: #f9f9f9;
        }

        .woocommerce-checkout .woocommerce table.shop_table.order_details tr,
        .woocommerce-checkout .woocommerce table.shop_table.order_details td,
        .woocommerce-checkout .woocommerce table.shop_table.order_details th {
            border-color: #f1f1f1;
            padding: 20px;
        }


        .woocommerce-checkout .woocommerce h2.wc-bacs-bank-details-heading {
            margin-top: 40px;
            margin-bottom: 20px;
        }




        .woocommerce h2.woocommerce-order-details__title:after {
            width: 30px;
            height: 2px;
            background-color: #f1f1f1;
            content: "";
            position: absolute;
            left: 0px;
            bottom: -20px;
        }

        .woocommerce h2.woocommerce-order-details__title {
            position: relative;
            margin-bottom: 45px;
            font-weight: normal;
            margin-top: 40px;
        }

        .woocommerce .woocommerce-table--order-details tr td,
        .woocommerce .woocommerce-table--order-details tr th,
        .woocommerce .woocommerce-table--order-details tr td strong {
            font-weight: normal !important;
        }

        .woocommerce ul.woocommerce-thankyou-order-details li strong {
            font-weight: normal !important;
            color: #7e7e7e;
        }

        .woocommerce ul.woocommerce-thankyou-order-details li {
            color: #2d2d2d;
        }

        /*-------------------------WooCommerce Widgets-------------------------*/
        .nd_options_woocommerce_sidebar .widget h3 {
            font-weight: normal;
            margin-bottom: 20px;
        }

        .nd_options_woocommerce_sidebar .widget {
            margin-bottom: 40px;
        }

        .widget_shopping_cart .woocommerce-mini-cart__buttons {
            margin-top: 15px;
        }

        .widget.woocommerce.widget_layered_nav li {
            padding: 10px;
            border-bottom: 1px solid #f1f1f1;
        }

        .widget.woocommerce.widget_layered_nav li:last-child {
            border-bottom-width: 0px;
        }

        .widget.woocommerce.widget_shopping_cart ul,
        .widget.woocommerce.widget_recent_reviews ul,
        .widget.woocommerce.widget_top_rated_products ul,
        .widget.woocommerce.widget_recently_viewed_products ul,
        .widget.woocommerce.widget_products ul {
            margin: 0px;
            padding: 0px;
        }

        .widget.woocommerce.widget_shopping_cart ul li,
        .widget.woocommerce.widget_recent_reviews ul li,
        .widget.woocommerce.widget_top_rated_products ul li,
        .widget.woocommerce.widget_recently_viewed_products ul li,
        .widget.woocommerce.widget_products ul li {
            margin: 0px;
            padding: 20px 90px;
            position: relative;
        }

        .widget.woocommerce.widget_shopping_cart ul li:last-child {
            padding-bottom: 20px;
        }

        .widget.woocommerce.widget_shopping_cart ul .empty {
            padding: 20px;
            border: 1px solid #f1f1f1;
        }

        .widget.woocommerce.widget_shopping_cart ul li .variation,
        .widget.woocommerce.widget_shopping_cart .total,
        .widget.woocommerce.widget_recent_reviews ul li .reviewer,
        .widget.woocommerce.widget_top_rated_products ul li .amount {
            display: none;
        }

        .widget.woocommerce.widget_shopping_cart ul li .remove {
            right: 0px;
            left: initial;
            top: 40px;
            font-size: 20px;
            color: #c0a58a !important;
        }

        .widget.woocommerce.widget_shopping_cart ul li .remove:hover {
            color: #fff !important;
            background-color: #c0a58a !important;
        }

        .widget.woocommerce.widget_shopping_cart ul li a {
            font-weight: normal;
            color: #2d2d2d !important;
        }

        .widget.woocommerce.widget_shopping_cart .buttons a {
            background-color: #c0a58a;
            border-radius: 0px;
            padding: 10px 20px;
            text-transform: uppercase;
            font-family: 'Quicksand', sans-serif;
            color: #fff;
            font-weight: normal;
        }

        .widget.woocommerce.widget_shopping_cart .buttons a.checkout {
            background-color: #c0a58a;
            float: right;
        }

        .widget.woocommerce.widget_shopping_cart ul li a img,
        .widget.woocommerce.widget_recent_reviews ul li a img,
        .widget.woocommerce.widget_top_rated_products ul li a img,
        .widget.woocommerce.widget_recently_viewed_products ul li a img,
        .widget.woocommerce.widget_products ul li a img {
            position: absolute;
            left: 0px;
            top: 13px;
            width: 70px;
            margin: 0px;
            padding: 0px;
        }

        .widget.woocommerce.widget_recent_reviews ul li,
        .widget.woocommerce.widget_top_rated_products ul li {
            padding-bottom: 30px;
        }

        .widget.woocommerce.widget_product_tag_cloud .tagcloud a {
            padding: 5px 10px;
            border: 1px solid #f1f1f1;
            border-radius: 0px;
            display: inline-block;
            margin: 5px;
            margin-left: 0px;
            font-size: 13px !important;
            line-height: 20px;
        }

        .widget.woocommerce.widget_product_categories ul {
            margin: 0px;
            padding: 0px;
            list-style: none;
        }

        .widget.woocommerce.widget_product_categories>ul>li {
            padding: 10px;
            border-bottom: 1px solid #f1f1f1;
        }

        .widget.woocommerce.widget_product_categories>ul>li:last-child {
            padding-bottom: 0px;
            border-bottom: 0px solid #f1f1f1;
        }

        .widget.woocommerce.widget_product_categories ul li {
            padding: 10px;
        }

        .widget.woocommerce.widget_product_categories ul.sub-menu {
            padding: 10px;
        }

        .widget.woocommerce.widget_product_categories ul.sub-menu:last-child {
            padding-bottom: 0px;
        }

        .widget.woocommerce.widget_products ul li a,
        .widget.woocommerce.widget_top_rated_products ul li a,
        .widget.woocommerce.widget_recent_reviews ul li a,
        .widget.woocommerce.widget_recently_viewed_products ul li a {
            font-weight: normal;
            color: #2d2d2d;
        }

        .widget.woocommerce.widget_products ul li {
            min-height: 54px;
        }

        .widget.woocommerce.widget_top_rated_products ul li,
        .widget.woocommerce.widget_recent_reviews ul li,
        .widget.woocommerce.widget_recently_viewed_products ul li {
            min-height: 44px;
        }

        .widget.woocommerce.widget_price_filter .price_slider_amount .button {
            background-color: #c0a58a;
            border-radius: 0px;
            padding: 10px 20px;
            text-transform: uppercase;
            font-family: 'Quicksand', sans-serif;
            color: #fff;
            font-weight: normal;
        }

        .widget.woocommerce.widget_price_filter .price_slider_amount .price_label {
            font-size: 16px;
        }

        .woocommerce.widget_price_filter .price_slider {
            margin-top: 40px;
            margin-bottom: 20px;
        }

        .woocommerce.widget_price_filter .ui-slider .ui-slider-handle,
        .woocommerce.widget_price_filter .ui-slider .ui-slider-range {
            background-color: #c0a58a;
        }

        .woocommerce.widget_price_filter .price_slider_wrapper .ui-widget-content {
            background-color: #f1f1f1;
            height: 4px;
            border-radius: 0px;
        }

        .widget.woocommerce.widget_price_filter .price_slider_amount {
            margin-top: 30px;
        }

        .widget.woocommerce.widget_layered_nav_filters ul li a:before {
            color: #c0a58a;
        }

        .widget.woocommerce.widget_product_search button[type="submit"] {
            text-transform: uppercase;
            font-size: 14px;
            padding: 11px 22px;
        }

        .widget.woocommerce.widget_product_search input[type="search"]::placeholder {
            color: #7e7e7e;
        }
    </style>
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
    <meta name="generator"
        content="Powered by Slider Revolution 5.4.8.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <style id='wp-fonts-local' type='text/css'>
        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300 900;
            font-display: fallback;
            src: url('wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt%2cwght.woff2') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
        }
    </style>
    <link rel="icon" href="wp-content/uploads/sites/2/2019/01/ristorante-thumbnail.jpg" sizes="32x32" />
    <link rel="icon" href="wp-content/uploads/sites/2/2019/01/ristorante-thumbnail.jpg" sizes="192x192" />
    <link rel="apple-touch-icon" href="wp-content/uploads/sites/2/2019/01/ristorante-thumbnail.jpg" />
    <meta name="msapplication-TileImage"
        content="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/ristorante-thumbnail.jpg" />
    <script type="text/javascript">function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c); var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) { f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e) }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) { var u = (e.c.width(), jQuery(window).height()); if (void 0 != e.fullScreenOffsetContainer) { var c = e.fullScreenOffsetContainer.split(","); if (c) jQuery.each(c, function (e, i) { u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0)) } f = u } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight); e.c.closest(".rev_slider_wrapper").css({ height: f })
            } catch (d) { console.log("Failure at Presize of Slider:" + d) }
        };</script>
    <style type="text/css" id="wp-custom-css">
        /*HEADER BTN*/
        .book_a_table_btn>a {
            border: 1px solid #fff;
            border-radius: 4px;
            font-size: 12px !important;
            padding: 10px !important;
            padding: 7px 15px !important;
            margin-left: 10px;
        }

        .book_a_table_btn ul {
            padding-top: 15px !important;
        }

        /*FOOTER SOCIAL ALIGN*/
        .footer_social_column .wpb_wrapper {
            text-align: center;
        }

        .footer_social_column .wpb_wrapper a {
            float: initial;
        }

        /*TOP HEADER*/
        .top_header_text a {
            letter-spacing: 2px;
        }

        /*NAVIGATION*/
        #nd_options_header_5 .nd_options_menu_component .menu>li.current-menu-item>a {
            border-bottom: 1px solid #fff;
            padding: 0px;
            padding-bottom: 5px
        }

        #nd_options_header_5 .nd_options_menu_component .menu>li.current-menu-item {
            padding: 0px 15px;
        }

        @media only screen and (min-width: 1199px) and (max-width: 1280px) {
            .theme_menu_label {
                display: none !important;
            }
        }

        /*HEADER RESOLUTION*/
        .menu_site .vc_col-sm-3 {
            width: 14%;
        }

        .menu_site .vc_col-sm-6 {
            width: 72%;
        }

        .menu_responsive .vc_col-sm-6 {
            width: 50%;
        }

        /*MENU SIDEBAR HEADER*/
        #nd_options_header_5_mobile .nd_options_open_sidebar_contentt {
            border-left-width: 0px;
        }

        #nd_options_header_5_mobile ul li>a {
            color: #fff;
            font-weight: normal;
            letter-spacing: 0px;
        }

        #nd_options_header_5_mobile ul li a:first-letter {
            text-transform: uppercase !important;
        }

        #nd_options_header_5_mobile ul li {
            margin-bottom: 30px;
        }

        #nd_options_header_5_mobile ul li .sub-menu a {
            font-size: 14px;
            line-height: 35px;
        }

        #nd_options_header_5_mobile ul li .sub-menu li {
            margin-bottom: 0px !important;
        }

        #nd_options_header_5_mobile ul li .sub-menu li a {
            font-weight: normal;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /*SIDEBAR BLOG*/
        .nd_options_sidebar .widget h3,
        .nd_options_sidebar .widget.widget_calendar table caption {
            font-weight: normal !important;
        }
    </style>
    <style type="text/css" data-type="vc_custom-css">
        /* MENU FOR HOME */
        #nd_options_header_5 .vc_col-sm-6 .vc_column-inner {
            padding-left: 20px;
            padding-right: 20px;
        }

        #nd_options_header_5 .vc_col-sm-3 .vc_column-inner {
            padding-left: 70px;
            padding-right: 70px;
        }


        /* UNDER SLIDE */
        .nd_options_home_1_under_slide_1 b,
        .nd_options_home_1_under_slide_2 b {
            font-weight: normal;
            letter-spacing: 2px;
            color: #2d2d2d;
        }

        @media only screen and (min-width: 320px) and (max-width: 1199px) {

            .nd_options_home_1_under_slide_1,
            .nd_options_home_1_under_slide_2 {
                text-align: center !important;
            }
        }


        /* MENU LIST */
        .nd_options_list_restaurant h4 strong {
            font-weight: normal;
        }

        .nd_options_list_restaurant .nd_options_border_radius_15 {
            border-radius: 3px;
        }


        /* SERVICE */
        .home_calltoaction_service h3,
        .home_calltoaction_service p {
            font-weight: lighter;
        }

        .underline_phone b {
            border-bottom: 1px solid #fff;
            margin-left: 10px;
            font-weight: lighter;
        }

        @media only screen and (min-width: 320px) and (max-width: 1199px) {
            .home_calltoaction_service img {
                display: none;
            }

            .home_calltoaction_service>div {
                padding-left: 0px !important;
            }

            .home_calltoaction_service_button {
                float: left;
                padding: 5px 10px !important;
                font-size: 14px !important;
            }
        }


        /* BADGE TIMING */
        .badge_timing div {
            padding: 5px;
        }


        /* POST GRID IMAGE */
        .home_postgrid .nd_options_section.nd_options_text_align_center div,
        .home_postgrid .nd_options_section.nd_options_text_align_center h5,
        .home_postgrid .nd_options_section.nd_options_text_align_center h2,
        .home_postgrid .nd_options_section.nd_options_text_align_center p {
            display: none;
        }


        /* BANNER BUTTON */
        .banner_button {
            border-bottom: 1px solid #fff;
            padding-bottom: 5px;
        }


        /* SLIDE AND HEADER */
        @media only screen and (min-width: 320px) and (max-width: 1400px) {
            #rev_slider_1_1_wrapper {
                padding: 0px 0px !important;
                box-sizing: border-box;
            }

            #nd_options_header_5 .vc_col-sm-3 .vc_column-inner {
                padding-left: 25px;
                padding-right: 25px;
            }
        }
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1547042678588 {
            margin-top: 70px !important;
            background-position: 0 0 !important;
            background-repeat: no-repeat !important;
        }

        .vc_custom_1551375273324 {
            margin-top: 70px !important;
            padding-top: 80px !important;
            padding-bottom: 80px !important;
        }

        .vc_custom_1547042811304 {
            margin-top: 80px !important;
        }

        .vc_custom_1540821878031 {
            margin-top: 30px !important;
        }

        .vc_custom_1547042338956 {
            margin-top: 20px !important;
        }

        .vc_custom_1548245096415 {
            margin-top: 70px !important;
            padding-top: 100px !important;
            padding-bottom: 100px !important;
        }

        .vc_custom_1547042844926 {
            margin-top: 80px !important;
        }

        .vc_custom_1493221721110 {
            margin-top: 15px !important;
        }

        .vc_custom_1504098002258 {
            margin-top: 25px !important;
            margin-bottom: 70px !important;
        }

        .vc_custom_1548404844887 {
            padding-top: 10px !important;
            padding-right: 60px !important;
            padding-bottom: 10px !important;
            padding-left: 60px !important;
        }

        .vc_custom_1548405352794 {
            padding-top: 70px !important;
            padding-right: 70px !important;
            padding-bottom: 70px !important;
            padding-left: 70px !important;
        }

        .vc_custom_1548243176309 {
            background-image: url(wp-content/uploads/sites/2/2019/01/img-131d52.jpg?id=582) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1548408088689 {
            margin-top: -230px !important;
            padding-right: 80px !important;
            padding-left: 0px !important;
        }

        .vc_custom_1548406524826 {
            margin-right: 15px !important;
        }

        .vc_custom_1548406390389 {
            margin-right: 15px !important;
            margin-left: 15px !important;
            background-image: url(http://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/img-01.jpg?id=587) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1548406395217 {
            margin-left: 15px !important;
            background-image: url(http://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/img-02.jpg?id=588) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1548236172125 {
            background-image: url(http://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/bg_02.jpg?id=526) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1548406164717 {
            padding-right: 65px !important;
            padding-left: 65px !important;
            background-image: url(http://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/bg_01.jpg?id=525) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1491985274415 {
            padding-right: 30px !important;
            padding-left: 30px !important;
        }

        .vc_custom_1548239711672 {
            padding-top: 40px !important;
            padding-right: 40px !important;
            padding-bottom: 40px !important;
            padding-left: 40px !important;
            background-image: url(http://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/img-11.jpg?id=565) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }
    </style><noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
</head>

<body id="start_nicdark_framework"
    class="home page-template-default page page-id-8 theme-ristorante nd_options_customizer_fonts nd_options_customizer_forms woocommerce-no-js wpb-js-composer js-comp-ver-5.6 vc_responsive">
    <?php include('../../message.php') ?>
    
    <!--START theme-->
    <div class="nicdark_site nicdark_bg_white nicdark_front_page ">



        <!-- <div
            class="nd_tds_display_none_responsive nd_tds_right_30 nd_tds_bottom_30 nd_tds_position_fixed nd_tds_z_index_99">

            <span style="top:1px; left:16px; font-size:8px; line-height:10px; border-radius:0px; padding:3px 5px;"
                class="nd_tds_position_absolute nd_tds_color_fff_important nd_tds_background_color_3">NEW</span>

            <a href="https://1.envato.market/PZ4ee" target="_blank"
                class="nd_tds_text_align_center nd_tds_width_65 nd_tds_float_left nd_tds_height_65 nd_tds_display_table nd_tds_font_size_25 nd_tds_line_height_25 nd_tds_color_fff_important nd_tds_border_radius_100_percentage nd_tds_background_color_1 nd_tds_box_shadow_0_0_20_000_015 nd_options_second_font">
                <span
                    class="nd_tds_position_absolute nd_tds_top_22 nd_tds_left_13 nd_tds_font_size_8 nd_tds_line_height_8">$</span>
                <span style="padding-top:7px;"
                    class="nd_tds_display_table_cell nd_tds_vertical_align_middle nd_tds_padding_left_5">54</span>
            </a>
        </div> -->

        <!-- <div style="right:80px;"
            class="nd_tds_display_none_responsive nd_tds_bottom_30 nd_tds_position_fixed nd_tds_z_index_99">
            <a target="_blank"
                class="nd_tds_border_radius_100_percentage nd_tds_width_35 nd_tds_height_35 nd_tds_float_left nd_tds_background_color_2 nd_tds_box_shadow_0_0_20_000_015"
                href="https://1.envato.market/PZ4ee">
                <img class="nd_tds_position_absolute nd_tds_left_10 nd_tds_top_10" width="15px"
                    src="wp-content/plugins/nd-theme-demos-switcher/addons/fixed-img/img/envato.png">
            </a>
        </div> -->



        <!--START header 5-->
        <div id="nd_options_header_5" class="nd_options_section nd_options_display_none_all_responsive">

            <!--start nd_options_container-->
            <div class="nd_options_container nd_options_clearfix nd_options_position_relative nd_options_z_index_999">

                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                    class="vc_row wpb_row vc_row-fluid vc_custom_1548347990410 vc_row-no-padding">
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <div style="margin:;"
                                            class=" top_header_text nd_options_display_table nd_options_float_left">


                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a href="#"><img decoding="async" alt="" width="17px"
                                                        class="nd_options_margin_right_10 nd_options_float_left"
                                                        src="wp-content/uploads/sites/2/2019/01/languages.png"></a>
                                            </div>




                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a style="color:;" class="nd_options_margin_right_20 nd_options__font "
                                                    href="#">LANGUAGES</a>
                                            </div>


                                        </div>



                                        <div style="margin:;" class="  nd_options_display_table nd_options_float_left">



                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a style="color:;" class="nd_options_margin_right_20 nd_options__font "
                                                    href="#">EN</a>
                                            </div>


                                        </div>



                                        <div style="margin:;" class="  nd_options_display_table nd_options_float_left">



                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a style="color:;" class="nd_options_margin_right_20 nd_options__font "
                                                    href="#">ES</a>
                                            </div>


                                        </div>



                                        <div style="margin:;" class="  nd_options_display_table nd_options_float_left">



                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a style="color:;" class="nd_options_margin_right_20 nd_options__font "
                                                    href="#">IT</a>
                                            </div>


                                        </div>



                                        <div style="margin:;"
                                            class=" top_header_text nd_options_display_table nd_options_float_left">


                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a href="#"><img decoding="async" alt="" width="17px"
                                                        class="nd_options_margin_right_10 nd_options_float_left"
                                                        src="wp-content/uploads/sites/2/2019/01/instagram.png"></a>
                                            </div>




                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a style="color:;" class="nd_options_margin_right_20 nd_options__font "
                                                    href="#">INSTAGRAM</a>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <!-- User Profile Dropdown -->
                                        <style>
                                            .user-dropdown {
                                                position: relative;
                                                display: inline-block;
                                            }

                                            .user-dropdown-toggle {
                                                cursor: pointer;
                                                display: flex;
                                                align-items: center;
                                                border: none;
                                                background: none;
                                                padding: 0;
                                            }

                                            .user-dropdown-menu {
                                                display: none;
                                                position: absolute;
                                                right: 0;
                                                top: 120%;
                                                min-width: 180px;
                                                background: #fff;
                                                border-radius: 8px;
                                                box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
                                                z-index: 1000;
                                                opacity: 0;
                                                transform: translateY(-10px) scale(0.98);
                                                transition: opacity 0.25s cubic-bezier(.4, 0, .2, 1), transform 0.25s cubic-bezier(.4, 0, .2, 1);
                                            }

                                            .user-dropdown.open .user-dropdown-menu {
                                                display: block;
                                                opacity: 1;
                                                transform: translateY(0) scale(1);
                                            }

                                            .user-dropdown-menu a {
                                                display: block;
                                                padding: 12px 20px;
                                                color: #2d2d2d;
                                                text-decoration: none;
                                                font-family: 'Quicksand', sans-serif;
                                                font-size: 15px;
                                                transition: background 0.2s;
                                            }

                                            .user-dropdown-menu a:hover {
                                                background: #f5f5f5;
                                            }
                                        </style>
                                        <div style="margin:;"
                                            class="top_header_text nd_options_display_table nd_options_float_right">
                                            <div class="user-dropdown" id="userDropdown">
                                                <button class="user-dropdown-toggle" id="userDropdownBtn" type="button">
                                                    <img decoding="async" alt="" width="20px"
                                                        class="nd_options_margin_left_20 nd_options_float_left"
                                                        src="wp-content/uploads/sites/2/2019/05/01.png">
                                                    <span
                                                        style="margin-left:10px; font-family: 'Quicksand', sans-serif; color:#000;">
                                                        <?php
                                                        $user_id = $_SESSION['user_session']['user_id'];
                                                        $query = "SELECT first_name FROM users WHERE role='user' AND id='$user_id' LIMIT 1";
                                                        $query_run = mysqli_query($con, $query);
                                                        if ($query_run && mysqli_num_rows($query_run) > 0) {
                                                            $user = mysqli_fetch_assoc($query_run);
                                                            echo htmlspecialchars($user['first_name']);
                                                        } else {
                                                            echo "No User";
                                                        }
                                                        ?>
                                                    </span>
                                                    <svg style="margin-left:8px;" width="16" height="16" fill="#fff"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M4.646 6.646a.5.5 0 0 1 .708 0L8 9.293l2.646-2.647a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z" />
                                                    </svg>
                                                </button>
                                                <div class="user-dropdown-menu" id="userDropdownMenu">
                                                    <a href="profile/profile.php">Profile</a>
                                                    <a href="order-history\order-history.php">My Orders</a>
                                                    <a href="order-history\booking-history.php">My Bookings</a>
                                                    <!-- <form action="../php/code.php"> -->
                                                    <a href="../php/logout.php">Logout</a>
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            // Dropdown open/close with animation
                                            document.addEventListener('DOMContentLoaded', function () {
                                                var dropdown = document.getElementById('userDropdown');
                                                var btn = document.getElementById('userDropdownBtn');
                                                var menu = document.getElementById('userDropdownMenu');

                                                btn.addEventListener('click', function (e) {
                                                    e.stopPropagation();
                                                    dropdown.classList.toggle('open');
                                                });

                                                // Close dropdown when clicking outside
                                                document.addEventListener('click', function (e) {
                                                    if (!dropdown.contains(e.target)) {
                                                        dropdown.classList.remove('open');
                                                    }
                                                });
                                            });
                                        </script>
                                        <div style="margin:;"
                                            class=" top_header_text nd_options_display_table nd_options_float_right">


                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a href="#"><img decoding="async" alt="" width="20px"
                                                        class="nd_options_margin_left_20 nd_options_float_left"
                                                        src="wp-content/uploads/sites/2/2019/01/food-delivery.png"></a>
                                            </div>




                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a style="color:;" class="nd_options_margin_left_10 nd_options__font "
                                                    href="./delivery/index.php">FOOD DELIVERY</a>
                                            </div>


                                        </div>



                                        <div style="margin:;"
                                            class=" top_header_text nd_options_display_table nd_options_float_right">


                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a href="#"><img decoding="async" alt="" width="20px"
                                                        class="nd_options_margin_left_20 nd_options_float_left"
                                                        src="wp-content/uploads/sites/2/2019/01/happy-hour.png"></a>
                                            </div>




                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a style="color:;" class="nd_options_margin_left_10 nd_options__font "
                                                    href="#">HAPPY HOUR</a>
                                            </div>


                                        </div>



                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                    class="vc_row wpb_row vc_row-fluid menu_site vc_custom_1548348009140 vc_row-no-padding vc_row-o-content-middle vc_row-flex">
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div style="text-align:left;" class="nd_options_section">
                                    <img decoding="async" alt="" style="width:120px;"
                                        class=" nd_options_margin_0 nd_options_padding_0 "
                                        src="wp-content/uploads/sites/2/2019/01/logo.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div
                                    class="  nd_options_menu_component nd_options_section nd_options_menu_component_507">
                                    <div class="menu-menu-1-container">
                                        <ul id="menu-menu-1" class="menu">
                                            <li id="menu-item-837"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-837">
                                                <a href="index.php" aria-current="page">HOME</a>
                                                <!-- <ul class="sub-menu">
                                                    <li id="menu-item-838"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item menu-item-838">
                                                        <a href="index.html" aria-current="page">Home 1</a></li>
                                                    <li id="menu-item-836"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-836">
                                                        <a href="home-2/index.html">Home 2</a></li>
                                                    <li id="menu-item-835"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-835">
                                                        <a href="home-3/index.html">Home 3</a></li>
                                                    <li id="menu-item-834"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-834">
                                                        <a href="home-4/index.html">Home 4</a></li>
                                                    <li id="menu-item-833"
                                                        class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-833">
                                                        <a href="home-5/index.html">Home 5</a></li>
                                                    <li id="menu-item-832"
                                                        class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-832">
                                                        <a href="home-6/index.html">Home 6</a></li>
                                                </ul> -->
                                            </li>
                                            <li id="menu-item-719"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-719">
                                                <a href="about-us-1/index.php">ABOUT US</a>
                                                <!-- <ul class="sub-menu">
                                                    <li id="menu-item-1083"
                                                        class="nd_options_best_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1083">
                                                        <a href="about-us-1/index.html">About Us 1</a></li>
                                                    <li id="menu-item-1081"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1081">
                                                        <a href="about-us-2/index.html">About Us 2</a></li>
                                                    <li id="menu-item-1095"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1095">
                                                        <a href="about-us-3/index.html">About Us 3</a></li>
                                                </ul> -->
                                            </li>
                                            <li id="menu-item-1022"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1022">
                                                <a href="#">PAGES</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-1313"
                                                        class="nd_options_hot_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1313">
                                                        <a href="book-a-table/index.php">Book a Table</a>
                                                    </li>
                                                    <li id="menu-item-1187"
                                                        class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1187">
                                                        <a href="delivery/index.php">Delivery</a>
                                                    </li>
                                                    <li id="menu-item-1024"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1024">
                                                        <a href="services/index.php">Services</a>
                                                        <!-- <ul class="sub-menu">
                                                            <li id="menu-item-1240"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1240">
                                                                <a href="services/index.html">Services 1</a></li>
                                                            <li id="menu-item-720"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-720">
                                                                <a href="services-2/index.html">Services 2</a></li>
                                                        </ul> -->
                                                    </li>
                                                    <!-- <li id="menu-item-1035"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1035">
                                                        <a href="testimonials/index.html">Testimonials</a>
                                                    </li> -->
                                                    <li id="menu-item-1480"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1480">
                                                        <a href="menu-1/index.php">Menu</a>
                                                        <!-- <ul class="sub-menu">
                                                            <li id="menu-item-1481"
                                                                class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1481">
                                                                <a href="menu-1/index.html">Menu 1</a></li>
                                                            <li id="menu-item-1502"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1502">
                                                                <a href="menu-3/index.html">Menu 2</a></li>
                                                            <li id="menu-item-1523"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1523">
                                                                <a href="menu-4/index.html">Menu 3</a></li>
                                                            <li id="menu-item-1552"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1552">
                                                                <a href="menu-5/index.html">Menu 4</a></li>
                                                            <li id="menu-item-1479"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1479">
                                                                <a href="menu/index.html">Menu 5</a></li>
                                                        </ul> -->
                                                    </li>
                                                    <!-- <li id="menu-item-1049"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1049">
                                                        <a href="promotion/index.php">Promotion</a>
                                                    </li> -->
                                                    <!-- <li id="menu-item-1059"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1059">
                                                        <a href="faq/index.html">Faq</a>
                                                    </li> -->
                                                    <li id="menu-item-1068"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1068">
                                                        <a href="contact-1/index.php">Contact</a>
                                                        <!-- <ul class="sub-menu">
                                                            <li id="menu-item-1067"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1067">
                                                                <a href="contact-1/index.html">Contact 1</a></li>
                                                            <li id="menu-item-1066"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1066">
                                                                <a href="contact-2/index.html">Contact 2</a></li>
                                                        </ul> -->
                                                    </li>
                                                    <li id="menu-item-1082"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1082">
                                                        <a href="about-us-1/index.php">About Us</a>
                                                        <!-- <ul class="sub-menu">
                                                            <li id="menu-item-1084"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1084">
                                                                <a href="about-us-1/index.html">About Us 1</a></li>
                                                            <li id="menu-item-1085"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1085">
                                                                <a href="about-us-2/index.html">About Us 2</a></li>
                                                            <li id="menu-item-1094"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1094">
                                                                <a href="about-us-3/index.html">About Us 3</a></li>
                                                        </ul> -->
                                                    </li>
                                                    <li id="menu-item-1296"
                                                        class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1296">
                                                        <a href="gallery/index.php">Gallery</a>
                                                    </li>
                                                    <li id="menu-item-1111"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1111">
                                                        <a target="_blank" rel="noopener"
                                                            href="coming-soon/index.php">Coming Soon</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-1474"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1474">
                                                <a href="menu-1/index.php">MENU</a>
                                                <ul class="sub-menu">
                                                    <!-- <li id="menu-item-1472"
                                                        class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1472">
                                                        <a href="menu-1/index.html">Menu 1</a>
                                                    </li> -->

                                                    <!-- <li id="menu-item-1501"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1501">
                                                        <a href="menu-3/index.html">Menu 2</a></li>
                                                    <li id="menu-item-1524"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1524">
                                                        <a href="menu-4/index.html">Menu 3</a></li>
                                                    <li id="menu-item-1551"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1551">
                                                        <a href="menu-5/index.html">Menu 4</a></li>
                                                    <li id="menu-item-1473"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1473">
                                                        <a href="menu/index.html">Menu 5</a></li> -->
                                                </ul>
                                            </li>
                                            <li id="menu-item-1225"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1225">
                                                <a href="delivery/index.php">SHOP</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-1188"
                                                        class="nd_options_hot_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1188">
                                                        <a href="delivery/index.php">Archive</a>
                                                    </li>
                                                    <li id="menu-item-1115"
                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-1115">
                                                        <a href="product/mixed-salad/index.html">Single Product</a>
                                                    </li>
                                                    <li id="menu-item-1116"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1116">
                                                        <a href="cart/index.php">Cart</a>
                                                    </li>
                                                    <li id="menu-item-1117"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1117">
                                                        <a href="checkout/index.php">Checkout</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- <li id="menu-item-801"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-801">
                                                <a href="news/index.html">NEWS</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-1198"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1198">
                                                        <a href="news/index.html">Archive</a>
                                                    </li>
                                                    <li id="menu-item-1199"
                                                        class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children menu-item-1199">
                                                        <a href="inauguration/index.html">Single Post</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-1200"
                                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1200">
                                                                <a href="inauguration/index.html">Right Sidebar</a>
                                                            </li>
                                                            <li id="menu-item-1201"
                                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1201">
                                                                <a href="fresh-ingredients/index.html">Left Sidebar</a>
                                                            </li>
                                                            <li id="menu-item-1203"
                                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1203">
                                                                <a href="menu-update/index.html">Full Width</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li> -->
                                            <li id="menu-item-802"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-802">
                                                <a href="contact-1/index.php">CONTACT</a>
                                                <!-- <ul class="sub-menu">
                                                    <li id="menu-item-1070"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1070">
                                                        <a href="contact-1/index.html">Contact 1</a>
                                                    </li>
                                                    <li id="menu-item-1069"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1069">
                                                        <a href="contact-2/index.html">Contact 2</a></li>
                                                </ul> -->
                                            </li>
                                            <li id="menu-item-1174"
                                                class="book_a_table_btn menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1174">
                                                <a href="book-a-table/index.php">BOOK A TABLE</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-1430"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1430">
                                                        <a href="book-a-table/index.php">Custom Plugin</a>
                                                    </li>
                                                    <li id="menu-item-1429"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1429">
                                                        <a href="open-table/index.php">Open Table</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <style>
                                    .nd_options_menu_component_507 ul.menu {
                                        margin: 0px;
                                        padding: 0px;
                                        list-style: none;
                                        display: inline-block;
                                    }

                                    .nd_options_menu_component_507>div {
                                        float: left;
                                        width: 100%;
                                        text-align: center;
                                    }

                                    .nd_options_menu_component_507 ul.menu>li {
                                        margin: 0px;
                                        padding: 0px;
                                        display: inline-block;
                                    }

                                    .nd_options_menu_component_507 ul.menu>li a {
                                        color: #ffffff;
                                        font-weight: normal;
                                        font-size: 14px;
                                        line-height: 14px;
                                        letter-spacing: 2px;
                                        padding: 15px;
                                        display: inline-block;
                                        font-family: Quicksand;
                                        text-decoration: none;
                                    }

                                    #nd_options_header_5 .vc_row[data-vc-full-width] {
                                        overflow: visible;
                                    }


                                    /*dropdown*/
                                    .nd_options_menu_component_507 div>ul li:hover>ul.sub-menu {
                                        display: block;
                                    }

                                    .nd_options_menu_component_507 div>ul li>ul.sub-menu {
                                        margin-left: 0px;
                                        padding-top: 0px;
                                        width: 195px;
                                        z-index: 999;
                                        position: absolute;
                                        margin: 0px;
                                        padding: 0px;
                                        list-style: none;
                                        display: none;
                                    }

                                    .nd_options_menu_component_507 div>ul li>ul.sub-menu>li {
                                        padding: 15px 25px;
                                        border-bottom: 1px solid #f1f1f1;
                                        text-align: left;
                                        background-color: #fff;
                                        position: relative;
                                        box-shadow: 0px 2px 5px #f1f1f1;
                                        float: left;
                                        width: 100%;
                                        box-sizing: border-box;
                                    }

                                    .nd_options_menu_component_507 div>ul li>ul.sub-menu>li:hover {
                                        background-color: #f9f9f9;
                                    }

                                    .nd_options_menu_component_507 div>ul li>ul.sub-menu>li:last-child {
                                        border-bottom: 0px solid #000;
                                    }

                                    .nd_options_menu_component_507 div>ul li>ul.sub-menu li a {
                                        font-size: 14px;
                                        float: left;
                                        width: 100%;
                                        margin: 0px;
                                        padding: 0px;
                                        font-weight: normal;
                                        letter-spacing: 1px;
                                        color: #7e7e7e;
                                    }

                                    .nd_options_menu_component_507 div>ul li>ul.sub-menu li>ul.sub-menu {
                                        margin-left: 165px;
                                        top: 0;
                                        padding-top: 0;
                                        padding-left: 25px;
                                    }


                                    /*arrow for item has children*/
                                    .nd_options_menu_component_507 div>ul li>ul.sub-menu li.menu-item-has-children>a:after {
                                        content: "";
                                        float: right;
                                        border-style: solid;
                                        border-width: 5px 0 5px 5px;
                                        border-color: transparent transparent transparent #7e7e7e;
                                        margin-top: 1px;
                                    }
                                </style>

                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">

                                <a style="margin:; border: px solid ; border-radius:px; background-color:; padding:; "
                                    rel="" href="contact-1/index.php"
                                    class="nicdark_display_inline_block nd_options_float_right  "><img decoding="async"
                                        class="nd_options_float_left" alt="" width="25"
                                        src="wp-content/uploads/sites/2/2019/01/ico-07.png"></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <style>
                    .vc_custom_1548347990410 {
                        padding-top: 20px !important;
                        padding-right: 40px !important;
                        padding-bottom: 20px !important;
                        padding-left: 40px !important;
                    }

                    .vc_custom_1548348009140 {
                        margin-bottom: -90px !important;
                        padding-top: 20px !important;
                        padding-right: 40px !important;
                        padding-bottom: 20px !important;
                        padding-left: 40px !important;
                    }

                    /*removed unwanted code */
                    /* " el_class=" menu_site"][vc_column width=" 1/4"][nd_options_image nd_options_align=" left" nd_options_image=" 535" nd_options_width=" 120px"][/vc_column][vc_column width=" 1/2"][nd_options_menu nd_options_menu_weight=" normal" nd_options_menu_family=" nd_options_first_font" nd_options_menu_align=" center" nd_options_menu_color=" #ffffff" nd_options_menu_font_size=" 14" nd_options_menu_letter_spacing=" 2" nd_options_menu_padding=" 15"][/vc_column][vc_column width=" 1/4"][nd_options_button nd_options_layout=" layout-2" nd_options_align=" right" nd_options_image=" 612" nd_options_image_width=" 25" nd_options_link=" url:http%3A%2F%2Fwww.nicdark-themes.com%2Fthemes%2Frestaurant%2Fwp%2Fdemo%2Frestaurant%2Fcontact-1%2F|||"][/vc_column][/vc_row]</p> 
                    ;*/
                    /* } */
                </style>
            </div>
            <!--end container-->

        </div>
        <!--END header 5-->




        <!--START header 5-->
        <div id="nd_options_header_5_mobile"
            class="nd_options_section nd_options_display_none nd_options_display_block_responsive">

            <!--start nd_options_container-->
            <div class="nd_options_container nd_options_clearfix">

                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                    class="vc_row wpb_row vc_row-fluid menu_responsive vc_custom_1548346342274 vc_row-no-padding vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div style="text-align:left;" class="nd_options_section">
                                    <img decoding="async" alt="" style="width:120px;"
                                        class=" nd_options_margin_0 nd_options_padding_0 "
                                        src="wp-content/uploads/sites/2/2019/01/logo-dark.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">


                                <!--START js-->
                                <script type="text/javascript">
                                    //<![CDATA[

                                    jQuery(document).ready(function () {


                                        //START
                                        jQuery(function ($) {

                                            //OPEN sidebar content ( navigation 2 )
                                            $(".nd_options_open_sidebar_514").on("click", function (event) {

                                                //add rule to main container only if the component is in header
                                                if ($("#nd_options_header_5 .nd_options_open_sidebar_content_514, #nd_options_header_5_mobile .nd_options_open_sidebar_content_514").length) {
                                                    $(".nicdark_site > .nd_options_container").css({ "position": "relative", "z-index": "0" });
                                                }

                                                //open sidebar
                                                $(".nd_options_open_sidebar_content_514").css({ "right": "0px", });

                                            });

                                            //CLOSE sidebar content ( navigation 2 )
                                            $(".nd_options_close_sidebar_514").on("click", function (event) {

                                                $(".nd_options_open_sidebar_content_514").css({ "right": "-300px" });

                                                //add rule to main container only if the component is in header
                                                if ($("#nd_options_header_5 .nd_options_open_sidebar_content_514, #nd_options_header_5_mobile .nd_options_open_sidebar_content_514").length) {

                                                    function nd_options_remove_style() {
                                                        $(".nicdark_site > .nd_options_container").css({ "position": "", "z-index": "" });
                                                    }
                                                    setTimeout(nd_options_remove_style, 1000);

                                                }

                                            });


                                        });
                                        //END

                                    });

                                    //]]>
                                </script>
                                <!--END js-->



                                <div style="text-align:right;" class="nd_options_section">
                                    <img decoding="async" alt="" style="width:25px;"
                                        class=" nd_options_cursor_pointer nd_options_open_sidebar_514 nd_options_margin_0 nd_options_padding_0 "
                                        src="wp-content/uploads/sites/2/2019/01/menu-grey.png">
                                </div>


                                <!--START sidebar-->
                                <div style="background-color:#2d2d2d; width:300px; right:-300px;"
                                    class="nd_options_open_sidebar_contentt nd_options_open_sidebar_content_514 nd_options_box_sizing_border_box nd_options_overflow_hidden nd_options_overflow_y_auto nd_options_transition_all_08_ease nd_options_height_100_percentage nd_options_position_fixed nd_options_top_0 nd_options_z_index_999">

                                    <img decoding="async" style="right:20px; top:20px;" alt="" width="20"
                                        class="nd_options_close_sidebar_514 nd_options_cursor_pointer nd_options_z_index_9 nd_options_position_absolute"
                                        src="wp-content/plugins/nd-shortcodes/addons/customizer/header/header-2/img/icon-close-white.svg">

                                    <div class="nd_options_section">
                                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1542895585002">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_wp_custommenu wpb_content_element">
                                                            <div class="widget widget_nav_menu">
                                                                <div class="menu-menu-1-container">
                                                                    <ul id="menu-menu-2" class="menu">
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-837">
                                                                            <a href="index.php"
                                                                                aria-current="page">HOME</a>
                                                                            <!-- <ul class="sub-menu">
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item menu-item-838">
                                                                                    <a href="index.html"
                                                                                        aria-current="page">Home 1</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-836">
                                                                                    <a href="home-2/index.html">Home
                                                                                        2</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-835">
                                                                                    <a href="home-3/index.html">Home
                                                                                        3</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-834">
                                                                                    <a href="home-4/index.html">Home
                                                                                        4</a>
                                                                                </li>
                                                                                <li
                                                                                    class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-833">
                                                                                    <a href="home-5/index.html">Home
                                                                                        5</a>
                                                                                </li>
                                                                                <li
                                                                                    class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-832">
                                                                                    <a href="home-6/index.html">Home
                                                                                        6</a>
                                                                                </li>
                                                                            </ul> -->
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-719">
                                                                            <a href="about-us-1/index.php">ABOUT US</a>
                                                                            <!-- <ul class="sub-menu">
                                                                                <li
                                                                                    class="nd_options_best_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1083">
                                                                                    <a href="about-us-1/index.html">About
                                                                                        Us 1</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1081">
                                                                                    <a href="about-us-2/index.html">About
                                                                                        Us 2</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1095">
                                                                                    <a href="about-us-3/index.html">About
                                                                                        Us 3</a>
                                                                                </li>
                                                                            </ul> -->
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1022">
                                                                            <a href="#">PAGES</a>
                                                                            <ul class="sub-menu">
                                                                                <li
                                                                                    class="nd_options_hot_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1313">
                                                                                    <a href="book-a-table/index.php">Book
                                                                                        a Table</a>
                                                                                </li>
                                                                                <li
                                                                                    class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1187">
                                                                                    <a
                                                                                        href="delivery/index.php">Delivery</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1024">
                                                                                    <a
                                                                                        href="services/index.php">Services</a>
                                                                                    <!-- <ul class="sub-menu">
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1240">
                                                                                            <a
                                                                                                href="services/index.html">Services
                                                                                                1</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-720">
                                                                                            <a
                                                                                                href="services-2/index.html">Services
                                                                                                2</a>
                                                                                        </li>
                                                                                    </ul> -->
                                                                                </li>
                                                                                <!-- <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1035">
                                                                                    <a
                                                                                        href="testimonials/index.html">Testimonials</a>
                                                                                </li> -->
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1480">
                                                                                    <a href="menu-1/index.php">Menu</a>
                                                                                    <!-- <ul class="sub-menu">
                                                                                        <li
                                                                                            class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1481">
                                                                                            <a href="menu-1/index.html">Menu
                                                                                                1</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1502">
                                                                                            <a href="menu-3/index.html">Menu
                                                                                                2</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1523">
                                                                                            <a href="menu-4/index.html">Menu
                                                                                                3</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1552">
                                                                                            <a href="menu-5/index.html">Menu
                                                                                                4</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1479">
                                                                                            <a href="menu/index.html">Menu
                                                                                                5</a>
                                                                                        </li>
                                                                                    </ul> -->
                                                                                </li>
                                                                                <!-- <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1049">
                                                                                    <a
                                                                                        href="promotion/index.html">Promotion</a>
                                                                                </li> -->
                                                                                <!-- <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1059">
                                                                                    <a href="faq/index.html">Faq</a>
                                                                                </li> -->
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1068">
                                                                                    <a
                                                                                        href="contact-1/index.php">Contact</a>
                                                                                    <!-- <ul class="sub-menu">
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1067">
                                                                                            <a
                                                                                                href="contact-1/index.html">Contact
                                                                                                1</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1066">
                                                                                            <a
                                                                                                href="contact-2/index.html">Contact
                                                                                                2</a>
                                                                                        </li>
                                                                                    </ul> -->
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1082">
                                                                                    <a href="about-us-1/index.php">About
                                                                                        Us</a>
                                                                                    <!-- <ul class="sub-menu">
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1084">
                                                                                            <a
                                                                                                href="about-us-1/index.html">About
                                                                                                Us 1</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1085">
                                                                                            <a
                                                                                                href="about-us-2/index.html">About
                                                                                                Us 2</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1094">
                                                                                            <a
                                                                                                href="about-us-3/index.html">About
                                                                                                Us 3</a>
                                                                                        </li>
                                                                                    </ul> -->
                                                                                </li>
                                                                                <li
                                                                                    class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1296">
                                                                                    <a
                                                                                        href="gallery/index.php">Gallery</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1111">
                                                                                    <a target="_blank" rel="noopener"
                                                                                        href="coming-soon/index.php">Coming
                                                                                        Soon</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1474">
                                                                            <a href="menu-1/index.php">MENU</a>
                                                                            <!-- <ul class="sub-menu">
                                                                                <li
                                                                                    class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1472">
                                                                                    <a href="menu-1/index.html">Menu
                                                                                        1</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1501">
                                                                                    <a href="menu-3/index.html">Menu
                                                                                        2</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1524">
                                                                                    <a href="menu-4/index.html">Menu
                                                                                        3</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1551">
                                                                                    <a href="menu-5/index.html">Menu
                                                                                        4</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1473">
                                                                                    <a href="menu/index.html">Menu 5</a>
                                                                                </li>
                                                                            </ul> -->
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1225">
                                                                            <a href="delivery/index.php">SHOP</a>
                                                                            <ul class="sub-menu">
                                                                                <li
                                                                                    class="nd_options_hot_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1188">
                                                                                    <a
                                                                                        href="delivery/index.php">Archive</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-1115">
                                                                                    <a
                                                                                        href="product/mixed-salad/index.php">Single
                                                                                        Product</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1116">
                                                                                    <a href="cart/index.php">Cart</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1117">
                                                                                    <a
                                                                                        href="checkout/index.php">Checkout</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <!-- <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-801">
                                                                            <a href="news/index.html">NEWS</a>
                                                                            <ul class="sub-menu">
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1198">
                                                                                    <a
                                                                                        href="news/index.html">Archive</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children menu-item-1199">
                                                                                    <a href="inauguration/index.html">Single
                                                                                        Post</a>
                                                                                    <ul class="sub-menu">
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1200">
                                                                                            <a
                                                                                                href="inauguration/index.html">Right
                                                                                                Sidebar</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1201">
                                                                                            <a
                                                                                                href="fresh-ingredients/index.html">Left
                                                                                                Sidebar</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1203">
                                                                                            <a
                                                                                                href="menu-update/index.html">Full
                                                                                                Width</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </li> -->
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-802">
                                                                            <a href="contact-1/index.php">CONTACT</a>
                                                                            <!-- <ul class="sub-menu">
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1070">
                                                                                    <a href="contact-1/index.html">Contact
                                                                                        1</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1069">
                                                                                    <a href="contact-2/index.html">Contact
                                                                                        2</a>
                                                                                </li>
                                                                            </ul> -->
                                                                        </li>
                                                                        <li
                                                                            class="book_a_table_btn menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1174">
                                                                            <a href="book-a-table/index.php">BOOK A
                                                                                TABLE</a>
                                                                            <ul class="sub-menu">
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1430">
                                                                                    <a href="book-a-table/index.php">Custom
                                                                                        Plugin</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1429">
                                                                                    <a href="open-table/index.php">Open
                                                                                        Table</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <style>
                                            .vc_custom_1542895585002 {
                                                padding-top: 40px !important;
                                                padding-right: 40px !important;
                                                padding-bottom: 40px !important;
                                                padding-left: 40px !important;
                                            }
                                        </style>
                                    </div>

                                </div>
                                <!--END sidebar-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <style>
                    .vc_custom_1548346342274 {
                        padding-top: 20px !important;
                        padding-right: 60px !important;
                        padding-bottom: 20px !important;
                        padding-left: 60px !important;
                    }

                    /* 
                    " el_class=" menu_responsive"][vc_column width=" 1/2"][nd_options_image nd_options_align=" left" nd_options_image=" 799" nd_options_width=" 120px"][/vc_column][vc_column width=" 1/2"][nd_options_open_sidebar nd_options_align=" right" nd_options_pages=" 784" nd_options_image=" 798" nd_options_width=" 25px" nd_options_sidebar=" nd_options_header_5_sidebar_1" nd_options_image_close=" 773" nd_options_image_close_width=" 20" nd_options_bg_color=" #2d2d2d" nd_options_image_close_position=" 20 20"][/vc_column][/vc_row]</p>
;
                    } */
                </style>
            </div>
            <!--end container-->

        </div>
        <!--END footer-->



        <!--page margin-->
        <!--start nd_options_container-->
        <div class="nd_options_container nd_options_padding_0_15 nd_options_box_sizing_border_box nd_options_clearfix">


            <!--#post-->
            <div style="float:left; width:100%;" id="post-8" class="post-8 page type-page status-publish hentry">

                <!--automatic title-->
                <!-- include message.php for taosts -->

                <!--start content-->
                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                    class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <link
                                    href="https://fonts.googleapis.com/css?family=Quicksand:300%2C700%2C500%7CKristi:400"
                                    rel="stylesheet" property="stylesheet" type="text/css" media="all">
                                <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                                    data-source="gallery" style="background:#ffffff;padding:0px;">
                                    <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
                                    <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;"
                                        data-version="5.4.8.1">
                                        <ul> <!-- SLIDE  -->
                                            <li data-index="rs-1" data-transition="fadethroughdark"
                                                data-slotamount="default" data-hideafterloop="0"
                                                data-hideslideonmobile="off" data-easein="default"
                                                data-easeout="default" data-masterspeed="2000"
                                                data-thumb="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/revslider/home-1/para-10-100x50.jpg"
                                                data-rotate="0" data-saveperformance="off" data-title="slide"
                                                data-param1="01" data-param2="" data-param3="" data-param4=""
                                                data-param5="" data-param6="" data-param7="" data-param8=""
                                                data-param9="" data-param10="" data-description="">
                                                <!-- MAIN IMAGE -->
                                                <img decoding="async"
                                                    src="wp-content/uploads/sites/2/revslider/home-1/para-10.webp" alt=""
                                                    title="Home" data-bgposition="center center" data-bgfit="cover"
                                                    data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg"
                                                    data-no-retina>
                                                <!-- LAYERS -->

                                                <!-- LAYER NR. 1 -->
                                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-1-layer-1"
                                                    data-x="['center','center','center','center']"
                                                    data-hoffset="['0','0','0','0']"
                                                    data-y="['middle','middle','middle','middle']"
                                                    data-voffset="['0','0','0','0']" data-width="full"
                                                    data-height="full" data-whitespace="nowrap" data-type="shape"
                                                    data-basealign="slide" data-responsive_offset="off"
                                                    data-responsive="off"
                                                    data-frames='[{"delay":150,"speed":1500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power2.easeInOut"}]'
                                                    data-textAlign="['left','left','left','left']"
                                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                    style="z-index: 5;background-color:rgba(18,12,20,0.75);background:linear-gradient(to bottom, rgba(28,28,28,0.2) 0%,rgba(28,28,28,0.7) 100%);">
                                                </div>

                                                <!-- LAYER NR. 2 -->
                                                <p class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                                                    id="slide-1-layer-3" data-x="['center','center','center','center']"
                                                    data-hoffset="['0','1','0','0']"
                                                    data-y="['middle','middle','middle','middle']"
                                                    data-voffset="['-159','-75','-74','-51']"
                                                    data-fontsize="['35','35','30','20']"
                                                    data-lineheight="['35','35','30','12']"
                                                    data-letterspacing="['5','','','']" data-width="none"
                                                    data-height="none" data-whitespace="nowrap" data-type="text"
                                                    data-responsive_offset="on"
                                                    data-frames='[{"delay":2350,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-textAlign="['center','center','center','center']"
                                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                    style="z-index: 6; white-space: nowrap; font-size: 35px; line-height: 35px; font-weight: 300; color: #ffffff; letter-spacing: 5px;font-family:Quicksand;letter-spacing:2px;">
                                                    THE UNIQUE </p>
                                                <!-- <php include('../../message.php') ?> -->

                                                <!-- LAYER NR. 3 -->
                                                <h1 class="tp-caption   tp-resizeme rs-parallaxlevel-1"
                                                    id="slide-1-layer-2" data-x="['center','center','center','center']"
                                                    data-hoffset="['0','0','0','0']"
                                                    data-y="['middle','middle','middle','middle']"
                                                    data-voffset="['-74','0','0','0']"
                                                    data-fontsize="['150','100','100','80']"
                                                    data-lineheight="['150','70','100','45']"
                                                    data-letterspacing="['10','10','10','0']"
                                                    data-width="['none','none','none','320']" data-height="none"
                                                    data-whitespace="nowrap" data-type="text"
                                                    data-responsive_offset="on"
                                                    data-frames='[{"delay":2550,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-textAlign="['center','center','center','center']"
                                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                    style="z-index: 7; white-space: nowrap; font-size: 150px; line-height: 150px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 10px;font-family:Kristi;">
                                                    Restaurant </h1>

                                                <!-- LAYER NR. 4 -->
                                                <div class="tp-caption rev-btn  rs-parallaxlevel-4" id="slide-1-layer-6"
                                                    data-x="['center','center','center','center']"
                                                    data-hoffset="['0','0','0','0']"
                                                    data-y="['middle','middle','middle','middle']"
                                                    data-voffset="['140','150','166','128']"
                                                    data-fontsize="['16','13','13','13']"
                                                    data-lineheight="['16','13','13','13']"
                                                    data-fontweight="['700','500','500','500']"
                                                    data-letterspacing="['2','','','']" data-width="none"
                                                    data-height="none" data-whitespace="nowrap" data-type="button"
                                                    data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"book-a-table\/","delay":""}]'
                                                    data-responsive_offset="on" data-responsive="off"
                                                    data-frames='[{"delay":3850,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","ease":"Power1.easeIn"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(45,45,45);"}]'
                                                    data-textAlign="['left','left','left','left']"
                                                    data-paddingtop="[15,15,15,15]" data-paddingright="[30,35,35,35]"
                                                    data-paddingbottom="[15,15,15,15]" data-paddingleft="[30,35,35,35]"
                                                    style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 16px; font-weight: 700; color: #ffffff; letter-spacing: 2px;font-family:Quicksand;background-color:rgb(192,165,138);border-radius:3px 3px 3px 3px;letter-spacing:2px;cursor:pointer;">
                                                    BOOK A TABLE </div>

                                                <!-- LAYER NR. 5 -->
                                                <p class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                                                    id="slide-1-layer-10" data-x="['center','center','center','center']"
                                                    data-hoffset="['15','-11','0','0']"
                                                    data-y="['middle','middle','middle','middle']"
                                                    data-voffset="['23','70','79','60']"
                                                    data-fontsize="['14','12','14','12']"
                                                    data-lineheight="['14','12','14','12']"
                                                    data-letterspacing="['5','','','']" data-width="none"
                                                    data-height="none" data-whitespace="nowrap" data-type="text"
                                                    data-responsive_offset="on"
                                                    data-frames='[{"delay":2350,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-textAlign="['center','center','center','center']"
                                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                    style="z-index: 9; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 700; color: #ffffff; letter-spacing: 5px;font-family:Quicksand;letter-spacing:2px;">
                                                    STEACK HOUSE | FISH MENU </p>
                                            </li>
                                        </ul>
                                        <div style="" class="tp-static-layers">

                                            <!-- LAYER NR. 6 -->
                                            <div class="tp-caption    nd_options_cursor_pointer tp-static-layer"
                                                id="slider-1-layer-14" data-x="['center','center','center','center']"
                                                data-hoffset="['0','0','0','0']"
                                                data-y="['bottom','bottom','bottom','bottom']"
                                                data-voffset="['-35','-35','-35','-35']" data-width="none"
                                                data-height="none" data-whitespace="nowrap"
                                                data-visibility="['on','off','off','off']" data-type="image"
                                                data-actions='[{"event":"click","action":"scrollbelow","offset":"100px","delay":"","speed":"1000","ease":"Linear.easeNone"}]'
                                                data-responsive_offset="on" data-responsive="off" data-startslide="-1"
                                                data-endslide="-1"
                                                data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[20,20,20,20]" data-paddingright="[10,10,10,10]"
                                                data-paddingbottom="[20,20,20,20]" data-paddingleft="[10,10,10,10]"
                                                data-captionhidden="on"
                                                style="z-index: 10;background-color:rgb(192,165,138);"><img
                                                    decoding="async"
                                                    src="wp-content/uploads/sites/2/2019/01/ico.down_.png" alt=""
                                                    data-ww="['30px','30px','30px','30px']"
                                                    data-hh="['30px','30px','30px','30px']" width="60" height="60"
                                                    data-no-retina> </div>
                                        </div>
                                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;">
                                        </div>
                                    </div>
                                    <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss = "";
                                        if (htmlDiv) {
                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                        } else {
                                            var htmlDiv = document.createElement("div");
                                            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                        }
                                    </script>
                                    <script type="text/javascript">
                                        if (setREVStartSize !== undefined) setREVStartSize(
                                            { c: '#rev_slider_1_1', responsiveLevels: [1240, 1024, 778, 480], gridwidth: [1240, 1024, 778, 480], gridheight: [960, 768, 960, 720], sliderLayout: 'fullscreen', fullScreenAutoWidth: 'off', fullScreenAlignForce: 'off', fullScreenOffsetContainer: '', fullScreenOffset: '121px' });

                                        var revapi1,
                                            tpj;
                                        (function () {
                                            if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad); else onLoad();
                                            function onLoad() {
                                                if (tpj === undefined) { tpj = jQuery; if ("off" == "on") tpj.noConflict(); }
                                                if (tpj("#rev_slider_1_1").revolution == undefined) {
                                                    revslider_showDoubleJqueryError("#rev_slider_1_1");
                                                } else {
                                                    revapi1 = tpj("#rev_slider_1_1").show().revolution({
                                                        sliderType: "hero",
                                                        jsFileLocation: "//www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/revslider/public/assets/js/",
                                                        sliderLayout: "fullscreen",
                                                        dottedOverlay: "none",
                                                        delay: 9000,
                                                        responsiveLevels: [1240, 1024, 778, 480],
                                                        visibilityLevels: [1240, 1024, 778, 480],
                                                        gridwidth: [1240, 1024, 778, 480],
                                                        gridheight: [960, 768, 960, 720],
                                                        lazyType: "none",
                                                        parallax: {
                                                            type: "mouse",
                                                            origo: "enterpoint",
                                                            speed: 1000,
                                                            speedbg: 0,
                                                            speedls: 0,
                                                            levels: [2, 4, 6, 8, 10, 12, 14, 16, 45, 50, 47, 48, 49, 50, 0, 0],
                                                        },
                                                        shadow: 0,
                                                        spinner: "off",
                                                        autoHeight: "off",
                                                        fullScreenAutoWidth: "off",
                                                        fullScreenAlignForce: "off",
                                                        fullScreenOffsetContainer: "",
                                                        fullScreenOffset: "121px",
                                                        disableProgressBar: "on",
                                                        hideThumbsOnMobile: "off",
                                                        hideSliderAtLimit: 0,
                                                        hideCaptionAtLimit: 1201,
                                                        hideAllCaptionAtLilmit: 0,
                                                        debugMode: false,
                                                        fallbacks: {
                                                            simplifyAll: "off",
                                                            disableFocusListener: false,
                                                        }
                                                    });
                                                }; /* END OF revapi call */

                                            }; /* END OF ON LOAD FUNCTION */
                                        }()); /* END OF WRAPPING FUNCTION */
                                    </script>
                                    <script>
                                        var htmlDivCss = unescape("%23rev_slider_1_1_wrapper%20%7B%0A%20%20%20%20padding%3A%200px%2060px%20%21important%3B%0A%20%20%20%20box-sizing%3A%20border-box%3B%0A%7D");
                                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                        if (htmlDiv) {
                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                        }
                                        else {
                                            var htmlDiv = document.createElement('div');
                                            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                        }
                                    </script>
                                </div><!-- END REVOLUTION SLIDER -->
                                <div id="nd_shortcode_slider_text_home_1"
                                    class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1548404844887">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div style="background-color:; height: 10px;" class="nicdark_section  ">
                                                </div>
                                                <p style="color:; padding:px; text-align:; font-size:14px; line-height:14px; letter-spacing: 1px; font-weight:;"
                                                    class="  nd_options_home_1_under_slide_1  "><b>ADDRESS :</b> 4th
                                                    bridge road Gorakhpur (Jabalpur )</p>
                                                <div style="background-color:; height: 10px;" class="nicdark_section  ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div style="background-color:; height: 10px;" class="nicdark_section  ">
                                                </div>
                                                <p style="color:; padding:px; text-align:right; font-size:14px; line-height:14px; letter-spacing: 1px; font-weight:;"
                                                    class="  nd_options_home_1_under_slide_2  "><b>EMAIL :</b>
                                                    booking@restaurant.com</p>
                                                <div style="background-color:; height: 10px;" class="nicdark_section  ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1547042678588 vc_row-has-fill">
                    <div
                        class="nd_options_home_4_section_1 nd_options_padding_20_first_div_important_responsive wpb_column vc_column_container vc_col-sm-8">
                        <div class="vc_column-inner vc_custom_1548405352794">
                            <div class="wpb_wrapper">
                                <h2 style="color:#eeeeee; padding:px; text-align:; font-size:70px; line-height:px; letter-spacing: 0px; font-weight:normal;"
                                    class="   nd_options_third_font ">About Us</h2>
                                <h1 style="color:; padding:px; text-align:; font-size:50px; line-height:px; letter-spacing: 2px; font-weight:lighter;"
                                    class="  nd_options_font_size_40_important_all_iphone nd_options_first_font ">
                                    RESTAURANT</h1>
                                <div style="background-color:; height: 35px;" class="nicdark_section  "></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: left">Lorem ipsum dolor sit amet, consect
                                                            etur adip iscing elit. Proin rhoncus urn a dictum neque
                                                            molestie ultricies.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: left">Lorem ipsum dolor sit amet, consect
                                                            etur adip iscing elit. Proin rhoncus urn a dictum neque
                                                            molestie ultricies.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="background-color:; height: 35px;" class="nicdark_section  "></div>

                                <a style="border: px solid ; border-radius:3px; letter-spacing:2px; line-height:16px; font-size:16px; background-color:#c0a58a; padding:15px 35px; margin:; color:#ffffff;"
                                    rel="" href="book-a-table/index.php"
                                    class="nicdark_display_inline_block nd_options_float_left nd_options_font_weight_normal nd_options_first_font  ">BOOK
                                    A TABLE</a>

                                <div style="background-color:; height: 20px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                        <div class="vc_column-inner vc_custom_1548243176309">
                            <div class="wpb_wrapper">
                                <!-- <div style="background-color:; height: 250px;" class="nicdark_section  "></div> -->

                                <div class=" nd_options_text_align_center nd_options_section">


                                    <!-- <a class=" nd_options_outline_0 nd_options_mpopup_iframe"
                                        href="https://www.youtube.com/watch?v=v5bClGpH0iI">
                                        <img decoding="async" width="80px" alt=""
                                            class="nd_options_transition_all_08_ease nd_options_opacity_05_hover"
                                            src="wp-content/uploads/sites/2/2019/01/ico-06.png">
                                    </a> -->
                                    <?php
                                    $customization_query = "SELECT source FROM customization WHERE show_video=1 LIMIT 1";
                                    $customization_result = mysqli_query($con, $customization_query);

                                    $video_src = '';
                                    if ($customization_result && mysqli_num_rows($customization_result) > 0) {
                                        $row = mysqli_fetch_assoc($customization_result);
                                        $video_src = htmlspecialchars($row['source']);
                                    }
                                    ?>

                                    <!-- <php if ($video_src) { ?> -->
                                    <video playsinline class="mui-bj3eb4-video" controls data-automation="VideoPlayer"
                                        height="100%" loop width="100%"
                                        poster="https://www.shutterstock.com/shutterstock/videos/3483392003/thumb/1.jpg?ip=x480"
                                        preload="none" aria-label="video-player" controlslist="nodownload" autoplay
                                        muted>
                                        <source src="<?= $video_src ?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <!-- <php } ?> -->
                                    <!-- <php else: ?>
                                        <p style="color:#fff; text-align:center;">No video available.</p>
                                    <php endif; ?> -->
                                    <!-- <video playsinline="" class="mui-bj3eb4-video" controls=""
                                        data-automation="VideoPlayer" height="100%" loop="" width="100%"
                                        poster="https://www.shutterstock.com/shutterstock/videos/3483392003/thumb/1.jpg?ip=x480"
                                        preload="none" aria-label="video-player" controlslist="nodownload" autoplay
                                        muted>
                                        <source
                                            src="https://www.shutterstock.com/shutterstock/videos/3483392003/preview/stock-footage-high-end-restaurant-that-appears-to-be-deserted.webm"
                                            type="video/webm">
                                        <source
                                            src="https://www.shutterstock.com/shutterstock/videos/3483392003/preview/stock-footage-high-end-restaurant-that-appears-to-be-deserted.mp4"
                                            type="video/mp4">
                                    </video> -->

                                </div>

                                <!-- <div style="background-color:; height: 250px;" class="nicdark_section  "></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div
                        class="nd_options_margin_top_50_first_div_important_responsive nd_options_padding_0_first_div_important_responsive wpb_column vc_column_container vc_col-sm-10">
                        <div class="vc_column-inner vc_custom_1548408088689">
                            <div class="wpb_wrapper">


                                <script type="text/javascript">
                                    //<![CDATA[

                                    jQuery(document).ready(function () {

                                        //START masonry
                                        jQuery(function ($) {

                                            //Masonry
                                            var $nd_options_masonry_content = $(".nd_options_masonry_content").imagesLoaded(function () {
                                                // init Masonry after all images have loaded
                                                $nd_options_masonry_content.masonry({
                                                    itemSelector: ".nd_options_masonry_item"
                                                });
                                            });


                                        });
                                        //END masonry

                                    });

                                    //]]&gt;
                                </script>

                                <div class="nd_options_section nd_options_masonry_content  ">

                                    <?php

                                    $show_product_query = "SELECT * FROM products LIMIT 4";
                                    $show_product_query_run = mysqli_query($con, $show_product_query);
                                    if (mysqli_num_rows($show_product_query_run) > 0) {
                                        foreach ($show_product_query_run as $product) { ?>

                                            <form action="product/index.php" method="GET">

                                                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">

                                                <div
                                                    class="nd_options_width_25_percentage nd_options_float_left nd_options_postgrid_woo_layout_3_885 nd_options_padding_15 nd_options_text_align_center nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive nd_options_position_relative">

                                                    <div class="nd_options_section nd_options_position_relative">

                                                        <!-- Current image tag -->
                                                        <img decoding="async" class="nd_options_section" alt=""
                                                            src="../../admin/uploads/product/<?= $product['image'] ?>">

                                                        <!--start filter-->
                                                        <div
                                                            class="nd_options_bg_greydark_alpha_gradient_6 nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_padding_30 nd_options_box_sizing_border_box">

                                                            <a href="product/sweet-cheeses/index.html"
                                                                style="background-color:#c0a58a;"
                                                                class=" nd_options_position_absolute nd_options_top_30 nd_options_right_30 nd_options_padding_5_10 nd_options_border_radius_3 nd_options_line_height_14 nd_options_text_transform_uppercase nd_options_color_white nd_options_second_font">&#8377;
                                                                <?= $product['price'] ?></a>

                                                            <button type="submit" value="<?= $product['id'] ?>" name="id" style="background: none;
                                                                        color: inherit;
                                                                        border: none;
                                                                        padding: 0;
                                                                        font: inherit;
                                                                        cursor: pointer;
                                                                        outline: inherit;"
                                                                class="nd_options_color_white nd_options_position_absolute nd_options_left_0 nd_options_bottom_30 nd_options_section nd_options_text_align_center">
                                                                <h3
                                                                    class="nd_options_margin_0_important nd_options_color_white nd_options_second_font">
                                                                    <?= $product['name'] ?>
                                                                </h3>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!--END filter-->




                                                </div>
                                            </form>

                                        <?php }

                                    } ?>


                                    <!-- <div
                                        class="nd_options_width_25_percentage nd_options_float_left nd_options_postgrid_woo_layout_3_884 nd_options_padding_15 nd_options_text_align_center nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive nd_options_position_relative">

                                        <div class="nd_options_section nd_options_position_relative">

                                            <img decoding="async" class="nd_options_section" alt=""
                                                src="wp-content/uploads/sites/2/2019/01/product-02.jpg">

                                            !--start filter--
                                            <div
                                                class="nd_options_bg_greydark_alpha_gradient_6 nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_padding_30 nd_options_box_sizing_border_box">


                                                <a href="product/fresh-fish/index.html"
                                                    style="background-color:#c0a58a;"
                                                    class=" nd_options_position_absolute nd_options_top_30 nd_options_right_30 nd_options_padding_5_10 nd_options_border_radius_3 nd_options_line_height_14 nd_options_text_transform_uppercase nd_options_color_white nd_options_second_font">&#36;
                                                    32</a>

                                                <a class="nd_options_color_white nd_options_position_absolute nd_options_left_0 nd_options_bottom_30 nd_options_section nd_options_text_align_center"
                                                    href="product/fresh-fish/index.html">
                                                    <h3
                                                        class="nd_options_margin_0_important nd_options_color_white nd_options_second_font">
                                                        Fresh Fish
                                                    </h3>
                                                </a>

                                            </div>
                                            !--END filter--


                                        </div>

                                    </div> -->


                                    <!-- <div
                                        class="nd_options_width_25_percentage nd_options_float_left nd_options_postgrid_woo_layout_3_883 nd_options_padding_15 nd_options_text_align_center nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive nd_options_position_relative">

                                        <div class="nd_options_section nd_options_position_relative">

                                            <img decoding="async" class="nd_options_section" alt=""
                                                src="wp-content/uploads/sites/2/2019/01/product-03.jpg">

                                            !--start filter--
                                            <div
                                                class="nd_options_bg_greydark_alpha_gradient_6 nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_padding_30 nd_options_box_sizing_border_box">


                                                <a href="product/bean-soup/index.html" style="background-color:#c0a58a;"
                                                    class=" nd_options_position_absolute nd_options_top_30 nd_options_right_30 nd_options_padding_5_10 nd_options_border_radius_3 nd_options_line_height_14 nd_options_text_transform_uppercase nd_options_color_white nd_options_second_font">&#36;
                                                    26</a>

                                                <a class="nd_options_color_white nd_options_position_absolute nd_options_left_0 nd_options_bottom_30 nd_options_section nd_options_text_align_center"
                                                    href="product/bean-soup/index.html">
                                                    <h3
                                                        class="nd_options_margin_0_important nd_options_color_white nd_options_second_font">
                                                        Bean Soup
                                                    </h3>
                                                </a>

                                            </div>
                                            !--END filter--


                                        </div>

                                    </div> -->





                                    <!-- <div
                                        class="nd_options_width_25_percentage nd_options_float_left nd_options_postgrid_woo_layout_3_882 nd_options_padding_15 nd_options_text_align_center nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive nd_options_position_relative">

                                        <div class="nd_options_section nd_options_position_relative">

                                            <img decoding="async" class="nd_options_section" alt=""
                                                src="wp-content/uploads/sites/2/2019/01/product-04.jpg">

                                            !--start filter--
                                            <div
                                                class="nd_options_bg_greydark_alpha_gradient_6 nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_padding_30 nd_options_box_sizing_border_box">


                                                <a href="product/vegetables/index.html"
                                                    style="background-color:#c0a58a;"
                                                    class=" nd_options_position_absolute nd_options_top_30 nd_options_right_30 nd_options_padding_5_10 nd_options_border_radius_3 nd_options_line_height_14 nd_options_text_transform_uppercase nd_options_color_white nd_options_second_font">&#36;
                                                    18</a>

                                                <a class="nd_options_color_white nd_options_position_absolute nd_options_left_0 nd_options_bottom_30 nd_options_section nd_options_text_align_center"
                                                    href="product/vegetables/index.html">
                                                    <h3
                                                        class="nd_options_margin_0_important nd_options_color_white nd_options_second_font">
                                                        Vegetables
                                                    </h3>
                                                </a>

                                            </div>
                                            !--END filter--


                                        </div>

                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-2">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper"></div>
                        </div>
                    </div>
                </div>
                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5"
                    data-vc-parallax-image="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/para-03.jpg"
                    class="vc_row wpb_row vc_row-fluid nd_options_vc_parallax_filter_2_4 vc_custom_1551375273324 vc_row-has-fill vc_row-o-content-middle vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 15px;" class="nicdark_section  "></div>
                                <h3 style="color:#ffffff; padding:px; text-align:; font-size:50px; line-height:px; letter-spacing: 1px; font-weight:lighter;"
                                    class="   nd_options_third_font ">Reserve !</h3>
                                <div style="background-color:; height: 5px;" class="nicdark_section  "></div>
                                <h1 style="color:#ffffff; padding:px; text-align:; font-size:50px; line-height:50px; letter-spacing: px; font-weight:normal;"
                                    class="  nd_options_margin_bottom_20_responsive nd_options_first_font ">Book Now
                                </h1>
                                <div style="background-color:; height: 15px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-7">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 15px;" class="nicdark_section  "></div>


                                <style>
                                    .nd_rst_component_search_cal_l_1.ui-datepicker {
                                        background-color: #2d2d2d;
                                    }
                                </style>


                                <div class="nd_rst_section nd_rst_component_search_l1  ">

                                    <!--START FORM-->
                                    <form action="book-a-table/" method="get">


                                        <div
                                            class="nd_rst_width_66_percentage nd_rst_width_100_percentage_all_iphone nd_rst_float_left nd_rst_padding_30 nd_rst_box_sizing_border_box nd_rst_bg_white">

                                            <!--date-->
                                            <div
                                                class="nd_rst_width_50_percentage nd_rst_width_100_percentage_all_iphone nd_rst_float_left nd_rst_box_sizing_border_box">


                                                <div id="nd_rst_open_calendar_from"
                                                    class="nd_rst_section nd_rst_box_sizing_border_box nd_rst_text_align_center nd_rst_cursor_pointer">
                                                    <div
                                                        class="nd_rst_section  nd_rst_box_sizing_border_box nd_rst_text_align_center">
                                                        <p style="color:#ffffff" class="nd_rst_letter_spacing_2">SET
                                                            DATE :</p>
                                                        <div class="nd_rst_section nd_rst_height_15"></div>
                                                        <div class="nd_rst_display_inline_flex ">

                                                            <div class="nd_rst_float_left nd_rst_text_align_right">
                                                                <h1 style="color:#ffffff"
                                                                    id="nd_rst_date_number_from_front"
                                                                    class="nd_rst_font_size_50 nd_options_color_greydark">
                                                                    11</h1>
                                                            </div>

                                                            <div
                                                                class="nd_rst_float_right nd_rst_text_align_center nd_rst_margin_left_10">
                                                                <h6 style="color:#ffffff"
                                                                    id="nd_rst_date_month_from_front"
                                                                    class="nd_options_color_grey nd_rst_margin_top_2 nd_rst_font_size_12">
                                                                    Apr</h6>
                                                                <div class="nd_rst_section nd_rst_height_5"></div>
                                                                <img decoding="async" alt="" width="12"
                                                                    src="wp-content/uploads/sites/2/2019/02/arrow-down.png">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="hidden" id="nd_rst_date_month_from"
                                                    class="nd_rst_section nd_rst_margin_top_20" value="Apr">
                                                <input type="hidden" id="nd_rst_date_number_from"
                                                    class="nd_rst_section nd_rst_margin_top_20" value="11">
                                                <input placeholder="Check In"
                                                    class="nd_rst_section nd_rst_border_width_0_important nd_rst_padding_0_important nd_rst_height_0_important"
                                                    type="text" name="nd_rst_send_date" id="nd_rst_send_date"
                                                    value="2025-04-11" />

                                            </div>


                                            <script type="text/javascript">
                                                //<![CDATA[
                                                jQuery(document).ready(function () {

                                                    jQuery(function ($) {

                                                        $("#nd_rst_send_date").datepicker({
                                                            defaultDate: "+1w",
                                                            minDate: 0,
                                                            altField: "#nd_rst_date_month_from",
                                                            altFormat: "M",
                                                            firstDay: 0,
                                                            dateFormat: "yy-mm-dd",
                                                            monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                                                            monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Maj", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                                                            dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
                                                            nextText: "NEXT",
                                                            prevText: "PREV",
                                                            changeMonth: false,
                                                            numberOfMonths: 1,
                                                            beforeShow: function () {
                                                                $("#ui-datepicker-div").addClass("nd_rst_component_search_cal_l_1");
                                                            },
                                                            onClose: function () {
                                                                var nd_rst_input_date_from = $("#nd_rst_send_date").val();
                                                                var nd_rst_date_number_from = nd_rst_input_date_from.substring(8, 10);
                                                                $("#nd_rst_date_number_from").val(nd_rst_date_number_from);
                                                                $("#nd_rst_date_number_from_front").text(nd_rst_date_number_from);
                                                                var nd_rst_date_month_from = $("#nd_rst_date_month_from").val();
                                                                $("#nd_rst_date_month_from_front").text(nd_rst_date_month_from);
                                                            }
                                                        });

                                                        $("#nd_rst_open_calendar_from").click(function () {
                                                            $("#nd_rst_send_date").datepicker("show");
                                                        });


                                                    });

                                                });
                                                //]]&gt;
                                            </script>
                                            <!--check in/out-->



                                            <!--guests-->
                                            <div
                                                class="nd_rst_width_50_percentage nd_rst_margin_top_20_all_iphone nd_rst_width_100_percentage_all_iphone nd_rst_float_left  nd_rst_box_sizing_border_box">
                                                <div
                                                    class="nd_rst_section  nd_rst_box_sizing_border_box nd_rst_text_align_center">
                                                    <div
                                                        class="nd_rst_section  nd_rst_box_sizing_border_box nd_rst_text_align_center">
                                                        <p style="color:#ffffff"
                                                            class="nd_rst_letter_spacing_2 nd_rst_margin_top_20_all_iphone">
                                                            GUESTS :</p>
                                                        <div class="nd_rst_section nd_rst_height_15"></div>
                                                        <div class="nd_rst_display_inline_flex ">
                                                            <div class="nd_rst_float_left nd_rst_text_align_right">
                                                                <h1 style="color:#ffffff"
                                                                    class="nd_rst_font_size_50 nd_rst_color_greydark nd_rst_guests_number nd_rst_min_width_35 nd_rst_text_align_center">
                                                                    1</h1>
                                                            </div>
                                                            <div
                                                                class="nd_rst_float_right nd_rst_text_align_center nd_rst_margin_left_10">
                                                                <div class="nd_rst_section nd_rst_height_7"></div>
                                                                <div class="nd_rst_section">
                                                                    <img decoding="async"
                                                                        class="nd_rst_float_right nd_rst_guests_increase nd_rst_cursor_pointer"
                                                                        style="transform: rotate(180deg);" alt=""
                                                                        width="12"
                                                                        src="wp-content/uploads/sites/2/2019/02/arrow-down.png">
                                                                </div>
                                                                <div class="nd_rst_section nd_rst_height_10"></div>
                                                                <div class="nd_rst_section">
                                                                    <img decoding="async"
                                                                        class="nd_rst_float_right nd_rst_guests_decrease nd_rst_cursor_pointer"
                                                                        alt="" width="12"
                                                                        src="wp-content/uploads/sites/2/2019/02/arrow-down.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <input placeholder="Guests" class="nd_rst_section nd_rst_display_none"
                                                    type="number" name="nd_rst_send_guests" id="nd_rst_send_guests"
                                                    min="1" value="" />
                                            </div>
                                            <script type="text/javascript">
                                                //<![CDATA[
                                                jQuery(document).ready(function () {

                                                    jQuery(function ($) {

                                                        $(".nd_rst_guests_increase").click(function () {
                                                            var value = $(".nd_rst_guests_number").text();

                                                            if (value < 10) {
                                                                value++;
                                                                $(".nd_rst_guests_number").text(value);
                                                                $("#nd_rst_send_guests").val(value);
                                                            }

                                                        });

                                                        $(".nd_rst_guests_decrease").click(function () {
                                                            var value = $(".nd_rst_guests_number").text();

                                                            if (value > 1) {
                                                                value--;
                                                                $(".nd_rst_guests_number").text(value);
                                                                $("#nd_rst_send_guests").val(value);
                                                            }

                                                        });

                                                    });

                                                });
                                                //]]&gt;
                                            </script>
                                            <!--guests-->


                                        </div>



                                        <div
                                            class="nd_rst_width_33_percentage nd_rst_width_100_percentage_all_iphone nd_rst_padding_30 nd_rst_padding_top_0_all_iphone nd_rst_box_sizing_border_box nd_rst_width_100_percentage_all_iphone nd_rst_float_left nd_rst_text_align_center nd_rst_bg_greydark">

                                            <input
                                                style="padding: 13px 20px; background-color:#c0a58a; margin-top: 33px;"
                                                class="nd_rst_margin_top_0_important_all_iphone nd_options_color_white nd_options_second_font_important nd_rst_width_100_percentage nd_rst_border_width_0_important nd_rst_letter_spacing_2"
                                                type="submit" value="BOOK">

                                        </div>


                                    </form>
                                    <!--END FORM-->

                                </div>


                                <div style="background-color:; height: 15px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-2">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 38px;" class="nicdark_section  "></div>
                                <h3 style="color:#ffffff; padding:px; text-align:; font-size:px; line-height:25px; letter-spacing: 1px; font-weight:normal;"
                                    class="  nd_options_text_align_center_responsive nd_options_margin_top_20_responsive nd_options_first_font ">
                                    Discover our New Menu !</h3>
                                <div style="background-color:; height: 15px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1547042811304">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <h2 style="color:#eeeeee; padding:px; text-align:center; font-size:70px; line-height:px; letter-spacing: 0px; font-weight:normal;"
                                    class="   nd_options_third_font ">Best Solutions</h2>
                                <h1 style="color:; padding:px; text-align:center; font-size:50px; line-height:50px; letter-spacing: 2px; font-weight:lighter;"
                                    class="  nd_options_font_size_40_important_all_iphone nd_options_first_font ">OUR
                                    SERVICES</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="vc_row wpb_row vc_row-fluid vc_custom_1540821878031 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 30px;" class="nicdark_section  "></div>
                                <div style="text-align:center;" class="nd_options_section">
                                    <img decoding="async" alt="" style="width:50px;"
                                        class=" nd_options_margin_0 nd_options_padding_0 "
                                        src="wp-content/uploads/sites/2/2019/01/ico-01.png">
                                </div>
                                <div style="background-color:; height: 15px;" class="nicdark_section  "></div>
                                <p style="color:; padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: px; font-weight:;"
                                    class="    ">Lorem ipsum dolor sit amet, consectetur <u>adipiscing</u> elit.
                                    Curabitur ut diam etni</p>
                                <div style="background-color:; height: 30px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 30px;" class="nicdark_section  "></div>
                                <div style="text-align:center;" class="nd_options_section">
                                    <img decoding="async" alt="" style="width:50px;"
                                        class=" nd_options_margin_0 nd_options_padding_0 "
                                        src="wp-content/uploads/sites/2/2019/01/ico-02.png">
                                </div>
                                <div style="background-color:; height: 15px;" class="nicdark_section  "></div>
                                <p style="color:; padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: px; font-weight:;"
                                    class="    ">Lorem ipsum dolor sit amet, consectetur <u>adipiscing</u> elit.
                                    Curabitur ut diam etni</p>
                                <div style="background-color:; height: 30px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 30px;" class="nicdark_section  "></div>
                                <div style="text-align:center;" class="nd_options_section">
                                    <img decoding="async" alt="" style="width:50px;"
                                        class=" nd_options_margin_0 nd_options_padding_0 "
                                        src="wp-content/uploads/sites/2/2019/01/ico-03.png">
                                </div>
                                <div style="background-color:; height: 15px;" class="nicdark_section  "></div>
                                <p style="color:; padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: px; font-weight:;"
                                    class="    ">Lorem ipsum dolor sit amet, consectetur <u>adipiscing</u> elit.
                                    Curabitur ut diam etni</p>
                                <div style="background-color:; height: 30px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 30px;" class="nicdark_section  "></div>
                                <div style="text-align:center;" class="nd_options_section">
                                    <img decoding="async" alt="" style="width:50px;"
                                        class=" nd_options_margin_0 nd_options_padding_0 "
                                        src="wp-content/uploads/sites/2/2019/01/ico-04.png">
                                </div>
                                <div style="background-color:; height: 15px;" class="nicdark_section  "></div>
                                <p style="color:; padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: px; font-weight:;"
                                    class="    ">Lorem ipsum dolor sit amet, consectetur <u>adipiscing</u> elit.
                                    Curabitur ut diam etni</p>
                                <div style="background-color:; height: 30px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="vc_row wpb_row vc_row-fluid vc_custom_1547042338956 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                    <div
                        class="nd_options_margin_0_first_div_important_responsive wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner vc_custom_1548406524826">
                            <div class="wpb_wrapper">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1548236172125">
                                            <div class="wpb_wrapper">
                                                <div style="background-color:; height: 100px;"
                                                    class="nicdark_section  ">
                                                </div>
                                                <h3 style="color:#ffffff; padding:px; text-align:center; font-size:20px; line-height:20px; letter-spacing: 2px; font-weight:bold;"
                                                    class="   nd_options_first_font ">FIND US HERE</h3>
                                                <div style="background-color:; height: 25px;" class="nicdark_section  ">
                                                </div>
                                                <p style="color:#ffffff; padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: px; font-weight:normal;"
                                                    class="   nd_options_first_font ">Avenue Marina 34568 NY (U.S)</p>
                                                <p style="color:#ffffff; padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: px; font-weight:normal;"
                                                    class="   nd_options_first_font ">+1 374 474 637</p>
                                                <p style="color:#ffffff; padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: px; font-weight:normal;"
                                                    class="   nd_options_first_font "><a
                                                        href="mailto:info@restaurant.com"
                                                        style="color: #fff;">info@restaurant.com</a></p>
                                                <div style="background-color:; height: 100px;"
                                                    class="nicdark_section  ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="background-color:; height: 30px;" class="nicdark_section  "></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div
                                        class="nd_options_padding_20_first_div_important_all_iphone wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1548406164717">
                                            <div class="wpb_wrapper">
                                                <div style="background-color:; height: 60px;" class="nicdark_section  ">
                                                </div>
                                                <h3 style="color:#ffffff; padding:px; text-align:center; font-size:20px; line-height:20px; letter-spacing: 2px; font-weight:bold;"
                                                    class="   nd_options_first_font ">OPENING TIMES</h3>
                                                <div style="background-color:; height: 20px;" class="nicdark_section  ">
                                                </div>


                                                <div class="nd_options_section badge_timing nd_options_display_table ">
                                                    <div
                                                        class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_width_50_percentage nd_options_text_align_left nd_options_padding_10 nd_options_box_sizing_border_box">
                                                        <p class=" nd_options_second_font nd_options_margin_0 nd_options_padding_0"
                                                            style="color:#ffffff;">MON</p>
                                                    </div>
                                                    <div
                                                        class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_width_50_percentage nd_options_text_align_right nd_options_padding_10 nd_options_box_sizing_border_box">
                                                        <p class=" nd_options_second_font nd_options_margin_0 nd_options_padding_0"
                                                            style="color:#ffffff;">17:00 to 23:00</p>
                                                    </div>
                                                </div>





                                                <div class="nd_options_section badge_timing nd_options_display_table ">
                                                    <div
                                                        class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_width_50_percentage nd_options_text_align_left nd_options_padding_10 nd_options_box_sizing_border_box">
                                                        <p class=" nd_options_second_font nd_options_margin_0 nd_options_padding_0"
                                                            style="color:#ffffff;">WED</p>
                                                    </div>
                                                    <div
                                                        class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_width_50_percentage nd_options_text_align_right nd_options_padding_10 nd_options_box_sizing_border_box">
                                                        <p class=" nd_options_second_font nd_options_margin_0 nd_options_padding_0"
                                                            style="color:#ffffff;">19:00 to 24:00</p>
                                                    </div>
                                                </div>





                                                <div class="nd_options_section badge_timing nd_options_display_table ">
                                                    <div
                                                        class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_width_50_percentage nd_options_text_align_left nd_options_padding_10 nd_options_box_sizing_border_box">
                                                        <p class=" nd_options_second_font nd_options_margin_0 nd_options_padding_0"
                                                            style="color:#ffffff;">THU</p>
                                                    </div>
                                                    <div
                                                        class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_width_50_percentage nd_options_text_align_right nd_options_padding_10 nd_options_box_sizing_border_box">
                                                        <p class=" nd_options_second_font nd_options_margin_0 nd_options_padding_0"
                                                            style="color:#ffffff;">14:00 to 18:00</p>
                                                    </div>
                                                </div>





                                                <div class="nd_options_section badge_timing nd_options_display_table ">
                                                    <div
                                                        class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_width_50_percentage nd_options_text_align_left nd_options_padding_10 nd_options_box_sizing_border_box">
                                                        <p class=" nd_options_second_font nd_options_margin_0 nd_options_padding_0"
                                                            style="color:#ffffff;">FRI</p>
                                                    </div>
                                                    <div
                                                        class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_width_50_percentage nd_options_text_align_right nd_options_padding_10 nd_options_box_sizing_border_box">
                                                        <p class=" nd_options_second_font nd_options_margin_0 nd_options_padding_0"
                                                            style="color:#ffffff;">16:00 to 24:00</p>
                                                    </div>
                                                </div>





                                                <div class="nd_options_section badge_timing nd_options_display_table ">
                                                    <div
                                                        class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_width_50_percentage nd_options_text_align_left nd_options_padding_10 nd_options_box_sizing_border_box">
                                                        <p class=" nd_options_second_font nd_options_margin_0 nd_options_padding_0"
                                                            style="color:#ffffff;">SAT/SUN</p>
                                                    </div>
                                                    <div
                                                        class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_width_50_percentage nd_options_text_align_right nd_options_padding_10 nd_options_box_sizing_border_box">
                                                        <p class=" nd_options_second_font nd_options_margin_0 nd_options_padding_0"
                                                            style="color:#ffffff;">20:00 to 4:00</p>
                                                    </div>
                                                </div>


                                                <div style="background-color:; height: 60px;" class="nicdark_section  ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="nd_options_margin_0_first_div_important_responsive wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                        <div class="vc_column-inner vc_custom_1548406390389">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 80px;" class="nicdark_section  "></div>
                                <h3 style="color:#ffffff; padding:px; text-align:center; font-size:20px; line-height:20px; letter-spacing: 2px; font-weight:normal;"
                                    class="   nd_options_first_font ">PROMOTIONS</h3>
                                <div style="background-color:; height: 40px;" class="nicdark_section  "></div>
                                <h1 style="color:#ffffff; padding:px; text-align:center; font-size:100px; line-height:px; letter-spacing: px; font-weight:normal;"
                                    class="  nd_options_font_size_40_important_all_iphone nd_options_third_font ">Fresh
                                    Meat</h1>
                                <div style="background-color:; height: 40px;" class="nicdark_section  "></div>
                                <div class="nd_options_section nd_options_text_align_center">
                                    <a style="border: px solid ; border-radius:px; letter-spacing:2px; line-height:12px; font-size:12px; background-color:; padding:; margin:; color:#ffffff;"
                                        rel="" href="#"
                                        class="nicdark_display_inline_block  nd_options_font_weight_normal nd_options_second_font banner_button ">CHECK
                                        THE MENU</a>
                                </div>
                                <div style="background-color:; height: 80px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="nd_options_margin_0_first_div_important_responsive wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                        <div class="vc_column-inner vc_custom_1548406395217">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 80px;" class="nicdark_section  "></div>
                                <h3 style="color:#ffffff; padding:px; text-align:center; font-size:20px; line-height:20px; letter-spacing: 2px; font-weight:normal;"
                                    class="   nd_options_first_font ">DAILY DELIVERS</h3>
                                <div style="background-color:; height: 40px;" class="nicdark_section  "></div>
                                <h1 style="color:#ffffff; padding:px; text-align:center; font-size:100px; line-height:px; letter-spacing: px; font-weight:normal;"
                                    class="  nd_options_font_size_40_important_all_iphone nd_options_third_font ">Local
                                    Fish</h1>
                                <div style="background-color:; height: 40px;" class="nicdark_section  "></div>
                                <div class="nd_options_section nd_options_text_align_center">
                                    <a style="border: px solid ; border-radius:px; letter-spacing:2px; line-height:12px; font-size:12px; background-color:; padding:; margin:; color:#ffffff;"
                                        rel="" href="#"
                                        class="nicdark_display_inline_block  nd_options_font_weight_normal nd_options_second_font banner_button ">CHECK
                                        THE MENU</a>
                                </div>
                                <div style="background-color:; height: 80px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5"
                    data-vc-parallax-image="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/para-02.jpg"
                    class="vc_row wpb_row vc_row-fluid nd_options_vc_parallax_filter_2_5 vc_custom_1548245096415 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 10px;" class="nicdark_section  "></div>


                                <!--START FOCUS NUMBER-->
                                <div style="" class="  nd_options_section nd_options_box_sizing_border_box">

                                    <div class="nd_options_float_left">
                                        <h1 style="color:#ffffff;"
                                            class="nd_options_font_size_60 nd_options_font_weight_normal">02</h1>
                                    </div>

                                    <div class="nd_options_float_left nd_options_margin_left_20">
                                        <div class="nd_options_section nd_options_height_5"></div>
                                        <div class="nd_options_section nd_options_height_2"></div>
                                        <div class="nd_options_section nd_options_height_2"></div>
                                        <p class="nd_options_letter_spacing_2 nd_options_line_height_14"
                                            style="color:#ffffff;">NUMBER</p>
                                        <div class="nd_options_section nd_options_height_10"></div>
                                        <p class="nd_options_letter_spacing_2 nd_options_line_height_14"
                                            style="color:#ffffff;">RESTAURANTS</p>
                                    </div>

                                </div>
                                <!--END FOCUS NUMBER-->

                                <div style="background-color:; height: 10px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 10px;" class="nicdark_section  "></div>


                                <!--START FOCUS NUMBER-->
                                <div style="" class="  nd_options_section nd_options_box_sizing_border_box">

                                    <div class="nd_options_float_left">
                                        <h1 style="color:#ffffff;"
                                            class="nd_options_font_size_60 nd_options_font_weight_normal">56</h1>
                                    </div>

                                    <div class="nd_options_float_left nd_options_margin_left_20">
                                        <div class="nd_options_section nd_options_height_5"></div>
                                        <div class="nd_options_section nd_options_height_2"></div>
                                        <div class="nd_options_section nd_options_height_2"></div>
                                        <p class="nd_options_letter_spacing_2 nd_options_line_height_14"
                                            style="color:#ffffff;">NEW FOOD</p>
                                        <div class="nd_options_section nd_options_height_10"></div>
                                        <p class="nd_options_letter_spacing_2 nd_options_line_height_14"
                                            style="color:#ffffff;">MENU DISHES</p>
                                    </div>

                                </div>
                                <!--END FOCUS NUMBER-->

                                <div style="background-color:; height: 10px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 10px;" class="nicdark_section  "></div>


                                <!--START FOCUS NUMBER-->
                                <div style="" class="  nd_options_section nd_options_box_sizing_border_box">

                                    <div class="nd_options_float_left">
                                        <h1 style="color:#ffffff;"
                                            class="nd_options_font_size_60 nd_options_font_weight_normal">73</h1>
                                    </div>

                                    <div class="nd_options_float_left nd_options_margin_left_20">
                                        <div class="nd_options_section nd_options_height_5"></div>
                                        <div class="nd_options_section nd_options_height_2"></div>
                                        <div class="nd_options_section nd_options_height_2"></div>
                                        <p class="nd_options_letter_spacing_2 nd_options_line_height_14"
                                            style="color:#ffffff;">YEARS OF</p>
                                        <div class="nd_options_section nd_options_height_10"></div>
                                        <p class="nd_options_letter_spacing_2 nd_options_line_height_14"
                                            style="color:#ffffff;">EXPERIENCE</p>
                                    </div>

                                </div>
                                <!--END FOCUS NUMBER-->

                                <div style="background-color:; height: 10px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 10px;" class="nicdark_section  "></div>


                                <!--START FOCUS NUMBER-->
                                <div style="" class="  nd_options_section nd_options_box_sizing_border_box">

                                    <div class="nd_options_float_left">
                                        <h1 style="color:#ffffff;"
                                            class="nd_options_font_size_60 nd_options_font_weight_normal">14</h1>
                                    </div>

                                    <div class="nd_options_float_left nd_options_margin_left_20">
                                        <div class="nd_options_section nd_options_height_5"></div>
                                        <div class="nd_options_section nd_options_height_2"></div>
                                        <div class="nd_options_section nd_options_height_2"></div>
                                        <p class="nd_options_letter_spacing_2 nd_options_line_height_14"
                                            style="color:#ffffff;">NEW CHEF</p>
                                        <div class="nd_options_section nd_options_height_10"></div>
                                        <p class="nd_options_letter_spacing_2 nd_options_line_height_14"
                                            style="color:#ffffff;">IN KITCHEN</p>
                                    </div>

                                </div>
                                <!--END FOCUS NUMBER-->

                                <div style="background-color:; height: 10px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1547042844926">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <h2 style="color:#eeeeee; padding:px; text-align:center; font-size:70px; line-height:px; letter-spacing: 0px; font-weight:normal;"
                                    class="   nd_options_third_font ">Best Menus</h2>
                                <h1 style="color:; padding:px; text-align:center; font-size:50px; line-height:px; letter-spacing: px; font-weight:lighter;"
                                    class="  nd_options_font_size_40_important_all_iphone nd_options_first_font ">
                                    SPECIALITIES</h1>
                                <div style="background-color:; height: 35px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1493221721110">
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 15px;" class="nicdark_section  "></div>
                                <div
                                    class="nd_options_section nd_options_position_relative nd_options_list_restaurant ">

                                    <img decoding="async" alt=""
                                        class="nd_options_position_absolute nd_options_left_0 nd_options_position_initial_all_iphone nd_options_width_100_percentage_all_iphone nd_options_z_index_9"
                                        width="80" src="wp-content/uploads/sites/2/2019/01/img-03.jpg">

                                    <div class="nd_options_section nd_options_height_15"></div>
                                    <div class="nd_options_section nd_options_position_relative">
                                        <div
                                            class="nd_options_position_absolute nd_options_height_3 nd_options_width_100_percentage nd_options_bottom_2 nd_options_border_bottom_2_dotted_grey">
                                        </div>
                                        <h4
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_bg_white nd_options_float_left nd_options_position_relative nd_options_padding_right_10">
                                            <strong>PASTA WITH FISH</strong>
                                        </h4>
                                        <h4
                                            class="nd_options_bg_white nd_options_float_right nd_options_position_relative nd_options_padding_left_10">
                                            <strong>$ 39</strong>
                                        </h4>
                                    </div>
                                    <div class="nd_options_section nd_options_height_10"></div>
                                    <div class="nd_options_section">
                                        <p
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_font_weight_lighter nd_options_float_left">
                                            Lorem ipsum dolor sit</p>
                                        <p style="background-color:#c0a58b;"
                                            class=" nd_options_color_white nd_options_display_inline_block nd_options_first_font nd_options_padding_5_10 nd_options_border_radius_15 nd_options_float_right nd_options_font_size_13">
                                            STARTER</p>
                                    </div>
                                </div>
                                <div style="background-color:; height: 30px;" class="nicdark_section  "></div>
                                <div
                                    class="nd_options_section nd_options_position_relative nd_options_list_restaurant ">

                                    <img decoding="async" alt=""
                                        class="nd_options_position_absolute nd_options_left_0 nd_options_position_initial_all_iphone nd_options_width_100_percentage_all_iphone nd_options_z_index_9"
                                        width="80" src="wp-content/uploads/sites/2/2019/01/img-04.jpg">

                                    <div class="nd_options_section nd_options_height_15"></div>
                                    <div class="nd_options_section nd_options_position_relative">
                                        <div
                                            class="nd_options_position_absolute nd_options_height_3 nd_options_width_100_percentage nd_options_bottom_2 nd_options_border_bottom_2_dotted_grey">
                                        </div>
                                        <h4
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_bg_white nd_options_float_left nd_options_position_relative nd_options_padding_right_10">
                                            <strong>FRESH MEAT</strong>
                                        </h4>
                                        <h4
                                            class="nd_options_bg_white nd_options_float_right nd_options_position_relative nd_options_padding_left_10">
                                            <strong>$ 26</strong>
                                        </h4>
                                    </div>
                                    <div class="nd_options_section nd_options_height_10"></div>
                                    <div class="nd_options_section">
                                        <p
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_font_weight_lighter nd_options_float_left">
                                            Lorem ipsum dolor sit amt</p>
                                        <p style="background-color:;"
                                            class=" nd_options_color_grey nd_options_border_1_solid_grey nd_options_display_inline_block nd_options_first_font nd_options_padding_5_10 nd_options_border_radius_15 nd_options_float_right nd_options_font_size_13">
                                            NEW</p>
                                    </div>
                                </div>
                                <div style="background-color:; height: 30px;" class="nicdark_section  "></div>
                                <div
                                    class="nd_options_section nd_options_position_relative nd_options_list_restaurant ">

                                    <img decoding="async" alt=""
                                        class="nd_options_position_absolute nd_options_left_0 nd_options_position_initial_all_iphone nd_options_width_100_percentage_all_iphone nd_options_z_index_9"
                                        width="80" src="wp-content/uploads/sites/2/2019/01/img-05.jpg">

                                    <div class="nd_options_section nd_options_height_15"></div>
                                    <div class="nd_options_section nd_options_position_relative">
                                        <div
                                            class="nd_options_position_absolute nd_options_height_3 nd_options_width_100_percentage nd_options_bottom_2 nd_options_border_bottom_2_dotted_grey">
                                        </div>
                                        <h4
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_bg_white nd_options_float_left nd_options_position_relative nd_options_padding_right_10">
                                            <strong>SPAGHETTI</strong>
                                        </h4>
                                        <h4
                                            class="nd_options_bg_white nd_options_float_right nd_options_position_relative nd_options_padding_left_10">
                                            <strong>$ 37</strong>
                                        </h4>
                                    </div>
                                    <div class="nd_options_section nd_options_height_10"></div>
                                    <div class="nd_options_section">
                                        <p
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_font_weight_lighter nd_options_float_left">
                                            Lorem ipsum dolor sit amt</p>
                                        <p style="background-color:#c0a58b;"
                                            class=" nd_options_color_white nd_options_display_inline_block nd_options_first_font nd_options_padding_5_10 nd_options_border_radius_15 nd_options_float_right nd_options_font_size_13">
                                            NEW</p>
                                    </div>
                                </div>
                                <div style="background-color:; height: 30px;" class="nicdark_section  "></div>
                                <div
                                    class="nd_options_section nd_options_position_relative nd_options_list_restaurant ">

                                    <img decoding="async" alt=""
                                        class="nd_options_position_absolute nd_options_left_0 nd_options_position_initial_all_iphone nd_options_width_100_percentage_all_iphone nd_options_z_index_9"
                                        width="80" src="wp-content/uploads/sites/2/2019/01/img-06.jpg">

                                    <div class="nd_options_section nd_options_height_15"></div>
                                    <div class="nd_options_section nd_options_position_relative">
                                        <div
                                            class="nd_options_position_absolute nd_options_height_3 nd_options_width_100_percentage nd_options_bottom_2 nd_options_border_bottom_2_dotted_grey">
                                        </div>
                                        <h4
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_bg_white nd_options_float_left nd_options_position_relative nd_options_padding_right_10">
                                            <strong>VEGETARIAN SOUP</strong>
                                        </h4>
                                        <h4
                                            class="nd_options_bg_white nd_options_float_right nd_options_position_relative nd_options_padding_left_10">
                                            <strong>$ 42</strong>
                                        </h4>
                                    </div>
                                    <div class="nd_options_section nd_options_height_10"></div>
                                    <div class="nd_options_section">
                                        <p
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_font_weight_lighter nd_options_float_left">
                                            Lorem ipsum dolor sit</p>
                                        <p style="background-color:#c0a58b;"
                                            class=" nd_options_color_white nd_options_display_inline_block nd_options_first_font nd_options_padding_5_10 nd_options_border_radius_15 nd_options_float_right nd_options_font_size_13">
                                            VEGAN</p>
                                    </div>
                                </div>
                                <div style="background-color:; height: 15px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 15px;" class="nicdark_section  "></div>
                                <div
                                    class="nd_options_section nd_options_position_relative nd_options_list_restaurant ">

                                    <img decoding="async" alt=""
                                        class="nd_options_position_absolute nd_options_left_0 nd_options_position_initial_all_iphone nd_options_width_100_percentage_all_iphone nd_options_z_index_9"
                                        width="80" src="wp-content/uploads/sites/2/2019/01/img-07.jpg">

                                    <div class="nd_options_section nd_options_height_15"></div>
                                    <div class="nd_options_section nd_options_position_relative">
                                        <div
                                            class="nd_options_position_absolute nd_options_height_3 nd_options_width_100_percentage nd_options_bottom_2 nd_options_border_bottom_2_dotted_grey">
                                        </div>
                                        <h4
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_bg_white nd_options_float_left nd_options_position_relative nd_options_padding_right_10">
                                            <strong>NOODLES</strong>
                                        </h4>
                                        <h4
                                            class="nd_options_bg_white nd_options_float_right nd_options_position_relative nd_options_padding_left_10">
                                            <strong>$ 16</strong>
                                        </h4>
                                    </div>
                                    <div class="nd_options_section nd_options_height_10"></div>
                                    <div class="nd_options_section">
                                        <p
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_font_weight_lighter nd_options_float_left">
                                            Lorem ipsum dolor sit amt</p>
                                        <p style="background-color:#c0a58b;"
                                            class=" nd_options_color_white nd_options_display_inline_block nd_options_first_font nd_options_padding_5_10 nd_options_border_radius_15 nd_options_float_right nd_options_font_size_13">
                                            NEW</p>
                                    </div>
                                </div>
                                <div style="background-color:; height: 30px;" class="nicdark_section  "></div>
                                <div
                                    class="nd_options_section nd_options_position_relative nd_options_list_restaurant ">

                                    <img decoding="async" alt=""
                                        class="nd_options_position_absolute nd_options_left_0 nd_options_position_initial_all_iphone nd_options_width_100_percentage_all_iphone nd_options_z_index_9"
                                        width="80" src="wp-content/uploads/sites/2/2019/01/img-08.jpg">

                                    <div class="nd_options_section nd_options_height_15"></div>
                                    <div class="nd_options_section nd_options_position_relative">
                                        <div
                                            class="nd_options_position_absolute nd_options_height_3 nd_options_width_100_percentage nd_options_bottom_2 nd_options_border_bottom_2_dotted_grey">
                                        </div>
                                        <h4
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_bg_white nd_options_float_left nd_options_position_relative nd_options_padding_right_10">
                                            <strong>CHICKEN</strong>
                                        </h4>
                                        <h4
                                            class="nd_options_bg_white nd_options_float_right nd_options_position_relative nd_options_padding_left_10">
                                            <strong>$ 19</strong>
                                        </h4>
                                    </div>
                                    <div class="nd_options_section nd_options_height_10"></div>
                                    <div class="nd_options_section">
                                        <p
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_font_weight_lighter nd_options_float_left">
                                            Lorem ipsum dolor sit amt</p>
                                        <p style="background-color:#c0a58b;"
                                            class=" nd_options_color_white nd_options_display_inline_block nd_options_first_font nd_options_padding_5_10 nd_options_border_radius_15 nd_options_float_right nd_options_font_size_13">
                                            NEW</p>
                                    </div>
                                </div>
                                <div style="background-color:; height: 30px;" class="nicdark_section  "></div>
                                <div
                                    class="nd_options_section nd_options_position_relative nd_options_list_restaurant ">

                                    <img decoding="async" alt=""
                                        class="nd_options_position_absolute nd_options_left_0 nd_options_position_initial_all_iphone nd_options_width_100_percentage_all_iphone nd_options_z_index_9"
                                        width="80" src="wp-content/uploads/sites/2/2019/01/img-09.jpg">

                                    <div class="nd_options_section nd_options_height_15"></div>
                                    <div class="nd_options_section nd_options_position_relative">
                                        <div
                                            class="nd_options_position_absolute nd_options_height_3 nd_options_width_100_percentage nd_options_bottom_2 nd_options_border_bottom_2_dotted_grey">
                                        </div>
                                        <h4
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_bg_white nd_options_float_left nd_options_position_relative nd_options_padding_right_10">
                                            <strong>VEGETARIAN FRIED</strong>
                                        </h4>
                                        <h4
                                            class="nd_options_bg_white nd_options_float_right nd_options_position_relative nd_options_padding_left_10">
                                            <strong>$ 34</strong>
                                        </h4>
                                    </div>
                                    <div class="nd_options_section nd_options_height_10"></div>
                                    <div class="nd_options_section">
                                        <p
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_font_weight_lighter nd_options_float_left">
                                            Lorem ipsum dolor</p>
                                        <p style="background-color:#c0a58b;"
                                            class=" nd_options_color_white nd_options_display_inline_block nd_options_first_font nd_options_padding_5_10 nd_options_border_radius_15 nd_options_float_right nd_options_font_size_13">
                                            GLUTAN FREE</p>
                                    </div>
                                </div>
                                <div style="background-color:; height: 30px;" class="nicdark_section  "></div>
                                <div
                                    class="nd_options_section nd_options_position_relative nd_options_list_restaurant ">

                                    <img decoding="async" alt=""
                                        class="nd_options_position_absolute nd_options_left_0 nd_options_position_initial_all_iphone nd_options_width_100_percentage_all_iphone nd_options_z_index_9"
                                        width="80" src="wp-content/uploads/sites/2/2019/01/img-10.jpg">

                                    <div class="nd_options_section nd_options_height_15"></div>
                                    <div class="nd_options_section nd_options_position_relative">
                                        <div
                                            class="nd_options_position_absolute nd_options_height_3 nd_options_width_100_percentage nd_options_bottom_2 nd_options_border_bottom_2_dotted_grey">
                                        </div>
                                        <h4
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_bg_white nd_options_float_left nd_options_position_relative nd_options_padding_right_10">
                                            <strong>SALMON PASTA</strong>
                                        </h4>
                                        <h4
                                            class="nd_options_bg_white nd_options_float_right nd_options_position_relative nd_options_padding_left_10">
                                            <strong>$ 71</strong>
                                        </h4>
                                    </div>
                                    <div class="nd_options_section nd_options_height_10"></div>
                                    <div class="nd_options_section">
                                        <p
                                            class=" nd_options_padding_left_100 nd_options_padding_0_all_iphone nd_options_font_weight_lighter nd_options_float_left">
                                            Lorem ipsum dolor sit amt</p>
                                        <p style="background-color:;"
                                            class=" nd_options_color_grey nd_options_border_1_solid_grey nd_options_display_inline_block nd_options_first_font nd_options_padding_5_10 nd_options_border_radius_15 nd_options_float_right nd_options_font_size_13">
                                            FISH</p>
                                    </div>
                                </div>
                                <div style="background-color:; height: 15px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1504098002258">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner vc_custom_1491985274415">
                            <div class="wpb_wrapper">
                                <div
                                    class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1548239711672 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-8">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">

                                                <div
                                                    class="nd_options_section nd_options_position_relative home_calltoaction_service">

                                                    <img decoding="async" style="top:5px;" alt=""
                                                        class="nd_options_position_absolute nd_options_left_0"
                                                        width="50" src="wp-content/uploads/sites/2/2019/01/ico-05.png">

                                                    <div style="padding-left:70px;"
                                                        class="nd_options_section nd_options_box_sizing_border_box">

                                                        <h3 class="nd_options_first_font underline_phone "
                                                            style="margin:; color:#ffffff; font-size:30px;line-height:30px;">
                                                            CONTACT US NOW ! <b>+ 12 123 456 789</b></h3>
                                                        <p class="nd_options_second_font  "
                                                            style="margin:10px 0px 0px 0px; color:#ffffff; font-size:17px;line-height:27px;">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>


                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="nd_options_text_align_right wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div style="background-color:; height: 8px;" class="nicdark_section  ">
                                                </div>

                                                <a style="border: px solid ; border-radius:3px; letter-spacing:px; line-height:16px; font-size:16px; background-color:#c0a58a; padding:15px 35px; margin:; color:#ffffff;"
                                                    rel="" href="book-a-table/index.php"
                                                    class="nicdark_display_inline_block nd_options_float_right nd_options_font_weight_normal nd_options_first_font home_calltoaction_service_button ">BOOK
                                                    A TABLE</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end content-->

            </div>
            <!--#post-->


        </div>
        <!--end container-->

        <!--page margin-->




        <!--START footer-->
        <div id="nd_options_footer_5" class="nd_options_section">

            <!--start nd_options_container-->
            <div class="nd_options_container nd_options_clearfix">

                <div data-vc-full-width="true" data-vc-full-width-init="false"
                    class="vc_row wpb_row vc_row-fluid vc_custom_1548407428133 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner vc_custom_1546960333569">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 20px;" class="nicdark_section  "></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="footer_social_column wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">

                                                <a style="margin:5px; border: px solid ; border-radius:px; background-color:; padding:; "
                                                    rel="" href="#"
                                                    class="nicdark_display_inline_block nd_options_float_left  "><img
                                                        decoding="async" class="nd_options_float_left" alt="" width="20"
                                                        src="wp-content/uploads/sites/2/2019/01/social-1.png"></a>



                                                <a style="margin:5px; border: px solid ; border-radius:px; background-color:; padding:; "
                                                    rel="" href="#"
                                                    class="nicdark_display_inline_block nd_options_float_left  "><img
                                                        decoding="async" class="nd_options_float_left" alt="" width="20"
                                                        src="wp-content/uploads/sites/2/2019/01/social-3.png"></a>



                                                <a style="margin:5px; border: px solid ; border-radius:px; background-color:; padding:; "
                                                    rel="" href="#"
                                                    class="nicdark_display_inline_block nd_options_float_left  "><img
                                                        decoding="async" class="nd_options_float_left" alt="" width="20"
                                                        src="wp-content/uploads/sites/2/2019/01/social-2.png"></a>



                                                <a style="margin:5px; border: px solid ; border-radius:px; background-color:; padding:; "
                                                    rel="" href="#"
                                                    class="nicdark_display_inline_block nd_options_float_left  "><img
                                                        decoding="async" class="nd_options_float_left" alt="" width="20"
                                                        src="wp-content/uploads/sites/2/2019/01/social-4.png"></a>



                                                <a style="margin:5px; border: px solid ; border-radius:px; background-color:; padding:; "
                                                    rel="" href="#"
                                                    class="nicdark_display_inline_block nd_options_float_left  "><img
                                                        decoding="async" class="nd_options_float_left" alt="" width="20"
                                                        src="wp-content/uploads/sites/2/2019/01/social-5.png"></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="background-color:; height: 5px;" class="nicdark_section  "></div>
                                <p style="color:#ffffff; padding:px; text-align:center; font-size:12px; line-height:px; letter-spacing: 2px; font-weight:normal;"
                                    class="   nd_options_second_font ">STAY TUNED</p>
                                <div style="background-color:; height: 20px;" class="nicdark_section  "></div>
                                <p style="color:#ffffff; padding:px; text-align:center; font-size:14px; line-height:px; letter-spacing: 1px; font-weight:normal;"
                                    class="   nd_options_second_font ">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Praesent eu libero elit.</p>
                                <div style="background-color:; height: 20px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner vc_custom_1546960342514">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 20px;" class="nicdark_section  "></div>
                                <div style="text-align:center;" class="nd_options_section">
                                    <img decoding="async" alt="" style="width:120px;"
                                        class=" nd_options_margin_0 nd_options_padding_0 "
                                        src="wp-content/uploads/sites/2/2019/01/logo.png">
                                </div>
                                <div style="background-color:; height: 15px;" class="nicdark_section  "></div>
                                <p style="color:#ffffff; padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 1px; font-weight:normal;"
                                    class="nd_options_second_font"><a href="mailto:info@restaurant.com"
                                        style="color:#fff">info@restaurant.com</a></p>
                                <p style="color:#ffffff; padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 1px; font-weight:normal;"
                                    class="   nd_options_second_font ">+12 476 357 384</p>
                                <div style="background-color:; height: 20px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner vc_custom_1546960350557">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 20px;" class="nicdark_section  "></div>
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <p style="text-align: center;letter-spacing: 2px">
                                            <a href="index.php" style="color: #ffffff; text-decoration: none;">HOME</a>
                                        </p>
                                        <p style="text-align: center;letter-spacing: 2px">
                                            <a href="about-us-1/index.php"
                                                style="color: #ffffff; text-decoration: none;">ABOUT US</a>
                                        </p>
                                        <p style="text-align: center;letter-spacing: 2px">
                                            <a href="services/index.php"
                                                style="color: #ffffff; text-decoration: none;">SERVICES</a>
                                        </p>
                                        <p style="text-align: center;letter-spacing: 2px">
                                            <a href="book-a-table/index.php"
                                                style="color: #ffffff; text-decoration: none;">BOOKING</a>
                                        </p>
                                        <p style="text-align: center;letter-spacing: 2px">
                                            <a href="menu-1/index.php"
                                                style="color: #ffffff; text-decoration: none;">MENU</a>
                                        </p>
                                        <p style="text-align: center;letter-spacing: 2px">
                                            <a href="contact-1/index.php"
                                                style="color: #ffffff; text-decoration: none;">CONTACTS</a>
                                        </p>
                                    </div>
                                </div>
                                <div style="background-color:; height: 20px;" class="nicdark_section  "></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div data-vc-full-width="true" data-vc-full-width-init="false"
                    class="vc_row wpb_row vc_row-fluid vc_custom_1548255563532">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <p style="color:; padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;"
                                    class="   nd_options_second_font ">Copyright 2019</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <style>
                    .vc_custom_1548407428133 {
                        padding-top: 50px !important;
                        padding-bottom: 50px !important;
                        background-image: url(wp-content/uploads/sites/2/2019/01/para-053788.jpg?id=591) !important;
                        background-position: center !important;
                        background-repeat: no-repeat !important;
                        background-size: cover !important;
                    }

                    .vc_custom_1546960333569 {
                        padding-right: 80px !important;
                        padding-left: 80px !important;
                    }

                    .vc_custom_1546960342514 {
                        padding-right: 80px !important;
                        padding-left: 80px !important;
                    }

                    .vc_custom_1546960350557 {
                        padding-right: 80px !important;
                        padding-left: 80px !important;
                    }

                    .vc_custom_1548255563532 {
                        padding-top: 10px !important;
                        padding-bottom: 10px !important;
                    }
                </style>
            </div>
            <!--end container-->

        </div>
        <!--END footer-->



    </div>
    <!--END theme-->


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-49425562-23"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-49425562-23');
    </script>



    <script type='text/javascript'>
        (function () {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <script type="text/javascript">
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        }
    </script>
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='wp-content/plugins/woocommerce/assets/client/blocks/wc-blockse2cc.css?ver=wc-9.3.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='nd_options_magnific_popup_style-css'
        href='wp-content/plugins/nd-shortcodes/shortcodes/custom/magic-popup/css/magnific-popup109c.css?ver=6.6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-ui-datepicker-layout-1-css-css'
        href='wp-content/plugins/nd-restaurant-reservations/addons/visual/search/css/datepicker-layout-1109c.css?ver=6.6.2'
        type='text/css' media='all' />
    <script type="text/javascript" src="wp-includes/js/dist/hooks.min2757.js?ver=2810c76e705dd1a53b18"
        id="wp-hooks-js"></script>
    <script type="text/javascript" src="wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6"
        id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/swv/js/indexe2db.js?ver=5.9.8"
        id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = { "api": { "root": "https:\/\/www.nicdark-themes.com\/themes\/restaurant\/wp\/demo\/restaurant\/wp-json\/", "namespace": "contact-form-7\/v1" } };
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/js/indexe2db.js?ver=5.9.8"
        id="contact-form-7-js"></script>
    <script type="text/javascript" src="wp-includes/js/comment-reply.min109c.js?ver=6.6.2" id="comment-reply-js"
        async="async" data-wp-strategy="async"></script>
    <script type="text/javascript" src="wp-content/themes/ristorante/js/nicdark_navigation109c.js?ver=6.6.2"
        id="nicdark_navigation-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.minc60b.js?ver=9.3.3"
        id="sourcebuster-js-js"></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = { "params": { "lifetime": 1.0000000000000000818030539140313095458623138256371021270751953125e-5, "session": 30, "base64": false, "ajaxurl": "https:\/\/www.nicdark-themes.com\/themes\/restaurant\/wp\/demo\/restaurant\/wp-admin\/admin-ajax.php", "prefix": "wc_order_attribution_", "allowTracking": true }, "fields": { "source_type": "current.typ", "referrer": "current_add.rf", "utm_campaign": "current.cmp", "utm_source": "current.src", "utm_medium": "current.mdm", "utm_content": "current.cnt", "utm_id": "current.id", "utm_term": "current.trm", "utm_source_platform": "current.plt", "utm_creative_format": "current.fmt", "utm_marketing_tactic": "current.tct", "session_entry": "current_add.ep", "session_start_time": "current_add.fd", "session_pages": "session.pgs", "session_count": "udata.vst", "user_agent": "udata.uag" } };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.minc60b.js?ver=9.3.3"
        id="wc-order-attribution-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min40df.js?ver=5.6"
        id="wpb_composer_front_js-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/nd-shortcodes/shortcodes/custom/magic-popup/js/jquery.magnific-popup.min109c.js?ver=6.6.2"
        id="nd_options_magnific_popup_plugin-js"></script>
    <script type="text/javascript" src="wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0" id="imagesloaded-js"></script>
    <script type="text/javascript" src="wp-includes/js/masonry.min3a05.js?ver=4.2.2" id="masonry-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min40df.js?ver=5.6"
        id="vc_jquery_skrollr_js-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3"
        id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/ui/datepicker.minb37e.js?ver=1.13.3"
        id="jquery-ui-datepicker-js"></script>


</body>

<!-- Mirrored from www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Apr 2025 15:14:10 GMT -->

</html>