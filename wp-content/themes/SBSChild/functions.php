<?php
/*This file is part of SBSChild, creativ-preschool child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function SBSChild_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'childe2-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'SBSChild_enqueue_child_styles' );


function load_css(){
    wp_enqueue_style( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
   wp_enqueue_style( 'owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css' );
}
add_action('wp_enqueue_scripts','load_css');
  function load_js() {
    wp_enqueue_script( 'custom-jquery',get_stylesheet_directory_uri().'/js/custom.js', array('jquery'),rand(0,500));
   wp_enqueue_script( 'bootstrap-owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'));
} 
    add_action('wp_enqueue_scripts','load_js'); 

/*Write here your own functions */


/*member slider*/
function pnpr_member(){
ob_start();
$args = array(
    'post_type'=> 'achievements',
    'order'    => 'ASC',
    'posts_per_page' => -1
    );            
$the_query = new WP_Query( $args );
if($the_query->have_posts())
{
?>
    <div class="left_50">
    	<div id="owl-main" class="owl-carousel owl-theme">
   	<?php
   	while($the_query->have_posts())
	{
		$the_query->the_post();
		global $post;
		$id= $post->ID;
		$post_data=get_post_meta($id);
		
		?>
	    <div class="member_list"><img src="<?php echo get_the_post_thumbnail_url($post->ID,'full'); ?>"><h4><?php echo get_the_title($post->ID); ?></h4><h5><?php echo get_the_content($post->ID); ?></h5></div>
	    <?php
	}
	?>
		</div>
	</div>			
<?php
}  
	return ob_get_clean();
}
add_shortcode("MEMBER_SLIDER", "pnpr_member");

