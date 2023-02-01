const getTemperature = async () => {
  const temperature = document.getElementById("temperature").value;
  return Number.parseFloat(temperature);
};

const convertTemperatureFromCelsiusToFahrenheit = (temperature) => {
  if (typeof temperature === "number" && !isNaN(temperature)) {
    return ((9 / 5) * temperature + 32).toFixed(1) + " ℉";
  } else {
    return "Wrong value";
  }
};

document
  .getElementById("convert-button")
  .addEventListener("click", async () => {
    getTemperature()
      .then((temperature) => {
        document.getElementById("textLabel").innerHTML =
          convertTemperatureFromCelsiusToFahrenheit(temperature);
      })
      .catch((error) => {
        console.log(error);
        document.getElementById("textLabel").innerHTML = "Wrong value";
      });
  });

document.getElementById("get-location").addEventListener("click", async () => {
  new Promise((resolve, reject) => {
    navigator.geolocation.getCurrentPosition(resolve, reject);
  })
    .then((position) =>
      getWeatherByLocation(position.coords.latitude, position.coords.longitude)
    )
    .catch((error) => {
      console.log(error);
      document.getElementById("currentTemperature").innerHTML = "Something is wrong";
      document.getElementById("currentWind").innerHTML = "";
    });
});

async function getWeatherByLocation(latitude, longitude) {
  fetch(
    `https://api.open-meteo.com/v1/forecast?latitude=${latitude}&longitude=${longitude}&current_weather=true`
  )
    .then((response) => response.json())
    .then((data) => {
      const temperatureLocation = Number.parseFloat(
        data.current_weather.temperature
      );
      document.getElementById("currentTemperature").innerHTML = `Outside temperature: ${data.current_weather.temperature} 
        C (${convertTemperatureFromCelsiusToFahrenheit(temperatureLocation)})`;
      document.getElementById("currentWind").innerHTML = `Outside wind speed: ${data.current_weather.windspeed} m/s`;
    })
    .catch((error) => {
      console.log(error);
      document.getElementById("currentTemperature").innerHTML ="Something is wrong";
      document.getElementById("currentWind").innerHTML = "";
    });
}
