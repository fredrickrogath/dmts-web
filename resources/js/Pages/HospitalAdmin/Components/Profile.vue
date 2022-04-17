<template>
  <div>
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
  </div>
</template>

<script>
export default {
   emits: ['toggle-profile',],
//   emits: {
//     "toggle-profile": function () {
//       if (id) {
//         return true;
//       } else {
//         return false;
//       }
//     },
//   },
  data() {
    return {};
  },
  methods: {
    toggleProfile() {
      this.$emit("toggle-profile");
    },
  },
};
</script>