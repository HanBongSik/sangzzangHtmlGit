<!DOCTYPE html>
<html lang="ko">
<head>
    <?php
    $version = date("YmdHis");
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>디자인 가이드</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="/assets/css/default.css?v=<?php echo $version ?>" rel="stylesheet">
    <link href="/assets/css/guide-only.css?v=<?php echo $version ?>" rel="stylesheet">
    <link href="/assets/css/guide.css?v=<?php echo $version ?>" rel="stylesheet">
    <!--        <link href="https://hanbongsik.cafe24.com/guide/assets/css/guide.css?v=1" rel="stylesheet">-->
    <link href="/assets/css/layout.css?v=1" rel="stylesheet">

    <!-- lib -->
    <script src="/assets/lib/jquery-3.6.3.min.js?v=1"></script>
    <script src="/assets/lib/jquery-ui.js?v=1"></script>
    <link href="/assets/lib/jquery-ui.css?v=1" type="text/css" rel="stylesheet"/>
    <!-- lib End -->

    <script src="/assets/js/guide-layout.js?v=<?php echo $version ?>"></script>
    <script src="/assets/js/guide.js?v=<?php echo $version ?>"></script>
    <script src="/assets/js/ui.js?v=<?php echo $version ?>"></script>
</head>

<body class="_ENABLED">
<div class="__guide__wrapper">
    <?php include('./header.php')?>

    <?php include('./container-form.php')?>

    <?php /*include('./footer.php')*/?>
</div>
<div class="__btn-top-wrapper">
    <a href="#" id="__guideBtnTop" title="위로">↑</a>
</div>
</body>

</html>
