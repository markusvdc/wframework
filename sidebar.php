<span class="arquivo">sidebar.php</span>
<aside id="sidebar">
    <?php
    if ( is_active_sidebar( 'primary-widget-area' ) ) :
    ?>
        <ul class="list-sidebar">
            <?php dynamic_sidebar( 'primary-widget-area' ); ?>
        </ul>
    <?php
    endif;
    ?>
</aside>
