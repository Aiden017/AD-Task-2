<?php
// DMC5 Footer - static, full width, always at the bottom edge, blue and red gradient, logo left and right
?>
<style>

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

/* Ensure there's no mystery gap above the first element */
body > *:first-child {
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
}


.dmc5-footer {
    /* Make footer span full width without overflow */
    width: 100%;
    min-height: 30px;
    padding: 10px 30px;
    background: linear-gradient(90deg, #0d1b3e 0%, #1e90ff 50%, #ff2a2a 100%);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-sizing: border-box;
    margin-top: 30px;
}

.dmc5-footer-logo {
    height: 40px;
    width: auto;
    opacity: 0.7;
}

.dmc5-footer-text {
    font-family: 'Cinzel', serif;
    font-size: 1.1rem;
    letter-spacing: 1px;
    text-shadow: 1px 1px 6px #000a;
}
</style>

<div class="dmc5-footer">
    <img src="https://www.devilmaycry.com/5/assets/img/age/logo.png" class="dmc5-footer-logo" alt="DMC5 Logo Left">
    <div class="dmc5-footer-text">&copy; 2025 Devil May Cry 5 Fan Project</div>
    <img src="https://www.devilmaycry.com/5/assets/img/age/logo.png" class="dmc5-footer-logo" alt="DMC5 Logo Right">
</div>
