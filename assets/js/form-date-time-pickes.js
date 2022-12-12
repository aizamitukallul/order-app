$(function() {
	"use strict";
	
    $('.datepicker').pickadate({        
		selectMonths: true,
        selectYears: true
    }),
    ///$('.timepicker').pickatime()
	/*
	$('.datepicker').pickadate({
		format: 'YYYY-MM-DD HH:mm'
	});
	*/
   
	$('#date-time').bootstrapMaterialDatePicker({
		format: 'YYYY-MM-DD HH:mm'
	});
	$('#date').bootstrapMaterialDatePicker({
		time: false
	});
	$('#time').bootstrapMaterialDatePicker({
		date: false,
		format: 'HH:mm'
	});
   


});