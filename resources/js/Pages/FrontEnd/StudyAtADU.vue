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
          Study at A.D.U.
        </h1>
        <ul class="breadcrumb">
          <li><Link href="/">Home</Link></li>
          <li><Link href="/study-at-adu">Study at A.D.U.</Link></li>
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
      <h1
          class="admissions__info__title title--primary"
          data-aos="fade-up"
          data-aos-anchor-placement="bottom-bottom"
          data-aos-duration="1000"
        >
          Become a Young Leader
        </h1>
      <div class="admissions__info__wrapper">
        <div class="admissions__info__cta">
          <h1 class="title">Admissions</h1>
          <p class="text">Our 3-year bachelor programs are both nationally and internationally recognized. Our degree programs are all accredited by Ministry of Higher Education, Research and Innovation, Niger.  Apply to Study with us!</p>
        </div>
        <div class="admissions__info__cards">
        <div
          class="admissions__info__cards__card"
          v-for="admission in admissions"
          :key="admission.title"
        >
          <div class="front">
            <div class="image">
              <img :src="admission.url" alt="law" srcset="" />
            </div>
            <div class="overlay">
              <h1 class="title">{{ admission.title }}</h1>
            </div>
          </div>
          <div class="back">
            <Link href="/study-at-adu">
              <h1 class="title">{{ admission.title }}</h1>
              <p class="text">
                {{ admission.text }}
              </p>
            </Link>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section class="academics__majors">
      <h1
        class="academics__majors__title title--primary"
        data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-anchor-placement="bottom-bottom"
      >
        Business Administration (Featured Majors)
      </h1>
      <div class="academics__majors__program">
        <div class="academics__majors__program__image">
          <img src="/storage/pages/academics/law.jpg" alt="" srcset="" />
        </div>
        <div class="academics__majors__program__text">
          <h3 class="title">Bachelor of Business Law</h3>
          <article class="article">
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              A.D.U. offers a three-year degree in Business Law that teaches
                courses in many different aspects of legal work. Students
                entering this program should have a strong commitment to justice
                and equality and fighting corruption.
            </p>
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              The types of careers that
                graduates can expect are Jurist of Enterprises, Magistrate in
                Public Jurisdictions, Legal Consultant, Notary Public.
            </p>
          </article>
        </div>
      </div>
      <div class="academics__majors__program image--right">
        <div class="academics__majors__program__image image--right--image">
          <img src="/storage/pages/academics/woman.jpg" alt="" srcset="" />
        </div>
        <div class="academics__majors__program__text image--right--text">
          <h3 class="title">Bachelor in Project Management</h3>
          <article class="article">
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
               Project Managers are trained to make certain that complex
                projects go according to schedule. Project management positions
                are essential in construction and civil engineering etc. 
            </p>
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              In keeping with the Ilimi concept, each course is designed and
                taught with a thread of ethical conduct woven through it to
                reinforce the responsibility of graduates to press ethical
                practice in their work-places. Courses also stress a commitment
                to combat social injustice and to make the world a better place
                for the less fortunate.
            </p>
          </article>
        </div>
        
      </div>
      <div class="academics__majors__program">
        <div class="academics__majors__program__image">
          <img src="/storage/pages/academics/accounting.jpg" alt="" srcset="" />
        </div>
        <div class="academics__majors__program__text ">
          <h3 class="title">Bachelor of Accounting</h3>
          <article class="article">
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              A degree in Accounting and Finance will train you to work as a
                financial examiner, or a financial analyst, or a finance manager
                or as a business consultant who helps guide small entrepreneurs.
                It is a very exacting work…it requires a high level of attention
                to detail.
            </p>
           
          </article>
        </div>
      </div>
      <div class="academics__majors__program image--right">
        <div class="academics__majors__program__image image--right--image">
          <img src="/storage/pages/academics/mis.jpg" alt="" srcset="" />
        </div>
        <div class="academics__majors__program__text image--right--text">
          <h3 class="title">Bachelor of Management Information System</h3>
          <article class="article">
            <p
              data-aos="fade-up"
              data-aos-anchor-placement="bottom-bottom"
              data-aos-duration="1500"
            >
              Information Technology is diverse. It will allow you to take
                your profession in several different directions. It is
                practical. You will not only learn the theory but also get the
                opportunity to make things.
            </p>
           
          </article>
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
              class="color-primary"
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
              {{ $t('pages.about.why.p3') }} <v-btn text class="color-primary" @click="showMoreEp = false"
              >{{ $t('pages.about.why.btnLess') }}</v-btn
            >
            </p>
            
          </article>
     </div>
    </section>

    <section class="academics__learn__more">
      <div class="academics__learn__more__wrapper">
        <h1 class="title">Learn More</h1>
        <p class="text">A.D.U. is committed to ensuring high-quality learning experiences that transform students for global citizenship and individual excellence. Prepare for your next step and explore our community resources.</p>
        <div class="links">
          <ul class="links__wrapper">
            <li><Link href="#"> How to Apply</Link></li>
           <li><Link href="#">Undergraduate Prospectus</Link></li>
          </ul><ul class="links__wrapper">
             <li><Link href="#">Tuition & Payments</Link></li>
            <li><Link href="#">English Program Prospectus</Link></li>
          </ul><ul class="links__wrapper">
            <li><Link href="#">Scholarship & Financial Aid</Link></li>
            <li><Link href="#"> Online Applications Manual</Link></li>
          </ul>
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
  name: "StudyAtADU",
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
          url: "/storage/pages/home/programs/project.png",
        },
        {
          title: "MIS",
          text: `The degree in MIS will place you at the center of an exciting field by training you to create and manage new technologies.`,
          url: "/storage/pages/home/programs/mis.png",
        },
      ],
      admissions: [
        {
          title: "Requirements",
          text: `You must have a Baccalaureate certificate; High School Final Exam Grades, Birth Certificate, Certificate of Citizenship, Language test scores and Letters of Recommendation.`,
          url: "/storage/pages/academics/requirement.jpg",
        },
        {
          title: "Apply Online",
          text: `To apply, visit our online application portal to create an account, fill out the application form, upload all required documents, pay the registration fee, and submit your application.`,
          url: "/storage/pages/academics/apply-online.jpg",
        },
        {
          title: "Scholarship",
          text: `A.D.U. offers Scholarship for talented student who are experiencing economic and social hardship so that they will be able to achieve their goals and impact their community.`,
          url: "/storage/pages/academics/scholarship.jpg",
        },
        {
          title: "Contact Admissions Team",
          text: `For additional questions and/or inquiry regarding the status of your application, you can reach us through:\nadmissions@ilimi.edu.ne,\n+227 92 39 68 68 (WhatsApp),\n+227 93 39 68 68 (Mobile)`,
          url: "/storage/pages/academics/contact.jpg",
        },
      ],
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