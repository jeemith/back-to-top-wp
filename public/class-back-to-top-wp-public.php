<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://p2psolutions.com
 * @since      1.0.0
 *
 * @package    Back_To_Top_Wp
 * @subpackage Back_To_Top_Wp/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Back_To_Top_Wp
 * @subpackage Back_To_Top_Wp/public
 * @author     mith <mith.developer@gmail.com>
 */
class Back_To_Top_Wp_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Back_To_Top_Wp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Back_To_Top_Wp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/back-to-top-wp-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Back_To_Top_Wp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Back_To_Top_Wp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/back-to-top-wp-public.js', array( 'jquery' ), $this->version, false );

	}
	public function call_footer(){
		$style = '';
		$span_style = '';
		$span_style = 'border: 8px solid transparent;';
		$n = 20;
		$icon_color = '#ffffff';
		$style .= get_option( '_btt_buttom_pos' ) ? ('bottom:'.get_option( '_btt_buttom_pos' ).'px') : ('bottom:'.$n.'px');
		$style .= get_option( '_btt_right_pos' ) ? ('; right:'.get_option( '_btt_right_pos' ).'px') : ('; right:'.$n.'px');
		$span_style .= get_option( '_btt_iconcolor_pos' ) ? ('border-bottom-color:'.get_option( '_btt_iconcolor_pos' )) : ('border-bottom-color:'.$icon_color);
		
		$output = '<a href="#ddd" id="scroll" style="
												display: none;
												background-color: '.get_option( '_btt_bgcolor_pos' ).';
												" >
												<span style="'.$span_style.'"></span></a>';
		echo wp_kses_post($output);
  	}
	

}
