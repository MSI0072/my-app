<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>PELL DOWNLOADER</title>
    <meta name="description" content="PELL DOWNLOADER - TIKTOK NO WM, FACEBOOK, TWITTER, INSTAGRAM, YOUTUBE MP3 / MP4 DOWNLOADER" />
    <meta name="author" content="PELL DOWNLOADER">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://pell-downloader.herokuapp.com/ico.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"/>

    <script src="VideoInfo.js"></script>
    <script src="InfoViewer.js"></script>
    <script src="processURL.js"></script>
    <script src="urlform.js"></script>

</head>

<body>
    <!--Fork me ribbon-->


    <div class="container">

        <div class="page-header">
          <h1><small>PELL DOWNLOADER</small></h1>
        </div>

        <form class="form-inline" name="URLform" id="URLform">
            <h2 class="form-signin-heading">Enter the URL</h2>
            <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Select Type <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="ytmp3">Youtube MP3</a></li>
                        <li><a href="javascript: setURL(this.form,'https://www.youtube.com/watch?v=36lSzUMBJnc')">Youtube MP4</a></li>
                        <li><a href="javascript: setURL(this.form,'https://fb.watch/39qDuskS0u/')">Facebook</a></li>
                        <li><a href="javascript: setURL(this.form,'https://twitter.com/mar0221_/status/1352598464924798978?s=20')">Twitter</a></li>
                        <li><a href="javascript: setURL(this.form,'http://vt.tiktok.com/rpyyyu/')">Tiktok</a></li>
                    </ul>
                </span>
                <input  class="span3 form-control" type="text" name="url" placeholder="Webpage URL"/>
                <span class="input-group-btn">
                    <button class="btn  btn-primary" type="button" onClick="processURLform(this.form)">Get videos</button>
                </span>
            </div>
        </form>

        <div id="main-part">

            <div id="videos-section">
                <!-- Will be used when videos are processed -->
            </div>
        </div>

        <hr></hr>
        <div class="powered-by-youtube-dl">
            <p><a href="https://yt-dl.org/">Powered by youtube-dl</a></p>
        </div>

        <div id="FOOTER">
        <hr/>
        <footer>
            <p>&copy; <a href="https://github.com/MSI0072" alt="jaimeMF GitHub profile">MSI0072</a></p>
            <p>Uses <a href="https://getbootstrap.com/">Bootstrap</a>.</p>
        </footer>
        </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </body>

</html>
