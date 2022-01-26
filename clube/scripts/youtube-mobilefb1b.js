var muteStatus;
var c = 0;
var nw = true;
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        videoId: "bGyBKbH6xJc",
        playerVars: {
            autoplay: 1,
            cc_load_policy: 0,
            controls: 0,
            disablekb: 1,
            fs: 0,
            playsinline: 1,
            modestbranding: 1,
            iv_load_policy: 3,
            rel: 0,
            showinfo: 0,
            host: 'https://www.youtube.com'
        },
        events: {
            onReady: onPlayerReady,
            onStateChange: onPlayerStateChange,
            onError: onPlayerError
        }
    });

    player2 = new YT.Player('player2', {
        videoId: "3RW-IGJVUmI",
        playerVars: {
            autoplay: 1,
            cc_load_policy: 0,
            controls: 0,
            disablekb: 1,
            fs: 0,
            playsinline: 1,
            modestbranding: 1,
            iv_load_policy: 3,
            rel: 0,
            showinfo: 0,
            host: 'https://www.youtube.com'
        },
        events: {
            onReady: onPlayerReady2,
            onStateChange: onPlayerStateChange2,
            onError: onPlayerError2
        }
    });

    player3 = new YT.Player('player3', {
        videoId: "xiTPI8ltv6Q",
        playerVars: {
            autoplay: 1,
            cc_load_policy: 0,
            controls: 0,
            disablekb: 1,
            fs: 0,
            playsinline: 1,
            modestbranding: 1,
            iv_load_policy: 3,
            rel: 0,
            showinfo: 0,
            host: 'https://www.youtube.com'
        },
        events: {
            onReady: onPlayerReady3,
            onStateChange: onPlayerStateChange3,
            onError: onPlayerError3
        }
    });
}

function mutevid() {
    player.mute();
    player.setVolume(0);
    muteStatus = 1;
}

function unmutevid() {
    player.unMute();
    player.setVolume(100);
    muteStatus = 0;
}

function resetvid() {
    $("#loadingVideo").hide();
    $(".cov").show();
    player.pauseVideo();
    unmutevid();
    player.seekTo(0);
}

function onPlayerReady() {
    mutevid();
    if (nw) {
        player.seekTo(0);
        nw = false;
    }
    player.playVideo();
}

function onPlayerError(e) {
    player.stopVideo();
    $(".cov").css("background-image", "url('imagens/alt-player-continue-2-m.png?v=3')");
    $(".cov").show();
    $("#loadingVideo").hide();
    $("#cfs").hide();
}

function onPlayerStateChange(e) {
    if (e.data === -1) {
        c++;
        if (c > 1) {
            setTimeout(function() {
                if (player.getPlayerState() === -1) {
                    resetvid();
                }
            }, 3500);
        }
    }
    if (e.data === 1) {
        $("#loadingVideo").hide();
        $(".cov").hide();
        $(".cov").css("background-image", "url('imagens/alt-player-continue-2-m.png?v=3')");
        if (muteStatus == 1) {
            $("#cfs").show();
        } else {
            $("#cfs").hide();
            unmutevid();
        }
    }
    if (e.data === 2) {
        $("#loadingVideo").hide();
        $("#cfs").hide();
        $(".cov").show();
        unmutevid();
    }
    if (e.data === 3) {}
    if (e.data === 0 || e.data === 5) {
        $("#loadingVideo").hide();
        $("#cfs").hide();
        $(".cov").css("background-image", "url('imagens/alt-player-continue-2-m.png?v=3')");
        $(".cov").show();
    }
}
$(".cov").click(function() {
    player.playVideo();

});
$(".covall").click(function() {
    player.pauseVideo();
    $("#cfs").hide();
    $(".cov").show();

  
});
$("#cfs").click(function() {
    unmutevid();
  $(".cov").hide();
    $("#cfs").hide();
	 player.playVideo();
	 
});

function updateTimerDisplay() {
    $('#current-time').text(formatTime(player.getCurrentTime()));
    $('#duration').text(formatTime(player.getDuration()));
}

function formatTime(time) {
    time = Math.round(time);
    var minutes = Math.floor(time / 60),
        seconds = time - minutes * 60;
    seconds = seconds < 10 ? '0' + seconds : seconds;
    return minutes + ":" + seconds;
}
$('#progress-bar').on('mouseup touchend', function(e) {
    var newTime = player.getDuration() * (e.target.value / 100);
    player.seekTo(newTime);
});

function updateProgressBar() {
    $('#progress-bar').val((player.getCurrentTime() / player.getDuration()) * 100);
}

function preload(arrayOfImages) {
    $(arrayOfImages).each(function() {
        $('<img />').attr('src', this).appendTo('body').css('display', 'none');
    });
}

