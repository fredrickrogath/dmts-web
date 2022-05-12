<template>
  <div class="mx-4">
    <div class="grid grid-rows-2 gap-8">
      <div class="flex">
        <div>
          <div class="text-center text-lg py-1">Pie chart representation</div>
        <pie-chart
          width="600px"
          height="240px"
          :download="true"
          :colors="['#99582a', '#f35b04', '#3d348b', '#007200']"
          :data="[
            ['0-15 yrs', 5],
            ['16-30 yrs', 45],
            ['31-45 yrs', 30],
            ['48 yrs ->', 200],
          ]"
        ></pie-chart>
        </div>

        <div class="w-40 h-20 bg-gray-300 rounded px-2 text-start">
          Number of patients presents in all hospitals in DMTS
        </div>
      </div>
      <div class="grid grid-cols-1 gap-1 py-3">
        <div class="text-center text-lg py-1 mr-44">
          Bar graph representation
        </div>
        <bar-chart
          :download="true"
          :colors="[['#007200', '#007200', '#007200', '#007200']]"
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

      <div class="grid grid-cols-1 gap-1 py-3">
        <div class="text-center text-lg py-1 mr-44">
          Line chart representation
        </div>
        <line-chart
        :download="true"
        :colors="['#007200', '#007200']"
          :data="{ '0-15 yrs':5,'16-30 yrs':45,'31-45 yrs':30,'48 yrs':200,}"
        ></line-chart>
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
