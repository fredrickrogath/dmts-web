<template>
     <div class="w-30">
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
                {{ name }}
              </h4>
            </div>

            <div class="text-center px-8 py-2">
<select class="form-select form-select-sm
    appearance-none
    block
    w-full
    px-2
    py-1
    text-sm
    font-normal
    text-gray-700
    bg-white bg-clip-padding bg-no-repeat
    border border-solid border-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-sm example">
      <option selected>Reason for the action</option>
      <option value="1">Dmts reason one</option>
      <option value="2">Dmts reason two</option>
      <option value="3">Dmts reason three</option>
    </select>
            </div>
            <div class="flex justify-center text-white">
              <div class="text-center mr-3 border-r pr-3 text-gray-900 py-2">
                <button
          class="
            focus:outline-none
            focus:ring-2
            focus:ring-offset-2
            focus:ring-green-700
            transition
            duration-150
            ease-in-out
            hover:bg-green-600
            bg-green-700
            rounded
            text-white
            px-6
            h-7
            text-sm
          "
        >
          Delete
        </button>
              </div>
              <div class="text-center text-gray-900 py-2">
               <button
          class="
            focus:outline-none
            focus:ring-2
            focus:ring-offset-2
            focus:ring-green-700
            transition
            duration-150
            ease-in-out
            hover:bg-green-600
            bg-green-700
            rounded
            text-white
            px-4
            h-7
            text-sm
          "
        >
          Deactivate
        </button>
              </div>
            </div>
          </div>
        </div>
</template>


<script>
export default {
  props: {
    name: {
      type: String,
      required: true,
      default: "Not found",
    },
  },
}
</script>
