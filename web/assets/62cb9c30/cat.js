/*
 *  Yihai
 *
 *  Copyright (c) 2019, CodeUP.
 *  @author  Upik Saleh <upik@codeup.id>
 */
"use strict";
document.addEventListener('contextmenu', function(){event.preventDefault();});
if (typeof codeup == "undefined" || !codeup) {
    var codeup = {};
}
var $ = window.jQuery;
codeup.cat = {
    _periodId: null,
    _questions: {},
    _answers: {},
    _is_sending_answer_pending: false,
    _current_question: 1,
    _url_api: "",
    init: function (periodId, questions, answers) {
        if (!answers) answers = {};
        if (!questions) questions = {};
        this._periodId = periodId;
        this._questions = questions;
        this._answers = answers;
        var _self = this;
        // init local answers
        if (this.getAnswersLocal() !== null) {
            this._answers = $.extend(this._answers, this.getAnswersLocal());
        }
        this.processQuestion(this._current_question);
        $('.cat-pagination-item').click(function () {
            var dataId = $(this).attr('data-no');
            _self.processQuestion(dataId);
        });
        $('.cat-pagination-top').click(function () {
            var id = $(this).attr('data-no');
            var question_length = Object.keys(_self._questions).length;
            var question_no = _self._current_question;
            if (id === 'first')
                question_no = 1;
            else if (id === 'end')
                question_no = question_length;
            else if (id === 'next') {
                if (_self._current_question < question_length) {
                    question_no = _self._current_question + 1;
                }
            } else if (id === 'prev') {
                if (_self._current_question > 1) {
                    question_no = _self._current_question - 1;
                }
            }
            _self.processQuestion(question_no);
        });
        // init answers
        $.each(answers, function (questionId, data) {
            if (!data) return;
            if (!data.notsend)
                $('.cat-pagination-item[data-id="' + questionId + '"]').removeClass('answered').removeClass('answered-notsend').addClass('answered');
            else
                $('.cat-pagination-item[data-id="' + questionId + '"]').removeClass('answered').removeClass('answered').addClass('answered-notsend');
        });
        // sync answer not send
        setInterval(codeup.cat.syncAnswer, 5000);
    },
    getApiUrl: function (path) {
        return this._url_api + path;
    },
    syncAnswer: function () {
        var _self = codeup.cat;
        $.each(_self._answers, function (i, v) {
            if (v.notsend && !_self._is_sending_answer_pending) {
                _self._is_sending_answer_pending = true;
                _self.sendAnswer(v.answer, v.questionId, v.no, {
                    'complete': function () {
                        _self._is_sending_answer_pending = false;
                    }
                });
            }
        });
    },
    sendAnswer: function (answer, questionId, questionNo, options) {
        var _self = this;
        options = (options ? options : {});
        questionNo = (questionNo ? questionNo : _self._current_question);

        function onError() {
            _self.saveAnswersLocal();
            $('.cat-pagination-item[data-no="' + questionNo + '"]').removeClass('answered').removeClass('answered-notsend').addClass('answered-notsend');
        }

        _self._answers[questionId] = {
            'answer': answer,
            'questionId': questionId,
            'no': questionNo,
            'notsend': true
        };
        return $.ajax({
            'url': this.getApiUrl('/answer'),
            'method': 'POST',
            'data': {
                'answer': answer,
                questionId: questionId,
                no: questionNo
            },
            'success': function (data) {
                if (data && data.success && data.data) {
                    _self._answers[questionId] = data.data;
                    _self.saveAnswersLocal();
                    $('.cat-pagination-item[data-no="' + questionNo + '"]').removeClass('answered').removeClass('answered-notsend').addClass('answered');
                    if (options.ondata) {
                        options.ondata();
                    }
                } else {
                    onError();
                }
            },
            'error': function (error) {
                onError();
            },
            'complete': function () {
                if (options.complete)
                    options.complete();
            }
        });
    },
    clickAnswer: function (answer, ev) {
        $('.cat-question-answer-item').removeClass('active');
        $(ev).addClass('active');
        var questionId = this._questions[this._current_question].id;
        if(this._answers[questionId] && this._answers[questionId].answer){
            if(this._answers[questionId].answer === answer)
                return ;
        }
        this.sendAnswer(answer, questionId, this._current_question)
    },
    saveAnswersLocal: function () {
        if (!window.localStorage) return;
        window.localStorage.setItem('yihai-cat-answers-' + this._periodId, JSON.stringify(this._answers));
    },
    getAnswersLocal: function () {
        if (!window.localStorage) return null;
        return JSON.parse(window.localStorage.getItem('yihai-cat-answers-' + this._periodId));
    },
    processQuestion: function (id) {
        var _self = this;
        var question = this._questions[id];
        this._current_question = parseInt(id);

        $('.cat-pagination > .cat-pagination-item').removeClass('active');
        $('.cat-pagination-item[data-no="' + id + '"]').addClass('active');
        $('#cat-question-question').html(question.question);
        var answers_html = $('<div class="cat-question-answers-list"></div>');
        $.each(question.answers, function (index, data) {
            if (data !== '' && data !== '<p><br></p>' && data !== '<p><br data-mce-bogus="1"></p>') {
                var _answer_opsi = $('<div class="cat-question-answer-opsi"></div>').text(index + '');
                var _answer_text = $('<div class="cat-question-answer-text"></div>').html(data);
                answers_html.append($('<div class="cat-question-answer-item" data-answer="' + index + '" onclick="codeup.cat.clickAnswer(\'' + index + '\',this)"></div>').append(_answer_opsi).append(_answer_text));
            }
        });
        $('#cat-question-answers').html(answers_html);
        if (_self._answers[question.id]) {
            $('.cat-question-answer-item[data-answer="' + _self._answers[question.id].answer + '"]').addClass('active');
        }
    }
};