<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
<link rel="stylesheet" type="text/css" href="images.css">

</head>
<body>
  <div class="wrapper"> <!-- Start page wrapper -->

    <?php include("navbar.php"); ?>

    <main class="gallery-section">
      <div class="gallery">
        <div class="gallery-head">
          <h2 style="font-size: 40px"><b>GALLERY</b></h2>
        </div>

        <div class="gallery-container">
          <div class="gallery-item">
            <img src="images/image-1.jpeg" alt="Gallery 1">
          </div>
          <div class="gallery-item">
            <img src="images/image-2.jpeg" alt="Gallery 2">
          </div>
          <div class="gallery-item">
            <img src="images/image-3.jpeg" alt="Gallery 3">
          </div>
          <div class="gallery-item">
            <img src="images/image-4.jpeg" alt="Gallery 4">
          </div>
          <div class="gallery-item">
            <img src="images/image-5.jpeg" alt="Gallery 5">
          </div>
        </div>
      </div>
    </main>

    <footer class="footer">
      <div class="footer-bottom">
        <p>&copy; 2025 Qejani Hostels. All Rights Reserved.</p>
      </div>
    </footer>

  </div> <!-- End page wrapper -->
</body>
</html>
