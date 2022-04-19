<template>
  <div class="mx-4">
    <div class="grid grid-rows-2 gap-8">
      <div class="flex">
        <pie-chart
          width="600px"
          height="240px"
          :download="true"
          :data="[
            ['0-15 yrs', 5],
            ['16-30 yrs', 45],
            ['31-45 yrs', 30],
            ['48 yrs ->', 200],
          ]"
        ></pie-chart>

        <div class="w-40 bg-gray-300 rounded px-2 text-start">
          Number of hospitals in all regions presents in DMTS
        </div>
      </div>
      <div class="grid grid-cols-1 gap-1 py-2">
        <bar-chart
          :download="true"
          :data="[
            ['0-15 yrs', 5],
            ['16-30 yrs', 45],
            ['31-45 yrs', 30],
            ['48 yrs ->', 200],
          ]"
          width="600px"
          height="220px"
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
