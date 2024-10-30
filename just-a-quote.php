<?php
/*
Plugin Name: Just a Quote Widget
Description: Easily display any quote from any source in your sidebar with some basic 'quote-like' formatting. Input fields for both the quote and the source are included.
Version: 0.1
Author: Anthony Bubel
Author URI: http://anthonybubel.com/
*/

class Just_A_Quote_Widget extends WP_Widget {

	function Just_A_Quote_Widget() {
		$widget_ops = array('classname' => 'just_a_quote', 'description' => "Display a quote in your sidebar." );
		$this->WP_Widget('just_a_quote', 'Just a Quote', $widget_ops);	
	}
	
	function widget($args, $instance) {
		extract( $args );		
		
		if ($instance['style'] != "custom") {
		echo '<style type="text/css">
			.just-a-quote{ text-align:center;
				padding:5px 10px 5px 10px;
				font-size:200%;
				font-family:"Georgia"; }
			.just-a-quote-source{ text-align:right;
				padding:5px 10px 5px;
				font-size:125%;
				font-style:italic; }
			</style>';
		}
		
		echo $before_widget;
		echo $before_title . esc_attr($instance['title']) . $after_title;
		
		echo '<p class="just-a-quote">' . '	&#8220;' . esc_attr($instance['quote']) . '&#8221;' . '</p>
			<p class="just-a-quote-source">' . esc_attr($instance['source']) . '</p>';
		
		echo $after_widget;
	}

	function update($new_instance, $old_instance) {				
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['quote'] = strip_tags($new_instance['quote']);
		$instance['source'] = strip_tags($new_instance['source']);
		$instance['style'] = $new_instance['style'];
		
		return $instance;
	}
	
	function form($instance) {
	
		$title = esc_attr($instance['title']);
		$quote = esc_attr($instance['quote']);
		$source = esc_attr($instance['source']);
		$style = $instance['style'];
	
		?>
		
			<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php echo __('Title:'); ?> 
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
			</label></p>
			<p><label for="<?php echo $this->get_field_id('quote'); ?>"><?php echo __('Quote <small>(exclude quotation marks)</small>:'); ?> 
			<textarea rows=5 class="widefat" id="<?php echo $this->get_field_id('quote'); ?>" name="<?php echo $this->get_field_name('quote'); ?>"><?php echo $quote; ?></textarea>
			</label></p>
			<p><label for="<?php echo $this->get_field_id('source'); ?>"><?php echo __('Source:'); ?> 
			<input class="widefat" id="<?php echo $this->get_field_id('source'); ?>" name="<?php echo $this->get_field_name('source'); ?>" type="text" value="<?php echo $source; ?>" />
			</label></p>
			<p><label for="<?php echo $this->get_field_id('style'); ?>"><?php echo __('Style the quote yourself?'); ?>
			<input id="<?php echo $this->get_field_id('style'); ?>" name="<?php echo $this->get_field_name('style'); ?>" type="checkbox" value="custom" <?php if($style=="custom") echo 'CHECKED'; ?> onchange="if ( this.checked == false ) jQuery( 'p#style-note' ).slideUp(); else jQuery( 'p#style-note' ).slideDown();" />
			</label></p>
			<p id="style-note" <?php if ( $style != "custom" ) echo ' style="display: none;">'; ?><small>If styling yourself, use the <strong>just-a-quote</strong> and <strong>just-a-quote-source</strong> classes in your theme's stylesheet.</small></p>
			
		<?php
	}
	
} //END Just_A_Quote Widget Class

	function JustaQuoteInit() {
		register_widget('Just_A_Quote_Widget');
	}
	
	add_action('widgets_init', 'JustaQuoteInit');

?>