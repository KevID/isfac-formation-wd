// Avoid `console` errors in browsers that lack a console.
(function () {
  var method;
  var noop = function () {};
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());

// Place any jQuery/helper plugins in here.
var morton = {};
jQuery(document).ready(function (e) {
  var t = e(".lecture:first");
  t.length > 0 && (morton.$window = e(window), morton.lp = e('<div class="progress" style="width: 0%"></div>'), morton.lp.appendTo("#hrtop"), morton.lpmin = t.offset().top, morton.lph = t.height(), morton.$window.off("scroll.lecture").on("scroll.lecture", function (e) {
    clearTimeout(morton.lectureTimeout), morton.lectureTimeout = setTimeout(function () {
      var e = Math.min(Math.max(morton.$window.scrollTop() - morton.lpmin, 0) / morton.lph * 100, 100);
      morton.lp.width(e + "%")
    }, 150)
  }))
});