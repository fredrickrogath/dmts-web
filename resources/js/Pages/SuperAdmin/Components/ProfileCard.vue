<template>
  <tr
    class="
      relative
      transform
      scale-100
      text-xs
      py-2
      cursor-default
      bg-green-900
      roundded-full
    "
  >
    <td class="px-2 whitespace-no-wrap hover:cursor-pointer rounded-full bg-gray-200">
      <transition name="profile" appear>
        <profile @toggle-profile="toggleProfile"></profile>
      </transition>
    </td>

    <td class="px-2 py-2 whitespace-no-wrap">
      <div class="flex justify-center items-center">
        <div class="relative z-0">
          <transition name="info" appear>
            <info :id="id" :name="name" :email="email" ></info>
          </transition>
          <transition name="profile-hover" appear>
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
                mt-6
              "
            >
              <hover-profile :name="name"></hover-profile>
            </div>
          </transition>
        </div>
      </div>
    </td>
  </tr>

  <tr class="h-4"></tr>
</template>

<script>
import HoverProfile from "./HoverProfile.vue";
import Profile from "./Profile.vue";
import Info from "./Info.vue";
export default {
  components: {
    Info,
    Profile,
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
/* animate information */

/* .info-enter-from {
  opacity: 0;
  transform: translateY(-50px);
}

.info-enter-active {
  transition: all 0.5s ease-out;
}

.info-enter-to {
  opacity: 1;
  transform: translateY(0);
}

.info-leave-from {
  opacity: 1;
  transform: translateY(0);
}

.info-leave-active {
  transition: all 0.5s ease-in;
}

.info-leave-to {
  opacity: 0;
  transform: translateY(50px);
} */

/* animate profile avatar */

/* .profile-enter-from {
  opacity: 0;
  transform: translateY(50px);
}

.profile-enter-active {
  transition: all 0.5s ease-out;
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
  transition: all 0.5s ease-in;
}

.profile-leave-to {
  opacity: 0;
  transform: translateY(-30px);
} */

/* animate profile hover */

.profile-hover-enter-from {
  opacity: 0;
  transform: translateX(50px);
}

.profile-hover-enter-active {
  transition: all 0.5s ease-out;
}

.profile-hover-enter-to {
  opacity: 1;
  transform: translateX(0);
}

.profile-hover-leave-from {
  opacity: 1;
  transform: translateX(0);
}

.profile-hover-leave-active {
  transition: all 0.5s ease-in;
}

.profile-hover-leave-to {
  opacity: 0;
  transform: translateX(-30px);
}
</style>
