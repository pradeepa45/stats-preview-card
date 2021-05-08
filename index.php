<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">

  <title>Frontend Mentor | Stats preview card component</title>

  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  <style>
    .attribution {
      font-size: 11px;
      text-align: center;
      background-color: blueviolet;
      color: white;
      padding: 20px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    .attribution a {
      color: white;
      font-style: normal;
    }

    .main-box {
      display: flex;
      color: white;
      margin-right: 15%;
      margin-left: 15%;
      margin-top: 5%;
      align-items: center;
    }

    body {
      background-color: black;
    }

    .image {
      height: 374px;
      width: auto;
    }

    .insights {
      color: blueviolet;
    }

    .main-text {
      display: flex;
      flex-direction: column;
      background-color:#1d2352;
      /* margin-top: 20px; */
      padding: 30px;
    }

    .one-more {
      display: flex;
      text-align: center;
    }

    .lbox {
      text-align: center;
      padding: calc(200px / 12);
    }

    div .imgcontainer {
      background-color: violet;
      opacity: 0.3;
      z-index: 1;
      
    }
    @media screen and (max-width: 575px){
      .main-box{
        flex-direction: column-reverse;
        margin: 10%;
        justify-items: center;
        border-radius: 15%;
      }
      .one-more{
        flex-direction: column;
      }
      .image{
        width: 100%;
        height: auto;
      }
      .main-text{
        text-align: center;
      }
    }
  </style>
</head>

<body>

  <div class='main-box'>
    <div class="main-text">
      <h2>Get <span class="insights">insights</span> that help your business grow.</h2>

      <p> Discover the benefits of data analytics and make better decisions regarding revenue, customer
        experience, and overall efficiency.</p>

      <div class="one-more">
        <div class="lbox">
          <h2>10k+</h2>
          <p>COMPANIES</p>
        </div>
        <div class="lbox">
          <h2>314</h2>
          <p>TEMPLATES</p>
        </div>
        <div class="lbox">
          <h2>12M+</h2>
          <p>QUERIES</p>
        </div>
      </div>
    </div>
    <div class="imgcontainer">
      <img src="images\image-header-desktop.jpg" class="image">
    </div>
  </div>

  <footer class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>.
    <br />
    Coded with ❤ by <a href="#">Pradeepa</a>.
  </footer>
</body>

</html>