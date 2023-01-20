function getTemperature() {
  const temperature = document.getElementById("temperature").value;
  document.getElementById("temperature").value = "";
  return Number.parseFloat(temperature);
}

function convertTemperatureFromCelsiusToFahrenheit(temperature) {
  if (typeof (temperature) === 'number' && !isNaN(temperature)) {
    return ((9 / 5) * temperature + 32).toFixed(1) + " ℉";
  } else return "Wrong value";
}

function showConverted() {
  document.getElementById("textLabel").innerHTML = convertTemperatureFromCelsiusToFahrenheit(getTemperature());
}

function getLocation() {
  const button = document.getElementById("get-location");
  button.onclick = function () {
    navigator.geolocation.getCurrentPosition(function (position) {
      getWeatherByLocation(position.coords.latitude, position.coords.longitude);
    }, function (error) {
      console.log(error);
      document.getElementById("currentTemperature").innerHTML = "Something is wrong";
      document.getElementById("currentWind").innerHTML = "";
    });
  };
}

function getWeatherByLocation(latitude, longitude) {
  fetch(`https://api.open-meteo.com/v1/forecast?latitude=${latitude}&longitude=${longitude}&current_weather=true`)
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      temperatureLocation = Number.parseFloat(data.current_weather.temperature)
      document.getElementById("currentTemperature").innerHTML = `Outside temperature: ${data.current_weather.temperature} C
          ( ${convertTemperatureFromCelsiusToFahrenheit(temperatureLocation)} )`;
      document.getElementById("currentWind").innerHTML = `Outside wind speed: ${data.current_weather.windspeed} m/s`;
    })
    .catch(function (error) {
      console.log(error);
      document.getElementById("currentTemperature").innerHTML = "Something is wrong";
      document.getElementById("currentWind").innerHTML = "";
    });
}