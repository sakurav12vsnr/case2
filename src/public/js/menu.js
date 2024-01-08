$(".menu-btn").click(function () {
    $(this).toggleClass('active');
        $(".nav-content").toggleClass('panelactive');
});

$(".nav-content a").click(function () {
    $(".menu-btn").removeClass('active');
    $(".nav-content").removeClass('panelactive');
})