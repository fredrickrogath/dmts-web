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
              <!-- <span> Hospital Administrators</span>
                          <i
                            class="fas fa-expand pt-1 hover:cursor-pointer"
                          ></i> -->
              <!-- <div
                            class="
                              border
                              mx-auto
                              border-[2px]
                              w-10/12
                              justify-center
                              flex
                              items-center
                              rounded-md
                            "
                          >
                            <div class="w-full">

                              
                              
                              <input
                                type="search"
                                x-model="input3"
                                class="
                                  w-full
                                  h-6
                                  px-4
                                  py-1
                                  rounded-r-md
                                  border border-gray-200
                                  text-sm
                                  text-gray-800
                                  focus:outline-none
                                "
                                placeholder="Search..."
                              /> -->
              <!-- </div>
                          </div> -->

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
                />
              </div>
            </div>
          </div>
        </div>

        <div class="w-full h-full overflow-auto shadow" id="journal-scroll">
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
                <td class="pl-5 pr-3 whitespace-no-wrap">
                  <img
                    class="h-8 w-8 rounded-full object-cover"
                    :src="$page.props.user.profile_photo_url"
                    :alt="$page.props.user.name"
                  />
                  <div class="text-red-500 pt-2 py-1">Offline</div>
                  <div class="text-gray-700">Today</div>
                  <div>07:45</div>
                </td>

                <td class="px-2 py-2 whitespace-no-wrap">
                  <div class="leading-5 text-gray-500 font-medium">
                    {{ test.name }}
                  </div>
                  <div class="leading-5 text-gray-500">
                    <span>At</span> Mwimbili <span>Hospital</span>
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
                    <i class="fa-solid fa-mobile-screen-button fa-lg pr-2"></i>
                    <span class="text-green-700 hover:underline" href="#"
                      >+255 715 983 180</span
                    >
                  </div>

                  <div class="leading-5 text-gray-700">
                    <!-- <i
                                    class="
                                      fas
                                      fa-mobile
                                      pt-1
                                      hover:cursor-pointer
                                      hover:text-green-700
                                    "
                                  ></i> -->
                    <i class="fa-solid fa-mobile-screen-button fa-lg pr-2"></i>
                    <span class="text-green-700 hover:underline" href="#"
                      >+255 685 501 748</span
                    >
                  </div>
                  <!-- <div class="leading-5 text-green-700">
                                +255 715 983 180
                              </div>
                              <div class="leading-5 text-green-700">
                                +255 685 501 748
                              </div> -->
                  <div class="grid grid-cols-1 divide-y-2">
                    <div class="leading-5 text-gray-800 pb-1">
                      Dar es Salaam
                    </div>
                    <div class="flex justify-between px-4 text-gray-700">
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
                          hover:cursor-pointer hover:text-red-700
                        "
                      ></i>
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
      url: "http://127.0.0.1:8000/test?page=",
      currentPage: 1,
    };
  },
  methods: {
    // testDataFn(data) {
    //   //         fetch('http://127.0.0.1:8000/test')
    //   // .then(res => res.json())
    //   // .then(json => {this.testData = json;console.log(this.testData)})

    //   // POST request using fetch with error handling
    //   const requestOptions = {
    //     method: "GET",
    //     headers: {
    //       "Content-Type": "application/json",
    //       // Authorization: "Bearer 1|H1OrjYLqsPL92YYs9FNjsB311IL9riHIzx0gzL9y",
    //     },
    //     // body: JSON.stringify({ title: 'Vue POST Request Example' })
    //   };

    //   fetch(this.url + page, requestOptions)
    //     .then(async (response) => {
    //       const data = await response.json();
    //       this.dummyData = data;
    //       // console.log(this.dummyData);

    //       // check for error response
    //       if (!response.ok) {
    //         // get error message from body or default to response status
    //         const error = (data && data.message) || response.status;
    //         return Promise.reject(error);
    //       }

    //       // this.postId = data.id;
    //     })
    //     .catch((error) => {
    //       this.errorMessage = error;
    //       console.error("There was an error!", error);
    //     });
    // },

    testDataFn(page) {
      // if (typeof page === "undefined") {
      //   page = 1;
      // }
      this.axios.get("http://127.0.0.1:8000/test").then((response) => {
        this.dummyData = response.data;
      });
    },
  },
};
</script>