<template>
  <section class="relative bg-blueGray-50">
    <div class="w-full h-screen flex justify-center items-center">
      <div class="relative z-0">
        <div class="container mx-auto py-1 flex justify-center h-screen">
          <div class="pl-4 h-full flex flex-col">
            <div
              class="
                text-sm text-white
                font-bold
                px-2
                py-2
                mb-4
                shadow
                border-b border-gray-300
              "
            >
              <div class="grid grid-cols-1 divide-y-2">
                <div class="flex justify-between pb-2">
                  <span> Hospital Patients {{ hospitalAdmins }}</span>
                  <i
                    class="
                      fas
                      fa-add
                      pt-1
                      hover:cursor-pointer hover:text-green-700
                    "
                    @click="toggleAddForm"
                  ></i>
                  <i class="fas fa-sort pt-1 hover:cursor-pointer"></i>
                  <i class="fas fa-expand pt-1 hover:cursor-pointer"></i>
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
                      <i class="fas fa-search text-gray-800"></i>
                    </span>
                    <input
                      type="text"
                      placeholder="Search Hospital Admins"
                      class="
                        px-2
                        py-1
                        text-gray-900
                        relative
                        bg-gray-200
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
                    :avatar="hospitaAdmin.profile_photo_url"
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
            <add-form
              :role="main_role"
              :url="main_url"
              :task="main_add_task"
              @toggle-form-add="toggleAddForm"
              @hospitalAdministrators="hospitalAdministrators"
            ></add-form>
          </div>
          <div
            v-if="showEditForm"
            class="absolute inset-0 z-10 h-70 px-4 pt-12"
          >
            <edit-form
              :role="main_role"
              :url="main_url"
              :task="main_edit_task"
              :id="formEditId"
              :name="formEditName"
              :email="formEditEmail"
              :mobile1="formEditMobile1"
              :mobile2="formEditMobile2"
              :dob="formEditDOB"
              @toggle-form-edit="toggleEditForm"
              @hospitalAdministrators="hospitalAdministrators"
            ></edit-form>
          </div>

          <div
            v-if="showDeleteForm"
            class="absolute inset-0 z-10 h-70 px-8 pt-12"
          >
            <delete-form
              :url="main_url"
              :task="main_delete_task"
              :id="formDeleteId"
              :name="formDeleteName"
              :email="formDeleteEmail"
              :avatar="formDeleteAvatar"
              @toggle-form-edit="toggleFormDelete"
              @hospitalAdministrators="hospitalAdministrators"
            ></delete-form>
          </div>
        </transition-group>
      </div>
    </div>
  </section>
</template>


<script>
// import Multiselect from "vue-multiselect";
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
    // Multiselect,
  },
  created() {
    this.hospitalAdministrators();
  },
  provide() {
    return {
      toggleFormEdit: this.toggleEditForm,
      formEditDetails: this.formEditDetails,

      toggleFormDelete: this.toggleFormDelete,
      formDeleteDetails: this.formDeleteDetails,

      hospitalAdministrators: this.hospitalAdministrators,
    };
  },

  props: { hospitalAdmins: Object },

  data() {
    return {
      dummyData: [],
      main_role: 4,
      main_add_task: "addPatient",
      main_edit_task: "editHospitalAdministrator",
      main_delete_task: "deleteHospitalAdministrator",
      main_url: "http://192.168.43.163:1234/super_admin/",
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

      formDeleteId: "",
      formDeleteAvatar: "",
      formDeleteName: "",
      formDeleteEmail: "",

      //form info

      hospital: "",
      name: "",
      email: "",
      mobile1: "",
      mobile2: "",
      dob: "",
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
        .get(this.main_url + "searchHospitalAdministrators", {
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

    hospitalAdministrators() {
      this.axios
        .get(this.main_url + "hospitalPatients")
        .then((response) => {
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

    formDeleteDetails(id, name, email, avatar) {
      this.formDeleteId = id;
      this.formDeleteName = name;
      this.formDeleteEmail = email;
      this.formDeleteAvatar = avatar;
    },
  },
};
</script>

<style scoped>
/* animate add form */

.add-form-enter-from {
  opacity: 0;
  transform: translateY(-50px);
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
  transform: translateY(-50px);
}
</style>
