<template>
  <div class="w-30">
    <div class="rounded-3xl overflow-hidden shadow-xl max-w-xs bg-green-500">
      <img :src="avatar" :alt="$page.props.user.name" class="w-full" />
      <div class="flex justify-center -mt-12">
        <img
          :src="avatar"
          :alt="$page.props.user.name"
          class="rounded-full border-solid border-white border-2"
        />
      </div>
      <div class="text-center px-3">
        <h4
          class="text-gray-900 text-sm bold font-sans text-ellipsis w-30 py-1"
        >
          {{ name }}
        </h4>
      </div>

      <div class="text-center px-3">
        <h4
          class="text-gray-800 text-sm bold font-sans text-ellipsis w-30 py-1"
        >
          <div class="leading-5 text-gray-900">
            Manages
            <a class="px-1 text-white hover:underline" href="#"
              >78 <span class="text-gray-900">Doc</span></a
            >
            <a class="text-white hover:underline" href="#"
              >308 <span class="text-gray-900">Pat</span></a
            >
          </div>
        </h4>

        <div class="text-sm leading-5 text-gray-900">
          <span class="text-gray-900">At</span> Mwimbili
          <span>Hospital</span>
        </div>
      </div>

      <div class="flex text-center px-4 py-2">
        <select
          class="
            form-select form-select-sm
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
            focus:text-gray-700
            focus:bg-white
            focus:border-blue-600
            focus:outline-none
          "
          aria-label=".form-select-sm example"
        >
          <option selected>Reason for the action</option>
          <option value="1">Dmts reason one</option>
          <option value="2">Dmts reason two</option>
          <option value="3">Dmts reason three</option>
        </select>

        <button
          class="
            cursor-pointer
            ml-1
            text-gray-700
            hover:text-gray-600
            transition
            duration-150
            ease-in-out
            rounded
            focus:ring-2 focus:outline-none focus:ring-gray-600
          "
          @click="toggleDeleteForm"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="icon icon-tabler icon-tabler-x"
            width="20"
            height="20"
            viewBox="0 0 24 24"
            stroke-width="2.5"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" />
            <line x1="18" y1="6" x2="6" y2="18" />
            <line x1="6" y1="6" x2="18" y2="18" />
          </svg>
        </button>
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
            @click="deleteHospitalAdministrator"
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
  inject: ["toggleFormDelete", "hospitalAdministrators"],
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
    avatar: {
      type: String,
      required: true,
      default: "Not found",
    },
    url: {
      type: String,
      required: true,
      default: "Not found",
    },
    task: {
      type: String,
      required: true,
      default: "Not found",
    },
  },
  data() {
    return { main_url: this.url, main_task: this.task };
  },
  methods: {
    deleteHospitalAdministrator() {
      axios
        .post(
          this.main_url + this.main_task,
          {
            id: this.id,
          },
          {
            headers: {
              "Content-Type": "application/json",
            },
          }
        )
        .then((res) => {
          // console.log(res.data.deleted);
          if (res.data.deleted) {
            this.toggleDeleteForm();
            this.hospitalAdministrators();
            alert("Successfully deleted");
          }
          // console.log(res.data.added);
          // this.dummyData = res.data;
          // if (res.data.length == 0) {
          //   this.emptyResult = true;
          // } else {
          //   this.emptyResult = false;
          // }
        })
        .catch((error) => {
          console.log(error.response.data.errors);
          // alert(error.response.data.errors.email[0] + '\n' + error.response.data.errors.name[0]);
        });
    },
    toggleDeleteForm() {
      this.toggleFormDelete();
    },
  },
};
</script>
