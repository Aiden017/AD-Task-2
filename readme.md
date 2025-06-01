<a name="readme-top"></a>

<br/>

<div align="center">
  <a href="https://github.com/Aiden017/">
    <img src="./assets/img/DMC5logo.png" alt="DMC5 Logo" width="130" height="100">
  </a>
  <h3 align="center">AD-Task-2: Devil May Cry Character Battle Logs</h3>
</div>

<div align="center">
  A PHP web project featuring interactive character pages and battle logs for Devil May Cry characters (Vergil, Nero, Dante, and V), with dynamic layouts, themed styling, and background music.
</div>

<br />

![](https://visit-counter.vercel.app/counter.png?page=Aiden017/AD-Task-2)

[![wakatime](https://wakatime.com/badge/user/144d2c3f-82f0-440d-89df-023ce97ebda9/project/1e231069-eb05-43fe-b149-0b60f3ad6d3f.svg)](https://wakatime.com/badge/user/144d2c3f-82f0-440d-89df-023ce97ebda9/project/1e231069-eb05-43fe-b149-0b60f3ad6d3f)

---

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li><a href="#key-components">Key Components</a></li>
        <li><a href="#technology">Technology</a></li>
      </ol>
    </li>
    <li><a href="#rules-practices-and-principles">Rules, Practices and Principles</a></li>
    <li><a href="#resources">Resources</a></li>
  </ol>
</details>

---

## Overview

This project is a web application that showcases character pages and battle logs for the main characters of Devil May Cry 5: Vergil, Nero, Dante, and V. Each character page features:
- Themed layouts and color schemes
- Responsive image and description cards
- Local background music with play/pause controls
- Clean, modern CSS and HTML structure
- Battle log pages with styled bullet lists

### Key Components

- Character Pages (Vergil, Nero, Dante, V) in their own folders (e.g., `VergilPage/Vergil.php`)
- Battle Log Pages for each character in the same folder (e.g., `VergilPage/VGbattlelog.php`)
- Themed CSS for each character and log, located in each character's `assets/css` folder
- Local MP3 background music with controls, using the main `assets/Mp3` directory
- Responsive and visually consistent layouts
- PHP-based page structure
- Central landing page: `index.php` in the project root

### Technology

#### Language
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

#### Framework/Library
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

#### Databases
No database used; all content is static.

#### Deployment
Local or any PHP-compatible server.

## Rules, Practices and Principles

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code         | Example                           |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal      | Utility              | Account.util.php                  |
   | Camel       | Components and Pages | index.php or footer.component.php |
8. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
9. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
10. File Structure to follow below.

```
AD-Task-2
└─ assets
|   └─ css
|   |   └─ character_cards.css, mainstyles.css, etc.
|   └─ img
|   |   └─ DMC5logo.png
|   └─ js
|   |   └─ example.js
|   └─ Mp3
|       └─ DEVILS_NEVER_CRY_DANTE.mp3, BurytheLight.mp3, etc.
└─ components
    └─ header.php
|   └─ footer.php
└─ page
|   └─ DantePage
|   |    └─ Dante.php, Dantebattlelog.php
|   |    └─ assets/css/Dantestyle.css, assets/css/Dantebattlelog.css
|   └─ NeroPage
|   |    └─ nero.php, NRbattlelog.php
|   |    └─ assets/css/Nerostyle.css, assets/css/NRbattlelog.css
|   └─ VergilPage
|   |    └─ Vergil.php, VGbattlelog.php
|   |    └─ assets/css/Vergilstyle.css, assets/css/VGbattlelog.css
|   └─ VPage
|        └─ V.php, Vsbattlelog.php
|        └─ assets/css/Vstyle.css, assets/css/Vsbattlelog.css
|   └─ assets
|        └─ css, img, js
└─ utils
|   └─ Example.utils.php
└─ index.php
└─ readme.md
└─ .gitignore
└─ bootstrap.php
└─ composer.json
└─ composer.lock
└─ router.php
```
> The following should be renamed: name.css, name.js, name.jpeg/.jpg/.webp/.png, name.component.php (but not the part of the `component.php`), Name.utils.php (but not the part of the `utils.php`)

## Resources

| Title        | Purpose                                                        | Link          |
| ------------ | -------------------------------------------------------------- | ------------- |
| Devil May Cry Wiki | Character bios, story, and references for DMC characters | https://devilmaycry.fandom.com/ |
| PHP Manual   | Reference for PHP syntax and functions                         | https://www.php.net/manual/en/ |
| CSS Tricks   | CSS layout and styling tips                                    | https://css-tricks.com/ |
| MDN Web Docs | HTML, CSS, and JavaScript documentation                        | https://developer.mozilla.org/ |
