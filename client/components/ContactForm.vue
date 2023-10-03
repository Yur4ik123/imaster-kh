<template>
  <form @submit.prevent="submitRequest" class="contact__form default__form">
    <div class="input__wrapper">
      <input type="text" name="name" v-bind="name" placeholder="Ім'я" class="input">
      <span class="error uk-text-small uk-text-danger" v-if="errors.name">{{ errors.name }}</span>
    </div>
    <div class="input__wrapper">
      <input type="text"
             v-maska
             data-maska="+38(0##)-###-##-##"
             name="tel"
             v-bind="tel"
             placeholder="+38(0__) -___-__-__"
             class="input">
      <span class="error uk-text-small uk-text-danger" v-if="errors.tel">{{ errors.tel }}</span>
    </div>
    <div class="input__wrapper">
      <input type="text" name="email" v-bind="email" placeholder="Email" class="input">
      <span class="error uk-text-small uk-text-danger" v-if="errors.email">{{ errors.email }}</span>
    </div>
    <div class="input__wrapper">
      <textarea type="text" rows="10" v-bind="msg" name="msg" placeholder="Повідомення" class="textarea"></textarea>
      <span class="error uk-text-small uk-text-danger" v-if="errors.msg">{{ errors.msg }}</span>
    </div>
    <div class="btn__wrapper">
      <button type="submit" class="submit__btn default__btn">Надіслати</button>
    </div>
  </form>
</template>
<script setup>
import {useForm} from "vee-validate";
import * as yup from 'yup'

const {t} = useI18n()


const phoneValidate = (value) => {
  if (!value) {
    return t('validation.required');
  }
  if (value.replace(/[^\d]/g, '').length < 9) {
    return t('validation.tel');
  }
  return true
}
const {defineInputBinds, handleSubmit, errors} = useForm({
  validationSchema: {
    name: yup.string().required(t('validation.required')),
    tel: phoneValidate,
    email: yup.string().required(t('validation.required')).email(t('validation.email')),
    msg: yup.string().required(t('validation.required'))
  },
});

const config = useRuntimeConfig();
const name = defineInputBinds('name');
const tel = defineInputBinds('tel');
const email = defineInputBinds('email');
const msg = defineInputBinds('msg');

const submitRequest = handleSubmit(async (values) => {
  values.tel = '+'+values.tel.replace(/[^\d]/g, '');
  values.request_type = 'contact_form'
  const {data} = await useFetch('/api/request', {
    method: 'post',
    body: values,
    baseURL: config.public.BASE_URL
  })

})

</script>
<style lang="scss">
@include default-form;
.contact__form {
  @include default-btn()
}

</style>
