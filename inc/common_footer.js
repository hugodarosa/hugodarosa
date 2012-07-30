// Instagram
//HELP FROM HERE...
//https://forrst.com/posts/Using_the_Instagram_API-ti5

// small = + data.data[i].images.thumbnail.url +
// resolution: low_resolution, thumbnail, standard_resolution
$(function() {
    $.ajax({
    	type: "GET",
        dataType: "jsonp",
        cache: false,
        url: "https://api.instagram.com/v1/users/35031502/media/recent/?access_token=18360510.f59def8.d8d77acfa353492e8842597295028fd3",
        success: function(data) {
            for (var i = 0; i < 10; i++) {
        $(".instagram").append("<div class='instagram-items'><a target='_blank' href='" + data.data[i].link +"'><img class='instagram-image' src='" + data.data[i].images.low_resolution.url +"' /></a></div>");   
      		}     
                            
        }
    });
});