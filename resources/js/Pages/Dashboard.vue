<template>
  <section class="dashboard">
    <!-- <section class="dashboard__top">
      <div class="s__row">
        <div class="s__col c--3">
          <div class="dashboard__card__top">
            <div class="dashboard__card__top__left">
              <div class="dashboard__card__top__left__icon icon--info">
                <v-icon>mdi-finance</v-icon>
              </div>
              <div class="dashboard__card__top__left__content">
                <p>Total OKRs</p>
                <p>34</p>
              </div>
            </div>
            <div class="dashboard__card__top__right text--danger">
              <p>-25%</p>
            </div>
          </div>
        </div>
        <div class="s__col c--3">
          <div class="dashboard__card__top">
            <div class="dashboard__card__top__left">
              <div class="dashboard__card__top__left__icon icon--warnning">
                <v-icon>mdi-finance</v-icon>
              </div>
              <div class="dashboard__card__top__left__content">
                <p>Total OKRs</p>
                <p>34</p>
              </div>
            </div>
            <div class="dashboard__card__top__right text--success">
              <p>+20%</p>
            </div>
          </div>
        </div>
        <div class="s__col c--3">
          <div class="dashboard__card__top">
            <div class="dashboard__card__top__left">
              <div class="dashboard__card__top__left__icon icon--danger">
                <v-icon>mdi-finance</v-icon>
              </div>
              <div class="dashboard__card__top__left__content">
                <p>Total OKRs</p>
                <p>34</p>
              </div>
            </div>
            <div class="dashboard__card__top__right text--warnning">
              <p>-10%</p>
            </div>
          </div>
        </div>
        <div class="s__col c--3">
          <div class="dashboard__card__top">
            <div class="dashboard__card__top__left">
              <div class="dashboard__card__top__left__icon icon--success">
                <v-icon>mdi-finance</v-icon>
              </div>
              <div class="dashboard__card__top__left__content">
                <p>Total OKRs</p>
                <p>34</p>
              </div>
            </div>
            <div class="dashboard__card__top__right text--info">
              <p>-75%</p>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="content__wrapper">
      <v-data-table
        :headers="headers"
        :items="desserts"
        sort-by="calories"
        class="elevation-1"
        show-select
        v-model="selectedMessages"
      >
        <template v-slot:top>
          <v-toolbar flat>
            <v-toolbar-title>
              <h3 class="color-primary">Enquiries</h3>
            </v-toolbar-title>

            <v-dialog v-model="dialogDelete" max-width="500px">
              <v-card>
                <v-card-title class="text-h5"
                  >Are you sure you want to delete this item?</v-card-title
                >
                <v-card-actions>
                  <v-spacer></v-spacer>
                  <v-btn color="blue darken-1" text @click="closeDelete"
                    >Cancel</v-btn
                  >
                  <v-btn color="blue darken-1" text @click="deleteItemConfirm"
                    >OK</v-btn
                  >
                  <v-spacer></v-spacer>
                </v-card-actions>
              </v-card>
            </v-dialog>

            <v-dialog v-model="replyDialog" width="650px">
              <v-card>
                <form>
                  <v-card-title class="text-h5">Reply Message</v-card-title>

                  <v-card-text>
                    <v-container>
                      <v-text-field label="Email" outlined></v-text-field>
                      <v-textarea
                        outlined
                        label="Message"
                        placeholder="Type message here..."
                      ></v-textarea>
                    </v-container>
                  </v-card-text>

                  <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn
                      color="dark darken-1"
                      text
                      @click="closeAssignTeamDialog()"
                    >
                      Cancel
                    </v-btn>
                    <v-btn color="info darken-1" text type="submit">
                      Send
                    </v-btn>
                  </v-card-actions>
                </form>
              </v-card>
            </v-dialog>
          </v-toolbar>

          <v-menu
            bottom
            origin="center center"
            transition="scale-transition"
            :disabled="isSelectedMessages"
          >
            <template v-slot:activator="{ on, attrs }">
              <v-btn
                color="info"
                dark
                v-bind="attrs"
                v-on="on"
                class="ml-4 mb-4"
              >
                More Actions
                <v-icon>mdi-chevron-down</v-icon>
              </v-btn>
            </template>
            <v-list>
              <v-list-item dense role="button">
                <v-list-item-title>
                  <v-icon color="info" small>mdi-reply</v-icon>
                  <span>Reply</span>
                </v-list-item-title>
              </v-list-item>
              <v-list-item dense role="button">
                <v-list-item-title>
                  <v-icon color="red" small>mdi-delete</v-icon>
                  <span>Reply</span>
                </v-list-item-title>
              </v-list-item>
            </v-list>
          </v-menu>
        </template>
        <template v-slot:item.message="{ item }">
          <article style="padding: 1rem 0">
            {{ item.message }}
          </article>
        </template>
        <template v-slot:item.actions="{ item }">
          <v-icon
            color="info"
            small
            class="mr-2"
            @click="openReplyDialog(item)"
          >
            mdi-reply
          </v-icon>
          <v-icon color="red" small @click="deleteMessage(item)">
            mdi-delete
          </v-icon>
        </template>
        <template v-slot:no-data>
          <v-btn color="primary" @click="initialize"> Reset </v-btn>
        </template>
      </v-data-table>
    </section>
  </section>
</template>

<script>
import Layout from "../components/Layout";
import SAccordians from "../components/accordian/sAccordians";
import SAccordian from "../components/accordian/sAccordian";

export default {
  name: "Dashboard",
  components: { SAccordians, SAccordian },
  layout: Layout,
  computed: {
    isSelectedMessages() {
      if (selectedMessages && selectedMessages.length) {
        return true;
      }
      return false;
    },
  },
  data: () => ({
    dialog: false,
    dialogDelete: false,
    replyDialog: false,

    headers: [
      {
        text: "Name",
        align: "start",
        value: "name",
      },
      { text: "Email", value: "email" },
      { text: "Phone", value: "phone" },
      { text: "Message", value: "message" },
      { text: "Actions", value: "actions", sortable: false },
    ],
    desserts: [],
    editedIndex: -1,
    editedItem: {
      name: "",
      calories: 0,
      fat: 0,
      carbs: 0,
      protein: 0,
    },
    defaultItem: {
      name: "",
      calories: 0,
      fat: 0,
      carbs: 0,
      protein: 0,
    },

    currentMessge: null,
    selectedMessages: [],
  }),

  computed: {
    formTitle() {
      return this.editedIndex === -1 ? "New Item" : "Edit Item";
    },
  },

  watch: {
    dialog(val) {
      val || this.close();
    },
    dialogDelete(val) {
      val || this.closeDelete();
    },
  },

  created() {
    this.initialize();
  },

  methods: {
    initialize() {
      this.desserts = [
        {
          name: "Frozen Yogurt",
          email: "prikahaeyram@gmail.com",
          phone: "+233265518694",
          message:
            "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut saepe quas facilis iusto neque placeat vel aut odio! Sed eaque repudiandae ratione quo eum deleniti voluptates aperiam fugit debitis adipisci.",
        },
        {
          name: "Ice cream sandwich",
          email: "prikahaeyram@gmail.com",
          phone: "+233265518694",
          message: 37,
        },
      ];
    },

    openReplyDialog(message) {
      this.currentMessge = message;
      this.$nextTick(() => {
        this.replyDialog = true;
      });
    },
    replyMessage(email) {
      this.isSubmitting = true;
      this.setNomineeFormErrors();
      this.$inertia.post(`/dashboard/add-nominee`, this.nominee, {
        errorBag: "addNominee",
        preserveScroll: true,
        onSuccess: (page) => {
          this.clearNomineeForm();
          this.isSubmitting = false;
          this.snackbar("Nominee added successfully!");
        },
        onError: (err) => {
          this.isSubmitting = false;
          this.setNomineeFormErrors(err);
        },
      });
    },
    replyMessages() {
      this.isSubmitting = true;
      this.setNomineeFormErrors();
      this.$inertia.post(`/dashboard/add-nominee`, this.nominee, {
        errorBag: "addNominee",
        preserveScroll: true,
        onSuccess: (page) => {
          this.clearNomineeForm();
          this.isSubmitting = false;
          this.snackbar("Nominee added successfully!");
        },
        onError: (err) => {
          this.isSubmitting = false;
          this.setNomineeFormErrors(err);
        },
      });
    },

    deleteConfirm() {
      if (this.deleteType === "single") this.deleteNomineeConfirm();
      if (this.deleteType === "multiple") this.deleteNomineesConfirm();
      this.$nextTick(() => (this.deleteType = ""));
    },
    deleteNomineeConfirm() {
      this.closeDelete();
      this.$inertia.delete(`/dashboard/delete-nominee/${this.nomineeId}`, {
        preserveScroll: true,
        onSuccess: (page) => {
          this.snackbar("Nominee deleted successfully!");
        },
        onError: (err) => {
          this.snackbar("Ooops! Something went wrong");
        },
      });
    },
    deleteNomineesConfirm() {
      this.closeDelete();
      const ids = this.selected.map((c) => c.id);
      this.$inertia.delete(`/dashboard/delete-nominees/${ids}`, {
        preserveScroll: true,
        onSuccess: (page) => {
          this.selected = [];
          this.snackbar("Nominees deleted successfully!");
        },
        onError: (err) => {
          this.snackbar("Ooops! Something went wrong");
        },
      });
    },

    editItem(item) {
      this.editedIndex = this.desserts.indexOf(item);
      this.editedItem = Object.assign({}, item);
      this.dialog = true;
    },

    deleteItem(item) {
      this.editedIndex = this.desserts.indexOf(item);
      this.editedItem = Object.assign({}, item);
      this.dialogDelete = true;
    },

    deleteItemConfirm() {
      this.desserts.splice(this.editedIndex, 1);
      this.closeDelete();
    },

    close() {
      this.dialog = false;
      this.$nextTick(() => {
        this.editedItem = Object.assign({}, this.defaultItem);
        this.editedIndex = -1;
      });
    },

    closeDelete() {
      this.dialogDelete = false;
      this.$nextTick(() => {
        this.editedItem = Object.assign({}, this.defaultItem);
        this.editedIndex = -1;
      });
    },

    save() {
      if (this.editedIndex > -1) {
        Object.assign(this.desserts[this.editedIndex], this.editedItem);
      } else {
        this.desserts.push(this.editedItem);
      }
      this.close();
    },
  },
};
</script>

<style lang="scss" scoped>
</style>