    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/rotate.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/masonry.js"></script>
    <script src="js/masonry-4-col.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="videos/libs/swfobject.js"></script>
    <script src="videos/libs/modernizr.video.js"></script>
    <script src="videos/libs/video_background.js"></script>
    <script>
jQuery(document).ready(function($) {
    var Video_back = new video_background($("#home"), {
        "position": "absolute", //Follow page scroll
        "z-index": "-1", //Behind everything
        "loop": true, //Loop when it reaches the end
        "autoplay": true, //Autoplay at start
        "muted": true, //Muted at start
        "mp4": "videos/video.mp4", //Path to video mp4 format
        "video_ratio": 1.7778, // width/height -> If none provided sizing of the video is set to adjust
        "fallback_image": "images/dummy.png", //Fallback image path
        "priority": "html5" //Priority for html5 (if set to flash and tested locally will give a flash security error)
    });
});
    </script>
    </body>

    </html>