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
        </div>
        <v-row style="margin-bottom: 3%;">
            <v-col cols="12" lg="3" md="6" sm="6">
                <v-card @click="dialogLocalnews = true">
                    <v-img src="/images/Cordova-local-news.jpg"></v-img>
                    <v-card-text style="font-size: 50px; font-weight: bold; padding-bottom: 11px;" class="text-center">Local News</v-card-text>
                    <v-card-text style="font-family: 'Times New Roman', Times, serif; font-size: 22px; font-weight: lighter;">dssadsd</v-card-text>
                </v-card>
            </v-col>

            <v-dialog v-model="dialogLocalnews" scrollable max-width="800">
                <v-card>
                  <v-img src="/images/Cordova-local-news.jpg" height="500" style="margin-top: 1%;"></v-img>
                  <v-card-title style="font-size: 30px; font-weight: bold;" class="text-center">Local News</v-card-title>
                  <v-card-text>
                    <p style="font-family: 'Times New Roman', Times, serif; font-size: 22px; font-weight: lighter;">asdjasdjasdhad</p>
                  </v-card-text>
                  <v-card-actions>
                    <v-btn color="primary" @click="dialogLocalnews = false">Close</v-btn>
                  </v-card-actions>
                </v-card>
              </v-dialog>


            <v-col cols="12" lg="3" md="6" sm="6">
                <v-card @click="dialogEvents = true">
                    <v-img src="/images/Cordova-events.jpg"></v-img>
                    <v-card-text style="font-size: 50px; font-weight: bold;" class="text-center">Events</v-card-text>
                    <v-card-text style="font-family: 'Times New Roman', Times, serif; font-size: 22px; font-weight: lighter;">dssadsd</v-card-text>
                </v-card>
            </v-col>

            <v-dialog v-model="dialogEvents" scrollable max-width="800">
                <v-card>
                  <v-img src="../images/Cordova-events.jpg" height="500" style="margin-top: 1%;"></v-img>
                  <v-card-title style="font-size: 50px; font-weight: bold;" class="text-center">Events</v-card-title>
                  <v-card-text>
                    <p style="font-family: 'Times New Roman', Times, serif; font-size: 22px; font-weight: lighter;">asdhasfhasdha</p>
                  </v-card-text>
                  <v-card-actions>
                    <v-btn color="primary" @click="dialogEvents = false">Close</v-btn>
                  </v-card-actions>
                </v-card>
              </v-dialog>

            <v-col cols="12" lg="3" md="6" sm="6">
                <v-card @click="dialogSports = true">
                    <v-img src="/images/Cordova-sports.jpg"></v-img>
                    <v-card-text style="font-size: 50px; font-weight: bold;" class="text-center">Sports</v-card-text>
                    <v-card-text style="font-family: 'Times New Roman', Times, serif; font-size: 22px; font-weight: lighter;">dssadsd</v-card-text>
                </v-card>
            </v-col>

            <v-dialog v-model="dialogSports" scrollable max-width="800">
                <v-card>
                  <v-img src="/images/Cordova-sports.jpg" height="500" style="margin-top: 1%;"></v-img>
                  <v-card-title style="font-size: 50px; font-weight: bold;" class="text-center">Sports</v-card-title>
                  <v-card-text>
                    <p style="font-family: 'Times New Roman', Times, serif; font-size: 22px; font-weight: lighter;">asdjasdjasdha</p>
                  </v-card-text>
                  <v-card-actions>
                    <v-btn color="primary" @click="dialogSports = false">Close</v-btn>
                  </v-card-actions>
                </v-card>
              </v-dialog>

            <v-col cols="12" lg="3" md="6" sm="6">
                <v-card @click="dialogHealthWellness = true">
                    <v-img src="/images/Cordova-health-wellness.jpg"></v-img>
                    <v-card-text style="font-size: 40px; font-weight: bold; padding-bottom: 47px" class="text-center">Health-Wellness</v-card-text>
                    <v-card-text style="font-family: 'Times New Roman', Times, serif; font-size: 22px; font-weight: lighter;">dssadsd</v-card-text>
                </v-card>
            </v-col>

            <v-dialog v-model="dialogHealthWellness" scrollable max-width="800">
                <v-card>
                  <v-img src="../images/Cordova-health-wellness.jpg" height="500" style="margin-top: 1%;"></v-img>
                  <v-card-title style="font-size: 40px; font-weight: bold;" class="text-center">Health-Wellness</v-card-title>
                  <v-card-text>
                    <p style="font-family: 'Times New Roman', Times, serif; font-size: 22px; font-weight: lighter;">asdhasfhasdhasdhasdhasd</p>
                  </v-card-text>
                  <v-card-actions>
                    <v-btn color="primary" @click="dialogHealthWellness = false">Close</v-btn>
                  </v-card-actions>
                </v-card>
              </v-dialog>

        </v-row>

</template>

<script>
export default {
  data() {
    return {
      dialog: false,
      selectedImage: null,
      selectedImageIndex: -1,
      dialogFestival: false,
      dialogExplore: false,
      dialogProvince: false,
      dialogLocalnews: false,
      dialogEvents: false,
      dialogSports: false,
      dialogHealthWellness: false,
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
    openDialog(type) {
      if (type === 'Festival') {
        this.dialogFestival = true;
      } else if (type === 'Explore') {
        this.dialogExplore = true;
      } else if (type === 'Province') {
        this.dialogProvince = true;
      } else if (type === 'Localnews') {
        this.dialogLocalnews = true;
      } else if (type === 'Events') {
        this.dialogEvents = true;
      } else if (type === 'Sports') {
        this.dialogSports = true;
      } else if (type === 'Wellness') {
        this.dialogHealthWellness = true;
      }
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
    background-color: #f7f9f9;
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
    font-size: 250%;
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
