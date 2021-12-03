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
      <div class="s__row">
        <div class="s__col c--5">
          <div class="iilab__event__link" v-for="e in events" :key="e.name">
            <span
              >{{ e.date.split(" ")[0].substr(0, 3) }}
              {{ e.date.split(" ")[1].substr(0, 2) }}</span
            >
            <a role="button" @click="getEventData(e)">{{
              `${e.title.substr(0, 50)} ${e.title.length > 50 ? "..." : ""}`
            }}</a>
          </div>
          <div class="iilab__event__link__more">
            <Link href="/iilab/events">{{ $t("pages.iilab.me") }}</Link>
            <span>&rarr;</span>
          </div>
        </div>
        <div class="s__col c--7">
          <div class="iilab__event__events s__row">
            <div
              class="iilab__event__events s__col c--6"
              v-for="e in events"
              :key="e.name"
            >
              <div class="image">
                <img :src="e.image" alt="event image" srcset="" />
              </div>
              <div class="date">{{ e.date }}</div>
              <a
                ref="javascript:"
                class="link"
                @click="getEventData(e)"
                role="button"
              >
                {{
                  `${e.title.substr(0, 32)} ${e.title.length > 32 ? "..." : ""}`
                }}
              </a>
              <div class="description">
                {{
                  `${e.description.substr(0, 70)} ${
                    e.description.length > 70 ? "..." : "."
                  }`
                }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="iilab__news" id="entrepreneures">
      <h1
        class="iilab__event__title title--primary"
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
              <img :src="show.image" alt="" srcset="" />
            </div>
            <h1 class="title">
              {{
                `${show.title.substr(0, 50)} ${
                  show.title.length > 50 ? "..." : ""
                }`
              }}
            </h1>
            <p class="text">
              {{
                `${show.description.substr(0, 150)} ${
                  show.description.length > 150 ? "..." : "."
                }`
              }}
            </p>
            <div class="link" @click="getShowroomData(show)" role="button">
              <a ref="javascript:">{{ $t("pages.iilab.rm") }}</a>
              <span>&rarr;</span>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="view__more">
        <Link as="button" href="/iilab/entrepreneures">{{
          $t("pages.iilab.va")
        }}</Link>
      </div> -->
    </section>

    <s-modal v-model="eventModal" width="50rem">
      <div class="event-details" v-if="currentEvent">
        <div class="image">
          <img :src="currentEvent.image" alt="event image" srcset="" />
        </div>
        <h1>{{ currentEvent.title }}</h1>

        <p>
          {{ currentEvent.description }}
        </p>
      </div>
    </s-modal>
    <s-modal v-model="showroomModal" width="50rem">
      <div class="event-details" v-if="currentShowroom">
        <div class="image">
          <img :src="currentShowroom.image" alt="event image" srcset="" />
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
      events: [
        {
          title: "In collaboration with E-TAKARA",
          description:
            "In collaboration with E-Takara, the iiLab of A.D.U held an info session yesterday on the A.D.U campus. We were privileged to have previous laureates of the competition such as Latifa Salissou Hassane (via audio recording), Rafiou Ala Roi Fhad (in person) and Idriss Laouali Abdou (via video-recording) share with ADU Young Leaders about the incredible experience their participation in the competition has been for them. The E-Takara team also shared more about the vision behind the competition, as well as the selection criteria, before encouraging A.D.U Young Leaders to apply massively.",
          date: "December 25, 2021",
          image: "/storage/images/event-2.jpg",
        },
        {
          title: "iiLab Open House for the Kagamé cohort",
          description: `As lifelong members of the ilimi community, the iiLab’s support to the Kagamé cohort (which just graduated) will always be available. Nonetheless, for the upcoming months, the iiLab has an exciting and comprehensive entrepreneurship support program in store, just for the Kagamé Cohort, made up of large-group sessions, one-on-one sessions, some funding, and other activities aiming to equip our Kagame Cohort Young Leaders with tools and resources for them to catalyze their growth as entrepreneurs and that of their ideas, regardless of their current advancement level. The Open House allowed the iiLab to give out more details about the program which will be informed by insights from a currently ongoing needs-assessment process.
Note: The iiLab also has exciting plans for the Wangari, Johnson and Jean cohorts, once they return to campus.
`,
          date: "September 14, 2021",
          image: "/storage/images/event-1.jpeg",
        },
      ],
      showrooms: [
        {
          title: "Aichatou Mahamane (Kagame Cohort): CEO of Tallit Design",
          description:
            "Tallit Design is a new company aiming to promote African and mainly Nigerien culture through the making of accessories for men and women and clothing combining modernity and culture. Tallit Design is also in the field of interior design and events, highlighting African cultures, using our various traditional loincloths. To date, Tallit has had to participate in several events and organized its very first fashion show for the launch of its collection named Mahba. Thanks to the success of such a fashion show, Tallit Design had the privilege to dress the hostesses during the opening ceremony of King Abdullah bin Abdulaziz Al Saoud University, organized by the Waqf authority, among other opportunities. Do not hesitate to contact them at 89257766 or via their email address tallitdesign227@gmail.com and follow them on",
          image: "/storage/images/ceo-1.jpg",
          social: [
            "Facebook: tallit design",
            "Instagram: tallitforculture",
            "Twitter: tallit design",
            "LinkedIn: tallit design",
          ],
        },
        {
          title:
            "Mahaman Sani A. Souleymane (Obama Cohort): CEO of Kakaki Multimedia",
          description: `Kakaki is an agency specializing in global business communication. We do all kinds of design, printing on any medium, embroidery, personalized advertising gadgets, business flyers, community management etc. Kakaki is also involved in major communication projects such as branding of buildings, vehicles, illuminated signs, totems, 3D illuminated initials, painting, etc. The very first companies to trust our services are (among others) EBTP Grand Projet (for which we crafted golden initials, and community management), SOPAMIN (for their new website), Le SULTAN (for their totem and community management), Polyclinic Magori (we branding their cars, sewing their blouses, digital embroidery, goodies, etc.), ADU (for kakemonos, photo frames, and others), Nikki Hotel (for their luminous initials), ETS Zaao (for their luminous initials and t-shirts), and Guimbia make-up (for their luminous initials). For all your communication needs, do not hesitate to contact them at 91912329/89417277, or via their email address contactkakaki@gmail.com / souleymanemsani@gmail.com. You can follow them on`,
          image: "/storage/images/ceo-2.jpg",
          social: [
            "Facebook: kakaki multimedia",
            "Instagram: kakakimultimedia",
            "Twitter: kakaki multimedia",
          ],
        },
        {
          title:
            "Abdoul-Rachid Maman Kadade (Kagame Cohort): CEO of Sahel Solar Academy",
          description: `Sahel Solar Academy is a non-profit technical and vocational training institution on the various installation and maintenance techniques of solar power plants as well as underground water pumps powered by PV. It is a center where people will come to learn how to install and maintain PV powered power plants, solar panels and underground water pumps in households, businesses, communities, villages and any particular place it either commercial, industrial, institutional or residential.`,
          image: "/storage/images/ceo-3.jpg",
          social: [],
        },
      ],
      slides: [
        {
          title: "Blossoming flower",
          content:
            "This video is autoplayed, played in loop, has no controls and is not reacting to user interactions.",
          image: `/storage/ADU_picture.png`,
          video: {
            url: "https://www.youtube.com/embed/2d_7v9bda24",
            props: {
              autoplay: true,
              loop: true,
              controls: false,
              muted: true,
            },
          },
        },
        {
          title: "Blossoming flower",
          content:
            "This video is played once, has controls and is reacting to user interactions.",
          image: `/storage/ADU_picture.png`,
          video: {
            url: "https://www.youtube.com/embed/2d_7v9bda24",
          },
          props: { autoplay: true, loop: true, controls: false, muted: true },
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