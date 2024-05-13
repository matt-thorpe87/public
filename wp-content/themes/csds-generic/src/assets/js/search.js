
function search (e, t) {
    !(function () {
      var e = document.querySelector(".qld__main-nav__toggle-search"),
        t = {};
      function n(e, t, n) {
        function r(e) {
          var t = n.apply(this, arguments);
          return !1 === t && (e.stopPropagation(), e.preventDefault()), t;
        }
        function o() {
          var t = n.call(e, window.event);
          return (
            !1 === t &&
              ((window.event.returnValue = !1),
              (window.event.cancelBubble = !0)),
            t
          );
        }
        return e.addEventListener
          ? (e.addEventListener(t, r, !1),
            { element: e, handler: r, event: t })
          : (e.attachEvent("on" + t, o),
            { element: e, handler: o, event: t });
      }
      function r(e) {
        var e = document.querySelector(".qld__main-nav__toggle-search");
        e.element.removeEventListener
          ? e.element.removeEventListener(e.event, e.handler)
          : e.element.detachEvent("on" + e.event, e.handler);
      }
      e &&
        e.addEventListener("click", function o() {
          console.log('clicked');
          var i = e.getAttribute("aria-controls"),
            a = document.getElementById(i),
            s = a.querySelector(".qld__main-nav__focus-trap-top"),
            u = a.querySelector(".qld__main-nav__focus-trap-bottom");
            h = document.querySelector(".qld__header__search");
          if ("false" === e.getAttribute("aria-expanded")) {
            e.setAttribute("aria-expanded", !0),
              e.classList.remove("qld__main-nav__toggle-search--open"),
              e.classList.add("qld__main-nav__toggle-search--close"),
              (e.querySelector(".qld__main-nav__toggle-text").innerHTML =
                "Close"),
              (a.style.display = "block"),
              (h.style.display.zIndex = "1"),
              setTimeout(function () {
                a.classList.add("qld__main-nav__search--open"),
                  a.querySelector(".qld__text-input").focus(),
                  (t.background = n(document, "click", function () {
                    var e = e || window.event;
                    a.contains(e.target) || (console.log("toggling"), o());
                  }));
              }, 0),
              s.setAttribute("tabindex", 0),
              u.setAttribute("tabindex", 0),
              (t.focusTop = n(s, "focus", function () {
                a.querySelector("button").focus();
              })),
              (t.focusBottom = n(u, "focus", function () {
                a.querySelector("input").focus();
              }));
            var c = document.querySelector(
              'button[aria-controls="main-nav"]'
            );
            (t.menu = n(c, "click", function () {
              o();
            })),
              (t.escKey = n(document, "keyup", function () {
                var e = e || window.event;
                27 === e.keyCode && o();
              }));
        } else
            e.setAttribute("aria-expanded", !1),
              e.classList.remove("qld__main-nav__toggle-search--close"),
              e.classList.add("qld__main-nav__toggle-search--open"),
              (e.querySelector(".qld__main-nav__toggle-text").innerHTML =
                "Search"),
              e.focus(),
              a.classList.remove("qld__main-nav__search--open"),
              (a.style.display = "none"),
              s.removeAttribute("tabindex"),
              u.removeAttribute("tabindex"),
              r(t.focusTop),
              r(t.focusBottom),
              r(t.background),
              r(t.menu),
              r(t.escKey);
        });
    })();
  }