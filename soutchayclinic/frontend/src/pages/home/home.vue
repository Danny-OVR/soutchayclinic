<template>
    <main class="main-page" id="">
        <section class="page-section bg-light p-3" >
            <div class="grid grid-cols-12 gap-4">
                <div  class="col-span-full md:col-span-4 comp-grid" >
                    <div class=" text-xl font-bold text-primary" >
                        Home
                    </div>
                    <RecordCount value-prefix="" value-suffix="" api-path="components_data/getcount_appointments" :link="`/appointments`"  title="Appointments" subtitle="Total Appointments"  icon="pi pi-th-large" :show-knob="false" card-class="" :max="100" ></RecordCount>
                </div>
            </div>
        </section>
    </main>

</template>
<script setup>
	import { computed, ref } from 'vue';
	
	
	import { useApp } from 'src/composables/app.js';
	

	
	

	const props = defineProps({
		pageName: {
			type: String,
			default: 'home',
		},
		routeName: {
			type: String,
			default: 'home',
		},
		isSubPage: {
			type : Boolean,
			default : false,
		},
	});
	const app = useApp();
	
	
	const pageReady = ref(true);
	
</script>
<style scoped>

</style>
