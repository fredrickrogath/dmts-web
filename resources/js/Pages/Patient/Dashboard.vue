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

    <div class="py-0">
      <!-- {{$page.props.flash.role}} -->
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-xl sm:rounded-lg">
          <!-- <Welcome /> -->

          <div class="rounded text-sm pb-2">
            <!-- Tabs -->
            <div class="flex">
              <!-- <ul id="tabs" class="inline-flex w-full px-1">
                <li
                  class="
                    px-4
                    py-2
                    -mb-px
                    text-gray-800
                    border-b-2
                    rounded-t
                    hover:border-gray-300
                  "
                  :class="dmtsMonitoringSelected"
                >
                  <button
                    id="default-tab"
                    @click="setSelectedTab('dmts-monitoring')"
                  >
                    DMTS Monitoring
                  </button>
                </li>
                <li
                  class="
                    mx-4
                    py-2
                    -mb-px
                    text-gray-800
                    border-b-2
                    rounded-t
                    hover:border-gray-300
                  "
                  :class="generalManagementSelected"
                >
                  <button @click="setSelectedTab('general-management')">
                    General patien
                  </button>
                </li>
              </ul> -->
              <div class="flex justify-content-center align-center mt-2">
                <i class="fas fa-bell fa-lg mt-4"></i>
                <span
                  class="
                    badge
                    mb-3
                    ml-2
                    bg-red-800
                    px-2
                    py-1
                    text-center
                    object-right-top
                    text-white text-sm
                    mr-1
                  "
                  >24</span
                >
              </div>
            </div>
          </div>

          <!-- <dmts-monitoring></dmts-monitoring> -->

          <!-- <transition name="monitor-manage">
            <keep-alive>
              <component :is="selectedTab"></component>
            </keep-alive>
          </transition> -->
        </div>
      </div>
    </div>
  </AppLayout>
</template>
