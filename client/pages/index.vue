<template>
    <div class="home_page">
        <div class="slider__section">
            <div uk-slider="center: true; finite:false; autoplay:true" class="uk-position-relative ">
                <div class="uk-slider-container">
                    <ul class="uk-slider-items uk-position-relative">
                        <li class="slider__item">
                            <img class="slider__img" src="~/assets/img/slider/slider_1.jpg" width="1920" height="726"
                                 alt="">
                            <div class="uk-position-center uk-panel">
                                <h3 class="slider__subheader">
                                    Що ми можемо
                                </h3>
                                <h2 class="slider__header">
                                    Відремонтувати <b>сьогодні</b>
                                </h2>
                                <div class="btn__wrapper uk-flex uk-flex-center">
                                    <a href="#request" class="request__btn default__btn">
                                        {{$t('request_btn')}}
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="slider__item">
                            <img class="slider__img" src="~/assets/img/slider/slider_2.jpg" width="1920" height="763"
                                 alt="">
                            <div class="uk-position-center uk-panel">
                                <h3 class="slider__subheader">
                                    У випадку ремонту
                                </h3>
                                <h2 class="slider__header">
                                    <b>Безкоштовна</b> діагностика
                                </h2>
                                <div class="btn__wrapper uk-flex uk-flex-center">
                                    <a href="#request" class="request__btn default__btn">
                                        {{$t('request_btn')}}
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="slider__item">
                            <img class="slider__img" src="~/assets/img/slider/slider_3.jpg" width="1920" height="763"
                                 alt="">
                            <div class="uk-position-center uk-panel">
                                <h3 class="slider__subheader">
                                    Знижка на роботу
                                </h3>
                                <h2 class="slider__header">
                                    <b>10%</b> за передзаписом
                                </h2>
                                <div class="btn__wrapper uk-flex uk-flex-center">
                                    <a href="#request" class="request__btn default__btn">
                                        {{$t('request_btn')}}
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="uk-slider-nav uk-dotnav"></ul>
                </div>
            </div>
        </div>
        <div class="process__section section__padding">
            <div class="container">
                <div class="process">
                    <div class="process__icon">
                       <span class="icon__circle">
                                <Icon name="solar:phone-calling-bold" color="white" size="45"/>
                       </span>

                    </div>
                    <div class="process__head" v-text="$t('process.proc_1_title')">
                    </div>
                    <div class="process__title" v-html="$t('process.proc_1_description')">

                    </div>
                </div>
                <div class="process">
                    <div class="process__icon">
                       <span class="icon__circle">
                                <Icon name="bx:walk" color="white" size="45"/>
                       </span>

                    </div>
                    <div class="process__head" v-text="$t('process.proc_2_title')">
                    </div>
                    <div class="process__title" v-html="$t('process.proc_2_description')">
                    </div>
                </div>
                <div class="process">
                    <div class="process__icon">
                       <span class="icon__circle">
                                <Icon name="mdi:cog-outline" color="white" size="45"/>
                       </span>

                    </div>
                    <div class="process__head" v-text="$t('process.proc_3_title')">
                    </div>
                    <div class="process__title" v-html="$t('process.proc_3_description')">
                    </div>
                </div>
                <div class="process">
                    <div class="process__icon">
                       <span class="icon__circle">
                                <Icon name="ci:happy" color="white" size="45"/>
                       </span>
                    </div>
                    <div class="process__head" v-text="$t('process.proc_4_title')">
                    </div>
                    <div class="process__title" v-html="$t('process.proc_4_description')">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner__section section__padding">
            <div class="container">
                <h2 class="banner__header">
                    Ремонт комп’ютерів та послуги ІТ-підтримки
                </h2>
                <h3 class="banner__title">
                    Ми цілодобово та без вихідних надаємо вам рентабельні послуги з ремонту техніки!
                </h3>
                <div class="btn__wrapper uk-flex uk-flex-center">
                    <a href="#request" class="request__btn default__btn">
                        Записатися на ремонт
                    </a>
                </div>
            </div>

        </div>
        <Reviews/>
        <div class="blog__section section__padding">
            <div class="container">
                <h2 class="section__header">
                    Останні публікації в блозі
                </h2>
                <div class="posts__wrapper">
                    <div class="post__item">
                        <nuxt-link to="#" class="post__img">
                            <img src="~/assets/img/blog/blog1.jpeg" alt="">
                        </nuxt-link>
                        <span  class="post__date">
                            12.09.2023
                        </span>
                        <nuxt-link to="#" class="post__title">
                            Найпоширеніші проблеми з ремонтом комп’ютера
                        </nuxt-link>
                    </div>
                    <div class="post__item">
                        <nuxt-link to="#" class="post__img">
                            <img src="~/assets/img/blog/blog2.jpg" alt="">
                        </nuxt-link>
                        <span  class="post__date">
                            12.09.2023
                        </span>
                        <nuxt-link to="#" class="post__title">
                            4 способи отримати місце на диску зараз
                        </nuxt-link>
                    </div>
                    <div class="post__item">
                        <nuxt-link to="#" class="post__img">
                            <img src="~/assets/img/blog/blog1.jpeg" alt="">
                        </nuxt-link>
                        <span  class="post__date">
                            12.09.2023
                        </span>
                        <nuxt-link to="#" class="post__title">
                            Найпоширеніші проблеми з ремонтом комп’ютера
                        </nuxt-link>
                    </div>
                    <div class="post__item">
                        <nuxt-link to="#" class="post__img">
                            <img src="~/assets/img/blog/blog1.jpeg" alt="">
                        </nuxt-link>
                        <span  class="post__date">
                            12.09.2023
                        </span>
                        <nuxt-link to="#" class="post__title">
                            Найпоширеніші проблеми з ремонтом комп’ютера
                        </nuxt-link>
                    </div>
                </div>
                <div class="btn__wrapper uk-flex uk-flex-center">
                    <a href="/blog" class="request__btn default__btn">
                        Дивитися всі пости
                    </a>
                </div>
            </div>
        </div>
        <div class="banner__section section__padding">
            <div class="container">
                <h2 class="banner__header">
                    Ремонт комп’ютерів та послуги ІТ-підтримки
                </h2>
                <h3 class="banner__title">
                    Ми цілодобово та без вихідних надаємо вам рентабельні послуги з ремонту техніки!
                </h3>
                <div class="btn__wrapper uk-flex uk-flex-center">
                    <a href="#request" class="request__btn default__btn">
                        Записатися на ремонт
                    </a>
                </div>
            </div>

        </div>
        <ContactBlock/>
        <MapBlock/>
    </div>
</template>
<style lang="scss">
.blog__section {
    @include section-header;

    .posts__wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-gap: 30px;
        margin-bottom: 40px;

        .post__item {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 10px;


            .post__img {
                overflow: hidden;
                transition: 0.3s;
                border-radius: 4px;

                &:hover {
                    box-shadow: 0px 0px 33px -10px rgb(26, 22, 74);
                }

                img {
                    width: 100%;
                    object-fit: cover;
                }
            }

            .post__date {
                color: $default-font-color!important;
                font-size: 14px;
                line-height: 1;
                font-weight: 300;
            }
            .post__title{
                color: #2EBAEB!important;
                transition: 0.3s;
                font-size: 18px;
                line-height: 20px;
                font-weight: 400;
                &:hover{
                    color: $hover-color !important;
                }
            }
        }
    }
    .btn__wrapper{
        @include default-btn();

    }
}

.banner__section {
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-image: url("~/assets/img/paralax.jpg");

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;

        .banner__header {
            color: white;
            font-size: 50px;
            font-weight: 400;
            line-height: 1.1em;
            letter-spacing: -1px;
            text-align: center;
        }

        .banner__title {
            color: white;
            font-size: 25px;
            font-weight: 300;
            line-height: 1.23em;
            letter-spacing: -0.5px;
            text-align: center;
            margin-bottom: 40px;
        }

        .btn__wrapper {
            @include default-btn();
        }
    }
}

.process__section {
    background-color: $block-bgr;

    .container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-gap: 16px;

        .process {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;

            .process__icon {
                margin: 0 auto;

                .icon__circle {
                    width: 88px;
                    height: 88px;
                    border-radius: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background-color: $second-color;
                }
            }

            .process__head {
                text-align: center;
                font-size: 20px;
                font-weight: 400;
                color: $dark-font;
            }

            .process__title {
                color: $default-font-color;
                text-align: center;
                font-weight: 300;
                font-size: 16px;
                line-height: 1.5em;

            }
        }
    }
}

.slider__section {
    .uk-slider-nav {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);

        li {
            a {
                width: 15px;
                height: 15px;
                border: 1px solid white;
            }

            &.uk-active {
                a {
                    background-color: $main-color;
                    border: 1px solid $main-color;
                }
            }
        }
    }

    .uk-slider-items {
        .slider__item {
            overflow: hidden;
            max-height: 700px;
            width: 100%;
            color: white;

            .slider__img {
                height: 100%;
                width: 100%;
                object-fit: cover;
                filter: blur(2px);
            }

            .slider__subheader {
                color: white;
                text-align: center;
                font-size: 34px;
                font-weight: 300;
                line-height: 1.23em;
                margin-bottom: 20px;

            }

            .slider__header {
                color: white;
                text-align: center;
                margin-top: 0;
                font-size: 60px;
                font-weight: 400;
                text-transform: uppercase;
            }


            @include default-btn();

        }

    }
}
</style>
<script setup lang="ts">
</script>
