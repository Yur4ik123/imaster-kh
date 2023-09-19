// https://nuxt.com/docs/api/configuration/nuxt-config
import path from 'path';


export default defineNuxtConfig({
    srcDir: 'client/',
    app: {
        head: {

        },
    },
    css: ["~/assets/styles/main.scss"],
    modules: [
        "@fedorae/nuxt-uikit",
        "nuxt-svgo",
        "nuxt-icon",
        'nuxt3-leaflet',
        '@nuxtjs/i18n',
    ],
    i18n: {

        strategy:'prefix_except_default',
        defaultLocale: "uk",
        locales: [
            {
                code: 'uk',
                iso:'uk-UA',
                file: `uk.json`
            },
            {
                code: 'ru',
                iso:'ru_RU',
                file: `ru.json`
            }
        ],
        lazy: true,
        langDir: `${__dirname}/resources/lang/`,
        detectBrowserLanguage: false,
    },
    devtools: { enabled: true },
    vite: {
        css: {
            preprocessorOptions: {
                scss: {
                    additionalData: '@use "@/assets/styles/global.scss" as *;',
                },
            },
        },
    },
    runtimeConfig: {
        public: {
            BASE_URL:  process.env.APP_URL || '',
            NITRO_PORT:process.env.NITRO_PORT || '',
            NITRO_HOST:process.env.NITRO_HOST || '',
        },
    },
});

