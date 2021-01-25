<?php
//ambil data json dari file

        if (isset($_GET['link']))
        {
            $link = $_GET['link'];

            $gabunglink = "https://arugaz.my.id/api/media/ytmus?url={$link}";

            # ambil data json dari $alamatAPI
            $data = file_get_contents($gabunglink);

            # parsing variabel $data ke dalam array
            $downloader = json_decode($data);
            $judul = $downloader->titleInfo;
            if ($judul == null)
            {
                $title = "Video Not Found, Check your url!";
                $thumbnail = "images/404-graphic.jpg";
                $url = "#";
            }
            else
            {
                $title = $downloader
                    ->titleInfo;
                $thumbnail = $downloader
                    ->getImages;
                $url = $downloader
                    ->getAudio;
            }
        }
?>
<!DOCTYPE html>
<html>
<head>
    <title>PELL DOWNLOADER</title>
    <meta name="description" content="PELL DOWNLOADER - TIKTOK NO WM, FACEBOOK, TWITTER, INSTAGRAM, YOUTUBE MP3 / MP4 DOWNLOADER" />
    <meta name="author" content="PELL DOWNLOADER">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://pell-downloader.herokuapp.com/ico.png">
</head>
<style>
    body
    {
        font-family: Arial, Helvetica, sans-serif;
        background-color: black;
    }

    div
    {
        background-color: white;
        width: 55%;
        margin: auto;/*supaya ke tengah*/
        padding: 10px;
        margin-bottom: 10px;
    }

    div h2
    {
        color: darkorange;
    }

    div img
    {
        width: 100%;
        height: 400px;
    }

    a
    {
        text-decoration: none;
        background-color: crimson;
        color: white;
        padding: 8px;
        display: block;/*menjadikan elemen tipe blok*/
        width: 120px;
        text-align: center;
        border-radius: 8px; 

    }

    a:hover
    {
        background-color: black;
        transition-duration: 2s;
        transition-property: all;/*ms edge*/
        width: 150px;
        padding: 15px;
    }
</style>
<body>

    <div>
        <img src="<?php echo $thumbnail;?>">
        <h2><?php echo $title;?></h2>
        <a href="<?php echo $url;?>">Download</a><br>
        <a href="http://pell-tools.herokuapp.com/downloader/">Back</a>
    </div>

</body>
</html>
