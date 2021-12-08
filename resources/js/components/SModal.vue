<template>
  <transition name="modal-fade">
    <div class="modal-backdrop" v-show="value">
      <div
        class="modal"
        role="dialog"
        aria-labelledby="modalTitle"
        aria-describedby="modalDescription"
        :style="`${width && `width:${width};`}`"
      >
        <header :class="['modal-header', title && 'title']">
          <h5 class="title">{{ title }}</h5>
          <button type="button" class="btn-close" @click="close">
            <span>&times;</span>
          </button>
        </header>
        <section class="modal-body">
          <slot> </slot>
        </section>
      </div>
    </div>
  </transition>
</template>

<script>
export default {
  name: "SModal",
  props: ["value", "width", "title"],
  created() {
    this.$watch(
      () => this.value,
      (status) => {
        if (status) {
          const scrollY =
            document.documentElement.style.getPropertyValue("--scroll-y");
          document.body.style.position = "fixed";
          document.body.style.top = `-${scrollY}`;
        } else {
          const scrollY = document.body.style.top;
          document.body.style.top = "";
          document.body.style.position = "";
          window.scrollTo(0, parseInt(scrollY || "0") * -1);
        }
      }
    );
    window.addEventListener("scroll", () => {
      document.documentElement.style.setProperty(
        "--scroll-y",
        `${window.scrollY}px`
      );
    });
  },
  methods: {
    close() {
      this.$emit("input", !this.value);
    },
    data() {
      return {};
    },
  },
};
</script>

<style lang="scss" scoped>
.modal-fade-enter,
.modal-fade-leave-to {
  opacity: 0;
}
.modal-fade-enter-active,
.modal-fade-leave-active {
  transition: opacity 0.2s ease-in;
}
</style>