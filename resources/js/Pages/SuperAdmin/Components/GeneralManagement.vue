<template>
  <div class="grid grid-cols-4 gap-1">
    <!-- Hospital administrators -->
    <hospital-admin></hospital-admin>
    <!-- Doctors -->
    <hospital-admin></hospital-admin>
    <!-- Patients -->
    <hospital-admin></hospital-admin>
    <!-- Hospitals -->
    <hospital-admin></hospital-admin>
  </div>
</template>

<script>
import HospitalAdmin from "./HospitalAdmin.vue";
export default {
  components: { HospitalAdmin },
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