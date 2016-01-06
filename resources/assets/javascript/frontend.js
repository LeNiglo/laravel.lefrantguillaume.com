$(document).ready(function () {

    $('.experience-hover').popover();

    $('#sendmail').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();

        var $this = $(this);
        var $btn = $this.find('button');

        $btn.button('loading');

        $.ajax({
            url: "/contact",
            method: "POST",
            dataType: "json",
            data: $this.serialize()
        }).done(function (res) {
            console.log(res);
            $this.addClass('formComplete');
            $('#imgsendmail').addClass('blue2green');
        }).then(function () {
            $btn.button('reset');
        });
    });

    $('a.goto').click(function (e) {
        e.preventDefault();

        var str = $(e.target).prop('href');
        var hashtag = str.substring(str.lastIndexOf('#'));
        $('html, body').animate({scrollTop: $(hashtag).offset().top - (window.innerHeight / 3)}, 500);
        return false;
    });
});
