<script setup>

    import BarangayAdminLayout from '../Layouts/BarangayAdminLayout.vue'
    defineOptions({ layout: BarangayAdminLayout })
    defineProps({ barangay: Object })

</script>
<template>
    <!-- {{barangay}} -->
    <v-container>
        <v-row class="ma-2">
            <p class="text-h4">Barangay {{ barangay.name }}</p>
            <v-spacer/>
            <v-btn color="blue">Edit</v-btn>
        </v-row>
        <v-divider class="my-5" />
        <v-row>
            <v-col cols="9">
                <p class="text-h5">About Barangay {{ barangay.name }}</p>
                <!-- <p>{{ barangay.about }}</p> -->
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, id atque accusantium distinctio quidem iste soluta a corporis praesentium iure sunt perspiciatis est harum nisi perferendis ipsa at. Veritatis, ad vel? Non, beatae sapiente. Animi neque aliquam expedita maxime rem?</p>

            </v-col>
            <v-col cols="3">
                <v-img :src="`/images/${barangay.official_seal}`"></v-img>
            </v-col>
        </v-row>
        <v-divider class="my-5" />

        <v-row>
            <v-col cols="6">
                <p class="text-h5">Mission</p>
                <p>{{ barangay.mission }}</p>
            </v-col>
            <v-col cols="6">
                <p class="text-h5">Vision</p>
                <p>{{ barangay.vision }}</p>
            </v-col>
        </v-row>

        <v-divider class="my-5" />

        <v-row>
			<v-col cols="6">
                <p class="text-center text-h5">Barangay Officials</p>
				<v-slide-group class="pa-4" show-arrows title="Barangay Officials">
					<v-slide-group-item v-for="n in 15" :key="n">
						<v-card color="red-lighten-1" :class="['ma-4', selectedClass]" height="200" width="150">
							<v-img cover height="100%" src="https://m.media-amazon.com/images/M/MV5BMzcyOTM2NDA5OF5BMl5BanBnXkFtZTgwMTYzMTQzNzM@._V1_.jpg"></v-img>
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
                <p class="text-center text-h5">SK Officials</p>
				<v-slide-group class="pa-4" show-arrows>
					<v-slide-group-item v-for="n in 15" :key="n">
						<v-card color="red-lighten-1" class="ma-4" height="200" width="150">
                            <v-img cover height="100%" src="https://scontent.fceb2-1.fna.fbcdn.net/v/t39.30808-6/318843803_158362023583979_4626026226875208848_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=3635dc&_nc_eui2=AeGk3GU5Tsi8h5SWl_RPLfmdwSpfIqar_6zBKl8ipqv_rBQ070U9ec1TTghhqyohXwIOoOfpN3DeDvCTISUmBaWP&_nc_ohc=IP-zZH-wprQAX_T1jZH&_nc_ht=scontent.fceb2-1.fna&oh=00_AfAx9fsF87gq59VtTmtptzlUMQ93DrnsXCVSHuTVvfyesA&oe=657BEAB7"></v-img>
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

        <v-divider class="my-5" />

        <v-row>
            <v-col cols="12">
                {{  }}
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

    </v-container>
</template>
