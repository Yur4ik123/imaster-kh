<template>
    <div class="contact__block section__padding">
        <div class="container">
            <div class="contact__info">
                <div class="company__logo">
                    <img src="../assets/img/logo.png" width="180px" alt="">
                </div>
                <div class="soc__links">
                    <a href="" target="_blank" class="soc__links-item">
                        <Icon name="iconoir:instagram" size="35px" color="#7A7A7A"></Icon>

                    </a>
                    <a href="" class="soc__links-item">
                        <Icon name="iconoir:telegram" size="35px" color="#7A7A7A"></Icon>
                    </a>
                </div>
                <div class="contact__description">
                    <p>
                        Переконавшись, що ви знаєте ціну до фактичного ремонту, ми дозволяємо нашим клієнтам здати свої
                        комп’ютери для безкоштовної діагностики та оцінки ціни.
                    </p>
                    <p>
                        Це означає, що ми безкоштовно перевіримо ваше обладнання, виявимо та повідомимо про будь-які
                        проблеми з ним!
                    </p>
                </div>
                <div class="contact__data">
                    <p>
                        <Icon name="material-symbols:location-on-rounded" size="20px" color="#5b60ac"/>
                        <span>Проспект Героїв Харкова, 256, Харків, Харківська область, 61099</span>
                    </p>
                    <p>
                        <Icon name="ic:outline-access-time" size="20px" color="#5b60ac"/>
                        <span>ПН-СБ: 10:00 - 18:00</span>
                    </p>
                    <p>
                        <a href="tel:380990006461">
                            <Icon name="material-symbols:phone-in-talk" size="20px" color="#5b60ac"/>
                            <span>(099)000-64-61</span>
                        </a>
                    </p>
                    <p>
                        <a href="mailto:380990006461">
                            <Icon name="material-symbols:mail-outline-rounded" size="20px" color="#5b60ac"/>
                            <span>imasterkh@gmail.com</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="contact__form-wrapper">
                <ContactForm/>
            </div>
        </div>
    </div>
</template>
<style lang="scss">
.contact__block {
    background-color: $block-bgr;

    .container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 50px;
    }

    .contact__info {
        display: flex;
        flex-direction: column;
        gap: 20px;

        .company__logo {
            img {
                filter: drop-shadow(5px 5px 5px #5b60ac);
            }
        }

        .soc__links {
            display: flex;
            gap: 10px;

            .soc__links-item {
                svg {
                    path {
                        transition: 0.3s;
                    }
                }

                &:hover {
                    svg {
                        path {
                            stroke: $hover-color;
                        }
                    }
                }
            }
        }

        .contact__description {
            @include default-text;
        }

        .contact__data {

            p {
                margin: 0;
                display: flex;
                align-items: center;

                span {
                    padding-top: 2px;
                    padding-left: 10px;
                    color: $default-font-color;
                    font-size: 14px;
                    font-weight: 300;
                }

                a {
                    span {
                        color: $second-color;
                    }
                }

            }

            * + p {
                margin-top: 15px;
            }
        }
    }
}
</style>
<script setup lang="ts">
</script>
