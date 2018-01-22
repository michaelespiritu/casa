<?php

if ( ! class_exists( 'Casa_Widget' ) ) {
	return null;
}


/**
 * Adds Casa_Widget widget.
 */
class Casa_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'casa_widget', // Base ID
			esc_html__( 'Casa Widget Recent Properties', 'casa-listing' ), // Name
			array( 'description' => esc_html__( 'Casa Widget to display recent properties', 'casa-listing' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
    echo $this->display_data($instance['num_of_post']);
		echo $args['after_widget'];
	}

  /**
	 * Function to get query of post type casa
	 */
  public function display_data($num_of_post){

    $output = 5;

    if( !empty( $num_of_post ) ){
      $output = $num_of_post;
    }

    $arg = [
      'post_type' => 'casa',
      'posts_per_page' => $output,
      'orderby' => 'ID',
      'order' => 'DESC'
    ];

    $the_query = new WP_Query( $arg );

    $data = '';

    while ( $the_query->have_posts() ) {
  		$the_query->the_post();
  		 $data .= '<li><a href="'. esc_attr( get_permalink() ) .'">' . __( get_the_title() , 'casa-listing') . '</a></li>';
  	}

    return $data;

  }


	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Recent Properties', 'casa-listing' );
		$num_of_post = ! empty( $instance['num_of_post'] ) ? $instance['num_of_post'] : esc_html__( 5,  'casa-listing' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'num_of_post' ) ); ?>"><?php esc_attr_e( 'Number of post:', 'text_domain' ); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'num_of_post' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'num_of_post' ) ); ?>" type="number" value="<?php echo esc_attr( $num_of_post ); ?>">
		</p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['num_of_post'] = ( ! empty( $new_instance['num_of_post'] ) ) ? strip_tags( $new_instance['num_of_post'] ) : '';

		return $instance;
	}

} // class Casa_Widget
