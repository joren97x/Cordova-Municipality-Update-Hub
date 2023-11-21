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
  <div class="container">
    <img
      :src="`../images/${barangay.image}`"
      alt=""
      srcset=""
      width="500"
      class="image"
    />
    <h1 class="heading">{{ barangay.name }}</h1>
  </div>
  <div class="about">
    <h2>About</h2>
    <p>{{ barangay.about }}</p>
  </div>
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
  <div style="text-align: center; margin-top: 5%">
    <h2 style="font-size: 50px">Barangay & SK Officials</h2>
    <div style="display: flex; justify-content: space-between; margin-top: 20px">
        <v-carousel hide-delimiters style="width: 70%; margin-left: 10%">
          <v-carousel-item
            v-for="(item, i) in items"
            :key="i"
            :src="item.src"
            cover
          ></v-carousel-item>
        </v-carousel>
        <v-carousel hide-delimiters style="width: 70%; margin-right: 10%; margin-left:10%;">
          <v-carousel-item
            v-for="(item, i) in items"
            :key="i"
            :src="item.src"
            cover
          ></v-carousel-item>
        </v-carousel>
</div>
<div style="text-align: center; margin-top: 5%;">
    <h2 style="font-size: 50px">Feast Day</h2>
    <p>{{ barangay.feastday }}</p>
  </div>
</div>
      <div style="text-align: center; margin-top: 10px;">
        <h1>IMPORTANT ANNOUNCEMENT</h1>
        <!-- <v-card :key="BOofficial.id" v-for="BOofficial in BOofficials">
          <v-img :src="`../images/${BOofficial.image}`"></v-img>
          {{ BOofficial.image }}
        </v-card> -->
        <div class="icon-container ml-0">
            <div v-for="(item, i) in secondItems" :key="i" class="icon" @click="openDialog(item)">
              <img
                :src="item.src"
                :alt="item.title"
                width="400"
                height="320"
                style="border-radius: 3%"
              />
              <div class="icon-title">{{ item.title }}</div>
        </div>
          </div>
          <v-dialog v-model="dialog" width="auto">
            <v-card>
              <v-card-text>
                <img v-if="selectedImage" :src="selectedImage.src" :alt="selectedImage.title" />
                <p v-if="selectedImage && selectedImage.title">{{ selectedImage.title }}</p>
                <p v-if="selectedImage && selectedImage.description">
                  {{ selectedImage.description }}
                </p>
              </v-card-text>
              <v-card-actions>
                <v-btn color="primary" block @click="closeDialog">Close Dialog</v-btn>
              </v-card-actions>
            </v-card>
          </v-dialog>
      </div>
</template>

<script>
export default {
  data() {
    return {
      dialog: false,
      selectedImage: null,
      selectedImageIndex: -1,
      secondItems: [
        {
          src: "../images/Cordova-local-news.jpg",
          title: "Local News",
          description: "Description for Image 1",
        },
        {
          src: "../images/Cordova-events.jpg",
          title: "Events",
          description: "Description for Image 2",
        },
        {
          src: "../images/Cordova-sports.jpg",
          title: "Sports",
          description: "Description for Image 3",
        },
        {
          src: "../images/Cordova-health-wellness.jpg",
          title: "Health & Wellness",
          description: "Description for Image 4",
        },
      ],
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
  methods: {
    openDialog(item) {
      this.selectedImage = item;
      this.dialog = true;
    },
    closeDialog() {
      this.dialog = false;
      this.selectedImage = null;
    },
  },
};

</script>

<style>
.container {
  display: flex;
  margin-top: 3.5%;
}

.image {
  margin-right: 15%; /* Adjust the margin as needed */
  margin-left: 20%;
  border: 5px solid black;
  border-radius: 3%;
}

h1 {
    font-size: 75px;
    margin-top: 4.5%;
}


.about {
    margin-top: 5%;
    margin-bottom: 2.5%;
    text-align: center;
}

.about h2 {
  font-size: 48px;
  margin-bottom: 10px;
}

.about p {
  font-size: 25px;
  line-height: 1.6;
}

@media only screen and (max-width: 1000px) {
  .icon {
    flex-direction: column;
    align-items: center;
    margin-left: 20%;
  }

  .image {
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 1%; /* Adjust the margin as needed */
  }

  .icon-container {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
}
@media only screen and (max-width: 1700px) {
    .container {
      flex-direction: column;
      align-items: center;
    }

    .image {
      margin-left: 0;
      margin-right: 0;
      margin-bottom: 1%; /* Adjust the margin as needed */
    }

    .icon-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  }
.icon-container {
    display: flex;
    justify-content: center;
    margin: 2%;
    border-radius: 1%;
  }

  .icon {
    flex-direction: column;
    margin: 2%;
    width: auto;
  }

  .icon-title {
    font-family: monospace;
    font-size: 240%;
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

  .latest-news-container {
    text-align: center;
    padding: 5%;
  }

  .latest-news-title {
    font-size: 20%;
    margin-bottom: 20px;
  }

  .latest-news-card {
    max-width: 200%;
    margin: 0 auto;
    border-radius: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .latest-news-image {
    border-top-left-radius: 5%;
    border-top-right-radius: 5%;
  }

</style>
