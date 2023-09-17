<template>
    <form action="" class="contact__form default__form">
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
<style lang="scss">
@include default-form;
.contact__form{
    @include default-btn()
}

</style>
