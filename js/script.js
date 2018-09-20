$(document).ready(function() {
$('.page-main-menu li a').click(function() {
    $('.page-main-menu li').removeClass('.selected');
    $(this).parent('li').addClass('.selected');

imgWidth = '240px';
imgHeight = '265px';
thisItem = $(this).attr('rel');
if (thisItem!= "all") {
    $('.page-main-item li[rel = '+ thisItem +']').stop()
        .animate({'width' : imgWidth,
            'height' : imgHeight,
            'opacity' : 1,
            'marginRight' : '15px',
            'marginLeft' : '15px',
        });
    $('.page-main-item li[rel!= '+ thisItem +']').stop()
        .animate({'width' : 0,
            'height' : 0,
            'opacity' : 0,
            'marginRight' : 0,
            'marginLeft' : 0,
        });
} else {
    $('.page-main-item li').stop()
        .animate({'width' : imgWidth,
            'height' : imgHeight,
            'opacity' : 1,
            'marginRight' : '15px',
            'marginLeft' : '15px', 
        });
}
});
})

var video;
var duration;
var startDuration;
var volume;

window.onload = function() {
    video = document.getElementById("video");
    duration = document.getElementById("ratio");
    volume = document.getElementById("volume");
    duration.value = 0;
    duration.min = 0;
    duration.max = video.duration;
}
function PlayPauseVideo() {
    if (video.paused) {
      video.play();
      startDuration = setInterval(initDuration, 1000/66);
    } else {
      video.pause();
      clearInterval(startDuration);
    }
};

function changeVolume() {
    video.volume = volume.value/100;
}

function movedRange() {
    video.currentTime = duration.value;
    PlayPauseVideo();
}

function fullScreen() {
    video.webkitEnterFullScreen();
}

function initDuration() {
    duration.value = video.currentTime;
}

function clearAnimateRange() {
    clearInterval(startDuration);
    if (video.paused) {

    } else {
    PlayPauseVideo();
    }
}

$(document).ready(function() {
    $(".btn__play").click(function() {
        $(".btn__play").hide(),
        $(".btn__pause").show();
    });
    $(".btn__pause").click(function() {
        $(".btn__pause").hide(),
        $(".btn__play").show();
    });
});

function modal(id) {
    var $body = $(window.document.body);
    var bodyWidth = $body.innerWidth();
    var modal = document.getElementById(id);
    modal.style.display = "flex";
    $body.css("overflow", "hidden");
    $body.css("marginRight", "-=" + (bodyWidth - $body.innerWidth()));

    window.onclick = function(e) {
        if (e.target == modal) {
            modal.style.display = "none";
            $body.css("overflow", "");
            $body.css("marginRight", "");
        }
    }
};