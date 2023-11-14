<script setup>
import Layout from "../Layouts/UserLayout.vue";
defineOptions({
  layout: Layout,
});
defineProps({
  barangay: Object,
  SKofficials: Object,
  BOofficials: Object,
});
</script>

<template>
  <v-row>
    <v-col cols="7">
      <div
        style="
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          height: 100%;
        "
      >
        <img
          :src="`../images/${barangay.image}`"
          alt=""
          srcset=""
          width="500"
          style="border: 5px solid black; margin: 5% 0"
        />
      </div>
    </v-col>
    <v-col cols="3">
      <div
        style="
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          height: 100%;
        "
      >
        <h1 style="font-size: 75px; margin: 5% 0">{{ barangay.name }}</h1>
      </div>
    </v-col>
    <v-col cols="12">
      <div style="text-align: center; margin-top: 20px">
        <h2 style="font-size: 55px">About</h2>
        <p>{{ barangay.about }}</p>
      </div>
    </v-col>
    <v-col cols="12">
      <div style="display: flex; justify-content: space-between; margin-top: 20px">
        <div style="flex: 1; text-align: center">
          <h2 style="font-size: 55px">Mission</h2>
          <p>{{ barangay.mission }}</p>
        </div>
        <div style="flex: 1; text-align: center">
          <h2 style="font-size: 55px">Vision</h2>
          <p>{{ barangay.vision }}</p>
        </div>
      </div>
    </v-col>
    <v-col cols="12">
      <div style="text-align: center; margin-top: 5%">
        <h2 style="font-size: 50px">Barangay & SK Officials</h2>
        <div style="display: flex; justify-content: space-between; margin-top: 20px">
          <v-col col="6">
            <v-carousel hide-delimiters style="width: 70%; margin-left: 20%">
              <v-carousel-item
                v-for="(item, i) in items"
                :key="i"
                :src="item.src"
                cover
              ></v-carousel-item>
            </v-carousel>
          </v-col>
          <v-col col="6">
            <v-carousel hide-delimiters style="width: 70%; margin-right: 20%">
              <v-carousel-item
                v-for="(item, i) in items"
                :key="i"
                :src="item.src"
                cover
              ></v-carousel-item>
            </v-carousel>
          </v-col>
        </div>
      </div>
    </v-col>
    <v-col cols="12">
      <div style="text-align: center; margin-top: 20px">
        <h2 style="font-size: 50px">Feast Day</h2>
        <p>{{ barangay.feastday }}</p>
      </div>
    </v-col>
    <v-col cols="12">
      <div style="text-align: center; margin-top: 20px">
        <h1>IMPORTANT ANNOUNCEMENT</h1>
        <!-- <v-card :key="BOofficial.id" v-for="BOofficial in BOofficials">
          <v-img :src="`../images/${BOofficial.image}`"></v-img>
          {{ BOofficial.image }}
        </v-card> -->
        <div class="icon-container">
          <div class="icon">
            <img
              src="/images/Cordova-local-news.jpg"
              alt="Festival"
              width="350"
              height="320"
              style="border-radius: 3%"
            />
            <div class="icon-title">Local News</div>
            <p class="icon-description">
              Garden Resort Here is a list of boat operators in Cordova who are now
              starting to get back on their feet, process the necessary.
            </p>
          </div>
          <div class="icon">
            <img
              src="/images/Cordova-events.jpg"
              alt="Map"
              width="350"
              height="320"
              style="border-radius: 3%"
            />
            <div class="icon-title">Events</div>
            <p class="icon-description">
              Explore the beautiful Cordova region and discover its rich culture and
              natural beauty. Plan your journey and make the most of your visit.
            </p>
          </div>
          <div class="icon">
            <img
              src="/images/Cordova-sports.jpg"
              alt="Province"
              width="350"
              height="320"
              style="border-radius: 3%"
            />
            <div class="icon-title">Sports</div>
            <p class="icon-description">
              Best Sports & Activities in Cordova, Cebu. Cattleya Gardens and Memorial
              Park, Nalusuan Marine Sanctuary, Kasadya Park n Play Center, Gilutongan
              Marine.
            </p>
          </div>
          <div class="icon">
            <img
              src="/images/Cordova-health-wellness.jpg"
              alt="Province"
              width="350"
              height="320"
              style="border-radius: 3%"
            />
            <div class="icon-title">Health & Wellness</div>
            <p class="icon-description">
              We are the only rural health unit in the municipality of Cordova and we
              provide free medical services to all residents of our town. Our goal is to
              improve the quality of life for everyone living here by providing them with
              access to healthcare that they otherwise would not have been able to afford.
            </p>
          </div>
        </div>
      </div>
    </v-col>
  </v-row>
</template>

<script>
export default {
  data() {
    return {
      items: [
        {
          src: "https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg",
        },
        {
          src: "https://cdn.vuetifyjs.com/images/carousel/sky.jpg",
        },
        {
          src: "https://cdn.vuetifyjs.com/images/carousel/bird.jpg",
        },
        {
          src: "https://cdn.vuetifyjs.com/images/carousel/planet.jpg",
        },
      ],
    };
  },
};
</script>

<style>
.icon-container {
  display: flex;
  justify-content: center;
  margin: 2%;
  border-radius: 1%;
}

.icon {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 2%;
  width: auto;
}

.icon-title {
  font-family: monospace;
  font-size: 25px;
  font-weight: bold;
  color: #333;
  margin-top: 2%;
}

.icon-description {
  font-family: "Times New Roman", Times, serif;
  font-size: 150%;
  color: #212f3d;
  text-align: center;
  margin-top: 5%;
  max-width: 500%;
}
.image-container img {
  width: 400px;
  height: 350px;
  object-fit: cover;
  justify-content: center;
  display: flex;
  border-radius: 20px;
}
</style>
