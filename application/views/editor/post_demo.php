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
    <div class="content-snippet" data-cf-snippet="1" data-cf-snippet-permanent>

        <!-- <h4 class="align-center h4_editor  mbr-fonts-style display-4" style="">
            This Is Demo Post For Editor Clarification
        </h4> -->
    </div>

    <main id="content" data-editable data-name="main-content" class="">
        <!-- <div class="content-snippet" data-cf-snippet="1" data-cf-snippet-permanent>

            <h4 class="align-center h4_editor  mbr-fonts-style display-4" style="">
                الأدب العربي في العصر الحديث
            </h4>
        </div> -->
        <article id="check" class="main post_contenair">
            <section class="article__body" data-cf-flow="article-body" data-cf-flow-label="Body"
                data-cf-flow-max-snippets="2" data-cf-flow-frozen>
                <div class="content-snippet" data-cf-snippet="1" data-cf-snippet-permanent>
                    <img src="<?php echo base_url();?>assets/pic/mohesr.jpg" alt="">

                    <p class="title">في الذكرى 54 لتأسيسها.. وزير التعليم يهنئ جامعة الموصل ويؤكد أن المؤسسات التعليمية
                        وطلبتها تحملوا المسؤولية واستمروا في التحصيل المعرفي</p>
                    <p>
                    </p>
                    <p>هنأ وزير التعليم العالي والبحث العلمي الأستاذ الدكتور نبيل كاظم عبد الصاحب جامعة الموصل وطاقمها
                        العلمي والإداري وطلبتها بالذكرى الرابعة والخمسين لتأسيسها.</p>
                    <p>وقال في كلمته إن هذه المناسبة فرصة لنا جميعا أن نستحضر تاريخا أكاديميا وعلميا حافلا بالعطاء منذ
                        ستينيات القرن المنصرم حيث لحظة التأسيس وحتى هذه الأيام وأن نمضي بتطوير مسار هذه المؤسسة
                        التعليمية وتقويم منجزها ورسم سياسة التنافس والنجاح في ضوء المتطلبات العلمية ومعايير الجودة
                        وإدارة المتغيرات وتذليل التحديات والظروف الاستثنائية.</p>
                    <p>وأضاف أن مؤسساتنا التعليمية بملاكاتها الأكاديمية والوظيفية وطلبتها خاضت تجربة ليس يسيرة في العام
                        الماضي والعام الحالي واشترك الجميع في تحمل المسؤولية واستمرار التحصيل المعرفي ومراعاة التواصل مع
                        المنظمات الدولية المختصة.</p>
                    <p>وأوصى وزير التعليم الملاكات التدريسية والإدارية في جامعة الموصل بأن يركزوا جهودهم وأبحاثهم في
                        خدمة محافظة نينوى والتكامل مع مؤسسات الدولة لصياغة رسالة بلدنا العراق ومضمونها الوطني الشامل
                        الذي يمتد على كامل الأرض العراقية الطيبة.</p>
                    <p></p>
                </div>

                <div class="content-snippet" data-cf-snippet="2">
                     <p> </p>
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