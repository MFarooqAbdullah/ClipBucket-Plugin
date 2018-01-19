<?php
/*
Plugin Name: Frontend Administration
Description: Provide admin's quick functionality on uploaded videos.
Author: Farooq Abdullah
Author Website: http://clip-bucket.com/
ClipBucket Version: 1.0
Version: 1.0
Website: http://clip-bucket.com/plugin-page
*/

if(!function_exists('frontend_admin_button'))
{

function frontend_admin_button($data)
    	{

    		// print_r ($data);
    		if (has_access('admin_access',true))
    		echo '<button  type="button" style="font-size:10px "  id="video_action" class="btn btn-info btn-xs " data-toggle="modal" data-target="#frontend_admin_modal '.'"data-videoid="'.$data["videoid"].'"data-userid="'.$data["userid"].'"  ><i class="fa fa-gear" style="font-size:19px "></i></button>';
    			// echo 'video_id=$data[videoid]';
    			// exit();

		}
}
if(!function_exists('frontend_admin_modal'))
{

		// $video  = array('data-videoid' => "$video.videoid", 'user-id' => "$video.userid");

    	// function videodata($video) {
		// echo "VideoID: " . $data['data-videoid'] . " <br>UserID:".$data['user-id'];



 		// videodata($video);



	function frontend_admin_modal()
		{

			include 'frontend_admin.html';
		}

	//Load this only for admin
    // register_anchor_function('frontend_admin_modal');

}

register_anchor_function('frontend_admin_button','frontend_admin_button_placement');
	register_anchor_function('frontend_admin_modal','frontend_admin_modal_placement');
?>