<template>
  <tr
    class="
      relative
      transform
      scale-100
      text-xs
      py-1
      border-b-2 border-blue-100
      cursor-default
      bg-opacity-25
    "
  >
    <td
      class="pl-5 pr-3 whitespace-no-wrap hover:cursor-pointer"
      @mouseenter="toggleProfile"
      @mouseleave="toggleProfile"
    >
      <img
        class="h-8 w-8 rounded-full object-cover"
        :src="$page.props.user.profile_photo_url"
        :alt="$page.props.user.name"
      />
      <div class="text-red-500 text-xm pt-2 py-1">OFFLINE</div>
      <div class="text-gray-900 text-xm">Today</div>
      <div class="text-gray-900 text-xm">07:45 AM</div>
    </td>

    <td class="px-2 py-2 whitespace-no-wrap">
      <transition name="profile">
        <div class="relative z-0">
          <div v-if="hideProfile" :class="hideProfile">
            <info :name="name" :email="email" :id="id"></info>
          </div>

          <div v-else class="relative inset-0 z-10">
            <hover-profile></hover-profile>
          </div>
        </div>
      </transition>
    </td>
  </tr>
</template>

<script>
import HoverProfile from "./HoverProfile.vue";
import Info from "./Info.vue";
export default {
  components: {
    Info,
    HoverProfile,
  },
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
  },

  data() {
    return {
      hideProfile: true,
    };
  },

  computed: {
    modifieHeight() {
      return this.hideProfile ? "h-0" : null;
    },
  },

  methods: {
    toggleDelete(id) {
      console.log(id);
    },

    toggleProfile() {
      this.hideProfile = !this.hideProfile;
    },
  },
};
</script>

<style scoped>
.profile-enter-from {
  opacity: 0;
  transform: translateY(0px);
}

.profile-enter-active {
  transition: all 0.4s ease-out;
}

.profile-enter-to {
  opacity: 1;
  transform: translateY(0);
}

.profile-leave-from {
  opacity: 1;
  transform: translateY(0);
}

.profile-leave-active {
  transition: all 0.4s ease-in;
}

.profile-leave-to {
  opacity: 0;
  transform: translateY(-0px);
}
</style>