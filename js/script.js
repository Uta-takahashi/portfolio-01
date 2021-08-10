jQuery(document).ready(function() {

    //drawer
    var $header = jQuery( '.js-header' );
    let scrollPos;

    jQuery( '.js-toggle' ).on( 'click', function(e) {
      e.preventDefault();
        scrollPos = jQuery(window).scrollTop();//topからのスクロール位置を格納
        $header.toggleClass( 'add-active' );
        jQuery('body').toggleClass('_fixed').css({ top: -scrollPos });//背景固定

        if( $header.hasClass( 'add-active' ) ) {
          jQuery(window).scrollTop(scrollPos);//元の位置までスクロール
        }
    });
    
    jQuery( ' .js-overlay ' ).on( 'click', function(e) {
      e.preventDefault();
      jQuery('body').removeClass('_fixed').css({ top: 0 });//背景固定を解除
      $header.removeClass( 'add-active' );
      jQuery(window).scrollTop(scrollPos);//元の位置までスクロール
    });

    var pcWidth = window.matchMedia( 'screen and (min-width: 769px)' );
    function checkBreakPoint() {
      if( pcWidth.matches ) {
        $header.removeClass( 'add-active' );
      }
    }
    pcWidth.addListener( checkBreakPoint );
    checkBreakPoint();

    // smooth scroll
    jQuery( 'a[href^="#"]' ).on( 'click', function(e){
      var speed = 500;
      var href= jQuery( this ).attr( 'href' );
      var target = jQuery( href === '#' || href === '' ? 'html' : href );
      var position = target.offset().top  - ($header.outerHeight());
      jQuery( 'html, body' ).animate( { scrollTop:position }, speed, 'swing' );
      e.preventDefault();
    });

    //accordion

    jQuery('.accordion-head').click(function () {
      jQuery(this).next().slideToggle();
      jQuery(this).toggleClass('_active');
    });

    //formの入力確認
    jQuery( '.mw_wp_form > form' ).addClass(' contact-form js-form ')
    let $submit = jQuery( '.js-submit' );

    jQuery( '.js-form input, .js-form textarea' ).on( 'change', function() {
        if(
            jQuery( '.js-form input[name="company"]' ).val() !== "" &&
            jQuery( '.js-form input[name="name"]' ).val() !== "" &&
            jQuery( '.js-form input[name="e-mail"]' ).val() !== "" &&
            jQuery( '.js-form input[name="tellno"]' ).val() !== "" &&
            jQuery( '.js-form input[name="contact-type"]' ).val() !== "" &&
            jQuery( '.js-form textarea[name="contact-body"]' ).val() !== "" &&
            jQuery( '.js-form input[name="contact-privacy"]' ).prop( 'checked' ) === true
        ) {
            //すべて入力されたとき
            $submit.prop( 'disabled', false )
            $submit.addClass( '_active' )
        } else {
            //入力されていない時
            $submit.prop( 'disabled', true )
            $submit.removeClass( '_active' )
        }
    });

    //scroll Hint
    new ScrollHint('.js-scrollable');

  }) 
   