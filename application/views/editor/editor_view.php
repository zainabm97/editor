 <?php header('Access-Control-Allow-Origin: *'); ?>


 <!DOCTYPE HTML>
 <html lang="en" prefix="og: http://ogp.me/ns#">

 <head>
     <!-- Page title -->
     <title>Sandbox - Content flow</title>

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
     <!-- <div class="content-snippet" data-cf-snippet="1" data-cf-snippet-permanent>

         <h4 class="align-center h4_editor  mbr-fonts-style display-4" style="">
             الأدب العربي في العصر الحديث
         </h4>
     </div> -->
     <main id="content" data-editable data-name="main-content" class="">
         <div class="content-snippet" data-cf-snippet="1" data-cf-snippet-permanent>

             <h4 class="align-center h4_editor  mbr-fonts-style display-4" style="">
                 الأدب العربي في العصر الحديث
             </h4>
         </div>

         <article id="check" class="main">
             <section class="article__body" data-cf-flow="article-body" data-cf-flow-label="Body"
                 data-cf-flow-max-snippets="2" data-cf-flow-frozen>
                 <div class="content-snippet" data-cf-snippet="1" data-cf-snippet-permanent>

                     <img src="<?php echo base_url();?>assets/pic/pote.jpg" alt="">
                     <p class="lead" style="margin: 40px;"><b>الأدب العربي</b> في العصر الحديث حتى مستهل القرن التاسع
                         عشر كانت الحياة العربية
                         بمجملها تخضع لركود
                         شامل في ظل سيطرة الدولة العثمانية على أقطار الوطن العربي، سواء أكانت تلك السيطرة قوية مباشرة
                         كما في بلاد الشام والعراق ومصر، أم ضعيفة أو إسمية كما في أقطار المغرب العربي وبلدان شبه الجزيرة
                         العربية.</p>
                     <blockquote class="blockquote block-editor">
                         <p class="mb-0">في كلّ فؤادٍ غليان، في الكوخ الساكنِ أحزان، في كلّ مكانٍ روحٌ تصرخُ في الظلمات،
                             في كلّ مكانٍ يبكي صوت.</p>
                         <footer class="blockquote-footer"> &nbsp;بعض أقوال&nbsp;<cite title="Source Title">نازك
                                 الملائكة &nbsp;</cite></footer>
                     </blockquote>
                     <h5 class="align-center "></h5>
                     <h3 class="heading-editor">
                         بواعث النهضة الأدبية في العصر الحديث
                         <small class="text-muted">البعثات العلمية</small>
                     </h3>

                     <img class="img-right" src="<?php echo base_url();?>assets/pic/one.jpg" alt="">
                     <p class="lead" style="padding:18px;">يأتي هذا الباعث في المقدمة. وقد بدأت فاعليته بعد انتشار
                         الثقافتين الفرنسية
                         والإنگليزية في
                         المدارس والمعاهد التي أنشئت في الشام ومصر وتخرج فيها المعلمون الذين بعث بعضهم إلى فرنسا لإتمام
                         تحصيلهم في مختلف العلوم. وكانت أولى البعثات عام 1826 في عهد محمد علي باشا، إذ اختير أربعة
                         وأربعون طالباً من طلبة الأزهر، رأسهم رجل النهضة الكبير رفاعة الطهطاوي (1801-1873م). وقد عمل
                         هؤلاء المبعوثون بعد عودتهم، وكل في نطاق اختصاصه، في ميداني الترجمة والتعليم. ثم توالت البعثات
                         فيما بعد، فشملت عدداً من البلدان الأمريكية والأوربية.

                         الترجمة
                         كان لترجمة الكتب الفرنسية والإنگليزية إلى العربية أثر كبير في النهضة الأدبية. وقد بدأت حركة
                         الترجمة في بلاد الشام على يد بعض رجال البعثات الدينية، إذ ترجم هؤلاء بعض الكتب التي احتاجوا
                         إليها في التدريس. لكن حركة الترجمة لم تقو وتتنوع إلا بعد عودة رجال البعثة المصرية الأولى الذين
                         بدؤوا بترجمة بعض الكتب العلمية. ويعود الفضل الأكبر في تنشيط هذه الحركة إلى الطهطاوي الذي أنشأ
                         «مدرسة الألسن» عام 1835. وقد عنيت هذه المدرسة بتعليم اللغات الأجنبية المختلفة، وترجم خريجوها
                         مئات الكتب والقصص والمسرحيات. وشارك السوريون واللبنانيون بقوة في تلك الحركة، ولاسيما بعد أن
                         هاجر بعضهم إلى مصر، مثل: نجيب الحداد، وبشارة شديد، وطانيوس عبده، حتى بلغ عدد الكتب المترجمة
                         نحواً من ألفي رسالة وكتاب. ثم اتسع نطاق الترجمة بازدياد مطرد وما زال يتسع حتى اليوم إذ تشمل
                         المترجمات أهم روائع الأدب العالمي في سائر اللغات الأجنبية الحية.</p>

                     <img src="<?php echo base_url();?>assets/pic/two.jpg" alt="">

                     <ul class="list-unstyled">

                         <li class="editor-list">اهم الشعراء العرب
                             <ul>
                                 <li>امرؤ القيس</li>
                                 <li>زهير بن ابي سلمى</li>
                                 <li>قيس بن الملوح</li>
                                 <li>حسان بن ثابت</li>
                             </ul>
                         </li>

                     </ul>

                     <h4 class="align-center head_title mbr-fonts-style display-4" style="    margin-bottom: 20px;">
                         من هي نازك الملائكة
                     </h4>
                     <img class="img-left" src="<?php echo base_url();?>assets/pic/three.jpg" alt="">
                     <p class="lead" style="padding:18px;">نازك الملائكة نازك الملائكة هي شاعرة عراقيّة وُلدت عام 1922
                         ميلاديًا، في بيئة ثقافية تخرّجت من دار المعلمين، ثم دخلت معهد الفنون الجميلة، ومن ثم أكملت
                         دراسة الماجستير في الأدب المقارن، وبعد دراستها عُيّنت أستاذة في جامعة بغداد وغيرها من الجامعات،
                         ثم اختارت نازك الملائكة أن تعيش في عزلة لا يُعلم لها سبب وتوفيت في عام 2007 وكان عمرها في ذلك
                         الوقت 83 عامًا، عُرِف وانتشر عن نازك الملائكة بأنّها أوّل من كتب في الشعر الحر لكنها كشفت في
                         أحد المرّات أنها لم تكن أول من كتب هذا النوع من الشعر.وفي هذا المقال سيتم تحليل قصيدة الشهيد
                         لنازك الملائكة.[١]</p>

                 </div>
                 <div class="content-snippet" data-cf-snippet="2">
                     <p> </p>
                 </div>
             </section>

         </article>
         <!--  endeditable main-content -->



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