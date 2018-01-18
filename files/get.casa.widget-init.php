<?php

// register Casa_Widget widget
function register_casa_widget() {
    register_widget( 'Casa_Widget' );
}
add_action( 'widgets_init',  'register_casa_widget' );
