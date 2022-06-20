<template>
  <div>
    <div class="w-22 overflow-clip leading-5 text-sm text-gray-900 font-medium">
      {{ name }}
    </div>
    <div class="leading-5 text-green-700">
      <span class="text-gray-900">At</span> Mwimbili
      <span>Hospital</span>
    </div>
    <div class="leading-5 text-gray-900">
      Manages
      <a class="px-1 text-green-700 hover:underline" href="#"
        >78 <span class="text-gray-900">Doc</span></a
      >
      <a class="text-green-700 hover:underline" href="#"
        >308 <span class="text-gray-900">Pat</span></a
      >
    </div>
    <div class="leading-5 text-gray-700">
      <i class="fa-solid fa-envelope pr-2"></i>
      <span class="text-green-700 hover:underline" href="#">{{ email }}</span>
    </div>

    <div class="leading-5 text-gray-700">
      <i class="fa-solid fa-mobile-screen-button fa-lg pr-2"></i>
      <span class="text-green-700 hover:underline" href="#"
        >+255 715 983 180</span
      >
    </div>

    <div class="leading-5 text-gray-700">
      <i class="fa-solid fa-mobile-screen-button fa-lg pr-2"></i>
      <span class="text-green-700 hover:underline" href="#"
        >+255 685 501 748</span
      >
    </div>
    <div class="grid grid-cols-1 divide-y-2">
      <div class="leading-5 text-gray-800 pb-1">Dar es Salaam</div>
      <div class="flex text-gray-700 py-2">
        <i
          class="fas fa-edit pt-1 hover:cursor-pointer hover:text-green-700"
          @click="toggleEditForm"
        ></i>
        <i
          class="fas fa-add px-7 pt-1 hover:cursor-pointer hover:text-green-700"
        ></i>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="hover:cursor-pointer h-5 w-4 hover:text-green-700"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"
          />
        </svg>
        <i
          class="fas fa-trash pt-1 px-7 hover:cursor-pointer hover:text-red-700"
          @click="toggleDeleteForm"
        ></i>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  inject: [
    "toggleFormEdit",
    "formEditDetails",
    "toggleFormDelete",
    "formDeleteDetails",
  ],
  props: {
    id: {
      type: Number,
      required: true,
      default: "Not found",
    },
    name: {
      type: String,
      required: true,
      default: "Not found",
    },
    email: {
      type: String,
      required: true,
      default: "Not found",
    },
    mobile1: {
      type: String,
      required: false,
      default: "+255 715 983 180",
    },
    mobile2: {
      type: String,
      required: false,
      default: "+255 685 501 748",
    },
    dob: {
      type: String,
      required: false,
      default: "01-04-1997",
    },
  },
  // provide() {
  //   return {
  //     formDetails: this.formDetails,
  //   };
  // },
  methods: {
    toggleEditForm() {
      this.formEditDetails(
        this.id,
        this.name,
        this.email,
        this.mobile1,
        this.mobile2,
        this.dob
      );
      this.toggleFormEdit();
    },

    toggleDeleteForm() {
      this.formDeleteDetails(this.id, this.name, this.email,);
      this.toggleFormDelete();
    },
  },
};
</script>

<style scoped>
/* .info-enter-from {
  opacity: 0;
  transform: translateX(50px);
}

.info-enter-active {
  transition: all 0.5s ease-out;
}

.info-enter-to {
  opacity: 1;
  transform: translateX(0);
}

.info-leave-from {
  opacity: 1;
  transform: translateX(0);
}

.info-leave-active {
  transition: all 0.5s ease-in;
}

.info-leave-to {
  opacity: 0;
  transform: translateX(-30px);
} */
</style>