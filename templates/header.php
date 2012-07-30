<html>
<head>
        <title>Hugo Da Rosa.com</title>

        <link rel="stylesheet" href="css/master.css">
        <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="inc/slidemenu/style.css">
        <link rel="stylesheet" href="inc/twitter/twitter.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="inc/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="inc/common.js"></script>
        <script type="text/javascript" src="inc/slidemenu/menu.js"></script>
        <script type="text/javascript" src="inc/twitter/twitter.js"></script>
        <script type="text/javascript"> 
                $(document).ready(function() {
                        $("#twitter").getTwitter({
                                userName: "hoog1e",
                                numTweets: 3,
                                loaderText: "Loading tweets...",
                                slideIn: true,
                                slideDuration: 750,
                                showHeading: true,
                                headingText: "",
                                showProfileLink: true,
                                showTimestamp: true
                        });
                });
        </script>
        <script type="text/javascript" src="inc/audio-player/audio-player.js"></script>					<!-- // Flash Audio Player JS-->
	<script type="text/javascript">  
		AudioPlayer.setup("inc/audio-player/player.swf", {  
			width: 250,
			initialvolume: 80,
			autostart: "no",
			transparentpagebg: "yes"   
		});  
	</script>
        <script type="text/javascript" src="inc/jquery.validate.pack.js"></script>						<!-- // Form Validation -->
        <script type="text/javascript">
        $(document).ready(function(){
                $("#contactform").validate();
        });
        </script>
        
</head>


<body>
        
        <div id="container">
                
                <a href="<?=$_SERVER['SELF']?>"><div class="header"></div></a>
                
                <div class="bg1 rotating-item"></div>
                <div class="bg2 rotating-item"></div>
                <div class="bg3 rotating-item"></div>
                <div class="bg4 rotating-item"></div>
                <div class="bg5 rotating-item"></div>
                
                <div class="content" id="pageContent">