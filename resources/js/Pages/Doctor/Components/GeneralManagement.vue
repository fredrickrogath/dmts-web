<template>
  <div class="flex w-full">
    <div class="relative z-0 w-full">
      <div class="flex w-full">
        <!-- Hospital administrators -->
        <!-- <hospital-admins></hospital-admins> -->
        <!-- Doctors -->
        <!-- <doctors></doctors> -->
        <!-- Patients -->
        <patients></patients>
        <!-- Hospitals -->
        <!-- <hospitals></hospitals> -->
      </div>
      <div
        v-if="false"
        class="
          bg-gray-300
          absolute
          inset-0
          flex
          justify-center
          items-center
          z-10
        "
      >
        <!-- <hospital-admins-expand></hospital-admins-expand> -->
      </div>
    </div>
  </div>
</template>

<script>
// import HospitalAdmins from "./Manages/HospitalAdmins.vue";
// import Doctors from "./Manages/Doctors.vue";
import Patients from "./Manages/Patients.vue";
// import Hospitals from "./Manages/Hospitals.vue";

// import HospitalAdminsExpand from "./Expands/HospitalAdmins.vue";
export default {
  components: {
    //  Doctors,
    Patients,
    //  Hospitals
  },
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