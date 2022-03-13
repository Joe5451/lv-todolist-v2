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
                <a href="category" class="mobile_nav_link">
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

        <div class="task_list_container">
            <h3 class="section_title">分類</h3>

            <div class="task_list_inner_container">
                <div class="task_list">
                    <div class="task_category_color"></div>
                    <div class="task_list_title">learning computer science</div>
                </div>

                <div class="task_list">
                     <div class="task_category_color"></div>
                    <div class="task_list_title">do homework</div>
                </div>
            </div>
        </div>
        
        <div class="task_add_btn" onclick="$('#add_category_popup_block').fadeIn();">新增<br>分類</div>
        <div class="totop_btn">TOP</div>

        <div class="popup_block" id="add_category_popup_block">
            <div class="popup_container">
                <div class="popup_background" onclick="$('#add_category_popup_block').fadeOut();"></div>
                <div class="popup_window">
                    <button class="popup_close_btn" onclick="$('#add_category_popup_block').fadeOut();">&times;</button>
                    <div class="popup_title">新增分類</div>

                    <div class="popup_form_group">
                        <label class="popup_form_label">名稱</label>
                        <input type="text" name="category_name" placeholder="請輸入名稱" class="popup_form_input">
                    </div>

                    <div class="popup_form_group">
                        <label class="popup_form_label">顏色</label>
                        <input type="color" name="category_color" class="popup_form_colorpicker">
                    </div>

                    <div class="popup_form_btn_wrap">
                        <button class="popup_from_btn bg-blue-500 hover:bg-blue-600 shadow-lg shadow-blue-500/50">新增</button>
                    </div>
                </div>
            </div>
        </div>
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