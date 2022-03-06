<template>
    <div class="container max-w-screen-md px-4 py-8 mx-auto">
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
    }
};
</script>