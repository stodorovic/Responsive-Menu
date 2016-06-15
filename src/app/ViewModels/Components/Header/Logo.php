<?php

namespace ResponsiveMenu\ViewModels\Components\Header;

use ResponsiveMenu\ViewModels\Components\ViewComponent as ViewComponent;
use ResponsiveMenu\Collections\OptionsCollection as OptionsCollection;

class Logo implements ViewComponent {

  public function render(OptionsCollection $options) {

    $content = '<div id="responsive-menu-header-bar-logo" class="responsive-menu-header-bar-item responsive-menu-header-box">';
    $content .= $options['header_bar_logo_link'] ? '<a href="' . $options['header_bar_logo_link'] . '">' : '';
    $content .= '<img src="' . $options['header_bar_logo'] . '" />';
    $content .= $options['header_bar_logo_link'] ? '</a>' : '';
    $content .= '</div>';

    return $content;


  }

}