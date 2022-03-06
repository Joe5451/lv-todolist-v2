<template>
<section>
    <header class="main_header px-5 py-3">
        <nav class="main_nav">
            <a href="home" class="main_nav_link">
                <i class="fas fa-list"></i>
                首頁
            </a>
            <a href="tag_list" class="main_nav_link">
                <i class="fas fa-tags"></i>
                標籤管理
            </a>
            <a href="trash" class="main_nav_link">
                <i class="fas fa-trash-alt"></i>
                垃圾桶
            </a>
            <a href="" class="main_nav_link">
                <i class="fas fa-power-off"></i>
                登出
            </a>
        </nav>
    </header>

    <header id="mobile_menu" class="mobile_header px-5 py-3">
        <nav class="mobile_nav">
            <a href="home" class="mobile_nav_link">
                <i class="fas fa-list"></i>
                首頁
            </a>
            <a href="tag_list" class="mobile_nav_link">
                <i class="fas fa-tags"></i>
                標籤管理
            </a>
            <a href="trash.php" class="mobile_nav_link">
                <i class="fas fa-trash-alt"></i>
                垃圾桶
            </a>
            <a href="" class="mobile_nav_link">
                <i class="fas fa-power-off"></i>
                登出
            </a>
        </nav>
    </header>

    <div class="menu_btn">
        <div class="menu_btn_bar menu_btn_bar1"></div>
        <div class="menu_btn_bar menu_btn_bar2"></div>
        <div class="menu_btn_bar menu_btn_bar3"></div>
    </div>
</section>
</template>

<script>
    export default {
        mounted() {
            // $('.menu_btn').click(function() {
            //     $(this).toggleClass('active');
            //     $('#mobile_menu').stop().toggleClass('show');
            // });
        }
    }
</script>
