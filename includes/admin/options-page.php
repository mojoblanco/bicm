<?php

function bicm_theme_opts_page()
{
	$theme_opts = get_option('bicm_opts');
    ?>
    <div class="wrap">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?php _e('BICM Theme Settings', 'bicm'); ?></h3>
            </div>

            <div class="panel-body">
            
            	<?php if(isset($_GET['status']) && $_GET['status'] == 1):?>
            		<div class="alert alert-success">Successful!</div>
            	<?php endif;?> 
            	
                <form method="post" action="admin-post.php">
                    <input type="hidden" name="action" value="bicm_save_options" />

                    <?php wp_nonce_field('bicm_options_verify'); ?>

                    <h4><?php _e('Social Icons', 'bicm'); ?></h4>

                    <div class="form-group">
                        <label><?php _e('Twitter', 'bicm'); ?></label>
                        <input type="text" class="form-control" name="bicm_inputTwitter" value="<?= $theme_opts['twitter']; ?>"/>
                    </div>


                    <div class="form-group">
                        <label><?php _e('Facebook', 'bicm'); ?></label>
                        <input type="text" class="form-control" name="bicm_inputFacebook" value="<?= $theme_opts['facebook']; ?>"/>
                    </div>

                    <div class="form-group">
                        <label><?php _e('Youtube', 'bicm'); ?></label>
                        <input type="text" class="form-control" name="bicm_inputYoutube" value="<?= $theme_opts['youtube']; ?>" />
                    </div>

                    <h4><?php _e('Logo', 'bicm'); ?></h4>

                    <div class="form-group">
                        <label><?php _e('Logo Type', 'bicm'); ?></label>
                        <select class="form-control" name="bicm_inputLogoType">
                            <option value="1"><?php _e('Site Name', 'bicm'); ?></option>
                            <option value="2" <?php echo $theme_opts['logo_type'] == 2 ? 'SELECTED' : '' ;?>> <?php _e('Image', 'bicm'); ?></option>
                        </select>
                    </div>

                    <div class="input-group">
                        <input type="text" class="form-control" name="bicm_inputLogoImg" placeholder="Logo Image"/>
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button" name="bicm_uploadLogoImgBtn"><?php _e('Upload', 'bicm'); ?></button>
                        </span>
                    </div>

                    <h4><?php _e('Footer', 'bicm'); ?></h4>

                    <div class="form-group">
                        <label><?php _e('Footer Text', 'bicm'); ?></label>
                        <textarea class="form-control" name="bicm_inputFooter" ><?= stripslashes_deep($theme_opts['footer']); ?></textarea>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Save" />
                </form>

            </div>
        </div>
    </div>
<?php
}

 ?>
