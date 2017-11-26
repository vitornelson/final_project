$( function(){
    //code here
    
    //menu hover
        //change color
    $("li").hover(
        function(){
        $(this).css("background-color","#ac6f44");
    }, function(){
        $(this).css("background-color","saddlebrown");

    });
    
    //animation to togle up and down
    $('#menu_ul >li').hover(function(){
        $(this).children("ul").slideToggle(300);
    });
    
    //weather info
    var weatherObject = new XMLHttpRequest();

    weatherObject.open('GET',
    'http://api.wunderground.com/api/86f09559ea3ba4f6/conditions/q/ID/Riggins.json', true);

    weatherObject.send();

    weatherObject.onload = function(){
        var weatherInfo = JSON.parse(weatherObject.responseText);
        console.log(weatherInfo);

        document.getElementById('place').innerHTML = weatherInfo.current_observation.display_location.full;
        document.getElementById('currentTemp').innerHTML = weatherInfo.current_observation.temp_f;
        document.getElementById('w_icon').src = weatherInfo.current_observation.icon_url;
    }


   // alert("yes");

});
