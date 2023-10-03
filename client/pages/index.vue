<template>
  <div class="home_page">
    <HomeSlider></HomeSlider>
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
    <Blog></Blog>
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


</style>
<script setup lang="ts">
</script>
