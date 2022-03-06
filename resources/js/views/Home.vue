<template>
    <div class="container max-w-screen-md px-4 py-8 mx-auto">
        <div class="menu_btn">
            <div class="menu_btn_bar menu_btn_bar1"></div>
            <div class="menu_btn_bar menu_btn_bar2"></div>
            <div class="menu_btn_bar menu_btn_bar3"></div>
        </div>

        <header id="mobile_menu" class="mobile_header px-5 py-3">
            <nav class="mobile_nav">
                <a href="home" class="mobile_nav_link">
                    <i class="fas fa-list"></i>
                    任務
                </a>
                <a href="tag_list" class="mobile_nav_link">
                    <i class="fas fa-tags"></i>
                    分類
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

        <div class="task_category_container">
            <h3 class="section_title">分類</h3>

            <div class="swiper task_category_swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide task_category_swiper_slide">
                        <div class="task_category_swiper_slide_subtitle">40項任務</div>
                        <div class="task_category_swiper_slide_title">Business</div>
                    </div>
                    <div class="swiper-slide task_category_swiper_slide">
                        <div class="task_category_swiper_slide_subtitle">30項任務</div>
                        <div class="task_category_swiper_slide_title">Business</div>
                    </div>
                    <div class="swiper-slide task_category_swiper_slide">
                        <div class="task_category_swiper_slide_subtitle">15項任務</div>
                        <div class="task_category_swiper_slide_title">Business</div>
                    </div>
                    <div class="swiper-slide task_category_swiper_slide">
                        <div class="task_category_swiper_slide_subtitle">20項任務</div>
                        <div class="task_category_swiper_slide_title">Business</div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="task_list_container">
            <h3 class="section_title">任務</h3>

            <div class="task_list_inner_container">
                <div class="task_list">
                    <input type="checkbox" class="task_list_check">
                    <div class="task_list_title">learning computer science</div>
                </div>

                <div class="task_list">
                    <input type="checkbox" class="task_list_check">
                    <div class="task_list_title">do homework</div>
                </div>
            </div>
        </div>
        
        <div class="task_add_btn">新增<br>任務</div>
        <div class="totop_btn">TOP</div>
    </div>
</template>
​
<script>
import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

export default {
    mounted() {
        new Swiper(".task_category_swiper", {
            slidesPerView: "auto",
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        $('.menu_btn').click(function() {
            $(this).toggleClass('active');
            $('#mobile_menu').stop().toggleClass('show');
        });

       
    }
};
</script>