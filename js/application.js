function zQ(e) {
    return document.querySelector(e)
}
function zQA(e) {
    return document.querySelectorAll(e)
}
function zBindEvent(e, t, n) {
    e.addEventListener ? e.addEventListener(t, n, !1) : e.attachEvent && e.attachEvent("on" + t, function (t) {
        t.currentTarget = e, n(t)
    })
}
function zAddClass(e, t) {
    (" " + e.className + " ").indexOf(" " + t + " ") > -1 || (e.className += " " + t)
}
function zHasClass(e, t) {
    return new RegExp(" " + t + " ").test(" " + e.className + " ")
}
function zRemoveClass(e, t) {
    e.className = e.className.replace(" " + t, "").replace(t, "")
}
function zToggleClass(e, t) {
    var n = " " + e.className.replace(/[\t\r\n]/g, " ") + " ";
    if (zHasClass(e, t)) {
        for (; n.indexOf(" " + t + " ") >= 0;)n = n.replace(" " + t + " ", " ");
        e.className = n.replace(/^\s+|\s+$/g, "")
    } else e.className += " " + t
}
function getSize(e) {
    return document.documentElement[e] || document.body[e]
}
function zGetCurrentTargetElement(e) {
    return "undefined" != typeof e.currentTarget ? currentTargetElement = e.currentTarget : currentTargetElement = window.event.srcElement, currentTargetElement
}
function zIsTouchDevice() {
    var e = "ontouchstart" in window || navigator.msMaxTouchPoints > 0;
    e ? zAddClass(document.documentElement, "touch") : zAddClass(document.documentElement, "notouch")
}
function zScrollToAnimate(e, t, n, o) {
    var i = (new Date).getTime(), a = setInterval(function () {
        console.log(e);
        var r = Math.min(1, ((new Date).getTime() - i) / o);
        e.scrollTop = t + r * (n - t), 1 == r && clearInterval(a)
    }, 25)
}
function regexTestPhone(e) {
    var t = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
    return t.test(e)
}
function isScrolledIntoView(e) {
    var t = e.getBoundingClientRect().top, n = e.getBoundingClientRect().bottom;
    return isVisible = t < window.innerHeight && n >= 0
}
function scrollToAnchor(e, t, n, o, i, a) {
    e.preventDefault();
    var r = n + o.getBoundingClientRect().top - i;
    zScrollToAnimate(t, n, r, a)
}
function randomDelay() {
    return 1 * Math.random() + 0
}
function getDocumentScroll() {
    if ("CSS1Compat" !== document.compatMode)return "body";
    var e = document.documentElement, t = document.body, n = window.pageYOffset || t.scrollTop || e.scrollTop, o = n + 1;
    window.scrollTo(0, o);
    var i = e.scrollTop === o ? "html" : "body";
    return window.scrollTo(0, n), i
}
function bindNavButton() {
    zBindEvent(zQ(".js-showMobileNav"), "click", function () {
        zToggleClass(html, "show-mobileNav")
    })
}
function pinNav() {
    window.getSize("scrollTop") > aboveHeight ? zAddClass(html, "has-fixed-header") : zRemoveClass(html, "has-fixed-header")
}
function loadVideo() {
    if (zQ(".js-vidPlay")) {
        var e = document.createElement("script");
        e.src = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/froogaloop.js";
        var t = document.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(e, t), e.onload = doVid
    }
}
function doVid() {
    var e = zQ(".js-vidPlay"), t = e.getAttribute("data-vidID"), n = zQ(".fluidVidContainer"), o = zQ(".fluidVidContainer-overlay"), i = document.createElement("div"), a = '<iframe src="//player.vimeo.com/video/' + t + '?api=1" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen id="video"></iframe>';
    n.insertBefore(i, o), i.innerHTML = a;
    var r = zQ("#video"), s = $f(r);
    zBindEvent(e, "click", function () {
        var e = "video_" + t;
        window.ga && ga("send", "event", "button", "watch", e, 1), zAddClass(n, "is-playing"), s.api("play")
    })
}
function formFieldRandom() {
    var e = randomDelay(), t = "phone";
    for (.25 > e && (t = "email"), i = 0; i < zQA(".js-" + t).length; i++)zRemoveClass(zQA(".js-" + t)[i], "is-hidden");
    for (i = 0; i < zQA(".form_contact").length; i++)zQA(".form_contact")[i].setAttribute("data-formFieldDisplayedOnLoad", t)
}
function formFieldSwitcher() {
    for (i = 0; i < zQA(".js-formFieldSwitcher").length; i++)zBindEvent(zQA(".js-formFieldSwitcher")[i], "click", function (e) {
        e.preventDefault();
        var t = zGetCurrentTargetElement(e), n = t.getAttribute("data-formID");
        zToggleClass(zQ("#" + n + " .js-phone"), "is-hidden"), zToggleClass(zQ("#" + n + " .js-email"), "is-hidden")
    })
}
function xcsrfToken() {
    var e = zQ('meta[name="csrf-token"]');
    return e ? e.getAttribute("content") : ""
}
function doForm() {
    if (zQ(".js-submitContactForm"))for (i = 0; i < zQA(".js-submitContactForm").length; i++)zBindEvent(zQA(".js-submitContactForm")[i], "click", function (e) {
        e.preventDefault();
        var t = zGetCurrentTargetElement(e), n = t.innerHTML, o = t.getAttribute("data-formID"), i = zQ("#" + o), a = zQ("#" + o + "_name"), r = zQ("#" + o + "_phone"), s = zQ("#" + o + "_email"), l = i.getAttribute("data-formFieldDisplayedOnLoad");
        if (zRemoveClass(a, "is-empty"), zRemoveClass(r, "is-empty"), zRemoveClass(s, "is-empty"), zRemoveClass(t, "is-error"), "" == a.value || !regexTestPhone(r.value) && "" == s.value)zAddClass(t, "is-error"), "" == a.value && zAddClass(a, "is-empty"), regexTestPhone(r.value) || zAddClass(r, "is-empty"), "" == s.value && zAddClass(s, "is-empty"); else {
            "contactFormTop" == o && window.ga && ga("send", "event", "button", "click", "signup_page_top", 1), "contactFormBottom" == o && window.ga && ga("send", "event", "button", "click", "signup_page_bottom", 1), zAddClass(t, "is-loading"), t.setAttribute("disabled", "disabled"), t.innerHTML = n + '<i class="fa fa-spin fa-circle-o-notch"></i>';
            var c = "Name=" + encodeURIComponent(a.value) + "&Phone=" + encodeURIComponent(r.value) + "&Email=" + encodeURIComponent(s.value) + "&Field Displayed On Load=" + encodeURIComponent(l) + "&Form=" + encodeURIComponent(o), d = "/contact", u = new XMLHttpRequest;
            u.open("POST", d, !0), u.setRequestHeader("X-Requested-With", "XMLHttpRequest"), u.setRequestHeader("X-CSRF-Token", xcsrfToken()), u.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8"), u.send(c.replace(/%20/g, "+")), u.onreadystatechange = function () {
                4 == u.readyState && 200 == u.status && (zRemoveClass(t, "is-loading"), zAddClass(t, "is-success"), zAddClass(i, "is-success"), t.innerHTML = "Thanks!", a.value = "", r.value = "", s.value = "")
            }
        }
    })
}
function fadeMapIconsIn() {
    if (zQ(".map") && isScrolledIntoView(zQ(".map")))for (i = 0; i < zQA(".map .btn_map").length; i++) {
        var e = zQA(".map .btn_map")[i];
        zHasClass(e, "is-visible") || zAddClass(e, "is-visible")
    }
}
function pinScrollDownButton() {
    if (zQ(".btn_scrollDown")) {
        var e = zQ(".btn_scrollDown");
        zAddClass(e, "is-visible"), isScrolledIntoView(e) || zHasClass(e, "is-fixed") || zAddClass(e, "is-fixed")
    }
}
function unpinScrollDownButton() {
    if (zQ(".btn_scrollDown")) {
        var e = zQ(".btn_scrollDown");
        window.getSize("scrollTop") > 40 && zRemoveClass(e, "is-fixed")
    }
}
zIsTouchDevice();
var html = zQ("html"), aboveHeight = 200, phone_field = zQ(".js-phone"), email_field = zQ(".js-email"), currentPageURL = window.location.href;
window.onscroll = function () {
    pinNav(), fadeMapIconsIn(), unpinScrollDownButton()
}, window.onload = function () {
    doForm(), bindNavButton(), formFieldRandom(), formFieldSwitcher(), loadVideo(), pinScrollDownButton()
};