/* global jQuery */
/* global document */

jQuery(function () {
  'use strict';

  document.addEventListener("touchstart", function () {}, false);
  jQuery(function () {

    jQuery('body').wrapInner('<div class="wsmenucontainer" />');
    jQuery('<div class="overlapblackbg"></div>').prependTo('.wsmenu');

    jQuery('#wsnavtoggle').click(function () {
      jQuery('body').toggleClass('wsactive');
    });

    jQuery('.overlapblackbg').click(function () {
      jQuery("body").removeClass('wsactive');
    });

    jQuery('.wsmenu > .wsmenu-list > li').has('.wsmegamenu').prepend('<span class="wsmenu-click"><i class="wsmenu-arrow"></i></span>');

    jQuery('.wsmenu-click').click(function () {
      jQuery(this).toggleClass('ws-activearrow').parent().siblings().children().removeClass('ws-activearrow');
      jQuery(this).siblings('.wsmegamenu').slideToggle('slow');
    });

    jQuery(window).on('resize', function () {

      if (jQuery(window).outerWidth() < 992) {
        jQuery('.wsmenu').css('height', jQuery(this).height() + "px");
        jQuery('.wsmenucontainer').css('min-width', jQuery(this).width() + "px");
      } else {
        jQuery('.wsmenu').removeAttr("style");
        jQuery('.wsmenucontainer').removeAttr("style");
        jQuery('body').removeClass("wsactive");
        jQuery('.wsmenu > .wsmenu-list > li > .wsmegamenu, .wsmenu > .wsmenu-list > li > ul.sub-menu, .wsmenu > .wsmenu-list > li > ul.sub-menu > li > ul.sub-menu, .wsmenu > .wsmenu-list > li > ul.sub-menu > li > ul.sub-menu > li > ul.sub-menu').removeAttr("style");
        jQuery('.wsmenu-click').removeClass("ws-activearrow");
      }

    });

    jQuery(window).trigger('resize');

  });
}());