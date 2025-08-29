<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Demo Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin-top: 100px;
      background-color: #f4f4f4;
    }
    .container {
      display: inline-block;
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0px 2px 10px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to PHP Demo Page</h1>
    <p>Today is: <strong><?php echo date('l, F j, Y'); ?></strong></p>
    <p>Server Time: <strong><?php echo date('h:i:s A'); ?></strong></p>
    <p>Served by: <strong><?php echo gethostname(); ?></strong></p>
  </div>
</body>
</html>
