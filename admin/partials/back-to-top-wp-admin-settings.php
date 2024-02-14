<?php 
if ( ! defined( 'ABSPATH' ) ) 
exit;
?>
<div class="wrap">
		<h1>Back To Top Settings</h1> 
        <form method="post" action="options.php" novalidate="novalidate">  
            <?php settings_fields( 'set_back_to_top_wp' ); ?>
		
		<div id = "boxes">            
            <div id = "leftbox">
                <b>Background Color:</b>               
            </div>              
            <div id = "rightbox">
                <input type="color" name="_btt_bgcolor_pos" value="<?php echo get_option( '_btt_bgcolor_pos' ) ? get_option( '_btt_bgcolor_pos' ) : '#3498db'?>">
            </div>
        </div>
		<div id = "boxes">            
            <div id = "leftbox">
                <b>Icon Color:</b>               
            </div>              
            <div id = "rightbox">
                <input type="color" name="_btt_iconcolor_pos" value="<?php echo get_option( '_btt_iconcolor_pos' ) ? get_option( '_btt_iconcolor_pos' ) : '#ffffff'?>">
            </div>
        </div>
        <?php submit_button(); ?>
</div>