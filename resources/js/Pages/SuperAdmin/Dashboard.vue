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
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-xl sm:rounded-lg">
          <!-- <Welcome /> -->

          <div class="rounded text-sm py-1">
            <!-- Tabs -->
            <ul id="tabs" class="inline-flex w-full px-1">
              <li
                class="
                  px-4
                  py-2
                  -mb-px
                  text-gray-800
                  border-b-2
                  rounded-t
                  opacity-50
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
                  opacity-50
                  hover:border-gray-300
                "
                :class="generalManagementSelected"
              >
                <button @click="setSelectedTab('general-management')">
                  General Management
                </button>
              </li>
            </ul>
          </div>

          <!-- <dmts-monitoring></dmts-monitoring> -->

          <keep-alive>
            <component :is="selectedTab"></component>
          </keep-alive>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<script>
// import HospitalAdmin from "./Components/HospitalAdmin.vue";
import GeneralManagement from "./Components/GeneralManagement.vue";
import DmtsMonitoring from "./Components/DmtsMonitoring.vue";

export default {
  components: {
    DmtsMonitoring,
    GeneralManagement,
  },
  created() {
    this.testDataFn();
  },
  data() {
    return {
      dummyData: [],
      url: "http://127.0.0.1:8000/test?page=",
      selectedTab: "dmts-monitoring",
    };
  },
  computed: {
    dmtsMonitoringSelected() {
      return this.selectedTab == "dmts-monitoring"
        ? "border-blue-800"
        : "border-gray-300";
    },
    generalManagementSelected() {
      return this.selectedTab == "general-management"
        ? "border-blue-800"
        : "border-gray-300";
    },
  },
  methods: {
    setSelectedTab(tab) {
      this.selectedTab = tab;
    },
    testDataFn() {
      this.axios.get("http://127.0.0.1:8000/test").then((response) => {
        this.dummyData = response.data;
      });
    },
  },
};
</script>