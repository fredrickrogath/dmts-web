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
            border-l-2 border-green-600
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
        >
          <button
            class="
              focus:text-green-900 focus:outline-none
              w-full
              transition
              duration-500
              ease-in-out
            "
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
            border-l-2 border-green-600
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
        >
          <button
            class="
              focus:text-green-900 focus:outline-none
              w-full
              transition
              duration-500
              ease-in-out
            "
          >
            <span class="flex items-center">
              <i
                class="fas fa-sort pt-1 hover:cursor-pointer text-green-700"
              ></i>

              <span class="ml-4 capitalize">Security Overview</span>
            </span>
          </button>
        </li>

        <li
          class="
            pl-8
            py-1
            font-semibold
            border-l-2 border-green-600
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
        >
          <button
            class="
              focus:text-green-900 focus:outline-none
              w-full
              transition
              duration-500
              ease-in-out
            "
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
          <patients-count
            v-if="selectedTab == 'patients-count'"
          ></patients-count>
          <referred-patients
            v-else-if="selectedTab == 'referred-patients'"
          ></referred-patients>
          <registered-patients
            v-else-if="selectedTab == 'registered-patients'"
          ></registered-patients>
          <hospitals
            v-else-if="selectedTab == 'hospitals'"
          ></hospitals>
          <doctors
            v-else-if="selectedTab == 'doctors'"
          ></doctors>

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
              <option value="3">By Hospital</option>
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
                    border-l-2 border-green-600
                    block
                    px-4
                    py-2
                    text-sm
                  "
                  role="menuitem"
                  tabindex="-1"
                  id="menu-item-0"
                  >Patients Count</a
                >

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
                  id="menu-item-1"
                  >Referred Patients</a
                >

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
                  id="menu-item-1"
                  >Registered Patients</a
                >
              </div>
              <div class="py-1" role="none">
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
                  id="menu-item-2"
                  >DMTS Doctors</a
                >
              </div>

              <div class="py-1" role="none">
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
                  id="menu-item-2"
                  >DMTS Hospitals</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
import PatientsCount from "./Graphs/PatientsCount.vue";
import ReferredPatients from "./Graphs/ReferredPatients.vue";
import RegisteredPatients from "./Graphs/RegisteredPatients.vue";
import Hospitals from "./Graphs/Hospitals.vue";
import Doctors from "./Graphs/Doctors.vue";

export default {
  components: {
    PatientsCount,
    ReferredPatients,
    RegisteredPatients,
    Hospitals,
    Doctors,
  },
  data() {
    return {
      selectedTab: "patients-count",
    };
  },

  methods: {
    setSelectedTab(tab) {
      this.selectedTab = tab;
    },
  },
};
</script>

<style scoped>
.monitor-manage-enter,
.monitor-manage-leave-to {
  transition: translateX(3em);
  opacity: 0;
}
.monitor-manage-enter-active,
.monitor-manage-leave-active {
  transition: all 0.3s ease;
}
</style>