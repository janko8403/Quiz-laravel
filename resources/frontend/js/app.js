require('./bootstrap.bundle');

import mainMenu   from './modules/menu';
import quiz   from './modules/quiz';

class App {
    constructor () {
        this.events();
        mainMenu();
        quiz();
    }


    events() {

        $('.btn-login').addClass('disabled');
        $(function() {
            $("#select-language").on('change', function(){
                if($(this).val() !="0") {
                    $('.btn-login').removeClass('disabled');
                } else {
                    $('.btn-login').addClass('disabled');
                }
           });
        });

        $('#pimage3').on('change', function() {
            $('.comp2').css('display', 'none');
            $(this).css('color', '#6c757d');
        });

        $('#pimage2').on('change', function() {
            $('.comp1').css('display', 'none');
            $(this).css('color', '#6c757d');
        });

        function alphabetizeList(listField) {
            var sel = $(listField);
            var selected = sel.val();
            var opts_list = sel.find('option');
            opts_list.sort(function (a, b) {
                return $(a).text() > $(b).text() ? 1 : -1;
            });
            sel.html('').append(opts_list);
            sel.val(selected);
        }

        alphabetizeList('#select-language');

        $('.add-choise').html('Choose your country');

        $('a.nav-link').on('click', function(event) {
            var target = $(this.getAttribute('data-href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 70
                }, 1000);
            }
        });

        $('a.link-mobile').on('click', function(event) {
            var target = $(this.getAttribute('data-href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });

        $('#nav-icon').on('click', function(){
            $(this).toggleClass('open');
            $('.slide-nav').toggleClass('fadein_nav');
            $('.navbar').toggleClass('add_color_nav');
        });

        $('a.nav-link').on('click', function() {
            $('.navbar-collapse').removeClass('show');
            $('#nav-icon').removeClass('open');
        });

        $('.link-mobile').on('click', function() {
            $('.slide-nav').removeClass('fadein_nav');
            $('#nav-icon').removeClass('open');
            $('.navbar').removeClass('add_color_nav');
        })

        // send form
        var contactForm = $('#contact-form');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        contactForm.on('submit', function(e) {
            e.preventDefault();

            $('#nameform').removeClass('error');
            if ($('#nameform').val() == "") {
                $('#nameform').addClass('error');
            }

            $('#emailform').removeClass('error');
            if ($('#emailform').val() == "") {
                $('#emailform').addClass('error');
            }
            if(IsEmail($('#emailform').val())==false){
                $('#emailform').addClass('error');
            }

            $('#msgform').removeClass('error');
            if ($('#msgform').val() == "") {
                $('#msgform').addClass('error');
            }

            var data = {
                name: $('#nameform').val(),
                email: $('#emailform').val(),
                message: $('#msgform').val()
            };

            if (!contactForm.find('.error:visible').length) {
                $.ajax({
                    url: '/send-message',
                    type: 'POST',
                    method:'POST',
                    data: data,
                    success: function(response) {
                        if(response) {
                            showMsg('.form-success');
                        }
                    },
                    error: function() {
                        errorMsg('.form-error');
                    }
                });
            }
        });
        // end send form

        $('.competition-tab').on('click', function(e) {
            e.preventDefault();
            $('.competition-tab').removeClass('competition-active');
            $(this).addClass('competition-active');

            $($(this).attr('href')).addClass('active').siblings().removeClass('active');
        });

        // send comp1
        var contactForm1 = $('#competition1');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        contactForm1.on('submit', function(e) {
            e.preventDefault();

            $('#select-country').removeClass('error');
            if ($('#select-country').val() == "") {
                $('#select-country').addClass('error');
            }

            $('#name').removeClass('error');
            if ($('#name').val() == "") {
                $('#name').addClass('error');
            }

            $('#email-comp').removeClass('error');
            if ($('#email-comp').val() == "") {
                $('#email-comp').addClass('error');
            }
            if(IsEmail($('#email-comp').val())==false){
                $('#email-comp').addClass('error');
            }

            $('#link').removeClass('error');
            if ($('#link').val() == "") {
                $('#link').addClass('error');
            }

            const input = document.getElementById("link");
            if (input.checkValidity() !== true) {
                $('#link').addClass('error');
            }

            $('.checkbox3').removeClass('error');
            if($('.checkbox3').prop("checked") == false){
                $('.checkbox3').addClass('error');
            }
            $('.checkbox3').change(function() {
                if($(this).prop("checked") == true){
                    $(this).removeClass('error');
                }
                else if($(this).prop("checked") == false){
                    $(this).addClass('error');
                }
            });
            $('.checkbox3a').removeClass('error');
            if($('.checkbox3a').prop("checked") == false){
                $('.checkbox3a').addClass('error');
            }
            $('.checkbox3a').change(function() {
                if($(this).prop("checked") == true){
                    $(this).removeClass('error');
                }
                else if($(this).prop("checked") == false){
                    $(this).addClass('error');
                }
            });

            var data1 = new FormData();
            data1.append('id_competition', 3);
            data1.append('nr_shop', $('#nr-shop').val());
            data1.append('size_team', $('#size-team').val());
            data1.append('country', $('#select-country').val());
            data1.append('name', $('#name').val());
            data1.append('email', $('#email-comp').val());
            data1.append('link', $('#link').val());

            if (!contactForm1.find('.error:visible').length) {
                $.ajax({
                    url: '/send-competition',
                    method: 'POST',
                    processData:false,
                    contentType:false,
                    data: data1,
                    success: function(response) {
                        if(response) {
                            showMsg('.comp1-success');
                        }
                    },
                    error: function() {
                        errorMsg('.comp1-error');
                    }
                });
            }
        });
        // end send comp1

        // send comp2
        var contactForm2 = $('#competition2');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        contactForm2.on('submit', function(e) {
            e.preventDefault();

            $('#select-country2').removeClass('error');
            if ($('#select-country2').val() == "") {
                $('#select-country2').addClass('error');
            }

            $('#name2').removeClass('error');
            if ($('#name2').val() == "") {
                $('#name2').addClass('error');
            }

            $('#email-comp2').removeClass('error');
            if ($('#email-comp2').val() == "") {
                $('#email-comp2').addClass('error');
            }
            if(IsEmail($('#email-comp2').val())==false){
                $('#email-comp2').addClass('error');
            }

            $('#pimage2').removeClass('error');
            if ($('#pimage2').val() == "") {
                $('#pimage2').addClass('error');
            }

            $('.checkbox1').removeClass('error');
            if($('.checkbox1').prop("checked") == false){
                $('.checkbox1').addClass('error');
            }
            $('.checkbox1').change(function() {
                if($(this).prop("checked") == true){
                    $(this).removeClass('error');
                }
                else if($(this).prop("checked") == false){
                    $(this).addClass('error');
                }
            });

            $('.checkbox1a').removeClass('error');
            if($('.checkbox1a').prop("checked") == false){
                $('.checkbox1a').addClass('error');
            }
            $('.checkbox1a').change(function() {
                if($(this).prop("checked") == true){
                    $(this).removeClass('error');
                }
                else if($(this).prop("checked") == false){
                    $(this).addClass('error');
                }
            });

            var data2 = new FormData();
            data2.append('id_competition', 1);
            data2.append('nr_shop', $('#nr-shop2').val());
            data2.append('country', $('#select-country2').val());
            data2.append('name', $('#name2').val());
            data2.append('email', $('#email-comp2').val());
            data2.append('image', $('#pimage2')[0].files[0]);

            if (!contactForm2.find('.error:visible').length) {
                $.ajax({
                    url: '/send-competition',
                    method: 'POST',
                    processData:false,
                    contentType:false,
                    data: data2,
                    success: function(response) {
                        if(response) {
                            showMsg('.comp2-success');
                        }
                    },
                    error: function() {
                        errorMsg('.comp2-error');
                    }
                });
            }
        });
        // end send comp2

        // send comp3
        var contactForm3 = $('#competition3');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        contactForm3.on('submit', function(e) {
            e.preventDefault();

            $('#select-country3').removeClass('error');
            if ($('#select-country3').val() == "") {
                $('#select-country3').addClass('error');
            }

            $('#name3').removeClass('error');
            if ($('#name3').val() == "") {
                $('#name3').addClass('error');
            }

            $('#email-comp3').removeClass('error');
            if ($('#email-comp3').val() == "") {
                $('#email-comp3').addClass('error');
            }
            if(IsEmail($('#email-comp3').val())==false){
                $('#email-comp3').addClass('error');
            }

            $('#pimage3').removeClass('error');
            if ($('#pimage3').val() == "") {
                $('#pimage3').addClass('error');
            }

            $('.checkbox2').removeClass('error');
            if($('.checkbox2').prop("checked") == false){
                $('.checkbox2').addClass('error');
            }
            $('.checkbox2').change(function() {
                if($(this).prop("checked") == true){
                    $(this).removeClass('error');
                }
                else if($(this).prop("checked") == false){
                    $(this).addClass('error');
                }
            });

            $('.checkbox2a').removeClass('error');
            if($('.checkbox2a').prop("checked") == false){
                $('.checkbox2a').addClass('error');
            }
            $('.checkbox2a').change(function() {
                if($(this).prop("checked") == true){
                    $(this).removeClass('error');
                }
                else if($(this).prop("checked") == false){
                    $(this).addClass('error');
                }
            });

            var data3 = new FormData();
            data3.append('id_competition', 2);
            data3.append('nr_shop', $('#nr-shop3').val());
            data3.append('size_team', $('#size-team3').val());
            data3.append('country', $('#select-country3').val());
            data3.append('name', $('#name3').val());
            data3.append('email', $('#email-comp3').val());
            data3.append('image', $('#pimage3')[0].files[0]);

            if (!contactForm3.find('.error:visible').length) {
                $.ajax({
                    url: '/send-competition',
                    method: 'POST',
                    processData:false,
                    contentType:false,
                    data: data3,
                    success: function(response) {
                        if(response) {
                            showMsg('.comp3-success');
                        }
                    },
                    error: function() {
                        errorMsg('.comp3-error');
                    }
                });
            }
        });
        // end send comp3

        function showMsg(message) {
            setTimeout(function () {

                setTimeout(function () {
                    $(message).delay(500).fadeIn(500);
                    $('input, textarea, checkbox').val('');
                }, 500);

                setTimeout(function () {
                        $(message).delay(2000).fadeOut(1000);
                }, 2000);

            }, 500);
        }

        function errorMsg(message) {
            setTimeout(function () {

                setTimeout(function () {
                    $(message).delay(500).fadeIn(500);
                    $('input, textarea, checkbox').val('');
                }, 500);

                setTimeout(function () {
                        $(message).delay(2000).fadeOut(1000);
                }, 2000);

            }, 500);
        }

        // send quiz
        var quizForm = $('#quiz-form');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        quizForm.on('submit', function(e) {
            e.preventDefault();

            $('#email-quiz').removeClass('error-input');
            $('#email-quiz').closest(".send-score").removeClass('error');
            if ($('#email-quiz').val() == "") {
                $('#email-quiz').closest(".send-score").addClass('error');
                $('#email-quiz').addClass('error-input');
            }
            if(IsEmail($('#email-quiz').val())==false){
                $('#email-quiz').closest(".send-score").addClass('error');
                $('#email-quiz').addClass('error-input');
            }

            var data = {
                respect: $('input[name="respect"]').val(),
                spirit: $('input[name="spirit"]').val(),
                growth: $('input[name="growth"]').val(),
                simplicity: $('input[name="simplicity"]').val(),
                lovecustomer: $('input[name="lovecustomer"]').val(),
                email: $('#email-quiz').val()
            };

            if (!quizForm.find('.error-input:visible').length) {
                $.ajax({
                    url: '/send-quiz',
                    type: 'POST',
                    data: data,
                    success: function(response) {
                        if(response) {
                            setTimeout(function () {

                                setTimeout(function () {
                                    $('.quiz-success').delay(500).fadeIn(500);
                                    $('input[type=email]').val('');
                                }, 500);
                
                                setTimeout(function () {
                                        $('.quiz-success').delay(2000).fadeOut(1000);
                                }, 2000);
                
                            }, 500);
                        }
                    },
                    error: function() {
                        setTimeout(function () {

                            setTimeout(function () {
                                $('.quiz-error').delay(500).fadeIn(500);
                                $('input[type=email]').val('');
                            }, 500);
            
                            setTimeout(function () {
                                    $('.quiz-error').delay(2000).fadeOut(1000);
                            }, 2000);
            
                        }, 500);
                    }
                });
            }
        });
        // end send quiz

        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(!regex.test(email)) {
               return false;
            } else {
               return true;
            }
        }

        function IsUrl(url) {
            var expression = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})/gi;
            var regex = new RegExp(expression);
            if(!regex.test(url)) {
                return false;
            } else {
                return true;
            }
        }

    }
}

document.addEventListener('DOMContentLoaded', () => {
    new App();
});

