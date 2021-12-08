<template>
  <section class="page">
    <aside class="page__side__nav">
      <ul>
        <li>
          <a
            href="http://applications.eduappgh.com/"
            target="_blank"
            rel="noopener noreferrer"
            >{{ $t("pages.navigation.5") }}</a
          >
        </li>
        <li>
          <a href="javascript:" @click="enquireModal = true">{{
            $t("pages.navigation.6")
          }}</a>
        </li>
        <li>
          <Link>{{ $t("pages.navigation.7") }}</Link>
        </li>
      </ul>
    </aside>
    <nav
      :class="[
        'navigation',
        getScrollPositon > 5
          ? 'sticky'
          : getScrollPositon <= 5
          ? 'sticky-off'
          : '',
      ]"
      ref="nav"
    >
      <div class="navigation__brand">
        <Link href="/">
          <img src="/storage/logo/logo-1.png" alt="A.D.U. Logo" srcset="" />
        </Link>
      </div>
      <ul class="navigation__links">
        <li
          :class="[
            'navigation__links__link',
            route().current('about') && 'active',
          ]"
        >
          <Link href="/about">{{ $t("pages.navigation.1") }}</Link>
        </li>
        <li
          :class="[
            'navigation__links__link',
            route().current('studyAtADU') && 'active',
          ]"
        >
          <Link href="/study-at-adu">{{ $t("pages.navigation.2") }}</Link>
        </li>
        <li
          :class="[
            'navigation__links__link',
            route().current('iilab') && 'active',
          ]"
        >
          <Link href="/iilab">{{ $t("pages.navigation.3") }}</Link>
        </li>
        <li
          :class="[
            'navigation__links__link',
            route().current('studentLife') && 'active',
          ]"
        >
          <Link href="/student-life">{{ $t("pages.navigation.4") }}</Link>
        </li>
        <li class="navigation__links__link lang">
          <ul>
            <li :class="[getLocale === 'en' && 'active']">
              <a role="button" @click="changeLocale('en')">EN</a>
            </li>
            <li :class="[getLocale === 'fr' && 'active']">
              <a role="button" @click="changeLocale('fr')">FR</a>
            </li>
          </ul>
        </li>
        <li class="navigation__links__link">
          <div class="menu__icon" role="button" @click="toggleNav = !toggleNav">
            <span :class="['menu', toggleNav && 'active']"></span>
          </div>
        </li>
      </ul>
    </nav>
    <header :class="[`banner`, getBannerPageClass]" ref="banner">
      <section class="banner__brand">
        <Link href="/" class="logo">
          <img src="/storage/logo/logo-1.png" alt="" />
        </Link>
      </section>
      <section class="banner__cta" ref="banner">
        <portal-target name="cta"> </portal-target>
        <div class="page__mobile__nav">
          <ul>
            <li>
              <a
                href="http://applications.eduappgh.com/"
                target="_blank"
                rel="noopener noreferrer"
                >{{ $t("pages.navigation.5") }}</a
              >
            </li>
            <li>
              <a href="javascript:" @click="enquireModal = true">{{
                $t("pages.navigation.6")
              }}</a>
            </li>
            <li>
              <Link>{{ $t("pages.navigation.7") }}</Link>
            </li>
          </ul>
        </div>
      </section>
    </header>
    <main class="main"><slot /></main>
    <section class="page__footer__social">
      <div class="page__footer__social__line"></div>
      <div
        class="page__footer__social__icons"
        data-aos="zoom-in"
        data-aos-anchor-placement="bottom-bottom"
        data-aos-duration="1000"
      >
        <a
          href="https://www.facebook.com/pg/aduniversalis/about/"
          target="_blank"
          rel="noopener noreferrer"
          ><v-icon>mdi-facebook</v-icon></a
        >
        <a
          href="https://twitter.com/ADULeads?s=20"
          target="_blank"
          rel="noopener noreferrer"
          ><v-icon>mdi-twitter</v-icon></a
        >
        <a
          href="https://instagram.com/africandevelopmentuniversalis"
          target="_blank"
          rel="noopener noreferrer"
          ><v-icon>mdi-instagram</v-icon></a
        >
        <a
          href="https://www.linkedin.com/school/african-development-university"
          target="_blank"
          rel="noopener noreferrer"
          ><v-icon>mdi-linkedin</v-icon></a
        >
      </div>
      <div class="page__footer__social__line"></div>
    </section>
    <footer class="page__footer">
      <section class="page__footer__bottom">
        <div class="page__footer__bottom__brand">
          <div class="logo">
            <img src="/storage/logo/logo-1.png" alt="A.D.U LOGO" srcset="" />
          </div>
        </div>
        <div class="page__footer__bottom__links">
          <h3 class="title">{{ $t("pages.footer.ba") }}</h3>
          <div class="address">
            <p>
              {{ $t("pages.footer.email") }}:
              <a href="mailto:admissions@ilimi.edu.ne"
                >admissions@ilimi.edu.ne</a
              >
            </p>
            <p>
              {{ $t("pages.footer.phone") }}:
              <a href="tel:+22792396868">(+227) 92-39-68-68</a> <br /><a
                href="tel:+22793396868"
                >(+227) 93-39-68-68</a
              >
            </p>
          </div>
        </div>
        <div class="page__footer__bottom__links">
          <h3 class="title">{{ $t("pages.footer.ai") }}</h3>
          <div class="address">
            <p>
              {{ $t("pages.footer.email") }}:
              <a href="mailto:ai@ilimi.edu.ne">ai@ilimi.edu.ne</a>
            </p>
            <p>
              {{ $t("pages.footer.phone") }}:
              <a href="tel:+22792396868">(+227) 92-39-68-68</a><br /><a
                href="tel:+22793396868"
                >(+227) 93-39-68-68</a
              >
            </p>
          </div>
        </div>
        <div class="page__footer__bottom__links">
          <h3 class="title">{{ $t("pages.footer.ep") }}</h3>
          <div class="address">
            <p>
              {{ $t("pages.footer.email") }}:
              <a href="mailto:english@ilimi.edu.ne">english@ilimi.edu.ne</a>
            </p>
            <p>
              {{ $t("pages.footer.phone") }}:
              <a href="tel:+22792396868">(+227) 92-39-68-68</a><br /><a
                href="tel:+22793396868"
                >(+227) 93-39-68-68</a
              >
            </p>
          </div>
        </div>
      </section>
      <section class="page__footer__copyright">
        <span
          >&copy;{{ new Date().getUTCFullYear() }} A.D.U. - All Rights
          Reserved</span
        >
        <!-- {{ $t("attribute-name") }} -->
      </section>
    </footer>

    <div
      :class="['nav__drawer', toggleNav && 'active']"
      @click="toggleNav = !toggleNav"
    >
      <div :class="['nav__drawer__content', toggleNav && 'active']">
        <div class="nav__drawer__content__brand">
          <Link href="/">
            <img src="/storage/logo/logo-1.png" alt="A.D.U. Logo" srcset="" />
          </Link>
        </div>
        <div class="nav__drawer__content__navs">
          <ul class="nav__drawer__content__navs__links">
            <li>
              <Link href="/about">{{ $t("pages.navigation.1") }}</Link>
              <div class="dropdown">
                <h1 class="dropdown__title">
                  {{ $t("pages.navigation.1") }}
                </h1>
                <ul class="dropdown__links">
                  <li>
                    <Link>{{ $t("pages.about.title.2") }}</Link>
                  </li>
                  <li>
                    <Link>{{ $t("pages.about.title.3") }}</Link>
                  </li>
                  <li>
                    <Link>{{ $t("pages.about.title.4") }}</Link>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <Link href="/study-at-adu">{{ $t("pages.navigation.2") }}</Link>
              <div class="dropdown">
                <h1 class="dropdown__title">
                  {{ $t("pages.navigation.2") }}
                </h1>
                <ul class="dropdown__links">
                  <li>
                    <Link>{{ $t("pages.admission.title.2") }}</Link>
                  </li>
                  <li>
                    <Link>{{ $t("pages.admission.title.3") }}</Link>
                  </li>
                  <li>
                    <Link>{{ $t("pages.admission.title.4") }}</Link>
                  </li>
                  <li>
                    <Link>{{ $t("pages.admission.title.5") }}</Link>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <Link href="/iilab">{{ $t("pages.navigation.3") }}</Link>
              <div class="dropdown">
                <h1 class="dropdown__title">
                  {{ $t("pages.navigation.10") }}
                </h1>
                <ul class="dropdown__links">
                  <li>
                    <Link>{{ $t("pages.iilab.link.1") }}</Link>
                  </li>
                  <li>
                    <Link>{{ $t("pages.iilab.link.2") }}</Link>
                  </li>
                  <li>
                    <Link>{{ $t("pages.iilab.link.3") }}</Link>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <Link href="/student-life">{{ $t("pages.navigation.4") }}</Link>
              <div class="dropdown">
                <h1 class="dropdown__title">
                  {{ $t("pages.navigation.7") }}
                </h1>
                <ul class="dropdown__links">
                  <li>
                    <Link>{{ $t("pages.studentLife.link.1") }}</Link>
                  </li>
                  <li>
                    <Link>{{ $t("pages.studentLife.link.2") }}</Link>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div :class="['page__loader', pageLoader && 'active']">
      <img src="/storage/loader.svg" alt="" srcset="" />
    </div>

    <s-modal
      title="Make your enquiries"
      v-model="enquireModal"
      :width="`${getScreen ? '35rem' : '50rem'}`"
    >
      <form class="enquire__form">
        <div class="form__group">
          <input
            type="text"
            id="fullname"
            placeholder="Your fullname"
            aria-label="fullname"
            autoComplete="true"
          />
          <label class="input__label">Your full name</label>
        </div>
        <div class="s__row">
          <div class="s__col c--6">
            <div class="form__group">
              <input
                type="email"
                id="email"
                placeholder="Your email"
                aria-label="email"
                autoComplete="true"
              />
              <label class="input__label">Your email</label>
            </div>
          </div>
          <div class="s__col c--6">
            <div class="form__group">
              <input
                type="tel"
                id="phone"
                placeholder="Your phone"
                aria-label="phone"
                autoComplete="true"
              />
              <label class="input__label">Your phone</label>
            </div>
          </div>
        </div>
        <div class="form__group">
          <textarea
            id="Message"
            placeholder="Your Message"
            aria-label="Message"
            autoComplete="true"
          ></textarea>
          <label class="input__label">Your Message</label>
          <!-- <label class="error-messages" v-if="numberErrors.message">{{
            numberErrors.message
          }}</label> -->
          <!-- <label class="input__label" v-else>Message</label> -->
        </div>
        <div class="button">
          <button type="submit" class="">Submit</button>
        </div>
      </form>
    </s-modal>
  </section>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import { Inertia } from "@inertiajs/inertia";
import SModal from "../components/SModal";
export default {
  name: "WebsiteLayout",
  components: {
    Link,
    SModal,
  },
  computed: {
    getScrollPositon() {
      return this.scrollPosition;
    },
    getBannerPageClass() {
      return this.bannerPageClass;
    },
    getLocale() {
      return this.locale;
    },
  },
  created() {
    this.$inertia.on("navigate", (event) => {
      switch (event.detail.page.url) {
        case "/about":
          this.bannerPageClass = "banner--secondary about";
          break;
        case "/study-at-adu":
          this.bannerPageClass = "banner--secondary study-at-adu";
          break;
        case "/academics":
          this.bannerPageClass = "banner--secondary academics";
          break;
        case "/iilab":
          this.bannerPageClass = "banner--secondary iilab";
          break;
        case "/student-life":
          this.bannerPageClass = "banner--secondary student-life";
          break;
        default:
          this.bannerPageClass = "";
          break;
      }
    });
  },
  beforeMount() {
    this.setLocale();
  },

  mounted() {
    window.addEventListener("scroll", () => {
      this.scrollPosition = window.scrollY;
    });
    this.pageLoader = true;
    this.$nextTick(() => {
      setTimeout(() => {
        this.pageLoader = false;
      }, 1500);
    });
  },
  data() {
    return {
      stickyClass: "",
      scrollPosition: 0,
      toggleNav: false,
      pageLoader: false,
      bannerPageClass: "",
      locale: "",
      enquireModal: false,
    };
  },

  methods: {
    changeLocale(locale) {
      Inertia.visit(`/locale/${locale}`, {
        preserveScroll: true,
        onSuccess: (page) => {
          this.locale = locale;
          const now = new Date();
          now.setDate(now.getDate() + 7);
          document.cookie = `locale=${locale}; expires=${now.toUTCString()}; SameSite=Lax; Secure`;
          this.$lang.setLocale(locale);
        },
      });
    },

    setLocale() {
      if (
        document.cookie
          .split(";")
          .some((item) => item.trim().startsWith("locale="))
      ) {
        const lang = document.cookie
          .split(";")
          .find((item) => item.startsWith("locale="))
          .split("=")[1];
        this.$lang.setLocale(lang);
        this.locale = lang;
      } else {
        this.$lang.setLocale(navigator.language.split("-")[0]);
        this.locale = navigator.language.split("-")[0];
      }
    },
  },
};
</script>

<style lang="scss" scoped>
</style>