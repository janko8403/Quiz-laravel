export default function quiz() {

    var nextButton = document.querySelector('.next-button'),
        startButton = document.querySelector('.start-quiz'),
        formContainer = document.querySelector('.form-container'),
        startContainer = document.querySelector('.start-container'),
        input = document.querySelectorAll('.form-check-input'),
        buttonQuiz = document.querySelector('.btn-submit-quiz'),
        scoreContainer = document.querySelector('.score-container'),
        addNum = document.querySelector('.add_num'),
        quizResult = document.querySelector('.quiz-result'),
        num = 2;

    if (startButton) {
        startButton.addEventListener('click', function () {
            startContainer.style.display = 'none';
            formContainer.style.display = 'block';

            quizResult.style.display = 'none';

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/quiz/start',
                data: [],
                success: function () {

                },
            });
        });
    }
    if (nextButton) {
        nextButton.classList.add('disabled');
        nextButton.addEventListener('click', function () {

            addNum.innerText = num++;

            this.classList.add('disabled');
            buttonQuiz.classList.add('disabled');

            var listContainer = document.getElementById('listContainer');
            var listItem = listContainer.getElementsByTagName('li');

            for (var i = 0, c = 0; i < listItem.length - 1; i++) {
                if (listItem[i].style.display == 'list-item') {
                    listItem[i].style.display = 'none';
                    listItem[i + 1].style.display = 'list-item';
                    if (i == listItem.length - 2) {

                        this.style.display = 'none';
                        buttonQuiz.classList.remove('hide-submit');
                    }
                    break;
                }
            }
        });
    }


    for (var n = 0; n < input.length; n++) {
        input[n].addEventListener('change', function () {
            nextButton.classList.remove('disabled');
            buttonQuiz.classList.remove('disabled');
        });
    }

    // count quiz chart
    var respect = document.querySelector('.respect'),
        respect_span = document.querySelector('.respect > .num'),
        spirit = document.querySelector('.spirit'),
        spirit_span = document.querySelector('.spirit > .num'),
        growth = document.querySelector('.growth'),
        growth_span = document.querySelector('.growth > .num'),
        simplicity = document.querySelector('.simplicity'),
        simplicity_span = document.querySelector('.simplicity > .num'),
        lovecustomer = document.querySelector('.lovecustomer'),
        lovecustomer_span = document.querySelector('.lovecustomer > .num'),
        step1 = document.querySelectorAll('input[name="step1"]'),
        step2 = document.querySelectorAll('input[name="step2"]'),
        step3 = document.querySelectorAll('input[name="step3"]'),
        step4 = document.querySelectorAll('input[name="step4"]'),
        step5 = document.querySelectorAll('input[name="step5"]'),
        step6 = document.querySelectorAll('input[name="step6"]'),
        step7 = document.querySelectorAll('input[name="step7"]'),
        step8 = document.querySelectorAll('input[name="step8"]'),
        step9 = document.querySelectorAll('input[name="step9"]'),
        step10 = document.querySelectorAll('input[name="step10"]'),
        step_1 = 0,
        step_2 = 0,
        step_3 = 0,
        step_4 = 0,
        step_5 = 0,
        step_6 = 0,
        step_7 = 0,
        step_8 = 0,
        step_9 = 0,
        step_10 = 0,
        respect_input = document.querySelector('input[name="respect"]'),
        spirit_input = document.querySelector('input[name="spirit"]'),
        growth_input = document.querySelector('input[name="growth"]'),
        simplicity_input = document.querySelector('input[name="simplicity"]'),
        lovecustomer_input = document.querySelector('input[name="lovecustomer"]');


    for (var i = 0; i < step1.length; i++) {
        step1[i].addEventListener('change', function () {
            step_1 = parseInt(this.value);
        });
    }

    for (var i = 0; i < step2.length; i++) {
        step2[i].addEventListener('change', function () {
            step_2 = parseInt(this.value);
        });
    }

    for (var i = 0; i < step3.length; i++) {
        step3[i].addEventListener('change', function () {
            step_3 = parseInt(this.value);
        });
    }

    for (var i = 0; i < step4.length; i++) {
        step4[i].addEventListener('change', function () {
            step_4 = parseInt(this.value);
        });
    }

    for (var i = 0; i < step5.length; i++) {
        step5[i].addEventListener('change', function () {
            step_5 = parseInt(this.value);
        });
    }

    for (var i = 0; i < step6.length; i++) {
        step6[i].addEventListener('change', function () {
            step_6 = parseInt(this.value);
        });
    }

    for (var i = 0; i < step7.length; i++) {
        step7[i].addEventListener('change', function () {
            step_7 = parseInt(this.value);
        });
    }

    for (var i = 0; i < step8.length; i++) {
        step8[i].addEventListener('change', function () {
            step_8 = parseInt(this.value);
        });
    }

    for (var i = 0; i < step9.length; i++) {
        step9[i].addEventListener('change', function () {
            step_9 = parseInt(this.value);
        });
    }

    for (var i = 0; i < step10.length; i++) {
        step10[i].addEventListener('change', function () {
            step_10 = parseInt(this.value);
        });
    }

    if (buttonQuiz) {
        buttonQuiz.addEventListener('click', function () {
            formContainer.style.display = 'none';
            scoreContainer.style.display = 'block';

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/quiz/end',
                data: [],
                success: function () {

                },
            });

            respect_span.innerText = step_1 + step_6;
            respect_input.value = step_1 + step_6;
            respect.setAttribute('style', '--size: calc(' + (step_1 + step_6) * 10 + '/ 35 );');
            spirit_span.innerText = step_2 + step_7;
            spirit_input.value = step_2 + step_7;
            spirit.setAttribute('style', '--size: calc(' + (step_2 + step_7) * 10 + '/ 35 );');
            growth_span.innerText = step_3 + step_8;
            growth_input.value = step_3 + step_8;
            growth.setAttribute('style', '--size: calc(' + (step_3 + step_8) * 10 + '/ 35 );');
            simplicity_span.innerText = step_4 + step_9;
            simplicity_input.value = step_4 + step_9;
            simplicity.setAttribute('style', '--size: calc(' + (step_4 + step_9) * 10 + '/ 35 );');
            lovecustomer_span.innerText = step_5 + step_10;
            lovecustomer_input.value = step_5 + step_10;
            lovecustomer.setAttribute('style', '--size: calc(' + (step_5 + step_10) * 10 + '/ 35 );');

        });
    }


}
