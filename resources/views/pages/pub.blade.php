@extends('layouts.main')
@section('title', '| Pub')

@section('content')



    <style>

        li{

            list-style-type:none;

        }

        .selected{

            color:#f5861a;
            font-weight: bold ;
        }

    </style>



    <h1>OrangePub</h1>

    <?php
    $api_key = 'AIzaSyDX8gAvMcopsAvbPP8MGpKrigLwUDQNFvA';
    $playlist_id =  'PLne2rDGDXQNaJQd8y9JdSQwOlYMhvCC0v';
    $api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=25&playlistId='. $playlist_id . '&key=' . $api_key;

    $playlist = json_decode(file_get_contents($api_url));


    ?>


    <div class="container">
        <div class="row" style="margin-top: 30px">
            <div class="col-md-12 col-md-8 col-sm-8 video-container">

                <iframe src="https://youtube.com/embed"

                        <?php echo
                        $playlist->items[0]->snippet->resourceId->videoId;

                        ?>

                        frameborder="0" allowfullscreen="" width="100%" height="450px"></iframe>

                <hr>

                <h2 id="videoTitle"></h2>
                <h2 id="videoViews" class="badge badge-warning btn-orange comment-title"></h2>
                <h2 id="videoLikes" class="badge badge-warning btn-orange comment-title" ></h2>
                <h2 id="videoDislikes" class="badge badge-warning btn-orange comment-title"></h2>
                <h2 id="videoComments"class="badge badge-warning btn-orange comment-title" ></h2>
                



                <div class="container" style="width: 700px; margin-right: 150px">


                    <div id="disqus_thread"></div>
                    <script>

                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        /*
                         var disqus_config = function () {
                         this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                         this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                         };
                         */
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://emet-1.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    <script id="dsq-count-scr" src="//emet-1.disqus.com/count.js" async></script>

                </div>


            </div>

            <div class="col-xs-12 col-md-4 col-sm-4" style="padding:0px;background-color: #cc; overflow-y: auto; height: 450px ">
                <ul style="padding: 0px;">


                    <?php

                    foreach($playlist->items AS $video){

                    $title= $video->snippet->title;
                    $description = $video->snippet->description;
                    $thumbnail = $video->snippet->thumbnails->high->url;
                    $videoId = $video->snippet->resourceId->videoId;
                    $date= $video ->snippet->publishedAt;

                    $JSON = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=statistics&id=".$videoId."&key=".$api_key);
                    $json_data = json_decode($JSON, true);

                    $views= $json_data['items'][0]['statistics']['viewCount'];
                    $likes= $json_data['items'][0]['statistics']['likeCount'];
                    $dislikes= $json_data['items'][0]['statistics']['dislikeCount'];
                    $comments= $json_data['items'][0]['statistics']['commentCount'];
                    ?>

                    <li class="videoItem">

                            <span style="cursor:pointer;margin-bottom:10px;" onclick="switchVideo('<?php  echo $videoId; ?>','<?php  echo str_replace('\'','`', $title); ?>','<?php  echo $views ?>','<?php  echo $likes ?>','<?php  echo $dislikes ?>','<?php  echo $comments ?>');" >

                                <div class="col-xs-12" id="vid-<?php echo $videoId; ?>" style="padding-right:0px; padding-top:8px; padding-bottom: 8px; border-bottom: 1px solid white;">
                                    <div style="padding-left:0px" class="image col-md-4 col-lg-4">

                                        <img src="https://i.ytimg.com/vi/<?php  echo $videoId;?>/default.jpg" alt="">
                                    </div>
                                    <div class="text col-md-8 col-lg-8">

                                        <?php echo $title; ?>

                                        <p class="date" ><?php echo date('M, j, Y', strtotime($date)); ?></p>
                                    </div>

                                </div>

                            </span>
                    </li>

                    <?php } ?>
                </ul>

            </div>
        </div>
    </div>


    <script src="../../../js/jquery.min.js"></script>
    <script>


        function switchVideo(videoId, videoTitle, views, likes, dislikes, comments) {
//            var stats = JSON.parse( statsObj);

            $(".video-container iframe").attr('src','https://www.youtube.com/embed/'+videoId);
            $(".selected").removeClass('selected');
            $("#vid-"+videoId).addClass('selected');
            $("#videoTitle").text(videoTitle);

            $("#videoViews").text(views+' views');
            $("#videoLikes").text(likes+' likes');
            $("#videoDislikes").text(dislikes+' dislikes');
            $("#videoComments").text(comments+' comments');

        }



    </script>






@endsection
