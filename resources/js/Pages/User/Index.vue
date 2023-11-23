<script setup>
import Layout from "../Layouts/UserLayout.vue";

defineOptions({
  layout: Layout,
});

const municipalityDescription = "The beauty of Province";
const republicAct = "Republic Act of the Philippines";

const items = [
  {
    src: "../images/Cordova-10K.jpg",
  },
  {
    src: "../images/bangbang.jpg",
  },
  {
    src: "../images/solea-mactan27.jpg",
  },
  {
    src: "../images/gilutongan.jpg",
  },
];
</script>
<template>
  <div class="background-container">
    <v-sheet class="image-background">
      <v-carousel cycle height="900" hide-delimiters :show-arrows="false">
        <v-carousel-item v-for="(item, i) in items" :src="item.src" :key="i" cover>
          <v-sheet class="background-overlay"></v-sheet>
          <div class="d-flex justify-center align-center flex-column" style="height: 85%;">
            <h1 class="title">MUNICIPALITY OF CORDOVA</h1>
            <div class="text-paragraph">{{ municipalityDescription }}</div>
            <div class="bottom-text">{{ republicAct }}</div>
          </div>
        </v-carousel-item>
      </v-carousel>
    </v-sheet>
  </div>
  <div class="icon-container">
  <div class="icon" @click="openDialog('Festival')">
    <img src="/images/Cordova-Festival.jpg" width="500" height="320" style="border-radius: 3%" />
    <div class="icon-title">Festival</div>
    <div class="icon-description">laksdjlajsdlkjasljdlkasjdlkajslkdjlaksjdlkajslkdjlasjkdlkas</div>
  </div>
<v-dialog v-model="dialogFestival" scrollable max-width="800">
    <v-card>
      <v-img src="/images/Cordova-Festival.jpg" height="500" style="margin-top: 1%;"></v-img>
      <v-card-title class="headline">Festival</v-card-title>
      <v-card-text>
        <p>asdjasdjasdhadghadvkjadv</p>
      </v-card-text>
      <v-card-actions>
        <v-btn color="primary" @click="dialogFestival = false">Close</v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
  <div class="icon" @click="openDialog('Explore')">
    <img src="/images/Cordova-Map.jpg" width="500" height="320" style="border-radius: 3%" />
    <div class="icon-title">Explore</div>
    <div class="icon-description">laksdjlajsdlkjasljdlkasjdlkajslkdjlaksjdlkajslkdjlasjkdlkas</div>
  </div>
<v-dialog v-model="dialogExplore" scrollable max-width="800">
    <v-card>
      <v-img src="../images/Cordova-Map.jpg" height="500" style="margin-top: 1%;"></v-img>
      <v-card-title class="headline">Explore</v-card-title>
      <v-card-text>
        <p>asdhasfhasdhasdhasdhasd</p>
      </v-card-text>
      <v-card-actions>
        <v-btn color="primary" @click="dialogExplore = false">Close</v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
  <div class="icon" @click="openDialog('Province')">
    <img src="/images/Cordova-Expressway.jpg" width="500" height="320" style="border-radius: 3%" />
    <div class="icon-title">Province</div>
    <div class="icon-description">laksdjlajsdlkjasljdlkasjdlkajslkdjlaksjdlkajslkdjlasjkdlkas</div>
  </div>
<v-dialog v-model="dialogProvince" scrollable max-width="800">
    <v-card>
      <v-img src="../images/Cordova-Expressway.jpg" height="500" style="margin-top: 1%;"></v-img>
      <v-card-title class="headline">Province</v-card-title>
      <v-card-text>
        <p>alksdlkjasdlkjalskjdlkasjd</p>
      </v-card-text>
      <v-card-actions>
        <v-btn color="primary" @click="dialogProvince = false">Close</v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</div>
<div>
    <h2 class="lates" style="justify-content: center; display: flex; font-size: 40px">
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
    <div class="icon" @click="openDialog('Localnews')">
      <img src="/images/Cordova-local-news.jpg" width="350" height="320" style="border-radius: 3%" />
      <div class="icon-title">Local News</div>
      <div class="icon-description">laksdjlajsdlkjasljdl</div>
    </div>
  <v-dialog v-model="dialogLocalnews" scrollable max-width="800">
      <v-card>
        <v-img src="/images/Cordova-local-news.jpg" height="350" style="margin-top: 1%;"></v-img>
        <v-card-title class="headline">Local News</v-card-title>
        <v-card-text>
          <p>asdjasdjasdhad</p>
        </v-card-text>
        <v-card-actions>
          <v-btn color="primary" @click="dialogLocalnews = false">Close</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>

    <div class="icon" @click="openDialog('Events')">
      <img src="/images/Cordova-events.jpg" aspect-ratio="16/9" cover width="350" height="320" style="border-radius: 3%" />
      <div class="icon-title">Events</div>
      <div class="icon-description">laksdjlajsdlkja</div>
    </div>
  <v-dialog v-model="dialogEvents" scrollable max-width="800">
      <v-card>
        <v-img src="../images/Cordova-events.jpg" height="350" style="margin-top: 1%;"></v-img>
        <v-card-title class="headline">Event</v-card-title>
        <v-card-text>
          <p>asdhasfhasdha</p>
        </v-card-text>
        <v-card-actions>
          <v-btn color="primary" @click="dialogEvents = false">Close</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>


    <div class="icon" @click="openDialog('Sports')">
        <img src="/images/Cordova-sports.jpg" width="350" height="320" style="border-radius: 3%" />
        <div class="icon-title">Sports</div>
        <div class="icon-description">laksdjlajsdlk</div>
      </div>
    <v-dialog v-model="dialogSports" scrollable max-width="800">
        <v-card>
          <v-img src="/images/Cordova-sports.jpg" height="500" style="margin-top: 1%;"></v-img>
          <v-card-title class="headline">Sports</v-card-title>
          <v-card-text>
            <p>asdjasdjasdha</p>
          </v-card-text>
          <v-card-actions>
            <v-btn color="primary" @click="dialogSports = false">Close</v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>


      <div class="icon" @click="openDialog('Wellness')">
        <img src="/images/Cordova-health-wellness.jpg" width="350" height="320" style="border-radius: 3%" />
        <div class="icon-title">Health-Wellness</div>
        <div class="icon-description">laksdjlajsdl</div>
      </div>
    <v-dialog v-model="dialogHealthWellness" scrollable max-width="800">
        <v-card>
          <v-img src="../images/Cordova-health-wellness.jpg" height="500" style="margin-top: 1%;"></v-img>
          <v-card-title class="headline">Health-Wellness</v-card-title>
          <v-card-text>
            <p>asdhasfhasdhasdhasdhasd</p>
          </v-card-text>
          <v-card-actions>
            <v-btn color="primary" @click="dialogHealthWellness = false">Close</v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
  </div>
</template>

<script>
export default {
  data() {
    return {
      dialogFestival: false,
      dialogExplore: false,
      dialogProvince: false,
      dialogLocalnews: false,
      dialogEvents: false,
      dialogSports: false,
      dialogHealthWellness: false,
      latestNews: {
        title: "Latest News Title",
        description:
          "This is the latest news in Cordova. It's an example news description.",
        image: "images/buagsong.jpg",
      },
      // ... other data properties
    };
  },
  methods: {
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
    text-shadow: 20px 20px 40px rgba(0, 0, 0, 0.5);
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
    background: rgba(0, 0, 0, 0.5);
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

  .additional-images {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 2% 0;
  }

  .image-row {
    display: flex;
  }

  .image-container {
    margin-right: 20px;
    position: relative;
  }

  .image-container:last-child {
    margin-right: 0;
  }

  .image-container img {
    width: 400px;
    height: 350px;
    object-fit: cover;
    justify-content: center;
    display: flex;
    border-radius: 20px;
  }

.bottom-text {
  animation: floatin 2s ease-in-out forwards;
}
@media only screen and (max-width: 1500px) {
    .title {
        font-size: 200%;
    }

    .lates {
      text-align: center;
    }

    .text-paragraph {
      font-size: 70%;
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

@media only screen and (max-width: 1700px) {
    .title {
      text-align: center;
    }

    .lates {
      text-align: center;
    }

    .text-paragraph {
      font-size: 200%;
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

.headline {
    font-size: 24px;
    font-weight: bold;
  }

  /* Style to make the dialog scrollable */
  .v-dialog--active .v-dialog__content {
    max-height: 70vh; /* Set the maximum height as needed */
    overflow-y: auto;
  }

.icon:hover {
    transform: scale(1.1); /* Increase size on hover */
    transition: transform 0.3s ease; /* Add smooth transition */
  }

.responsive-image {
  max-width: 100%; /* Ensure the image doesn't exceed its container */
  height: auto; /* Maintain the image aspect ratio */
}

.v-card-text p {
    font-size: 17px; /* Adjust the font size as needed */
    color: black; /* Set a readable font color */
    word-spacing: 5px;
    font-weight: 500;
    margin-bottom: 16px; /* Add margin for better spacing */
  }
</style>
