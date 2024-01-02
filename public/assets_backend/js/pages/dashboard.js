// var optionsProfileVisit = {
// 	annotations: {
// 		position: 'back'
// 	},
// 	dataLabels: {
// 		enabled:false
// 	},
// 	chart: {
// 		type: 'bar',
// 		height: 300
// 	},
// 	fill: {
// 		opacity:1
// 	},
// 	plotOptions: {
// 	},
// 	series: [{
// 		name: 'sales',
// 		data: [9,20,30,20,10,20,30,20,10,20,30,20]
// 	}],
// 	colors: '#435ebe',
// 	xaxis: {
// 		categories: ["Jan","Feb","Mar","Apr","May","Jun","Jul", "Aug","Sep","Oct","Nov","Dec"],
// 	},
// }
   
    
// var optionsCustomerSubmission = {
//     series: [
//         {
//             name: 'FORM SUBMISSION',
//             data: [20, 80, 50, 41, 36],
//         },
//         {
//             name: 'CONTACTED',
//             data: [5, 30, 30, 8, 5],
//         },
//         {
//             name: 'UNCONTACTED',
//             data: [5, 5, 90, 37, 31],
//         },
//     ],
// 	colors: ['#0dcaf0','#198754', '#dc3545'],
//     chart: {
//         type: 'bar',
//         height: 350,
//         stacked: true,
//         stackType: '100%',
//     },
//     responsive: [
//         {
//             breakpoint: 480,
//             options: {
//                 legend: {
//                     position: 'bottom',
//                     offsetX: -10,
//                     offsetY: 0,
//                 },
//             },
//         },
//     ],
//     xaxis: {
//         categories: ['2023 Q4', '2024 Q1', '2024 Q2', '2024 Q3', '2024 Q4'],
//     },
//     fill: {
//         opacity: 1,
//     },
//     legend: {
//         position: 'right',
//         offsetX: 0,
//         offsetY: 50,
//     },
// };

	var optionsCustomerSubmission = {
		series: [
			{
				name: 'Contacted',
				data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
			}, {
				name: 'Form Submit',
				data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
			}, {
				name: 'Uncontacted',
				data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
			}
		],
		chart: {
			type: 'bar',
			height: 350
		},

		plotOptions: {
			bar: {
			horizontal: false,
			columnWidth: '55%',
			endingShape: 'rounded'
			},
		},

		dataLabels: {
			enabled: false
		},

		stroke: {
			show: true,
			width: 2,
			colors: ['transparent']
		},

		xaxis:
		{
			categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
		},

		yaxis: {
			title: {
			text: '$ (thousands)'
			}
		},

		fill: {
			opacity: 1
		},

		tooltip: {
			y: {
			formatter: function (val) {
				return "$ " + val + " thousands"
			}
			}
		}
	};

let optionsVisitorsProfile  = {
	series: [100, 83],
	labels: ['Done', 'Ongoing'],
	colors: ['#6f42c1','#0dcaf0'],
	chart: {
		type: 'donut',
		width: '100%',
		height:'350px'
	},
	legend: {
		position: 'bottom'
	},
	plotOptions: {
		pie: {
			donut: {
				size: '30%'
			}
		}
	}
}

// var chartProfileVisit = new ApexCharts(document.querySelector("#chart-profile-visit"), optionsProfileVisit);
var chartCustomerSubmission = new ApexCharts(document.querySelector('#chart-customer-submission'), optionsCustomerSubmission)
var chartVisitorsProfile = new ApexCharts(document.getElementById('chart-visitors-profile'), optionsVisitorsProfile)

chartCustomerSubmission.render();
// chartProfileVisit.render();
chartVisitorsProfile.render()