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

    <div class="py-10">
      <!-- {{$page.props.flash.role}} -->
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-xl sm:rounded-lg">
          <!-- <Welcome /> -->

          <section class="bg-white dark:bg-gray-200 h-full">
            <nav
              class="
                container
                p-6
                mx-auto
                lg:flex lg:justify-between lg:items-center
              "
            >
              <div class="flex items-center justify-between">
                <div>
                  <a
                    class="
                      uppercase
                      text-2xl
                      font-bold
                      text-green-800
                      dark:text-green-800
                      lg:text-3xl
                      hover:text-green-700
                      dark:hover:text-gray-300
                    "
                    href="#"
                  >
                    {{ $page.props.user.name }}
                  </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                  <button
                    type="button"
                    class="
                      text-gray-500
                      hover:text-gray-600
                      focus:outline-none focus:text-gray-600
                    "
                    aria-label="toggle menu"
                  >
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                      <path
                        fill-rule="evenodd"
                        d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>

              <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
              <div
                class="
                  flex flex-col
                  mt-4
                  space-y-2
                  lg:-mx-6 lg:mt-0 lg:flex-row lg:space-y-0
                "
              ></div>
            </nav>

            <div
              class="
                container
                flex flex-col
                px-6
                py-10
                mx-auto
                space-y-6
                lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center
              "
            >
              <div class="w-full lg:w-1/2">
                <div class="lg:max-w-lg">
                  <h1
                    class="
                      text-3xl
                      font-bold
                      tracking-wide
                      text-green-800
                      dark:text-green-800
                      lg:text-5xl
                    "
                  >
                    Get updates of your daily health scopes
                  </h1>

                  <div class="mt-8 space-y-5">
                    <p
                      class="
                        flex
                        items-center
                        -mx-2
                        text-green-800
                        dark:text-green-800
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 mx-2 text-green-800"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                      </svg>

                      <span class="mx-2">Clean and Simple Layout</span>
                    </p>

                    <p
                      class="
                        flex
                        items-center
                        -mx-2
                        text-green-800
                        dark:text-green-800
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 mx-2 text-green-800"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                      </svg>

                      <span class="mx-2">Review records</span>
                    </p>

                    <p
                      class="
                        flex
                        items-center
                        -mx-2
                        text-green-800
                        dark:text-green-800
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 mx-2 text-green-800"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                      </svg>

                      <span class="mx-2">Stay updated</span>
                    </p>

                    <p
                      class="
                        flex
                        items-center
                        -mx-2
                        text-green-800
                        dark:text-green-800
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 mx-2 text-green-800"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                      </svg>

                      <span class="mx-2">Easy to Use</span>
                    </p>
                  </div>
                </div>

                <div class="mt-14 w-full">
                  <a
                    class="
                      w-full
                      bg-red-700
                      hover:bg-red-800
                      text-white
                      font-bold
                      py-2
                      px-4
                      focus:outline-none focus:shadow-outline
                    "
                    type="button"
                    href="auth/google"
                  >
                    Authorize DMTS with Google
                  </a>
                </div>
              </div>

              <div
                class="flex items-center justify-center w-full h-96 lg:w-1/2"
              >
                <img
                  class="
                    object-cover
                    w-full
                    h-full
                    mx-auto
                    rounded-md
                    lg:max-w-2xl
                  "
                  src="logo/patient.jpg"
                  alt="glasses photo"
                />
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

