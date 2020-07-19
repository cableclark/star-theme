<?php

Class My_Custom_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

    public function widget( $args, $instance ) {
        if ( ! isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }
        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );
        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
        if ( ! $number ) {
            $number = 5;
        }
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false   ;
        $r = new WP_Query(
            /**
             * Filters the arguments for the Recent Posts widget.
             *
             * @since 3.4.0
             * @since 4.9.0 Added the `$instance` parameter.
             *
             * @see WP_Query::get_posts()
             *
             * @param array $args     An array of arguments used to retrieve the recent posts.
             * @param array $instance Array of settings for the current widget.
             */
            apply_filters(
                'widget_posts_args',
                array(
                    'posts_per_page'      => $number,
                    'no_found_rows'       => true,
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => true,
                ),
                $instance
            )
        );
        if ( ! $r->have_posts() ) {
            return;
        }
        ?>

        <?php 
        echo $args['before_widget']; 
        echo '<div class="widget_title_container">';
        if ( $title ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        echo '</div>';
        ?>
        <ul>
            <?php 
            foreach ( $r->posts as $recent_post ) : ?>
                <?php
                $post_title   = get_the_title( $recent_post->ID );
                $title        = ( ! empty( $post_title ) ) ? $post_title : __( '(no title)' );
                $aria_current = '';

                if ( get_queried_object_id() === $recent_post->ID ) {
                    $aria_current = ' aria-current="page"';
                }
                ?>
                <li class="recent-posts">
                    <div class="recent-post-image"> 
                        <a href="<?php the_permalink( $recent_post->ID ); ?>"<?php echo $aria_current; ?>> <?php  echo get_the_post_thumbnail($recent_post->ID, 'thumbnail');?> </a>
                    </div>
                    <div class="recent-posts__data">
                        <a href="<?php the_permalink( $recent_post->ID ); ?>"<?php echo $aria_current; ?>>
                        <?php echo $title; ?></a>
                        <span class="post-date"><?php echo get_the_date( 'j. F, Y', $recent_post->ID ); ?></span>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php
        echo $args['after_widget'];
    }
 
 

}