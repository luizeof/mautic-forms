<?php
/**
 * @package     Mautic Forms
 * @copyright   2016 Mautic Contributors. All rights reserved.
 * @author      Agência Orangeweb
 * @link        http://www.orangeweb.com.br
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php $view['slots']->output('pageTitle', 'Mautic'); ?></title>
        <?php if (isset($page)) : ?>
            <meta name="description" content="<?php echo $page->getMetaDescription(); ?>">
        <?php endif; ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
        <script src="https://cdn.rawgit.com/orangeweb/mautic-form-masks/master/mautic-form-masks.js"></script>
        <style>

        /**
         * @package     Mautic Forms
         * @copyright   2016 Mautic Contributors. All rights reserved.
         * @author      Agência Orangeweb
         * @link        http://www.orangeweb.com.br
         * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
         */

        .mauticform_wrapper {}
        .mauticform-innerform {}
        .mauticform-post-success {}
        .mauticform-name { font-weight: bold; font-size: 1.5em; margin-bottom: 3px; }
        .mauticform-description { margin-top: 2px; margin-bottom: 10px; }
        .mauticform-error { margin-bottom: 10px; color: red; }
        .mauticform-message { margin-bottom: 10px;color: green; }
        .mauticform-row { display: block; margin-bottom: 20px; }
        .mauticform-label { font-size: 1.1em; display: block; font-weight: bold; margin-bottom: 5px; }
        .mauticform-row.mauticform-required .mauticform-label:after { color: #e32; content: " *"; display: inline; }
        .mauticform-helpmessage { display: block; font-size: 0.9em; margin-bottom: 3px; }
        .mauticform-errormsg { display: block; color: red; margin-top: 2px; }
        .mauticform-selectbox, .mauticform-input, .mauticform-textarea { width: 50%; padding: 0.2em 0.2em; border: 1px solid #CCC; box-shadow: 0px 1px 3px #DDD inset; border-radius: 4px; box-sizing: border-box; }
        .mauticform-checkboxgrp-row {}
        .mauticform-checkboxgrp-label { font-weight: normal; }
        .mauticform-checkboxgrp-checkbox {}
        .mauticform-radiogrp-row {}
        .mauticform-radiogrp-label { font-weight: normal; }
        .mauticform-radiogrp-radio {}

          @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

            .mauticform_wrapper, .mauticform_wrapper *{
              font-family:'Ubuntu', sans-serif;
              font-size:14px;
            }

            .mauticform_wrapper {
              background: #572A72 !important;
              color:#FFF;
              padding: 20px;
            }

            .mauticform-input, .mauticform-textarea{
              border:none!important;
              width:100%!important;
              -moz-border-radius:0!important;
              -webkit-border-radius:0!important;
              border-radius:0!important;
              font-size:14px;
              color:#000000!important;
              padding:10px!important;
              -moz-box-sizing:border-box;
              -webkit-box-sizing:border-box;
              box-sizing:border-box;
            }

            .mautic-form label{
              font-weight:bold !important;
            }

            .mauticform-selectbox{
              border:none!important;
              width:100%!important;
              -moz-border-radius:0!important;
              -webkit-border-radius:0!important;
              border-radius:0!important;
              font-size:18px;
              color:#000000!important;
              padding:10px!important;
              -moz-box-sizing:border-box;
              -webkit-box-sizing:border-box;
              box-sizing:border-box;
            }

            .mauticform-button{
              color:#FFF !important;
              background-color:#4E648E!important;
              margin:8px auto 0;
              cursor:pointer;
              font-size:20px;
              font-weight:500;
              -moz-border-radius:3px;
              -webkit-border-radius:3px;
              border-radius:3px;
              padding:6px 20px;
              line-height:1.7em;
              background:transparent;
              border:2px solid;
              -moz-transition:all 0.2s;
              -webkit-transition:all 0.2s;
              transition:all 0.2s;
              width:100%;
            }

            .mauticform-button:hover {
              border-color:#eee;
              padding:6px 20px!important;
              background-color: #7788AA;
            }

            .mauticform-errormsg {
              color:#FFF0AA !important;
              font-weight: normal;
            }

            .mauticform_wrapper .row{
              margin:16px 0;
            }

        </style>
        <?php $view['assets']->outputHeadDeclarations(); ?>
    </head>
    <body>
        <?php $view['assets']->outputScripts("bodyOpen"); ?>
        <?php $view['slots']->output('_content'); ?>
        <?php $view['assets']->outputScripts("bodyClose"); ?>
    </body>
</html>
