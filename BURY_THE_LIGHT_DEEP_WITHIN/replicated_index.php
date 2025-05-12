<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Animated Background</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      background: linear-gradient(-45deg, #1e1e1e, #2c3e50, #34495e, #1e1e1e);
      background-size: 400% 400%;
      animation: gradientBG 15s ease infinite;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
  </style>
</head>
<body>
</body>
</html>
