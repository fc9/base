var defer1 = function (n) {
    "use strict";

    function e(n, e) {
        return e = {exports: {}}, n(e, e.exports), e.exports
    }

    function o(n) {
        return n && n["default"] || n
    }

    function t(n) {
        return (t = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (n) {
            return typeof n
        } : function (n) {
            return n && "function" == typeof Symbol && n.constructor === Symbol && n !== Symbol.prototype ? "symbol" : typeof n
        })(n)
    }

    function i(n) {
        this.wrapped = n
    }

    function r(n) {
        function e(n, e) {
            return new Promise(function (t, i) {
                var c = {key: n, arg: e, resolve: t, reject: i, next: null};
                a ? a = a.next = c : (r = a = c, o(n, e))
            })
        }

        function o(e, r) {
            try {
                var a = n[e](r), c = a.value, l = c instanceof i;
                Promise.resolve(l ? c.wrapped : c).then(function (n) {
                    return l ? void o("next", n) : void t(a.done ? "return" : "normal", n)
                }, function (n) {
                    o("throw", n)
                })
            } catch (s) {
                t("throw", s)
            }
        }

        function t(n, e) {
            switch (n) {
                case"return":
                    r.resolve({value: e, done: !0});
                    break;
                case"throw":
                    r.reject(e);
                    break;
                default:
                    r.resolve({value: e, done: !1})
            }
            r = r.next, r ? o(r.key, r.arg) : a = null
        }

        var r, a;
        this._invoke = e, "function" != typeof n["return"] && (this["return"] = void 0)
    }

    function a(n, e, o, t) {
        function i(n) {
            return r[n] || n
        }

        t = t || function (n, e, o, t, i) {
            var r = e.split("\n"), a = Math.max(t - 3, 0), c = Math.min(r.length, t + 3), l = i(o),
                s = r.slice(a, c).map(function (n, e) {
                    var o = e + a + 1;
                    return (o == t ? " >> " : "    ") + o + "| " + n
                }).join("\n");
            throw n.path = l, n.message = (l || "ejs") + ":" + t + "\n" + s + "\n\n" + n.message, n
        }, e = e || function (n) {
            return void 0 == n ? "" : String(n).replace(a, i)
        };
        var r = {"&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&#34;", "'": "&#39;"}, a = /[&<>'"]/g, c = 1,
            l = '<!-- <div class="cookie-link expanding light corner-button bottom-right"> -->\n    <div class="icon link-text">\n        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n viewBox="0 0 64 77">\n            <path d="M63.6,13.1c0-1-0.7-1.9-1.8-2c-4.7-0.6-9.4-1.8-13.9-3.4c-4.5-1.7-9.6-4-15-7.1\n                c-0.7-0.4-1.3-0.4-2,0c-5.4,3.1-10.4,5.4-15,7.1C11.4,9.2,6.7,10.4,2,11c-1,0.1-1.7,1-1.8,2C-0.3,32.3,4,48,12.8,60.3\n                c4.8,6.7,10.8,12.1,18.1,16.2c0.6,0.4,1.4,0.4,2.1,0c7.2-4.2,13.2-9.6,18-16.2C59.9,48,64.1,32.3,63.6,13.1L63.6,13.1z M47.7,57.9\n                c-4.2,5.8-9.4,10.6-15.8,14.4c-6.3-3.9-11.6-8.7-15.8-14.4c-8-11.2-12-25.5-11.8-43c4.4-0.7,8.8-1.9,13.2-3.5\n                c4.4-1.6,9.2-3.8,14.4-6.6c5.2,2.8,9.9,5,14.3,6.6c4.4,1.6,8.8,2.8,13.2,3.5C59.6,32.5,55.7,46.8,47.7,57.9L47.7,57.9z M47.7,57.9\n                "/>\n            <path d="M45.9,30.9l-0.2-0.1L45,29.2l0.1-0.2c2.1-4.9,2-5,1.6-5.3l-2.9-2.8c-0.1-0.1-0.3-0.2-0.5-0.2c-0.2,0-0.6,0-4.9,1.9\n                l-0.2,0.1L36.6,22l-0.1-0.2c-2-4.9-2.2-4.9-2.7-4.9h-4c-0.5,0-0.7,0-2.6,4.9L27.2,22l-1.7,0.7l-0.2-0.1c-2.9-1.2-4.5-1.8-4.9-1.8\n                c-0.2,0-0.4,0.1-0.5,0.2L17,23.8c-0.4,0.4-0.5,0.5,1.7,5.3l0.1,0.2l-0.7,1.7L17.9,31c-5,1.9-5,2.1-5,2.6v3.9c0,0.5,0,0.7,5,2.5\n                l0.2,0.1l0.7,1.7L18.8,42c-2.1,4.9-2,5-1.6,5.3l2.9,2.8c0.1,0.1,0.3,0.2,0.5,0.2c0.2,0,0.6,0,4.9-1.9l0.2-0.1l1.7,0.7l0.1,0.2\n                c2,4.9,2.2,4.9,2.7,4.9h4c0.5,0,0.7,0,2.6-4.9l0.1-0.2l1.7-0.7l0.2,0.1c2.8,1.2,4.5,1.8,4.9,1.8c0.2,0,0.4-0.1,0.5-0.2l2.9-2.8\n                c0.4-0.4,0.5-0.5-1.7-5.3L45,41.8l0.7-1.7l0.2-0.1c5-2,5-2.1,5-2.6v-3.9C50.9,32.9,50.9,32.7,45.9,30.9L45.9,30.9z M31.9,41.9\n                c-3.6,0-6.5-2.9-6.5-6.4c0-3.5,2.9-6.4,6.5-6.4c3.6,0,6.5,2.9,6.5,6.4C38.4,39,35.5,41.9,31.9,41.9L31.9,41.9z M31.9,41.9"/>\n            </svg>\n    </div>\n    <div class="label link-text"><span id=<%= data.id %>></span></div>\n<!-- </div> -->\n',
            s = void 0;
        try {
            var d = [], u = d.push.bind(d);
            return u('<!-- <div class="cookie-link expanding light corner-button bottom-right"> -->\n    <div class="icon link-text">\n        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n viewBox="0 0 64 77">\n            <path d="M63.6,13.1c0-1-0.7-1.9-1.8-2c-4.7-0.6-9.4-1.8-13.9-3.4c-4.5-1.7-9.6-4-15-7.1\n                c-0.7-0.4-1.3-0.4-2,0c-5.4,3.1-10.4,5.4-15,7.1C11.4,9.2,6.7,10.4,2,11c-1,0.1-1.7,1-1.8,2C-0.3,32.3,4,48,12.8,60.3\n                c4.8,6.7,10.8,12.1,18.1,16.2c0.6,0.4,1.4,0.4,2.1,0c7.2-4.2,13.2-9.6,18-16.2C59.9,48,64.1,32.3,63.6,13.1L63.6,13.1z M47.7,57.9\n                c-4.2,5.8-9.4,10.6-15.8,14.4c-6.3-3.9-11.6-8.7-15.8-14.4c-8-11.2-12-25.5-11.8-43c4.4-0.7,8.8-1.9,13.2-3.5\n                c4.4-1.6,9.2-3.8,14.4-6.6c5.2,2.8,9.9,5,14.3,6.6c4.4,1.6,8.8,2.8,13.2,3.5C59.6,32.5,55.7,46.8,47.7,57.9L47.7,57.9z M47.7,57.9\n                "/>\n            <path d="M45.9,30.9l-0.2-0.1L45,29.2l0.1-0.2c2.1-4.9,2-5,1.6-5.3l-2.9-2.8c-0.1-0.1-0.3-0.2-0.5-0.2c-0.2,0-0.6,0-4.9,1.9\n                l-0.2,0.1L36.6,22l-0.1-0.2c-2-4.9-2.2-4.9-2.7-4.9h-4c-0.5,0-0.7,0-2.6,4.9L27.2,22l-1.7,0.7l-0.2-0.1c-2.9-1.2-4.5-1.8-4.9-1.8\n                c-0.2,0-0.4,0.1-0.5,0.2L17,23.8c-0.4,0.4-0.5,0.5,1.7,5.3l0.1,0.2l-0.7,1.7L17.9,31c-5,1.9-5,2.1-5,2.6v3.9c0,0.5,0,0.7,5,2.5\n                l0.2,0.1l0.7,1.7L18.8,42c-2.1,4.9-2,5-1.6,5.3l2.9,2.8c0.1,0.1,0.3,0.2,0.5,0.2c0.2,0,0.6,0,4.9-1.9l0.2-0.1l1.7,0.7l0.1,0.2\n                c2,4.9,2.2,4.9,2.7,4.9h4c0.5,0,0.7,0,2.6-4.9l0.1-0.2l1.7-0.7l0.2,0.1c2.8,1.2,4.5,1.8,4.9,1.8c0.2,0,0.4-0.1,0.5-0.2l2.9-2.8\n                c0.4-0.4,0.5-0.5-1.7-5.3L45,41.8l0.7-1.7l0.2-0.1c5-2,5-2.1,5-2.6v-3.9C50.9,32.9,50.9,32.7,45.9,30.9L45.9,30.9z M31.9,41.9\n                c-3.6,0-6.5-2.9-6.5-6.4c0-3.5,2.9-6.4,6.5-6.4c3.6,0,6.5,2.9,6.5,6.4C38.4,39,35.5,41.9,31.9,41.9L31.9,41.9z M31.9,41.9"/>\n            </svg>\n    </div>\n    <div class="label link-text"><span id='), c = 20, u(e(n.id)), u("></span></div>\n<!-- </div> -->\n"), c = 22, d.join("")
        } catch (p) {
            t(p, l, s, c, e)
        }
    }

    "undefined" != typeof globalThis ? globalThis : "undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" != typeof self ? self : {};
    "function" == typeof Symbol && Symbol.asyncIterator && (r.prototype[Symbol.asyncIterator] = function () {
        return this
    }), r.prototype.next = function (n) {
        return this._invoke("next", n)
    }, r.prototype["throw"] = function (n) {
        return this._invoke("throw", n)
    }, r.prototype["return"] = function (n) {
        return this._invoke("return", n)
    };
    var c = e(function (n) {
            var e = n.exports = {
                window: window, deepOverride: function (n, o, i) {
                    var r = {};
                    void 0 === i && (i = 1 / 0);
                    for (var a in n) if (n.hasOwnProperty(a)) {
                        var c = null !== n[a], l = "object" === t(n[a]);
                        l = l && !e.isArray(n[a]), void 0 === o ? r[a] = n[a] : i > 0 && c && l ? r[a] = e.deepOverride(n[a], o[a], i - 1) : o.hasOwnProperty(a) ? void 0 !== o[a] && (r[a] = o[a]) : r[a] = n[a]
                    }
                    return r
                }, isArray: function (n) {
                    return Array.isArray ? Array.isArray(n) : "[object Array]" === Object.prototype.toString.call(n)
                }, isEmptyObject: function (n) {
                    var e;
                    for (e in n) if (n.hasOwnProperty(e)) return !1;
                    return null !== n
                }, map: function (n, e) {
                    if (null !== n) {
                        var o = [];
                        if (Object.keys) for (var t = Object.keys(n), i = t.length, r = 0; r < i; r++) {
                            var a = t[r];
                            o.push(e(a, n[a]))
                        } else for (var c in n) n.hasOwnProperty(c) && o.push(e(c, n[c]));
                        return o
                    }
                }, filter: function (n, e) {
                    if (null !== n && this.isArray(n)) {
                        for (var o = [], t = 0; t < n.length; t++) e(n[t]) && o.push(n[t]);
                        return o
                    }
                }, nextTick: function (n) {
                    setTimeout(n, 0)
                }, appendStyles: function (n) {
                    var e = document.head || document.getElementsByTagName("head")[0], o = document.createElement("style");
                    if (o.type = "text/css", e.appendChild(o), o.styleSheet) {
                        o.styleSheet.cssText = n;
                        try {
                            o.innerHTML = n
                        } catch (t) {
                        }
                    } else o.appendChild(document.createTextNode(n))
                }, appendScript: function (n) {
                    var e = document.head || document.getElementsByTagName("head")[0], o = document.createElement("script");
                    o.type = "text/javascript", o.src = n, e.appendChild(o)
                }, ensureScript: function (n, o) {
                    var t = o.interval ? o.interval : 10, i = !1, r = !1, a = function c() {
                        for (var a = !0, l = n.split("."), s = window, d = 0; a && d < l.length; d++) a = s.hasOwnProperty ? s.hasOwnProperty(l[d]) : !!s[l[d]], s = s[l[d]];
                        a ? (i = !0, r && r.call()) : (o.url && (e.appendScript(o.url), delete o.url), setTimeout(c, t))
                    };
                    return a(), {
                        then: function (n) {
                            i ? n.call() : r = n
                        }
                    }
                }, hasClass: function (n, e) {
                    var o = " " + n.className + " ", t = " " + e + " ";
                    return o.indexOf(t) > -1
                }, toggleClass: function (n, o, t) {
                    if (n) {
                        var i = "boolean" == typeof t ? !t : e.hasClass(n, o);
                        i ? e.removeClass(n, o) : e.addClass(n, o)
                    }
                }, addClass: function (n, e) {
                    if (n) {
                        var o = n.className.split(/\s+/);
                        o.indexOf(e) === -1 && (o.splice(o.length, 0, e), n.className = o.join(" "))
                    }
                }, removeClass: function (n, e) {
                    if (n) for (var o = n.className.split(/\s+/), t = o.length; t >= 0; t--) o[t] === e && (o.splice(t, 1), n.className = o.join(" "))
                }, getCurrentDomain: function (n) {
                    var o = e.window.location.hostname, t = /([a-z]+\.[a-z]{2,4}(\.[a-z]{2,4})?)$/i, i = o.match(t);
                    return null !== i ? i[1] : n
                }, createCORSRequest: function (n, e) {
                    var o = new XMLHttpRequest;
                    return "withCredentials" in o ? o.open(n, e, !0) : "undefined" != typeof XDomainRequest ? (o = new XDomainRequest, o.open(n, e)) : o = null, o
                }, addEvent: function (n, o, t) {
                    n.attachEvent ? (n["e" + o + t] = t, n[o + t] = function () {
                        n["e" + o + t](e.window.event)
                    }, n.attachEvent("on" + o, n[o + t])) : n.addEventListener(o, t, !1)
                }, removeEvent: function (n, e, o) {
                    n.detachEvent ? (n.detachEvent("on" + e, n[e + o]), n[e + o] = null) : n.removeEventListener(e, o, !1)
                }, setCookie: function (n, e, o) {
                    n = encodeURIComponent(n), e = encodeURIComponent(e);
                    var t = n + "=" + e + ";";
                    o = o || {}, o.expires && (t = t + "expires=" + o.expires + ";"), o.path && (t = t + "path=" + o.path + ";"), o.domain && "localhost" != o.domain && (t = t + "domain=" + o.domain + ";"), o.secure && (t += "secure;"), document.cookie = t
                }, getCookie: function (n) {
                    n = encodeURIComponent(n);
                    var e = new RegExp(n + "=([^;]*)"), o = e.exec(document.cookie);
                    return !!o && decodeURIComponent(o[1])
                }, delCookie: function (n) {
                    e.setCookie(n, "", {expires: "Thu, 01 Jan 1970 00:00:01 GMT"})
                }, createElementFromHTML: function (n) {
                    var e = document.createElement("div");
                    return e.innerHTML = n.trim(), e.firstChild
                }, isDescendantOfId: function (n, e) {
                    do {
                        if (!n) return !1;
                        if (n.id === e) return !0
                    } while (n = n.parentElement);
                    return !1
                }, isDescendantOfClass: function (n, e) {
                    do {
                        if (!n) return !1;
                        if (this.hasClass(n, e)) return !0
                    } while (n = n.parentElement);
                    return !1
                }, isDescendantOfEl: function (n, e) {
                    if (!e) return !1;
                    do {
                        if (!n) return !1;
                        if (n === e) return !0
                    } while (n = n.parentElement);
                    return !1
                }, determineRenderIntoElement: function (n) {
                    var e = !1;
                    return "string" == typeof n && null !== document.getElementById(n) ? e = document.getElementById(n) : n instanceof Object && (e = n), e
                }, logError: function (n) {
                    console && console.error, void 0
                }
            }
        }),
        l = (c.window, c.deepOverride, c.isArray, c.isEmptyObject, c.map, c.filter, c.nextTick, c.appendStyles, c.appendScript, c.ensureScript, c.hasClass, c.toggleClass, c.addClass, c.removeClass, c.getCurrentDomain, c.createCORSRequest, c.addEvent, c.removeEvent, c.setCookie, c.getCookie, c.delCookie, c.createElementFromHTML, c.isDescendantOfId, c.isDescendantOfClass, c.isDescendantOfEl, c.determineRenderIntoElement, c.logError, Object.freeze({"default": a})),
        s = o(l), d = e(function (n) {
            function e() {
                var n = !1, e = "animation", o = "", t = "Webkit Moz O ms Khtml".split(" "), i = "",
                    r = document.createElement("div");
                if (void 0 !== r.style.animationName && (n = !0), n === !1) for (var a = 0; a < t.length; a++) if (void 0 !== r.style[t[a] + "AnimationName"]) {
                    i = t[a], e = i + "Animation", o = "-" + i.toLowerCase() + "-", n = !0;
                    break
                }
                return n
            }

            function o(n) {
                var e;
                return window.localStorage && (e = window.localStorage[n]), e ? JSON.parse(e) : null
            }

            function t(n) {
                var e = n.split(".").reverse();
                return e.length < 0 ? null : e.length >= 3 && e[1].match(/^(com|edu|gov|net|mil|org|nom|co|name|info|biz)$/i) ? e[2] + "." + e[1] + "." + e[0] : e[1] + "." + e[0]
            }

            function i(n, e) {
                var o = "";
                o = n, o += "?";
                for (var t in e) e.hasOwnProperty(t) && e[t] && (o += t + "=" + e[t] + "&");
                return o
            }

            function r(n, o, t) {
                switch (m = document.createElement("div"), c.addClass(m, "riotbar-cookie-policy-v2"), c.addClass(m, "cookie-link"), c.addClass(m, "hidden"), o) {
                    case"footer":
                        c.addClass(m, "footer");
                        break;
                    case"corner-right":
                        c.addClass(m, "corner-button"), c.addClass(m, "bottom-right");
                        break;
                    case"corner-left":
                    default:
                        c.addClass(m, "corner-button"), c.addClass(m, "bottom-left")
                }
                c.addClass(m, "dark"), e() ? c.addClass(m, "expanding") : c.addClass(m, "static"), m.innerHTML = t({id: n}) || "", m.onclick = function (n) {
                    n = n || window.event;
                    var e = n.target || n.srcElement;
                    "a" !== e.nodeName.toLowerCase() && window.truste && window.truste.eu && window.truste.eu.clickListener()
                }, h.appendChild(m)
            }

            function a(n) {
                var e = document.body || document.getElementsByTagName("body")[0];
                v = document.createElement("div"), v.id = g, c.addClass(v, "riotbar-cookie-policy-v2"), c.addClass(v, "cookie-banner"), c.addClass(v, "hidden"), n && c.addClass(v, n), window.RiotBar && window.RiotBar.alerts ? (window.RiotBar.alerts.showAlert(v.outerHTML, "cookie-policy-v2"), v = f("#" + g).first()) : (e.insertBefore(v, e.firstChild), v = f(v))
            }

            function l() {
                window.RiotBar && window.RiotBar.alerts && (window.RiotBar.alerts.showAlert('<span style="display:hidden"></span>', "shunt"), window.RiotBar.alerts.hideAlert("shunt"))
            }

            function d(n) {
                if (v) var e = v.height(), o = 100, t = n / 100, i = setInterval(function () {
                    v.height() != e && (l(), clearInterval(i)), t--, t <= 0 && clearInterval(i)
                }, o)
            }

            function u() {
                f(".riotbar-cookie-policy-v2.hidden").removeClass("hidden"), d(5e3), window.jQuery("#" + k.urlParams.c + ", #" + g).off()
            }

            function p(n) {
                try {
                    var e = JSON.parse(n.originalEvent.data);
                    if ("preference_manager" === e.source) switch (e.message) {
                        case"submit_preferences":
                            d(2e3)
                    }
                } catch (o) {
                }
            }

            var f, k, m, v, h = document.body || document.getElementsByTagName("body")[0], g = "consent_blackbar", y = {
                jQueryJS: "//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js",
                createDomElements: !0,
                disableDefaultStyling: !1,
                linkStyle: "corner-left",
                scriptUrl: "//consent.trustarc.com/notice",
                styles: null,
                html: s,
                urlParams: {
                    domain: t(window.location.hostname),
                    c: "teconsent",
                    js: "bb",
                    noticeType: "bb",
                    gtm: 1,
                    cdn: 1,
                    ios: 0,
                    pn: 0,
                    text: !0,
                    country: null,
                    language: null,
                    responsive: "true",
                    pcookie: 1
                }
            }, b = n.exports = {
                commonUtil: c, config: {}, init: function (n) {
                    this.config = k = c.deepOverride(y, n || {}, 1), k.styles && !k.disableDefaultStyling && c.appendStyles(k.styles), c.ensureScript("jQuery", {url: k.jQueryJS}).then(function () {
                        f = window.jQuery, f(window).on("message", p), k.createDomElements && (r(k.urlParams.c, k.linkStyle, k.html), a(k.theme)), window.jQuery("#" + k.urlParams.c + ", #" + g + ".riot-banner").on("DOMSubtreeModified propertychange", u), c.appendScript(i(k.scriptUrl, k.urlParams))
                    }), window.RiotCookieBar = {
                        hasCPA: this.hasFunctionalCookieConsent,
                        getGDPRConsent: this.getGDPRConsent,
                        hasFunctionalCookieConsent: this.hasFunctionalCookieConsent,
                        hasAdvertisingCookieConsent: this.hasAdvertisingCookieConsent,
                        hasSocialCookieConsent: this.hasSocialCookieConsent
                    }
                }, getCookieConsentLevel: function () {
                    var n, e = o("truste.eu.cookie.notice_preferences"), t = c.getCookie("notice_preferences");
                    return n = e ? Number(e.value.split(":").join("")) : t ? Number(t.split(":").join("")) : 3
                }, getGDPRConsent: function () {
                    var n;
                    try {
                        n = o("truste.eu.cookie.notice_gdpr_prefs").value
                    } catch (e) {
                        n = c.getCookie("notice_gdpr_prefs")
                    }
                    if (!n || n.indexOf(":") === -1) return null;
                    var t = n.split(":")[0].split(",").map(function (n) {
                        return parseInt(n)
                    }), i = ["essential", "functional", "analytics", "advertising"], r = {};
                    return i.forEach(function (n, e) {
                        r[n] = t.indexOf(e) !== -1
                    }), r
                }, hasGDPRConsent: function (n, e) {
                    var o = b.getGDPRConsent();
                    return o ? o[n] : b.getCookieConsentLevel() >= e
                }, hasFunctionalCookieConsent: function () {
                    return b.hasGDPRConsent("functional", 1)
                }, hasSocialCookieConsent: function () {
                    return b.hasGDPRConsent("analytics", 2)
                }, hasAdvertisingCookieConsent: function () {
                    return b.hasGDPRConsent("advertising", 3)
                }
            }
        }),
        u = (d.commonUtil, d.config, d.init, d.getCookieConsentLevel, d.getGDPRConsent, d.hasGDPRConsent, d.hasFunctionalCookieConsent, d.hasSocialCookieConsent, d.hasAdvertisingCookieConsent, '/*  styles for cookie manager plugin  */\n/* Breakpoints */\n/* Common Mixins */\n/*  styles for cookie manager plugin  */\n.riotbar-cookie-policy-v2.cookie-link {\n  /** HIDING **/\n  /** COLOURING **/\n  /** IMAGE **/\n  /** FOOTER **/\n  /** CORNER-BUTTONS **/\n}\n.riotbar-cookie-policy-v2.cookie-link * {\n  height: auto;\n  width: auto;\n  max-width: auto;\n  max-height: auto;\n  background: none;\n  margin: 0;\n  margin-left: 0;\n  margin-right: 0;\n  margin-top: 0;\n  margin-bottom: 0;\n  padding: 0;\n  padding-left: 0;\n  padding-right: 0;\n  padding-top: 0;\n  padding-bottom: 0;\n  text-indent: 0;\n}\n.riotbar-cookie-policy-v2.cookie-link *:focus {\n  outline: none;\n}\n.riotbar-cookie-policy-v2.cookie-link #consent_blackbar.hidden, .riotbar-cookie-policy-v2.cookie-link.cookie-link.hidden {\n  display: none;\n}\n.riotbar-cookie-policy-v2.cookie-link.cookie-link.dark {\n  color: #FFFFFF;\n  /* old browsers use solid colour */\n  background: #000000;\n  color: #D2CDBC;\n  background: #1c2229;\n}\n.riotbar-cookie-policy-v2.cookie-link.cookie-link.dark a {\n  color: #FFFFFF;\n  /* old browsers use solid colour */\n  color: #D2CDBC;\n}\n.riotbar-cookie-policy-v2.cookie-link.cookie-link.dark path {\n  fill: #D2CDBC;\n}\n.riotbar-cookie-policy-v2.cookie-link.cookie-link.static {\n  opacity: 0.4;\n  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=40)";\n}\n.riotbar-cookie-policy-v2.cookie-link.cookie-link {\n  cursor: pointer;\n}\n.riotbar-cookie-policy-v2.cookie-link .label {\n  /* These custom font references are actually loaded in when the `customFonts` plugin is enabled */\n  /* Main font by default */\n  font-family: "FF Mark W05";\n  text-transform: uppercase;\n  font-size: 10px;\n  word-spacing: 100%;\n}\n.riotbar-cookie-policy-v2.cookie-link .label:lang(ar) {\n  font-family: "Cairo", Tahoma, sans-serif;\n}\n.riotbar-cookie-policy-v2.cookie-link .label:lang(ru) {\n  font-family: "Neue Frutiger World W05", Tahoma, sans-serif;\n}\n.riotbar-cookie-policy-v2.cookie-link .label:lang(ko), .riotbar-cookie-policy-v2.cookie-link .label:lang(kr) {\n  font-family: "RixSGo", Tahoma, sans-serif;\n}\n.riotbar-cookie-policy-v2.cookie-link.cookie-link a, .riotbar-cookie-policy-v2.cookie-link.cookie-link a:hover {\n  text-decoration: none;\n}\n.riotbar-cookie-policy-v2.cookie-link .icon {\n  width: auto;\n}\n.riotbar-cookie-policy-v2.cookie-link .icon svg {\n  width: 16px;\n  height: 100%;\n  vertical-align: middle;\n}\n.riotbar-cookie-policy-v2.cookie-link.footer {\n  position: fixed;\n  z-index: 8055;\n  bottom: 0;\n  width: 100%;\n  text-align: center;\n  cursor: inherit;\n  margin-top: 2px;\n  padding-top: 5px;\n  padding-bottom: 2px;\n  border-top: 1px solid #785A28;\n}\n.riotbar-cookie-policy-v2.cookie-link.footer .label {\n  font-size: 14px;\n}\n.riotbar-cookie-policy-v2.cookie-link.footer .link-text {\n  display: inline-block;\n}\n.riotbar-cookie-policy-v2.cookie-link.footer svg {\n  width: 22px;\n}\n.riotbar-cookie-policy-v2.cookie-link.corner-button {\n  border: 1px solid #785A28;\n  padding: 4px;\n}\n.riotbar-cookie-policy-v2.cookie-link.cookie-link.bottom-left {\n  position: fixed;\n  border-left: 0;\n  z-index: 8055;\n  bottom: 10px;\n  left: 0;\n}\n.riotbar-cookie-policy-v2.cookie-link.cookie-link.bottom-right {\n  position: fixed;\n  border-right: 0;\n  bottom: 10px;\n  right: 0;\n}\n.riotbar-cookie-policy-v2.cookie-link.corner-button .link-text {\n  height: 22px;\n  margin: 0;\n  display: inline-block;\n  position: relative;\n  top: 0;\n  float: left;\n}\n.riotbar-cookie-policy-v2.cookie-link.corner-button .label {\n  position: relative;\n  line-height: 2.3;\n  white-space: nowrap;\n  max-width: 300px;\n  overflow: hidden;\n}\n.riotbar-cookie-policy-v2.cookie-link.cookie-link.static .label {\n  opacity: 0.4;\n  max-width: 300px;\n}\n.riotbar-cookie-policy-v2.cookie-link.corner-button .label span {\n  padding: 0 5px;\n}\n\n#truste-consent-track {\n  border-color: #F9F9F9 !important;\n}\n\n#truste-consent-button {\n  color: #F9F9F9 !important;\n}\n\n#truste-show-consent {\n  border-color: #F9F9F9 !important;\n  color: #F9F9F9 !important;\n}\n\n.truste-text {\n  color: #F9F9F9 !important;\n}'),
        p = Object.freeze({"default": u}), f = o(p), k = e(function (n) {
            var e = n.exports = {
                config: {},
                data: {},
                defaults: {settings: {urlParams: {}}},
                cookieManagerModule: d,
                commonUtil: c,
                locale: "pt_BR",
                init: function (n) {
                    e.config = n;
                    var o;
                    o = n && n.settings && !e.commonUtil.isEmptyObject(n.settings) ? n.settings : e.defaults.settings, o.styles = o.styles || f;
                    var t = e.locale.split("_");
                    o.urlParams = o.urlParams || {}, o.urlParams.language = o.urlParams.language || t[0].toLowerCase(), o.urlParams.country = o.urlParams.country || t[1].toLowerCase(), e.cookieManagerModule.init(o)
                }
            };
            void 0 !== window.RiotBar ? window.RiotBar.plugins.cookiePolicyV2Deferred = e : window.CookiePolicyV2 = e
        }), m = k.config, v = k.data, h = k.defaults, g = k.cookieManagerModule, y = k.commonUtil, b = k.locale, w = k.init;
    return n.commonUtil = y, n.config = m, n.cookieManagerModule = g, n.data = v, n["default"] = k, n.defaults = h, n.init = w, n.locale = b, n
}({});