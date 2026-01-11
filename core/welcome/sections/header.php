<div class="welcome-header clearfix">
    <div class="welcome-intro">
        <h2>
            <?php
                printf( esc_html__('Welcome to %1$s - Version %2$s', 'ikreate-fse'), $this->theme_name, $this->theme_version);
            ?>
        </h2>
        <div class="welcome-text">
            <?php
                printf( esc_html__('Welcome, and thank you for installing %1$s. It’s a clean, modern, powerful, and flexible Full Site Editing WordPress theme, perfect for business, corporate, and professional websites. Upgrade to %1$s Pro today for even more advanced features and dedicated support.', 'ikreate-fse'), $this->theme_name);
            ?>
        </div>
        <div class="free-pro-demos">
            <a class="button button-primary" href="<?php echo apply_filters('ikreatefse-demo-link','https://ikreatethemes.com/wordpress-theme/full-site-editing-wordpress-theme/'); ?>" target="_blank"><span class="dashicons dashicons-visibility"></span><?php esc_html_e('Starter Templates', 'ikreate-fse'); ?></a>
            <?php echo $this->ikreatefse_setup_content(); ?>
        </div>
    </div>
    <div class="welcome-promo-banner">
        <a class="welcome-promo-offer" href="<?php echo apply_filters('ikreatefse-link', esc_url('https://ikreatethemes.com/wordpress-theme/full-site-editing-wordpress-theme/') );?>" target="_blank">
            <?php 
                printf( esc_html__('Unlock all the possibilities with %1$s Pro', 'ikreate-fse'), $this->theme_name);
            ?>
        </a>
        <a href="<?php echo apply_filters('ikreatefse-link', esc_url('https://ikreatethemes.com/wordpress-theme/full-site-editing-wordpress-theme/') );?>" target="_blank" class="button button-primary upgrade-btn"><span class="dashicons dashicons-info"></span><?php echo esc_html__(' Upgrade for $59', 'ikreate-fse'); ?></a>
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
        <a href="<?php echo esc_url(admin_url('admin.php?page=ikreatefse-welcome&section=' . $section_id)); ?>" class="<?php echo esc_attr($nav_class); ?>" >
            <?php echo esc_html($label); ?>
        </a>
    <?php endforeach; ?>
</div>