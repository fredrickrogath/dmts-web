<template>
  <div
    class="
      px-2
      py-0
      text-gray-700
      dark:text-gray-500
      transition
      duration-500
      ease-in-out
    "
  >
    <div class="flex py-2">
      <!-- <transition name="graphs"> -->
      <patients-count v-if="selectedTab == 'patients-count'"></patients-count>
      <referred-patients
        v-else-if="selectedTab == 'referred-patients'"
      ></referred-patients>
      <registered-patients
        v-else-if="selectedTab == 'registered-patients'"
      ></registered-patients>
      <hospitals v-else-if="selectedTab == 'hospitals'"></hospitals>
      <doctors v-else-if="selectedTab == 'doctors'"></doctors>
      <!-- </transition> -->

      <div class="">
        <select
          class="
            form-select form-select-sm
            appearance-none
            block
            w-full
            py-1
            text-sm
            font-normal
            text-gray-700
            bg-gray-300 bg-white bg-clip-padding bg-no-repeat
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700
            focus:bg-gray-300
            focus:border-gray-600
            focus:outline-none
          "
          aria-label=".form-select-sm example"
        >
          <option selected>Filter Graphs</option>
          <option value="1">By Age</option>
          <option value="2">By Gender</option>
          <option value="3">By Region</option>
          <!-- <option value="3">By Hospital</option> -->
        </select>

        <div
          class="
            origin-top-right
            mt-2
            rounded-md
            bg-gray-200
            ring-1 ring-black ring-opacity-5
            divide-y divide-gray-100
            focus:outline-none
          "
          role="menu"
          aria-orientation="vertical"
          aria-labelledby="menu-button"
          tabindex="-1"
        >
          <div class="py-1" role="none">
            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
            <a
              href="#"
              class="
                hover:bg-gray-300 hover:text-gray-900
                text-gray-700
                block
                px-4
                py-2
                text-sm
              "
              role="menuitem"
              tabindex="-1"
              id="menu-item-0"
              :class="patientsCountSelected"
              @click="setSelectedTab('patients-count')"
              >Patients Count</a
            >

            <a
              href="#"
              class="
                hover:bg-gray-300 hover:text-gray-900
                text-gray-700
                block
                px-4
                py-1
                text-sm
              "
              role="menuitem"
              tabindex="-1"
              id="menu-item-1"
              :class="referredPatientsSelected"
              @click="setSelectedTab('referred-patients')"
              >Referred Patients</a
            >

            <a
              href="#"
              class="
                hover:bg-gray-300 hover:text-gray-900
                text-gray-700
                block
                px-4
                py-1
                text-sm
              "
              role="menuitem"
              tabindex="-1"
              id="menu-item-1"
              :class="registeredPatientsSelected"
              @click="setSelectedTab('registered-patients')"
              >Registered Patients</a
            >
          </div>
          <div class="py-0" role="none">
            <a
              href="#"
              class="
                hover:bg-gray-300 hover:text-gray-900
                text-gray-700
                block
                px-4
                py-1
                text-sm
              "
              role="menuitem"
              tabindex="-1"
              id="menu-item-2"
              :class="doctorsSelected"
              @click="setSelectedTab('doctors')"
              >DMTS Doctors</a
            >
          </div>

          <!-- <div class="py-0" role="none">
            <a
              href="#"
              class="
                hover:bg-gray-300 hover:text-gray-900
                text-gray-700
                block
                px-4
                py-1
                text-sm
              "
              role="menuitem"
              tabindex="-1"
              id="menu-item-2"
              :class="doctorsSelected"
              @click="setSelectedTab('doctors')"
              >DMTS Hospitals</a
            >
          </div> -->
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import PatientsCount from "./../Graphs/PatientsCount.vue";
import ReferredPatients from "./../Graphs/ReferredPatients.vue";
import RegisteredPatients from "./../Graphs/RegisteredPatients.vue";
import Hospitals from "./../Graphs/Hospitals.vue";
import Doctors from "./../Graphs/Doctors.vue";
export default {
  components: {
    PatientsCount,
    ReferredPatients,
    RegisteredPatients,
    Hospitals,
    Doctors,
  },
  data() {
    return { selectedTab: "patients-count" };
  },

  computed: {
    patientsCountSelected() {
      return this.selectedTab == "patients-count"
        ? "border-l-4 border-green-600 bg-gray-300 text-green-900"
        : null;
    },
    referredPatientsSelected() {
      return this.selectedTab == "referred-patients"
        ? "border-l-4 border-green-600 bg-gray-300 text-green-900"
        : null;
    },

    registeredPatientsSelected() {
      return this.selectedTab == "registered-patients"
        ? "border-l-4 border-green-600 bg-gray-300 text-green-900"
        : null;
    },
    hospitalsSelected() {
      return this.selectedTab == "hospitals"
        ? "border-l-4 border-green-600 bg-gray-300 text-green-900"
        : null;
    },
    doctorsSelected() {
      return this.selectedTab == "doctors"
        ? "border-l-4 border-green-600 bg-gray-300 text-green-900"
        : null;
    },
  },
  methods: {
    setSelectedTab(tab) {
      this.selectedTab = tab;
    },
  },
};
</script>