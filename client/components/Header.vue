<template>
    <header class="header">
        <div class="top__bar">
            <div class="container">
                <div class="soc__netw">
                    <a href="" class="soc__netw-link">
                        <Icon name="iconoir:instagram" color="white"></Icon>
                    </a>
                    <a href="" class="soc__netw-link">
                        <Icon name="iconoir:telegram" color="white"></Icon>
                    </a>

                </div>
                <div class="phones">
                    <a href="tel:380990006461" class="phone">
                        <Icon name="iconoir:phone" color="white"></Icon>
                        (099)000-64-61
                    </a>
                </div>
                <LocaleSwitcher/>
            </div>
        </div>
        <div class="header__bot">
            <div class="container">
                <div class="logo__wrapper">
                    <nuxt-link :to="localPath('/')" class="logo__link">
                        <img src="../assets/img/logo.png" width="150" alt="">
                    </nuxt-link>
                </div>
                <div class="nav__wrapper">
                    <NavMenu></NavMenu>
                </div>
            </div>
        </div>
    </header>
</template>
<script setup>
    const localPath = useLocalePath()
</script>
<style lang="scss">
.header {
    .top__bar {
        padding: 5px 0;
        color: white;
        background-color: $main-color;

        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        a {
            svg {
                width: 20px;
                height: 20px;

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

        .soc__netw {
            display: flex;
            align-items: center;
            gap: 5px;
            width: fit-content;

            .soc__netw-link {
                padding: 5px;

            }
        }

        .phones {
            display: flex;
            align-items: center;

            svg {
                margin-right: 5px;
                width: 18px;
            }

            .phone {
                color: white;
                font-size: 16px;
                transition: 0.3s;
                font-weight: 300;
                &:hover {
                    color: $hover-color !important;
                }
            }
        }
    }
    .header__bot{
        padding: 15px 0;
        .container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            .logo__wrapper{
                .logo__link{
                   img{
                       filter: drop-shadow(5px 5px 5px $main-color);
                   }
                }
            }
        }
    }
}
</style>
