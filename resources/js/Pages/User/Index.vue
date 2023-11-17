<script setup>
import Layout from "../Layouts/UserLayout.vue";

defineOptions({
  layout: Layout,
});

const municipalityDescription = "The beauty of Province";
const republicAct = "Republic Act of the Philippines";

const items = [
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
];
</script>
<template>
  <div class="background-container">
    <v-sheet class="image-background">
      <v-carousel cycle height="900" hide-delimiters :show-arrows="false">
        <v-carousel-item v-for="(item, i) in items" :src="item.src" :key="i" cover>
          <v-sheet class="background-overlay"></v-sheet>
          <div class="d-flex fill-height justify-center align-center flex-column">
            <h1 class="title">MUNICIPALITY OF CORDOVA</h1>
            <div class="text-paragraph">{{ municipalityDescription }}</div>
            <div class="bottom-text">{{ republicAct }}</div>
          </div>
        </v-carousel-item>
      </v-carousel>
    </v-sheet>
  </div>
  <div class="icon-container">
    <div v-for="(item, i) in iconItems" :key="i" class="icon" @click="openDialog(item)">
      <img
        :src="item.src"
        :alt="item.title"
        width="500"
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
  <div>
    <h2 style="justify-content: center; display: flex; font-size: 40px">
      CORDOVA LATEST NEWS
    </h2>
    <v-card>
      <v-img :src="latestNews.image" aspect-ratio="16/9" cover height="500"></v-img>
      <v-card-title style="font-size: 25px; margin: 15px">{{
        latestNews.title
      }}</v-card-title>
      <v-card-text style="font-size: 20px; margin: 15px">{{
        latestNews.description
      }}</v-card-text>
    </v-card>
  </div>
  <div class="icon-container">
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
</template>

<script>
export default {
  data() {
    return {
      dialog: false,
      selectedImage: null,
      selectedImageIndex: -1, // Add the new property here
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
      iconItems: [
        {
          src: "images/Cordova-Festival.jpg",
          title: "Festivals",
          description: "Description for Festivals",
        },
        {
          src: "images/Cordova-Map.jpg",
          title: "Explore",
          description: "Description for Explore",
        },
        {
          src: "images/Cordova-Expressway.jpg",
          title: "Province",
          description: "Description for Province",
        },
      ],
      latestNews: {
        title: "Latest News Title",
        description:
          "This is the latest news in Cordova. It's an example news description.",
        image: "images/buagsong.jpg",
      },
      secondItems: [
        {
          src: "images/Cordova-local-news.jpg",
          title: "Local News",
          description: "Description for Image 1",
        },
        {
          src: "images/Cordova-events.jpg",
          title: "Events",
          description: "Description for Image 2",
        },
        {
          src: "images/Cordova-sports.jpg",
          title: "Sports",
          description: "Description for Image 3",
        },
        {
          src: "images/Cordova-health-wellness.jpg",
          title: "Health & Wellness",
          description: "Description for Image 4",
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

<style scoped>
.title {
  font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
  font-weight: 30;
  color: white;
  font-size: 400%;
  opacity: 0;
  animation: floatin 1s ease-in-out forwards;
  white-space: pre;
  letter-spacing: 10px;
  text-shadow: 20px 20px 40px rgba(0, 0, 0, 0.7);
  z-index: 1;
}

.text-paragraph {
  font-family: monospace;
  font-size: 200%;
  font-weight: 30;
  color: white;
  display: flex;
  text-align: justify;
  opacity: 0;
  letter-spacing: 5px;
  animation: floatin 1s ease-in-out forwards;
  text-shadow: 20px 20px 40px rgba(0, 0, 0, 0.5);
}

.image-background {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.background-container {
  position: relative;
}

.background-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
  backdrop-filter: blur(5px);
}

.bottom-text {
  font-family: monospace;
  font-size: 130%;
  font-weight: 300;
  color: white;
  text-align: center;
  position: absolute;
  bottom: 10px;
  width: 100%;
  z-index: 1;
}

.bottom-text {
  animation: floatin 2s ease-in-out forwards;
}

@media only screen and (max-width: 1000px) {
  .title {
    font-size: 300%;
  }

  .text-paragraph {
    font-size: 100%;
  }

  .bottom-text {
    font-size: 80%;
  }
}
@media only screen and (max-width: 900px) {
  .title {
    font-size: 200%;
  }

  .text-paragraph {
    font-size: 100%;
  }

  .bottom-text {
    font-size: 80%;
  }
  .icon-container {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .icon {
    margin-bottom: 20px; /* Adjust spacing between items */
  }
}
@keyframes floatin {
  0% {
    opacity: 0;
    transform: translateY(80px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.responsive-image {
  max-width: 100%; /* Ensure the image doesn't exceed its container */
  height: auto; /* Maintain the image aspect ratio */
}
</style>
