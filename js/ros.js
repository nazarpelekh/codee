/*jslint browser: true, white: true, plusplus: true, regexp: true, indent: 4, maxerr: 50, es5: true */
/*jshint multistr: true, latedef: nofunc */
/*global jQuery, $, Swiper*/

$(document).ready(function() {
    'use strict';

    $('.about_info').html($('.about_general_info').html());

    $('.about_col figure').on('click', function () {
        var t = $(this),
            st = t.next().html(),
            ct = $('.about_general_info').html();
        if(t.hasClass('is_active')) {
            $('.about_col figure').removeClass('is_active');
            $('.about_info').html(ct).toggleClass('is_changing');
        } else {
            $('.about_col figure').removeClass('is_active');
            t.addClass('is_active');
            $('.about_info').html(st).toggleClass('is_changing');
        }
    });

});
