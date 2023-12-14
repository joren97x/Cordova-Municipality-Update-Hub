<script setup>
	import Layout from "../Layouts/UserLayout.vue";

	defineOptions({
		layout: Layout,
	})

      const offices = [
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
      ]

      const schools = [
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
      ]
</script>

<template>
  	<v-parallax :src="`/images/cordova-church.jpg`" height="480">
        <div class="overlay"></div>

		<div class="d-flex flex-column fill-height justify-center align-center text-white">
			<h1 class="text-h1 font-weight-thin mb-4" style="z-index: 10;">
				OUR HISTORY
			</h1>
		</div>
	</v-parallax>
    <!-- <div class="image-overlay">
      <img
        src="/images/cordova-church.jpg"
        alt="Background Image"
        class="background-image"
      />
      <div class="overlay-text">OUR HISTORY</div>
    </div> -->
    <p class="text-h3 text-start ma-4">The History of Cordova Municipality</p>
	<v-divider class="my-5" />
    <v-container>
		<v-row>
			<v-col cols="6">
				<p class="ma-5 text-h5">
					Cordova is a picturesque municipality located on Mactan Island in the Philippines.
					Its history is deeply intertwined with the rich heritage of Mactan and the broader
					story of the nation. Before the arrival of Spanish colonizers in the 16th century,
					Mactan Island, including Cordova, was home to Cebuano-speaking indigenous people.
					It is renowned for the Battle of Mactan in
				</p>
			</v-col>
			<v-col cols="6">
				<v-parallax src="https://cdn.vuetifyjs.com/docs/images/cards/purple-flowers.jpg" height="350" cover></v-parallax>
			</v-col>
			<v-col cols="6">
				<v-parallax src="https://cdn.vuetifyjs.com/docs/images/cards/purple-flowers.jpg" height="400" cover></v-parallax>
			</v-col>
			<v-col cols="6">
				<p class="ma-3 text-h5">
					1521 when Lapu-Lapu, the local chieftain, successfully resisted Ferdinand
					Magellan's attempt to conquer the island. During the Spanish colonization,
					Cordova, like many other places in the Philippines, was brought under Spanish
					rule. It underwent significant changes as the Spaniards established settlements
					and introduced Christianity. The municipality has since evolved, reflecting a
					blend of indigenous roots and influences from colonial history. Today, Cordova
					stands as a testament to the enduring cultural heritage of the Philippines.
				</p>
			</v-col>
		</v-row>
	</v-container>
	<v-divider class="my-5" />
	<p class="text-h3 text-start ma-3">Lorem ipsum or some shit</p>
	<v-carousel cycle show-arrows="hover" hide-delimiter-background>
		<v-carousel-item src="https://cdn.vuetifyjs.com/images/cards/docks.jpg" cover></v-carousel-item>
		<v-carousel-item src="https://cdn.vuetifyjs.com/images/cards/hotel.jpg" cover></v-carousel-item>
		<v-carousel-item src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg" cover></v-carousel-item>
		<v-carousel-item src="https://cdn.vuetifyjs.com/images/cards/docks.jpg" cover></v-carousel-item>
		<v-carousel-item src="https://cdn.vuetifyjs.com/images/cards/hotel.jpg" cover></v-carousel-item>
		<v-carousel-item src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg" cover></v-carousel-item>
	</v-carousel>

	<v-container>
		<p class="text-h3 text-center">Cordova hymm</p>
		<v-divider class="my-5" />
		<v-row>
			<v-col cols="5">
				<pre class="text-h6">
					<strong class="text-h4">Cordova Padayon</strong>
					<i>By - Greg Jumao-as</i>

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
				</pre>
			</v-col>
			<v-col cols="7">
				<v-img src="https://cdn.vuetifyjs.com/images/cards/docks.jpg" cover class="ms-10" width="80%"></v-img>
				<v-img src="https://cdn.vuetifyjs.com/images/cards/hotel.jpg" cover style="margin-left: 20%;" class="mt-6"></v-img>
				<v-img src="https://cdn.vuetifyjs.com/images/cards/docks.jpg" cover class="ms-16 mt-5" height="300" width="80%"></v-img>
			</v-col>
		</v-row>
	</v-container>

  <!-- <div style="display: flex; justify-content: space-between">
    <div class="text-container">
      <h1 style="margin-left: 25%">Cordova Hymn</h1>
    </div>
    <div class="image-container">
      <img src="/images/Cordova-Hymn.jpg" alt="Image" class="image" />
    </div>
  </div> -->
  <v-divider class="my-6" />
  <v-container>
		<v-row>
			<v-col cols="6">
				<p class="text-h4">Mission</p>
				<v-divider/>
				<p class="text-h6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos laborum labore veritatis! 
					Ipsa dignissimos totam laudantium quam quasi incidunt ut minima 
					labore omnis fugiat dolorem soluta, vitae accusamus cupiditate animi!
				</p>
			</v-col>
			<v-col cols="6">
				<p class="text-h4">Vision</p>
				<v-divider/>
				<p class="text-h6">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
					Nisi nostrum dignissimos sint odit quibusdam quas
					accusantium molestiae! Dolorum, animi sint odio provident 
					ipsum perspiciatis corporis!
				</p>
			</v-col>
		</v-row>
  	</v-container>
	<v-divider class="my-5" />
    <v-container>
		<p class="text-center text-h4 bg-grey-lighten-2">Table title</p>
		<v-table height="400px" hover>
			<thead>
				<tr>
					<th>DEPARTMENT/OFFICES</th>
					<th>LOCATION</th>
					<th>CONTACT NO.</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="item in offices" :key="item.name" style="font-size: 20px">
					<td>{{ item.departmenttexts }}</td>
					<td>{{ item.location }}</td>
					<td>{{ item.contact }}</td>
				</tr>
			</tbody>
		</v-table>
	</v-container>
    <v-container>
		<p class="text-center text-h4 bg-grey-lighten-2">Table title</p>
		<v-table height="400px" hover>
			<thead>
				<tr>
					<th>SCHOOL NAME</th>
					<th class="text-center">SCHOOL LEVEL</th>
					<th>ADDRESS</th>
					<th>CONTACT NO.</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="item in schools" :key="item.name" style="font-size: 20px">
					<td>{{ item.schoolname }}</td>
					<td class="text-center">{{ item.schlvl }}</td>
					<td>{{ item.address }}</td>
					<td>{{ item.contact }}</td>
				</tr>
			</tbody>
		</v-table>
	</v-container>
</template>

<style scoped>
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Adjust the alpha value to change the darkness */
    z-index: 0;
}
</style>
<!-- 
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
</style> -->