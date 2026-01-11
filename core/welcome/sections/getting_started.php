<div class="welcome-getting-started">
    <div class="welcome-demo-import">
        <h3><?php echo esc_html__('Manual Setup', 'ikreate-fse'); ?></h3>
        <div class="free-pro-demos livepreview">
            <a class="button button-primary" href="https://ikreatethemes.com/wordpress-themes/ikreate-fse-full-site-editing-wordpress-theme/#viewdemo" target="_blank"><span class="dashicons dashicons-visibility"></span><?php echo esc_html__('Live Preview', 'ikreate-fse'); ?></a>      
        </div>
        <p><?php echo esc_html__('You can setup the home page sections drag and drop powered by gutenburg', 'ikreate-fse'); ?></p>
        <p><strong><?php echo esc_html__('MANUAL HOME PAGE SETUP', 'ikreate-fse'); ?></strong></p>
        <ol>
            <li><?php echo esc_html__('Create a new page and choose Template (Full Width), then Drag and drop the patterns to create your own design.', 'ikreate-fse'); ?></li>
            <li><?php echo esc_html__('Now go to Settings &gt; Reading &gt; Your homepage displays and choose "A static page" select the created page for "Home Page" option.', 'ikreate-fse'); ?></li>
        </ol>
        <p><strong><?php echo esc_html__('FROM ELEMENTOR', 'ikreate-fse'); ?></strong></p>
        <ol>
            <li><?php echo esc_html__('Firstly install and activate "Elementor Website Builder" plugin from', 'ikreate-fse'); ?> <a href="<?php echo esc_url(admin_url('admin.php?page=ikreate_fse-welcome&section=recommended_plugins')); ?>"><?php echo esc_html__('Recommended Plugin page.', 'ikreate-fse'); ?></a></li>
            <li><?php echo esc_html__('Create a new page and edit with Elementor. Drag and drop the elements in the Elementor to create your own design.', 'ikreate-fse'); ?></li>
            <li><?php echo esc_html__('Now go to Settings &gt; Reading &gt; Your homepage displays and choose "A static page" select the created page for "Home Page" option.', 'ikreate-fse'); ?></li>
        </ol>
        <p><strong><?php echo esc_html__('For detailed documentation, please visit', 'ikreate-fse'); ?> <a href="#" target="_blank"><?php echo esc_html__('Documentation Page.', 'ikreate-fse'); ?></a></strong></p>
    </div>
    <div class="welcome-demo-import">
        <h3><?php echo esc_html__('Demo Importer', 'ikreate-fse'); ?></h3>
        <div class="free-pro-demos livepreview">
            <?php echo $this->ikreate_fse_welcome_setup_content(); ?>
        </div>
        <div class="welcome-demo-import-text">
            <p><?php echo sprintf(esc_html__('Click on the above button to install and activate the Demo Importer plugin. For more detailed documentation on how the demo importer works, click %s.', 'ikreate-fse'), '<a href="#" target="_blank">' . esc_html__('here', 'ikreate-fse') . '</a>'); ?></p>
        </div>
        <div class="welcome-theme-thumb">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/screenshot.png'); ?>" alt="<?php printf(esc_attr__('%s Demo', 'ikreate-fse'), esc_html($this->theme_name)); ?>">
        </div>
    </div>
</div>