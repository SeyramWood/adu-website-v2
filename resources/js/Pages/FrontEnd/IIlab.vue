<template>
  <section class="iilab">
    <portal to="cta">
      <section class="banner__cta__content">
        <h1
          class="title"
          data-aos="fade-up"
          data-aos-duration="1200"
          data-aos-anchor-placement="bottom-bottom"
        >
          IILAB
        </h1>

        <ul class="breadcrumb">
          <li><Link href="/">Home</Link></li>
          <li><Link href="/iilab">IIlab</Link></li>
        </ul>
      </section>
    </portal>

    <section class="iilab__welcome">
      <div class="iilab__welcome__content">
        <div class="iilab__welcome__content__wrapper">
          <h1
            class="iilab__welcome__title title--primary"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-anchor-placement="bottom-bottom"
          >
            Welcome to IILAB
          </h1>
          <p
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-anchor-placement="bottom-bottom"
          >
            The iiLab (ilimi Innovation Lab) is A.D.U’s innovation and
            entrepreneurship hub committed to empowering our Young Leaders by
            providing and connecting them with tools, resources, networks and
            support to scale their innovative and entrepreneurial ideas.
          </p>
        </div>
        <div class="image">
          <h1
            class="title--primary title-mobile"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-anchor-placement="bottom-bottom"
          >
            Welcome to IILAB
          </h1>
          <img
            src="/storage/pages/iilab/iilab.jpg"
            alt="IILAB Logo"
            srcset=""
          />
        </div>
      </div>
    </section>

    <section class="iilab__services" id="services">
      <h1
        class="iilab__services__title title--primary"
        data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-anchor-placement="bottom-bottom"
      >
        {{ $t("pages.iilab.services.title") }}
      </h1>

      <div class="iilab__services__wrapper">
        <div class="advantages__card">
          <span>
            <v-icon>mdi-account-group-outline</v-icon>
          </span>
          <p>{{ $t("pages.iilab.services.card.1") }}</p>
        </div>
        <div class="advantages__card">
          <span>
            <v-icon>mdi-briefcase-check-outline</v-icon>
          </span>
          <p>{{ $t("pages.iilab.services.card.2") }}</p>
        </div>
        <div class="advantages__card">
          <span>
            <v-icon>mdi-coach-lamp</v-icon>
          </span>
          <p>{{ $t("pages.iilab.services.card.3") }}</p>
        </div>
        <div class="advantages__card">
          <span>
            <v-icon>mdi-calendar-outline</v-icon>
          </span>
          <p>{{ $t("pages.iilab.services.card.4") }}</p>
        </div>
        <div class="advantages__card">
          <span>
            <v-icon>mdi-card-account-details-outline</v-icon>
          </span>
          <p>{{ $t("pages.iilab.services.card.5") }}</p>
        </div>
        <div class="advantages__card">
          <span>
            <v-icon>mdi-book-open-page-variant-outline</v-icon>
          </span>
          <p>{{ $t("pages.iilab.services.card.6") }}</p>
        </div>
        <div class="advantages__card">
          <span>
            <v-icon>mdi-strategy</v-icon>
          </span>
          <p>{{ $t("pages.iilab.services.card.7") }}</p>
        </div>
        <div class="advantages__card">
          <span>
            <v-icon>mdi-billboard</v-icon>
          </span>
          <p>{{ $t("pages.iilab.services.card.8") }}</p>
        </div>
      </div>
    </section>

    <section class="iilab__event" id="events">
      <h1
        class="iilab__event__title title--primary"
        data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-anchor-placement="bottom-bottom"
      >
        {{ $t("pages.iilab.link.3") }}
      </h1>
      <div class="iilab__event__events">
        <a
          v-for="e in events"
          :key="e.name"
          ref="javascript:"
          @click="getEventData(e)"
          role="button"
        >
          <div class="iilab__event__events__card">
            <div class="date">
              <span class="month">{{
                e.date.split(",")[0].substring(0, 3)
              }}</span>
              <span class="day">{{ e.date.split(",")[0].split(" ")[1] }}</span>
            </div>
            <div
              class="article"
              data-aos="fade-up"
              data-aos-duration="1500"
              data-aos-anchor-placement="bottom-bottom"
            >
              {{
                `${e.title.substr(0, 70)} ${e.title.length > 70 ? "..." : ""}`
              }}
            </div>
          </div>
        </a>
      </div>
      <div class="view__more">
        <!-- <Link as="button" href="/iilab/entrepreneures">{{
          $t("pages.iilab.va")
        }}</Link> -->
      </div>
    </section>

    <section class="iilab__news" id="entrepreneures">
      <h1
        class="iilab__news__title title--primary"
        data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-anchor-placement="bottom-bottom"
      >
        {{ $t("pages.iilab.link.4") }}
      </h1>
      <div class="s__row">
        <div class="s__col c--4" v-for="show in showrooms" :key="show.title">
          <div class="news__container">
            <div class="image">
              <img
                :src="show && show.images && show.images[0]"
                alt=""
                srcset=""
              />
            </div>
            <h1
              class="title"
              @click="getShowroomData(show)"
              role="button"
              data-aos="fade-up"
              data-aos-duration="500"
              data-aos-anchor-placement="bottom-bottom"
            >
              {{
                `${show.title.substr(0, 70)} ${
                  show.title.length > 50 ? "..." : ""
                }`
              }}
            </h1>
          </div>
        </div>
      </div>
      <!-- <div class="view__more">
        <Link as="button" href="/iilab/entrepreneures">{{
          $t("pages.iilab.va")
        }}</Link>
      </div> -->
    </section>

    <s-modal v-model="eventModal" :width="`${getScreen ? '35rem' : '50rem'}`">
      <div class="event-details" v-if="currentEvent">
        <div class="image">
          <vueper-slides slide autoplay :touchable="false" fixed-height="30rem">
            <vueper-slide
              v-for="(image, i) in currentEvent.images"
              :key="i"
              :image="image"
              style="height: 100%"
            />
          </vueper-slides>
        </div>
        <h1>{{ currentEvent.title }}</h1>

        <p>
          {{ currentEvent.description }}
        </p>
      </div>
    </s-modal>
    <s-modal
      v-model="showroomModal"
      :width="`${getScreen ? '35rem' : '50rem'}`"
    >
      <div class="event-details" v-if="currentShowroom">
        <div class="image">
          <vueper-slides slide autoplay :touchable="false" fixed-height="30rem">
            <vueper-slide
              v-for="(image, i) in currentShowroom.images"
              :key="i"
              :image="image"
              style="height: 100%"
            />
          </vueper-slides>
        </div>
        <h1>{{ currentShowroom.title }}</h1>

        <p>
          {{ currentShowroom.description }}
        </p>
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
  name: "IIlab",
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
        this.events = this.$lang.messages[`${locale}.pages`].iilab.events;
        this.showrooms = this.$lang.messages[`${locale}.pages`].iilab.showrooms;
      },
      { immediate: true }
    );
  },
  data() {
    return {
      eventModal: false,
      currentEvent: null,
      showroomModal: false,
      currentShowroom: null,
      events: [],
      showrooms: [],
    };
  },
  methods: {
    getEventData(event) {
      this.currentEvent = event;
      this.$nextTick(() => {
        this.eventModal = !this.eventModal;
      });
    },
    getShowroomData(showroom) {
      this.currentShowroom = showroom;
      this.$nextTick(() => {
        this.showroomModal = !this.showroomModal;
      });
    },
  },
};
</script>

<style lang="scss" scoped>
</style>