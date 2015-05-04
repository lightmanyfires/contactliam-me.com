//------------- blank.js -------------//
$(document).ready(function() {

	//get object with colros from plugin and store it.
	var objColors = $('body').data('appStart').getColors();
	var colours = {
		white: objColors.white,
		dark: objColors.dark,
		red : objColors.red,
		blue: objColors.blue,
		green : objColors.green,
		yellow: objColors.yellow,
		brown: objColors.brown,
		orange : objColors.orange,
		purple : objColors.purple,
		pink : objColors.pink,
		lime : objColors.lime,
		magenta: objColors.magenta,
		teal: objColors.teal,
		textcolor: '#5a5e63',
		gray: objColors.gray
	}

	/* initialize the external events
		-----------------------------------------------------------------*/
	
	$('#external-events div.external-event').each(function() {
	
		// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
		// it doesn't need to have a start or end
		var eventObject = {
			title: $.trim($(this).text()) // use the element's text as the event title
		};
		
		// store the Event Object in the DOM element so we can get to it later
		$(this).data('eventObject', eventObject);
		
		// make the event draggable using jQuery UI
		$(this).draggable({
			zIndex: 999,
			revert: true,      // will cause the event to go back to its
			revertDuration: 0  //  original position after the drag
		});
		
	});


	/* initialize the calendar
	-----------------------------------------------------------------*/
	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();

	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		buttonText: {
        	prev: '<i class="im-arrow-left2 s20"></i>',
        	next: '<i class="im-arrow-right3 s20"></i>',
        	today:'Today'
    	},
		editable: true,
		droppable: true, // this allows things to be dropped onto the calendar !!!
		drop: function(date) { // this function is called when something is dropped
		
			// retrieve the dropped element's stored Event Object
			var originalEventObject = $(this).data('eventObject');
			
			// we need to copy it, so that multiple events don't have a reference to the same object
			var copiedEventObject = $.extend({}, originalEventObject);
			
			// assign it the date that was reported
			copiedEventObject.start = date;
			
			// render the event on the calendar
			// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
			$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
			
			// is the "remove after drop" checkbox checked?
			if ($('#drop-remove').is(':checked')) {
				// if so, remove the element from the "Draggable Events" list
				$(this).remove();
			}	
		},
        events: [
        	{
				title: 'Training',
				start: new Date(y, m, 5, 18, 30),
				end: new Date(y, m, d, 21, 30),
				allDay: false,
				description: 'Weekly Training',
			},
			{
				title: 'Training',
				start: new Date(y, m, 7, 18, 30),
				end: new Date(y, m, d, 21, 30),
				allDay: false,
				description: 'Weekly Training',
			},
			{
				title: 'Training',
				start: new Date(y, m, 12, 18, 30),
				end: new Date(y, m, d, 21, 30),
				allDay: false,
				description: 'Weekly Training',
			},
			{
				title: 'Training',
				start: new Date(y, m, 14, 18, 30),
				end: new Date(y, m, d, 21, 30),
				allDay: false,
				description: 'Weekly Training',
			},
			{
				title: 'Training',
				start: new Date(y, m, 19, 18, 30),
				end: new Date(y, m, d, 21, 30),
				allDay: false,
				description: 'Weekly Training',
			},
			{
				title: 'Training',
				start: new Date(y, m, 21, 18, 30),
				end: new Date(y, m, d, 21, 30),
				allDay: false,
				description: 'Weekly Training',
			},
			{
				title: 'Training',
				start: new Date(y, m, 26, 18, 30),
				end: new Date(y, m, d, 21, 30),
				allDay: false,
				description: 'Weekly Training',
			},
			{
				title: 'Training',
				start: new Date(y, m, 28, 18, 30),
				end: new Date(y, m, d, 21, 30),
				allDay: false,
				description: 'Weekly Training',
			},
			
			{
				title: 'Game',
				start: new Date(y, m, 9, 15,0),
				end: new Date(y, m, d, 17, 0),
				allDay: false,
				description: 'TBC',
			},
			{
				title: 'Game',
				start: new Date(y, m, 16, 15,0),
				end: new Date(y, m, d, 17, 0),
				allDay: false,
				description: 'TBC',
			},
			{
				title: 'Game',
				start: new Date(y, m, 23, 15,0),
				end: new Date(y, m, d, 17, 0),
				allDay: false,
				description: 'TBC',
			},
			{
				title: 'Game',
				start: new Date(y, m, 30, 15,0),
				end: new Date(y, m, d, 17, 0),
				allDay: false,
				description: 'TBC',
			},
			
        ]

	});
	
	//force to reajust size on page load because full calendar some time not get right size.
	$(window).load(function(){
		$('#calendar').fullCalendar('render');
	});
 	
});