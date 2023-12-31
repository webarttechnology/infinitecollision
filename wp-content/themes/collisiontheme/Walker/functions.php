<?php
class AJ_CSS_Menu_Walker extends Walker {

  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

  function start_lvl( &$output, $depth = 0, $args = array() ) {
    /* need to check the depth here in case sub-sub menu ul has a different class  */
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class='dropdown-menu'>\n";
  }

  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = '';        
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;

    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }

    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'has-sub';
    }

    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

    $output .= $indent . '<li' . $id . $value . $class_names .'>';

    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

    $item_output = $args->before;

    if($depth==0)
    {
              if(in_array('current-menu-item', $classes)) 
              {
               $item_output .= '<a'. $attributes .' class="nav-link active">'; /* here  we can check the depth and conditionally add class   */
             }
           else
            {
             $item_output .= '<a'. $attributes .' class="nav-link">'; /* here  we can check the depth and conditionally add class   */
            }

    }
  if($depth>0)
  {
    if(in_array('current-menu-item', $classes)) 
    {
      $item_output .= '<a'. $attributes .' class="dropdown-item active">'; /* here  we can check the depth and conditionally add class   */
    }
    else
    {
      $item_output .= '<a'. $attributes .' class="dropdown-item">'; /* here  we can check the depth and conditionally add class   */
    }
  }

    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

    if (!empty($children)) 
    {
      /*if($depth>0)
      {
       
        $item_output .= '&nbsp;<i class="fas fa-angle-right drop-icon-box"></i></a>'; 
     }
      else
     {
        $item_output .= '&nbsp;<i class="fas fa-angle-down drop-icon-box"></i></a>'; 
     }*/

  }

  else
  {
    $item_output .= '</a>';
  }
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

  function end_el( &$output, $item, $depth = 0, $args = array() ) 
  {
    $output .= "</li>\n";
  }

}