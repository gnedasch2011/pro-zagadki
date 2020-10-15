$(document).on('click', '.openAnswer', function (e) {
    e.preventDefault();
    console.log($(this));
    $(this).fadeOut();
    $(this).next().fadeIn();
})