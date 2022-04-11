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
    <td class="pl-4 pr-2 whitespace-no-wrap hover:cursor-pointer">
      <img
        class="h-8 w-8 rounded-full object-cover"
        :src="$page.props.user.profile_photo_url"
        :alt="$page.props.user.name"
        @mouseenter="toggleProfile"
        @mouseleave="toggleProfile"
      />
      <div class="text-red-500 text-xm pt-2 py-1">OFFLINE</div>
      <div class="text-gray-900 text-xm">Today</div>
      <div class="text-gray-900 text-xm">07:45 AM</div>
    </td>

    <td class="px-2 py-2 whitespace-no-wrap">
      <div class="flex justify-center items-center">
        <div class="relative z-0">
          <info :name="name" :email="email" :id="id"></info>
          <transition name="profile" appear>
            <div
              v-if="hideProfile"
              class="
                absolute
                inset-0
                flex
                justify-center
                items-center
                z-10
                h-40
              "
            >
              <hover-profile :name="name"></hover-profile>
            </div>
          </transition>
        </div>
      </div>
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
      hideProfile: false,
    };
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
  opacity: .5;
  transform: translateX(30px);
}

.profile-enter-active {
  transition: all 0.4s ease-out;
}

.profile-enter-to {
  opacity: 0;
  transform: translateX(0);
}

.profile-leave-from {
  opacity: 1;
  transform: translateX(0);
}

.profile-leave-active {
  transition: all 0.4s ease-in;
}

.profile-leave-to {
  opacity: 0;
  transform: translateX(-30px);
}
</style>