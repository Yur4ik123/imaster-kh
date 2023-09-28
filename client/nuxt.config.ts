// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
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
        langDir: `${__dirname}/lang/`,
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
            BASE_URL:  'https://imaster.loc',
            NITRO_PORT:'3000',
            NITRO_HOST:'127.0.0.1',
        },
    },
});
