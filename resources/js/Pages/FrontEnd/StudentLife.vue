<template>
  <section class="student__life">
    <portal to="cta">
      <section class="banner__cta__content">
        <h1
          class="title"
          data-aos="fade-up"
          data-aos-duration="1200"
          data-aos-anchor-placement="bottom-bottom"
        >
          Student Life
        </h1>

        <ul class="breadcrumb">
          <li><Link href="/">Home</Link></li>
          <li><Link href="/student-life">Student Life</Link></li>
        </ul>
      </section>
    </portal>
    <section class="student__life__welcome">
      <h1
        class="student__life__welcome__title title--primary"
        data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-anchor-placement="bottom-bottom"
      >
        Life on Campus
      </h1>
      <p
        data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-anchor-placement="bottom-bottom"
      >
        Student life typically involves social activities within the A.D.U.
        campus, and the time spent with school-mates and teachers within the
        class and outside. The goal of student life is to create a good
        environment where students will grow and have a very good experience
        during their academic journey at A.D.U.
      </p>
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
    <section class="student__life__album">
      <h1
        class="student__life__album__title title--primary"
        data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-anchor-placement="bottom-bottom"
      >
        Student Gallery
      </h1>
      <div class="album">
        <div class="album__card" v-for="g in gallery" :key="g.name">
          <lightbox css="h-400 " :cells="5" :items="g.images"></lightbox>
          <div class="details">
            <div class="details__content">
              <span>Album</span>
              <span>{{ g.album }}</span>
            </div>
            <div class="details__content">
              <span>Date</span>
              <span>{{ g.date }}</span>
            </div>
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
import SModal from "../../components/SModal";
export default {
  name: "StudentLife",
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
      video: {
        title: "Chancellor’s Message",
        video: {
          // url: "https://www.youtube.com/embed/wG7efaUPGTA",
          url: "https://www.youtube.com/embed/wG7efaUPGTA?controls=1&fs=1&modestbranding=1&color=white&iv_load_policy=3&autohide=1&enablejsapi=1",
          // props: { autoplay: true, loop: true, controls: false, muted: true },
          props: {
            allow:
              "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture",
          },
        },
      },
      gallery: [
        {
          album: "The student government",
          date: "Nov. 9, 2021",
          images: [
            "/storage/pages/gallery/student-body/1.jpg",
            "/storage/pages/gallery/student-body/2.jpg",
            "/storage/pages/gallery/student-body/3.jpg",
            "/storage/pages/gallery/student-body/4.jpg",
            "/storage/pages/gallery/student-body/5.jpg",
          ],
        },
        {
          album: "Community Service",
          date: "Nov. 9, 2021",
          images: [
            "/storage/pages/gallery/community_service/1.jpeg",
            "/storage/pages/gallery/community_service/2.jpeg",
            "/storage/pages/gallery/community_service/3.jpeg",
            "/storage/pages/gallery/community_service/4.jpeg",
            "/storage/pages/gallery/community_service/5.jpeg",
            "/storage/pages/gallery/community_service/6.jpeg",
            "/storage/pages/gallery/community_service/7.jpeg",
            "/storage/pages/gallery/community_service/8.jpeg",
          ],
        },
        {
          album: "Cultural Day",
          date: "Nov. 9, 2021",
          images: [
            "/storage/pages/gallery/cultural_day/1.jpg",
            "/storage/pages/gallery/cultural_day/2.jpg",
            "/storage/pages/gallery/cultural_day/3.jpg",
            "/storage/pages/gallery/cultural_day/4.jpg",
            "/storage/pages/gallery/cultural_day/5.jpg",
            "/storage/pages/gallery/cultural_day/6.jpg",
            "/storage/pages/gallery/cultural_day/7.jpg",
            "/storage/pages/gallery/cultural_day/8.jpg",
            "/storage/pages/gallery/cultural_day/9.jpg",
          ],
        },
      ],
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