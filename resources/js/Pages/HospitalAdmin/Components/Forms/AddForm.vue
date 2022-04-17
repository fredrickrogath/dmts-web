<template>
  <div class="container mx-auto">
    <div
      class="
        relative
        py-2
        px-5
        bg-gray-100
        shadow-md
        rounded
        border border-gray-400
      "
    >
      <h1
        class="
          text-gray-800
          font-lg font-bold
          tracking-normal
          leading-tight
          text-sm
          mb-2
        "
      >
        Hospital Admin - Add
      </h1>

      <label
        class="text-gray-800 text-sm font-bold leading-tight tracking-normal"
        >Hospital</label
      >
      <div class="relative mb-1">
        <div
          class="
            absolute
            right-0
            text-gray-600
            flex
            items-center
            pr-3
            h-full
            cursor-pointer
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="icon icon-tabler icon-tabler-calendar-event"
            width="20"
            height="20"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" />
            <rect x="4" y="5" width="16" height="16" rx="2" />
            <line x1="16" y1="3" x2="16" y2="7" />
            <line x1="8" y1="3" x2="8" y2="7" />
            <line x1="4" y1="11" x2="20" y2="11" />
            <rect x="8" y="15" width="2" height="2" />
          </svg>
        </div>
        <input
          class="
            text-gray-600
            focus:outline-none focus:border focus:border-indigo-700
            font-normal
            w-full
            h-7
            flex
            items-center
            pl-3
            text-sm
            border-gray-300
            rounded
            border
          "
          placeholder="Hospital"
        />
      </div>

      <label
        class="text-gray-800 text-sm font-bold leading-tight tracking-normal"
        >Name</label
      >
      <div class="relative mb-1">
        <div
          class="
            absolute
            right-0
            text-gray-600
            flex
            items-center
            pr-3
            h-full
            cursor-pointer
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="icon icon-tabler icon-tabler-calendar-event"
            width="20"
            height="20"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" />
            <rect x="4" y="5" width="16" height="16" rx="2" />
            <line x1="16" y1="3" x2="16" y2="7" />
            <line x1="8" y1="3" x2="8" y2="7" />
            <line x1="4" y1="11" x2="20" y2="11" />
            <rect x="8" y="15" width="2" height="2" />
          </svg>
        </div>
        <input
          class="
            text-gray-600
            focus:outline-none focus:border focus:border-indigo-700
            font-normal
            w-full
            h-7
            flex
            items-center
            pl-3
            text-sm
            border-gray-300
            rounded
            border
          "
          placeholder="Name"
        />
      </div>

      <label
        for="expiry"
        class="text-gray-800 text-sm font-bold leading-tight tracking-normal"
        >Email</label
      >
      <div class="relative mb-1">
        <div
          class="
            absolute
            right-0
            text-gray-600
            flex
            items-center
            pr-3
            h-full
            cursor-pointer
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="icon icon-tabler icon-tabler-calendar-event"
            width="20"
            height="20"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" />
            <rect x="4" y="5" width="16" height="16" rx="2" />
            <line x1="16" y1="3" x2="16" y2="7" />
            <line x1="8" y1="3" x2="8" y2="7" />
            <line x1="4" y1="11" x2="20" y2="11" />
            <rect x="8" y="15" width="2" height="2" />
          </svg>
        </div>
        <input
          class="
            text-gray-600
            focus:outline-none focus:border focus:border-indigo-700
            font-normal
            w-full
            h-7
            flex
            items-center
            pl-3
            text-sm
            border-gray-300
            rounded
            border
          "
          placeholder="Email"
        />
      </div>

      <label
        for="expiry"
        class="text-gray-800 text-sm font-bold leading-tight tracking-normal"
        >Mobile</label
      >
      <div class="relative mb-1">
        <div
          class="
            absolute
            right-0
            text-gray-600
            flex
            items-center
            pr-3
            h-full
            cursor-pointer
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="icon icon-tabler icon-tabler-calendar-event"
            width="20"
            height="20"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" />
            <rect x="4" y="5" width="16" height="16" rx="2" />
            <line x1="16" y1="3" x2="16" y2="7" />
            <line x1="8" y1="3" x2="8" y2="7" />
            <line x1="4" y1="11" x2="20" y2="11" />
            <rect x="8" y="15" width="2" height="2" />
          </svg>
        </div>
        <input
          class="
            text-gray-600
            focus:outline-none focus:border focus:border-indigo-700
            font-normal
            w-full
            h-7
            flex
            items-center
            pl-3
            text-sm
            border-gray-300
            rounded
            border
          "
          placeholder="Mobile"
        />
      </div>

      <label
        for="expiry"
        class="text-gray-800 text-sm font-bold leading-tight tracking-normal"
        >Mobile
        <span class="text-gray-500 font-thin italic px-1">(Optional)</span>
      </label>
      <div class="relative mb-2">
        <div
          class="
            absolute
            right-0
            text-gray-600
            flex
            items-center
            pr-3
            h-full
            cursor-pointer
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="icon icon-tabler icon-tabler-calendar-event"
            width="20"
            height="20"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" />
            <rect x="4" y="5" width="16" height="16" rx="2" />
            <line x1="16" y1="3" x2="16" y2="7" />
            <line x1="8" y1="3" x2="8" y2="7" />
            <line x1="4" y1="11" x2="20" y2="11" />
            <rect x="8" y="15" width="2" height="2" />
          </svg>
        </div>
        <input
          class="
            text-gray-600
            focus:outline-none focus:border focus:border-indigo-700
            font-normal
            w-full
            h-7
            flex
            items-center
            pl-3
            text-sm
            border-gray-300
            rounded
            border
          "
          placeholder="Mobile"
        />
      </div>

      <label
        for="expiry"
        class="text-gray-800 text-sm font-bold leading-tight tracking-normal"
        >Birth Date
      </label>
      <div class="relative mb-2">
        <input
          class="
            text-gray-600
            focus:outline-none focus:border focus:border-indigo-700
            font-normal
            w-full
            h-7
            flex
            items-center
            pl-3
            text-sm
            border-gray-300
            rounded
            border
          "
          placeholder="Birth Date"
          type="date"
        />
      </div>

      <div class="flex items-center justify-end w-full">
        <button
          class="
            focus:outline-none
            focus:ring-2
            focus:ring-offset-2
            focus:ring-green-700
            transition
            duration-150
            ease-in-out
            hover:bg-green-600
            bg-green-700
            rounded
            text-white
            px-8
            h-7
            text-sm
          "
        >
          Add
        </button>
        <!-- <button
            class="
              focus:outline-none
              focus:ring-2
              focus:ring-offset-2
              focus:ring-gray-400
              ml-3
              bg-gray-100
              transition
              duration-150
              text-gray-600
              ease-in-out
              hover:border-gray-400 hover:bg-gray-300
              border
              rounded
              px-8
              py-2
              text-sm
            "
            onclick="modalHandler()"
          >
            Cancel
          </button> -->
      </div>
      <button
        class="
          cursor-pointer
          absolute
          top-0
          right-0
          mt-2
          mr-5
          text-gray-400
          hover:text-gray-600
          transition
          duration-150
          ease-in-out
          rounded
          focus:ring-2 focus:outline-none focus:ring-gray-600
        "
        @click="toggleAddForm"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="icon icon-tabler icon-tabler-x"
          width="20"
          height="20"
          viewBox="0 0 24 24"
          stroke-width="2.5"
          stroke="currentColor"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <path stroke="none" d="M0 0h24v24H0z" />
          <line x1="18" y1="6" x2="6" y2="18" />
          <line x1="6" y1="6" x2="18" y2="18" />
        </svg>
      </button>
    </div>
  </div>
</template>


<script>
export default {
  emits: ["toggle-form-add"],
  data() {
    return {};
  },
  methods: {
    toggleAddForm() {
      this.$emit("toggle-form-add");
    },
  },
};
</script>