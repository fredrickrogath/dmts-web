<template>
  <section class="relative bg-blueGray-50">
    <div class="w-full h-screen flex justify-center items-center">
      <div class="relative z-0">
        <div class="container mx-auto py-1 flex justify-center h-screen">
          <div class="pl-4 h-full flex flex-col">
            <div
              class="
                text-sm text-gray-500
                font-bold
                px-5
                py-2
                shadow
                border-b border-gray-300
              "
            >
              <div class="grid grid-cols-1 divide-y-2">
                <div class="flex justify-between pb-2">
                  <span> Hospitals Details </span>
                  <div class="flex justify-end">
                    <i
                      class="
                        fas
                        fa-add
                        pt-1
                        hover:cursor-pointer hover:text-green-700
                      "
                      @click="toggleAddForm"
                    ></i>
                    <i class="fas fa-sort pt-1 px-4 hover:cursor-pointer"></i>
                    <i class="fas fa-expand pt-1 hover:cursor-pointer"></i>
                  </div>
                </div>
                <div class="flex justify-between py-2">
                  <div class="relative flex w-full flex-wrap items-stretch">
                    <span
                      class="
                        z-10
                        h-full
                        leading-snug
                        font-normal
                        absolute
                        text-center text-slate-300
                        absolute
                        bg-transparent
                        rounded
                        text-base
                        items-center
                        justify-center
                        w-8
                        pl-3
                        py-1
                      "
                    >
                      <i class="fas fa-search"></i>
                    </span>
                    <input
                      type="text"
                      placeholder="Placeholder"
                      class="
                        px-2
                        py-1
                        placeholder-slate-300
                        text-slate-600
                        relative
                        bg-white
                        rounded
                        text-sm
                        outline-0 outline-gray-600
                        focus:ring-0
                        border border-slate-300
                        w-full
                        pl-10
                      "
                      v-model="keyword"
                    />
                  </div>
                </div>
              </div>
            </div>

            <div class="w-full h-full overflow-auto shadow" id="journal-scroll">
              <div
                v-if="emptyResult == true"
                class="m-20 text-sm text-gray-500"
              >
                Nothing found !
              </div>

              <table class="w-full">
                <tbody class="">
                  <profile-card
                    v-for="hospitaAdmin in dummyData"
                    :key="hospitaAdmin.id"
                    :id="hospitaAdmin.id"
                    :name="hospitaAdmin.name"
                    :email="hospitaAdmin.email"
                  ></profile-card>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <transition-group name="add-form">
          <div v-if="showAddForm" class="absolute inset-0 z-10 h-70 px-4 pt-12">
            <add-form @toggle-form-add="toggleAddForm"></add-form>
          </div>
          <div
            v-if="showEditForm"
            class="absolute inset-0 z-10 h-70 px-4 pt-12"
          >
            <edit-form
              :id="formEditId"
              :name="formEditName"
              :email="formEditEmail"
              :mobile1="formEditMobile1"
              :mobile2="formEditMobile2"
              :dob="formEditDOB"
              @toggle-form-edit="toggleEditForm"
            ></edit-form>
          </div>

          <div
            v-if="showDeleteForm"
            class="absolute inset-0 z-10 h-70 px-8 pt-12"
          >
            <delete-form
              :id="formDeleteId"
              :name="formDeleteName"
              :email="formDeleteEmail"
              @toggle-form-edit="toggleEditForm"
            ></delete-form>
          </div>
        </transition-group>
      </div>
    </div>
  </section>
</template>


<script>
import AddForm from "../Forms/AddForm.vue";
import EditForm from "../Forms/EditForm.vue";
import DeleteForm from "../Forms/DeleteForm.vue";
import ProfileCard from "../ProfileCard.vue";
export default {
  components: {
    ProfileCard,
    AddForm,
    EditForm,
    DeleteForm,
  },
  created() {
    this.testDataFn();
  },
  provide() {
    return {
      toggleFormEdit: this.toggleEditForm,
      formEditDetails: this.formEditDetails,

      toggleFormDelete: this.toggleFormDelete,
      formDeleteDetails: this.formDeleteDetails,
    };
  },
  data() {
    return {
      dummyData: [],
      url: "http://127.0.0.1:8000/super_admin/",
      keyword: null,
      emptyResult: false,
      hideProfile: true,
      showAddForm: false,
      showEditForm: false,
      showDeleteForm: false,

      // provided data for for edit

      formEditId: null,
      formEditName: "",
      formEditEmail: "",
      formEditMobile1: "",
      formEditMobile2: "",
      formEditDOB: null,

      // provided data for delete form

      formDeleteId: null,
      formDeleteName: "",
      formDeleteEmail: "",
    };
  },
  watch: {
    keyword() {
      this.searchHospitalAdministrators();
    },
  },
  computed: {
    closeAllModals() {
      this.showAddForm = false;
    },
  },
  methods: {
    searchHospitalAdministrators() {
      axios
        .get(this.url + "searchHospitalAdministrators", {
          params: { keyword: this.keyword },
        })
        .then((res) => {
          this.dummyData = res.data;
          if (res.data.length == 0) {
            this.emptyResult = true;
          } else {
            this.emptyResult = false;
          }
        })
        .catch((error) => {});
    },

    testDataFn() {
      this.axios.get("http://127.0.0.1:8000/test").then((response) => {
        this.dummyData = response.data;
      });
    },

    toggleProfile() {
      this.hideProfile = !this.hideProfile;
    },

    toggleAddForm() {
      this.showAddForm = !this.showAddForm;
    },

    toggleEditForm() {
      this.showEditForm = !this.showEditForm;
    },

    toggleFormDelete() {
      this.showDeleteForm = !this.showDeleteForm;
    },

    formEditDetails(id, name, email, mobile1, mobile2, dob) {
      this.formEditId = id;
      this.formEditName = name;
      this.formEditEmail = email;
      this.formEditMobile1 = mobile1;
      this.formEditMobile2 = mobile2;
      this.formEditDOB = dob;
    },

    formDeleteDetails(id, name, email) {
      this.formDeleteId = id;
      this.formDeleteName = name;
      this.formDeleteEmail = email;
    },
  },
};
</script>

<style scoped>
/* animate add form */

.add-form-enter-from {
  opacity: 0;
  transform: translateY(-80px);
}

.add-form-enter-active {
  transition: all 0.4s ease-out;
}

.add-form-enter-to {
  opacity: 1;
  transform: translateY(0);
}

.add-form-leave-from {
  opacity: 1;
  transform: translateY(0);
}

.add-form-leave-active {
  transition: all 0.4s ease-in;
}

.add-form-leave-to {
  opacity: 0;
  transform: translateY(-80px);
}
</style>
