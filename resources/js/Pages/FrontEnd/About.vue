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
          {{ $t('pages.about.banner') }}
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
          data-aos-anchor-placement="bottom-bottom">{{ $t('pages.about.welcome') }}</h1>
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
          data-aos-anchor-placement="bottom-bottom">Our Why</h1>
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


    <section class="about__our__values">
      <h1 class="about__our__values__title title--primary" data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-anchor-placement="bottom-bottom">Our Values</h1>
      <div class="academics__majors__program">
        <div class="academics__majors__program__image">
          <img src="/storage/pages/about/values.jpg" alt="" srcset="" />
        </div>
        <div class="academics__majors__program__text">
          <h3 class="title"></h3>
          <article class="article">
            <ul
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
              class="values__list"
            >
             <li>
               <h3>{{ $t('pages.about.values.h1') }}</h3>
               <ul>
                 <li>
                   <p>{{ $t('pages.about.values.p1') }}</p>
                 </li>
               </ul>
             </li>
             <li>
               <h3>{{ $t('pages.about.values.h2') }}</h3>
               <ul>
                 <li>
                   <p>{{ $t('pages.about.values.p2') }}</p>
                 </li>
               </ul>
             </li>
             <li>
               <h3>{{ $t('pages.about.values.h3') }}</h3>
               <ul>
                 <li>
                  <p>{{ $t('pages.about.values.p3') }}</p>
                 </li>
               </ul>
             </li>
            </ul>
          </article>
        </div>
      </div>
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

    <section class="about__our__team">
       <h1 class="about__our__team__title title--primary" data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-anchor-placement="bottom-bottom">Join Our Team</h1>
      <div class="academics__majors__program image--right">
        <div class="academics__majors__program__image image--right--image img-xx">
          <img src="/storage/pages/about/our-team.jpg" alt="" srcset="" />
        </div>
        <div class="academics__majors__program__text image--right--text">
          <h3 class="title"></h3>
          <article class="article">
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              {{ $t('pages.about.ourteam') }}
              <a href="mailto:talent@ilimi.edu.ne" class="color-primary">talent@ilimi.edu.ne</a>
            </p>
          </article>
        </div>
      </div>
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
          name: "Michaëlle Jean",
          faculty: "",
          position: "Chancellor, A.D.U",
          image: "/storage/pages/about/chancellor.jpg",
        },
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