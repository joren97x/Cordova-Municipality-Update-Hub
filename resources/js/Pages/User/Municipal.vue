<script setup>
import Layout from "../Layouts/UserLayout.vue";

defineOptions({
  layout: Layout,
});
</script>

<template>
  <div>
    <div class="image-overlay">
      <img
        src="/images/cordova-church.jpg"
        alt="Background Image"
        class="background-image"
      />
      <div class="overlay-text">OUR HISTORY</div>
    </div>
    <h1 class="history-title">The History of Cordova Municipality</h1>
    <hr width="50%" style="margin-left: 25%" />
    <div class="history-text">
      <p style="margin-bottom: 7px">
        Cordova is a picturesque municipality located on Mactan Island in the Philippines.
        Its history is deeply intertwined with the rich heritage of Mactan and the broader
        story of the nation. Before the arrival of Spanish colonizers in the 16th century,
        Mactan Island, including Cordova, was home to Cebuano-speaking indigenous people.
        It is renowned for the Battle of Mactan in
      </p>
      <p>
        1521 when Lapu-Lapu, the local chieftain, successfully resisted Ferdinand
        Magellan's attempt to conquer the island. During the Spanish colonization,
        Cordova, like many other places in the Philippines, was brought under Spanish
        rule. It underwent significant changes as the Spaniards established settlements
        and introduced Christianity. The municipality has since evolved, reflecting a
        blend of indigenous roots and influences from colonial history. Today, Cordova
        stands as a testament to the enduring cultural heritage of the Philippines.
      </p>
      <hr style="margin-top: 1%" />
    </div>
  </div>
  <div style="display: flex; flex-direction: column; align-items: center">
    <v-carousel hide-delimiters v-model="carouselIndex" style="width: 100%;%">
      <v-carousel-item
        v-for="(item, i) in items"
        :key="i"
        :src="item.src"
        cover
      ></v-carousel-item>
    </v-carousel>
    <p
      style="
        text-align: center;
        font-size: 25px;
        max-width: 80%;
        margin-top: 2%;
        margin-bottom: 5%;
      "
    >
      {{ carouselText }}
    </p>
  </div>
  <hr />
  <div style="display: flex; justify-content: space-between">
    <div class="text-container">
      <h1 style="margin-left: 25%">Cordova Hymn</h1>
      <pre class="lyrics">
            Cordova Padayon
            Greg Jumao-as

            Dapit nga bililhon / Mutyang masilakon
            Yutang malambuon / Kinutay ang baybayon

            Imong kadagatan / Duyan sa pagpangga
            Imong kayutaan / Lantay sa pagmaya

            Luha ug talidhay / Kasakit / Kalipay
            Kanimo ginahalad / Kini among saad

            Langit panganuron / Kanamo naglandong
            Sa kagabhion / Manambo ang mga bitoon

            Cordova O Cordova / Kaliwat Ko / Kaliwat Mo
            Damgo Mo / Damgo Ko / Cordova O Cordova

            Mga tipaka sa imong silaw
            Napulo'g tulo ka mga gilaw
            Nag-ambahan paghatag kahayag
            Sa among kaugmaon nagdan-ag

            San Miguel / Gabi / Ibabao
            Pilipog / Cogon / Day-as / Alegria
            Poblacion / Catarman / Bang-bang / Dapitan
            Buagsong / ug Isla Gilutongan

            Cordova O Cordova / Kaliwat Ko / Kaliwat Mo
            Damgo Mo / Damgo Ko / Cordova O Cordova

            Cordova O Cordova / Kaliwat Ko / Kaliwat Mo
            Damgo Mo / Damgo Ko / Cordova O Cordova

            Padayon / Padayon / Padayon
          </pre
      >
    </div>
    <div class="image-container">
      <img src="/images/Cordova-Hymn.jpg" alt="Image" class="image" />
    </div>
  </div>
  <div class="mission-vision-container">
    <div class="mission-container">
      <h1>Mission</h1>
      unsa diay nakalimot ko or wala gyud ko nakahibaw siguro man ahahhahahahhahaha
    </div>
    <div class="vision-container">
      <h1>Vision</h1>
      sure oipp kakuyaw ba ani oipp ahhahhahahhahhahaha
    </div>
  </div>
  <div style="margin-bottom: 5%; margin-top: 3%; width: 80%; margin-left: 10%">
    <v-table height="400px">
      <thead style="font-size: 30px">
        <tr style="background-color: #cfd2d3">
          <th style="color: black">DEPARTMENT/OFFICES</th>
          <th style="color: black; text-align: center">LOCATION</th>
          <th style="color: black; text-align: center">CONTACT NO.</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in offices" :key="item.name" style="font-size: 20px">
          <td>{{ item.departmenttexts }}</td>
          <td style="text-align: center">{{ item.location }}</td>
          <td style="text-align: center">{{ item.contact }}</td>
        </tr>
      </tbody>
    </v-table>
  </div>
  <div style="margin-bottom: 5%; margin-top: 3%; width: 80%; margin-left: 10%">
    <v-table height="400px">
      <thead style="font-size: 30px">
        <tr style="background-color: #cfd2d3">
          <th style="color: black">SCHOOL NAME</th>
          <th class="text-center" style="color: black">SCHOOL LEVEL</th>
          <th style="color: black; text-align: center">ADDRESS</th>
          <th style="color: black; text-align: center">CONTACT NO.</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in schools" :key="item.name" style="font-size: 20px">
          <td>{{ item.schoolname }}</td>
          <td class="text-center">{{ item.schlvl }}</td>
          <td style="text-align: center">{{ item.address }}</td>
          <td style="text-align: center">{{ item.contact }}</td>
        </tr>
      </tbody>
    </v-table>
  </div>
</template>

<style scoped>
.image-overlay {
  position: relative;
}

.background-image {
  width: 100%;
  height: 897px;
}

.overlay-text {
  font-family: "Arial Narrow";
  font-weight: bold;
  letter-spacing: 5px;
  word-spacing: 5px;
  position: absolute;
  bottom: 10px;
  background-color: rgba(0, 0, 0, 0.5);
  color: #fff;
  font-size: 60px;
  padding: 10px;
  border-radius: 5px;
  width: 100%;
}

.image-overlay::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.4);
}

.history-title {
  font-size: 50px;
  font-weight: bold;
  text-align: center;
  margin-top: 5%;
}

.history-text {
  font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
  font-size: 25px;
  font-weight: 300;
  text-align: justify;
  margin: 20px;
  word-spacing: 5%;
  word-wrap: pre;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 5%;
}
.image-container {
  flex: 1;
  margin-right: 9%;
}

.image {
  width: 100%;
  height: 100%;
}

.text-container {
  flex: 1;
  margin: 0 2%;
}

.mission-vision-container {
  display: flex;
  justify-content: space-between;
  margin: 3% 0;
  text-align: center;
}

.mission-container,
.vision-container {
  flex: 1;
}

.lyrics {
  font-family: "Arial", sans-serif;
  font-size: 20px;
  white-space: pre-wrap;
  margin-left: 25%;
}
</style>

<script>
export default {
  data() {
    return {
      items: [
        {
          src: "/images/Old-Cordova-Hall.jpg",
          text: "Text or paragraph for the first image",
        },
        {
          src: "/images/Cordova-Fisherfolk.jpg",
          text: "Text or paragraph for the second image",
        },
        {
          src: "/images/Events-festivals.jpg",
          text: "Text or paragraph for the third image",
        },
      ],
      carouselIndex: 0,
      offices: [
        {
          departmenttexts: "Frozen Yogurt",
          location: 159,
          contact: 482,
        },
        {
          departmenttexts: "Ice cream sandwich",
          location: 237,
          contact: 482,
        },
        {
          departmenttexts: "Eclair",
          location: 262,
          contact: 482,
        },
        {
          departmenttexts: "Cupcake",
          location: 305,
          contact: 482,
        },
        {
          departmenttexts: "Gingerbread",
          location: 356,
          contact: 482,
        },
        {
          departmenttexts: "Jelly bean",
          location: 375,
          contact: 482,
        },
        {
          departmenttexts: "Lollipop",
          location: 392,
          contact: 482,
        },
        {
          departmenttexts: "Honeycomb",
          location: 408,
          contact: 482,
        },
        {
          departmenttexts: "Donut",
          location: 452,
          contact: 482,
        },
        {
          departmenttexts: "KitKat",
          location: 518,
          contact: 482,
        },
      ],



      schools: [
        {
          schoolname: "Cordova Central School",
          schlvl: "Elementary (Public)",
          address: "Poblacion Cordova Cebu",
          contact: 482,
        },
        {
          schoolname: "Day-as Elementary School",
          schlvl: "Elementary (Public)",
          address: "Day-as Cordova Cebu",
          contact: 482,
        },
        {
          schoolname: "Gabi Elementary School",
          schlvl: "Elementary (Public)",
          address: "Gabi Cordova Cebu",
          contact: 482,
        },
        {
            schoolname: "Alegria Elementary School",
            schlvl: "Elementary (Public)",
            address: "Alegria Cordova Cebu",
            contact: "Public"
        },
        {
            schoolname: "Bang-Bang Elementary School",
            schlvl: "Elementary (Public)",
            address: "Bang-Bang Cordova Cebu",
            contact: "Public"
        },
        {
            schoolname: "Buagsong Elementary School",
            schlvl: "Elementary (Public)",
            address: "Buagsong Cordova Cebu",
            contact: "Public"
        },
        {
            schoolname: "Pilipog Elementary School",
            schlvl: "Elementary (Public)",
            address: "Pilipog Cordova Cebu",
            contact: "Public"
        },
        {
            schoolname: "Cogon Elementary School",
            schlvl: "Elementary (Public)",
            address: "Cogon Cordova Cebu",
            contact: "Public"
        },
        {
            schoolname: "Nobble Minds Christian Academy",
            schlvl: "Elementary (Private)",
            address: "San Miguel Cordova Cebu",
            contact: "Private"
        },
        {
            schoolname: "Cordova Korea Friendship School",
            schlvl: "Elementary (Private)",
            address: "Alegria Cordova Cebu",
            contact: "Private"
        },
        {
            schoolname: "Benthel Asia School of Technology",
            schlvl: "Elementary (Private)",
            address: "Mahayahay, Gabi Cordova Cebu",
            contact: "Private"
        },
        {
            schoolname: "San Roque College de Cebu",
            schlvl: "Elementary",
            address: "Gabi Cordova Cebu",
            contact: "Private"
        },
        {
            schoolname: "Gilutongan Integrated School",
            schlvl: "Elementary (Public)",
            address: "Gilutongan Cordova Cebu",
            contact: "Public"
        },
        {
            schoolname: "CORDOVA CATHOLIC COOPERATIVE SCHOOL",
            schlvl: "Elementary (Private)",
            address: "Poblacion Cordova Cebu",
            contact: "Private"
        },
        {
            schoolname: "Cordova National High School",
            schlvl: "Elementary (Public)",
            address: "Day-As Cordova Cebu",
            contact: "Public"
        },
        {
            schoolname: "Pilipog Night High School",
            schlvl: "Elementary (Public)",
            address: "Pilipog Cordova Cebu",
            contact: "Public"
        },
        {
            schoolname: "Benthel Asia School of Technology",
            schlvl: "Elementary (Private)",
            address: "Mahayahay, Gabi Cordova Cebu",
            contact: "Private"
        },
        {
            schoolname: "Nobble Minds Christian Academy",
            schlvl: "Elementary (Private)",
            address: "San Miguel Cordova Cebu",
            contact: "Private"
        },
        {
            schoolname: "San Roque College de Cebu",
            schlvl: "Elementary (Private)",
            address: "Gabi Cordova Cebu",
            contact: "Private"
        },
        {
            schoolname: "Gilutongan Integrated School",
            schlvl: "Elementary (Public)",
            address: "Gilutongan Cordova Cebu",
            contact: "Public"
        },
        {
            schoolname: "Cordova Public College",
            schlvl: "Elementary (Public)",
            address: "Gabi Cordova Cebu",
            contact: "Public"
        },
      ],
    };
  },
  computed: {
    carouselText() {
      return this.items[this.carouselIndex].text;
    },
  },
};
</script>
