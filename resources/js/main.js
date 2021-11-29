const $ = require('jquery')

import 'slick-carousel/slick/slick.min.js'
import 'owl.carousel/dist/assets/owl.carousel.css'
import 'owl.carousel/dist/owl.carousel.min.js'

$(function () {
    'use strict'

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    /* ===================================
        Side Menu
    ====================================== */
    if ($('#sidemenu_toggle').length) {
        $('#sidemenu_toggle').on('click', function () {
            $('.pushwrap').toggleClass('active')
            $('.side-menu').addClass('side-menu-active'),
                $('#close_side_menu').fadeIn(700)
        }),
            $('#close_side_menu').on('click', function () {
                $('.side-menu').removeClass('side-menu-active'),
                    $(this).fadeOut(200),
                    $('.pushwrap').removeClass('active')
            }),
            $('#btn_sideNavClose').on('click', function () {
                $('.side-menu').removeClass('side-menu-active'),
                    $('#close_side_menu').fadeOut(200),
                    $('.pushwrap').removeClass('active')
            })
    }

    // Dropdown Side Menu
    $('.side-nav .navbar-nav .nav-item.dropdown > a').click(function () {
        $('.dropdown-menu').slideUp(200)
        if (
            $(this)
                .parent()
                .hasClass('active')
        ) {
            $('.nav-item.dropdown').removeClass('active')
            $(this)
                .parent()
                .removeClass('active')
        } else {
            $('.nav-item.dropdown').removeClass('active')
            $(this)
                .next('.dropdown-menu')
                .slideDown(200)
            $(this)
                .parent()
                .addClass('active')
        }
    })

    // Dropdown Menu
    $('.menu .nav .nav-item.dropdown')
        .mouseover(function () {
            $(this)
                .find('.nav-link.dropdown-toggle')
                .addClass('dropdown-active')
            $(this)
                .find('ul')
                .css('display', 'block')
        })
        .mouseout(function () {
            $(this)
                .find('.nav-link.dropdown-toggle')
                .removeClass('dropdown-active')
            $(this)
                .find('ul')
                .css('display', 'none')
        })

    // Navbar Scroll Function
    var $window = $(window)
    $window.scroll(function () {
        var $scroll = $window.scrollTop()
        var $navbar = $('.header-nav')
        if (!$navbar.hasClass('sticky-bottom')) {
            if ($scroll > 250) {
                $navbar.addClass('fixed-menu')
            } else {
                $navbar.removeClass('fixed-menu')
            }
        }
    })

    var fixTop = $('.fixed-content')

    if (fixTop.length) {
        var fixmeTop = fixTop.offset().top

        $(window).scroll(function () {
            // assign scroll event listener

            var currentScroll = $(window).scrollTop() // get current position

            if (currentScroll >= fixmeTop) {
                // apply position: fixed if you
                $('.fixed-content').css({
                    // scroll to that element or below it
                    top: '80px',
                    position: 'sticky'
                })
            } else {
                // apply position: static
                $('.fixed-content').css({
                    // if you scroll above it
                    position: 'static'
                })
            }
        })
    }

    // Form de Contato
    $('#formContato').submit(function (e) {
        e.preventDefault()

        let dados = $(this).serialize()
        let url = this.url.value

        $.ajax({
            type: 'POST',
            url: url,
            data: dados,
            dataType: 'json',
            success: function (response) {
                $('.form-home .alert').html(response.success)
                $('.form-home .alert')
                    .addClass('alert-success')
                    .fadeIn('slow')

                setTimeout(function () {
                    $('#formContato').each(function () {
                        this.reset()
                    })
                }, 500)
            },
            error: function (response) {
                $('.form-home .alert').html(response.erro)
                $('.form-home .alert')
                    .addClass('alert-danger')
                    .fadeOut('slow')
            }
        })

        return false
    })

    $('#form-contato').submit(function (e) {
        e.preventDefault()

        let dados = $(this).serialize()
        let url = this.url.value

        $.ajax({
            type: 'POST',
            url: url,
            data: dados,
            dataType: 'json',
            success: function (response) {
                $('.form .alert').html(response.success)
                $('.form .alert')
                    .addClass('alert-success')
                    .fadeIn('slow')

                setTimeout(function () {
                    $('#form-contato').each(function () {
                        this.reset()
                    })
                }, 500)
            },
            error: function (response) {
                $('.form .alert').html(response.erro)
                $('.form .alert')
                    .addClass('alert-danger')
                    .fadeOut('slow')
            }
        })

        return false
    })

    // Form de Trabalhe Conosco
    $('#formTrabalheConosco').submit(function (e) {
        e.preventDefault()

        let dados = $(this).serialize()
        let url = this.url.value

        $.ajax({
            type: 'POST',
            url: url,
            data: dados,
            dataType: 'json',
            success: function (response) {
                $('.trabalhe-conosco .alert').html(response.success)
                $('.trabalhe-conosco .alert')
                    .addClass('alert-success')
                    .fadeIn('slow')

                setTimeout(function () {
                    $('#formTrabalheConosco').each(function () {
                        this.reset()
                    })
                }, 500)
            },
            error: function (response) {
                $('.trabalhe-conosco .alert').html(response.erro)
                $('.trabalhe-conosco .alert')
                    .addClass('alert-danger')
                    .fadeOut('slow')
            }
        })

        return false
    })

    // Form de Newsletter
    $('#formNewsletter').submit(function (e) {
        e.preventDefault()

        let dados = $(this).serialize()
        let url = this.url.value

        $.ajax({
            type: 'POST',
            url: url,
            data: dados,
            dataType: 'json',
            success: function (response) {
                $('.form-newsletter .alert').html(response.success)
                $('.form-newsletter .alert')
                    .addClass('alert-success')
                    .fadeIn('slow')

                setTimeout(function () {
                    $('#formNewsletter').each(function () {
                        this.reset()
                    })
                }, 500)
            },
            error: function (response) {
                $('.form-newsletter .alert').html(response.erro)
                $('.form-newsletter .alert')
                    .addClass('alert-danger')
                    .fadeOut('slow')
            }
        })

        return false
    })

    // Banner Carousel / Owl Carousel
    $('.banner-carousel').owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        smartSpeed: 500,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 5000,
        navText: [
            '<span class="fa fa-angle-left">',
            '<span class="fa fa-angle-right">'
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1024: {
                items: 1
            }
        }
    })

    $('.carousel-ensino').slick({
        centerMode: true,
        centerPadding: '10px',
        slidesToShow: 3,
        prevArrow:
            '<button class="slick-prev slick-arrow"><i class="fas fa-chevron-left"></i></button>',
        nextArrow:
            '<button class="slick-next slick-arrow"><i class="fas fa-chevron-right"></i></button>',
        responsive: [
            {
                breakpoint: 975,
                settings: {
                    arrows: false,
                    dots: true,
                    centerMode: false,
                    centerPadding: '10px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    dots: true,
                    centerMode: false,
                    centerPadding: '10px',
                    slidesToShow: 1
                }
            }
        ]
    })

    $('.carousel-depoimentos').slick({
        slidesToShow: 1,
        prevArrow:
            '<button class="slick-prev slick-arrow"><i class="fas fa-chevron-left"></i></button>',
        nextArrow:
            '<button class="slick-next slick-arrow"><i class="fas fa-chevron-right"></i></button>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    dots: true,
                    slidesToShow: 1
                }
            }
        ]
    })

    $('.carousel-espaco').slick({
        slidesToShow: 1,
        dots: true,
        prevArrow:
            '<button class="slick-prev slick-arrow"><i class="fas fa-chevron-left"></i></button>',
        nextArrow:
            '<button class="slick-next slick-arrow"><i class="fas fa-chevron-right"></i></button>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    })

    // Mask
    $('.cep').mask('00000-000')
    $('.cpf').mask('000.000.000-00', { reverse: true })
    $('.data').mask('00/00/0000')
    $('.dinheiro').mask('#.##0', { reverse: true })

    $('.telefone')
        .focusout(function () {
            var phone, element
            element = $(this)
            element.unmask()
            phone = element.val().replace(/\D/g, '')
            if (phone.length > 10) {
                element.mask('(99) 99999-9999')
            } else {
                element.mask('(99) 9999-99999')
            }
        })
        .trigger('focusout')
})
