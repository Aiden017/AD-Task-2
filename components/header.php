<?php
// DMC5 Header - No gap above, scrolls normally
?>
<style>
/* Force body and html to have no spacing */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {
    margin: 0 !important;
    padding: 0 !important;
}

body > *:first-child {
    margin-top: 0 !important;
    padding-top: 0 !important;
}

.dmc5-header {
    width: 100%;
    min-height: 80px;
    padding: 10px 30px;
    background: linear-gradient(90deg, #0d1b3e 0%, #1e90ff 50%, #ff2a2a 100%);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-sizing: border-box;
    margin-top: 0 !important;
    margin-bottom: 0;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
}

.dmc5-header-logo {
    height: 60px;
    width: auto;
    opacity: 0.85;
}

.dmc5-header-title {
    font-family: 'Cinzel', serif;
    font-size: 2rem;
    font-weight: bold;
    letter-spacing: 2px;
    text-shadow: 2px 2px 8px #000a;
}
</style>

<div class="dmc5-header">
    <img src="https://www.devilmaycry.com/5/assets/img/age/logo.png" class="dmc5-header-logo" alt="DMC5 Logo Left">
    <div class="dmc5-header-title">Devil May Cry 5</div>
    <img src="https://www.devilmaycry.com/5/assets/img/age/logo.png" class="dmc5-header-logo" alt="DMC5 Logo Right">
</div>
