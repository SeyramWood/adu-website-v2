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
          Admissions
        </h1>
        <ul class="breadcrumb">
          <li><Link href="/">Home</Link></li>
          <li><Link href="/admissions">Admissions</Link></li>
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
          The A.D.U. Advantage
        </h1>
        <div class="admissions__advantage__text">
          <p
            data-aos="fade-up"
            data-aos-anchor-placement="bottom-bottom"
            data-aos-duration="1500"
          >
            A.D.U is a bilingual establishment, with instruction in both French
            and English. We offer fields of study within liberal arts framework
            for today’s most in-demand jobs, taught by committed professors who
            challenge you to think critically and creatively. From interactive
            classes to internship and research, you will transform as you pursue
            your passions!
          </p>
        </div>
      </div>
      <div class="admissions__advantage__advantages">
        <div class="admissions__advantage__advantages__badge">
          <p class="percentage">100%</p>
          <p class="text">Student</p>
          <p class="text">Centered</p>
        </div>
        <div class="admissions__advantage__advantages__badge">
          <p class="percentage">100%</p>
          <p class="text">Entrepreneurial</p>
          <p class="text">Focused</p>
        </div>
        <div class="admissions__advantage__advantages__badge">
          <p class="percentage">100%</p>
          <p class="text">Bilingual Education</p>
          <p class="text">English & French</p>
        </div>
      </div>
    </section>

    <section class="admissions__info">
      <div class="admissions__info__cards">
        <div class="admissions__info__cards__card">
          <h1
            class="title"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-anchor-placement="bottom-bottom"
          >
            Scholarship
          </h1>
          <p
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-anchor-placement="bottom-bottom"
          >
            Therefore, A.D.U. offers Scholarship for talented student who are
            experiencing economic and social hardship so that they will be able
            to achieve their goals and impact their community. You can apply for
            a scholarship by filling this form
          </p>
          <div class="link">
            <a
              href="https://aduilimi-my.sharepoint.com/:b:/g/personal/fafagnibo_ilimi_edu_ne/Efz0yLO5bV1AkPv22eCnkKsBn13Yy1sUJkBTASqsSC2sGw?e=7vG1V8"
              target="_blank"
              rel="noopener noreferrer"
              >Apply Now</a
            >

            <span>&rarr;</span>
          </div>
        </div>
        <div class="admissions__info__cards__card">
          <h1
            class="title"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-anchor-placement="bottom-bottom"
          >
            Programs Summary
          </h1>
          <p
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-anchor-placement="bottom-bottom"
          >
            Our 3-year bachelor program is both nationally and internationally
            recognized. Our degree programs are all accredited by Ministry of
            Higher Education, Research and Innovation, Niger. We offer two
            Bachelors: Business Administration & Artificial Intelligence.
          </p>
          <div class="link">
            <a
              href="https://applications.eduappgh.com"
              target="_blank"
              rel="noopener noreferrer"
              >Apply Now</a
            >
            <span>&rarr;</span>
          </div>
        </div>
        <div class="admissions__info__cards__card">
          <h1
            class="title"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-anchor-placement="bottom-bottom"
          >
            Admission Team
          </h1>
          <p
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-anchor-placement="bottom-bottom"
          >
            For additional questions and/or inquiry regarding application, you
            can reach us through:
          </p>
          <div class="contact">
            <ul
              style="list-style-type: disc; margin-left: 1.2rem"
              data-aos="fade-up"
              data-aos-duration="2000"
              data-aos-anchor-placement="bottom-bottom"
            >
              <li>
                <a href="mailto:admissions@ilimi.edu.ne" class="color-primary"
                  >admissions@ilimi.edu.ne</a
                >
              </li>
              <li>
                <a href="tel:+22792396868" class="color-primary"
                  >+227 92 39 68 68 (WhatsApp)</a
                >
              </li>
              <li>
                <a href="tel:+22793396868" class="color-primary"
                  >+227 93 39 68 68</a
                >
              </li>
            </ul>
          </div>
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
  name: "Admissions",
  layout: WebsiteLayout,
  components: {
    Link,
    VueperSlides,
    VueperSlide,
  },

  data() {
    return {
      showMore: "",
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