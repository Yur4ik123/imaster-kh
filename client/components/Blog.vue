<template>

    <div class="blog__section section__padding">
        <div class="container">
            <h2 class="section__header">
                {{$t('home_blog_header')}}
            </h2>
            <div class="posts__wrapper">
                <div class="post__item" v-for="post in posts">
                    <nuxt-link :to="localPath(`/blog/${post.meta.slug}`)" class="post__img">
                        <img :src="`${config.public.BASE_URL}/storage/${post.image}`" alt="">
                    </nuxt-link>
                    <span  class="post__date">
                            12.09.2023
                        </span>
                    <nuxt-link :to="localPath(`/blog/${post.meta.slug}`)" class="post__title">
                        {{post.title}}
                    </nuxt-link>
                </div>

            </div>
            <div class="btn__wrapper uk-flex uk-flex-center">
                <nuxt-link  :to="localPath('/blog/posts')" class="request__btn default__btn">
                    {{ $t('all_posts_btn') }}
                </nuxt-link>
            </div>
        </div>
    </div>
</template>
<script setup>
const config = useRuntimeConfig();
const localPath = useLocalePath();
const {locale} = useI18n()
const {data:posts, pending, error, refresh} = await useFetch('/api/blog/last-posts', {
    baseURL:config.public.BASE_URL,
    query:{
      locale
    },
})
</script>
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
                color: $default-font-color !important;
                font-size: 14px;
                line-height: 1;
                font-weight: 300;
            }

            .post__title {
                color: #2EBAEB !important;
                transition: 0.3s;
                font-size: 18px;
                line-height: 20px;
                font-weight: 400;

                &:hover {
                    color: $hover-color !important;
                }
            }
        }
    }

    .btn__wrapper {
        @include default-btn();

    }
}
</style>
