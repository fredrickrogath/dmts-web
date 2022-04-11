<template>
  <section class="relative bg-blueGray-50">
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
              <span> Hospital Administrators</span>
              <i class="fas fa-add pt-1 hover:cursor-pointer"></i>
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
          <div v-if="emptyResult == true" class="m-20 text-sm text-gray-500">
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
  </section>
</template>


<script>
import AddForm from "./Forms/AddForm.vue";
import ProfileCard from "./ProfileCard.vue";
export default {
  components: {
    ProfileCard,
    AddForm,
  },
  created() {
    this.testDataFn();
  },
  data() {
    return {
      dummyData: [],
      url: "http://127.0.0.1:8000/super_admin/",
      keyword: null,
      emptyResult: false,
      hideProfile: true,
    };
  },
  watch: {
    keyword() {
      this.searchHospitalAdministrators();
    },
  },
  computed: {},
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
  },
};
</script>