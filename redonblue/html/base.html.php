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
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('themes/redonblue/css/default-style.css'); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('themes/redonblue/css/form-style.css'); ?>" type="text/css" />
        <?php $view['assets']->outputHeadDeclarations(); ?>
    </head>
    <body>
        <?php $view['assets']->outputScripts("bodyOpen"); ?>
        <?php $view['slots']->output('_content'); ?>
        <?php $view['assets']->outputScripts("bodyClose"); ?>
    </body>
</html>
