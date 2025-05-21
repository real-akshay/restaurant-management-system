<?php
include('../../../authentication.php');
include('../../../../config/dbcon.php');

?>
<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Checkout &#8211; Restaurant DEMO</title>
    <meta name='robots' content='max-image-preview:large, noindex, follow' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="Restaurant DEMO &raquo; Feed"
        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Restaurant DEMO &raquo; Comments Feed"
        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/comments/feed/" />
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
        href='https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-includes/css/dist/block-library/style.min.css?ver=6.6.2'
        type='text/css' media='all' />
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
        href='https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/nd-theme-demos-switcher/css/style.css?ver=6.6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.9.8'
        type='text/css' media='all' />
    <link rel='stylesheet' id='nd_rst_style-css'
        href='https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/nd-restaurant-reservations/assets/css/style.css?ver=6.6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='nd_options_style-css'
        href='https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/nd-shortcodes/css/style.css?ver=6.6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='nd_options_font_family_h-css'
        href='https://fonts.googleapis.com/css?family=Quicksand%3A300%2C400%2C500%2C700&#038;ver=6.6.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='nd_options_font_family_p-css'
        href='https://fonts.googleapis.com/css?family=Quicksand%3A300%2C400%2C500%2C700&#038;ver=6.6.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='nd_options_font_family_third-css'
        href='https://fonts.googleapis.com/css?family=Kristi&#038;ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.8.1'
        type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <link rel='stylesheet' id='select2-css'
        href='https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/css/select2.css?ver=9.3.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=9.3.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=9.3.3'
        type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=9.3.3'
        type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='nicdark-style-css'
        href='https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/themes/ristorante/style.css?ver=6.6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='nicdark-fonts-css'
        href='//fonts.googleapis.com/css?family=Gilda%2BDisplay%7CRoboto%3A300%2C400%2C700&#038;ver=1.0.0'
        type='text/css' media='all' />
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.8.1"
        id="tp-tools-js"></script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.8.1"
        id="revmin-js"></script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.9.3.3"
        id="jquery-blockui-js" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = { "ajax_url": "\/themes\/restaurant\/wp\/demo\/restaurant\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/themes\/restaurant\/wp\/demo\/restaurant\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/www.nicdark-themes.com\/themes\/restaurant\/wp\/demo\/restaurant\/cart\/", "is_cart": "", "cart_redirect_after_add": "no" };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=9.3.3"
        id="wc-add-to-cart-js" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.9-wc.9.3.3"
        id="selectWoo-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.9.3.3"
        id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = { "ajax_url": "\/themes\/restaurant\/wp\/demo\/restaurant\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/themes\/restaurant\/wp\/demo\/restaurant\/?wc-ajax=%%endpoint%%" };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=9.3.3"
        id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-country-select-js-extra">
        /* <![CDATA[ */
        var wc_country_select_params = { "countries": "{\"AF\":[],\"AL\":{\"AL-01\":\"Berat\",\"AL-09\":\"Dib\\u00ebr\",\"AL-02\":\"Durr\\u00ebs\",\"AL-03\":\"Elbasan\",\"AL-04\":\"Fier\",\"AL-05\":\"Gjirokast\\u00ebr\",\"AL-06\":\"Kor\\u00e7\\u00eb\",\"AL-07\":\"Kuk\\u00ebs\",\"AL-08\":\"Lezh\\u00eb\",\"AL-10\":\"Shkod\\u00ebr\",\"AL-11\":\"Tirana\",\"AL-12\":\"Vlor\\u00eb\"},\"AO\":{\"BGO\":\"Bengo\",\"BLU\":\"Benguela\",\"BIE\":\"Bi\\u00e9\",\"CAB\":\"Cabinda\",\"CNN\":\"Cunene\",\"HUA\":\"Huambo\",\"HUI\":\"Hu\\u00edla\",\"CCU\":\"Kuando Kubango\",\"CNO\":\"Kwanza-Norte\",\"CUS\":\"Kwanza-Sul\",\"LUA\":\"Luanda\",\"LNO\":\"Lunda-Norte\",\"LSU\":\"Lunda-Sul\",\"MAL\":\"Malanje\",\"MOX\":\"Moxico\",\"NAM\":\"Namibe\",\"UIG\":\"U\\u00edge\",\"ZAI\":\"Zaire\"},\"AR\":{\"C\":\"Ciudad Aut\\u00f3noma de Buenos Aires\",\"B\":\"Buenos Aires\",\"K\":\"Catamarca\",\"H\":\"Chaco\",\"U\":\"Chubut\",\"X\":\"C\\u00f3rdoba\",\"W\":\"Corrientes\",\"E\":\"Entre R\\u00edos\",\"P\":\"Formosa\",\"Y\":\"Jujuy\",\"L\":\"La Pampa\",\"F\":\"La Rioja\",\"M\":\"Mendoza\",\"N\":\"Misiones\",\"Q\":\"Neuqu\\u00e9n\",\"R\":\"R\\u00edo Negro\",\"A\":\"Salta\",\"J\":\"San Juan\",\"D\":\"San Luis\",\"Z\":\"Santa Cruz\",\"S\":\"Santa Fe\",\"G\":\"Santiago del Estero\",\"V\":\"Tierra del Fuego\",\"T\":\"Tucum\\u00e1n\"},\"AT\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"AX\":[],\"BD\":{\"BD-05\":\"Bagerhat\",\"BD-01\":\"Bandarban\",\"BD-02\":\"Barguna\",\"BD-06\":\"Barishal\",\"BD-07\":\"Bhola\",\"BD-03\":\"Bogura\",\"BD-04\":\"Brahmanbaria\",\"BD-09\":\"Chandpur\",\"BD-10\":\"Chattogram\",\"BD-12\":\"Chuadanga\",\"BD-11\":\"Cox's Bazar\",\"BD-08\":\"Cumilla\",\"BD-13\":\"Dhaka\",\"BD-14\":\"Dinajpur\",\"BD-15\":\"Faridpur \",\"BD-16\":\"Feni\",\"BD-19\":\"Gaibandha\",\"BD-18\":\"Gazipur\",\"BD-17\":\"Gopalganj\",\"BD-20\":\"Habiganj\",\"BD-21\":\"Jamalpur\",\"BD-22\":\"Jashore\",\"BD-25\":\"Jhalokati\",\"BD-23\":\"Jhenaidah\",\"BD-24\":\"Joypurhat\",\"BD-29\":\"Khagrachhari\",\"BD-27\":\"Khulna\",\"BD-26\":\"Kishoreganj\",\"BD-28\":\"Kurigram\",\"BD-30\":\"Kushtia\",\"BD-31\":\"Lakshmipur\",\"BD-32\":\"Lalmonirhat\",\"BD-36\":\"Madaripur\",\"BD-37\":\"Magura\",\"BD-33\":\"Manikganj \",\"BD-39\":\"Meherpur\",\"BD-38\":\"Moulvibazar\",\"BD-35\":\"Munshiganj\",\"BD-34\":\"Mymensingh\",\"BD-48\":\"Naogaon\",\"BD-43\":\"Narail\",\"BD-40\":\"Narayanganj\",\"BD-42\":\"Narsingdi\",\"BD-44\":\"Natore\",\"BD-45\":\"Nawabganj\",\"BD-41\":\"Netrakona\",\"BD-46\":\"Nilphamari\",\"BD-47\":\"Noakhali\",\"BD-49\":\"Pabna\",\"BD-52\":\"Panchagarh\",\"BD-51\":\"Patuakhali\",\"BD-50\":\"Pirojpur\",\"BD-53\":\"Rajbari\",\"BD-54\":\"Rajshahi\",\"BD-56\":\"Rangamati\",\"BD-55\":\"Rangpur\",\"BD-58\":\"Satkhira\",\"BD-62\":\"Shariatpur\",\"BD-57\":\"Sherpur\",\"BD-59\":\"Sirajganj\",\"BD-61\":\"Sunamganj\",\"BD-60\":\"Sylhet\",\"BD-63\":\"Tangail\",\"BD-64\":\"Thakurgaon\"},\"BE\":[],\"BG\":{\"BG-01\":\"Blagoevgrad\",\"BG-02\":\"Burgas\",\"BG-08\":\"Dobrich\",\"BG-07\":\"Gabrovo\",\"BG-26\":\"Haskovo\",\"BG-09\":\"Kardzhali\",\"BG-10\":\"Kyustendil\",\"BG-11\":\"Lovech\",\"BG-12\":\"Montana\",\"BG-13\":\"Pazardzhik\",\"BG-14\":\"Pernik\",\"BG-15\":\"Pleven\",\"BG-16\":\"Plovdiv\",\"BG-17\":\"Razgrad\",\"BG-18\":\"Ruse\",\"BG-27\":\"Shumen\",\"BG-19\":\"Silistra\",\"BG-20\":\"Sliven\",\"BG-21\":\"Smolyan\",\"BG-23\":\"Sofia District\",\"BG-22\":\"Sofia\",\"BG-24\":\"Stara Zagora\",\"BG-25\":\"Targovishte\",\"BG-03\":\"Varna\",\"BG-04\":\"Veliko Tarnovo\",\"BG-05\":\"Vidin\",\"BG-06\":\"Vratsa\",\"BG-28\":\"Yambol\"},\"BH\":[],\"BI\":[],\"BJ\":{\"AL\":\"Alibori\",\"AK\":\"Atakora\",\"AQ\":\"Atlantique\",\"BO\":\"Borgou\",\"CO\":\"Collines\",\"KO\":\"Kouffo\",\"DO\":\"Donga\",\"LI\":\"Littoral\",\"MO\":\"Mono\",\"OU\":\"Ou\\u00e9m\\u00e9\",\"PL\":\"Plateau\",\"ZO\":\"Zou\"},\"BO\":{\"BO-B\":\"Beni\",\"BO-H\":\"Chuquisaca\",\"BO-C\":\"Cochabamba\",\"BO-L\":\"La Paz\",\"BO-O\":\"Oruro\",\"BO-N\":\"Pando\",\"BO-P\":\"Potos\\u00ed\",\"BO-S\":\"Santa Cruz\",\"BO-T\":\"Tarija\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\\u00e1\",\"AM\":\"Amazonas\",\"BA\":\"Bahia\",\"CE\":\"Cear\\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\\u00edrito Santo\",\"GO\":\"Goi\\u00e1s\",\"MA\":\"Maranh\\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\\u00e1\",\"PB\":\"Para\\u00edba\",\"PR\":\"Paran\\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NL\":\"Newfoundland and Labrador\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CH\":{\"AG\":\"Aargau\",\"AR\":\"Appenzell Ausserrhoden\",\"AI\":\"Appenzell Innerrhoden\",\"BL\":\"Basel-Landschaft\",\"BS\":\"Basel-Stadt\",\"BE\":\"Bern\",\"FR\":\"Fribourg\",\"GE\":\"Geneva\",\"GL\":\"Glarus\",\"GR\":\"Graub\\u00fcnden\",\"JU\":\"Jura\",\"LU\":\"Luzern\",\"NE\":\"Neuch\\u00e2tel\",\"NW\":\"Nidwalden\",\"OW\":\"Obwalden\",\"SH\":\"Schaffhausen\",\"SZ\":\"Schwyz\",\"SO\":\"Solothurn\",\"SG\":\"St. Gallen\",\"TG\":\"Thurgau\",\"TI\":\"Ticino\",\"UR\":\"Uri\",\"VS\":\"Valais\",\"VD\":\"Vaud\",\"ZG\":\"Zug\",\"ZH\":\"Z\\u00fcrich\"},\"CL\":{\"CL-AI\":\"Ais\\u00e9n del General Carlos Iba\\u00f1ez del Campo\",\"CL-AN\":\"Antofagasta\",\"CL-AP\":\"Arica y Parinacota\",\"CL-AR\":\"La Araucan\\u00eda\",\"CL-AT\":\"Atacama\",\"CL-BI\":\"Biob\\u00edo\",\"CL-CO\":\"Coquimbo\",\"CL-LI\":\"Libertador General Bernardo O'Higgins\",\"CL-LL\":\"Los Lagos\",\"CL-LR\":\"Los R\\u00edos\",\"CL-MA\":\"Magallanes\",\"CL-ML\":\"Maule\",\"CL-NB\":\"\\u00d1uble\",\"CL-RM\":\"Regi\\u00f3n Metropolitana de Santiago\",\"CL-TA\":\"Tarapac\\u00e1\",\"CL-VS\":\"Valpara\\u00edso\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \\u4e91\\u5357\",\"CN2\":\"Beijing \\\/ \\u5317\\u4eac\",\"CN3\":\"Tianjin \\\/ \\u5929\\u6d25\",\"CN4\":\"Hebei \\\/ \\u6cb3\\u5317\",\"CN5\":\"Shanxi \\\/ \\u5c71\\u897f\",\"CN6\":\"Inner Mongolia \\\/ \\u5167\\u8499\\u53e4\",\"CN7\":\"Liaoning \\\/ \\u8fbd\\u5b81\",\"CN8\":\"Jilin \\\/ \\u5409\\u6797\",\"CN9\":\"Heilongjiang \\\/ \\u9ed1\\u9f99\\u6c5f\",\"CN10\":\"Shanghai \\\/ \\u4e0a\\u6d77\",\"CN11\":\"Jiangsu \\\/ \\u6c5f\\u82cf\",\"CN12\":\"Zhejiang \\\/ \\u6d59\\u6c5f\",\"CN13\":\"Anhui \\\/ \\u5b89\\u5fbd\",\"CN14\":\"Fujian \\\/ \\u798f\\u5efa\",\"CN15\":\"Jiangxi \\\/ \\u6c5f\\u897f\",\"CN16\":\"Shandong \\\/ \\u5c71\\u4e1c\",\"CN17\":\"Henan \\\/ \\u6cb3\\u5357\",\"CN18\":\"Hubei \\\/ \\u6e56\\u5317\",\"CN19\":\"Hunan \\\/ \\u6e56\\u5357\",\"CN20\":\"Guangdong \\\/ \\u5e7f\\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \\u5e7f\\u897f\\u58ee\\u65cf\",\"CN22\":\"Hainan \\\/ \\u6d77\\u5357\",\"CN23\":\"Chongqing \\\/ \\u91cd\\u5e86\",\"CN24\":\"Sichuan \\\/ \\u56db\\u5ddd\",\"CN25\":\"Guizhou \\\/ \\u8d35\\u5dde\",\"CN26\":\"Shaanxi \\\/ \\u9655\\u897f\",\"CN27\":\"Gansu \\\/ \\u7518\\u8083\",\"CN28\":\"Qinghai \\\/ \\u9752\\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \\u5b81\\u590f\",\"CN30\":\"Macao \\\/ \\u6fb3\\u95e8\",\"CN31\":\"Tibet \\\/ \\u897f\\u85cf\",\"CN32\":\"Xinjiang \\\/ \\u65b0\\u7586\"},\"CO\":{\"CO-AMA\":\"Amazonas\",\"CO-ANT\":\"Antioquia\",\"CO-ARA\":\"Arauca\",\"CO-ATL\":\"Atl\\u00e1ntico\",\"CO-BOL\":\"Bol\\u00edvar\",\"CO-BOY\":\"Boyac\\u00e1\",\"CO-CAL\":\"Caldas\",\"CO-CAQ\":\"Caquet\\u00e1\",\"CO-CAS\":\"Casanare\",\"CO-CAU\":\"Cauca\",\"CO-CES\":\"Cesar\",\"CO-CHO\":\"Choc\\u00f3\",\"CO-COR\":\"C\\u00f3rdoba\",\"CO-CUN\":\"Cundinamarca\",\"CO-DC\":\"Capital District\",\"CO-GUA\":\"Guain\\u00eda\",\"CO-GUV\":\"Guaviare\",\"CO-HUI\":\"Huila\",\"CO-LAG\":\"La Guajira\",\"CO-MAG\":\"Magdalena\",\"CO-MET\":\"Meta\",\"CO-NAR\":\"Nari\\u00f1o\",\"CO-NSA\":\"Norte de Santander\",\"CO-PUT\":\"Putumayo\",\"CO-QUI\":\"Quind\\u00edo\",\"CO-RIS\":\"Risaralda\",\"CO-SAN\":\"Santander\",\"CO-SAP\":\"San Andr\\u00e9s & Providencia\",\"CO-SUC\":\"Sucre\",\"CO-TOL\":\"Tolima\",\"CO-VAC\":\"Valle del Cauca\",\"CO-VAU\":\"Vaup\\u00e9s\",\"CO-VID\":\"Vichada\"},\"CR\":{\"CR-A\":\"Alajuela\",\"CR-C\":\"Cartago\",\"CR-G\":\"Guanacaste\",\"CR-H\":\"Heredia\",\"CR-L\":\"Lim\\u00f3n\",\"CR-P\":\"Puntarenas\",\"CR-SJ\":\"San Jos\\u00e9\"},\"CZ\":[],\"DE\":{\"DE-BW\":\"Baden-W\\u00fcrttemberg\",\"DE-BY\":\"Bavaria\",\"DE-BE\":\"Berlin\",\"DE-BB\":\"Brandenburg\",\"DE-HB\":\"Bremen\",\"DE-HH\":\"Hamburg\",\"DE-HE\":\"Hesse\",\"DE-MV\":\"Mecklenburg-Vorpommern\",\"DE-NI\":\"Lower Saxony\",\"DE-NW\":\"North Rhine-Westphalia\",\"DE-RP\":\"Rhineland-Palatinate\",\"DE-SL\":\"Saarland\",\"DE-SN\":\"Saxony\",\"DE-ST\":\"Saxony-Anhalt\",\"DE-SH\":\"Schleswig-Holstein\",\"DE-TH\":\"Thuringia\"},\"DK\":[],\"DO\":{\"DO-01\":\"Distrito Nacional\",\"DO-02\":\"Azua\",\"DO-03\":\"Baoruco\",\"DO-04\":\"Barahona\",\"DO-33\":\"Cibao Nordeste\",\"DO-34\":\"Cibao Noroeste\",\"DO-35\":\"Cibao Norte\",\"DO-36\":\"Cibao Sur\",\"DO-05\":\"Dajab\\u00f3n\",\"DO-06\":\"Duarte\",\"DO-08\":\"El Seibo\",\"DO-37\":\"El Valle\",\"DO-07\":\"El\\u00edas Pi\\u00f1a\",\"DO-38\":\"Enriquillo\",\"DO-09\":\"Espaillat\",\"DO-30\":\"Hato Mayor\",\"DO-19\":\"Hermanas Mirabal\",\"DO-39\":\"Hig\\u00fcamo\",\"DO-10\":\"Independencia\",\"DO-11\":\"La Altagracia\",\"DO-12\":\"La Romana\",\"DO-13\":\"La Vega\",\"DO-14\":\"Mar\\u00eda Trinidad S\\u00e1nchez\",\"DO-28\":\"Monse\\u00f1or Nouel\",\"DO-15\":\"Monte Cristi\",\"DO-29\":\"Monte Plata\",\"DO-40\":\"Ozama\",\"DO-16\":\"Pedernales\",\"DO-17\":\"Peravia\",\"DO-18\":\"Puerto Plata\",\"DO-20\":\"Saman\\u00e1\",\"DO-21\":\"San Crist\\u00f3bal\",\"DO-31\":\"San Jos\\u00e9 de Ocoa\",\"DO-22\":\"San Juan\",\"DO-23\":\"San Pedro de Macor\\u00eds\",\"DO-24\":\"S\\u00e1nchez Ram\\u00edrez\",\"DO-25\":\"Santiago\",\"DO-26\":\"Santiago Rodr\\u00edguez\",\"DO-32\":\"Santo Domingo\",\"DO-41\":\"Valdesia\",\"DO-27\":\"Valverde\",\"DO-42\":\"Yuma\"},\"DZ\":{\"DZ-01\":\"Adrar\",\"DZ-02\":\"Chlef\",\"DZ-03\":\"Laghouat\",\"DZ-04\":\"Oum El Bouaghi\",\"DZ-05\":\"Batna\",\"DZ-06\":\"B\\u00e9ja\\u00efa\",\"DZ-07\":\"Biskra\",\"DZ-08\":\"B\\u00e9char\",\"DZ-09\":\"Blida\",\"DZ-10\":\"Bouira\",\"DZ-11\":\"Tamanghasset\",\"DZ-12\":\"T\\u00e9bessa\",\"DZ-13\":\"Tlemcen\",\"DZ-14\":\"Tiaret\",\"DZ-15\":\"Tizi Ouzou\",\"DZ-16\":\"Algiers\",\"DZ-17\":\"Djelfa\",\"DZ-18\":\"Jijel\",\"DZ-19\":\"S\\u00e9tif\",\"DZ-20\":\"Sa\\u00efda\",\"DZ-21\":\"Skikda\",\"DZ-22\":\"Sidi Bel Abb\\u00e8s\",\"DZ-23\":\"Annaba\",\"DZ-24\":\"Guelma\",\"DZ-25\":\"Constantine\",\"DZ-26\":\"M\\u00e9d\\u00e9a\",\"DZ-27\":\"Mostaganem\",\"DZ-28\":\"M\\u2019Sila\",\"DZ-29\":\"Mascara\",\"DZ-30\":\"Ouargla\",\"DZ-31\":\"Oran\",\"DZ-32\":\"El Bayadh\",\"DZ-33\":\"Illizi\",\"DZ-34\":\"Bordj Bou Arr\\u00e9ridj\",\"DZ-35\":\"Boumerd\\u00e8s\",\"DZ-36\":\"El Tarf\",\"DZ-37\":\"Tindouf\",\"DZ-38\":\"Tissemsilt\",\"DZ-39\":\"El Oued\",\"DZ-40\":\"Khenchela\",\"DZ-41\":\"Souk Ahras\",\"DZ-42\":\"Tipasa\",\"DZ-43\":\"Mila\",\"DZ-44\":\"A\\u00efn Defla\",\"DZ-45\":\"Naama\",\"DZ-46\":\"A\\u00efn T\\u00e9mouchent\",\"DZ-47\":\"Gharda\\u00efa\",\"DZ-48\":\"Relizane\"},\"EE\":[],\"EC\":{\"EC-A\":\"Azuay\",\"EC-B\":\"Bol\\u00edvar\",\"EC-F\":\"Ca\\u00f1ar\",\"EC-C\":\"Carchi\",\"EC-H\":\"Chimborazo\",\"EC-X\":\"Cotopaxi\",\"EC-O\":\"El Oro\",\"EC-E\":\"Esmeraldas\",\"EC-W\":\"Gal\\u00e1pagos\",\"EC-G\":\"Guayas\",\"EC-I\":\"Imbabura\",\"EC-L\":\"Loja\",\"EC-R\":\"Los R\\u00edos\",\"EC-M\":\"Manab\\u00ed\",\"EC-S\":\"Morona-Santiago\",\"EC-N\":\"Napo\",\"EC-D\":\"Orellana\",\"EC-Y\":\"Pastaza\",\"EC-P\":\"Pichincha\",\"EC-SE\":\"Santa Elena\",\"EC-SD\":\"Santo Domingo de los Ts\\u00e1chilas\",\"EC-U\":\"Sucumb\\u00edos\",\"EC-T\":\"Tungurahua\",\"EC-Z\":\"Zamora-Chinchipe\"},\"EG\":{\"EGALX\":\"Alexandria\",\"EGASN\":\"Aswan\",\"EGAST\":\"Asyut\",\"EGBA\":\"Red Sea\",\"EGBH\":\"Beheira\",\"EGBNS\":\"Beni Suef\",\"EGC\":\"Cairo\",\"EGDK\":\"Dakahlia\",\"EGDT\":\"Damietta\",\"EGFYM\":\"Faiyum\",\"EGGH\":\"Gharbia\",\"EGGZ\":\"Giza\",\"EGIS\":\"Ismailia\",\"EGJS\":\"South Sinai\",\"EGKB\":\"Qalyubia\",\"EGKFS\":\"Kafr el-Sheikh\",\"EGKN\":\"Qena\",\"EGLX\":\"Luxor\",\"EGMN\":\"Minya\",\"EGMNF\":\"Monufia\",\"EGMT\":\"Matrouh\",\"EGPTS\":\"Port Said\",\"EGSHG\":\"Sohag\",\"EGSHR\":\"Al Sharqia\",\"EGSIN\":\"North Sinai\",\"EGSUZ\":\"Suez\",\"EGWAD\":\"New Valley\"},\"ES\":{\"C\":\"A Coru\\u00f1a\",\"VI\":\"Araba\\\/\\u00c1lava\",\"AB\":\"Albacete\",\"A\":\"Alicante\",\"AL\":\"Almer\\u00eda\",\"O\":\"Asturias\",\"AV\":\"\\u00c1vila\",\"BA\":\"Badajoz\",\"PM\":\"Baleares\",\"B\":\"Barcelona\",\"BU\":\"Burgos\",\"CC\":\"C\\u00e1ceres\",\"CA\":\"C\\u00e1diz\",\"S\":\"Cantabria\",\"CS\":\"Castell\\u00f3n\",\"CE\":\"Ceuta\",\"CR\":\"Ciudad Real\",\"CO\":\"C\\u00f3rdoba\",\"CU\":\"Cuenca\",\"GI\":\"Girona\",\"GR\":\"Granada\",\"GU\":\"Guadalajara\",\"SS\":\"Gipuzkoa\",\"H\":\"Huelva\",\"HU\":\"Huesca\",\"J\":\"Ja\\u00e9n\",\"LO\":\"La Rioja\",\"GC\":\"Las Palmas\",\"LE\":\"Le\\u00f3n\",\"L\":\"Lleida\",\"LU\":\"Lugo\",\"M\":\"Madrid\",\"MA\":\"M\\u00e1laga\",\"ML\":\"Melilla\",\"MU\":\"Murcia\",\"NA\":\"Navarra\",\"OR\":\"Ourense\",\"P\":\"Palencia\",\"PO\":\"Pontevedra\",\"SA\":\"Salamanca\",\"TF\":\"Santa Cruz de Tenerife\",\"SG\":\"Segovia\",\"SE\":\"Sevilla\",\"SO\":\"Soria\",\"T\":\"Tarragona\",\"TE\":\"Teruel\",\"TO\":\"Toledo\",\"V\":\"Valencia\",\"VA\":\"Valladolid\",\"BI\":\"Biscay\",\"ZA\":\"Zamora\",\"Z\":\"Zaragoza\"},\"ET\":[],\"FI\":[],\"FR\":[],\"GF\":[],\"GH\":{\"AF\":\"Ahafo\",\"AH\":\"Ashanti\",\"BA\":\"Brong-Ahafo\",\"BO\":\"Bono\",\"BE\":\"Bono East\",\"CP\":\"Central\",\"EP\":\"Eastern\",\"AA\":\"Greater Accra\",\"NE\":\"North East\",\"NP\":\"Northern\",\"OT\":\"Oti\",\"SV\":\"Savannah\",\"UE\":\"Upper East\",\"UW\":\"Upper West\",\"TV\":\"Volta\",\"WP\":\"Western\",\"WN\":\"Western North\"},\"GP\":[],\"GR\":{\"I\":\"Attica\",\"A\":\"East Macedonia and Thrace\",\"B\":\"Central Macedonia\",\"C\":\"West Macedonia\",\"D\":\"Epirus\",\"E\":\"Thessaly\",\"F\":\"Ionian Islands\",\"G\":\"West Greece\",\"H\":\"Central Greece\",\"J\":\"Peloponnese\",\"K\":\"North Aegean\",\"L\":\"South Aegean\",\"M\":\"Crete\"},\"GT\":{\"GT-AV\":\"Alta Verapaz\",\"GT-BV\":\"Baja Verapaz\",\"GT-CM\":\"Chimaltenango\",\"GT-CQ\":\"Chiquimula\",\"GT-PR\":\"El Progreso\",\"GT-ES\":\"Escuintla\",\"GT-GU\":\"Guatemala\",\"GT-HU\":\"Huehuetenango\",\"GT-IZ\":\"Izabal\",\"GT-JA\":\"Jalapa\",\"GT-JU\":\"Jutiapa\",\"GT-PE\":\"Pet\\u00e9n\",\"GT-QZ\":\"Quetzaltenango\",\"GT-QC\":\"Quich\\u00e9\",\"GT-RE\":\"Retalhuleu\",\"GT-SA\":\"Sacatep\\u00e9quez\",\"GT-SM\":\"San Marcos\",\"GT-SR\":\"Santa Rosa\",\"GT-SO\":\"Solol\\u00e1\",\"GT-SU\":\"Suchitep\\u00e9quez\",\"GT-TO\":\"Totonicap\\u00e1n\",\"GT-ZA\":\"Zacapa\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"HN\":{\"HN-AT\":\"Atl\\u00e1ntida\",\"HN-IB\":\"Bay Islands\",\"HN-CH\":\"Choluteca\",\"HN-CL\":\"Col\\u00f3n\",\"HN-CM\":\"Comayagua\",\"HN-CP\":\"Cop\\u00e1n\",\"HN-CR\":\"Cort\\u00e9s\",\"HN-EP\":\"El Para\\u00edso\",\"HN-FM\":\"Francisco Moraz\\u00e1n\",\"HN-GD\":\"Gracias a Dios\",\"HN-IN\":\"Intibuc\\u00e1\",\"HN-LE\":\"Lempira\",\"HN-LP\":\"La Paz\",\"HN-OC\":\"Ocotepeque\",\"HN-OL\":\"Olancho\",\"HN-SB\":\"Santa B\\u00e1rbara\",\"HN-VA\":\"Valle\",\"HN-YO\":\"Yoro\"},\"HU\":{\"BK\":\"B\\u00e1cs-Kiskun\",\"BE\":\"B\\u00e9k\\u00e9s\",\"BA\":\"Baranya\",\"BZ\":\"Borsod-Aba\\u00faj-Zempl\\u00e9n\",\"BU\":\"Budapest\",\"CS\":\"Csongr\\u00e1d-Csan\\u00e1d\",\"FE\":\"Fej\\u00e9r\",\"GS\":\"Gy\\u0151r-Moson-Sopron\",\"HB\":\"Hajd\\u00fa-Bihar\",\"HE\":\"Heves\",\"JN\":\"J\\u00e1sz-Nagykun-Szolnok\",\"KE\":\"Kom\\u00e1rom-Esztergom\",\"NO\":\"N\\u00f3gr\\u00e1d\",\"PE\":\"Pest\",\"SO\":\"Somogy\",\"SZ\":\"Szabolcs-Szatm\\u00e1r-Bereg\",\"TO\":\"Tolna\",\"VA\":\"Vas\",\"VE\":\"Veszpr\\u00e9m\",\"ZA\":\"Zala\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"IE\":{\"CW\":\"Carlow\",\"CN\":\"Cavan\",\"CE\":\"Clare\",\"CO\":\"Cork\",\"DL\":\"Donegal\",\"D\":\"Dublin\",\"G\":\"Galway\",\"KY\":\"Kerry\",\"KE\":\"Kildare\",\"KK\":\"Kilkenny\",\"LS\":\"Laois\",\"LM\":\"Leitrim\",\"LK\":\"Limerick\",\"LD\":\"Longford\",\"LH\":\"Louth\",\"MO\":\"Mayo\",\"MH\":\"Meath\",\"MN\":\"Monaghan\",\"OY\":\"Offaly\",\"RN\":\"Roscommon\",\"SO\":\"Sligo\",\"TA\":\"Tipperary\",\"WD\":\"Waterford\",\"WH\":\"Westmeath\",\"WX\":\"Wexford\",\"WW\":\"Wicklow\"},\"IN\":{\"AP\":\"Andhra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"LA\":\"Ladakh\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Odisha\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TS\":\"Telangana\",\"TR\":\"Tripura\",\"UK\":\"Uttarakhand\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadra and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"IR\":{\"KHZ\":\"Khuzestan (\\u062e\\u0648\\u0632\\u0633\\u062a\\u0627\\u0646)\",\"THR\":\"Tehran (\\u062a\\u0647\\u0631\\u0627\\u0646)\",\"ILM\":\"Ilaam (\\u0627\\u06cc\\u0644\\u0627\\u0645)\",\"BHR\":\"Bushehr (\\u0628\\u0648\\u0634\\u0647\\u0631)\",\"ADL\":\"Ardabil (\\u0627\\u0631\\u062f\\u0628\\u06cc\\u0644)\",\"ESF\":\"Isfahan (\\u0627\\u0635\\u0641\\u0647\\u0627\\u0646)\",\"YZD\":\"Yazd (\\u06cc\\u0632\\u062f)\",\"KRH\":\"Kermanshah (\\u06a9\\u0631\\u0645\\u0627\\u0646\\u0634\\u0627\\u0647)\",\"KRN\":\"Kerman (\\u06a9\\u0631\\u0645\\u0627\\u0646)\",\"HDN\":\"Hamadan (\\u0647\\u0645\\u062f\\u0627\\u0646)\",\"GZN\":\"Ghazvin (\\u0642\\u0632\\u0648\\u06cc\\u0646)\",\"ZJN\":\"Zanjan (\\u0632\\u0646\\u062c\\u0627\\u0646)\",\"LRS\":\"Luristan (\\u0644\\u0631\\u0633\\u062a\\u0627\\u0646)\",\"ABZ\":\"Alborz (\\u0627\\u0644\\u0628\\u0631\\u0632)\",\"EAZ\":\"East Azarbaijan (\\u0622\\u0630\\u0631\\u0628\\u0627\\u06cc\\u062c\\u0627\\u0646 \\u0634\\u0631\\u0642\\u06cc)\",\"WAZ\":\"West Azarbaijan (\\u0622\\u0630\\u0631\\u0628\\u0627\\u06cc\\u062c\\u0627\\u0646 \\u063a\\u0631\\u0628\\u06cc)\",\"CHB\":\"Chaharmahal and Bakhtiari (\\u0686\\u0647\\u0627\\u0631\\u0645\\u062d\\u0627\\u0644 \\u0648 \\u0628\\u062e\\u062a\\u06cc\\u0627\\u0631\\u06cc)\",\"SKH\":\"South Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u062c\\u0646\\u0648\\u0628\\u06cc)\",\"RKH\":\"Razavi Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0631\\u0636\\u0648\\u06cc)\",\"NKH\":\"North Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0634\\u0645\\u0627\\u0644\\u06cc)\",\"SMN\":\"Semnan (\\u0633\\u0645\\u0646\\u0627\\u0646)\",\"FRS\":\"Fars (\\u0641\\u0627\\u0631\\u0633)\",\"QHM\":\"Qom (\\u0642\\u0645)\",\"KRD\":\"Kurdistan \\\/ \\u06a9\\u0631\\u062f\\u0633\\u062a\\u0627\\u0646)\",\"KBD\":\"Kohgiluyeh and BoyerAhmad (\\u06a9\\u0647\\u06af\\u06cc\\u0644\\u0648\\u06cc\\u06cc\\u0647 \\u0648 \\u0628\\u0648\\u06cc\\u0631\\u0627\\u062d\\u0645\\u062f)\",\"GLS\":\"Golestan (\\u06af\\u0644\\u0633\\u062a\\u0627\\u0646)\",\"GIL\":\"Gilan (\\u06af\\u06cc\\u0644\\u0627\\u0646)\",\"MZN\":\"Mazandaran (\\u0645\\u0627\\u0632\\u0646\\u062f\\u0631\\u0627\\u0646)\",\"MKZ\":\"Markazi (\\u0645\\u0631\\u06a9\\u0632\\u06cc)\",\"HRZ\":\"Hormozgan (\\u0647\\u0631\\u0645\\u0632\\u06af\\u0627\\u0646)\",\"SBN\":\"Sistan and Baluchestan (\\u0633\\u06cc\\u0633\\u062a\\u0627\\u0646 \\u0648 \\u0628\\u0644\\u0648\\u0686\\u0633\\u062a\\u0627\\u0646)\"},\"IS\":[],\"IT\":{\"AG\":\"Agrigento\",\"AL\":\"Alessandria\",\"AN\":\"Ancona\",\"AO\":\"Aosta\",\"AR\":\"Arezzo\",\"AP\":\"Ascoli Piceno\",\"AT\":\"Asti\",\"AV\":\"Avellino\",\"BA\":\"Bari\",\"BT\":\"Barletta-Andria-Trani\",\"BL\":\"Belluno\",\"BN\":\"Benevento\",\"BG\":\"Bergamo\",\"BI\":\"Biella\",\"BO\":\"Bologna\",\"BZ\":\"Bolzano\",\"BS\":\"Brescia\",\"BR\":\"Brindisi\",\"CA\":\"Cagliari\",\"CL\":\"Caltanissetta\",\"CB\":\"Campobasso\",\"CE\":\"Caserta\",\"CT\":\"Catania\",\"CZ\":\"Catanzaro\",\"CH\":\"Chieti\",\"CO\":\"Como\",\"CS\":\"Cosenza\",\"CR\":\"Cremona\",\"KR\":\"Crotone\",\"CN\":\"Cuneo\",\"EN\":\"Enna\",\"FM\":\"Fermo\",\"FE\":\"Ferrara\",\"FI\":\"Firenze\",\"FG\":\"Foggia\",\"FC\":\"Forl\\u00ec-Cesena\",\"FR\":\"Frosinone\",\"GE\":\"Genova\",\"GO\":\"Gorizia\",\"GR\":\"Grosseto\",\"IM\":\"Imperia\",\"IS\":\"Isernia\",\"SP\":\"La Spezia\",\"AQ\":\"L'Aquila\",\"LT\":\"Latina\",\"LE\":\"Lecce\",\"LC\":\"Lecco\",\"LI\":\"Livorno\",\"LO\":\"Lodi\",\"LU\":\"Lucca\",\"MC\":\"Macerata\",\"MN\":\"Mantova\",\"MS\":\"Massa-Carrara\",\"MT\":\"Matera\",\"ME\":\"Messina\",\"MI\":\"Milano\",\"MO\":\"Modena\",\"MB\":\"Monza e della Brianza\",\"NA\":\"Napoli\",\"NO\":\"Novara\",\"NU\":\"Nuoro\",\"OR\":\"Oristano\",\"PD\":\"Padova\",\"PA\":\"Palermo\",\"PR\":\"Parma\",\"PV\":\"Pavia\",\"PG\":\"Perugia\",\"PU\":\"Pesaro e Urbino\",\"PE\":\"Pescara\",\"PC\":\"Piacenza\",\"PI\":\"Pisa\",\"PT\":\"Pistoia\",\"PN\":\"Pordenone\",\"PZ\":\"Potenza\",\"PO\":\"Prato\",\"RG\":\"Ragusa\",\"RA\":\"Ravenna\",\"RC\":\"Reggio Calabria\",\"RE\":\"Reggio Emilia\",\"RI\":\"Rieti\",\"RN\":\"Rimini\",\"RM\":\"Roma\",\"RO\":\"Rovigo\",\"SA\":\"Salerno\",\"SS\":\"Sassari\",\"SV\":\"Savona\",\"SI\":\"Siena\",\"SR\":\"Siracusa\",\"SO\":\"Sondrio\",\"SU\":\"Sud Sardegna\",\"TA\":\"Taranto\",\"TE\":\"Teramo\",\"TR\":\"Terni\",\"TO\":\"Torino\",\"TP\":\"Trapani\",\"TN\":\"Trento\",\"TV\":\"Treviso\",\"TS\":\"Trieste\",\"UD\":\"Udine\",\"VA\":\"Varese\",\"VE\":\"Venezia\",\"VB\":\"Verbano-Cusio-Ossola\",\"VC\":\"Vercelli\",\"VR\":\"Verona\",\"VV\":\"Vibo Valentia\",\"VI\":\"Vicenza\",\"VT\":\"Viterbo\"},\"IL\":[],\"IM\":[],\"JM\":{\"JM-01\":\"Kingston\",\"JM-02\":\"Saint Andrew\",\"JM-03\":\"Saint Thomas\",\"JM-04\":\"Portland\",\"JM-05\":\"Saint Mary\",\"JM-06\":\"Saint Ann\",\"JM-07\":\"Trelawny\",\"JM-08\":\"Saint James\",\"JM-09\":\"Hanover\",\"JM-10\":\"Westmoreland\",\"JM-11\":\"Saint Elizabeth\",\"JM-12\":\"Manchester\",\"JM-13\":\"Clarendon\",\"JM-14\":\"Saint Catherine\"},\"JP\":{\"JP01\":\"Hokkaido\",\"JP02\":\"Aomori\",\"JP03\":\"Iwate\",\"JP04\":\"Miyagi\",\"JP05\":\"Akita\",\"JP06\":\"Yamagata\",\"JP07\":\"Fukushima\",\"JP08\":\"Ibaraki\",\"JP09\":\"Tochigi\",\"JP10\":\"Gunma\",\"JP11\":\"Saitama\",\"JP12\":\"Chiba\",\"JP13\":\"Tokyo\",\"JP14\":\"Kanagawa\",\"JP15\":\"Niigata\",\"JP16\":\"Toyama\",\"JP17\":\"Ishikawa\",\"JP18\":\"Fukui\",\"JP19\":\"Yamanashi\",\"JP20\":\"Nagano\",\"JP21\":\"Gifu\",\"JP22\":\"Shizuoka\",\"JP23\":\"Aichi\",\"JP24\":\"Mie\",\"JP25\":\"Shiga\",\"JP26\":\"Kyoto\",\"JP27\":\"Osaka\",\"JP28\":\"Hyogo\",\"JP29\":\"Nara\",\"JP30\":\"Wakayama\",\"JP31\":\"Tottori\",\"JP32\":\"Shimane\",\"JP33\":\"Okayama\",\"JP34\":\"Hiroshima\",\"JP35\":\"Yamaguchi\",\"JP36\":\"Tokushima\",\"JP37\":\"Kagawa\",\"JP38\":\"Ehime\",\"JP39\":\"Kochi\",\"JP40\":\"Fukuoka\",\"JP41\":\"Saga\",\"JP42\":\"Nagasaki\",\"JP43\":\"Kumamoto\",\"JP44\":\"Oita\",\"JP45\":\"Miyazaki\",\"JP46\":\"Kagoshima\",\"JP47\":\"Okinawa\"},\"KE\":{\"KE01\":\"Baringo\",\"KE02\":\"Bomet\",\"KE03\":\"Bungoma\",\"KE04\":\"Busia\",\"KE05\":\"Elgeyo-Marakwet\",\"KE06\":\"Embu\",\"KE07\":\"Garissa\",\"KE08\":\"Homa Bay\",\"KE09\":\"Isiolo\",\"KE10\":\"Kajiado\",\"KE11\":\"Kakamega\",\"KE12\":\"Kericho\",\"KE13\":\"Kiambu\",\"KE14\":\"Kilifi\",\"KE15\":\"Kirinyaga\",\"KE16\":\"Kisii\",\"KE17\":\"Kisumu\",\"KE18\":\"Kitui\",\"KE19\":\"Kwale\",\"KE20\":\"Laikipia\",\"KE21\":\"Lamu\",\"KE22\":\"Machakos\",\"KE23\":\"Makueni\",\"KE24\":\"Mandera\",\"KE25\":\"Marsabit\",\"KE26\":\"Meru\",\"KE27\":\"Migori\",\"KE28\":\"Mombasa\",\"KE29\":\"Murang\\u2019a\",\"KE30\":\"Nairobi County\",\"KE31\":\"Nakuru\",\"KE32\":\"Nandi\",\"KE33\":\"Narok\",\"KE34\":\"Nyamira\",\"KE35\":\"Nyandarua\",\"KE36\":\"Nyeri\",\"KE37\":\"Samburu\",\"KE38\":\"Siaya\",\"KE39\":\"Taita-Taveta\",\"KE40\":\"Tana River\",\"KE41\":\"Tharaka-Nithi\",\"KE42\":\"Trans Nzoia\",\"KE43\":\"Turkana\",\"KE44\":\"Uasin Gishu\",\"KE45\":\"Vihiga\",\"KE46\":\"Wajir\",\"KE47\":\"West Pokot\"},\"KN\":{\"KNK\":\"Saint Kitts\",\"KNN\":\"Nevis\",\"KN01\":\"Christ Church Nichola Town\",\"KN02\":\"Saint Anne Sandy Point\",\"KN03\":\"Saint George Basseterre\",\"KN04\":\"Saint George Gingerland\",\"KN05\":\"Saint James Windward\",\"KN06\":\"Saint John Capisterre\",\"KN07\":\"Saint John Figtree\",\"KN08\":\"Saint Mary Cayon\",\"KN09\":\"Saint Paul Capisterre\",\"KN10\":\"Saint Paul Charlestown\",\"KN11\":\"Saint Peter Basseterre\",\"KN12\":\"Saint Thomas Lowland\",\"KN13\":\"Saint Thomas Middle Island\",\"KN15\":\"Trinity Palmetto Point\"},\"KR\":[],\"KW\":[],\"LA\":{\"AT\":\"Attapeu\",\"BK\":\"Bokeo\",\"BL\":\"Bolikhamsai\",\"CH\":\"Champasak\",\"HO\":\"Houaphanh\",\"KH\":\"Khammouane\",\"LM\":\"Luang Namtha\",\"LP\":\"Luang Prabang\",\"OU\":\"Oudomxay\",\"PH\":\"Phongsaly\",\"SL\":\"Salavan\",\"SV\":\"Savannakhet\",\"VI\":\"Vientiane Province\",\"VT\":\"Vientiane\",\"XA\":\"Sainyabuli\",\"XE\":\"Sekong\",\"XI\":\"Xiangkhouang\",\"XS\":\"Xaisomboun\"},\"LB\":[],\"LI\":[],\"LR\":{\"BM\":\"Bomi\",\"BN\":\"Bong\",\"GA\":\"Gbarpolu\",\"GB\":\"Grand Bassa\",\"GC\":\"Grand Cape Mount\",\"GG\":\"Grand Gedeh\",\"GK\":\"Grand Kru\",\"LO\":\"Lofa\",\"MA\":\"Margibi\",\"MY\":\"Maryland\",\"MO\":\"Montserrado\",\"NM\":\"Nimba\",\"RV\":\"Rivercess\",\"RG\":\"River Gee\",\"SN\":\"Sinoe\"},\"LU\":[],\"MA\":{\"maagd\":\"Agadir-Ida Ou Tanane\",\"maazi\":\"Azilal\",\"mabem\":\"B\\u00e9ni-Mellal\",\"maber\":\"Berkane\",\"mabes\":\"Ben Slimane\",\"mabod\":\"Boujdour\",\"mabom\":\"Boulemane\",\"mabrr\":\"Berrechid\",\"macas\":\"Casablanca\",\"mache\":\"Chefchaouen\",\"machi\":\"Chichaoua\",\"macht\":\"Chtouka A\\u00eft Baha\",\"madri\":\"Driouch\",\"maedi\":\"Essaouira\",\"maerr\":\"Errachidia\",\"mafah\":\"Fahs-Beni Makada\",\"mafes\":\"F\\u00e8s-Dar-Dbibegh\",\"mafig\":\"Figuig\",\"mafqh\":\"Fquih Ben Salah\",\"mague\":\"Guelmim\",\"maguf\":\"Guercif\",\"mahaj\":\"El Hajeb\",\"mahao\":\"Al Haouz\",\"mahoc\":\"Al Hoce\\u00efma\",\"maifr\":\"Ifrane\",\"maine\":\"Inezgane-A\\u00eft Melloul\",\"majdi\":\"El Jadida\",\"majra\":\"Jerada\",\"maken\":\"K\\u00e9nitra\",\"makes\":\"Kelaat Sraghna\",\"makhe\":\"Khemisset\",\"makhn\":\"Kh\\u00e9nifra\",\"makho\":\"Khouribga\",\"malaa\":\"La\\u00e2youne\",\"malar\":\"Larache\",\"mamar\":\"Marrakech\",\"mamdf\":\"M\\u2019diq-Fnideq\",\"mamed\":\"M\\u00e9diouna\",\"mamek\":\"Mekn\\u00e8s\",\"mamid\":\"Midelt\",\"mammd\":\"Marrakech-Medina\",\"mammn\":\"Marrakech-Menara\",\"mamoh\":\"Mohammedia\",\"mamou\":\"Moulay Yacoub\",\"manad\":\"Nador\",\"manou\":\"Nouaceur\",\"maoua\":\"Ouarzazate\",\"maoud\":\"Oued Ed-Dahab\",\"maouj\":\"Oujda-Angad\",\"maouz\":\"Ouezzane\",\"marab\":\"Rabat\",\"mareh\":\"Rehamna\",\"masaf\":\"Safi\",\"masal\":\"Sal\\u00e9\",\"masef\":\"Sefrou\",\"maset\":\"Settat\",\"masib\":\"Sidi Bennour\",\"masif\":\"Sidi Ifni\",\"masik\":\"Sidi Kacem\",\"masil\":\"Sidi Slimane\",\"maskh\":\"Skhirat-T\\u00e9mara\",\"masyb\":\"Sidi Youssef Ben Ali\",\"mataf\":\"Tarfaya (EH-partial)\",\"matai\":\"Taourirt\",\"matao\":\"Taounate\",\"matar\":\"Taroudant\",\"matat\":\"Tata\",\"mataz\":\"Taza\",\"matet\":\"T\\u00e9touan\",\"matin\":\"Tinghir\",\"matiz\":\"Tiznit\",\"matng\":\"Tangier-Assilah\",\"matnt\":\"Tan-Tan\",\"mayus\":\"Youssoufia\",\"mazag\":\"Zagora\"},\"MD\":{\"C\":\"Chi\\u0219in\\u0103u\",\"BL\":\"B\\u0103l\\u021bi\",\"AN\":\"Anenii Noi\",\"BS\":\"Basarabeasca\",\"BR\":\"Briceni\",\"CH\":\"Cahul\",\"CT\":\"Cantemir\",\"CL\":\"C\\u0103l\\u0103ra\\u0219i\",\"CS\":\"C\\u0103u\\u0219eni\",\"CM\":\"Cimi\\u0219lia\",\"CR\":\"Criuleni\",\"DN\":\"Dondu\\u0219eni\",\"DR\":\"Drochia\",\"DB\":\"Dub\\u0103sari\",\"ED\":\"Edine\\u021b\",\"FL\":\"F\\u0103le\\u0219ti\",\"FR\":\"Flore\\u0219ti\",\"GE\":\"UTA G\\u0103g\\u0103uzia\",\"GL\":\"Glodeni\",\"HN\":\"H\\u00eence\\u0219ti\",\"IL\":\"Ialoveni\",\"LV\":\"Leova\",\"NS\":\"Nisporeni\",\"OC\":\"Ocni\\u021ba\",\"OR\":\"Orhei\",\"RZ\":\"Rezina\",\"RS\":\"R\\u00ee\\u0219cani\",\"SG\":\"S\\u00eengerei\",\"SR\":\"Soroca\",\"ST\":\"Str\\u0103\\u0219eni\",\"SD\":\"\\u0218old\\u0103ne\\u0219ti\",\"SV\":\"\\u0218tefan Vod\\u0103\",\"TR\":\"Taraclia\",\"TL\":\"Telene\\u0219ti\",\"UN\":\"Ungheni\"},\"MF\":[],\"MQ\":[],\"MT\":[],\"MX\":{\"DF\":\"Ciudad de M\\u00e9xico\",\"JA\":\"Jalisco\",\"NL\":\"Nuevo Le\\u00f3n\",\"AG\":\"Aguascalientes\",\"BC\":\"Baja California\",\"BS\":\"Baja California Sur\",\"CM\":\"Campeche\",\"CS\":\"Chiapas\",\"CH\":\"Chihuahua\",\"CO\":\"Coahuila\",\"CL\":\"Colima\",\"DG\":\"Durango\",\"GT\":\"Guanajuato\",\"GR\":\"Guerrero\",\"HG\":\"Hidalgo\",\"MX\":\"Estado de M\\u00e9xico\",\"MI\":\"Michoac\\u00e1n\",\"MO\":\"Morelos\",\"NA\":\"Nayarit\",\"OA\":\"Oaxaca\",\"PU\":\"Puebla\",\"QT\":\"Quer\\u00e9taro\",\"QR\":\"Quintana Roo\",\"SL\":\"San Luis Potos\\u00ed\",\"SI\":\"Sinaloa\",\"SO\":\"Sonora\",\"TB\":\"Tabasco\",\"TM\":\"Tamaulipas\",\"TL\":\"Tlaxcala\",\"VE\":\"Veracruz\",\"YU\":\"Yucat\\u00e1n\",\"ZA\":\"Zacatecas\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"LBN\":\"Labuan\",\"MLK\":\"Malacca (Melaka)\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PNG\":\"Penang (Pulau Pinang)\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"PJY\":\"Putrajaya\",\"KUL\":\"Kuala Lumpur\"},\"MZ\":{\"MZP\":\"Cabo Delgado\",\"MZG\":\"Gaza\",\"MZI\":\"Inhambane\",\"MZB\":\"Manica\",\"MZL\":\"Maputo Province\",\"MZMPM\":\"Maputo\",\"MZN\":\"Nampula\",\"MZA\":\"Niassa\",\"MZS\":\"Sofala\",\"MZT\":\"Tete\",\"MZQ\":\"Zamb\\u00e9zia\"},\"NA\":{\"ER\":\"Erongo\",\"HA\":\"Hardap\",\"KA\":\"Karas\",\"KE\":\"Kavango East\",\"KW\":\"Kavango West\",\"KH\":\"Khomas\",\"KU\":\"Kunene\",\"OW\":\"Ohangwena\",\"OH\":\"Omaheke\",\"OS\":\"Omusati\",\"ON\":\"Oshana\",\"OT\":\"Oshikoto\",\"OD\":\"Otjozondjupa\",\"CA\":\"Zambezi\"},\"NG\":{\"AB\":\"Abia\",\"FC\":\"Abuja\",\"AD\":\"Adamawa\",\"AK\":\"Akwa Ibom\",\"AN\":\"Anambra\",\"BA\":\"Bauchi\",\"BY\":\"Bayelsa\",\"BE\":\"Benue\",\"BO\":\"Borno\",\"CR\":\"Cross River\",\"DE\":\"Delta\",\"EB\":\"Ebonyi\",\"ED\":\"Edo\",\"EK\":\"Ekiti\",\"EN\":\"Enugu\",\"GO\":\"Gombe\",\"IM\":\"Imo\",\"JI\":\"Jigawa\",\"KD\":\"Kaduna\",\"KN\":\"Kano\",\"KT\":\"Katsina\",\"KE\":\"Kebbi\",\"KO\":\"Kogi\",\"KW\":\"Kwara\",\"LA\":\"Lagos\",\"NA\":\"Nasarawa\",\"NI\":\"Niger\",\"OG\":\"Ogun\",\"ON\":\"Ondo\",\"OS\":\"Osun\",\"OY\":\"Oyo\",\"PL\":\"Plateau\",\"RI\":\"Rivers\",\"SO\":\"Sokoto\",\"TA\":\"Taraba\",\"YO\":\"Yobe\",\"ZA\":\"Zamfara\"},\"NL\":[],\"NO\":[],\"NP\":{\"BAG\":\"Bagmati\",\"BHE\":\"Bheri\",\"DHA\":\"Dhaulagiri\",\"GAN\":\"Gandaki\",\"JAN\":\"Janakpur\",\"KAR\":\"Karnali\",\"KOS\":\"Koshi\",\"LUM\":\"Lumbini\",\"MAH\":\"Mahakali\",\"MEC\":\"Mechi\",\"NAR\":\"Narayani\",\"RAP\":\"Rapti\",\"SAG\":\"Sagarmatha\",\"SET\":\"Seti\"},\"NI\":{\"NI-AN\":\"Atl\\u00e1ntico Norte\",\"NI-AS\":\"Atl\\u00e1ntico Sur\",\"NI-BO\":\"Boaco\",\"NI-CA\":\"Carazo\",\"NI-CI\":\"Chinandega\",\"NI-CO\":\"Chontales\",\"NI-ES\":\"Estel\\u00ed\",\"NI-GR\":\"Granada\",\"NI-JI\":\"Jinotega\",\"NI-LE\":\"Le\\u00f3n\",\"NI-MD\":\"Madriz\",\"NI-MN\":\"Managua\",\"NI-MS\":\"Masaya\",\"NI-MT\":\"Matagalpa\",\"NI-NS\":\"Nueva Segovia\",\"NI-RI\":\"Rivas\",\"NI-SJ\":\"R\\u00edo San Juan\"},\"NZ\":{\"NTL\":\"Northland\",\"AUK\":\"Auckland\",\"WKO\":\"Waikato\",\"BOP\":\"Bay of Plenty\",\"TKI\":\"Taranaki\",\"GIS\":\"Gisborne\",\"HKB\":\"Hawke\\u2019s Bay\",\"MWT\":\"Manawatu-Wanganui\",\"WGN\":\"Wellington\",\"NSN\":\"Nelson\",\"MBH\":\"Marlborough\",\"TAS\":\"Tasman\",\"WTC\":\"West Coast\",\"CAN\":\"Canterbury\",\"OTA\":\"Otago\",\"STL\":\"Southland\"},\"PA\":{\"PA-1\":\"Bocas del Toro\",\"PA-2\":\"Cocl\\u00e9\",\"PA-3\":\"Col\\u00f3n\",\"PA-4\":\"Chiriqu\\u00ed\",\"PA-5\":\"Dari\\u00e9n\",\"PA-6\":\"Herrera\",\"PA-7\":\"Los Santos\",\"PA-8\":\"Panam\\u00e1\",\"PA-9\":\"Veraguas\",\"PA-10\":\"West Panam\\u00e1\",\"PA-EM\":\"Ember\\u00e1\",\"PA-KY\":\"Guna Yala\",\"PA-NB\":\"Ng\\u00f6be-Bugl\\u00e9\"},\"PE\":{\"CAL\":\"El Callao\",\"LMA\":\"Municipalidad Metropolitana de Lima\",\"AMA\":\"Amazonas\",\"ANC\":\"Ancash\",\"APU\":\"Apur\\u00edmac\",\"ARE\":\"Arequipa\",\"AYA\":\"Ayacucho\",\"CAJ\":\"Cajamarca\",\"CUS\":\"Cusco\",\"HUV\":\"Huancavelica\",\"HUC\":\"Hu\\u00e1nuco\",\"ICA\":\"Ica\",\"JUN\":\"Jun\\u00edn\",\"LAL\":\"La Libertad\",\"LAM\":\"Lambayeque\",\"LIM\":\"Lima\",\"LOR\":\"Loreto\",\"MDD\":\"Madre de Dios\",\"MOQ\":\"Moquegua\",\"PAS\":\"Pasco\",\"PIU\":\"Piura\",\"PUN\":\"Puno\",\"SAM\":\"San Mart\\u00edn\",\"TAC\":\"Tacna\",\"TUM\":\"Tumbes\",\"UCA\":\"Ucayali\"},\"PH\":{\"ABR\":\"Abra\",\"AGN\":\"Agusan del Norte\",\"AGS\":\"Agusan del Sur\",\"AKL\":\"Aklan\",\"ALB\":\"Albay\",\"ANT\":\"Antique\",\"APA\":\"Apayao\",\"AUR\":\"Aurora\",\"BAS\":\"Basilan\",\"BAN\":\"Bataan\",\"BTN\":\"Batanes\",\"BTG\":\"Batangas\",\"BEN\":\"Benguet\",\"BIL\":\"Biliran\",\"BOH\":\"Bohol\",\"BUK\":\"Bukidnon\",\"BUL\":\"Bulacan\",\"CAG\":\"Cagayan\",\"CAN\":\"Camarines Norte\",\"CAS\":\"Camarines Sur\",\"CAM\":\"Camiguin\",\"CAP\":\"Capiz\",\"CAT\":\"Catanduanes\",\"CAV\":\"Cavite\",\"CEB\":\"Cebu\",\"COM\":\"Compostela Valley\",\"NCO\":\"Cotabato\",\"DAV\":\"Davao del Norte\",\"DAS\":\"Davao del Sur\",\"DAC\":\"Davao Occidental\",\"DAO\":\"Davao Oriental\",\"DIN\":\"Dinagat Islands\",\"EAS\":\"Eastern Samar\",\"GUI\":\"Guimaras\",\"IFU\":\"Ifugao\",\"ILN\":\"Ilocos Norte\",\"ILS\":\"Ilocos Sur\",\"ILI\":\"Iloilo\",\"ISA\":\"Isabela\",\"KAL\":\"Kalinga\",\"LUN\":\"La Union\",\"LAG\":\"Laguna\",\"LAN\":\"Lanao del Norte\",\"LAS\":\"Lanao del Sur\",\"LEY\":\"Leyte\",\"MAG\":\"Maguindanao\",\"MAD\":\"Marinduque\",\"MAS\":\"Masbate\",\"MSC\":\"Misamis Occidental\",\"MSR\":\"Misamis Oriental\",\"MOU\":\"Mountain Province\",\"NEC\":\"Negros Occidental\",\"NER\":\"Negros Oriental\",\"NSA\":\"Northern Samar\",\"NUE\":\"Nueva Ecija\",\"NUV\":\"Nueva Vizcaya\",\"MDC\":\"Occidental Mindoro\",\"MDR\":\"Oriental Mindoro\",\"PLW\":\"Palawan\",\"PAM\":\"Pampanga\",\"PAN\":\"Pangasinan\",\"QUE\":\"Quezon\",\"QUI\":\"Quirino\",\"RIZ\":\"Rizal\",\"ROM\":\"Romblon\",\"WSA\":\"Samar\",\"SAR\":\"Sarangani\",\"SIQ\":\"Siquijor\",\"SOR\":\"Sorsogon\",\"SCO\":\"South Cotabato\",\"SLE\":\"Southern Leyte\",\"SUK\":\"Sultan Kudarat\",\"SLU\":\"Sulu\",\"SUN\":\"Surigao del Norte\",\"SUR\":\"Surigao del Sur\",\"TAR\":\"Tarlac\",\"TAW\":\"Tawi-Tawi\",\"ZMB\":\"Zambales\",\"ZAN\":\"Zamboanga del Norte\",\"ZAS\":\"Zamboanga del Sur\",\"ZSI\":\"Zamboanga Sibugay\",\"00\":\"Metro Manila\"},\"PK\":{\"JK\":\"Azad Kashmir\",\"BA\":\"Balochistan\",\"TA\":\"FATA\",\"GB\":\"Gilgit Baltistan\",\"IS\":\"Islamabad Capital Territory\",\"KP\":\"Khyber Pakhtunkhwa\",\"PB\":\"Punjab\",\"SD\":\"Sindh\"},\"PL\":[],\"PR\":[],\"PT\":[],\"PY\":{\"PY-ASU\":\"Asunci\\u00f3n\",\"PY-1\":\"Concepci\\u00f3n\",\"PY-2\":\"San Pedro\",\"PY-3\":\"Cordillera\",\"PY-4\":\"Guair\\u00e1\",\"PY-5\":\"Caaguaz\\u00fa\",\"PY-6\":\"Caazap\\u00e1\",\"PY-7\":\"Itap\\u00faa\",\"PY-8\":\"Misiones\",\"PY-9\":\"Paraguar\\u00ed\",\"PY-10\":\"Alto Paran\\u00e1\",\"PY-11\":\"Central\",\"PY-12\":\"\\u00d1eembuc\\u00fa\",\"PY-13\":\"Amambay\",\"PY-14\":\"Canindey\\u00fa\",\"PY-15\":\"Presidente Hayes\",\"PY-16\":\"Alto Paraguay\",\"PY-17\":\"Boquer\\u00f3n\"},\"RE\":[],\"RO\":{\"AB\":\"Alba\",\"AR\":\"Arad\",\"AG\":\"Arge\\u0219\",\"BC\":\"Bac\\u0103u\",\"BH\":\"Bihor\",\"BN\":\"Bistri\\u021ba-N\\u0103s\\u0103ud\",\"BT\":\"Boto\\u0219ani\",\"BR\":\"Br\\u0103ila\",\"BV\":\"Bra\\u0219ov\",\"B\":\"Bucure\\u0219ti\",\"BZ\":\"Buz\\u0103u\",\"CL\":\"C\\u0103l\\u0103ra\\u0219i\",\"CS\":\"Cara\\u0219-Severin\",\"CJ\":\"Cluj\",\"CT\":\"Constan\\u021ba\",\"CV\":\"Covasna\",\"DB\":\"D\\u00e2mbovi\\u021ba\",\"DJ\":\"Dolj\",\"GL\":\"Gala\\u021bi\",\"GR\":\"Giurgiu\",\"GJ\":\"Gorj\",\"HR\":\"Harghita\",\"HD\":\"Hunedoara\",\"IL\":\"Ialomi\\u021ba\",\"IS\":\"Ia\\u0219i\",\"IF\":\"Ilfov\",\"MM\":\"Maramure\\u0219\",\"MH\":\"Mehedin\\u021bi\",\"MS\":\"Mure\\u0219\",\"NT\":\"Neam\\u021b\",\"OT\":\"Olt\",\"PH\":\"Prahova\",\"SJ\":\"S\\u0103laj\",\"SM\":\"Satu Mare\",\"SB\":\"Sibiu\",\"SV\":\"Suceava\",\"TR\":\"Teleorman\",\"TM\":\"Timi\\u0219\",\"TL\":\"Tulcea\",\"VL\":\"V\\u00e2lcea\",\"VS\":\"Vaslui\",\"VN\":\"Vrancea\"},\"SN\":{\"SNDB\":\"Diourbel\",\"SNDK\":\"Dakar\",\"SNFK\":\"Fatick\",\"SNKA\":\"Kaffrine\",\"SNKD\":\"Kolda\",\"SNKE\":\"K\\u00e9dougou\",\"SNKL\":\"Kaolack\",\"SNLG\":\"Louga\",\"SNMT\":\"Matam\",\"SNSE\":\"S\\u00e9dhiou\",\"SNSL\":\"Saint-Louis\",\"SNTC\":\"Tambacounda\",\"SNTH\":\"Thi\\u00e8s\",\"SNZG\":\"Ziguinchor\"},\"SG\":[],\"SK\":[],\"SI\":[],\"SV\":{\"SV-AH\":\"Ahuachap\\u00e1n\",\"SV-CA\":\"Caba\\u00f1as\",\"SV-CH\":\"Chalatenango\",\"SV-CU\":\"Cuscatl\\u00e1n\",\"SV-LI\":\"La Libertad\",\"SV-MO\":\"Moraz\\u00e1n\",\"SV-PA\":\"La Paz\",\"SV-SA\":\"Santa Ana\",\"SV-SM\":\"San Miguel\",\"SV-SO\":\"Sonsonate\",\"SV-SS\":\"San Salvador\",\"SV-SV\":\"San Vicente\",\"SV-UN\":\"La Uni\\u00f3n\",\"SV-US\":\"Usulut\\u00e1n\"},\"TH\":{\"TH-37\":\"Amnat Charoen\",\"TH-15\":\"Ang Thong\",\"TH-14\":\"Ayutthaya\",\"TH-10\":\"Bangkok\",\"TH-38\":\"Bueng Kan\",\"TH-31\":\"Buri Ram\",\"TH-24\":\"Chachoengsao\",\"TH-18\":\"Chai Nat\",\"TH-36\":\"Chaiyaphum\",\"TH-22\":\"Chanthaburi\",\"TH-50\":\"Chiang Mai\",\"TH-57\":\"Chiang Rai\",\"TH-20\":\"Chonburi\",\"TH-86\":\"Chumphon\",\"TH-46\":\"Kalasin\",\"TH-62\":\"Kamphaeng Phet\",\"TH-71\":\"Kanchanaburi\",\"TH-40\":\"Khon Kaen\",\"TH-81\":\"Krabi\",\"TH-52\":\"Lampang\",\"TH-51\":\"Lamphun\",\"TH-42\":\"Loei\",\"TH-16\":\"Lopburi\",\"TH-58\":\"Mae Hong Son\",\"TH-44\":\"Maha Sarakham\",\"TH-49\":\"Mukdahan\",\"TH-26\":\"Nakhon Nayok\",\"TH-73\":\"Nakhon Pathom\",\"TH-48\":\"Nakhon Phanom\",\"TH-30\":\"Nakhon Ratchasima\",\"TH-60\":\"Nakhon Sawan\",\"TH-80\":\"Nakhon Si Thammarat\",\"TH-55\":\"Nan\",\"TH-96\":\"Narathiwat\",\"TH-39\":\"Nong Bua Lam Phu\",\"TH-43\":\"Nong Khai\",\"TH-12\":\"Nonthaburi\",\"TH-13\":\"Pathum Thani\",\"TH-94\":\"Pattani\",\"TH-82\":\"Phang Nga\",\"TH-93\":\"Phatthalung\",\"TH-56\":\"Phayao\",\"TH-67\":\"Phetchabun\",\"TH-76\":\"Phetchaburi\",\"TH-66\":\"Phichit\",\"TH-65\":\"Phitsanulok\",\"TH-54\":\"Phrae\",\"TH-83\":\"Phuket\",\"TH-25\":\"Prachin Buri\",\"TH-77\":\"Prachuap Khiri Khan\",\"TH-85\":\"Ranong\",\"TH-70\":\"Ratchaburi\",\"TH-21\":\"Rayong\",\"TH-45\":\"Roi Et\",\"TH-27\":\"Sa Kaeo\",\"TH-47\":\"Sakon Nakhon\",\"TH-11\":\"Samut Prakan\",\"TH-74\":\"Samut Sakhon\",\"TH-75\":\"Samut Songkhram\",\"TH-19\":\"Saraburi\",\"TH-91\":\"Satun\",\"TH-17\":\"Sing Buri\",\"TH-33\":\"Sisaket\",\"TH-90\":\"Songkhla\",\"TH-64\":\"Sukhothai\",\"TH-72\":\"Suphan Buri\",\"TH-84\":\"Surat Thani\",\"TH-32\":\"Surin\",\"TH-63\":\"Tak\",\"TH-92\":\"Trang\",\"TH-23\":\"Trat\",\"TH-34\":\"Ubon Ratchathani\",\"TH-41\":\"Udon Thani\",\"TH-61\":\"Uthai Thani\",\"TH-53\":\"Uttaradit\",\"TH-95\":\"Yala\",\"TH-35\":\"Yasothon\"},\"TR\":{\"TR01\":\"Adana\",\"TR02\":\"Ad\\u0131yaman\",\"TR03\":\"Afyon\",\"TR04\":\"A\\u011fr\\u0131\",\"TR05\":\"Amasya\",\"TR06\":\"Ankara\",\"TR07\":\"Antalya\",\"TR08\":\"Artvin\",\"TR09\":\"Ayd\\u0131n\",\"TR10\":\"Bal\\u0131kesir\",\"TR11\":\"Bilecik\",\"TR12\":\"Bing\\u00f6l\",\"TR13\":\"Bitlis\",\"TR14\":\"Bolu\",\"TR15\":\"Burdur\",\"TR16\":\"Bursa\",\"TR17\":\"\\u00c7anakkale\",\"TR18\":\"\\u00c7ank\\u0131r\\u0131\",\"TR19\":\"\\u00c7orum\",\"TR20\":\"Denizli\",\"TR21\":\"Diyarbak\\u0131r\",\"TR22\":\"Edirne\",\"TR23\":\"Elaz\\u0131\\u011f\",\"TR24\":\"Erzincan\",\"TR25\":\"Erzurum\",\"TR26\":\"Eski\\u015fehir\",\"TR27\":\"Gaziantep\",\"TR28\":\"Giresun\",\"TR29\":\"G\\u00fcm\\u00fc\\u015fhane\",\"TR30\":\"Hakkari\",\"TR31\":\"Hatay\",\"TR32\":\"Isparta\",\"TR33\":\"\\u0130\\u00e7el\",\"TR34\":\"\\u0130stanbul\",\"TR35\":\"\\u0130zmir\",\"TR36\":\"Kars\",\"TR37\":\"Kastamonu\",\"TR38\":\"Kayseri\",\"TR39\":\"K\\u0131rklareli\",\"TR40\":\"K\\u0131r\\u015fehir\",\"TR41\":\"Kocaeli\",\"TR42\":\"Konya\",\"TR43\":\"K\\u00fctahya\",\"TR44\":\"Malatya\",\"TR45\":\"Manisa\",\"TR46\":\"Kahramanmara\\u015f\",\"TR47\":\"Mardin\",\"TR48\":\"Mu\\u011fla\",\"TR49\":\"Mu\\u015f\",\"TR50\":\"Nev\\u015fehir\",\"TR51\":\"Ni\\u011fde\",\"TR52\":\"Ordu\",\"TR53\":\"Rize\",\"TR54\":\"Sakarya\",\"TR55\":\"Samsun\",\"TR56\":\"Siirt\",\"TR57\":\"Sinop\",\"TR58\":\"Sivas\",\"TR59\":\"Tekirda\\u011f\",\"TR60\":\"Tokat\",\"TR61\":\"Trabzon\",\"TR62\":\"Tunceli\",\"TR63\":\"\\u015eanl\\u0131urfa\",\"TR64\":\"U\\u015fak\",\"TR65\":\"Van\",\"TR66\":\"Yozgat\",\"TR67\":\"Zonguldak\",\"TR68\":\"Aksaray\",\"TR69\":\"Bayburt\",\"TR70\":\"Karaman\",\"TR71\":\"K\\u0131r\\u0131kkale\",\"TR72\":\"Batman\",\"TR73\":\"\\u015e\\u0131rnak\",\"TR74\":\"Bart\\u0131n\",\"TR75\":\"Ardahan\",\"TR76\":\"I\\u011fd\\u0131r\",\"TR77\":\"Yalova\",\"TR78\":\"Karab\\u00fck\",\"TR79\":\"Kilis\",\"TR80\":\"Osmaniye\",\"TR81\":\"D\\u00fczce\"},\"TZ\":{\"TZ01\":\"Arusha\",\"TZ02\":\"Dar es Salaam\",\"TZ03\":\"Dodoma\",\"TZ04\":\"Iringa\",\"TZ05\":\"Kagera\",\"TZ06\":\"Pemba North\",\"TZ07\":\"Zanzibar North\",\"TZ08\":\"Kigoma\",\"TZ09\":\"Kilimanjaro\",\"TZ10\":\"Pemba South\",\"TZ11\":\"Zanzibar South\",\"TZ12\":\"Lindi\",\"TZ13\":\"Mara\",\"TZ14\":\"Mbeya\",\"TZ15\":\"Zanzibar West\",\"TZ16\":\"Morogoro\",\"TZ17\":\"Mtwara\",\"TZ18\":\"Mwanza\",\"TZ19\":\"Coast\",\"TZ20\":\"Rukwa\",\"TZ21\":\"Ruvuma\",\"TZ22\":\"Shinyanga\",\"TZ23\":\"Singida\",\"TZ24\":\"Tabora\",\"TZ25\":\"Tanga\",\"TZ26\":\"Manyara\",\"TZ27\":\"Geita\",\"TZ28\":\"Katavi\",\"TZ29\":\"Njombe\",\"TZ30\":\"Simiyu\"},\"LK\":[],\"RS\":{\"RS00\":\"Belgrade\",\"RS14\":\"Bor\",\"RS11\":\"Brani\\u010devo\",\"RS02\":\"Central Banat\",\"RS10\":\"Danube\",\"RS23\":\"Jablanica\",\"RS09\":\"Kolubara\",\"RS08\":\"Ma\\u010dva\",\"RS17\":\"Morava\",\"RS20\":\"Ni\\u0161ava\",\"RS01\":\"North Ba\\u010dka\",\"RS03\":\"North Banat\",\"RS24\":\"P\\u010dinja\",\"RS22\":\"Pirot\",\"RS13\":\"Pomoravlje\",\"RS19\":\"Rasina\",\"RS18\":\"Ra\\u0161ka\",\"RS06\":\"South Ba\\u010dka\",\"RS04\":\"South Banat\",\"RS07\":\"Srem\",\"RS12\":\"\\u0160umadija\",\"RS21\":\"Toplica\",\"RS05\":\"West Ba\\u010dka\",\"RS15\":\"Zaje\\u010dar\",\"RS16\":\"Zlatibor\",\"RS25\":\"Kosovo\",\"RS26\":\"Pe\\u0107\",\"RS27\":\"Prizren\",\"RS28\":\"Kosovska Mitrovica\",\"RS29\":\"Kosovo-Pomoravlje\",\"RSKM\":\"Kosovo-Metohija\",\"RSVO\":\"Vojvodina\"},\"RW\":[],\"SE\":[],\"UA\":{\"UA05\":\"Vinnychchyna\",\"UA07\":\"Volyn\",\"UA09\":\"Luhanshchyna\",\"UA12\":\"Dnipropetrovshchyna\",\"UA14\":\"Donechchyna\",\"UA18\":\"Zhytomyrshchyna\",\"UA21\":\"Zakarpattia\",\"UA23\":\"Zaporizhzhya\",\"UA26\":\"Prykarpattia\",\"UA30\":\"Kyiv\",\"UA32\":\"Kyivshchyna\",\"UA35\":\"Kirovohradschyna\",\"UA40\":\"Sevastopol\",\"UA43\":\"Crimea\",\"UA46\":\"Lvivshchyna\",\"UA48\":\"Mykolayivschyna\",\"UA51\":\"Odeshchyna\",\"UA53\":\"Poltavshchyna\",\"UA56\":\"Rivnenshchyna\",\"UA59\":\"Sumshchyna\",\"UA61\":\"Ternopilshchyna\",\"UA63\":\"Kharkivshchyna\",\"UA65\":\"Khersonshchyna\",\"UA68\":\"Khmelnychchyna\",\"UA71\":\"Cherkashchyna\",\"UA74\":\"Chernihivshchyna\",\"UA77\":\"Chernivtsi Oblast\"},\"UG\":{\"UG314\":\"Abim\",\"UG301\":\"Adjumani\",\"UG322\":\"Agago\",\"UG323\":\"Alebtong\",\"UG315\":\"Amolatar\",\"UG324\":\"Amudat\",\"UG216\":\"Amuria\",\"UG316\":\"Amuru\",\"UG302\":\"Apac\",\"UG303\":\"Arua\",\"UG217\":\"Budaka\",\"UG218\":\"Bududa\",\"UG201\":\"Bugiri\",\"UG235\":\"Bugweri\",\"UG420\":\"Buhweju\",\"UG117\":\"Buikwe\",\"UG219\":\"Bukedea\",\"UG118\":\"Bukomansimbi\",\"UG220\":\"Bukwa\",\"UG225\":\"Bulambuli\",\"UG416\":\"Buliisa\",\"UG401\":\"Bundibugyo\",\"UG430\":\"Bunyangabu\",\"UG402\":\"Bushenyi\",\"UG202\":\"Busia\",\"UG221\":\"Butaleja\",\"UG119\":\"Butambala\",\"UG233\":\"Butebo\",\"UG120\":\"Buvuma\",\"UG226\":\"Buyende\",\"UG317\":\"Dokolo\",\"UG121\":\"Gomba\",\"UG304\":\"Gulu\",\"UG403\":\"Hoima\",\"UG417\":\"Ibanda\",\"UG203\":\"Iganga\",\"UG418\":\"Isingiro\",\"UG204\":\"Jinja\",\"UG318\":\"Kaabong\",\"UG404\":\"Kabale\",\"UG405\":\"Kabarole\",\"UG213\":\"Kaberamaido\",\"UG427\":\"Kagadi\",\"UG428\":\"Kakumiro\",\"UG101\":\"Kalangala\",\"UG222\":\"Kaliro\",\"UG122\":\"Kalungu\",\"UG102\":\"Kampala\",\"UG205\":\"Kamuli\",\"UG413\":\"Kamwenge\",\"UG414\":\"Kanungu\",\"UG206\":\"Kapchorwa\",\"UG236\":\"Kapelebyong\",\"UG126\":\"Kasanda\",\"UG406\":\"Kasese\",\"UG207\":\"Katakwi\",\"UG112\":\"Kayunga\",\"UG407\":\"Kibaale\",\"UG103\":\"Kiboga\",\"UG227\":\"Kibuku\",\"UG432\":\"Kikuube\",\"UG419\":\"Kiruhura\",\"UG421\":\"Kiryandongo\",\"UG408\":\"Kisoro\",\"UG305\":\"Kitgum\",\"UG319\":\"Koboko\",\"UG325\":\"Kole\",\"UG306\":\"Kotido\",\"UG208\":\"Kumi\",\"UG333\":\"Kwania\",\"UG228\":\"Kween\",\"UG123\":\"Kyankwanzi\",\"UG422\":\"Kyegegwa\",\"UG415\":\"Kyenjojo\",\"UG125\":\"Kyotera\",\"UG326\":\"Lamwo\",\"UG307\":\"Lira\",\"UG229\":\"Luuka\",\"UG104\":\"Luwero\",\"UG124\":\"Lwengo\",\"UG114\":\"Lyantonde\",\"UG223\":\"Manafwa\",\"UG320\":\"Maracha\",\"UG105\":\"Masaka\",\"UG409\":\"Masindi\",\"UG214\":\"Mayuge\",\"UG209\":\"Mbale\",\"UG410\":\"Mbarara\",\"UG423\":\"Mitooma\",\"UG115\":\"Mityana\",\"UG308\":\"Moroto\",\"UG309\":\"Moyo\",\"UG106\":\"Mpigi\",\"UG107\":\"Mubende\",\"UG108\":\"Mukono\",\"UG334\":\"Nabilatuk\",\"UG311\":\"Nakapiripirit\",\"UG116\":\"Nakaseke\",\"UG109\":\"Nakasongola\",\"UG230\":\"Namayingo\",\"UG234\":\"Namisindwa\",\"UG224\":\"Namutumba\",\"UG327\":\"Napak\",\"UG310\":\"Nebbi\",\"UG231\":\"Ngora\",\"UG424\":\"Ntoroko\",\"UG411\":\"Ntungamo\",\"UG328\":\"Nwoya\",\"UG331\":\"Omoro\",\"UG329\":\"Otuke\",\"UG321\":\"Oyam\",\"UG312\":\"Pader\",\"UG332\":\"Pakwach\",\"UG210\":\"Pallisa\",\"UG110\":\"Rakai\",\"UG429\":\"Rubanda\",\"UG425\":\"Rubirizi\",\"UG431\":\"Rukiga\",\"UG412\":\"Rukungiri\",\"UG111\":\"Sembabule\",\"UG232\":\"Serere\",\"UG426\":\"Sheema\",\"UG215\":\"Sironko\",\"UG211\":\"Soroti\",\"UG212\":\"Tororo\",\"UG113\":\"Wakiso\",\"UG313\":\"Yumbe\",\"UG330\":\"Zombo\"},\"UM\":{\"81\":\"Baker Island\",\"84\":\"Howland Island\",\"86\":\"Jarvis Island\",\"67\":\"Johnston Atoll\",\"89\":\"Kingman Reef\",\"71\":\"Midway Atoll\",\"76\":\"Navassa Island\",\"95\":\"Palmyra Atoll\",\"79\":\"Wake Island\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\"},\"UY\":{\"UY-AR\":\"Artigas\",\"UY-CA\":\"Canelones\",\"UY-CL\":\"Cerro Largo\",\"UY-CO\":\"Colonia\",\"UY-DU\":\"Durazno\",\"UY-FS\":\"Flores\",\"UY-FD\":\"Florida\",\"UY-LA\":\"Lavalleja\",\"UY-MA\":\"Maldonado\",\"UY-MO\":\"Montevideo\",\"UY-PA\":\"Paysand\\u00fa\",\"UY-RN\":\"R\\u00edo Negro\",\"UY-RV\":\"Rivera\",\"UY-RO\":\"Rocha\",\"UY-SA\":\"Salto\",\"UY-SJ\":\"San Jos\\u00e9\",\"UY-SO\":\"Soriano\",\"UY-TA\":\"Tacuaremb\\u00f3\",\"UY-TT\":\"Treinta y Tres\"},\"VE\":{\"VE-A\":\"Capital\",\"VE-B\":\"Anzo\\u00e1tegui\",\"VE-C\":\"Apure\",\"VE-D\":\"Aragua\",\"VE-E\":\"Barinas\",\"VE-F\":\"Bol\\u00edvar\",\"VE-G\":\"Carabobo\",\"VE-H\":\"Cojedes\",\"VE-I\":\"Falc\\u00f3n\",\"VE-J\":\"Gu\\u00e1rico\",\"VE-K\":\"Lara\",\"VE-L\":\"M\\u00e9rida\",\"VE-M\":\"Miranda\",\"VE-N\":\"Monagas\",\"VE-O\":\"Nueva Esparta\",\"VE-P\":\"Portuguesa\",\"VE-R\":\"Sucre\",\"VE-S\":\"T\\u00e1chira\",\"VE-T\":\"Trujillo\",\"VE-U\":\"Yaracuy\",\"VE-V\":\"Zulia\",\"VE-W\":\"Federal Dependencies\",\"VE-X\":\"La Guaira (Vargas)\",\"VE-Y\":\"Delta Amacuro\",\"VE-Z\":\"Amazonas\"},\"VN\":[],\"YT\":[],\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"ZM\":{\"ZM-01\":\"Western\",\"ZM-02\":\"Central\",\"ZM-03\":\"Eastern\",\"ZM-04\":\"Luapula\",\"ZM-05\":\"Northern\",\"ZM-06\":\"North-Western\",\"ZM-07\":\"Southern\",\"ZM-08\":\"Copperbelt\",\"ZM-09\":\"Lusaka\",\"ZM-10\":\"Muchinga\"}}", "i18n_select_state_text": "Select an option\u2026", "i18n_no_matches": "No matches found", "i18n_ajax_error": "Loading failed", "i18n_input_too_short_1": "Please enter 1 or more characters", "i18n_input_too_short_n": "Please enter %qty% or more characters", "i18n_input_too_long_1": "Please delete 1 character", "i18n_input_too_long_n": "Please delete %qty% characters", "i18n_selection_too_long_1": "You can only select 1 item", "i18n_selection_too_long_n": "You can only select %qty% items", "i18n_load_more": "Loading more results\u2026", "i18n_searching": "Searching\u2026" };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/js/frontend/country-select.min.js?ver=9.3.3"
        id="wc-country-select-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-address-i18n-js-extra">
        /* <![CDATA[ */
        var wc_address_i18n_params = { "locale": "{\"AE\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"required\":false}},\"AF\":{\"state\":{\"required\":false,\"hidden\":true}},\"AL\":{\"state\":{\"label\":\"County\"}},\"AO\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"Province\"}},\"AT\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"AU\":{\"city\":{\"label\":\"Suburb\"},\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"label\":\"State\"}},\"AX\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"BA\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Canton\",\"required\":false,\"hidden\":true}},\"BD\":{\"postcode\":{\"required\":false},\"state\":{\"label\":\"District\"}},\"BE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"BG\":{\"state\":{\"required\":false}},\"BH\":{\"postcode\":{\"required\":false},\"state\":{\"required\":false,\"hidden\":true}},\"BI\":{\"state\":{\"required\":false,\"hidden\":true}},\"BO\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"Department\"}},\"BS\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"BZ\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"required\":false}},\"CA\":{\"postcode\":{\"label\":\"Postal code\"},\"state\":{\"label\":\"Province\"}},\"CH\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Canton\",\"required\":false}},\"CL\":{\"city\":{\"required\":true},\"postcode\":{\"required\":false,\"hidden\":false},\"state\":{\"label\":\"Region\"}},\"CN\":{\"state\":{\"label\":\"Province\"}},\"CO\":{\"postcode\":{\"required\":false},\"state\":{\"label\":\"Department\"}},\"CR\":{\"state\":{\"label\":\"Province\"}},\"CW\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"required\":false}},\"CZ\":{\"state\":{\"required\":false,\"hidden\":true}},\"DE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"DK\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"DO\":{\"state\":{\"label\":\"Province\"}},\"EC\":{\"state\":{\"label\":\"Province\"}},\"EE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"ET\":{\"state\":{\"required\":false,\"hidden\":true}},\"FI\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"FR\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"GG\":{\"state\":{\"required\":false,\"label\":\"Parish\"}},\"GH\":{\"postcode\":{\"required\":false},\"state\":{\"label\":\"Region\"}},\"GP\":{\"state\":{\"required\":false,\"hidden\":true}},\"GF\":{\"state\":{\"required\":false,\"hidden\":true}},\"GR\":{\"state\":{\"required\":false}},\"GT\":{\"postcode\":{\"required\":false},\"state\":{\"label\":\"Department\"}},\"HK\":{\"postcode\":{\"required\":false},\"city\":{\"label\":\"Town \\\/ District\"},\"state\":{\"label\":\"Region\"}},\"HN\":{\"state\":{\"label\":\"Department\"}},\"HU\":{\"last_name\":{\"class\":[\"form-row-first\"],\"priority\":10},\"first_name\":{\"class\":[\"form-row-last\"],\"priority\":20},\"postcode\":{\"class\":[\"form-row-first\",\"address-field\"],\"priority\":65},\"city\":{\"class\":[\"form-row-last\",\"address-field\"]},\"address_1\":{\"priority\":71},\"address_2\":{\"priority\":72},\"state\":{\"label\":\"County\",\"required\":false}},\"ID\":{\"state\":{\"label\":\"Province\"}},\"IE\":{\"postcode\":{\"required\":false,\"label\":\"Eircode\"},\"state\":{\"label\":\"County\"}},\"IS\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"IL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"IM\":{\"state\":{\"required\":false,\"hidden\":true}},\"IN\":{\"postcode\":{\"label\":\"PIN Code\"},\"state\":{\"label\":\"State\"}},\"IR\":{\"state\":{\"priority\":50},\"city\":{\"priority\":60},\"address_1\":{\"priority\":70},\"address_2\":{\"priority\":80}},\"IT\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":true,\"label\":\"Province\"}},\"JM\":{\"city\":{\"label\":\"Town \\\/ City \\\/ Post Office\"},\"postcode\":{\"required\":false,\"label\":\"Postal Code\"},\"state\":{\"required\":true,\"label\":\"Parish\"}},\"JP\":{\"last_name\":{\"class\":[\"form-row-first\"],\"priority\":10},\"first_name\":{\"class\":[\"form-row-last\"],\"priority\":20},\"postcode\":{\"class\":[\"form-row-first\",\"address-field\"],\"priority\":65},\"state\":{\"label\":\"Prefecture\",\"class\":[\"form-row-last\",\"address-field\"],\"priority\":66},\"city\":{\"priority\":67},\"address_1\":{\"priority\":68},\"address_2\":{\"priority\":69}},\"KN\":{\"postcode\":{\"required\":false,\"label\":\"Postal code\"},\"state\":{\"required\":true,\"label\":\"Parish\"}},\"KR\":{\"state\":{\"required\":false,\"hidden\":true}},\"KW\":{\"state\":{\"required\":false,\"hidden\":true}},\"LV\":{\"state\":{\"label\":\"Municipality\",\"required\":false}},\"LB\":{\"state\":{\"required\":false,\"hidden\":true}},\"MF\":{\"state\":{\"required\":false,\"hidden\":true}},\"MQ\":{\"state\":{\"required\":false,\"hidden\":true}},\"MT\":{\"state\":{\"required\":false,\"hidden\":true}},\"MZ\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"Province\"}},\"NI\":{\"state\":{\"label\":\"Department\"}},\"NL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"NG\":{\"postcode\":{\"label\":\"Postcode\",\"required\":false,\"hidden\":true},\"state\":{\"label\":\"State\"}},\"NZ\":{\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"required\":false,\"label\":\"Region\"}},\"NO\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"NP\":{\"state\":{\"label\":\"State \\\/ Zone\"},\"postcode\":{\"required\":false}},\"PA\":{\"state\":{\"label\":\"Province\"}},\"PL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"PR\":{\"city\":{\"label\":\"Municipality\"},\"state\":{\"required\":false,\"hidden\":true}},\"PT\":{\"state\":{\"required\":false,\"hidden\":true}},\"PY\":{\"state\":{\"label\":\"Department\"}},\"RE\":{\"state\":{\"required\":false,\"hidden\":true}},\"RO\":{\"state\":{\"label\":\"County\",\"required\":true}},\"RS\":{\"city\":{\"required\":true},\"postcode\":{\"required\":true},\"state\":{\"label\":\"District\",\"required\":false}},\"RW\":{\"state\":{\"required\":false,\"hidden\":true}},\"SG\":{\"state\":{\"required\":false,\"hidden\":true},\"city\":{\"required\":false}},\"SK\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"SI\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"SR\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"SV\":{\"state\":{\"label\":\"Department\"}},\"ES\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Province\"}},\"LI\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"LK\":{\"state\":{\"required\":false,\"hidden\":true}},\"LU\":{\"state\":{\"required\":false,\"hidden\":true}},\"MD\":{\"state\":{\"label\":\"Municipality \\\/ District\"}},\"SE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"TR\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Province\"}},\"UG\":{\"postcode\":{\"required\":false,\"hidden\":true},\"city\":{\"label\":\"Town \\\/ Village\",\"required\":true},\"state\":{\"label\":\"District\",\"required\":true}},\"US\":{\"postcode\":{\"label\":\"ZIP Code\"},\"state\":{\"label\":\"State\"}},\"UY\":{\"state\":{\"label\":\"Department\"}},\"GB\":{\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"label\":\"County\",\"required\":false}},\"ST\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"District\"}},\"VN\":{\"state\":{\"required\":false,\"hidden\":true},\"postcode\":{\"priority\":65,\"required\":false,\"hidden\":false},\"address_2\":{\"required\":false,\"hidden\":false}},\"WS\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"YT\":{\"state\":{\"required\":false,\"hidden\":true}},\"ZA\":{\"state\":{\"label\":\"Province\"}},\"ZW\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"default\":{\"first_name\":{\"label\":\"First name\",\"required\":true,\"class\":[\"form-row-first\"],\"autocomplete\":\"given-name\",\"priority\":10},\"last_name\":{\"label\":\"Last name\",\"required\":true,\"class\":[\"form-row-last\"],\"autocomplete\":\"family-name\",\"priority\":20},\"company\":{\"label\":\"Company name\",\"class\":[\"form-row-wide\"],\"autocomplete\":\"organization\",\"priority\":30,\"required\":false},\"country\":{\"type\":\"country\",\"label\":\"Country \\\/ Region\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\",\"update_totals_on_change\"],\"autocomplete\":\"country\",\"priority\":40},\"address_1\":{\"label\":\"Street address\",\"placeholder\":\"House number and street name\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line1\",\"priority\":50},\"address_2\":{\"label\":\"Apartment, suite, unit, etc.\",\"label_class\":[\"screen-reader-text\"],\"placeholder\":\"Apartment, suite, unit, etc. (optional)\",\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line2\",\"priority\":60,\"required\":false},\"city\":{\"label\":\"Town \\\/ City\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-level2\",\"priority\":70},\"state\":{\"type\":\"state\",\"label\":\"State \\\/ County\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"state\"],\"autocomplete\":\"address-level1\",\"priority\":80},\"postcode\":{\"label\":\"Postcode \\\/ ZIP\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"postcode\"],\"autocomplete\":\"postal-code\",\"priority\":90}}}", "locale_fields": "{\"address_1\":\"#billing_address_1_field, #shipping_address_1_field\",\"address_2\":\"#billing_address_2_field, #shipping_address_2_field\",\"state\":\"#billing_state_field, #shipping_state_field, #calc_shipping_state_field\",\"postcode\":\"#billing_postcode_field, #shipping_postcode_field, #calc_shipping_postcode_field\",\"city\":\"#billing_city_field, #shipping_city_field, #calc_shipping_city_field\"}", "i18n_required_text": "required", "i18n_optional_text": "optional" };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/js/frontend/address-i18n.min.js?ver=9.3.3"
        id="wc-address-i18n-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-checkout-js-extra">
        /* <![CDATA[ */
        var wc_checkout_params = { "ajax_url": "\/themes\/restaurant\/wp\/demo\/restaurant\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/themes\/restaurant\/wp\/demo\/restaurant\/?wc-ajax=%%endpoint%%", "update_order_review_nonce": "739ed0cb29", "apply_coupon_nonce": "7193e5702d", "remove_coupon_nonce": "bb26b306bf", "option_guest_checkout": "yes", "checkout_url": "\/themes\/restaurant\/wp\/demo\/restaurant\/?wc-ajax=checkout", "is_checkout": "0", "debug_mode": "", "i18n_checkout_error": "There was an error processing your order. Please check for any charges in your payment method and review your <a href=\"https:\/\/www.nicdark-themes.com\/themes\/restaurant\/wp\/demo\/restaurant\/my-account\/orders\/\">order history<\/a> before placing the order again." };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/js/frontend/checkout.min.js?ver=9.3.3"
        id="wc-checkout-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=5.6"
        id="vc_woocommerce-add-to-cart-js-js"></script>
    <link rel="https://api.w.org/"
        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json"
        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-json/wp/v2/pages/873" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.6.2" />
    <meta name="generator" content="WooCommerce 9.3.3" />
    <link rel="canonical" href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/checkout/" />
    <link rel='shortlink' href='https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/?p=873' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.nicdark-themes.com%2Fthemes%2Frestaurant%2Fwp%2Fdemo%2Frestaurant%2Fcheckout%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.nicdark-themes.com%2Fthemes%2Frestaurant%2Fwp%2Fdemo%2Frestaurant%2Fcheckout%2F&#038;format=xml" />


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
            src: url('https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
        }
    </style>
    <link rel="icon"
        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/ristorante-thumbnail.jpg"
        sizes="32x32" />
    <link rel="icon"
        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/ristorante-thumbnail.jpg"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/ristorante-thumbnail.jpg" />
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
    <noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
</head>

<body id="start_nicdark_framework"
    class="page-template-default page page-id-873 theme-ristorante nd_options_customizer_fonts nd_options_customizer_forms woocommerce-checkout woocommerce-page woocommerce-order-received woocommerce-no-js wpb-js-composer js-comp-ver-5.6 vc_responsive">

    <!--START theme-->
    <div class="nicdark_site nicdark_bg_white  ">



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
                    src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/nd-theme-demos-switcher/addons/fixed-img/img/envato.png">
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
                                                <a href=""><img decoding="async" alt="" width="17px"
                                                        class="nd_options_margin_right_10 nd_options_float_left"
                                                        src="http://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/languages.png"></a>
                                            </div>




                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a style="color:;" class="nd_options_margin_right_20 nd_options__font "
                                                    href="">LANGUAGES</a>
                                            </div>


                                        </div>



                                        <div style="margin:;" class="  nd_options_display_table nd_options_float_left">



                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a style="color:;" class="nd_options_margin_right_20 nd_options__font "
                                                    href="">EN</a>
                                            </div>


                                        </div>



                                        <div style="margin:;" class="  nd_options_display_table nd_options_float_left">



                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a style="color:;" class="nd_options_margin_right_20 nd_options__font "
                                                    href="">ES</a>
                                            </div>


                                        </div>



                                        <div style="margin:;" class="  nd_options_display_table nd_options_float_left">



                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a style="color:;" class="nd_options_margin_right_20 nd_options__font "
                                                    href="">IT</a>
                                            </div>


                                        </div>



                                        <div style="margin:;"
                                            class=" top_header_text nd_options_display_table nd_options_float_left">


                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a href=""><img decoding="async" alt="" width="17px"
                                                        class="nd_options_margin_right_10 nd_options_float_left"
                                                        src="http://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/instagram.png"></a>
                                            </div>




                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a style="color:;" class="nd_options_margin_right_20 nd_options__font "
                                                    href="">INSTAGRAM</a>
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
                                        <div style="margin:;"
                                            class=" top_header_text nd_options_display_table nd_options_float_right">


                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a href=""><img decoding="async" alt="" width="20px"
                                                        class="nd_options_margin_left_20 nd_options_float_left"
                                                        src="http://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/food-delivery.png"></a>
                                            </div>




                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a style="color:;" class="nd_options_margin_left_10 nd_options__font "
                                                    href="">FOOD DELIVERY</a>
                                            </div>


                                        </div>



                                        <div style="margin:;"
                                            class=" top_header_text nd_options_display_table nd_options_float_right">


                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a href=""><img decoding="async" alt="" width="20px"
                                                        class="nd_options_margin_left_20 nd_options_float_left"
                                                        src="http://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/happy-hour.png"></a>
                                            </div>




                                            <div
                                                class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                                                <a style="color:;" class="nd_options_margin_left_10 nd_options__font "
                                                    href="">HAPPY HOUR</a>
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
                                        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/logo.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div
                                    class="  nd_options_menu_component nd_options_section nd_options_menu_component_109">
                                    <div class="menu-menu-1-container">
                                        <ul id="menu-menu-1" class="menu">
                                            <li id="menu-item-837"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-837">
                                                <a href="../../index.php">HOME</a>
                                                <!-- <ul class="sub-menu">
                                                    <li id="menu-item-838"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-838">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/">Home
                                                            1</a>
                                                    </li>
                                                    <li id="menu-item-836"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-836">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/home-2/">Home
                                                            2</a>
                                                    </li>
                                                    <li id="menu-item-835"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-835">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/home-3/">Home
                                                            3</a>
                                                    </li>
                                                    <li id="menu-item-834"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-834">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/home-4/">Home
                                                            4</a>
                                                    </li>
                                                    <li id="menu-item-833"
                                                        class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-833">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/home-5/">Home
                                                            5</a>
                                                    </li>
                                                    <li id="menu-item-832"
                                                        class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-832">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/home-6/">Home
                                                            6</a>
                                                    </li>
                                                </ul> -->
                                            </li>
                                            <li id="menu-item-719"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-719">
                                                <a href="../../about-us-1/">ABOUT
                                                    US</a>
                                                <!-- <ul class="sub-menu">
                                                    <li id="menu-item-1083"
                                                        class="nd_options_best_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1083">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/about-us-1/">About
                                                            Us 1</a>
                                                    </li>
                                                    <li id="menu-item-1081"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1081">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/about-us-2/">About
                                                            Us 2</a>
                                                    </li>
                                                    <li id="menu-item-1095"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1095">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/about-us-3/">About
                                                            Us 3</a>
                                                    </li>
                                                </ul> -->
                                            </li>
                                            <li id="menu-item-1022"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1022">
                                                <a href="#">PAGES</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-1313"
                                                        class="nd_options_hot_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1313">
                                                        <a
                                                            href="../book-a-table/index.php">Book
                                                            a Table</a>
                                                    </li>
                                                    <li id="menu-item-1187"
                                                        class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1187">
                                                        <a
                                                            href="../delivery/index.php">Delivery</a>
                                                    </li>
                                                    <li id="menu-item-1024"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1024">
                                                        <a
                                                            href="../services/index.php">Services</a>
                                                        <!-- <ul class="sub-menu">
                                                            <li id="menu-item-1240"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1240">
                                                                <a
                                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/services/">Services
                                                                    1</a>
                                                            </li>
                                                            <li id="menu-item-720"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-720">
                                                                <a
                                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/services-2/">Services
                                                                    2</a>
                                                            </li>
                                                        </ul> -->
                                                    </li>
                                                    <!-- <li id="menu-item-1035"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1035">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/testimonials/">Testimonials</a>
                                                    </li> -->
                                                    <li id="menu-item-1480"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1480">
                                                        <a
                                                            href="../menu-1/index.php">Menu</a>
                                                        <!-- <ul class="sub-menu">
                                                            <li id="menu-item-1481"
                                                                class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1481">
                                                                <a
                                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-1/">Menu
                                                                    1</a>
                                                            </li>
                                                            <li id="menu-item-1502"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1502">
                                                                <a
                                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-3/">Menu
                                                                    2</a>
                                                            </li>
                                                            <li id="menu-item-1523"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1523">
                                                                <a
                                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-4/">Menu
                                                                    3</a>
                                                            </li>
                                                            <li id="menu-item-1552"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1552">
                                                                <a
                                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-5/">Menu
                                                                    4</a>
                                                            </li>
                                                            <li id="menu-item-1479"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1479">
                                                                <a
                                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu/">Menu
                                                                    5</a>
                                                            </li>
                                                        </ul> -->
                                                    </li>
                                                    <!-- <li id="menu-item-1049"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1049">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/promotion/">Promotion</a>
                                                    </li> -->
                                                    <!-- <li id="menu-item-1059"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1059">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/faq/">Faq</a>
                                                    </li> -->
                                                    <li id="menu-item-1068"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1068">
                                                        <a
                                                            href="../contact-1/index.php">Contact</a>
                                                        <!-- <ul class="sub-menu">
                                                            <li id="menu-item-1067"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1067">
                                                                <a
                                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/contact-1/">Contact
                                                                    1</a>
                                                            </li>
                                                            <li id="menu-item-1066"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1066">
                                                                <a
                                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/contact-2/">Contact
                                                                    2</a>
                                                            </li>
                                                        </ul> -->
                                                    </li>
                                                    <li id="menu-item-1082"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1082">
                                                        <a
                                                            href="../about-us-1/index.php">About
                                                            Us</a>
                                                        <!-- <ul class="sub-menu">
                                                            <li id="menu-item-1084"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1084">
                                                                <a
                                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/about-us-1/">About
                                                                    Us 1</a>
                                                            </li>
                                                            <li id="menu-item-1085"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1085">
                                                                <a
                                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/about-us-2/">About
                                                                    Us 2</a>
                                                            </li>
                                                            <li id="menu-item-1094"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1094">
                                                                <a
                                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/about-us-3/">About
                                                                    Us 3</a>
                                                            </li>
                                                        </ul> -->
                                                    </li>
                                                    <li id="menu-item-1296"
                                                        class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1296">
                                                        <a
                                                            href="../gallery/index.php">Gallery</a>
                                                    </li>
                                                    <li id="menu-item-1111"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1111">
                                                        <a target="_blank" rel="noopener"
                                                            href="../coming-soon/index.php">Coming
                                                            Soon</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-1474"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1474">
                                                <a
                                                    href="../menu-1/index.php">MENU</a>
                                                <!-- <ul class="sub-menu">
                                                    <li id="menu-item-1472"
                                                        class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1472">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-1/">Menu
                                                            1</a>
                                                    </li>
                                                    <li id="menu-item-1501"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1501">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-3/">Menu
                                                            2</a>
                                                    </li>
                                                    <li id="menu-item-1524"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1524">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-4/">Menu
                                                            3</a>
                                                    </li>
                                                    <li id="menu-item-1551"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1551">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-5/">Menu
                                                            4</a>
                                                    </li>
                                                    <li id="menu-item-1473"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1473">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu/">Menu
                                                            5</a>
                                                    </li>
                                                </ul> -->
                                            </li>
                                            <li id="menu-item-1225"
                                                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-1225">
                                                <a
                                                    href="../delivery/index.php">SHOP</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-1188"
                                                        class="nd_options_hot_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1188">
                                                        <a href="../../delivery/index.php">Archive</a>
                                                    </li>
                                                    <li id="menu-item-1115"
                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-1115">
                                                        <a
                                                            href="../product/mixed-salad/index.php">Single
                                                            Product</a>
                                                    </li>
                                                    <li id="menu-item-1116"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1116">
                                                        <a href="../../cart/index.php">Cart</a>
                                                    </li>
                                                    <li id="menu-item-1117"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-873 current_page_item menu-item-1117">
                                                        <a href="../../checkout/index.php" aria-current="page">Checkout</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- <li id="menu-item-801"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-801">
                                                <a
                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/news/">NEWS</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-1198"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1198">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/news/">Archive</a>
                                                    </li>
                                                    <li id="menu-item-1199"
                                                        class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children menu-item-1199">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/inauguration/">Single
                                                            Post</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-1200"
                                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1200">
                                                                <a
                                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/inauguration/">Right
                                                                    Sidebar</a>
                                                            </li>
                                                            <li id="menu-item-1201"
                                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1201">
                                                                <a
                                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/fresh-ingredients/">Left
                                                                    Sidebar</a>
                                                            </li>
                                                            <li id="menu-item-1203"
                                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1203">
                                                                <a
                                                                    href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-update/">Full
                                                                    Width</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li> -->
                                            <li id="menu-item-802"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-802">
                                                <a href="../../contact-1/index.php">CONTACT</a>
                                                <!-- <ul class="sub-menu">
                                                    <li id="menu-item-1070"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1070">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/contact-1/">Contact
                                                            1</a>
                                                    </li>
                                                    <li id="menu-item-1069"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1069">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/contact-2/">Contact
                                                            2</a>
                                                    </li>
                                                </ul> -->
                                            </li>
                                            <li id="menu-item-1174"
                                                class="book_a_table_btn menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1174">
                                                <a href="../../book-a-table/index.php">BOOK
                                                    A TABLE</a>
                                                <ul class="sub-menu">
                                                    <!-- <li id="menu-item-1430"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1430">
                                                        <a
                                                            href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/book-a-table/">Custom
                                                            Plugin</a>
                                                    </li> -->
                                                    <li id="menu-item-1429"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1429">
                                                        <a
                                                            href="../open-table/index.php">Open
                                                            Table</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <style>
                                    .nd_options_menu_component_109 ul.menu {
                                        margin: 0px;
                                        padding: 0px;
                                        list-style: none;
                                        display: inline-block;
                                    }

                                    .nd_options_menu_component_109>div {
                                        float: left;
                                        width: 100%;
                                        text-align: center;
                                    }

                                    .nd_options_menu_component_109 ul.menu>li {
                                        margin: 0px;
                                        padding: 0px;
                                        display: inline-block;
                                    }

                                    .nd_options_menu_component_109 ul.menu>li a {
                                        color: #ffffff;
                                        font-weight: normal;
                                        font-size: 14px;
                                        line-height: 14px;
                                        letter-spacing: 2px;
                                        padding: 15px;
                                        display: inline-block;
                                        font-family: Quicksand;
                                    }

                                    #nd_options_header_5 .vc_row[data-vc-full-width] {
                                        overflow: visible;
                                    }


                                    /*dropdown*/
                                    .nd_options_menu_component_109 div>ul li:hover>ul.sub-menu {
                                        display: block;
                                    }

                                    .nd_options_menu_component_109 div>ul li>ul.sub-menu {
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

                                    .nd_options_menu_component_109 div>ul li>ul.sub-menu>li {
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

                                    .nd_options_menu_component_109 div>ul li>ul.sub-menu>li:hover {
                                        background-color: #f9f9f9;
                                    }

                                    .nd_options_menu_component_109 div>ul li>ul.sub-menu>li:last-child {
                                        border-bottom: 0px solid #000;
                                    }

                                    .nd_options_menu_component_109 div>ul li>ul.sub-menu li a {
                                        font-size: 14px;
                                        float: left;
                                        width: 100%;
                                        margin: 0px;
                                        padding: 0px;
                                        font-weight: normal;
                                        letter-spacing: 1px;
                                        color: #7e7e7e;
                                    }

                                    .nd_options_menu_component_109 div>ul li>ul.sub-menu li>ul.sub-menu {
                                        margin-left: 165px;
                                        top: 0;
                                        padding-top: 0;
                                        padding-left: 25px;
                                    }


                                    /*arrow for item has children*/
                                    .nd_options_menu_component_109 div>ul li>ul.sub-menu li.menu-item-has-children>a:after {
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
                                    rel=""
                                    href="http://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/contact-1/"
                                    class="nicdark_display_inline_block nd_options_float_right  "><img decoding="async"
                                        class="nd_options_float_left" alt="" width="25"
                                        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/ico-07.png"></a>

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

                    /* " el_class=" menu_site"][vc_column width=" 1/4"][nd_options_image nd_options_align=" left" nd_options_image=" 535" nd_options_width=" 120px"][/vc_column][vc_column width=" 1/2"][nd_options_menu nd_options_menu_weight=" normal" nd_options_menu_family=" nd_options_first_font" nd_options_menu_align=" center" nd_options_menu_color=" #ffffff" nd_options_menu_font_size=" 14" nd_options_menu_letter_spacing=" 2" nd_options_menu_padding=" 15"][/vc_column][vc_column width=" 1/4"][nd_options_button nd_options_layout=" layout-2" nd_options_align=" right" nd_options_image=" 612" nd_options_image_width=" 25" nd_options_link=" url:http%3A%2F%2Fwww.nicdark-themes.com%2Fthemes%2Frestaurant%2Fwp%2Fdemo%2Frestaurant%2Fcontact-1%2F|||"][/vc_column][/vc_row]</p>
;
                    } */
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
                                        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/logo-dark.png">
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
                                            $(".nd_options_open_sidebar_297").on("click", function (event) {

                                                //add rule to main container only if the component is in header
                                                if ($("#nd_options_header_5 .nd_options_open_sidebar_content_297, #nd_options_header_5_mobile .nd_options_open_sidebar_content_297").length) {
                                                    $(".nicdark_site > .nd_options_container").css({ "position": "relative", "z-index": "0" });
                                                }

                                                //open sidebar
                                                $(".nd_options_open_sidebar_content_297").css({ "right": "0px", });

                                            });

                                            //CLOSE sidebar content ( navigation 2 )
                                            $(".nd_options_close_sidebar_297").on("click", function (event) {

                                                $(".nd_options_open_sidebar_content_297").css({ "right": "-300px" });

                                                //add rule to main container only if the component is in header
                                                if ($("#nd_options_header_5 .nd_options_open_sidebar_content_297, #nd_options_header_5_mobile .nd_options_open_sidebar_content_297").length) {

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
                                        class=" nd_options_cursor_pointer nd_options_open_sidebar_297 nd_options_margin_0 nd_options_padding_0 "
                                        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/menu-grey.png">
                                </div>


                                <!--START sidebar-->
                                <div style="background-color:#2d2d2d; width:300px; right:-300px;"
                                    class="nd_options_open_sidebar_contentt nd_options_open_sidebar_content_297 nd_options_box_sizing_border_box nd_options_overflow_hidden nd_options_overflow_y_auto nd_options_transition_all_08_ease nd_options_height_100_percentage nd_options_position_fixed nd_options_top_0 nd_options_z_index_999">

                                    <img decoding="async" style="right:20px; top:20px;" alt="" width="20"
                                        class="nd_options_close_sidebar_297 nd_options_cursor_pointer nd_options_z_index_9 nd_options_position_absolute"
                                        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/nd-shortcodes/addons/customizer/header/header-2/img/icon-close-white.svg">

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
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-837">
                                                                            <a
                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/">HOME</a>
                                                                            <ul class="sub-menu">
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-838">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/">Home
                                                                                        1</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-836">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/home-2/">Home
                                                                                        2</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-835">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/home-3/">Home
                                                                                        3</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-834">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/home-4/">Home
                                                                                        4</a>
                                                                                </li>
                                                                                <li
                                                                                    class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-833">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/home-5/">Home
                                                                                        5</a>
                                                                                </li>
                                                                                <li
                                                                                    class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-832">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/home-6/">Home
                                                                                        6</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-719">
                                                                            <a
                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/about-us-1/">ABOUT
                                                                                US</a>
                                                                            <ul class="sub-menu">
                                                                                <li
                                                                                    class="nd_options_best_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1083">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/about-us-1/">About
                                                                                        Us 1</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1081">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/about-us-2/">About
                                                                                        Us 2</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1095">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/about-us-3/">About
                                                                                        Us 3</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1022">
                                                                            <a href="#">PAGES</a>
                                                                            <ul class="sub-menu">
                                                                                <li
                                                                                    class="nd_options_hot_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1313">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/book-a-table/">Book
                                                                                        a Table</a>
                                                                                </li>
                                                                                <li
                                                                                    class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1187">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/delivery/">Delivery</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1024">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/services/">Services</a>
                                                                                    <ul class="sub-menu">
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1240">
                                                                                            <a
                                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/services/">Services
                                                                                                1</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-720">
                                                                                            <a
                                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/services-2/">Services
                                                                                                2</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1035">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/testimonials/">Testimonials</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1480">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-1/">Menu</a>
                                                                                    <ul class="sub-menu">
                                                                                        <li
                                                                                            class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1481">
                                                                                            <a
                                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-1/">Menu
                                                                                                1</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1502">
                                                                                            <a
                                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-3/">Menu
                                                                                                2</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1523">
                                                                                            <a
                                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-4/">Menu
                                                                                                3</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1552">
                                                                                            <a
                                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-5/">Menu
                                                                                                4</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1479">
                                                                                            <a
                                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu/">Menu
                                                                                                5</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1049">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/promotion/">Promotion</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1059">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/faq/">Faq</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1068">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/contact-1/">Contact</a>
                                                                                    <ul class="sub-menu">
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1067">
                                                                                            <a
                                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/contact-1/">Contact
                                                                                                1</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1066">
                                                                                            <a
                                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/contact-2/">Contact
                                                                                                2</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1082">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/about-us-1/">About
                                                                                        Us</a>
                                                                                    <ul class="sub-menu">
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1084">
                                                                                            <a
                                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/about-us-1/">About
                                                                                                Us 1</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1085">
                                                                                            <a
                                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/about-us-2/">About
                                                                                                Us 2</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1094">
                                                                                            <a
                                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/about-us-3/">About
                                                                                                Us 3</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li
                                                                                    class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1296">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/gallery/">Gallery</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1111">
                                                                                    <a target="_blank" rel="noopener"
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/coming-soon/">Coming
                                                                                        Soon</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1474">
                                                                            <a
                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-1/">MENU</a>
                                                                            <ul class="sub-menu">
                                                                                <li
                                                                                    class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1472">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-1/">Menu
                                                                                        1</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1501">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-3/">Menu
                                                                                        2</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1524">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-4/">Menu
                                                                                        3</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1551">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-5/">Menu
                                                                                        4</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1473">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu/">Menu
                                                                                        5</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-1225">
                                                                            <a
                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/delivery/">SHOP</a>
                                                                            <ul class="sub-menu">
                                                                                <li
                                                                                    class="nd_options_hot_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1188">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/delivery/">Archive</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-1115">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/product/mixed-salad/">Single
                                                                                        Product</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1116">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/cart/">Cart</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-873 current_page_item menu-item-1117">
                                                                                    <a href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/checkout/"
                                                                                        aria-current="page">Checkout</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-801">
                                                                            <a
                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/news/">NEWS</a>
                                                                            <ul class="sub-menu">
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1198">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/news/">Archive</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children menu-item-1199">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/inauguration/">Single
                                                                                        Post</a>
                                                                                    <ul class="sub-menu">
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1200">
                                                                                            <a
                                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/inauguration/">Right
                                                                                                Sidebar</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1201">
                                                                                            <a
                                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/fresh-ingredients/">Left
                                                                                                Sidebar</a>
                                                                                        </li>
                                                                                        <li
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1203">
                                                                                            <a
                                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/menu-update/">Full
                                                                                                Width</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-802">
                                                                            <a
                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/contact-1/">CONTACT</a>
                                                                            <ul class="sub-menu">
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1070">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/contact-1/">Contact
                                                                                        1</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1069">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/contact-2/">Contact
                                                                                        2</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li
                                                                            class="book_a_table_btn menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1174">
                                                                            <a
                                                                                href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/book-a-table/">BOOK
                                                                                A TABLE</a>
                                                                            <ul class="sub-menu">
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1430">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/book-a-table/">Custom
                                                                                        Plugin</a>
                                                                                </li>
                                                                                <li
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1429">
                                                                                    <a
                                                                                        href="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/open-table/">Open
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

                    /* " el_class=" menu_responsive"][vc_column width=" 1/2"][nd_options_image nd_options_align=" left" nd_options_image=" 799" nd_options_width=" 120px"][/vc_column][vc_column width=" 1/2"][nd_options_open_sidebar nd_options_align=" right" nd_options_pages=" 784" nd_options_image=" 798" nd_options_width=" 25px" nd_options_sidebar=" nd_options_header_5_sidebar_1" nd_options_image_close=" 773" nd_options_image_close_width=" 20" nd_options_bg_color=" #2d2d2d" nd_options_image_close_position=" 20 20"][/vc_column][/vc_row]</p>
;
                    } */
                </style>
            </div>
            <!--end container-->

        </div>
        <!--END footer-->






        <div id="nd_options_page_header_img_layout_8"
            class="nd_options_section nd_options_background_size_cover nd_options_background_position_center"
            style="background-image:url(http://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/02/para-01.jpg);">

            <div class="nd_options_section nd_options_bg_greydark_alpha_3">

                <!--start nd_options_container-->
                <div class="nd_options_container nd_options_clearfix">


                    <div id="nd_options_page_header_image_space_top" class="nd_options_section nd_options_height_200">
                    </div>

                    <div
                        class="nd_options_section nd_options_padding_15 nd_options_box_sizing_border_box nd_options_text_align_center">

                        <h1
                            class="nd_options_color_white nd_options_font_size_120 nd_options_line_height_100 nd_options_font_size_40_all_iphone nd_options_line_height_40_all_iphone nd_options_third_font">
                            Checkout</h1>

                    </div>

                </div>
                <!--end container-->

            </div>

        </div>





        <!--page margin-->
        <div class="nd_options_section nd_options_height_50"></div>
        <!--start nd_options_container-->
        <div class="nd_options_container nd_options_padding_0_15 nd_options_box_sizing_border_box nd_options_clearfix">


            <!--#post-->
            <div style="float:left; width:100%;" id="post-873" class="post-873 page type-page status-publish hentry">

                <!--automatic title-->

                <!--start content-->
                <div class="woocommerce">
                    <div class="woocommerce-order">
                        <button
                            style="float: right; margin: 10px; padding: 10px 20px; background-color: #c0a58a; color: white; border: none; border-radius: 5px; cursor: pointer;"
                            onclick="printReceipt()">Print Receipt</button>
                        <div id="receipt-content">
                            <?php

                            $order_id = $_GET['order_id']; // Get the order ID from the URL
                            $user_id = $_SESSION['auth_user']['user_id'];

                            // Fetch order details from the database using the order ID
                            $query_for_orderMaster = "SELECT * FROM order_master WHERE user_id='$user_id' AND id='$order_id'";

                            $query_for_orderMaster_run = mysqli_query($con, $query_for_orderMaster);

                            if ($query_for_orderMaster_run) {
                                $orderMaster = mysqli_fetch_assoc($query_for_orderMaster_run);
                                $orderId = $orderMaster['id'];
                                $order_date = $orderMaster['order_date'];
                                $total_amount = $orderMaster['total_amount'];
                                $payment_method = $orderMaster['payment_method'];

                                $name = $orderMaster['full_name'];
                                $email = $orderMaster['email'];
                                $phone = $orderMaster['phone'];
                                $address = $orderMaster['address'];
                                $city = $orderMaster['city'];
                                $state = $orderMaster['state'];
                                $country = $orderMaster['country'];
                                $pincode = $orderMaster['pincode'];
                                $order_status = $orderMaster['order_status'];
                                ?>
                                <p
                                    class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
                                    Thank you. Your order has been received.</p>

                                <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">
                                    <!-- for order master details -->




                                    <li class="woocommerce-order-overview__order order">
                                        Order number: <strong><?= $orderId ?></strong>
                                    </li>

                                    <li class="woocommerce-order-overview__date date">
                                        Date: <strong><?= date('F j, Y', strtotime($order_date)) ?></strong>
                                    </li>


                                    <li class="woocommerce-order-overview__total total">
                                        Total: <strong><span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#8377;</span><?= $total_amount ?></bdi></span></strong>
                                    </li>

                                    <li class="woocommerce-order-overview__payment-method method">
                                        Payment method: <strong><?= $payment_method ?></strong>
                                    </li>

                                </ul>


                                <p>Pay with cash upon delivery.</p>
                                <section class="woocommerce-order-details">

                                    <h2 class="woocommerce-order-details__title">Order details</h2>

                                    <?php
                                    $query_for_orderDetails = "SELECT * FROM order_details WHERE order_id='$orderId'";

                                    $query_for_orderDetails_run = mysqli_query($con, $query_for_orderDetails);

                                    if ($query_for_orderDetails_run) {
                                        ?>
                                        <table
                                            class="woocommerce-table woocommerce-table--order-details shop_table order_details">

                                            <thead>
                                                <tr>
                                                    <th class="woocommerce-table__product-name product-name">Product</th>
                                                    <th class="woocommerce-table__product-table product-total">Total</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                foreach ($query_for_orderDetails_run as $product_detail) {
                                                    // $product_id = $product_detail['product_id'];
                                                    // $product_name = $product_detail['product_name'];
                                                    // $quantity = $product_detail['quantity'];
                                                    // $price = $product_detail['price'];
                                                    // $subtotal = $product_detail['subtotal'];
                                        
                                                    ?>
                                                    <tr class="woocommerce-table__line-item order_item">
                                                        <td class="woocommerce-table__product-name product-name">
                                                            <a href=""><?= $product_detail['product_name'] ?></a> <strong
                                                                class="product-quantity">&times;&nbsp;<?= $product_detail['quantity'] ?></strong>
                                                        </td>

                                                        <td class="woocommerce-table__product-total product-total">
                                                            <span class="woocommerce-Price-amount amount"><bdi><span
                                                                        class="woocommerce-Price-currencySymbol">&#8377;</span><?= $product_detail['subtotal'] ?></bdi></span>
                                                        </td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <th scope="row">Subtotal:</th>
                                                    <td><span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">&#036;</span><?= $total_amount ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Shipping:</th>
                                                    <td><span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">&#8377;</span>50.00</span>&nbsp;<small
                                                            class="shipped_via">via Flat rate</small></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Payment method:</th>
                                                    <td><?= $payment_method ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Total:</th>
                                                    <td><span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">&#8377;</span><?= $total_amount + 50 ?></span>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tfoot>
                                    </table>

                                </section>

                                <section class="woocommerce-customer-details">


                                    <section
                                        class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">
                                        <div
                                            class="woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">


                                            <h2 class="woocommerce-column__title">Billing address</h2>

                                            <address>
                                                <?= $name ?><br /><?= $address ?><br /><?= $city ?>,<?= $pincode ?><br /><?= $state ?>,
                                                <?= $country ?>
                                                <p class="woocommerce-customer-details--phone"><?= $phone ?></p>

                                                <p class="woocommerce-customer-details--email"><?= $email ?></p>

                                            </address>


                                        </div><!-- /.col-1 -->

                                        <div
                                            class="woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
                                            <h2 class="woocommerce-column__title">Shipping address</h2>
                                            <address>
                                                <?= $name ?><br /><?= $address ?><br /><?= $city ?>,<?= $pincode ?><br /><?= $state ?>,
                                                <?= $country ?>

                                            </address>
                                        </div><!-- /.col-2 -->

                                    </section><!-- /.col2-set -->



                                </section>
                                <?php
                            } else {
                                echo "Error fetching order details: " . mysqli_error($con);
                            }
                            ?>

                        </div>
                    </div>
                    <script>
                        function printReceipt() {
                            var receiptContent = document.getElementById('receipt-content').innerHTML;
                            var originalContent = document.body.innerHTML;

                            document.body.innerHTML = receiptContent;
                            window.print();
                            document.body.innerHTML = originalContent;
                        }
                    </script>


                </div>
                <!--end content-->

            </div>
            <!--#post-->


        </div>
        <!--end container-->

        <!--page margin-->
        <div class="nd_options_section nd_options_height_50"></div>



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
                                                        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/social-1.png"></a>



                                                <a style="margin:5px; border: px solid ; border-radius:px; background-color:; padding:; "
                                                    rel="" href="#"
                                                    class="nicdark_display_inline_block nd_options_float_left  "><img
                                                        decoding="async" class="nd_options_float_left" alt="" width="20"
                                                        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/social-3.png"></a>



                                                <a style="margin:5px; border: px solid ; border-radius:px; background-color:; padding:; "
                                                    rel="" href="#"
                                                    class="nicdark_display_inline_block nd_options_float_left  "><img
                                                        decoding="async" class="nd_options_float_left" alt="" width="20"
                                                        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/social-2.png"></a>



                                                <a style="margin:5px; border: px solid ; border-radius:px; background-color:; padding:; "
                                                    rel="" href="#"
                                                    class="nicdark_display_inline_block nd_options_float_left  "><img
                                                        decoding="async" class="nd_options_float_left" alt="" width="20"
                                                        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/social-4.png"></a>



                                                <a style="margin:5px; border: px solid ; border-radius:px; background-color:; padding:; "
                                                    rel="" href="#"
                                                    class="nicdark_display_inline_block nd_options_float_left  "><img
                                                        decoding="async" class="nd_options_float_left" alt="" width="20"
                                                        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/social-5.png"></a>

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
                                        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/logo.png">
                                </div>
                                <div style="background-color:; height: 15px;" class="nicdark_section  "></div>
                                <p style="color:#ffffff; padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 1px; font-weight:normal;"
                                    class="   nd_options_second_font ">info@restaurant.com</p>
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
                                            <a href="../../index.php" style="color: #ffffff; text-decoration: none;">HOME</a>
                                        </p>
                                        <p style="text-align: center;letter-spacing: 2px">
                                            <a href="../../index.php" style="color: #ffffff; text-decoration: none;">ABOUT US</a>
                                        </p>
                                        <p style="text-align: center;letter-spacing: 2px">
                                            <a href="../../services/index.php" style="color: #ffffff; text-decoration: none;">SERVICES</a>
                                        </p>
                                        <p style="text-align: center;letter-spacing: 2px">
                                            <a href="../../book-a-table/index.php" style="color: #ffffff; text-decoration: none;">BOOKING</a>
                                        </p>
                                        <p style="text-align: center;letter-spacing: 2px">
                                            <a href="../../menu-1/index.php" style="color: #ffffff; text-decoration: none;">MENU</a>
                                        </p>
                                        <p style="text-align: center;letter-spacing: 2px">
                                            <a href="../../contact-1/index.php" style="color: #ffffff; text-decoration: none;">CONTACTS</a>
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
                                    class="   nd_options_second_font ">Copyright 2019 Nicdark Themes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <style>
                    .vc_custom_1548407428133 {
                        padding-top: 50px !important;
                        padding-bottom: 50px !important;
                        background-image: url(http://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/para-05.jpg?id=591) !important;
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
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=wc-9.3.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'
        href='//www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/js_composer/js_composer_front_custom.css?ver=5.6'
        type='text/css' media='all' />
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-includes/js/dist/hooks.min.js?ver=2810c76e705dd1a53b18"
        id="wp-hooks-js"></script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6"
        id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.9.8"
        id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = { "api": { "root": "https:\/\/www.nicdark-themes.com\/themes\/restaurant\/wp\/demo\/restaurant\/wp-json\/", "namespace": "contact-form-7\/v1" } };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.9.8"
        id="contact-form-7-js"></script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-includes/js/comment-reply.min.js?ver=6.6.2"
        id="comment-reply-js" async="async" data-wp-strategy="async"></script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/themes/ristorante/js/nicdark_navigation.js?ver=6.6.2"
        id="nicdark_navigation-js"></script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=9.3.3"
        id="sourcebuster-js-js"></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = { "params": { "lifetime": 1.0000000000000000818030539140313095458623138256371021270751953125e-5, "session": 30, "base64": false, "ajaxurl": "https:\/\/www.nicdark-themes.com\/themes\/restaurant\/wp\/demo\/restaurant\/wp-admin\/admin-ajax.php", "prefix": "wc_order_attribution_", "allowTracking": true }, "fields": { "source_type": "current.typ", "referrer": "current_add.rf", "utm_campaign": "current.cmp", "utm_source": "current.src", "utm_medium": "current.mdm", "utm_content": "current.cnt", "utm_id": "current.id", "utm_term": "current.trm", "utm_source_platform": "current.plt", "utm_creative_format": "current.fmt", "utm_marketing_tactic": "current.tct", "session_entry": "current_add.ep", "session_start_time": "current_add.fd", "session_pages": "session.pgs", "session_count": "udata.vst", "user_agent": "udata.uag" } };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=9.3.3"
        id="wc-order-attribution-js"></script>
    <script type="text/javascript"
        src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=5.6"
        id="wpb_composer_front_js-js"></script>


</body>

</html>