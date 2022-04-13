<template>
     <div>
          <div
            class="rounded-3xl overflow-hidden shadow-xl max-w-xs bg-green-500"
          >
            <img
              :src="$page.props.user.profile_photo_url"
              :alt="$page.props.user.name"
              class="w-full"
            />
            <div class="flex justify-center -mt-12">
              <img
                :src="$page.props.user.profile_photo_url"
                :alt="$page.props.user.name"
                class="rounded-full border-solid border-white border-2"
              />
            </div>
            <div class="text-center px-3">
              <h4 class="text-white text-sm bold font-sans text-ellipsis w-30">
                <!-- {{ name }} -->
              </h4>
            </div>
            <div class="flex justify-center text-white">
              <div class="text-center mr-3 border-r pr-3 text-gray-900 py-1">
                <h2>34</h2>
                <span>Doctors</span>
              </div>
              <div class="text-center text-gray-900 py-1">
                <h2>242</h2>
                <span>Patients</span>
              </div>
            </div>
          </div>
        </div>
</template>


<script>
export default {
//   props: {
//     name: {
//       type: String,
//       required: true,
//       default: "Not found",
//     },
//   },
}
</script>
