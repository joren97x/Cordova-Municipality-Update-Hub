<script setup>
	import Layout from "../Layouts/UserLayout.vue";
	defineOptions({layout: Layout});
	defineProps({
		barangay: Object,
		SKofficials: Object,
		BOofficials: Object,
	});
</script>

<template>
	<v-parallax :src="`/images/${barangay.image}`" height="480">
		<div class="d-flex flex-column fill-height justify-center align-center text-white">
			<h1 class="text-h1 font-weight-thin mb-4">
				{{ barangay.name }}
			</h1>
		</div>
	</v-parallax>
	
	<div class="my-5">
		<p class="text-center text-h4">About {{ barangay.name }} </p>
		<p class="text-center text-h6">{{ barangay.about }}</p>
	</div>
    <v-divider class="my-6" />
	<v-row class="my-4">
		<v-col cols="6">
			<p class="text-center text-h4">Mission</p>
			<p class="text-center text-h6">{{ barangay.mission }}</p>
		</v-col>
        <v-col cols="6">
            <v-img src="https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg"></v-img>
        </v-col>
        <v-col cols="6">
            <v-img src="https://img.freepik.com/premium-photo/starry-night-lake_68067-618.jpg"></v-img>
        </v-col>
		<v-col cols="6">
			<p class="text-center text-h4">Vision</p>
			<p class="text-center text-h6">{{ barangay.vision }}</p>
		</v-col>
	</v-row>
    <v-divider class="my-5" />
		<p class="text-center text-h4">Barangay & SK Officials</p>
		<v-row>
			<v-col cols="6">
				<v-slide-group class="pa-4" show-arrows>
					<v-slide-group-item v-for="n in 15" :key="n">
						<v-card color="grey-lighten-1" :class="['ma-4', selectedClass]" height="200" width="150">
							<div style="position: absolute; bottom: 0;" class="text-center">
								<p>John Doe {{ n }} </p>
								<v-divider class="ms-2"></v-divider>
								<p class="ms-3">Punong barangay</p>
							</div>
						</v-card>
					</v-slide-group-item>
				</v-slide-group>
			</v-col>
			<v-col cols="6">
				<v-slide-group class="pa-4" show-arrows>
					<v-slide-group-item v-for="n in 15" :key="n">
						<v-card color="grey-lighten-1" :class="['ma-4', selectedClass]" height="200" width="150">
							<div style="position: absolute; bottom: 0;" class="text-center">
								<p>John Doe {{ n }} </p>
								<v-divider class="ms-2"></v-divider>
								<p class="ms-3">Punong barangay</p>
							</div>
						</v-card>
					</v-slide-group-item>
				</v-slide-group>
			</v-col>
		</v-row>

        <v-divider class="my-5"/>

        <div class="text-center">
            <p class="text-h4">Feast Day</p>
            <p>{{ barangay.feastday }} date picker here!</p>
        </div>

        <v-divider class="my-5"/>

        <p class="text-center text-h4">IMPORTANT ANNOUNCEMENTS</p>
        <v-row style="margin-bottom: 3%;">
            <v-col cols="12" lg="3" md="6" sm="6">
                <Link>
                    <v-card>
                        <v-img src="/images/Cordova-local-news.jpg" cover height="250"></v-img>
                        <v-card-text>
                            <p class="text-h5">Local news</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, provident!</p>
                        </v-card-text>
                        <v-card-actions>
                            <v-btn>See more</v-btn>
                        </v-card-actions>
                    </v-card>
                </Link>
            </v-col>


            <v-col cols="12" lg="3" md="6" sm="6">
                <Link :href="`/${barangay.name}/events`">
                    <v-card>
                      <v-img src="/images/Cordova-events.jpg" cover height="250"></v-img>
                      <v-card-text>
                        <p class="text-h5">Events</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, provident!</p>
                    </v-card-text>
                    <v-card-actions>
                        <v-btn>See more</v-btn>
                    </v-card-actions>
                  </v-card>
                </Link>
            </v-col>

            <v-col cols="12" lg="3" md="6" sm="6">
                <Link>
                    <v-card>
                        <v-img src="/images/Cordova-sports.jpg" cover height="250"></v-img>
                        <v-card-text>
                            <p class="text-h5">Sports</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, provident!</p>
                        </v-card-text>
                        <v-card-actions>
                            <v-btn>See more</v-btn>
                        </v-card-actions>
                    </v-card>
                </Link>
            </v-col>

            <v-col cols="12" lg="3" md="6" sm="6">
                <Link>
                    <v-card>
                        <v-img src="/images/Cordova-health-wellness.jpg" cover height="250"></v-img>
                        <v-card-text>
                            <p class="text-h5">Heath and wellness</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, provident!</p>
                        </v-card-text>
                        <v-card-actions>
                            <v-btn>See more</v-btn>
                        </v-card-actions>
                    </v-card>
                </Link>
            </v-col>

        </v-row>

</template>
<!-- 
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

</style> -->
