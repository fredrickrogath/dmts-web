<template>
  <div class="flex text-sm">
    <nav
      class="
        w-56
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
          :class="diagnosisBorderSelected"
        >
          <button
            class="
              focus:text-green-900 focus:outline-none
              w-full
              transition
              duration-500
              ease-in-out
            "
            :class="diagnosisSelected"
            @click="setSelectedMainTab('diagnosis')"
          >
            <span class="flex items-center">
              <i
                class="fas fa-sort pt-1 hover:cursor-pointer text-green-700"
              ></i>

              <span class="ml-4 capitalize">Diagnosis</span>
            </span>
          </button>
        </li>

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
          :class="referralsBorderSelected"
        >
          <button
            class="
              focus:text-green-900 focus:outline-none
              w-full
              transition
              duration-500
              ease-in-out
            "
            :class="referralsSelected"
            @click="setSelectedMainTab('referrals')"
          >
            <span class="flex items-center">
              <i
                class="fas fa-sort pt-1 hover:cursor-pointer text-green-700"
              ></i>

              <span class="ml-4 capitalize">Referrals</span>
            </span>
          </button>
        </li>

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
          :class="responsesBorderSelected"
        >
          <button
            class="
              focus:text-green-900 focus:outline-none
              w-full
              transition
              duration-500
              ease-in-out
            "
            :class="referralsSelected"
            @click="setSelectedMainTab('responses')"
          >
            <span class="flex items-center">
              <i
                class="fas fa-sort pt-1 hover:cursor-pointer text-green-700"
              ></i>

              <span class="ml-4 capitalize">Responces</span>
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
      <diagnosis v-if="selectedMainTab == 'diagnosis'"></diagnosis>

      <referrals v-if="selectedMainTab == 'referrals'"></referrals>

      <responses v-if="selectedMainTab == 'responses'"></responses>
    </main>
  </div>
</template>

<script>
import GeneralOverview from "./MiniDashboard/GeneralOverview.vue";
import Diagnosis from "./MiniDashboard/Diagnosis.vue";
import Responses from "./MiniDashboard/Responses.vue";
import Referrals from "./MiniDashboard/Referrals.vue";
export default {
  components: {
    GeneralOverview,
    Diagnosis,
    Responses,
    Referrals,
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

    referralsSelected() {
      return this.selectedMainTab == "referrals" ? "text-green-900" : null;
    },

    diagnosisSelected() {
      return this.selectedMainTab == "diagnosis" ? "text-green-900" : null;
    },

    responsesSelected() {
      return this.selectedMainTab == "responses" ? "text-green-900" : null;
    },

    generalOverviewBorderSelected() {
      return this.selectedMainTab == "general-overview"
        ? "border-l-4 border-green-600 bg-gray-200"
        : null;
    },

    referralsBorderSelected() {
      return this.selectedMainTab == "referrals"
        ? "border-l-4 border-green-600 bg-gray-200"
        : null;
    },
    diagnosisBorderSelected() {
      return this.selectedMainTab == "diagnosis"
        ? "border-l-4 border-green-600 bg-gray-200"
        : null;
    },
    responsesBorderSelected() {
      return this.selectedMainTab == "responses"
        ? "border-l-4 border-green-600 bg-gray-200"
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
