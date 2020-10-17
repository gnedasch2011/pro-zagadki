$(document).on('click', '.openAnswerJs', function (e) {
    e.preventDefault();
    console.log($(this));
    $(this).fadeOut();
    $(this).next().fadeIn();
})