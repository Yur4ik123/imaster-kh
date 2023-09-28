<template>
    <div class="reviews__section section__padding">
        <div class="container">
            <h2 class="section__header">
                Відгуки
            </h2>
            <div class="reviews__slider " uk-slider="finite:true; sets:true">
                <div class="uk-slider-container uk-position-relative uk-visible-toggle">
                    <ul class="uk-slider-items">
                        <li class="review__slide">
                            <div class="avatar__wrapper" v-if="true">
                                <img src="../assets/img/testimonial-1.jpg" width="91" height="91" alt="">
                            </div>
                            <div class="avatar__wrapper no_avatar" v-else>
                                <Icon name="icon-park-outline:avatar" color="white" size="50%" ></Icon>
                            </div>
                            <div class="user__name">
                                Karen Walters
                            </div>
                            <div class="quotes">
                                <Icon name="ooui:quotes-ltr" color="#5b60ac" size="40px"></Icon>
                            </div>
                            <div class="review__content">
                                Losing a lot of important data that I had on my laptop’s HDD was devastating… Imagine my sheer joy, when these bunch of tech magicians retrieved it all for me in mere 24 hours!

                            </div>
                        </li>
                        <li class="review__slide">
                            <div class="avatar__wrapper" v-if="false">
                                <img src="../assets/img/testimonial-1.jpg" width="91" height="91" alt="">
                            </div>
                            <div class="avatar__wrapper no_avatar" v-else>
                                <Icon name="icon-park-outline:avatar" color="white" size="50%" ></Icon>
                            </div>
                            <div class="user__name">
                                Karen Walters
                            </div>
                            <div class="quotes">
                                <Icon name="ooui:quotes-ltr" color="#5b60ac" size="40px"></Icon>
                            </div>
                            <div class="review__content">
                                Losing a lot of important data that I had on my laptop’s HDD was devastating… Imagine my sheer joy, when these bunch of tech magicians retrieved it all for me in mere 24 hours!

                            </div>
                        </li>
                        <li class="review__slide">
                            <div class="avatar__wrapper" v-if="false">
                                <img src="../assets/img/testimonial-1.jpg" width="91" height="91" alt="">
                            </div>
                            <div class="avatar__wrapper no_avatar" v-else>
                                <Icon name="icon-park-outline:avatar" color="white" size="50%" ></Icon>
                            </div>
                            <div class="user__name">
                                Karen Walters
                            </div>
                            <div class="quotes">
                                <Icon name="ooui:quotes-ltr" color="#5b60ac" size="40px"></Icon>
                            </div>
                            <div class="review__content">
                                Losing a lot of important data that I had on my laptop’s HDD was devastating… Imagine my sheer joy, when these bunch of tech magicians retrieved it all for me in mere 24 hours!

                            </div>
                        </li>
                        <li class="review__slide">
                            <div class="avatar__wrapper" v-if="false">
                                <img src="../assets/img/testimonial-1.jpg" width="91" height="91" alt="">
                            </div>
                            <div class="avatar__wrapper no_avatar" v-else>
                                <Icon name="icon-park-outline:avatar" color="white" size="50%" ></Icon>
                            </div>
                            <div class="user__name">
                                Karen Walters
                            </div>
                            <div class="quotes">
                                <Icon name="ooui:quotes-ltr" color="#5b60ac" size="40px"></Icon>
                            </div>
                            <div class="review__content">
                                Losing a lot of important data that I had on my laptop’s HDD was devastating… Imagine my sheer joy, when these bunch of tech magicians retrieved it all for me in mere 24 hours!

                            </div>
                        </li>
                        <li class="review__slide">
                            <div class="avatar__wrapper" v-if="true">
                                <img src="../assets/img/testimonial-1.jpg" width="91" height="91" alt="">
                            </div>
                            <div class="avatar__wrapper no_avatar" v-else>
                                <Icon name="icon-park-outline:avatar" color="white" size="50%" ></Icon>
                            </div>
                            <div class="user__name">
                                Karen Walters
                            </div>
                            <div class="quotes">
                                <Icon name="ooui:quotes-ltr" color="#5b60ac" size="40px"></Icon>
                            </div>
                            <div class="review__content">
                                Losing a lot of important data that I had on my laptop’s HDD was devastating… Imagine my sheer joy, when these bunch of tech magicians retrieved it all for me in mere 24 hours!

                            </div>
                        </li>
                        <li class="review__slide">
                            <div class="avatar__wrapper" v-if="true">
                                <img src="../assets/img/testimonial-1.jpg" width="91" height="91" alt="">
                            </div>
                            <div class="avatar__wrapper no_avatar" v-else>
                                <Icon name="icon-park-outline:avatar" color="white" size="50%" ></Icon>
                            </div>
                            <div class="user__name">
                                Karen Walters
                            </div>
                            <div class="quotes">
                                <Icon name="ooui:quotes-ltr" color="#5b60ac" size="40px"></Icon>
                            </div>
                            <div class="review__content">
                                Losing a lot of important data that I had on my laptop’s HDD was devastating… Imagine my sheer joy, when these bunch of tech magicians retrieved it all for me in mere 24 hours!

                            </div>
                        </li>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"  uk-slider-item="previous">
                        <Icon name="mdi:arrow-left-bold-box-outline" color="#272972" size="35px"></Icon>
                    </a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"  uk-slider-item="next">
                        <Icon name="mdi:arrow-right-bold-box-outline" color="#272972" size="35px"></Icon>
                    </a>

                </div>
            </div>
        </div>
    </div>
</template>
<style lang="scss">
.reviews__section {
    @include section-header;
    background: $block-bgr;

    .reviews__slider {
        .uk-slider-items {
            .review__slide {
                width: calc(100% / 3);
                padding: 0 15px;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 15px;
                .avatar__wrapper{
                    width: 90px;
                    height: 90px;
                    overflow: hidden;
                    border-radius: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    img{
                        width: 100%;
                        object-fit: contain;
                    }
                    &.no_avatar{
                        background-color: $main-color;
                    }

                }
                .user__name{
                    font-size: 18px;
                    font-weight: 400;
                    line-height: 1.5em;
                    color: $dark-font;
                }
                .review__content{
                    text-align: center;
                    color: $default-font-color;
                    font-size: 16px;
                    font-weight: 300;
                    line-height: 1.5em;
                }
            }

        }
    }
}
</style>
<script setup lang="ts">
</script>
