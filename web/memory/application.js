! function(t, e, n) {
  "use strict";

  function i(t) {
    return function() {
      var e, n = arguments[0];
      for (e = "[" + (t ? t + ":" : "") + n + "] http://errors.angularjs.org/1.4.5/" + (t ? t + "/" : "") + n, n = 1; n < arguments.length; n++) {
        e = e + (1 == n ? "?" : "&") + "p" + (n - 1) + "=";
        var i, r = encodeURIComponent;
        i = arguments[n], i = "function" == typeof i ? i.toString().replace(/ \{[\s\S]*$/, "") : "undefined" == typeof i ? "undefined" : "string" != typeof i ? JSON.stringify(i) : i, e += r(i)
      }
      return Error(e)
    }
  }

  function r(t) {
    if (null == t || T(t)) return !1;
    var e = "length" in Object(t) && t.length;
    return t.nodeType === ui && e ? !0 : C(t) || Jn(t) || 0 === e || "number" == typeof e && e > 0 && e - 1 in t
  }

  function o(t, e, n) {
    var i, s;
    if (t)
      if (k(t))
        for (i in t) "prototype" == i || "length" == i || "name" == i || t.hasOwnProperty && !t.hasOwnProperty(i) || e.call(n, t[i], i, t);
      else if (Jn(t) || r(t)) {
      var a = "object" != typeof t;
      for (i = 0, s = t.length; s > i; i++)(a || i in t) && e.call(n, t[i], i, t)
    } else if (t.forEach && t.forEach !== o) t.forEach(e, n, t);
    else if (x(t))
      for (i in t) e.call(n, t[i], i, t);
    else if ("function" == typeof t.hasOwnProperty)
      for (i in t) t.hasOwnProperty(i) && e.call(n, t[i], i, t);
    else
      for (i in t) zn.call(t, i) && e.call(n, t[i], i, t);
    return t
  }

  function s(t, e, n) {
    for (var i = Object.keys(t).sort(), r = 0; r < i.length; r++) e.call(n, t[i[r]], i[r]);
    return i
  }

  function a(t) {
    return function(e, n) {
      t(n, e)
    }
  }

  function u() {
    return ++Qn
  }

  function l(t, e) {
    e ? t.$$hashKey = e : delete t.$$hashKey
  }

  function c(t, e, n) {
    for (var i = t.$$hashKey, r = 0, o = e.length; o > r; ++r) {
      var s = e[r];
      if (w(s) || k(s))
        for (var a = Object.keys(s), u = 0, h = a.length; h > u; u++) {
          var f = a[u],
            p = s[f];
          n && w(p) ? A(p) ? t[f] = new Date(p.valueOf()) : E(p) ? t[f] = new RegExp(p) : (w(t[f]) || (t[f] = Jn(p) ? [] : {}), c(t[f], [p], !0)) : t[f] = p
        }
    }
    return l(t, i), t
  }

  function h(t) {
    return c(t, Hn.call(arguments, 1), !1)
  }

  function f(t) {
    return c(t, Hn.call(arguments, 1), !0)
  }

  function p(t) {
    return parseInt(t, 10)
  }

  function d(t, e) {
    return h(Object.create(t), e)
  }

  function m() {}

  function g(t) {
    return t
  }

  function $(t) {
    return function() {
      return t
    }
  }

  function v(t) {
    return k(t.toString) && t.toString !== Object.prototype.toString
  }

  function y(t) {
    return "undefined" == typeof t
  }

  function b(t) {
    return "undefined" != typeof t
  }

  function w(t) {
    return null !== t && "object" == typeof t
  }

  function x(t) {
    return null !== t && "object" == typeof t && !Yn(t)
  }

  function C(t) {
    return "string" == typeof t
  }

  function S(t) {
    return "number" == typeof t
  }

  function A(t) {
    return "[object Date]" === Gn.call(t)
  }

  function k(t) {
    return "function" == typeof t
  }

  function E(t) {
    return "[object RegExp]" === Gn.call(t)
  }

  function T(t) {
    return t && t.window === t
  }

  function P(t) {
    return t && t.$evalAsync && t.$watch
  }

  function M(t) {
    return "boolean" == typeof t
  }

  function O(t) {
    return !(!t || !(t.nodeName || t.prop && t.attr && t.find))
  }

  function D(t) {
    var e = {};
    t = t.split(",");
    var n;
    for (n = 0; n < t.length; n++) e[t[n]] = !0;
    return e
  }

  function R(t) {
    return Wn(t.nodeName || t[0] && t[0].nodeName)
  }

  function L(t, e) {
    var n = t.indexOf(e);
    return n >= 0 && t.splice(n, 1), n
  }

  function F(t, e, n, i) {
    if (T(t) || P(t)) throw Xn("cpws");
    if (ti.test(Gn.call(e))) throw Xn("cpta");
    if (e) {
      if (t === e) throw Xn("cpi");
      n = n || [], i = i || [], w(t) && (n.push(t), i.push(e));
      var r;
      if (Jn(t))
        for (r = e.length = 0; r < t.length; r++) e.push(F(t[r], null, n, i));
      else {
        var s = e.$$hashKey;
        if (Jn(e) ? e.length = 0 : o(e, function(t, n) {
            delete e[n]
          }), x(t))
          for (r in t) e[r] = F(t[r], null, n, i);
        else if (t && "function" == typeof t.hasOwnProperty)
          for (r in t) t.hasOwnProperty(r) && (e[r] = F(t[r], null, n, i));
        else
          for (r in t) zn.call(t, r) && (e[r] = F(t[r], null, n, i));
        l(e, s)
      }
    } else if (e = t, w(t)) {
      if (n && -1 !== (s = n.indexOf(t))) return i[s];
      if (Jn(t)) return F(t, [], n, i);
      if (ti.test(Gn.call(t))) e = new t.constructor(t);
      else if (A(t)) e = new Date(t.getTime());
      else {
        if (!E(t)) return r = Object.create(Yn(t)), F(t, r, n, i);
        e = new RegExp(t.source, t.toString().match(/[^\/]*$/)[0]), e.lastIndex = t.lastIndex
      }
      i && (n.push(t), i.push(e))
    }
    return e
  }

  function N(t, e) {
    if (Jn(t)) {
      e = e || [];
      for (var n = 0, i = t.length; i > n; n++) e[n] = t[n]
    } else if (w(t))
      for (n in e = e || {}, t)("$" !== n.charAt(0) || "$" !== n.charAt(1)) && (e[n] = t[n]);
    return e || t
  }

  function I(t, e) {
    if (t === e) return !0;
    if (null === t || null === e) return !1;
    if (t !== t && e !== e) return !0;
    var i, r = typeof t;
    if (r == typeof e && "object" == r) {
      if (!Jn(t)) {
        if (A(t)) return A(e) ? I(t.getTime(), e.getTime()) : !1;
        if (E(t)) return E(e) ? t.toString() == e.toString() : !1;
        if (P(t) || P(e) || T(t) || T(e) || Jn(e) || A(e) || E(e)) return !1;
        r = lt();
        for (i in t)
          if ("$" !== i.charAt(0) && !k(t[i])) {
            if (!I(t[i], e[i])) return !1;
            r[i] = !0
          }
        for (i in e)
          if (!(i in r || "$" === i.charAt(0) || e[i] === n || k(e[i]))) return !1;
        return !0
      }
      if (!Jn(e)) return !1;
      if ((r = t.length) == e.length) {
        for (i = 0; r > i; i++)
          if (!I(t[i], e[i])) return !1;
        return !0
      }
    }
    return !1
  }

  function V(t, e, n) {
    return t.concat(Hn.call(e, n))
  }

  function j(t, e) {
    var n = 2 < arguments.length ? Hn.call(arguments, 2) : [];
    return !k(e) || e instanceof RegExp ? e : n.length ? function() {
      return arguments.length ? e.apply(t, V(n, arguments, 0)) : e.apply(t, n)
    } : function() {
      return arguments.length ? e.apply(t, arguments) : e.call(t)
    }
  }

  function B(t, i) {
    var r = i;
    return "string" == typeof t && "$" === t.charAt(0) && "$" === t.charAt(1) ? r = n : T(i) ? r = "$WINDOW" : i && e === i ? r = "$DOCUMENT" : P(i) && (r = "$SCOPE"), r
  }

  function W(t, e) {
    return "undefined" == typeof t ? n : (S(e) || (e = e ? 2 : null), JSON.stringify(t, B, e))
  }

  function z(t) {
    return C(t) ? JSON.parse(t) : t
  }

  function q(t, e) {
    var n = Date.parse("Jan 01, 1970 00:00:00 " + t) / 6e4;
    return isNaN(n) ? e : n
  }

  function H(t, e, n) {
    n = n ? -1 : 1;
    var i = q(e, t.getTimezoneOffset());
    return e = t, t = n * (i - t.getTimezoneOffset()), e = new Date(e.getTime()), e.setMinutes(e.getMinutes() + t), e
  }

  function _(t) {
    t = In(t).clone();
    try {
      t.empty()
    } catch (e) {}
    var n = In("<div>").append(t).html();
    try {
      return t[0].nodeType === li ? Wn(n) : n.match(/^(<[^>]+>)/)[1].replace(/^<([\w\-]+)/, function(t, e) {
        return "<" + Wn(e)
      })
    } catch (i) {
      return Wn(n)
    }
  }

  function U(t) {
    try {
      return decodeURIComponent(t)
    } catch (e) {}
  }

  function G(t) {
    var e = {};
    return o((t || "").split("&"), function(t) {
      var n, i, r;
      t && (i = t = t.replace(/\+/g, "%20"), n = t.indexOf("="), -1 !== n && (i = t.substring(0, n), r = t.substring(n + 1)), i = U(i), b(i) && (r = b(r) ? U(r) : !0, zn.call(e, i) ? Jn(e[i]) ? e[i].push(r) : e[i] = [e[i], r] : e[i] = r))
    }), e
  }

  function Y(t) {
    var e = [];
    return o(t, function(t, n) {
      Jn(t) ? o(t, function(t) {
        e.push(K(n, !0) + (!0 === t ? "" : "=" + K(t, !0)))
      }) : e.push(K(n, !0) + (!0 === t ? "" : "=" + K(t, !0)))
    }), e.length ? e.join("&") : ""
  }

  function X(t) {
    return K(t, !0).replace(/%26/gi, "&").replace(/%3D/gi, "=").replace(/%2B/gi, "+")
  }

  function K(t, e) {
    return encodeURIComponent(t).replace(/%40/gi, "@").replace(/%3A/gi, ":").replace(/%24/g, "$").replace(/%2C/gi, ",").replace(/%3B/gi, ";").replace(/%20/g, e ? "%20" : "+")
  }

  function Q(t, e) {
    var n, i, r = oi.length;
    for (i = 0; r > i; ++i)
      if (n = oi[i] + e, C(n = t.getAttribute(n))) return n;
    return null
  }

  function Z(t, e) {
    var n, i, r = {};
    o(oi, function(e) {
      e += "app", !n && t.hasAttribute && t.hasAttribute(e) && (n = t, i = t.getAttribute(e))
    }), o(oi, function(e) {
      e += "app";
      var r;
      !n && (r = t.querySelector("[" + e.replace(":", "\\:") + "]")) && (n = r, i = r.getAttribute(e))
    }), n && (r.strictDi = null !== Q(n, "strict-di"), e(n, i ? [i] : [], r))
  }

  function J(n, i, r) {
    w(r) || (r = {}), r = h({
      strictDi: !1
    }, r);
    var s = function() {
        if (n = In(n), n.injector()) {
          var t = n[0] === e ? "document" : _(n);
          throw Xn("btstrpd", t.replace(/</, "&lt;").replace(/>/, "&gt;"))
        }
        return i = i || [], i.unshift(["$provide", function(t) {
          t.value("$rootElement", n)
        }]), r.debugInfoEnabled && i.push(["$compileProvider", function(t) {
          t.debugInfoEnabled(!0)
        }]), i.unshift("ng"), t = Vt(i, r.strictDi), t.invoke(["$rootScope", "$rootElement", "$compile", "$injector", function(t, e, n, i) {
          t.$apply(function() {
            e.data("$injector", i), n(e)(t)
          })
        }]), t
      },
      a = /^NG_ENABLE_DEBUG_INFO!/,
      u = /^NG_DEFER_BOOTSTRAP!/;
    return t && a.test(t.name) && (r.debugInfoEnabled = !0, t.name = t.name.replace(a, "")), t && !u.test(t.name) ? s() : (t.name = t.name.replace(u, ""), Kn.resumeBootstrap = function(t) {
      return o(t, function(t) {
        i.push(t)
      }), s()
    }, void(k(Kn.resumeDeferredBootstrap) && Kn.resumeDeferredBootstrap()))
  }

  function tt() {
    t.name = "NG_ENABLE_DEBUG_INFO!" + t.name, t.location.reload()
  }

  function et(t) {
    if (t = Kn.element(t).injector(), !t) throw Xn("test");
    return t.get("$$testability")
  }

  function nt(t, e) {
    return e = e || "_", t.replace(si, function(t, n) {
      return (n ? e : "") + t.toLowerCase()
    })
  }

  function it() {
    var e;
    if (!ai) {
      var i = ri();
      Vn = t.jQuery, b(i) && (Vn = null === i ? n : t[i]), Vn && Vn.fn.on ? (In = Vn, h(Vn.fn, {
        scope: xi.scope,
        isolateScope: xi.isolateScope,
        controller: xi.controller,
        injector: xi.injector,
        inheritedData: xi.inheritedData
      }), e = Vn.cleanData, Vn.cleanData = function(t) {
        var n;
        if (Zn) Zn = !1;
        else
          for (var i, r = 0; null != (i = t[r]); r++)(n = Vn._data(i, "events")) && n.$destroy && Vn(i).triggerHandler("$destroy");
        e(t)
      }) : In = mt, Kn.element = In, ai = !0
    }
  }

  function rt(t, e, n) {
    if (!t) throw Xn("areq", e || "?", n || "required");
    return t
  }

  function ot(t, e, n) {
    return n && Jn(t) && (t = t[t.length - 1]), rt(k(t), e, "not a function, got " + (t && "object" == typeof t ? t.constructor.name || "Object" : typeof t)), t
  }

  function st(t, e) {
    if ("hasOwnProperty" === t) throw Xn("badname", e)
  }

  function at(t, e, n) {
    if (!e) return t;
    e = e.split(".");
    for (var i, r = t, o = e.length, s = 0; o > s; s++) i = e[s], t && (t = (r = t)[i]);
    return !n && k(t) ? j(r, t) : t
  }

  function ut(t) {
    var e = t[0];
    t = t[t.length - 1];
    var n = [e];
    do {
      if (e = e.nextSibling, !e) break;
      n.push(e)
    } while (e !== t);
    return In(n)
  }

  function lt() {
    return Object.create(null)
  }

  function ct(t) {
    function e(t, e, n) {
      return t[e] || (t[e] = n())
    }
    var n = i("$injector"),
      r = i("ng");
    return t = e(t, "angular", Object), t.$$minErr = t.$$minErr || i, e(t, "module", function() {
      var t = {};
      return function(i, o, s) {
        if ("hasOwnProperty" === i) throw r("badname", "module");
        return o && t.hasOwnProperty(i) && (t[i] = null), e(t, i, function() {
          function t(t, e, n, i) {
            return i || (i = r),
              function() {
                return i[n || "push"]([t, e, arguments]), c
              }
          }

          function e(t, e) {
            return function(n, o) {
              return o && k(o) && (o.$$moduleName = i), r.push([t, e, arguments]), c
            }
          }
          if (!o) throw n("nomod", i);
          var r = [],
            a = [],
            u = [],
            l = t("$injector", "invoke", "push", a),
            c = {
              _invokeQueue: r,
              _configBlocks: a,
              _runBlocks: u,
              requires: o,
              name: i,
              provider: e("$provide", "provider"),
              factory: e("$provide", "factory"),
              service: e("$provide", "service"),
              value: t("$provide", "value"),
              constant: t("$provide", "constant", "unshift"),
              decorator: e("$provide", "decorator"),
              animation: e("$animateProvider", "register"),
              filter: e("$filterProvider", "register"),
              controller: e("$controllerProvider", "register"),
              directive: e("$compileProvider", "directive"),
              config: l,
              run: function(t) {
                return u.push(t), this
              }
            };
          return s && l(s), c
        })
      }
    })
  }

  function ht(e) {
    h(e, {
      bootstrap: J,
      copy: F,
      extend: h,
      merge: f,
      equals: I,
      element: In,
      forEach: o,
      injector: Vt,
      noop: m,
      bind: j,
      toJson: W,
      fromJson: z,
      identity: g,
      isUndefined: y,
      isDefined: b,
      isString: C,
      isFunction: k,
      isObject: w,
      isNumber: S,
      isElement: O,
      isArray: Jn,
      version: ci,
      isDate: A,
      lowercase: Wn,
      uppercase: qn,
      callbacks: {
        counter: 0
      },
      getTestability: et,
      $$minErr: i,
      $$csp: ii,
      reloadWithDebugInfo: tt
    }), (jn = ct(t))("ng", ["ngLocale"], ["$provide", function(t) {
      t.provider({
        $$sanitizeUri: Ue
      }), t.provider("$compile", Gt).directive({
        a: br,
        input: Nr,
        textarea: Nr,
        form: Sr,
        script: Ao,
        select: To,
        style: Mo,
        option: Po,
        ngBind: jr,
        ngBindHtml: Wr,
        ngBindTemplate: Br,
        ngClass: qr,
        ngClassEven: _r,
        ngClassOdd: Hr,
        ngCloak: Ur,
        ngController: Gr,
        ngForm: Ar,
        ngHide: yo,
        ngIf: Kr,
        ngInclude: Qr,
        ngInit: Jr,
        ngNonBindable: ho,
        ngPluralize: go,
        ngRepeat: $o,
        ngShow: vo,
        ngStyle: bo,
        ngSwitch: wo,
        ngSwitchWhen: xo,
        ngSwitchDefault: Co,
        ngOptions: mo,
        ngTransclude: So,
        ngModel: uo,
        ngList: to,
        ngChange: zr,
        pattern: Do,
        ngPattern: Do,
        required: Oo,
        ngRequired: Oo,
        minlength: Lo,
        ngMinlength: Lo,
        maxlength: Ro,
        ngMaxlength: Ro,
        ngValue: Vr,
        ngModelOptions: co
      }).directive({
        ngInclude: Zr
      }).directive(wr).directive(Yr), t.provider({
        $anchorScroll: jt,
        $animate: Fi,
        $animateCss: Ni,
        $$animateQueue: Li,
        $$AnimateRunner: Ri,
        $browser: Ht,
        $cacheFactory: _t,
        $controller: Qt,
        $document: Zt,
        $exceptionHandler: Jt,
        $filter: an,
        $$forceReflow: Wi,
        $interpolate: he,
        $interval: fe,
        $http: ae,
        $httpParamSerializer: ee,
        $httpParamSerializerJQLike: ne,
        $httpBackend: le,
        $location: Se,
        $log: Ae,
        $parse: Be,
        $rootScope: _e,
        $q: We,
        $$q: ze,
        $sce: Ke,
        $sceDelegate: Xe,
        $sniffer: Qe,
        $templateCache: Ut,
        $templateRequest: Ze,
        $$testability: Je,
        $timeout: tn,
        $window: rn,
        $$rAF: He,
        $$jqLite: Lt,
        $$HashMap: ki,
        $$cookieReader: sn
      })
    }])
  }

  function ft(t) {
    return t.replace(pi, function(t, e, n, i) {
      return i ? n.toUpperCase() : n
    }).replace(di, "Moz$1")
  }

  function pt(t) {
    return t = t.nodeType, t === ui || !t || 9 === t
  }

  function dt(t, e) {
    var n, i, r = e.createDocumentFragment(),
      s = [];
    if (vi.test(t)) {
      for (n = n || r.appendChild(e.createElement("div")), i = (yi.exec(t) || ["", ""])[1].toLowerCase(), i = wi[i] || wi._default, n.innerHTML = i[1] + t.replace(bi, "<$1></$2>") + i[2], i = i[0]; i--;) n = n.lastChild;
      s = V(s, n.childNodes), n = r.firstChild, n.textContent = ""
    } else s.push(e.createTextNode(t));
    return r.textContent = "", r.innerHTML = "", o(s, function(t) {
      r.appendChild(t)
    }), r
  }

  function mt(t) {
    if (t instanceof mt) return t;
    var n;
    if (C(t) && (t = ei(t), n = !0), !(this instanceof mt)) {
      if (n && "<" != t.charAt(0)) throw gi("nosel");
      return new mt(t)
    }
    if (n) {
      n = e;
      var i;
      t = (i = $i.exec(t)) ? [n.createElement(i[1])] : (i = dt(t, n)) ? i.childNodes : []
    }
    At(this, t)
  }

  function gt(t) {
    return t.cloneNode(!0)
  }

  function $t(t, e) {
    if (e || yt(t), t.querySelectorAll)
      for (var n = t.querySelectorAll("*"), i = 0, r = n.length; r > i; i++) yt(n[i])
  }

  function vt(t, e, n, i) {
    if (b(i)) throw gi("offargs");
    var r = (i = bt(t)) && i.events,
      s = i && i.handle;
    if (s)
      if (e) o(e.split(" "), function(e) {
        if (b(n)) {
          var i = r[e];
          if (L(i || [], n), i && 0 < i.length) return
        }
        t.removeEventListener(e, s, !1), delete r[e]
      });
      else
        for (e in r) "$destroy" !== e && t.removeEventListener(e, s, !1), delete r[e]
  }

  function yt(t, e) {
    var i = t.ng339,
      r = i && hi[i];
    r && (e ? delete r.data[e] : (r.handle && (r.events.$destroy && r.handle({}, "$destroy"), vt(t)), delete hi[i], t.ng339 = n))
  }

  function bt(t, e) {
    var i = t.ng339,
      i = i && hi[i];
    return e && !i && (t.ng339 = i = ++fi, i = hi[i] = {
      events: {},
      data: {},
      handle: n
    }), i
  }

  function wt(t, e, n) {
    if (pt(t)) {
      var i = b(n),
        r = !i && e && !w(e),
        o = !e;
      if (t = (t = bt(t, !r)) && t.data, i) t[e] = n;
      else {
        if (o) return t;
        if (r) return t && t[e];
        h(t, e)
      }
    }
  }

  function xt(t, e) {
    return t.getAttribute ? -1 < (" " + (t.getAttribute("class") || "") + " ").replace(/[\n\t]/g, " ").indexOf(" " + e + " ") : !1
  }

  function Ct(t, e) {
    e && t.setAttribute && o(e.split(" "), function(e) {
      t.setAttribute("class", ei((" " + (t.getAttribute("class") || "") + " ").replace(/[\n\t]/g, " ").replace(" " + ei(e) + " ", " ")))
    })
  }

  function St(t, e) {
    if (e && t.setAttribute) {
      var n = (" " + (t.getAttribute("class") || "") + " ").replace(/[\n\t]/g, " ");
      o(e.split(" "), function(t) {
        t = ei(t), -1 === n.indexOf(" " + t + " ") && (n += t + " ")
      }), t.setAttribute("class", ei(n))
    }
  }

  function At(t, e) {
    if (e)
      if (e.nodeType) t[t.length++] = e;
      else {
        var n = e.length;
        if ("number" == typeof n && e.window !== e) {
          if (n)
            for (var i = 0; n > i; i++) t[t.length++] = e[i]
        } else t[t.length++] = e
      }
  }

  function kt(t, e) {
    return Et(t, "$" + (e || "ngController") + "Controller")
  }

  function Et(t, e, i) {
    for (9 == t.nodeType && (t = t.documentElement), e = Jn(e) ? e : [e]; t;) {
      for (var r = 0, o = e.length; o > r; r++)
        if ((i = In.data(t, e[r])) !== n) return i;
      t = t.parentNode || 11 === t.nodeType && t.host
    }
  }

  function Tt(t) {
    for ($t(t, !0); t.firstChild;) t.removeChild(t.firstChild)
  }

  function Pt(t, e) {
    e || $t(t);
    var n = t.parentNode;
    n && n.removeChild(t)
  }

  function Mt(e, n) {
    n = n || t, "complete" === n.document.readyState ? n.setTimeout(e) : In(n).on("load", e)
  }

  function Ot(t, e) {
    var n = Ci[e.toLowerCase()];
    return n && Si[R(t)] && n
  }

  function Dt(t, e) {
    var n = t.nodeName;
    return ("INPUT" === n || "TEXTAREA" === n) && Ai[e]
  }

  function Rt(t, e) {
    var n = function(n, i) {
      n.isDefaultPrevented = function() {
        return n.defaultPrevented
      };
      var r = e[i || n.type],
        o = r ? r.length : 0;
      if (o) {
        if (y(n.immediatePropagationStopped)) {
          var s = n.stopImmediatePropagation;
          n.stopImmediatePropagation = function() {
            n.immediatePropagationStopped = !0, n.stopPropagation && n.stopPropagation(), s && s.call(n)
          }
        }
        n.isImmediatePropagationStopped = function() {
          return !0 === n.immediatePropagationStopped
        }, o > 1 && (r = N(r));
        for (var a = 0; o > a; a++) n.isImmediatePropagationStopped() || r[a].call(t, n)
      }
    };
    return n.elem = t, n
  }

  function Lt() {
    this.$get = function() {
      return h(mt, {
        hasClass: function(t, e) {
          return t.attr && (t = t[0]), xt(t, e)
        },
        addClass: function(t, e) {
          return t.attr && (t = t[0]), St(t, e)
        },
        removeClass: function(t, e) {
          return t.attr && (t = t[0]), Ct(t, e)
        }
      })
    }
  }

  function Ft(t, e) {
    var n = t && t.$$hashKey;
    return n ? ("function" == typeof n && (n = t.$$hashKey()), n) : (n = typeof t, n = "function" == n || "object" == n && null !== t ? t.$$hashKey = n + ":" + (e || u)() : n + ":" + t)
  }

  function Nt(t, e) {
    if (e) {
      var n = 0;
      this.nextUid = function() {
        return ++n
      }
    }
    o(t, this.put, this)
  }

  function It(t) {
    return (t = t.toString().replace(Mi, "").match(Ei)) ? "function(" + (t[1] || "").replace(/[\s\r\n]+/, " ") + ")" : "fn"
  }

  function Vt(t, e) {
    function i(t) {
      return function(e, n) {
        return w(e) ? void o(e, a(t)) : t(e, n)
      }
    }

    function r(t, e) {
      if (st(t, "service"), (k(e) || Jn(e)) && (e = m.instantiate(e)), !e.$get) throw Oi("pget", t);
      return d[t + "Provider"] = e
    }

    function s(t, e) {
      return function() {
        var n = v.invoke(e, this);
        if (y(n)) throw Oi("undef", t);
        return n
      }
    }

    function u(t, e, n) {
      return r(t, {
        $get: !1 !== n ? s(t, e) : e
      })
    }

    function l(t) {
      rt(y(t) || Jn(t), "modulesToLoad", "not an array");
      var e, n = [];
      return o(t, function(t) {
        function i(t) {
          var e, n;
          for (e = 0, n = t.length; n > e; e++) {
            var i = t[e],
              r = m.get(i[0]);
            r[i[1]].apply(r, i[2])
          }
        }
        if (!p.get(t)) {
          p.put(t, !0);
          try {
            C(t) ? (e = jn(t), n = n.concat(l(e.requires)).concat(e._runBlocks), i(e._invokeQueue), i(e._configBlocks)) : k(t) ? n.push(m.invoke(t)) : Jn(t) ? n.push(m.invoke(t)) : ot(t, "module")
          } catch (r) {
            throw Jn(t) && (t = t[t.length - 1]), r.message && r.stack && -1 == r.stack.indexOf(r.message) && (r = r.message + "\n" + r.stack), Oi("modulerr", t, r.stack || r.message || r)
          }
        }
      }), n
    }

    function c(t, n) {
      function i(e, i) {
        if (t.hasOwnProperty(e)) {
          if (t[e] === h) throw Oi("cdep", e + " <- " + f.join(" <- "));
          return t[e]
        }
        try {
          return f.unshift(e), t[e] = h, t[e] = n(e, i)
        } catch (r) {
          throw t[e] === h && delete t[e], r
        } finally {
          f.shift()
        }
      }

      function r(t, n, r, o) {
        "string" == typeof r && (o = r, r = null);
        var s, a, u, l = [],
          c = Vt.$$annotate(t, e, o);
        for (a = 0, s = c.length; s > a; a++) {
          if (u = c[a], "string" != typeof u) throw Oi("itkn", u);
          l.push(r && r.hasOwnProperty(u) ? r[u] : i(u, o))
        }
        return Jn(t) && (t = t[s]), t.apply(n, l)
      }
      return {
        invoke: r,
        instantiate: function(t, e, n) {
          var i = Object.create((Jn(t) ? t[t.length - 1] : t).prototype || null);
          return t = r(t, i, e, n), w(t) || k(t) ? t : i
        },
        get: i,
        annotate: Vt.$$annotate,
        has: function(e) {
          return d.hasOwnProperty(e + "Provider") || t.hasOwnProperty(e)
        }
      }
    }
    e = !0 === e;
    var h = {},
      f = [],
      p = new Nt([], !0),
      d = {
        $provide: {
          provider: i(r),
          factory: i(u),
          service: i(function(t, e) {
            return u(t, ["$injector", function(t) {
              return t.instantiate(e)
            }])
          }),
          value: i(function(t, e) {
            return u(t, $(e), !1)
          }),
          constant: i(function(t, e) {
            st(t, "constant"), d[t] = e, g[t] = e
          }),
          decorator: function(t, e) {
            var n = m.get(t + "Provider"),
              i = n.$get;
            n.$get = function() {
              var t = v.invoke(i, n);
              return v.invoke(e, null, {
                $delegate: t
              })
            }
          }
        }
      },
      m = d.$injector = c(d, function(t, e) {
        throw Kn.isString(e) && f.push(e), Oi("unpr", f.join(" <- "))
      }),
      g = {},
      v = g.$injector = c(g, function(t, e) {
        var i = m.get(t + "Provider", e);
        return v.invoke(i.$get, i, n, t)
      });
    return o(l(t), function(t) {
      t && v.invoke(t)
    }), v
  }

  function jt() {
    var t = !0;
    this.disableAutoScrolling = function() {
      t = !1
    }, this.$get = ["$window", "$location", "$rootScope", function(e, n, i) {
      function r(t) {
        var e = null;
        return Array.prototype.some.call(t, function(t) {
          return "a" === R(t) ? (e = t, !0) : void 0
        }), e
      }

      function o(t) {
        if (t) {
          t.scrollIntoView();
          var n;
          n = s.yOffset, k(n) ? n = n() : O(n) ? (n = n[0], n = "fixed" !== e.getComputedStyle(n).position ? 0 : n.getBoundingClientRect().bottom) : S(n) || (n = 0), n && (t = t.getBoundingClientRect().top, e.scrollBy(0, t - n))
        } else e.scrollTo(0, 0)
      }

      function s(t) {
        t = C(t) ? t : n.hash();
        var e;
        t ? (e = a.getElementById(t)) ? o(e) : (e = r(a.getElementsByName(t))) ? o(e) : "top" === t && o(null) : o(null)
      }
      var a = e.document;
      return t && i.$watch(function() {
        return n.hash()
      }, function(t, e) {
        t === e && "" === t || Mt(function() {
          i.$evalAsync(s)
        })
      }), s
    }]
  }

  function Bt(t, e) {
    return t || e ? t ? e ? (Jn(t) && (t = t.join(" ")), Jn(e) && (e = e.join(" ")), t + " " + e) : t : e : ""
  }

  function Wt(t) {
    C(t) && (t = t.split(" "));
    var e = lt();
    return o(t, function(t) {
      t.length && (e[t] = !0)
    }), e
  }

  function zt(t) {
    return w(t) ? t : {}
  }

  function qt(t, e, n, i) {
    function r(t) {
      try {
        t.apply(null, Hn.call(arguments, 1))
      } finally {
        if (g--, 0 === g)
          for (; $.length;) try {
            $.pop()()
          } catch (e) {
            n.error(e)
          }
      }
    }

    function s() {
      a(), u()
    }

    function a() {
      t: {
        try {
          v = h.state;
          break t
        } catch (t) {}
        v = void 0
      }
      v = y(v) ? null : v,
      I(v, k) && (v = k),
      k = v
    }

    function u() {
      (w !== l.url() || b !== v) && (w = l.url(), b = v, o(S, function(t) {
        t(l.url(), v)
      }))
    }
    var l = this,
      c = t.location,
      h = t.history,
      f = t.setTimeout,
      p = t.clearTimeout,
      d = {};
    l.isMock = !1;
    var g = 0,
      $ = [];
    l.$$completeOutstandingRequest = r, l.$$incOutstandingRequestCount = function() {
      g++
    }, l.notifyWhenNoOutstandingRequests = function(t) {
      0 === g ? t() : $.push(t)
    };
    var v, b, w = c.href,
      x = e.find("base"),
      C = null;
    a(), b = v, l.url = function(e, n, r) {
      if (y(r) && (r = null), c !== t.location && (c = t.location), h !== t.history && (h = t.history), e) {
        var o = b === r;
        if (w === e && (!i.history || o)) return l;
        var s = w && $e(w) === $e(e);
        return w = e, b = r, !i.history || s && o ? ((!s || C) && (C = e), n ? c.replace(e) : s ? (n = c, r = e.indexOf("#"), e = -1 === r ? "" : e.substr(r), n.hash = e) : c.href = e) : (h[n ? "replaceState" : "pushState"](r, "", e), a(), b = v), l
      }
      return C || c.href.replace(/%27/g, "'")
    }, l.state = function() {
      return v
    };
    var S = [],
      A = !1,
      k = null;
    l.onUrlChange = function(e) {
      return A || (i.history && In(t).on("popstate", s), In(t).on("hashchange", s), A = !0), S.push(e), e
    }, l.$$applicationDestroyed = function() {
      In(t).off("hashchange popstate", s)
    }, l.$$checkUrlChange = u, l.baseHref = function() {
      var t = x.attr("href");
      return t ? t.replace(/^(https?\:)?\/\/[^\/]*/, "") : ""
    }, l.defer = function(t, e) {
      var n;
      return g++, n = f(function() {
        delete d[n], r(t)
      }, e || 0), d[n] = !0, n
    }, l.defer.cancel = function(t) {
      return d[t] ? (delete d[t], p(t), r(m), !0) : !1
    }
  }

  function Ht() {
    this.$get = ["$window", "$log", "$sniffer", "$document", function(t, e, n, i) {
      return new qt(t, i, e, n)
    }]
  }

  function _t() {
    this.$get = function() {
      function t(t, n) {
        function r(t) {
          t != f && (p ? p == t && (p = t.n) : p = t, o(t.n, t.p), o(t, f), f = t, f.n = null)
        }

        function o(t, e) {
          t != e && (t && (t.p = e), e && (e.n = t))
        }
        if (t in e) throw i("$cacheFactory")("iid", t);
        var s = 0,
          a = h({}, n, {
            id: t
          }),
          u = {},
          l = n && n.capacity || Number.MAX_VALUE,
          c = {},
          f = null,
          p = null;
        return e[t] = {
          put: function(t, e) {
            if (!y(e)) {
              if (l < Number.MAX_VALUE) {
                var n = c[t] || (c[t] = {
                  key: t
                });
                r(n)
              }
              return t in u || s++, u[t] = e, s > l && this.remove(p.key), e
            }
          },
          get: function(t) {
            if (l < Number.MAX_VALUE) {
              var e = c[t];
              if (!e) return;
              r(e)
            }
            return u[t]
          },
          remove: function(t) {
            if (l < Number.MAX_VALUE) {
              var e = c[t];
              if (!e) return;
              e == f && (f = e.p), e == p && (p = e.n), o(e.n, e.p), delete c[t]
            }
            delete u[t], s--
          },
          removeAll: function() {
            u = {}, s = 0, c = {}, f = p = null
          },
          destroy: function() {
            c = a = u = null, delete e[t]
          },
          info: function() {
            return h({}, a, {
              size: s
            })
          }
        }
      }
      var e = {};
      return t.info = function() {
        var t = {};
        return o(e, function(e, n) {
          t[n] = e.info()
        }), t
      }, t.get = function(t) {
        return e[t]
      }, t
    }
  }

  function Ut() {
    this.$get = ["$cacheFactory", function(t) {
      return t("templates")
    }]
  }

  function Gt(t, i) {
    function r(t, e, n) {
      var i = /^\s*([@&]|=(\*?))(\??)\s*(\w*)\s*$/,
        r = {};
      return o(t, function(t, o) {
        var s = t.match(i);
        if (!s) throw Ii("iscp", e, o, t, n ? "controller bindings definition" : "isolate scope definition");
        r[o] = {
          mode: s[1][0],
          collection: "*" === s[2],
          optional: "?" === s[3],
          attrName: s[4] || o
        }
      }), r
    }

    function s(t) {
      var e = t.charAt(0);
      if (!e || e !== Wn(e)) throw Ii("baddir", t);
      if (t !== t.trim()) throw Ii("baddir", t)
    }
    var u = {},
      l = /^\s*directive\:\s*([\w\-]+)\s+(.*)$/,
      c = /(([\w\-]+)(?:\:([^;]+))?;?)/,
      f = D("ngSrc,ngSrcset,src,srcset"),
      p = /^(?:(\^\^?)?(\?)?(\^\^?)?)?/,
      v = /^(on[a-z]+|formaction)$/;
    this.directive = function S(e, n) {
      return st(e, "directive"), C(e) ? (s(e), rt(n, "directiveFactory"), u.hasOwnProperty(e) || (u[e] = [], t.factory(e + "Directive", ["$injector", "$exceptionHandler", function(t, n) {
        var i = [];
        return o(u[e], function(o, s) {
          try {
            var a = t.invoke(o);
            k(a) ? a = {
              compile: $(a)
            } : !a.compile && a.link && (a.compile = $(a.link)), a.priority = a.priority || 0, a.index = s, a.name = a.name || e, a.require = a.require || a.controller && a.name, a.restrict = a.restrict || "EA";
            var u = a,
              l = a,
              c = a.name,
              h = {
                isolateScope: null,
                bindToController: null
              };
            if (w(l.scope) && (!0 === l.bindToController ? (h.bindToController = r(l.scope, c, !0), h.isolateScope = {}) : h.isolateScope = r(l.scope, c, !1)), w(l.bindToController) && (h.bindToController = r(l.bindToController, c, !0)), w(h.bindToController)) {
              var f = l.controller,
                p = l.controllerAs;
              if (!f) throw Ii("noctrl", c);
              var d;
              t: if (p && C(p)) d = p;
                else {
                  if (C(f)) {
                    var m = Bi.exec(f);
                    if (m) {
                      d = m[3];
                      break t
                    }
                  }
                  d = void 0
                }
              if (!d) throw Ii("noident", c)
            }
            var g = u.$$bindings = h;
            w(g.isolateScope) && (a.$$isolateBindings = g.isolateScope), a.$$moduleName = o.$$moduleName, i.push(a)
          } catch (v) {
            n(v)
          }
        }), i
      }])), u[e].push(n)) : o(e, a(S)), this
    }, this.aHrefSanitizationWhitelist = function(t) {
      return b(t) ? (i.aHrefSanitizationWhitelist(t), this) : i.aHrefSanitizationWhitelist()
    }, this.imgSrcSanitizationWhitelist = function(t) {
      return b(t) ? (i.imgSrcSanitizationWhitelist(t), this) : i.imgSrcSanitizationWhitelist()
    };
    var x = !0;
    this.debugInfoEnabled = function(t) {
      return b(t) ? (x = t, this) : x
    }, this.$get = ["$injector", "$interpolate", "$exceptionHandler", "$templateRequest", "$parse", "$controller", "$rootScope", "$document", "$sce", "$animate", "$$sanitizeUri", function(t, i, r, s, a, $, b, S, A, E, T) {
      function M(t, e) {
        try {
          t.addClass(e)
        } catch (n) {}
      }

      function O(t, e, n, i, r) {
        t instanceof In || (t = In(t)), o(t, function(e, n) {
          e.nodeType == li && e.nodeValue.match(/\S+/) && (t[n] = In(e).wrap("<span></span>").parent()[0])
        });
        var s = D(t, e, t, n, i, r);
        O.$$addScopeClass(t);
        var a = null;
        return function(e, n, i) {
          rt(e, "scope"), i = i || {};
          var r = i.parentBoundTranscludeFn,
            o = i.transcludeControllers;
          if (i = i.futureParentElement, r && r.$$boundTransclude && (r = r.$$boundTransclude), a || (a = (i = i && i[0]) && "foreignobject" !== R(i) && i.toString().match(/SVG/) ? "svg" : "html"), i = "html" !== a ? In(K(a, In("<div>").append(t).html())) : n ? xi.clone.call(t) : t, o)
            for (var u in o) i.data("$" + u + "Controller", o[u].instance);
          return O.$$addScopeInfo(i, e), n && n(i, e), s && s(e, i, i, r), i
        }
      }

      function D(t, e, i, r, o, s) {
        function a(t, i, r, o) {
          var s, a, u, l, c, h, d;
          if (f)
            for (d = Array(i.length), l = 0; l < p.length; l += 3) s = p[l], d[s] = i[s];
          else d = i;
          for (l = 0, c = p.length; c > l;) a = d[p[l++]], i = p[l++], s = p[l++], i ? (i.scope ? (u = t.$new(), O.$$addScopeInfo(In(a), u), (h = i.$$destroyBindings) && (i.$$destroyBindings = null, u.$on("$destroyed", h))) : u = t, h = i.transcludeOnThisElement ? F(t, i.transclude, o) : !i.templateOnThisElement && o ? o : !o && e ? F(t, e) : null, i(s, u, a, r, h, i)) : s && s(t, a.childNodes, n, o)
        }
        for (var u, l, c, h, f, p = [], d = 0; d < t.length; d++) u = new ot, l = N(t[d], [], u, 0 === d ? r : n, o), (s = l.length ? B(l, t[d], u, e, i, null, [], [], s) : null) && s.scope && O.$$addScopeClass(u.$$element), u = s && s.terminal || !(c = t[d].childNodes) || !c.length ? null : D(c, s ? (s.transcludeOnThisElement || !s.templateOnThisElement) && s.transclude : e), (s || u) && (p.push(d, s, u), h = !0, f = f || s), s = null;
        return h ? a : null
      }

      function F(t, e, n) {
        return function(i, r, o, s, a) {
          return i || (i = t.$new(!1, a), i.$$transcluded = !0), e(i, r, {
            parentBoundTranscludeFn: n,
            transcludeControllers: o,
            futureParentElement: s
          })
        }
      }

      function N(t, e, n, i, r) {
        var o, s = n.$attr;
        switch (t.nodeType) {
          case ui:
            z(e, Yt(R(t)), "E", i, r);
            for (var a, u, h, f = t.attributes, p = 0, d = f && f.length; d > p; p++) {
              var m = !1,
                g = !1;
              a = f[p], o = a.name, u = ei(a.value), a = Yt(o), (h = ct.test(a)) && (o = o.replace(Vi, "").substr(8).replace(/_(.)/g, function(t, e) {
                return e.toUpperCase()
              }));
              var $ = a.replace(/(Start|End)$/, "");
              q($) && a === $ + "Start" && (m = o, g = o.substr(0, o.length - 5) + "end", o = o.substr(0, o.length - 6)), a = Yt(o.toLowerCase()), s[a] = o, (h || !n.hasOwnProperty(a)) && (n[a] = u, Ot(t, a) && (n[a] = !0)), Z(t, e, u, a, h), z(e, a, "A", i, r, m, g)
            }
            if (t = t.className, w(t) && (t = t.animVal), C(t) && "" !== t)
              for (; o = c.exec(t);) a = Yt(o[2]), z(e, a, "C", i, r) && (n[a] = ei(o[3])), t = t.substr(o.index + o[0].length);
            break;
          case li:
            if (11 === Nn)
              for (; t.parentNode && t.nextSibling && t.nextSibling.nodeType === li;) t.nodeValue += t.nextSibling.nodeValue, t.parentNode.removeChild(t.nextSibling);
            X(e, t.nodeValue);
            break;
          case 8:
            try {
              (o = l.exec(t.nodeValue)) && (a = Yt(o[1]), z(e, a, "M", i, r) && (n[a] = ei(o[2])))
            } catch (v) {}
        }
        return e.sort(G), e
      }

      function V(t, e, n) {
        var i = [],
          r = 0;
        if (e && t.hasAttribute && t.hasAttribute(e)) {
          do {
            if (!t) throw Ii("uterdir", e, n);
            t.nodeType == ui && (t.hasAttribute(e) && r++, t.hasAttribute(n) && r--), i.push(t), t = t.nextSibling
          } while (r > 0)
        } else i.push(t);
        return In(i)
      }

      function j(t, e, n) {
        return function(i, r, o, s, a) {
          return r = V(r[0], e, n), t(i, r, o, s, a)
        }
      }

      function B(t, i, o, s, a, u, l, c, h) {
        function f(t, e, n, i) {
          t && (n && (t = j(t, n, i)), t.require = v.require, t.directiveName = y, (T === v || v.$$isolateScope) && (t = tt(t, {
            isolateScope: !0
          })), l.push(t)), e && (n && (e = j(e, n, i)), e.require = v.require, e.directiveName = y, (T === v || v.$$isolateScope) && (e = tt(e, {
            isolateScope: !0
          })), c.push(e))
        }

        function d(t, e, n, i) {
          var r;
          if (C(e)) {
            var o = e.match(p);
            e = e.substring(o[0].length);
            var s = o[1] || o[3],
              o = "?" === o[2];
            if ("^^" === s ? n = n.parent() : r = (r = i && i[e]) && r.instance, r || (i = "$" + e + "Controller", r = s ? n.inheritedData(i) : n.data(i)), !r && !o) throw Ii("ctreq", e, t)
          } else if (Jn(e))
            for (r = [], s = 0, o = e.length; o > s; s++) r[s] = d(t, e[s], n, i);
          return r || null
        }

        function m(t, e, n, i, r, o) {
          var s, a = lt();
          for (s in i) {
            var u = i[s],
              l = {
                $scope: u === T || u.$$isolateScope ? r : o,
                $element: t,
                $attrs: e,
                $transclude: n
              },
              c = u.controller;
            "@" == c && (c = e[u.name]), l = $(c, l, !0, u.controllerAs), a[u.name] = l, F || t.data("$" + u.name + "Controller", l.instance)
          }
          return a
        }

        function g(t, e, r, s, a, u) {
          function h(t, e, i) {
            var r;
            return P(t) || (i = e, e = t, t = n), F && (r = v), i || (i = F ? b.parent() : b), a(t, e, r, i, S)
          }
          var f, p, g, $, v, y, b;
          if (i === r ? (s = o, b = o.$$element) : (b = In(r), s = new ot(b, o)), T && ($ = e.$new(!0)), a && (y = h, y.$$boundTransclude = a), E && (v = m(b, s, y, E, $, e)), T && (O.$$addScopeInfo(b, $, !0, !(M && (M === T || M === T.$$originalDirective))), O.$$addScopeClass(b, !0), $.$$isolateBindings = T.$$isolateBindings, it(e, s, $, $.$$isolateBindings, T, $)), v) {
            var w, x = T || A;
            x && v[x.name] && (p = x.$$bindings.bindToController, (g = v[x.name]) && g.identifier && p && (w = g, u.$$destroyBindings = it(e, s, g.instance, p, x)));
            for (f in v) {
              g = v[f];
              var C = g();
              C !== g.instance && (g.instance = C, b.data("$" + f + "Controller", C), g === w && (u.$$destroyBindings(), u.$$destroyBindings = it(e, s, C, p, x)))
            }
          }
          for (f = 0, u = l.length; u > f; f++) p = l[f], et(p, p.isolateScope ? $ : e, b, s, p.require && d(p.directiveName, p.require, b, v), y);
          var S = e;
          for (T && (T.template || null === T.templateUrl) && (S = $), t && t(S, r.childNodes, n, a), f = c.length - 1; f >= 0; f--) p = c[f], et(p, p.isolateScope ? $ : e, b, s, p.require && d(p.directiveName, p.require, b, v), y)
        }
        h = h || {};
        for (var v, y, b, x, S = -Number.MAX_VALUE, A = h.newScopeDirective, E = h.controllerDirectives, T = h.newIsolateScopeDirective, M = h.templateDirective, D = h.nonTlbTranscludeDirective, R = !1, L = !1, F = h.hasElementTranscludeDirective, I = o.$$element = In(i), B = s, z = 0, q = t.length; q > z; z++) {
          v = t[z];
          var G = v.$$start,
            X = v.$$end;
          if (G && (I = V(i, G, X)), b = n, S > v.priority) break;
          if ((b = v.scope) && (v.templateUrl || (w(b) ? (Y("new/isolated scope", T || A, v, I), T = v) : Y("new/isolated scope", T, v, I)), A = A || v), y = v.name, !v.templateUrl && v.controller && (b = v.controller, E = E || lt(), Y("'" + y + "' controller", E[y], v, I), E[y] = v), (b = v.transclude) && (R = !0, v.$$tlb || (Y("transclusion", D, v, I), D = v), "element" == b ? (F = !0, S = v.priority, b = I, I = o.$$element = In(e.createComment(" " + y + ": " + o[y] + " ")), i = I[0], J(a, Hn.call(b, 0), i), B = O(b, s, S, u && u.name, {
              nonTlbTranscludeDirective: D
            })) : (b = In(gt(i)).contents(), I.empty(), B = O(b, s))), v.template)
            if (L = !0, Y("template", M, v, I), M = v, b = k(v.template) ? v.template(I, o) : v.template, b = ut(b), v.replace) {
              if (u = v, b = vi.test(b) ? Kt(K(v.templateNamespace, ei(b))) : [], i = b[0], 1 != b.length || i.nodeType !== ui) throw Ii("tplrt", y, "");
              J(a, I, i), q = {
                $attr: {}
              }, b = N(i, [], q);
              var Q = t.splice(z + 1, t.length - (z + 1));
              T && W(b), t = t.concat(b).concat(Q), H(o, q), q = t.length
            } else I.html(b);
          if (v.templateUrl) L = !0, Y("template", M, v, I), M = v, v.replace && (u = v), g = U(t.splice(z, t.length - z), I, o, a, R && B, l, c, {
            controllerDirectives: E,
            newScopeDirective: A !== v && A,
            newIsolateScopeDirective: T,
            templateDirective: M,
            nonTlbTranscludeDirective: D
          }), q = t.length;
          else if (v.compile) try {
            x = v.compile(I, o, B), k(x) ? f(null, x, G, X) : x && f(x.pre, x.post, G, X)
          } catch (Z) {
            r(Z, _(I))
          }
          v.terminal && (g.terminal = !0, S = Math.max(S, v.priority))
        }
        return g.scope = A && !0 === A.scope, g.transcludeOnThisElement = R, g.templateOnThisElement = L, g.transclude = B, h.hasElementTranscludeDirective = F, g
      }

      function W(t) {
        for (var e = 0, n = t.length; n > e; e++) t[e] = d(t[e], {
          $$isolateScope: !0
        })
      }

      function z(e, i, o, s, a, l, c) {
        if (i === a) return null;
        if (a = null, u.hasOwnProperty(i)) {
          var h;
          i = t.get(i + "Directive");
          for (var f = 0, p = i.length; p > f; f++) try {
            h = i[f], (s === n || s > h.priority) && -1 != h.restrict.indexOf(o) && (l && (h = d(h, {
              $$start: l,
              $$end: c
            })), e.push(h), a = h)
          } catch (m) {
            r(m)
          }
        }
        return a
      }

      function q(e) {
        if (u.hasOwnProperty(e))
          for (var n = t.get(e + "Directive"), i = 0, r = n.length; r > i; i++)
            if (e = n[i], e.multiElement) return !0;
        return !1
      }

      function H(t, e) {
        var n = e.$attr,
          i = t.$attr,
          r = t.$$element;
        o(t, function(i, r) {
          "$" != r.charAt(0) && (e[r] && e[r] !== i && (i += ("style" === r ? ";" : " ") + e[r]), t.$set(r, i, !0, n[r]))
        }), o(e, function(e, o) {
          "class" == o ? (M(r, e), t["class"] = (t["class"] ? t["class"] + " " : "") + e) : "style" == o ? (r.attr("style", r.attr("style") + ";" + e), t.style = (t.style ? t.style + ";" : "") + e) : "$" == o.charAt(0) || t.hasOwnProperty(o) || (t[o] = e, i[o] = n[o])
        })
      }

      function U(t, e, n, i, r, a, u, l) {
        var c, h, f = [],
          p = e[0],
          m = t.shift(),
          g = d(m, {
            templateUrl: null,
            transclude: null,
            replace: null,
            $$originalDirective: m
          }),
          $ = k(m.templateUrl) ? m.templateUrl(e, n) : m.templateUrl,
          v = m.templateNamespace;
        return e.empty(), s($).then(function(s) {
            var d, y;
            if (s = ut(s), m.replace) {
              if (s = vi.test(s) ? Kt(K(v, ei(s))) : [], d = s[0], 1 != s.length || d.nodeType !== ui) throw Ii("tplrt", m.name, $);
              s = {
                $attr: {}
              }, J(i, e, d);
              var b = N(d, [], s);
              w(m.scope) && W(b), t = b.concat(t), H(n, s)
            } else d = p, e.html(s);
            for (t.unshift(g), c = B(t, d, n, r, e, m, a, u, l), o(i, function(t, n) {
                t == d && (i[n] = e[0])
              }), h = D(e[0].childNodes, r); f.length;) {
              s = f.shift(), y = f.shift();
              var x = f.shift(),
                C = f.shift(),
                b = e[0];
              if (!s.$$destroyed) {
                if (y !== p) {
                  var S = y.className;
                  l.hasElementTranscludeDirective && m.replace || (b = gt(d)), J(x, In(y), b), M(In(b), S)
                }
                y = c.transcludeOnThisElement ? F(s, c.transclude, C) : C, c(h, s, b, i, y, c)
              }
            }
            f = null
          }),
          function(t, e, n, i, r) {
            t = r, e.$$destroyed || (f ? f.push(e, n, i, t) : (c.transcludeOnThisElement && (t = F(e, c.transclude, r)), c(h, e, n, i, t, c)))
          }
      }

      function G(t, e) {
        var n = e.priority - t.priority;
        return 0 !== n ? n : t.name !== e.name ? t.name < e.name ? -1 : 1 : t.index - e.index
      }

      function Y(t, e, n, i) {
        function r(t) {
          return t ? " (module: " + t + ")" : ""
        }
        if (e) throw Ii("multidir", e.name, r(e.$$moduleName), n.name, r(n.$$moduleName), t, _(i))
      }

      function X(t, e) {
        var n = i(e, !0);
        n && t.push({
          priority: 0,
          compile: function(t) {
            t = t.parent();
            var e = !!t.length;
            return e && O.$$addBindingClass(t),
              function(t, i) {
                var r = i.parent();
                e || O.$$addBindingClass(r), O.$$addBindingInfo(r, n.expressions), t.$watch(n, function(t) {
                  i[0].nodeValue = t
                })
              }
          }
        })
      }

      function K(t, n) {
        switch (t = Wn(t || "html")) {
          case "svg":
          case "math":
            var i = e.createElement("div");
            return i.innerHTML = "<" + t + ">" + n + "</" + t + ">", i.childNodes[0].childNodes;
          default:
            return n
        }
      }

      function Q(t, e) {
        if ("srcdoc" == e) return A.HTML;
        var n = R(t);
        return "xlinkHref" == e || "form" == n && "action" == e || "img" != n && ("src" == e || "ngSrc" == e) ? A.RESOURCE_URL : void 0
      }

      function Z(t, e, n, r, o) {
        var s = Q(t, r);
        o = f[r] || o;
        var a = i(n, !0, s, o);
        if (a) {
          if ("multiple" === r && "select" === R(t)) throw Ii("selmulti", _(t));
          e.push({
            priority: 100,
            compile: function() {
              return {
                pre: function(t, e, u) {
                  if (e = u.$$observers || (u.$$observers = {}), v.test(r)) throw Ii("nodomevents");
                  var l = u[r];
                  l !== n && (a = l && i(l, !0, s, o), n = l), a && (u[r] = a(t), (e[r] || (e[r] = [])).$$inter = !0, (u.$$observers && u.$$observers[r].$$scope || t).$watch(a, function(t, e) {
                    "class" === r && t != e ? u.$updateClass(t, e) : u.$set(r, t)
                  }))
                }
              }
            }
          })
        }
      }

      function J(t, n, i) {
        var r, o, s = n[0],
          a = n.length,
          u = s.parentNode;
        if (t)
          for (r = 0, o = t.length; o > r; r++)
            if (t[r] == s) {
              t[r++] = i, o = r + a - 1;
              for (var l = t.length; l > r; r++, o++) l > o ? t[r] = t[o] : delete t[r];
              t.length -= a - 1, t.context === s && (t.context = i);
              break
            }
        for (u && u.replaceChild(i, s), t = e.createDocumentFragment(), t.appendChild(s), In.hasData(s) && (In(i).data(In(s).data()), Vn ? (Zn = !0, Vn.cleanData([s])) : delete In.cache[s[In.expando]]), s = 1, a = n.length; a > s; s++) u = n[s], In(u).remove(), t.appendChild(u), delete n[s];
        n[0] = i, n.length = 1
      }

      function tt(t, e) {
        return h(function() {
          return t.apply(null, arguments)
        }, t, e)
      }

      function et(t, e, n, i, o, s) {
        try {
          t(e, n, i, o, s)
        } catch (a) {
          r(a, _(n))
        }
      }

      function it(t, e, n, r, s, u) {
        var l;
        return o(r, function(r, o) {
          var u, c, h, f, p = r.attrName,
            d = r.optional;
          switch (r.mode) {
            case "@":
              d || zn.call(e, p) || (n[o] = e[p] = void 0), e.$observe(p, function(t) {
                C(t) && (n[o] = t)
              }), e.$$observers[p].$$scope = t, C(e[p]) && (n[o] = i(e[p])(t));
              break;
            case "=":
              if (!zn.call(e, p)) {
                if (d) break;
                e[p] = void 0
              }
              if (d && !e[p]) break;
              c = a(e[p]), f = c.literal ? I : function(t, e) {
                return t === e || t !== t && e !== e
              }, h = c.assign || function() {
                throw u = n[o] = c(t), Ii("nonassign", e[p], s.name)
              }, u = n[o] = c(t), d = function(e) {
                return f(e, n[o]) || (f(e, u) ? h(t, e = n[o]) : n[o] = e), u = e
              }, d.$stateful = !0, d = r.collection ? t.$watchCollection(e[p], d) : t.$watch(a(e[p], d), null, c.literal), l = l || [], l.push(d);
              break;
            case "&":
              if (c = e.hasOwnProperty(p) ? a(e[p]) : m, c === m && d) break;
              n[o] = function(e) {
                return c(t, e)
              }
          }
        }), r = l ? function() {
          for (var t = 0, e = l.length; e > t; ++t) l[t]()
        } : m, u && r !== m ? (u.$on("$destroy", r), m) : r
      }
      var ot = function(t, e) {
        if (e) {
          var n, i, r, o = Object.keys(e);
          for (n = 0, i = o.length; i > n; n++) r = o[n], this[r] = e[r]
        } else this.$attr = {};
        this.$$element = t
      };
      ot.prototype = {
        $normalize: Yt,
        $addClass: function(t) {
          t && 0 < t.length && E.addClass(this.$$element, t)
        },
        $removeClass: function(t) {
          t && 0 < t.length && E.removeClass(this.$$element, t)
        },
        $updateClass: function(t, e) {
          var n = Xt(t, e);
          n && n.length && E.addClass(this.$$element, n), (n = Xt(e, t)) && n.length && E.removeClass(this.$$element, n)
        },
        $set: function(t, e, i, s) {
          var a = this.$$element[0],
            u = Ot(a, t),
            l = Dt(a, t),
            a = t;
          if (u ? (this.$$element.prop(t, e), s = u) : l && (this[l] = e, a = l), this[t] = e, s ? this.$attr[t] = s : (s = this.$attr[t]) || (this.$attr[t] = s = nt(t, "-")), u = R(this.$$element), "a" === u && "href" === t || "img" === u && "src" === t) this[t] = e = T(e, "src" === t);
          else if ("img" === u && "srcset" === t) {
            for (var u = "", l = ei(e), c = /(\s+\d+x\s*,|\s+\d+w\s*,|\s+,|,\s+)/, c = /\s/.test(l) ? c : /(,)/, l = l.split(c), c = Math.floor(l.length / 2), h = 0; c > h; h++) var f = 2 * h,
              u = u + T(ei(l[f]), !0),
              u = u + (" " + ei(l[f + 1]));
            l = ei(l[2 * h]).split(/\s/), u += T(ei(l[0]), !0), 2 === l.length && (u += " " + ei(l[1])), this[t] = e = u
          }!1 !== i && (null === e || e === n ? this.$$element.removeAttr(s) : this.$$element.attr(s, e)), (t = this.$$observers) && o(t[a], function(t) {
            try {
              t(e)
            } catch (n) {
              r(n)
            }
          })
        },
        $observe: function(t, e) {
          var n = this,
            i = n.$$observers || (n.$$observers = lt()),
            r = i[t] || (i[t] = []);
          return r.push(e), b.$evalAsync(function() {
              r.$$inter || !n.hasOwnProperty(t) || y(n[t]) || e(n[t])
            }),
            function() {
              L(r, e)
            }
        }
      };
      var st = i.startSymbol(),
        at = i.endSymbol(),
        ut = "{{" == st || "}}" == at ? g : function(t) {
          return t.replace(/\{\{/g, st).replace(/}}/g, at)
        },
        ct = /^ngAttr[A-Z]/;
      return O.$$addBindingInfo = x ? function(t, e) {
        var n = t.data("$binding") || [];
        Jn(e) ? n = n.concat(e) : n.push(e), t.data("$binding", n)
      } : m, O.$$addBindingClass = x ? function(t) {
        M(t, "ng-binding")
      } : m, O.$$addScopeInfo = x ? function(t, e, n, i) {
        t.data(n ? i ? "$isolateScopeNoTemplate" : "$isolateScope" : "$scope", e)
      } : m, O.$$addScopeClass = x ? function(t, e) {
        M(t, e ? "ng-isolate-scope" : "ng-scope")
      } : m, O
    }]
  }

  function Yt(t) {
    return ft(t.replace(Vi, ""))
  }

  function Xt(t, e) {
    var n = "",
      i = t.split(/\s+/),
      r = e.split(/\s+/),
      o = 0;
    t: for (; o < i.length; o++) {
      for (var s = i[o], a = 0; a < r.length; a++)
        if (s == r[a]) continue t;
      n += (0 < n.length ? " " : "") + s
    }
    return n
  }

  function Kt(t) {
    t = In(t);
    var e = t.length;
    if (1 >= e) return t;
    for (; e--;) 8 === t[e].nodeType && _n.call(t, e, 1);
    return t
  }

  function Qt() {
    var t = {},
      e = !1;
    this.register = function(e, n) {
      st(e, "controller"), w(e) ? h(t, e) : t[e] = n
    }, this.allowGlobals = function() {
      e = !0
    }, this.$get = ["$injector", "$window", function(r, o) {
      function s(t, e, n, r) {
        if (!t || !w(t.$scope)) throw i("$controller")("noscp", r, e);
        t.$scope[e] = n
      }
      return function(i, a, u, l) {
        var c, f, p;
        if (u = !0 === u, l && C(l) && (p = l), C(i)) {
          if (l = i.match(Bi), !l) throw ji("ctrlfmt", i);
          f = l[1], p = p || l[3], i = t.hasOwnProperty(f) ? t[f] : at(a.$scope, f, !0) || (e ? at(o, f, !0) : n), ot(i, f, !0)
        }
        return u ? (u = (Jn(i) ? i[i.length - 1] : i).prototype, c = Object.create(u || null), p && s(a, p, c, f || i.name), h(function() {
          var t = r.invoke(i, c, a, f);
          return t !== c && (w(t) || k(t)) && (c = t, p && s(a, p, c, f || i.name)), c
        }, {
          instance: c,
          identifier: p
        })) : (c = r.instantiate(i, a, f), p && s(a, p, c, f || i.name), c)
      }
    }]
  }

  function Zt() {
    this.$get = ["$window", function(t) {
      return In(t.document)
    }]
  }

  function Jt() {
    this.$get = ["$log", function(t) {
      return function(e, n) {
        t.error.apply(t, arguments)
      }
    }]
  }

  function te(t) {
    return w(t) ? A(t) ? t.toISOString() : W(t) : t
  }

  function ee() {
    this.$get = function() {
      return function(t) {
        if (!t) return "";
        var e = [];
        return s(t, function(t, n) {
          null === t || y(t) || (Jn(t) ? o(t, function(t, i) {
            e.push(K(n) + "=" + K(te(t)))
          }) : e.push(K(n) + "=" + K(te(t))))
        }), e.join("&")
      }
    }
  }

  function ne() {
    this.$get = function() {
      return function(t) {
        function e(t, i, r) {
          null === t || y(t) || (Jn(t) ? o(t, function(t, n) {
            e(t, i + "[" + (w(t) ? n : "") + "]")
          }) : w(t) && !A(t) ? s(t, function(t, n) {
            e(t, i + (r ? "" : "[") + n + (r ? "" : "]"))
          }) : n.push(K(i) + "=" + K(te(t))))
        }
        if (!t) return "";
        var n = [];
        return e(t, "", !0), n.join("&")
      }
    }
  }

  function ie(t, e) {
    if (C(t)) {
      var n = t.replace(Ui, "").trim();
      if (n) {
        var i = e("Content-Type");
        (i = i && 0 === i.indexOf(zi)) || (i = (i = n.match(Hi)) && _i[i[0]].test(n)), i && (t = z(n))
      }
    }
    return t
  }

  function re(t) {
    var e, n = lt();
    return C(t) ? o(t.split("\n"), function(t) {
      e = t.indexOf(":");
      var i = Wn(ei(t.substr(0, e)));
      t = ei(t.substr(e + 1)), i && (n[i] = n[i] ? n[i] + ", " + t : t)
    }) : w(t) && o(t, function(t, e) {
      var i = Wn(e),
        r = ei(t);
      i && (n[i] = n[i] ? n[i] + ", " + r : r)
    }), n
  }

  function oe(t) {
    var e;
    return function(n) {
      return e || (e = re(t)), n ? (n = e[Wn(n)], void 0 === n && (n = null), n) : e
    }
  }

  function se(t, e, n, i) {
    return k(i) ? i(t, e, n) : (o(i, function(i) {
      t = i(t, e, n)
    }), t)
  }

  function ae() {
    var t = this.defaults = {
        transformResponse: [ie],
        transformRequest: [function(t) {
          return w(t) && "[object File]" !== Gn.call(t) && "[object Blob]" !== Gn.call(t) && "[object FormData]" !== Gn.call(t) ? W(t) : t
        }],
        headers: {
          common: {
            Accept: "application/json, text/plain, */*"
          },
          post: N(qi),
          put: N(qi),
          patch: N(qi)
        },
        xsrfCookieName: "XSRF-TOKEN",
        xsrfHeaderName: "X-XSRF-TOKEN",
        paramSerializer: "$httpParamSerializer"
      },
      e = !1;
    this.useApplyAsync = function(t) {
      return b(t) ? (e = !!t, this) : e
    };
    var r = !0;
    this.useLegacyPromiseExtensions = function(t) {
      return b(t) ? (r = !!t, this) : r
    };
    var s = this.interceptors = [];
    this.$get = ["$httpBackend", "$$cookieReader", "$cacheFactory", "$rootScope", "$q", "$injector", function(a, u, l, c, f, p) {
      function d(e) {
        function s(t) {
          var e = h({}, t);
          return e.data = t.data ? se(t.data, t.headers, t.status, u.transformResponse) : t.data, t = t.status, t >= 200 && 300 > t ? e : f.reject(e)
        }

        function a(t, e) {
          var n, i = {};
          return o(t, function(t, r) {
            k(t) ? (n = t(e), null != n && (i[r] = n)) : i[r] = t
          }), i
        }
        if (!Kn.isObject(e)) throw i("$http")("badreq", e);
        var u = h({
          method: "get",
          transformRequest: t.transformRequest,
          transformResponse: t.transformResponse,
          paramSerializer: t.paramSerializer
        }, e);
        u.headers = function(e) {
          var n, i, r, o = t.headers,
            s = h({}, e.headers),
            o = h({}, o.common, o[Wn(e.method)]);
          t: for (n in o) {
            i = Wn(n);
            for (r in s)
              if (Wn(r) === i) continue t;
            s[n] = o[n]
          }
          return a(s, N(e))
        }(e), u.method = qn(u.method), u.paramSerializer = C(u.paramSerializer) ? p.get(u.paramSerializer) : u.paramSerializer;
        var l = [function(e) {
            var i = e.headers,
              r = se(e.data, oe(i), n, e.transformRequest);
            return y(r) && o(i, function(t, e) {
              "content-type" === Wn(e) && delete i[e]
            }), y(e.withCredentials) && !y(t.withCredentials) && (e.withCredentials = t.withCredentials), m(e, r).then(s, s)
          }, n],
          c = f.when(u);
        for (o(v, function(t) {
            (t.request || t.requestError) && l.unshift(t.request, t.requestError), (t.response || t.responseError) && l.push(t.response, t.responseError)
          }); l.length;) {
          e = l.shift();
          var d = l.shift(),
            c = c.then(e, d)
        }
        return r ? (c.success = function(t) {
          return ot(t, "fn"), c.then(function(e) {
            t(e.data, e.status, e.headers, u)
          }), c
        }, c.error = function(t) {
          return ot(t, "fn"), c.then(null, function(e) {
            t(e.data, e.status, e.headers, u)
          }), c
        }) : (c.success = Yi("success"), c.error = Yi("error")), c
      }

      function m(i, r) {
        function o(t, n, i, r) {
          function o() {
            s(n, t, i, r)
          }
          p && (t >= 200 && 300 > t ? p.put(S, [t, n, re(i), r]) : p.remove(S)), e ? c.$applyAsync(o) : (o(), c.$$phase || c.$apply())
        }

        function s(t, e, n, r) {
          e = Math.max(e, 0), (e >= 200 && 300 > e ? v.resolve : v.reject)({
            data: t,
            status: e,
            headers: oe(n),
            config: i,
            statusText: r
          })
        }

        function l(t) {
          s(t.data, t.status, N(t.headers()), t.statusText)
        }

        function h() {
          var t = d.pendingRequests.indexOf(i); - 1 !== t && d.pendingRequests.splice(t, 1)
        }
        var p, m, v = f.defer(),
          x = v.promise,
          C = i.headers,
          S = g(i.url, i.paramSerializer(i.params));
        return d.pendingRequests.push(i), x.then(h, h), !i.cache && !t.cache || !1 === i.cache || "GET" !== i.method && "JSONP" !== i.method || (p = w(i.cache) ? i.cache : w(t.cache) ? t.cache : $), p && (m = p.get(S), b(m) ? m && k(m.then) ? m.then(l, l) : Jn(m) ? s(m[1], m[0], N(m[2]), m[3]) : s(m, 200, {}, "OK") : p.put(S, x)), y(m) && ((m = nn(i.url) ? u()[i.xsrfCookieName || t.xsrfCookieName] : n) && (C[i.xsrfHeaderName || t.xsrfHeaderName] = m), a(i.method, S, r, o, C, i.timeout, i.withCredentials, i.responseType)), x
      }

      function g(t, e) {
        return 0 < e.length && (t += (-1 == t.indexOf("?") ? "?" : "&") + e), t
      }
      var $ = l("$http");
      t.paramSerializer = C(t.paramSerializer) ? p.get(t.paramSerializer) : t.paramSerializer;
      var v = [];
      return o(s, function(t) {
          v.unshift(C(t) ? p.get(t) : p.invoke(t))
        }), d.pendingRequests = [],
        function(t) {
          o(arguments, function(t) {
            d[t] = function(e, n) {
              return d(h({}, n || {}, {
                method: t,
                url: e
              }))
            }
          })
        }("get", "delete", "head", "jsonp"),
        function(t) {
          o(arguments, function(t) {
            d[t] = function(e, n, i) {
              return d(h({}, i || {}, {
                method: t,
                url: e,
                data: n
              }))
            }
          })
        }("post", "put", "patch"), d.defaults = t, d
    }]
  }

  function ue() {
    return new t.XMLHttpRequest
  }

  function le() {
    this.$get = ["$browser", "$window", "$document", function(t, e, n) {
      return ce(t, ue, t.defer, e.angular.callbacks, n[0])
    }]
  }

  function ce(t, e, i, r, s) {
    function a(t, e, n) {
      var i = s.createElement("script"),
        o = null;
      return i.type = "text/javascript", i.src = t, i.async = !0, o = function(t) {
        i.removeEventListener("load", o, !1), i.removeEventListener("error", o, !1), s.body.removeChild(i), i = null;
        var a = -1,
          u = "unknown";
        t && ("load" !== t.type || r[e].called || (t = {
          type: "error"
        }), u = t.type, a = "error" === t.type ? 404 : 200), n && n(a, u)
      }, i.addEventListener("load", o, !1), i.addEventListener("error", o, !1), s.body.appendChild(i), o
    }
    return function(s, u, l, c, h, f, p, d) {
      function g() {
        y && y(), w && w.abort()
      }

      function $(e, r, o, s, a) {
        C !== n && i.cancel(C), y = w = null, e(r, o, s, a), t.$$completeOutstandingRequest(m)
      }
      if (t.$$incOutstandingRequestCount(), u = u || t.url(), "jsonp" == Wn(s)) {
        var v = "_" + (r.counter++).toString(36);
        r[v] = function(t) {
          r[v].data = t, r[v].called = !0
        };
        var y = a(u.replace("JSON_CALLBACK", "angular.callbacks." + v), v, function(t, e) {
          $(c, t, r[v].data, "", e), r[v] = m
        })
      } else {
        var w = e();
        if (w.open(s, u, !0), o(h, function(t, e) {
            b(t) && w.setRequestHeader(e, t)
          }), w.onload = function() {
            var t = w.statusText || "",
              e = "response" in w ? w.response : w.responseText,
              n = 1223 === w.status ? 204 : w.status;
            0 === n && (n = e ? 200 : "file" == en(u).protocol ? 404 : 0), $(c, n, e, w.getAllResponseHeaders(), t)
          }, s = function() {
            $(c, -1, null, null, "")
          }, w.onerror = s, w.onabort = s, p && (w.withCredentials = !0), d) try {
          w.responseType = d
        } catch (x) {
          if ("json" !== d) throw x
        }
        w.send(l)
      }
      if (f > 0) var C = i(g, f);
      else f && k(f.then) && f.then(g)
    }
  }

  function he() {
    var t = "{{",
      e = "}}";
    this.startSymbol = function(e) {
      return e ? (t = e, this) : t
    }, this.endSymbol = function(t) {
      return t ? (e = t, this) : e
    }, this.$get = ["$parse", "$exceptionHandler", "$sce", function(n, i, r) {
      function o(t) {
        return "\\\\\\" + t
      }

      function s(n) {
        return n.replace(c, t).replace(f, e)
      }

      function a(o, a, c, f) {
        function p(t) {
          try {
            var e = t;
            t = c ? r.getTrusted(c, e) : r.valueOf(e);
            var n;
            if (f && !b(t)) n = t;
            else if (null == t) n = "";
            else {
              switch (typeof t) {
                case "string":
                  break;
                case "number":
                  t = "" + t;
                  break;
                default:
                  t = W(t)
              }
              n = t
            }
            return n
          } catch (s) {
            i(Xi.interr(o, s))
          }
        }
        f = !!f;
        for (var d, m, g = 0, $ = [], v = [], w = o.length, x = [], C = []; w > g;) {
          if (-1 == (d = o.indexOf(t, g)) || -1 == (m = o.indexOf(e, d + u))) {
            g !== w && x.push(s(o.substring(g)));
            break
          }
          g !== d && x.push(s(o.substring(g, d))), g = o.substring(d + u, m), $.push(g), v.push(n(g, p)), g = m + l, C.push(x.length), x.push("")
        }
        if (c && 1 < x.length && Xi.throwNoconcat(o), !a || $.length) {
          var S = function(t) {
            for (var e = 0, n = $.length; n > e; e++) {
              if (f && y(t[e])) return;
              x[C[e]] = t[e]
            }
            return x.join("")
          };
          return h(function(t) {
            var e = 0,
              n = $.length,
              r = Array(n);
            try {
              for (; n > e; e++) r[e] = v[e](t);
              return S(r)
            } catch (s) {
              i(Xi.interr(o, s))
            }
          }, {
            exp: o,
            expressions: $,
            $$watchDelegate: function(t, e) {
              var n;
              return t.$watchGroup(v, function(i, r) {
                var o = S(i);
                k(e) && e.call(this, o, i !== r ? n : o, t), n = o
              })
            }
          })
        }
      }
      var u = t.length,
        l = e.length,
        c = new RegExp(t.replace(/./g, o), "g"),
        f = new RegExp(e.replace(/./g, o), "g");
      return a.startSymbol = function() {
        return t
      }, a.endSymbol = function() {
        return e
      }, a
    }]
  }

  function fe() {
    this.$get = ["$rootScope", "$window", "$q", "$$q", function(t, e, n, i) {
      function r(r, s, a, u) {
        var l = 4 < arguments.length,
          c = l ? Hn.call(arguments, 4) : [],
          h = e.setInterval,
          f = e.clearInterval,
          p = 0,
          d = b(u) && !u,
          m = (d ? i : n).defer(),
          g = m.promise;
        return a = b(a) ? a : 0, g.then(null, null, l ? function() {
          r.apply(null, c)
        } : r), g.$$intervalId = h(function() {
          m.notify(p++), a > 0 && p >= a && (m.resolve(p), f(g.$$intervalId), delete o[g.$$intervalId]), d || t.$apply()
        }, s), o[g.$$intervalId] = m, g
      }
      var o = {};
      return r.cancel = function(t) {
        return t && t.$$intervalId in o ? (o[t.$$intervalId].reject("canceled"), e.clearInterval(t.$$intervalId), delete o[t.$$intervalId], !0) : !1
      }, r
    }]
  }

  function pe(t) {
    t = t.split("/");
    for (var e = t.length; e--;) t[e] = X(t[e]);
    return t.join("/")
  }

  function de(t, e) {
    var n = en(t);
    e.$$protocol = n.protocol, e.$$host = n.hostname, e.$$port = p(n.port) || Qi[n.protocol] || null
  }

  function me(t, e) {
    var n = "/" !== t.charAt(0);
    n && (t = "/" + t);
    var i = en(t);
    e.$$path = decodeURIComponent(n && "/" === i.pathname.charAt(0) ? i.pathname.substring(1) : i.pathname), e.$$search = G(i.search), e.$$hash = decodeURIComponent(i.hash), e.$$path && "/" != e.$$path.charAt(0) && (e.$$path = "/" + e.$$path)
  }

  function ge(t, e) {
    return 0 === e.indexOf(t) ? e.substr(t.length) : void 0
  }

  function $e(t) {
    var e = t.indexOf("#");
    return -1 == e ? t : t.substr(0, e)
  }

  function ve(t) {
    return t.replace(/(#.+)|#$/, "$1")
  }

  function ye(t, e, i) {
    this.$$html5 = !0, i = i || "", de(t, this), this.$$parse = function(t) {
      var n = ge(e, t);
      if (!C(n)) throw Zi("ipthprfx", t, e);
      me(n, this), this.$$path || (this.$$path = "/"), this.$$compose()
    }, this.$$compose = function() {
      var t = Y(this.$$search),
        n = this.$$hash ? "#" + X(this.$$hash) : "";
      this.$$url = pe(this.$$path) + (t ? "?" + t : "") + n, this.$$absUrl = e + this.$$url.substr(1)
    }, this.$$parseLinkUrl = function(r, o) {
      if (o && "#" === o[0]) return this.hash(o.slice(1)), !0;
      var s, a;
      return (s = ge(t, r)) !== n ? (a = s, a = (s = ge(i, s)) !== n ? e + (ge("/", s) || s) : t + a) : (s = ge(e, r)) !== n ? a = e + s : e == r + "/" && (a = e), a && this.$$parse(a), !!a
    }
  }

  function be(t, e, n) {
    de(t, this), this.$$parse = function(i) {
      var r, o = ge(t, i) || ge(e, i);
      y(o) || "#" !== o.charAt(0) ? this.$$html5 ? r = o : (r = "", y(o) && (t = i, this.replace())) : (r = ge(n, o), y(r) && (r = o)), me(r, this), i = this.$$path;
      var o = t,
        s = /^\/[A-Z]:(\/.*)/;
      0 === r.indexOf(o) && (r = r.replace(o, "")), s.exec(r) || (i = (r = s.exec(i)) ? r[1] : i), this.$$path = i, this.$$compose()
    }, this.$$compose = function() {
      var e = Y(this.$$search),
        i = this.$$hash ? "#" + X(this.$$hash) : "";
      this.$$url = pe(this.$$path) + (e ? "?" + e : "") + i, this.$$absUrl = t + (this.$$url ? n + this.$$url : "")
    }, this.$$parseLinkUrl = function(e, n) {
      return $e(t) == $e(e) ? (this.$$parse(e), !0) : !1
    }
  }

  function we(t, e, n) {
    this.$$html5 = !0, be.apply(this, arguments), this.$$parseLinkUrl = function(i, r) {
      if (r && "#" === r[0]) return this.hash(r.slice(1)), !0;
      var o, s;
      return t == $e(i) ? o = i : (s = ge(e, i)) ? o = t + n + s : e === i + "/" && (o = e), o && this.$$parse(o), !!o
    }, this.$$compose = function() {
      var e = Y(this.$$search),
        i = this.$$hash ? "#" + X(this.$$hash) : "";
      this.$$url = pe(this.$$path) + (e ? "?" + e : "") + i, this.$$absUrl = t + n + this.$$url
    }
  }

  function xe(t) {
    return function() {
      return this[t]
    }
  }

  function Ce(t, e) {
    return function(n) {
      return y(n) ? this[t] : (this[t] = e(n), this.$$compose(), this)
    }
  }

  function Se() {
    var t = "",
      e = {
        enabled: !1,
        requireBase: !0,
        rewriteLinks: !0
      };
    this.hashPrefix = function(e) {
      return b(e) ? (t = e, this) : t
    }, this.html5Mode = function(t) {
      return M(t) ? (e.enabled = t, this) : w(t) ? (M(t.enabled) && (e.enabled = t.enabled), M(t.requireBase) && (e.requireBase = t.requireBase), M(t.rewriteLinks) && (e.rewriteLinks = t.rewriteLinks), this) : e
    }, this.$get = ["$rootScope", "$browser", "$sniffer", "$rootElement", "$window", function(n, i, r, o, s) {
      function a(t, e, n) {
        var r = l.url(),
          o = l.$$state;
        try {
          i.url(t, e, n), l.$$state = i.state()
        } catch (s) {
          throw l.url(r), l.$$state = o, s
        }
      }

      function u(t, e) {
        n.$broadcast("$locationChangeSuccess", l.absUrl(), t, l.$$state, e)
      }
      var l, c;
      c = i.baseHref();
      var h, f = i.url();
      if (e.enabled) {
        if (!c && e.requireBase) throw Zi("nobase");
        h = f.substring(0, f.indexOf("/", f.indexOf("//") + 2)) + (c || "/"), c = r.history ? ye : we
      } else h = $e(f), c = be;
      var p = h.substr(0, $e(h).lastIndexOf("/") + 1);
      l = new c(h, p, "#" + t), l.$$parseLinkUrl(f, f), l.$$state = i.state();
      var d = /^\s*(javascript|mailto):/i;
      o.on("click", function(t) {
        if (e.rewriteLinks && !t.ctrlKey && !t.metaKey && !t.shiftKey && 2 != t.which && 2 != t.button) {
          for (var r = In(t.target);
            "a" !== R(r[0]);)
            if (r[0] === o[0] || !(r = r.parent())[0]) return;
          var a = r.prop("href"),
            u = r.attr("href") || r.attr("xlink:href");
          w(a) && "[object SVGAnimatedString]" === a.toString() && (a = en(a.animVal).href), d.test(a) || !a || r.attr("target") || t.isDefaultPrevented() || !l.$$parseLinkUrl(a, u) || (t.preventDefault(), l.absUrl() != i.url() && (n.$apply(), s.angular["ff-684208-preventDefault"] = !0))
        }
      }), ve(l.absUrl()) != ve(f) && i.url(l.absUrl(), !0);
      var m = !0;
      return i.onUrlChange(function(t, e) {
        y(ge(p, t)) ? s.location.href = t : (n.$evalAsync(function() {
          var i, r = l.absUrl(),
            o = l.$$state;
          l.$$parse(t), l.$$state = e, i = n.$broadcast("$locationChangeStart", t, r, e, o).defaultPrevented, l.absUrl() === t && (i ? (l.$$parse(r), l.$$state = o, a(r, !1, o)) : (m = !1, u(r, o)))
        }), n.$$phase || n.$digest())
      }), n.$watch(function() {
        var t = ve(i.url()),
          e = ve(l.absUrl()),
          o = i.state(),
          s = l.$$replace,
          c = t !== e || l.$$html5 && r.history && o !== l.$$state;
        (m || c) && (m = !1, n.$evalAsync(function() {
          var e = l.absUrl(),
            i = n.$broadcast("$locationChangeStart", e, t, l.$$state, o).defaultPrevented;
          l.absUrl() === e && (i ? (l.$$parse(t), l.$$state = o) : (c && a(e, s, o === l.$$state ? null : l.$$state), u(t, o)))
        })), l.$$replace = !1
      }), l
    }]
  }

  function Ae() {
    var t = !0,
      e = this;
    this.debugEnabled = function(e) {
      return b(e) ? (t = e, this) : t
    }, this.$get = ["$window", function(n) {
      function i(t) {
        return t instanceof Error && (t.stack ? t = t.message && -1 === t.stack.indexOf(t.message) ? "Error: " + t.message + "\n" + t.stack : t.stack : t.sourceURL && (t = t.message + "\n" + t.sourceURL + ":" + t.line)), t
      }

      function r(t) {
        var e = n.console || {},
          r = e[t] || e.log || m;
        t = !1;
        try {
          t = !!r.apply
        } catch (s) {}
        return t ? function() {
          var t = [];
          return o(arguments, function(e) {
            t.push(i(e))
          }), r.apply(e, t)
        } : function(t, e) {
          r(t, null == e ? "" : e)
        }
      }
      return {
        log: r("log"),
        info: r("info"),
        warn: r("warn"),
        error: r("error"),
        debug: function() {
          var n = r("debug");
          return function() {
            t && n.apply(e, arguments)
          }
        }()
      }
    }]
  }

  function ke(t, e) {
    if ("__defineGetter__" === t || "__defineSetter__" === t || "__lookupGetter__" === t || "__lookupSetter__" === t || "__proto__" === t) throw tr("isecfld", e);
    return t
  }

  function Ee(t, e) {
    if (t) {
      if (t.constructor === t) throw tr("isecfn", e);
      if (t.window === t) throw tr("isecwindow", e);
      if (t.children && (t.nodeName || t.prop && t.attr && t.find)) throw tr("isecdom", e);
      if (t === Object) throw tr("isecobj", e)
    }
    return t
  }

  function Te(t, e) {
    if (t) {
      if (t.constructor === t) throw tr("isecfn", e);
      if (t === er || t === nr || t === ir) throw tr("isecff", e)
    }
  }

  function Pe(t, e) {
    return "undefined" != typeof t ? t : e
  }

  function Me(t, e) {
    return "undefined" == typeof t ? e : "undefined" == typeof e ? t : t + e
  }

  function Oe(t, e) {
    var n, i;
    switch (t.type) {
      case ar.Program:
        n = !0, o(t.body, function(t) {
          Oe(t.expression, e), n = n && t.expression.constant
        }), t.constant = n;
        break;
      case ar.Literal:
        t.constant = !0, t.toWatch = [];
        break;
      case ar.UnaryExpression:
        Oe(t.argument, e), t.constant = t.argument.constant, t.toWatch = t.argument.toWatch;
        break;
      case ar.BinaryExpression:
        Oe(t.left, e), Oe(t.right, e), t.constant = t.left.constant && t.right.constant, t.toWatch = t.left.toWatch.concat(t.right.toWatch);
        break;
      case ar.LogicalExpression:
        Oe(t.left, e), Oe(t.right, e), t.constant = t.left.constant && t.right.constant, t.toWatch = t.constant ? [] : [t];
        break;
      case ar.ConditionalExpression:
        Oe(t.test, e), Oe(t.alternate, e), Oe(t.consequent, e), t.constant = t.test.constant && t.alternate.constant && t.consequent.constant, t.toWatch = t.constant ? [] : [t];
        break;
      case ar.Identifier:
        t.constant = !1, t.toWatch = [t];
        break;
      case ar.MemberExpression:
        Oe(t.object, e), t.computed && Oe(t.property, e), t.constant = t.object.constant && (!t.computed || t.property.constant), t.toWatch = [t];
        break;
      case ar.CallExpression:
        n = t.filter ? !e(t.callee.name).$stateful : !1, i = [], o(t.arguments, function(t) {
          Oe(t, e), n = n && t.constant, t.constant || i.push.apply(i, t.toWatch)
        }), t.constant = n, t.toWatch = t.filter && !e(t.callee.name).$stateful ? i : [t];
        break;
      case ar.AssignmentExpression:
        Oe(t.left, e), Oe(t.right, e), t.constant = t.left.constant && t.right.constant, t.toWatch = [t];
        break;
      case ar.ArrayExpression:
        n = !0, i = [], o(t.elements, function(t) {
          Oe(t, e), n = n && t.constant, t.constant || i.push.apply(i, t.toWatch)
        }), t.constant = n, t.toWatch = i;
        break;
      case ar.ObjectExpression:
        n = !0, i = [], o(t.properties, function(t) {
          Oe(t.value, e), n = n && t.value.constant, t.value.constant || i.push.apply(i, t.value.toWatch)
        }), t.constant = n, t.toWatch = i;
        break;
      case ar.ThisExpression:
        t.constant = !1, t.toWatch = []
    }
  }

  function De(t) {
    if (1 == t.length) {
      t = t[0].expression;
      var e = t.toWatch;
      return 1 !== e.length ? e : e[0] !== t ? e : n
    }
  }

  function Re(t) {
    return t.type === ar.Identifier || t.type === ar.MemberExpression
  }

  function Le(t) {
    return 1 === t.body.length && Re(t.body[0].expression) ? {
      type: ar.AssignmentExpression,
      left: t.body[0].expression,
      right: {
        type: ar.NGValueParameter
      },
      operator: "="
    } : void 0
  }

  function Fe(t) {
    return 0 === t.body.length || 1 === t.body.length && (t.body[0].expression.type === ar.Literal || t.body[0].expression.type === ar.ArrayExpression || t.body[0].expression.type === ar.ObjectExpression)
  }

  function Ne(t, e) {
    this.astBuilder = t, this.$filter = e
  }

  function Ie(t, e) {
    this.astBuilder = t, this.$filter = e
  }

  function Ve(t) {
    return "constructor" == t
  }

  function je(t) {
    return k(t.valueOf) ? t.valueOf() : lr.call(t)
  }

  function Be() {
    var t = lt(),
      e = lt();
    this.$get = ["$filter", function(i) {
      function r(t, e) {
        return null == t || null == e ? t === e : "object" == typeof t && (t = je(t), "object" == typeof t) ? !1 : t === e || t !== t && e !== e
      }

      function s(t, e, i, o, s) {
        var a, u = o.inputs;
        if (1 === u.length) {
          var l = r,
            u = u[0];
          return t.$watch(function(t) {
            var e = u(t);
            return r(e, l) || (a = o(t, n, n, [e]), l = e && je(e)), a
          }, e, i, s)
        }
        for (var c = [], h = [], f = 0, p = u.length; p > f; f++) c[f] = r, h[f] = null;
        return t.$watch(function(t) {
          for (var e = !1, i = 0, s = u.length; s > i; i++) {
            var l = u[i](t);
            (e || (e = !r(l, c[i]))) && (h[i] = l, c[i] = l && je(l))
          }
          return e && (a = o(t, n, n, h)), a
        }, e, i, s)
      }

      function a(t, e, n, i) {
        var r, o;
        return r = t.$watch(function(t) {
          return i(t)
        }, function(t, n, i) {
          o = t, k(e) && e.apply(this, arguments), b(t) && i.$$postDigest(function() {
            b(o) && r()
          })
        }, n)
      }

      function u(t, e, n, i) {
        function r(t) {
          var e = !0;
          return o(t, function(t) {
            b(t) || (e = !1)
          }), e
        }
        var s, a;
        return s = t.$watch(function(t) {
          return i(t)
        }, function(t, n, i) {
          a = t, k(e) && e.call(this, t, n, i), r(t) && i.$$postDigest(function() {
            r(a) && s()
          })
        }, n)
      }

      function l(t, e, n, i) {
        var r;
        return r = t.$watch(function(t) {
          return i(t)
        }, function(t, n, i) {
          k(e) && e.apply(this, arguments), r()
        }, n)
      }

      function c(t, e) {
        if (!e) return t;
        var n = t.$$watchDelegate,
          n = n !== u && n !== a ? function(n, i, r, o) {
            return r = t(n, i, r, o), e(r, n, i)
          } : function(n, i, r, o) {
            return r = t(n, i, r, o), n = e(r, n, i), b(r) ? n : r
          };
        return t.$$watchDelegate && t.$$watchDelegate !== s ? n.$$watchDelegate = t.$$watchDelegate : e.$stateful || (n.$$watchDelegate = s, n.inputs = t.inputs ? t.inputs : [t]), n
      }
      var h = ii().noUnsafeEval,
        f = {
          csp: h,
          expensiveChecks: !1
        },
        p = {
          csp: h,
          expensiveChecks: !0
        };
      return function(n, r, o) {
        var h, d, g;
        switch (typeof n) {
          case "string":
            g = n = n.trim();
            var $ = o ? e : t;
            return h = $[g], h || (":" === n.charAt(0) && ":" === n.charAt(1) && (d = !0, n = n.substring(2)), o = o ? p : f, h = new sr(o), h = new ur(h, i, o).parse(n), h.constant ? h.$$watchDelegate = l : d ? h.$$watchDelegate = h.literal ? u : a : h.inputs && (h.$$watchDelegate = s), $[g] = h), c(h, r);
          case "function":
            return c(n, r);
          default:
            return m
        }
      }
    }]
  }

  function We() {
    this.$get = ["$rootScope", "$exceptionHandler", function(t, e) {
      return qe(function(e) {
        t.$evalAsync(e)
      }, e)
    }]
  }

  function ze() {
    this.$get = ["$browser", "$exceptionHandler", function(t, e) {
      return qe(function(e) {
        t.defer(e)
      }, e)
    }]
  }

  function qe(t, e) {
    function r(t, e, n) {
      function i(e) {
        return function(n) {
          r || (r = !0, e.call(t, n))
        }
      }
      var r = !1;
      return [i(e), i(n)]
    }

    function s() {
      this.$$state = {
        status: 0
      }
    }

    function a(t, e) {
      return function(n) {
        e.call(t, n)
      }
    }

    function u(i) {
      !i.processScheduled && i.pending && (i.processScheduled = !0, t(function() {
        var t, r, o;
        o = i.pending, i.processScheduled = !1, i.pending = n;
        for (var s = 0, a = o.length; a > s; ++s) {
          r = o[s][0], t = o[s][i.status];
          try {
            k(t) ? r.resolve(t(i.value)) : 1 === i.status ? r.resolve(i.value) : r.reject(i.value)
          } catch (u) {
            r.reject(u), e(u)
          }
        }
      }))
    }

    function l() {
      this.promise = new s, this.resolve = a(this, this.resolve), this.reject = a(this, this.reject), this.notify = a(this, this.notify)
    }
    var c = i("$q", TypeError);
    h(s.prototype, {
      then: function(t, e, n) {
        if (y(t) && y(e) && y(n)) return this;
        var i = new l;
        return this.$$state.pending = this.$$state.pending || [], this.$$state.pending.push([i, t, e, n]), 0 < this.$$state.status && u(this.$$state), i.promise
      },
      "catch": function(t) {
        return this.then(null, t)
      },
      "finally": function(t, e) {
        return this.then(function(e) {
          return p(e, !0, t)
        }, function(e) {
          return p(e, !1, t)
        }, e)
      }
    }), h(l.prototype, {
      resolve: function(t) {
        this.promise.$$state.status || (t === this.promise ? this.$$reject(c("qcycle", t)) : this.$$resolve(t))
      },
      $$resolve: function(t) {
        var n, i;
        i = r(this, this.$$resolve, this.$$reject);
        try {
          (w(t) || k(t)) && (n = t && t.then), k(n) ? (this.promise.$$state.status = -1, n.call(t, i[0], i[1], this.notify)) : (this.promise.$$state.value = t, this.promise.$$state.status = 1, u(this.promise.$$state))
        } catch (o) {
          i[1](o), e(o)
        }
      },
      reject: function(t) {
        this.promise.$$state.status || this.$$reject(t)
      },
      $$reject: function(t) {
        this.promise.$$state.value = t, this.promise.$$state.status = 2, u(this.promise.$$state)
      },
      notify: function(n) {
        var i = this.promise.$$state.pending;
        0 >= this.promise.$$state.status && i && i.length && t(function() {
          for (var t, r, o = 0, s = i.length; s > o; o++) {
            r = i[o][0], t = i[o][3];
            try {
              r.notify(k(t) ? t(n) : n)
            } catch (a) {
              e(a)
            }
          }
        })
      }
    });
    var f = function(t, e) {
        var n = new l;
        return e ? n.resolve(t) : n.reject(t), n.promise
      },
      p = function(t, e, n) {
        var i = null;
        try {
          k(n) && (i = n())
        } catch (r) {
          return f(r, !1)
        }
        return i && k(i.then) ? i.then(function() {
          return f(t, e)
        }, function(t) {
          return f(t, !1)
        }) : f(t, e)
      },
      d = function(t, e, n, i) {
        var r = new l;
        return r.resolve(t), r.promise.then(e, n, i)
      },
      m = function g(t) {
        if (!k(t)) throw c("norslvr", t);
        if (!(this instanceof g)) return new g(t);
        var e = new l;
        return t(function(t) {
          e.resolve(t)
        }, function(t) {
          e.reject(t)
        }), e.promise
      };
    return m.defer = function() {
      return new l
    }, m.reject = function(t) {
      var e = new l;
      return e.reject(t), e.promise
    }, m.when = d, m.resolve = d, m.all = function(t) {
      var e = new l,
        n = 0,
        i = Jn(t) ? [] : {};
      return o(t, function(t, r) {
        n++, d(t).then(function(t) {
          i.hasOwnProperty(r) || (i[r] = t, --n || e.resolve(i))
        }, function(t) {
          i.hasOwnProperty(r) || e.reject(t)
        })
      }), 0 === n && e.resolve(i), e.promise
    }, m
  }

  function He() {
    this.$get = ["$window", "$timeout", function(t, e) {
      var n = t.requestAnimationFrame || t.webkitRequestAnimationFrame,
        i = t.cancelAnimationFrame || t.webkitCancelAnimationFrame || t.webkitCancelRequestAnimationFrame,
        r = !!n,
        o = r ? function(t) {
          var e = n(t);
          return function() {
            i(e)
          }
        } : function(t) {
          var n = e(t, 16.66, !1);
          return function() {
            e.cancel(n)
          }
        };
      return o.supported = r, o
    }]
  }

  function _e() {
    function t(t) {
      function e() {
        this.$$watchers = this.$$nextSibling = this.$$childHead = this.$$childTail = null, this.$$listeners = {}, this.$$listenerCount = {}, this.$$watchersCount = 0, this.$id = ++Qn, this.$$ChildScope = null
      }
      return e.prototype = t, e
    }
    var e = 10,
      n = i("$rootScope"),
      s = null,
      a = null;
    this.digestTtl = function(t) {
      return arguments.length && (e = t), e
    }, this.$get = ["$injector", "$exceptionHandler", "$parse", "$browser", function(i, u, l, c) {
      function h(t) {
        t.currentScope.$$destroyed = !0
      }

      function f() {
        this.$id = ++Qn, this.$$phase = this.$parent = this.$$watchers = this.$$nextSibling = this.$$prevSibling = this.$$childHead = this.$$childTail = null, this.$root = this, this.$$destroyed = !1, this.$$listeners = {}, this.$$listenerCount = {}, this.$$watchersCount = 0, this.$$isolateBindings = null
      }

      function p(t) {
        if (x.$$phase) throw n("inprog", x.$$phase);
        x.$$phase = t
      }

      function d(t, e) {
        do t.$$watchersCount += e; while (t = t.$parent)
      }

      function g(t, e, n) {
        do t.$$listenerCount[n] -= e, 0 === t.$$listenerCount[n] && delete t.$$listenerCount[n]; while (t = t.$parent)
      }

      function $() {}

      function v() {
        for (; A.length;) try {
          A.shift()()
        } catch (t) {
          u(t)
        }
        a = null
      }

      function b() {
        null === a && (a = c.defer(function() {
          x.$apply(v)
        }))
      }
      f.prototype = {
        constructor: f,
        $new: function(e, n) {
          var i;
          return n = n || this, e ? (i = new f, i.$root = this.$root) : (this.$$ChildScope || (this.$$ChildScope = t(this)), i = new this.$$ChildScope), i.$parent = n, i.$$prevSibling = n.$$childTail, n.$$childHead ? (n.$$childTail.$$nextSibling = i, n.$$childTail = i) : n.$$childHead = n.$$childTail = i, (e || n != this) && i.$on("$destroy", h), i
        },
        $watch: function(t, e, n, i) {
          var r = l(t);
          if (r.$$watchDelegate) return r.$$watchDelegate(this, e, n, r, t);
          var o = this,
            a = o.$$watchers,
            u = {
              fn: e,
              last: $,
              get: r,
              exp: i || t,
              eq: !!n
            };
          return s = null, k(e) || (u.fn = m), a || (a = o.$$watchers = []), a.unshift(u), d(this, 1),
            function() {
              0 <= L(a, u) && d(o, -1), s = null
            }
        },
        $watchGroup: function(t, e) {
          function n() {
            u = !1, l ? (l = !1, e(r, r, a)) : e(r, i, a)
          }
          var i = Array(t.length),
            r = Array(t.length),
            s = [],
            a = this,
            u = !1,
            l = !0;
          if (!t.length) {
            var c = !0;
            return a.$evalAsync(function() {
                c && e(r, r, a)
              }),
              function() {
                c = !1
              }
          }
          return 1 === t.length ? this.$watch(t[0], function(t, n, o) {
            r[0] = t, i[0] = n, e(r, t === n ? r : i, o)
          }) : (o(t, function(t, e) {
            var o = a.$watch(t, function(t, o) {
              r[e] = t, i[e] = o, u || (u = !0, a.$evalAsync(n))
            });
            s.push(o)
          }), function() {
            for (; s.length;) s.shift()()
          })
        },
        $watchCollection: function(t, e) {
          function n(t) {
            i = t;
            var e, n, s, a;
            if (!y(i)) {
              if (w(i))
                if (r(i))
                  for (o !== f && (o = f, m = o.length = 0, c++), t = i.length, m !== t && (c++, o.length = m = t), e = 0; t > e; e++) a = o[e], s = i[e], n = a !== a && s !== s, n || a === s || (c++, o[e] = s);
                else {
                  o !== p && (o = p = {}, m = 0, c++), t = 0;
                  for (e in i) i.hasOwnProperty(e) && (t++, s = i[e], a = o[e], e in o ? (n = a !== a && s !== s, n || a === s || (c++, o[e] = s)) : (m++, o[e] = s, c++));
                  if (m > t)
                    for (e in c++, o) i.hasOwnProperty(e) || (m--, delete o[e])
                }
              else o !== i && (o = i, c++);
              return c
            }
          }
          n.$stateful = !0;
          var i, o, s, a = this,
            u = 1 < e.length,
            c = 0,
            h = l(t, n),
            f = [],
            p = {},
            d = !0,
            m = 0;
          return this.$watch(h, function() {
            if (d ? (d = !1, e(i, i, a)) : e(i, s, a), u)
              if (w(i))
                if (r(i)) {
                  s = Array(i.length);
                  for (var t = 0; t < i.length; t++) s[t] = i[t]
                } else
                  for (t in s = {}, i) zn.call(i, t) && (s[t] = i[t]);
            else s = i
          })
        },
        $digest: function() {
          var t, i, r, o, l, h, f, d, m, g = e,
            y = [];
          p("$digest"), c.$$checkUrlChange(), this === x && null !== a && (c.defer.cancel(a), v()), s = null;
          do {
            for (h = !1, f = this; C.length;) {
              try {
                m = C.shift(), m.scope.$eval(m.expression, m.locals)
              } catch (b) {
                u(b)
              }
              s = null
            }
            t: do {
              if (o = f.$$watchers)
                for (l = o.length; l--;) try {
                  if (t = o[l])
                    if ((i = t.get(f)) === (r = t.last) || (t.eq ? I(i, r) : "number" == typeof i && "number" == typeof r && isNaN(i) && isNaN(r))) {
                      if (t === s) {
                        h = !1;
                        break t
                      }
                    } else h = !0, s = t, t.last = t.eq ? F(i, null) : i, t.fn(i, r === $ ? i : r, f), 5 > g && (d = 4 - g, y[d] || (y[d] = []), y[d].push({
                      msg: k(t.exp) ? "fn: " + (t.exp.name || t.exp.toString()) : t.exp,
                      newVal: i,
                      oldVal: r
                    }))
                } catch (w) {
                  u(w)
                }
              if (!(o = f.$$watchersCount && f.$$childHead || f !== this && f.$$nextSibling))
                for (; f !== this && !(o = f.$$nextSibling);) f = f.$parent
            } while (f = o);
            if ((h || C.length) && !g--) throw x.$$phase = null, n("infdig", e, y)
          } while (h || C.length);
          for (x.$$phase = null; S.length;) try {
            S.shift()()
          } catch (A) {
            u(A)
          }
        },
        $destroy: function() {
          if (!this.$$destroyed) {
            var t = this.$parent;
            this.$broadcast("$destroy"), this.$$destroyed = !0, this === x && c.$$applicationDestroyed(), d(this, -this.$$watchersCount);
            for (var e in this.$$listenerCount) g(this, this.$$listenerCount[e], e);
            t && t.$$childHead == this && (t.$$childHead = this.$$nextSibling), t && t.$$childTail == this && (t.$$childTail = this.$$prevSibling), this.$$prevSibling && (this.$$prevSibling.$$nextSibling = this.$$nextSibling), this.$$nextSibling && (this.$$nextSibling.$$prevSibling = this.$$prevSibling), this.$destroy = this.$digest = this.$apply = this.$evalAsync = this.$applyAsync = m, this.$on = this.$watch = this.$watchGroup = function() {
              return m
            }, this.$$listeners = {}, this.$parent = this.$$nextSibling = this.$$prevSibling = this.$$childHead = this.$$childTail = this.$root = this.$$watchers = null
          }
        },
        $eval: function(t, e) {
          return l(t)(this, e)
        },
        $evalAsync: function(t, e) {
          x.$$phase || C.length || c.defer(function() {
            C.length && x.$digest()
          }), C.push({
            scope: this,
            expression: t,
            locals: e
          })
        },
        $$postDigest: function(t) {
          S.push(t)
        },
        $apply: function(t) {
          try {
            p("$apply");
            try {
              return this.$eval(t)
            } finally {
              x.$$phase = null
            }
          } catch (e) {
            u(e)
          } finally {
            try {
              x.$digest()
            } catch (n) {
              throw u(n), n
            }
          }
        },
        $applyAsync: function(t) {
          function e() {
            n.$eval(t)
          }
          var n = this;
          t && A.push(e), b()
        },
        $on: function(t, e) {
          var n = this.$$listeners[t];
          n || (this.$$listeners[t] = n = []), n.push(e);
          var i = this;
          do i.$$listenerCount[t] || (i.$$listenerCount[t] = 0), i.$$listenerCount[t]++; while (i = i.$parent);
          var r = this;
          return function() {
            var i = n.indexOf(e); - 1 !== i && (n[i] = null, g(r, 1, t))
          }
        },
        $emit: function(t, e) {
          var n, i, r, o = [],
            s = this,
            a = !1,
            l = {
              name: t,
              targetScope: s,
              stopPropagation: function() {
                a = !0
              },
              preventDefault: function() {
                l.defaultPrevented = !0
              },
              defaultPrevented: !1
            },
            c = V([l], arguments, 1);
          do {
            for (n = s.$$listeners[t] || o, l.currentScope = s, i = 0, r = n.length; r > i; i++)
              if (n[i]) try {
                n[i].apply(null, c)
              } catch (h) {
                u(h)
              } else n.splice(i, 1), i--, r--;
            if (a) return l.currentScope = null, l;
            s = s.$parent
          } while (s);
          return l.currentScope = null, l
        },
        $broadcast: function(t, e) {
          var n = this,
            i = this,
            r = {
              name: t,
              targetScope: this,
              preventDefault: function() {
                r.defaultPrevented = !0
              },
              defaultPrevented: !1
            };
          if (!this.$$listenerCount[t]) return r;
          for (var o, s, a = V([r], arguments, 1); n = i;) {
            for (r.currentScope = n, i = n.$$listeners[t] || [], o = 0, s = i.length; s > o; o++)
              if (i[o]) try {
                i[o].apply(null, a)
              } catch (l) {
                u(l)
              } else i.splice(o, 1), o--, s--;
            if (!(i = n.$$listenerCount[t] && n.$$childHead || n !== this && n.$$nextSibling))
              for (; n !== this && !(i = n.$$nextSibling);) n = n.$parent
          }
          return r.currentScope = null, r
        }
      };
      var x = new f,
        C = x.$$asyncQueue = [],
        S = x.$$postDigestQueue = [],
        A = x.$$applyAsyncQueue = [];
      return x
    }]
  }

  function Ue() {
    var t = /^\s*(https?|ftp|mailto|tel|file):/,
      e = /^\s*((https?|ftp|file|blob):|data:image\/)/;
    this.aHrefSanitizationWhitelist = function(e) {
      return b(e) ? (t = e, this) : t
    }, this.imgSrcSanitizationWhitelist = function(t) {
      return b(t) ? (e = t, this) : e
    }, this.$get = function() {
      return function(n, i) {
        var r, o = i ? e : t;
        return r = en(n).href, "" === r || r.match(o) ? n : "unsafe:" + r
      }
    }
  }

  function Ge(t) {
    if ("self" === t) return t;
    if (C(t)) {
      if (-1 < t.indexOf("***")) throw cr("iwcard", t);
      return t = ni(t).replace("\\*\\*", ".*").replace("\\*", "[^:/.?&;]*"), new RegExp("^" + t + "$")
    }
    if (E(t)) return new RegExp("^" + t.source + "$");
    throw cr("imatcher")
  }

  function Ye(t) {
    var e = [];
    return b(t) && o(t, function(t) {
      e.push(Ge(t))
    }), e
  }

  function Xe() {
    this.SCE_CONTEXTS = hr;
    var t = ["self"],
      e = [];
    this.resourceUrlWhitelist = function(e) {
      return arguments.length && (t = Ye(e)), t
    }, this.resourceUrlBlacklist = function(t) {
      return arguments.length && (e = Ye(t)), e
    }, this.$get = ["$injector", function(i) {
      function r(t, e) {
        return "self" === t ? nn(e) : !!t.exec(e.href)
      }

      function o(t) {
        var e = function(t) {
          this.$$unwrapTrustedValue = function() {
            return t
          }
        };
        return t && (e.prototype = new t), e.prototype.valueOf = function() {
          return this.$$unwrapTrustedValue()
        }, e.prototype.toString = function() {
          return this.$$unwrapTrustedValue().toString()
        }, e
      }
      var s = function(t) {
        throw cr("unsafe")
      };
      i.has("$sanitize") && (s = i.get("$sanitize"));
      var a = o(),
        u = {};
      return u[hr.HTML] = o(a), u[hr.CSS] = o(a), u[hr.URL] = o(a), u[hr.JS] = o(a), u[hr.RESOURCE_URL] = o(u[hr.URL]), {
        trustAs: function(t, e) {
          var i = u.hasOwnProperty(t) ? u[t] : null;
          if (!i) throw cr("icontext", t, e);
          if (null === e || e === n || "" === e) return e;
          if ("string" != typeof e) throw cr("itype", t);
          return new i(e)
        },
        getTrusted: function(i, o) {
          if (null === o || o === n || "" === o) return o;
          var a = u.hasOwnProperty(i) ? u[i] : null;
          if (a && o instanceof a) return o.$$unwrapTrustedValue();
          if (i === hr.RESOURCE_URL) {
            var l, c, a = en(o.toString()),
              h = !1;
            for (l = 0, c = t.length; c > l; l++)
              if (r(t[l], a)) {
                h = !0;
                break
              }
            if (h)
              for (l = 0, c = e.length; c > l; l++)
                if (r(e[l], a)) {
                  h = !1;
                  break
                }
            if (h) return o;
            throw cr("insecurl", o.toString())
          }
          if (i === hr.HTML) return s(o);
          throw cr("unsafe")
        },
        valueOf: function(t) {
          return t instanceof a ? t.$$unwrapTrustedValue() : t
        }
      }
    }]
  }

  function Ke() {
    var t = !0;
    this.enabled = function(e) {
      return arguments.length && (t = !!e), t
    }, this.$get = ["$parse", "$sceDelegate", function(e, n) {
      if (t && 8 > Nn) throw cr("iequirks");
      var i = N(hr);
      i.isEnabled = function() {
        return t
      }, i.trustAs = n.trustAs, i.getTrusted = n.getTrusted, i.valueOf = n.valueOf, t || (i.trustAs = i.getTrusted = function(t, e) {
        return e
      }, i.valueOf = g), i.parseAs = function(t, n) {
        var r = e(n);
        return r.literal && r.constant ? r : e(n, function(e) {
          return i.getTrusted(t, e)
        })
      };
      var r = i.parseAs,
        s = i.getTrusted,
        a = i.trustAs;
      return o(hr, function(t, e) {
        var n = Wn(e);
        i[ft("parse_as_" + n)] = function(e) {
          return r(t, e)
        }, i[ft("get_trusted_" + n)] = function(e) {
          return s(t, e)
        }, i[ft("trust_as_" + n)] = function(e) {
          return a(t, e)
        }
      }), i
    }]
  }

  function Qe() {
    this.$get = ["$window", "$document", function(t, e) {
      var n, i = {},
        r = p((/android (\d+)/.exec(Wn((t.navigator || {}).userAgent)) || [])[1]),
        o = /Boxee/i.test((t.navigator || {}).userAgent),
        s = e[0] || {},
        a = /^(Moz|webkit|ms)(?=[A-Z])/,
        u = s.body && s.body.style,
        l = !1,
        c = !1;
      if (u) {
        for (var h in u)
          if (l = a.exec(h)) {
            n = l[0], n = n.substr(0, 1).toUpperCase() + n.substr(1);
            break
          }
        n || (n = "WebkitOpacity" in u && "webkit"), l = !!("transition" in u || n + "Transition" in u), c = !!("animation" in u || n + "Animation" in u), !r || l && c || (l = C(u.webkitTransition), c = C(u.webkitAnimation))
      }
      return {
        history: !(!t.history || !t.history.pushState || 4 > r || o),
        hasEvent: function(t) {
          if ("input" === t && 11 >= Nn) return !1;
          if (y(i[t])) {
            var e = s.createElement("div");
            i[t] = "on" + t in e
          }
          return i[t]
        },
        csp: ii(),
        vendorPrefix: n,
        transitions: l,
        animations: c,
        android: r
      }
    }]
  }

  function Ze() {
    this.$get = ["$templateCache", "$http", "$q", "$sce", function(t, e, n, i) {
      function r(o, s) {
        r.totalPendingRequests++, C(o) && t.get(o) || (o = i.getTrustedResourceUrl(o));
        var a = e.defaults && e.defaults.transformResponse;
        return Jn(a) ? a = a.filter(function(t) {
          return t !== ie
        }) : a === ie && (a = null), e.get(o, {
          cache: t,
          transformResponse: a
        })["finally"](function() {
          r.totalPendingRequests--
        }).then(function(e) {
          return t.put(o, e.data), e.data
        }, function(t) {
          if (!s) throw Ii("tpload", o, t.status, t.statusText);
          return n.reject(t)
        })
      }
      return r.totalPendingRequests = 0, r
    }]
  }

  function Je() {
    this.$get = ["$rootScope", "$browser", "$location", function(t, e, n) {
      return {
        findBindings: function(t, e, n) {
          t = t.getElementsByClassName("ng-binding");
          var i = [];
          return o(t, function(t) {
            var r = Kn.element(t).data("$binding");
            r && o(r, function(r) {
              n ? new RegExp("(^|\\s)" + ni(e) + "(\\s|\\||$)").test(r) && i.push(t) : -1 != r.indexOf(e) && i.push(t)
            })
          }), i
        },
        findModels: function(t, e, n) {
          for (var i = ["ng-", "data-ng-", "ng\\:"], r = 0; r < i.length; ++r) {
            var o = t.querySelectorAll("[" + i[r] + "model" + (n ? "=" : "*=") + '"' + e + '"]');
            if (o.length) return o
          }
        },
        getLocation: function() {
          return n.url()
        },
        setLocation: function(e) {
          e !== n.url() && (n.url(e), t.$digest())
        },
        whenStable: function(t) {
          e.notifyWhenNoOutstandingRequests(t)
        }
      }
    }]
  }

  function tn() {
    this.$get = ["$rootScope", "$browser", "$q", "$$q", "$exceptionHandler", function(t, e, n, i, r) {
      function o(o, a, u) {
        k(o) || (u = a, a = o, o = m);
        var l, c = Hn.call(arguments, 3),
          h = b(u) && !u,
          f = (h ? i : n).defer(),
          p = f.promise;
        return l = e.defer(function() {
          try {
            f.resolve(o.apply(null, c))
          } catch (e) {
            f.reject(e), r(e)
          } finally {
            delete s[p.$$timeoutId]
          }
          h || t.$apply()
        }, a), p.$$timeoutId = l, s[l] = f, p
      }
      var s = {};
      return o.cancel = function(t) {
        return t && t.$$timeoutId in s ? (s[t.$$timeoutId].reject("canceled"), delete s[t.$$timeoutId], e.defer.cancel(t.$$timeoutId)) : !1
      }, o
    }]
  }

  function en(t) {
    return Nn && (fr.setAttribute("href", t), t = fr.href), fr.setAttribute("href", t), {
      href: fr.href,
      protocol: fr.protocol ? fr.protocol.replace(/:$/, "") : "",
      host: fr.host,
      search: fr.search ? fr.search.replace(/^\?/, "") : "",
      hash: fr.hash ? fr.hash.replace(/^#/, "") : "",
      hostname: fr.hostname,
      port: fr.port,
      pathname: "/" === fr.pathname.charAt(0) ? fr.pathname : "/" + fr.pathname
    }
  }

  function nn(t) {
    return t = C(t) ? en(t) : t, t.protocol === pr.protocol && t.host === pr.host
  }

  function rn() {
    this.$get = $(t)
  }

  function on(t) {
    function e(t) {
      try {
        return decodeURIComponent(t)
      } catch (e) {
        return t
      }
    }
    var i = t[0] || {},
      r = {},
      o = "";
    return function() {
      var t, s, a, u, l;
      if (t = i.cookie || "", t !== o)
        for (o = t, t = o.split("; "), r = {}, a = 0; a < t.length; a++) s = t[a], u = s.indexOf("="), u > 0 && (l = e(s.substring(0, u)), r[l] === n && (r[l] = e(s.substring(u + 1))));
      return r
    }
  }

  function sn() {
    this.$get = on
  }

  function an(t) {
    function e(n, i) {
      if (w(n)) {
        var r = {};
        return o(n, function(t, n) {
          r[n] = e(n, t)
        }), r
      }
      return t.factory(n + "Filter", i)
    }
    this.register = e, this.$get = ["$injector", function(t) {
      return function(e) {
        return t.get(e + "Filter")
      }
    }], e("currency", fn), e("date", wn), e("filter", un), e("json", xn), e("limitTo", Cn), e("lowercase", vr), e("number", pn), e("orderBy", Sn), e("uppercase", yr)
  }

  function un() {
    return function(t, e, n) {
      if (!r(t)) {
        if (null == t) return t;
        throw i("filter")("notarray", t)
      }
      var o;
      switch (hn(e)) {
        case "function":
          break;
        case "boolean":
        case "null":
        case "number":
        case "string":
          o = !0;
        case "object":
          e = ln(e, n, o);
          break;
        default:
          return t
      }
      return Array.prototype.filter.call(t, e)
    }
  }

  function ln(t, e, n) {
    var i = w(t) && "$" in t;
    return !0 === e ? e = I : k(e) || (e = function(t, e) {
        return y(t) ? !1 : null === t || null === e ? t === e : w(e) || w(t) && !v(t) ? !1 : (t = Wn("" + t), e = Wn("" + e), -1 !== t.indexOf(e))
      }),
      function(r) {
        return i && !w(r) ? cn(r, t.$, e, !1) : cn(r, t, e, n)
      }
  }

  function cn(t, e, n, i, r) {
    var o = hn(t),
      s = hn(e);
    if ("string" === s && "!" === e.charAt(0)) return !cn(t, e.substring(1), n, i);
    if (Jn(t)) return t.some(function(t) {
      return cn(t, e, n, i)
    });
    switch (o) {
      case "object":
        var a;
        if (i) {
          for (a in t)
            if ("$" !== a.charAt(0) && cn(t[a], e, n, !0)) return !0;
          return r ? !1 : cn(t, e, n, !1)
        }
        if ("object" === s) {
          for (a in e)
            if (r = e[a], !k(r) && !y(r) && (o = "$" === a, !cn(o ? t : t[a], r, n, o, o))) return !1;
          return !0
        }
        return n(t, e);
      case "function":
        return !1;
      default:
        return n(t, e)
    }
  }

  function hn(t) {
    return null === t ? "null" : typeof t
  }

  function fn(t) {
    var e = t.NUMBER_FORMATS;
    return function(t, n, i) {
      return y(n) && (n = e.CURRENCY_SYM), y(i) && (i = e.PATTERNS[1].maxFrac), null == t ? t : dn(t, e.PATTERNS[1], e.GROUP_SEP, e.DECIMAL_SEP, i).replace(/\u00A4/g, n)
    }
  }

  function pn(t) {
    var e = t.NUMBER_FORMATS;
    return function(t, n) {
      return null == t ? t : dn(t, e.PATTERNS[0], e.GROUP_SEP, e.DECIMAL_SEP, n)
    }
  }

  function dn(t, e, n, i, r) {
    if (w(t)) return "";
    var o = 0 > t;
    t = Math.abs(t);
    var s = 1 / 0 === t;
    if (!s && !isFinite(t)) return "";
    var a = t + "",
      u = "",
      l = !1,
      c = [];
    if (s && (u = "\u221e"), !s && -1 !== a.indexOf("e")) {
      var h = a.match(/([\d\.]+)e(-?)(\d+)/);
      h && "-" == h[2] && h[3] > r + 1 ? t = 0 : (u = a, l = !0)
    }
    if (s || l) r > 0 && 1 > t && (u = t.toFixed(r), t = parseFloat(u));
    else {
      s = (a.split(dr)[1] || "").length, y(r) && (r = Math.min(Math.max(e.minFrac, s), e.maxFrac)), t = +(Math.round(+(t.toString() + "e" + r)).toString() + "e" + -r);
      var s = ("" + t).split(dr),
        a = s[0],
        s = s[1] || "",
        h = 0,
        f = e.lgSize,
        p = e.gSize;
      if (a.length >= f + p)
        for (h = a.length - f, l = 0; h > l; l++) 0 === (h - l) % p && 0 !== l && (u += n), u += a.charAt(l);
      for (l = h; l < a.length; l++) 0 === (a.length - l) % f && 0 !== l && (u += n), u += a.charAt(l);
      for (; s.length < r;) s += "0";
      r && "0" !== r && (u += i + s.substr(0, r))
    }
    return 0 === t && (o = !1), c.push(o ? e.negPre : e.posPre, u, o ? e.negSuf : e.posSuf), c.join("")
  }

  function mn(t, e, n) {
    var i = "";
    for (0 > t && (i = "-", t = -t), t = "" + t; t.length < e;) t = "0" + t;
    return n && (t = t.substr(t.length - e)), i + t
  }

  function gn(t, e, n, i) {
    return n = n || 0,
      function(r) {
        return r = r["get" + t](), (n > 0 || r > -n) && (r += n), 0 === r && -12 == n && (r = 12), mn(r, e, i)
      }
  }

  function $n(t, e) {
    return function(n, i) {
      var r = n["get" + t](),
        o = qn(e ? "SHORT" + t : t);
      return i[o][r]
    }
  }

  function vn(t) {
    var e = new Date(t, 0, 1).getDay();
    return new Date(t, 0, (4 >= e ? 5 : 12) - e)
  }

  function yn(t) {
    return function(e) {
      var n = vn(e.getFullYear());
      return e = +new Date(e.getFullYear(), e.getMonth(), e.getDate() + (4 - e.getDay())) - +n, e = 1 + Math.round(e / 6048e5), mn(e, t)
    }
  }

  function bn(t, e) {
    return 0 >= t.getFullYear() ? e.ERAS[0] : e.ERAS[1]
  }

  function wn(t) {
    function e(t) {
      var e;
      if (e = t.match(n)) {
        t = new Date(0);
        var i = 0,
          r = 0,
          o = e[8] ? t.setUTCFullYear : t.setFullYear,
          s = e[8] ? t.setUTCHours : t.setHours;
        e[9] && (i = p(e[9] + e[10]), r = p(e[9] + e[11])), o.call(t, p(e[1]), p(e[2]) - 1, p(e[3])), i = p(e[4] || 0) - i, r = p(e[5] || 0) - r, o = p(e[6] || 0), e = Math.round(1e3 * parseFloat("0." + (e[7] || 0))), s.call(t, i, r, o, e)
      }
      return t
    }
    var n = /^(\d{4})-?(\d\d)-?(\d\d)(?:T(\d\d)(?::?(\d\d)(?::?(\d\d)(?:\.(\d+))?)?)?(Z|([+-])(\d\d):?(\d\d))?)?$/;
    return function(n, i, r) {
      var s, a, u = "",
        l = [];
      if (i = i || "mediumDate", i = t.DATETIME_FORMATS[i] || i, C(n) && (n = $r.test(n) ? p(n) : e(n)), S(n) && (n = new Date(n)), !A(n) || !isFinite(n.getTime())) return n;
      for (; i;)(a = gr.exec(i)) ? (l = V(l, a, 1), i = l.pop()) : (l.push(i), i = null);
      var c = n.getTimezoneOffset();
      return r && (c = q(r, n.getTimezoneOffset()), n = H(n, r, !0)), o(l, function(e) {
        s = mr[e], u += s ? s(n, t.DATETIME_FORMATS, c) : e.replace(/(^'|'$)/g, "").replace(/''/g, "'")
      }), u
    }
  }

  function xn() {
    return function(t, e) {
      return y(e) && (e = 2), W(t, e)
    }
  }

  function Cn() {
    return function(t, e, n) {
      return e = 1 / 0 === Math.abs(Number(e)) ? Number(e) : p(e), isNaN(e) ? t : (S(t) && (t = t.toString()), Jn(t) || C(t) ? (n = !n || isNaN(n) ? 0 : p(n), n = 0 > n && n >= -t.length ? t.length + n : n, e >= 0 ? t.slice(n, n + e) : 0 === n ? t.slice(e, t.length) : t.slice(Math.max(0, n + e), n)) : t)
    }
  }

  function Sn(t) {
    function e(e, n) {
      return n = n ? -1 : 1, e.map(function(e) {
        var i = 1,
          r = g;
        if (k(e)) r = e;
        else if (C(e) && (("+" == e.charAt(0) || "-" == e.charAt(0)) && (i = "-" == e.charAt(0) ? -1 : 1, e = e.substring(1)), "" !== e && (r = t(e), r.constant))) var o = r(),
          r = function(t) {
            return t[o]
          };
        return {
          get: r,
          descending: i * n
        }
      })
    }

    function n(t) {
      switch (typeof t) {
        case "number":
        case "boolean":
        case "string":
          return !0;
        default:
          return !1
      }
    }
    return function(t, i, o) {
      if (!r(t)) return t;
      Jn(i) || (i = [i]), 0 === i.length && (i = ["+"]);
      var s = e(i, o);
      return s.push({
        get: function() {
          return {}
        },
        descending: o ? -1 : 1
      }), t = Array.prototype.map.call(t, function(t, e) {
        return {
          value: t,
          predicateValues: s.map(function(i) {
            var r = i.get(t);
            return i = typeof r, null === r ? (i = "string", r = "null") : "string" === i ? r = r.toLowerCase() : "object" === i && ("function" == typeof r.valueOf && (r = r.valueOf(), n(r)) || v(r) && (r = r.toString(), n(r)) || (r = e)), {
              value: r,
              type: i
            }
          })
        }
      }), t.sort(function(t, e) {
        for (var n = 0, i = 0, r = s.length; r > i; ++i) {
          var n = t.predicateValues[i],
            o = e.predicateValues[i],
            a = 0;
          if (n.type === o.type ? n.value !== o.value && (a = n.value < o.value ? -1 : 1) : a = n.type < o.type ? -1 : 1, n = a * s[i].descending) break
        }
        return n
      }), t = t.map(function(t) {
        return t.value
      })
    }
  }

  function An(t) {
    return k(t) && (t = {
      link: t
    }), t.restrict = t.restrict || "AC", $(t)
  }

  function kn(t, e, i, r, s) {
    var a = this,
      u = [],
      l = a.$$parentForm = t.parent().controller("form") || xr;
    a.$error = {}, a.$$success = {}, a.$pending = n, a.$name = s(e.name || e.ngForm || "")(i), a.$dirty = !1, a.$pristine = !0, a.$valid = !0, a.$invalid = !1, a.$submitted = !1, l.$addControl(a), a.$rollbackViewValue = function() {
      o(u, function(t) {
        t.$rollbackViewValue()
      })
    }, a.$commitViewValue = function() {
      o(u, function(t) {
        t.$commitViewValue()
      })
    }, a.$addControl = function(t) {
      st(t.$name, "input"), u.push(t), t.$name && (a[t.$name] = t)
    }, a.$$renameControl = function(t, e) {
      var n = t.$name;
      a[n] === t && delete a[n], a[e] = t, t.$name = e
    }, a.$removeControl = function(t) {
      t.$name && a[t.$name] === t && delete a[t.$name], o(a.$pending, function(e, n) {
        a.$setValidity(n, null, t)
      }), o(a.$error, function(e, n) {
        a.$setValidity(n, null, t)
      }), o(a.$$success, function(e, n) {
        a.$setValidity(n, null, t)
      }), L(u, t)
    }, Ln({
      ctrl: this,
      $element: t,
      set: function(t, e, n) {
        var i = t[e];
        i ? -1 === i.indexOf(n) && i.push(n) : t[e] = [n]
      },
      unset: function(t, e, n) {
        var i = t[e];
        i && (L(i, n), 0 === i.length && delete t[e])
      },
      parentForm: l,
      $animate: r
    }), a.$setDirty = function() {
      r.removeClass(t, io), r.addClass(t, ro), a.$dirty = !0, a.$pristine = !1, l.$setDirty()
    }, a.$setPristine = function() {
      r.setClass(t, io, ro + " ng-submitted"), a.$dirty = !1, a.$pristine = !0, a.$submitted = !1, o(u, function(t) {
        t.$setPristine()
      })
    }, a.$setUntouched = function() {
      o(u, function(t) {
        t.$setUntouched()
      })
    }, a.$setSubmitted = function() {
      r.addClass(t, "ng-submitted"), a.$submitted = !0, l.$setSubmitted()
    }
  }

  function En(t) {
    t.$formatters.push(function(e) {
      return t.$isEmpty(e) ? e : e.toString()
    })
  }

  function Tn(t, e, n, i, r, o) {
    var s = Wn(e[0].type);
    if (!r.android) {
      var a = !1;
      e.on("compositionstart", function(t) {
        a = !0
      }), e.on("compositionend", function() {
        a = !1, u()
      })
    }
    var u = function(t) {
      if (l && (o.defer.cancel(l), l = null), !a) {
        var r = e.val();
        t = t && t.type, "password" === s || n.ngTrim && "false" === n.ngTrim || (r = ei(r)), (i.$viewValue !== r || "" === r && i.$$hasNativeValidators) && i.$setViewValue(r, t)
      }
    };
    if (r.hasEvent("input")) e.on("input", u);
    else {
      var l, c = function(t, e, n) {
        l || (l = o.defer(function() {
          l = null, e && e.value === n || u(t)
        }))
      };
      e.on("keydown", function(t) {
        var e = t.keyCode;
        91 === e || e > 15 && 19 > e || e >= 37 && 40 >= e || c(t, this, this.value)
      }), r.hasEvent("paste") && e.on("paste cut", c)
    }
    e.on("change", u), i.$render = function() {
      var t = i.$isEmpty(i.$viewValue) ? "" : i.$viewValue;
      e.val() !== t && e.val(t)
    }
  }

  function Pn(t, e) {
    return function(n, i) {
      var r, s;
      if (A(n)) return n;
      if (C(n)) {
        if ('"' == n.charAt(0) && '"' == n.charAt(n.length - 1) && (n = n.substring(1, n.length - 1)), kr.test(n)) return new Date(n);
        if (t.lastIndex = 0, r = t.exec(n)) return r.shift(), s = i ? {
          yyyy: i.getFullYear(),
          MM: i.getMonth() + 1,
          dd: i.getDate(),
          HH: i.getHours(),
          mm: i.getMinutes(),
          ss: i.getSeconds(),
          sss: i.getMilliseconds() / 1e3
        } : {
          yyyy: 1970,
          MM: 1,
          dd: 1,
          HH: 0,
          mm: 0,
          ss: 0,
          sss: 0
        }, o(r, function(t, n) {
          n < e.length && (s[e[n]] = +t)
        }), new Date(s.yyyy, s.MM - 1, s.dd, s.HH, s.mm, s.ss || 0, 1e3 * s.sss || 0)
      }
      return NaN
    }
  }

  function Mn(t, e, i, r) {
    return function(o, s, a, u, l, c, h) {
      function f(t) {
        return t && !(t.getTime && t.getTime() !== t.getTime())
      }

      function p(t) {
        return b(t) ? A(t) ? t : i(t) : n
      }
      On(o, s, a, u), Tn(o, s, a, u, l, c);
      var d, m = u && u.$options && u.$options.timezone;
      if (u.$$parserName = t, u.$parsers.push(function(t) {
          return u.$isEmpty(t) ? null : e.test(t) ? (t = i(t, d), m && (t = H(t, m)), t) : n
        }), u.$formatters.push(function(t) {
          if (t && !A(t)) throw so("datefmt", t);
          return f(t) ? ((d = t) && m && (d = H(d, m, !0)), h("date")(t, r, m)) : (d = null, "")
        }), b(a.min) || a.ngMin) {
        var g;
        u.$validators.min = function(t) {
          return !f(t) || y(g) || i(t) >= g
        }, a.$observe("min", function(t) {
          g = p(t), u.$validate()
        })
      }
      if (b(a.max) || a.ngMax) {
        var $;
        u.$validators.max = function(t) {
          return !f(t) || y($) || i(t) <= $
        }, a.$observe("max", function(t) {
          $ = p(t), u.$validate()
        })
      }
    }
  }

  function On(t, e, i, r) {
    (r.$$hasNativeValidators = w(e[0].validity)) && r.$parsers.push(function(t) {
      var i = e.prop("validity") || {};
      return i.badInput && !i.typeMismatch ? n : t
    })
  }

  function Dn(t, e, n, i, r) {
    if (b(i)) {
      if (t = t(i), !t.constant) throw so("constexpr", n, i);
      return t(e)
    }
    return r
  }

  function Rn(t, e) {
    return t = "ngClass" + t, ["$animate", function(n) {
      function i(t, e) {
        var n = [],
          i = 0;
        t: for (; i < t.length; i++) {
          for (var r = t[i], o = 0; o < e.length; o++)
            if (r == e[o]) continue t;
          n.push(r)
        }
        return n
      }

      function r(t) {
        var e = [];
        return Jn(t) ? (o(t, function(t) {
          e = e.concat(r(t))
        }), e) : C(t) ? t.split(" ") : w(t) ? (o(t, function(t, n) {
          t && (e = e.concat(n.split(" ")))
        }), e) : t
      }
      return {
        restrict: "AC",
        link: function(s, a, u) {
          function l(t, e) {
            var n = a.data("$classCounts") || lt(),
              i = [];
            return o(t, function(t) {
              (e > 0 || n[t]) && (n[t] = (n[t] || 0) + e, n[t] === +(e > 0) && i.push(t))
            }), a.data("$classCounts", n), i.join(" ")
          }

          function c(t) {
            if (!0 === e || s.$index % 2 === e) {
              var o = r(t || []);
              if (h) {
                if (!I(t, h)) {
                  var c = r(h),
                    f = i(o, c),
                    o = i(c, o),
                    f = l(f, 1),
                    o = l(o, -1);
                  f && f.length && n.addClass(a, f), o && o.length && n.removeClass(a, o)
                }
              } else {
                var f = l(o, 1);
                u.$addClass(f)
              }
            }
            h = N(t)
          }
          var h;
          s.$watch(u[t], c, !0), u.$observe("class", function(e) {
            c(s.$eval(u[t]))
          }), "ngClass" !== t && s.$watch("$index", function(n, i) {
            var o = 1 & n;
            if (o !== (1 & i)) {
              var a = r(s.$eval(u[t]));
              o === e ? (o = l(a, 1), u.$addClass(o)) : (o = l(a, -1), u.$removeClass(o))
            }
          })
        }
      }
    }]
  }

  function Ln(t) {
    function e(t, e) {
      e && !s[t] ? (c.addClass(o, t), s[t] = !0) : !e && s[t] && (c.removeClass(o, t), s[t] = !1)
    }

    function i(t, n) {
      t = t ? "-" + nt(t, "-") : "", e(eo + t, !0 === n), e(no + t, !1 === n)
    }
    var r = t.ctrl,
      o = t.$element,
      s = {},
      a = t.set,
      u = t.unset,
      l = t.parentForm,
      c = t.$animate;
    s[no] = !(s[eo] = o.hasClass(eo)), r.$setValidity = function(t, o, s) {
      o === n ? (r.$pending || (r.$pending = {}), a(r.$pending, t, s)) : (r.$pending && u(r.$pending, t, s), Fn(r.$pending) && (r.$pending = n)), M(o) ? o ? (u(r.$error, t, s), a(r.$$success, t, s)) : (a(r.$error, t, s), u(r.$$success, t, s)) : (u(r.$error, t, s), u(r.$$success, t, s)), r.$pending ? (e(oo, !0), r.$valid = r.$invalid = n, i("", null)) : (e(oo, !1), r.$valid = Fn(r.$error), r.$invalid = !r.$valid, i("", r.$valid)), o = r.$pending && r.$pending[t] ? n : r.$error[t] ? !1 : r.$$success[t] ? !0 : null, i(t, o), l.$setValidity(t, o, r)
    }
  }

  function Fn(t) {
    if (t)
      for (var e in t)
        if (t.hasOwnProperty(e)) return !1;
    return !0
  }
  var Nn, In, Vn, jn, Bn = /^\/(.+)\/([a-z]*)$/,
    Wn = function(t) {
      return C(t) ? t.toLowerCase() : t
    },
    zn = Object.prototype.hasOwnProperty,
    qn = function(t) {
      return C(t) ? t.toUpperCase() : t
    },
    Hn = [].slice,
    _n = [].splice,
    Un = [].push,
    Gn = Object.prototype.toString,
    Yn = Object.getPrototypeOf,
    Xn = i("ng"),
    Kn = t.angular || (t.angular = {}),
    Qn = 0;
  Nn = e.documentMode, m.$inject = [], g.$inject = [];
  var Zn, Jn = Array.isArray,
    ti = /^\[object (Uint8(Clamped)?)|(Uint16)|(Uint32)|(Int8)|(Int16)|(Int32)|(Float(32)|(64))Array\]$/,
    ei = function(t) {
      return C(t) ? t.trim() : t
    },
    ni = function(t) {
      return t.replace(/([-()\[\]{}+?*.$\^|,:#<!\\])/g, "\\$1").replace(/\x08/g, "\\x08")
    },
    ii = function() {
      if (!b(ii.rules)) {
        var t = e.querySelector("[ng-csp]") || e.querySelector("[data-ng-csp]");
        if (t) {
          var n = t.getAttribute("ng-csp") || t.getAttribute("data-ng-csp");
          ii.rules = {
            noUnsafeEval: !n || -1 !== n.indexOf("no-unsafe-eval"),
            noInlineStyle: !n || -1 !== n.indexOf("no-inline-style")
          }
        } else {
          t = ii;
          try {
            new Function(""), n = !1
          } catch (i) {
            n = !0
          }
          t.rules = {
            noUnsafeEval: n,
            noInlineStyle: !1
          }
        }
      }
      return ii.rules
    },
    ri = function() {
      if (b(ri.name_)) return ri.name_;
      var t, n, i, r, o = oi.length;
      for (n = 0; o > n; ++n)
        if (i = oi[n], t = e.querySelector("[" + i.replace(":", "\\:") + "jq]")) {
          r = t.getAttribute(i + "jq");
          break
        }
      return ri.name_ = r
    },
    oi = ["ng-", "data-ng-", "ng:", "x-ng-"],
    si = /[A-Z]/g,
    ai = !1,
    ui = 1,
    li = 3,
    ci = {
      full: "1.4.5",
      major: 1,
      minor: 4,
      dot: 5,
      codeName: "permanent-internship"
    };
  mt.expando = "ng339";
  var hi = mt.cache = {},
    fi = 1;
  mt._data = function(t) {
    return this.cache[t[this.expando]] || {}
  };
  var pi = /([\:\-\_]+(.))/g,
    di = /^moz([A-Z])/,
    mi = {
      mouseleave: "mouseout",
      mouseenter: "mouseover"
    },
    gi = i("jqLite"),
    $i = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
    vi = /<|&#?\w+;/,
    yi = /<([\w:]+)/,
    bi = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
    wi = {
      option: [1, '<select multiple="multiple">', "</select>"],
      thead: [1, "<table>", "</table>"],
      col: [2, "<table><colgroup>", "</colgroup></table>"],
      tr: [2, "<table><tbody>", "</tbody></table>"],
      td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
      _default: [0, "", ""]
    };
  wi.optgroup = wi.option, wi.tbody = wi.tfoot = wi.colgroup = wi.caption = wi.thead, wi.th = wi.td;
  var xi = mt.prototype = {
      ready: function(n) {
        function i() {
          r || (r = !0, n())
        }
        var r = !1;
        "complete" === e.readyState ? setTimeout(i) : (this.on("DOMContentLoaded", i), mt(t).on("load", i))
      },
      toString: function() {
        var t = [];
        return o(this, function(e) {
          t.push("" + e)
        }), "[" + t.join(", ") + "]"
      },
      eq: function(t) {
        return In(t >= 0 ? this[t] : this[this.length + t])
      },
      length: 0,
      push: Un,
      sort: [].sort,
      splice: [].splice
    },
    Ci = {};
  o("multiple selected checked disabled readOnly required open".split(" "), function(t) {
    Ci[Wn(t)] = t
  });
  var Si = {};
  o("input select option textarea button form details".split(" "), function(t) {
    Si[t] = !0
  });
  var Ai = {
    ngMinlength: "minlength",
    ngMaxlength: "maxlength",
    ngMin: "min",
    ngMax: "max",
    ngPattern: "pattern"
  };
  o({
    data: wt,
    removeData: yt,
    hasData: function(t) {
      for (var e in hi[t.ng339]) return !0;
      return !1
    }
  }, function(t, e) {
    mt[e] = t
  }), o({
    data: wt,
    inheritedData: Et,
    scope: function(t) {
      return In.data(t, "$scope") || Et(t.parentNode || t, ["$isolateScope", "$scope"])
    },
    isolateScope: function(t) {
      return In.data(t, "$isolateScope") || In.data(t, "$isolateScopeNoTemplate")
    },
    controller: kt,
    injector: function(t) {
      return Et(t, "$injector")
    },
    removeAttr: function(t, e) {
      t.removeAttribute(e)
    },
    hasClass: xt,
    css: function(t, e, n) {
      return e = ft(e), b(n) ? void(t.style[e] = n) : t.style[e]
    },
    attr: function(t, e, i) {
      var r = t.nodeType;
      if (r !== li && 2 !== r && 8 !== r)
        if (r = Wn(e), Ci[r]) {
          if (!b(i)) return t[e] || (t.attributes.getNamedItem(e) || m).specified ? r : n;
          i ? (t[e] = !0, t.setAttribute(e, r)) : (t[e] = !1, t.removeAttribute(r))
        } else if (b(i)) t.setAttribute(e, i);
      else if (t.getAttribute) return t = t.getAttribute(e, 2), null === t ? n : t
    },
    prop: function(t, e, n) {
      return b(n) ? void(t[e] = n) : t[e]
    },
    text: function() {
      function t(t, e) {
        if (y(e)) {
          var n = t.nodeType;
          return n === ui || n === li ? t.textContent : ""
        }
        t.textContent = e
      }
      return t.$dv = "", t
    }(),
    val: function(t, e) {
      if (y(e)) {
        if (t.multiple && "select" === R(t)) {
          var n = [];
          return o(t.options, function(t) {
            t.selected && n.push(t.value || t.text)
          }), 0 === n.length ? null : n
        }
        return t.value
      }
      t.value = e
    },
    html: function(t, e) {
      return y(e) ? t.innerHTML : ($t(t, !0), void(t.innerHTML = e))
    },
    empty: Tt
  }, function(t, e) {
    mt.prototype[e] = function(e, i) {
      var r, o, s = this.length;
      if (t !== Tt && (2 == t.length && t !== xt && t !== kt ? e : i) === n) {
        if (w(e)) {
          for (r = 0; s > r; r++)
            if (t === wt) t(this[r], e);
            else
              for (o in e) t(this[r], o, e[o]);
          return this
        }
        for (r = t.$dv, s = r === n ? Math.min(s, 1) : s, o = 0; s > o; o++) {
          var a = t(this[o], e, i);
          r = r ? r + a : a
        }
        return r
      }
      for (r = 0; s > r; r++) t(this[r], e, i);
      return this
    }
  }), o({
    removeData: yt,
    on: function Fo(t, e, n, i) {
      if (b(i)) throw gi("onargs");
      if (pt(t)) {
        var r = bt(t, !0);
        i = r.events;
        var o = r.handle;
        o || (o = r.handle = Rt(t, i));
        for (var r = 0 <= e.indexOf(" ") ? e.split(" ") : [e], s = r.length; s--;) {
          e = r[s];
          var a = i[e];
          a || (i[e] = [], "mouseenter" === e || "mouseleave" === e ? Fo(t, mi[e], function(t) {
            var n = t.relatedTarget;
            n && (n === this || this.contains(n)) || o(t, e)
          }) : "$destroy" !== e && t.addEventListener(e, o, !1), a = i[e]), a.push(n)
        }
      }
    },
    off: vt,
    one: function(t, e, n) {
      t = In(t), t.on(e, function i() {
        t.off(e, n), t.off(e, i)
      }), t.on(e, n)
    },
    replaceWith: function(t, e) {
      var n, i = t.parentNode;
      $t(t), o(new mt(e), function(e) {
        n ? i.insertBefore(e, n.nextSibling) : i.replaceChild(e, t), n = e
      })
    },
    children: function(t) {
      var e = [];
      return o(t.childNodes, function(t) {
        t.nodeType === ui && e.push(t)
      }), e
    },
    contents: function(t) {
      return t.contentDocument || t.childNodes || []
    },
    append: function(t, e) {
      var n = t.nodeType;
      if (n === ui || 11 === n) {
        e = new mt(e);
        for (var n = 0, i = e.length; i > n; n++) t.appendChild(e[n])
      }
    },
    prepend: function(t, e) {
      if (t.nodeType === ui) {
        var n = t.firstChild;
        o(new mt(e), function(e) {
          t.insertBefore(e, n)
        })
      }
    },
    wrap: function(t, e) {
      e = In(e).eq(0).clone()[0];
      var n = t.parentNode;
      n && n.replaceChild(e, t), e.appendChild(t)
    },
    remove: Pt,
    detach: function(t) {
      Pt(t, !0)
    },
    after: function(t, e) {
      var n = t,
        i = t.parentNode;
      e = new mt(e);
      for (var r = 0, o = e.length; o > r; r++) {
        var s = e[r];
        i.insertBefore(s, n.nextSibling), n = s
      }
    },
    addClass: St,
    removeClass: Ct,
    toggleClass: function(t, e, n) {
      e && o(e.split(" "), function(e) {
        var i = n;
        y(i) && (i = !xt(t, e)), (i ? St : Ct)(t, e)
      })
    },
    parent: function(t) {
      return (t = t.parentNode) && 11 !== t.nodeType ? t : null
    },
    next: function(t) {
      return t.nextElementSibling
    },
    find: function(t, e) {
      return t.getElementsByTagName ? t.getElementsByTagName(e) : []
    },
    clone: gt,
    triggerHandler: function(t, e, n) {
      var i, r, s = e.type || e,
        a = bt(t);
      (a = (a = a && a.events) && a[s]) && (i = {
        preventDefault: function() {
          this.defaultPrevented = !0
        },
        isDefaultPrevented: function() {
          return !0 === this.defaultPrevented
        },
        stopImmediatePropagation: function() {
          this.immediatePropagationStopped = !0
        },
        isImmediatePropagationStopped: function() {
          return !0 === this.immediatePropagationStopped
        },
        stopPropagation: m,
        type: s,
        target: t
      }, e.type && (i = h(i, e)), e = N(a), r = n ? [i].concat(n) : [i], o(e, function(e) {
        i.isImmediatePropagationStopped() || e.apply(t, r)
      }))
    }
  }, function(t, e) {
    mt.prototype[e] = function(e, n, i) {
      for (var r, o = 0, s = this.length; s > o; o++) y(r) ? (r = t(this[o], e, n, i), b(r) && (r = In(r))) : At(r, t(this[o], e, n, i));
      return b(r) ? r : this
    }, mt.prototype.bind = mt.prototype.on, mt.prototype.unbind = mt.prototype.off
  }), Nt.prototype = {
    put: function(t, e) {
      this[Ft(t, this.nextUid)] = e
    },
    get: function(t) {
      return this[Ft(t, this.nextUid)]
    },
    remove: function(t) {
      var e = this[t = Ft(t, this.nextUid)];
      return delete this[t], e
    }
  };
  var ki = [function() {
      this.$get = [function() {
        return Nt
      }]
    }],
    Ei = /^[^\(]*\(\s*([^\)]*)\)/m,
    Ti = /,/,
    Pi = /^\s*(_?)(\S+?)\1\s*$/,
    Mi = /((\/\/.*$)|(\/\*[\s\S]*?\*\/))/gm,
    Oi = i("$injector");
  Vt.$$annotate = function(t, e, n) {
    var i;
    if ("function" == typeof t) {
      if (!(i = t.$inject)) {
        if (i = [], t.length) {
          if (e) throw C(n) && n || (n = t.name || It(t)), Oi("strictdi", n);
          e = t.toString().replace(Mi, ""), e = e.match(Ei), o(e[1].split(Ti), function(t) {
            t.replace(Pi, function(t, e, n) {
              i.push(n)
            })
          })
        }
        t.$inject = i
      }
    } else Jn(t) ? (e = t.length - 1, ot(t[e], "fn"), i = t.slice(0, e)) : ot(t, "fn", !0);
    return i
  };
  var Di = i("$animate"),
    Ri = function() {
      this.$get = ["$q", "$$rAF", function(t, e) {
        function n() {}
        return n.all = m, n.chain = m, n.prototype = {
          end: m,
          cancel: m,
          resume: m,
          pause: m,
          complete: m,
          then: function(n, i) {
            return t(function(t) {
              e(function() {
                t()
              })
            }).then(n, i)
          }
        }, n
      }]
    },
    Li = function() {
      var t = new Nt,
        e = [];
      this.$get = ["$$AnimateRunner", "$rootScope", function(n, i) {
        function r(n, r, s) {
          var a = t.get(n);
          a || (t.put(n, a = {}), e.push(n)), n = function(t, e) {
            var n = !1;
            return t && (t = C(t) ? t.split(" ") : Jn(t) ? t : [], o(t, function(t) {
              t && (n = !0, a[t] = e)
            })), n
          }, r = n(r, !0), s = n(s, !1), !r && !s || 1 < e.length || i.$$postDigest(function() {
            o(e, function(e) {
              var n = t.get(e);
              if (n) {
                var i = Wt(e.attr("class")),
                  r = "",
                  s = "";
                o(n, function(t, e) {
                  t !== !!i[e] && (t ? r += (r.length ? " " : "") + e : s += (s.length ? " " : "") + e)
                }), o(e, function(t) {
                  r && St(t, r), s && Ct(t, s)
                }), t.remove(e)
              }
            }), e.length = 0
          })
        }
        return {
          enabled: m,
          on: m,
          off: m,
          pin: m,
          push: function(t, e, i, o) {
            return o && o(), i = i || {}, i.from && t.css(i.from), i.to && t.css(i.to), (i.addClass || i.removeClass) && r(t, i.addClass, i.removeClass), new n
          }
        }
      }]
    },
    Fi = ["$provide", function(t) {
      var e = this;
      this.$$registeredAnimations = Object.create(null), this.register = function(n, i) {
        if (n && "." !== n.charAt(0)) throw Di("notcsel", n);
        var r = n + "-animation";
        e.$$registeredAnimations[n.substr(1)] = r, t.factory(r, i)
      }, this.classNameFilter = function(t) {
        if (1 === arguments.length && (this.$$classNameFilter = t instanceof RegExp ? t : null) && /(\s+|\/)ng-animate(\s+|\/)/.test(this.$$classNameFilter.toString())) throw Di("nongcls", "ng-animate");
        return this.$$classNameFilter
      }, this.$get = ["$$animateQueue", function(t) {
        function e(t, e, n) {
          if (n) {
            var i;
            t: {
              for (i = 0; i < n.length; i++) {
                var r = n[i];
                if (1 === r.nodeType) {
                  i = r;
                  break t
                }
              }
              i = void 0
            }!i || i.parentNode || i.previousElementSibling || (n = null)
          }
          n ? n.after(t) : e.prepend(t)
        }
        return {
          on: t.on,
          off: t.off,
          pin: t.pin,
          enabled: t.enabled,
          cancel: function(t) {
            t.end && t.end()
          },
          enter: function(n, i, r, o) {
            return i = i && In(i), r = r && In(r), i = i || r.parent(), e(n, i, r), t.push(n, "enter", zt(o))
          },
          move: function(n, i, r, o) {
            return i = i && In(i), r = r && In(r), i = i || r.parent(), e(n, i, r), t.push(n, "move", zt(o))
          },
          leave: function(e, n) {
            return t.push(e, "leave", zt(n), function() {
              e.remove()
            })
          },
          addClass: function(e, n, i) {
            return i = zt(i), i.addClass = Bt(i.addclass, n), t.push(e, "addClass", i)
          },
          removeClass: function(e, n, i) {
            return i = zt(i), i.removeClass = Bt(i.removeClass, n), t.push(e, "removeClass", i)
          },
          setClass: function(e, n, i, r) {
            return r = zt(r), r.addClass = Bt(r.addClass, n), r.removeClass = Bt(r.removeClass, i), t.push(e, "setClass", r)
          },
          animate: function(e, n, i, r, o) {
            return o = zt(o), o.from = o.from ? h(o.from, n) : n, o.to = o.to ? h(o.to, i) : i, o.tempClasses = Bt(o.tempClasses, r || "ng-inline-animate"), t.push(e, "animate", o)
          }
        }
      }]
    }],
    Ni = function() {
      this.$get = ["$$rAF", "$q", function(t, e) {
        var n = function() {};
        return n.prototype = {
            done: function(t) {
              this.defer && this.defer[!0 === t ? "reject" : "resolve"]()
            },
            end: function() {
              this.done()
            },
            cancel: function() {
              this.done(!0)
            },
            getPromise: function() {
              return this.defer || (this.defer = e.defer()), this.defer.promise
            },
            then: function(t, e) {
              return this.getPromise().then(t, e)
            },
            "catch": function(t) {
              return this.getPromise()["catch"](t)
            },
            "finally": function(t) {
              return this.getPromise()["finally"](t)
            }
          },
          function(e, i) {
            function r() {
              return t(function() {
                i.addClass && (e.addClass(i.addClass), i.addClass = null), i.removeClass && (e.removeClass(i.removeClass), i.removeClass = null), i.to && (e.css(i.to), i.to = null), o || s.done(), o = !0
              }), s
            }
            i.from && (e.css(i.from), i.from = null);
            var o, s = new n;
            return {
              start: r,
              end: r
            }
          }
      }]
    },
    Ii = i("$compile");
  Gt.$inject = ["$provide", "$$sanitizeUriProvider"];
  var Vi = /^((?:x|data)[\:\-_])/i,
    ji = i("$controller"),
    Bi = /^(\S+)(\s+as\s+(\w+))?$/,
    Wi = function() {
      this.$get = ["$document", function(t) {
        return function(e) {
          return e ? !e.nodeType && e instanceof In && (e = e[0]) : e = t[0].body, e.offsetWidth + 1
        }
      }]
    },
    zi = "application/json",
    qi = {
      "Content-Type": zi + ";charset=utf-8"
    },
    Hi = /^\[|^\{(?!\{)/,
    _i = {
      "[": /]$/,
      "{": /}$/
    },
    Ui = /^\)\]\}',?\n/,
    Gi = i("$http"),
    Yi = function(t) {
      return function() {
        throw Gi("legacy", t)
      }
    },
    Xi = Kn.$interpolateMinErr = i("$interpolate");
  Xi.throwNoconcat = function(t) {
    throw Xi("noconcat", t)
  }, Xi.interr = function(t, e) {
    return Xi("interr", t, e.toString())
  };
  var Ki = /^([^\?#]*)(\?([^#]*))?(#(.*))?$/,
    Qi = {
      http: 80,
      https: 443,
      ftp: 21
    },
    Zi = i("$location"),
    Ji = {
      $$html5: !1,
      $$replace: !1,
      absUrl: xe("$$absUrl"),
      url: function(t) {
        if (y(t)) return this.$$url;
        var e = Ki.exec(t);
        return (e[1] || "" === t) && this.path(decodeURIComponent(e[1])), (e[2] || e[1] || "" === t) && this.search(e[3] || ""), this.hash(e[5] || ""), this
      },
      protocol: xe("$$protocol"),
      host: xe("$$host"),
      port: xe("$$port"),
      path: Ce("$$path", function(t) {
        return t = null !== t ? t.toString() : "", "/" == t.charAt(0) ? t : "/" + t
      }),
      search: function(t, e) {
        switch (arguments.length) {
          case 0:
            return this.$$search;
          case 1:
            if (C(t) || S(t)) t = t.toString(), this.$$search = G(t);
            else {
              if (!w(t)) throw Zi("isrcharg");
              t = F(t, {}), o(t, function(e, n) {
                null == e && delete t[n]
              }), this.$$search = t
            }
            break;
          default:
            y(e) || null === e ? delete this.$$search[t] : this.$$search[t] = e
        }
        return this.$$compose(), this
      },
      hash: Ce("$$hash", function(t) {
        return null !== t ? t.toString() : ""
      }),
      replace: function() {
        return this.$$replace = !0, this
      }
    };
  o([we, be, ye], function(t) {
    t.prototype = Object.create(Ji), t.prototype.state = function(e) {
      if (!arguments.length) return this.$$state;
      if (t !== ye || !this.$$html5) throw Zi("nostate");
      return this.$$state = y(e) ? null : e, this
    }
  });
  var tr = i("$parse"),
    er = Function.prototype.call,
    nr = Function.prototype.apply,
    ir = Function.prototype.bind,
    rr = lt();
  o("+ - * / % === !== == != < > <= >= && || ! = |".split(" "), function(t) {
    rr[t] = !0
  });
  var or = {
      n: "\n",
      f: "\f",
      r: "\r",
      t: "	",
      v: "",
      "'": "'",
      '"': '"'
    },
    sr = function(t) {
      this.options = t
    };
  sr.prototype = {
    constructor: sr,
    lex: function(t) {
      for (this.text = t, this.index = 0, this.tokens = []; this.index < this.text.length;)
        if (t = this.text.charAt(this.index), '"' === t || "'" === t) this.readString(t);
        else if (this.isNumber(t) || "." === t && this.isNumber(this.peek())) this.readNumber();
      else if (this.isIdent(t)) this.readIdent();
      else if (this.is(t, "(){}[].,;:?")) this.tokens.push({
        index: this.index,
        text: t
      }), this.index++;
      else if (this.isWhitespace(t)) this.index++;
      else {
        var e = t + this.peek(),
          n = e + this.peek(2),
          i = rr[e],
          r = rr[n];
        rr[t] || i || r ? (t = r ? n : i ? e : t, this.tokens.push({
          index: this.index,
          text: t,
          operator: !0
        }), this.index += t.length) : this.throwError("Unexpected next character ", this.index, this.index + 1)
      }
      return this.tokens
    },
    is: function(t, e) {
      return -1 !== e.indexOf(t)
    },
    peek: function(t) {
      return t = t || 1, this.index + t < this.text.length ? this.text.charAt(this.index + t) : !1
    },
    isNumber: function(t) {
      return t >= "0" && "9" >= t && "string" == typeof t
    },
    isWhitespace: function(t) {
      return " " === t || "\r" === t || "	" === t || "\n" === t || "" === t || "\xa0" === t
    },
    isIdent: function(t) {
      return t >= "a" && "z" >= t || t >= "A" && "Z" >= t || "_" === t || "$" === t
    },
    isExpOperator: function(t) {
      return "-" === t || "+" === t || this.isNumber(t)
    },
    throwError: function(t, e, n) {
      throw n = n || this.index, e = b(e) ? "s " + e + "-" + this.index + " [" + this.text.substring(e, n) + "]" : " " + n, tr("lexerr", t, e, this.text)
    },
    readNumber: function() {
      for (var t = "", e = this.index; this.index < this.text.length;) {
        var n = Wn(this.text.charAt(this.index));
        if ("." == n || this.isNumber(n)) t += n;
        else {
          var i = this.peek();
          if ("e" == n && this.isExpOperator(i)) t += n;
          else if (this.isExpOperator(n) && i && this.isNumber(i) && "e" == t.charAt(t.length - 1)) t += n;
          else {
            if (!this.isExpOperator(n) || i && this.isNumber(i) || "e" != t.charAt(t.length - 1)) break;
            this.throwError("Invalid exponent")
          }
        }
        this.index++
      }
      this.tokens.push({
        index: e,
        text: t,
        constant: !0,
        value: Number(t)
      })
    },
    readIdent: function() {
      for (var t = this.index; this.index < this.text.length;) {
        var e = this.text.charAt(this.index);
        if (!this.isIdent(e) && !this.isNumber(e)) break;
        this.index++
      }
      this.tokens.push({
        index: t,
        text: this.text.slice(t, this.index),
        identifier: !0
      })
    },
    readString: function(t) {
      var e = this.index;
      this.index++;
      for (var n = "", i = t, r = !1; this.index < this.text.length;) {
        var o = this.text.charAt(this.index),
          i = i + o;
        if (r) "u" === o ? (r = this.text.substring(this.index + 1, this.index + 5),
          r.match(/[\da-f]{4}/i) || this.throwError("Invalid unicode escape [\\u" + r + "]"), this.index += 4, n += String.fromCharCode(parseInt(r, 16))) : n += or[o] || o, r = !1;
        else if ("\\" === o) r = !0;
        else {
          if (o === t) return this.index++, void this.tokens.push({
            index: e,
            text: i,
            constant: !0,
            value: n
          });
          n += o
        }
        this.index++
      }
      this.throwError("Unterminated quote", e)
    }
  };
  var ar = function(t, e) {
    this.lexer = t, this.options = e
  };
  ar.Program = "Program", ar.ExpressionStatement = "ExpressionStatement", ar.AssignmentExpression = "AssignmentExpression", ar.ConditionalExpression = "ConditionalExpression", ar.LogicalExpression = "LogicalExpression", ar.BinaryExpression = "BinaryExpression", ar.UnaryExpression = "UnaryExpression", ar.CallExpression = "CallExpression", ar.MemberExpression = "MemberExpression", ar.Identifier = "Identifier", ar.Literal = "Literal", ar.ArrayExpression = "ArrayExpression", ar.Property = "Property", ar.ObjectExpression = "ObjectExpression", ar.ThisExpression = "ThisExpression", ar.NGValueParameter = "NGValueParameter", ar.prototype = {
    ast: function(t) {
      return this.text = t, this.tokens = this.lexer.lex(t), t = this.program(), 0 !== this.tokens.length && this.throwError("is an unexpected token", this.tokens[0]), t
    },
    program: function() {
      for (var t = [];;)
        if (0 < this.tokens.length && !this.peek("}", ")", ";", "]") && t.push(this.expressionStatement()), !this.expect(";")) return {
          type: ar.Program,
          body: t
        }
    },
    expressionStatement: function() {
      return {
        type: ar.ExpressionStatement,
        expression: this.filterChain()
      }
    },
    filterChain: function() {
      for (var t = this.expression(); this.expect("|");) t = this.filter(t);
      return t
    },
    expression: function() {
      return this.assignment()
    },
    assignment: function() {
      var t = this.ternary();
      return this.expect("=") && (t = {
        type: ar.AssignmentExpression,
        left: t,
        right: this.assignment(),
        operator: "="
      }), t
    },
    ternary: function() {
      var t, e, n = this.logicalOR();
      return this.expect("?") && (t = this.expression(), this.consume(":")) ? (e = this.expression(), {
        type: ar.ConditionalExpression,
        test: n,
        alternate: t,
        consequent: e
      }) : n
    },
    logicalOR: function() {
      for (var t = this.logicalAND(); this.expect("||");) t = {
        type: ar.LogicalExpression,
        operator: "||",
        left: t,
        right: this.logicalAND()
      };
      return t
    },
    logicalAND: function() {
      for (var t = this.equality(); this.expect("&&");) t = {
        type: ar.LogicalExpression,
        operator: "&&",
        left: t,
        right: this.equality()
      };
      return t
    },
    equality: function() {
      for (var t, e = this.relational(); t = this.expect("==", "!=", "===", "!==");) e = {
        type: ar.BinaryExpression,
        operator: t.text,
        left: e,
        right: this.relational()
      };
      return e
    },
    relational: function() {
      for (var t, e = this.additive(); t = this.expect("<", ">", "<=", ">=");) e = {
        type: ar.BinaryExpression,
        operator: t.text,
        left: e,
        right: this.additive()
      };
      return e
    },
    additive: function() {
      for (var t, e = this.multiplicative(); t = this.expect("+", "-");) e = {
        type: ar.BinaryExpression,
        operator: t.text,
        left: e,
        right: this.multiplicative()
      };
      return e
    },
    multiplicative: function() {
      for (var t, e = this.unary(); t = this.expect("*", "/", "%");) e = {
        type: ar.BinaryExpression,
        operator: t.text,
        left: e,
        right: this.unary()
      };
      return e
    },
    unary: function() {
      var t;
      return (t = this.expect("+", "-", "!")) ? {
        type: ar.UnaryExpression,
        operator: t.text,
        prefix: !0,
        argument: this.unary()
      } : this.primary()
    },
    primary: function() {
      var t;
      this.expect("(") ? (t = this.filterChain(), this.consume(")")) : this.expect("[") ? t = this.arrayDeclaration() : this.expect("{") ? t = this.object() : this.constants.hasOwnProperty(this.peek().text) ? t = F(this.constants[this.consume().text]) : this.peek().identifier ? t = this.identifier() : this.peek().constant ? t = this.constant() : this.throwError("not a primary expression", this.peek());
      for (var e; e = this.expect("(", "[", ".");) "(" === e.text ? (t = {
        type: ar.CallExpression,
        callee: t,
        arguments: this.parseArguments()
      }, this.consume(")")) : "[" === e.text ? (t = {
        type: ar.MemberExpression,
        object: t,
        property: this.expression(),
        computed: !0
      }, this.consume("]")) : "." === e.text ? t = {
        type: ar.MemberExpression,
        object: t,
        property: this.identifier(),
        computed: !1
      } : this.throwError("IMPOSSIBLE");
      return t
    },
    filter: function(t) {
      t = [t];
      for (var e = {
          type: ar.CallExpression,
          callee: this.identifier(),
          arguments: t,
          filter: !0
        }; this.expect(":");) t.push(this.expression());
      return e
    },
    parseArguments: function() {
      var t = [];
      if (")" !== this.peekToken().text)
        do t.push(this.expression()); while (this.expect(","));
      return t
    },
    identifier: function() {
      var t = this.consume();
      return t.identifier || this.throwError("is not a valid identifier", t), {
        type: ar.Identifier,
        name: t.text
      }
    },
    constant: function() {
      return {
        type: ar.Literal,
        value: this.consume().value
      }
    },
    arrayDeclaration: function() {
      var t = [];
      if ("]" !== this.peekToken().text)
        do {
          if (this.peek("]")) break;
          t.push(this.expression())
        } while (this.expect(","));
      return this.consume("]"), {
        type: ar.ArrayExpression,
        elements: t
      }
    },
    object: function() {
      var t, e = [];
      if ("}" !== this.peekToken().text)
        do {
          if (this.peek("}")) break;
          t = {
            type: ar.Property,
            kind: "init"
          }, this.peek().constant ? t.key = this.constant() : this.peek().identifier ? t.key = this.identifier() : this.throwError("invalid key", this.peek()), this.consume(":"), t.value = this.expression(), e.push(t)
        } while (this.expect(","));
      return this.consume("}"), {
        type: ar.ObjectExpression,
        properties: e
      }
    },
    throwError: function(t, e) {
      throw tr("syntax", e.text, t, e.index + 1, this.text, this.text.substring(e.index))
    },
    consume: function(t) {
      if (0 === this.tokens.length) throw tr("ueoe", this.text);
      var e = this.expect(t);
      return e || this.throwError("is unexpected, expecting [" + t + "]", this.peek()), e
    },
    peekToken: function() {
      if (0 === this.tokens.length) throw tr("ueoe", this.text);
      return this.tokens[0]
    },
    peek: function(t, e, n, i) {
      return this.peekAhead(0, t, e, n, i)
    },
    peekAhead: function(t, e, n, i, r) {
      if (this.tokens.length > t) {
        t = this.tokens[t];
        var o = t.text;
        if (o === e || o === n || o === i || o === r || !(e || n || i || r)) return t
      }
      return !1
    },
    expect: function(t, e, n, i) {
      return (t = this.peek(t, e, n, i)) ? (this.tokens.shift(), t) : !1
    },
    constants: {
      "true": {
        type: ar.Literal,
        value: !0
      },
      "false": {
        type: ar.Literal,
        value: !1
      },
      "null": {
        type: ar.Literal,
        value: null
      },
      undefined: {
        type: ar.Literal,
        value: n
      },
      "this": {
        type: ar.ThisExpression
      }
    }
  }, Ne.prototype = {
    compile: function(t, e) {
      var i = this,
        r = this.astBuilder.ast(t);
      this.state = {
        nextId: 0,
        filters: {},
        expensiveChecks: e,
        fn: {
          vars: [],
          body: [],
          own: {}
        },
        assign: {
          vars: [],
          body: [],
          own: {}
        },
        inputs: []
      }, Oe(r, i.$filter);
      var s, a = "";
      return this.stage = "assign", (s = Le(r)) && (this.state.computing = "assign", a = this.nextId(), this.recurse(s, a), a = "fn.assign=" + this.generateFunction("assign", "s,v,l")), s = De(r.body), i.stage = "inputs", o(s, function(t, e) {
        var n = "fn" + e;
        i.state[n] = {
          vars: [],
          body: [],
          own: {}
        }, i.state.computing = n;
        var r = i.nextId();
        i.recurse(t, r), i.return_(r), i.state.inputs.push(n), t.watchId = e
      }), this.state.computing = "fn", this.stage = "main", this.recurse(r), a = '"' + this.USE + " " + this.STRICT + '";\n' + this.filterPrefix() + "var fn=" + this.generateFunction("fn", "s,l,a,i") + a + this.watchFns() + "return fn;", a = new Function("$filter", "ensureSafeMemberName", "ensureSafeObject", "ensureSafeFunction", "ifDefined", "plus", "text", a)(this.$filter, ke, Ee, Te, Pe, Me, t), this.state = this.stage = n, a.literal = Fe(r), a.constant = r.constant, a
    },
    USE: "use",
    STRICT: "strict",
    watchFns: function() {
      var t = [],
        e = this.state.inputs,
        n = this;
      return o(e, function(e) {
        t.push("var " + e + "=" + n.generateFunction(e, "s"))
      }), e.length && t.push("fn.inputs=[" + e.join(",") + "];"), t.join("")
    },
    generateFunction: function(t, e) {
      return "function(" + e + "){" + this.varsPrefix(t) + this.body(t) + "};"
    },
    filterPrefix: function() {
      var t = [],
        e = this;
      return o(this.state.filters, function(n, i) {
        t.push(n + "=$filter(" + e.escape(i) + ")")
      }), t.length ? "var " + t.join(",") + ";" : ""
    },
    varsPrefix: function(t) {
      return this.state[t].vars.length ? "var " + this.state[t].vars.join(",") + ";" : ""
    },
    body: function(t) {
      return this.state[t].body.join("")
    },
    recurse: function(t, e, i, r, s, a) {
      var u, l, c, h, f = this;
      if (r = r || m, !a && b(t.watchId)) e = e || this.nextId(), this.if_("i", this.lazyAssign(e, this.computedMember("i", t.watchId)), this.lazyRecurse(t, e, i, r, s, !0));
      else switch (t.type) {
        case ar.Program:
          o(t.body, function(e, i) {
            f.recurse(e.expression, n, n, function(t) {
              l = t
            }), i !== t.body.length - 1 ? f.current().body.push(l, ";") : f.return_(l)
          });
          break;
        case ar.Literal:
          h = this.escape(t.value), this.assign(e, h), r(h);
          break;
        case ar.UnaryExpression:
          this.recurse(t.argument, n, n, function(t) {
            l = t
          }), h = t.operator + "(" + this.ifDefined(l, 0) + ")", this.assign(e, h), r(h);
          break;
        case ar.BinaryExpression:
          this.recurse(t.left, n, n, function(t) {
            u = t
          }), this.recurse(t.right, n, n, function(t) {
            l = t
          }), h = "+" === t.operator ? this.plus(u, l) : "-" === t.operator ? this.ifDefined(u, 0) + t.operator + this.ifDefined(l, 0) : "(" + u + ")" + t.operator + "(" + l + ")", this.assign(e, h), r(h);
          break;
        case ar.LogicalExpression:
          e = e || this.nextId(), f.recurse(t.left, e), f.if_("&&" === t.operator ? e : f.not(e), f.lazyRecurse(t.right, e)), r(e);
          break;
        case ar.ConditionalExpression:
          e = e || this.nextId(), f.recurse(t.test, e), f.if_(e, f.lazyRecurse(t.alternate, e), f.lazyRecurse(t.consequent, e)), r(e);
          break;
        case ar.Identifier:
          e = e || this.nextId(), i && (i.context = "inputs" === f.stage ? "s" : this.assign(this.nextId(), this.getHasOwnProperty("l", t.name) + "?l:s"), i.computed = !1, i.name = t.name), ke(t.name), f.if_("inputs" === f.stage || f.not(f.getHasOwnProperty("l", t.name)), function() {
            f.if_("inputs" === f.stage || "s", function() {
              s && 1 !== s && f.if_(f.not(f.nonComputedMember("s", t.name)), f.lazyAssign(f.nonComputedMember("s", t.name), "{}")), f.assign(e, f.nonComputedMember("s", t.name))
            })
          }, e && f.lazyAssign(e, f.nonComputedMember("l", t.name))), (f.state.expensiveChecks || Ve(t.name)) && f.addEnsureSafeObject(e), r(e);
          break;
        case ar.MemberExpression:
          u = i && (i.context = this.nextId()) || this.nextId(), e = e || this.nextId(), f.recurse(t.object, u, n, function() {
            f.if_(f.notNull(u), function() {
              t.computed ? (l = f.nextId(), f.recurse(t.property, l), f.addEnsureSafeMemberName(l), s && 1 !== s && f.if_(f.not(f.computedMember(u, l)), f.lazyAssign(f.computedMember(u, l), "{}")), h = f.ensureSafeObject(f.computedMember(u, l)), f.assign(e, h), i && (i.computed = !0, i.name = l)) : (ke(t.property.name), s && 1 !== s && f.if_(f.not(f.nonComputedMember(u, t.property.name)), f.lazyAssign(f.nonComputedMember(u, t.property.name), "{}")), h = f.nonComputedMember(u, t.property.name), (f.state.expensiveChecks || Ve(t.property.name)) && (h = f.ensureSafeObject(h)), f.assign(e, h), i && (i.computed = !1, i.name = t.property.name))
            }, function() {
              f.assign(e, "undefined")
            }), r(e)
          }, !!s);
          break;
        case ar.CallExpression:
          e = e || this.nextId(), t.filter ? (l = f.filter(t.callee.name), c = [], o(t.arguments, function(t) {
            var e = f.nextId();
            f.recurse(t, e), c.push(e)
          }), h = l + "(" + c.join(",") + ")", f.assign(e, h), r(e)) : (l = f.nextId(), u = {}, c = [], f.recurse(t.callee, l, u, function() {
            f.if_(f.notNull(l), function() {
              f.addEnsureSafeFunction(l), o(t.arguments, function(t) {
                f.recurse(t, f.nextId(), n, function(t) {
                  c.push(f.ensureSafeObject(t))
                })
              }), u.name ? (f.state.expensiveChecks || f.addEnsureSafeObject(u.context), h = f.member(u.context, u.name, u.computed) + "(" + c.join(",") + ")") : h = l + "(" + c.join(",") + ")", h = f.ensureSafeObject(h), f.assign(e, h)
            }, function() {
              f.assign(e, "undefined")
            }), r(e)
          }));
          break;
        case ar.AssignmentExpression:
          if (l = this.nextId(), u = {}, !Re(t.left)) throw tr("lval");
          this.recurse(t.left, n, u, function() {
            f.if_(f.notNull(u.context), function() {
              f.recurse(t.right, l), f.addEnsureSafeObject(f.member(u.context, u.name, u.computed)), h = f.member(u.context, u.name, u.computed) + t.operator + l, f.assign(e, h), r(e || h)
            })
          }, 1);
          break;
        case ar.ArrayExpression:
          c = [], o(t.elements, function(t) {
            f.recurse(t, f.nextId(), n, function(t) {
              c.push(t)
            })
          }), h = "[" + c.join(",") + "]", this.assign(e, h), r(h);
          break;
        case ar.ObjectExpression:
          c = [], o(t.properties, function(t) {
            f.recurse(t.value, f.nextId(), n, function(e) {
              c.push(f.escape(t.key.type === ar.Identifier ? t.key.name : "" + t.key.value) + ":" + e)
            })
          }), h = "{" + c.join(",") + "}", this.assign(e, h), r(h);
          break;
        case ar.ThisExpression:
          this.assign(e, "s"), r("s");
          break;
        case ar.NGValueParameter:
          this.assign(e, "v"), r("v")
      }
    },
    getHasOwnProperty: function(t, e) {
      var n = t + "." + e,
        i = this.current().own;
      return i.hasOwnProperty(n) || (i[n] = this.nextId(!1, t + "&&(" + this.escape(e) + " in " + t + ")")), i[n]
    },
    assign: function(t, e) {
      return t ? (this.current().body.push(t, "=", e, ";"), t) : void 0
    },
    filter: function(t) {
      return this.state.filters.hasOwnProperty(t) || (this.state.filters[t] = this.nextId(!0)), this.state.filters[t]
    },
    ifDefined: function(t, e) {
      return "ifDefined(" + t + "," + this.escape(e) + ")"
    },
    plus: function(t, e) {
      return "plus(" + t + "," + e + ")"
    },
    return_: function(t) {
      this.current().body.push("return ", t, ";")
    },
    if_: function(t, e, n) {
      if (!0 === t) e();
      else {
        var i = this.current().body;
        i.push("if(", t, "){"), e(), i.push("}"), n && (i.push("else{"), n(), i.push("}"))
      }
    },
    not: function(t) {
      return "!(" + t + ")"
    },
    notNull: function(t) {
      return t + "!=null"
    },
    nonComputedMember: function(t, e) {
      return t + "." + e
    },
    computedMember: function(t, e) {
      return t + "[" + e + "]"
    },
    member: function(t, e, n) {
      return n ? this.computedMember(t, e) : this.nonComputedMember(t, e)
    },
    addEnsureSafeObject: function(t) {
      this.current().body.push(this.ensureSafeObject(t), ";")
    },
    addEnsureSafeMemberName: function(t) {
      this.current().body.push(this.ensureSafeMemberName(t), ";")
    },
    addEnsureSafeFunction: function(t) {
      this.current().body.push(this.ensureSafeFunction(t), ";")
    },
    ensureSafeObject: function(t) {
      return "ensureSafeObject(" + t + ",text)"
    },
    ensureSafeMemberName: function(t) {
      return "ensureSafeMemberName(" + t + ",text)"
    },
    ensureSafeFunction: function(t) {
      return "ensureSafeFunction(" + t + ",text)"
    },
    lazyRecurse: function(t, e, n, i, r, o) {
      var s = this;
      return function() {
        s.recurse(t, e, n, i, r, o)
      }
    },
    lazyAssign: function(t, e) {
      var n = this;
      return function() {
        n.assign(t, e)
      }
    },
    stringEscapeRegex: /[^ a-zA-Z0-9]/g,
    stringEscapeFn: function(t) {
      return "\\u" + ("0000" + t.charCodeAt(0).toString(16)).slice(-4)
    },
    escape: function(t) {
      if (C(t)) return "'" + t.replace(this.stringEscapeRegex, this.stringEscapeFn) + "'";
      if (S(t)) return t.toString();
      if (!0 === t) return "true";
      if (!1 === t) return "false";
      if (null === t) return "null";
      if ("undefined" == typeof t) return "undefined";
      throw tr("esc")
    },
    nextId: function(t, e) {
      var n = "v" + this.state.nextId++;
      return t || this.current().vars.push(n + (e ? "=" + e : "")), n
    },
    current: function() {
      return this.state[this.state.computing]
    }
  }, Ie.prototype = {
    compile: function(t, e) {
      var n = this,
        i = this.astBuilder.ast(t);
      this.expression = t, this.expensiveChecks = e, Oe(i, n.$filter);
      var r, s;
      (r = Le(i)) && (s = this.recurse(r)), r = De(i.body);
      var a;
      r && (a = [], o(r, function(t, e) {
        var i = n.recurse(t);
        t.input = i, a.push(i), t.watchId = e
      }));
      var u = [];
      return o(i.body, function(t) {
        u.push(n.recurse(t.expression))
      }), r = 0 === i.body.length ? function() {} : 1 === i.body.length ? u[0] : function(t, e) {
        var n;
        return o(u, function(i) {
          n = i(t, e)
        }), n
      }, s && (r.assign = function(t, e, n) {
        return s(t, n, e)
      }), a && (r.inputs = a), r.literal = Fe(i), r.constant = i.constant, r
    },
    recurse: function(t, e, i) {
      var r, s, a, u = this;
      if (t.input) return this.inputs(t.input, t.watchId);
      switch (t.type) {
        case ar.Literal:
          return this.value(t.value, e);
        case ar.UnaryExpression:
          return s = this.recurse(t.argument), this["unary" + t.operator](s, e);
        case ar.BinaryExpression:
          return r = this.recurse(t.left), s = this.recurse(t.right), this["binary" + t.operator](r, s, e);
        case ar.LogicalExpression:
          return r = this.recurse(t.left), s = this.recurse(t.right), this["binary" + t.operator](r, s, e);
        case ar.ConditionalExpression:
          return this["ternary?:"](this.recurse(t.test), this.recurse(t.alternate), this.recurse(t.consequent), e);
        case ar.Identifier:
          return ke(t.name, u.expression), u.identifier(t.name, u.expensiveChecks || Ve(t.name), e, i, u.expression);
        case ar.MemberExpression:
          return r = this.recurse(t.object, !1, !!i), t.computed || (ke(t.property.name, u.expression), s = t.property.name), t.computed && (s = this.recurse(t.property)), t.computed ? this.computedMember(r, s, e, i, u.expression) : this.nonComputedMember(r, s, u.expensiveChecks, e, i, u.expression);
        case ar.CallExpression:
          return a = [], o(t.arguments, function(t) {
            a.push(u.recurse(t))
          }), t.filter && (s = this.$filter(t.callee.name)), t.filter || (s = this.recurse(t.callee, !0)), t.filter ? function(t, i, r, o) {
            for (var u = [], l = 0; l < a.length; ++l) u.push(a[l](t, i, r, o));
            return t = s.apply(n, u, o), e ? {
              context: n,
              name: n,
              value: t
            } : t
          } : function(t, n, i, r) {
            var o, l = s(t, n, i, r);
            if (null != l.value) {
              Ee(l.context, u.expression), Te(l.value, u.expression), o = [];
              for (var c = 0; c < a.length; ++c) o.push(Ee(a[c](t, n, i, r), u.expression));
              o = Ee(l.value.apply(l.context, o), u.expression)
            }
            return e ? {
              value: o
            } : o
          };
        case ar.AssignmentExpression:
          return r = this.recurse(t.left, !0, 1), s = this.recurse(t.right),
            function(t, n, i, o) {
              var a = r(t, n, i, o);
              return t = s(t, n, i, o), Ee(a.value, u.expression), a.context[a.name] = t, e ? {
                value: t
              } : t
            };
        case ar.ArrayExpression:
          return a = [], o(t.elements, function(t) {
              a.push(u.recurse(t))
            }),
            function(t, n, i, r) {
              for (var o = [], s = 0; s < a.length; ++s) o.push(a[s](t, n, i, r));
              return e ? {
                value: o
              } : o
            };
        case ar.ObjectExpression:
          return a = [], o(t.properties, function(t) {
              a.push({
                key: t.key.type === ar.Identifier ? t.key.name : "" + t.key.value,
                value: u.recurse(t.value)
              })
            }),
            function(t, n, i, r) {
              for (var o = {}, s = 0; s < a.length; ++s) o[a[s].key] = a[s].value(t, n, i, r);
              return e ? {
                value: o
              } : o
            };
        case ar.ThisExpression:
          return function(t) {
            return e ? {
              value: t
            } : t
          };
        case ar.NGValueParameter:
          return function(t, n, i, r) {
            return e ? {
              value: i
            } : i
          }
      }
    },
    "unary+": function(t, e) {
      return function(n, i, r, o) {
        return n = t(n, i, r, o), n = b(n) ? +n : 0, e ? {
          value: n
        } : n
      }
    },
    "unary-": function(t, e) {
      return function(n, i, r, o) {
        return n = t(n, i, r, o), n = b(n) ? -n : 0, e ? {
          value: n
        } : n
      }
    },
    "unary!": function(t, e) {
      return function(n, i, r, o) {
        return n = !t(n, i, r, o), e ? {
          value: n
        } : n
      }
    },
    "binary+": function(t, e, n) {
      return function(i, r, o, s) {
        var a = t(i, r, o, s);
        return i = e(i, r, o, s), a = Me(a, i), n ? {
          value: a
        } : a
      }
    },
    "binary-": function(t, e, n) {
      return function(i, r, o, s) {
        var a = t(i, r, o, s);
        return i = e(i, r, o, s), a = (b(a) ? a : 0) - (b(i) ? i : 0), n ? {
          value: a
        } : a
      }
    },
    "binary*": function(t, e, n) {
      return function(i, r, o, s) {
        return i = t(i, r, o, s) * e(i, r, o, s), n ? {
          value: i
        } : i
      }
    },
    "binary/": function(t, e, n) {
      return function(i, r, o, s) {
        return i = t(i, r, o, s) / e(i, r, o, s), n ? {
          value: i
        } : i
      }
    },
    "binary%": function(t, e, n) {
      return function(i, r, o, s) {
        return i = t(i, r, o, s) % e(i, r, o, s), n ? {
          value: i
        } : i
      }
    },
    "binary===": function(t, e, n) {
      return function(i, r, o, s) {
        return i = t(i, r, o, s) === e(i, r, o, s), n ? {
          value: i
        } : i
      }
    },
    "binary!==": function(t, e, n) {
      return function(i, r, o, s) {
        return i = t(i, r, o, s) !== e(i, r, o, s), n ? {
          value: i
        } : i
      }
    },
    "binary==": function(t, e, n) {
      return function(i, r, o, s) {
        return i = t(i, r, o, s) == e(i, r, o, s), n ? {
          value: i
        } : i
      }
    },
    "binary!=": function(t, e, n) {
      return function(i, r, o, s) {
        return i = t(i, r, o, s) != e(i, r, o, s), n ? {
          value: i
        } : i
      }
    },
    "binary<": function(t, e, n) {
      return function(i, r, o, s) {
        return i = t(i, r, o, s) < e(i, r, o, s), n ? {
          value: i
        } : i
      }
    },
    "binary>": function(t, e, n) {
      return function(i, r, o, s) {
        return i = t(i, r, o, s) > e(i, r, o, s), n ? {
          value: i
        } : i
      }
    },
    "binary<=": function(t, e, n) {
      return function(i, r, o, s) {
        return i = t(i, r, o, s) <= e(i, r, o, s), n ? {
          value: i
        } : i
      }
    },
    "binary>=": function(t, e, n) {
      return function(i, r, o, s) {
        return i = t(i, r, o, s) >= e(i, r, o, s), n ? {
          value: i
        } : i
      }
    },
    "binary&&": function(t, e, n) {
      return function(i, r, o, s) {
        return i = t(i, r, o, s) && e(i, r, o, s), n ? {
          value: i
        } : i
      }
    },
    "binary||": function(t, e, n) {
      return function(i, r, o, s) {
        return i = t(i, r, o, s) || e(i, r, o, s), n ? {
          value: i
        } : i
      }
    },
    "ternary?:": function(t, e, n, i) {
      return function(r, o, s, a) {
        return r = t(r, o, s, a) ? e(r, o, s, a) : n(r, o, s, a), i ? {
          value: r
        } : r
      }
    },
    value: function(t, e) {
      return function() {
        return e ? {
          context: n,
          name: n,
          value: t
        } : t
      }
    },
    identifier: function(t, e, i, r, o) {
      return function(s, a, u, l) {
        return s = a && t in a ? a : s, r && 1 !== r && s && !s[t] && (s[t] = {}), a = s ? s[t] : n, e && Ee(a, o), i ? {
          context: s,
          name: t,
          value: a
        } : a
      }
    },
    computedMember: function(t, e, n, i, r) {
      return function(o, s, a, u) {
        var l, c, h = t(o, s, a, u);
        return null != h && (l = e(o, s, a, u), ke(l, r), i && 1 !== i && h && !h[l] && (h[l] = {}), c = h[l], Ee(c, r)), n ? {
          context: h,
          name: l,
          value: c
        } : c
      }
    },
    nonComputedMember: function(t, e, i, r, o, s) {
      return function(a, u, l, c) {
        return a = t(a, u, l, c), o && 1 !== o && a && !a[e] && (a[e] = {}), u = null != a ? a[e] : n, (i || Ve(e)) && Ee(u, s), r ? {
          context: a,
          name: e,
          value: u
        } : u
      }
    },
    inputs: function(t, e) {
      return function(n, i, r, o) {
        return o ? o[e] : t(n, i, r)
      }
    }
  };
  var ur = function(t, e, n) {
    this.lexer = t, this.$filter = e, this.options = n, this.ast = new ar(this.lexer), this.astCompiler = n.csp ? new Ie(this.ast, e) : new Ne(this.ast, e)
  };
  ur.prototype = {
    constructor: ur,
    parse: function(t) {
      return this.astCompiler.compile(t, this.options.expensiveChecks)
    }
  }, lt(), lt();
  var lr = Object.prototype.valueOf,
    cr = i("$sce"),
    hr = {
      HTML: "html",
      CSS: "css",
      URL: "url",
      RESOURCE_URL: "resourceUrl",
      JS: "js"
    },
    Ii = i("$compile"),
    fr = e.createElement("a"),
    pr = en(t.location.href);
  on.$inject = ["$document"], an.$inject = ["$provide"], fn.$inject = ["$locale"], pn.$inject = ["$locale"];
  var dr = ".",
    mr = {
      yyyy: gn("FullYear", 4),
      yy: gn("FullYear", 2, 0, !0),
      y: gn("FullYear", 1),
      MMMM: $n("Month"),
      MMM: $n("Month", !0),
      MM: gn("Month", 2, 1),
      M: gn("Month", 1, 1),
      dd: gn("Date", 2),
      d: gn("Date", 1),
      HH: gn("Hours", 2),
      H: gn("Hours", 1),
      hh: gn("Hours", 2, -12),
      h: gn("Hours", 1, -12),
      mm: gn("Minutes", 2),
      m: gn("Minutes", 1),
      ss: gn("Seconds", 2),
      s: gn("Seconds", 1),
      sss: gn("Milliseconds", 3),
      EEEE: $n("Day"),
      EEE: $n("Day", !0),
      a: function(t, e) {
        return 12 > t.getHours() ? e.AMPMS[0] : e.AMPMS[1]
      },
      Z: function(t, e, n) {
        return t = -1 * n, t = (t >= 0 ? "+" : "") + (mn(Math[t > 0 ? "floor" : "ceil"](t / 60), 2) + mn(Math.abs(t % 60), 2))
      },
      ww: yn(2),
      w: yn(1),
      G: bn,
      GG: bn,
      GGG: bn,
      GGGG: function(t, e) {
        return 0 >= t.getFullYear() ? e.ERANAMES[0] : e.ERANAMES[1]
      }
    },
    gr = /((?:[^yMdHhmsaZEwG']+)|(?:'(?:[^']|'')*')|(?:E+|y+|M+|d+|H+|h+|m+|s+|a|Z|G+|w+))(.*)/,
    $r = /^\-?\d+$/;
  wn.$inject = ["$locale"];
  var vr = $(Wn),
    yr = $(qn);
  Sn.$inject = ["$parse"];
  var br = $({
      restrict: "E",
      compile: function(t, e) {
        return e.href || e.xlinkHref ? void 0 : function(t, e) {
          if ("a" === e[0].nodeName.toLowerCase()) {
            var n = "[object SVGAnimatedString]" === Gn.call(e.prop("href")) ? "xlink:href" : "href";
            e.on("click", function(t) {
              e.attr(n) || t.preventDefault()
            })
          }
        }
      }
    }),
    wr = {};
  o(Ci, function(t, e) {
    function n(t, n, r) {
      t.$watch(r[i], function(t) {
        r.$set(e, !!t)
      })
    }
    if ("multiple" != t) {
      var i = Yt("ng-" + e),
        r = n;
      "checked" === t && (r = function(t, e, r) {
        r.ngModel !== r[i] && n(t, e, r)
      }), wr[i] = function() {
        return {
          restrict: "A",
          priority: 100,
          link: r
        }
      }
    }
  }), o(Ai, function(t, e) {
    wr[e] = function() {
      return {
        priority: 100,
        link: function(t, n, i) {
          return "ngPattern" === e && "/" == i.ngPattern.charAt(0) && (n = i.ngPattern.match(Bn)) ? void i.$set("ngPattern", new RegExp(n[1], n[2])) : void t.$watch(i[e], function(t) {
            i.$set(e, t)
          })
        }
      }
    }
  }), o(["src", "srcset", "href"], function(t) {
    var e = Yt("ng-" + t);
    wr[e] = function() {
      return {
        priority: 99,
        link: function(n, i, r) {
          var o = t,
            s = t;
          "href" === t && "[object SVGAnimatedString]" === Gn.call(i.prop("href")) && (s = "xlinkHref", r.$attr[s] = "xlink:href", o = null), r.$observe(e, function(e) {
            e ? (r.$set(s, e), Nn && o && i.prop(o, r[s])) : "href" === t && r.$set(s, null)
          })
        }
      }
    }
  });
  var xr = {
    $addControl: m,
    $$renameControl: function(t, e) {
      t.$name = e
    },
    $removeControl: m,
    $setValidity: m,
    $setDirty: m,
    $setPristine: m,
    $setSubmitted: m
  };
  kn.$inject = ["$element", "$attrs", "$scope", "$animate", "$interpolate"];
  var Cr = function(t) {
      return ["$timeout", "$parse", function(e, i) {
        function r(t) {
          return "" === t ? i('this[""]').assign : i(t).assign || m
        }
        return {
          name: "form",
          restrict: t ? "EAC" : "E",
          controller: kn,
          compile: function(i, o) {
            i.addClass(io).addClass(eo);
            var s = o.name ? "name" : t && o.ngForm ? "ngForm" : !1;
            return {
              pre: function(t, i, o, a) {
                if (!("action" in o)) {
                  var u = function(e) {
                    t.$apply(function() {
                      a.$commitViewValue(), a.$setSubmitted()
                    }), e.preventDefault()
                  };
                  i[0].addEventListener("submit", u, !1), i.on("$destroy", function() {
                    e(function() {
                      i[0].removeEventListener("submit", u, !1)
                    }, 0, !1)
                  })
                }
                var l = a.$$parentForm,
                  c = s ? r(a.$name) : m;
                s && (c(t, a), o.$observe(s, function(e) {
                  a.$name !== e && (c(t, n), l.$$renameControl(a, e), (c = r(a.$name))(t, a))
                })), i.on("$destroy", function() {
                  l.$removeControl(a), c(t, n), h(a, xr)
                })
              }
            }
          }
        }
      }]
    },
    Sr = Cr(),
    Ar = Cr(!0),
    kr = /\d{4}-[01]\d-[0-3]\dT[0-2]\d:[0-5]\d:[0-5]\d\.\d+([+-][0-2]\d:[0-5]\d|Z)/,
    Er = /^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/,
    Tr = /^[a-z0-9!#$%&'*+\/=?^_`{|}~.-]+@[a-z0-9]([a-z0-9-]*[a-z0-9])?(\.[a-z0-9]([a-z0-9-]*[a-z0-9])?)*$/i,
    Pr = /^\s*(\-|\+)?(\d+|(\d*(\.\d*)))([eE][+-]?\d+)?\s*$/,
    Mr = /^(\d{4})-(\d{2})-(\d{2})$/,
    Or = /^(\d{4})-(\d\d)-(\d\d)T(\d\d):(\d\d)(?::(\d\d)(\.\d{1,3})?)?$/,
    Dr = /^(\d{4})-W(\d\d)$/,
    Rr = /^(\d{4})-(\d\d)$/,
    Lr = /^(\d\d):(\d\d)(?::(\d\d)(\.\d{1,3})?)?$/,
    Fr = {
      text: function(t, e, n, i, r, o) {
        Tn(t, e, n, i, r, o), En(i)
      },
      date: Mn("date", Mr, Pn(Mr, ["yyyy", "MM", "dd"]), "yyyy-MM-dd"),
      "datetime-local": Mn("datetimelocal", Or, Pn(Or, "yyyy MM dd HH mm ss sss".split(" ")), "yyyy-MM-ddTHH:mm:ss.sss"),
      time: Mn("time", Lr, Pn(Lr, ["HH", "mm", "ss", "sss"]), "HH:mm:ss.sss"),
      week: Mn("week", Dr, function(t, e) {
        if (A(t)) return t;
        if (C(t)) {
          Dr.lastIndex = 0;
          var n = Dr.exec(t);
          if (n) {
            var i = +n[1],
              r = +n[2],
              o = n = 0,
              s = 0,
              a = 0,
              u = vn(i),
              r = 7 * (r - 1);
            return e && (n = e.getHours(), o = e.getMinutes(), s = e.getSeconds(), a = e.getMilliseconds()), new Date(i, 0, u.getDate() + r, n, o, s, a)
          }
        }
        return NaN
      }, "yyyy-Www"),
      month: Mn("month", Rr, Pn(Rr, ["yyyy", "MM"]), "yyyy-MM"),
      number: function(t, e, i, r, o, s) {
        if (On(t, e, i, r), Tn(t, e, i, r, o, s), r.$$parserName = "number", r.$parsers.push(function(t) {
            return r.$isEmpty(t) ? null : Pr.test(t) ? parseFloat(t) : n
          }), r.$formatters.push(function(t) {
            if (!r.$isEmpty(t)) {
              if (!S(t)) throw so("numfmt", t);
              t = t.toString()
            }
            return t
          }), b(i.min) || i.ngMin) {
          var a;
          r.$validators.min = function(t) {
            return r.$isEmpty(t) || y(a) || t >= a
          }, i.$observe("min", function(t) {
            b(t) && !S(t) && (t = parseFloat(t, 10)), a = S(t) && !isNaN(t) ? t : n, r.$validate()
          })
        }
        if (b(i.max) || i.ngMax) {
          var u;
          r.$validators.max = function(t) {
            return r.$isEmpty(t) || y(u) || u >= t
          }, i.$observe("max", function(t) {
            b(t) && !S(t) && (t = parseFloat(t, 10)), u = S(t) && !isNaN(t) ? t : n, r.$validate()
          })
        }
      },
      url: function(t, e, n, i, r, o) {
        Tn(t, e, n, i, r, o), En(i), i.$$parserName = "url", i.$validators.url = function(t, e) {
          var n = t || e;
          return i.$isEmpty(n) || Er.test(n)
        }
      },
      email: function(t, e, n, i, r, o) {
        Tn(t, e, n, i, r, o), En(i), i.$$parserName = "email", i.$validators.email = function(t, e) {
          var n = t || e;
          return i.$isEmpty(n) || Tr.test(n)
        }
      },
      radio: function(t, e, n, i) {
        y(n.name) && e.attr("name", ++Qn), e.on("click", function(t) {
          e[0].checked && i.$setViewValue(n.value, t && t.type)
        }), i.$render = function() {
          e[0].checked = n.value == i.$viewValue
        }, n.$observe("value", i.$render)
      },
      checkbox: function(t, e, n, i, r, o, s, a) {
        var u = Dn(a, t, "ngTrueValue", n.ngTrueValue, !0),
          l = Dn(a, t, "ngFalseValue", n.ngFalseValue, !1);
        e.on("click", function(t) {
          i.$setViewValue(e[0].checked, t && t.type)
        }), i.$render = function() {
          e[0].checked = i.$viewValue
        }, i.$isEmpty = function(t) {
          return !1 === t
        }, i.$formatters.push(function(t) {
          return I(t, u)
        }), i.$parsers.push(function(t) {
          return t ? u : l
        })
      },
      hidden: m,
      button: m,
      submit: m,
      reset: m,
      file: m
    },
    Nr = ["$browser", "$sniffer", "$filter", "$parse", function(t, e, n, i) {
      return {
        restrict: "E",
        require: ["?ngModel"],
        link: {
          pre: function(r, o, s, a) {
            a[0] && (Fr[Wn(s.type)] || Fr.text)(r, o, s, a[0], e, t, n, i)
          }
        }
      }
    }],
    Ir = /^(true|false|\d+)$/,
    Vr = function() {
      return {
        restrict: "A",
        priority: 100,
        compile: function(t, e) {
          return Ir.test(e.ngValue) ? function(t, e, n) {
            n.$set("value", t.$eval(n.ngValue))
          } : function(t, e, n) {
            t.$watch(n.ngValue, function(t) {
              n.$set("value", t)
            })
          }
        }
      }
    },
    jr = ["$compile", function(t) {
      return {
        restrict: "AC",
        compile: function(e) {
          return t.$$addBindingClass(e),
            function(e, i, r) {
              t.$$addBindingInfo(i, r.ngBind), i = i[0], e.$watch(r.ngBind, function(t) {
                i.textContent = t === n ? "" : t
              })
            }
        }
      }
    }],
    Br = ["$interpolate", "$compile", function(t, e) {
      return {
        compile: function(i) {
          return e.$$addBindingClass(i),
            function(i, r, o) {
              i = t(r.attr(o.$attr.ngBindTemplate)), e.$$addBindingInfo(r, i.expressions), r = r[0], o.$observe("ngBindTemplate", function(t) {
                r.textContent = t === n ? "" : t
              })
            }
        }
      }
    }],
    Wr = ["$sce", "$parse", "$compile", function(t, e, n) {
      return {
        restrict: "A",
        compile: function(i, r) {
          var o = e(r.ngBindHtml),
            s = e(r.ngBindHtml, function(t) {
              return (t || "").toString()
            });
          return n.$$addBindingClass(i),
            function(e, i, r) {
              n.$$addBindingInfo(i, r.ngBindHtml), e.$watch(s, function() {
                i.html(t.getTrustedHtml(o(e)) || "")
              })
            }
        }
      }
    }],
    zr = $({
      restrict: "A",
      require: "ngModel",
      link: function(t, e, n, i) {
        i.$viewChangeListeners.push(function() {
          t.$eval(n.ngChange)
        })
      }
    }),
    qr = Rn("", !0),
    Hr = Rn("Odd", 0),
    _r = Rn("Even", 1),
    Ur = An({
      compile: function(t, e) {
        e.$set("ngCloak", n), t.removeClass("ng-cloak")
      }
    }),
    Gr = [function() {
      return {
        restrict: "A",
        scope: !0,
        controller: "@",
        priority: 500
      }
    }],
    Yr = {},
    Xr = {
      blur: !0,
      focus: !0
    };
  o("click dblclick mousedown mouseup mouseover mouseout mousemove mouseenter mouseleave keydown keyup keypress submit focus blur copy cut paste".split(" "), function(t) {
    var e = Yt("ng-" + t);
    Yr[e] = ["$parse", "$rootScope", function(n, i) {
      return {
        restrict: "A",
        compile: function(r, o) {
          var s = n(o[e], null, !0);
          return function(e, n) {
            n.on(t, function(n) {
              var r = function() {
                s(e, {
                  $event: n
                })
              };
              Xr[t] && i.$$phase ? e.$evalAsync(r) : e.$apply(r)
            })
          }
        }
      }
    }]
  });
  var Kr = ["$animate", function(t) {
      return {
        multiElement: !0,
        transclude: "element",
        priority: 600,
        terminal: !0,
        restrict: "A",
        $$tlb: !0,
        link: function(n, i, r, o, s) {
          var a, u, l;
          n.$watch(r.ngIf, function(n) {
            n ? u || s(function(n, o) {
              u = o, n[n.length++] = e.createComment(" end ngIf: " + r.ngIf + " "), a = {
                clone: n
              }, t.enter(n, i.parent(), i)
            }) : (l && (l.remove(), l = null), u && (u.$destroy(), u = null), a && (l = ut(a.clone), t.leave(l).then(function() {
              l = null
            }), a = null))
          })
        }
      }
    }],
    Qr = ["$templateRequest", "$anchorScroll", "$animate", function(t, e, n) {
      return {
        restrict: "ECA",
        priority: 400,
        terminal: !0,
        transclude: "element",
        controller: Kn.noop,
        compile: function(i, r) {
          var o = r.ngInclude || r.src,
            s = r.onload || "",
            a = r.autoscroll;
          return function(i, r, u, l, c) {
            var h, f, p, d = 0,
              m = function() {
                f && (f.remove(), f = null), h && (h.$destroy(), h = null), p && (n.leave(p).then(function() {
                  f = null
                }), f = p, p = null)
              };
            i.$watch(o, function(o) {
              var u = function() {
                  !b(a) || a && !i.$eval(a) || e()
                },
                f = ++d;
              o ? (t(o, !0).then(function(t) {
                if (f === d) {
                  var e = i.$new();
                  l.template = t, t = c(e, function(t) {
                    m(), n.enter(t, null, r).then(u)
                  }), h = e, p = t, h.$emit("$includeContentLoaded", o), i.$eval(s)
                }
              }, function() {
                f === d && (m(), i.$emit("$includeContentError", o))
              }), i.$emit("$includeContentRequested", o)) : (m(), l.template = null)
            })
          }
        }
      }
    }],
    Zr = ["$compile", function(t) {
      return {
        restrict: "ECA",
        priority: -400,
        require: "ngInclude",
        link: function(n, i, r, o) {
          /SVG/.test(i[0].toString()) ? (i.empty(), t(dt(o.template, e).childNodes)(n, function(t) {
            i.append(t)
          }, {
            futureParentElement: i
          })) : (i.html(o.template), t(i.contents())(n))
        }
      }
    }],
    Jr = An({
      priority: 450,
      compile: function() {
        return {
          pre: function(t, e, n) {
            t.$eval(n.ngInit)
          }
        }
      }
    }),
    to = function() {
      return {
        restrict: "A",
        priority: 100,
        require: "ngModel",
        link: function(t, e, i, r) {
          var s = e.attr(i.$attr.ngList) || ", ",
            a = "false" !== i.ngTrim,
            u = a ? ei(s) : s;
          r.$parsers.push(function(t) {
            if (!y(t)) {
              var e = [];
              return t && o(t.split(u), function(t) {
                t && e.push(a ? ei(t) : t)
              }), e
            }
          }), r.$formatters.push(function(t) {
            return Jn(t) ? t.join(s) : n
          }), r.$isEmpty = function(t) {
            return !t || !t.length
          }
        }
      }
    },
    eo = "ng-valid",
    no = "ng-invalid",
    io = "ng-pristine",
    ro = "ng-dirty",
    oo = "ng-pending",
    so = i("ngModel"),
    ao = ["$scope", "$exceptionHandler", "$attrs", "$element", "$parse", "$animate", "$timeout", "$rootScope", "$q", "$interpolate", function(t, e, i, r, s, a, u, l, c, h) {
      this.$modelValue = this.$viewValue = Number.NaN, this.$$rawModelValue = n, this.$validators = {}, this.$asyncValidators = {}, this.$parsers = [], this.$formatters = [], this.$viewChangeListeners = [], this.$untouched = !0, this.$touched = !1, this.$pristine = !0, this.$dirty = !1, this.$valid = !0, this.$invalid = !1, this.$error = {}, this.$$success = {}, this.$pending = n, this.$name = h(i.name || "", !1)(t);
      var f, p = s(i.ngModel),
        d = p.assign,
        g = p,
        $ = d,
        v = null,
        w = this;
      this.$$setOptions = function(t) {
        if ((w.$options = t) && t.getterSetter) {
          var e = s(i.ngModel + "()"),
            n = s(i.ngModel + "($$$p)");
          g = function(t) {
            var n = p(t);
            return k(n) && (n = e(t)), n
          }, $ = function(t, e) {
            k(p(t)) ? n(t, {
              $$$p: w.$modelValue
            }) : d(t, w.$modelValue)
          }
        } else if (!p.assign) throw so("nonassign", i.ngModel, _(r))
      }, this.$render = m, this.$isEmpty = function(t) {
        return y(t) || "" === t || null === t || t !== t
      };
      var x = r.inheritedData("$formController") || xr,
        C = 0;
      Ln({
        ctrl: this,
        $element: r,
        set: function(t, e) {
          t[e] = !0
        },
        unset: function(t, e) {
          delete t[e]
        },
        parentForm: x,
        $animate: a
      }), this.$setPristine = function() {
        w.$dirty = !1, w.$pristine = !0, a.removeClass(r, ro), a.addClass(r, io)
      }, this.$setDirty = function() {
        w.$dirty = !0, w.$pristine = !1, a.removeClass(r, io), a.addClass(r, ro), x.$setDirty()
      }, this.$setUntouched = function() {
        w.$touched = !1, w.$untouched = !0, a.setClass(r, "ng-untouched", "ng-touched")
      }, this.$setTouched = function() {
        w.$touched = !0, w.$untouched = !1, a.setClass(r, "ng-touched", "ng-untouched")
      }, this.$rollbackViewValue = function() {
        u.cancel(v), w.$viewValue = w.$$lastCommittedViewValue, w.$render()
      }, this.$validate = function() {
        if (!S(w.$modelValue) || !isNaN(w.$modelValue)) {
          var t = w.$$rawModelValue,
            e = w.$valid,
            i = w.$modelValue,
            r = w.$options && w.$options.allowInvalid;
          w.$$runValidators(t, w.$$lastCommittedViewValue, function(o) {
            r || e === o || (w.$modelValue = o ? t : n, w.$modelValue !== i && w.$$writeModelToScope())
          })
        }
      }, this.$$runValidators = function(t, e, i) {
        function r() {
          var n = !0;
          return o(w.$validators, function(i, r) {
            var o = i(t, e);
            n = n && o, a(r, o)
          }), n ? !0 : (o(w.$asyncValidators, function(t, e) {
            a(e, null)
          }), !1)
        }

        function s() {
          var i = [],
            r = !0;
          o(w.$asyncValidators, function(o, s) {
            var u = o(t, e);
            if (!u || !k(u.then)) throw so("$asyncValidators", u);
            a(s, n), i.push(u.then(function() {
              a(s, !0)
            }, function(t) {
              r = !1, a(s, !1)
            }))
          }), i.length ? c.all(i).then(function() {
            u(r)
          }, m) : u(!0)
        }

        function a(t, e) {
          l === C && w.$setValidity(t, e)
        }

        function u(t) {
          l === C && i(t)
        }
        C++;
        var l = C;
        (function() {
          var t = w.$$parserName || "parse";
          return f !== n ? (f || (o(w.$validators, function(t, e) {
            a(e, null)
          }), o(w.$asyncValidators, function(t, e) {
            a(e, null)
          })), a(t, f), f) : (a(t, null), !0)
        })() && r() ? s() : u(!1)
      }, this.$commitViewValue = function() {
        var t = w.$viewValue;
        u.cancel(v), (w.$$lastCommittedViewValue !== t || "" === t && w.$$hasNativeValidators) && (w.$$lastCommittedViewValue = t, w.$pristine && this.$setDirty(), this.$$parseAndValidate())
      }, this.$$parseAndValidate = function() {
        var e = w.$$lastCommittedViewValue;
        if (f = y(e) ? n : !0)
          for (var i = 0; i < w.$parsers.length; i++)
            if (e = w.$parsers[i](e), y(e)) {
              f = !1;
              break
            }
        S(w.$modelValue) && isNaN(w.$modelValue) && (w.$modelValue = g(t));
        var r = w.$modelValue,
          o = w.$options && w.$options.allowInvalid;
        w.$$rawModelValue = e, o && (w.$modelValue = e, w.$modelValue !== r && w.$$writeModelToScope()), w.$$runValidators(e, w.$$lastCommittedViewValue, function(t) {
          o || (w.$modelValue = t ? e : n, w.$modelValue !== r && w.$$writeModelToScope())
        })
      }, this.$$writeModelToScope = function() {
        $(t, w.$modelValue), o(w.$viewChangeListeners, function(t) {
          try {
            t()
          } catch (n) {
            e(n)
          }
        })
      }, this.$setViewValue = function(t, e) {
        w.$viewValue = t, w.$options && !w.$options.updateOnDefault || w.$$debounceViewValueCommit(e)
      }, this.$$debounceViewValueCommit = function(e) {
        var n = 0,
          i = w.$options;
        i && b(i.debounce) && (i = i.debounce,
          S(i) ? n = i : S(i[e]) ? n = i[e] : S(i["default"]) && (n = i["default"])), u.cancel(v), n ? v = u(function() {
          w.$commitViewValue()
        }, n) : l.$$phase ? w.$commitViewValue() : t.$apply(function() {
          w.$commitViewValue()
        })
      }, t.$watch(function() {
        var e = g(t);
        if (e !== w.$modelValue && (w.$modelValue === w.$modelValue || e === e)) {
          w.$modelValue = w.$$rawModelValue = e, f = n;
          for (var i = w.$formatters, r = i.length, o = e; r--;) o = i[r](o);
          w.$viewValue !== o && (w.$viewValue = w.$$lastCommittedViewValue = o, w.$render(), w.$$runValidators(e, o, m))
        }
        return e
      })
    }],
    uo = ["$rootScope", function(t) {
      return {
        restrict: "A",
        require: ["ngModel", "^?form", "^?ngModelOptions"],
        controller: ao,
        priority: 1,
        compile: function(e) {
          return e.addClass(io).addClass("ng-untouched").addClass(eo), {
            pre: function(t, e, n, i) {
              var r = i[0],
                o = i[1] || xr;
              r.$$setOptions(i[2] && i[2].$options), o.$addControl(r), n.$observe("name", function(t) {
                r.$name !== t && o.$$renameControl(r, t)
              }), t.$on("$destroy", function() {
                o.$removeControl(r)
              })
            },
            post: function(e, n, i, r) {
              var o = r[0];
              o.$options && o.$options.updateOn && n.on(o.$options.updateOn, function(t) {
                o.$$debounceViewValueCommit(t && t.type)
              }), n.on("blur", function(n) {
                o.$touched || (t.$$phase ? e.$evalAsync(o.$setTouched) : e.$apply(o.$setTouched))
              })
            }
          }
        }
      }
    }],
    lo = /(\s+|^)default(\s+|$)/,
    co = function() {
      return {
        restrict: "A",
        controller: ["$scope", "$attrs", function(t, e) {
          var i = this;
          this.$options = F(t.$eval(e.ngModelOptions)), this.$options.updateOn !== n ? (this.$options.updateOnDefault = !1, this.$options.updateOn = ei(this.$options.updateOn.replace(lo, function() {
            return i.$options.updateOnDefault = !0, " "
          }))) : this.$options.updateOnDefault = !0
        }]
      }
    },
    ho = An({
      terminal: !0,
      priority: 1e3
    }),
    fo = i("ngOptions"),
    po = /^\s*([\s\S]+?)(?:\s+as\s+([\s\S]+?))?(?:\s+group\s+by\s+([\s\S]+?))?(?:\s+disable\s+when\s+([\s\S]+?))?\s+for\s+(?:([\$\w][\$\w]*)|(?:\(\s*([\$\w][\$\w]*)\s*,\s*([\$\w][\$\w]*)\s*\)))\s+in\s+([\s\S]+?)(?:\s+track\s+by\s+([\s\S]+?))?$/,
    mo = ["$compile", "$parse", function(t, n) {
      function i(t, e, i) {
        function o(t, e, n, i, r) {
          this.selectValue = t, this.viewValue = e, this.label = n, this.group = i, this.disabled = r
        }

        function s(t) {
          var e;
          if (!l && r(t)) e = t;
          else {
            e = [];
            for (var n in t) t.hasOwnProperty(n) && "$" !== n.charAt(0) && e.push(n)
          }
          return e
        }
        var a = t.match(po);
        if (!a) throw fo("iexp", t, _(e));
        var u = a[5] || a[7],
          l = a[6];
        t = / as /.test(a[0]) && a[1];
        var c = a[9];
        e = n(a[2] ? a[1] : u);
        var h = t && n(t) || e,
          f = c && n(c),
          p = c ? function(t, e) {
            return f(i, e)
          } : function(t) {
            return Ft(t)
          },
          d = function(t, e) {
            return p(t, b(t, e))
          },
          m = n(a[2] || a[1]),
          g = n(a[3] || ""),
          $ = n(a[4] || ""),
          v = n(a[8]),
          y = {},
          b = l ? function(t, e) {
            return y[l] = e, y[u] = t, y
          } : function(t) {
            return y[u] = t, y
          };
        return {
          trackBy: c,
          getTrackByValue: d,
          getWatchables: n(v, function(t) {
            var e = [];
            t = t || [];
            for (var n = s(t), r = n.length, o = 0; r > o; o++) {
              var u = t === n ? o : n[o],
                l = b(t[u], u),
                u = p(t[u], l);
              e.push(u), (a[2] || a[1]) && (u = m(i, l), e.push(u)), a[4] && (l = $(i, l), e.push(l))
            }
            return e
          }),
          getOptions: function() {
            for (var t = [], e = {}, n = v(i) || [], r = s(n), a = r.length, u = 0; a > u; u++) {
              var l = n === r ? u : r[u],
                f = b(n[l], l),
                y = h(i, f),
                l = p(y, f),
                w = m(i, f),
                x = g(i, f),
                f = $(i, f),
                y = new o(l, y, w, x, f);
              t.push(y), e[l] = y
            }
            return {
              items: t,
              selectValueMap: e,
              getOptionFromViewValue: function(t) {
                return e[d(t)]
              },
              getViewValueFromOption: function(t) {
                return c ? Kn.copy(t.viewValue) : t.viewValue
              }
            }
          }
        }
      }
      var s = e.createElement("option"),
        a = e.createElement("optgroup");
      return {
        restrict: "A",
        terminal: !0,
        require: ["select", "?ngModel"],
        link: function(e, n, r, u) {
          function l(t, e) {
            t.element = e, e.disabled = t.disabled, t.value !== e.value && (e.value = t.selectValue), t.label !== e.label && (e.label = t.label, e.textContent = t.label)
          }

          function c(t, e, n, i) {
            return e && Wn(e.nodeName) === n ? n = e : (n = i.cloneNode(!1), e ? t.insertBefore(n, e) : t.appendChild(n)), n
          }

          function h(t) {
            for (var e; t;) e = t.nextSibling, Pt(t), t = e
          }

          function f(t) {
            var e = g && g[0],
              n = w && w[0];
            if (e || n)
              for (; t && (t === e || t === n);) t = t.nextSibling;
            return t
          }

          function p() {
            var t = x && m.readValue();
            x = C.getOptions();
            var e = {},
              i = n[0].firstChild;
            if (b && n.prepend(g), i = f(i), x.items.forEach(function(t) {
                var r, o;
                t.group ? (r = e[t.group], r || (r = c(n[0], i, "optgroup", a), i = r.nextSibling, r.label = t.group, r = e[t.group] = {
                  groupElement: r,
                  currentOptionElement: r.firstChild
                }), o = c(r.groupElement, r.currentOptionElement, "option", s), l(t, o), r.currentOptionElement = o.nextSibling) : (o = c(n[0], i, "option", s), l(t, o), i = o.nextSibling)
              }), Object.keys(e).forEach(function(t) {
                h(e[t].currentOptionElement)
              }), h(i), d.$render(), !d.$isEmpty(t)) {
              var r = m.readValue();
              (C.trackBy ? I(t, r) : t === r) || (d.$setViewValue(r), d.$render())
            }
          }
          var d = u[1];
          if (d) {
            var m = u[0];
            u = r.multiple;
            for (var g, $ = 0, v = n.children(), y = v.length; y > $; $++)
              if ("" === v[$].value) {
                g = v.eq($);
                break
              }
            var b = !!g,
              w = In(s.cloneNode(!1));
            w.val("?");
            var x, C = i(r.ngOptions, n, e);
            u ? (d.$isEmpty = function(t) {
              return !t || 0 === t.length
            }, m.writeValue = function(t) {
              x.items.forEach(function(t) {
                t.element.selected = !1
              }), t && t.forEach(function(t) {
                (t = x.getOptionFromViewValue(t)) && !t.disabled && (t.element.selected = !0)
              })
            }, m.readValue = function() {
              var t = n.val() || [],
                e = [];
              return o(t, function(t) {
                (t = x.selectValueMap[t]) && !t.disabled && e.push(x.getViewValueFromOption(t))
              }), e
            }, C.trackBy && e.$watchCollection(function() {
              return Jn(d.$viewValue) ? d.$viewValue.map(function(t) {
                return C.getTrackByValue(t)
              }) : void 0
            }, function() {
              d.$render()
            })) : (m.writeValue = function(t) {
              var e = x.getOptionFromViewValue(t);
              e && !e.disabled ? n[0].value !== e.selectValue && (w.remove(), b || g.remove(), n[0].value = e.selectValue, e.element.selected = !0, e.element.setAttribute("selected", "selected")) : null === t || b ? (w.remove(), b || n.prepend(g), n.val(""), g.prop("selected", !0), g.attr("selected", !0)) : (b || g.remove(), n.prepend(w), n.val("?"), w.prop("selected", !0), w.attr("selected", !0))
            }, m.readValue = function() {
              var t = x.selectValueMap[n.val()];
              return t && !t.disabled ? (b || g.remove(), w.remove(), x.getViewValueFromOption(t)) : null
            }, C.trackBy && e.$watch(function() {
              return C.getTrackByValue(d.$viewValue)
            }, function() {
              d.$render()
            })), b ? (g.remove(), t(g)(e), g.removeClass("ng-scope")) : g = In(s.cloneNode(!1)), p(), e.$watchCollection(C.getWatchables, p)
          }
        }
      }
    }],
    go = ["$locale", "$interpolate", "$log", function(t, e, n) {
      var i = /{}/g,
        r = /^when(Minus)?(.+)$/;
      return {
        link: function(s, a, u) {
          function l(t) {
            a.text(t || "")
          }
          var c, h = u.count,
            f = u.$attr.when && a.attr(u.$attr.when),
            p = u.offset || 0,
            d = s.$eval(f) || {},
            g = {},
            $ = e.startSymbol(),
            v = e.endSymbol(),
            b = $ + h + "-" + p + v,
            w = Kn.noop;
          o(u, function(t, e) {
            var n = r.exec(e);
            n && (n = (n[1] ? "-" : "") + Wn(n[2]), d[n] = a.attr(u.$attr[e]))
          }), o(d, function(t, n) {
            g[n] = e(t.replace(i, b))
          }), s.$watch(h, function(e) {
            var i = parseFloat(e),
              r = isNaN(i);
            r || i in d || (i = t.pluralCat(i - p)), i === c || r && S(c) && isNaN(c) || (w(), r = g[i], y(r) ? (null != e && n.debug("ngPluralize: no rule defined for '" + i + "' in " + f), w = m, l()) : w = s.$watch(r, l), c = i)
          })
        }
      }
    }],
    $o = ["$parse", "$animate", function(t, s) {
      var a = i("ngRepeat"),
        u = function(t, e, n, i, r, o, s) {
          t[n] = i, r && (t[r] = o), t.$index = e, t.$first = 0 === e, t.$last = e === s - 1, t.$middle = !(t.$first || t.$last), t.$odd = !(t.$even = 0 === (1 & e))
        };
      return {
        restrict: "A",
        multiElement: !0,
        transclude: "element",
        priority: 1e3,
        terminal: !0,
        $$tlb: !0,
        compile: function(i, l) {
          var c = l.ngRepeat,
            h = e.createComment(" end ngRepeat: " + c + " "),
            f = c.match(/^\s*([\s\S]+?)\s+in\s+([\s\S]+?)(?:\s+as\s+([\s\S]+?))?(?:\s+track\s+by\s+([\s\S]+?))?\s*$/);
          if (!f) throw a("iexp", c);
          var p = f[1],
            d = f[2],
            m = f[3],
            g = f[4],
            f = p.match(/^(?:(\s*[\$\w]+)|\(\s*([\$\w]+)\s*,\s*([\$\w]+)\s*\))$/);
          if (!f) throw a("iidexp", p);
          var $ = f[3] || f[1],
            v = f[2];
          if (m && (!/^[$a-zA-Z_][$a-zA-Z0-9_]*$/.test(m) || /^(null|undefined|this|\$index|\$first|\$middle|\$last|\$even|\$odd|\$parent|\$root|\$id)$/.test(m))) throw a("badident", m);
          var y, b, w, x, C = {
            $id: Ft
          };
          return g ? y = t(g) : (w = function(t, e) {
              return Ft(e)
            }, x = function(t) {
              return t
            }),
            function(t, e, i, l, f) {
              y && (b = function(e, n, i) {
                return v && (C[v] = e), C[$] = n, C.$index = i, y(t, C)
              });
              var p = lt();
              t.$watchCollection(d, function(i) {
                var l, d, g, y, C, S, A, k, E, T, P = e[0],
                  M = lt();
                if (m && (t[m] = i), r(i)) k = i, d = b || w;
                else
                  for (T in d = b || x, k = [], i) i.hasOwnProperty(T) && "$" !== T.charAt(0) && k.push(T);
                for (y = k.length, T = Array(y), l = 0; y > l; l++)
                  if (C = i === k ? l : k[l], S = i[C], A = d(C, S, l), p[A]) E = p[A], delete p[A], M[A] = E, T[l] = E;
                  else {
                    if (M[A]) throw o(T, function(t) {
                      t && t.scope && (p[t.id] = t)
                    }), a("dupes", c, A, S);
                    T[l] = {
                      id: A,
                      scope: n,
                      clone: n
                    }, M[A] = !0
                  }
                for (g in p) {
                  if (E = p[g], A = ut(E.clone), s.leave(A), A[0].parentNode)
                    for (l = 0, d = A.length; d > l; l++) A[l].$$NG_REMOVED = !0;
                  E.scope.$destroy()
                }
                for (l = 0; y > l; l++)
                  if (C = i === k ? l : k[l], S = i[C], E = T[l], E.scope) {
                    g = P;
                    do g = g.nextSibling; while (g && g.$$NG_REMOVED);
                    E.clone[0] != g && s.move(ut(E.clone), null, In(P)), P = E.clone[E.clone.length - 1], u(E.scope, l, $, S, v, C, y)
                  } else f(function(t, e) {
                    E.scope = e;
                    var n = h.cloneNode(!1);
                    t[t.length++] = n, s.enter(t, null, In(P)), P = n, E.clone = t, M[E.id] = E, u(E.scope, l, $, S, v, C, y)
                  });
                p = M
              })
            }
        }
      }
    }],
    vo = ["$animate", function(t) {
      return {
        restrict: "A",
        multiElement: !0,
        link: function(e, n, i) {
          e.$watch(i.ngShow, function(e) {
            t[e ? "removeClass" : "addClass"](n, "ng-hide", {
              tempClasses: "ng-hide-animate"
            })
          })
        }
      }
    }],
    yo = ["$animate", function(t) {
      return {
        restrict: "A",
        multiElement: !0,
        link: function(e, n, i) {
          e.$watch(i.ngHide, function(e) {
            t[e ? "addClass" : "removeClass"](n, "ng-hide", {
              tempClasses: "ng-hide-animate"
            })
          })
        }
      }
    }],
    bo = An(function(t, e, n) {
      t.$watch(n.ngStyle, function(t, n) {
        n && t !== n && o(n, function(t, n) {
          e.css(n, "")
        }), t && e.css(t)
      }, !0)
    }),
    wo = ["$animate", function(t) {
      return {
        require: "ngSwitch",
        controller: ["$scope", function() {
          this.cases = {}
        }],
        link: function(n, i, r, s) {
          var a = [],
            u = [],
            l = [],
            c = [],
            h = function(t, e) {
              return function() {
                t.splice(e, 1)
              }
            };
          n.$watch(r.ngSwitch || r.on, function(n) {
            var i, r;
            for (i = 0, r = l.length; r > i; ++i) t.cancel(l[i]);
            for (i = l.length = 0, r = c.length; r > i; ++i) {
              var f = ut(u[i].clone);
              c[i].$destroy(), (l[i] = t.leave(f)).then(h(l, i))
            }
            u.length = 0, c.length = 0, (a = s.cases["!" + n] || s.cases["?"]) && o(a, function(n) {
              n.transclude(function(i, r) {
                c.push(r);
                var o = n.element;
                i[i.length++] = e.createComment(" end ngSwitchWhen: "), u.push({
                  clone: i
                }), t.enter(i, o.parent(), o)
              })
            })
          })
        }
      }
    }],
    xo = An({
      transclude: "element",
      priority: 1200,
      require: "^ngSwitch",
      multiElement: !0,
      link: function(t, e, n, i, r) {
        i.cases["!" + n.ngSwitchWhen] = i.cases["!" + n.ngSwitchWhen] || [], i.cases["!" + n.ngSwitchWhen].push({
          transclude: r,
          element: e
        })
      }
    }),
    Co = An({
      transclude: "element",
      priority: 1200,
      require: "^ngSwitch",
      multiElement: !0,
      link: function(t, e, n, i, r) {
        i.cases["?"] = i.cases["?"] || [], i.cases["?"].push({
          transclude: r,
          element: e
        })
      }
    }),
    So = An({
      restrict: "EAC",
      link: function(t, e, n, r, o) {
        if (!o) throw i("ngTransclude")("orphan", _(e));
        o(function(t) {
          e.empty(), e.append(t)
        })
      }
    }),
    Ao = ["$templateCache", function(t) {
      return {
        restrict: "E",
        terminal: !0,
        compile: function(e, n) {
          "text/ng-template" == n.type && t.put(n.id, e[0].text)
        }
      }
    }],
    ko = {
      $setViewValue: m,
      $render: m
    },
    Eo = ["$element", "$scope", "$attrs", function(t, i, r) {
      var o = this,
        s = new Nt;
      o.ngModelCtrl = ko, o.unknownOption = In(e.createElement("option")), o.renderUnknownOption = function(e) {
        e = "? " + Ft(e) + " ?", o.unknownOption.val(e), t.prepend(o.unknownOption), t.val(e)
      }, i.$on("$destroy", function() {
        o.renderUnknownOption = m
      }), o.removeUnknownOption = function() {
        o.unknownOption.parent() && o.unknownOption.remove()
      }, o.readValue = function() {
        return o.removeUnknownOption(), t.val()
      }, o.writeValue = function(e) {
        o.hasOption(e) ? (o.removeUnknownOption(), t.val(e), "" === e && o.emptyOption.prop("selected", !0)) : null == e && o.emptyOption ? (o.removeUnknownOption(), t.val("")) : o.renderUnknownOption(e)
      }, o.addOption = function(t, e) {
        st(t, '"option value"'), "" === t && (o.emptyOption = e);
        var n = s.get(t) || 0;
        s.put(t, n + 1)
      }, o.removeOption = function(t) {
        var e = s.get(t);
        e && (1 === e ? (s.remove(t), "" === t && (o.emptyOption = n)) : s.put(t, e - 1))
      }, o.hasOption = function(t) {
        return !!s.get(t)
      }
    }],
    To = function() {
      return {
        restrict: "E",
        require: ["select", "?ngModel"],
        controller: Eo,
        link: function(t, e, n, i) {
          var r = i[1];
          if (r) {
            var s = i[0];
            if (s.ngModelCtrl = r, r.$render = function() {
                s.writeValue(r.$viewValue)
              }, e.on("change", function() {
                t.$apply(function() {
                  r.$setViewValue(s.readValue())
                })
              }), n.multiple) {
              s.readValue = function() {
                var t = [];
                return o(e.find("option"), function(e) {
                  e.selected && t.push(e.value)
                }), t
              }, s.writeValue = function(t) {
                var n = new Nt(t);
                o(e.find("option"), function(t) {
                  t.selected = b(n.get(t.value))
                })
              };
              var a, u = NaN;
              t.$watch(function() {
                u !== r.$viewValue || I(a, r.$viewValue) || (a = N(r.$viewValue), r.$render()), u = r.$viewValue
              }), r.$isEmpty = function(t) {
                return !t || 0 === t.length
              }
            }
          }
        }
      }
    },
    Po = ["$interpolate", function(t) {
      function e(t) {
        t[0].hasAttribute("selected") && (t[0].selected = !0)
      }
      return {
        restrict: "E",
        priority: 100,
        compile: function(n, i) {
          if (y(i.value)) {
            var r = t(n.text(), !0);
            r || i.$set("value", n.text())
          }
          return function(t, n, i) {
            var o = n.parent(),
              s = o.data("$selectController") || o.parent().data("$selectController");
            s && s.ngModelCtrl && (r ? t.$watch(r, function(t, r) {
              i.$set("value", t), r !== t && s.removeOption(r), s.addOption(t, n), s.ngModelCtrl.$render(), e(n)
            }) : (s.addOption(i.value, n), s.ngModelCtrl.$render(), e(n)), n.on("$destroy", function() {
              s.removeOption(i.value), s.ngModelCtrl.$render()
            }))
          }
        }
      }
    }],
    Mo = $({
      restrict: "E",
      terminal: !1
    }),
    Oo = function() {
      return {
        restrict: "A",
        require: "?ngModel",
        link: function(t, e, n, i) {
          i && (n.required = !0, i.$validators.required = function(t, e) {
            return !n.required || !i.$isEmpty(e)
          }, n.$observe("required", function() {
            i.$validate()
          }))
        }
      }
    },
    Do = function() {
      return {
        restrict: "A",
        require: "?ngModel",
        link: function(t, e, r, o) {
          if (o) {
            var s, a = r.ngPattern || r.pattern;
            r.$observe("pattern", function(t) {
              if (C(t) && 0 < t.length && (t = new RegExp("^" + t + "$")), t && !t.test) throw i("ngPattern")("noregexp", a, t, _(e));
              s = t || n, o.$validate()
            }), o.$validators.pattern = function(t, e) {
              return o.$isEmpty(e) || y(s) || s.test(e)
            }
          }
        }
      }
    },
    Ro = function() {
      return {
        restrict: "A",
        require: "?ngModel",
        link: function(t, e, n, i) {
          if (i) {
            var r = -1;
            n.$observe("maxlength", function(t) {
              t = p(t), r = isNaN(t) ? -1 : t, i.$validate()
            }), i.$validators.maxlength = function(t, e) {
              return 0 > r || i.$isEmpty(e) || e.length <= r
            }
          }
        }
      }
    },
    Lo = function() {
      return {
        restrict: "A",
        require: "?ngModel",
        link: function(t, e, n, i) {
          if (i) {
            var r = 0;
            n.$observe("minlength", function(t) {
              r = p(t) || 0, i.$validate()
            }), i.$validators.minlength = function(t, e) {
              return i.$isEmpty(e) || e.length >= r
            }
          }
        }
      }
    };
  t.angular.bootstrap ? console.log("WARNING: Tried to load angular more than once.") : (it(), ht(Kn), Kn.module("ngLocale", [], ["$provide", function(t) {
    function e(t) {
      t += "";
      var e = t.indexOf(".");
      return -1 == e ? 0 : t.length - e - 1
    }
    t.value("$locale", {
      DATETIME_FORMATS: {
        AMPMS: ["AM", "PM"],
        DAY: "Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" "),
        ERANAMES: ["Before Christ", "Anno Domini"],
        ERAS: ["BC", "AD"],
        FIRSTDAYOFWEEK: 6,
        MONTH: "January February March April May June July August September October November December".split(" "),
        SHORTDAY: "Sun Mon Tue Wed Thu Fri Sat".split(" "),
        SHORTMONTH: "Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec".split(" "),
        WEEKENDRANGE: [5, 6],
        fullDate: "EEEE, MMMM d, y",
        longDate: "MMMM d, y",
        medium: "MMM d, y h:mm:ss a",
        mediumDate: "MMM d, y",
        mediumTime: "h:mm:ss a",
        "short": "M/d/yy h:mm a",
        shortDate: "M/d/yy",
        shortTime: "h:mm a"
      },
      NUMBER_FORMATS: {
        CURRENCY_SYM: "$",
        DECIMAL_SEP: ".",
        GROUP_SEP: ",",
        PATTERNS: [{
          gSize: 3,
          lgSize: 3,
          maxFrac: 3,
          minFrac: 0,
          minInt: 1,
          negPre: "-",
          negSuf: "",
          posPre: "",
          posSuf: ""
        }, {
          gSize: 3,
          lgSize: 3,
          maxFrac: 2,
          minFrac: 2,
          minInt: 1,
          negPre: "-\xa4",
          negSuf: "",
          posPre: "\xa4",
          posSuf: ""
        }]
      },
      id: "en-us",
      pluralCat: function(t, i) {
        var r = 0 | t,
          o = i;
        return n === o && (o = Math.min(e(t), 3)), Math.pow(10, o), 1 == r && 0 == o ? "one" : "other"
      }
    })
  }]), In(e).ready(function() {
    Z(e, J)
  }))
}(window, document), !window.angular.$$csp().noInlineStyle && window.angular.element(document.head).prepend('<style type="text/css">@charset "UTF-8";[ng\\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>'),
  function(t, e, n) {
    "use strict";

    function i(t, e, n) {
      if (!t) throw ngMinErr("areq", e || "?", n || "required");
      return t
    }

    function r(t, e) {
      return t || e ? t ? e ? (I(t) && (t = t.join(" ")), I(e) && (e = e.join(" ")), t + " " + e) : t : e : ""
    }

    function o(t) {
      var e = {};
      return t && (t.to || t.from) && (e.to = t.to, e.from = t.from), e
    }

    function s(t, e, n) {
      var i = "";
      return t = I(t) ? t : t && V(t) && t.length ? t.split(/\s+/) : [], N(t, function(t, r) {
        t && 0 < t.length && (i += r > 0 ? " " : "", i += n ? e + t : t + e)
      }), i
    }

    function a(t) {
      if (t instanceof F) switch (t.length) {
        case 0:
          return [];
        case 1:
          if (1 === t[0].nodeType) return t;
          break;
        default:
          return F(u(t))
      }
      return 1 === t.nodeType ? F(t) : void 0
    }

    function u(t) {
      if (!t[0]) return t;
      for (var e = 0; e < t.length; e++) {
        var n = t[e];
        if (1 == n.nodeType) return n
      }
    }

    function l(t, e, n) {
      N(e, function(e) {
        t.addClass(e, n)
      })
    }

    function c(t, e, n) {
      N(e, function(e) {
        t.removeClass(e, n)
      })
    }

    function h(t) {
      return function(e, n) {
        n.addClass && (l(t, e, n.addClass), n.addClass = null), n.removeClass && (c(t, e, n.removeClass), n.removeClass = null)
      }
    }

    function f(t) {
      if (t = t || {}, !t.$$prepared) {
        var e = t.domOperation || R;
        t.domOperation = function() {
          t.$$domOperationFired = !0, e(), e = R
        }, t.$$prepared = !0
      }
      return t
    }

    function p(t, e) {
      d(t, e), m(t, e)
    }

    function d(t, e) {
      e.from && (t.css(e.from), e.from = null)
    }

    function m(t, e) {
      e.to && (t.css(e.to), e.to = null)
    }

    function g(t, e, n) {
      var i = (e.addClass || "") + " " + (n.addClass || ""),
        r = (e.removeClass || "") + " " + (n.removeClass || "");
      return t = $(t.attr("class"), i, r), n.preparationClasses && (e.preparationClasses = C(n.preparationClasses, e.preparationClasses), delete n.preparationClasses), i = e.domOperation !== R ? e.domOperation : null, L(e, n), i && (e.domOperation = i), e.addClass = t.addClass ? t.addClass : null, e.removeClass = t.removeClass ? t.removeClass : null, e
    }

    function $(t, e, n) {
      function i(t) {
        V(t) && (t = t.split(" "));
        var e = {};
        return N(t, function(t) {
          t.length && (e[t] = !0)
        }), e
      }
      var r = {};
      t = i(t), e = i(e), N(e, function(t, e) {
        r[e] = 1
      }), n = i(n), N(n, function(t, e) {
        r[e] = 1 === r[e] ? null : -1
      });
      var o = {
        addClass: "",
        removeClass: ""
      };
      return N(r, function(e, n) {
        var i, r;
        1 === e ? (i = "addClass", r = !t[n]) : -1 === e && (i = "removeClass", r = t[n]), r && (o[i].length && (o[i] += " "), o[i] += n)
      }), o
    }

    function v(t) {
      return t instanceof e.element ? t[0] : t
    }

    function y(t, e, n) {
      var i = "";
      e && (i = s(e, "ng-", !0)), n.addClass && (i = C(i, s(n.addClass, "-add"))), n.removeClass && (i = C(i, s(n.removeClass, "-remove"))), i.length && (n.preparationClasses = i, t.addClass(i))
    }

    function b(t, e) {
      var n = e ? "-" + e + "s" : "";
      return x(t, [U, n]), [U, n]
    }

    function w(t, e) {
      var n = e ? "paused" : "",
        i = O + "PlayState";
      return x(t, [i, n]), [i, n]
    }

    function x(t, e) {
      t.style[e[0]] = e[1]
    }

    function C(t, e) {
      return t ? e ? t + " " + e : t : e
    }

    function S(t, e, n) {
      var i = Object.create(null),
        r = t.getComputedStyle(e) || {};
      return N(n, function(t, e) {
        var n = r[t];
        if (n) {
          var o = n.charAt(0);
          ("-" === o || "+" === o || o >= 0) && (n = A(n)), 0 === n && (n = null), i[e] = n
        }
      }), i
    }

    function A(t) {
      var e = 0;
      return t = t.split(/\s*,\s*/), N(t, function(t) {
        "s" == t.charAt(t.length - 1) && (t = t.substring(0, t.length - 1)), t = parseFloat(t) || 0, e = e ? Math.max(t, e) : t
      }), e
    }

    function k(t) {
      return 0 === t || null != t
    }

    function E(t, e) {
      var n = P,
        i = t + "s";
      return e ? n += "Duration" : i += " linear all", [n, i]
    }

    function T() {
      var t = Object.create(null);
      return {
        flush: function() {
          t = Object.create(null)
        },
        count: function(e) {
          return (e = t[e]) ? e.total : 0
        },
        get: function(e) {
          return (e = t[e]) && e.value
        },
        put: function(e, n) {
          t[e] ? t[e].total++ : t[e] = {
            total: 1,
            value: n
          }
        }
      }
    }
    var P, M, O, D, R = e.noop,
      L = e.extend,
      F = e.element,
      N = e.forEach,
      I = e.isArray,
      V = e.isString,
      j = e.isObject,
      B = e.isUndefined,
      W = e.isDefined,
      z = e.isFunction,
      q = e.isElement;
    t.ontransitionend === n && t.onwebkittransitionend !== n ? (P = "WebkitTransition", M = "webkitTransitionEnd transitionend") : (P = "transition", M = "transitionend"), t.onanimationend === n && t.onwebkitanimationend !== n ? (O = "WebkitAnimation", D = "webkitAnimationEnd animationend") : (O = "animation", D = "animationend");
    var H = O + "Delay",
      _ = O + "Duration",
      U = P + "Delay";
    t = P + "Duration";
    var G = {
        transitionDuration: t,
        transitionDelay: U,
        transitionProperty: P + "Property",
        animationDuration: _,
        animationDelay: H,
        animationIterationCount: O + "IterationCount"
      },
      Y = {
        transitionDuration: t,
        transitionDelay: U,
        animationDuration: _,
        animationDelay: H
      };
    e.module("ngAnimate", []).provider("$$body", function() {
      this.$get = ["$document", function(t) {
        return F(t[0].body)
      }]
    }).directive("ngAnimateChildren", [function() {
      return function(t, n, i) {
        t = i.ngAnimateChildren, e.isString(t) && 0 === t.length ? n.data("$$ngAnimateChildren", !0) : i.$observe("ngAnimateChildren", function(t) {
          n.data("$$ngAnimateChildren", "on" === t || "true" === t)
        })
      }
    }]).factory("$$rAFScheduler", ["$$rAF", function(t) {
      function e(t) {
        i = i.concat(t), n()
      }

      function n() {
        if (i.length) {
          for (var e = i.shift(), o = 0; o < e.length; o++) e[o]();
          r || t(function() {
            r || n()
          })
        }
      }
      var i, r;
      return i = e.queue = [], e.waitUntilQuiet = function(e) {
        r && r(), r = t(function() {
          r = null, e(), n()
        })
      }, e
    }]).factory("$$AnimateRunner", ["$q", "$sniffer", "$$animateAsyncRun", function(t, e, n) {
      function i(t) {
        this.setHost(t), this._doneCallbacks = [], this._runInAnimationFrame = n(), this._state = 0
      }
      return i.chain = function(t, e) {
        function n() {
          i === t.length ? e(!0) : t[i](function(t) {
            !1 === t ? e(!1) : (i++, n())
          })
        }
        var i = 0;
        n()
      }, i.all = function(t, e) {
        function n(n) {
          r = r && n, ++i === t.length && e(r)
        }
        var i = 0,
          r = !0;
        N(t, function(t) {
          t.done(n)
        })
      }, i.prototype = {
        setHost: function(t) {
          this.host = t || {}
        },
        done: function(t) {
          2 === this._state ? t() : this._doneCallbacks.push(t)
        },
        progress: R,
        getPromise: function() {
          if (!this.promise) {
            var e = this;
            this.promise = t(function(t, n) {
              e.done(function(e) {
                !1 === e ? n() : t()
              })
            })
          }
          return this.promise
        },
        then: function(t, e) {
          return this.getPromise().then(t, e)
        },
        "catch": function(t) {
          return this.getPromise()["catch"](t)
        },
        "finally": function(t) {
          return this.getPromise()["finally"](t)
        },
        pause: function() {
          this.host.pause && this.host.pause()
        },
        resume: function() {
          this.host.resume && this.host.resume()
        },
        end: function() {
          this.host.end && this.host.end(), this._resolve(!0)
        },
        cancel: function() {
          this.host.cancel && this.host.cancel(), this._resolve(!1)
        },
        complete: function(t) {
          var e = this;
          0 === e._state && (e._state = 1, e._runInAnimationFrame(function() {
            e._resolve(t)
          }))
        },
        _resolve: function(t) {
          2 !== this._state && (N(this._doneCallbacks, function(e) {
            e(t)
          }), this._doneCallbacks.length = 0, this._state = 2)
        }
      }, i
    }]).factory("$$animateAsyncRun", ["$$rAF", function(t) {
      function e(e) {
        n.push(e), 1 < n.length || t(function() {
          for (var t = 0; t < n.length; t++) n[t]();
          n = []
        })
      }
      var n = [];
      return function() {
        var t = !1;
        return e(function() {
            t = !0
          }),
          function(n) {
            t ? n() : e(n)
          }
      }
    }]).provider("$$animateQueue", ["$animateProvider", function(t) {
      function e(t, e, n, i) {
        return r[t].some(function(t) {
          return t(e, n, i)
        })
      }

      function n(t, e) {
        t = t || {};
        var n = 0 < (t.addClass || "").length,
          i = 0 < (t.removeClass || "").length;
        return e ? n && i : n || i
      }
      var r = this.rules = {
        skip: [],
        cancel: [],
        join: []
      };
      r.join.push(function(t, e, i) {
        return !e.structural && n(e.options)
      }), r.skip.push(function(t, e, i) {
        return !e.structural && !n(e.options)
      }), r.skip.push(function(t, e, n) {
        return "leave" == n.event && e.structural
      }), r.skip.push(function(t, e, n) {
        return n.structural && 2 === n.state && !e.structural
      }), r.cancel.push(function(t, e, n) {
        return n.structural && e.structural
      }), r.cancel.push(function(t, e, n) {
        return 2 === n.state && e.structural
      }), r.cancel.push(function(t, e, n) {
        return t = e.options, n = n.options, t.addClass && t.addClass === n.removeClass || t.removeClass && t.removeClass === n.addClass
      }), this.$get = ["$$rAF", "$rootScope", "$rootElement", "$document", "$$body", "$$HashMap", "$$animation", "$$AnimateRunner", "$templateRequest", "$$jqLite", "$$forceReflow", function(r, o, s, l, c, d, m, $, b, w, x) {
        function C(t, e) {
          var n = v(t),
            i = [],
            r = z[e];
          return r && N(r, function(t) {
            t.node.contains(n) && i.push(t.callback)
          }), i
        }

        function S(t, e, n, i) {
          r(function() {
            N(C(e, t), function(t) {
              t(e, n, i)
            })
          })
        }

        function A(t, i, r) {
          function s(e, n, i, r) {
            S(n, t, i, r), e.progress(n, i, r)
          }

          function u(e) {
            var n = t,
              i = r;
            i.preparationClasses && (n.removeClass(i.preparationClasses), i.preparationClasses = null), i.activeClasses && (n.removeClass(i.activeClasses), i.activeClasses = null), U(t, r), p(t, r), r.domOperation(), h.complete(!e)
          }
          var l, c;
          (t = a(t)) && (l = v(t), c = t.parent()), r = f(r);
          var h = new $;
          if (I(r.addClass) && (r.addClass = r.addClass.join(" ")), r.addClass && !V(r.addClass) && (r.addClass = null), I(r.removeClass) && (r.removeClass = r.removeClass.join(" ")), r.removeClass && !V(r.removeClass) && (r.removeClass = null), r.from && !j(r.from) && (r.from = null), r.to && !j(r.to) && (r.to = null), !l) return u(), h;
          var d = [l.className, r.addClass, r.removeClass].join(" ");
          if (!_(d)) return u(), h;
          var b = 0 <= ["enter", "move", "leave"].indexOf(i),
            w = !R || D.get(l),
            d = !w && O.get(l) || {},
            x = !!d.state;
          if (w || x && 1 == d.state || (w = !P(t, c, i)), w) return u(), h;
          if (b && k(t), c = {
              structural: b,
              element: t,
              event: i,
              close: u,
              options: r,
              runner: h
            }, x) {
            if (e("skip", t, c, d)) return 2 === d.state ? (u(), h) : (g(t, d.options, r), d.runner);
            if (e("cancel", t, c, d))
              if (2 === d.state) d.runner.end();
              else {
                if (!d.structural) return g(t, d.options, c.options), d.runner;
                d.close()
              }
            else if (e("join", t, c, d)) {
              if (2 !== d.state) return y(t, b ? i : null, r), i = c.event = d.event, r = g(t, d.options, c.options), d.runner;
              g(t, r, {})
            }
          } else g(t, r, {});
          if ((x = c.structural) || (x = "animate" === c.event && 0 < Object.keys(c.options.to || {}).length || n(c.options)), !x) return u(), E(t), h;
          var C = (d.counter || 0) + 1;
          return c.counter = C, M(t, 1, c), o.$$postDigest(function() {
            var e = O.get(l),
              o = !e,
              e = e || {},
              a = 0 < (t.parent() || []).length && ("animate" === e.event || e.structural || n(e.options));
            o || e.counter !== C || !a ? (o && (U(t, r), p(t, r)), (o || b && e.event !== i) && (r.domOperation(), h.end()), a || E(t)) : (i = !e.structural && n(e.options, !0) ? "setClass" : e.event, M(t, 2), e = m(t, i, e.options), e.done(function(e) {
              u(!e), (e = O.get(l)) && e.counter === C && E(v(t)), s(h, i, "close", {})
            }), h.setHost(e), s(h, i, "start", {}))
          }), h
        }

        function k(t) {
          t = v(t).querySelectorAll("[data-ng-animate]"), N(t, function(t) {
            var e = parseInt(t.getAttribute("data-ng-animate")),
              n = O.get(t);
            switch (e) {
              case 2:
                n.runner.end();
              case 1:
                n && O.remove(t)
            }
          })
        }

        function E(t) {
          t = v(t), t.removeAttribute("data-ng-animate"), O.remove(t)
        }

        function T(t, e) {
          return v(t) === v(e)
        }

        function P(t, e, n) {
          n = T(t, c) || "HTML" === t[0].nodeName;
          var i, r = T(t, s),
            o = !1;
          for ((t = t.data("$ngAnimatePin")) && (e = t); e && e.length && (r || (r = T(e, s)), t = e[0], 1 === t.nodeType);) {
            var a = O.get(t) || {};
            if (o || (o = a.structural || D.get(t)), (B(i) || !0 === i) && (t = e.data("$$ngAnimateChildren"), W(t) && (i = t)), o && !1 === i) break;
            r || (r = T(e, s), r || (t = e.data("$ngAnimatePin")) && (e = t)), n || (n = T(e, c)), e = e.parent()
          }
          return (!o || i) && r && n
        }

        function M(t, e, n) {
          n = n || {}, n.state = e, t = v(t), t.setAttribute("data-ng-animate", e), n = (e = O.get(t)) ? L(e, n) : n, O.put(t, n)
        }
        var O = new d,
          D = new d,
          R = null,
          F = o.$watch(function() {
            return 0 === b.totalPendingRequests
          }, function(t) {
            t && (F(), o.$$postDigest(function() {
              o.$$postDigest(function() {
                null === R && (R = !0)
              })
            }))
          }),
          z = {},
          H = t.classNameFilter(),
          _ = H ? function(t) {
            return H.test(t)
          } : function() {
            return !0
          },
          U = h(w);
        return {
          on: function(t, e, n) {
            e = u(e), z[t] = z[t] || [], z[t].push({
              node: e,
              callback: n
            })
          },
          off: function(t, e, n) {
            function i(t, e, n) {
              var i = u(e);
              return t.filter(function(t) {
                return !(t.node === i && (!n || t.callback === n))
              })
            }
            var r = z[t];
            r && (z[t] = 1 === arguments.length ? null : i(r, e, n))
          },
          pin: function(t, e) {
            i(q(t), "element", "not an element"), i(q(e), "parentElement", "not an element"), t.data("$ngAnimatePin", e)
          },
          push: function(t, e, n, i) {
            return n = n || {}, n.domOperation = i, A(t, e, n)
          },
          enabled: function(t, e) {
            var n = arguments.length;
            if (0 === n) e = !!R;
            else if (q(t)) {
              var i = v(t),
                r = D.get(i);
              1 === n ? e = !r : (e = !!e) ? r && D.remove(i) : D.put(i, !0)
            } else e = R = !!t;
            return e
          }
        }
      }]
    }]).provider("$$animation", ["$animateProvider", function(t) {
      function e(t) {
        return t.data("$$animationRunner")
      }
      var n = this.drivers = [];
      this.$get = ["$$jqLite", "$rootScope", "$injector", "$$AnimateRunner", "$$HashMap", "$$rAFScheduler", function(t, i, o, s, a, u) {
        function l(t) {
          function e(t) {
            if (t.processed) return t;
            t.processed = !0;
            var n = t.domNode,
              o = n.parentNode;
            r.put(n, t);
            for (var s; o;) {
              if (s = r.get(o)) {
                s.processed || (s = e(s));
                break
              }
              o = o.parentNode
            }
            return (s || i).children.push(t), t
          }
          var n, i = {
              children: []
            },
            r = new a;
          for (n = 0; n < t.length; n++) {
            var o = t[n];
            r.put(o.domNode, t[n] = {
              domNode: o.domNode,
              fn: o.fn,
              children: []
            })
          }
          for (n = 0; n < t.length; n++) e(t[n]);
          return function(t) {
            var e, n = [],
              i = [];
            for (e = 0; e < t.children.length; e++) i.push(t.children[e]);
            t = i.length;
            var r = 0,
              o = [];
            for (e = 0; e < i.length; e++) {
              var s = i[e];
              0 >= t && (t = r, r = 0, n.push(o), o = []), o.push(s.fn), s.children.forEach(function(t) {
                r++, i.push(t)
              }), t--
            }
            return o.length && n.push(o), n
          }(i)
        }
        var c = [],
          d = h(t);
        return function(a, h, m) {
          function g(t) {
            t = t.hasAttribute("ng-animate-ref") ? [t] : t.querySelectorAll("[ng-animate-ref]");
            var e = [];
            return N(t, function(t) {
              var n = t.getAttribute("ng-animate-ref");
              n && n.length && e.push(t)
            }), e
          }

          function $(t) {
            var e = [],
              n = {};
            N(t, function(t, i) {
              var r = v(t.element),
                o = 0 <= ["enter", "move"].indexOf(t.event),
                r = t.structural ? g(r) : [];
              if (r.length) {
                var s = o ? "to" : "from";
                N(r, function(t) {
                  var e = t.getAttribute("ng-animate-ref");
                  n[e] = n[e] || {}, n[e][s] = {
                    animationID: i,
                    element: F(t)
                  }
                })
              } else e.push(t)
            });
            var i = {},
              r = {};
            return N(n, function(n, o) {
              var s = n.from,
                a = n.to;
              if (s && a) {
                var u = t[s.animationID],
                  l = t[a.animationID],
                  c = s.animationID.toString();
                if (!r[c]) {
                  var h = r[c] = {
                    structural: !0,
                    beforeStart: function() {
                      u.beforeStart(), l.beforeStart()
                    },
                    close: function() {
                      u.close(), l.close()
                    },
                    classes: y(u.classes, l.classes),
                    from: u,
                    to: l,
                    anchors: []
                  };
                  h.classes.length ? e.push(h) : (e.push(u), e.push(l))
                }
                r[c].anchors.push({
                  out: s.element,
                  "in": a.element
                })
              } else s = s ? s.animationID : a.animationID, a = s.toString(), i[a] || (i[a] = !0, e.push(t[s]))
            }), e
          }

          function y(t, e) {
            t = t.split(" "), e = e.split(" ");
            for (var n = [], i = 0; i < t.length; i++) {
              var r = t[i];
              if ("ng-" !== r.substring(0, 3))
                for (var o = 0; o < e.length; o++)
                  if (r === e[o]) {
                    n.push(r);
                    break
                  }
            }
            return n.join(" ")
          }

          function b(t) {
            for (var e = n.length - 1; e >= 0; e--) {
              var i = n[e];
              if (o.has(i) && (i = o.get(i)(t))) return i
            }
          }

          function w(t, n) {
            t.from && t.to ? (e(t.from.element).setHost(n), e(t.to.element).setHost(n)) : e(t.element).setHost(n)
          }

          function x() {
            var t = e(a);
            !t || "leave" === h && m.$$domOperationFired || t.end()
          }

          function C(e) {
            a.off("$destroy", x), a.removeData("$$animationRunner"), d(a, m), p(a, m), m.domOperation(), E && t.removeClass(a, E), a.removeClass("ng-animate"), A.complete(!e)
          }
          m = f(m);
          var S = 0 <= ["enter", "move", "leave"].indexOf(h),
            A = new s({
              end: function() {
                C()
              },
              cancel: function() {
                C(!0)
              }
            });
          if (!n.length) return C(), A;
          a.data("$$animationRunner", A);
          var k = r(a.attr("class"), r(m.addClass, m.removeClass)),
            E = m.tempClasses;
          return E && (k += " " + E, m.tempClasses = null), c.push({
            element: a,
            classes: k,
            event: h,
            structural: S,
            options: m,
            beforeStart: function() {
              a.addClass("ng-animate"), E && t.addClass(a, E)
            },
            close: C
          }), a.on("$destroy", x), 1 < c.length ? A : (i.$$postDigest(function() {
            var t = [];
            N(c, function(n) {
              e(n.element) ? t.push(n) : n.close()
            }), c.length = 0;
            var n = $(t),
              i = [];
            N(n, function(t) {
              i.push({
                domNode: v(t.from ? t.from.element : t.element),
                fn: function() {
                  t.beforeStart();
                  var n, i = t.close;
                  if (e(t.anchors ? t.from.element || t.to.element : t.element)) {
                    var r = b(t);
                    r && (n = r.start)
                  }
                  n ? (n = n(), n.done(function(t) {
                    i(!t)
                  }), w(t, n)) : i()
                }
              })
            }), u(l(i))
          }), A)
        }
      }]
    }]).provider("$animateCss", ["$animateProvider", function(t) {
      var e = T(),
        n = T();
      this.$get = ["$window", "$$jqLite", "$$AnimateRunner", "$timeout", "$$forceReflow", "$sniffer", "$$rAFScheduler", "$animate", function(t, i, r, a, u, l, c, g) {
        function $(t, e) {
          var n = t.parentNode;
          return (n.$$ngAnimateParentKey || (n.$$ngAnimateParentKey = ++L)) + "-" + t.getAttribute("class") + "-" + e
        }

        function y(r, o, a, u) {
          var l;
          return 0 < e.count(a) && (l = n.get(a), l || (o = s(o, "-stagger"), i.addClass(r, o), l = S(t, r, u), l.animationDuration = Math.max(l.animationDuration, 0), l.transitionDuration = Math.max(l.transitionDuration, 0), i.removeClass(r, o), n.put(a, l))), l || {}
        }

        function C(t) {
          F.push(t), c.waitUntilQuiet(function() {
            e.flush(), n.flush();
            for (var t = u(), i = 0; i < F.length; i++) F[i](t);
            F.length = 0
          })
        }

        function A(n, i, r) {
          return i = e.get(r), i || (i = S(t, n, G), "infinite" === i.animationIterationCount && (i.animationIterationCount = 1)), e.put(r, i), n = i, r = n.animationDelay, i = n.transitionDelay, n.maxDelay = r && i ? Math.max(r, i) : r || i, n.maxDuration = Math.max(n.animationDuration * n.animationIterationCount, n.transitionDuration), n
        }
        var T = h(i),
          L = 0,
          F = [];
        return function(t, n) {
          function u() {
            h()
          }

          function c() {
            h(!0)
          }

          function h(e) {
            j || W && B || (j = !0, B = !1, n.$$skipPreparationClasses || i.removeClass(t, rt), i.removeClass(t, st), w(V, !1), b(V, !1), N(Z, function(t) {
              V.style[t[0]] = ""
            }), T(t, n), p(t, n), n.onDone && n.onDone(), z && z.complete(!e))
          }

          function S(t) {
            ft.blockTransition && b(V, t), ft.blockKeyframeAnimation && w(V, !!t)
          }

          function L() {
            return z = new r({
              end: u,
              cancel: c
            }), C(R), h(), {
              $$willAnimate: !1,
              start: function() {
                return z
              },
              end: u
            }
          }

          function F() {
            function e() {
              if (!j) {
                if (S(!1), N(Z, function(t) {
                    V.style[t[0]] = t[1]
                  }), T(t, n), i.addClass(t, st), ft.recalculateTimingStyles) {
                  if (ot = V.className + " " + rt, at = $(V, ot), ct = A(V, ot, at), ht = ct.maxDelay, G = Math.max(ht, 0), K = ct.maxDuration, 0 === K) return void h();
                  ft.hasTransitions = 0 < ct.transitionDuration, ft.hasAnimations = 0 < ct.animationDuration
                }
                if (ft.applyAnimationDelay && (ht = "boolean" != typeof n.delay && k(n.delay) ? parseFloat(n.delay) : ht, G = Math.max(ht, 0), ct.animationDelay = ht, pt = [H, ht + "s"], Z.push(pt), V.style[pt[0]] = pt[1]), X = 1e3 * G, Q = 1e3 * K, n.easing) {
                  var e, l = n.easing;
                  ft.hasTransitions && (e = P + "TimingFunction", Z.push([e, l]), V.style[e] = l), ft.hasAnimations && (e = O + "TimingFunction", Z.push([e, l]), V.style[e] = l)
                }
                ct.transitionDuration && u.push(M), ct.animationDuration && u.push(D), s = Date.now();
                var c = X + 1.5 * Q;
                e = s + c;
                var l = t.data("$$animateCss") || [],
                  f = !0;
                if (l.length) {
                  var p = l[0];
                  (f = e > p.expectedEndTime) ? a.cancel(p.timer): l.push(h)
                }
                f && (c = a(r, c, !1), l[0] = {
                  timer: c,
                  expectedEndTime: e
                }, l.push(h), t.data("$$animateCss", l)), t.on(u.join(" "), o), m(t, n)
              }
            }

            function r() {
              var e = t.data("$$animateCss");
              if (e) {
                for (var n = 1; n < e.length; n++) e[n]();
                t.removeData("$$animateCss")
              }
            }

            function o(t) {
              t.stopPropagation();
              var e = t.originalEvent || t;
              t = e.$manualTimeStamp || e.timeStamp || Date.now(), e = parseFloat(e.elapsedTime.toFixed(3)), Math.max(t - s, 0) >= X && e >= K && (W = !0, h())
            }
            if (!j)
              if (V.parentNode) {
                var s, u = [],
                  l = function(t) {
                    if (W) B && t && (B = !1, h());
                    else if (B = !t, ct.animationDuration)
                      if (t = w(V, B), B) Z.push(t);
                      else {
                        var e = Z,
                          n = e.indexOf(t);
                        t >= 0 && e.splice(n, 1)
                      }
                  },
                  c = lt > 0 && (ct.transitionDuration && 0 === ut.transitionDuration || ct.animationDuration && 0 === ut.animationDuration) && Math.max(ut.animationDelay, ut.transitionDelay);
                c ? a(e, Math.floor(c * lt * 1e3), !1) : e(), q.resume = function() {
                  l(!0)
                }, q.pause = function() {
                  l(!1)
                }
              } else h()
          }
          var V = v(t);
          if (!V || !V.parentNode || !g.enabled()) return L();
          n = f(n);
          var j, B, W, z, q, G, X, K, Q, Z = [],
            J = t.attr("class"),
            tt = o(n);
          if (0 === n.duration || !l.animations && !l.transitions) return L();
          var et = n.event && I(n.event) ? n.event.join(" ") : n.event,
            nt = "",
            it = "";
          et && n.structural ? nt = s(et, "ng-", !0) : et && (nt = et),
            n.addClass && (it += s(n.addClass, "-add")), n.removeClass && (it.length && (it += " "), it += s(n.removeClass, "-remove")), n.applyClassesEarly && it.length && T(t, n);
          var rt = [nt, it].join(" ").trim(),
            ot = J + " " + rt,
            st = s(rt, "-active"),
            J = tt.to && 0 < Object.keys(tt.to).length;
          if (!(0 < (n.keyframeStyle || "").length || J || rt)) return L();
          var at, ut;
          0 < n.stagger ? (tt = parseFloat(n.stagger), ut = {
            transitionDelay: tt,
            animationDelay: tt,
            transitionDuration: 0,
            animationDuration: 0
          }) : (at = $(V, ot), ut = y(V, rt, at, Y)), n.$$skipPreparationClasses || i.addClass(t, rt), n.transitionStyle && (tt = [P, n.transitionStyle], x(V, tt), Z.push(tt)), 0 <= n.duration && (tt = 0 < V.style[P].length, tt = E(n.duration, tt), x(V, tt), Z.push(tt)), n.keyframeStyle && (tt = [O, n.keyframeStyle], x(V, tt), Z.push(tt));
          var lt = ut ? 0 <= n.staggerIndex ? n.staggerIndex : e.count(at) : 0;
          (et = 0 === lt) && !n.skipBlocking && b(V, 9999);
          var ct = A(V, ot, at),
            ht = ct.maxDelay;
          G = Math.max(ht, 0), K = ct.maxDuration;
          var ft = {};
          if (ft.hasTransitions = 0 < ct.transitionDuration, ft.hasAnimations = 0 < ct.animationDuration, ft.hasTransitionAll = ft.hasTransitions && "all" == ct.transitionProperty, ft.applyTransitionDuration = J && (ft.hasTransitions && !ft.hasTransitionAll || ft.hasAnimations && !ft.hasTransitions), ft.applyAnimationDuration = n.duration && ft.hasAnimations, ft.applyTransitionDelay = k(n.delay) && (ft.applyTransitionDuration || ft.hasTransitions), ft.applyAnimationDelay = k(n.delay) && ft.hasAnimations, ft.recalculateTimingStyles = 0 < it.length, (ft.applyTransitionDuration || ft.applyAnimationDuration) && (K = n.duration ? parseFloat(n.duration) : K, ft.applyTransitionDuration && (ft.hasTransitions = !0, ct.transitionDuration = K, tt = 0 < V.style[P + "Property"].length, Z.push(E(K, tt))), ft.applyAnimationDuration && (ft.hasAnimations = !0, ct.animationDuration = K, Z.push([_, K + "s"]))), 0 === K && !ft.recalculateTimingStyles) return L();
          if (null != n.delay) {
            var pt = parseFloat(n.delay);
            ft.applyTransitionDelay && Z.push([U, pt + "s"]), ft.applyAnimationDelay && Z.push([H, pt + "s"])
          }
          return null == n.duration && 0 < ct.transitionDuration && (ft.recalculateTimingStyles = ft.recalculateTimingStyles || et), X = 1e3 * G, Q = 1e3 * K, n.skipBlocking || (ft.blockTransition = 0 < ct.transitionDuration, ft.blockKeyframeAnimation = 0 < ct.animationDuration && 0 < ut.animationDelay && 0 === ut.animationDuration), d(t, n), ft.blockTransition || ft.blockKeyframeAnimation ? S(K) : n.skipBlocking || b(V, !1), {
            $$willAnimate: !0,
            end: u,
            start: function() {
              return j ? void 0 : (q = {
                end: u,
                cancel: c,
                resume: null,
                pause: null
              }, z = new r(q), C(F), z)
            }
          }
        }
      }]
    }]).provider("$$animateCssDriver", ["$$animationProvider", function(t) {
      t.drivers.push("$$animateCssDriver"), this.$get = ["$animateCss", "$rootScope", "$$AnimateRunner", "$rootElement", "$$body", "$sniffer", "$$jqLite", function(t, e, n, i, r, o, s) {
        function a(t) {
          return t.replace(/\bng-\S+\b/g, "")
        }

        function u(t, e) {
          return V(t) && (t = t.split(" ")), V(e) && (e = e.split(" ")), t.filter(function(t) {
            return -1 === e.indexOf(t)
          }).join(" ")
        }

        function l(e, i, r) {
          function o(t) {
            var e = {},
              n = v(t).getBoundingClientRect();
            return N(["width", "height", "top", "left"], function(t) {
              var i = n[t];
              switch (t) {
                case "top":
                  i += p.scrollTop;
                  break;
                case "left":
                  i += p.scrollLeft
              }
              e[t] = Math.floor(i) + "px"
            }), e
          }

          function s() {
            var e = a(r.attr("class") || ""),
              n = u(e, h),
              e = u(h, e),
              n = t(c, {
                to: o(r),
                addClass: "ng-anchor-in " + n,
                removeClass: "ng-anchor-out " + e,
                delay: !0
              });
            return n.$$willAnimate ? n : null
          }

          function l() {
            c.remove(), i.removeClass("ng-animate-shim"), r.removeClass("ng-animate-shim")
          }
          var c = F(v(i).cloneNode(!0)),
            h = a(c.attr("class") || "");
          i.addClass("ng-animate-shim"), r.addClass("ng-animate-shim"), c.addClass("ng-anchor"), d.append(c);
          var f;
          if (e = function() {
              var e = t(c, {
                addClass: "ng-anchor-out",
                delay: !0,
                from: o(i)
              });
              return e.$$willAnimate ? e : null
            }(), !e && (f = s(), !f)) return l();
          var m = e || f;
          return {
            start: function() {
              function t() {
                i && i.end()
              }
              var e, i = m.start();
              return i.done(function() {
                return i = null, !f && (f = s()) ? (i = f.start(), i.done(function() {
                  i = null, l(), e.complete()
                }), i) : (l(), void e.complete())
              }), e = new n({
                end: t,
                cancel: t
              })
            }
          }
        }

        function c(t, e, i, r) {
          var o = f(t, R),
            s = f(e, R),
            a = [];
          return N(r, function(t) {
            (t = l(i, t.out, t["in"])) && a.push(t)
          }), o || s || 0 !== a.length ? {
            start: function() {
              function t() {
                N(e, function(t) {
                  t.end()
                })
              }
              var e = [];
              o && e.push(o.start()), s && e.push(s.start()), N(a, function(t) {
                e.push(t.start())
              });
              var i = new n({
                end: t,
                cancel: t
              });
              return n.all(e, function(t) {
                i.complete(t)
              }), i
            }
          } : void 0
        }

        function f(e) {
          var n = e.element,
            i = e.options || {};
          return e.structural && (i.event = e.event, i.structural = !0, i.applyClassesEarly = !0, "leave" === e.event && (i.onDone = i.domOperation)), i.preparationClasses && (i.event = C(i.event, i.preparationClasses)), e = t(n, i), e.$$willAnimate ? e : null
        }
        if (!o.animations && !o.transitions) return R;
        var p = v(r);
        e = v(i);
        var d = F(p.parentNode === e ? p : e);
        return h(s),
          function(t) {
            return t.from && t.to ? c(t.from, t.to, t.classes, t.anchors) : f(t)
          }
      }]
    }]).provider("$$animateJs", ["$animateProvider", function(t) {
      this.$get = ["$injector", "$$AnimateRunner", "$$jqLite", function(e, n, i) {
        function r(n) {
          n = I(n) ? n : n.split(" ");
          for (var i = [], r = {}, o = 0; o < n.length; o++) {
            var s = n[o],
              a = t.$$registeredAnimations[s];
            a && !r[s] && (i.push(e.get(a)), r[s] = !0)
          }
          return i
        }
        var o = h(i);
        return function(t, e, i, s) {
          function a() {
            s.domOperation(), o(t, s)
          }

          function u(t, e, i, r, o) {
            switch (i) {
              case "animate":
                e = [e, r.from, r.to, o];
                break;
              case "setClass":
                e = [e, m, g, o];
                break;
              case "addClass":
                e = [e, m, o];
                break;
              case "removeClass":
                e = [e, g, o];
                break;
              default:
                e = [e, o]
            }
            if (e.push(r), t = t.apply(t, e))
              if (z(t.start) && (t = t.start()), t instanceof n) t.done(o);
              else if (z(t)) return t;
            return R
          }

          function l(t, e, i, r, o) {
            var s = [];
            return N(r, function(r) {
              var a = r[o];
              a && s.push(function() {
                var r, o, s = !1,
                  l = function(t) {
                    s || (s = !0, (o || R)(t), r.complete(!t))
                  };
                return r = new n({
                  end: function() {
                    l()
                  },
                  cancel: function() {
                    l(!0)
                  }
                }), o = u(a, t, e, i, function(t) {
                  l(!1 === t)
                }), r
              })
            }), s
          }

          function c(t, e, i, r, o) {
            var s = l(t, e, i, r, o);
            if (0 === s.length) {
              var a, u;
              "beforeSetClass" === o ? (a = l(t, "removeClass", i, r, "beforeRemoveClass"), u = l(t, "addClass", i, r, "beforeAddClass")) : "setClass" === o && (a = l(t, "removeClass", i, r, "removeClass"), u = l(t, "addClass", i, r, "addClass")), a && (s = s.concat(a)), u && (s = s.concat(u))
            }
            return 0 !== s.length ? function(t) {
              var e = [];
              return s.length && N(s, function(t) {
                  e.push(t())
                }), e.length ? n.all(e, t) : t(),
                function(t) {
                  N(e, function(e) {
                    t ? e.cancel() : e.end()
                  })
                }
            } : void 0
          }
          3 === arguments.length && j(i) && (s = i, i = null), s = f(s), i || (i = t.attr("class") || "", s.addClass && (i += " " + s.addClass), s.removeClass && (i += " " + s.removeClass));
          var h, d, m = s.addClass,
            g = s.removeClass,
            $ = r(i);
          if ($.length) {
            var v, y;
            "leave" == e ? (y = "leave", v = "afterLeave") : (y = "before" + e.charAt(0).toUpperCase() + e.substr(1), v = e), "enter" !== e && "move" !== e && (h = c(t, e, s, $, y)), d = c(t, e, s, $, v)
          }
          return h || d ? {
            start: function() {
              function e(e) {
                o = !0, a(), p(t, s), u.complete(e)
              }
              var i, r = [];
              h && r.push(function(t) {
                i = h(t)
              }), r.length ? r.push(function(t) {
                a(), t(!0)
              }) : a(), d && r.push(function(t) {
                i = d(t)
              });
              var o = !1,
                u = new n({
                  end: function() {
                    o || ((i || R)(void 0), e(void 0))
                  },
                  cancel: function() {
                    o || ((i || R)(!0), e(!0))
                  }
                });
              return n.chain(r, e), u
            }
          } : void 0
        }
      }]
    }]).provider("$$animateJsDriver", ["$$animationProvider", function(t) {
      t.drivers.push("$$animateJsDriver"), this.$get = ["$$animateJs", "$$AnimateRunner", function(t, e) {
        function n(e) {
          return t(e.element, e.event, e.classes, e.options)
        }
        return function(t) {
          if (!t.from || !t.to) return n(t);
          var i = n(t.from),
            r = n(t.to);
          return i || r ? {
            start: function() {
              function t() {
                return function() {
                  N(n, function(t) {
                    t.end()
                  })
                }
              }
              var n = [];
              i && n.push(i.start()), r && n.push(r.start()), e.all(n, function(t) {
                o.complete(t)
              });
              var o = new e({
                end: t(),
                cancel: t()
              });
              return o
            }
          } : void 0
        }
      }]
    }])
  }(window, window.angular),
  function() {
    var t = {
      VERSION: "2.3.5",
      Result: {
        SUCCEEDED: 1,
        NOTRANSITION: 2,
        CANCELLED: 3,
        PENDING: 4
      },
      Error: {
        INVALID_TRANSITION: 100,
        PENDING_TRANSITION: 200,
        INVALID_CALLBACK: 300
      },
      WILDCARD: "*",
      ASYNC: "async",
      create: function(e, n) {
        var i = "string" == typeof e.initial ? {
            state: e.initial
          } : e.initial,
          r = e.terminal || e["final"],
          o = n || e.target || {},
          s = e.events || [],
          a = e.callbacks || {},
          u = {},
          l = {},
          c = function(e) {
            var n = e.from instanceof Array ? e.from : e.from ? [e.from] : [t.WILDCARD];
            u[e.name] = u[e.name] || {};
            for (var i = 0; i < n.length; i++) l[n[i]] = l[n[i]] || [], l[n[i]].push(e.name), u[e.name][n[i]] = e.to || n[i]
          };
        i && (i.event = i.event || "startup", c({
          name: i.event,
          from: "none",
          to: i.state
        }));
        for (var h = 0; h < s.length; h++) c(s[h]);
        for (var f in u) u.hasOwnProperty(f) && (o[f] = t.buildEvent(f, u[f]));
        for (var f in a) a.hasOwnProperty(f) && (o[f] = a[f]);
        return o.current = "none", o.is = function(t) {
          return t instanceof Array ? t.indexOf(this.current) >= 0 : this.current === t
        }, o.can = function(e) {
          return !this.transition && (u[e].hasOwnProperty(this.current) || u[e].hasOwnProperty(t.WILDCARD))
        }, o.cannot = function(t) {
          return !this.can(t)
        }, o.transitions = function() {
          return l[this.current]
        }, o.isFinished = function() {
          return this.is(r)
        }, o.error = e.error || function(t, e, n, i, r, o, s) {
          throw s || o
        }, i && !i.defer && o[i.event](), o
      },
      doCallback: function(e, n, i, r, o, s) {
        if (n) try {
          return n.apply(e, [i, r, o].concat(s))
        } catch (a) {
          return e.error(i, r, o, s, t.Error.INVALID_CALLBACK, "an exception occurred in a caller-provided callback function", a)
        }
      },
      beforeAnyEvent: function(e, n, i, r, o) {
        return t.doCallback(e, e.onbeforeevent, n, i, r, o)
      },
      afterAnyEvent: function(e, n, i, r, o) {
        return t.doCallback(e, e.onafterevent || e.onevent, n, i, r, o)
      },
      leaveAnyState: function(e, n, i, r, o) {
        return t.doCallback(e, e.onleavestate, n, i, r, o)
      },
      enterAnyState: function(e, n, i, r, o) {
        return t.doCallback(e, e.onenterstate || e.onstate, n, i, r, o)
      },
      changeState: function(e, n, i, r, o) {
        return t.doCallback(e, e.onchangestate, n, i, r, o)
      },
      beforeThisEvent: function(e, n, i, r, o) {
        return t.doCallback(e, e["onbefore" + n], n, i, r, o)
      },
      afterThisEvent: function(e, n, i, r, o) {
        return t.doCallback(e, e["onafter" + n] || e["on" + n], n, i, r, o)
      },
      leaveThisState: function(e, n, i, r, o) {
        return t.doCallback(e, e["onleave" + i], n, i, r, o)
      },
      enterThisState: function(e, n, i, r, o) {
        return t.doCallback(e, e["onenter" + r] || e["on" + r], n, i, r, o)
      },
      beforeEvent: function(e, n, i, r, o) {
        return !1 === t.beforeThisEvent(e, n, i, r, o) || !1 === t.beforeAnyEvent(e, n, i, r, o) ? !1 : void 0
      },
      afterEvent: function(e, n, i, r, o) {
        t.afterThisEvent(e, n, i, r, o), t.afterAnyEvent(e, n, i, r, o)
      },
      leaveState: function(e, n, i, r, o) {
        var s = t.leaveThisState(e, n, i, r, o),
          a = t.leaveAnyState(e, n, i, r, o);
        return !1 === s || !1 === a ? !1 : t.ASYNC === s || t.ASYNC === a ? t.ASYNC : void 0
      },
      enterState: function(e, n, i, r, o) {
        t.enterThisState(e, n, i, r, o), t.enterAnyState(e, n, i, r, o)
      },
      buildEvent: function(e, n) {
        return function() {
          var i = this.current,
            r = n[i] || n[t.WILDCARD] || i,
            o = Array.prototype.slice.call(arguments);
          if (this.transition) return this.error(e, i, r, o, t.Error.PENDING_TRANSITION, "event " + e + " inappropriate because previous transition did not complete");
          if (this.cannot(e)) return this.error(e, i, r, o, t.Error.INVALID_TRANSITION, "event " + e + " inappropriate in current state " + this.current);
          if (!1 === t.beforeEvent(this, e, i, r, o)) return t.Result.CANCELLED;
          if (i === r) return t.afterEvent(this, e, i, r, o), t.Result.NOTRANSITION;
          var s = this;
          this.transition = function() {
            return s.transition = null, s.current = r, t.enterState(s, e, i, r, o), t.changeState(s, e, i, r, o), t.afterEvent(s, e, i, r, o), t.Result.SUCCEEDED
          }, this.transition.cancel = function() {
            s.transition = null, t.afterEvent(s, e, i, r, o)
          };
          var a = t.leaveState(this, e, i, r, o);
          return !1 === a ? (this.transition = null, t.Result.CANCELLED) : t.ASYNC === a ? t.Result.PENDING : this.transition ? this.transition() : void 0
        }
      }
    };
    "undefined" != typeof exports ? ("undefined" != typeof module && module.exports && (exports = module.exports = t), exports.StateMachine = t) : "function" == typeof define && define.amd ? define(function(e) {
      return t
    }) : "undefined" != typeof window ? window.StateMachine = t : "undefined" != typeof self && (self.StateMachine = t)
  }(),
  /*!
   * Chart.js
   * http://chartjs.org/
   * Version: 1.0.1-beta.3
   *
   * Copyright 2014 Nick Downie
   * Released under the MIT license
   * https://github.com/nnnick/Chart.js/blob/master/LICENSE.md
   */
  function() {
    "use strict";
    var t = this,
      e = t.Chart,
      n = function(t) {
        return this.canvas = t.canvas, this.ctx = t, this.width = t.canvas.width, this.height = t.canvas.height, this.aspectRatio = this.width / this.height, i.retinaScale(this), this
      };
    n.defaults = {
      global: {
        animation: !0,
        animationSteps: 60,
        animationEasing: "easeOutQuart",
        showScale: !0,
        scaleOverride: !1,
        scaleSteps: null,
        scaleStepWidth: null,
        scaleStartValue: null,
        scaleLineColor: "rgba(0,0,0,.1)",
        scaleLineWidth: 1,
        scaleShowLabels: !0,
        scaleLabel: "<%=value%>",
        scaleIntegersOnly: !0,
        scaleBeginAtZero: !1,
        scaleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
        scaleFontSize: 12,
        scaleFontStyle: "normal",
        scaleFontColor: "#666",
        responsive: !1,
        maintainAspectRatio: !0,
        showTooltips: !0,
        tooltipEvents: ["mousemove", "touchstart", "touchmove", "mouseout"],
        tooltipFillColor: "rgba(0,0,0,0.8)",
        tooltipFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
        tooltipFontSize: 14,
        tooltipFontStyle: "normal",
        tooltipFontColor: "#fff",
        tooltipTitleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
        tooltipTitleFontSize: 14,
        tooltipTitleFontStyle: "bold",
        tooltipTitleFontColor: "#fff",
        tooltipYPadding: 6,
        tooltipXPadding: 6,
        tooltipCaretSize: 8,
        tooltipCornerRadius: 6,
        tooltipXOffset: 10,
        tooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
        multiTooltipTemplate: "<%= value %>",
        multiTooltipKeyBackground: "#fff",
        onAnimationProgress: function() {},
        onAnimationComplete: function() {}
      }
    }, n.types = {};
    var i = n.helpers = {},
      r = i.each = function(t, e, n) {
        var i = Array.prototype.slice.call(arguments, 3);
        if (t)
          if (t.length === +t.length) {
            var r;
            for (r = 0; r < t.length; r++) e.apply(n, [t[r], r].concat(i))
          } else
            for (var o in t) e.apply(n, [t[o], o].concat(i))
      },
      o = i.clone = function(t) {
        var e = {};
        return r(t, function(n, i) {
          t.hasOwnProperty(i) && (e[i] = n)
        }), e
      },
      s = i.extend = function(t) {
        return r(Array.prototype.slice.call(arguments, 1), function(e) {
          r(e, function(n, i) {
            e.hasOwnProperty(i) && (t[i] = n)
          })
        }), t
      },
      a = i.merge = function() {
        var t = Array.prototype.slice.call(arguments, 0);
        return t.unshift({}), s.apply(null, t)
      },
      u = i.indexOf = function(t, e) {
        if (Array.prototype.indexOf) return t.indexOf(e);
        for (var n = 0; n < t.length; n++)
          if (t[n] === e) return n;
        return -1
      },
      l = i.inherits = function(t) {
        var e = this,
          n = t && t.hasOwnProperty("constructor") ? t.constructor : function() {
            return e.apply(this, arguments)
          },
          i = function() {
            this.constructor = n
          };
        return i.prototype = e.prototype, n.prototype = new i, n.extend = l, t && s(n.prototype, t), n.__super__ = e.prototype, n
      },
      c = i.noop = function() {},
      h = i.uid = function() {
        var t = 0;
        return function() {
          return "chart-" + t++
        }
      }(),
      f = i.warn = function(t) {
        window.console && "function" == typeof window.console.warn && console.warn(t)
      },
      p = i.amd = "function" == typeof t.define && t.define.amd,
      d = i.isNumber = function(t) {
        return !isNaN(parseFloat(t)) && isFinite(t)
      },
      m = i.max = function(t) {
        return Math.max.apply(Math, t)
      },
      g = i.min = function(t) {
        return Math.min.apply(Math, t)
      },
      $ = (i.cap = function(t, e, n) {
        if (d(e)) {
          if (t > e) return e
        } else if (d(n) && n > t) return n;
        return t
      }, i.getDecimalPlaces = function(t) {
        return t % 1 !== 0 && d(t) ? t.toString().split(".")[1].length : 0
      }),
      v = i.radians = function(t) {
        return t * (Math.PI / 180)
      },
      y = (i.getAngleFromPoint = function(t, e) {
        var n = e.x - t.x,
          i = e.y - t.y,
          r = Math.sqrt(n * n + i * i),
          o = 2 * Math.PI + Math.atan2(i, n);
        return 0 > n && 0 > i && (o += 2 * Math.PI), {
          angle: o,
          distance: r
        }
      }, i.aliasPixel = function(t) {
        return t % 2 === 0 ? 0 : .5
      }),
      b = (i.splineCurve = function(t, e, n, i) {
        var r = Math.sqrt(Math.pow(e.x - t.x, 2) + Math.pow(e.y - t.y, 2)),
          o = Math.sqrt(Math.pow(n.x - e.x, 2) + Math.pow(n.y - e.y, 2)),
          s = i * r / (r + o),
          a = i * o / (r + o);
        return {
          inner: {
            x: e.x - s * (n.x - t.x),
            y: e.y - s * (n.y - t.y)
          },
          outer: {
            x: e.x + a * (n.x - t.x),
            y: e.y + a * (n.y - t.y)
          }
        }
      }, i.calculateOrderOfMagnitude = function(t) {
        return Math.floor(Math.log(t) / Math.LN10)
      }),
      w = (i.calculateScaleRange = function(t, e, n, i, r) {
        var o = 2,
          s = Math.floor(e / (1.5 * n)),
          a = o >= s,
          u = m(t),
          l = g(t);
        u === l && (u += .5, l >= .5 && !i ? l -= .5 : u += .5);
        for (var c = Math.abs(u - l), h = b(c), f = Math.ceil(u / (1 * Math.pow(10, h))) * Math.pow(10, h), p = i ? 0 : Math.floor(l / (1 * Math.pow(10, h))) * Math.pow(10, h), d = f - p, $ = Math.pow(10, h), v = Math.round(d / $);
          (v > s || s > 2 * v) && !a;)
          if (v > s) $ *= 2, v = Math.round(d / $), v % 1 !== 0 && (a = !0);
          else if (r && h >= 0) {
          if ($ / 2 % 1 !== 0) break;
          $ /= 2, v = Math.round(d / $)
        } else $ /= 2, v = Math.round(d / $);
        return a && (v = o, $ = d / v), {
          steps: v,
          stepValue: $,
          min: p,
          max: p + v * $
        }
      }, i.template = function(t, e) {
        function n(t, e) {
          var n = /\W/.test(t) ? new Function("obj", "var p=[],print=function(){p.push.apply(p,arguments);};with(obj){p.push('" + t.replace(/[\r\t\n]/g, " ").split("<%").join("	").replace(/((^|%>)[^\t]*)'/g, "$1\r").replace(/\t=(.*?)%>/g, "',$1,'").split("	").join("');").split("%>").join("p.push('").split("\r").join("\\'") + "');}return p.join('');") : i[t] = i[t];
          return e ? n(e) : n
        }
        if (t instanceof Function) return t(e);
        var i = {};
        return n(t, e)
      }),
      x = (i.generateLabels = function(t, e, n, i) {
        var o = new Array(e);
        return labelTemplateString && r(o, function(e, r) {
          o[r] = w(t, {
            value: n + i * (r + 1)
          })
        }), o
      }, i.easingEffects = {
        linear: function(t) {
          return t
        },
        easeInQuad: function(t) {
          return t * t
        },
        easeOutQuad: function(t) {
          return -1 * t * (t - 2)
        },
        easeInOutQuad: function(t) {
          return (t /= .5) < 1 ? .5 * t * t : -.5 * (--t * (t - 2) - 1)
        },
        easeInCubic: function(t) {
          return t * t * t
        },
        easeOutCubic: function(t) {
          return 1 * ((t = t / 1 - 1) * t * t + 1)
        },
        easeInOutCubic: function(t) {
          return (t /= .5) < 1 ? .5 * t * t * t : .5 * ((t -= 2) * t * t + 2)
        },
        easeInQuart: function(t) {
          return t * t * t * t
        },
        easeOutQuart: function(t) {
          return -1 * ((t = t / 1 - 1) * t * t * t - 1)
        },
        easeInOutQuart: function(t) {
          return (t /= .5) < 1 ? .5 * t * t * t * t : -.5 * ((t -= 2) * t * t * t - 2)
        },
        easeInQuint: function(t) {
          return 1 * (t /= 1) * t * t * t * t
        },
        easeOutQuint: function(t) {
          return 1 * ((t = t / 1 - 1) * t * t * t * t + 1)
        },
        easeInOutQuint: function(t) {
          return (t /= .5) < 1 ? .5 * t * t * t * t * t : .5 * ((t -= 2) * t * t * t * t + 2)
        },
        easeInSine: function(t) {
          return -1 * Math.cos(t / 1 * (Math.PI / 2)) + 1
        },
        easeOutSine: function(t) {
          return 1 * Math.sin(t / 1 * (Math.PI / 2))
        },
        easeInOutSine: function(t) {
          return -.5 * (Math.cos(Math.PI * t / 1) - 1)
        },
        easeInExpo: function(t) {
          return 0 === t ? 1 : 1 * Math.pow(2, 10 * (t / 1 - 1))
        },
        easeOutExpo: function(t) {
          return 1 === t ? 1 : 1 * (-Math.pow(2, -10 * t / 1) + 1)
        },
        easeInOutExpo: function(t) {
          return 0 === t ? 0 : 1 === t ? 1 : (t /= .5) < 1 ? .5 * Math.pow(2, 10 * (t - 1)) : .5 * (-Math.pow(2, -10 * --t) + 2)
        },
        easeInCirc: function(t) {
          return t >= 1 ? t : -1 * (Math.sqrt(1 - (t /= 1) * t) - 1)
        },
        easeOutCirc: function(t) {
          return 1 * Math.sqrt(1 - (t = t / 1 - 1) * t)
        },
        easeInOutCirc: function(t) {
          return (t /= .5) < 1 ? -.5 * (Math.sqrt(1 - t * t) - 1) : .5 * (Math.sqrt(1 - (t -= 2) * t) + 1)
        },
        easeInElastic: function(t) {
          var e = 1.70158,
            n = 0,
            i = 1;
          return 0 === t ? 0 : 1 == (t /= 1) ? 1 : (n || (n = .3), i < Math.abs(1) ? (i = 1, e = n / 4) : e = n / (2 * Math.PI) * Math.asin(1 / i), -(i * Math.pow(2, 10 * (t -= 1)) * Math.sin(2 * (1 * t - e) * Math.PI / n)))
        },
        easeOutElastic: function(t) {
          var e = 1.70158,
            n = 0,
            i = 1;
          return 0 === t ? 0 : 1 == (t /= 1) ? 1 : (n || (n = .3), i < Math.abs(1) ? (i = 1, e = n / 4) : e = n / (2 * Math.PI) * Math.asin(1 / i), i * Math.pow(2, -10 * t) * Math.sin(2 * (1 * t - e) * Math.PI / n) + 1)
        },
        easeInOutElastic: function(t) {
          var e = 1.70158,
            n = 0,
            i = 1;
          return 0 === t ? 0 : 2 == (t /= .5) ? 1 : (n || (n = .3 * 1.5), i < Math.abs(1) ? (i = 1, e = n / 4) : e = n / (2 * Math.PI) * Math.asin(1 / i), 1 > t ? -.5 * i * Math.pow(2, 10 * (t -= 1)) * Math.sin(2 * (1 * t - e) * Math.PI / n) : i * Math.pow(2, -10 * (t -= 1)) * Math.sin(2 * (1 * t - e) * Math.PI / n) * .5 + 1)
        },
        easeInBack: function(t) {
          var e = 1.70158;
          return 1 * (t /= 1) * t * ((e + 1) * t - e)
        },
        easeOutBack: function(t) {
          var e = 1.70158;
          return 1 * ((t = t / 1 - 1) * t * ((e + 1) * t + e) + 1)
        },
        easeInOutBack: function(t) {
          var e = 1.70158;
          return (t /= .5) < 1 ? .5 * t * t * (((e *= 1.525) + 1) * t - e) : .5 * ((t -= 2) * t * (((e *= 1.525) + 1) * t + e) + 2)
        },
        easeInBounce: function(t) {
          return 1 - x.easeOutBounce(1 - t)
        },
        easeOutBounce: function(t) {
          return (t /= 1) < 1 / 2.75 ? 7.5625 * t * t : 2 / 2.75 > t ? 1 * (7.5625 * (t -= 1.5 / 2.75) * t + .75) : 2.5 / 2.75 > t ? 1 * (7.5625 * (t -= 2.25 / 2.75) * t + .9375) : 1 * (7.5625 * (t -= 2.625 / 2.75) * t + .984375)
        },
        easeInOutBounce: function(t) {
          return .5 > t ? .5 * x.easeInBounce(2 * t) : .5 * x.easeOutBounce(2 * t - 1) + .5
        }
      }),
      C = i.requestAnimFrame = function() {
        return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(t) {
          return window.setTimeout(t, 1e3 / 60)
        }
      }(),
      S = (i.cancelAnimFrame = function() {
        return window.cancelAnimationFrame || window.webkitCancelAnimationFrame || window.mozCancelAnimationFrame || window.oCancelAnimationFrame || window.msCancelAnimationFrame || function(t) {
          return window.clearTimeout(t, 1e3 / 60)
        }
      }(), i.animationLoop = function(t, e, n, i, r, o) {
        var s = 0,
          a = x[n] || x.linear,
          u = function() {
            s++;
            var n = s / e,
              l = a(n);
            t.call(o, l, n, s), i.call(o, l, n), e > s ? o.animationFrame = C(u) : r.apply(o)
          };
        C(u)
      }, i.getRelativePosition = function(t) {
        var e, n, i = t.originalEvent || t,
          r = t.currentTarget || t.srcElement,
          o = r.getBoundingClientRect();
        return i.touches ? (e = i.touches[0].clientX - o.left, n = i.touches[0].clientY - o.top) : (e = i.clientX - o.left, n = i.clientY - o.top), {
          x: e,
          y: n
        }
      }, i.addEvent = function(t, e, n) {
        t.addEventListener ? t.addEventListener(e, n) : t.attachEvent ? t.attachEvent("on" + e, n) : t["on" + e] = n
      }),
      A = i.removeEvent = function(t, e, n) {
        t.removeEventListener ? t.removeEventListener(e, n, !1) : t.detachEvent ? t.detachEvent("on" + e, n) : t["on" + e] = c
      },
      k = (i.bindEvents = function(t, e, n) {
        t.events || (t.events = {}), r(e, function(e) {
          t.events[e] = function() {
            n.apply(t, arguments)
          }, S(t.chart.canvas, e, t.events[e])
        })
      }, i.unbindEvents = function(t, e) {
        r(e, function(e, n) {
          A(t.chart.canvas, n, e)
        })
      }),
      E = i.getMaximumWidth = function(t) {
        var e = t.parentNode;
        return e.clientWidth
      },
      T = i.getMaximumHeight = function(t) {
        var e = t.parentNode;
        return e.clientHeight
      },
      P = (i.getMaximumSize = i.getMaximumWidth, i.retinaScale = function(t) {
        var e = t.ctx,
          n = t.canvas.width,
          i = t.canvas.height;
        window.devicePixelRatio && (e.canvas.style.width = n + "px", e.canvas.style.height = i + "px", e.canvas.height = i * window.devicePixelRatio, e.canvas.width = n * window.devicePixelRatio, e.scale(window.devicePixelRatio, window.devicePixelRatio))
      }),
      M = i.clear = function(t) {
        t.ctx.clearRect(0, 0, t.width, t.height)
      },
      O = i.fontString = function(t, e, n) {
        return e + " " + t + "px " + n
      },
      D = i.longestText = function(t, e, n) {
        t.font = e;
        var i = 0;
        return r(n, function(e) {
          var n = t.measureText(e).width;
          i = n > i ? n : i
        }), i
      },
      R = i.drawRoundedRectangle = function(t, e, n, i, r, o) {
        t.beginPath(), t.moveTo(e + o, n), t.lineTo(e + i - o, n), t.quadraticCurveTo(e + i, n, e + i, n + o), t.lineTo(e + i, n + r - o), t.quadraticCurveTo(e + i, n + r, e + i - o, n + r), t.lineTo(e + o, n + r), t.quadraticCurveTo(e, n + r, e, n + r - o), t.lineTo(e, n + o), t.quadraticCurveTo(e, n, e + o, n), t.closePath()
      };
    n.instances = {}, n.Type = function(t, e, i) {
      this.options = e, this.chart = i, this.id = h(), n.instances[this.id] = this, e.responsive && this.resize(), this.initialize.call(this, t)
    }, s(n.Type.prototype, {
      initialize: function() {
        return this
      },
      clear: function() {
        return M(this.chart), this
      },
      stop: function() {
        return i.cancelAnimFrame.call(t, this.animationFrame), this
      },
      resize: function(t) {
        this.stop();
        var e = this.chart.canvas,
          n = E(this.chart.canvas),
          i = this.options.maintainAspectRatio ? n / this.chart.aspectRatio : T(this.chart.canvas);
        return e.width = this.chart.width = n, e.height = this.chart.height = i, P(this.chart), "function" == typeof t && t.apply(this, Array.prototype.slice.call(arguments, 1)), this
      },
      reflow: c,
      render: function(t) {
        return t && this.reflow(), this.options.animation && !t ? i.animationLoop(this.draw, this.options.animationSteps, this.options.animationEasing, this.options.onAnimationProgress, this.options.onAnimationComplete, this) : (this.draw(), this.options.onAnimationComplete.call(this)), this
      },
      generateLegend: function() {
        return w(this.options.legendTemplate, this)
      },
      destroy: function() {
        this.clear(), k(this, this.events), delete n.instances[this.id]
      },
      showTooltip: function(t, e) {
        "undefined" == typeof this.activeElements && (this.activeElements = []);
        var o = function(t) {
          var e = !1;
          return t.length !== this.activeElements.length ? e = !0 : (r(t, function(t, n) {
            t !== this.activeElements[n] && (e = !0)
          }, this), e)
        }.call(this, t);
        if (o || e) {
          if (this.activeElements = t, this.draw(), t.length > 0)
            if (this.datasets && this.datasets.length > 1) {
              for (var s, a, l = this.datasets.length - 1; l >= 0 && (s = this.datasets[l].points || this.datasets[l].bars || this.datasets[l].segments, a = u(s, t[0]), -1 === a); l--);
              var c = [],
                h = [],
                f = function() {
                  var t, e, n, r, o, s = [],
                    u = [],
                    l = [];
                  return i.each(this.datasets, function(e) {
                    t = e.points || e.bars || e.segments, t[a] && s.push(t[a])
                  }), i.each(s, function(t) {
                    u.push(t.x), l.push(t.y), c.push(i.template(this.options.multiTooltipTemplate, t)), h.push({
                      fill: t._saved.fillColor || t.fillColor,
                      stroke: t._saved.strokeColor || t.strokeColor
                    })
                  }, this), o = g(l), n = m(l), r = g(u), e = m(u), {
                    x: r > this.chart.width / 2 ? r : e,
                    y: (o + n) / 2
                  }
                }.call(this, a);
              new n.MultiTooltip({
                x: f.x,
                y: f.y,
                xPadding: this.options.tooltipXPadding,
                yPadding: this.options.tooltipYPadding,
                xOffset: this.options.tooltipXOffset,
                fillColor: this.options.tooltipFillColor,
                textColor: this.options.tooltipFontColor,
                fontFamily: this.options.tooltipFontFamily,
                fontStyle: this.options.tooltipFontStyle,
                fontSize: this.options.tooltipFontSize,
                titleTextColor: this.options.tooltipTitleFontColor,
                titleFontFamily: this.options.tooltipTitleFontFamily,
                titleFontStyle: this.options.tooltipTitleFontStyle,
                titleFontSize: this.options.tooltipTitleFontSize,
                cornerRadius: this.options.tooltipCornerRadius,
                labels: c,
                legendColors: h,
                legendColorBackground: this.options.multiTooltipKeyBackground,
                title: t[0].label,
                chart: this.chart,
                ctx: this.chart.ctx
              }).draw()
            } else r(t, function(t) {
              var e = t.tooltipPosition();
              new n.Tooltip({
                x: Math.round(e.x),
                y: Math.round(e.y),
                xPadding: this.options.tooltipXPadding,
                yPadding: this.options.tooltipYPadding,
                fillColor: this.options.tooltipFillColor,
                textColor: this.options.tooltipFontColor,
                fontFamily: this.options.tooltipFontFamily,
                fontStyle: this.options.tooltipFontStyle,
                fontSize: this.options.tooltipFontSize,
                caretHeight: this.options.tooltipCaretSize,
                cornerRadius: this.options.tooltipCornerRadius,
                text: w(this.options.tooltipTemplate, t),
                chart: this.chart
              }).draw()
            }, this);
          return this
        }
      },
      toBase64Image: function() {
        return this.chart.canvas.toDataURL.apply(this.chart.canvas, arguments)
      }
    }), n.Type.extend = function(t) {
      var e = this,
        i = function() {
          return e.apply(this, arguments)
        };
      if (i.prototype = o(e.prototype), s(i.prototype, t), i.extend = n.Type.extend, t.name || e.prototype.name) {
        var r = t.name || e.prototype.name,
          u = n.defaults[e.prototype.name] ? o(n.defaults[e.prototype.name]) : {};
        n.defaults[r] = s(u, t.defaults), n.types[r] = i, n.prototype[r] = function(t, e) {
          var o = a(n.defaults.global, n.defaults[r], e || {});
          return new i(t, o, this)
        }
      } else f("Name not provided for this chart, so it hasn't been registered");
      return e
    }, n.Element = function(t) {
      s(this, t), this.initialize.apply(this, arguments), this.save()
    }, s(n.Element.prototype, {
      initialize: function() {},
      restore: function(t) {
        return t ? r(t, function(t) {
          this[t] = this._saved[t]
        }, this) : s(this, this._saved), this
      },
      save: function() {
        return this._saved = o(this), delete this._saved._saved, this
      },
      update: function(t) {
        return r(t, function(t, e) {
          this._saved[e] = this[e], this[e] = t
        }, this), this
      },
      transition: function(t, e) {
        return r(t, function(t, n) {
          this[n] = (t - this._saved[n]) * e + this._saved[n]
        }, this), this
      },
      tooltipPosition: function() {
        return {
          x: this.x,
          y: this.y
        }
      }
    }), n.Element.extend = l, n.Point = n.Element.extend({
      display: !0,
      inRange: function(t, e) {
        var n = this.hitDetectionRadius + this.radius;
        return Math.pow(t - this.x, 2) + Math.pow(e - this.y, 2) < Math.pow(n, 2)
      },
      draw: function() {
        if (this.display) {
          var t = this.ctx;
          t.beginPath(), t.arc(this.x, this.y, this.radius, 0, 2 * Math.PI), t.closePath(), t.strokeStyle = this.strokeColor, t.lineWidth = this.strokeWidth, t.fillStyle = this.fillColor, t.fill(), t.stroke()
        }
      }
    }), n.Arc = n.Element.extend({
      inRange: function(t, e) {
        var n = i.getAngleFromPoint(this, {
            x: t,
            y: e
          }),
          r = n.angle >= this.startAngle && n.angle <= this.endAngle,
          o = n.distance >= this.innerRadius && n.distance <= this.outerRadius;
        return r && o
      },
      tooltipPosition: function() {
        var t = this.startAngle + (this.endAngle - this.startAngle) / 2,
          e = (this.outerRadius - this.innerRadius) / 2 + this.innerRadius;
        return {
          x: this.x + Math.cos(t) * e,
          y: this.y + Math.sin(t) * e
        }
      },
      draw: function(t) {
        var e = this.ctx;
        e.beginPath(), e.arc(this.x, this.y, this.outerRadius, this.startAngle, this.endAngle), e.arc(this.x, this.y, this.innerRadius, this.endAngle, this.startAngle, !0), e.closePath(), e.strokeStyle = this.strokeColor, e.lineWidth = this.strokeWidth, e.fillStyle = this.fillColor, e.fill(), e.lineJoin = "bevel", this.showStroke && e.stroke()
      }
    }), n.Rectangle = n.Element.extend({
      draw: function() {
        var t = this.ctx,
          e = this.width / 2,
          n = this.x - e,
          i = this.x + e,
          r = this.base - (this.base - this.y),
          o = this.strokeWidth / 2;
        this.showStroke && (n += o, i -= o, r += o), t.beginPath(), t.fillStyle = this.fillColor, t.strokeStyle = this.strokeColor, t.lineWidth = this.strokeWidth, t.moveTo(n, this.base), t.lineTo(n, r), t.lineTo(i, r), t.lineTo(i, this.base), t.fill(), this.showStroke && t.stroke()
      },
      height: function() {
        return this.base - this.y
      },
      inRange: function(t, e) {
        return t >= this.x - this.width / 2 && t <= this.x + this.width / 2 && e >= this.y && e <= this.base
      }
    }), n.Tooltip = n.Element.extend({
      draw: function() {
        var t = this.chart.ctx;
        t.font = O(this.fontSize, this.fontStyle, this.fontFamily), this.xAlign = "center", this.yAlign = "above";
        var e = 2,
          n = t.measureText(this.text).width + 2 * this.xPadding,
          i = this.fontSize + 2 * this.yPadding,
          r = i + this.caretHeight + e;
        this.x + n / 2 > this.chart.width ? this.xAlign = "left" : this.x - n / 2 < 0 && (this.xAlign = "right"), this.y - r < 0 && (this.yAlign = "below");
        var o = this.x - n / 2,
          s = this.y - r;
        switch (t.fillStyle = this.fillColor, this.yAlign) {
          case "above":
            t.beginPath(), t.moveTo(this.x, this.y - e), t.lineTo(this.x + this.caretHeight, this.y - (e + this.caretHeight)), t.lineTo(this.x - this.caretHeight, this.y - (e + this.caretHeight)), t.closePath(), t.fill();
            break;
          case "below":
            s = this.y + e + this.caretHeight, t.beginPath(), t.moveTo(this.x, this.y + e), t.lineTo(this.x + this.caretHeight, this.y + e + this.caretHeight), t.lineTo(this.x - this.caretHeight, this.y + e + this.caretHeight), t.closePath(), t.fill()
        }
        switch (this.xAlign) {
          case "left":
            o = this.x - n + (this.cornerRadius + this.caretHeight);
            break;
          case "right":
            o = this.x - (this.cornerRadius + this.caretHeight)
        }
        R(t, o, s, n, i, this.cornerRadius), t.fill(), t.fillStyle = this.textColor, t.textAlign = "center", t.textBaseline = "middle", t.fillText(this.text, o + n / 2, s + i / 2)
      }
    }), n.MultiTooltip = n.Element.extend({
      initialize: function() {
        this.font = O(this.fontSize, this.fontStyle, this.fontFamily), this.titleFont = O(this.titleFontSize, this.titleFontStyle, this.titleFontFamily), this.height = this.labels.length * this.fontSize + (this.labels.length - 1) * (this.fontSize / 2) + 2 * this.yPadding + 1.5 * this.titleFontSize, this.ctx.font = this.titleFont;
        var t = this.ctx.measureText(this.title).width,
          e = D(this.ctx, this.font, this.labels) + this.fontSize + 3,
          n = m([e, t]);
        this.width = n + 2 * this.xPadding;
        var i = this.height / 2;
        this.y - i < 0 ? this.y = i : this.y + i > this.chart.height && (this.y = this.chart.height - i), this.x > this.chart.width / 2 ? this.x -= this.xOffset + this.width : this.x += this.xOffset
      },
      getLineHeight: function(t) {
        var e = this.y - this.height / 2 + this.yPadding,
          n = t - 1;
        return 0 === t ? e + this.titleFontSize / 2 : e + (1.5 * this.fontSize * n + this.fontSize / 2) + 1.5 * this.titleFontSize
      },
      draw: function() {
        R(this.ctx, this.x, this.y - this.height / 2, this.width, this.height, this.cornerRadius);
        var t = this.ctx;
        t.fillStyle = this.fillColor, t.fill(), t.closePath(), t.textAlign = "left", t.textBaseline = "middle", t.fillStyle = this.titleTextColor, t.font = this.titleFont, t.fillText(this.title, this.x + this.xPadding, this.getLineHeight(0)), t.font = this.font, i.each(this.labels, function(e, n) {
          t.fillStyle = this.textColor, t.fillText(e, this.x + this.xPadding + this.fontSize + 3, this.getLineHeight(n + 1)), t.fillStyle = this.legendColorBackground, t.fillRect(this.x + this.xPadding, this.getLineHeight(n + 1) - this.fontSize / 2, this.fontSize, this.fontSize), t.fillStyle = this.legendColors[n].fill, t.fillRect(this.x + this.xPadding, this.getLineHeight(n + 1) - this.fontSize / 2, this.fontSize, this.fontSize)
        }, this)
      }
    }), n.Scale = n.Element.extend({
      initialize: function() {
        this.fit()
      },
      buildYLabels: function() {
        this.yLabels = [];
        for (var t = $(this.stepValue), e = 0; e <= this.steps; e++) this.yLabels.push(w(this.templateString, {
          value: (this.min + e * this.stepValue).toFixed(t)
        }));
        this.yLabelWidth = this.display && this.showLabels ? D(this.ctx, this.font, this.yLabels) : 0
      },
      addXLabel: function(t) {
        this.xLabels.push(t), this.valuesCount++, this.fit()
      },
      removeXLabel: function() {
        this.xLabels.shift(), this.valuesCount--, this.fit()
      },
      fit: function() {
        this.startPoint = this.display ? this.fontSize : 0, this.endPoint = this.display ? this.height - 1.5 * this.fontSize - 5 : this.height, this.startPoint += this.padding, this.endPoint -= this.padding;
        var t, e = this.endPoint - this.startPoint;
        for (this.calculateYRange(e), this.buildYLabels(), this.calculateXLabelRotation(); e > this.endPoint - this.startPoint;) e = this.endPoint - this.startPoint, t = this.yLabelWidth, this.calculateYRange(e), this.buildYLabels(), t < this.yLabelWidth && this.calculateXLabelRotation()
      },
      calculateXLabelRotation: function() {
        this.ctx.font = this.font;
        var t, e, n = this.ctx.measureText(this.xLabels[0]).width,
          i = this.ctx.measureText(this.xLabels[this.xLabels.length - 1]).width;
        if (this.xScalePaddingRight = i / 2 + 3, this.xScalePaddingLeft = n / 2 > this.yLabelWidth + 10 ? n / 2 : this.yLabelWidth + 10, this.xLabelRotation = 0, this.display) {
          var r, o = D(this.ctx, this.font, this.xLabels);
          this.xLabelWidth = o;
          for (var s = Math.floor(this.calculateX(1) - this.calculateX(0)) - 6; this.xLabelWidth > s && 0 === this.xLabelRotation || this.xLabelWidth > s && this.xLabelRotation <= 90 && this.xLabelRotation > 0;) r = Math.cos(v(this.xLabelRotation)), t = r * n, e = r * i, t + this.fontSize / 2 > this.yLabelWidth + 8 && (this.xScalePaddingLeft = t + this.fontSize / 2), this.xScalePaddingRight = this.fontSize / 2, this.xLabelRotation++, this.xLabelWidth = r * o;
          this.xLabelRotation > 0 && (this.endPoint -= Math.sin(v(this.xLabelRotation)) * o + 3)
        } else this.xLabelWidth = 0, this.xScalePaddingRight = this.padding, this.xScalePaddingLeft = this.padding
      },
      calculateYRange: c,
      drawingArea: function() {
        return this.startPoint - this.endPoint
      },
      calculateY: function(t) {
        var e = this.drawingArea() / (this.min - this.max);
        return this.endPoint - e * (t - this.min)
      },
      calculateX: function(t) {
        var e = (this.xLabelRotation > 0, this.width - (this.xScalePaddingLeft + this.xScalePaddingRight)),
          n = e / (this.valuesCount - (this.offsetGridLines ? 0 : 1)),
          i = n * t + this.xScalePaddingLeft;
        return this.offsetGridLines && (i += n / 2), Math.round(i)
      },
      update: function(t) {
        i.extend(this, t), this.fit()
      },
      draw: function() {
        var t = this.ctx,
          e = (this.endPoint - this.startPoint) / this.steps,
          n = Math.round(this.xScalePaddingLeft);
        this.display && (t.fillStyle = this.textColor, t.font = this.font, r(this.yLabels, function(r, o) {
          var s = this.endPoint - e * o,
            a = Math.round(s);
          t.textAlign = "right", t.textBaseline = "middle", this.showLabels && t.fillText(r, n - 10, s), t.beginPath(), o > 0 ? (t.lineWidth = this.gridLineWidth, t.strokeStyle = this.gridLineColor) : (t.lineWidth = this.lineWidth, t.strokeStyle = this.lineColor), a += i.aliasPixel(t.lineWidth), t.moveTo(n, a), t.lineTo(this.width, a), t.stroke(), t.closePath(), t.lineWidth = this.lineWidth, t.strokeStyle = this.lineColor, t.beginPath(), t.moveTo(n - 5, a), t.lineTo(n, a), t.stroke(), t.closePath()
        }, this), r(this.xLabels, function(e, n) {
          var i = this.calculateX(n) + y(this.lineWidth),
            r = this.calculateX(n - (this.offsetGridLines ? .5 : 0)) + y(this.lineWidth),
            o = this.xLabelRotation > 0;
          t.beginPath(), n > 0 ? (t.lineWidth = this.gridLineWidth, t.strokeStyle = this.gridLineColor) : (t.lineWidth = this.lineWidth, t.strokeStyle = this.lineColor), t.moveTo(r, this.endPoint), t.lineTo(r, this.startPoint - 3), t.stroke(), t.closePath(), t.lineWidth = this.lineWidth, t.strokeStyle = this.lineColor, t.beginPath(), t.moveTo(r, this.endPoint), t.lineTo(r, this.endPoint + 5), t.stroke(), t.closePath(), t.save(), t.translate(i, o ? this.endPoint + 12 : this.endPoint + 8), t.rotate(-1 * v(this.xLabelRotation)), t.font = this.font, t.textAlign = o ? "right" : "center", t.textBaseline = o ? "middle" : "top", t.fillText(e, 0, 0), t.restore()
        }, this))
      }
    }), n.RadialScale = n.Element.extend({
      initialize: function() {
        this.size = g([this.height, this.width]), this.drawingArea = this.display ? this.size / 2 - (this.fontSize / 2 + this.backdropPaddingY) : this.size / 2
      },
      calculateCenterOffset: function(t) {
        var e = this.drawingArea / (this.max - this.min);
        return (t - this.min) * e
      },
      update: function() {
        this.lineArc ? this.drawingArea = this.display ? this.size / 2 - (this.fontSize / 2 + this.backdropPaddingY) : this.size / 2 : this.setScaleSize(), this.buildYLabels()
      },
      buildYLabels: function() {
        this.yLabels = [];
        for (var t = $(this.stepValue), e = 0; e <= this.steps; e++) this.yLabels.push(w(this.templateString, {
          value: (this.min + e * this.stepValue).toFixed(t)
        }))
      },
      getCircumference: function() {
        return 2 * Math.PI / this.valuesCount
      },
      setScaleSize: function() {
        var t, e, n, i, r, o, s, a, u, l, c, h, f = g([this.height / 2 - this.pointLabelFontSize - 5, this.width / 2]),
          p = this.width,
          m = 0;
        for (this.ctx.font = O(this.pointLabelFontSize, this.pointLabelFontStyle, this.pointLabelFontFamily), e = 0; e < this.valuesCount; e++) t = this.getPointPosition(e, f), n = this.ctx.measureText(w(this.templateString, {
          value: this.labels[e]
        })).width + 5, 0 === e || e === this.valuesCount / 2 ? (i = n / 2, t.x + i > p && (p = t.x + i, r = e), t.x - i < m && (m = t.x - i, s = e)) : e < this.valuesCount / 2 ? t.x + n > p && (p = t.x + n, r = e) : e > this.valuesCount / 2 && t.x - n < m && (m = t.x - n, s = e);
        u = m, l = Math.ceil(p - this.width), o = this.getIndexAngle(r), a = this.getIndexAngle(s), c = l / Math.sin(o + Math.PI / 2), h = u / Math.sin(a + Math.PI / 2), c = d(c) ? c : 0, h = d(h) ? h : 0, this.drawingArea = f - (h + c) / 2, this.setCenterPoint(h, c)
      },
      setCenterPoint: function(t, e) {
        var n = this.width - e - this.drawingArea,
          i = t + this.drawingArea;
        this.xCenter = (i + n) / 2, this.yCenter = this.height / 2
      },
      getIndexAngle: function(t) {
        var e = 2 * Math.PI / this.valuesCount;
        return t * e - Math.PI / 2
      },
      getPointPosition: function(t, e) {
        var n = this.getIndexAngle(t);
        return {
          x: Math.cos(n) * e + this.xCenter,
          y: Math.sin(n) * e + this.yCenter
        }
      },
      draw: function() {
        if (this.display) {
          var t = this.ctx;
          if (r(this.yLabels, function(e, n) {
              if (n > 0) {
                var i, r = n * (this.drawingArea / this.steps),
                  o = this.yCenter - r;
                if (this.lineWidth > 0)
                  if (t.strokeStyle = this.lineColor, t.lineWidth = this.lineWidth, this.lineArc) t.beginPath(), t.arc(this.xCenter, this.yCenter, r, 0, 2 * Math.PI), t.closePath(), t.stroke();
                  else {
                    t.beginPath();
                    for (var s = 0; s < this.valuesCount; s++) i = this.getPointPosition(s, this.calculateCenterOffset(this.min + n * this.stepValue)), 0 === s ? t.moveTo(i.x, i.y) : t.lineTo(i.x, i.y);
                    t.closePath(), t.stroke()
                  }
                if (this.showLabels) {
                  if (t.font = O(this.fontSize, this.fontStyle, this.fontFamily), this.showLabelBackdrop) {
                    var a = t.measureText(e).width;
                    t.fillStyle = this.backdropColor, t.fillRect(this.xCenter - a / 2 - this.backdropPaddingX, o - this.fontSize / 2 - this.backdropPaddingY, a + 2 * this.backdropPaddingX, this.fontSize + 2 * this.backdropPaddingY)
                  }
                  t.textAlign = "center", t.textBaseline = "middle", t.fillStyle = this.fontColor, t.fillText(e, this.xCenter, o)
                }
              }
            }, this), !this.lineArc) {
            t.lineWidth = this.angleLineWidth, t.strokeStyle = this.angleLineColor;
            for (var e = this.valuesCount - 1; e >= 0; e--) {
              if (this.angleLineWidth > 0) {
                var n = this.getPointPosition(e, this.calculateCenterOffset(this.max));
                t.beginPath(), t.moveTo(this.xCenter, this.yCenter), t.lineTo(n.x, n.y), t.stroke(), t.closePath()
              }
              var i = this.getPointPosition(e, this.calculateCenterOffset(this.max) + 5);
              t.font = O(this.pointLabelFontSize, this.pointLabelFontStyle, this.pointLabelFontFamily), t.fillStyle = this.pointLabelFontColor;
              var o = this.labels.length,
                s = this.labels.length / 2,
                a = s / 2,
                u = a > e || e > o - a,
                l = e === a || e === o - a;
              t.textAlign = 0 === e ? "center" : e === s ? "center" : s > e ? "left" : "right", t.textBaseline = l ? "middle" : u ? "bottom" : "top", t.fillText(this.labels[e], i.x, i.y)
            }
          }
        }
      }
    }), i.addEvent(window, "resize", function() {
      var t;
      return function() {
        clearTimeout(t), t = setTimeout(function() {
          r(n.instances, function(t) {
            t.options.responsive && t.resize(t.render, !0)
          })
        }, 50)
      }
    }()), p ? define(function() {
      return n
    }) : "object" == typeof module && module.exports && (module.exports = n), t.Chart = n, n.noConflict = function() {
      return t.Chart = e, n
    }
  }.call(this),
  function() {
    "use strict";
    var t = this,
      e = t.Chart,
      n = e.helpers,
      i = {
        scaleBeginAtZero: !0,
        scaleShowGridLines: !0,
        scaleGridLineColor: "rgba(0,0,0,.05)",
        scaleGridLineWidth: 1,
        barShowStroke: !0,
        barStrokeWidth: 2,
        barValueSpacing: 5,
        barDatasetSpacing: 1,
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>'
      };
    e.Type.extend({
      name: "Bar",
      defaults: i,
      initialize: function(t) {
        var i = this.options;
        this.ScaleClass = e.Scale.extend({
          offsetGridLines: !0,
          calculateBarX: function(t, e, n) {
            var r = this.calculateBaseWidth(),
              o = this.calculateX(n) - r / 2,
              s = this.calculateBarWidth(t);
            return o + s * e + e * i.barDatasetSpacing + s / 2
          },
          calculateBaseWidth: function() {
            return this.calculateX(1) - this.calculateX(0) - 2 * i.barValueSpacing
          },
          calculateBarWidth: function(t) {
            var e = this.calculateBaseWidth() - (t - 1) * i.barDatasetSpacing;
            return e / t
          }
        }), this.datasets = [], this.options.showTooltips && n.bindEvents(this, this.options.tooltipEvents, function(t) {
          var e = "mouseout" !== t.type ? this.getBarsAtEvent(t) : [];
          this.eachBars(function(t) {
            t.restore(["fillColor", "strokeColor"])
          }), n.each(e, function(t) {
            t.fillColor = t.highlightFill, t.strokeColor = t.highlightStroke
          }), this.showTooltip(e)
        }), this.BarClass = e.Rectangle.extend({
          strokeWidth: this.options.barStrokeWidth,
          showStroke: this.options.barShowStroke,
          ctx: this.chart.ctx
        }), n.each(t.datasets, function(e) {
          var i = {
            label: e.label || null,
            fillColor: e.fillColor,
            strokeColor: e.strokeColor,
            bars: []
          };
          this.datasets.push(i), n.each(e.data, function(r, o) {
            n.isNumber(r) && i.bars.push(new this.BarClass({
              value: r,
              label: t.labels[o],
              datasetLabel: e.label,
              strokeColor: e.strokeColor,
              fillColor: e.fillColor,
              highlightFill: e.highlightFill || e.fillColor,
              highlightStroke: e.highlightStroke || e.strokeColor
            }))
          }, this)
        }, this), this.buildScale(t.labels), this.BarClass.prototype.base = this.scale.endPoint, this.eachBars(function(t, e, i) {
          n.extend(t, {
            width: this.scale.calculateBarWidth(this.datasets.length),
            x: this.scale.calculateBarX(this.datasets.length, i, e),
            y: this.scale.endPoint
          }), t.save()
        }, this), this.render()
      },
      update: function() {
        this.scale.update(), n.each(this.activeElements, function(t) {
          t.restore(["fillColor", "strokeColor"])
        }), this.eachBars(function(t) {
          t.save()
        }), this.render()
      },
      eachBars: function(t) {
        n.each(this.datasets, function(e, i) {
          n.each(e.bars, t, this, i)
        }, this)
      },
      getBarsAtEvent: function(t) {
        for (var e, i = [], r = n.getRelativePosition(t), o = function(t) {
            i.push(t.bars[e])
          }, s = 0; s < this.datasets.length; s++)
          for (e = 0; e < this.datasets[s].bars.length; e++)
            if (this.datasets[s].bars[e].inRange(r.x, r.y)) return n.each(this.datasets, o), i;
        return i
      },
      buildScale: function(t) {
        var e = this,
          i = function() {
            var t = [];
            return e.eachBars(function(e) {
              t.push(e.value)
            }), t
          },
          r = {
            templateString: this.options.scaleLabel,
            height: this.chart.height,
            width: this.chart.width,
            ctx: this.chart.ctx,
            textColor: this.options.scaleFontColor,
            fontSize: this.options.scaleFontSize,
            fontStyle: this.options.scaleFontStyle,
            fontFamily: this.options.scaleFontFamily,
            valuesCount: t.length,
            beginAtZero: this.options.scaleBeginAtZero,
            integersOnly: this.options.scaleIntegersOnly,
            calculateYRange: function(t) {
              var e = n.calculateScaleRange(i(), t, this.fontSize, this.beginAtZero, this.integersOnly);
              n.extend(this, e)
            },
            xLabels: t,
            font: n.fontString(this.options.scaleFontSize, this.options.scaleFontStyle, this.options.scaleFontFamily),
            lineWidth: this.options.scaleLineWidth,
            lineColor: this.options.scaleLineColor,
            gridLineWidth: this.options.scaleShowGridLines ? this.options.scaleGridLineWidth : 0,
            gridLineColor: this.options.scaleShowGridLines ? this.options.scaleGridLineColor : "rgba(0,0,0,0)",
            padding: this.options.showScale ? 0 : this.options.barShowStroke ? this.options.barStrokeWidth : 0,
            showLabels: this.options.scaleShowLabels,
            display: this.options.showScale
          };
        this.options.scaleOverride && n.extend(r, {
          calculateYRange: n.noop,
          steps: this.options.scaleSteps,
          stepValue: this.options.scaleStepWidth,
          min: this.options.scaleStartValue,
          max: this.options.scaleStartValue + this.options.scaleSteps * this.options.scaleStepWidth
        }), this.scale = new this.ScaleClass(r)
      },
      addData: function(t, e) {
        n.each(t, function(t, i) {
          n.isNumber(t) && this.datasets[i].bars.push(new this.BarClass({
            value: t,
            label: e,
            x: this.scale.calculateBarX(this.datasets.length, i, this.scale.valuesCount + 1),
            y: this.scale.endPoint,
            width: this.scale.calculateBarWidth(this.datasets.length),
            base: this.scale.endPoint,
            strokeColor: this.datasets[i].strokeColor,
            fillColor: this.datasets[i].fillColor
          }))
        }, this), this.scale.addXLabel(e), this.update()
      },
      removeData: function() {
        this.scale.removeXLabel(), n.each(this.datasets, function(t) {
          t.bars.shift()
        }, this), this.update()
      },
      reflow: function() {
        n.extend(this.BarClass.prototype, {
          y: this.scale.endPoint,
          base: this.scale.endPoint
        });
        var t = n.extend({
          height: this.chart.height,
          width: this.chart.width
        });
        this.scale.update(t)
      },
      draw: function(t) {
        var e = t || 1;
        this.clear(), this.chart.ctx, this.scale.draw(e), n.each(this.datasets, function(t, i) {
          n.each(t.bars, function(t, n) {
            t.base = this.scale.endPoint, t.transition({
              x: this.scale.calculateBarX(this.datasets.length, i, n),
              y: this.scale.calculateY(t.value),
              width: this.scale.calculateBarWidth(this.datasets.length)
            }, e).draw()
          }, this)
        }, this)
      }
    })
  }.call(this),
  function() {
    "use strict";
    var t = this,
      e = t.Chart,
      n = e.helpers,
      i = {
        segmentShowStroke: !0,
        segmentStrokeColor: "#fff",
        segmentStrokeWidth: 2,
        percentageInnerCutout: 50,
        animationSteps: 100,
        animationEasing: "easeOutBounce",
        animateRotate: !0,
        animateScale: !1,
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
      };
    e.Type.extend({
      name: "Doughnut",
      defaults: i,
      initialize: function(t) {
        this.segments = [], this.outerRadius = (n.min([this.chart.width, this.chart.height]) - this.options.segmentStrokeWidth / 2) / 2, this.SegmentArc = e.Arc.extend({
          ctx: this.chart.ctx,
          x: this.chart.width / 2,
          y: this.chart.height / 2
        }), this.options.showTooltips && n.bindEvents(this, this.options.tooltipEvents, function(t) {
          var e = "mouseout" !== t.type ? this.getSegmentsAtEvent(t) : [];
          n.each(this.segments, function(t) {
            t.restore(["fillColor"])
          }), n.each(e, function(t) {
            t.fillColor = t.highlightColor
          }), this.showTooltip(e)
        }), this.calculateTotal(t), n.each(t, function(t, e) {
          this.addData(t, e, !0)
        }, this), this.render()
      },
      getSegmentsAtEvent: function(t) {
        var e = [],
          i = n.getRelativePosition(t);
        return n.each(this.segments, function(t) {
          t.inRange(i.x, i.y) && e.push(t)
        }, this), e
      },
      addData: function(t, e, n) {
        var i = e || this.segments.length;
        this.segments.splice(i, 0, new this.SegmentArc({
          value: t.value,
          outerRadius: this.options.animateScale ? 0 : this.outerRadius,
          innerRadius: this.options.animateScale ? 0 : this.outerRadius / 100 * this.options.percentageInnerCutout,
          fillColor: t.color,
          highlightColor: t.highlight || t.color,
          showStroke: this.options.segmentShowStroke,
          strokeWidth: this.options.segmentStrokeWidth,
          strokeColor: this.options.segmentStrokeColor,
          startAngle: 1.5 * Math.PI,
          circumference: this.options.animateRotate ? 0 : this.calculateCircumference(t.value),
          label: t.label
        })), n || (this.reflow(), this.update())
      },
      calculateCircumference: function(t) {
        return 2 * Math.PI * (t / this.total)
      },
      calculateTotal: function(t) {
        this.total = 0, n.each(t, function(t) {
          this.total += t.value
        }, this)
      },
      update: function() {
        this.calculateTotal(this.segments), n.each(this.activeElements, function(t) {
          t.restore(["fillColor"])
        }), n.each(this.segments, function(t) {
          t.save()
        }), this.render()
      },
      removeData: function(t) {
        var e = n.isNumber(t) ? t : this.segments.length - 1;
        this.segments.splice(e, 1), this.reflow(), this.update()
      },
      reflow: function() {
        n.extend(this.SegmentArc.prototype, {
          x: this.chart.width / 2,
          y: this.chart.height / 2
        }), this.outerRadius = (n.min([this.chart.width, this.chart.height]) - this.options.segmentStrokeWidth / 2) / 2, n.each(this.segments, function(t) {
          t.update({
            outerRadius: this.outerRadius,
            innerRadius: this.outerRadius / 100 * this.options.percentageInnerCutout
          })
        }, this)
      },
      draw: function(t) {
        var e = t ? t : 1;
        this.clear(), n.each(this.segments, function(t, n) {
          t.transition({
            circumference: this.calculateCircumference(t.value),
            outerRadius: this.outerRadius,
            innerRadius: this.outerRadius / 100 * this.options.percentageInnerCutout
          }, e), t.endAngle = t.startAngle + t.circumference, t.draw(), 0 === n && (t.startAngle = 1.5 * Math.PI), n < this.segments.length - 1 && (this.segments[n + 1].startAngle = t.endAngle)
        }, this)
      }
    }), e.types.Doughnut.extend({
      name: "Pie",
      defaults: n.merge(i, {
        percentageInnerCutout: 0
      })
    })
  }.call(this),
  function() {
    "use strict";
    var t = this,
      e = t.Chart,
      n = e.helpers,
      i = {
        scaleShowGridLines: !0,
        scaleGridLineColor: "rgba(0,0,0,.05)",
        scaleGridLineWidth: 1,
        bezierCurve: !0,
        bezierCurveTension: .4,
        pointDot: !0,
        pointDotRadius: 4,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: !0,
        datasetStrokeWidth: 2,
        datasetFill: !0,
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].strokeColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>'
      };
    e.Type.extend({
      name: "Line",
      defaults: i,
      initialize: function(t) {
        this.PointClass = e.Point.extend({
          strokeWidth: this.options.pointDotStrokeWidth,
          radius: this.options.pointDotRadius,
          display: this.options.pointDot,
          hitDetectionRadius: this.options.pointHitDetectionRadius,
          ctx: this.chart.ctx,
          inRange: function(t) {
            return Math.pow(t - this.x, 2) < Math.pow(this.radius + this.hitDetectionRadius, 2)
          }
        }), this.datasets = [], this.options.showTooltips && n.bindEvents(this, this.options.tooltipEvents, function(t) {
          var e = "mouseout" !== t.type ? this.getPointsAtEvent(t) : [];
          this.eachPoints(function(t) {
            t.restore(["fillColor", "strokeColor"])
          }), n.each(e, function(t) {
            t.fillColor = t.highlightFill, t.strokeColor = t.highlightStroke
          }), this.showTooltip(e)
        }), n.each(t.datasets, function(e) {
          var i = {
            label: e.label || null,
            fillColor: e.fillColor,
            strokeColor: e.strokeColor,
            pointColor: e.pointColor,
            pointStrokeColor: e.pointStrokeColor,
            points: []
          };
          this.datasets.push(i), n.each(e.data, function(r, o) {
            n.isNumber(r) && i.points.push(new this.PointClass({
              value: r,
              label: t.labels[o],
              datasetLabel: e.label,
              strokeColor: e.pointStrokeColor,
              fillColor: e.pointColor,
              highlightFill: e.pointHighlightFill || e.pointColor,
              highlightStroke: e.pointHighlightStroke || e.pointStrokeColor
            }))
          }, this), this.buildScale(t.labels), this.eachPoints(function(t, e) {
            n.extend(t, {
              x: this.scale.calculateX(e),
              y: this.scale.endPoint
            }), t.save()
          }, this)
        }, this), this.render()
      },
      update: function() {
        this.scale.update(), n.each(this.activeElements, function(t) {
          t.restore(["fillColor", "strokeColor"])
        }), this.eachPoints(function(t) {
          t.save()
        }), this.render()
      },
      eachPoints: function(t) {
        n.each(this.datasets, function(e) {
          n.each(e.points, t, this)
        }, this)
      },
      getPointsAtEvent: function(t) {
        var e = [],
          i = n.getRelativePosition(t);
        return n.each(this.datasets, function(t) {
          n.each(t.points, function(t) {
            t.inRange(i.x, i.y) && e.push(t)
          })
        }, this), e
      },
      buildScale: function(t) {
        var i = this,
          r = function() {
            var t = [];
            return i.eachPoints(function(e) {
              t.push(e.value)
            }), t
          },
          o = {
            templateString: this.options.scaleLabel,
            height: this.chart.height,
            width: this.chart.width,
            ctx: this.chart.ctx,
            textColor: this.options.scaleFontColor,
            fontSize: this.options.scaleFontSize,
            fontStyle: this.options.scaleFontStyle,
            fontFamily: this.options.scaleFontFamily,
            valuesCount: t.length,
            beginAtZero: this.options.scaleBeginAtZero,
            integersOnly: this.options.scaleIntegersOnly,
            calculateYRange: function(t) {
              var e = n.calculateScaleRange(r(), t, this.fontSize, this.beginAtZero, this.integersOnly);
              n.extend(this, e)
            },
            xLabels: t,
            font: n.fontString(this.options.scaleFontSize, this.options.scaleFontStyle, this.options.scaleFontFamily),
            lineWidth: this.options.scaleLineWidth,
            lineColor: this.options.scaleLineColor,
            gridLineWidth: this.options.scaleShowGridLines ? this.options.scaleGridLineWidth : 0,
            gridLineColor: this.options.scaleShowGridLines ? this.options.scaleGridLineColor : "rgba(0,0,0,0)",
            padding: this.options.showScale ? 0 : this.options.pointDotRadius + this.options.pointDotStrokeWidth,
            showLabels: this.options.scaleShowLabels,
            display: this.options.showScale
          };
        this.options.scaleOverride && n.extend(o, {
          calculateYRange: n.noop,
          steps: this.options.scaleSteps,
          stepValue: this.options.scaleStepWidth,
          min: this.options.scaleStartValue,
          max: this.options.scaleStartValue + this.options.scaleSteps * this.options.scaleStepWidth
        }), this.scale = new e.Scale(o)
      },
      addData: function(t, e) {
        n.each(t, function(t, i) {
          n.isNumber(t) && this.datasets[i].points.push(new this.PointClass({
            value: t,
            label: e,
            x: this.scale.calculateX(this.scale.valuesCount + 1),
            y: this.scale.endPoint,
            strokeColor: this.datasets[i].pointStrokeColor,
            fillColor: this.datasets[i].pointColor
          }))
        }, this), this.scale.addXLabel(e), this.update()
      },
      removeData: function() {
        this.scale.removeXLabel(), n.each(this.datasets, function(t) {
          t.points.shift()
        }, this), this.update()
      },
      reflow: function() {
        var t = n.extend({
          height: this.chart.height,
          width: this.chart.width
        });
        this.scale.update(t)
      },
      draw: function(t) {
        var e = t || 1;
        this.clear();
        var i = this.chart.ctx;
        this.scale.draw(e), n.each(this.datasets, function(t) {
          n.each(t.points, function(t, n) {
            t.transition({
              y: this.scale.calculateY(t.value),
              x: this.scale.calculateX(n)
            }, e)
          }, this), this.options.bezierCurve && n.each(t.points, function(e, i) {
            e.controlPoints = 0 === i ? n.splineCurve(e, e, t.points[i + 1], 0) : i >= t.points.length - 1 ? n.splineCurve(t.points[i - 1], e, e, 0) : n.splineCurve(t.points[i - 1], e, t.points[i + 1], this.options.bezierCurveTension)
          }, this), i.lineWidth = this.options.datasetStrokeWidth, i.strokeStyle = t.strokeColor, i.beginPath(), n.each(t.points, function(e, n) {
            n > 0 ? this.options.bezierCurve ? i.bezierCurveTo(t.points[n - 1].controlPoints.outer.x, t.points[n - 1].controlPoints.outer.y, e.controlPoints.inner.x, e.controlPoints.inner.y, e.x, e.y) : i.lineTo(e.x, e.y) : i.moveTo(e.x, e.y)
          }, this), i.stroke(), this.options.datasetFill && (i.lineTo(t.points[t.points.length - 1].x, this.scale.endPoint), i.lineTo(this.scale.calculateX(0), this.scale.endPoint), i.fillStyle = t.fillColor, i.closePath(), i.fill()), n.each(t.points, function(t) {
            t.draw()
          })
        }, this)
      }
    })
  }.call(this),
  function() {
    "use strict";
    var t = this,
      e = t.Chart,
      n = e.helpers,
      i = {
        scaleShowLabelBackdrop: !0,
        scaleBackdropColor: "rgba(255,255,255,0.75)",
        scaleBeginAtZero: !0,
        scaleBackdropPaddingY: 2,
        scaleBackdropPaddingX: 2,
        scaleShowLine: !0,
        segmentShowStroke: !0,
        segmentStrokeColor: "#fff",
        segmentStrokeWidth: 2,
        animationSteps: 100,
        animationEasing: "easeOutBounce",
        animateRotate: !0,
        animateScale: !1,
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
      };
    e.Type.extend({
      name: "PolarArea",
      defaults: i,
      initialize: function(t) {
        this.segments = [], this.SegmentArc = e.Arc.extend({
          showStroke: this.options.segmentShowStroke,
          strokeWidth: this.options.segmentStrokeWidth,
          strokeColor: this.options.segmentStrokeColor,
          ctx: this.chart.ctx,
          innerRadius: 0,
          x: this.chart.width / 2,
          y: this.chart.height / 2
        }), this.scale = new e.RadialScale({
          display: this.options.showScale,
          fontStyle: this.options.scaleFontStyle,
          fontSize: this.options.scaleFontSize,
          fontFamily: this.options.scaleFontFamily,
          fontColor: this.options.scaleFontColor,
          showLabels: this.options.scaleShowLabels,
          showLabelBackdrop: this.options.scaleShowLabelBackdrop,
          backdropColor: this.options.scaleBackdropColor,
          backdropPaddingY: this.options.scaleBackdropPaddingY,
          backdropPaddingX: this.options.scaleBackdropPaddingX,
          lineWidth: this.options.scaleShowLine ? this.options.scaleLineWidth : 0,
          lineColor: this.options.scaleLineColor,
          lineArc: !0,
          width: this.chart.width,
          height: this.chart.height,
          xCenter: this.chart.width / 2,
          yCenter: this.chart.height / 2,
          ctx: this.chart.ctx,
          templateString: this.options.scaleLabel,
          valuesCount: t.length
        }), this.updateScaleRange(t), this.scale.update(), n.each(t, function(t, e) {
          this.addData(t, e, !0)
        }, this), this.options.showTooltips && n.bindEvents(this, this.options.tooltipEvents, function(t) {
          var e = "mouseout" !== t.type ? this.getSegmentsAtEvent(t) : [];
          n.each(this.segments, function(t) {
            t.restore(["fillColor"])
          }), n.each(e, function(t) {
            t.fillColor = t.highlightColor
          }), this.showTooltip(e)
        }), this.render()
      },
      getSegmentsAtEvent: function(t) {
        var e = [],
          i = n.getRelativePosition(t);
        return n.each(this.segments, function(t) {
          t.inRange(i.x, i.y) && e.push(t)
        }, this), e
      },
      addData: function(t, e, n) {
        var i = e || this.segments.length;
        this.segments.splice(i, 0, new this.SegmentArc({
          fillColor: t.color,
          highlightColor: t.highlight || t.color,
          label: t.label,
          value: t.value,
          outerRadius: this.options.animateScale ? 0 : this.scale.calculateCenterOffset(t.value),
          circumference: this.options.animateRotate ? 0 : this.scale.getCircumference(),
          startAngle: 1.5 * Math.PI
        })), n || (this.reflow(), this.update())
      },
      removeData: function(t) {
        var e = n.isNumber(t) ? t : this.segments.length - 1;
        this.segments.splice(e, 1), this.reflow(), this.update()
      },
      calculateTotal: function(t) {
        this.total = 0, n.each(t, function(t) {
          this.total += t.value
        }, this), this.scale.valuesCount = this.segments.length
      },
      updateScaleRange: function(t) {
        var e = [];
        n.each(t, function(t) {
          e.push(t.value)
        });
        var i = this.options.scaleOverride ? {
          steps: this.options.scaleSteps,
          stepValue: this.options.scaleStepWidth,
          min: this.options.scaleStartValue,
          max: this.options.scaleStartValue + this.options.scaleSteps * this.options.scaleStepWidth
        } : n.calculateScaleRange(e, n.min([this.chart.width, this.chart.height]) / 2, this.options.scaleFontSize, this.options.scaleBeginAtZero, this.options.scaleIntegersOnly);
        n.extend(this.scale, i, {
          size: n.min([this.chart.width, this.chart.height]),
          xCenter: this.chart.width / 2,
          yCenter: this.chart.height / 2
        })
      },
      update: function() {
        this.calculateTotal(this.segments), n.each(this.segments, function(t) {
          t.save()
        }), this.render()
      },
      reflow: function() {
        n.extend(this.SegmentArc.prototype, {
          x: this.chart.width / 2,
          y: this.chart.height / 2
        }), this.updateScaleRange(this.segments), this.scale.update(), n.extend(this.scale, {
          xCenter: this.chart.width / 2,
          yCenter: this.chart.height / 2
        }), n.each(this.segments, function(t) {
          t.update({
            outerRadius: this.scale.calculateCenterOffset(t.value)
          })
        }, this)
      },
      draw: function(t) {
        var e = t || 1;
        this.clear(), n.each(this.segments, function(t, n) {
          t.transition({
            circumference: this.scale.getCircumference(),
            outerRadius: this.scale.calculateCenterOffset(t.value)
          }, e), t.endAngle = t.startAngle + t.circumference, 0 === n && (t.startAngle = 1.5 * Math.PI), n < this.segments.length - 1 && (this.segments[n + 1].startAngle = t.endAngle), t.draw()
        }, this), this.scale.draw()
      }
    })
  }.call(this),
  function() {
    "use strict";
    var t = this,
      e = t.Chart,
      n = e.helpers;
    e.Type.extend({
      name: "Radar",
      defaults: {
        scaleShowLine: !0,
        angleShowLineOut: !0,
        scaleShowLabels: !1,
        scaleBeginAtZero: !0,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: !0,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: !0,
        datasetStrokeWidth: 2,
        datasetFill: !0,
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].strokeColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>'
      },
      initialize: function(t) {
        this.PointClass = e.Point.extend({
          strokeWidth: this.options.pointDotStrokeWidth,
          radius: this.options.pointDotRadius,
          display: this.options.pointDot,
          hitDetectionRadius: this.options.pointHitDetectionRadius,
          ctx: this.chart.ctx
        }), this.datasets = [], this.buildScale(t), this.options.showTooltips && n.bindEvents(this, this.options.tooltipEvents, function(t) {
          var e = "mouseout" !== t.type ? this.getPointsAtEvent(t) : [];
          this.eachPoints(function(t) {
            t.restore(["fillColor", "strokeColor"])
          }), n.each(e, function(t) {
            t.fillColor = t.highlightFill, t.strokeColor = t.highlightStroke
          }), this.showTooltip(e)
        }), n.each(t.datasets, function(e) {
          var i = {
            label: e.label || null,
            fillColor: e.fillColor,
            strokeColor: e.strokeColor,
            pointColor: e.pointColor,
            pointStrokeColor: e.pointStrokeColor,
            points: []
          };
          this.datasets.push(i), n.each(e.data, function(r, o) {
            if (n.isNumber(r)) {
              var s;
              this.scale.animation || (s = this.scale.getPointPosition(o, this.scale.calculateCenterOffset(r))), i.points.push(new this.PointClass({
                value: r,
                label: t.labels[o],
                datasetLabel: e.label,
                x: this.options.animation ? this.scale.xCenter : s.x,
                y: this.options.animation ? this.scale.yCenter : s.y,
                strokeColor: e.pointStrokeColor,
                fillColor: e.pointColor,
                highlightFill: e.pointHighlightFill || e.pointColor,
                highlightStroke: e.pointHighlightStroke || e.pointStrokeColor
              }))
            }
          }, this)
        }, this), this.render()
      },
      eachPoints: function(t) {
        n.each(this.datasets, function(e) {
          n.each(e.points, t, this)
        }, this)
      },
      getPointsAtEvent: function(t) {
        var e = n.getRelativePosition(t),
          i = n.getAngleFromPoint({
            x: this.scale.xCenter,
            y: this.scale.yCenter
          }, e),
          r = 2 * Math.PI / this.scale.valuesCount,
          o = Math.round((i.angle - 1.5 * Math.PI) / r),
          s = [];
        return (o >= this.scale.valuesCount || 0 > o) && (o = 0), i.distance <= this.scale.drawingArea && n.each(this.datasets, function(t) {
          s.push(t.points[o])
        }), s
      },
      buildScale: function(t) {
        this.scale = new e.RadialScale({
          display: this.options.showScale,
          fontStyle: this.options.scaleFontStyle,
          fontSize: this.options.scaleFontSize,
          fontFamily: this.options.scaleFontFamily,
          fontColor: this.options.scaleFontColor,
          showLabels: this.options.scaleShowLabels,
          showLabelBackdrop: this.options.scaleShowLabelBackdrop,
          backdropColor: this.options.scaleBackdropColor,
          backdropPaddingY: this.options.scaleBackdropPaddingY,
          backdropPaddingX: this.options.scaleBackdropPaddingX,
          lineWidth: this.options.scaleShowLine ? this.options.scaleLineWidth : 0,
          lineColor: this.options.scaleLineColor,
          angleLineColor: this.options.angleLineColor,
          angleLineWidth: this.options.angleShowLineOut ? this.options.angleLineWidth : 0,
          pointLabelFontColor: this.options.pointLabelFontColor,
          pointLabelFontSize: this.options.pointLabelFontSize,
          pointLabelFontFamily: this.options.pointLabelFontFamily,
          pointLabelFontStyle: this.options.pointLabelFontStyle,
          height: this.chart.height,
          width: this.chart.width,
          xCenter: this.chart.width / 2,
          yCenter: this.chart.height / 2,
          ctx: this.chart.ctx,
          templateString: this.options.scaleLabel,
          labels: t.labels,
          valuesCount: t.datasets[0].data.length
        }), this.scale.setScaleSize(), this.updateScaleRange(t.datasets), this.scale.buildYLabels()
      },
      updateScaleRange: function(t) {
        var e = function() {
            var e = [];
            return n.each(t, function(t) {
              t.data ? e = e.concat(t.data) : n.each(t.points, function(t) {
                e.push(t.value)
              })
            }), e
          }(),
          i = this.options.scaleOverride ? {
            steps: this.options.scaleSteps,
            stepValue: this.options.scaleStepWidth,
            min: this.options.scaleStartValue,
            max: this.options.scaleStartValue + this.options.scaleSteps * this.options.scaleStepWidth
          } : n.calculateScaleRange(e, n.min([this.chart.width, this.chart.height]) / 2, this.options.scaleFontSize, this.options.scaleBeginAtZero, this.options.scaleIntegersOnly);
        n.extend(this.scale, i)
      },
      addData: function(t, e) {
        this.scale.valuesCount++, n.each(t, function(t, i) {
          if (n.isNumber(t)) {
            var r = this.scale.getPointPosition(this.scale.valuesCount, this.scale.calculateCenterOffset(t));
            this.datasets[i].points.push(new this.PointClass({
              value: t,
              label: e,
              x: r.x,
              y: r.y,
              strokeColor: this.datasets[i].pointStrokeColor,
              fillColor: this.datasets[i].pointColor
            }))
          }
        }, this), this.scale.labels.push(e), this.reflow(), this.update()
      },
      removeData: function() {
        this.scale.valuesCount--, this.scale.labels.shift(), n.each(this.datasets, function(t) {
          t.points.shift()
        }, this), this.reflow(), this.update()
      },
      update: function() {
        this.eachPoints(function(t) {
          t.save()
        }), this.reflow(), this.render()
      },
      reflow: function() {
        n.extend(this.scale, {
          width: this.chart.width,
          height: this.chart.height,
          size: n.min([this.chart.width, this.chart.height]),
          xCenter: this.chart.width / 2,
          yCenter: this.chart.height / 2
        }), this.updateScaleRange(this.datasets), this.scale.setScaleSize(), this.scale.buildYLabels()
      },
      draw: function(t) {
        var e = t || 1,
          i = this.chart.ctx;
        this.clear(), this.scale.draw(), n.each(this.datasets, function(t) {
          n.each(t.points, function(t, n) {
            t.transition(this.scale.getPointPosition(n, this.scale.calculateCenterOffset(t.value)), e)
          }, this), i.lineWidth = this.options.datasetStrokeWidth, i.strokeStyle = t.strokeColor, i.beginPath(), n.each(t.points, function(t, e) {
            0 === e ? i.moveTo(t.x, t.y) : i.lineTo(t.x, t.y)
          }, this), i.closePath(), i.stroke(), i.fillStyle = t.fillColor, i.fill(), n.each(t.points, function(t) {
            t.draw()
          })
        }, this)
      }
    })
  }.call(this),
  function() {
    angular.element(document).ready(function() {
      return "placeholder" in document.createElement("input") ? void 0 : document.documentElement.className += " no-placeholder"
    }), Array.prototype.map || (Array.prototype.map = function(t, e) {
      var n, i, r;
      if (null == this) throw new TypeError(" this is null or not defined");
      var o = Object(this),
        s = o.length >>> 0;
      if ("function" != typeof t) throw new TypeError(t + " is not a function");
      for (arguments.length > 1 && (n = e), i = new Array(s), r = 0; s > r;) {
        var a, u;
        r in o && (a = o[r], u = t.call(n, a, r, o), i[r] = u), r++
      }
      return i
    }), angular.module("hb", ["ng", "ngAnimate", "hb.site", "hb.reactionTime", "hb.memory", "hb.verbal-memory", "hb.number-memory", "hb.charting"]), angular.module("hb.site", []).config(["$httpProvider", function(t) {
      return t.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest"
    }]).controller("MainCtrl", ["$scope", function(t) {
      return t.sidebar = {
        toggle: function() {
          this.active = !this.active
        }
      }
    }]).directive("hbFocus", ["$timeout", function(t) {
      return {
        link: function(e, n, i) {
          return t(function() {
            n[0].focus()
          })
        }
      }
    }]).directive("hbRefocusable", function() {
      return {
        link: function(t, e, n) {
          return t.$on("releasedFocus", function() {
            e[0].focus()
          })
        }
      }
    }).directive("hbFade", ["$timeout", function(t) {
      return {
        restrict: "EAC",
        link: function(e, n, i) {
          return n.css({
            opacity: 0,
            transition: "0.5s linear",
            "webkit-transition": "0.5s linear"
          }), t(function() {
            return n.css({
              opacity: 1
            })
          }, i.hbFade)
        }
      }
    }])
  }.call(this),
  function() {
    angular.module("hb.reactionTime", []).factory("ReactionTrial", ["$timeout", function(t) {
      var e;
      return e = function() {
        function e(e) {
          this.test = e, this.startedWaitingTime = new Date, this.phase = "waiting", this.timeWaited = ~~(2500 + 2500 * Math.random()), t.cancel(this.delayPromise), this.delayPromise = t(function(t) {
            return function() {
              return t.enterGoPhase()
            }
          }(this), this.timeWaited)
        }
        return e.prototype.enterGoPhase = function() {
          return this.phase = "go", this.turnedGreenTime = new Date
        }, e.prototype.reactionClick = function() {
          return t.cancel(this.delayPromise), this.turnedGreenTime ? (this.phase = "result", this.clickedTime = new Date, this.result = this.clickedTime - this.turnedGreenTime) : this.phase = "scold"
        }, e.prototype.serialize = function() {
          return {
            result: this.result,
            timeWaited: this.timeWaited
          }
        }, e
      }()
    }]).factory("ReactionTimeTest", ["ReactionTrial", "$http", function(t, e) {
      var n;
      return n = function() {
        function n() {
          this.trials = [], this.config = {
            min_tries: 5
          }, this.currentTrial = null
        }
        return n.prototype.start = function() {
          return this.nextTrial()
        }, n.prototype.nextTrial = function() {
          return this.currentTrial = new t(this)
        }, n.prototype.clickedBg = function() {
          switch (this.getView()) {
            case "splash":
              return this.start();
            case "waiting":
              return this.reactionClick();
            case "go":
              return this.reactionClick();
            default:
              return this.nextTrial()
          }
        }, n.prototype.reactionClick = function() {
          return this.currentTrial.reactionClick(), this.currentTrial.result ? this.trials.push(this.currentTrial) : void 0
        }, n.prototype.showSaveButton = function() {
          return this.trials.length >= this.config.min_tries
        }, n.prototype.getView = function() {
          var t;
          return this.saving ? "saving" : (null != (t = this.currentTrial) ? t.phase : void 0) || "splash"
        }, n.prototype.getAverage = function() {
          var t, e, n, i, r;
          for (i = 0, n = this.trials, t = 0, e = n.length; e > t; t++) r = n[t], i += r.result;
          return i / this.trials.length || 0
        }, n.prototype.save = function() {
          var t;
          return this.saving = !0, t = this.trials.map(function(t) {
            return t.serialize()
          }), e({
            method: "POST",
            url: "/tests/reactiontime.json",
            data: t
          }).then(function(t) {
            return window.location = "/dashboard"
          })
        }, n
      }()
    }]).directive("ngFastClick", ["$parse", function(t) {
      return {
        link: function(e, n, i) {
          var r;
          return r = t(i.ngFastClick), n.on("touchstart", function(t) {
            return e.$apply(function() {
              return r(e, {
                $event: t
              })
            }), t.stopPropagation(), t.preventDefault()
          }), n.on("mousedown", function(t) {
            return e.$apply(function() {
              return r(e, {
                $event: t
              })
            }), t.preventDefault()
          })
        }
      }
    }]).controller("ReactionTimeCtrl", ["$scope", "ReactionTimeTest", function(t, e) {
      return t.test = new e
    }]), angular.module("hb.charting", []).directive("hbUserBadge", function() {
      return {
        restrict: "EAC",
        scope: !0,
        link: function(t, e, n) {
          var i, r, o, s, a, u, l, c, h, f, p, d, m;
          return c = n.percentile, t.percentileText = c ? (100 * c).toFixed() : "?", m = l = 40, p = 3, h = -Math.PI / 2, r = "#ccc", a = window.devicePixelRation || 1, i = document.createElement("canvas"), i.width = m * a, i.height = l * a, i.style.width = m + "px", i.style.height = l + "px", i.style.display = "inline-block", e.append(i), o = i.getContext("2d"), o.scale(a, a), s = function(t, e, n) {
            return o.beginPath(), o.strokeStyle = t, o.lineWidth = e, o.arc(0, 0, m / 2 - p - 1, h, h + 2 * Math.PI * n), o.stroke()
          }, f = new Date, u = 500, (d = function() {
            var t, e, n;
            return o.save(), o.clearRect(0, 0, m, l), o.translate(m / 2, m / 2), e = Math.min(1, ((new Date).getTime() - f.getTime()) / u), t = Math.sin(e * Math.PI / 2), n = .8 + .2 * t, o.scale(n, n), o.globalAlpha = t, s("rgba(200,200,200,0.3)", p, 1), s(r, p, c * t), o.restore(), 1 > e ? (window.requestAnimationFrame || setTimeout)(d, 1e3 / 60) : void 0
          })()
        }
      }
    }).directive("hbPowerBar", ["$timeout", function(t) {
      return {
        restrict: "EAC",
        scope: !0,
        link: function(e, n, i) {
          var r;
          return r = (100 * i.percentile || 0).toFixed(1) + "%", t(function() {
            return e.percentileText = r
          }, 0)
        }
      }
    }]).directive("hbChart", ["$http", function(t) {
      return {
        restrict: "EAC",
        link: function(e, n, i) {
          return t.get(i.hbEndpoint).then(function(t) {
            var e, i, r, o, s, a, u;
            return u = t.data.map(function(t, e) {
              return t[0] % 20 === 0 ? t[0] + "ms" : ""
            }), r = t.data.map(function(t) {
              return t[1]
            }), a = {
              showTooltips: !1,
              responsive: !0,
              animation: !1
            }, s = {
              labels: u,
              datasets: [{
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: r
              }]
            }, e = n.find("canvas")[0], null != e.getContext ? (o = e.getContext("2d"), i = new Chart(o).Line(s, a)) : void 0
          })
        }
      }
    }])
  }.call(this),
  function() {
    angular.module("hb.memory", []).controller("MemoryCtrl", ["$timeout", "$http", "$scope", "$window", function(t, e, n, i) {
      var r, o, s, a;
      r = function() {
        function t() {}
        return t.random = function(t, e, n) {
          var i, r, o, s;
          if (n > t * e) throw new Error("IT CANNOT BE DONE!!!!");
          for (i = this.emptyBoard(t, e), r = 0; n > r;) o = ~~(Math.random() * t), s = ~~(Math.random() * e), i[o][s] || (i[o][s] = !0, r++);
          return i
        }, t.emptyBoard = function(t, e) {
          var n, i, r;
          return n = function() {
            var n, o, s;
            for (s = [], i = n = 0, o = t; o >= 0 ? o > n : n > o; i = o >= 0 ? ++n : --n) s.push(function() {
              var t, n, i;
              for (i = [], r = t = 0, n = e; n >= 0 ? n > t : t > n; r = n >= 0 ? ++t : --t) i.push(!1);
              return i
            }());
            return s
          }()
        }, t.equals = function(t, e) {
          var n, i, r, o, s, a, u, l;
          for (l = n = 0, r = t.length; r > n; l = ++n)
            for (s = t[l], u = i = 0, o = s.length; o > i; u = ++i)
              if (a = s[u], a !== e[l][u]) return !1;
          return !0
        }, t.hasAllAnswers = function(t, e) {
          var n, i, r, o, s, a, u, l;
          for (l = n = 0, r = t.length; r > n; l = ++n)
            for (s = t[l], u = i = 0, o = s.length; o > i; u = ++i)
              if (a = s[u], a !== e[l][u] && e[l][u] === !1) return !1;
          return !0
        }, t.numFalsePositives = function(t, e) {
          var n, i, r, o, s, a, u, l, c;
          for (s = 0, c = n = 0, r = t.length; r > n; c = ++n)
            for (a = t[c], l = i = 0, o = a.length; o > i; l = ++i) u = a[l], u !== e[c][l] && e[c][l] === !0 && s++;
          return s
        }, t
      }(), s = function() {
        function t(t) {
          var e, n;
          this.actualAnswers = t, this.userAnswers = function() {
            var t, i, r, o;
            for (r = this.actualAnswers, o = [], t = 0, i = r.length; i > t; t++) e = r[t], o.push(function() {
              var t, i, r;
              for (r = [], t = 0, i = e.length; i > t; t++) n = e[t], r.push(!1);
              return r
            }());
            return o
          }.call(this), this.blankBoard = r.emptyBoard(this.actualAnswers.length, this.actualAnswers[0].length), this.squares = this.actualAnswers
        }
        return t.prototype.clickedSquare = function(t, e) {
          return this.userAnswers[e][t] === !0 ? 0 : (this.userAnswers[e][t] = !0, this.userAnswers[e][t] !== this.actualAnswers[e][t] ? -1 : 0)
        }, t.prototype.checkWinCondition = function() {
          return r.hasAllAnswers(this.actualAnswers, this.userAnswers)
        }, t.prototype.numFalsePositives = function() {
          return r.numFalsePositives(this.actualAnswers, this.userAnswers)
        }, t
      }(), o = function() {
        function n() {
          this.remainingLives = 3, this.stageNum = 1, this.score = 0, this.combo = 1, this.blockTileClicks = !0, this.highestStage = 0, this.initStage(), this.fsm = StateMachine.create({
            initial: "splash",
            events: [{
              name: "start",
              from: "splash",
              to: "preflip"
            }, {
              name: "showanswers",
              form: "preflip",
              to: "flipped"
            }, {
              name: "hideanswers",
              from: "flipped",
              to: "usertest"
            }, {
              name: "endlevel",
              from: "usertest",
              to: "levelrecap"
            }, {
              name: "endlevelrecap",
              from: "levelrecap",
              to: "postrecap"
            }, {
              name: "closelevelrecap",
              from: "postrecap",
              to: "preflip"
            }, {
              name: "endgame",
              form: "usertest",
              to: "gameover"
            }],
            callbacks: {
              onpreflip: function(e) {
                return function() {
                  return e.initStage(), t(function() {
                    return e.fsm.showanswers()
                  }, 500)
                }
              }(this),
              onflipped: function(e) {
                return function() {
                  return t(function() {
                    return e.fsm.hideanswers()
                  }, 1200)
                }
              }(this),
              onlevelrecap: function(e) {
                return function(n, i, r, o) {
                  return t(function() {
                    return e.fsm.endlevelrecap(o)
                  }, 500)
                }
              }(this),
              onendlevelrecap: function(e) {
                return function(n, i, r, o) {
                  return t(function() {
                    return e.fsm.closelevelrecap(o)
                  }, 500)
                }
              }(this),
              onbeforecloselevelrecap: function(t) {
                return function(e, n, i, r) {
                  return r ? t.stageNum++ : (t.remainingLives--, t.outOfLives() ? (t.fsm.endgame(), !1) : t.stageNum = Math.max(1, t.stageNum - 1))
                }
              }(this)
            }
          })
        }
        return n.prototype.classesForSquare = function(t, e) {
          return {
            active: this.isActive(t, e),
            error: this.isError(t, e)
          }
        }, n.prototype.isActive = function(t, e) {
          return this.getDisplaySquares()[e][t] === !0
        }, n.prototype.isError = function(t, e) {
          switch (this.fsm.current) {
            case "usertest":
            case "levelrecap":
              return this.stage.userAnswers[e][t] === !0 && this.stage.actualAnswers[e][t] === !1;
            default:
              return !1
          }
        }, n.prototype.getDisplaySquares = function() {
          switch (this.fsm.current) {
            case "flipped":
              return this.stage.actualAnswers;
            case "usertest":
            case "levelrecap":
              return this.stage.userAnswers;
            default:
              return this.stage.blankBoard
          }
        }, n.prototype.initStage = function() {
          var t, e, n;
          return this.highestStage = Math.max(this.highestStage, this.stageNum), e = this.getDimForStage(), t = 2 + this.stageNum, n = r.random(e, e, t), this.stage = new s(n)
        }, n.prototype.clickedSquare = function(t, e) {
          var n, i;
          if ("usertest" === this.fsm.current && this.stage.userAnswers[e][t] !== !0) return i = this.stage.clickedSquare(t, e), 0 === i ? (n = this.combo * this.stageNum, this.lastClickScore = n, this.score += n, this.combo++) : this.combo = 1, this.stage.numFalsePositives() >= 3 ? this.fsm.endlevel(!1) : this.stage.checkWinCondition() ? this.fsm.endlevel(!0) : void 0
        }, n.prototype.outOfLives = function() {
          return this.remainingLives <= 0
        }, n.prototype.getDimForStage = function() {
          return ~~Math.sqrt(9 + 3 * this.stageNum)
        }, n.prototype.individualSquareWidth = function() {
          var t;
          return t = Math.floor(this.maxWidthForDevice() / this.getDimForStage() - 1), {
            width: t + "px",
            height: t + "px",
            borderWidth: t / 16 + "px",
            borderRadius: t / 8 + "px"
          }
        }, n.prototype.maxWidthForDevice = function() {
          return Math.min(440, window.innerWidth - 50)
        }, n.prototype.save = function() {
          var t;
          return this.saving = !0, t = {
            score: this.score,
            highest_level: this.highestStage
          }, e({
            method: "POST",
            url: "/tests/memory.json",
            data: t
          }).then(function(t) {
            window.location = "/dashboard"
          })
        }, n
      }(), a = function() {
        return n.$apply()
      }, angular.element(i).on("resize", a), n.$on("$destroy", function() {
        return angular.element(i).off("resize", a)
      }), this.testManager = new o
    }])
  }.call(this),
  function() {
    angular.module("hb.verbal-memory", []).controller("VerbalMemoryCtrl", ["$http", "$window", "$rootScope", "$timeout", function(t, e, n, i) {
      var r, o, s;
      return o = function(t) {
        return t[~~(Math.random() * t.length)]
      }, r = function() {
        function e() {
          this.state = "OFF", this.score = 0, this.lives = 3, this.turn = 0, this.words = []
        }
        return e.prototype.load = function() {
          return this.state = "LOADING", t.get("/data/wordsEn.txt").then(function(t) {
            return function(e) {
              t.dictionary = e.data.split(/\n/), t.state = "READY"
            }
          }(this))
        }, e.prototype.nextQuestion = function() {
          this.state = "PROMPT", i(function(t) {
            return function() {
              var e;
              for (t.turn += 1, e = t.currentWord; t.currentWord === e;) e = o(Math.random() < .5 || 0 === t.words.length ? t.dictionary : t.words);
              t.currentWord = e
            }
          }(this))
        }, e.prototype.onAnswer = function(t) {
          var e;
          "GAMEOVER" !== this.state && (e = -1 !== this.words.indexOf(this.currentWord), t === e ? this.score += 1 : this.lives -= 1, e || this.words.push(this.currentWord), this.lives > 0 ? this.nextQuestion() : this.state = "GAMEOVER")
        }, e.prototype.onKeydown = function(t) {
          switch (t.which) {
            case 37:
              this.onAnswer(!0);
              break;
            case 39:
              this.onAnswer(!1)
          }
        }, e.prototype.save = function() {
          t({
            method: "POST",
            url: "/tests/verbal-memory",
            params: {
              score: this.score
            }
          }).then(function() {
            window.location = "/dashboard"
          })
        }, e
      }(), s = new r, s.load(), s
    }]).directive("hbFlashOnChange", ["$timeout", function(t) {
      return {
        restrict: "EAC",
        link: function(e, n, i) {
          return e.$watch(i.hbFlashOnChange, function(e, i) {
            return e !== i ? (n.addClass("change"), t(function() {
              return n.removeClass("change")
            })) : void 0
          })
        }
      }
    }])
  }.call(this),
  function() {
    angular.module("hb.number-memory", []).controller("NumberMemoryCtrl", ["$timeout", "$http", function(t, e) {
      var n;
      return new(n = function() {
        function n() {
          this.state = "SPLASH", this.level = 0
        }
        return n.prototype.nextQuestion = function() {
          var e, n, i, r;
          this.state = "QUESTION", this.level += 1, i = this.level, n = "" + Math.floor(9 * Math.random() + 1), r = function() {
            var t, n, r;
            for (r = [], e = t = 0, n = i - 1; n >= 0 ? n > t : t > n; e = n >= 0 ? ++t : --t) r.push("" + Math.floor(10 * Math.random()));
            return r
          }(), this.currentAnswer = n + r.join(""), this.timeLimit = 800 * i + 1e3, this.timerStartedAt = new Date, t(function(t) {
            return function() {
              return t.promptForAnswer()
            }
          }(this), this.timeLimit)
        }, n.prototype.promptForAnswer = function() {
          this.state = "PROMPT"
        }, n.prototype.submitAnswer = function(t) {
          this.userAnswer = t, this.state = "SHOWANSWER"
        }, n.prototype.currentAnswerIsCorrect = function() {
          return this.userAnswer === this.currentAnswer
        }, n.prototype.wasDigitRight = function(t) {
          return this.userAnswer[t] === this.currentAnswer[t]
        }, n.prototype.onKeydown = function(t) {
          13 === t.which && "SHOWANSWER" === this.state && this.currentAnswerIsCorrect() && this.nextQuestion()
        }, n.prototype.getMainClass = function() {
          switch (this.state) {
            case "SHOWANSWER":
              return this.currentAnswerIsCorrect() ? "correct" : "incorrect";
            default:
              return this.state.toLowerCase()
          }
        }, n.prototype.getDisplayTimer = function() {
          return 1 - ((new Date).getTime() - this.timerStartedAt.getTime()) / this.timeLimit
        }, n.prototype.save = function() {
          e({
            method: "POST",
            url: "/tests/number-memory",
            params: {
              score: this.level,
              lastNumber: this.currentAnswer,
              lastResponse: this.userAnswer
            }
          }).then(function() {
            window.location = "/dashboard"
          })
        }, n
      }())
    }]).directive("hbTimerBar", ["$parse", function(t) {
      return {
        link: function(e, n, i) {
          var r, o, s;
          return r = !1, e.$on("$destroy", function() {
            return r = !0
          }), o = t(i.hbTimerBar), (s = function() {
            return r ? void 0 : (n.css({
              width: 100 * o(e) + "%"
            }), requestAnimationFrame(s))
          })()
        }
      }
    }])
  }.call(this);
