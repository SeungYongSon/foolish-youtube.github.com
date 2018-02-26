<?php

if (isset($_GET['search'])){
    $searchString   = $_POST['searchString'];
    $correctString  = str_replace(" ","+",$searchString);
    $youtubeUrl = "https://www.youtube.com/results?search_query=" .urlencode($_GET['search']);
    $getHTML        = file_get_contents($youtubeUrl);
    $pattern        = '/<a href="\/watch\?v=(.*?)"/i';

    if(preg_match($pattern, $getHTML, $match)){
            $videoID    = $match[1];
    } else {
            echo "Something went wrong!";
            exit;
    }

	echo '
    <div data-video = "'.$videoID.'"  
         data-startseconds = "0%"         
         data-endseconds = "100%"    
         data-height = "100%" 
         data-width = "100%" 
         id = "youtube-player">
    </div>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script type="text/javascript">
	function onYouTubeIframeAPIReady(){
        var ctrlq = document.getElementById("youtube-player");
        var player = new YT.Player(\'youtube-player\', {
			height: ctrlq.dataset.height,
			width: ctrlq.dataset.width,
			videoId: ctrlq.dataset.video,
			startSeconds: ctrlq.dataset.startseconds,
			endSeconds: ctrlq.dataset.endseconds,
			events: {
				\'onReady\': onPlayerReady,
				\'onStateChange\': onPlayerStateChange,
				\'onError\': function(e) {
					location.replace("https://www.youtube.com/watch?v='.$videoID.'");
				}
			},
			playerVars: {
				\'rel\': 0,
				\'modestbranding\': 1,
				\'hd\': 1,
				\'showinfo\': 0,
				\'controls\': 1,
				\'iv_load_policy\': 3,
				\'wmode\': \'transparent\',
				\'autohide\': 1, 
				\'autoplay\': 1,
			}
        });
	}
    // autoplay video
	function onPlayerReady(event) {
		event.target.setLoop(true);
	}

      // when video ends
      function onPlayerStateChange(event) {
        if (event.data == 5) {
			event.target.playVideo();
        }
        if(event.data === 0) {  
			event.target.playVideo();
        }
      }
    </script>
	';
}
?>