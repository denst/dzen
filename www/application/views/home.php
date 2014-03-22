<div id="player"></div>
<form action="/signup" method="post">
    <p><button name="submit" class="btn btn-lg btn-warning" id="more-button" href="/signup" disabled="disabled">Узнать больше</button></p>
</form>
      <!--disabled="disabled">Узнать больше</a></p>-->
<script src="http://www.youtube.com/player_api"></script>
<script>

    // create youtube player
    var player;
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('player', {
          height: '480',
          width: '853',
          videoId: '<?=$settings['youtube_video_id']?>',
          events: {
            'onStateChange': onPlayerStateChange
          }
        });
    }

    // when video ends
    function onPlayerStateChange(event) {        
        if(event.data === 0) {          
            $('#more-button').removeAttr('disabled');
        }
    }
</script>