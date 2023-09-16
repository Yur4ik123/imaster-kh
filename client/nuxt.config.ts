// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
    app: {
        head: {},
    },

    css: ["~/assets/styles/main.scss"],
    modules: ["@fedorae/nuxt-uikit", "nuxt-svgo", "nuxt-icon"],
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
});
