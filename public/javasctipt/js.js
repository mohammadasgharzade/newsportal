// Copyright 2012 Google Inc. All rights reserved.
(function() {

    var data = {
        "resource": {
            "version": "1",

            "macros": [{
                "function": "__e"
            }, {
                "function": "__cid"
            }],
            "tags": [{
                "function": "__rep",
                "once_per_event": true,
                "vtp_containerId": ["macro", 1],
                "tag_id": 1
            }],
            "predicates": [{
                "function": "_eq",
                "arg0": ["macro", 0],
                "arg1": "gtm.js"
            }],
            "rules": [
                [
                    ["if", 0],
                    ["add", 0]
                ]
            ]
        },
        "runtime": []




    };
    /*

     Copyright The Closure Library Authors.
     SPDX-License-Identifier: Apache-2.0
    */
    var ba, da = "function" == typeof Object.create ? Object.create : function(a) {
            var b = function() {};
            b.prototype = a;
            return new b
        },
        ea;
    if ("function" == typeof Object.setPrototypeOf) ea = Object.setPrototypeOf;
    else {
        var ha;
        a: {
            var ia = {
                    Mf: !0
                },
                ja = {};
            try {
                ja.__proto__ = ia;
                ha = ja.Mf;
                break a
            } catch (a) {}
            ha = !1
        }
        ea = ha ? function(a, b) {
            a.__proto__ = b;
            if (a.__proto__ !== b) throw new TypeError(a + " is not extensible");
            return a
        } : null
    }
    var ka = ea,
        ma = function(a, b) {
            a.prototype = da(b.prototype);
            a.prototype.constructor = a;
            if (ka) ka(a, b);
            else
                for (var c in b)
                    if ("prototype" != c)
                        if (Object.defineProperties) {
                            var d = Object.getOwnPropertyDescriptor(b, c);
                            d && Object.defineProperty(a, c, d)
                        } else a[c] = b[c]
        },
        na = this || self,
        oa = /^[\w+/_-]+[=]{0,2}$/,
        pa = null,
        qa = function(a, b) {
            function c() {}
            c.prototype = b.prototype;
            a.prototype = new c;
            a.prototype.constructor = a
        },
        sa = function(a) {
            return a
        };
    var ua = function() {},
        va = function(a) {
            return "function" == typeof a
        },
        g = function(a) {
            return "string" == typeof a
        },
        wa = function(a) {
            return "number" == typeof a && !isNaN(a)
        },
        xa = function(a) {
            return "[object Array]" == Object.prototype.toString.call(Object(a))
        },
        ya = function(a, b) {
            if (Array.prototype.indexOf) {
                var c = a.indexOf(b);
                return "number" == typeof c ? c : -1
            }
            for (var d = 0; d < a.length; d++)
                if (a[d] === b) return d;
            return -1
        },
        za = function(a, b) {
            if (a && xa(a))
                for (var c = 0; c < a.length; c++)
                    if (a[c] && b(a[c])) return a[c]
        },
        Aa = function(a, b) {
            if (!wa(a) ||
                !wa(b) || a > b) a = 0, b = 2147483647;
            return Math.floor(Math.random() * (b - a + 1) + a)
        },
        Ca = function(a, b) {
            for (var c = new Ba, d = 0; d < a.length; d++) c.set(a[d], !0);
            for (var e = 0; e < b.length; e++)
                if (c.get(b[e])) return !0;
            return !1
        },
        Da = function(a, b) {
            for (var c in a) Object.prototype.hasOwnProperty.call(a, c) && b(c, a[c])
        },
        Ea = function(a) {
            return Math.round(Number(a)) || 0
        },
        Fa = function(a) {
            return "false" == String(a).toLowerCase() ? !1 : !!a
        },
        Ga = function(a) {
            var b = [];
            if (xa(a))
                for (var c = 0; c < a.length; c++) b.push(String(a[c]));
            return b
        },
        Ha = function(a) {
            return a ?
                a.replace(/^\s+|\s+$/g, "") : ""
        },
        Ja = function() {
            return (new Date).getTime()
        },
        Ba = function() {
            this.prefix = "gtm.";
            this.values = {}
        };
    Ba.prototype.set = function(a, b) {
        this.values[this.prefix + a] = b
    };
    Ba.prototype.get = function(a) {
        return this.values[this.prefix + a]
    };
    var Ka = function(a, b, c) {
            return a && a.hasOwnProperty(b) ? a[b] : c
        },
        La = function(a) {
            var b = !1;
            return function() {
                if (!b) try {
                    a()
                } catch (c) {}
                b = !0
            }
        },
        Ma = function(a, b) {
            for (var c in b) b.hasOwnProperty(c) && (a[c] = b[c])
        },
        Na = function(a) {
            for (var b in a)
                if (a.hasOwnProperty(b)) return !0;
            return !1
        },
        Oa = function(a, b) {
            for (var c = [], d = 0; d < a.length; d++) c.push(a[d]), c.push.apply(c, b[a[d]] || []);
            return c
        },
        Pa = function(a, b) {
            for (var c = {}, d = c, e = a.split("."), f = 0; f < e.length - 1; f++) d = d[e[f]] = {};
            d[e[e.length - 1]] = b;
            return c
        },
        Qa = function(a) {
            var b = [];
            Da(a, function(c, d) {
                10 > c.length && d && b.push(c)
            });
            return b.join(",")
        };
    /*
     jQuery v1.9.1 (c) 2005, 2012 jQuery Foundation, Inc. jquery.org/license. */
    var Ra = /\[object (Boolean|Number|String|Function|Array|Date|RegExp)\]/,
        Sa = function(a) {
            if (null == a) return String(a);
            var b = Ra.exec(Object.prototype.toString.call(Object(a)));
            return b ? b[1].toLowerCase() : "object"
        },
        Ta = function(a, b) {
            return Object.prototype.hasOwnProperty.call(Object(a), b)
        },
        Va = function(a) {
            if (!a || "object" != Sa(a) || a.nodeType || a == a.window) return !1;
            try {
                if (a.constructor && !Ta(a, "constructor") && !Ta(a.constructor.prototype, "isPrototypeOf")) return !1
            } catch (c) {
                return !1
            }
            for (var b in a);
            return void 0 ===
                b || Ta(a, b)
        },
        m = function(a, b) {
            var c = b || ("array" == Sa(a) ? [] : {}),
                d;
            for (d in a)
                if (Ta(a, d)) {
                    var e = a[d];
                    "array" == Sa(e) ? ("array" != Sa(c[d]) && (c[d] = []), c[d] = m(e, c[d])) : Va(e) ? (Va(c[d]) || (c[d] = {}), c[d] = m(e, c[d])) : c[d] = e
                }
            return c
        };
    var Wa = function(a) {
        if (void 0 == a || xa(a) || Va(a)) return !0;
        switch (typeof a) {
            case "boolean":
            case "number":
            case "string":
            case "function":
                return !0
        }
        return !1
    };
    var ub;
    var vb = [],
        wb = [],
        xb = [],
        yb = [],
        zb = [],
        Ab = {},
        Bb, Eb, Fb, Gb = function(a, b) {
            var c = a["function"];
            if (!c) throw Error("Error: No function name given for function call.");
            var d = Ab[c],
                e = {},
                f;
            for (f in a) a.hasOwnProperty(f) && 0 === f.indexOf("vtp_") && (d && b && b.ce && b.ce(a[f]), e[void 0 !== d ? f : f.substr(4)] = a[f]);
            return void 0 !== d ? d(e) : ub(c, e, b)
        },
        Ib = function(a, b, c) {
            c = c || [];
            var d = {},
                e;
            for (e in a) a.hasOwnProperty(e) && (d[e] = Hb(a[e], b, c));
            return d
        },
        Jb = function(a) {
            var b = a["function"];
            if (!b) throw "Error: No function name given for function call.";
            var c = Ab[b];
            return c ? c.priorityOverride || 0 : 0
        },
        Hb = function(a, b, c) {
            if (xa(a)) {
                var d;
                switch (a[0]) {
                    case "function_id":
                        return a[1];
                    case "list":
                        d = [];
                        for (var e = 1; e < a.length; e++) d.push(Hb(a[e], b, c));
                        return d;
                    case "macro":
                        var f = a[1];
                        if (c[f]) return;
                        var h = vb[f];
                        if (!h || b.hd(h)) return;
                        c[f] = !0;
                        try {
                            var k = Ib(h, b, c);
                            k.vtp_gtmEventId = b.id;
                            d = Gb(k, b);
                            Fb && (d = Fb.ng(d, k))
                        } catch (z) {
                            b.ze && b.ze(z, Number(f)), d = !1
                        }
                        c[f] = !1;
                        return d;
                    case "map":
                        d = {};
                        for (var l = 1; l < a.length; l += 2) d[Hb(a[l], b, c)] = Hb(a[l + 1], b, c);
                        return d;
                    case "template":
                        d = [];
                        for (var p = !1, n = 1; n < a.length; n++) {
                            var r = Hb(a[n], b, c);
                            Eb && (p = p || r === Eb.Ob);
                            d.push(r)
                        }
                        return Eb && p ? Eb.qg(d) : d.join("");
                    case "escape":
                        d = Hb(a[1], b, c);
                        if (Eb && xa(a[1]) && "macro" === a[1][0] && Eb.Sg(a)) return Eb.oh(d);
                        d = String(d);
                        for (var t = 2; t < a.length; t++) Xa[a[t]] && (d = Xa[a[t]](d));
                        return d;
                    case "tag":
                        var q = a[1];
                        if (!yb[q]) throw Error("Unable to resolve tag reference " + q + ".");
                        return d = {
                            ke: a[2],
                            index: q
                        };
                    case "zb":
                        var u = {
                            arg0: a[2],
                            arg1: a[3],
                            ignore_case: a[5]
                        };
                        u["function"] = a[1];
                        var v = Kb(u, b, c),
                            w = !!a[4];
                        return w ||
                            2 !== v ? w !== (1 === v) : null;
                    default:
                        throw Error("Attempting to expand unknown Value type: " + a[0] + ".");
                }
            }
            return a
        },
        Kb = function(a, b, c) {
            try {
                return Bb(Ib(a, b, c))
            } catch (d) {
                JSON.stringify(a)
            }
            return 2
        };
    var Lb = function() {
        var a = function(b) {
            return {
                toString: function() {
                    return b
                }
            }
        };
        return {
            bf: a("consent"),
            Id: a("convert_case_to"),
            Jd: a("convert_false_to"),
            Kd: a("convert_null_to"),
            Ld: a("convert_true_to"),
            Md: a("convert_undefined_to"),
            Lh: a("debug_mode_metadata"),
            oa: a("function"),
            kf: a("instance_name"),
            qf: a("live_only"),
            sf: a("malware_disabled"),
            tf: a("metadata"),
            Nh: a("original_vendor_template_id"),
            xf: a("once_per_event"),
            Od: a("once_per_load"),
            Sd: a("setup_tags"),
            Td: a("tag_id"),
            Ud: a("teardown_tags")
        }
    }();
    var Mb = null,
        Pb = function(a) {
            function b(r) {
                for (var t = 0; t < r.length; t++) d[r[t]] = !0
            }
            var c = [],
                d = [];
            Mb = Nb(a);
            for (var e = 0; e < wb.length; e++) {
                var f = wb[e],
                    h = Ob(f);
                if (h) {
                    for (var k = f.add || [], l = 0; l < k.length; l++) c[k[l]] = !0;
                    b(f.block || [])
                } else null === h && b(f.block || [])
            }
            for (var p = [], n = 0; n < yb.length; n++) c[n] && !d[n] && (p[n] = !0);
            return p
        },
        Ob = function(a) {
            for (var b = a["if"] || [], c = 0; c < b.length; c++) {
                var d = Mb(b[c]);
                if (0 === d) return !1;
                if (2 === d) return null
            }
            for (var e = a.unless || [], f = 0; f < e.length; f++) {
                var h = Mb(e[f]);
                if (2 === h) return null;
                if (1 === h) return !1
            }
            return !0
        },
        Nb = function(a) {
            var b = [];
            return function(c) {
                void 0 === b[c] && (b[c] = Kb(xb[c], a));
                return b[c]
            }
        };
    var Qb = {
        ng: function(a, b) {
            b[Lb.Id] && "string" === typeof a && (a = 1 == b[Lb.Id] ? a.toLowerCase() : a.toUpperCase());
            b.hasOwnProperty(Lb.Kd) && null === a && (a = b[Lb.Kd]);
            b.hasOwnProperty(Lb.Md) && void 0 === a && (a = b[Lb.Md]);
            b.hasOwnProperty(Lb.Ld) && !0 === a && (a = b[Lb.Ld]);
            b.hasOwnProperty(Lb.Jd) && !1 === a && (a = b[Lb.Jd]);
            return a
        }
    };
    /*
     Copyright (c) 2014 Derek Brans, MIT license https://github.com/krux/postscribe/blob/master/LICENSE. Portions derived from simplehtmlparser, which is licensed under the Apache License, Version 2.0 */
    var D = {
        Ya: "_ee",
        Sc: "_syn",
        Qh: "_uei",
        Oh: "_pci",
        Bc: "event_callback",
        Nb: "event_timeout",
        ja: "gtag.config"
    };
    D.fa = "allow_ad_personalization_signals";
    D.Qc = "restricted_data_processing";
    D.fb = "allow_google_signals";
    D.ba = "cookie_expires";
    D.yc = "cookie_update";
    D.vb = "session_duration";
    D.la = "user_properties";
    D.Fa = "transport_url";
    D.N = "ads_data_redaction";
    D.o = "ad_storage";
    D.K = "analytics_storage";
    D.af = "region";
    D.cf = "wait_for_update";
    D.Ec = "page_view", D.lf = "user_engagement", D.Aa = "purchase", D.kc = "refund", D.eb = "begin_checkout", D.fc = "add_to_cart", D.jc = "remove_from_cart", D.ef = "view_cart", D.Yd = "add_to_wishlist", D.Oa = "view_item", D.jf = "view_promotion", D.hf = "select_promotion", D.ff = "select_item", D.Dc = "view_item_list", D.Xd = "add_payment_info", D.df = "add_shipping_info", D.nf = "allow_custom_scripts", D.pf = "allow_display_features", D.Gc = "allow_enhanced_conversions", D.Be = "enhanced_conversions", D.wc = "client_id", D.Y = "cookie_domain", D.xc = "cookie_name",
        D.Pa = "cookie_path", D.ia = "cookie_flags", D.qa = "currency", D.ue = "custom_map", D.Mc = "groups", D.Qa = "language", D.uf = "country", D.ai = "non_interaction", D.rb = "page_location", D.tb = "page_referrer", D.Oc = "page_title", D.ub = "send_page_view", D.Ea = "send_to", D.Tc = "session_engaged", D.Lb = "session_id", D.Uc = "session_number", D.Lg = "tracking_id", D.ka = "linker", D.yb = "url_passthrough", D.lb = "accept_incoming", D.D = "domains", D.nb = "url_position", D.mb = "decorate_forms", D.Ke = "phone_conversion_number", D.Fe = "phone_conversion_callback", D.Je =
        "phone_conversion_css_class", D.Me = "phone_conversion_options", D.Ze = "phone_conversion_ids", D.Lf = "phone_conversion_country_code", D.Gd = "aw_remarketing", D.Zd = "aw_remarketing_only", D.vc = "gclid", D.ra = "value", D.Nf = "quantity", D.zf = "affiliation", D.Ae = "tax", D.Df = "shipping", D.Ic = "list_name", D.ye = "checkout_step", D.we = "checkout_option", D.Af = "coupon", D.Bf = "promotions", D.wb = "transaction_id", D.zb = "user_id", D.ag = "retoken", D.hb = "conversion_linker", D.gb = "conversion_cookie_prefix", D.ca = "cookie_prefix", D.X = "items", D.qe =
        "aw_merchant_id", D.ie = "aw_feed_country", D.je = "aw_feed_language", D.be = "discount", D.ve = "disable_merchant_reported_purchases", D.Ce = "new_customer", D.se = "customer_lifetime_value", D.yf = "dc_natural_search", D.vf = "dc_custom_params", D.Wg = "trip_type", D.Kf = "passengers", D.If = "method", D.zg = "search_term", D.rf = "content_type", D.Jf = "optimize_id", D.Ef = "experiments", D.kb = "google_signals", D.Lc = "google_tld", D.Mb = "update", D.Kc = "firebase_id", D.zc = "ga_restrict_domain", D.Jc = "event_settings", D.Hc = "dynamic_event_settings", D.lg =
        "screen_name", D.Hf = "_x_19", D.Gf = "_x_20", D.Nc = "internal_traffic_results", D.Mg = "traffic_type", D.dh = [D.fa, D.fb, D.X, D.Qc, D.Y, D.ba, D.ia, D.xc, D.Pa, D.ca, D.yc, D.ue, D.Hc, D.Bc, D.Jc, D.Nb, D.zc, D.kb, D.Lc, D.Mc, D.Nc, D.ka, D.Ea, D.ub, D.vb, D.Mb, D.la, D.Fa, D.Gc], D.Re = [D.rb, D.tb, D.Oc, D.Qa, D.lg, D.zb, D.Kc], D.gh = [D.Aa, D.kc, D.eb, D.fc, D.jc, D.ef, D.Yd, D.Oa, D.jf, D.hf, D.Dc, D.ff, D.Xd, D.df], D.Wd = [D.Ea, D.Gd, D.Zd, D.ub, D.Qa, D.ra, D.qa, D.wb, D.zb, D.hb, D.gb, D.ca, D.Y, D.ba, D.ia, D.rb, D.tb, D.Ke, D.Fe, D.Je, D.Me, D.X, D.qe, D.ie, D.je, D.be, D.ve, D.Ce,
            D.se, D.fa, D.Qc, D.Mb, D.Kc, D.Be, D.Fa, D.yb, D.Gc
        ];
    D.Te = [D.fa, D.fb, D.yc];
    D.Ue = [D.ba, D.Nb, D.vb];
    var pc = {},
        qc = function(a, b) {
            pc[a] = pc[a] || [];
            pc[a][b] = !0
        },
        rc = function(a) {
            for (var b = [], c = pc[a] || [], d = 0; d < c.length; d++) c[d] && (b[Math.floor(d / 6)] ^= 1 << d % 6);
            for (var e = 0; e < b.length; e++) b[e] = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_".charAt(b[e] || 0);
            return b.join("")
        };
    var E = function(a) {
        qc("GTM", a)
    };
    var sc = function(a) {
        if (Error.captureStackTrace) Error.captureStackTrace(this, sc);
        else {
            var b = Error().stack;
            b && (this.stack = b)
        }
        a && (this.message = String(a))
    };
    qa(sc, Error);
    sc.prototype.name = "CustomError";
    var tc = function(a, b) {
        for (var c = a.split("%s"), d = "", e = c.length - 1, f = 0; f < e; f++) d += c[f] + (f < b.length ? b[f] : "%s");
        sc.call(this, d + c[e])
    };
    qa(tc, sc);
    tc.prototype.name = "AssertionError";
    var uc = function(a, b) {
        throw new tc("Failure" + (a ? ": " + a : ""), Array.prototype.slice.call(arguments, 1));
    };
    var vc = function(a, b) {
        var c = function() {};
        c.prototype = a.prototype;
        var d = new c;
        a.apply(d, Array.prototype.slice.call(arguments, 1));
        return d
    };
    var wc;
    var xc = /^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i;
    var yc;
    a: {
        var zc = na.navigator;
        if (zc) {
            var Ac = zc.userAgent;
            if (Ac) {
                yc = Ac;
                break a
            }
        }
        yc = ""
    }
    var Bc = function(a) {
        return -1 != yc.indexOf(a)
    };
    var Dc = function(a, b, c) {
        this.h = c === Cc ? a : ""
    };
    Dc.prototype.toString = function() {
        return "SafeHtml{" + this.h + "}"
    };
    var Ec = function(a) {
            if (a instanceof Dc && a.constructor === Dc) return a.h;
            var b = typeof a;
            uc("expected object of type SafeHtml, got '" + a + "' of type " + ("object" != b ? b : a ? Array.isArray(a) ? "array" : b : "null"));
            return "type_error:SafeHtml"
        },
        Cc = {},
        Fc = new Dc(na.trustedTypes && na.trustedTypes.emptyHTML || "", 0, Cc);
    var Gc = {
            MATH: !0,
            SCRIPT: !0,
            STYLE: !0,
            SVG: !0,
            TEMPLATE: !0
        },
        Hc = function(a) {
            var b = !1,
                c;
            return function() {
                b || (c = a(), b = !0);
                return c
            }
        }(function() {
            if ("undefined" === typeof document) return !1;
            var a = document.createElement("div"),
                b = document.createElement("div");
            b.appendChild(document.createElement("div"));
            a.appendChild(b);
            if (!a.firstChild) return !1;
            var c = a.firstChild.firstChild;
            a.innerHTML = Ec(Fc);
            return !c.parentElement
        }),
        Jc = function(a, b) {
            if (a.tagName && Gc[a.tagName.toUpperCase()]) throw Error("goog.dom.safe.setInnerHtml cannot be used to set content of " +
                a.tagName + ".");
            if (Hc())
                for (; a.lastChild;) a.removeChild(a.lastChild);
            a.innerHTML = Ec(b)
        };
    var Kc = function(a) {
        var b;
        if (void 0 === wc) {
            var c = null,
                d = na.trustedTypes;
            if (d && d.createPolicy) {
                try {
                    c = d.createPolicy("goog#html", {
                        createHTML: sa,
                        createScript: sa,
                        createScriptURL: sa
                    })
                } catch (f) {
                    na.console && na.console.error(f.message)
                }
                wc = c
            } else wc = c
        }
        var e = (b = wc) ? b.createHTML(a) : a;
        return new Dc(e, null, Cc)
    };
    var F = window,
        H = document,
        Lc = navigator,
        Mc = H.currentScript && H.currentScript.src,
        Nc = function(a, b) {
            var c = F[a];
            F[a] = void 0 === c ? b : c;
            return F[a]
        },
        Oc = function(a, b) {
            b && (a.addEventListener ? a.onload = b : a.onreadystatechange = function() {
                a.readyState in {
                    loaded: 1,
                    complete: 1
                } && (a.onreadystatechange = null, b())
            })
        },
        Pc = function(a, b, c) {
            var d = H.createElement("script");
            d.type = "text/javascript";
            d.async = !0;
            d.src = a;
            Oc(d, b);
            c && (d.onerror = c);
            var e;
            if (null === pa) b: {
                var f = na.document,
                    h = f.querySelector && f.querySelector("script[nonce]");
                if (h) {
                    var k = h.nonce || h.getAttribute("nonce");
                    if (k && oa.test(k)) {
                        pa = k;
                        break b
                    }
                }
                pa = ""
            }
            e = pa;
            e && d.setAttribute("nonce", e);
            var l = H.getElementsByTagName("script")[0] || H.body || H.head;
            l.parentNode.insertBefore(d, l);
            return d
        },
        Qc = function() {
            if (Mc) {
                var a = Mc.toLowerCase();
                if (0 === a.indexOf("https://")) return 2;
                if (0 === a.indexOf("http://")) return 3
            }
            return 1
        },
        Rc = function(a, b) {
            var c = H.createElement("iframe");
            c.height = "0";
            c.width = "0";
            c.style.display = "none";
            c.style.visibility = "hidden";
            var d = H.body && H.body.lastChild ||
                H.body || H.head;
            d.parentNode.insertBefore(c, d);
            Oc(c, b);
            void 0 !== a && (c.src = a);
            return c
        },
        Sc = function(a, b, c) {
            var d = new Image(1, 1);
            d.onload = function() {
                d.onload = null;
                b && b()
            };
            d.onerror = function() {
                d.onerror = null;
                c && c()
            };
            d.src = a;
            return d
        },
        Tc = function(a, b, c, d) {
            a.addEventListener ? a.addEventListener(b, c, !!d) : a.attachEvent && a.attachEvent("on" + b, c)
        },
        Uc = function(a, b, c) {
            a.removeEventListener ? a.removeEventListener(b, c, !1) : a.detachEvent && a.detachEvent("on" + b, c)
        },
        I = function(a) {
            F.setTimeout(a, 0)
        },
        Vc = function(a, b) {
            return a &&
                b && a.attributes && a.attributes[b] ? a.attributes[b].value : null
        },
        Wc = function(a) {
            var b = a.innerText || a.textContent || "";
            b && " " != b && (b = b.replace(/^[\s\xa0]+|[\s\xa0]+$/g, ""));
            b && (b = b.replace(/(\xa0+|\s{2,}|\n|\r\t)/g, " "));
            return b
        },
        Xc = function(a) {
            var b = H.createElement("div");
            Jc(b, Kc("A<div>" + a + "</div>"));
            b = b.lastChild;
            for (var c = []; b.firstChild;) c.push(b.removeChild(b.firstChild));
            return c
        },
        Yc = function(a, b, c) {
            c = c || 100;
            for (var d = {}, e = 0; e < b.length; e++) d[b[e]] = !0;
            for (var f = a, h = 0; f && h <= c; h++) {
                if (d[String(f.tagName).toLowerCase()]) return f;
                f = f.parentElement
            }
            return null
        },
        Zc = function(a) {
            Lc.sendBeacon && Lc.sendBeacon(a) || Sc(a)
        },
        $c = function(a, b) {
            var c = a[b];
            c && "string" === typeof c.animVal && (c = c.animVal);
            return c
        };
    var ad = {},
        bd = function(a) {
            return void 0 == ad[a] ? !1 : ad[a]
        };
    var cd = [];

    function dd() {
        var a = Nc("google_tag_data", {});
        a.ics || (a.ics = {
            entries: {},
            set: ed,
            update: fd,
            addListener: gd,
            notifyListeners: hd,
            active: !1
        });
        return a.ics
    }

    function ed(a, b, c, d, e, f) {
        var h = dd();
        h.active = !0;
        if (void 0 != b) {
            var k = h.entries,
                l = k[a] || {},
                p = l.region,
                n = c && g(c) ? c.toUpperCase() : void 0;
            d = d.toUpperCase();
            e = e.toUpperCase();
            if (n === e || (n === d ? p !== e : !n && !p)) {
                var r = !!(f && 0 < f && void 0 === l.update),
                    t = {
                        region: n,
                        initial: "granted" === b,
                        update: l.update,
                        quiet: r
                    };
                k[a] = t;
                r && F.setTimeout(function() {
                    k[a] === t && t.quiet && (t.quiet = !1, id(a), hd(), qc("TAGGING", 2))
                }, f)
            }
        }
    }

    function fd(a, b) {
        var c = dd();
        c.active = !0;
        if (void 0 != b) {
            var d = jd(a),
                e = c.entries,
                f = e[a] = e[a] || {};
            f.update = "granted" === b;
            var h = jd(a);
            f.quiet ? (f.quiet = !1, id(a)) : h !== d && id(a)
        }
    }

    function gd(a, b) {
        cd.push({
            ee: a,
            Bg: b
        })
    }

    function id(a) {
        for (var b = 0; b < cd.length; ++b) {
            var c = cd[b];
            xa(c.ee) && -1 !== c.ee.indexOf(a) && (c.He = !0)
        }
    }

    function hd(a) {
        for (var b = 0; b < cd.length; ++b) {
            var c = cd[b];
            if (c.He) {
                c.He = !1;
                try {
                    c.Bg({
                        de: a
                    })
                } catch (d) {}
            }
        }
    }
    var jd = function(a) {
            var b = dd().entries[a] || {};
            return void 0 !== b.update ? b.update : void 0 !== b.initial ? b.initial : void 0
        },
        kd = function(a) {
            return !(dd().entries[a] || {}).quiet
        },
        ld = function() {
            return bd("gtag_cs_api") ? dd().active : !1
        },
        md = function(a, b) {
            dd().addListener(a, b)
        },
        nd = function(a, b) {
            function c() {
                for (var e = 0; e < b.length; e++)
                    if (!kd(b[e])) return !0;
                return !1
            }
            if (c()) {
                var d = !1;
                md(b, function(e) {
                    d || c() || (d = !0, a(e))
                })
            } else a({})
        },
        od = function(a, b) {
            if (!1 === jd(b)) {
                var c = !1;
                md([b], function(d) {
                    !c && jd(b) && (a(d), c = !0)
                })
            }
        };
    var pd = [D.o, D.K],
        qd = function(a) {
            var b = a[D.af];
            b && E(40);
            var c = a[D.cf];
            c && E(41);
            for (var d = xa(b) ? b : [b], e = 0; e < d.length; ++e)
                for (var f = 0; f < pd.length; f++) {
                    var h = pd[f],
                        k = a[pd[f]],
                        l = d[e];
                    dd().set(h, k, l, "IR", "IR-07", c)
                }
        },
        rd = function(a, b) {
            for (var c = 0; c < pd.length; c++) {
                var d = pd[c],
                    e = a[pd[c]];
                dd().update(d, e)
            }
            dd().notifyListeners(b)
        },
        sd = function(a) {
            var b = jd(a);
            return void 0 != b ? b : !0
        },
        td = function() {
            for (var a = [], b = 0; b < pd.length; b++) {
                var c = jd(pd[b]);
                a[b] = !0 === c ? "1" : !1 === c ? "0" : "-"
            }
            return "G1" +
                a.join("")
        },
        ud = function(a, b) {
            nd(a, b)
        };
    var wd = function(a) {
            return vd ? H.querySelectorAll(a) : null
        },
        xd = function(a, b) {
            if (!vd) return null;
            if (Element.prototype.closest) try {
                return a.closest(b)
            } catch (e) {
                return null
            }
            var c = Element.prototype.matches || Element.prototype.webkitMatchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.msMatchesSelector || Element.prototype.oMatchesSelector,
                d = a;
            if (!H.documentElement.contains(d)) return null;
            do {
                try {
                    if (c.call(d, b)) return d
                } catch (e) {
                    break
                }
                d = d.parentElement || d.parentNode
            } while (null !== d && 1 === d.nodeType);
            return null
        },
        yd = !1;
    if (H.querySelectorAll) try {
        var Bd = H.querySelectorAll(":root");
        Bd && 1 == Bd.length && Bd[0] == H.documentElement && (yd = !0)
    } catch (a) {}
    var vd = yd;
    var Pd = {},
        L = null,
        Qd = Math.random();
    Pd.B = "UA-131012460-1";
    Pd.Sb = "990";
    Pd.Mh = "";
    var Rd = {
            __cl: !0,
            __ecl: !0,
            __ehl: !0,
            __evl: !0,
            __fal: !0,
            __fil: !0,
            __fsl: !0,
            __hl: !0,
            __jel: !0,
            __lcl: !0,
            __sdl: !0,
            __tl: !0,
            __ytl: !0
        },
        Sd = {
            __paused: !0,
            __tg: !0
        },
        Td;
    for (Td in Rd) Rd.hasOwnProperty(Td) && (Sd[Td] = !0);
    var Ud = "www.googletagmanager.com/gtm.js";
    Ud = "www.googletagmanager.com/gtag/js";
    var Vd = Ud,
        Wd = null,
        Xd = null,
        Yd = "//www.googletagmanager.com/a?id=" + Pd.B + "&cv=1",
        Zd = {},
        $d = {},
        ae = function() {
            var a = L.sequence || 1;
            L.sequence = a + 1;
            return a
        };
    var be = function() {
            return "&tc=" + yb.filter(function(a) {
                return a
            }).length
        },
        ee = function() {
            2022 <= ce().length && de()
        },
        ge = function() {
            fe || (fe = F.setTimeout(de, 500))
        },
        de = function() {
            fe && (F.clearTimeout(fe), fe = void 0);
            void 0 === he || ie[he] && !je && !ke || (le[he] || me.Ug() || 0 >= ne-- ? (E(1), le[he] = !0) : (me.vh(), Sc(ce()), ie[he] = !0, oe = pe = qe = ke = je = ""))
        },
        ce = function() {
            var a = he;
            if (void 0 === a) return "";
            var b = rc("GTM"),
                c = rc("TAGGING");
            return [re, ie[a] ? "" : "&es=1", se[a], b ? "&u=" + b : "", c ? "&ut=" + c : "", be(), je, ke, qe ? qe : "", pe, oe, "&z=0"].join("")
        },
        te = function() {
            return [Yd, "&v=3&t=t", "&pid=" + Aa(), "&rv=" + Pd.Sb].join("")
        },
        ue = "0.005000" > Math.random(),
        re = te(),
        ve = function() {
            re = te()
        },
        ie = {},
        je = "",
        ke = "",
        oe = "",
        pe = "",
        qe = "",
        he = void 0,
        se = {},
        le = {},
        fe = void 0,
        me = function(a, b) {
            var c = 0,
                d = 0;
            return {
                Ug: function() {
                    if (c < a) return !1;
                    Ja() - d >= b && (c = 0);
                    return c >= a
                },
                vh: function() {
                    Ja() - d >= b && (c = 0);
                    c++;
                    d = Ja()
                }
            }
        }(2, 1E3),
        ne = 1E3,
        we = function(a, b) {
            if (ue && !le[a] && he !== a) {
                de();
                he = a;
                oe = je = "";
                var c;
                c = 0 === b.indexOf("gtm.") ? encodeURIComponent(b) : "*";
                se[a] = "&e=" + c + "&eid=" +
                    a;
                ge()
            }
        },
        xe = function(a, b, c) {
            if (ue && !le[a] && b) {
                a !== he && (de(), he = a);
                var d, e = String(b[Lb.oa] || "").replace(/_/g, "");
                0 === e.indexOf("cvt") && (e = "cvt");
                d = e;
                var f = c + d;
                je = je ? je + "." + f : "&tr=" + f;
                var h = b["function"];
                if (!h) throw Error("Error: No function name given for function call.");
                var k = (Ab[h] ? "1" : "2") + d;
                oe = oe ? oe + "." + k : "&ti=" + k;
                ge();
                ee()
            }
        },
        ye = function(a, b, c) {
            if (ue && !le[a]) {
                a !== he && (de(), he =
                    a);
                var d = c + b;
                ke = ke ? ke + "." + d : "&epr=" + d;
                ge();
                ee()
            }
        },
        ze = function(a, b, c) {
            if (ue && !le[a]) {
                a !== he && (de(), he = a);
                var d = {
                        aev: "1",
                        c: "2",
                        jsm: "3",
                        v: "4",
                        j: "5",
                        smm: "6",
                        rmm: "7",
                        input: "8"
                    }[b] || "0",
                    e;
                e = c instanceof F.Element ? "1" : c instanceof F.Event ? "2" : c instanceof F.RegExp ? "3" : c === F ? "4" : c === H ? "5" : c instanceof F.Promise ? "6" : c instanceof F.Storage ? "7" : c instanceof F.Date ? "8" : c instanceof F.History ? "9" : c instanceof F.Performance ? "a" : c instanceof F.Crypto ? "b" : c instanceof F.Location ? "c" : c instanceof F.Navigator ? "d" :
                    "object" !== typeof c || Va(c) ? "0" : "e";
                qe = qe ? qe + "." + d + e : "&pcr=" + d + e;
                ge();
                ee()
            }
        };
    var Ae = {},
        Be = new Ba,
        Ce = {},
        De = {},
        Ge = {
            name: "dataLayer",
            set: function(a, b) {
                m(Pa(a, b), Ce);
                Ee()
            },
            get: function(a) {
                return Fe(a, 2)
            },
            reset: function() {
                Be = new Ba;
                Ce = {};
                Ee()
            }
        },
        Fe = function(a, b) {
            if (2 != b) {
                var c = Be.get(a);
                ue && c !== He(a.split(".")) && E(5);
                return c
            }
            return He(a.split("."))
        },
        He = function(a) {
            for (var b = Ce, c = 0; c < a.length; c++) {
                if (null === b) return !1;
                if (void 0 === b) break;
                b = b[a[c]]
            }
            return b
        },
        Ie = function(a, b) {
            De.hasOwnProperty(a) || (Be.set(a, b), m(Pa(a, b), Ce), Ee())
        },
        Ee = function(a) {
            Da(De, function(b, c) {
                Be.set(b, c);
                m(Pa(b, void 0), Ce);
                m(Pa(b, c), Ce);
                a && delete De[b]
            })
        },
        Je = function(a, b, c) {
            Ae[a] = Ae[a] || {};
            var d = 1 !== c ? He(b.split(".")) : Be.get(b);
            "array" === Sa(d) || "object" === Sa(d) ? Ae[a][b] = m(d) : Ae[a][b] = d
        },
        Ke = function(a, b) {
            if (Ae[a]) return Ae[a][b]
        },
        Le = function(a, b) {
            Ae[a] && delete Ae[a][b]
        };
    var Oe = /:[0-9]+$/,
        Pe = function(a, b, c) {
            for (var d = a.split("&"), e = 0; e < d.length; e++) {
                var f = d[e].split("=");
                if (decodeURIComponent(f[0]).replace(/\+/g, " ") === b) {
                    var h = f.slice(1).join("=");
                    return c ? h : decodeURIComponent(h).replace(/\+/g, " ")
                }
            }
        },
        Se = function(a, b, c, d, e) {
            b && (b = String(b).toLowerCase());
            if ("protocol" === b || "port" === b) a.protocol = Qe(a.protocol) || Qe(F.location.protocol);
            "port" === b ? a.port = String(Number(a.hostname ? a.port : F.location.port) || ("http" == a.protocol ? 80 : "https" == a.protocol ? 443 : "")) : "host" === b &&
                (a.hostname = (a.hostname || F.location.hostname).replace(Oe, "").toLowerCase());
            return Re(a, b, c, d, e)
        },
        Re = function(a, b, c, d, e) {
            var f, h = Qe(a.protocol);
            b && (b = String(b).toLowerCase());
            switch (b) {
                case "url_no_fragment":
                    f = Te(a);
                    break;
                case "protocol":
                    f = h;
                    break;
                case "host":
                    f = a.hostname.replace(Oe, "").toLowerCase();
                    if (c) {
                        var k = /^www\d*\./.exec(f);
                        k && k[0] && (f = f.substr(k[0].length))
                    }
                    break;
                case "port":
                    f = String(Number(a.port) || ("http" == h ? 80 : "https" == h ? 443 : ""));
                    break;
                case "path":
                    a.pathname || a.hostname || qc("TAGGING",
                        1);
                    f = "/" == a.pathname.substr(0, 1) ? a.pathname : "/" + a.pathname;
                    var l = f.split("/");
                    0 <= ya(d || [], l[l.length - 1]) && (l[l.length - 1] = "");
                    f = l.join("/");
                    break;
                case "query":
                    f = a.search.replace("?", "");
                    e && (f = Pe(f, e, void 0));
                    break;
                case "extension":
                    var p = a.pathname.split(".");
                    f = 1 < p.length ? p[p.length - 1] : "";
                    f = f.split("/")[0];
                    break;
                case "fragment":
                    f = a.hash.replace("#", "");
                    break;
                default:
                    f = a && a.href
            }
            return f
        },
        Qe = function(a) {
            return a ? a.replace(":", "").toLowerCase() : ""
        },
        Te = function(a) {
            var b = "";
            if (a && a.href) {
                var c = a.href.indexOf("#");
                b = 0 > c ? a.href : a.href.substr(0, c)
            }
            return b
        },
        Ue = function(a) {
            var b = H.createElement("a");
            a && (b.href = a);
            var c = b.pathname;
            "/" !== c[0] && (a || qc("TAGGING", 1), c = "/" + c);
            var d = b.hostname.replace(Oe, "");
            return {
                href: b.href,
                protocol: b.protocol,
                host: b.host,
                hostname: d,
                pathname: c,
                search: b.search,
                hash: b.hash,
                port: b.port
            }
        },
        Ve = function(a) {
            function b(p) {
                var n = p.split("=")[0];
                return 0 > d.indexOf(n) ? p : n + "=0"
            }

            function c(p) {
                return p.split("&").map(b).filter(function(n) {
                    return void 0 != n
                }).join("&")
            }
            var d = "gclid dclid gclaw gcldc gclgp gclha gclgf _gl".split(" "),
                e = Ue(a),
                f = a.split(/[?#]/)[0],
                h = e.search,
                k = e.hash;
            "?" === h[0] && (h = h.substring(1));
            "#" === k[0] && (k = k.substring(1));
            h = c(h);
            k = c(k);
            "" !== h && (h = "?" + h);
            "" !== k && (k = "#" + k);
            var l = "" + f + h + k;
            "/" === l[l.length - 1] && (l = l.substring(0, l.length - 1));
            return l
        };

    function We(a, b, c) {
        for (var d = [], e = b.split(";"), f = 0; f < e.length; f++) {
            var h = e[f].split("="),
                k = h[0].replace(/^\s*|\s*$/g, "");
            if (k && k == a) {
                var l = h.slice(1).join("=").replace(/^\s*|\s*$/g, "");
                l && c && (l = decodeURIComponent(l));
                d.push(l)
            }
        }
        return d
    };
    var Ye = function(a, b, c, d) {
            return Xe(d) ? We(a, String(b || document.cookie), c) : []
        },
        af = function(a, b, c, d, e) {
            if (Xe(e)) {
                var f = Ze(a, d, e);
                if (1 === f.length) return f[0].id;
                if (0 !== f.length) {
                    f = $e(f, function(h) {
                        return h.Xb
                    }, b);
                    if (1 === f.length) return f[0].id;
                    f = $e(f, function(h) {
                        return h.Ab
                    }, c);
                    return f[0] ? f[0].id : void 0
                }
            }
        };

    function bf(a, b, c, d) {
        var e = document.cookie;
        document.cookie = a;
        var f = document.cookie;
        return e != f || void 0 != c && 0 <= Ye(b, f, !1, d).indexOf(c)
    }
    var ff = function(a, b, c) {
            function d(q, u, v) {
                if (null == v) return delete h[u], q;
                h[u] = v;
                return q + "; " + u + "=" + v
            }

            function e(q, u) {
                if (null == u) return delete h[u], q;
                h[u] = !0;
                return q + "; " + u
            }
            if (!Xe(c.Ha)) return 2;
            var f;
            void 0 == b ? f = a + "=deleted; expires=" + (new Date(0)).toUTCString() : (c.encode && (b = encodeURIComponent(b)), b = cf(b), f = a + "=" + b);
            var h = {};
            f = d(f, "path", c.path);
            var k;
            c.expires instanceof Date ? k = c.expires.toUTCString() : null != c.expires && (k = "" + c.expires);
            f = d(f, "expires", k);
            f = d(f, "max-age", c.Zh);
            f = d(f, "samesite",
                c.ei);
            c.fi && (f = e(f, "secure"));
            var l = c.domain;
            if ("auto" === l) {
                for (var p = df(), n = 0; n < p.length; ++n) {
                    var r = "none" !== p[n] ? p[n] : void 0,
                        t = d(f, "domain", r);
                    t = e(t, c.flags);
                    if (!ef(r, c.path) && bf(t, a, b, c.Ha)) return 0
                }
                return 1
            }
            l && "none" !== l && (f = d(f, "domain", l));
            f = e(f, c.flags);
            return ef(l, c.path) ? 1 : bf(f, a, b, c.Ha) ? 0 : 1
        },
        gf = function(a, b, c) {
            null == c.path && (c.path = "/");
            c.domain || (c.domain = "auto");
            return ff(a, b, c)
        };

    function $e(a, b, c) {
        for (var d = [], e = [], f, h = 0; h < a.length; h++) {
            var k = a[h],
                l = b(k);
            l === c ? d.push(k) : void 0 === f || l < f ? (e = [k], f = l) : l === f && e.push(k)
        }
        return 0 < d.length ? d : e
    }

    function Ze(a, b, c) {
        for (var d = [], e = Ye(a, void 0, void 0, c), f = 0; f < e.length; f++) {
            var h = e[f].split("."),
                k = h.shift();
            if (!b || -1 !== b.indexOf(k)) {
                var l = h.shift();
                l && (l = l.split("-"), d.push({
                    id: h.join("."),
                    Xb: 1 * l[0] || 1,
                    Ab: 1 * l[1] || 1
                }))
            }
        }
        return d
    }
    var cf = function(a) {
            a && 1200 < a.length && (a = a.substring(0, 1200));
            return a
        },
        hf = /^(www\.)?google(\.com?)?(\.[a-z]{2})?$/,
        jf = /(^|\.)doubleclick\.net$/i,
        ef = function(a, b) {
            return jf.test(document.location.hostname) || "/" === b && hf.test(a)
        },
        df = function() {
            var a = [],
                b = document.location.hostname.split(".");
            if (4 === b.length) {
                var c = b[b.length - 1];
                if (parseInt(c, 10).toString() === c) return ["none"]
            }
            for (var d = b.length - 2; 0 <= d; d--) a.push(b.slice(d).join("."));
            var e = document.location.hostname;
            jf.test(e) || hf.test(e) || a.push("none");
            return a
        },
        Xe = function(a) {
            if (!bd("gtag_cs_api") || !a || !ld()) return !0;
            if (!kd(a)) return !1;
            var b = jd(a);
            return null == b ? !0 : !!b
        };
    var kf = function() {
            for (var a = Lc.userAgent + (H.cookie || "") + (H.referrer || ""), b = a.length, c = F.history.length; 0 < c;) a += c-- ^ b++;
            var d = 1,
                e, f, h;
            if (a)
                for (d = 0, f = a.length - 1; 0 <= f; f--) h = a.charCodeAt(f), d = (d << 6 & 268435455) + h + (h << 14), e = d & 266338304, d = 0 != e ? d ^ e >> 21 : d;
            return [Math.round(2147483647 * Math.random()) ^ d & 2147483647, Math.round(Ja() / 1E3)].join(".")
        },
        nf = function(a, b, c, d, e) {
            var f = lf(b);
            return af(a, f, mf(c), d, e)
        },
        of = function(a, b, c, d) {
            var e = "" + lf(c),
                f = mf(d);
            1 < f && (e += "-" + f);
            return [b, e, a].join(".")
        },
        lf = function(a) {
            if (!a) return 1;
            a = 0 === a.indexOf(".") ? a.substr(1) : a;
            return a.split(".").length
        },
        mf = function(a) {
            if (!a || "/" === a) return 1;
            "/" !== a[0] && (a = "/" + a);
            "/" !== a[a.length - 1] && (a += "/");
            return a.split("/").length - 1
        };

    function pf(a, b, c) {
        var d, e = a.xb;
        null == e && (e = 7776E3);
        0 !== e && (d = new Date((b || Ja()) + 1E3 * e));
        return {
            path: a.path,
            domain: a.domain,
            flags: a.flags,
            encode: !!c,
            expires: d
        }
    };
    var qf = ["1"],
        rf = {},
        vf = function(a) {
            var b = sf(a.prefix);
            rf[b] || tf(b, a.path, a.domain) || (uf(b, kf(), a), tf(b, a.path, a.domain))
        };

    function uf(a, b, c) {
        var d = of(b, "1", c.domain, c.path),
            e = pf(c);
        e.Ha = "ad_storage";
        gf(a, d, e)
    }

    function tf(a, b, c) {
        var d = nf(a, b, c, qf, "ad_storage");
        d && (rf[a] = d);
        return d
    }

    function sf(a) {
        return (a || "_gcl") + "_au"
    };

    function wf() {
        for (var a = xf, b = {}, c = 0; c < a.length; ++c) b[a[c]] = c;
        return b
    }

    function yf() {
        var a = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        a += a.toLowerCase() + "0123456789-_";
        return a + "."
    }
    var xf, zf;

    function Af(a) {
        xf = xf || yf();
        zf = zf || wf();
        for (var b = [], c = 0; c < a.length; c += 3) {
            var d = c + 1 < a.length,
                e = c + 2 < a.length,
                f = a.charCodeAt(c),
                h = d ? a.charCodeAt(c + 1) : 0,
                k = e ? a.charCodeAt(c + 2) : 0,
                l = f >> 2,
                p = (f & 3) << 4 | h >> 4,
                n = (h & 15) << 2 | k >> 6,
                r = k & 63;
            e || (r = 64, d || (n = 64));
            b.push(xf[l], xf[p], xf[n], xf[r])
        }
        return b.join("")
    }

    function Bf(a) {
        function b(l) {
            for (; d < a.length;) {
                var p = a.charAt(d++),
                    n = zf[p];
                if (null != n) return n;
                if (!/^[\s\xa0]*$/.test(p)) throw Error("Unknown base64 encoding at char: " + p);
            }
            return l
        }
        xf = xf || yf();
        zf = zf || wf();
        for (var c = "", d = 0;;) {
            var e = b(-1),
                f = b(0),
                h = b(64),
                k = b(64);
            if (64 === k && -1 === e) return c;
            c += String.fromCharCode(e << 2 | f >> 4);
            64 != h && (c += String.fromCharCode(f << 4 & 240 | h >> 2), 64 != k && (c += String.fromCharCode(h << 6 & 192 | k)))
        }
    };
    var Cf;
    var Gf = function() {
            var a = Df,
                b = Ef,
                c = Ff(),
                d = function(h) {
                    a(h.target || h.srcElement || {})
                },
                e = function(h) {
                    b(h.target || h.srcElement || {})
                };
            if (!c.init) {
                Tc(H, "mousedown", d);
                Tc(H, "keyup", d);
                Tc(H, "submit", e);
                var f = HTMLFormElement.prototype.submit;
                HTMLFormElement.prototype.submit = function() {
                    b(this);
                    f.call(this)
                };
                c.init = !0
            }
        },
        Hf = function(a, b, c, d, e) {
            var f = {
                callback: a,
                domains: b,
                fragment: 2 === c,
                placement: c,
                forms: d,
                sameHost: e
            };
            Ff().decorators.push(f)
        },
        If = function(a, b, c) {
            for (var d = Ff().decorators, e = {}, f = 0; f < d.length; ++f) {
                var h =
                    d[f],
                    k;
                if (k = !c || h.forms) a: {
                    var l = h.domains,
                        p = a,
                        n = !!h.sameHost;
                    if (l && (n || p !== H.location.hostname))
                        for (var r = 0; r < l.length; r++)
                            if (l[r] instanceof RegExp) {
                                if (l[r].test(p)) {
                                    k = !0;
                                    break a
                                }
                            } else if (0 <= p.indexOf(l[r]) || n && 0 <= l[r].indexOf(p)) {
                        k = !0;
                        break a
                    }
                    k = !1
                }
                if (k) {
                    var t = h.placement;
                    void 0 == t && (t = h.fragment ? 2 : 1);
                    t === b && Ma(e, h.callback())
                }
            }
            return e
        },
        Ff = function() {
            var a = Nc("google_tag_data", {}),
                b = a.gl;
            b && b.decorators || (b = {
                decorators: []
            }, a.gl = b);
            return b
        };
    var Jf = /(.*?)\*(.*?)\*(.*)/,
        Kf = /^https?:\/\/([^\/]*?)\.?cdn\.ampproject\.org\/?(.*)/,
        Lf = /^(?:www\.|m\.|amp\.)+/,
        Mf = /([^?#]+)(\?[^#]*)?(#.*)?/;

    function Nf(a) {
        return new RegExp("(.*?)(^|&)" + a + "=([^&]*)&?(.*)")
    }
    var Pf = function(a) {
            var b = [],
                c;
            for (c in a)
                if (a.hasOwnProperty(c)) {
                    var d = a[c];
                    void 0 !== d && d === d && null !== d && "[object Object]" !== d.toString() && (b.push(c), b.push(Af(String(d))))
                }
            var e = b.join("*");
            return ["1", Of(e), e].join("*")
        },
        Of = function(a, b) {
            var c = [window.navigator.userAgent, (new Date).getTimezoneOffset(), window.navigator.userLanguage || window.navigator.language, Math.floor((new Date).getTime() / 60 / 1E3) - (void 0 === b ? 0 : b), a].join("*"),
                d;
            if (!(d = Cf)) {
                for (var e = Array(256), f = 0; 256 > f; f++) {
                    for (var h = f, k = 0; 8 > k; k++) h =
                        h & 1 ? h >>> 1 ^ 3988292384 : h >>> 1;
                    e[f] = h
                }
                d = e
            }
            Cf = d;
            for (var l = 4294967295, p = 0; p < c.length; p++) l = l >>> 8 ^ Cf[(l ^ c.charCodeAt(p)) & 255];
            return ((l ^ -1) >>> 0).toString(36)
        },
        Rf = function() {
            return function(a) {
                var b = Ue(F.location.href),
                    c = b.search.replace("?", ""),
                    d = Pe(c, "_gl", !0) || "";
                a.query = Qf(d) || {};
                var e = Se(b, "fragment").match(Nf("_gl"));
                a.fragment = Qf(e && e[3] || "") || {}
            }
        },
        Sf = function(a) {
            var b = Rf(),
                c = Ff();
            c.data || (c.data = {
                query: {},
                fragment: {}
            }, b(c.data));
            var d = {},
                e = c.data;
            e && (Ma(d, e.query), a && Ma(d, e.fragment));
            return d
        },
        Qf =
        function(a) {
            var b;
            b = void 0 === b ? 3 : b;
            try {
                if (a) {
                    var c;
                    a: {
                        for (var d = a, e = 0; 3 > e; ++e) {
                            var f = Jf.exec(d);
                            if (f) {
                                c = f;
                                break a
                            }
                            d = decodeURIComponent(d)
                        }
                        c = void 0
                    }
                    var h = c;
                    if (h && "1" === h[1]) {
                        var k = h[3],
                            l;
                        a: {
                            for (var p = h[2], n = 0; n < b; ++n)
                                if (p === Of(k, n)) {
                                    l = !0;
                                    break a
                                }
                            l = !1
                        }
                        if (l) {
                            for (var r = {}, t = k ? k.split("*") : [], q = 0; q < t.length; q += 2) r[t[q]] = Bf(t[q + 1]);
                            return r
                        }
                    }
                }
            } catch (u) {}
        };

    function Tf(a, b, c, d) {
        function e(n) {
            var r = n,
                t = Nf(a).exec(r),
                q = r;
            if (t) {
                var u = t[2],
                    v = t[4];
                q = t[1];
                v && (q = q + u + v)
            }
            n = q;
            var w = n.charAt(n.length - 1);
            n && "&" !== w && (n += "&");
            return n + p
        }
        d = void 0 === d ? !1 : d;
        var f = Mf.exec(c);
        if (!f) return "";
        var h = f[1],
            k = f[2] || "",
            l = f[3] || "",
            p = a + "=" + b;
        d ? l = "#" + e(l.substring(1)) : k = "?" + e(k.substring(1));
        return "" + h + k + l
    }

    function Uf(a, b) {
        var c = "FORM" === (a.tagName || "").toUpperCase(),
            d = If(b, 1, c),
            e = If(b, 2, c),
            f = If(b, 3, c);
        if (Na(d)) {
            var h = Pf(d);
            c ? Vf("_gl", h, a) : Wf("_gl", h, a, !1)
        }
        if (!c && Na(e)) {
            var k = Pf(e);
            Wf("_gl", k, a, !0)
        }
        for (var l in f)
            if (f.hasOwnProperty(l)) a: {
                var p = l,
                    n = f[l],
                    r = a;
                if (r.tagName) {
                    if ("a" === r.tagName.toLowerCase()) {
                        Wf(p, n, r, void 0);
                        break a
                    }
                    if ("form" === r.tagName.toLowerCase()) {
                        Vf(p, n, r);
                        break a
                    }
                }
                "string" == typeof r && Tf(p, n, r, void 0)
            }
    }

    function Wf(a, b, c, d) {
        if (c.href) {
            var e = Tf(a, b, c.href, void 0 === d ? !1 : d);
            xc.test(e) && (c.href = e)
        }
    }

    function Vf(a, b, c) {
        if (c && c.action) {
            var d = (c.method || "").toLowerCase();
            if ("get" === d) {
                for (var e = c.childNodes || [], f = !1, h = 0; h < e.length; h++) {
                    var k = e[h];
                    if (k.name === a) {
                        k.setAttribute("value", b);
                        f = !0;
                        break
                    }
                }
                if (!f) {
                    var l = H.createElement("input");
                    l.setAttribute("type", "hidden");
                    l.setAttribute("name", a);
                    l.setAttribute("value", b);
                    c.appendChild(l)
                }
            } else if ("post" === d) {
                var p = Tf(a, b, c.action);
                xc.test(p) && (c.action = p)
            }
        }
    }
    var Df = function(a) {
            try {
                var b;
                a: {
                    for (var c = a, d = 100; c && 0 < d;) {
                        if (c.href && c.nodeName.match(/^a(?:rea)?$/i)) {
                            b = c;
                            break a
                        }
                        c = c.parentNode;
                        d--
                    }
                    b = null
                }
                var e = b;
                if (e) {
                    var f = e.protocol;
                    "http:" !== f && "https:" !== f || Uf(e, e.hostname)
                }
            } catch (h) {}
        },
        Ef = function(a) {
            try {
                if (a.action) {
                    var b = Se(Ue(a.action), "host");
                    Uf(a, b)
                }
            } catch (c) {}
        },
        Xf = function(a, b, c, d) {
            Gf();
            Hf(a, b, "fragment" === c ? 2 : 1, !!d, !1)
        },
        Yf = function(a, b) {
            Gf();
            Hf(a, [Re(F.location, "host", !0)], b, !0, !0)
        },
        Zf = function() {
            var a = H.location.hostname,
                b = Kf.exec(H.referrer);
            if (!b) return !1;
            var c = b[2],
                d = b[1],
                e = "";
            if (c) {
                var f = c.split("/"),
                    h = f[1];
                e = "s" === h ? decodeURIComponent(f[2]) : decodeURIComponent(h)
            } else if (d) {
                if (0 === d.indexOf("xn--")) return !1;
                e = d.replace(/-/g, ".").replace(/\.\./g, "-")
            }
            var k = a.replace(Lf, ""),
                l = e.replace(Lf, ""),
                p;
            if (!(p = k === l)) {
                var n = "." + l;
                p = k.substring(k.length - n.length, k.length) === n
            }
            return p
        },
        $f = function(a, b) {
            return !1 === a ? !1 : a || b || Zf()
        };
    var ag = /^\w+$/,
        bg = /^[\w-]+$/,
        cg = /^~?[\w-]+$/,
        dg = {
            aw: "_aw",
            dc: "_dc",
            gf: "_gf",
            ha: "_ha",
            gp: "_gp"
        },
        eg = function() {
            if (!bd("gtag_cs_api") || !ld()) return !0;
            var a = jd("ad_storage");
            return null == a ? !0 : !!a
        },
        fg = function(a, b) {
            kd("ad_storage") ? eg() ? a() : od(a, "ad_storage") : b ? qc("TAGGING", 3) : nd(function() {
                fg(a, !0)
            }, ["ad_storage"])
        },
        ig = function(a) {
            var b = [];
            if (!H.cookie) return b;
            var c = Ye(a, H.cookie, void 0, "ad_storage");
            if (!c || 0 == c.length) return b;
            for (var d = 0; d < c.length; d++) {
                var e = gg(c[d]);
                e && -1 === ya(b, e) && b.push(e)
            }
            return hg(b)
        };

    function jg(a) {
        return a && "string" == typeof a && a.match(ag) ? a : "_gcl"
    }
    var lg = function() {
            var a = Ue(F.location.href),
                b = Se(a, "query", !1, void 0, "gclid"),
                c = Se(a, "query", !1, void 0, "gclsrc"),
                d = Se(a, "query", !1, void 0, "dclid");
            if (!b || !c) {
                var e = a.hash.replace("#", "");
                b = b || Pe(e, "gclid", void 0);
                c = c || Pe(e, "gclsrc", void 0)
            }
            return kg(b, c, d)
        },
        kg = function(a, b, c) {
            var d = {},
                e = function(f, h) {
                    d[h] || (d[h] = []);
                    d[h].push(f)
                };
            d.gclid = a;
            d.gclsrc = b;
            d.dclid = c;
            if (void 0 !== a && a.match(bg)) switch (b) {
                case void 0:
                    e(a, "aw");
                    break;
                case "aw.ds":
                    e(a, "aw");
                    e(a, "dc");
                    break;
                case "ds":
                    e(a, "dc");
                    break;
                case "3p.ds":
                    bd("gtm_3pds") &&
                        e(a, "dc");
                    break;
                case "gf":
                    e(a, "gf");
                    break;
                case "ha":
                    e(a, "ha");
                    break;
                case "gp":
                    e(a, "gp")
            }
            c && e(c, "dc");
            return d
        },
        ng = function(a) {
            var b = lg();
            fg(function() {
                mg(b, a)
            })
        };

    function mg(a, b, c) {
        function d(l, p) {
            var n = og(l, e);
            n && gf(n, p, f)
        }
        b = b || {};
        var e = jg(b.prefix);
        c = c || Ja();
        var f = pf(b, c, !0);
        f.Ha = "ad_storage";
        var h = Math.round(c / 1E3),
            k = function(l) {
                return ["GCL", h, l].join(".")
            };
        a.aw && (!0 === b.ji ? d("aw", k("~" + a.aw[0])) : d("aw", k(a.aw[0])));
        a.dc && d("dc", k(a.dc[0]));
        a.gf && d("gf", k(a.gf[0]));
        a.ha && d("ha", k(a.ha[0]));
        a.gp && d("gp", k(a.gp[0]))
    }
    var qg = function(a, b) {
            var c = Sf(!0);
            fg(function() {
                for (var d = jg(b.prefix), e = 0; e < a.length; ++e) {
                    var f = a[e];
                    if (void 0 !== dg[f]) {
                        var h = og(f, d),
                            k = c[h];
                        if (k) {
                            var l = Math.min(pg(k), Ja()),
                                p;
                            b: {
                                for (var n = l, r = Ye(h, H.cookie, void 0, "ad_storage"), t = 0; t < r.length; ++t)
                                    if (pg(r[t]) > n) {
                                        p = !0;
                                        break b
                                    }
                                p = !1
                            }
                            if (!p) {
                                var q = pf(b, l, !0);
                                q.Ha = "ad_storage";
                                gf(h, k, q)
                            }
                        }
                    }
                }
                mg(kg(c.gclid, c.gclsrc), b)
            })
        },
        og = function(a, b) {
            var c = dg[a];
            if (void 0 !== c) return b + c
        },
        pg = function(a) {
            var b = a.split(".");
            return 3 !== b.length || "GCL" !== b[0] ? 0 : 1E3 * (Number(b[1]) ||
                0)
        };

    function gg(a) {
        var b = a.split(".");
        if (3 == b.length && "GCL" == b[0] && b[1]) return b[2]
    }
    var rg = function(a, b, c, d, e) {
            if (xa(b)) {
                var f = jg(e),
                    h = function() {
                        for (var k = {}, l = 0; l < a.length; ++l) {
                            var p = og(a[l], f);
                            if (p) {
                                var n = Ye(p, H.cookie, void 0, "ad_storage");
                                n.length && (k[p] = n.sort()[n.length - 1])
                            }
                        }
                        return k
                    };
                fg(function() {
                    Xf(h, b, c, d)
                })
            }
        },
        hg = function(a) {
            return a.filter(function(b) {
                return cg.test(b)
            })
        },
        sg = function(a, b) {
            for (var c = jg(b.prefix), d = {}, e = 0; e < a.length; e++) dg[a[e]] && (d[a[e]] = dg[a[e]]);
            fg(function() {
                Da(d, function(f, h) {
                    var k = Ye(c + h, H.cookie, void 0, "ad_storage");
                    if (k.length) {
                        var l = k[0],
                            p = pg(l),
                            n = {};
                        n[f] = [gg(l)];
                        mg(n, b, p)
                    }
                })
            })
        };

    function tg(a, b) {
        for (var c = 0; c < b.length; ++c)
            if (a[b[c]]) return !0;
        return !1
    }
    var ug = function() {
            function a(e, f, h) {
                h && (e[f] = h)
            }
            var b = ["aw", "dc"];
            if (ld()) {
                var c = lg();
                if (tg(c, b)) {
                    var d = {};
                    a(d, "gclid", c.gclid);
                    a(d, "dclid", c.dclid);
                    a(d, "gclsrc", c.gclsrc);
                    Yf(function() {
                        return d
                    }, 3);
                    Yf(function() {
                        var e = {};
                        return e._up = "1", e
                    }, 1)
                }
            }
        },
        vg = function() {
            var a;
            if (eg()) {
                for (var b = [], c = H.cookie.split(";"), d = /^\s*_gac_(UA-\d+-\d+)=\s*(.+?)\s*$/, e = 0; e < c.length; e++) {
                    var f = c[e].match(d);
                    f && b.push({
                        Bd: f[1],
                        value: f[2]
                    })
                }
                var h = {};
                if (b && b.length)
                    for (var k = 0; k < b.length; k++) {
                        var l = b[k].value.split(".");
                        "1" == l[0] && 3 == l.length && l[1] && (h[b[k].Bd] || (h[b[k].Bd] = []), h[b[k].Bd].push({
                            timestamp: l[1],
                            Dg: l[2]
                        }))
                    }
                a = h
            } else a = {};
            return a
        };
    var wg = /^\d+\.fls\.doubleclick\.net$/;

    function xg(a, b) {
        kd(D.o) ? sd(D.o) ? a() : od(a, D.o) : b ? E(42) : ud(function() {
            xg(a, !0)
        }, [D.o])
    }

    function yg(a) {
        var b = Ue(F.location.href),
            c = Se(b, "host", !1);
        if (c && c.match(wg)) {
            var d = Se(b, "path").split(a + "=");
            if (1 < d.length) return d[1].split(";")[0].split("?")[0]
        }
    }

    function zg(a, b, c) {
        if ("aw" == a || "dc" == a) {
            var d = yg("gcl" + a);
            if (d) return d.split(".")
        }
        var e = jg(b);
        if ("_gcl" == e) {
            c = void 0 === c ? !0 : c;
            var f = !sd(D.o) && c,
                h;
            h = lg()[a] || [];
            if (0 < h.length) return f ? ["0"] : h
        }
        var k = og(a, e);
        return k ? ig(k) : []
    }
    var Ag = function(a) {
            var b = yg("gac");
            if (b) return !sd(D.o) && a ? "0" : decodeURIComponent(b);
            var c = vg(),
                d = [];
            Da(c, function(e, f) {
                for (var h = [], k = 0; k < f.length; k++) h.push(f[k].Dg);
                h = hg(h);
                h.length && d.push(e + ":" + h.join(","))
            });
            return d.join(";")
        },
        Bg = function(a, b) {
            var c = lg().dc || [];
            xg(function() {
                vf(b);
                var d = rf[sf(b.prefix)],
                    e = !1;
                if (d && 0 < c.length) {
                    var f = L.joined_au = L.joined_au || {},
                        h = b.prefix || "_gcl";
                    if (!f[h])
                        for (var k = 0; k < c.length; k++) {
                            var l = "https://adservice.google.com/ddm/regclk";
                            l = l + "?gclid=" + c[k] + "&auiddc=" + d;
                            Zc(l);
                            e = f[h] = !0
                        }
                }
                null == a && (a = e);
                if (a && d) {
                    var p = sf(b.prefix),
                        n = rf[p];
                    n && uf(p, n, b)
                }
            })
        };
    var Cg = /[A-Z]+/,
        Dg = /\s/,
        Eg = function(a) {
            if (g(a) && (a = Ha(a), !Dg.test(a))) {
                var b = a.indexOf("-");
                if (!(0 > b)) {
                    var c = a.substring(0, b);
                    if (Cg.test(c)) {
                        for (var d = a.substring(b + 1).split("/"), e = 0; e < d.length; e++)
                            if (!d[e]) return;
                        return {
                            id: a,
                            prefix: c,
                            containerId: c + "-" + d[0],
                            C: d
                        }
                    }
                }
            }
        },
        Gg = function(a) {
            for (var b = {}, c = 0; c < a.length; ++c) {
                var d = Eg(a[c]);
                d && (b[d.id] = d)
            }
            Fg(b);
            var e = [];
            Da(b, function(f, h) {
                e.push(h)
            });
            return e
        };

    function Fg(a) {
        var b = [],
            c;
        for (c in a)
            if (a.hasOwnProperty(c)) {
                var d = a[c];
                "AW" === d.prefix && d.C[1] && b.push(d.containerId)
            }
        for (var e = 0; e < b.length; ++e) delete a[b[e]]
    };
    var Hg = function() {
        var a = !1;
        return a
    };
    var Q = function(a, b, c, d) {
            return (2 === Ig() || d || "http:" != F.location.protocol ? a : b) + c
        },
        Ig = function() {
            var a = Qc(),
                b;
            if (1 === a) a: {
                var c = Vd;
                c = c.toLowerCase();
                for (var d = "https://" + c, e = "http://" + c, f = 1, h = H.getElementsByTagName("script"), k = 0; k < h.length && 100 > k; k++) {
                    var l = h[k].src;
                    if (l) {
                        l = l.toLowerCase();
                        if (0 === l.indexOf(e)) {
                            b = 3;
                            break a
                        }
                        1 === f && 0 === l.indexOf(d) && (f = 2)
                    }
                }
                b = f
            } else b = a;
            return b
        };
    var Kg = function(a, b, c) {
            if (F[a.functionName]) return b.od && I(b.od), F[a.functionName];
            var d = Jg();
            F[a.functionName] = d;
            if (a.Ub)
                for (var e = 0; e < a.Ub.length; e++) F[a.Ub[e]] = F[a.Ub[e]] || Jg();
            a.ac && void 0 === F[a.ac] && (F[a.ac] = c);
            Pc(Q("https://", "http://", a.yd), b.od, b.jh);
            return d
        },
        Jg = function() {
            var a = function() {
                a.q = a.q || [];
                a.q.push(arguments)
            };
            return a
        },
        Lg = {
            functionName: "_googWcmImpl",
            ac: "_googWcmAk",
            yd: "www.gstatic.com/wcm/loader.js"
        },
        Mg = {
            functionName: "_gaPhoneImpl",
            ac: "ga_wpid",
            yd: "www.gstatic.com/gaphone/loader.js"
        },
        Ng = {
            $e: "",
            Cf: "5"
        },
        Og = {
            functionName: "_googCallTrackingImpl",
            Ub: [Mg.functionName, Lg.functionName],
            yd: "www.gstatic.com/call-tracking/call-tracking_" + (Ng.$e || Ng.Cf) + ".js"
        },
        Pg = {},
        Qg = function(a, b, c, d) {
            E(22);
            if (c) {
                d = d || {};
                var e = Kg(Lg, d, a),
                    f = {
                        ak: a,
                        cl: b
                    };
                void 0 === d.ma && (f.autoreplace = c);
                e(2, d.ma, f, c, 0, new Date, d.options)
            }
        },
        Rg = function(a, b, c, d) {
            E(21);
            if (b && c) {
                d = d || {};
                for (var e = {
                        countryNameCode: c,
                        destinationNumber: b,
                        retrievalTime: new Date
                    }, f = 0; f < a.length; f++) {
                    var h = a[f];
                    Pg[h.id] || (h && "AW" === h.prefix && !e.adData && 2 <= h.C.length ? (e.adData = {
                        ak: h.C[0],
                        cl: h.C[1]
                    }, Pg[h.id] = !0) : h && "UA" === h.prefix && !e.gaData && (e.gaData = {
                        gaWpid: h.containerId
                    }, Pg[h.id] = !0))
                }(e.gaData || e.adData) && Kg(Og, d)(d.ma, e, d.options)
            }
        },
        Sg = function() {
            var a = !1;
            return a
        },
        Tg = function(a, b) {
            if (a)
                if (Hg()) {} else {
                    if (g(a)) {
                        var c =
                            Eg(a);
                        if (!c) return;
                        a = c
                    }
                    var d = void 0,
                        e = !1,
                        f = b.getWithConfig(D.Ze);
                    if (f && xa(f)) {
                        d = [];
                        for (var h = 0; h < f.length; h++) {
                            var k = Eg(f[h]);
                            k && (d.push(k), (a.id === k.id || a.id === a.containerId && a.containerId === k.containerId) && (e = !0))
                        }
                    }
                    if (!d || e) {
                        var l = b.getWithConfig(D.Ke),
                            p;
                        if (l) {
                            xa(l) ? p = l : p = [l];
                            var n = b.getWithConfig(D.Fe),
                                r = b.getWithConfig(D.Je),
                                t = b.getWithConfig(D.Me),
                                q = b.getWithConfig(D.Lf),
                                u = n || r,
                                v = 1;
                            "UA" !== a.prefix || d || (v = 5);
                            for (var w = 0; w < p.length; w++)
                                if (w < v)
                                    if (d) Rg(d, p[w], q, {
                                        ma: u,
                                        options: t
                                    });
                                    else if ("AW" === a.prefix &&
                                a.C[1]) Sg() ? Rg([a], p[w], q || "US", {
                                ma: u,
                                options: t
                            }) : Qg(a.C[0], a.C[1], p[w], {
                                ma: u,
                                options: t
                            });
                            else if ("UA" === a.prefix)
                                if (Sg()) Rg([a], p[w], q || "US", {
                                    ma: u
                                });
                                else {
                                    var z = a.containerId,
                                        x = p[w],
                                        A = {
                                            ma: u
                                        };
                                    E(23);
                                    if (x) {
                                        A = A || {};
                                        var B = Kg(Mg, A, z),
                                            y = {};
                                        void 0 !== A.ma ? y.receiver = A.ma : y.replace = x;
                                        y.ga_wpid = z;
                                        y.destination = x;
                                        B(2, new Date, y)
                                    }
                                }
                        }
                    }
                }
        };
    var Xg = function(a) {
        return sd(D.o) ? a : a.replace(/&url=([^&#]+)/, function(b, c) {
            var d = Ve(decodeURIComponent(c));
            return "&url=" + encodeURIComponent(d)
        })
    };
    var Yg = new RegExp(/^(.*\.)?(google|youtube|blogger|withgoogle)(\.com?)?(\.[a-z]{2})?\.?$/),
        Zg = {
            cl: ["ecl"],
            customPixels: ["nonGooglePixels"],
            ecl: ["cl"],
            ehl: ["hl"],
            hl: ["ehl"],
            html: ["customScripts", "customPixels", "nonGooglePixels", "nonGoogleScripts", "nonGoogleIframes"],
            customScripts: ["html", "customPixels", "nonGooglePixels", "nonGoogleScripts", "nonGoogleIframes"],
            nonGooglePixels: [],
            nonGoogleScripts: ["nonGooglePixels"],
            nonGoogleIframes: ["nonGooglePixels"]
        },
        $g = {
            cl: ["ecl"],
            customPixels: ["customScripts", "html"],
            ecl: ["cl"],
            ehl: ["hl"],
            hl: ["ehl"],
            html: ["customScripts"],
            customScripts: ["html"],
            nonGooglePixels: ["customPixels", "customScripts", "html", "nonGoogleScripts", "nonGoogleIframes"],
            nonGoogleScripts: ["customScripts", "html"],
            nonGoogleIframes: ["customScripts", "html", "nonGoogleScripts"]
        },
        ah = "google customPixels customScripts html nonGooglePixels nonGoogleScripts nonGoogleIframes".split(" ");
    var ch = function(a) {
            var b;
            b || (b = Fe("gtm.whitelist"));
            b && E(9);
            b = "google gtagfl lcl zone oid op".split(" ");
            var c = b && Oa(Ga(b), Zg),
                d;
            d || (d = Fe("gtm.blacklist"));
            d || (d = Fe("tagTypeBlacklist")) && E(3);
            d ? E(8) : d = [];
            bh() && (d = Ga(d), d.push("nonGooglePixels", "nonGoogleScripts", "sandboxedScripts"));
            0 <= ya(Ga(d), "google") && E(2);
            var e = d && Oa(Ga(d), $g),
                f = {};
            return function(h) {
                var k =
                    h && h[Lb.oa];
                if (!k || "string" != typeof k) return !0;
                k = k.replace(/^_*/, "");
                if (void 0 !== f[k]) return f[k];
                var l = $d[k] || [],
                    p = a(k, l);
                if (b) {
                    var n;
                    if (n = p) a: {
                        if (0 > ya(c, k))
                            if (l && 0 < l.length)
                                for (var r = 0; r < l.length; r++) {
                                    if (0 > ya(c, l[r])) {
                                        E(11);
                                        n = !1;
                                        break a
                                    }
                                } else {
                                    n = !1;
                                    break a
                                }
                            n = !0
                    }
                    p = n
                }
                var t = !1;
                if (d) {
                    var q = 0 <= ya(e, k);
                    if (q) t = q;
                    else {
                        var u = Ca(e, l || []);
                        u && E(10);
                        t = u
                    }
                }
                var v = !p || t;
                v || !(0 <= ya(l, "sandboxedScripts")) || c && -1 !== ya(c, "sandboxedScripts") || (v = Ca(e, ah));
                return f[k] = v
            }
        },
        bh = function() {
            return Yg.test(F.location && F.location.hostname)
        };
    var dh = {
            active: !0,
            isAllowed: function() {
                return !0
            }
        },
        eh = function(a) {
            var b = L.zones;
            return b ? b.checkState(Pd.B, a) : dh
        },
        fh = function(a) {
            var b = L.zones;
            !b && a && (b = L.zones = a());
            return b
        };
    var gh = function() {};
    var hh = !1,
        ih = 0,
        jh = [];

    function kh(a) {
        if (!hh) {
            var b = H.createEventObject,
                c = "complete" == H.readyState,
                d = "interactive" == H.readyState;
            if (!a || "readystatechange" != a.type || c || !b && d) {
                hh = !0;
                for (var e = 0; e < jh.length; e++) I(jh[e])
            }
            jh.push = function() {
                for (var f = 0; f < arguments.length; f++) I(arguments[f]);
                return 0
            }
        }
    }

    function lh() {
        if (!hh && 140 > ih) {
            ih++;
            try {
                H.documentElement.doScroll("left"), kh()
            } catch (a) {
                F.setTimeout(lh, 50)
            }
        }
    }
    var mh = function(a) {
        hh ? a() : jh.push(a)
    };
    var nh = {},
        oh = {},
        ph = function(a, b, c, d) {
            if (!oh[a] || Sd[b] || "__zone" === b) return -1;
            var e = {};
            Va(d) && (e = m(d, e));
            e.id = c;
            e.status = "timeout";
            return oh[a].tags.push(e) - 1
        },
        qh = function(a, b, c, d) {
            if (oh[a]) {
                var e = oh[a].tags[b];
                e && (e.status = c, e.executionTime = d)
            }
        };

    function rh(a) {
        for (var b = nh[a] || [], c = 0; c < b.length; c++) b[c]();
        nh[a] = {
            push: function(d) {
                d(Pd.B, oh[a])
            }
        }
    }
    var uh = function(a, b, c) {
            oh[a] = {
                tags: []
            };
            va(b) && sh(a, b);
            c && F.setTimeout(function() {
                return rh(a)
            }, Number(c));
            return th(a)
        },
        sh = function(a, b) {
            nh[a] = nh[a] || [];
            nh[a].push(La(function() {
                return I(function() {
                    b(Pd.B, oh[a])
                })
            }))
        };

    function th(a) {
        var b = 0,
            c = 0,
            d = !1;
        return {
            add: function() {
                c++;
                return La(function() {
                    b++;
                    d && b >= c && rh(a)
                })
            },
            Zf: function() {
                d = !0;
                b >= c && rh(a)
            }
        }
    };
    var vh = function() {
        function a(d) {
            return !wa(d) || 0 > d ? 0 : d
        }
        if (!L._li && F.performance && F.performance.timing) {
            var b = F.performance.timing.navigationStart,
                c = wa(Ge.get("gtm.start")) ? Ge.get("gtm.start") : 0;
            L._li = {
                cst: a(c - b),
                cbt: a(Xd - b)
            }
        }
    };
    var zh = {},
        Ah = function() {
            return F.GoogleAnalyticsObject && F[F.GoogleAnalyticsObject]
        },
        Bh = !1;
    var Ch = function(a) {
            F.GoogleAnalyticsObject || (F.GoogleAnalyticsObject = a || "ga");
            var b = F.GoogleAnalyticsObject;
            if (F[b]) F.hasOwnProperty(b) || E(12);
            else {
                var c = function() {
                    c.q = c.q || [];
                    c.q.push(arguments)
                };
                c.l = Number(new Date);
                F[b] = c
            }
            vh();
            return F[b]
        },
        Dh = function(a, b, c, d) {
            b = String(b).replace(/\s+/g, "").split(",");
            var e = Ah();
            e(a + "require", "linker");
            e(a + "linker:autoLink", b, c, d)
        };
    var Fh = function(a) {},
        Eh = function() {
            return F.GoogleAnalyticsObject || "ga"
        },
        Gh = function(a, b) {
            return function() {
                var c = Ah(),
                    d = c && c.getByName && c.getByName(a);
                if (d) {
                    var e = d.get("sendHitTask");
                    d.set("sendHitTask", function(f) {
                        var h = f.get("hitPayload"),
                            k = f.get("hitCallback"),
                            l = 0 > h.indexOf("&tid=" + b);
                        l && (f.set("hitPayload", h.replace(/&tid=UA-[0-9]+-[0-9]+/, "&tid=" +
                            b), !0), f.set("hitCallback", void 0, !0));
                        e(f);
                        l && (f.set("hitPayload", h, !0), f.set("hitCallback", k, !0), f.set("_x_19", void 0, !0), e(f))
                    })
                }
            }
        };

    function Lh(a, b, c, d) {
        var e = yb[a],
            f = Mh(a, b, c, d);
        if (!f) return null;
        var h = Hb(e[Lb.Sd], c, []);
        if (h && h.length) {
            var k = h[0];
            f = Lh(k.index, {
                H: f,
                F: 1 === k.ke ? b.terminate : f,
                terminate: b.terminate
            }, c, d)
        }
        return f
    }

    function Mh(a, b, c, d) {
        function e() {
            if (f[Lb.sf]) k();
            else {
                var w = Ib(f, c, []);
                var A = ph(c.id, String(f[Lb.oa]), Number(f[Lb.Td]), w[Lb.tf]),
                    B = !1;
                w.vtp_gtmOnSuccess = function() {
                    if (!B) {
                        B = !0;
                        var G = Ja() - C;
                        xe(c.id, yb[a], "5");
                        qh(c.id, A, "success",
                            G);
                        h()
                    }
                };
                w.vtp_gtmOnFailure = function() {
                    if (!B) {
                        B = !0;
                        var G = Ja() - C;
                        xe(c.id, yb[a], "6");
                        qh(c.id, A, "failure", G);
                        k()
                    }
                };
                w.vtp_gtmTagId = f.tag_id;
                w.vtp_gtmEventId = c.id;
                xe(c.id, f, "1");
                var y = function() {
                    var G = Ja() - C;
                    xe(c.id, f, "7");
                    qh(c.id, A, "exception", G);
                    B || (B = !0, k())
                };
                var C = Ja();
                try {
                    Gb(w, c)
                } catch (G) {
                    y(G)
                }
            }
        }
        var f = yb[a],
            h = b.H,
            k = b.F,
            l = b.terminate;
        if (c.hd(f)) return null;
        var p = Hb(f[Lb.Ud], c, []);
        if (p && p.length) {
            var n = p[0],
                r = Lh(n.index, {
                    H: h,
                    F: k,
                    terminate: l
                }, c, d);
            if (!r) return null;
            h = r;
            k = 2 === n.ke ? l : r
        }
        if (f[Lb.Od] || f[Lb.xf]) {
            var t = f[Lb.Od] ? zb : c.Dh,
                q = h,
                u = k;
            if (!t[a]) {
                e = La(e);
                var v = Nh(a, t, e);
                h = v.H;
                k = v.F
            }
            return function() {
                t[a](q, u)
            }
        }
        return e
    }

    function Nh(a, b, c) {
        var d = [],
            e = [];
        b[a] = Oh(d, e, c);
        return {
            H: function() {
                b[a] = Ph;
                for (var f = 0; f < d.length; f++) d[f]()
            },
            F: function() {
                b[a] = Qh;
                for (var f = 0; f < e.length; f++) e[f]()
            }
        }
    }

    function Oh(a, b, c) {
        return function(d, e) {
            a.push(d);
            b.push(e);
            c()
        }
    }

    function Ph(a) {
        a()
    }

    function Qh(a, b) {
        b()
    };
    var Th = function(a, b) {
        for (var c = [], d = 0; d < yb.length; d++)
            if (a.xa[d]) {
                var e = yb[d];
                var f = b.add();
                try {
                    var h = Lh(d, {
                        H: f,
                        F: f,
                        terminate: f
                    }, a, d);
                    h ? c.push({
                        Qe: d,
                        Ie: Jb(e),
                        yg: h
                    }) : (Rh(d, a), f())
                } catch (l) {
                    f()
                }
            }
        b.Zf();
        c.sort(Sh);
        for (var k = 0; k < c.length; k++) c[k].yg();
        return 0 < c.length
    };

    function Sh(a, b) {
        var c, d = b.Ie,
            e = a.Ie;
        c = d > e ? 1 : d < e ? -1 : 0;
        var f;
        if (0 !== c) f = c;
        else {
            var h = a.Qe,
                k = b.Qe;
            f = h > k ? 1 : h < k ? -1 : 0
        }
        return f
    }

    function Rh(a, b) {
        if (!ue) return;
        var c = function(d) {
            var e = b.hd(yb[d]) ? "3" : "4",
                f = Hb(yb[d][Lb.Sd], b, []);
            f && f.length && c(f[0].index);
            xe(b.id, yb[d], e);
            var h = Hb(yb[d][Lb.Ud], b, []);
            h && h.length && c(h[0].index)
        };
        c(a);
    }
    var Uh = !1,
        Vh = function(a, b, c, d) {
            if ("gtm.js" == b) {
                if (Uh) return !1;
                Uh = !0
            }
            var e = eh(a),
                f = !1;
            if (!e.active) {
                var h = !0;
                if ("gtm.js" === b) {
                    for (var k = 0; k < yb.length; k++)
                        if (Rd[String(yb[k][String(Lb.oa)])]) {
                            E(50);
                            break
                        }
                }
                if (h) return !1
            }
            we(a, b);
            var l = uh(a, c, d);
            Je(a, "event",
                1);
            Je(a, "ecommerce", 1);
            Je(a, "gtm");
            var p = {
                id: a,
                name: b,
                hd: ch(e.isAllowed),
                xa: [],
                Dh: [],
                ze: function() {
                    E(6)
                },
                ce: function(u) {
                    ue && (Wa(u) || ze(a, "input", u))
                }
            };
            p.xa = Pb(p);
            var t = Th(p, l);
            "gtm.js" !== b && "gtm.sync" !== b || Fh(Pd.B);
            if (!t) return t;
            for (var q = 0; q < p.xa.length; q++)
                if (p.xa[q] && yb[q] && !Sd[String(yb[q][Lb.oa])]) return !0;
            return !1
        };

    function Wh(a, b) {
        if (a) {
            var c = "" + a;
            0 !== c.indexOf("http://") && 0 !== c.indexOf("https://") && (c = "https://" + c);
            "/" === c[c.length - 1] && (c = c.substring(0, c.length - 1));
            return Ue("" + c + b).href
        }
    }

    function Xh(a, b) {
        return Yh() ? Wh(a, b) : void 0
    }

    function Yh() {
        var a = !1;
        return a
    };
    var Zh = function() {
            this.eventModel = {};
            this.targetConfig = {};
            this.containerConfig = {};
            this.h = {};
            this.globalConfig = {};
            this.H = function() {};
            this.F = function() {};
            this.eventId = void 0
        },
        $h = function(a) {
            var b = new Zh;
            b.eventModel = a;
            return b
        },
        ai = function(a, b) {
            a.targetConfig = b;
            return a
        },
        bi = function(a, b) {
            a.containerConfig = b;
            return a
        },
        ci = function(a, b) {
            a.h = b;
            return a
        },
        di = function(a, b) {
            a.globalConfig = b;
            return a
        },
        ei = function(a, b) {
            a.H = b;
            return a
        },
        fi = function(a, b) {
            a.F = b;
            return a
        };
    Zh.prototype.getWithConfig = function(a) {
        if (void 0 !== this.eventModel[a]) return this.eventModel[a];
        if (void 0 !== this.targetConfig[a]) return this.targetConfig[a];
        if (void 0 !== this.containerConfig[a]) return this.containerConfig[a];
        if (void 0 !== this.h[a]) return this.h[a];
        if (void 0 !== this.globalConfig[a]) return this.globalConfig[a]
    };
    var gi = function(a) {
        function b(e) {
            Da(e, function(f) {
                c[f] = null
            })
        }
        var c = {};
        b(a.eventModel);
        b(a.targetConfig);
        b(a.containerConfig);
        b(a.globalConfig);
        var d = [];
        Da(c, function(e) {
            d.push(e)
        });
        return d
    };
    var hi;
    if (3 === Pd.Sb.length) hi = "g";
    else {
        var ii = "G";
        ii = "g";
        hi = ii
    }
    var ji = {
            "": "n",
            UA: "u",
            AW: "a",
            DC: "d",
            G: "e",
            GF: "f",
            HA: "h",
            GTM: hi,
            OPT: "o"
        },
        ki = function(a) {
            var b = Pd.B.split("-"),
                c = b[0].toUpperCase(),
                d = ji[c] || "i",
                e = a && "GTM" === c ? b[1] : "OPT" === c ? b[1] : "",
                f;
            if (3 === Pd.Sb.length) {
                var h = "w";
                h = Hg() ? "s" : "o";
                f = "2" + h
            } else f = "";
            return f + d + Pd.Sb + e
        };
    var li = function(a, b) {
        a.addEventListener && a.addEventListener("message", b, !1)
    };
    var mi = function() {
        return Bc("iPhone") && !Bc("iPod") && !Bc("iPad")
    };
    Bc("Opera");
    Bc("Trident") || Bc("MSIE");
    Bc("Edge");
    !Bc("Gecko") || -1 != yc.toLowerCase().indexOf("webkit") && !Bc("Edge") || Bc("Trident") || Bc("MSIE") || Bc("Edge"); - 1 != yc.toLowerCase().indexOf("webkit") && !Bc("Edge") && Bc("Mobile");
    Bc("Macintosh");
    Bc("Windows");
    Bc("Linux") || Bc("CrOS");
    var ni = na.navigator || null;
    ni && (ni.appVersion || "").indexOf("X11");
    Bc("Android");
    mi();
    Bc("iPad");
    Bc("iPod");
    mi() || Bc("iPad") || Bc("iPod");
    yc.toLowerCase().indexOf("kaios");
    var oi = function(a, b) {
        for (var c = a, d = 0; 50 > d; ++d) {
            var e;
            try {
                e = !(!c.frames || !c.frames[b])
            } catch (k) {
                e = !1
            }
            if (e) return c;
            var f;
            a: {
                try {
                    var h = c.parent;
                    if (h && h != c) {
                        f = h;
                        break a
                    }
                } catch (k) {}
                f = null
            }
            if (!(c = f)) break
        }
        return null
    };
    var pi = function() {};
    var qi = function(a) {
        this.i = a;
        this.h = null;
        this.I = {};
        this.da = 0;
        this.m = null
    };
    ma(qi, pi);
    var si = function(a) {
        return "function" === typeof a.i.__tcfapi || null != ri(a)
    };
    qi.prototype.addEventListener = function(a) {
        ti(this, "addEventListener", function(b, c) {
            var d = c ? b : {};
            d.internalErrorState = void 0 !== d.tcString && "string" !== typeof d.tcString || void 0 !== d.gdprApplies && "boolean" !== typeof d.gdprApplies || void 0 !== d.listenerId && "number" !== typeof d.listenerId || void 0 !== d.addtlConsent && "string" !== typeof d.addtlConsent ? 2 : d.cmpStatus && "error" !== d.cmpStatus ? 0 : 3;
            0 !== d.internalErrorState && (d.tcString = "tcunavailable");
            a(d)
        })
    };
    qi.prototype.removeEventListener = function(a) {
        a && a.listenerId && ti(this, "removeEventListener", null, a.listenerId)
    };
    var vi = function(a, b, c) {
            if (!a.purpose || !a.vendor) return !1;
            var d = ui(a.vendor.consents, void 0 === c ? "755" : c);
            return d && "1" === b && a.purposeOneTreatment && "DE" === a.publisherCC ? !0 : d && ui(a.purpose.consents, b)
        },
        wi = function(a, b, c) {
            var d;
            d = void 0 === d ? "755" : d;
            var e;
            a: {
                if (a.publisher && a.publisher.restrictions) {
                    var f = a.publisher.restrictions[b];
                    if (void 0 !== f) {
                        e = f[void 0 === d ? "755" : d];
                        break a
                    }
                }
                e = void 0
            }
            var h = e;
            if (0 === h) return !1;
            var k = c;
            2 === c ? (k = 0, 2 === h && (k = 1)) : 3 === c && (k = 1, 1 === h && (k = 0));
            return 0 === k ? vi(a, b, d) : 1 === k ?
                a.purpose && a.vendor ? ui(a.purpose.legitimateInterests, b) && ui(a.vendor.legitimateInterests, void 0 === d ? "755" : d) : !1 : !0
        },
        ui = function(a, b) {
            return !(!a || !a[b])
        },
        ti = function(a, b, c, d) {
            c || (c = function() {});
            if ("function" === typeof a.i.__tcfapi) {
                var e = a.i.__tcfapi;
                e(b, 2, c, d)
            } else if (ri(a)) {
                xi(a);
                var f = ++a.da;
                a.I[f] = c;
                if (a.h) {
                    var h = {};
                    a.h.postMessage((h.__tcfapiCall = {
                        command: b,
                        version: 2,
                        callId: f,
                        parameter: d
                    }, h), "*")
                }
            } else c({}, !1)
        },
        ri = function(a) {
            if (a.h) return a.h;
            a.h = oi(a.i, "__tcfapiLocator");
            return a.h
        },
        xi = function(a) {
            a.m ||
                (a.m = function(b) {
                    try {
                        var c, d;
                        "string" === typeof b.data ? d = JSON.parse(b.data) : d = b.data;
                        c = d.__tcfapiReturn;
                        a.I[c.callId](c.returnValue, c.success)
                    } catch (e) {}
                }, li(a.i, a.m))
        };
    var yi = {
        1: 0,
        3: 0,
        4: 0,
        7: 3,
        9: 3,
        10: 3
    };

    function zi(a, b) {
        if ("" === a) return b;
        var c = Number(a);
        return isNaN(c) ? b : c
    }
    var Ai = zi("", 550),
        Bi = zi("", 500);

    function Ci() {
        var a = L.tcf || {};
        return L.tcf = a
    }
    var Di = function(a, b) {
            this.m = a;
            this.h = b;
            this.i = Ja();
        },
        Ei = function(a) {},
        Fi = function(a) {},
        Li = function() {
            var a = Ci(),
                b = new qi(F, 3E3),
                c = new Di(b, a);
            if ((Gi() ? !0 === F.gtag_enable_tcf_support : !1 !== F.gtag_enable_tcf_support) && !a.active && ("function" === typeof F.__tcfapi || si(b))) {
                a.active = !0;
                a.Bb = {};
                Hi();
                var d = setTimeout(function() {
                    Ii(a);
                    Ji(a);
                    d = null
                }, Bi);
                try {
                    b.addEventListener(function(e) {
                            d && (clearTimeout(d), d = null);
                            if (0 !== e.internalErrorState) Ii(a), Ji(a), Ei(c);
                            else {
                                var f;
                                if (!1 === e.gdprApplies) f = Ki(), b.removeEventListener(e);
                                else if ("tcloaded" === e.eventStatus || "useractioncomplete" === e.eventStatus || "cmpuishown" === e.eventStatus) {
                                    var h = {},
                                        k;
                                    for (k in yi) yi.hasOwnProperty(k) && ("1" === k ? h["1"] = !1 === e.gdprApplies || "error" === e.cmpStatus || 0 !== e.internalErrorState || "loaded" === e.cmpStatus && ("tcloaded" === e.eventStatus || "useractioncomplete" === e.eventStatus) ? !1 === e.gdprApplies || "tcunavailable" === e.tcString ? !0 : bd("tcf_restrictions") ? wi(e, "1", 0) : vi(e, "1") : !1 : h[k] = wi(e, k, yi[k]));
                                    f = h
                                }
                                f && (a.tcString = e.tcString || "tcempty", a.Bb = f, Ji(a), Ei(c))
                            }
                        }),
                        Fi(c)
                } catch (e) {
                    d && (clearTimeout(d), d = null), Ii(a), Ji(a)
                }
            }
        };

    function Ii(a) {
        a.type = "e";
        a.tcString = "tcunavailable";
        a.Bb = Ki()
    }

    function Hi() {
        var a = {};
        qd((a.ad_storage = "denied", a.wait_for_update = Ai, a))
    }
    var Gi = function() {
        var a = !1;
        a = !0;
        return a
    };

    function Ki() {
        var a = {},
            b;
        for (b in yi) yi.hasOwnProperty(b) && (a[b] = !0);
        return a
    }

    function Ji(a) {
        var b = {};
        rd((b.ad_storage = a.Bb["1"] ? "granted" : "denied", b))
    }
    var Mi = function() {
            var a = Ci();
            if (a.active && void 0 !== a.loadTime) return Number(a.loadTime)
        },
        Ni = function() {
            var a = Ci();
            return a.active ? a.tcString || "" : ""
        },
        Oi = function(a) {
            if (!yi.hasOwnProperty(String(a))) return !0;
            var b = Ci();
            return b.active && b.Bb ? !!b.Bb[String(a)] : !0
        };

    function Pi(a, b, c) {
        function d(r) {
            var t;
            L.reported_gclid || (L.reported_gclid = {});
            t = L.reported_gclid;
            var q = f + (r ? "gcu" : "gcs");
            if (!t[q]) {
                t[q] = !0;
                var u = [],
                    v = function(B, y) {
                        y && u.push(B + "=" + encodeURIComponent(y))
                    },
                    w = "https://www.google.com";
                if (ld()) {
                    var z = sd(D.o);
                    v("gcs", td());
                    r && v("gcu", "1");
                    v("rnd", n);
                    if ((!f || h && "aw.ds" !== h) && sd(D.o)) {
                        var x = ig("_gcl_aw");
                        v("gclaw", x.join("."))
                    }
                    v("url", String(F.location).split(/[?#]/)[0]);
                    v("dclid", Qi(b, k));
                    !z && b && (w = "https://pagead2.googlesyndication.com")
                }
                v("gdpr_consent", Ni());
                "1" === Sf(!1)._up && v("gtm_up", "1");
                v("gclid", Qi(b, f));
                v("gclsrc", h);
                v("gtm", ki(!c));
                var A = w + "/pagead/landing?" + u.join("&");
                Zc(A)
            }
        }
        var e = lg(),
            f = e.gclid || "",
            h = e.gclsrc,
            k = e.dclid || "",
            l = !a && (!f || h && "aw.ds" !== h ? !1 : !0),
            p = ld();
        if (l || p) {
            var n = "" + kf();
            p ? ud(function() {
                d();
                sd(D.o) || od(function(r) {
                    return d(!0, r.de)
                }, D.o)
            }, [D.o]) : d()
        }
    }

    function Qi(a, b) {
        var c = a && !sd(D.o);
        return b && c ? "0" : b
    }
    var Ri = function(a) {
            var b = Xh(a, "/pagead/conversion_async.js");
            return b ? b : -1 === navigator.userAgent.toLowerCase().indexOf("firefox") ? Q("https://", "http://", "www.googleadservices.com/pagead/conversion_async.js") : "https://www.google.com/pagead/conversion_async.js"
        },
        Si = !1,
        Ti = [],
        Ui = ["aw", "dc"],
        Vi = function(a) {
            var b = F.google_trackConversion,
                c = a.gtm_onFailure;
            "function" == typeof b ? b(a) || c() : c()
        },
        Wi = function() {
            for (; 0 < Ti.length;) Vi(Ti.shift())
        },
        Xi = function(a) {
            if (!Si) {
                Si = !0;
                vh();
                var b = function() {
                    Wi();
                    Ti = {
                        push: Vi
                    }
                };
                Hg() ? b() : Pc(a, b, function() {
                    Wi();
                    Si = !1
                })
            }
        },
        Yi = function(a) {
            if (a) {
                for (var b = [], c = 0; c < a.length; ++c) {
                    var d = a[c];
                    d && b.push({
                        item_id: d.id,
                        quantity: d.quantity,
                        value: d.price,
                        start_date: d.start_date,
                        end_date: d.end_date
                    })
                }
                return b
            }
        },
        Zi = function(a, b, c, d) {
            function e() {
                U("gdpr_consent", Ni());
            }

            function f(R) {
                var N = !0;
                N && Ti.push(O)
            }

            function h() {
                return function(R) {
                    q && (R = Xg(R));
                    return R
                }
            }
            var k = Eg(a),
                l = b == D.ja,
                p = k.C[0],
                n = k.C[1],
                r = void 0 !== n,
                t = function(R) {
                    return d.getWithConfig(R)
                },
                q = void 0 != t(D.N) && !1 !== t(D.N),
                u = !1 !== t(D.hb),
                v = t(D.gb) || t(D.ca),
                w = t(D.Y),
                z = t(D.ba),
                x = t(D.ia),
                A = t(D.Fa),
                B =
                Ri(A);
            Xi(B);
            var y = {
                prefix: v,
                domain: w,
                xb: z,
                flags: x
            };
            if (l) {
                var C = t(D.ka) || {};
                u && ($f(C[D.lb], !!C[D.D]) && qg(Ui, y), ng(y), sg(["aw", "dc"], y));
                t(D.yb) && ug();
                C[D.D] && rg(Ui, C[D.D], C[D.nb], !!C[D.mb], v);
                Tg(k, d);
                Pi(!1, q, a)
            }
            var V = !1 === t(D.Gd) || !1 === t(D.ub);
            if (!l || !r && !V)
                if (!0 === t(D.Zd) && (r = !1), !1 !== t(D.fa) || r) {
                    var O = {
                        google_conversion_id: p,
                        google_remarketing_only: !r,
                        onload_callback: d.H,
                        gtm_onFailure: d.F,
                        google_conversion_format: "3",
                        google_conversion_color: "ffffff",
                        google_conversion_domain: "",
                        google_conversion_label: n,
                        google_conversion_language: t(D.Qa),
                        google_conversion_value: t(D.ra),
                        google_conversion_currency: t(D.qa),
                        google_conversion_order_id: t(D.wb),
                        google_user_id: t(D.zb),
                        google_conversion_page_url: t(D.rb),
                        google_conversion_referrer_url: t(D.tb),
                        google_gtm: ki()
                    };
                    r && (O.google_transport_url = Wh(A, "/"));
                    O.google_restricted_data_processing = t(D.Qc);
                    Hg() && (O.opt_image_generator = function() {
                        return new Image
                    }, O.google_enable_display_cookie_match = !1);
                    !1 === t(D.fa) && (O.google_allow_ad_personalization_signals = !1);
                    O.google_read_gcl_cookie_opt_out = !u;
                    u && v && (O.google_gcl_cookie_prefix = v);
                    var aa = function() {
                        var R = {
                                event: b
                            },
                            N = d.eventModel;
                        if (!N) return null;
                        m(N, R);
                        for (var fa = 0; fa < D.Wd.length; ++fa) delete R[D.Wd[fa]];
                        return R
                    }();
                    aa && (O.google_custom_params = aa);
                    !r && t(D.X) && (O.google_gtag_event_data = {
                        items: t(D.X)
                    });
                    if (r && b == D.Aa) {
                        O.google_conversion_merchant_id = t(D.qe);
                        O.google_basket_feed_country = t(D.ie);
                        O.google_basket_feed_language = t(D.je);
                        O.google_basket_discount = t(D.be);
                        O.google_basket_transaction_type = b;
                        O.google_disable_merchant_reported_conversions = !0 === t(D.ve);
                        Hg() && (O.google_disable_merchant_reported_conversions = !0);
                        var M = Yi(t(D.X));
                        M && (O.google_conversion_items = M)
                    }
                    var K = function(R, N) {
                            void 0 != N && "" !== N && (O.google_additional_conversion_params = O.google_additional_conversion_params || {},
                                O.google_additional_conversion_params[R] = N)
                        },
                        U = function(R, N) {
                            void 0 != N && "" !== N && (O.google_additional_params = O.google_additional_params || {}, O.google_additional_params[R] = N)
                        };
                    "1" === Sf(!1)._up && K("gtm_up", "1");
                    r && (K("vdnc", t(D.Ce)), K("vdltv", t(D.se)));
                    e();
                    O.google_gtm_url_processor = h();
                    (function() {
                        ld() ? ud(function() {
                            e();
                            var R = sd(D.o);
                            if (r) K("gcs", td()), R || A || !q || (O.google_transport_url = "https://pagead2.googlesyndication.com/"), f(R);
                            else if (R) {
                                f(R);
                                return
                            }
                            R || od(function(N) {
                                var fa = N.de;
                                O = m(O);
                                O.google_gtm_url_processor =
                                    h(fa);
                                !A && O.google_transport_url && delete O.google_transport_url;
                                e();
                                r && (K("gcs", td()), K("gcu", "1"));
                                f(!0)
                            }, D.o)
                        }, [D.o]) : f(!0)
                    })()
                }
        };
    var $i = function(a) {
            return !(void 0 === a || null === a || 0 === (a + "").length)
        },
        aj = function(a, b) {
            var c;
            if (2 === b.W) return a("ord", Aa(1E11, 1E13)), !0;
            if (3 === b.W) return a("ord", "1"), a("num", Aa(1E11, 1E13)), !0;
            if (4 === b.W) return $i(b.sessionId) && a("ord", b.sessionId), !0;
            if (5 === b.W) c = "1";
            else if (6 === b.W) c = b.wd;
            else return !1;
            $i(c) && a("qty", c);
            $i(b.Vb) && a("cost", b.Vb);
            $i(b.transactionId) && a("ord", b.transactionId);
            return !0
        },
        cj = function(a, b, c) {
            function d(x, A, B) {
                n.hasOwnProperty(x) || (A = String(A), p.push(";" + x + "=" + (B ? A : bj(A))))
            }
            var e = a.ad,
                f = a.zd,
                h = a.protocol;
            h += f ? "//" + e + ".fls.doubleclick.net/activityi" : "//ad.doubleclick.net/activity";
            var k = ";",
                l = !sd(D.o) && a.Cb;
            l && (h = "https://ade.googlesyndication.com/ddm/activity", k = "/", f = !1);
            var p = [k, "src=" + bj(e), ";type=" + bj(a.dd), ";cat=" + bj(a.jb)],
                n = a.sg || {};
            Da(n, function(x, A) {
                p.push(";" + bj(x) + "=" + bj(A + ""))
            });
            if (aj(d, a)) {
                $i(a.uc) && d("u", a.uc);
                $i(a.sc) && d("tran", a.sc);
                d("gtm", ki());
                ld() && (d("gcs", td()), c && d("gcu", "1"));
                (function(x, A) {
                    A && d(x, A)
                })("gdpr_consent",
                    Ni());
                "1" === Sf(!1)._up && d("gtm_up", "1");
                !1 === a.Vf && d("npa", "1");
                if (a.$c) {
                    var r = void 0 === a.Cb ? !0 : !!a.Cb,
                        t = zg("dc", a.Ra, r);
                    t && t.length && d("gcldc", t.join("."));
                    var q = zg("aw", a.Ra, r);
                    q && q.length && d("gclaw", q.join("."));
                    var u = Ag(r);
                    u && d("gac", u);
                    vf({
                        prefix: a.Ra,
                        xb: a.pg,
                        domain: a.og,
                        flags: a.Th
                    });
                    var v = rf[sf(a.Ra)];
                    v && d("auiddc", v)
                }
                $i(a.sd) && d("prd", a.sd, !0);
                Da(a.Dd, function(x, A) {
                    d(x, A)
                });
                p.push(b || "");
                if ($i(a.bc)) {
                    var w = a.bc || "";
                    l && (w = Ve(w));
                    d("~oref", w)
                }
                var z = h +
                    p.join("") + "?";
                f ? Rc(z, a.H) : Sc(z, a.H, a.F)
            } else I(a.F)
        },
        bj = encodeURIComponent,
        dj = function(a, b) {
            ld() ? ud(function() {
                cj(a, b);
                sd(D.o) || od(function() {
                    cj(a, b, !0)
                }, D.o)
            }, [D.o]) : cj(a, b)
        };
    var ej = function(a, b, c, d) {
            function e() {
                var f = {
                    config: a,
                    gtm: ki()
                };
                c && (vf(d), f.auiddc = rf[sf(d.prefix)]);
                b && (f.loadInsecure = b);
                void 0 === F.__dc_ns_processor && (F.__dc_ns_processor = []);
                F.__dc_ns_processor.push(f);
                Pc((b ? "http" : "https") + "://www.googletagmanager.com/dclk/ns/v1.js")
            }
            sd(D.o) ? e() : od(e, D.o)
        },
        fj = function(a) {
            var b = /^u([1-9]\d?|100)$/,
                c = a.getWithConfig(D.ue) || {},
                d = gi(a),
                e = {},
                f = {};
            if (Va(c))
                for (var h in c)
                    if (c.hasOwnProperty(h) && b.test(h)) {
                        var k = c[h];
                        g(k) && (e[h] = k)
                    }
            for (var l = 0; l < d.length; l++) {
                var p =
                    d[l];
                b.test(p) && (e[p] = p)
            }
            for (var n in e) e.hasOwnProperty(n) && (f[n] = a.getWithConfig(e[n]));
            return f
        },
        gj = function(a) {
            function b(l, p, n) {
                void 0 !== n && 0 !== (n + "").length && d.push(l + p + ":" + c(n + ""))
            }
            var c = encodeURIComponent,
                d = [],
                e = a(D.X) || [];
            if (xa(e))
                for (var f = 0; f < e.length; f++) {
                    var h = e[f],
                        k = f + 1;
                    b("i", k, h.id);
                    b("p", k, h.price);
                    b("q", k, h.quantity);
                    b("c", k, a(D.uf));
                    b("l", k, a(D.Qa))
                }
            return d.join("|")
        },
        hj = function(a) {
            var b = /^DC-(\d+)(\/([\w-]+)\/([\w-]+)\+(\w+))?$/.exec(a);
            if (b) {
                var c = {
                    standard: 2,
                    unique: 3,
                    per_session: 4,
                    transactions: 5,
                    items_sold: 6,
                    "": 1
                }[(b[5] || "").toLowerCase()];
                if (c) return {
                    containerId: "DC-" + b[1],
                    aa: b[3] ? a : "",
                    Pf: b[1],
                    Of: b[3] || "",
                    jb: b[4] || "",
                    W: c
                }
            }
        },
        jj = function(a, b, c, d) {
            var e = hj(a);
            if (e) {
                var f = function(M) {
                        return d.getWithConfig(M)
                    },
                    h = !1 !== f(D.hb),
                    k = f(D.gb) || f(D.ca),
                    l = f(D.Y),
                    p = f(D.ba),
                    n = f(D.ia),
                    r = f(D.yf),
                    t = void 0 != f(D.N) && !1 !== f(D.N),
                    q = 3 === Ig();
                if (b === D.ja) {
                    var x = {
                            prefix: k,
                            domain: l,
                            xb: p,
                            flags: n
                        },
                        A = f(D.ka) || {},
                        B = f(D.yc),
                        y = void 0 === B ? !0 : !!B;
                    h && ($f(A[D.lb], !!A[D.D]) && qg(ij, x), ng(x), sg(ij, x), Bg(y, x));
                    A[D.D] && rg(ij, A[D.D], A[D.nb], !!A[D.mb], k);
                    f(D.yb) && ug();
                    if (r && r.exclusion_parameters && r.engines)
                        if (Hg()) {} else ej(r, q, h, x);
                    Pi(!0, t, a);
                    I(d.H)
                } else {
                    var C = {},
                        G = f(D.vf);
                    if (Va(G))
                        for (var J in G)
                            if (G.hasOwnProperty(J)) {
                                var P =
                                    G[J];
                                void 0 !== P && null !== P && (C[J] = P)
                            }
                    var T = "";
                    if (5 === e.W || 6 === e.W) T = gj(f);
                    var V = fj(d),
                        O = !0 === f(D.nf);
                    if (Hg() && O) {
                        O = !1
                    }
                    var aa = {
                        jb: e.jb,
                        $c: h,
                        og: l,
                        pg: p,
                        Ra: k,
                        Vb: f(D.ra),
                        W: e.W,
                        sg: C,
                        ad: e.Pf,
                        dd: e.Of,
                        F: d.F,
                        H: d.H,
                        bc: Te(Ue(F.location.href)),
                        sd: T,
                        protocol: q ? "http:" : "https:",
                        wd: f(D.Nf),
                        zd: O,
                        sessionId: f(D.Lb),
                        sc: void 0,
                        transactionId: f(D.wb),
                        uc: void 0,
                        Dd: V,
                        Vf: !1 !== f(D.fa),
                        eventId: d.eventId,
                        Cb: t
                    };
                    dj(aa)
                }
            } else I(d.F)
        },
        ij = ["aw", "dc"];

    var lj = function(a) {
            function b() {
                var d = c,
                    e = kj(JSON.stringify(a[d])),
                    f = "https://www.google.com/travel/flights/click/conversion/" + kj(a.conversion_id) + "/?" + d + "=" + e;
                if (a.conversionLinkerEnabled) {
                    var h = zg("gf", a.cookiePrefix, void 0);
                    if (h && h.length)
                        for (var k = 0; k < h.length; k++) f += "&gclgf=" + kj(h[k])
                }
                Sc(f, a.onSuccess, a.onFailure)
            }
            var c;
            if (a.hasOwnProperty("conversion_data")) c = "conversion_data";
            else if (a.hasOwnProperty("price")) c = "price";
            else return;
            sd(D.o) ? b() : od(b, D.o)
        },
        kj = function(a) {
            return null === a || void 0 ===
                a || 0 === String(a).length ? "" : encodeURIComponent(String(a))
        };
    var mj = /.*\.google\.com(:\d+)?\/booking\/flights.*/,
        oj = function(a, b, c, d) {
            var e = function(C) {
                    return d.getWithConfig(C)
                },
                f = Eg(a).C[0],
                h = !1 !== e(D.hb),
                k = e(D.gb) || e(D.ca),
                l = e(D.Y),
                p = e(D.ba),
                n = e(D.ia);
            if (b === D.ja) {
                if (h) {
                    var w = {
                        prefix: k,
                        domain: l,
                        flags: n,
                        xb: p
                    };
                    ng(w);
                    sg(["aw", "dc"], w)
                }
                I(d.H)
            } else {
                var z = {
                        conversion_id: f,
                        onFailure: d.F,
                        onSuccess: d.H,
                        conversionLinkerEnabled: h,
                        cookiePrefix: k
                    },
                    x = mj.test(F.location.href);
                if (b === D.Oa) {
                    var A = {
                        partner_id: f,
                        is_direct_booking: x,
                        total_price: e(D.ra),
                        currency: e(D.qa)
                    };
                    z.price = A;
                    lj(z);
                    return
                }
                if (b !== D.Aa) I(d.F);
                else {
                    var B = {
                            partner_id: f,
                            trip_type: e(D.Wg),
                            total_price: e(D.ra),
                            currency: e(D.qa),
                            is_direct_booking: x,
                            flight_segment: nj(e(D.X))
                        },
                        y = e(D.Kf);
                    y && "object" === typeof y && (B.passengers_total = Ea(y.total), B.passengers_adult = Ea(y.adult), B.passengers_child = Ea(y.child), B.passengers_infant_in_seat = Ea(y.infant_in_seat), B.passengers_infant_in_lap = Ea(y.infant_in_lap));
                    z.conversion_data = B;
                    lj(z)
                }
            }
        },
        nj = function(a) {
            if (a) {
                for (var b = [], c = 0, d = 0; d < a.length; ++d) {
                    var e = a[d];
                    !e || void 0 !== e.category && "" !== e.category && "FlightSegment" !== e.category || (b[c] = {
                        cabin: e.travel_class,
                        fare_product: e.fare_product,
                        booking_code: e.booking_code,
                        flight_number: e.flight_number,
                        origin: e.origin,
                        destination: e.destination,
                        departure_date: e.start_date
                    }, c++)
                }
                return b
            }
        };
    var tj = function(a, b, c, d) {
            function e() {
                Ni() && (B += "&gdpr_consent=" + encodeURIComponent(Ni()));
                if (k) {
                    var G = b === D.Oa ? zg("aw", l, void 0) : zg("ha", l, void 0);
                    B += G.map(function(J) {
                        return "&gclha=" + encodeURIComponent(J)
                    }).join("")
                }
                Sc(B, d.H, d.F)
            }
            var f = Eg(a),
                h = function(G) {
                    return d.getWithConfig(G)
                },
                k = !1 !== h(D.hb),
                l = h(D.gb) || h(D.ca),
                p = h(D.Y),
                n = h(D.ba),
                r = h(D.ia);
            if (b === D.ja) {
                var z = h(D.ka) || {};
                if (k) {
                    var x = {
                        prefix: l,
                        domain: p,
                        flags: r,
                        xb: n
                    };
                    $f(z[D.lb], !!z[D.D]) && qg(pj, x);
                    ng(x);
                    sg(["aw", "dc"], x)
                }
                z[D.D] && rg(pj, z[D.D], z[D.nb], !!z[D.mb], l);
                I(d.H)
            } else {
                var A = f.C[0];
                if (/^\d+$/.test(A)) {
                    var B = "https://www.googletraveladservices.com/travel/clk/pagead/conversion/" +
                        encodeURIComponent(A) + "/";
                    if (b === D.Aa) {
                        var y = qj(h(D.wb), h(D.ra), h(D.qa), h(D.X));
                        y = encodeURIComponent(rj(y));
                        B += "?data=" + y
                    } else if (b === D.Oa) {
                        var C = sj(A, h(D.ra), h(D.Ae), h(D.qa), h(D.X));
                        C = encodeURIComponent(rj(C));
                        B += "?label=FH&guid=ON&script=0&ord=" + Aa(0, 4294967295) + ("&price=" + C)
                    } else {
                        I(d.F);
                        return
                    }
                    sd(D.o) ? e() : od(e, D.o)
                } else I(d.F)
            }
        },
        qj = function(a, b, c, d) {
            var e = {};
            uj(a) && (e.hct_booking_xref = a);
            g(c) && (e.hct_currency_code = c);
            uj(b) && (e.hct_total_price = b, e.hct_base_price = b);
            if (!xa(d) || 0 === d.length) return e;
            var f = d[0];
            if (!Va(f)) return e;
            uj(f[vj.Fc]) && (e.hct_partner_hotel_id = f[vj.Fc]);
            g(f[vj.Rc]) && (e.hct_checkin_date = f[vj.Rc]);
            g(f[vj.Ac]) && (e.hct_checkout_date = f[vj.Ac]);
            return e
        },
        sj = function(a, b, c, d, e) {
            function f(n) {
                void 0 === n && (n = 0);
                if (uj(n)) return l + n
            }

            function h(n, r, t) {
                t(r) && (k[n] = r)
            }
            var k = {};
            k.partner_id = a;
            var l = "USD";
            g(d) && (l = k.currency = d);
            uj(b) && (k.base_price_value_string = f(b), k.display_price_value_string = f(b));
            uj(c) && (k.tax_price_value_string = f(c));
            g("LANDING_PAGE") && (k.page_type = "LANDING_PAGE");
            if (!xa(e) || 0 == e.length) return k;
            var p = e[0];
            if (!Va(p)) return k;
            uj(p[vj.Pd]) && (k.total_price_value_string = f(p[vj.Pd]));
            h("partner_hotel_id", p[vj.Fc], uj);
            h("check_in_date", p[vj.Rc], g);
            h("check_out_date", p[vj.Ac], g);
            h("adults", p[vj.wf], wj);
            h(vj.Rd, p[vj.Rd], g);
            h(vj.Qd, p[vj.Qd], g);
            return k
        },
        rj = function(a) {
            var b = [];
            Da(a, function(c, d) {
                b.push(c + "=" + d)
            });
            return b.join(";")
        },
        uj = function(a) {
            return g(a) || wj(a)
        },
        wj = function(a) {
            return "number" === typeof a
        },
        vj = {
            Fc: "id",
            Pd: "price",
            Rc: "start_date",
            Ac: "end_date",
            wf: "occupancy",
            Rd: "room_id",
            Qd: "rate_rule_id"
        },
        pj = ["ha"];
    var yj = function() {
            var a = !0;
            Oi(7) && Oi(9) && Oi(10) || (a = !1);
            var b = !0;
            b && !xj() && (a = !1);
            return a
        },
        xj = function() {
            var a = !0;
            Oi(3) && Oi(4) || (a = !1);
            return a
        };
    var Bj = function(a, b, c) {
            if (ld()) {
                var d = function() {
                    var e = Ah(),
                        f = zj(a, b, "", c);
                    Aj(b, f.va) && (e(function() {
                        e.remove(b)
                    }), e("create", a, f.va))
                };
                od(d, D.K);
                od(d, D.o)
            }
        },
        Lj = function(a, b, c) {
            var d = "https://www.google-analytics.com/analytics.js",
                e = Ch();
            if (va(e)) {
                var f = "gtag_" + a.split("-").join("_"),
                    h = function(y) {
                        var C = [].slice.call(arguments, 0);
                        C[0] = f + "." + C[0];
                        e.apply(window, C)
                    },
                    k = function() {
                        var y = function(P, T) {
                                for (var V = 0; T && V < T.length; V++) h(P, T[V])
                            },
                            C = Cj(b, c);
                        if (C) {
                            var G = C.action;
                            if ("impressions" === G) y("ec:addImpression",
                                C.Ng);
                            else if ("promo_click" === G || "promo_view" === G) {
                                var J = C.td;
                                y("ec:addPromo", C.td);
                                J && 0 < J.length && "promo_click" === G && h("ec:setAction", G)
                            } else y("ec:addProduct", C.Ua), h("ec:setAction", G, C.ib)
                        }
                    },
                    l = function() {
                        if (Hg()) {} else {
                            var y = c.getWithConfig(D.Jf);
                            y && (h("require", y, {
                                dataLayer: "dataLayer"
                            }), h("require", "render"))
                        }
                    },
                    p = zj(a, f, b, c),
                    n = function(y, C, G) {
                        G && (C = "" + C);
                        p.wa[y] = C
                    };
                Aj(f, p.va) && (e(function() {
                        Ah() && Ah().remove(f)
                    }),
                    Dj[f] = !1);
                e("create", a, p.va);
                if (p.va._x_19) {
                    var r = Xh(p.va._x_19, "/analytics.js");
                    r && (d = r);
                    p.va._x_20 && !Dj[f] && (Dj[f] = !0, e(Gh(f, p.va._x_20)))
                }(function() {
                    var y = c.getWithConfig("custom_map");
                    e(function() {
                        if (Va(y)) {
                            var C = p.wa,
                                G = Ah().getByName(f),
                                J;
                            for (J in y)
                                if (y.hasOwnProperty(J) && /^(dimension|metric)\d+$/.test(J) && void 0 != y[J]) {
                                    var P = G.get(Ej(y[J]));
                                    Fj(C, J, P)
                                }
                        }
                    })
                })();
                (function(y) {
                    if (y) {
                        var C = {};
                        if (Va(y))
                            for (var G in Gj) Gj.hasOwnProperty(G) && Hj(Gj[G], G, y[G], C);
                        h("require", "linkid", C)
                    }
                })(p.linkAttribution);
                var t = p[D.ka];
                if (t && t[D.D]) {
                    var q = t[D.nb];
                    Dh(f + ".", t[D.D], void 0 === q ? !!t.use_anchor : "fragment" === q, !!t[D.mb])
                }
                var u = !1;
                if (b === D.Ec) l(), h("send", "pageview", p.wa);
                else if (b === D.ja) l(), Tg(a, c), c.getWithConfig(D.yb) && ug(), 0 != p.sendPageView && h("send", "pageview", p.wa), Bj(a, f, c);
                else if (u) {} else "screen_view" === b ? h("send", "screenview", p.wa) : "timing_complete" === b ? (n("timingCategory", p.eventCategory, !0), n("timingVar", p.name, !0), n("timingValue", Ea(p.value)), void 0 !== p.eventLabel && n("timingLabel", p.eventLabel, !0), h("send", "timing", p.wa)) : "exception" === b ? h("send",
                    "exception", p.wa) : "optimize.callback" !== b && (0 <= ya([D.Dc, "select_content", D.Oa, D.fc, D.jc, D.eb, "set_checkout_option", D.Aa, D.kc, "view_promotion", "checkout_progress"], b) && (h("require", "ec", "ec.js"), k()), n("eventCategory", p.eventCategory, !0), n("eventAction", p.eventAction || b, !0), void 0 !== p.eventLabel && n("eventLabel", p.eventLabel, !0), void 0 !== p.value && n("eventValue", Ea(p.value)), h("send", "event", p.wa));
                if (!Kj) {
                    Kj = !0;
                    vh();
                    var A = c.F,
                        B = function() {
                            Ah().loaded || A()
                        };
                    Hg() ? I(B) : Pc(d, B, A)
                }
            } else I(c.F)
        },
        Mj = function(a,
            b, c, d) {
            ud(function() {
                Lj(a, b, d)
            }, [D.K, D.o])
        },
        Kj, Dj = {},
        Ij = {
            client_id: 1,
            client_storage: "storage",
            cookie_name: 1,
            cookie_domain: 1,
            cookie_expires: 1,
            cookie_path: 1,
            cookie_update: 1,
            cookie_flags: 1,
            sample_rate: 1,
            site_speed_sample_rate: 1,
            use_amp_client_id: 1,
            store_gac: 1,
            conversion_linker: "storeGac"
        },
        Jj = {
            anonymize_ip: 1,
            app_id: 1,
            app_installer_id: 1,
            app_name: 1,
            app_version: 1,
            campaign: {
                name: "campaignName",
                source: "campaignSource",
                medium: "campaignMedium",
                term: "campaignKeyword",
                content: "campaignContent",
                id: "campaignId"
            },
            currency: "currencyCode",
            description: "exDescription",
            fatal: "exFatal",
            language: 1,
            non_interaction: 1,
            page_hostname: "hostname",
            page_referrer: "referrer",
            page_path: "page",
            page_location: "location",
            page_title: "title",
            screen_name: 1,
            transport_type: "transport",
            user_id: 1
        },
        Nj = {
            content_id: 1,
            event_category: 1,
            event_action: 1,
            event_label: 1,
            link_attribution: 1,
            linker: 1,
            method: 1,
            name: 1,
            send_page_view: 1,
            value: 1
        },
        Gj = {
            cookie_name: 1,
            cookie_expires: "duration",
            levels: 1
        },
        Oj = {
            anonymize_ip: 1,
            fatal: 1,
            non_interaction: 1,
            use_amp_client_id: 1,
            send_page_view: 1,
            store_gac: 1,
            conversion_linker: 1
        },
        Hj = function(a, b, c, d) {
            if (void 0 !== c)
                if (Oj[b] && (c = Fa(c)), "anonymize_ip" !== b || c || (c = void 0), 1 === a) d[Ej(b)] = c;
                else if (g(a)) d[a] = c;
            else
                for (var e in a) a.hasOwnProperty(e) && void 0 !== c[e] && (d[a[e]] = c[e])
        },
        Ej = function(a) {
            return a && g(a) ? a.replace(/(_[a-z])/g, function(b) {
                return b[1].toUpperCase()
            }) : a
        },
        Pj = function(a) {
            var b = "general";
            0 <= ya([D.Xd, D.fc, D.Yd, D.eb, "checkout_progress", D.Aa, D.kc, D.jc, "set_checkout_option"], a) ? b = "ecommerce" : 0 <= ya("generate_lead login search select_content share sign_up view_item view_item_list view_promotion view_search_results".split(" "),
                a) ? b = "engagement" : "exception" === a && (b = "error");
            return b
        },
        Fj = function(a, b, c) {
            a.hasOwnProperty(b) || (a[b] = c)
        },
        Qj = function(a) {
            if (xa(a)) {
                for (var b = [], c = 0; c < a.length; c++) {
                    var d = a[c];
                    if (void 0 != d) {
                        var e = d.id,
                            f = d.variant;
                        void 0 != e && void 0 != f && b.push(String(e) + "." + String(f))
                    }
                }
                return 0 < b.length ? b.join("!") : void 0
            }
        },
        zj = function(a, b, c, d) {
            function e(G, J) {
                void 0 !== J && (k[G] = J)
            }
            var f = function(G) {
                    return d.getWithConfig(G)
                },
                h = {},
                k = {},
                l = {},
                p = Qj(f(D.Ef));
            p && Fj(k, "exp", p);
            var n = f("custom_map");
            if (Va(n))
                for (var r in n)
                    if (n.hasOwnProperty(r) &&
                        /^(dimension|metric)\d+$/.test(r) && void 0 != n[r]) {
                        var t = f(String(n[r]));
                        void 0 !== t && Fj(k, r, t)
                    }
            for (var q = gi(d), u = 0; u < q.length; ++u) {
                var v = q[u],
                    w = f(v);
                if (Nj.hasOwnProperty(v)) Hj(Nj[v], v, w, h);
                else if (Jj.hasOwnProperty(v)) Hj(Jj[v], v, w, k);
                else if (Ij.hasOwnProperty(v)) Hj(Ij[v], v, w, l);
                else if (/^(dimension|metric|content_group)\d+$/.test(v)) Hj(1, v, w, k);
                else if ("developer_id" === v) {
                    var z = Qa(w);
                    z && (k["&did"] = z)
                } else v === D.ca && 0 > ya(q, D.xc) && (l.cookieName = w + "_ga")
            }
            Fj(l, "cookieDomain", "auto");
            Fj(k, "forceSSL", !0);
            Fj(h, "eventCategory", Pj(c));
            0 <= ya(["view_item", "view_item_list", "view_promotion", "view_search_results"], c) && Fj(k, "nonInteraction", !0);
            "login" === c || "sign_up" === c || "share" === c ? Fj(h, "eventLabel", f(D.If)) : "search" === c || "view_search_results" === c ? Fj(h, "eventLabel", f(D.zg)) : "select_content" === c && Fj(h, "eventLabel", f(D.rf));
            var x = h[D.ka] || {},
                A = x[D.lb];
            A || 0 != A && x[D.D] ? l.allowLinker = !0 : !1 === A && Fj(l, "useAmpClientId", !1);
            !1 !== f(D.pf) && !1 !== f(D.fb) && yj() || (k.allowAdFeatures = !1);
            if (!1 === f(D.fa) || !xj()) {
                var B = "allowAdFeatures";
                k[B] = !1
            }
            l.name = b;
            k["&gtm"] = ki(!0);
            k.hitCallback = d.H;
            ld() && (k["&gcs"] = td(), sd(D.K) || (l.storage = "none"), sd(D.o) || (k.allowAdFeatures = !1, l.storeGac = !1));
            var y = f(D.Fa) || f(D.Hf) || Fe("gtag.remote_config." + a + ".url", 2),
                C = f(D.Gf) || Fe("gtag.remote_config." +
                    a + ".dualId", 2);
            if (y && null != Mc) {
                l._x_19 = y;
            }
            C && (l._x_20 = C);
            h.wa = k;
            h.va = l;
            return h
        },
        Cj = function(a, b) {
            function c(v) {
                var w = m(v);
                w.list = v.list_name;
                w.listPosition = v.list_position;
                w.position = v.list_position || v.creative_slot;
                w.creative = v.creative_name;
                return w
            }

            function d(v) {
                for (var w = [], z = 0; v && z < v.length; z++) v[z] && w.push(c(v[z]));
                return w.length ? w : void 0
            }

            function e(v) {
                return {
                    id: f(D.wb),
                    affiliation: f(D.zf),
                    revenue: f(D.ra),
                    tax: f(D.Ae),
                    shipping: f(D.Df),
                    coupon: f(D.Af),
                    list: f(D.Ic) || v
                }
            }
            for (var f = function(v) {
                    return b.getWithConfig(v)
                }, h = f(D.X), k, l = 0; h && l < h.length && !(k = h[l][D.Ic]); l++);
            var p = f("custom_map");
            if (Va(p))
                for (var n = 0; h && n < h.length; ++n) {
                    var r = h[n],
                        t;
                    for (t in p) p.hasOwnProperty(t) && /^(dimension|metric)\d+$/.test(t) && void 0 != p[t] && Fj(r, t, r[p[t]])
                }
            var q = null,
                u = f(D.Bf);
            a === D.Aa || a === D.kc ? q = {
                    action: a,
                    ib: e(),
                    Ua: d(h)
                } : a === D.fc ? q = {
                    action: "add",
                    Ua: d(h)
                } : a === D.jc ? q = {
                    action: "remove",
                    Ua: d(h)
                } :
                a === D.Oa ? q = {
                    action: "detail",
                    ib: e(k),
                    Ua: d(h)
                } : a === D.Dc ? q = {
                    action: "impressions",
                    Ng: d(h)
                } : "view_promotion" === a ? q = {
                    action: "promo_view",
                    td: d(u)
                } : "select_content" === a && u && 0 < u.length ? q = {
                    action: "promo_click",
                    td: d(u)
                } : "select_content" === a ? q = {
                    action: "click",
                    ib: {
                        list: f(D.Ic) || k
                    },
                    Ua: d(h)
                } : a === D.eb || "checkout_progress" === a ? q = {
                    action: "checkout",
                    Ua: d(h),
                    ib: {
                        step: a === D.eb ? 1 : f(D.ye),
                        option: f(D.we)
                    }
                } : "set_checkout_option" === a && (q = {
                    action: "checkout_option",
                    ib: {
                        step: f(D.ye),
                        option: f(D.we)
                    }
                });
            q && (q.Uh = f(D.qa));
            return q
        },
        Rj = {},
        Aj = function(a, b) {
            var c = Rj[a];
            Rj[a] = m(b);
            if (!c) return !1;
            for (var d in b)
                if (b.hasOwnProperty(d) && b[d] !== c[d]) return !0;
            for (var e in c)
                if (c.hasOwnProperty(e) && c[e] !== b[e]) return !0;
            return !1
        };

    function Sj() {
        var a = L;
        return a.gcq = a.gcq || new Tj
    }
    var Uj = function(a, b, c) {
            Sj().register(a, b, c)
        },
        Vj = function(a, b, c, d) {
            Sj().push("event", [b, a], c, d)
        },
        Wj = function(a, b) {
            Sj().push("config", [a], b)
        },
        Xj = function(a, b, c) {
            Sj().push("get", [a, b], c)
        },
        Yj = {},
        Zj = function() {
            this.status = 1;
            this.containerConfig = {};
            this.targetConfig = {};
            this.i = {};
            this.m = null;
            this.h = !1
        },
        ak = function(a, b, c, d, e) {
            this.type = a;
            this.m = b;
            this.aa = c || "";
            this.h = d;
            this.i = e
        },
        Tj = function() {
            this.m = {};
            this.i = {};
            this.h = []
        },
        bk = function(a, b) {
            var c = Eg(b);
            return a.m[c.containerId] = a.m[c.containerId] || new Zj
        },
        ck = function(a, b, c) {
            if (b) {
                var d = Eg(b);
                if (d && 1 === bk(a, b).status) {
                    bk(a, b).status = 2;
                    var e = {};
                    ue && (e.timeoutId = F.setTimeout(function() {
                        E(38);
                        ge()
                    }, 3E3));
                    a.push("require", [e], d.containerId);
                    Yj[d.containerId] = Ja();
                    if (Hg()) {} else {
                        var h = "/gtag/js?id=" +
                            encodeURIComponent(d.containerId) + "&l=dataLayer&cx=c",
                            k = ("http:" != F.location.protocol ? "https:" : "http:") + ("//www.googletagmanager.com" + h),
                            l = Xh(c, h) || k;
                        Pc(l)
                    }
                }
            }
        },
        dk = function(a, b, c, d) {
            if (d.aa) {
                var e = bk(a, d.aa),
                    f = e.m;
                if (f) {
                    var h = m(c),
                        k = m(e.targetConfig[d.aa]),
                        l = m(e.containerConfig),
                        p = m(e.i),
                        n = m(a.i),
                        r = Fe("gtm.uniqueEventId"),
                        t = Eg(d.aa).prefix,
                        q = fi(ei(di(ci(bi(ai($h(h), k), l), p), n), function() {
                            ye(r, t, "2");
                        }), function() {
                            ye(r, t, "3");
                        });
                    try {
                        ye(r, t, "1");
                        f(d.aa, b, d.m, q)
                    } catch (u) {
                        ye(r, t, "4");
                    }
                }
            }
        };
    Tj.prototype.register = function(a, b, c) {
        if (3 !== bk(this, a).status) {
            bk(this, a).m = b;
            bk(this, a).status = 3;
            c && (bk(this, a).i = c);
            var d = Eg(a),
                e = Yj[d.containerId];
            if (void 0 !== e) {
                var f = L[d.containerId].bootstrap,
                    h = d.prefix.toUpperCase();
                L[d.containerId]._spx && (h = h.toLowerCase());
                var k = Fe("gtm.uniqueEventId"),
                    l = h,
                    p = Ja() - f;
                if (ue && !le[k]) {
                    k !== he && (de(), he = k);
                    var n = l + "." + Math.floor(f - e) + "." + Math.floor(p);
                    pe = pe ? pe + "," + n : "&cl=" + n
                }
                delete Yj[d.containerId]
            }
            this.flush()
        }
    };
    Tj.prototype.push = function(a, b, c, d) {
        var e = Math.floor(Ja() / 1E3);
        ck(this, c, b[0][D.Fa] || this.i[D.Fa]);
        this.h.push(new ak(a, e, c, b, d));
        d || this.flush()
    };
    Tj.prototype.flush = function(a) {
        for (var b = this; this.h.length;) {
            var c = this.h[0];
            if (c.i) c.i = !1, this.h.push(c);
            else switch (c.type) {
                case "require":
                    if (3 !== bk(this, c.aa).status && !a) return;
                    ue && F.clearTimeout(c.h[0].timeoutId);
                    break;
                case "set":
                    Da(c.h[0], function(n, r) {
                        m(Pa(n, r), b.i)
                    });
                    break;
                case "config":
                    var d = c.h[0],
                        e = !!d[D.Mb];
                    delete d[D.Mb];
                    var f = bk(this, c.aa),
                        h = Eg(c.aa),
                        k = h.containerId === h.id;
                    e || (k ? f.containerConfig = {} : f.targetConfig[c.aa] = {});
                    f.h && e || dk(this, D.ja, d, c);
                    f.h = !0;
                    delete d[D.Ya];
                    k ? m(d, f.containerConfig) :
                        m(d, f.targetConfig[c.aa]);
                    break;
                case "event":
                    dk(this, c.h[1], c.h[0], c);
                    break;
                case "get":
            }
            this.h.shift()
        }
    };
    var ek = !1,
        fk = [];

    function gk() {
        if (!ek) {
            ek = !0;
            for (var a = 0; a < fk.length; a++) I(fk[a])
        }
    }
    var hk = function(a) {
        ek ? I(a) : fk.push(a)
    };
    var ik = "HA GF G UA AW DC".split(" "),
        jk = !1,
        kk = {},
        lk = !1;

    function mk(a, b) {
        var c = {
            event: a
        };
        b && (c.eventModel = m(b), b[D.Bc] && (c.eventCallback = b[D.Bc]), b[D.Nb] && (c.eventTimeout = b[D.Nb]));
        return c
    }

    function nk() {
        jk = jk || !L.gtagRegistered, L.gtagRegistered = !0, jk && (L.addTargetToGroup = function(a) {
            ok(a, "default")
        });
        return jk
    }
    var pk = function(a) {
            Da(kk, function(b, c) {
                var d = ya(c, a);
                0 <= d && c.splice(d, 1)
            })
        },
        ok = function(a, b) {
            b = b.toString().split(",");
            for (var c = 0; c < b.length; c++) kk[b[c]] = kk[b[c]] || [], kk[b[c]].push(a)
        };
    var qk = {
        config: function(a) {
            var b = a[2] || {};
            if (2 > a.length || !g(a[1]) || !Va(b)) return;
            var c = Eg(a[1]);
            if (!c) return;
            pk(c.id);
            ok(c.id, b[D.Mc] || "default");
            delete b[D.Mc];
            lk || E(43);
            ae();
            if (nk() && -1 !== ya(ik, c.prefix)) {
                "G" === c.prefix && (b[D.Ya] = !0);
                Wj(b, c.id);
                return
            }
            Ie("gtag.targets." + c.id, void 0);
            Ie("gtag.targets." + c.id, m(b));
            var d = {};
            d[D.Ea] = c.id;
            return mk(D.ja, d);
        },
        event: function(a) {
            var b = a[1];
            if (g(b) && !(3 < a.length)) {
                var c;
                if (2 < a.length) {
                    if (!Va(a[2]) &&
                        void 0 != a[2]) return;
                    c = a[2]
                }
                var d = mk(b, c);
                var e;
                var f = c && c[D.Ea];
                void 0 === f && (f = Fe(D.Ea, 2), void 0 === f && (f = "default"));
                if (g(f) || xa(f)) {
                    for (var h = f.toString().replace(/\s+/g, "").split(","), k = [], l = 0; l < h.length; l++) 0 <= h[l].indexOf("-") ? k.push(h[l]) : k = k.concat(kk[h[l]] || []);
                    e = Gg(k)
                } else e = void 0;
                var p = e;
                if (!p) return;
                var n = nk();
                ae();
                for (var r = [], t = 0; n && t < p.length; t++) {
                    var q = p[t];
                    if (-1 !== ya(ik, q.prefix)) {
                        var u = m(c);
                        "G" === q.prefix && (u[D.Ya] = !0);
                        Vj(b, u, q.id)
                    }
                    r.push(q.id)
                }
                d.eventModel =
                    d.eventModel || {};
                0 < p.length ? d.eventModel[D.Ea] = r.join() : delete d.eventModel[D.Ea];
                lk || E(43);
                return d
            }
        },
        js: function(a) {
            if (2 == a.length && a[1].getTime) return lk = !0, nk(), {
                event: "gtm.js",
                "gtm.start": a[1].getTime()
            }
        },
        policy: function() {},
        set: function(a) {
            var b;
            2 == a.length && Va(a[1]) ? b = m(a[1]) : 3 == a.length && g(a[1]) && (b = {}, Va(a[2]) || xa(a[2]) ? b[a[1]] = m(a[2]) : b[a[1]] = a[2]);
            if (b) {
                if (ae(), nk()) {
                    m(b);
                    var c = m(b);
                    Sj().push("set", [c])
                }
                b._clear = !0;
                return b
            }
        },
        consent: function(a) {
            function b() {
                nk() && m(a[2], {
                    subcommand: a[1]
                })
            }
            if (3 === a.length) {
                E(39);
                var c = ae(),
                    d = a[1];
                "default" === d ? (b(), qd(a[2])) : "update" === d && (b(), rd(a[2], c))
            }
        }
    };
    var rk = {
        policy: !0
    };
    var sk = function(a, b) {
            var c = a.hide;
            if (c && void 0 !== c[b] && c.end) {
                c[b] = !1;
                var d = !0,
                    e;
                for (e in c)
                    if (c.hasOwnProperty(e) && !0 === c[e]) {
                        d = !1;
                        break
                    }
                d && (c.end(), c.end = null)
            }
        },
        uk = function(a) {
            var b = tk(),
                c = b && b.hide;
            c && c.end && (c[a] = !0)
        };
    var Mk = function(a) {
        if (Kk(a)) return a;
        this.h = a
    };
    Mk.prototype.Ig = function() {
        return this.h
    };
    var Kk = function(a) {
        return !a || "object" !== Sa(a) || Va(a) ? !1 : "getUntrustedUpdateValue" in a
    };
    Mk.prototype.getUntrustedUpdateValue = Mk.prototype.Ig;
    var Nk = [],
        Ok = !1,
        Pk = function(a) {
            return F["dataLayer"].push(a)
        },
        Qk = function(a) {
            var b = L["dataLayer"],
                c = b ? b.subscribers : 1,
                d = 0;
            return function() {
                ++d === c && a()
            }
        };

    function Rk(a) {
        var b = a._clear;
        Da(a, function(f, h) {
            "_clear" !== f && (b && Ie(f, void 0), Ie(f, h))
        });
        Wd || (Wd = a["gtm.start"]);
        var c = a.event,
            d = a["gtm.uniqueEventId"];
        if (!c) return !1;
        d || (d = ae(), a["gtm.uniqueEventId"] = d, Ie("gtm.uniqueEventId", d));
        var e = Vh(a["gtm.uniqueEventId"], a.event, a.eventCallback, a.eventTimeout) ? !0 : !1;
        switch (c) {
            case "gtm.init":
                E(19), e && E(20)
        }
        return e
    }

    function Sk() {
        for (var a = !1; !Ok && 0 < Nk.length;) {
            Ok = !0;
            delete Ce.eventModel;
            Ee();
            var b = Nk.shift();
            if (null != b) {
                var c = Kk(b);
                if (c) {
                    var d = b;
                    b = Kk(d) ? d.getUntrustedUpdateValue() : void 0;
                    for (var e = ["gtm.allowlist", "gtm.blocklist", "gtm.whitelist", "gtm.blacklist", "tagTypeBlacklist"], f = 0; f < e.length; f++) {
                        var h = e[f],
                            k = Fe(h, 1);
                        if (xa(k) || Va(k)) k = m(k);
                        De[h] = k
                    }
                }
                try {
                    if (va(b)) try {
                        b.call(Ge)
                    } catch (w) {} else if (xa(b)) {
                        var l =
                            b;
                        if (g(l[0])) {
                            var p = l[0].split("."),
                                n = p.pop(),
                                r = l.slice(1),
                                t = Fe(p.join("."), 2);
                            if (void 0 !== t && null !== t) try {
                                t[n].apply(t, r)
                            } catch (w) {}
                        }
                    } else {
                        var q = b;
                        if (q && ("[object Arguments]" == Object.prototype.toString.call(q) || Object.prototype.hasOwnProperty.call(q, "callee"))) {
                            a: {
                                var u = b;
                                if (u.length && g(u[0])) {
                                    var v = qk[u[0]];
                                    if (v && (!c || !rk[u[0]])) {
                                        b = v(u);
                                        break a
                                    }
                                }
                                b = void 0
                            }
                            if (!b) {
                                Ok = !1;
                                continue
                            }
                        }
                        a = Rk(b) || a
                    }
                } finally {
                    c && Ee(!0)
                }
            }
            Ok = !1
        }
        return !a
    }

    function Tk() {
        var a = Sk();
        try {
            sk(F["dataLayer"], Pd.B)
        } catch (b) {}
        return a
    }
    var Vk = function() {
            var a = Nc("dataLayer", []),
                b = Nc("google_tag_manager", {});
            b = b["dataLayer"] = b["dataLayer"] || {};
            mh(function() {
                b.gtmDom || (b.gtmDom = !0, a.push({
                    event: "gtm.dom"
                }))
            });
            hk(function() {
                b.gtmLoad || (b.gtmLoad = !0, a.push({
                    event: "gtm.load"
                }))
            });
            b.subscribers = (b.subscribers || 0) + 1;
            var c = a.push;
            a.push = function() {
                var e;
                if (0 < L.SANDBOXED_JS_SEMAPHORE) {
                    e = [];
                    for (var f = 0; f < arguments.length; f++) e[f] = new Mk(arguments[f])
                } else e = [].slice.call(arguments, 0);
                var h = c.apply(a, e);
                Nk.push.apply(Nk, e);
                if (300 <
                    this.length)
                    for (E(4); 300 < this.length;) this.shift();
                var k = "boolean" !== typeof h || h;
                return Sk() && k
            };
            var d = a.slice(0);
            Nk.push.apply(Nk, d);
            Uk() && I(Tk)
        },
        Uk = function() {
            var a = !0;
            return a
        };
    var Wk = {};
    Wk.Ob = new String("undefined");
    var Xk = function(a) {
        this.h = function(b) {
            for (var c = [], d = 0; d < a.length; d++) c.push(a[d] === Wk.Ob ? b : a[d]);
            return c.join("")
        }
    };
    Xk.prototype.toString = function() {
        return this.h("undefined")
    };
    Xk.prototype.valueOf = Xk.prototype.toString;
    Wk.Ff = Xk;
    Wk.Pc = {};
    Wk.qg = function(a) {
        return new Xk(a)
    };
    var Yk = {};
    Wk.wh = function(a, b) {
        var c = ae();
        Yk[c] = [a, b];
        return c
    };
    Wk.fe = function(a) {
        var b = a ? 0 : 1;
        return function(c) {
            var d = Yk[c];
            if (d && "function" === typeof d[b]) d[b]();
            Yk[c] = void 0
        }
    };
    Wk.Sg = function(a) {
        for (var b = !1, c = !1, d = 2; d < a.length; d++) b =
            b || 8 === a[d], c = c || 16 === a[d];
        return b && c
    };
    Wk.oh = function(a) {
        if (a === Wk.Ob) return a;
        var b = ae();
        Wk.Pc[b] = a;
        return 'google_tag_manager["' + Pd.B + '"].macro(' + b + ")"
    };
    Wk.fh = function(a, b, c) {
        a instanceof Wk.Ff && (a = a.h(Wk.wh(b, c)), b = ua);
        return {
            fd: a,
            H: b
        }
    };
    var Zk = function(a, b, c) {
            function d(f, h) {
                var k = f[h];
                return k
            }
            var e = {
                event: b,
                "gtm.element": a,
                "gtm.elementClasses": d(a, "className"),
                "gtm.elementId": a["for"] || Vc(a, "id") || "",
                "gtm.elementTarget": a.formTarget || d(a, "target") || ""
            };
            c && (e["gtm.triggers"] = c.join(","));
            e["gtm.elementUrl"] = (a.attributes && a.attributes.formaction ? a.formAction : "") || a.action || d(a, "href") || a.src || a.code || a.codebase ||
                "";
            return e
        },
        $k = function(a) {
            L.hasOwnProperty("autoEventsSettings") || (L.autoEventsSettings = {});
            var b = L.autoEventsSettings;
            b.hasOwnProperty(a) || (b[a] = {});
            return b[a]
        },
        al = function(a, b, c) {
            $k(a)[b] = c
        },
        bl = function(a, b, c, d) {
            var e = $k(a),
                f = Ka(e, b, d);
            e[b] = c(f)
        },
        cl = function(a, b, c) {
            var d = $k(a);
            return Ka(d, b, c)
        };
    var dl = ["input", "select", "textarea"],
        el = ["button", "hidden", "image", "reset", "submit"],
        fl = function(a) {
            var b = a.tagName.toLowerCase();
            return !za(dl, function(c) {
                return c === b
            }) || "input" === b && za(el, function(c) {
                return c === a.type.toLowerCase()
            }) ? !1 : !0
        },
        gl = function(a) {
            return a.form ? a.form.tagName ? a.form : H.getElementById(a.form) : Yc(a, ["form"], 100)
        },
        hl = function(a, b, c) {
            if (!a.elements) return 0;
            for (var d = b.getAttribute(c), e = 0, f = 1; e < a.elements.length; e++) {
                var h = a.elements[e];
                if (fl(h)) {
                    if (h.getAttribute(c) === d) return f;
                    f++
                }
            }
            return 0
        };
    var il = !!F.MutationObserver,
        jl = void 0,
        kl = function(a) {
            if (!jl) {
                var b = function() {
                    var c = H.body;
                    if (c)
                        if (il)(new MutationObserver(function() {
                            for (var e = 0; e < jl.length; e++) I(jl[e])
                        })).observe(c, {
                            childList: !0,
                            subtree: !0
                        });
                        else {
                            var d = !1;
                            Tc(c, "DOMNodeInserted", function() {
                                d || (d = !0, I(function() {
                                    d = !1;
                                    for (var e = 0; e < jl.length; e++) I(jl[e])
                                }))
                            })
                        }
                };
                jl = [];
                H.body ? b() : I(b)
            }
            jl.push(a)
        };
    var Fl = F.clearTimeout,
        Gl = F.setTimeout,
        W = function(a, b, c) {
            if (Hg()) {
                b && I(b)
            } else return Pc(a, b, c)
        },
        Hl = function() {
            return new Date
        },
        Il = function() {
            return F.location.href
        },
        Jl = function(a) {
            return Se(Ue(a), "fragment")
        },
        Kl = function(a) {
            return Te(Ue(a))
        },
        Ll = function(a, b) {
            return Fe(a, b || 2)
        },
        Ml = function(a, b, c) {
            var d;
            b ? (a.eventCallback = b, c && (a.eventTimeout = c), d = Pk(a)) : d = Pk(a);
            return d
        },
        Nl = function(a, b) {
            F[a] = b
        },
        X = function(a, b, c) {
            b &&
                (void 0 === F[a] || c && !F[a]) && (F[a] = b);
            return F[a]
        },
        Ol = function(a, b, c) {
            return Ye(a, b, void 0 === c ? !0 : !!c)
        },
        Pl = function(a, b, c) {
            return 0 === gf(a, b, c)
        },
        Ql = function(a, b) {
            if (Hg()) {
                b && I(b)
            } else Rc(a, b)
        },
        Rl = function(a) {
            return !!cl(a, "init", !1)
        },
        Sl = function(a) {
            al(a, "init", !0)
        },
        Tl = function(a, b) {
            var c = (void 0 === b ? 0 : b) ? "www.googletagmanager.com/gtag/js" : Vd;
            c += "?id=" + encodeURIComponent(a) + "&l=dataLayer";
            W(Q("https://", "http://", c))
        },
        Ul = function(a,
            b) {
            var c = a[b];
            return c
        },
        Vl = function(a, b, c) {
            ue && (Wa(a) || ze(c, b, a))
        };
    var Wl = Wk.fh;

    function sm(a, b) {
        a = String(a);
        b = String(b);
        var c = a.length - b.length;
        return 0 <= c && a.indexOf(b, c) == c
    }
    var tm = new Ba;

    function um(a, b) {
        function c(h) {
            var k = Ue(h),
                l = Se(k, "protocol"),
                p = Se(k, "host", !0),
                n = Se(k, "port"),
                r = Se(k, "path").toLowerCase().replace(/\/$/, "");
            if (void 0 === l || "http" == l && "80" == n || "https" == l && "443" == n) l = "web", n = "default";
            return [l, p, n, r]
        }
        for (var d = c(String(a)), e = c(String(b)), f = 0; f < d.length; f++)
            if (d[f] !== e[f]) return !1;
        return !0
    }

    function vm(a) {
        return wm(a) ? 1 : 0
    }

    function wm(a) {
        var b = a.arg0,
            c = a.arg1;
        if (a.any_of && xa(c)) {
            for (var d = 0; d < c.length; d++) {
                var e = m(a, {});
                m({
                    arg1: c[d],
                    any_of: void 0
                }, e);
                if (vm(e)) return !0
            }
            return !1
        }
        switch (a["function"]) {
            case "_cn":
                return 0 <= String(b).indexOf(String(c));
            case "_css":
                var f;
                a: {
                    if (b) {
                        var h = ["matches", "webkitMatchesSelector", "mozMatchesSelector", "msMatchesSelector", "oMatchesSelector"];
                        try {
                            for (var k = 0; k < h.length; k++)
                                if (b[h[k]]) {
                                    f = b[h[k]](c);
                                    break a
                                }
                        } catch (q) {}
                    }
                    f = !1
                }
                return f;
            case "_ew":
                return sm(b, c);
            case "_eq":
                return String(b) ==
                    String(c);
            case "_ge":
                return Number(b) >= Number(c);
            case "_gt":
                return Number(b) > Number(c);
            case "_lc":
                var l;
                l = String(b).split(",");
                return 0 <= ya(l, String(c));
            case "_le":
                return Number(b) <= Number(c);
            case "_lt":
                return Number(b) < Number(c);
            case "_re":
                var p;
                var n = a.ignore_case ? "i" : void 0;
                try {
                    var r = String(c) + n,
                        t = tm.get(r);
                    t || (t = new RegExp(c, n), tm.set(r, t));
                    p = t.test(b)
                } catch (q) {
                    p = !1
                }
                return p;
            case "_sw":
                return 0 == String(b).indexOf(String(c));
            case "_um":
                return um(b, c)
        }
        return !1
    };
    var xm = {},
        ym = encodeURI,
        Y = encodeURIComponent,
        zm = Sc;
    var Am = function(a, b) {
        if (!a) return !1;
        var c = Se(Ue(a), "host");
        if (!c) return !1;
        for (var d = 0; b && d < b.length; d++) {
            var e = b[d] && b[d].toLowerCase();
            if (e) {
                var f = c.length - e.length;
                0 < f && "." != e.charAt(0) && (f--, e = "." + e);
                if (0 <= f && c.indexOf(e, f) == f) return !0
            }
        }
        return !1
    };
    var Bm = function(a, b, c) {
        for (var d = {}, e = !1, f = 0; a && f < a.length; f++) a[f] && a[f].hasOwnProperty(b) && a[f].hasOwnProperty(c) && (d[a[f][b]] = a[f][c], e = !0);
        return e ? d : null
    };
    xm.Tg = function() {
        var a = !1;
        return a
    };

    function ao() {
        return F.gaGlobal = F.gaGlobal || {}
    }
    var bo = function() {
            var a = ao();
            a.hid = a.hid || Aa();
            return a.hid
        },
        co = function(a, b) {
            var c = ao();
            if (void 0 == c.vid || b && !c.from_cookie) c.vid = a, c.from_cookie = b
        };
    var mo = window,
        no = document,
        oo = function(a) {
            var b = mo._gaUserPrefs;
            if (b && b.ioo && b.ioo() || a && !0 === mo["ga-disable-" + a]) return !0;
            try {
                var c = mo.external;
                if (c && c._gaUserPrefs && "oo" == c._gaUserPrefs) return !0
            } catch (f) {}
            for (var d = We("AMP_TOKEN", String(no.cookie), !0), e = 0; e < d.length; e++)
                if ("$OPT_OUT" == d[e]) return !0;
            return no.getElementById("__gaOptOutExtension") ? !0 : !1
        };

    function ro(a) {
        delete a.eventModel[D.Ya];
        to(a.eventModel)
    }
    var to = function(a) {
        Da(a, function(c) {
            "_" === c.charAt(0) && delete a[c]
        });
        var b = a[D.la] || {};
        Da(b, function(c) {
            "_" === c.charAt(0) && delete b[c]
        })
    };
    var wo = function(a, b, c) {
            Vj(b, c, a)
        },
        xo = function(a, b, c) {
            Vj(b, c, a, !0)
        },
        zo = function(a, b) {};

    function yo(a, b) {}
    var Z = {
        a: {}
    };

    Z.a.gtagha = ["google"],
        function() {
            (function(a) {
                Z.__gtagha = a;
                Z.__gtagha.b = "gtagha";
                Z.__gtagha.g = !0;
                Z.__gtagha.priorityOverride = 0
            })(function(a) {
                I(a.vtp_gtmOnSuccess)
            })
        }();

    Z.a.e = ["google"],
        function() {
            (function(a) {
                Z.__e = a;
                Z.__e.b = "e";
                Z.__e.g = !0;
                Z.__e.priorityOverride = 0
            })(function(a) {
                return String(Ke(a.vtp_gtmEventId, "event"))
            })
        }();

    Z.a.v = ["google"],
        function() {
            (function(a) {
                Z.__v = a;
                Z.__v.b = "v";
                Z.__v.g = !0;
                Z.__v.priorityOverride = 0
            })(function(a) {
                var b = a.vtp_name;
                if (!b || !b.replace) return !1;
                var c = Ll(b.replace(/\\\./g, "."), a.vtp_dataLayerVersion || 1),
                    d = void 0 !== c ? c : a.vtp_defaultValue;
                Vl(d, "v", a.vtp_gtmEventId);
                return d
            })
        }();
    Z.a.rep = ["google"],
        function() {
            (function(a) {
                Z.__rep = a;
                Z.__rep.b = "rep";
                Z.__rep.g = !0;
                Z.__rep.priorityOverride = 0
            })(function(a) {
                var b;
                switch (Eg(a.vtp_containerId).prefix) {
                    case "AW":
                        b = Zi;
                        break;
                    case "DC":
                        b = jj;
                        break;
                    case "GF":
                        b = oj;
                        break;
                    case "HA":
                        b = tj;
                        break;
                    case "UA":
                        b = Mj;
                        break;
                    default:
                        I(a.vtp_gtmOnFailure);
                        return
                }
                I(a.vtp_gtmOnSuccess);
                Uj(a.vtp_containerId, b, a.vtp_remoteConfig || {})
            })
        }();



    Z.a.cid = ["google"],
        function() {
            (function(a) {
                Z.__cid = a;
                Z.__cid.b = "cid";
                Z.__cid.g = !0;
                Z.__cid.priorityOverride = 0
            })(function() {
                return Pd.B
            })
        }();



    Z.a.gtagaw = ["google"],
        function() {
            (function(a) {
                Z.__gtagaw = a;
                Z.__gtagaw.b = "gtagaw";
                Z.__gtagaw.g = !0;
                Z.__gtagaw.priorityOverride = 0
            })(function(a) {
                var b = "AW-" + String(a.vtp_conversionId);
                Vj(String(a.vtp_eventName), a.vtp_eventData || {}, a.vtp_conversionLabel ? b + "/" + String(a.vtp_conversionLabel) : b);
                I(a.vtp_gtmOnSuccess)
            })
        }();

    Z.a.get = ["google"],
        function() {
            (function(a) {
                Z.__get = a;
                Z.__get.b = "get";
                Z.__get.g = !0;
                Z.__get.priorityOverride = 0
            })(function(a) {
                var b = a.vtp_settings;
                (a.vtp_deferrable ? xo : wo)(String(b.streamId), String(a.vtp_eventName), b.eventParameters || {});
                a.vtp_gtmOnSuccess()
            })
        }();


    Z.a.gtagfl = [],
        function() {
            (function(a) {
                Z.__gtagfl = a;
                Z.__gtagfl.b = "gtagfl";
                Z.__gtagfl.g = !0;
                Z.__gtagfl.priorityOverride = 0
            })(function(a) {
                I(a.vtp_gtmOnSuccess)
            })
        }();

    Z.a.gtaggf = ["google"],
        function() {
            (function(a) {
                Z.__gtaggf = a;
                Z.__gtaggf.b = "gtaggf";
                Z.__gtaggf.g = !0;
                Z.__gtaggf.priorityOverride = 0
            })(function(a) {
                I(a.vtp_gtmOnSuccess)
            })
        }();



    Z.a.gtagua = ["google"],
        function() {
            (function(a) {
                Z.__gtagua = a;
                Z.__gtagua.b = "gtagua";
                Z.__gtagua.g = !0;
                Z.__gtagua.priorityOverride = 0
            })(function(a) {
                I(a.vtp_gtmOnSuccess)
            })
        }();


    var Ao = {};
    Ao.macro = function(a) {
        if (Wk.Pc.hasOwnProperty(a)) return Wk.Pc[a]
    }, Ao.onHtmlSuccess = Wk.fe(!0), Ao.onHtmlFailure = Wk.fe(!1);
    Ao.dataLayer = Ge;
    Ao.callback = function(a) {
        Zd.hasOwnProperty(a) && va(Zd[a]) && Zd[a]();
        delete Zd[a]
    };

    function Bo() {
        L[Pd.B] = Ao;
        Ma($d, Z.a);
        Eb = Eb || Wk;
        Fb = Qb
    }

    function Co() {
            ad.gtm_3pds = !0;
            ad.gtag_cs_api = !0;
            L = F.google_tag_manager = F.google_tag_manager || {};
            Li();
            if (L[Pd.B]) {
                var a = L.zones;
                a && a.unregisterChild(Pd.B);
            } else {
                for (var b = data.resource || {}, c = b.macros || [], d =
                        0; d < c.length; d++) vb.push(c[d]);
                for (var e = b.tags || [], f = 0; f < e.length; f++) yb.push(e[f]);
                for (var h = b.predicates || [], k = 0; k < h.length; k++) xb.push(h[k]);
                for (var l = b.rules || [], p = 0; p < l.length; p++) {
                    for (var n = l[p], r = {}, t = 0; t < n.length; t++) r[n[t][0]] = Array.prototype.slice.call(n[t], 1);
                    wb.push(r)
                }
                Ab = Z;
                Bb = vm;
                Bo();
                Vk();
                hh = !1;
                ih = 0;
                if ("interactive" == H.readyState && !H.createEventObject || "complete" == H.readyState) kh();
                else {
                    Tc(H, "DOMContentLoaded", kh);
                    Tc(H, "readystatechange", kh);
                    if (H.createEventObject && H.documentElement.doScroll) {
                        var q = !0;
                        try {
                            q = !F.frameElement
                        } catch (z) {}
                        q && lh()
                    }
                    Tc(F, "load", kh)
                }
                ek = !1;
                "complete" === H.readyState ? gk() : Tc(F, "load", gk);
                a: {
                    if (!ue) break a;
                    F.setInterval(ve, 864E5);
                }
                Xd = (new Date).getTime();
                Ao.bootstrap = Xd;
            }
        }
        (function(a) {
            a()
        })(Co);

})()