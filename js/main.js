$(document).ready(function(){
    //navbar fixed

    var height = $('.header-top').height();

    $(window).scroll(function(){
        if($(this).scrollTop() > height){
            $('.header-bottom').addClass('fixed');
        }else {
            $('.header-bottom').removeClass('fixed');
        }
    });

    //scroll top button
    $(window).scroll(function(){
        if($(window).scrollTop()>300){
            $("#scrollTop").css({
                "opacity":"1", "pointer-events":"auto"
            });
        } else{
            $("#scrollTop").css({
                "opacity":"0", "pointer-events":"none"
            })
        }
    });
    //gagijev dodatak da bi dugme radilo nakon ispravke brojcanika
    $('#scrollTop').click(function(){
        $('html').animate({scrollTop:0},500);
    });


    //modal advertise
    // $(window).on('load', function() {
    //     $('#modaAd').modal('show');
    // });


    $(window).scroll(function() {
        if ($(document).scrollTop() > 1000 && $("#modaAd").attr("displayed") === "false") {
          $('#modaAd').modal('show');
          $("#modaAd").attr("displayed", "true");
        }
    });

    //counter1 mine work
    // $(".counter-one").counterUp({
    //     delay: 10,
    //     time: 1200
    // });

    // $('#scrollTop').click(function(){
    //     $('html').animate({scrollTop:0},500);
    // });

    //counter 2 gagi

    // $('.counter-one').each(function () {
    //     $(this).prop('Counter', 0).animate({
    //         Counter: $(this).text()
    //     }, {

    //         //chnage count up speed here
    //         duration: 4000,
    //         easing: 'swing',
    //         step: function (now) {
    //             $(this).text(Math.ceil(now));
    //         }
    //     });
    // });

    // counter 3 last gagi

    $(window).scroll(function () {
        $( ".counter-icon" ).each(function() {
            isOnView = isElementVisible($(this));
            console.log(isOnView + " kada je true pusti ga ");
            if(isOnView){
                //counter
                $(".counter-one").counterUp({
                    delay: 10,
                    time: 1200
                });

                $('.header-bottom').removeClass('fixed');

                $(window).off('scroll'); // scroll off

            }
        });
    });

    function isElementVisible($elementToBeChecked)
    {
        console.log($(window).scrollTop());
        var TopView = $(window).scrollTop();
        var BotView = TopView + $(window).height();
        var TopElement = $elementToBeChecked.offset().top;
        var BotElement = TopElement + $elementToBeChecked.height();
        console.log(BotElement + " da ");

        return ((BotElement <= BotView) && (TopElement >= TopView));
    }

});    


//section 4 first try to show text on scroll.Update WORKING GOOD
const faders = document.querySelectorAll('.fade-in');

const appearOptions = {
    treshold: 1,
    rootMargin: "0px 0px -300px 0px"  //when to start to show
};

const appearOnScroll = new IntersectionObserver

(function(entries, appearOnScroll) {
    entries.forEach(entry =>{
        if (!entry.isIntersecting){
            return;
        } else {
            entry.target.classList.add('appear');
            appearOnScroll.unobserve(entry.target);
        }
    });
},appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader);
});


//sale page. Function for small jpg to become big

function changePhoto(smallImg){
    var fullImg = document.getElementById("imageBox");
    fullImg.src = smallImg.src; 
}





