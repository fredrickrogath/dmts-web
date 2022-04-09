<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";
</script>

<template>
  <AppLayout title="Dashboard">
    <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template> -->

    <div class="py-2">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-xl sm:rounded-lg">
          <!-- <Welcome /> -->

          <div class="grid grid-cols-4 gap-4">
            
           <div>
              <section class="relative bg-blueGray-50">
                <div
                  class="container mx-auto py-2 flex justify-center h-screen"
                >
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
                      Hospital Administrators
                      
                      <font-awesome-icon icon="fas fa-expand" />
                    </div>

                    <div
                      class="w-full h-full overflow-auto shadow"
                      id="journal-scroll"
                    >
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

                            v-for="test in dummyData" :key="test.id"
                          >
                            <td class="pl-5 pr-3 whitespace-no-wrap">
                              <div class="text-gray-400">Today</div>
                              <div>07:45</div>
                            </td>

                            <td class="px-2 py-2 whitespace-no-wrap">
                              <div class="leading-5 text-gray-500 font-medium">
                                {{test.name}}
                              </div>
                              <div class="leading-5 text-gray-900">
                                Create pull request #1213
                                <a
                                  class="text-blue-500 hover:underline"
                                  href="#"
                                  >#231231</a
                                >
                              </div>
                              <div class="leading-5 text-gray-800">
                                Hello message
                              </div>
                            </td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
            </div>


            <div>
              <section class="relative bg-blueGray-50">
                <div
                  class="container mx-auto py-2 flex justify-center h-screen"
                >
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
                      Doctors
                    </div>

                    <div
                      class="w-full h-full overflow-auto shadow bg-white"
                      id="journal-scroll"
                    >
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
                              bg-green-500 bg-opacity-25
                            "

                            v-for="test in dummyData" :key="test.id"
                          >
                            <td class="pl-5 pr-3 whitespace-no-wrap">
                              <div class="text-gray-400">Today</div>
                              <div>07:45</div>
                            </td>

                            <td class="px-2 py-2 whitespace-no-wrap">
                              <div class="leading-5 text-gray-500 font-medium">
                                {{test.name}}
                              </div>
                              <div class="leading-5 text-gray-900">
                                Create pull request #1213
                                <a
                                  class="text-blue-500 hover:underline"
                                  href="#"
                                  >#231231</a
                                >
                              </div>
                              <div class="leading-5 text-gray-800">
                                Hello message
                              </div>
                            </td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
            </div>


            <div>
              <section class="relative bg-blueGray-50">
                <div
                  class="container mx-auto py-2 flex justify-center h-screen"
                >
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
                      Patients
                    </div>

                    <div
                      class="w-full h-full overflow-auto shadow bg-white"
                      id="journal-scroll"
                    >
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
                              bg-green-500 bg-opacity-25
                            "
                            v-for="test in dummyData" :key="test.id"
                          >
                            <td class="pl-5 pr-3 whitespace-no-wrap">
                              <div class="text-gray-400">Today</div>
                              <div>07:45</div>
                            </td>

                            <td class="px-2 py-2 whitespace-no-wrap">
                              <div class="leading-5 text-gray-500 font-medium">
                                {{test.name}}
                              </div>
                              <div class="leading-5 text-gray-900">
                                Create pull request #1213
                                <a
                                  class="text-blue-500 hover:underline"
                                  href="#"
                                  >#231231</a
                                >
                              </div>
                              <div class="leading-5 text-gray-800">
                                Hello message
                              </div>
                            </td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
            </div>



            <div>
              <section class="relative bg-blueGray-50">
                <div
                  class="container mx-auto py-2 flex justify-center h-screen"
                >
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
                      Hospitals
                    </div>

                    <div
                      class="w-full h-full overflow-auto shadow bg-white"
                      id="journal-scroll"
                    >
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
                              bg-green-500 bg-opacity-25
                            "

                            v-for="test in dummyData" :key="test.id"
                          >
                            <td class="pl-5 pr-3 whitespace-no-wrap">
                              <div class="text-gray-400">Today</div>
                              <div>07:45</div>
                            </td>

                            <td class="px-2 py-2 whitespace-no-wrap">
                              <div class="leading-5 text-gray-500 font-medium">
                                {{test.name}}
                              </div>
                              <div class="leading-5 text-gray-900">
                                Create pull request #1213
                                <a
                                  class="text-blue-500 hover:underline"
                                  href="#"
                                  >#231231</a
                                >
                              </div>
                              <div class="leading-5 text-gray-800">
                                Hello message
                              </div>
                            </td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
            </div>
                       
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<script>
export default {
  mounted() {
    this.testDataFn();
  },
  data() {
    return {
      dummyData:[],
      url: 'http://127.0.0.1:8000/test',
    }
  },
  methods: {
    testDataFn() {

//         fetch('http://127.0.0.1:8000/test')
// .then(res => res.json())
// .then(json => {this.testData = json;console.log(this.testData)})

      // POST request using fetch with error handling
      const requestOptions = {
        method: "GET",
        headers: {
          "Content-Type": "application/json",
          // Authorization: "Bearer 1|H1OrjYLqsPL92YYs9FNjsB311IL9riHIzx0gzL9y",
        },
        // body: JSON.stringify({ title: 'Vue POST Request Example' })
      };
      fetch( this.url, requestOptions)
        .then(async (response) => {
          const data = await response.json();
          this.dummyData = data;
          // console.log(this.dummyData);

          // check for error response
          if (!response.ok) {
            // get error message from body or default to response status
            const error = (data && data.message) || response.status;
            return Promise.reject(error);
          }

          // this.postId = data.id;
        })
        .catch((error) => {
          this.errorMessage = error;
          console.error("There was an error!", error);
        });
    }
  },
}
</script>