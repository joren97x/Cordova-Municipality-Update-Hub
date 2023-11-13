<template>
  <v-card>
    <v-layout>
      <v-navigation-drawer :width="312">
        <v-list>
          <v-list-item prepend-avatar="logo-copy.png">
            <div class="title">Municipal</div>
          </v-list-item>
        </v-list>

        <v-divider></v-divider>

        <v-list density="compact" nav style="font-size: 45px; font-weight: bold">
          <v-list-item
            v-for="item in menuItems"
            :key="item.value"
            :prepend-icon="item.icon"
            :title="item.title"
            @click="showContent(item.value)"
          ></v-list-item>
        </v-list>
      </v-navigation-drawer>

      <v-main>
        <!-- Content for "MUNICIPALITY" -->
        <transition name="slide-fade" v-if="showContentFor === 'myMunicipality'">
          <div>
            <h1>Municipality Content</h1>
            <!-- Add your content here for "MUNICIPALITY" -->
          </div>
        </transition>

        <!-- Content for "POST" -->
        <transition name="slide-fade" v-if="showContentFor === 'myPost'">
          <div>
            <h1>POST</h1>
            <!-- Add your content here for "POST" -->
          </div>
        </transition>

        <!-- Content for "REQUEST" -->
        <transition name="slide-fade" v-if="showContentFor === 'myRequest'">
          <div>
            <h1>REQUEST</h1>
            <!-- Add your content here for "REQUEST" -->
          </div>
        </transition>

        <!-- Content for "CONTACT US QUESTION'S" -->
        <transition name="slide-fade" v-if="showContentFor === 'myContactUs'">
          <div>
            <h1>Contact Us Questions</h1>
            <!-- Add your content here for "CONTACT US QUESTION'S" -->
          </div>
        </transition>

        <!-- Content for "EMAIL NOTIFY LIST" -->
        <transition name="slide-fade" v-if="showContentFor === 'myEmailNotify'">
          <div>
            <h1>Email Notify List</h1>
            <!-- Add your content here for "EMAIL NOTIFY LIST" -->
          </div>
        </transition>

        <!-- Content for "VISITORS" -->
        <transition name="slide-fade" v-if="showContentFor === 'myVisitors'">
          <div>
            <h1>Visitors</h1>
            <!-- Add your content here for "VISITORS" -->
          </div>
        </transition>

        <!-- Content for "THE MUNICIPAL" -->
        <transition name="slide-fade" v-if="showContentFor === 'myTheMunicipal'">
          <div>
            <h1>The Municipal</h1>
            <!-- Add your content here for "THE MUNICIPAL" -->
          </div>
        </transition>
      </v-main>
    </v-layout>
  </v-card>
</template>

<script setup>
import { ref, onMounted } from "vue";

const menuItems = [
  { value: "myMunicipality", icon: "mdi-office-building-outline", title: "MUNICIPALITY" },
  { value: "myPost", icon: "mdi-post-outline", title: "POST" },
  { value: "myRequest", icon: "mdi-message-question-outline", title: "REQUEST" },
  {
    value: "myContactUs",
    icon: "mdi-account-box-outline",
    title: "CONTACT US QUESTION'S",
  },
  { value: "myEmailNotify", icon: "mdi-email-alert-outline", title: "EMAIL NOTIFY LIST" },
  { value: "myVisitors", icon: "mdi-account-group-outline", title: "VISITORS" },
  { value: "myTheMunicipal", icon: "mdi-bank-outline", title: "THE MUNICIPAL" },
];

const showContentFor = ref("myMunicipality"); // Default to "MUNICIPALITY"

const showContent = (content) => {
  showContentFor.value = content;
  localStorage.setItem("selectedMenuItem", content);
};

onMounted(() => {
  const selectedMenuItem = localStorage.getItem("selectedMenuItem");
  if (selectedMenuItem) {
    showContentFor.value = selectedMenuItem;
  }
});
</script>

<style>
.title {
  font-size: 24px;
  font-weight: bold;
}

.slide-fade-enter-active,
.slide-fade-leave-active {
  transition: opacity 0.5s, transform 0.5s;
}
.slide-fade-enter,
.slide-fade-leave-to {
  opacity: 0;
  transform: translateX(30px);
}
</style>
