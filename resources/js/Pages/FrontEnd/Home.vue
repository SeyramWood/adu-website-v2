<template>
  <section class="home">
    <portal to="cta">
      <section class="banner__cta__content">
        <h1
          class="title"
          data-aos="fade-up"
          data-aos-duration="1200"
          data-aos-anchor-placement="bottom-bottom"
        >
          Welcome to African Developemnt Universalis
        </h1>
        <p class="text">
          Start your studies of one of our Bachelor's or Masters's degrees now
          online, on-campus or in hybrid teaching mode!
        </p>
      </section>
    </portal>

    <section class="home__values">
      <div class="home__values__link">
        <h6>{{ $t("pages.home.title.1") }}</h6>
      </div>
      <div class="home__values__line"></div>
      <div class="home__values__link">
        <h6>{{ $t("pages.home.title.2") }}</h6>
      </div>
      <div class="home__values__line"></div>
      <div class="home__values__link">
        <h6>{{ $t("pages.home.title.3") }}</h6>
      </div>
    </section>

    <section class="home__our__programs">
      <h1 class="home__our__programs__title title--primary">
        Overview of our Programmes
      </h1>
      <main class="home__our__programs__container">
        <Link class="home__our__programs__container__card">
          <div
            class="
              home__our__programs__container__card__image
              home__our__programs__container__card__image--1
            "
          >
            <article class="article">
              <h6>Programmes</h6>
              <h3
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-anchor-placement="bottom-bottom"
              >
                Business Management
              </h3>
              <p
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-anchor-placement="bottom-bottom"
              >
                A.D.U. offers a three-year degree in Business Law that teaches
                courses in many different aspects of legal work.
              </p>
            </article>
          </div>
        </Link>
        <Link class="home__our__programs__container__card">
          <div
            class="
              home__our__programs__container__card__image
              home__our__programs__container__card__image--2
            "
          >
            <article class="article">
              <h6>Programmes</h6>
              <h3
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-anchor-placement="bottom-bottom"
              >
                Artificial Intelligence
              </h3>
              <p
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-anchor-placement="bottom-bottom"
              >
                The Bachelor of Science in Artificial Intelligence - BS(AI)
                program provides learners the knowledge and skills to provide
                solution to complex problems.
              </p>
            </article>
          </div>
        </Link>
        <Link class="home__our__programs__container__card">
          <div
            class="
              home__our__programs__container__card__image
              home__our__programs__container__card__image--3
            "
          >
            <article class="article">
              <h6>Programmes</h6>
              <h3
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-anchor-placement="bottom-bottom"
              >
                English Programme
              </h3>
              <p
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-anchor-placement="bottom-bottom"
              >
                The A.D.U. English program is an English Learning establishment
                that is focused on building the English language proficiency of
                professionals, etc.
              </p>
            </article>
          </div>
        </Link>
      </main>
    </section>

    <section class="home__study__adu">
      <h1
        class="home__study__adu__title title--primary"
        data-aos="fade-up"
        data-aos-anchor-placement="bottom-bottom"
        data-aos-duration="1000"
      >
        Studying at A.D.U.
      </h1>
      <div
        class="home__study__adu__caption"
        data-aos="fade-up"
        data-aos-anchor-placement="bottom-bottom"
        data-aos-duration="1500"
      >
        <p>
          An open and familiar environment is important to us. Learn more about
          our alumni, campus life, hybrid & virtual teaching and many other
          topics here.
        </p>
        <div class="link">
          <Link href="/academics">{{ $t("pages.home.rm") }}</Link>
          <span>&rarr;</span>
        </div>
      </div>
      <div class="home__study__adu__videos">
        <div
          class="
            home__study__adu__videos__card
            home__study__adu__videos__card--single
          "
        >
          <vueper-slides
            :dragging-distance="50"
            :arrows="false"
            :bullets="false"
            :fixed-height="true"
          >
            <vueper-slide
              v-for="(video, i) in videos"
              :key="i"
              :video="video.video"
            />
          </vueper-slides>
        </div>
        <div
          class="
            home__study__adu__videos__card home__study__adu__videos__card--many
          "
        >
          <div class="s__row">
            <div class="s__col c--6">
              <div class="home__study__adu__videos__card--many--card">
                <vueper-slides
                  :dragging-distance="50"
                  :arrows="false"
                  :bullets="false"
                  :fixed-height="true"
                >
                  <vueper-slide
                    v-for="(video, i) in videos"
                    :key="i"
                    :video="video.video"
                  />
                </vueper-slides>
              </div>
            </div>
            <div class="s__col c--6">
              <div class="home__study__adu__videos__card--many--card">
                <vueper-slides
                  :dragging-distance="50"
                  :arrows="false"
                  :bullets="false"
                  :fixed-height="true"
                >
                  <vueper-slide
                    v-for="(video, i) in videos"
                    :key="i"
                    :video="video.video"
                  />
                </vueper-slides>
              </div>
            </div>
          </div>
          <div class="s__row">
            <div class="s__col c--6">
              <div class="home__study__adu__videos__card--many--card">
                <vueper-slides
                  :dragging-distance="50"
                  :arrows="false"
                  :bullets="false"
                  :fixed-height="true"
                >
                  <vueper-slide
                    v-for="(video, i) in videos"
                    :key="i"
                    :video="video.video"
                  />
                </vueper-slides>
              </div>
            </div>
            <div class="s__col c--6">
              <div class="home__study__adu__videos__card--many--card">
                <vueper-slides
                  :dragging-distance="50"
                  :arrows="false"
                  :bullets="false"
                  :fixed-height="true"
                >
                  <vueper-slide
                    v-for="(video, i) in videos"
                    :key="i"
                    :video="video.video"
                  />
                </vueper-slides>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="home__stats">
      <div class="content">
        <div
          class="stat"
          data-aos="fade-up"
          data-aos-anchor-placement="bottom-bottom"
          data-aos-duration="1000"
        >
          <div class="icon">
            <v-icon>mdi-chart-bar</v-icon>
          </div>
          <div class="title">Intenship</div>
          <div class="text">100% {{ $t("pages.home.title.4") }}</div>
        </div>
        <div
          class="stat"
          data-aos="fade-up"
          data-aos-anchor-placement="bottom-bottom"
          data-aos-duration="1500"
        >
          <div class="icon">
            <v-icon>mdi-finance</v-icon>
          </div>
          <div class="title">Scholarship</div>
          <div class="text">70% {{ $t("pages.home.title.5") }}</div>
        </div>
        <div
          class="stat"
          data-aos="fade-up"
          data-aos-anchor-placement="bottom-bottom"
          data-aos-duration="1000"
        >
          <div class="icon">
            <v-icon>mdi-account-supervisor</v-icon>
          </div>
          <div class="title">Women</div>
          <div class="text">70% {{ $t("pages.home.title.6") }}</div>
        </div>
        <div
          class="stat"
          data-aos="fade-up"
          data-aos-anchor-placement="bottom-bottom"
          data-aos-duration="2000"
        >
          <div class="icon">
            <v-icon>mdi-currency-usd</v-icon>
          </div>
          <div class="title">Leadership</div>
          <div class="text">$10 million {{ $t("pages.home.title.7") }}</div>
        </div>
      </div>
    </section>

    <section class="home__news">
      <h1
        class="home__news__title title--primary"
        data-aos="fade-up"
        data-aos-anchor-placement="bottom-bottom"
        data-aos-duration="1000"
      >
        Ilimi News
      </h1>
      <div class="home__news__articles">
        <div
          class="
            home__news__articles__article home__news__articles__article--single
          "
        >
          <article class="article">
            <Link>
              <div class="image">
                <img
                  src="/storage/pages/home/news-1.jpg"
                  alt="News Image"
                  srcset=""
                />
              </div>
              <div
                class="link"
                data-aos="fade-up"
                data-aos-anchor-placement="bottom-bottom"
                data-aos-duration="1000"
              >
                <h5>
                  A.D.U. was nominated, along with 3 other universities, as one
                  of the best schools in the 8 regions of Niger.
                </h5>
              </div>
            </Link>
          </article>
        </div>
        <div
          class="
            home__news__articles__article home__news__articles__article--many
          "
        >
          <article class="article">
            <Link>
              <div class="article__wrap">
                <div
                  class="link"
                  data-aos="fade-up"
                  data-aos-anchor-placement="bottom-bottom"
                  data-aos-duration="1000"
                >
                  <h5>
                    A.D.U. was nominated, along with 3 other universities, as
                    one of the best schools in the 8 regions of Niger.
                  </h5>
                </div>
                <div class="image">
                  <img
                    src="/storage/pages/home/news-1.jpg"
                    alt="News Image"
                    srcset=""
                  />
                </div>
              </div>
            </Link>
          </article>
          <article class="article">
            <Link>
              <div class="article__wrap">
                <div
                  class="link"
                  data-aos="fade-up"
                  data-aos-anchor-placement="bottom-bottom"
                  data-aos-duration="1500"
                >
                  <h5>
                    A.D.U. was nominated, along with 3 other universities, as
                    one of the best schools in the 8 regions of Niger.
                  </h5>
                </div>
                <div class="image">
                  <img
                    src="/storage/pages/home/news-2-sm.jpg"
                    alt="News Image"
                    srcset=""
                  />
                </div>
              </div>
            </Link>
          </article>
          <article class="article">
            <Link>
              <div class="article__wrap">
                <div
                  class="link"
                  data-aos="fade-up"
                  data-aos-anchor-placement="bottom-bottom"
                  data-aos-duration="2000"
                >
                  <h5>
                    A.D.U. was nominated, along with 3 other universities, as
                    one of the best schools in the 8 regions of Niger.
                  </h5>
                </div>
                <div class="image">
                  <img
                    src="/storage/pages/home/news-3-sm.jpg"
                    alt="News Image"
                    srcset=""
                  />
                </div>
              </div>
            </Link>
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
  name: "Home",
  layout: WebsiteLayout,
  components: {
    Link,
    VueperSlides,
    VueperSlide,
  },

  data() {
    return {
      videos: [
        {
          title: "Chancellor’s Message",
          content:
            "This video is autoplayed, played in loop, has no controls and is not reacting to user interactions.",
          // image: "https://i.ytimg.com/vi_webp/ehJg_OlcjpE/maxresdefault.webp",
          video: {
            url: "https://www.youtube.com/embed/2d_7v9bda24",
            // props: { autoplay: true, loop: true, controls: false, muted: true },
            props: {
              allow:
                "accelerometer; autoplay; encrypted-media; picture-in-picture",
            },
          },
        },
      ],
    };
  },
};
</script>

<style lang="scss" scoped>
</style>