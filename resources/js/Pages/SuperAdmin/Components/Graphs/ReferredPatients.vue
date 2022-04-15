<template>
  <div class="mx-4">
    <div class="grid grid-rows-2 gap-8">
      <div class="flex">
        <pie-chart
          width="600px"
          height="240px"
          :download="true"
          :data="[
            ['Male', 30],
            ['Female', 200],
          ]"
        ></pie-chart>

        <div class="w-40 bg-gray-300 rounded px-2 text-start">
          Number of patients referred between different hospitals in DMTS
        </div>
      </div>
      <div class="grid grid-cols-1 gap-1 py-2">
        <bar-chart
          :download="true"
          :data="[
            ['Male', 30],
            ['Female', 200],
          ]"
          width="600px"
          height="130px"
        ></bar-chart>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
};
</script>
