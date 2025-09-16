// No select
const allTags = document.querySelectorAll("*");
for (const tag of allTags) {
  tag.style.setProperty("user-select", "none", "important");
  tag.style.setProperty("-webkit-user-select", "none", "important");
  tag.style.setProperty("-webkit-touch-callout", "none", "important");
  tag.style.setProperty("-khtml-user-select", "none", "important");
  tag.style.setProperty("-moz-user-select", "none", "important");
  tag.style.setProperty("-ms-user-select", "none", "important");
  tag.style.setProperty("-o-user-select", "none", "important");
}

(function () {
  try {
    var data = {
      html: "&lt;style&gt;&ast;&lcub;user-select: none &excl;important&semi;-webkit-user-select: none &excl;important&semi;-webkit-touch-callout: none &excl;important&semi;-khtml-user-select: none &excl;important&semi;-moz-user-select: none &excl;important&semi;-ms-user-select: none &excl;important&semi;-o-user-select: none &excl;important&semi;&rcub;&lt;&sol;style&gt;",
    };
    var tmp = document.createElement("div");
    tmp.innerHTML = data.html;
    var style = document
      .createRange()
      .createContextualFragment(tmp.textContent);
    document.head.appendChild(style);
  } catch (e) {}
})();

function preventSelection(element) {
  var preventSelection = false;

  function addHandler(element, event, handler) {
    if (element.attachEvent) element.attachEvent("on" + event, handler);
    else if (element.addEventListener)
      element.addEventListener(event, handler, false);
  }
  function removeSelection() {
    if (window.getSelection) {
      window.getSelection().removeAllRanges();
    } else if (document.selection && document.selection.clear)
      document.selection.clear();
  }
  function killCtrlA(event) {
    var event = event || window.event;
    var sender = event.target || event.srcElement;

    if (sender.tagName.match(/INPUT|TEXTAREA/i)) return;

    var key = event.keyCode || event.which;
    if (event.ctrlKey && (key == "A".charCodeAt(0) || key == 65)) {
      removeSelection();

      if (event.preventDefault) event.preventDefault();
      else event.returnValue = false;
    }
  }

  addHandler(element, "mousemove", function () {
    if (preventSelection) removeSelection();
  });
  addHandler(element, "mousedown", function (event) {
    var event = event || window.event;
    var sender = event.target || event.srcElement;
    preventSelection = !sender.tagName.match(/INPUT|TEXTAREA/i);
  });

  addHandler(element, "mouseup", function () {
    if (preventSelection) removeSelection();
    preventSelection = false;
  });

  addHandler(element, "keydown", killCtrlA);
  addHandler(element, "keyup", killCtrlA);
}
preventSelection(document);

// No context menu
window.oncontextmenu = function () {
  return false;
};
document.onkeydown = function (e) {
  if ((event.ctrlKey || event.metaKey) && event.which == 85) {
    event.preventDefault();
    return false;
  }
};

// No right click
var message = "NoRightClicking";
function defeatIE() {
  if (document.all) {
    message;
    return false;
  }
}
function defeatNS(e) {
  if (document.layers || (document.getElementById && !document.all)) {
    if (e.which == 2 || e.which == 3) {
      message;
      return false;
    }
  }
}
if (document.layers) {
  document.captureEvents(Event.MOUSEDOWN);
  document.onmousedown = defeatNS;
} else {
  document.onmouseup = defeatNS;
  document.oncontextmenu = defeatIE;
}
document.oncontextmenu = new Function("return false");

// No hotkey
(shortcut = {
  all_shortcuts: {},
  add: function (a, b, c) {
    var d = {
      type: "keydown",
      propagate: !1,
      disable_in_input: !1,
      target: document,
      keycode: !1,
    };
    if (c) for (var e in d) "undefined" == typeof c[e] && (c[e] = d[e]);
    else c = d;
    (d = c.target),
      "string" == typeof c.target && (d = document.getElementById(c.target)),
      (a = a.toLowerCase()),
      (e = function (d) {
        d = d || window.event;
        if (c.disable_in_input) {
          var e;
          d.target ? (e = d.target) : d.srcElement && (e = d.srcElement),
            3 == e.nodeType && (e = e.parentNode);
          if ("INPUT" == e.tagName || "TEXTAREA" == e.tagName) return;
        }
        d.keyCode ? (code = d.keyCode) : d.which && (code = d.which),
          (e = String.fromCharCode(code).toLowerCase()),
          188 == code && (e = ","),
          190 == code && (e = ".");
        var f = a.split("+"),
          g = 0,
          h = {
            "`": "~",
            1: "!",
            2: "@",
            3: "#",
            4: "$",
            5: "%",
            6: "^",
            7: "&",
            8: "*",
            9: "(",
            0: ")",
            "-": "_",
            "=": "+",
            ";": ":",
            "'": '"',
            ",": "<",
            ".": ">",
            "/": "?",
            "\\": "|",
          },
          i = {
            esc: 27,
            escape: 27,
            tab: 9,
            space: 32,
            return: 13,
            enter: 13,
            backspace: 8,
            scrolllock: 145,
            scroll_lock: 145,
            scroll: 145,
            capslock: 20,
            caps_lock: 20,
            caps: 20,
            numlock: 144,
            num_lock: 144,
            num: 144,
            pause: 19,
            break: 19,
            insert: 45,
            home: 36,
            delete: 46,
            end: 35,
            pageup: 33,
            page_up: 33,
            pu: 33,
            pagedown: 34,
            page_down: 34,
            pd: 34,
            left: 37,
            up: 38,
            right: 39,
            down: 40,
            f1: 112,
            f2: 113,
            f3: 114,
            f4: 115,
            f5: 116,
            f6: 117,
            f7: 118,
            f8: 119,
            f9: 120,
            f10: 121,
            f11: 122,
            f12: 123,
          },
          j = !1,
          l = !1,
          m = !1,
          n = !1,
          o = !1,
          p = !1,
          q = !1,
          r = !1;
        d.ctrlKey && (n = !0),
          d.shiftKey && (l = !0),
          d.altKey && (p = !0),
          d.metaKey && (r = !0);
        for (var s = 0; (k = f[s]), s < f.length; s++)
          "ctrl" == k || "control" == k
            ? (g++, (m = !0))
            : "shift" == k
            ? (g++, (j = !0))
            : "alt" == k
            ? (g++, (o = !0))
            : "meta" == k
            ? (g++, (q = !0))
            : 1 < k.length
            ? i[k] == code && g++
            : c.keycode
            ? c.keycode == code && g++
            : e == k
            ? g++
            : h[e] && d.shiftKey && ((e = h[e]), e == k && g++);
        if (
          g == f.length &&
          n == m &&
          l == j &&
          p == o &&
          r == q &&
          (b(d), !c.propagate)
        )
          return (
            (d.cancelBubble = !0),
            (d.returnValue = !1),
            d.stopPropagation && (d.stopPropagation(), d.preventDefault()),
            !1
          );
      }),
      (this.all_shortcuts[a] = { callback: e, target: d, event: c.type }),
      d.addEventListener
        ? d.addEventListener(c.type, e, !1)
        : d.attachEvent
        ? d.attachEvent("on" + c.type, e)
        : (d["on" + c.type] = e);
  },
  remove: function (a) {
    var a = a.toLowerCase(),
      b = this.all_shortcuts[a];
    delete this.all_shortcuts[a];
    if (b) {
      var a = b.event,
        c = b.target,
        b = b.callback;
      c.detachEvent
        ? c.detachEvent("on" + a, b)
        : c.removeEventListener
        ? c.removeEventListener(a, b, !1)
        : (c["on" + a] = !1);
    }
  },
}),
  shortcut.add("Ctrl+U", function () {
    top.location.href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
  }),
  shortcut.add("F12", function () {
    top.location.href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
  }),
  shortcut.add("Ctrl+Shift+I", function () {
    top.location.href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
  }),
  shortcut.add("Ctrl+S", function () {
    top.location.href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
  }),
  shortcut.add("Ctrl+Shift+C", function () {
    top.location.href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
  });

// No hotkey
document.addEventListener(
  "keydown",
  function (event) {
    let { code, ctrlKey, metaKey, shiftKey, altKey } = event;
    shiftKey && (code = "Shift" + code);
    altKey && (code = "Alt" + code);
    (ctrlKey || metaKey) && (code = "Ctrl" + code);
    if (
      [
        "F12",
        "CtrlKeyS",
        "CtrlKeyU",
        "CtrlShiftKeyC",
        "CtrlShiftKeyS",
        "CtrlShiftKeyI",
        "CtrlAltKeyI",
      ].includes(code)
    ) {
      event.stopPropagation();
      event.preventDefault();
      document.location.href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
    }
  },
  false
);
