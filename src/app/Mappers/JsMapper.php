<?php

namespace ResponsiveMenu\Mappers;
use ResponsiveMenu\Collections\OptionsCollection as OptionsCollection;

class JsMapper
{
  public function __construct(OptionsCollection $options)
  {
    $this->options = $options;
  }

  public function map()
  {
    $js = <<<JS

    jQuery(document).ready(function($) {

      var ResponsiveMenu = {
        trigger: '{$this->options['button_click_trigger']}',
        animationSpeed: {$this->options['animation_speed']},
        breakpoint: {$this->options['breakpoint']},
        pushButton: '{$this->options['button_push_with_animation']}',
        animationType: '{$this->options['animation_type']}',
        animationSide: '{$this->options['menu_appear_from']}',
        pageWrapper: '{$this->options['page_wrapper']}',
        isOpen: false,
        triggerTypes: 'click',
        activeClass: 'is-active',
        container: '#responsive-menu-container',
        openClass: 'responsive-menu-open',
        accordion: '{$this->options['accordion_animation']}',
        activeArrow: '{$this->options->getActiveArrow()}',
        inactiveArrow: '{$this->options->getInActiveArrow()}',
        wrapper: '#responsive-menu-wrapper',
        closeOnClick: '{$this->options['menu_close_on_body_click']}',
        closeOnLinkClick: '{$this->options['menu_close_on_link_click']}',
        itemTriggerSubMenu: '{$this->options['menu_item_click_to_trigger_submenu']}',
        linkElement: '.responsive-menu-item-link',
        isSingleMenu: '{$this->options['use_single_menu']}',
        openMenu: function() {
          $(this.trigger).addClass(this.activeClass);
          $('body').addClass(this.openClass);
          $('.responsive-menu-button-icon-active').hide();
          $('.responsive-menu-button-icon-inactive').show();
          if(this.isSingleMenu == 'on'){
            $(this.container).removeClass('responsive-menu-no-transition');
          }
          this.setWrapperTranslate();
          this.isOpen = true;
        },
        closeMenu: function() {
          $(this.trigger).removeClass(this.activeClass);
          $('body').removeClass(this.openClass);
          $('.responsive-menu-button-icon-inactive').hide();
          $('.responsive-menu-button-icon-active').show();
          this.clearWrapperTranslate();
          this.isOpen = false;
        },
        triggerMenu: function() {
          this.isOpen ? this.closeMenu() : this.openMenu();
        },
        triggerSubArrow: function(subarrow) {
          var sub_menu = $(subarrow).parent().next('.responsive-menu-submenu');
          var self = this;
          if(this.accordion == 'on') {
            /* Get Top Most Parent and the siblings */
            var top_siblings = sub_menu.parents('.responsive-menu-item-has-children').last().siblings('.responsive-menu-item-has-children');
            var first_siblings = sub_menu.parents('.responsive-menu-item-has-children').first().siblings('.responsive-menu-item-has-children');
            /* Close up just the top level parents to key the rest as it was */
            top_siblings.children('.responsive-menu-submenu').slideUp(200, 'linear').removeClass('responsive-menu-submenu-open');
            /* Set each parent arrow to inactive */
            top_siblings.each(function() {
              $(this).find('.responsive-menu-subarrow').first().html(self.inactiveArrow);
            });
            /* Now Repeat for the current item siblings */
            first_siblings.children('.responsive-menu-submenu').slideUp(200, 'linear').removeClass('responsive-menu-submenu-open');
            first_siblings.each(function() {
              $(this).find('.responsive-menu-subarrow').first().html(self.inactiveArrow);
            });
          }
          if(sub_menu.hasClass('responsive-menu-submenu-open')) {
            sub_menu.slideUp(200, 'linear').removeClass('responsive-menu-submenu-open');
            $(subarrow).html(this.inactiveArrow);
          } else {
            sub_menu.slideDown(200, 'linear').addClass('responsive-menu-submenu-open');
            $(subarrow).html(this.activeArrow);
          }
        },
        menuHeight: function() {
          return $(this.container).height();
        },
        menuWidth: function() {
          return $(this.container).width();
        },
        wrapperHeight: function() {
          return $(this.wrapper).height();
        },
        setWrapperTranslate: function() {
          switch(this.animationSide) {
            case 'left':
              translate = 'translateX(' + this.menuWidth() + 'px)'; break;
            case 'right':
              translate = 'translateX(-' + this.menuWidth() + 'px)'; break;
            case 'top':
              translate = 'translateY(' + this.wrapperHeight() + 'px)'; break;
            case 'bottom':
              translate = 'translateY(-' + this.menuHeight() + 'px)'; break;
            }
            if(this.animationType == 'push') {
              $(this.pageWrapper).css({'transform':translate});
            }
            if(this.pushButton == 'on') {
              $('#responsive-menu-button').css({'transform':translate});
            }
        },
        clearWrapperTranslate: function() {
          if(this.animationType == 'push') {
            $(this.pageWrapper).css({'transform':''});
          }
          if(this.pushButton == 'on') {
            $('#responsive-menu-button').css({'transform':''});
          }
        },
        init: function() {
          var self = this;
          $(this.trigger).on(this.triggerTypes, function(){
            self.triggerMenu();
          });
          $('.responsive-menu-subarrow').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            self.triggerSubArrow(this);
          });
          $(window).resize(function() {
            if($(window).width() > self.breakpoint) {
              if(self.isOpen){
                self.closeMenu();
              }
            } else {
              if(self.isSingleMenu == 'on'){
                $(self.container).addClass('responsive-menu-no-transition');
              }
              if($('.responsive-menu-open').length>0){
                self.setWrapperTranslate();
              }
            }
          });
          if(this.closeOnLinkClick == 'on') {
            $(this.linkElement).on('click', function() {
              self.closeMenu();
            });
          }
          if(this.closeOnClick == 'on') {
            $('body').onclick = function() {};
            $(document).on('click', 'body', function(e) {
              if($(e.target).closest('#responsive-menu-container').length > 0 || $(e.target).closest('#responsive-menu-button').length > 0) {
                return false;
              }
              if(self.isOpen) {
                self.closeMenu();
              }
            });
          }
          if(this.itemTriggerSubMenu == 'on') {
            $('.responsive-menu-item-has-children > ' + this.linkElement).on('click', function(e) {
              e.preventDefault();
              self.triggerSubArrow($(this).children('.responsive-menu-subarrow').first());
            });
          }
        }
      };
      ResponsiveMenu.init();
    });

JS;

  return $js;

  }

}
