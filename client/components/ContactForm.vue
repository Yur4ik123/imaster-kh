<template>
    <form @submit.prevent="submitRequest" class="contact__form default__form">
        <div class="input__wrapper">
            <input type="text" name="name" placeholder="Ім'я" class="input">
        </div>
        <div class="input__wrapper">
            <input type="text" name="tel" placeholder="Телефон" class="input">
        </div>
        <div class="input__wrapper">
            <input type="text" name="email" placeholder="Email" class="input">
        </div>
        <div class="input__wrapper">
            <textarea type="text" rows="10" name="msg" placeholder="Повідомення" class="textarea"></textarea>
        </div>
        <div class="btn__wrapper">
            <button type="submit" class="submit__btn default__btn">Надіслати</button>
        </div>
    </form>
</template>
<script setup>

const submitRequest = async ()=>{
    const config = useRuntimeConfig();
    const {data} = await useFetch('/api/request', {
        method: 'post',
        body:{
            name: 'kurwa'
        },
        baseURL:config.public.BASE_URL

    })
}

</script>
<style lang="scss">
@include default-form;
.contact__form{
    @include default-btn()
}

</style>
