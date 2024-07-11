<style>
    .weather-body {
        background: #FDF2BA;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        margin: 0;
    }

    #weather-container {
        background: url("./image/weather-bg.jpg");
        background-size: cover;
        max-width: 100%;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        text-align: center;
    }

    .weather-title,
    label,
    .para {
        color: #fff;
        margin: 8px 0;
    }

    #city {
        width: calc(100% - 16px);
        padding: 8px;
        box-sizing: border-box;
        border-radius: 10px;
        border: 1px solid white;
        margin-top: 20px;
    }

    .search-btn {
        background: #debff4;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        margin-top: 20px;
        width: 100px;
        font-size: 15px;
    }

    .search-btn:hover {
        background: #8b48d7;
    }

    #temp-div p {
        font-size: 60px;
        margin-top: -30px;
    }

    #weather-info {
        font-size: 20px;
    }

    #weather-icon {
        width: 200px;
        height: 200px;
        margin: 0 auto 10px;
        margin-bottom: 0;
        display: none;
    }

    #hourly-forecast {
        margin-top: 50px;
        overflow-x: auto;
        white-space: nowrap;
        display: flex;
        justify-content: space-between;
    }

    .hourly-item {
        flex: 0 0 auto;
        width: 80px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-right: 10px;
        color: white;
    }

    .hourly-item img {
        width: 30px;
        height: 30px;
        margin-bottom: 5px;
    }

    #hourly-heading {
        color: #fff;
        margin-top: 10px;
    }
</style>

<div class="weather-body">
    <div id="weather-container" class="my-3">
        <h2 class="weather-title">Weather </h2>
        <input type="text" id="city" placeholder="Enter city">
        <button onclick="getWeather()" class="search-btn">Search</button>

        <img id="weather-icon" alt="Weather Icon">

        <div id="temp-div"></div>

        <div id="weather-info"></div>

        <div id="hourly-forecast"></div>
    </div>
</div>
<script>
    const apiKey = 'c6145c2496786e8b6c9a4fd4145b6692';

    document.addEventListener('DOMContentLoaded', () => {
        // Set default city to Chennai
        document.getElementById('city').value = 'Chennai';
        getWeather();
    });

    function getWeather() {
        var city = document.getElementById('city').value;

        if (!city) {
            alert('Please enter a city');
            return;
        }

        const currentWeatherUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}`;
        const forecastUrl = `https://api.openweathermap.org/data/2.5/forecast?q=${city}&appid=${apiKey}`;

        fetch(currentWeatherUrl)
            .then(response => response.json())
            .then(data => {
                displayWeather(data);
            })
            .catch(error => {
                console.error('Error fetching current weather data:', error);
                alert('Error fetching current weather data. Please try again.');
            });

        fetch(forecastUrl)
            .then(response => response.json())
            .then(data => {
                displayHourlyForecast(data.list);
            })
            .catch(error => {
                console.error('Error fetching hourly forecast data:', error);
                alert('Error fetching hourly forecast data. Please try again.');
            });
    }

    function displayWeather(data) {
        const tempDivInfo = document.getElementById('temp-div');
        const weatherInfoDiv = document.getElementById('weather-info');
        const weatherIcon = document.getElementById('weather-icon');
        const hourlyForecastDiv = document.getElementById('hourly-forecast');

        // Clear previous content
        weatherInfoDiv.innerHTML = '';
        hourlyForecastDiv.innerHTML = '';
        tempDivInfo.innerHTML = '';

        if (data.cod === '404') {
            weatherInfoDiv.innerHTML = `<p class="para">${data.message}</p>`;
        } else {
            const cityName = data.name;
            const temperature = Math.round(data.main.temp - 273.15); // Convert to Celsius
            const description = data.weather[0].description;
            const iconCode = data.weather[0].icon;
            const iconUrl = `https://openweathermap.org/img/wn/${iconCode}@4x.png`;

            const temperatureHTML = `<p class="para">${temperature}°C</p>`;
            const weatherHtml = `<p class="para">${cityName}</p><p class="para">${description}</p>`;

            tempDivInfo.innerHTML = temperatureHTML;
            weatherInfoDiv.innerHTML = weatherHtml;
            weatherIcon.src = iconUrl;
            weatherIcon.alt = description;

            showImage();
        }
    }

    function displayHourlyForecast(hourlyData) {
        const hourlyForecastDiv = document.getElementById('hourly-forecast');
        const next24Hours = hourlyData.slice(0, 8); // Display the next 24 hours (3-hour intervals)

        next24Hours.forEach(item => {
            const dateTime = new Date(item.dt * 1000); // Convert timestamp to milliseconds
            const hour = dateTime.getHours();
            const temperature = Math.round(item.main.temp - 273.15); // Convert to Celsius
            const iconCode = item.weather[0].icon;
            const iconUrl = `https://openweathermap.org/img/wn/${iconCode}.png`;

            const hourlyItemHtml = `
                    <div class="hourly-item">
                        <span>${hour}:00</span>
                        <img src="${iconUrl}" alt="Hourly Weather Icon">
                        <span>${temperature}°C</span>
                    </div>
                `;

            hourlyForecastDiv.innerHTML += hourlyItemHtml;
        });
    }

    function showImage() {
        const weatherIcon = document.getElementById('weather-icon');
        weatherIcon.style.display = 'block'; // Make the image visible once it's loaded
    }
</script>