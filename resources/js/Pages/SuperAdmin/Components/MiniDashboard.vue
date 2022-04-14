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
          <linear-graph></linear-graph>

          <div>
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
            </select>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
import LinearGraph from "./Graphs/LinearGraph.vue";
export default {
  components: { LinearGraph },
  data() {
    return {};
  },
};
</script>