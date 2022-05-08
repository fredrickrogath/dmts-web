<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";
</script>

<template>
  <AppLayout title="Dashboard">
    <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template> -->

    <div class="py-0">
      <!-- {{$page.props.flash.role}} -->
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-xl sm:rounded-lg">
          <!-- <Welcome /> -->
          
<a class="font-bold text-blue-500" href="/patient/auth/google">dtms test</a>


        </div>
      </div>
    </div>
  </AppLayout>
</template>


<script>
/**
 * You should first need to place these 2 lines of code in your APP ENTRY file, e.g. src/main.js
 *
 * import GAuth from 'vue-google-oauth2'
 * Vue.use(GAuth, {clientId: '4584XXXXXXXX-2gqknkvdjfkdfkvb8uja2k65sldsms7qo9.apps.googleusercontent.com'})
 *
 */

export default {
  name: "test",
  data() {
    return {
      section: "Login",
      loading: "",
      response: "",
    };
  },

  methods: {
    signIn: function () {
      Vue.googleAuth().signIn(this.onSignInSuccess, this.onSignInError);
    },
    onSignInSuccess: function (authorizationCode) {
      this.toggleLoading();
      this.resetResponse();

      this.$http
        .post("http://your-backend-server.com/auth/google", {
          code: authorizationCode,
          redirect_uri: "postmessage",
        })
        .then(
          function (response) {
            if (response.body) {
              var data = response.body;

              // Save to vuex
              var token = "Bearer " + data.token;
              this.$store.commit("SET_USER", data.user_data);
              this.$store.commit("SET_TOKEN", token);

              // Save to local storage as well
              // ( or you can install the vuex-persistedstate plugin so that you won't have to do this step, only store to Vuex is sufficient )
              if (window.localStorage) {
                window.localStorage.setItem(
                  "user",
                  JSON.stringify(data.user_data)
                );
                window.localStorage.setItem("token", token);
              }

              // redirect to the dashboard
              this.$router.push({ name: "home" });
            }
          },
          function (response) {
            var data = response.body;
            this.response = data.error;
            console.log("BACKEND SERVER - SIGN-IN ERROR", data);
          }
        );
    },
    onSignInError: function (error) {
      this.response = "Failed to sign-in";
      console.log("GOOGLE SERVER - SIGN-IN ERROR", error);
    },
    toggleLoading: function () {
      this.loading = this.loading === "" ? "loading" : "";
    },
    resetResponse: function () {
      this.response = "";
    },
  },
};
</script>
