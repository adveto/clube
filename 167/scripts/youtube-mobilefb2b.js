

var muteStatus2;
var c2 = 0;
var nw2 = true;
var tag2 = document.createElement('script2');
tag2.src = "https://www.youtube.com/iframe_api";
var firstScriptTag2 = document.getElementsByTagName('script')[0];
firstScriptTag2.parentNode.insertBefore(tag2, firstScriptTag2);
var player2;

function mutevid2() {
    player2.mute();
    player2.setVolume(0);
    muteStatus2 = 1;
}

function unmutevid2() {
    player2.unMute();
    player2.setVolume(100);
    muteStatus2 = 0;
}

function resetvid2() {
    $("#loadingVideo2").hide();
    $(".cov2").show();
    player2.pauseVideo();
    unmutevid2();
    player2.seekTo(0);
}

function onPlayerReady2() {  
}

function onPlayerError2(e) {
    player2.stopVideo();
    $(".cov2").css("background-image", "url('imagens/alt-player-continue-2-m2.png?v=2')");
    $(".cov2").show();
    $("#loadingVideo2").hide();
    $("#cfs2").hide();
}

function onPlayerStateChange2(e) {
    if (e.data === -1) {
        c2++;
        if (c2 > 1) {
            setTimeout(function() {
                if (player2.getPlayerState() === -1) {
                    resetvid2();
                }
            }, 3500);
        }
    }
    if (e.data === 1) {
        $("#loadingVideo2").hide();
        $(".cov2").hide();
        $(".cov2").css("background-image", "url('imagens/alt-player-continue-2-m2.png?v=2')");
        if (muteStatus2 == 1) {
            $("#cfs2").show();
        } else {
            $("#cfs2").hide();
            unmutevid2();
        }
    }
    if (e.data === 2) {
        $("#loadingVideo2").hide();
        $("#cfs2").hide();
        $(".cov2").show();
        unmutevid2();
    }
    if (e.data === 3) {}
    if (e.data === 0 || e.data === 5) {
        $("#loadingVideo2").hide();
        $("#cfs2").hide();
        $(".cov2").css("background-image", "url('imagens/alt-player-continue-2-m2.png?v=2')");
        $(".cov2").show();
    }
}
$(".cov2").click(function() {
    player2.playVideo();
    $(".cov2").hide();
  $(".video-con2").css('margin', '0');
});
$(".covall2").click(function() {
    player2.pauseVideo();
    $("#cfs2").hide();
    $(".cov2").show();
  $(".video-con2").css('margin', '0 15px');
  
});
$("#cfs2").click(function() {
    unmutevid2();
  $(".cov2").hide();
    $("#cfs2").hide();
     player2.playVideo();
     
});

function updateTimerDisplay() {
    $('#current-time2').text(formatTime(player2.getCurrentTime()));
    $('#duration2').text(formatTime(player2.getDuration()));
}

function formatTime(time) {
    time = Math.round(time);
    var minutes = Math.floor(time / 60),
        seconds = time - minutes * 60;
    seconds = seconds < 10 ? '0' + seconds : seconds;
    return minutes + ":" + seconds;
}
$('#progress-bar2').on('mouseup touchend', function(e) {
    var newTime2 = player2.getDuration() * (e.target.value / 100);
    player2.seekTo(newTime2);
});

function updateProgressBar() {
    $('#progress-bar2').val((player2.getCurrentTime() / player2.getDuration()) * 100);
}

function preload(arrayOfImages) {
    $(arrayOfImages).each(function() {
        $('<img />').attr('src', this).appendTo('body').css('display', 'none');
    });
}

/*
preload(['../images.video-cover-final.gif', '/i/video-sound.png', '/i/video-finished.jpg', '/i/video-cover.jpg', '/i/dim-popup.jpg', '/i/ba1.jpg', '/i/ba2.jpg', '/i/loading.gif', '/i7/coupon-c.png', '/i7/ticket-c.png']);*/
     
     