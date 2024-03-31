<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      * {
        padding: 0;
        margin: 0;
        font-size: "Poppins", sans-serif;
        box-sizing: border-box;
      }
      header {
        width: 100%;
        height: 97vh;
        background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2)),
          url(bauet.png);
        background-size: cover;
      }
      .text {
        max-width: 650px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-align: center;
      }
      .bauet {
        text-align: center;
        background-color: rgb(69, 117, 160);
        margin: 5px;
        color: white;
      }
      .text span {
        letter-spacing: 5px;
        font-size: 80px;
      }
      .text h1 {
        font-size: 2.7em;
      }
      .text p {
        margin-top: 15px;
        letter-spacing: 3px;
        font-size: 1.3em;
      }
      .text a {
        text-decoration: none;
        background: indianred;
        color: white;
        padding: 10px 20px;
        letter-spacing: 5px;
      }
      .foot {
        text-align: right;
        background-color: rgb(36, 88, 132);
        color: white;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="bauet">
        <h1>Bangladesh Army University of Engineering & Technology, Bauet</h1>
        <h1>Qudirabad, Natore</h1>
      </div>
      <section class="text">
        <span>Bauet</span>
        <h1>CSE Routine Automation Systems...</h1>
        <p>
          We offer a comprehensive Routine Management System to help you
          organize your tasks efficiently.
        </p>
        <br />
        <a href="./cusLogin.php">Visit Now</a>
      </section>
    </header>
    <footer>
      <p class="foot">
        &copy; 2024 Your Company. All rights reserved. Contact: info@example.com
      </p>
    </footer>
  </body>
</html>
