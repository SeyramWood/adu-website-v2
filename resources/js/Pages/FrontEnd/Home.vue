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
          ILIMI, African Development Universalis
        </p>
        <h1 class="text">
          <span>Changing the future</span><br />
          <span>of the Sahel.</span>
          <!-- Start your studies of one of our Bachelors degrees or Professional
          programmes on our campus in hybrid teaching mode! -->
        </h1>
      </section>
    </portal>

    <section class="home__values">
      <div class="home__values__link">
        <h6>{{ $t("pages.home.title.1") }}</h6>
      </div>
      <div class="home__values__line"></div>
      <div class="home__values__link">
        <h6>{{ $t("pages.home.title.3") }}</h6>
      </div>
      <div class="home__values__line"></div>
      <div class="home__values__link">
        <h6>{{ $t("pages.home.title.2") }}</h6>
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
          Studying at A.D.U.
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
          <p class="text">Internships & Placement</p>
        </div>
        <div class="admissions__advantage__advantages__badge">
          <p class="percentage">70%</p>
          <p class="text">Scholarships & Financial Aid</p>
        </div>
        <div class="admissions__advantage__advantages__badge">
          <p class="percentage">70%</p>
          <p class="text">Women & Gender Equality</p>
        </div>
      </div>
    </section>
    <section class="home__our__programs">
      <h1 class="home__our__programs__title title--primary">
        Overview of Programs
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
        Welcome to the Future
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
        Our Partners
      </h1>

      <div class="home__partners__ashesi">
        <div class="home__partners__ashesi__image">
          <img src="/storage/pages/home/ashesi.jpg" alt="" srcset="" />
        </div>
        <div class="home__partners__ashesi__text">
          <h3 class="title">Ashesi University</h3>
          <article class="article">
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              With a ranking among the world's top 400 universities in the Times
              Higher Education University Impact Rankings, in 2020, Ashesi
              University is identified as one of the finest universities in
              Africa.
            </p>
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              From the begining to this day, A.D.U has been mentored and
              supported by Ashesi, both, not-for-profit institutions and having
              similar missions regarding raising the bar for higher education in
              Africa by educating ethical and entrepreneurial leaders.
            </p>
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              To fill the gap existing in higher education across the small
              liberal arts colleges that are begining to establish in Africa,
              Ashesi launched the Educative Collaboration, in which A.D.U. is
              part of, in 2017.
            </p>
          </article>

          <div class="view__more">
            <a
              href="https://www.ashesi.edu.gh/"
              target="_blank"
              rel="noopener noreferrer"
              >Visit Ashesi</a
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
        >
          <div class="title">
            <Link>
              {{
                `A.D.U. nominated as one of the  best Universities in Niger`.substring(
                  0,
                  140
                )
              }}
            </Link>
          </div>
          <div class="line"></div>
          <div class="text">
            {{
              `The announcement was made at a grand gala held at the Mahatma Gandhi Conference Center on November 7, 2021.`
            }}
          </div>
        </div>
        <div
          class="home__news__articles__article"
          data-aos="fade-up"
          data-aos-anchor-placement="bottom-bottom"
          data-aos-duration="1500"
        >
          <div class="title">
            <Link>
              {{
                `Oualas, one of Africa's greatest comedians visit A.D.U.`.substr(
                  0,
                  140
                )
              }}
            </Link>
          </div>
          <div class="line"></div>
          <div class="text">
            {{
              `It was Oualas, one of the greatest African comedians, holder of the Best Comedian Award at the 1st edition of the Awards du Rire 2018.`
            }}
          </div>
        </div>
        <div
          class="home__news__articles__article"
          data-aos="fade-up"
          data-aos-anchor-placement="bottom-bottom"
          data-aos-duration="1000"
        >
          <div class="title">
            <Link>
              {{
                `iiLab and CIPMEN organise training for entrepreneurs`.substr(
                  0,
                  140
                )
              }}
            </Link>
          </div>
          <div class="line"></div>
          <div class="text">
            {{
              `On November 9th, the iiLab, A.D.U.'s startup incubator, and the CIPMEN co-organized a training session called Osez Entreprendre (Dare to be entrepreneurial) for A.D.U.'s #YoungLeaders under the theme Moringa Our Green Gold.`
            }}
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
  name: "Home",
  layout: WebsiteLayout,
  components: {
    Link,
    VueperSlides,
    VueperSlide,
  },

  data() {
    return {
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
          url: "/storage/pages/home/programs/project.jpg",
        },
        {
          title: "MIS",
          text: `The degree in MIS will place you at the center of an exciting field by training you to create and manage new technologies.`,
          url: "/storage/pages/home/programs/mis.jpg",
        },
        {
          title: "Artificial Intellgence",
          text: `The AI program equips young people with skills to develop intelligent systems and software that leverage data to solve societal and organizational issues.`,
          url: "/storage/pages/home/programs/ai.jpg",
        },
        {
          title: "English Program",
          text: `The A.D.U. English program focuses on building the English language proficiency of students, professionals, and entreprenuers etc.`,
          url: "/storage/pages/home/programs/english.png",
        },
      ],
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
};
</script>

<style lang="scss" scoped>
</style>