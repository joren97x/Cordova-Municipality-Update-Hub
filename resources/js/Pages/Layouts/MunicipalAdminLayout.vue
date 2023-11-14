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
        <slot> <h1>Hello World</h1> </slot>
      </v-main>
    </v-layout>
  </v-card>
</template>

<script setup></script>

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
