<template>
    <nav class="nav__menu">
        <nuxt-link class="nav__link" to="/">Головна</nuxt-link>
        <nuxt-link class="nav__link" to="/about">Про нас</nuxt-link>
        <nuxt-link class="nav__link" to="/blog">Блог</nuxt-link>
        <nuxt-link class="nav__link" to="/contact">Контакти</nuxt-link>
    </nav>
</template>
<style lang="scss">
.nav__menu{
    display: flex;
    align-items: center;
    gap: 30px;
    text-transform: uppercase;

    .nav__link{
        font-weight: 400;
        color: $main-color !important;
        transition: 0.3s;
        line-height: 1 !important;
        border-bottom: 2px solid transparent;
        &:hover{
            color: $hover-color !important;
        }
        &.router-link-active{
            border-bottom: 2px solid $hover-color;
            color: $hover-color !important;
        }
    }
}
</style>
