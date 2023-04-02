

let weather = {
    "apiKey":"0707d0c32abdf5ab9a334240d5161506",
    fetchweather: function(city){
        fetch (
            "https://api.openweathermap.org/data/2.5/weather?q="+ city +"&units=metric&appid=" + this.apiKey

        )
        .then((response) => response.json())
        .then((data) => this.displayWeather(data));
    },
    displayWeather: function(data) {
        const { name } = data;
        const { icon , description} = data.weather[0];
        const { temp , humidity } = data.main;
        const { speed } = data.wind;
        document.querySelector(".city").innerText = "Weer in " + name;
        document.querySelector(".icon").src = "https://openweathermap.org/img/wn/" + icon +".png";
        document.querySelector(".descrition").innerText = description;
        document.querySelector(".temp").innerText = temp + " °C";
        document.querySelector(".humidity").innerText = "Humidity:" + humidity + "%";
        document.querySelector(".wind").innerText = "wind speed:" + speed + "Km/h";
        document.querySelector(".weather").classList.remove("loading");
        document.getElementById('weather-container').style.backgroundImage = "url('http://source.unsplash.com/1920x1080/?" + name +"')";

    } ,
    search : function(){
       this.fetchweather(document.querySelector(".weather-search-bar").value);

    }
};

document
.querySelector(".weather-search button")
.addEventListener("click",function (){
    weather.search();
});
document.querySelector(".weather-search-bar").addEventListener("keyup", function (event){
    if (event.key == "Enter"){
        weather.search();
    }
})
weather.fetchweather("Amsterdam")