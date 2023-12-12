<script setup>

    import MunicipalAdminLayout from '../Layouts/MunicipalAdminLayout.vue';
    defineOptions({ layout: MunicipalAdminLayout })
    defineProps({ municipal: Object })

</script>
<template>
    <v-container>
        <v-row class="ma-2">
            <p class="text-h4">{{ municipal.name }}</p>
            <v-spacer/>
            <v-btn color="blue">Edit</v-btn>
        </v-row>
        <v-divider class="my-5" />
        <v-row>
            <v-col cols="9">
                <p class="text-h5">About {{ municipal.name }}</p>
                <!-- <p>{{ barangay.about }}</p> -->
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, id atque accusantium distinctio quidem iste soluta a corporis praesentium iure sunt perspiciatis est harum nisi perferendis ipsa at. Veritatis, ad vel? Non, beatae sapiente. Animi neque aliquam expedita maxime rem?</p>

            </v-col>
            <v-col cols="3">
                <v-img :src="`/images/${municipal.official_seal}`"></v-img>
            </v-col>
        </v-row>
        <v-divider class="my-5" />

        <v-row>
            <v-col cols="6">
                <p class="text-h5">Mission</p>
                <p>{{ municipal.mission }}</p>
            </v-col>
            <v-col cols="6">
                <p class="text-h5">Vision</p>
                <p>{{ municipal.vision }}</p>
            </v-col>
        </v-row>

        <v-divider class="my-5" />

        <v-row>
			<v-col cols="6">
                <p class="text-center text-h5">Municipal Officials</p>
				<v-slide-group class="pa-4" show-arrows title="Barangay Officials">
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
                <p class="text-center text-h5">Municipal SK Officials</p>
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

        <v-divider class="my-5" />

        <v-row>
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

    </v-container>
</template>
