<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Retail Therapy</title>
    <link rel="stylesheet" href="css/screen.css">

    <!-- Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>

  <header class="wrapper">
    <h1>Retail Therapy</h1>
    <img src="images/main-logo.png" alt="Retail Therapy logo" />
  </header>

  <div class="wrapper main-content">
    <div class="main-copy">
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
      <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>
    </div>
    <form class="main-form" action="dispatch.aspx" role="form">
      <div class="form-instructions">
        <h2>Find the best offers below!</h2>
        <p>Enter your information</p>
      </div>
      <ul>
        <li>
          <label>Address:</label>
          <input class="form-control" type="text" name="address" />
        </li>
        <li>
          <label>Zip:</label>
          <input class="form-control" type="text" name="zip" />
        </li>
      </ul>
        <input type="hidden" name="option1" value="123"/>
        <input class="btn" type="submit" value="Submit"/>
    </form>
  </div>

  <footer>
    <div class="wrapper">
      <h4>Find offers from these great providers:</h4>
      <ul>
        <li><img src="images/att-logo.png" alt="AT&T Logo" /></li>
        <li><img src="images/verizon-logo.png" alt="Verizon Logo" /></li>
        <li><img src="images/tw-logo.png" alt="Time Warner Logo" /></li>
        <li><img src="images/mediacom-logo.png" alt="Mediacom Logo" /></li>
        <li><img src="images/charter-logo.png" alt="Charter Logo" /></li>
        <li><img src="images/cox-logo.png" alt="Cox Logo" /></li>
      </ul>
      <div class="footer-disclaimer">
        <small>**Reliant is not affiliated with any of the Phone, TV or Internet providers and is not responsible for any services purchased from these providers or the connection of these services. Actual connection will be performed at a future scheduled date by these providers, and Reliant is not responsible for scheduling and making any connections of otherwise establishing any service with these providers. Reliant does not warrant or endorse any phone, TV or Internet service offered through Reliant Connections and will not be responsible to participating customers for any such claims.</small>
      </div>
      <div class="footer-admin">
        <img src="images/acceller.png" alt="Acceller" />
        <small>&copy; 2014 Retail Therapy. All Rights Reserved.</small>
      </div>
    </div>
  </footer>
   <script src="js/app.js"></script>
   <script src="js/vendors.js"></script>
  </body>
</html>