jQuery(document).ready(function($) {
	//$=jQuery;
var snd = $('#radio')[0];
  $("#crazyPlayer").addClass("play");
   $("#crazyPlayer").click(function(){
	   if(snd.paused) {
		   snd.play();
		   $(this).removeClass("play").addClass("pause");
		    }
	   else {
		   snd.pause();
		   $(this).removeClass("pause").addClass("play");
		  	   }
	});
	getImg();
	 	
}); 


function getImg(){
	$=jQuery;
jQuery.ajax({
        	type: 'GET',
	        url: 'http://ws.audioscrobbler.com/2.0/?method=user.getRecentTracks&user=NovorossiaRocks&api_key=d5f35a8157111bf39b87c4bd6558d22c&limit=1&format=json&extended=1',
	        dataType: 'jsonp',
	        success: function(data) {
	        	if(data.recenttracks !== undefined) {
		$("#crazyPlayer").html('<img width=100% height=100% src="'+data.recenttracks.track[0].artist.image[2]["#text"]+'" alt="'+data.recenttracks.track[0].artist.name+' - '+data.recenttracks.track[0].name+' в Эфире Новороссия Rocks"/>');
				}
		        	
	        }
        });
		setTimeout(getImg, 15000);
		}