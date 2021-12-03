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
        <div class="home__our__programs__cards__card">
          <h1
            class="title"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-anchor-placement="bottom-bottom"
          >
            Business Administration
          </h1>
          <p
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-anchor-placement="bottom-bottom"
          >
            A.D.U. offers a three-year bachelor's degree in Business
            Administration with majors in Law, Management, Accounting and MIS.
          </p>
          <div class="link">
            <a
              href="https://aduilimi-my.sharepoint.com/:b:/g/personal/fafagnibo_ilimi_edu_ne/Efz0yLO5bV1AkPv22eCnkKsBn13Yy1sUJkBTASqsSC2sGw?e=7vG1V8"
              target="_blank"
              rel="noopener noreferrer"
              >Read more</a
            >

            <span>&rarr;</span>
          </div>
        </div>
        <div class="home__our__programs__cards__card">
          <h1
            class="title"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-anchor-placement="bottom-bottom"
          >
            Artificial Intelligence
          </h1>
          <p
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-anchor-placement="bottom-bottom"
          >
            The Bachelor of Science in Artificial Intelligence - BS(AI) program
            provides learners the knowledge and skills to provide solution to
            complex problems.
          </p>
          <div class="link">
            <a
              href="https://applications.eduappgh.com"
              target="_blank"
              rel="noopener noreferrer"
              >Read more</a
            >
            <span>&rarr;</span>
          </div>
        </div>
        <div class="home__our__programs__cards__card">
          <h1
            class="title"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-anchor-placement="bottom-bottom"
          >
            English Program
          </h1>
          <p
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-anchor-placement="bottom-bottom"
          >
            The A.D.U. English program focuses on building the English language
            proficiency of students, professionals, and entreprenuers etc.
          </p>
          <div class="link">
            <a
              href="https://applications.eduappgh.com"
              target="_blank"
              rel="noopener noreferrer"
              >Read more</a
            >
            <span>&rarr;</span>
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
    };
  },
};
</script>

<style lang="scss" scoped>
</style>