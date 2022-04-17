<template>
  <div class="flex justify-center items-center">
  <div class="relative z-0">
    <div class="grid grid-cols-4 gap-1">
    <!-- Hospital administrators -->
    <hospital-admins></hospital-admins>
    <!-- Doctors -->
    <doctors></doctors>
    <!-- Patients -->
    <patients></patients>
    <!-- Hospitals -->
    <hospitals></hospitals>
  </div>
    <div v-if="false" class="bg-gray-300 absolute inset-0 flex justify-center items-center z-10">
      <hospital-admins-expand></hospital-admins-expand>
    </div>
  </div>
</div>

</template>

<script>
import HospitalAdmins from "./Manages/HospitalAdmins.vue";
import Doctors from "./Manages/Doctors.vue";
import Patients from "./Manages/Patients.vue";
import Hospitals from "./Manages/Hospitals.vue";

import HospitalAdminsExpand from "./Expands/HospitalAdmins.vue";
export default {
  components: { HospitalAdmins, Doctors, Patients, Hospitals , HospitalAdminsExpand},
  created() {
    this.testDataFn();
  },
  data() {
    return {
      dummyData: [],
      url: "http://127.0.0.1:8000/test?page=",
      currentPage: 1,
    };
  },
  methods: {
    testDataFn() {
      this.axios.get("http://127.0.0.1:8000/test").then((response) => {
        this.dummyData = response.data;
      });
    },
  },
};
</script>