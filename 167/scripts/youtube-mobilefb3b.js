

var muteStatus3;
var c3 = 0;
var nw3 = true;
var tag3 = document.createElement('script3');
tag3.src = "https://www.youtube.com/iframe_api";
var firstScriptTag3 = document.getElementsByTagName('script')[0];
firstScriptTag3.parentNode.insertBefore(tag3, firstScriptTag3);
var player3;

function mutevid3() {
    player3.mute();
    player3.setVolume(0);
    muteStatus3 = 1;
}

function unmutevid3() {
    player3.unMute();
    player3.setVolume(100);
    muteStatus3 = 0;
}

function resetvid3() {
    $("#loadingVideo3").hide();
    $(".cov3").show();
    player3.pauseVideo();
    unmutevid3();
    player3.seekTo(0);
}

function onPlayerReady3() {
}

function onPlayerError3(e) {
    player3.stopVideo();
    $(".cov3").css("background-image", "url('imagens/alt-player-continue-2-m3.png?v=2')");
    $(".cov3").show();
    $("#loadingVideo3").hide();
    $("#cfs3").hide();
}

function onPlayerStateChange3(e) {

    if (e.data === -1) {
        c3++;
        if (c3 > 1) {
            setTimeout(function() {
                if (player3.getPlayerState() === -1) {
                    resetvid3();
                }
            }, 3500);
        }
    }

    if (e.data === 1) {
        $("#loadingVideo3").hide();
        $(".cov3").hide();
        $(".cov3").css("background-image", "url('imagens/alt-player-continue-2-m3.png?v=2')");
        if (muteStatus3 == 1) {
            $("#cfs3").show();
        } else {
            $("#cfs3").hide();
            unmutevid3();
        }
    }

    if (e.data === 3) {
        $("#loadingVideo3").hide();
        $("#cfs3").hide();
        $(".cov3").show();
        unmutevid3();
    }

    if (e.data === 3) {}

    if (e.data === 0 || e.data === 5) {
        $("#loadingVideo3").hide();
        $("#cfs3").hide();
        $(".cov3").css("background-image", "url('imagens/alt-player-continue-2-m3.png?v=2')");
        $(".cov3").show();
    }
}

$(".cov3").click(function() {
    player3.playVideo();
    $(".cov3").hide();
  $(".video-con3").css('margin', '0');
});

$(".covall3").click(function() {
    player3.pauseVideo();
    $("#cfs3").hide();
    $(".cov3").show();
  $(".video-con3").css('margin', '0 15px');
  
});
$("#cfs3").click(function() {
    unmutevid3();
  $(".cov3").hide();
    $("#cfs3").hide();
     player3.playVideo();
     
});

function updateTimerDisplay() {
    $('#current-time3').text(formatTime(player3.getCurrentTime()));
    $('#duration3').text(formatTime(player3.getDuration()));
}

function formatTime(time) {
    time = Math.round(time);
    var minutes = Math.floor(time / 60),
    seconds = time - minutes * 60;
    seconds = seconds < 10 ? '0' + seconds : seconds;
    return minutes + ":" + seconds;
}

$('#progress-bar3').on('mouseup touchend', function(e) {
    var newTime3 = player3.getDuration() * (e.target.value / 100);
    player3.seekTo(newTime3);
});

function updateProgressBar() {
    $('#progress-bar3').val((player3.getCurrentTime() / player3.getDuration()) * 100);
}

function preload(arrayOfImages) {
    $(arrayOfImages).each(function() {
        $('<img />').attr('src', this).appendTo('body').css('display', 'none');
    });
}
