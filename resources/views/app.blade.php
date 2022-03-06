<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>My Apps</title>
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/circular_progress_bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/farbtastic.css') }}">
    <link rel="stylesheet" type="text/css" href="<?php echo mix('css/app.css'); ?>">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo asset('css/app.css') . '?' . strtotime('now'); ?>"> -->
    
    <!-- tailwindcss 使用 CDN，先開發之後再安裝 -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div id="app">
        <router-view></router-view>
    </div>
    <script src="<?php echo mix('js/app.js'); ?>"></script>
    <!-- <script src="<?php echo asset('js/app.js'); ?>"></script> -->
</body>
</html>