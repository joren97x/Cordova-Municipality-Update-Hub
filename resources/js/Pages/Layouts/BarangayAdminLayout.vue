<template>
  <v-card>
    <v-layout>
      <v-navigation-drawer :width="300">
        <v-list>
          <v-list-item prepend-avatar="logo-copy.png">
            <div class="title">Bang-bang</div>
          </v-list-item>
        </v-list>

        <v-divider></v-divider>

        <v-list density="compact" nav style="font-size: 45px; font-weight: bold">
          <v-list-item
            prepend-icon="mdi-post-outline"
            title="POST"
            value="myPost"
            class="custom-title"
            @click="showPostContent"
          ></v-list-item>
          <v-list-item
            prepend-icon="mdi-receipt-clock-outline"
            title="PENDING POST"
            value="myPendingPost"
            class="custom-title"
            @click="showPendingPostContent"
          ></v-list-item>
        </v-list>
      </v-navigation-drawer>

      <v-main style="height: 100vh">
        <transition name="slide-fade">
          <div v-if="showPost">
            <h1 class="d-flex justify-center" style="margin-top: 10%; font-size: 50px">
              Barangay POST
            </h1>
            <v-container>
              <v-row class="mx-auto justify-center" style="margin-top: 5vh">
                <v-col cols="2" style="margin-top: 6%">
                  <v-select
                    label="BARANGAY"
                    :items="[
                      'California',
                      'Colorado',
                      'Florida',
                      'Georgia',
                      'Texas',
                      'Wyoming',
                    ]"
                  ></v-select>
                  <v-select
                    label="SPORTS"
                    :items="[
                      'Basketball',
                      'Sipa',
                      'Kaog Bato',
                      'Kaog Tae',
                      'Kaona Ko',
                      'Sumbagay',
                    ]"
                  ></v-select>
                </v-col>
                <v-col cols="6">
                  <v-text-field
                    label="Title for your ambot"
                    model-value="Grocery delivery"
                    hint="For example, flowers or used cars"
                    variant="outlined"
                  ></v-text-field>
                  <v-textarea
                    clearable
                    clear-icon="mdi-close-circle"
                    label="Text"
                    variant="outlined"
                    model-value="pag yaw yaw diha"
                  ></v-textarea>
                  <v-btn
                    class="float-end"
                    icon="mdi-note-check-outline"
                    size="x-large"
                  ></v-btn>
                </v-col>
              </v-row>
            </v-container>
          </div>
          <div v-else-if="showPendingPost">
            <h1 class="d-flex justify-center" style="margin-top: 10%; font-size: 50px">
              Barangay Pending POST
            </h1>
            <v-container>
              <v-row class="mx-auto justify-center" style="margin-top: 5vh">
                <v-col cols="2" style="margin-top: 6%">
                  <v-select
                    label="BARANGAY"
                    :items="[
                      'California',
                      'Colorado',
                      'Florida',
                      'Georgia',
                      'Texas',
                      'Wyoming',
                    ]"
                  ></v-select>
                  <v-select
                    label="SPORTS"
                    :items="[
                      'Basketball',
                      'Sipa',
                      'Kaog Bato',
                      'Kaog Tae',
                      'Kaona Ko',
                      'Sumbagay',
                    ]"
                  ></v-select>
                </v-col>
                <v-col cols="6">
                  <v-text-field
                    label="Title for your ambot"
                    model-value="Grocery delivery"
                    hint="For example, flowers or used cars"
                    variant="outlined"
                  ></v-text-field>
                  <v-textarea
                    clearable
                    clear-icon="mdi-close-circle"
                    label="Text"
                    variant="outlined"
                    model-value="pag yaw yaw diha"
                  ></v-textarea>
                  <v-btn icon="mdi-check-decagram-outline" size="x-large"></v-btn>
                  <v-btn
                    class="float-end"
                    icon="mdi-file-clock-outline"
                    size="x-large"
                  ></v-btn>
                </v-col>
              </v-row>
            </v-container>
          </div>
        </transition>
      </v-main>
    </v-layout>
  </v-card>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from "vue";

const showPost = ref(true); // Set this to true initially to show the "POST" content
const showPendingPost = ref(false);

const showPostContent = () => {
  showPost.value = true;
  showPendingPost.value = false;
  localStorage.setItem("currentContent", "post");
};

const showPendingPostContent = () => {
  showPost.value = false;
  showPendingPost.value = true;
  localStorage.setItem("currentContent", "pendingPost");
};

onMounted(() => {
  const currentContent = localStorage.getItem("currentContent");
  if (currentContent === "pendingPost") {
    showPendingPostContent();
  } else {
    showPostContent();
  }
});

onBeforeUnmount(() => {
  // Clear the local storage when the component is unmounted
  localStorage.removeItem("currentContent");
});
</script>

<style>
.title {
  font-size: 24px;
  font-weight: bold;
}

.custom-title {
  font-size: 50px;
  font-weight: bold;
}

.slide-fade-enter-active,
.slide-fade-leave-active {
  transition: opacity 0.5s, transform 0.5s;
}
.slide-fade-enter,
.slide-fade-leave-to {
  opacity: 0;
  transform: translateX(90px);
}
</style>
