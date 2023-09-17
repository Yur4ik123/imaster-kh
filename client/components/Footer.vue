<template>
    <footer class="footer">
        <div class="footer__bot">
            <div class="container">
                <div class="copy">
                    Imaster © Всі права захищені - {{new Date().getFullYear()}}
                </div>
                <div class="developer">
                    Розробка сайту - <a href="https://freelancehunt.com/freelancer/Yur4ik123.html" target="_blank">Yurii Malyshko</a>
                </div>
            </div>
        </div>
    </footer>
</template>
<style lang="scss">
.footer{
    .container{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .footer__bot{
        padding: 20px 0;
        background-color: #1F1F26;
        color: white;
        font-weight: 300;
        line-height: 1.2em;
        a{
            text-decoration: underline !important;
        }
    }
}
</style>
