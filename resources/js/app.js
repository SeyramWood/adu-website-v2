require("./bootstrap");
import Vue from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue";
import { InertiaProgress } from "@inertiajs/progress";

import vuetify from "@/plugins/vuetify";
import VueMeta from "vue-meta";
import Lightbox from "@morioh/v-lightbox";
import PortalVue from 'portal-vue'
import axios from "axios";
import AOS from 'aos'
import 'aos/dist/aos.css';

import VueLang from "@eli5/vue-lang-js";
import translations from "./lang.js";
import VueSmoothScroll from "vue2-smooth-scroll";

InertiaProgress.init();
Vue.use(Lightbox)
Vue.use(PortalVue)
Vue.use(VueMeta, {
    // optional pluginOptions
    refreshOnceOnNavigation: true
});
Vue.use(VueSmoothScroll, {
    duration: 1000, // animation duration in ms
    offset: 0, // offset in px from scroll element, can be positive or negative
    updateHistory: true // whether to push hash to history
});
Vue.use(VueLang, {
    messages: translations, // Provide locale file
    locale: "en", // Set locale
    fallback: "en" // Set fallback lacale
});

Object.defineProperty(Vue.prototype, "$axios", { value: axios });
Object.defineProperty(Vue.prototype, "route", { value: window.route });


Vue.mixin({
    computed: {
        getScreen() {
      return this.mobileView;
    },
    },
    created() {
        const mediaQuery = window.matchMedia("(max-width: 35.999em)");
        this.$nextTick(() => {
            mediaQuery.addEventListener("change", this.handleMobileChange);
        });
        
    },
    data() {
        return {
            mobileView: false,
        }
    },
    methods: {
        handleMobileChange(e) {
      if (e.matches) {
        this.mobileView = true;
      } else {
        this.mobileView = false;
      }
    },
    }
})
createInertiaApp({
    resolve: name => import(`./Pages/${name}`),
    setup({ el, App, props }) {
        new Vue({
            created() {
                AOS.init()
            },
            vuetify,
            render: h => h(App, props)
        }).$mount(el);
    }
});

