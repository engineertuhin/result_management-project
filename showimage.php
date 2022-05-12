
<?php 

include_once('admin/database.php');

?>
<?php
$id=$_REQUEST['id'];
$query="select * from notise where id='$id'";
$conn=$connect -> query($query);
$data=$conn-> fetch_assoc();

?>





<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>View notise</title>
  <meta name="description" content="Image zoom that makes sense.">
  <meta name="keywords" content="Image,Zoom,Image Zoom,JavaScript">
  <meta name="author" content="Desmond Ding">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  <script src="https://kit.fontawesome.com/2762528b24.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2762528b24.js" crossorigin="anonymous"></script>

  <style>
  body{
    bbackground: #56CCF2;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2F80ED, #56CCF2);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2F80ED, #56CCF2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


    
  }
    .container {
      max-width: 600px;
    }

    section.header {
      margin-top: 4rem;
      text-align: center;
    }

    section.content {
      text-align: center;
    }

    footer {
      text-align: center;
    }

    .value-img {
      display: block;
      text-align: center;
      margin: 2em 0;
    }

    img {
      max-width: 100%;
    }

    @media (min-width: 550px) {
      .header {
        margin-top: 10rem;
      }
    }

    .button.button-primary {
      background-color: #f9c04d !important;
      border-color: #f9c04d !important;
    }

    .button.button-secondary {
      background-color: #eee !important;
      border-color: #eee !important;
    }
  </style>

</head>

<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">

    <section class="header">
      <h2>View Notise</h2>
      <h4>Published</h4>
      <h5><?php echo $data['date']?></h5>
      <a href="download.php?file=<?php echo $data['image']?>"><i style="color:green;" class="fas fa-arrow-circle-down"> Download</i></a> 
      <div class="value-img"  >
        <img id="img-default" src="admin/notiseimage/<?php echo $data['image']?>" data-action="zoom" data-original="admin/notiseimage/<?php echo $data['image']?>"
          alt="journey_start_thumbnail" />
      </div>
    </section>
    <section class="content">
      <h4>About Notise</h4>
      <p>
        <small style=""><?php echo $data['Description']?></small>
      </p>


  
  <!-- Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="build/zooming.js"></script>
  <script>
    const defaultZooming = new Zooming()
    const customZooming = new Zooming()
    const config = customZooming.config()
    const TRANSITION_DURATION_DEFAULT = config.transitionDuration
    const BG_COLOR_DEFAULT = config.bgColor
    const SCALE_BASE_DEFAULT = config.scaleBase
    const ACTIVE_CLASS = 'button-primary'

    const btnFast = document.getElementById('btn-fast')
    const btnDark = document.getElementById('btn-dark')
    const btnScaleSmall = document.getElementById('btn-scale-small')

    document.addEventListener('DOMContentLoaded', function () {
      defaultZooming.listen('#img-default')
      customZooming.listen('#img-custom')
    })

    btnFast.addEventListener('click', function (event) {
      const transitionDuration = toggleActive(btnFast)
        ? 0.2
        : TRANSITION_DURATION_DEFAULT

      customZooming.config({ transitionDuration })
    })

    btnDark.addEventListener('click', function (event) {
      const bgColor = toggleActive(btnDark)
        ? 'black'
        : BG_COLOR_DEFAULT

      customZooming.config({ bgColor })
    })

    btnScaleSmall.addEventListener('click', function (event) {
      const scaleBase = toggleActive(btnScaleSmall)
        ? 0.7
        : SCALE_BASE_DEFAULT

      customZooming.config({ scaleBase })
    })

    function isActive(el) {
      return el.classList.contains(ACTIVE_CLASS)
    }

    function activate(el) {
      el.classList.add(ACTIVE_CLASS)
    }

    function deactivate(el) {
      el.classList.remove(ACTIVE_CLASS)
    }

    function toggleActive(el) {
      if (isActive(el)) {
        deactivate(el)
        return false
      } else {
        activate(el)
        return true
      }
    }

    const copyright = 'Copyright © ' +
      new Date().getFullYear() +
      ' <a href="https://github.com/kingdido999">Desmond Ding</a>' +
      ' and other <a href="https://github.com/kingdido999/zooming/graphs/contributors">contributors</a>'

    document.getElementById('copyright').innerHTML = copyright

  </script>
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>