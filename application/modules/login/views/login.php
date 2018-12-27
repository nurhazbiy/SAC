<?php
if (isset($this->session->userdata['logged_in'])) {
  header("location: ".base_url()."index.php/login/user_login_process");
}
?>

      <style type="text/css">
        /**
           * =================================================================== 
           *
           *  Lhander 1.0 | Vendor/Third Party CSS 
           *  url: styleshout.com
           *  01-11-2016
           *
           * =================================================================== 
           */


          /**
           * jQuery FlexSlider v2.5.0
           * http://www.woothemes.com/flexslider/
           *
           * Copyright 2012 WooThemes
           * Free to use under the GPLv2 and later license.
           * http://www.gnu.org/licenses/gpl-2.0.html
           *
           * Contributing author: Tyler Smith (@mbmufffin)
           * 
           * ===================================================================
           */

          /* reset */
          .flex-container a:hover,
          .flex-slider a:hover,
          .flex-container a:focus,
          .flex-slider a:focus {
            outline: none;
          }

          .slides,
          .slides > li,
          .flex-control-nav,
          .flex-direction-nav {
            margin: 0;
            padding: 0;
            list-style: none;
          }

          .flex-pauseplay span {
            text-transform: capitalize;
          }

          /* base styles */
          .flexslider {
            margin: 0;
            padding: 0;
          }

          .flexslider .slides > li {
            display: none;
            -webkit-backface-visibility: hidden;
          }

          .flexslider .slides img {
            width: 100%;
            display: block;
          }

          .flexslider .slides:after {
            content: "\0020";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0;
          }

          html[xmlns] .flexslider .slides {
            display: block;
          }

          * html .flexslider .slides {
            height: 1%;
          }

          .no-js .flexslider .slides > li:first-child {
            display: block;
          }


          /**
           * Magnific Popup CSS 
           * ===================================================================
           */
           
          .mfp-bg {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1042;
            overflow: hidden;
            position: fixed;
            background: #0b0b0b;
            opacity: 0.8;
            filter: alpha(opacity=80);
          }

          .mfp-wrap {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1043;
            position: fixed;
            outline: none !important;
            -webkit-backface-visibility: hidden;
          }

          .mfp-container {
            text-align: center;
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            padding: 0 8px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
          }

          .mfp-container:before {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
          }

          .mfp-align-top .mfp-container:before {
            display: none;
          }

          .mfp-content {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            margin: 0 auto;
            text-align: left;
            z-index: 1045;
          }

          .mfp-inline-holder .mfp-content,
          .mfp-ajax-holder .mfp-content {
            width: 100%;
            cursor: auto;
          }

          .mfp-ajax-cur {
            cursor: progress;
          }

          .mfp-zoom-out-cur, .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
            cursor: -moz-zoom-out;
            cursor: -webkit-zoom-out;
            cursor: zoom-out;
          }

          .mfp-zoom {
            cursor: pointer;
            cursor: -webkit-zoom-in;
            cursor: -moz-zoom-in;
            cursor: zoom-in;
          }

          .mfp-auto-cursor .mfp-content {
            cursor: auto;
          }

          .mfp-close,
          .mfp-arrow,
          .mfp-preloader,
          .mfp-counter {
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }

          .mfp-loading.mfp-figure {
            display: none;
          }

          .mfp-hide {
            display: none !important;
          }

          .mfp-preloader {
            color: #CCC;
            position: absolute;
            top: 50%;
            width: auto;
            text-align: center;
            margin-top: -0.8em;
            left: 8px;
            right: 8px;
            z-index: 1044;
          }

          .mfp-preloader a {
            color: #CCC;
          }

          .mfp-preloader a:hover {
            color: #FFF;
          }

          .mfp-s-ready .mfp-preloader {
            display: none;
          }

          .mfp-s-error .mfp-content {
            display: none;
          }

          button.mfp-close,
          button.mfp-arrow {
            overflow: visible;
            cursor: pointer;
            background: transparent;
            border: 0;
            -webkit-appearance: none;
            display: block;
            outline: none;
            padding: 0;
            z-index: 1046;
            -webkit-box-shadow: none;
            box-shadow: none;
          }

          button::-moz-focus-inner {
            padding: 0;
            border: 0;
          }

          .mfp-close {
            width: 44px;
            height: 44px;
            line-height: 44px;
            position: absolute;
            right: 0;
            top: 0;
            text-decoration: none;
            text-align: center;
            opacity: 0.65;
            filter: alpha(opacity=65);
            padding: 0 0 18px 10px;
            color: #FFF;
            font-style: normal;
            font-size: 28px;
            font-family: Arial, Baskerville, monospace;
          }

          .mfp-close:hover,
          .mfp-close:focus {
            opacity: 1;
            filter: alpha(opacity=100);
          }

          .mfp-close:active {
            top: 1px;
          }

          .mfp-close-btn-in .mfp-close {
            color: #333;
          }

          .mfp-image-holder .mfp-close,
          .mfp-iframe-holder .mfp-close {
            color: #FFF;
            right: -6px;
            text-align: right;
            padding-right: 6px;
            width: 100%;
          }

          .mfp-counter {
            position: absolute;
            top: 0;
            right: 0;
            color: #CCC;
            font-size: 12px;
            line-height: 18px;
            white-space: nowrap;
          }

          .mfp-arrow {
            position: absolute;
            opacity: 0.65;
            filter: alpha(opacity=65);
            margin: 0;
            top: 50%;
            margin-top: -55px;
            padding: 0;
            width: 90px;
            height: 110px;
            -webkit-tap-highlight-color: transparent;
          }

          .mfp-arrow:active {
            margin-top: -54px;
          }

          .mfp-arrow:hover,
          .mfp-arrow:focus {
            opacity: 1;
            filter: alpha(opacity=100);
          }

          .mfp-arrow:before,
          .mfp-arrow:after,
          .mfp-arrow .mfp-b,
          .mfp-arrow .mfp-a {
            content: '';
            display: block;
            width: 0;
            height: 0;
            position: absolute;
            left: 0;
            top: 0;
            margin-top: 35px;
            margin-left: 35px;
            border: medium inset transparent;
          }

          .mfp-arrow:after,
          .mfp-arrow .mfp-a {
            border-top-width: 13px;
            border-bottom-width: 13px;
            top: 8px;
          }

          .mfp-arrow:before,
          .mfp-arrow .mfp-b {
            border-top-width: 21px;
            border-bottom-width: 21px;
            opacity: 0.7;
          }

          .mfp-arrow-left {
            left: 0;
          }

          .mfp-arrow-left:after,
          .mfp-arrow-left .mfp-a {
            border-right: 17px solid #FFF;
            margin-left: 31px;
          }

          .mfp-arrow-left:before,
          .mfp-arrow-left .mfp-b {
            margin-left: 25px;
            border-right: 27px solid #3F3F3F;
          }

          .mfp-arrow-right {
            right: 0;
          }

          .mfp-arrow-right:after,
          .mfp-arrow-right .mfp-a {
            border-left: 17px solid #FFF;
            margin-left: 39px;
          }

          .mfp-arrow-right:before,
          .mfp-arrow-right .mfp-b {
            border-left: 27px solid #3F3F3F;
          }

          .mfp-iframe-holder {
            padding-top: 40px;
            padding-bottom: 40px;
          }

          .mfp-iframe-holder .mfp-content {
            line-height: 0;
            width: 100%;
            max-width: 900px;
          }

          .mfp-iframe-holder .mfp-close {
            top: -40px;
          }

          .mfp-iframe-scaler {
            width: 100%;
            height: 0;
            overflow: hidden;
            padding-top: 56.25%;
          }

          .mfp-iframe-scaler iframe {
            position: absolute;
            display: block;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
            background: #000;
          }

          /* Main image in popup */
          img.mfp-img {
            width: auto;
            max-width: 100%;
            height: auto;
            display: block;
            line-height: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 40px 0 40px;
            margin: 0 auto;
          }

          /* The shadow behind the image */
          .mfp-figure {
            line-height: 0;
          }

          .mfp-figure:after {
            content: '';
            position: absolute;
            left: 0;
            top: 40px;
            bottom: 40px;
            display: block;
            right: 0;
            width: auto;
            height: auto;
            z-index: -1;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
            background: #444;
          }

          .mfp-figure small {
            color: #BDBDBD;
            display: block;
            font-size: 12px;
            line-height: 14px;
          }

          .mfp-figure figure {
            margin: 0;
          }

          .mfp-bottom-bar {
            margin-top: -36px;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            cursor: auto;
          }

          .mfp-title {
            text-align: left;
            line-height: 18px;
            color: #F3F3F3;
            word-wrap: break-word;
            padding-right: 36px;
          }

          .mfp-image-holder .mfp-content {
            max-width: 100%;
          }

          .mfp-gallery .mfp-image-holder .mfp-figure {
            cursor: pointer;
          }

          @media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
            /**
                 * Remove all paddings around the image on small screen
                 */
            .mfp-img-mobile .mfp-image-holder {
              padding-left: 0;
              padding-right: 0;
            }

            .mfp-img-mobile img.mfp-img {
              padding: 0;
            }

            .mfp-img-mobile .mfp-figure:after {
              top: 0;
              bottom: 0;
            }

            .mfp-img-mobile .mfp-figure small {
              display: inline;
              margin-left: 5px;
            }

            .mfp-img-mobile .mfp-bottom-bar {
              background: rgba(0, 0, 0, 0.6);
              bottom: 0;
              margin: 0;
              top: auto;
              padding: 3px 5px;
              position: fixed;
              -webkit-box-sizing: border-box;
              -moz-box-sizing: border-box;
              box-sizing: border-box;
            }

            .mfp-img-mobile .mfp-bottom-bar:empty {
              padding: 0;
            }

            .mfp-img-mobile .mfp-counter {
              right: 5px;
              top: 3px;
            }

            .mfp-img-mobile .mfp-close {
              top: 0;
              right: 0;
              width: 35px;
              height: 35px;
              line-height: 35px;
              background: rgba(0, 0, 0, 0.6);
              position: fixed;
              text-align: center;
              padding: 0;
            }
          }
          @media all and (max-width: 900px) {
            .mfp-arrow {
              -webkit-transform: scale(0.75);
              transform: scale(0.75);
            }

            .mfp-arrow-left {
              -webkit-transform-origin: 0;
              transform-origin: 0;
            }

            .mfp-arrow-right {
              -webkit-transform-origin: 100%;
              transform-origin: 100%;
            }

            .mfp-container {
              padding-left: 6px;
              padding-right: 6px;
            }
          }
          .mfp-ie7 .mfp-img {
            padding: 0;
          }

          .mfp-ie7 .mfp-bottom-bar {
            width: 600px;
            left: 50%;
            margin-left: -300px;
            margin-top: 5px;
            padding-bottom: 5px;
          }

          .mfp-ie7 .mfp-container {
            padding: 0;
          }

          .mfp-ie7 .mfp-content {
            padding-top: 44px;
          }

          .mfp-ie7 .mfp-close {
            top: 0;
            right: 0;
            padding-top: 0;
          }

          /*# sourceMappingURL=vendor.css.map */
      </style>

      <style type="text/css">
          /*
         * Where can you use it?
         * here's an example: https://bit.ly/1mPFJdD
         */

        .login-box-msg{
          font-size: 13px;
        }

        <?php
          $ekunbarbg = range(1, 15);
          shuffle($ekunbarbg);
          foreach ($ekunbarbg as $ekunbarbg) {
          echo ".wrap-login100 {
              background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2)), #090909 url(".base_url()."assets/coroowicaksono/homepage/images/bg_compress/".$ekunbarbg.".jpeg) no-repeat center;
            }";
          }
        ?>

        .logo_1, .logo_2{
          display: inline-block;
          text-transform: uppercase;
          color: #FFF;
        }
        .logo_1, .logo_2{
          opacity: 0;
          -webkit-animation-name: bounceIn;
                  animation-name: bounceIn;
          -webkit-animation-duration: 450ms;
                  animation-duration: 450ms;
          -webkit-animation-timing-function: linear;
                  animation-timing-function: linear;
          -webkit-animation-fill-mode: forwards;
                  animation-fill-mode: forwards;
        }
        .logo_1{-webkit-animation-delay: 0.5s;animation-delay: 0.5s;}
        .logo_2{-webkit-animation-delay: 0.75s;animation-delay: 0.75s;}

        @media screen and (min-width: 400px) {
          .show-apk{
            display: none
          }
          .hide-apk, .download-apk, .a_1, .a_2, .a_3{
            display: none;
          }
        }

        @media screen and (max-width: 750px) {
          .show-apk{
            display: none
          }
          .a_1, .a_2, .a_3{
            display: inline-block;
            text-transform: uppercase;
            color: #FFF;
          }
          .download-apk{position:fixed;left:10px;top:10px;height:50px;}
          .a_1, .a_2, .a_3, .logo_1, .logo_2,.download-apk, .hide-apk, .show-apk{
            opacity: 0;
            -webkit-animation-name: bounceIn;
                    animation-name: bounceIn;
            -webkit-animation-duration: 450ms;
                    animation-duration: 450ms;
            -webkit-animation-timing-function: linear;
                    animation-timing-function: linear;
            -webkit-animation-fill-mode: forwards;
                    animation-fill-mode: forwards;
          }
          .show-apk{-webkit-animation-delay: 0.5s;animation-delay: 0.5s;}
          .hide-apk{-webkit-animation-delay: 0.5s;animation-delay: 0.5s;}
          .download-apk{-webkit-animation-delay: 1.25s;animation-delay: 1.25s;}
          .a_1{-webkit-animation-delay: 1.5s;animation-delay: 1.5s;}
          .a_2{-webkit-animation-delay: 2s;animation-delay: 2s;}
          .a_3{-webkit-animation-delay: 2.25s;animation-delay: 2.25s;}
        }

        @-webkit-keyframes bounceIn{
          0%{
            opacity: 0;
            -webkit-transform: scale(0.3) translate3d(0,0,0);
                    transform: scale(0.3) translate3d(0,0,0);
          }
          50%{
            opacity: 0.9;
            -webkit-transform: scale(1.1);
                    transform: scale(1.1);
          }
          80%{
            opacity: 1;
            -webkit-transform: scale(0.89);
                    transform: scale(0.89);
          }
          100%{
            opacity: 1;
            -webkit-transform: scale(1) translate3d(0,0,0);
                    transform: scale(1) translate3d(0,0,0);
          }
        }

        @keyframes bounceIn{
          0%{
            opacity: 0;
            -webkit-transform: scale(0.3) translate3d(0,0,0);
                    transform: scale(0.3) translate3d(0,0,0);
          }
          50%{
            opacity: 0.9;
            -webkit-transform: scale(1.1);
                    transform: scale(1.1);
          }
          80%{
            opacity: 1;
            -webkit-transform: scale(0.89);
                    transform: scale(0.89);
          }
          100%{
            opacity: 1;
            -webkit-transform: scale(1) translate3d(0,0,0);
                    transform: scale(1) translate3d(0,0,0);
          }
        }

        .fullscreen-bg__video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #FFF;
            object-fit: cover;
        }
      
        .form-group-default.has-error {
            background-color: rgba(245,87,83,.1);
        }
        .form-group-default {
            background-color: #fff;
            position: relative;
            border: 1px solid rgba(0,0,0,.07);
            border-radius: 2px;
            padding-top: 7px;
            padding-left: 12px;
            padding-right: 12px;
            padding-bottom: 4px;
            overflow: hidden;
            width: 100%;
            -webkit-transition: background-color .2s ease;
            transition: background-color .2s ease;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .form-group-default .form-control.error {
            color: #2c2c2c;
        }
        .form-group-default.has-success .form-control, .form-group-default.has-success .form-control:focus, .form-group-default.has-error .form-control, .form-group-default.has-error .form-control:focus {
            border: none;
            box-shadow: none;
        }
        .has-error .form-control {
            border-color: #f55753;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .form-group-default .form-control {
            border: none;
            height: 25px;
            min-height: 25px;
            padding: 0;
            margin-top: -4px;
            background: 0 0;
        }
        .error {
            font-size: 12px;
            color: #f55753;
            display: block;
        }
        .form-control {
            background-color: #fff;
            background-image: none;
            border: 1px solid rgba(0,0,0,.07);
            -webkit-appearance: none;
            color: #2c2c2c;
            outline: 0;
            padding: 8px 12px;
            line-height: normal;
            font-size: 14px;
            font-weight: 400;
            vertical-align: middle;
            min-height: 35px;
            -webkit-transition: all .12s ease;
            transition: all .12s ease;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 2px;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            -webkit-transition: background .2s linear 0s;
            transition: background .2s linear 0s;
        }
        .form-control {
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .dropdown-menu, .form-control, .modal-content, .popover {
            background-clip: padding-box;
        }
        input, input:focus {
            -webkit-transition: none!important;
        }
        label, input, button, select, textarea {
            font-size: 14px;
            font-weight: 400;
            line-height: 20px;
        }
        button, input, optgroup, select, textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }
      </style>


  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
      <?php $attributes = array('class' => 'login100-form validate-form'); echo form_open('/login/user_login_process',$attributes); ?>
          <span class="login100-form-title p-b-26" style="float:right;margin-top:-5px">
            <!-- <img src="<?php echo base_url();?>ericsson/icon/ericsson_blue.png" style="height: 50px"> -->
          </span>

          <span class="login100-form-title p-b-26" style="text-align: left">
            Hi, welcome back!
            <?php
              if (isset($logout_message)) {
              echo "<div class='message'>";
              echo $logout_message;
              echo "</div>";
              }
            ?>
            <?php
              if (isset($error_message)) {
                echo "<p class='login-box-msg text-danger'>".$error_message."</p>";
              }else{
                echo "<p class='login-box-msg'>Sign in to start your session</p>";
              }
            ?>
          </span>

          <div style="margin-top:10px" class="form-group form-group-default has-error">
            <label>Login</label>
            <div class="controls">
              <input type="text" name="username" placeholder="Email" class="form-control error" required="" aria-required="true" aria-invalid="true">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
          </div>

          <div class="form-group form-group-default has-error">
            <label>Password</label>
            <div class="controls">
              <input type="password" class="form-control error" name="password" placeholder="Credentials" required="" aria-required="true" aria-invalid="true">
            </div>
          </div>

          <div class="flex-sb-m w-full p-t-3 p-b-45">
            <div class="contact100-form-checkbox">
            </div>

            <div>
              <a href="<?php echo base_url();?>index.php/login/forgot_password" class="txt1">
                Forgot Password?
              </a>
            </div>
          </div>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button type="submit" class="login100-form-btn">
                Login
              </button>
            </div>
          </div>

         <!--  <div class="text-center p-t-15">
            <span class="txt1">
              Don’t have an account?
            </span>

            <a class="txt2" href="<?php echo base_url();?>index.php/login/add">
              Sign Up
            </a>
          </div> -->

          <div class="text-center bottom-stick" style="line-height: 10px;">
            <span class="txt1">
              <br/>
              © 2018 SAC. All Rights Reserved.<br/>
            </span>
          </div>
        </form>

        <div class='video-link desktop' style='position:fixed;top:75%;left:20px'>
          <!-- <a href="#video-popup"><img src="<?php echo base_url();?>assets/coroowicaksono/homepage/images/play-button.png" alt="" width="80px"></a> -->
          <br/>
          <p style='font-size:11px;max-width: 60%;color:#FFF'>Log-in is only allowed for authorized users. If you are not an authorized user, please exit immediately. In accordance with requirements of data protection laws, we hereby inform you that personally identifiable information will be handled in log files for legal, security and costs reasons.</p>
          
        </div>
        <!--<div class="login100-more" style="background-image: url('<?php echo base_url();?>assets/img/Antenna_Tower_2.jpg');">
        </div>-->
      </div>
    </div>
  </div>