<template>
  <section class="academics">
    <portal to="cta">
      <section class="banner__cta__content">
        <h1
          class="title"
          data-aos="fade-up"
          data-aos-duration="1200"
          data-aos-anchor-placement="bottom-bottom"
        >
          Academics
        </h1>
        <ul class="breadcrumb">
          <li><Link href="/">Home</Link></li>
          <li><Link href="/academics">Academics</Link></li>
        </ul>
      </section>
    </portal>

    <section class="academics__majors">
      <h1
        class="academics__majors__title title--primary"
        data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-anchor-placement="bottom-bottom"
      >
        Business Administration (Featured Majors)
      </h1>
      <div class="academics__majors__cards__container">
        <div class="academics__majors__cards">
          <div class="academics__majors__cards__card">
            <div class="icon">
              <v-icon>mdi-gavel</v-icon>
            </div>
            <div class="content">
              <h3 class="academics__majors__cards__card__title">
                Bachelor of Business Law
              </h3>
              <p data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-anchor-placement="bottom-bottom">
                A.D.U. offers a three-year degree in Business Law that teaches
                courses in many different aspects of legal work. Students
                entering this program should have a strong commitment to justice
                and equality and fighting corruption. The types of careers that
                graduates can expect are Jurist of Enterprises, Magistrate in
                Public Jurisdictions, Legal Consultant, Notary Public.
              </p>
            </div>
          </div>
          <div class="academics__majors__cards__card">
            <div class="icon">
              <v-icon>mdi-chart-bar-stacked</v-icon>
            </div>
            <div class="content">
              <h3 class="academics__majors__cards__card__title">
                Project Management
              </h3>
              <p data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-anchor-placement="bottom-bottom">
                Project Managers are trained to make certain that complex
                projects go according to schedule. Project management positions
                are essential in construction and civil engineering etc. These
                types of projects include building new infrastructures such as
                bridges and office buildings, as well as repairing old
                infrastructures, such as homes or businesses. In keeping with
                the Ilimi concept, each course is designed and taught with a
                thread of ethical conduct woven through it to reinforce the
                responsibility of graduates to press ethical practice in their
                work-places. Courses also stress a commitment to combat social
                injustice and to make the world a better place for the less
                fortunate.
              </p>
            </div>
          </div>
        </div>
        <div class="academics__majors__cards">
          <div class="academics__majors__cards__card">
            <div class="icon">
              <v-icon>mdi-currency-usd</v-icon>
            </div>
            <div class="content">
              <h3 class="academics__majors__cards__card__title">
                Bachelor of Accounting
              </h3>
              <p data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-anchor-placement="bottom-bottom">
                A degree in Accounting and Finance will train you to work as a
                financial examiner, or a financial analyst, or a finance manager
                or as a business consultant who helps guide small entrepreneurs.
                It is a very exacting work…it requires a high level of attention
                to detail.
              </p>

              <p data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-anchor-placement="bottom-bottom">
                <strong>Financial Examiner:</strong> With a career as a
                financial examiner, you’ll help ensure compliance with laws
                governing banks and how they lend money, Or, you could be
                responsible for analyzing the financial strength of a business
                that is looking to expand.
              </p>
              <p data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-anchor-placement="bottom-bottom">
                <strong>Financial Analyst:</strong> You can expect to work with
                individuals and organizations to make strategic decisions based
                on investments
              </p>

              <p data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-anchor-placement="bottom-bottom">
                <strong>Business and Financial Consultant:</strong> As a
                business consultant, you can help other business owners manage
                start-up costs and investments, create a financial plan for
                their business and monitor day-to-day bookkeeping.
              </p>
            </div>
          </div>
          <div class="academics__majors__cards__card">
            <div class="icon">
              <v-icon>mdi-desktop-classic</v-icon>
            </div>
            <div class="content">
              <h3 class="academics__majors__cards__card__title">
                Bachelor of Management Information System
              </h3>
              <p data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-anchor-placement="bottom-bottom">
                Information Technology is diverse. It will allow you to take
                your profession in several different directions. It is
                practical. You will not only learn the theory but also get the
                opportunity to make things.
              </p>
              <p data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-anchor-placement="bottom-bottom">
                Technology positions available in IT often include jobs such as
                creating software, analyzing new forms of data, and developing
                solutions for today's highly technological world. In the next
                ten-years Niger will be fully digital and nearly every company
                and organization will be using digital technology. A.D.U.’s
                program will place you into the center of that exciting field by
                training you to create new technologies. Security will also be
                in large demand, people will want their mobiles and laptops to
                be secure from hackers and from people trying to steal their
                personal information.
              </p>
            </div>
          </div>
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
        Artificial Intelligence
      </h1>
      <p
       data-aos="fade-up"
          data-aos-duration="1500"
          data-aos-anchor-placement="bottom-bottom">
            The Bachelor of Science in Artificial Intelligence - BS(AI) program provides learners the knowledge and skills to transform complex inputs of text, vision, language and large databases into intelligible and actionable decisions to enhance human capabilities. The curriculum provides hands-on experience in various aspects of Artificial Intelligence including data science, machine learning, artificial neural networks, and developing data products. to address societal and organisational issues in agriculture, commerce, education, health, industry and governance etc.
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
        English Program
      </h1>
      <p
       data-aos="fade-up"
          data-aos-duration="1500"
          data-aos-anchor-placement="bottom-bottom">
            The ADU English program is an English Learning establishment of the African Development University that is focused on building the English language proficiency of professionals, businessmen and businesswomen etc., especially in the francophone region and is committed to taking learners through an exciting language learning journey with courses tailored to give learners an all-round study of the language.
            <v-btn
              text
              class="color-dark"
              @click="showMoreEp = true"
              v-show="!showMoreEp"
              >{{ $t('pages.about.why.btnMore') }}</v-btn
            >
          </p>
          <article v-show="showMoreEp" data-aos="fade-up"
          data-aos-duration="1500"
          data-aos-anchor-placement="bottom-bottom">
            <p>
           
          </p>
          <p>
              {{ $t('pages.about.why.p3') }} <v-btn text class="color-dark" @click="showMoreEp = false"
              >{{ $t('pages.about.why.btnLess') }}</v-btn
            >
            </p>
            
          </article>
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
  name: "Academics",
  layout: WebsiteLayout,
  components: {
    Link,
    VueperSlides,
    VueperSlide,
  },

  data() {
    return {
      showMore: false,
      showMoreEp: false,
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