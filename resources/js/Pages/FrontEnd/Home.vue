<template>
  <section class="home">
    <portal to="cta">
      <section class="banner__cta__content">
        <p
          class="title"
          data-aos="fade-up"
          data-aos-duration="1200"
          data-aos-anchor-placement="bottom-bottom"
        >
          {{ $t("pages.home.banner.p") }}
        </p>
        <h1 class="text">
          <span>{{ $t("pages.home.banner.h1") }}</span
          ><br />
          <span>{{ $t("pages.home.banner.h2") }}</span>
        </h1>
      </section>
    </portal>

    <section class="home__values">
      <div class="home__values__link">
        <h6>{{ $t("pages.home.values.1") }}</h6>
      </div>
      <div class="home__values__line"></div>
      <div class="home__values__link">
        <h6>{{ $t("pages.home.values.3") }}</h6>
      </div>
      <div class="home__values__line"></div>
      <div class="home__values__link">
        <h6>{{ $t("pages.home.values.2") }}</h6>
      </div>
    </section>
    <section class="admissions__advantage">
      <div class="admissions__advantage__cta">
        <h1
          class="admissions__advantage__title title--primary"
          data-aos="fade-up"
          data-aos-anchor-placement="bottom-bottom"
          data-aos-duration="1000"
        >
          {{ $t("pages.home.studyAtADU.title") }}
        </h1>
        <div class="admissions__advantage__text">
          <p
            data-aos="fade-up"
            data-aos-anchor-placement="bottom-bottom"
            data-aos-duration="1500"
          >
            {{ $t("pages.home.studyAtADU.p") }}
          </p>
        </div>
      </div>
      <div class="admissions__advantage__advantages">
        <div class="admissions__advantage__advantages__badge">
          <p class="percentage">
            {{ $t("pages.home.studyAtADU.advantages.p11") }}
          </p>
          <p class="text">{{ $t("pages.home.studyAtADU.advantages.p12") }}</p>
        </div>
        <div class="admissions__advantage__advantages__badge">
          <p class="percentage">
            {{ $t("pages.home.studyAtADU.advantages.p21") }}
          </p>
          <p class="text">{{ $t("pages.home.studyAtADU.advantages.p22") }}</p>
        </div>
        <div class="admissions__advantage__advantages__badge">
          <p class="percentage">
            {{ $t("pages.home.studyAtADU.advantages.p31") }}
          </p>
          <p class="text">{{ $t("pages.home.studyAtADU.advantages.p32") }}</p>
        </div>
      </div>
    </section>
    <section class="home__our__programs">
      <h1 class="home__our__programs__title title--primary">
        {{ $t("pages.home.programs.title") }}
      </h1>
      <div class="home__our__programs__cards">
        <div
          class="home__our__programs__cards__card"
          v-for="program in programs"
          :key="program.title"
        >
          <div class="front">
            <div class="image">
              <img :src="program.url" alt="law" srcset="" />
            </div>
            <h1 class="title">{{ program.title }}</h1>
          </div>
          <div class="back">
            <Link href="/study-at-adu">
              <h1 class="title">{{ program.title }}</h1>
              <p class="text">
                {{ program.text }}
              </p>
            </Link>
          </div>
        </div>
      </div>
    </section>

    <section class="home__study__adu">
      <h1
        class="home__study__adu__title title--primary"
        data-aos="fade-up"
        data-aos-anchor-placement="bottom-bottom"
        data-aos-duration="1000"
      >
        {{ $t("pages.home.welcome") }}
      </h1>
      <div class="home__study__adu__video">
        <vueper-slides
          :dragging-distance="50"
          :arrows="false"
          :bullets="false"
          :fixed-height="true"
        >
          <vueper-slide :video="video.video" />
        </vueper-slides>
      </div>
    </section>

    <section class="home__partners">
      <h1
        class="home__partners__title title--primary"
        data-aos="fade-up"
        data-aos-anchor-placement="bottom-bottom"
        data-aos-duration="1000"
      >
        {{ $t("pages.home.partners.title") }}
      </h1>

      <div class="home__partners__ashesi">
        <div class="home__partners__ashesi__image">
          <img src="/storage/pages/home/ashesi.jpg" alt="" srcset="" />
        </div>
        <div class="home__partners__ashesi__text">
          <h3 class="title">{{ $t("pages.home.partners.ashesi.name") }}</h3>
          <article class="article">
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              {{ $t("pages.home.partners.ashesi.p1") }}
            </p>
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              {{ $t("pages.home.partners.ashesi.p2") }}
            </p>
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              {{ $t("pages.home.partners.ashesi.p3") }}
            </p>
          </article>

          <div class="view__more">
            <a
              href="https://www.ashesi.edu.gh/"
              target="_blank"
              rel="noopener noreferrer"
              >{{ $t("pages.home.partners.ashesi.link") }}</a
            >
          </div>
        </div>
      </div>

      <div class="home__partners__logos">
        <vueper-slides
          class="no-shadow"
          :visible-slides="3"
          :slide-ratio="1 / 4"
          :dragging-distance="50"
          :bullets="false"
          :autoplay="true"
          :gap="2"
          :alwaysRefreshClones="true"
        >
          <vueper-slide
            v-for="partner in partners"
            :key="partner"
            :content="partner"
          />
        </vueper-slides>
      </div>
    </section>

    <section class="home__news">
      <h1
        class="home__news__title title--primary"
        data-aos="fade-up"
        data-aos-anchor-placement="bottom-bottom"
        data-aos-duration="1000"
      >
        ILIMI News
      </h1>
      <div class="home__news__articles">
        <div
          class="home__news__articles__article"
          data-aos="fade-up"
          data-aos-anchor-placement="bottom-bottom"
          data-aos-duration="1000"
          v-for="n in news"
          :key="n.title"
        >
          <div class="title">
            <a ref="javascript:" @click="getNewsData(n)" role="button">
              {{ `${n.title}`.substring(0, 120) }}
            </a>
          </div>
          <div class="line"></div>
          <div class="text">
            <p v-html="n.text.substring(0, 180)"></p>
          </div>
        </div>
      </div>
    </section>

    <s-modal v-model="newsModal" width="50rem">
      <div class="event-details" v-if="currentNews">
        <!-- <div class="image">
          <vueper-slides slide autoplay :touchable="false" fixed-height="30rem">
            <vueper-slide
              v-for="(image, i) in currentNews.images"
              :key="i"
              :image="image"
              style="height: 100%"
            />
          </vueper-slides>
        </div> -->
        <h1>{{ currentNews.title }}</h1>

        <div v-html="currentNews.text"></div>
      </div>
    </s-modal>
  </section>
</template>

<script>
import WebsiteLayout from "../../components/WebsiteLayout";
import { Link } from "@inertiajs/inertia-vue";
import { VueperSlides, VueperSlide } from "vueperslides";
import "vueperslides/dist/vueperslides.css";
import SModal from "../../components/SModal";
export default {
  name: "Home",
  layout: WebsiteLayout,
  components: {
    Link,
    VueperSlides,
    VueperSlide,
    SModal,
  },
  mounted() {
    this.$watch(
      () => this.$lang.locale,
      (locale) => {
        this.news = this.$lang.messages[`${locale}.pages`].home.news;
        this.programs =
          this.$lang.messages[`${locale}.pages`].home.programs.programs;
      },
      { immediate: true }
    );
  },
  data() {
    return {
      newsModal: false,
      currentNews: null,
      news: [],
      video: {
        title: "Welcome to the Future",
        video: {
          url: "https://www.youtube.com/embed/2d_7v9bda24?controls=1&fs=1&modestbranding=1&color=white&iv_load_policy=3&autohide=1&enablejsapi=1",
          // props: { autoplay: true, loop: true, controls: false, muted: true },
          props: {
            allow:
              "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture",
          },
        },
      },
      programs: [],
      partners: [
        `<div class="partner__logo">
            <img src="/storage/pages/home/partners/ashesi.jpg" alt="ashesi logo" srcset="">
          </div>`,
        `<div class="partner__logo">
            <img src="/storage/pages/home/partners/nigerr.jpg" alt="nigerr logo" srcset="">
          </div>`,
        `<div class="partner__logo">
            <img src="/storage/pages/home/partners/mcf.jpg" alt="mcf logo" srcset="">
          </div>`,
        `<div class="partner__logo">
            <img src="/storage/pages/home/partners/ansi.jpg" alt="ansi logo" srcset="">
          </div>`,
        `<div class="partner__logo">
            <img src="/storage/pages/home/partners/codel.png" alt="codel logo" srcset="">
          </div>`,
        `<div class="partner__logo">
            <img src="/storage/pages/home/partners/cipmen.jpg" alt="codel logo" srcset="">
          </div>`,
      ],
    };
  },

  methods: {
    getNewsData(news) {
      this.currentNews = news;
      this.$nextTick(() => {
        this.newsModal = !this.newsModal;
      });
    },
  },
};
</script>

<style lang="scss" scoped>
</style>