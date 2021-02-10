<?php



    $video = '';

    function video_img_YT($video_url)
    {
        $video_embed_Img = '';
        if(!empty($video_url))
        {
            $video_url			= video_cleanURL_YT($video_url);
            $video_ID_array		= explode('/', $video_url );
            $video_ID			= $video_ID_array[count($video_ID_array)-1]; // élément de l'URL après le dernier /
            $video_embed_Img 	= 'https://i3.ytimg.com/vi/' . $video_ID . '/hqdefault.jpg'; //pass 0,1,2,3 for different sizes like 0.jpg, 1.jpg
        }
        // -----------------
        return '<img src="' . $video_embed_Img . '" />';
    };

    echo video_img_YT($video);

    

    