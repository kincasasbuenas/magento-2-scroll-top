/**
 * Copyright (c) 2024 - Kevin casasbuenas (https://kincasasbuenas.dev/)
 * @author      Kevin Casasbuenas <kincasasbuenas@outlook.com>
 * @category    Kinuz
 * @module      Kinuz/ScrollTop
 */ 
define([
    'jquery',
], function($) {
    'use strict';
    
    const jq = {
        init: function(){
            this.scrollProgress();
        },
        scrollProgress(){
            let progressPath = document.querySelector('.scroll-top path');
            let pathLength = progressPath.getTotalLength();
            progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
            progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
            progressPath.style.strokeDashoffset = pathLength;
            progressPath.getBoundingClientRect();
            progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
            let updateProgress = function () {
                let scroll = $(window).scrollTop();
                let height = $(document).height() - $(window).height();
                let progress = pathLength - (scroll * pathLength / height);
                progressPath.style.strokeDashoffset = progress;
            }
            updateProgress();
            $(window).scroll(updateProgress);
            let offset = 50;
            let duration = 550;

            $(window).on('scroll', function() {
                if ($(this).scrollTop() > offset) {
                    $('.scroll-top').addClass('active-progress');
                } else {
                    $('.scroll-top').removeClass('active-progress');
                }
            });

            $('.scroll-top').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({scrollTop: 0}, duration);
                return false;
            })
        }
    }

    $(document).ready(function() {
        jq.init();
    })

});