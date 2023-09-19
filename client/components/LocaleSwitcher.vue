<template>
    <div class="lang__switcher">
        <NuxtLink :to="switchLocalePath('uk')">УКР</NuxtLink>
        <span>|</span>
        <NuxtLink :to="switchLocalePath('ru')">РУС</NuxtLink>
    </div>
</template>
<script setup>
const switchLocalePath = useSwitchLocalePath()
</script>
<style lang="scss">
.lang__switcher{
    display: flex;
    align-items: center;
    gap: 10px;
    a{
        transition: 0.3s;
        &:hover{
            color: $hover-color!important;
        }
    }
    .router-link-active{
        font-weight: 700;
    }
}
</style>
