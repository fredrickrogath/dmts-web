<template>
  <div class="flex text-sm">
    <nav
      class="
        w-56
        py-2
        select-none
        overflow-y-auto
        transition
        duration-500
        ease-in-out
      "
    >
      <ul>
        <li
          class="
            pl-8
            py-1
            font-semibold
            mb-2
            transition
            duration-500
            ease-in-out
            px-4
            py-2
            -mb-px
            text-gray-800
            rounded-t
          "
          :class="generalOverviewBorderSelected"
        >
          <button
            class="
              focus:text-green-900 focus:outline-none
              w-full
              transition
              duration-500
              ease-in-out
            "
            :class="generalOverviewSelected"
            @click="setSelectedMainTab('general-overview')"
          >
            <span class="flex items-center">
              <i
                class="fas fa-sort pt-1 hover:cursor-pointer text-green-700"
              ></i>

              <span class="ml-4 capitalize">General Overview</span>
            </span>
          </button>
        </li>

        <!-- <li
          class="
            pl-8
            py-1
            font-semibold
            mb-2
            transition
            duration-500
            ease-in-out
            px-4
            py-2
            -mb-px
            text-gray-800
            rounded-t
          "
          :class="securityOverviewBorderSelected"
        >
          <button
            class="
              focus:text-green-900 focus:outline-none
              w-full
              transition
              duration-500
              ease-in-out
            "
            :class="securityOverviewSelected"
            @click="setSelectedMainTab('security-overview')"
          >
            <span class="flex items-center">
              <i
                class="fas fa-sort pt-1 hover:cursor-pointer text-green-700"
              ></i>

              <span class="ml-4 capitalize">Security Overview</span>
            </span>
          </button>
        </li> -->

        <li
          class="
            pl-8
            py-1
            font-semibold
            mb-2
            transition
            duration-500
            ease-in-out
            px-4
            py-2
            -mb-px
            text-gray-800
            rounded-t
          "
          :class="logActivitiesBoederSelected"
        >
          <button
            class="
              focus:text-green-900 focus:outline-none
              w-full
              transition
              duration-500
              ease-in-out
            "
            :class="logActivitiesSelected"
            @click="setSelectedMainTab('log-activities')"
          >
            <span class="flex items-center">
              <i
                class="fas fa-sort pt-1 hover:cursor-pointer text-green-700"
              ></i>

              <span class="ml-4 capitalize">Log Activities</span>
            </span>
          </button>
        </li>
      </ul>
    </nav>

    <main
      class="
        flex-1
        overflow-y-auto
        transition
        bg-gray-200
        duration-500
        ease-in-out
      "
    >
      <general-overview
        v-if="selectedMainTab == 'general-overview'"
      ></general-overview>
      <security-overview
        v-else-if="selectedMainTab == 'security-overview'"
      ></security-overview>

      <log-activities
        v-else-if="selectedMainTab == 'log-activities'"
      ></log-activities>
    </main>
  </div>
</template>

<script>
import GeneralOverview from "./MiniDashboard/GeneralOverview.vue";
import SecurityOverview from "./MiniDashboard/SecurityOverview.vue";
import LogActivities from "./MiniDashboard/LogActivities.vue";
export default {
  components: {
    GeneralOverview,
    SecurityOverview,
    LogActivities,
  },
  data() {
    return {
      selectedMainTab: "general-overview",
    };
  },
  computed: {
    generalOverviewSelected() {
      return this.selectedMainTab == "general-overview"
        ? "text-green-900"
        : null;
    },

    generalOverviewBorderSelected() {
      return this.selectedMainTab == "general-overview"
        ? "border-l-2 border-green-600"
        : null;
    },

    securityOverviewSelected() {
      return this.selectedMainTab == "security-overview"
        ? "text-green-900"
        : null;
    },

    securityOverviewBorderSelected() {
      return this.selectedMainTab == "security-overview"
        ? "border-l-2 border-green-600"
        : null;
    },

    logActivitiesSelected() {
      return this.selectedMainTab == "log-activities" ? "text-green-900" : null;
    },

    logActivitiesBoederSelected() {
      return this.selectedMainTab == "log-activities"
        ? "border-l-2 border-green-600"
        : null;
    },
  },
  methods: {
    setSelectedMainTab(tab) {
      this.selectedMainTab = tab;
    },
  },
};
</script>
