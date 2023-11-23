<script setup>
import Layout from "../Layouts/UserLayout.vue";
defineOptions({
  layout: Layout,
});
</script>
<template>
  <v-container fluid fill-height>
    <v-row align="center" justify="center">
      <v-col cols="3">
        <v-card
          class="mx-auto card-hover-shadow"
          max-width="400"
          style="margin-bottom: 4%; margin: 3%"
        >
          <v-img
            class="text-white image-zoom"
            height="200"
            src="/images/Travel-sites.jpg"
            cover
          ></v-img>
          <v-card-text class="text-truncate custom-title"
            >Essential Travel Facts</v-card-text
          >
          <v-card-actions>
            <Link href="/visitors/essential-travel-facts">
                Explore
                <span class="link-hover"></span>
            </Link>
          </v-card-actions>
        </v-card>
      </v-col>

      <v-col cols="3">
        <v-card
          class="mx-auto card-hover-shadow"
          max-width="400"
          style="margin-bottom: 4%; margin: 3%"
        >
          <v-img
            class="text-white image-zoom"
            height="200"
            src="/images/Must-see-sites.jpg"
            cover
          ></v-img>
          <v-card-text class="text-truncate custom-title">Must See Sites</v-card-text>
          <v-card-actions>
            <a href="/Visitors/Must%20See%20Sites" class="button-link">
              Explore
              <span class="link-hover"></span>
            </a>
          </v-card-actions>
        </v-card>
      </v-col>

      <v-col cols="3">
        <v-card
          class="mx-auto card-hover-shadow"
          max-width="400"
          style="margin-bottom: 4%; margin: 3%"
        >
          <v-img
            class="text-white image-zoom"
            height="200"
            src="/images/Entertainment-shopping-leisure.jpg"
            cover
          ></v-img>
          <v-card-text class="text-truncate custom-title"
            >Entertainment, Shopping and Leisure</v-card-text
          >
          <v-card-actions>
            <a href="/Visitors/Must%20See%20Sites" class="button-link">
              Explore
              <span class="link-hover"></span>
            </a>
          </v-card-actions>
        </v-card>
      </v-col>

      <v-col cols="3">
        <v-card
          class="mx-auto card-hover-shadow"
          max-width="400"
          style="margin-bottom: 4%; margin: 3%"
        >
          <v-img
            class="text-white image-zoom"
            height="200"
            src="/images/Bed-dine.jpg"
            cover
          ></v-img>
          <v-card-text class="text-truncate custom-title">Bed and Dine</v-card-text>
          <v-card-actions>
            <a href="/Visitors/Must%20See%20Sites" class="button-link">
              Explore
              <span class="link-hover"></span>
            </a>
          </v-card-actions>
        </v-card>
      </v-col>

      <v-col cols="3">
        <v-card
          class="mx-auto card-hover-shadow"
          max-width="400"
          style="margin-bottom: 4%; margin: 3%"
        >
          <v-img
            class="text-white image-zoom"
            height="200"
            src="/images/Moving-city.jpg"
            cover
          ></v-img>
          <v-card-text class="text-truncate custom-title"
            >Moving Around the City</v-card-text
          >
          <v-card-actions>
            <a href="/Visitors/Must%20See%20Sites" class="button-link">
              Explore
              <span class="link-hover"></span>
            </a>
          </v-card-actions>
        </v-card>
      </v-col>

      <v-col cols="3">
        <v-card
          class="mx-auto card-hover-shadow"
          max-width="400"
          style="margin-bottom: 4%; margin: 3%"
        >
          <v-img
            class="text-white image-zoom"
            height="200"
            src="/images/Money-exchange.jpg"
            cover
          ></v-img>
          <v-card-text class="text-truncate custom-title"
            >Money Exchange Centers</v-card-text
          >
          <v-card-actions>
            <a href="/Visitors/Must%20See%20Sites" class="button-link">
              Explore
              <span class="link-hover"></span>
            </a>
          </v-card-actions>
        </v-card>
      </v-col>

      <v-col cols="3">
        <v-card
          class="mx-auto card-hover-shadow"
          max-width="400"
          style="margin-bottom: 4%; margin: 3%"
        >
          <v-img
            class="text-white image-zoom"
            height="200"
            src="/images/Events-festivals.jpg"
            cover
          ></v-img>
          <v-card-text class="text-truncate custom-title"
            >Events, Festivals and Activities</v-card-text
          >
          <v-card-actions>
            <a href="/Visitors/Must%20See%20Sites" class="button-link">
              Explore
              <span class="link-hover"></span>
            </a>
          </v-card-actions>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<style scoped>
.custom-title {
  font-size: 17px;
  font-weight: bold;
}

.button-link {
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
  color: inherit;
  position: relative;
  padding: 2%;
  transition: background-color 0.3s, color 0.3s;
}

.button-link:hover {
  background-color: rgba(0, 0, 0, 0.05);
  color: inherit;
}

.card-hover-shadow {
  transition: box-shadow 0.3s;
}

.card-hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
