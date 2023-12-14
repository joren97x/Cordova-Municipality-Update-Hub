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
	<v-container>
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
    </v-container>
    <v-divider class="my-5" />
		<p class="text-center text-h4">Barangay & SK Officials</p>
		<v-row>
			<v-col cols="6">
				<v-slide-group class="pa-4" show-arrows>
					<v-slide-group-item v-for="n in 15" :key="n">
						<v-card color="red-lighten-1" class="ma-4" height="200" width="150">
                            <v-img cover height="100%" src="https://mediaproxy.salon.com/width/1200/https://media.salon.com/2019/10/breaking-bad-still01.jpg"></v-img>
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
						<v-card color="red-lighten-1" class="ma-4" height="200" width="150">
                            <v-img cover height="100%" src="https://ew.com/thmb/31vM3UjJVzh7dSpAL4SHzqijDWA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/breaking_bad_lj_ep207_300-2000-c624731d0b6a441f9ac85d24a4aad4f0.jpg"></v-img>
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

        <v-container>
            <p class="text-center text-h4">IMPORTANT ANNOUNCEMENTS</p>
            <v-row style="margin-bottom: 3%;">
                <v-col cols="12" lg="3" md="6" sm="6">
                    <Link :href="`/${barangay.name}/local-news`">
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
                    <Link :href="`/${barangay.name}/sports`">
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
                    <Link :href="`/${barangay.name}/health-and-wellness`">
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
        </v-container>

        <v-divider class="my-5"/>

<v-row class="mb-6">
    <v-col cols="12">
        <p class="text-center text-h5">Feast day</p>
    </v-col>
    <v-col cols="12" class="justify-center d-flex">
        <br>
        <v-date-picker
            view-mode
            hide-header
            v-model="date"
            min="2016-06-15"
            max="2024-03-20"
        ></v-date-picker>
    </v-col>
</v-row>

</template>

<style scoped>

    a {
        text-decoration: none;
    }

</style>

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
