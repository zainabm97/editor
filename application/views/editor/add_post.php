<?php header('Access-Control-Allow-Origin: *'); ?>


<!DOCTYPE HTML>
<html lang="en" prefix="og: http://ogp.me/ns#">

<head>
    <!-- Page title -->
    <title>editor</title>

    <!-- Meta data -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="
            width=device-width,
            initial-scale=1.0,
            maximum-scale=1.0,
            user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/editor_flow/sandbox/sandbox.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url();?>/assets/editor_flow/build/content-flow.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/styleEdition.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/site.css"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script>
    var base_url = '<?php echo base_url(); ?>';
    </script>

</head>
<body style="background-color:#f0f0f0;">
    <main id="content" data-editable data-name="main-content" class="">
        <article id="check" class="main post_contenair" style="">
            <section class="article__body" data-cf-flow="article-body" data-cf-flow-label="Body"
                data-cf-flow-max-snippets="2" data-cf-flow-frozen>
                <div class="content-snippet" data-cf-snippet="1" data-cf-snippet-permanent>
                    <h1>...... اضف عنوان الخبر.....</h1>
                </div>

                <div class="content-snippet" data-cf-snippet="2">
                     <h6> ........وصف الخبر.......</h6>
                 </div>
            </section>

        </article>
    </main>
<script type="text/javascript" src="<?php echo base_url();?>/assets/editor/build/content-tools.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/editor_flow/build/content-flow.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/editor_flow/sandbox/sandbox.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/site.js"></script>
<!-- <script type="text/javascript" src="<?php //echo base_url();?>/assets/upload.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/editor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>

</html>