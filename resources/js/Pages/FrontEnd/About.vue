<template>
  <section class="about">
    <portal to="cta">
      <section class="banner__cta__content">
        <h1
          class="title"
          data-aos="fade-up"
          data-aos-duration="1200"
          data-aos-anchor-placement="bottom-bottom"
        >
          About A.D.U.
        </h1>
        <ul class="breadcrumb">
          <li><Link href="/">Home</Link></li>
          <li><Link href="/about">About</Link></li>
        </ul>
      </section>
    </portal>

    <section class="about__welcome">
      <main class="about__welcome__content">
        <h1 class="about__welcome__title title--primary" data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-anchor-placement="bottom-bottom">Welcome by the Chacellor</h1>
        <p data-aos="fade-up"
          data-aos-duration="1500"
          data-aos-anchor-placement="bottom-bottom">
          The mission of A.D.U. is to prepare the most talented young people in
          Francophone Africa to design and develop the development of their
          nations as ethical and effective leaders in the public, private and
          not-for-profit sectors.
        </p>
      </main>
      <div class="about__welcome__video">
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

    <section class="about__our__why">
       <h1 class="about__welcome__title title--primary" data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-anchor-placement="bottom-bottom">Our why</h1>
       <p
       data-aos="fade-up"
          data-aos-duration="1500"
          data-aos-anchor-placement="bottom-bottom">
            {{ $t('pages.about.why.p1') }}
            <v-btn
              text
              class="color-dark"
              @click="showMore = true"
              v-show="!showMore"
              >{{ $t('pages.about.why.btnMore') }}</v-btn
            >
          </p>
          <article v-show="showMore" data-aos="fade-up"
          data-aos-duration="1500"
          data-aos-anchor-placement="bottom-bottom">
            <p>
           {{ $t('pages.about.why.p2.content') }} 
            <ol style="margin-left:4rem">
              <li>{{ $t('pages.about.why.p2.l1') }}
            </li>
              <li>{{ $t('pages.about.why.p2.l2') }}</li>
            </ol>
          </p>
          <p>
              {{ $t('pages.about.why.p3') }} <v-btn text class="color-dark" @click="showMore = false"
              >{{ $t('pages.about.why.btnLess') }}</v-btn
            >
            </p>
            
          </article>
    </section>

    <section class="about__leadership" id="leadership">
      <h1 class="about__leadership__title title--primary" data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-anchor-placement="bottom-bottom">{{$t('pages.about.title.4')}}</h1>
      <main class="about__leadership__container">
      <div class="about__leadership__avatar">
            <div
              class="about__leadership__avatar__card"
              v-for="leader in leadership"
              :key="leader.name"
            >
            <div class="avatar">
              <img :src="leader.image" alt="" srcset="" />
            </div>
              <div class="info">
                  <p class="name">{{ leader.name }}</p>
                  <p class="position">{{ leader.position }}</p>
                </div>
            </div>
      </div>
      
      </main>
    </section>
  </section>
</template>

<script>
import WebsiteLayout from "../../components/WebsiteLayout";
import { Link } from "@inertiajs/inertia-vue";
import { VueperSlides, VueperSlide } from "vueperslides";
import "vueperslides/dist/vueperslides.css";
export default {
  name: "About",
  layout: WebsiteLayout,
  components: {
    Link,
    VueperSlides,
    VueperSlide,
  },

  data() {
    return {
      showMore: false,
      video: {
        title: "Chancellor’s Message",
        video: {
          // url: "https://www.youtube.com/embed/wG7efaUPGTA",
          url: "https://www.youtube.com/embed/1YxFJV9nFqU?controls=1&fs=1&modestbranding=1&color=white&iv_load_policy=3&autohide=1&enablejsapi=1",
          // props: { autoplay: true, loop: true, controls: false, muted: true },
          props: {
            allow:
              "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture",
          },
        },
      },

      leadership: [
        {
          name: "Kader Kaneye",
          faculty: "",
          position: "Founder and President, A.D.U",
          image: "/storage/pages/about/KaderKaneye.jpg",
        },
        {
          name: "ALMOKTAR ALLAHOURY",
          faculty: "",
          position: "CEO, Total Chad",
          image: "/storage/pages/about/AlmoktarAllahoury.jpg",
        },
        {
          name: `KHADIJAH DIALLO`,
          faculty: "",
          position: `CEO, High Authority of Waqf Is DB Senior Officer in Niger`,
          image: "/storage/pages/about/KhadijahDiallo.jpg",
        },
        {
          name: `FATI N'ZI-HASSANE`,
          faculty: "",
          position: `Head of Human Capital and Institutions Development, African Union Development
                    Agency (AUDA-NEPAD)`,
          image: "/storage/pages/about/FatiNzi-Hassane.png",
        },

        {
          name: `MANON KARAMOKO `,
          faculty: "",
          position: `CEO, Unilever Cote d'Ivoire`,
          image: "/storage/pages/about/ManonKaramoko.jpg",
        },
        {
          name: "Carl Manlan",
          faculty: "",
          position: "Vice President, Social Impact, CEMEA at Visa",
          image: "/storage/pages/about/CarlManlan.jpg",
        },
      ],
    };
  },
};
</script>

<style lang="scss" scoped>
</style>