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
            <div class="flex justify-center -mt-8">
              <img
                :src="$page.props.user.profile_photo_url"
                :alt="$page.props.user.name"
                class="rounded-full border-solid border-white border-2"
              />
            </div>
            <div class="text-center px-3">
              <h3 class="text-white text-sm bold font-sans">
                {{ name }}
              </h3>
              <p class="font-sans font-light text-white">
                dmts test
              </p>
            </div>
            <div class="flex justify-center text-white">
              <div class="text-center mr-3 border-r pr-3">
                <h2>34</h2>
                <span>Photos</span>
              </div>
              <div class="text-center">
                <h2>42</h2>
                <span>Friends</span>
              </div>
            </div>
          </div>
        </div>
</template>