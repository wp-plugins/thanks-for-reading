
 <?php
   
    /*
     * Plugin Name: Thanks-for-Reading
	 Plugin URI: https://drive.google.com/open?id=0B2k1dzVFzrhqZ3FYMXU1MjR3NHc&authuser=0
	 Description: this plugin add some line at the end of post like say thank you for reading my post.
	Version:1.0
	Author: Meskat Jahan
	Author URI:meskatjahan.wordpress.com
	Tested On: wordpress 3.6.1.0
	Tested up to: 3.6
	Stable tag: 1.0
	License: GPLv2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html
     */
	 
	 
    add_filter( 'the_content', 'mjt_the_content' );
     
    function mjt_the_content( $content ) {
      return $content . 'Thanks for Reading My post!   Hope you enjoy this. New post are coming soon. Stay tuned. .... &nbsp:) ';
    }

?>