<?php

namespace ResponsiveMenu\Mappers;

class ScssMenuMapper extends ScssMapper
{

  public function map()
  {

    $css = <<<CSS

      @if '{$this->options['menu_disable_scrolling']}' == 'on' {
        body.responsive-menu-open {
          overflow: hidden;
        }
      }

      #responsive-menu-mask {
        transition: background-color {$this->options['animation_speed']}s,
        width 0s {$this->options['animation_speed']}s,
        height 0s{$this->options['animation_speed']}s;
        .responsive-menu-open & {
          background-color: {$this->options['menu_overlay_colour']};
          transition: background-color {$this->options['animation_speed']}s;
        }
      }

      @if '{$this->options['page_wrapper']}' != '' {
        & {$this->options['page_wrapper']} {
          transition: transform {$this->options['animation_speed']}s;
        }
      }

      #responsive-menu-container {
        width: {$this->options['menu_width']}%;
        {$this->options['menu_appear_from']}: 0;
        @if '{$this->options['menu_auto_height']}' == 'off' {
          background: {$this->options['menu_background_colour']};
        }
        transition: transform {$this->options['animation_speed']}s;
        text-align: {$this->options['menu_text_alignment']};

        & #responsive-menu-wrapper {
          background: {$this->options['menu_background_colour']};
        }

        @if '{$this->options['menu_auto_height']}' == 'on' {
          @if '{$this->options['menu_appear_from']}' == 'bottom' {
            top: auto;
          } @else {
            bottom: '';
          }
        }

        @if '{$this->options['menu_maximum_width']}' != '' {
          max-width: {$this->options['menu_maximum_width']}px;
        }
        @if '{$this->options['menu_minimum_width']}' != '' {
          min-width: {$this->options['menu_minimum_width']}px;
        }

        @if '{$this->options['menu_font']}' != '' {
          font-family: '{$this->options['menu_font']}';
        }

        & a, & #responsive-menu-title, & .responsive-menu-subarrow {
          transition: all {$this->options['transition_speed']}s;
        }

        #responsive-menu-title {
          background-color: {$this->options['menu_title_background_colour']};
          color: {$this->options['menu_title_colour']};
          a {
            color: {$this->options['menu_title_colour']};
            text-decoration: none;
            &:hover {
              color: {$this->options['menu_title_hover_colour']};
            }
          }
          &:hover {
            background-color: {$this->options['menu_title_background_hover_colour']};
            color: {$this->options['menu_title_hover_colour']};
          }
          #responsive-menu-title-image {
            display: inline-block;
            vertical-align: middle;
            margin-right: 15px;
          }
        }

        #responsive-menu {

          li.responsive-menu-item {
            a {
              line-height: {$this->options['menu_links_height']}px;
              border: 1px solid {$this->options['menu_item_border_colour']};
              color: {$this->options['menu_link_colour']};
              background-color: {$this->options['menu_item_background_colour']};
              @if '{$this->options['menu_word_wrap']}' != 'off' {
                word-wrap: break-word;
              }
              &:hover {
                color: {$this->options['menu_link_hover_colour']};
                background-color: {$this->options['menu_item_background_hover_colour']};
              }

              .responsive-menu-subarrow {
                height: {$this->options['submenu_arrow_height']}px;
                line-height: {$this->options['submenu_arrow_height']}px;
                width: {$this->options['submenu_arrow_width']}px;
                color: {$this->options['menu_sub_arrow_shape_colour']};
                border: 1px solid {$this->options['menu_sub_arrow_border_colour']};
                background-color: {$this->options['menu_sub_arrow_background_colour']};

                  &:hover {
                    color: {$this->options['menu_sub_arrow_shape_hover_colour']};
                    border-color: {$this->options['menu_sub_arrow_border_hover_colour']};
                    background-color: {$this->options['menu_sub_arrow_background_hover_colour']};
                  }
              }
            }
          }
        }
      }
      @media screen and ( max-width: {$this->options['breakpoint']}px ) {
        @if '{$this->options['menu_to_hide']}' != '' {
          & {$this->options['menu_to_hide']} {
            display: none;
          }
        }
      }

CSS;

    return $this->compiler->compile($css);
  }

}