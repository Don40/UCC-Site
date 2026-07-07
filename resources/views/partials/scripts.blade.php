<!-- External JavaScripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('assets/vendors/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/vendors/counter/waypoints-min.js') }}"></script>
<script src="{{ asset('assets/vendors/counter/counterup.min.js') }}"></script>
<!--<script src="<//?php echo base_url('../assets/vendors/imagesloaded/imagesloaded.js');?>"></script>-->
<script src="{{ asset('assets/vendors/masonry/masonry.js') }}"></script>
<script src="{{ asset('assets/vendors/masonry/filter.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>
<script src="{{ asset('assets/js/contact.js') }}"></script>
<!--<script src="<//?php echo base_url('../assets/vendors/switcher/switcher.js');?>"></script>-->
<!-- Revolution JavaScripts Files -->
<script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
</script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<!--Calender-->
<script src="{{ asset('assets/js/ac_cal.js') }}"></script>
<script src="{{ asset('assets/dist/datepicker.js') }}"></script>
<script src="{{ asset('assets/accalender/js/responsive-calendar.min.js') }}"></script>
<script type="text/javascript">
    $(".responsive-calendar").responsiveCalendar({
        time: '2026-07',
        events: {
            "2025-01-26": {
                "number": "1",
                "url": "Republic Day"
            },
            "2025-03-14": {
                "number": "1",
                "url": "Holi"
            },
            "2025-03-31": {
                "number": "1",
                "url": "Id-ul-Fitr"
            },
            "2025-04-18": {
                "number": "1",
                "url": "Good Friday"
            },
            "2025-06-07": {
                "number": "1",
                "url": "Id-ul-Zuha (Bakrid)"
            },
            "2025-06-22": {
                "number": "1",
                "url": "Rev. Thomas Jones Day"
            },
            "2025-07-14": {
                "number": "1",
                "url": "Beh Dienkhlam"
            },
            "2025-07-17": {
                "number": "1",
                "url": "U Tirot Sing Day"
            },
            "2025-08-15": {
                "number": "1",
                "url": "Independence Day"
            },
            "2025-08-16": {
                "number": "1",
                "url": "Janmashtami"
            },
            "2025-10-01": {
                "number": "1",
                "url": "Maha Navami (Durga Puja)"
            },
            "2025-10-02": {
                "number": "1",
                "url": "Mahatma Gandhi’s Birthday / Dussehra"
            },
            "2025-10-20": {
                "number": "1",
                "url": "Diwali"
            },
            "2025-11-07": {
                "number": "1",
                "url": "Wangala Festival"
            },
            "2025-11-23": {
                "number": "1",
                "url": "Seng Kut Snem"
            },
            "2025-12-12": {
                "number": "1",
                "url": "Pa Togan Nengminja Sangma"
            },
            "2025-12-18": {
                "number": "1",
                "url": "Death Anniversary of SoSo Tham"
            },
            "2025-12-24": {
                "number": "4",
                "url": "Christmas"
            },
            "2025-12-30": {
                "number": "1",
                "url": "Death Anniversary of U Kiang Nangbah"
            },
            "2025-12-20": {
                "number": "47",
                "url": "Winter Holidays (Teaching Staff & Students)"
            },
            "2025-12-20": {
                "number": "25",
                "url": "Winter Holidays (Administrative Staff)"
            }
        }
    });
    //$('.responsive-calendar').responsiveCalendar({onDayClick: function(events) { $("#wanga").show(); }});
</script>
<script>
    jQuery(document).ready(function () {
        var ttrevapi;
        var tpj = jQuery;
        if (tpj("#rev_slider_486_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_486_1");
        } else {
            ttrevapi = tpj("#rev_slider_486_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "{{ asset('assets/vendors/revolution/js') }}/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "uranus",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    },

                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%",
                    presize: false
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [768, 600, 600, 600],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "enterpoint",
                    speed: 400,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55],
                    type: "scroll",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
</script>
<script>
    if ($("#ac_cal").length) {
        $("#ac_cal").datepicker({
            autoHide: true,
        });
    }
</script>
<script>
    const video = document.getElementById('hoverVideo');
    const thumbnail = document.getElementById('thumbnail');

    if (video && thumbnail) {
        thumbnail.addEventListener('click', function () {
            thumbnail.classList.add('hidden');
            video.play();
        });

        video.addEventListener('pause', function () {
            thumbnail.classList.remove('hidden');
            video.currentTime = 0;
        });
    }
</script>