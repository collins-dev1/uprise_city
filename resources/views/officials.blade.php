<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uprise City</title>
    <meta name='robots' content='max-image-preview:large' />
    <style>
        img:is([sizes="auto" i],
        [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <link rel='dns-prefetch' href='https://cdnjs.cloudflare.com/' />
    <link rel="alternate" type="application/rss+xml" title="Uprise city &raquo; Feed"
        href="{{ asset('uprise_city/feed/index.html') }}" />
    <link rel="alternate" type="application/rss+xml" title="Uprise city &raquo; Comments Feed"
        href="{{ asset('uprise_city/comments/feed/index.html') }}" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.1.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.1.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/limitlesspeopleconference.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\ud83d\udd25", "\ud83d\udc26\u200b\ud83d\udd25")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <style id='wp-emoji-styles-inline-css'>
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
    <style id='global-styles-inline-css'>
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

        :root {
            --wp--style--global--content-size: 800px;
            --wp--style--global--wide-size: 1200px;
        }

        :where(body) {
            margin: 0;
        }

        .wp-site-blocks>.alignleft {
            float: left;
            margin-right: 2em;
        }

        .wp-site-blocks>.alignright {
            float: right;
            margin-left: 2em;
        }

        .wp-site-blocks>.aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }

        :where(.wp-site-blocks)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :where(.wp-site-blocks)> :first-child {
            margin-block-start: 0;
        }

        :where(.wp-site-blocks)> :last-child {
            margin-block-end: 0;
        }

        :root {
            --wp--style--block-gap: 24px;
        }

        :root :where(.is-layout-flow)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-flow)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-flow)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-constrained)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :root :where(.is-layout-flex) {
            gap: 24px;
        }

        :root :where(.is-layout-grid) {
            gap: 24px;
        }

        .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
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

        body {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        a:where(:not(.wp-element-button)) {
            text-decoration: underline;
        }

        :root :where(.wp-element-button, .wp-block-button__link) {
            background-color: #32373c;
            border-width: 0;
            color: #fff;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            text-decoration: none;
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

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='rkit-offcanvas-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/offcanvas.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-navmenu-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/navmenu.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-headerinfo-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/headerinfo.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='navmenu-rkit-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/rkit-navmenu.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-search-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/search.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-sitelogo-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/site_logo.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-post-grid-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/rkit-blog-post.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-post-block-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/rkit-post-block.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-cta-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/cta.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-blockquote-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/blockquote.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-social-share-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/social_share.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-team-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/rkit_team.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-running_text-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/running_text.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-animated_heading-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/animated_heading.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-card_slider-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/card_slider.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-accordion-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/accordion.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-testimonial_carousel-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/testimonial_carousel.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-swiper-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/swiper-bundle.min.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-tabs-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/tabs.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-progress-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/progress-bar.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='counter-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/counter.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='countdown-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/countdown.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-pricelist-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/pricelist.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='advanced_heading-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/advanced_heading.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='image_comparison-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/image_comparison.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='postlist-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/postlist.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='pricebox-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/pricingbox.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-image_box-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/image_box.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-image_accordion-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/image_accordion.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-dual_button-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/dual_button.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-image_gallery-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/image_gallery.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-home-slider-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/home_slider.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-woo-product-grid-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/woo_product_grid.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-client_grid-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/client_grid.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-barchart-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/barchart.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-linechart-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/linechart.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-piechart-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/piechart.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-back-to-top-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/back_to_top.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-icons-rtmicon-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/assets/css/rtmicons.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='rkit-widget-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/assets/css/rkit.css@ver=1.5.6.css') }}"
        media='all' />
    <link rel='stylesheet' id='sbttb-fonts-css'
        href="{{ asset('uprise_city/wp-content/plugins/smooth-back-to-top-button/assets/css/sbttb-fonts.css@ver=1.1.15.css') }}"
        media='all' />
    <link rel='stylesheet' id='sbttb-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/smooth-back-to-top-button/assets/css/smooth-back-to-top-button.css@ver=1.1.15.css') }}"
        media='all' />
    <link rel='stylesheet' id='rtform-text-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/romethemeform/widgets/assets/css/rtform_text.css@ver=1.2.1.css') }}"
        media='all' />
    <link rel='stylesheet' id='rform-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/romethemeform/widgets/assets/css/rform.css@ver=1.2.1.css') }}"
        media='all' />
    <link rel='stylesheet' id='spinner-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/romethemeform/widgets/assets/css/spinner-loading.css@ver=1.2.1.css') }}"
        media='all' />
    <link rel='stylesheet' id='rform-btn-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/romethemeform/widgets/assets/css/rform-button.css@ver=1.2.1.css') }}"
        media='all' />
    <link rel='stylesheet' id='rform-select-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/romethemeform/widgets/assets/css/rform-select.css@ver=1.2.1.css') }}"
        media='all' />
    <link rel='stylesheet' id='rform-radiobutton-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/romethemeform/widgets/assets/css/rform-radiobutton.css@ver=1.2.1.css') }}"
        media='all' />
    <link rel='stylesheet' id='rform-checkbox-style-css'
        href="{{ asset('uprise_city/wp-content/plugins/romethemeform/widgets/assets/css/rform-checkbox.css@ver=1.2.1.css') }}"
        media='all' />
    <link rel='stylesheet' id='intlTelInput-css'
        href="{{ asset('uprise_city/wp-content/plugins/romethemeform/widgets/assets/css/intlTelInput.css@ver=1.2.1.css') }}"
        media='all' />
    <link rel='stylesheet' id='hello-elementor-css'
        href="{{ asset('uprise_city/wp-content/themes/hello-elementor/style.min.css@ver=3.3.0.css') }}"
        media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
        href="{{ asset('uprise_city/wp-content/themes/hello-elementor/theme.min.css@ver=3.3.0.css') }}"
        media='all' />
    <link rel='stylesheet' id='hello-elementor-header-footer-css'
        href="{{ asset('uprise_city/wp-content/themes/hello-elementor/header-footer.min.css@ver=3.3.0.css') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor/assets/css/frontend.min.css@ver=3.28.4.css') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-post-8-css'
        href="{{ asset('uprise_city/wp-content/uploads/elementor/css/post-8.css@ver=1743503377.css') }}"
        media='all' />
    <link rel='stylesheet' id='eael-general-css'
        href="{{ asset('uprise_city/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min.css@ver=6.1.11.css') }}"
        media='all' />
    <link rel='stylesheet' id='eael-752-css'
        href="{{ asset('uprise_city/wp-content/uploads/essential-addons-elementor/eael-752.css@ver=1744914120.css') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor-pro/assets/css/frontend.min.css@ver=3.21.3.css') }}"
        media='all' />
    <link rel='stylesheet' id='e-animation-shrink-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-shrink.min.css@ver=3.28.4.css') }}"
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeInLeft-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInLeft.min.css@ver=3.28.4.css') }}"
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css@ver=8.4.5.css') }}"
        media='all' />
    <link rel='stylesheet' id='e-swiper-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css@ver=3.28.4.css') }}"
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeInUp-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.min.css@ver=3.28.4.css') }}"
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeInDown-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInDown.min.css@ver=3.28.4.css') }}"
        media='all' />
    <link rel='stylesheet' id='widget-image-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor/assets/css/widget-image.min.css@ver=3.28.4.css') }}"
        media='all' />
    <link rel='stylesheet' id='widget-spacer-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor/assets/css/widget-spacer.min.css@ver=3.28.4.css') }}"
        media='all' />
    <link rel='stylesheet' id='widget-heading-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor/assets/css/widget-heading.min.css@ver=3.28.4.css') }}"
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeInRight-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInRight.min.css@ver=3.28.4.css') }}"
        media='all' />
    <link rel='stylesheet' id='widget-icon-box-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css@ver=3.28.4.css') }}"
        media='all' />
    <link rel='stylesheet' id='widget-icon-list-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css@ver=3.28.4.css') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-post-752-css'
        href="{{ asset('uprise_city/wp-content/uploads/elementor/css/post-752.css@ver=1744914304.css') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-post-22-css'
        href="{{ asset('uprise_city/wp-content/uploads/elementor/css/post-22.css@ver=1743503378.css') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-post-40-css'
        href="{{ asset('uprise_city/wp-content/uploads/elementor/css/post-40.css@ver=1743503378.css') }}"
        media='all' />
    <link rel='stylesheet' id='skb-cife-elegant_icon-css'
        href="{{ asset('uprise_city/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/elegant.css@ver=1.0.9.css') }}"
        media='all' />
    <link rel='stylesheet' id='skb-cife-linearicons_icon-css'
        href="{{ asset('uprise_city/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/linearicons.css@ver=1.0.9.css') }}"
        media='all' />
    <link rel='stylesheet' id='skb-cife-themify_icon-css'
        href="{{ asset('uprise_city/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/themify.css@ver=1.0.9.css') }}"
        media='all' />
    <link rel='stylesheet' id='ekit-widget-styles-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css@ver=3.5.0.css') }}"
        media='all' />
    <link rel='stylesheet' id='ekit-responsive-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css@ver=3.5.0.css') }}"
        media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css@ver=6.1.11.css') }}"
        media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css@ver=6.1.11.css') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-gf-local-firasans-css'
        href="{{ asset('uprise_city/wp-content/uploads/elementor/google-fonts/css/firasans.css@ver=1742272775.css') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-gf-local-robotoslab-css'
        href="{{ asset('uprise_city/wp-content/uploads/elementor/google-fonts/css/robotoslab.css@ver=1742272777.css') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-gf-local-ptsans-css'
        href="{{ asset('uprise_city/wp-content/uploads/elementor/google-fonts/css/ptsans.css@ver=1742272777.css') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-icons-skb_cife-elegant-icon-css'
        href="{{ asset('uprise_city/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/elegant.css@ver=1.0.9.css') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-icons-ekiticons-css'
        href="{{ asset('uprise_city/wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css@ver=3.5.0.css') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-icons-skb_cife-themify-icon-css'
        href="{{ asset('uprise_city/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/themify.css@ver=1.0.9.css') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-icons-rtmicons-css'
        href="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/assets/css/rtmicon-regular.css@ver=1.5.6.css') }}"
        media='all' />
    <script src="{{ asset('uprise_city/wp-includes/js/jquery/jquery.min.js@ver=3.7.1') }}" id="jquery-core-js"></script>
    <script src="{{ asset('uprise_city/wp-includes/js/jquery/jquery-migrate.min.js@ver=3.4.1') }}" id="jquery-migrate-js">
    </script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/card_slider.js@ver=1.5.6') }}"
        id="card-slider-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/animated_heading.js@ver=1.5.6') }}"
        id="animated-heading-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/accordion.js@ver=1.5.6') }}"
        id="accordion-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/bar_chart.js@ver=1.5.6') }}"
        id="bar_chart-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/line_chart.js@ver=1.5.6') }}"
        id="line_chart-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/pie_chart.js@ver=1.5.6') }}"
        id="pie_chart-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/swiper-bundle.min.js@ver=1.5.6') }}"
        id="swiperjs-js"></script>
    <script src="{{ asset('uprise_city/wp-content/plugins/romethemeform/widgets/assets/js/rtform_text.js@ver=1.2.1') }}"
        id="rtform-text-js-js"></script>
    <script src="{{ asset('uprise_city/wp-content/plugins/romethemeform/widgets/assets/js/rform_select.js@ver=1.2.1') }}"
        id="rform-select-js-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/romethemeform/widgets/assets/js/rform_tel_input.js@ver=1.2.1') }}"
        id="rform-phone-js-js"></script>
    <script id="rform-script-js-extra">
        var romethemeform_ajax_url = {
            "ajax_url": "https:\/\/limitlesspeopleconference.com\/wp-admin\/admin-ajax.php",
            "nonce": "5e3f61027e"
        };
    </script>
    <script src="{{ asset('uprise_city/wp-content/plugins/romethemeform/widgets/assets/js/rform.js@ver=1.2.1') }}"
        id="rform-script-js"></script>
    <script id="intl-tel-input-js-extra">
        var intl_tel_input_script = {
            "url": "https:\/\/limitlesspeopleconference.com\/wp-content\/plugins\/romethemeform\/widgets\/assets\/js\/intl_tel_input_utils.js"
        };
    </script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/romethemeform/widgets/assets/js/intl_tel_input.min.js@ver=1.2.1') }}"
        id="intl-tel-input-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js@ver=6.1.11') }}"
        id="font-awesome-4-shim-js"></script>
    <link rel="https://api.w.org/" href="{{ asset('uprise_city/wp-json/index.html') }}" />
    <link rel="alternate" title="JSON" type="application/json"
        href="{{ asset('uprise_city/wp-json/wp/v2/pages/752') }}" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://limitlesspeopleconference.com/xmlrpc.php?rsd" />

    <link rel="canonical" href="{{ asset('uprise_city/index.html') }}" />
    <link rel='shortlink' href="{{ asset('uprise_city/index.html') }}" />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="{{ asset('uprise_city/wp-json/oembed/1.0/embed@url=https%253A%252F%252Flimitlesspeopleconference.com%252F') }}" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="{{ asset('uprise_city/wp-json/oembed/1.0/embed@url=https%253A%252F%252Flimitlesspeopleconference.com%252F&amp;format=xml') }}" />

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <style type="text/css">
        .progress-wrap {
            bottom: 50px;
            height: 46px;
            width: 46px;
            border-radius: 46px;
            background-color: #889c55;
            box-shadow: inset 0 0 0 2px #cccccc;
        }

        .progress-wrap.btn-left-side {
            left: 50px;
        }

        .progress-wrap.btn-right-side {
            right: 50px;
        }

        .progress-wrap::after {
            width: 46px;
            height: 46px;
            color: #1f3954;
            font-size: 24px;
            content: '\e904';
            line-height: 46px;
        }

        .progress-wrap:hover::after {
            color: #ffffff;
        }

        .progress-wrap svg.progress-circle path {
            stroke: #1f3954;
            stroke-width: 2px;
        }
    </style>

    <meta name="generator"
        content="Elementor 3.28.4; features: e_font_icon_svg, additional_custom_breakpoints, e_local_google_fonts; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <link rel="icon" href="{{ asset('uprise_city/upriseimg/uprise.jpg') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('uprise_city/upriseimg/uprise.jpg') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('uprise_city/upriseimg/uprise.jpg') }}" />
    <meta name="msapplication-TileImage" content="upriseimg/uprise.jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</head>

<body
    class="home wp-singular page-template-default page page-id-752 wp-embed-responsive wp-theme-hello-elementor theme-default elementor-default elementor-kit-8 elementor-page elementor-page-752">

    @include('sweetalert::alert')
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Registration Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('user_reg') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div>
                            <p>Register here for the global wealth conference 2025 please fill the right information</p>
                        </div>
                        <div>
                            <label for="">Full Name</label>
                            <input type="text" name="full_name" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="mt-3">
                            <label for="">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="mt-3">
                            <label for="">Phone Number</label>
                            <input type="tel" name="phone_number" class="form-control"
                                placeholder="Phone Number">
                        </div>
                        <div class="mt-3">
                            <label for="">Select State you are coming from</label>
                            <select name="state" id="state" class="form-select">
                                <option value="" disabled selected>-- Select State --</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="FCT - Abuja">FCT - Abuja</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                            </select>

                        </div>

                        <div class="mt-3">
                            <label for="">Job Title or Role</label>
                            <input type="text" name="job_title" class="form-control"
                                placeholder="Job title or role">
                        </div>
                        <div class="mt-3">
                            <label for="">Company/Organization Name</label>
                            <input type="text" class="form-control" name="company_name"
                                placeholder="Company/Organization Name">
                        </div>
                        <div class="mt-3">
                            <label for="">Select your Subscription Ticket</label>
                            <select name="subscription_ticket" id="subscription_ticket" class="form-select">
                                <option disabled selected>--Select Ticket--</option>
                                <option>Regular Ticket (&#8358;7,500)</option>
                                <option>Special Ticket (&#8358;15,000)</option>
                                <option>VIP Ticket (&#8358;50,000)</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <input type="checkbox" required>
                            <span>I Agree with terms and condition of the Conference</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div data-elementor-type="header" data-elementor-id="22" class="elementor elementor-22 elementor-location-header"
        data-elementor-post-type="elementor_library">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-1b528694 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="1b528694" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-55b337af"
                    data-id="55b337af" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-5f477d9f elementor-widget elementor-widget-image"
                            data-id="5f477d9f" data-element_type="widget" data-widget_type="image.default">
                            <a href="{{ url('/') }}">
                                <div class="elementor-widget-container">
                                    <img src="{{ asset('uprise_city/upriseimg/uprisecitylogo.png') }}"
                                        class="attachment-full size-full wp-image-357" alt=""
                                        srcset="{{ asset('uprise_city/upriseimg/uprisecitylogo.png') }}"
                                        style="width: 150px;" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7884a572"
                    data-id="7884a572" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-a2df140 elementor-widget elementor-widget-ekit-nav-menu"
                            data-id="a2df140" data-element_type="widget" data-widget_type="ekit-nav-menu.default">
                            <div class="elementor-widget-container">
                                <nav class="ekit-wid-con ekit_menu_responsive_tablet" data-hamburger-icon=""
                                    data-hamburger-icon-type="icon" data-responsive-breakpoint="1024">
                                    <button class="elementskit-menu-hamburger elementskit-menu-toggler" type="button"
                                        aria-label="hamburger-icon">
                                        <i class="ri-order-play-fill"></i>
                                    </button>
                                    <div id="ekit-megamenu-main-menu"
                                        class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default ekit-nav-menu-one-page-no ekit-nav-dropdown-hover">
                                        <ul id="menu-main-menu"
                                            class="elementskit-navbar-nav elementskit-menu-po-center submenu-click-on-icon">
                                            <!-- About Us with Dropdown -->
                                            <li id="menu-item-857"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-857 nav-item elementskit-mobile-builder-content"
                                                data-vertical-menu="750px">
                                                <a class="ekit-menu-nav-link">About Us</a>
                                                <ul class="sub-menu dropdown-content">
                                                    <li class="menu-item"><a
                                                            href="{{ route('history') }}">Hisory</a></li>
                                                    <li class="menu-item"><a
                                                            href="{{ route('mission') }}">Mission</a></li>
                                                    <li class="menu-item"><a href="{{ route('vision') }}">Vision</a>
                                                    </li>
                                                    <li class="menu-item"><a href="{{ route('corevalue') }}">Core
                                                            Values</a></li>
                                                </ul>
                                            </li>

                                            <!-- Global Wealth Conference -->
                                            <li id="menu-item-858"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-858 nav-item elementskit-mobile-builder-content"
                                                data-vertical-menu="750px">
                                                <a href="{{ route('contact') }}" class="ekit-menu-nav-link">Contact
                                                    Us</a>
                                            </li>

                                            <li id="menu-item-858"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-858 nav-item elementskit-mobile-builder-content"
                                                data-vertical-menu="750px">
                                                <a href="{{ route('officials') }}"
                                                    class="ekit-menu-nav-link">Officials</a>
                                            </li>

                                            <li id="menu-item-17"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17 nav-item elementskit-mobile-builder-content"
                                                data-vertical-menu="750px">
                                                <a class="ekit-menu-nav-link">Courses</a>
                                                <ul class="sub-menu dropdown-content">
                                                    <li class="menu-item"><a
                                                            href="{{ route('programmes') }}">Programmes</a></li>
                                                </ul>
                                            </li>

                                            <!-- FAQs with Dropdown -->
                                            <li id="menu-item-17"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17 nav-item elementskit-mobile-builder-content"
                                                data-vertical-menu="750px">
                                                <a class="ekit-menu-nav-link">Global Wealth Conference</a>
                                                <ul class="sub-menu dropdown-content">
                                                    <li class="menu-item"><a
                                                            href="{{ route('speakers') }}">Speakers</a></li>
                                                    <li class="menu-item"><a
                                                            href="{{ route('tickets') }}">Ticket</a></li>
                                                    <li class="menu-item"><a
                                                            href="{{ route('sponsors') }}">Sponsors</a></li>
                                                            <li class="menu-item"><a
                                                            href="{{ route('payment_method') }}">Already Registered and want to make payment</a></li>
                                                </ul>
                                            </li>

                                            <!-- Photo Gallery -->
                                            <li id="menu-item-17"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17 nav-item elementskit-mobile-builder-content"
                                                data-vertical-menu="750px">
                                                <a class="ekit-menu-nav-link">Photo
                                                    Gallery</a>
                                                <ul class="sub-menu dropdown-content">
                                                    <li class="menu-item"><a href="{{ route('yec2015') }}">(YEC)
                                                            2015</a></li>
                                                    <li class="menu-item"><a href="{{ route('yec2016') }}">(YEC)
                                                            2016</a></li>
                                                    <li class="menu-item"><a href="{{ route('yec2017') }}">(YEC)
                                                            2017</a></li>
                                                    <li class="menu-item"><a href="{{ route('gwc2018') }}">(GWC)
                                                            2018</a></li>
                                                    <li class="menu-item"><a href="{{ route('gwc20199') }}">(GWC)
                                                            2019</a></li>
                                                    <li class="menu-item"><a href="{{ route('gwc2020') }}">(GWC)
                                                            2020</a></li>
                                                    <li class="menu-item"><a href="{{ route('gwc20222') }}">(GWC)
                                                            2022</a></li>
                                                    <li class="menu-item"><a href="{{ route('ec2023') }}">(EC)
                                                            2023</a></li>
                                                    <li class="menu-item"><a href="{{ route('gallery') }}">(GWC)
                                                            2024</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <style>
                                            /* Main Navbar Styles */
                                            .elementskit-navbar-nav {
                                                display: flex;
                                                list-style: none;
                                                margin: 0;
                                                padding: 0;
                                            }

                                            .elementskit-navbar-nav>li {
                                                position: relative;
                                            }

                                            .ekit-menu-nav-link {
                                                display: block;
                                                padding: 15px 20px;
                                                color: #333;
                                                text-decoration: none;
                                                font-weight: 500;
                                                transition: all 0.3s ease;
                                            }

                                            /* Dropdown Styles */
                                            .sub-menu {
                                                position: absolute;
                                                top: 100%;
                                                left: 0;
                                                min-width: 220px;
                                                background: white;
                                                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                                                opacity: 0;
                                                visibility: hidden;
                                                transform: translateY(10px);
                                                transition: all 0.3s ease;
                                                z-index: 1000;
                                                border-radius: 4px;
                                                padding: 10px 0;
                                                list-style: none;
                                                margin: 0;
                                            }

                                            .sub-menu li {
                                                padding: 0;
                                            }

                                            .sub-menu a {
                                                display: block;
                                                padding: 10px 20px;
                                                color: #555;
                                                text-decoration: none;
                                                transition: all 0.2s ease;
                                                font-size: 14px;
                                            }

                                            .sub-menu a:hover {
                                                background: #f8f9fa;
                                                color: #000;
                                                padding-left: 25px;
                                            }

                                            /* Show dropdown on hover */
                                            .menu-item-has-children:hover>.sub-menu {
                                                opacity: 1;
                                                visibility: visible;
                                                transform: translateY(0);
                                            }

                                            /* Add arrow indicator for dropdown items */
                                            .menu-item-has-children>a::after {
                                                content: "▾";
                                                margin-left: 5px;
                                                font-size: 12px;
                                                display: inline-block;
                                                transition: transform 0.3s ease;
                                            }

                                            .menu-item-has-children:hover>a::after {
                                                transform: rotate(180deg);
                                            }

                                            @media (max-width: 768px) {

                                                /* Main mobile menu styles */
                                                .elementskit-navbar-nav {
                                                    flex-direction: column;
                                                    background: #ffffff;
                                                    width: 100%;
                                                }

                                                /* Menu items */
                                                .elementskit-navbar-nav>li {
                                                    width: 100%;
                                                    position: relative;
                                                }

                                                /* Main links */
                                                .ekit-menu-nav-link {
                                                    display: block;
                                                    padding: 12px 20px;
                                                    color: #000000 !important;
                                                    /* Force black text */
                                                    text-decoration: none;
                                                    border-bottom: 1px solid #f0f0f0;
                                                    position: relative;
                                                }

                                                /* Dropdown container - make sure it's visible */
                                                .sub-menu {
                                                    display: none;
                                                    position: static !important;
                                                    width: 100% !important;
                                                    background: #ffffff !important;
                                                    box-shadow: none !important;
                                                    opacity: 1 !important;
                                                    visibility: visible !important;
                                                    transform: none !important;
                                                    padding: 0 !important;
                                                    margin: 0 !important;
                                                    border: none !important;
                                                }

                                                /* Show dropdown when active */
                                                .menu-item-has-children.active>.sub-menu {
                                                    display: block !important;
                                                }

                                                /* Dropdown items */
                                                .sub-menu li {
                                                    width: 100%;
                                                }

                                                /* Dropdown links - ensure text is visible */
                                                .sub-menu a {
                                                    display: block !important;
                                                    padding: 10px 30px !important;
                                                    /* Extra left padding for hierarchy */
                                                    color: #000000 !important;
                                                    background: #ffffff !important;
                                                    font-size: 14px;
                                                    border-bottom: 1px solid #f5f5f5;
                                                }

                                                /* Dropdown indicator */
                                                .menu-item-has-children>a::after {
                                                    content: "+";
                                                    position: absolute;
                                                    right: 20px;
                                                    top: 50%;
                                                    transform: translateY(-50%);
                                                }

                                                .menu-item-has-children.active>a::after {
                                                    content: "-";
                                                }

                                                /* Remove any transforms that might hide content */
                                                .sub-menu,
                                                .sub-menu * {
                                                    transform: none !important;
                                                    height: auto !important;
                                                    overflow: visible !important;
                                                }
                                            }
                                        </style>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                // Close dropdowns when clicking outside
                                                document.addEventListener('click', function(e) {
                                                    const dropdowns = document.querySelectorAll('.menu-item-has-children');
                                                    dropdowns.forEach(dropdown => {
                                                        if (!dropdown.contains(e.target)) {
                                                            const submenu = dropdown.querySelector('.sub-menu');
                                                            if (submenu) {
                                                                submenu.style.opacity = '0';
                                                                submenu.style.visibility = 'hidden';
                                                                submenu.style.transform = 'translateY(10px)';
                                                            }
                                                        }
                                                    });
                                                });
                                            });
                                            document.addEventListener('DOMContentLoaded', function() {
                                                // Mobile menu toggle functionality
                                                const menuItems = document.querySelectorAll('.menu-item-has-children > a');

                                                menuItems.forEach(item => {
                                                    item.addEventListener('click', function(e) {
                                                        if (window.innerWidth <= 768) {
                                                            e.preventDefault();
                                                            const parent = this.parentElement;
                                                            parent.classList.toggle('active');

                                                            // Close other open dropdowns
                                                            document.querySelectorAll('.menu-item-has-children')
                                                                .forEach(el => {
                                                                    if (el !== parent) {
                                                                        el.classList.remove('active');
                                                                    }
                                                                });
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
                                        <div class="elementskit-nav-identity-panel"><a class="elementskit-nav-logo"
                                                href="{{ url('/') }}" target="" rel=""><img
                                                    src="{{ asset('uprise_city/upriseimg/uprisecitylogo.png') }}"
                                                    title="Uprise City"
                                                    alt="Logo_Limitless_people_-_White_Black_Background-removebg-preview-removebg-preview"
                                                    decoding="async" /></a><button
                                                class="elementskit-menu-close elementskit-menu-toggler"
                                                type="button">X</button></div>
                                    </div>
                                    <div
                                        class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay">
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2c8d5b9"
                    data-id="2c8d5b9" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-64f8d8cb elementor-align-right elementor-mobile-align-right elementor-widget elementor-widget-button"
                            data-id="64f8d8cb" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-md elementor-animation-shrink"
                                        href="index.html#join" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Register Now</span>
                                        </span>
                                    </a>
                                    <style>
                                        .elementor-button {
                                            background-color: #261FB3 !important;
                                        }

                                        .elementskit-menu-hamburger {
                                            background-color: #261FB3 !important;
                                        }

                                        .ekit-menu-nav-link:hover {
                                            color: #261FB3 !important;
                                        }

                                        .elementskit-nav-identity-panel {
                                            background-color: #fff !important;
                                        }

                                        .elementskit-menu-close {
                                            background-color: #261FB3 !important;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <main id="content" class="site-main post-752 page type-page status-publish hentry">

        <div class="page-header">
            <h1 class="entry-title">home new</h1>
        </div>

        <div class="page-content">
            <div data-elementor-type="wp-page" data-elementor-id="752" class="elementor elementor-752"
                data-elementor-post-type="page">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-d7413a6 elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-middle elementor-section-boxed elementor-section-height-default"
                    data-id="d7413a6" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:103,&quot;url&quot;:&quot;{{ asset('uprise_city/sponsor_logos\/off1.jpg') }}&quot;},{&quot;id&quot;:301,&quot;url&quot;:&quot;{{ asset('uprise_city/sponsor_logos\/off2.jpg') }}&quot;},{&quot;id&quot;:887,&quot;url&quot;:&quot;{{ asset('uprise_city/sponsor_logos\/off3.jpg') }}&quot;}],&quot;background_slideshow_ken_burns&quot;:&quot;yes&quot;,&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500,&quot;background_slideshow_ken_burns_zoom_direction&quot;:&quot;in&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ce6159f elementor-invisible"
                            data-id="ce6159f" data-element_type="column"
                            data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-d861c38 elementor-widget elementor-widget-elementskit-heading"
                                    data-id="d861c38" data-element_type="widget"
                                    data-widget_type="elementskit-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="ekit-wid-con">
                                            <div
                                                class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-">
                                                <h1 class="ekit-heading--title elementskit-section-title ">UPRISE CITY
                                                    <br>OFFICIALS
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-e754f9e elementor-widget elementor-widget-text-editor"
                                    data-id="e754f9e" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>Our dedicated team of officials is committed to ensuring the success of the
                                            conference. With a wealth of experience and a shared passion for excellence,
                                            they oversee planning, coordination, and execution—guaranteeing a seamless
                                            and impactful event for every participant.</p>
                                    </div>
                                </div>
                                <style>
                                    @media (max-width: 768px) {
                                        .ekit-heading--title {
                                            font-size: 3rem !important;
                                        }

                                        .ekit-heading {
                                            margin-top: -6rem;
                                        }
                                    }

                                    .ekit-heading--title {
                                        text-shadow:
                                            2px 2px 4px rgba(0, 0, 0, 0.4),
                                            /* subtle depth */
                                            0 0 2px rgba(0, 128, 255, 0.3),
                                            /* soft blue glow */
                                            0 0 5px #261FB3;
                                    }

                                    .elementor-widget-container {
                                        text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.3);
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </section>

                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-48cc6d9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="48cc6d9" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e298037 elementor-invisible"
                            data-id="e298037" data-element_type="column"
                            data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_delay&quot;:1000}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-0773575 elementor-widget elementor-widget-heading"
                                    data-id="0773575" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h3 class="elementor-heading-title elementor-size-default">Our Officials
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-993b693 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="993b693" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e160a0f"
                            data-id="e160a0f" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-fd6eef0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="fd6eef0" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9d87d97 elementor-invisible"
                                            data-id="9d87d97" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:300}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-c33c79f elementor-widget elementor-widget-image"
                                                    data-id="c33c79f" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img decoding="async" width="800" height="800"
                                                            src="{{ asset('uprise_city/eventspeakerimg/bsi2.jpg') }}"
                                                            class="attachment-large size-large wp-image-924"
                                                            alt="bs'i molokwu"
                                                            srcset="{{ asset('uprise_city/eventspeakerimg/bsi2.jpg') }}"
                                                            sizes="(max-width: 800px) 100vw, 800px" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-8bab95d elementor-widget elementor-widget-icon-box"
                                                    data-id="8bab95d" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">


                                                            <div class="elementor-icon-box-content">

                                                                <h4 class="elementor-icon-box-title">
                                                                    <span style="text-transform: uppercase">
                                                                        Rev Bs'I Molokwu</span>
                                                                </h4>
                                                                <h5>(PRESIDENT)</h5>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-cf7f478 elementor-widget elementor-widget-text-editor"
                                                    data-id="cf7f478" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Bs'I is a Kingdom Leadership
                                                            Coach , Brand Strategist,
                                                            Entrepreneur , National
                                                            Transformation Strategist, Youth
                                                            Pastorand Priest.</p>
                                                        <p>He mentors, coaches, writes and
                                                            speaks on kingdom matters and
                                                            wealth creation, leadership,
                                                            managements, personal and
                                                            business developments and
                                                            branding.
                                                        </p>
                                                        <h6>AREAS OF EXPERTISE</h6>
                                                        <ul>
                                                            <li>Strategic and Innovation
                                                                Leadership.</li>
                                                            <li>Capacity and Team Building.
                                                            </li>
                                                            <li>Wealth Creation And Idea
                                                                Execution.</li>
                                                            <li>Brand and Development
                                                                Strategy</li>
                                                            <li>Business Growth and
                                                                Development Coaching.</li>
                                                            <li>Personal Growth and
                                                                Development.
                                                            </li>
                                                            <li>Youth Ministry Consult.
                                                            </li>
                                                            <li>Structure Establishment
                                                                and System Building.</li>
                                                            <li>Spiritual Growth and
                                                                Kingdom Teaching. </li>
                                                        </ul>
                                                        <h6>PORTFOLIOS AND
                                                            WORK EXPERIENCES </h6>
                                                        <ul>
                                                            <li>Former Business Development Officer,
                                                                Fineworld Digital, Abuja</li>
                                                            <li>Former Human Resource Management,
                                                                AbbahTech Tech Connections</li>
                                                            <li>Former Brand Consultant,
                                                                Otada Solutions Group of Companies </li>
                                                            <li>Former Church Administrative Assistant </li>
                                                            <li>Former Co-facilitator,
                                                                Niger Business School </li>
                                                            <li>Former Church Team Minister</li>
                                                            <li>Resident Priest, St Mary the Virgin Church</li>
                                                            <li>Brand Strategist, Bs'I Brande</li>
                                                            <li>Founder, Uprise City
                                                                Integrated Resources Ltd</li>
                                                            <li>Vice President, Senior Friends Forum, DONYAC</li>
                                                            <li>Chaplain, DON Young Anglican Crusaders </li>
                                                            <li>Host, Global Wealth Conference</li>
                                                        </ul>
                                                        <p>With over a decade experience in entrepreneurship,
                                                            management,
                                                            business planning and execution, branding, leadership,
                                                            personal
                                                            development, Bs'I has the breadth and depth of the
                                                            technical-know￾howto offerqualityservices.</p>
                                                        <p>With deep insight, spiritual and emotional intelligence, Bs'I
                                                            is helping
                                                            individuals, organizations and businesses become
                                                            distinctively
                                                            outstanding, hence gaining local dominance and global
                                                            relevance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6ed652e elementor-invisible"
                                            data-id="6ed652e" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-532a7d8 elementor-widget elementor-widget-image"
                                                    data-id="532a7d8" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="595"
                                                            height="700"
                                                            src="{{ asset('uprise_city/eventspeakerimg/guo2.jpg') }}"
                                                            class="attachment-large size-large wp-image-1346"
                                                            alt="Alycia Huston"
                                                            srcset="{{ asset('uprise_city/eventspeakerimg/guo2.jpg') }}"
                                                            sizes="(max-width: 595px) 100vw, 595px" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-af3ec72 elementor-widget elementor-widget-icon-box"
                                                    data-id="af3ec72" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">


                                                            <div class="elementor-icon-box-content">

                                                                <h4 class="elementor-icon-box-title">
                                                                    <span style="text-transform: uppercase">
                                                                        Chief Sir Godwin U Okeke</span>
                                                                </h4>
                                                                <h5>((OON) Grand Patron)</h5>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-ec12822 elementor-widget elementor-widget-text-editor"
                                                    data-id="ec12822" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Sir (Dr.) Godwin Ubaka Okeke, popularly known as GUO was born
                                                            on the first working day of the week, Monday, 6th June 1949
                                                            at Iyi-Enu Hospital, Ogidi, Onitsha. He is the sixth of
                                                            eight children of his parents made up of seven males and one
                                                            female.
                                                        </p>
                                                        <p>His father, Chief Joseph Ikeokwu Okeke who started out as a
                                                            carpenter ended up as a textile merchant in the sixties with
                                                            branches at Main Market and on Bright Street, Onitsha. He
                                                            was President of Adazi-Ani Town Union from 1942 to 1975;
                                                            President, Men’s Fellowship of St. Jude’s Anglican Church,
                                                            Adazi-Ani, home and abroad; Treasurer of the church and
                                                            member, Parochial Church Committee until his death in 1979.
                                                        </p>
                                                        <p>His mother, Madam Christiana Nwaoye Okeke (nee Ezenwa)
                                                            Ocheze. She was a merchant of wholesale foodstuff with
                                                            stalls at Ose and Onitsha Main Market. She also supplied
                                                            foodstuff to secondary schools in Onitsha, Nnewi and Oba.
                                                            She started the women’s town group meeting of Adazi-Ani and
                                                            was head of the Onitsha branch.
                                                        </p>
                                                        <h6>Education
                                                        </h6>
                                                        <p>GUO started his primary education in 1955, aged 6 at Central
                                                            School, Onitsha. He had his secondary education at Community
                                                            Grammar School, Nnobi in 1963. In 1966, he attended “Man O’
                                                            War” training in readiness for becoming a prefect. The
                                                            training is akin to Leadership training or National Youth
                                                            Service. This course prepared him for surviving the Nigerian
                                                            Civil war and navigating the turbulent waters of business.
                                                        </p>
                                                        <p>Whilst in school, he was the goalkeeper of the school
                                                            football team and participated in long-distance race
                                                            competitions of the province held in Onitsha.
                                                        </p>
                                                        <h6>Family</h6>
                                                        <p>During the time that GUO’s father was the President of
                                                            Adazi-Ani Town Union, his bosom friend, Sir F. C. Ozoh was
                                                            the Secretary. The cordial relationship made him advise the
                                                            young Godwin to marry Sir Ozoh’s daughter, Patricia. In
                                                            1976, GUO got married to his heartthrob, now Lady (Dr.)
                                                            Patricia Obiageli Okeke (nee Ozoh) of Umuru, Adazi-Ani. Lady
                                                            Okeke is a retired civil servant and currently the
                                                            Proprietress and Principal of Supreme Knowledge Schools,
                                                            Nkpor, Onitsha providing quality education from Creche to
                                                            Secondary School.
                                                        </p>
                                                        <p>Based in Lagos, the company has around 55 bus terminals
                                                            across the country.
                                                        </p>
                                                        <p>The catchphrase of GUO is “INTEGRITY, HARDWORK AND THE GRACE
                                                            OF GOD”
                                                        </p>
                                                        <p>was converted to the Chinese language department at Nnamdi
                                                            Azikiwe University, Awka.
                                                        </p>
                                                        <p>Three-storey building accommodating 400 students at Paul’s
                                                            University, Awka.
                                                        </p>
                                                        <p>Patron, Anambra Blind Students Association
                                                        </p>
                                                        <p>Patron, Central School for the Deaf and Dumb. As patrons,
                                                            blind students travel free to any part of Nigeria on GUO
                                                            vehicles.
                                                        </p>
                                                        <p>Financial support for start-up businesses.
                                                        </p>
                                                        <p>Support entrepreneurship through mentoring</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d122fce elementor-invisible"
                                            data-id="d122fce" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:900}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-ba40bdc elementor-widget elementor-widget-image"
                                                    data-id="ba40bdc" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="595"
                                                            height="700"
                                                            src="{{ asset('uprise_city/eventspeakerimg/chinedu.jpg') }}"
                                                            class="attachment-large size-large wp-image-1263"
                                                            alt="Pastor Elisha Mamman"
                                                            srcset="{{ asset('uprise_city/eventspeakerimg/chinedu.jpg') }}"
                                                            sizes="(max-width: 595px) 100vw, 595px" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-0f8580c elementor-widget elementor-widget-icon-box"
                                                    data-id="0f8580c" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">


                                                            <div class="elementor-icon-box-content">

                                                                <h4 class="elementor-icon-box-title">
                                                                    <span style="text-transform: uppercase">
                                                                        Chinedu Okwuosa</span>
                                                                </h4>
                                                                <h5>(Executive Representative)</h5>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-ed8f40b elementor-widget elementor-widget-text-editor"
                                                    data-id="ed8f40b" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Chinedu C. Okwuosa (Prince) is a highly self-motivated leader
                                                            who has spent most of his life inspiring and building
                                                            leadership in others.

                                                        </p>
                                                        <p>After graduating with honors from the University, he devoted
                                                            the next five years to exploring some of his passions and
                                                            upscaling his leadership skills. During this time, he
                                                            authored three personal/career development books, spoke in
                                                            different youth conferences, and pioneered a handful of
                                                            leadership development strides.
                                                        </p>
                                                        <p>Prior to the release of his first book “Finding Your Career
                                                            Path” in 2016, he championed a career awareness campaign , a
                                                            project which took him to over 20 high schools and colleges
                                                            in the eastern part of Nigeria where he was able to provide
                                                            career directions for many young students, secondary school
                                                            graduands, and undergraduates, using customized career and
                                                            personal development tools. This was accompanied by a book
                                                            tour where he sold about 1000 copies of his first book and
                                                            made presentations that both inspired and reprogrammed
                                                            younger students on major life and career decisions.
                                                        </p>
                                                        <p>Still following his passion for inspiring leadership in
                                                            others, he co-started a social empowerment and financial
                                                            intelligence organization (Uprise City) in the city of
                                                            Onitsha with his friend Molokwu Bs’i. He served as the
                                                            executive director of the organization for some years during
                                                            which he co-hosted and facilitated some major conferences
                                                            and training programs for the organization including Global
                                                            Wealth Conference.
                                                        </p>
                                                        <p>As part of his contribution towards building a critical mass
                                                            of young and budding African talents of industry and
                                                            marketplace, he hosted a personal and career brand building
                                                            event tagged “Brand 360” in 2019 from which he was able to
                                                            mobilize about 100 young talents in the city of Onitsha. The
                                                            event also featured the launch and autograph signing of his
                                                            latest book “Becoming an Irresistible Brand”.
                                                        </p>
                                                        <p>Over the years Chinedu has also stretched his writing muscles
                                                            beyond authoring books to creating and editing written
                                                            content for personal brands, writing and making book reviews
                                                            at book launching events, as well as mobilizing and training
                                                            emerging writers to master the art of creative writing and
                                                            content creation for influence and impact. He was able to
                                                            achieve these through various virtual/on-site workshops and
                                                            masterclasses. </p>
                                                        <p>Currently, Chinedu resides in the US where he’s involved in a
                                                            teaching/graduate assistant contract with a state
                                                            University. While his goals continue changing and evolving,
                                                            his vision remains constant: to inspire, influence and
                                                            impact the next generation of global leaders and executives.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-f65953e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="f65953e" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-efd7157"
                            data-id="efd7157" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-7abb3cc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="7abb3cc" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d122fce elementor-invisible"
                                            data-id="d122fce" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:900}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-ba40bdc elementor-widget elementor-widget-image"
                                                    data-id="ba40bdc" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="595"
                                                            height="700"
                                                            src="{{ asset('uprise_city/eventspeakerimg/precious.jpg') }}"
                                                            class="attachment-large size-large wp-image-1263"
                                                            alt="Pastor Elisha Mamman"
                                                            srcset="{{ asset('uprise_city/eventspeakerimg/precious.jpg') }}"
                                                            sizes="(max-width: 595px) 100vw, 595px" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-0f8580c elementor-widget elementor-widget-icon-box"
                                                    data-id="0f8580c" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">


                                                            <div class="elementor-icon-box-content">

                                                                <h4 class="elementor-icon-box-title">
                                                                    <span style="text-transform: uppercase">
                                                                        Precious Ngozika-Oli Ochudo</span>
                                                                </h4>
                                                                <h5>(Strategic and Organizational Manager)</h5>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-ed8f40b elementor-widget elementor-widget-text-editor"
                                                    data-id="ed8f40b" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Precious Ngozika Ibeazor is a dynamic digital marketing
                                                            educator, public speaking coach, and exceptional master of
                                                            ceremonies, driven by a mission to help professionals and
                                                            entrepreneurs amplify their voices, sell with clarity, and
                                                            build bold, bankable brands.

                                                        </p>
                                                        <p>She currently serves as the Chief Growth Marketing Officer at
                                                            Coachivate —a global coaching and capacity development
                                                            platform founded by Coach FAA, a Gallup Certified Strengths
                                                            Coach and Global HR Leader.
                                                        </p>
                                                        <p>At Coachivate, Precious plays a pivotal role in brand
                                                            positioning, marketing, and campaign strategy for
                                                            high-impact programs like EPIC Mandate.</p>
                                                        <p>As the founder of The Social Media Marketing Academy, she has
                                                            trained over 250 business owners, freelancers, and social
                                                            media professionals: helping them master content marketing,
                                                            close daily sales, and become strategic digital marketers.
                                                        </p>
                                                        <p>Her academy serves stay-at-home parents, professionals
                                                            transitioning into digital careers, and business owners
                                                            ready to expand their online influence.
                                                        </p>
                                                        <p>Over the years, she has worked with clients across fashion,
                                                            interior, coaching, and tech, crafting personalised digital
                                                            strategies that attract the right audience and generate
                                                            consistent sales.</p>
                                                        <p>A gifted public speaking coach, Precious empowers mid to
                                                            senior-level executives and business owners to confidently
                                                            own the stage: whether at board meetings, pitch events, or
                                                            keynote platforms.
                                                        </p>
                                                        <p>Her clients leave each session with clarity, confidence, and
                                                            a renewed command of their message.
                                                        </p>
                                                        <p>Precious holds a B.A. in Linguistics from Nnamdi Azikiwe
                                                            University, Awka, and is an alumna of Adullam Theological
                                                            Seminary.
                                                        </p>
                                                        <p>She is also an author, minister of the gospel, and passionate
                                                            voice of hope and transformation in every room she steps
                                                            into.
                                                        </p>
                                                        <p>She is a proud member of DSI by NaijaBrandChick, a vibrant
                                                            community of intentional entrepreneurs.
                                                        </p>
                                                        <p>When she’s not strategising for her clients or speaking to
                                                            crowds, Precious enjoys writing, trying out new delicacies,
                                                            traveling, and basking in quiet moments of reflection.
                                                        </p>
                                                        <p>If you’re ready to turn your message into momentum and your
                                                            skills into sales: Precious is your girl.
                                                        </p>
                                                        <p>Precious Ngozika Ibeazor—Boldly building brands. Confidently
                                                            equipping voices.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-fcc294d elementor-invisible"
                                            data-id="fcc294d" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:900}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-2d9cfd5 elementor-widget elementor-widget-image"
                                                    data-id="2d9cfd5" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="683"
                                                            height="1024"
                                                            src="{{ asset('uprise_city/eventspeakerimg/somto.jpg') }}"
                                                            class="attachment-large size-large wp-image-1198"
                                                            alt=""
                                                            srcset="{{ asset('uprise_city/eventspeakerimg/somto.jpg') }}"
                                                            sizes="(max-width: 683px) 100vw, 683px" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-49b2373 elementor-widget elementor-widget-icon-box"
                                                    data-id="49b2373" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">


                                                            <div class="elementor-icon-box-content">

                                                                <h4 class="elementor-icon-box-title">
                                                                    <span>
                                                                        SOMTOCHUKWU OKAFOR VINCENT
                                                                    </span>
                                                                </h4>
                                                                <h5>(Business Administrator)</h5>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6ee5861 elementor-widget elementor-widget-text-editor"
                                                    data-id="6ee5861" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Somtochukwu Okafor Vincent, ESV
                                                            Estate Surveyor & CEO, Perfect Home Services</p>
                                                        <p>Highly accomplished and visionary leader with extensive
                                                            experience in real estate, interior design, and community
                                                            development. Proven track record of excellence in
                                                            leadership, business, and faith-based service.
                                                        </p>
                                                        <h6>Expertise:
                                                        </h6>
                                                        <ul>
                                                            <li> Real Estate Development
                                                            </li>
                                                            <li>Estate Surveying and Valuation
                                                            </li>
                                                            <li>Interior Design and Decoration</li>
                                                            <li>Leadership and Management
                                                            </li>
                                                            <li>Community Development</li>
                                                            <li>Faith-Based Service</li>
                                                        </ul>
                                                        <h6>Notable Achievements:
                                                        </h6>
                                                        <ul>
                                                            <li>Founded Perfect Home Services, a multidimensional real
                                                                estate and interior design firm
                                                            </li>
                                                            <li>Trained numerous individuals in interior design through
                                                                Perfect Home School</li>
                                                            <li>Worked with prestigious clients, including notable
                                                                figures in society
                                                            </li>
                                                            <li>Recipient of numerous business, leadership, and
                                                                faith-based awards
                                                            </li>
                                                        </ul>
                                                        <h6>Education:
                                                        </h6>
                                                        <ul>
                                                            <li>Estate Management, Federal Polytechnic
                                                            </li>
                                                            <li>Estate Management, University of Nigeria, Enugu Campus
                                                            </li>
                                                            <li>Certified training course in Interior Design and
                                                                Decoration, Creative City School
                                                            </li>
                                                            <li>Certified training course in Interior Design and
                                                                Decoration, Joylene Studios</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-19f2dc8 elementor-invisible"
                                            data-id="19f2dc8" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:300}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-9e6eb8a elementor-widget elementor-widget-image"
                                                    data-id="9e6eb8a" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="595"
                                                            height="700"
                                                            src="{{ asset('uprise_city/eventspeakerimg/amara.jpg') }}"
                                                            class="attachment-full size-full wp-image-1302"
                                                            alt="Nani Lea Diamond"
                                                            srcset="{{ asset('uprise_city/eventspeakerimg/amara.jpg') }}"
                                                            sizes="(max-width: 595px) 100vw, 595px" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-fa09aef elementor-widget elementor-widget-icon-box"
                                                    data-id="fa09aef" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">


                                                            <div class="elementor-icon-box-content">

                                                                <h4 class="elementor-icon-box-title">
                                                                    <span style="text-transform: uppercase">
                                                                        Amara Molokwu </span>
                                                                </h4>
                                                                <h5>(Analyst)</h5>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-9fee4bf elementor-widget elementor-widget-text-editor"
                                                    data-id="9fee4bf" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Obianuju Amara Molokwu is a passionate woman driven by
                                                            purpose, structure, and spiritual clarity. She helps
                                                            individuals, entrepreneurs and businesses owners to simplify
                                                            their work and strengthen their systems.
                                                        </p>
                                                        <p>She holds a degree in English and Literary Studies from the
                                                            Federal University of Wukari, Taraba State.
                                                        </p>
                                                        <p>Currently, she works as a school administrator. Where she
                                                            oversee operations, manage records and help keep systems
                                                            running efficiently.</p>
                                                        <p>She teach and empower entrepreneurs, administrators and
                                                            business owners to automate repetitive tasks and build
                                                            digital systems that works for them.</p>
                                                        <p>Beyond systems, she is also passionate about women’s
                                                            development. She mentors women to grow spiritually,
                                                            emotionally and professionally.</p>
                                                        <p>She is also a minister of the gospel that speaks on faith,
                                                            identity and intentional living.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-f65953e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="f65953e" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-efd7157"
                            data-id="efd7157" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-7abb3cc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="7abb3cc" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3a15291 elementor-invisible"
                                            data-id="3a15291" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:300}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-3730ca4 elementor-widget elementor-widget-image"
                                                    data-id="3730ca4" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="595"
                                                            height="700"
                                                            src="{{ asset('uprise_city/eventspeakerimg/livinus.jpg') }}"
                                                            class="attachment-full size-full wp-image-1255"
                                                            alt="Catarina Rando"
                                                            srcset="{{ asset('uprise_city/eventspeakerimg/livinus.jpg') }}"
                                                            sizes="(max-width: 595px) 100vw, 595px" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-2e5c4c4 elementor-widget elementor-widget-icon-box"
                                                    data-id="2e5c4c4" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">


                                                            <div class="elementor-icon-box-content">

                                                                <h4 class="elementor-icon-box-title">
                                                                    <span style="text-transform: uppercase">
                                                                        Livinus Chinonso</span>
                                                                </h4>
                                                                <h5>(Director of Operations)</h5>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-8da3752 elementor-widget elementor-widget-text-editor"
                                                    data-id="8da3752" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Livinus Chinonso is an Accountant by profession, a Brand
                                                            Strategist, Business Coach and a professional Musician.

                                                        </p>
                                                        <h6>Areas of Expertise:

                                                        </h6>
                                                        <ul>
                                                            <li>Business Development </li>
                                                            <li>Branding Services</li>
                                                            <li>Music Services</li>
                                                            <li>Business Coaching</li>
                                                        </ul>
                                                        <h6>Academic Qualifications:
                                                        </h6>
                                                        <ul>
                                                            <li>HND Accounting</li>
                                                            <li>Diploma in Computer</li>
                                                        </ul>
                                                        <h6>Portfolio & Work Experience:</h6>
                                                        <ul>
                                                            <li>President, LIVIC WORLD</li>
                                                            <li>Former Business Analyst at Uprise City</li>
                                                            <li>Admin, Love Touch Assembly</li>
                                                            <li>Former Music Tutor at Jesus Kids Academy, Enugu.</li>
                                                            <li>Former Organist at Holy Spirit Chapel Enugu.</li>
                                                            <li>Former Vice President, JCCB IMT Enugu.</li>
                                                            <li>PRO - Destiny Leadership Initiative.</li>
                                                            <li>President, Uprise City, Enugu State Chapter</li>
                                                            <li>Lead Facilitator, LIVIC Business School.</li>
                                                            <li>Founder, LIVIC Foundation</li>
                                                        </ul>
                                                        <p>Coordinator, TeamLMSB</p>
                                                        <h5>(LIVIC MUSIC SCHOOL BAND)</h5>
                                                        <div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6ed652e elementor-invisible"
                                            data-id="6ed652e" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-532a7d8 elementor-widget elementor-widget-image"
                                                    data-id="532a7d8" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="595"
                                                            height="700"
                                                            src="{{ asset('uprise_city/eventspeakerimg/collins.png') }}"
                                                            class="attachment-large size-large wp-image-1346"
                                                            alt="Alycia Huston"
                                                            srcset="{{ asset('uprise_city/eventspeakerimg/collins.png') }}"
                                                            sizes="(max-width: 595px) 100vw, 595px" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-af3ec72 elementor-widget elementor-widget-icon-box"
                                                    data-id="af3ec72" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">


                                                            <div class="elementor-icon-box-content">

                                                                <h4 class="elementor-icon-box-title">
                                                                    <span style="text-transform: uppercase">
                                                                        Oguno Collins</span>
                                                                </h4>
                                                                <h5>(Developer and Programmer)</h5>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-ec12822 elementor-widget elementor-widget-text-editor"
                                                    data-id="ec12822" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>I'm Oguno Collins <a href="https://ogcollins.com"
                                                                target="_blank">(www.ogcollins.com)</a> a passionate
                                                            Software
                                                            and
                                                            Web Developer with strong
                                                            expertise in building dynamic, user-focused web
                                                            applications.
                                                        </p>

                                                        <p>My journey began at <span><a href="https://kodexafrica.com"
                                                                    target="_blank">Kodex
                                                                    Africa</a></span>, where I honed my skills in
                                                            full-stack
                                                            development — mastering
                                                            front-end technologies like HTML, CSS, Bootstrap,
                                                            JavaScript,
                                                            React and expanding into back-end
                                                            development with Laravel, Python, and lots more</p>

                                                        <p>Beyond development, I have a strong passion for teaching and
                                                            mentoring others. I started as a Web
                                                            Development Tutor at <span><a
                                                                    href="https://digitaldreamsng.com"
                                                                    target="_blank">Digital Dreams
                                                                    Limited</a></span>, where I successfully guided
                                                            aspiring
                                                            developers
                                                            through the fundamentals of modern web technologies. Today,
                                                            I
                                                            continue this journey at
                                                            Solotech.ai Limited, helping students build strong
                                                            foundations
                                                            and real-world problem-solving
                                                            skills in software development.</p>

                                                        <p>With experience spanning UI/UX design using Figma, building
                                                            responsive websites, and mentoring
                                                            future developers, I am dedicated to creating impactful
                                                            digital
                                                            solutions and empowering the
                                                            next generation of tech talent.</p>

                                                        <p>I am motivated by the challenge of turning ideas into
                                                            innovative
                                                            products, growing within the
                                                            evolving tech landscape, and making meaningful contributions
                                                            to
                                                            the global tech community.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="elementor-element elementor-element-1e4a160 e-flex e-con-boxed e-con e-parent"
                    data-id="1e4a160" data-element_type="container" id="join"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-cee6fad elementor-widget elementor-widget-heading"
                            data-id="cee6fad" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Global Wealth
                                    Conference 2025</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-972de13 elementor-align-center elementor-widget elementor-widget-button"
                            data-id="972de13" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-xl"
                                        href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Register to Join Us</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-05a2c9a elementor-widget elementor-widget-price-table"
                            data-id="05a2c9a" data-element_type="widget" data-widget_type="price-table.default">
                            <div class="elementor-widget-container">

                                <div class="elementor-price-table">


                                    <ul class="elementor-price-table__features-list">
                                        <li class="elementor-repeater-item-64a77dc">
                                            <div class="elementor-price-table__feature-inner">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                    </path>
                                                </svg> <span>
                                                    What’s Included </span>
                                            </div>
                                        </li>
                                        <li class="elementor-repeater-item-2381ad0">
                                            <div class="elementor-price-table__feature-inner">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                    </path>
                                                </svg> <span>
                                                    Access to All Sessions </span>
                                            </div>
                                        </li>
                                        <li class="elementor-repeater-item-c9fd187">
                                            <div class="elementor-price-table__feature-inner">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                    </path>
                                                </svg> <span>
                                                    Mastermind Sessions </span>
                                            </div>
                                        </li>
                                        <li class="elementor-repeater-item-4a4829d">
                                            <div class="elementor-price-table__feature-inner">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                    </path>
                                                </svg> <span>
                                                    Exhibition Hall </span>
                                            </div>
                                        </li>
                                        <li class="elementor-repeater-item-f8b7cf6">
                                            <div class="elementor-price-table__feature-inner">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                    </path>
                                                </svg> <span>
                                                    Networking </span>
                                            </div>
                                        </li>
                                        <li class="elementor-repeater-item-4a19c3a">
                                            <div class="elementor-price-table__feature-inner">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                    </path>
                                                </svg> <span>
                                                    Awards Ceremony </span>
                                            </div>
                                        </li>
                                        <li class="elementor-repeater-item-572d59b">
                                            <div class="elementor-price-table__feature-inner">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                    </path>
                                                </svg> <span>
                                                    Limitless Gifts </span>
                                            </div>
                                        </li>
                                        <li class="elementor-repeater-item-e914830">
                                            <div class="elementor-price-table__feature-inner">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                    </path>
                                                </svg> <span>
                                                    Q&A Sessions </span>
                                            </div>
                                        </li>
                                        <li class="elementor-repeater-item-bb0bf7d">
                                            <div class="elementor-price-table__feature-inner">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                    </path>
                                                </svg> <span>
                                                    Dedicated Event App </span>
                                            </div>
                                        </li>
                                        <li class="elementor-repeater-item-8a4138a">
                                            <div class="elementor-price-table__feature-inner">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                    </path>
                                                </svg> <span>
                                                    Lunches & Cocktail Reception </span>
                                            </div>
                                        </li>
                                        <li class="elementor-repeater-item-79263b0">
                                            <div class="elementor-price-table__feature-inner">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                    </path>
                                                </svg> <span>
                                                    Special Treat Wednesday Night </span>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="elementor-price-table__footer">
                                        <a class="elementor-price-table__button elementor-button elementor-size-md elementor-animation-shrink"
                                            href="" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            Register To Join Us </a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-7c040cf elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="7c040cf" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8a181fe elementor-invisible"
                            data-id="8a181fe" data-element_type="column"
                            data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:300}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-adccb6b elementor-widget elementor-widget-image"
                                    data-id="adccb6b" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="800" height="535"
                                            src="{{ asset('uprise_city/upriseimg/uprise.jpg') }}"
                                            class="attachment-large size-large wp-image-264" alt=""
                                            srcset="{{ asset('uprise_city/upriseimg/uprise.jpg') }}"
                                            sizes="(max-width: 800px) 100vw, 800px" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>







    </main>

    <div data-elementor-type="footer" data-elementor-id="40"
        class="elementor elementor-40 elementor-location-footer" data-elementor-post-type="elementor_library">
        <div class="elementor-element elementor-element-e3ef99a e-flex e-con-boxed e-con e-parent" data-id="e3ef99a"
            data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-60d0da9 elementor-widget elementor-widget-text-editor"
                    data-id="60d0da9" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>© <span id="year"></span> Uprise City. All rights reserved.</p>
                    </div>
                    <div class="footer-icon">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/share/1AbEHatmqQ/" target="_blank"><i
                                        class="ri-facebook-circle-fill"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/_uprisecity?igsh=OWZmMGdwMjU0ZHV2"
                                    target="_blank"><i class="ri-instagram-fill"></i></a>
                            </li>
                            <li>
                                <a href="https://wa.me/message/P3NAECJRAZJNA1" target="_blank"><i
                                        class="ri-whatsapp-fill"></i></a>
                            </li>
                            <li>
                                <a href="mailto:uprisecitynig@gmail.com" target="_blank"><i
                                        class="ri-mail-fill"></i></a>
                            </li>
                            <li>
                                <a href="tel:+2348085233053" target="_blank"><i class="ri-phone-fill"></i></a>
                            </li>
                        </ul>
                    </div>
                    <style>
                        .footer-icon ul {
                            display: flex;
                            flex-direction: row;
                            gap: 2rem;
                            justify-content: center;
                            align-content: center;

                        }

                        .footer-icon i {
                            font-size: 2rem;
                        }
                    </style>
                    <script>
                        document.getElementById('year').textContent = new Date().getFullYear();
                    </script>
                </div>
            </div>
        </div>
    </div>

    <script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/hello-elementor\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>

    <div class="progress-wrap btn-right-side">
        <svg class="progress-circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>


    <script type="text/javascript">
        var offset = 50;
        var duration = 500;

        jQuery(window).on('load', function() {
            jQuery(window).on('scroll', function() {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.progress-wrap').addClass('active-progress');
                } else {
                    jQuery('.progress-wrap').removeClass('active-progress');
                }
            });

            jQuery('.progress-wrap').on('click', function(e) {
                e.preventDefault();
                jQuery('html, body').animate({
                    scrollTop: 0
                }, duration);
                return false;
            })
        })
    </script>

    <script>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/offcanvas.js@ver=1.5.6') }}"
        id="rkit-offcanvas-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/navmenu.js@ver=1.5.6') }}"
        id="rkit-navmenu-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/rkit-navmenu.js@ver=1.5.6') }}"
        id="navmenu-rkit-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/social_share.js@ver=1.5.6') }}"
        id="social-share-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/running_text.js@ver=1.5.6') }}"
        id="running-text-script-js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js?ver=1.5.6" id="chartjs-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/testimonial_carousel.js@ver=1.5.6') }}"
        id="rkit-testimonial_carousel-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/tabs.js@ver=1.5.6') }}"
        id="rkit-tabs-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/progress.js@ver=1.5.6') }}"
        id="progress-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/counter.js@ver=1.5.6') }}"
        id="rkit-counter-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/countdown.js@ver=1.5.6') }}"
        id="rkit-countdown-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/image_comparison.js@ver=1.5.6') }}"
        id="rkit-image-comparison-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/image_comparison.js@ver=1.5.6') }}"
        id="rkit-image_comparison-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/image_accordion.js@ver=1.5.6') }}"
        id="rkit-image_accordion-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/image_gallery.js@ver=1.5.6') }}"
        id="rkit-image_gallery-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/masonry.pkgd.min.js@ver=1.5.6') }}"
        id="rkit-image_gallery_mansonry-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/imagesloaded.pkgd.min.js@ver=1.5.6') }}"
        id="rkit-image_gallery_mansonry_loaded-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/home_slider.js@ver=1.5.6') }}"
        id="rkit-home-slider-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/back_to_top.js@ver=1.5.6') }}"
        id="rkit-back-to-top-script-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/smooth-back-to-top-button/assets/js/smooth-back-to-top-button.js@ver=1.1.15') }}"
        id="sbttb-script-js"></script>
    <script src="{{ asset('uprise_city/wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js@ver=3.3.0') }}"
        id="hello-theme-frontend-js"></script>
    <script id="eael-general-js-extra">
        var localize = {
            "ajaxurl": "https:\/\/limitlesspeopleconference.com\/wp-admin\/admin-ajax.php",
            "nonce": "f7f09293f4",
            "i18n": {
                "added": "Added ",
                "compare": "Compare",
                "loading": "Loading..."
            },
            "eael_translate_text": {
                "required_text": "is a required field",
                "invalid_text": "Invalid",
                "billing_text": "Billing",
                "shipping_text": "Shipping",
                "fg_mfp_counter_text": "of"
            },
            "page_permalink": "https:\/\/limitlesspeopleconference.com\/",
            "cart_redirectition": "",
            "cart_page_url": "",
            "el_breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        };
    </script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min.js@ver=6.1.11') }}"
        id="eael-general-js"></script>
    <script src="{{ asset('uprise_city/wp-content/uploads/essential-addons-elementor/eael-752.js@ver=1744914120') }}"
        id="eael-752-js"></script>
    <script src="{{ asset('uprise_city/wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min.js@ver=8.4.5') }}"
        id="swiper-js"></script>
    <script src="{{ asset('uprise_city/wp-includes/js/imagesloaded.min.js@ver=5.0.0') }}" id="imagesloaded-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js@ver=3.5.0') }}"
        id="elementskit-framework-js-frontend-js"></script>
    <script id="elementskit-framework-js-frontend-js-after">
        var elementskit = {
            resturl: 'https://limitlesspeopleconference.com/wp-json/elementskit/v1/',
        }
    </script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js@ver=3.5.0') }}"
        id="ekit-widget-scripts-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js@ver=3.21.3') }}"
        id="elementor-pro-webpack-runtime-js"></script>
    <script src="{{ asset('uprise_city/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js@ver=3.28.4') }}"
        id="elementor-webpack-runtime-js"></script>
    <script src="{{ asset('uprise_city/wp-content/plugins/elementor/assets/js/frontend-modules.min.js@ver=3.28.4') }}"
        id="elementor-frontend-modules-js"></script>
    <script src="{{ asset('uprise_city/wp-includes/js/dist/hooks.min.js@ver=4d63a3d491d11ffd8ac6') }}" id="wp-hooks-js">
    </script>
    <script src="{{ asset('uprise_city/wp-includes/js/dist/i18n.min.js@ver=5e580eb46a90c2b997e6') }}" id="wp-i18n-js">
    </script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script id="elementor-pro-frontend-js-before">
        var ElementorProFrontendConfig = {
            "ajaxurl": "https:\/\/limitlesspeopleconference.com\/wp-admin\/admin-ajax.php",
            "nonce": "c8566e9536",
            "urls": {
                "assets": "https:\/\/limitlesspeopleconference.com\/wp-content\/plugins\/elementor-pro\/assets\/",
                "rest": "https:\/\/limitlesspeopleconference.com\/wp-json\/"
            },
            "shareButtonsNetworks": {
                "facebook": {
                    "title": "Facebook",
                    "has_counter": true
                },
                "twitter": {
                    "title": "Twitter"
                },
                "linkedin": {
                    "title": "LinkedIn",
                    "has_counter": true
                },
                "pinterest": {
                    "title": "Pinterest",
                    "has_counter": true
                },
                "reddit": {
                    "title": "Reddit",
                    "has_counter": true
                },
                "vk": {
                    "title": "VK",
                    "has_counter": true
                },
                "odnoklassniki": {
                    "title": "OK",
                    "has_counter": true
                },
                "tumblr": {
                    "title": "Tumblr"
                },
                "digg": {
                    "title": "Digg"
                },
                "skype": {
                    "title": "Skype"
                },
                "stumbleupon": {
                    "title": "StumbleUpon",
                    "has_counter": true
                },
                "mix": {
                    "title": "Mix"
                },
                "telegram": {
                    "title": "Telegram"
                },
                "pocket": {
                    "title": "Pocket",
                    "has_counter": true
                },
                "xing": {
                    "title": "XING",
                    "has_counter": true
                },
                "whatsapp": {
                    "title": "WhatsApp"
                },
                "email": {
                    "title": "Email"
                },
                "print": {
                    "title": "Print"
                }
            },
            "facebook_sdk": {
                "lang": "en_US",
                "app_id": ""
            },
            "lottie": {
                "defaultAnimationUrl": "https:\/\/limitlesspeopleconference.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
            }
        };
    </script>
    <script src="{{ asset('uprise_city/wp-content/plugins/elementor-pro/assets/js/frontend.min.js@ver=3.21.3') }}"
        id="elementor-pro-frontend-js"></script>
    <script src="{{ asset('uprise_city/wp-includes/js/jquery/ui/core.min.js@ver=1.13.3') }}" id="jquery-ui-core-js">
    </script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                },
                "hasCustomBreakpoints": false
            },
            "version": "3.28.4",
            "is_static": false,
            "experimentalFeatures": {
                "e_font_icon_svg": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "e_local_google_fonts": true,
                "theme_builder_v2": true,
                "hello-theme-header-footer": true,
                "nested-elements": true,
                "editor_v2": true,
                "home_screen": true,
                "form-submissions": true
            },
            "urls": {
                "assets": "https:\/\/limitlesspeopleconference.com\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/limitlesspeopleconference.com\/wp-admin\/admin-ajax.php",
                "uploadUrl": "https:\/\/limitlesspeopleconference.com\/wp-content\/uploads"
            },
            "nonces": {
                "floatingButtonsClickTracking": "485bc7ebd7"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description",
                "hello_header_logo_type": "title",
                "hello_header_menu_layout": "horizontal",
                "hello_footer_logo_type": "logo"
            },
            "post": {
                "id": 752,
                "title": "Limitless%20people%20Conference",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src="{{ asset('uprise_city/wp-content/plugins/elementor/assets/js/frontend.min.js@ver=3.28.4') }}"
        id="elementor-frontend-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js@ver=3.21.3') }}"
        id="pro-elements-handlers-js"></script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.min.js@ver=3.5.0') }}"
        id="animate-circle-js"></script>
    <script id="elementskit-elementor-js-extra">
        var ekit_config = {
            "ajaxurl": "https:\/\/limitlesspeopleconference.com\/wp-admin\/admin-ajax.php",
            "nonce": "f0999b5c97"
        };
    </script>
    <script
        src="{{ asset('uprise_city/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js@ver=3.5.0') }}"
        id="elementskit-elementor-js"></script>

</body>

</html>


<!-- Page supported by LiteSpeed Cache 7.1 on 2025-04-28 22:49:14 -->
