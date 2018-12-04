var calendar = {};
$(document).ready( function() {
    var lotsOfEvents = [];
    
    $.ajax({
        url: 'getEventList.php',
        dataType:'json',
        success: function(data){
        	var datax = [];
        		for(var i = 0;i<data.length;i++) {
        			datax = {"title":data[i].title, "date": data[i].date};
        			lotsOfEvents.push(datax);
        		}
        	    
        	    calendar.clndr = $('.cal1').clndr({
        	        events: lotsOfEvents,
        	        clickEvents: {
        	            click: function (target) {
        	                $.ajax({
        	                    url: 'getEventByDate.php',
        	                    dataType:'json',
        	                    type : 'POST',
        	                    data: {
        	                        eventDate : target['date']['_i']                         
        	                    },
        	                    success: function(json){
        	                    Results(json);
        	                    }
        	                    });
        	                function Results(json){
        	                    $("#event").html("");
        	                		$(".day .day-contents").css("color", "#000");
        	                		$(".calendar-day-"+target['date']['_i']+ " .day-contents").css("color", "#FF0000");
        	                		for(var i = 0;i<json.length;i++) {
        	                			$("#event").append("<div class='event-row'>"+json[i].title+"</div>");
        	                		}
        	                    }
        	                    $("#event").empty();
        	            }
        	        },
        	        
        	        showAdjacentMonths: true,
        	        adjacentDaysChangeMonth: false
        	    });
        }
        });
});