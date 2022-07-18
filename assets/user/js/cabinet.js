// var link1 = document.getElementById('link1')
// var link2 = document.getElementById('link2')
// var link3 = document.getElementById('link3')
// var link4 = document.getElementById('link4')

var lessonSchedule = $("#lesson-schedule").show();
var examSchedule = $("#exam-schedule").show();
var subjectList = $('#subject-list').show();
var scoreTable = $('#score-table').show();

$(document).ready(function () {
    $("#link1").click(function (e) {
        e.preventDefault();
        $("#lesson-schedule").hide();
        $("#exam-schedule").hide();
        $("#subject-list").hide();
        $("#score-table").hide();
        if (lessonSchedule == $("#lesson-schedule").show()) {
            lessonSchedule = $("#lesson-schedule").hide()
            $("#lesson-schedule").hide();
        }
    })

    $("#link2").click(function (e) {
        $("#lesson-schedule").hide();
        $("#exam-schedule").hide();
        $("#subject-list").hide();
        $("#score-table").hide();
        e.preventDefault();
        if (examSchedule == $("#exam-schedule").show()) {
            examSchedule = $("#exam-schedule").hide()
            $("#exam-schedule").hide();
        }
    })

    $("#link3").click(function (e) {
        $("#lesson-schedule").hide();
        $("#exam-schedule").hide();
        $("#subject-list").hide();
        $("#score-table").hide();
        e.preventDefault();
        if (subjectList == $("#subject-list").show()) {
            subjectList = $("#subject-list").hide()
            $("#subject-list").hide();
        }
    })

    $("#link4").click(function (e) {
        $("#lesson-schedule").hide();
        $("#exam-schedule").hide();
        $("#subject-list").hide();
        $("#score-table").hide();
        e.preventDefault();
        if (scoreTable == $("#score-table").show()) {
            scoreTable = $("#score-table").hide()
            $("#score-table").hide();
        }
    })
});


