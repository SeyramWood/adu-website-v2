<template>
  <section class="admissions">
    <portal to="cta">
      <section class="banner__cta__content">
        <h1
          class="title"
          data-aos="fade-up"
          data-aos-duration="1200"
          data-aos-anchor-placement="bottom-bottom"
        >
          {{ $t("pages.studyatadu.banner") }}
        </h1>
        <ul class="breadcrumb">
          <li><Link href="/">Home</Link></li>
          <li>
            <Link href="/study-at-adu">{{
              $t("pages.studyatadu.banner")
            }}</Link>
          </li>
        </ul>
      </section>
    </portal>

    <section class="admissions__advantage">
      <div class="admissions__advantage__cta">
        <h1
          class="admissions__advantage__title title--primary"
          data-aos="fade-up"
          data-aos-anchor-placement="bottom-bottom"
          data-aos-duration="1000"
        >
          {{ $t("pages.studyatadu.title") }}
        </h1>
        <div class="admissions__advantage__text">
          <p
            data-aos="fade-up"
            data-aos-anchor-placement="bottom-bottom"
            data-aos-duration="1500"
          >
            {{ $t("pages.studyatadu.p") }}
          </p>
        </div>
      </div>
      <div class="admissions__advantage__advantages">
        <div class="admissions__advantage__advantages__badge">
          <p class="percentage">{{ $t("pages.studyatadu.advantages.p11") }}</p>
          <p class="text">{{ $t("pages.studyatadu.advantages.p12") }}</p>
          <p class="text">{{ $t("pages.studyatadu.advantages.p13") }}</p>
        </div>
        <div class="admissions__advantage__advantages__badge">
          <p class="percentage">{{ $t("pages.studyatadu.advantages.p21") }}</p>
          <p class="text">{{ $t("pages.studyatadu.advantages.p22") }}</p>
          <p class="text">{{ $t("pages.studyatadu.advantages.p23") }}</p>
        </div>
        <div class="admissions__advantage__advantages__badge">
          <p class="percentage">{{ $t("pages.studyatadu.advantages.p31") }}</p>
          <p class="text">{{ $t("pages.studyatadu.advantages.p32") }}</p>
          <p class="text">{{ $t("pages.studyatadu.advantages.p33") }}</p>
        </div>
      </div>
    </section>

    <section class="admissions__info">
      <h1
        class="admissions__info__title title--primary"
        data-aos="fade-up"
        data-aos-anchor-placement="bottom-bottom"
        data-aos-duration="1000"
      >
        {{ $t("pages.studyatadu.admission.title") }}
      </h1>
      <div class="admissions__info__wrapper">
        <div class="admissions__info__cta">
          <h1 class="title">
            {{ $t("pages.studyatadu.admission.cta.title") }}
          </h1>
          <p class="text">{{ $t("pages.studyatadu.admission.cta.text") }}</p>
        </div>
        <div class="admissions__info__cards">
          <div
            class="admissions__info__cards__card"
            v-for="admission in admissions"
            :key="admission.title"
          >
            <div class="front">
              <div class="image">
                <img :src="admission.url" alt="law" srcset="" />
              </div>
              <div class="overlay">
                <h1 class="title">{{ admission.title }}</h1>
              </div>
            </div>
            <div class="back">
              <Link href="/study-at-adu">
                <h1 class="title">{{ admission.title }}</h1>
                <p class="text">
                  {{ admission.text }}
                </p>
              </Link>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="academics__majors">
      <h1
        class="academics__majors__title title--primary"
        data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-anchor-placement="bottom-bottom"
      >
        {{ $t("pages.studyatadu.majors.title") }}
      </h1>
      <div class="academics__majors__program">
        <div class="academics__majors__program__image">
          <img src="/storage/pages/academics/law.jpg" alt="" srcset="" />
        </div>
        <div class="academics__majors__program__text">
          <h3 class="title">{{ $t("pages.studyatadu.majors.law.title") }}</h3>
          <article class="article">
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              {{ $t("pages.studyatadu.majors.law.p1") }}
            </p>
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              {{ $t("pages.studyatadu.majors.law.p2") }}
            </p>
          </article>
        </div>
      </div>
      <div class="academics__majors__program image--right">
        <div class="academics__majors__program__image image--right--image">
          <img src="/storage/pages/academics/woman.jpg" alt="" srcset="" />
        </div>
        <div class="academics__majors__program__text image--right--text">
          <h3 class="title">{{ $t("pages.studyatadu.majors.pm.title") }}</h3>
          <article class="article">
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              {{ $t("pages.studyatadu.majors.pm.p1") }}
            </p>
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              {{ $t("pages.studyatadu.majors.pm.p2") }}
            </p>
          </article>
        </div>
      </div>
      <div class="academics__majors__program">
        <div class="academics__majors__program__image">
          <img src="/storage/pages/academics/accounting.jpg" alt="" srcset="" />
        </div>
        <div class="academics__majors__program__text">
          <h3 class="title">
            {{ $t("pages.studyatadu.majors.accounting.title") }}
          </h3>
          <article class="article">
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              {{ $t("pages.studyatadu.majors.accounting.p1") }}
            </p>
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              {{ $t("pages.studyatadu.majors.accounting.p2") }}
            </p>
          </article>
        </div>
      </div>
      <div class="academics__majors__program image--right">
        <div class="academics__majors__program__image image--right--image">
          <img src="/storage/pages/academics/mis.jpg" alt="" srcset="" />
        </div>
        <div class="academics__majors__program__text image--right--text">
          <h3 class="title">{{ $t("pages.studyatadu.majors.mis.title") }}</h3>
          <article class="article">
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              {{ $t("pages.studyatadu.majors.mis.p1") }}
            </p>
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              {{ $t("pages.studyatadu.majors.mis.p2") }}
            </p>
          </article>
        </div>
      </div>
    </section>

    <section class="academics__ai">
      <div class="academics__ai__wrapper">
        <h1
          class="academics__ai__title title--primary"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-anchor-placement="bottom-bottom"
        >
          {{ $t("pages.studyatadu.ai.title") }}
        </h1>
        <article
          data-aos="fade-up"
          data-aos-duration="1500"
          data-aos-anchor-placement="bottom-bottom"
        >
          <h4 class="hs">{{ $t("pages.studyatadu.ai.background.title") }}</h4>
          <p>{{ $t("pages.studyatadu.ai.background.p") }}</p>
          <v-btn
            text
            class="color-dark"
            @click="showMore = true"
            v-show="!showMore"
            >{{ $t("pages.about.why.btnMore") }}</v-btn
          >
        </article>
        <article
          v-show="showMore"
          data-aos="fade-up"
          data-aos-duration="1500"
          data-aos-anchor-placement="bottom-bottom"
        >
          <h4 class="hs">{{ $t("pages.studyatadu.ai.description.title") }}</h4>
          <p>
            {{ $t("pages.studyatadu.ai.description.p") }}
          </p>
          <div>
            <h4 class="hs">{{ $t("pages.studyatadu.ai.outcomes.title") }}</h4>
            <ul>
              <li>{{ $t("pages.studyatadu.ai.outcomes.p.1") }}</li>
              <li>{{ $t("pages.studyatadu.ai.outcomes.p.2") }}</li>
              <li>{{ $t("pages.studyatadu.ai.outcomes.p.3") }}</li>
              <li>{{ $t("pages.studyatadu.ai.outcomes.p.4") }}</li>
            </ul>
            <v-btn text class="color-dark" @click="showMore = false">{{
              $t("pages.about.why.btnLess")
            }}</v-btn>
          </div>
        </article>
      </div>
    </section>

    <section class="academics__ep">
      <div class="academics__ep__wrapper">
        <h1
          class="academics__ai__title title--primary"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-anchor-placement="bottom-bottom"
        >
          {{ $t("pages.studyatadu.ep.title") }}
        </h1>
        <div
          data-aos="fade-up"
          data-aos-duration="1500"
          data-aos-anchor-placement="bottom-bottom"
        >
          <h4 class="hs">{{ $t("pages.studyatadu.ep.background.title") }}</h4>
          <p>{{ $t("pages.studyatadu.ep.background.p") }}</p>
          <v-btn
            text
            class="color-primary"
            @click="showMoreEp = true"
            v-show="!showMoreEp"
            >{{ $t("pages.about.why.btnMore") }}</v-btn
          >
        </div>
        <article
          v-show="showMoreEp"
          data-aos="fade-up"
          data-aos-duration="1500"
          data-aos-anchor-placement="bottom-bottom"
        >
          <h4 class="hs">{{ $t("pages.studyatadu.ep.cs.title") }}</h4>
          <p>{{ $t("pages.studyatadu.ep.cs.p") }}</p>
          <h4 class="hs">{{ $t("pages.studyatadu.ep.packages.title") }}</h4>
          <div>
            <p v-html="$t('pages.studyatadu.ep.packages.p.a')"></p>
            <p v-html="$t('pages.studyatadu.ep.packages.p.b')"></p>
            <v-btn text class="color-primary" @click="showMoreEp = false">{{
              $t("pages.about.why.btnLess")
            }}</v-btn>
          </div>
        </article>
      </div>
    </section>

    <section class="academics__learn__more">
      <div class="academics__learn__more__wrapper">
        <h1 class="title">Learn More</h1>
        <p class="text">
          A.D.U. is committed to ensuring high-quality learning experiences that
          transform students for global citizenship and individual excellence.
          Prepare for your next step and explore our community resources.
        </p>
        <div class="links">
          <ul class="links__wrapper">
            <li>
              <a
                href="https://aduilimi-my.sharepoint.com/:b:/g/personal/fafagnibo_ilimi_edu_ne/Efz0yLO5bV1AkPv22eCnkKsBn13Yy1sUJkBTASqsSC2sGw?e=7vG1V8"
                target="_blank"
                rel="noopener noreferrer"
                >How to Apply</a
              >
            </li>
            <li><Link href="#">Undergraduate Prospectus</Link></li>
            <li><Link href="#">Tuition & Payments</Link></li>
            <li><Link href="#">English Program Prospectus</Link></li>
            <li><Link href="#">Scholarship & Financial Aid</Link></li>
            <li><Link href="#"> Online Applications Manual</Link></li>
          </ul>
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
  name: "StudyAtADU",
  layout: WebsiteLayout,
  components: {
    Link,
    VueperSlides,
    VueperSlide,
  },
  mounted() {
    this.$watch(
      () => this.$lang.locale,
      (locale) => {
        this.admissions =
          this.$lang.messages[
            `${locale}.pages`
          ].studyatadu.admission.admissions;
      },
      { immediate: true }
    );
  },
  data() {
    return {
      showMore: false,
      showMoreEp: false,
      programs: [
        {
          title: "Law",
          text: `The degree in Business Law teaches courses in many different
                aspects of legal work, with a strong commitment to justice and
                equality and fighting corruption.`,
          url: "/storage/pages/home/programs/law.jpg",
        },
        {
          title: "Accounting",
          text: `The degree in Accounting and Finance will train you to work as a financial examiner, or a financial analyst, or as a business consultant who helps guide small entrepreneurs.`,
          url: "/storage/pages/home/programs/accounting.jpg",
        },
        {
          title: "Project Management",
          text: `The degree in Project Management trains young leaders to manage and ensure that complex projects go according to schedule.`,
          url: "/storage/pages/home/programs/project.png",
        },
        {
          title: "MIS",
          text: `The degree in MIS will place you at the center of an exciting field by training you to create and manage new technologies.`,
          url: "/storage/pages/home/programs/mis.png",
        },
      ],
      admissions: [],
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
          name: `ROSE A. DODD`,
          faculty: "",
          position: `Director, the Education Collaborative Ashesi University`,
          image: "/storage/pages/about/RoseDodd.jpg",
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