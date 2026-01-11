<div class="welcome-header clearfix">
    <div class="welcome-intro">
        <h2>
            <?php
                printf(// WPCS: XSS OK.
                    /* translators: 1-theme name, 2-theme version */
                    esc_html__('Welcome to %1$s - Version %2$s', 'ikreate-fse'), $this->theme_name, $this->theme_version);
            ?>
        </h2>
        <div class="welcome-text">
            <?php
            printf(// WPCS: XSS OK.
                    /* translators: 1-theme name */
                    esc_html__('Welcome and thank you for installing %1$s. Getting started with %1$s is a clean, beautiful, and fully customizable responsive modern free WordPress theme, especially for landing pages. And of course, the premium version for additional features and better support.', 'ikreate-fse'), $this->theme_name);
            ?>
        </div>
        <div class="free-pro-demos">
            <?php echo $this->ikreate_fse_welcome_setup_content(); ?>
            <a class="button button-primary" href="<?php echo apply_filters('ikreate_fse-demo-link','https://ikreatethemes.com/wordpress-themes/ikreate-fse-full-site-editing-wordpress-theme/#viewdemo'); ?>" target="_blank"><span class="dashicons dashicons-visibility"></span><?php esc_html_e('Starter Templates', 'ikreate-fse'); ?></a>
        </div>
    </div>
</div>

<div class="welcome-nav-wrapper clearfix">
    <?php foreach ($tabs as $section_id => $label) : ?>
        <?php
            $section = isset($_GET['section']) && array_key_exists($_GET['section'], $tabs) ? $_GET['section'] : 'getting_started';
            $nav_class = 'welcome-nav-tab';
            if ($section_id == $section) {
                $nav_class .= ' welcome-nav-tab-active';
            }
        ?>
        <a href="<?php echo esc_url(admin_url('admin.php?page=ikreate_fse-welcome&section=' . $section_id)); ?>" class="<?php echo esc_attr($nav_class); ?>" >
            <?php echo esc_html($label); ?>
        </a>
    <?php endforeach; ?>
</div>