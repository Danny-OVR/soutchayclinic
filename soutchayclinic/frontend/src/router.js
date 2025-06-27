
import { createRouter, createWebHistory } from 'vue-router';


function passRouteToProps(route){
	return {
		queryParams: route.query,
		fieldName: route.params.fieldName, 
		fieldValue: route.params.fieldValue
	}
}


let routes = [
	
		{
			path: '/', 
			alias: '/home',
			name: 'home' , 
			component: () => import('./pages/home/home.vue'),
			props: true
		},
		//Dashboard routes


//appointments routes
			{
				path: '/appointments/:fieldName?/:fieldValue?',
				name: 'appointmentslist',
				component: () => import('./pages/appointments/list.vue'), 
				props: route => passRouteToProps(route)
			},
	
			{ 
				path: '/appointments/view/:id', 
				name: 'appointmentsview', 
				component: () => import('./pages/appointments/view.vue'), 
				props: true
			},
		
			{ 
				path: '/appointments/add', 
				name: 'appointmentsadd', 
				component: () => import('./pages/appointments/add.vue'), 
				props: true
			},
	
			{ 
				path: '/appointments/edit/:id', 
				name: 'appointmentsedit', 
				component: () => import('./pages/appointments/edit.vue'), 
				props: true
			},
		

//patients routes
			{ 
				path: '/patients/view/:id', 
				name: 'patientsview', 
				component: () => import('./pages/patients/view.vue'), 
				props: true
			},
		
			{ 
				path: '/patients/add', 
				name: 'patientsadd', 
				component: () => import('./pages/patients/add.vue'), 
				props: true
			},
	
			{ 
				path: '/patients/edit/:id', 
				name: 'patientsedit', 
				component: () => import('./pages/patients/edit.vue'), 
				props: true
			},
		

//payments routes
			{
				path: '/payments/:fieldName?/:fieldValue?',
				name: 'paymentslist',
				component: () => import('./pages/payments/list.vue'), 
				props: route => passRouteToProps(route)
			},
	
			{ 
				path: '/payments/view/:id', 
				name: 'paymentsview', 
				component: () => import('./pages/payments/view.vue'), 
				props: true
			},
		
			{ 
				path: '/payments/add', 
				name: 'paymentsadd', 
				component: () => import('./pages/payments/add.vue'), 
				props: true
			},
	
			{ 
				path: '/payments/edit/:id', 
				name: 'paymentsedit', 
				component: () => import('./pages/payments/edit.vue'), 
				props: true
			},
		

//permissions routes
			{
				path: '/permissions/:fieldName?/:fieldValue?',
				name: 'permissionslist',
				component: () => import('./pages/permissions/list.vue'), 
				props: route => passRouteToProps(route)
			},
	
			{ 
				path: '/permissions/view/:id', 
				name: 'permissionsview', 
				component: () => import('./pages/permissions/view.vue'), 
				props: true
			},
		
			{ 
				path: '/permissions/add', 
				name: 'permissionsadd', 
				component: () => import('./pages/permissions/add.vue'), 
				props: true
			},
	
			{ 
				path: '/permissions/edit/:id', 
				name: 'permissionsedit', 
				component: () => import('./pages/permissions/edit.vue'), 
				props: true
			},
		

//products routes
			{
				path: '/products/:fieldName?/:fieldValue?',
				name: 'productslist',
				component: () => import('./pages/products/list.vue'), 
				props: route => passRouteToProps(route)
			},
	
			{ 
				path: '/products/view/:id', 
				name: 'productsview', 
				component: () => import('./pages/products/view.vue'), 
				props: true
			},
		
			{ 
				path: '/products/add', 
				name: 'productsadd', 
				component: () => import('./pages/products/add.vue'), 
				props: true
			},
	
			{ 
				path: '/products/edit/:id', 
				name: 'productsedit', 
				component: () => import('./pages/products/edit.vue'), 
				props: true
			},
		

//roles routes
			{
				path: '/roles/:fieldName?/:fieldValue?',
				name: 'roleslist',
				component: () => import('./pages/roles/list.vue'), 
				props: route => passRouteToProps(route)
			},
	
			{ 
				path: '/roles/view/:id', 
				name: 'rolesview', 
				component: () => import('./pages/roles/view.vue'), 
				props: true
			},
		
			{ 
				path: '/roles/add', 
				name: 'rolesadd', 
				component: () => import('./pages/roles/add.vue'), 
				props: true
			},
	
			{ 
				path: '/roles/edit/:id', 
				name: 'rolesedit', 
				component: () => import('./pages/roles/edit.vue'), 
				props: true
			},
		

//services routes
			{
				path: '/services/:fieldName?/:fieldValue?',
				name: 'serviceslist',
				component: () => import('./pages/services/list.vue'), 
				props: route => passRouteToProps(route)
			},
	
			{ 
				path: '/services/view/:id', 
				name: 'servicesview', 
				component: () => import('./pages/services/view.vue'), 
				props: true
			},
		
			{ 
				path: '/services/add', 
				name: 'servicesadd', 
				component: () => import('./pages/services/add.vue'), 
				props: true
			},
	
			{ 
				path: '/services/edit/:id', 
				name: 'servicesedit', 
				component: () => import('./pages/services/edit.vue'), 
				props: true
			},
		

//staff routes
			{
				path: '/staff/:fieldName?/:fieldValue?',
				name: 'stafflist',
				component: () => import('./pages/staff/list.vue'), 
				props: route => passRouteToProps(route)
			},
	
			{ 
				path: '/staff/view/:id', 
				name: 'staffview', 
				component: () => import('./pages/staff/view.vue'), 
				props: true
			},
		
			{ 
				path: '/staff/add', 
				name: 'staffadd', 
				component: () => import('./pages/staff/add.vue'), 
				props: true
			},
	
			{ 
				path: '/staff/edit/:id', 
				name: 'staffedit', 
				component: () => import('./pages/staff/edit.vue'), 
				props: true
			},
		

//treatmentrecords routes
			{
				path: '/treatmentrecords/:fieldName?/:fieldValue?',
				name: 'treatmentrecordslist',
				component: () => import('./pages/treatmentrecords/list.vue'), 
				props: route => passRouteToProps(route)
			},
	
			{ 
				path: '/treatmentrecords/view/:id', 
				name: 'treatmentrecordsview', 
				component: () => import('./pages/treatmentrecords/view.vue'), 
				props: true
			},
		
			{ 
				path: '/treatmentrecords/add', 
				name: 'treatmentrecordsadd', 
				component: () => import('./pages/treatmentrecords/add.vue'), 
				props: true
			},
	
			{ 
				path: '/treatmentrecords/edit/:id', 
				name: 'treatmentrecordsedit', 
				component: () => import('./pages/treatmentrecords/edit.vue'), 
				props: true
			},
		

//user routes
			{
				path: '/user/:fieldName?/:fieldValue?',
				name: 'userlist',
				component: () => import('./pages/user/list.vue'), 
				props: route => passRouteToProps(route)
			},
	
			{ 
				path: '/user/view/:id', 
				name: 'userview', 
				component: () => import('./pages/user/view.vue'), 
				props: true
			},
		
			{ 
				path: '/user/add', 
				name: 'useradd', 
				component: () => import('./pages/user/add.vue'), 
				props: true
			},
	
			{ 
				path: '/user/edit/:id', 
				name: 'useredit', 
				component: () => import('./pages/user/edit.vue'), 
				props: true
			},
		

	
	
	
	
	{ 
		path:  '/error/forbidden', 
		name: 'forbidden', 
		component: () => import('./pages/errors/forbidden.vue'),
		props: true
	},
	{ 
		path: '/error/notfound', 
		name: 'notfound',
		component: () => import('./pages/errors/pagenotfound.vue'),
		props: true
	},
	{
		path: '/:catchAll(.*)', 
		component: () => import('./pages/errors/pagenotfound.vue')
	}
];

export default () => {
	
	
	const router = createRouter({
		history: createWebHistory(),
		routes,
		scrollBehavior(to, from, savedPostion){
			if(savedPostion) return savedPostion;
			return { top:0 }
		}
	});
	
	return router;
}
