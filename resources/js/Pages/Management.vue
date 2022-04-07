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
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <!-- <Welcome /> -->

          <div class="rounded text-sm">
            <!-- Tabs -->
            <ul id="tabs" class="inline-flex w-full px-1">
              <li
                class="
                  px-4
                  py-2
                  -mb-px
                  text-gray-800
                  border-b-2 border-blue-400
                  rounded-t
                  opacity-50
                "
              >
                <a id="default-tab" href="#first">Patient Management</a>
              </li>
              <li class="px-4 py-2 text-gray-800 rounded-t opacity-50">
                <a href="#third">Hospital Management</a>
              </li>
              <li class="px-4 py-2 text-gray-800 rounded-t opacity-50">
                <a href="#third">Treatment Management</a>
              </li>
              <li class="px-4 py-2 text-gray-800 rounded-t opacity-50">
                <a href="#third">Referral Management</a>
              </li>
              <li class="px-4 py-2 text-gray-800 rounded-t opacity-50">
                <a href="#fourth">DMTS MAnagement</a>
              </li>
            </ul>

            <!-- Tab Contents -->
            <div id="tab-contents">
              <div id="first" class="p-4">First tab</div>
              <div id="second" class="hidden p-4">Second tab</div>
              <div id="third" class="hidden p-4">Third tab</div>
              <div id="fourth" class="hidden p-4">Fourth tab</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
