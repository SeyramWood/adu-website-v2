<template>
  <section class="page">
    <aside class="page__side__nav">
      <ul>
        <li><Link>Apply</Link></li>
        <li><Link>Enquire</Link></li>
        <li><Link>Donate</Link></li>
      </ul>
    </aside>
    <nav
      :class="[
        'navigation',
        getScrollPositon > 150
          ? 'sticky'
          : getScrollPositon <= 29
          ? 'sticky-off'
          : '',
      ]"
      ref="nav"
    >
      <div class="navigation__brand">
        <Link>
          <img src="/storage/logo/logo-1.png" alt="A.D.U. Logo" srcset="" />
        </Link>
      </div>
      <ul class="navigation__links">
        <li class="navigation__links__link lang">
          <ul>
            <li class="active"><Link>EN</Link></li>
            <li>
              <Link>FR</Link>
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
    <header class="banner">
      <section class="banner__brand">
        <Link class="logo">
          <img src="/storage/logo/logo-1.png" alt="" />
        </Link>
      </section>
      <section class="banner__cta">
        <portal-target name="cta"> </portal-target>
        <div class="page__mobile__nav">
          <ul>
            <li><Link>Apply</Link></li>
            <li><Link>Enquire</Link></li>
            <li><Link>Donate</Link></li>
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
          href="instagram.com/africandevelopmentuniversalis"
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
              <a href="tel:+22792396868">(+227) 92-39-68-68</a>/<a
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
              <a href="mailto:admissions@ilimi.edu.ne"
                >admissions@ilimi.edu.ne</a
              >
            </p>
            <p>
              {{ $t("pages.footer.phone") }}:
              <a href="tel:+22792396868">(+227) 92-39-68-68</a>/<a
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
              <a href="mailto:admissions@ilimi.edu.ne"
                >admissions@ilimi.edu.ne</a
              >
            </p>
            <p>
              {{ $t("pages.footer.phone") }}:
              <a href="tel:+22792396868">(+227) 92-39-68-68</a>/<a
                href="tel:+22793396868"
                >(+227) 93-39-68-68</a
              >
            </p>
          </div>
        </div>
      </section>
      <section class="page__footer__copyright">
        <span
          >&copy;{{ new Date().getUTCFullYear() }} A.D.U, All Right
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
          <Link>
            <img src="/storage/logo/logo-1.png" alt="A.D.U. Logo" srcset="" />
          </Link>
        </div>
        <div class="nav__drawer__content__navs">
          <ul class="nav__drawer__content__navs__links">
            <li>
              <Link>{{ $t("pages.navigation.1") }}</Link>
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
              <Link>{{ $t("pages.navigation.2") }}</Link>
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
              <Link>{{ $t("pages.navigation.3") }}</Link>
              <div class="dropdown">
                <h1 class="dropdown__title">
                  {{ $t("pages.navigation.3") }}
                </h1>
                <ul class="dropdown__links">
                  <li>
                    <Link>{{ $t("pages.academics.link.1") }}</Link>
                  </li>
                  <li>
                    <Link>{{ $t("pages.academics.link.2") }}</Link>
                  </li>
                  <li>
                    <Link>{{ $t("pages.academics.link.3") }}</Link>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <Link>{{ $t("pages.navigation.10") }}</Link>
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
              <Link>{{ $t("pages.navigation.7") }}</Link>
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
            <li>
              <a
                href=" https://myilimilms.net/moodle"
                target="_blank"
                rel="noopener noreferrer"
                >{{ $t("pages.navigation.8") }}</a
              >
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div :class="['page__loader', pageLoader && 'active']">
      <img src="/storage/loader.svg" alt="" srcset="" />
    </div>
  </section>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import { Inertia } from "@inertiajs/inertia";
export default {
  name: "WebsiteLayout",
  components: {
    Link,
  },
  computed: {
    getScrollPositon() {
      return this.scrollPosition;
    },
  },
  created() {
    if (this.route().current("home")) {
      this.bannerImage = this.bannerImages.home;
      console.log("home");
    } else {
      console.log("elsse");
    }
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
      bannerImage: "/storage/banner/home.jpg",
      bannerImages: {
        home: "/storage/banner/home.jpg",
      },
    };
  },
};
</script>

<style lang="scss" scoped>
</style>