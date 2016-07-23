<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="canonical" href="https://weather-pwa-sample.firebaseapp.com/final/">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lambo Weather PWA</title>
  <link rel="stylesheet" type="text/css" href="styles/inline.css">
</head>
<body>

  <header class="header">
    <h1 class="header__title">Lambo Weather PWA</h1>
    <button id="butRefresh" class="headerButton" aria-label="Refresh"></button>
    <button id="butAdd" class="headerButton" aria-label="Add"></button>
  </header>

  <main class="main">
    <div class="card cardTemplate weather-forecast" hidden>
      <div class="city-key" hidden></div>
      <div class="location"></div>
      <div class="date"></div>
      <div class="description"></div>
      <div class="current">
        <div class="visual">
          <div class="icon"></div>
          <div class="temperature">
            <span class="value"></span><span class="scale">°F</span>
          </div>
        </div>
        <div class="description">
          <div class="feels-like">
            <span class="value"></span><span class="scale">°F</span>
          </div>
          <div class="precip"></div>
          <div class="humidity"></div>
          <div class="wind">
            <span class="value"></span>
            <span class="scale">mph</span>
            <span class="direction"></span>°
          </div>
        </div>
      </div>
      <div class="future">
        <div class="oneday">
          <div class="date"></div>
          <div class="icon"></div>
          <div class="temp-high">
            <span class="value"></span>°
          </div>
          <div class="temp-low">
            <span class="value"></span>°
          </div>
        </div>
        <div class="oneday">
          <div class="date"></div>
          <div class="icon"></div>
          <div class="temp-high">
            <span class="value"></span>°
          </div>
          <div class="temp-low">
            <span class="value"></span>°
          </div>
        </div>
        <div class="oneday">
          <div class="date"></div>
          <div class="icon"></div>
          <div class="temp-high">
            <span class="value"></span>°
          </div>
          <div class="temp-low">
            <span class="value"></span>°
          </div>
        </div>
        <div class="oneday">
          <div class="date"></div>
          <div class="icon"></div>
          <div class="temp-high">
            <span class="value"></span>°
          </div>
          <div class="temp-low">
            <span class="value"></span>°
          </div>
        </div>
        <div class="oneday">
          <div class="date"></div>
          <div class="icon"></div>
          <div class="temp-high">
            <span class="value"></span>°
          </div>
          <div class="temp-low">
            <span class="value"></span>°
          </div>
        </div>
        <div class="oneday">
          <div class="date"></div>
          <div class="icon"></div>
          <div class="temp-high">
            <span class="value"></span>°
          </div>
          <div class="temp-low">
            <span class="value"></span>°
          </div>
        </div>
        <div class="oneday">
          <div class="date"></div>
          <div class="icon"></div>
          <div class="temp-high">
            <span class="value"></span>°
          </div>
          <div class="temp-low">
            <span class="value"></span>°
          </div>
        </div>
      </div>
    </div>
  </main>

  <div class="dialog-container">
    <div class="dialog">
      <div class="dialog-title">Add new city</div>
      <div class="dialog-body">
        <select id="selectCityToAdd">
          <option value="austin">Austin, TX</option>
          <option value="boston">Boston, MA</option>
          <option value="chicago">Chicago, IL</option>
          <option value="portland">Portland, OR</option>
          <option value="sanfrancisco">San Francisco, CA</option>
          <option value="seattle">Seattle, WA</option>
        </select>
      </div>
      <div class="dialog-buttons">
        <button id="butAddCity" class="button">Add</button>
        <button id="butAddCancel" class="button">Cancel</button>
      </div>
    </div>
  </div>

  <div class="loader">
    <svg viewBox="0 0 32 32" width="32" height="32">
      <circle id="spinner" cx="16" cy="16" r="14" fill="none"></circle>
    </svg>
  </div>

  <!-- Insert link to app.js here -->
  <script src="scripts/app.js" async></script>
</body>
</html>
