<?php
// $Id: template.php,v 1.6.2.1.4.2 2007/04/10 01:04:51 jwolf Exp $

/**
* Adjust content width according to the absence or presence of sidebars.
*
*   If only one sidebar is active, the mainContent width will expand to fill
*   the space of the missing sidebar.
*/
function amadou_get_mainContent_width($sidebar_left, $sidebar_right) {
  $width = 530;
  if (!$sidebar_left) {
    $width = $width + 180;
  }
  if (!$sidebar_right) {
    $width = $width + 180;
  }
  return $width;
}

function amadou_get_sideBars_width($sidebar_left, $sidebar_right) {
  $width = 415;
  if (!$sidebar_left) {
   $width = $width - 205;
  }
  if (!$sidebar_right) {
    $width = $width - 205;
  }
  return $width;
}



// resize main content width according to the presence of side bars
/*
function amadou_get_primaryContent_width($sidebar_left, $sidebar_right) {
  $width = '36.5';
  if (!$sidebar_left) {
    $width = $width + '24';
  }  
  if (!$sidebar_right) {
    $width = $width + '36';
  }  
  return $width;
}
*/

//adjusts the sidebars content top margin according to the presence of  the searchbox
/*
function amadou_get_sidebarsContent_margin($search_box) {
  $margin = 0;
  if ($search_box) {
    $margin = '20px 0 0 0';
  }
  return $margin;
}
*/


/**
* Catch the theme_links function
*/
function phptemplate_links($links, $attributes = array('class' => 'links')) {
$output = '';

  if (count($links) > 0) {
    $output = '<ul'. drupal_attributes($attributes) .'>';

    $num_links = count($links);
    $i = 1;

    foreach ($links as $key => $link) {
      $class = '';

      // Automatically add a class to each link and also to each LI
      if (isset($link['attributes']) && isset($link['attributes']['class'])) {
        $link['attributes']['class'] .= ' ' . $key;
        $class = $key;
      }
      else {
        $link['attributes']['class'] = $key;
        $class = $key;
      }

      // Add first and last classes to the list of links to help out themers.
      $extra_class = '';
      if ($i == 1) {
        $extra_class .= 'first ';
      }
      if ($i == $num_links) {
        $extra_class .= 'last ';
      }
      $output .= '<li class="'. $extra_class . $class .'">';
      // Is the title HTML?
      $html = isset($link['html']) && $link['html'];
      // Initialize fragment and query variables.
      $link['query'] = isset($link['query']) ? $link['query'] : NULL;
      $link['fragment'] = isset($link['fragment']) ? $link['fragment'] : NULL;
      if (isset($link['href'])) {
        $output .= l($link['title'], $link['href'], $link['attributes'], $link['query'], $link['fragment'], FALSE, $html);
      }
      else if ($link['title']) {
        //Some links are actually not links, but we wrap these in <span> for adding title and class attributes
        if (!$html) {
          $link['title'] = check_plain($link['title']);
        }
        $output .= '<span'. drupal_attributes($link['attributes']) .'>'. $link['title'] .'</span>';
      }
      $i++;
      $output .= "</li>\n";
    }
    $output .= '</ul>';
  }
  return $output;
}








// sets delimiter and styles for $links
/*
function amadou_links($links, $attributes = array('class' => 'links')) {
  $output = '';

  if (count($links) > 0) {
    //$output = '<div'. drupal_attributes($attributes) .'>';

    $num_links = count($links);
    $i = 1;

    foreach ($links as $key => $link) {
      $class = '';

      // Automatically add a class to each link and also to each LI
      if (isset($link['attributes']) && isset($link['attributes']['class'])) {
        $link['attributes']['class'] .= ' ' . $key;
        $class = $key;
      }
      else {
        $link['attributes']['class'] = $key;
        $class = $key;
      }

      // Add first and last classes to the list of links to help out themers.
      $extra_class = '';
      if ($i == 1) {
        $extra_class .= 'first ';
      } else {
        $output .= '&nbsp;&bull; &nbsp;';
      }
      if ($i == $num_links) {
        $extra_class .= 'last ';
      }
      $output .= '<span class="'. $extra_class . $class .'">';

      // Is the title HTML?
      $html = isset($link['html']) && $link['html'];

      // Initialize fragment and query variables.
      $link['query'] = isset($link['query']) ? $link['query'] : NULL;
      $link['fragment'] = isset($link['fragment']) ? $link['fragment'] : NULL;

      if (isset($link['href'])) {
        $output .= l($link['title'], $link['href'], $link['attributes'], $link['query'], $link['fragment'], FALSE, $html);
      }
      else if ($link['title']) {
        //Some links are actually not links, but we wrap these in <span> for adding title and class attributes
        if (!$html) {
          $link['title'] = check_plain($link['title']);
        }
        $output .= '<span'. drupal_attributes($link['attributes']) .'>'. $link['title'] .'</span>';
      }

      $i++;
      $output .= "</span>\n";
    }

    //$output .= '</div>';
  }

  return $output;
}
*/
