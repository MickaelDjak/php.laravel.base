/*    Back to top button    */

let backTop = $('#gnc-back-top');

backTop.click(function(e){
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    })

});

$(window).on('scroll', function() {
    if($(this).scrollTop()>749) {
        backTop.stop().animate({opacity : 1}, 250);
    } else {
        backTop.stop().animate({opacity : 0}, 250);
    }
});
