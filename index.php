<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Smart Number Generator</title>

  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="card">
    <h1>Smart Number Generator</h1>
    <p>Generate numbers automatically from patterns (xxxx)</p>

    <div class="grid">
      <div>
        <label>How many numbers?</label>
        <input id="from" type="number" value="100" min="1">
      </div>

      <div>
        <label>Patterns </label>
        <input id="code_contry" type="text"
          value="+21261614xxxx,+21261615xxxx">
      </div>
    </div>

    <div style="margin-top:14px">
      <label>Generated Numbers</label>
      <textarea id="num_list" readonly
        placeholder="Results will appear here..."></textarea>
    </div>

    <div class="actions">
      <button onclick="generate()">Generate</button>
      <button class="secondary" onclick="copyAll()">Copy All</button>
      <button class="secondary" onclick="downloadTxt()">Download .txt</button>
    </div>

    <!-- FOOTER -->
    <div class="footer">
      <div>Made by OmarDev_Proxy · 2026</div>

      <a
        href="https://t.me/OmarDev_proxy"
        target="_blank"
        class="telegram-btn"
      >
        <!-- Telegram SVG Icon -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 240 240"
          width="18"
          height="18"
        >
          <circle cx="120" cy="120" r="120" fill="#229ED9"/>
          <path
            fill="#fff"
            d="M179.1 74.6L147 171.4c-2.4 6.7-8.7 8.4-14.1 5.2l-39-28.7-18.8 18.1c-2.1 2.1-3.9 3.9-8 3.9l2.8-40.1 73-65.9c3.2-2.8-.7-4.4-4.9-1.6L47.8 121.2 8.6 108.9c-6.8-2.1-6.9-6.8 1.4-10L163.6 39c6.2-2.1 11.6 1.5 9.5 9.6z"
          />
        </svg>

        <span>Join me on Telegram</span>
      </a>
    </div>
  </div>

  <script src="js/app.js"></script>
</body>
</html>
