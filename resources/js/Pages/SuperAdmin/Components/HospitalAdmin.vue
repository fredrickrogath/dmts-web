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
              <tr
                class="
                  relative
                  transform
                  scale-100
                  text-xs
                  py-1
                  border-b-2 border-blue-100
                  cursor-default
                  bg-opacity-25
                "
                v-for="test in dummyData"
                :key="test.id"
              >
                <td
                  class="pl-5 pr-3 whitespace-no-wrap hover:cursor-pointer"
                  @mouseover="hideProfile = false"
                  @mouseleave="hideProfile = true"
                >
                  <img
                    class="h-8 w-8 rounded-full object-cover"
                    :src="$page.props.user.profile_photo_url"
                    :alt="$page.props.user.name"
                  />
                  <div class="text-red-500 text-xm pt-2 py-1">OFFLINE</div>
                  <div class="text-gray-900 text-xm">Today</div>
                  <div class="text-gray-900 text-xm">07:45 AM</div>
                </td>

                <td class="px-2 py-2 whitespace-no-wrap">
                  <div v-if="hideProfile">
                    <div class="leading-5 text-gray-900 font-medium px-1">
                      {{ test.name }}
                    </div>
                    <div class="leading-5 text-green-700">
                      <span class="text-gray-900">At</span> Mwimbili
                      <span>Hospital</span>
                    </div>
                    <div class="leading-5 text-gray-900">
                      Manages
                      <a class="px-1 text-green-700 hover:underline" href="#"
                        >78 <span class="text-gray-900">Doc</span></a
                      >
                      <a class="text-green-700 hover:underline" href="#"
                        >308 <span class="text-gray-900">Pat</span></a
                      >
                    </div>
                    <div class="leading-5 text-gray-700">
                      <i class="fa-solid fa-envelope pr-2"></i>
                      <span class="text-green-700 hover:underline" href="#">{{
                        test.email
                      }}</span>
                    </div>

                    <div class="leading-5 text-gray-700">
                      <i
                        class="fa-solid fa-mobile-screen-button fa-lg pr-2"
                      ></i>
                      <span class="text-green-700 hover:underline" href="#"
                        >+255 715 983 180</span
                      >
                    </div>

                    <div class="leading-5 text-gray-700">
                      <i
                        class="fa-solid fa-mobile-screen-button fa-lg pr-2"
                      ></i>
                      <span class="text-green-700 hover:underline" href="#"
                        >+255 685 501 748</span
                      >
                    </div>
                    <div class="grid grid-cols-1 divide-y-2">
                      <div class="leading-5 text-gray-800 pb-1">
                        Dar es Salaam
                      </div>
                      <div class="flex text-gray-700">
                        <i
                          class="
                            fas
                            fa-edit
                            pt-1
                            hover:cursor-pointer hover:text-green-700
                          "
                        ></i>
                        <i
                          class="
                            fas
                            fa-add
                            px-7
                            pt-1
                            hover:cursor-pointer hover:text-green-700
                          "
                        ></i>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="
                            hover:cursor-pointer
                            h-5
                            w-4
                            hover:text-green-700
                          "
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"
                          />
                        </svg>
                        <i
                          class="
                            fas
                            fa-trash
                            pt-1
                            px-7
                            hover:cursor-pointer hover:text-red-700
                          "
                        ></i>
                      </div>
                    </div>
                  </div>

                  <div v-else>
                    <div
                    class="
                      rounded-3xl
                      overflow-hidden
                      shadow-xl
                      max-w-xs
                      bg-blue-500
                    "
                  >
                    <img
                      :src="$page.props.user.profile_photo_url"
                      :alt="$page.props.user.name"
                      class="w-full"
                    />
                    <div class="flex justify-center -mt-8">
                      <img
                        :src="$page.props.user.profile_photo_url"
                        :alt="$page.props.user.name"
                        class="rounded-full border-solid border-white border-2"
                      />
                    </div>
                    <!-- <div class="text-center px-3">
                      <h3 class="text-white text-sm bold font-sans">
                        {{ test.name }}
                      </h3>
                      <p class="font-sans font-light text-white">
                        Hello, i'm from another the other side!
                      </p>
                    </div> -->
                    <!-- <div class="flex justify-center text-white">
                      <div class="text-center mr-3 border-r pr-3">
                        <h2>34</h2>
                        <span>Photos</span>
                      </div>
                      <div class="text-center">
                        <h2>42</h2>
                        <span>Friends</span>
                      </div>
                    </div> -->
                  </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</template>


<script>
export default {
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