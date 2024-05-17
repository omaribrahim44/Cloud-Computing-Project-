<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <style>
      body {
        font-family: "Poppins";
        /*
        background-color: #eff9ff;
        */
        background-image: url("1600w-F2CyNS5sQdM.webp");
        background-repeat: no-repeat;
        background-size: cover;
        animation: pan 6s infinite alternate linear;
        margin: 0;
        padding: 0;
      }
      @keyframes pan {
        100% {
          background-position: 15% 50%;
        }
      }

      h1 {
        color: #333;
        text-align: center;
        margin-top: 30px;
      }

      .container {
        max-width: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      h2 {
        color: #ff5f6d;
        margin-bottom: 20px;
        text-align: center;
      }

      form {
        width: 100%;
      }

      label {
        font-weight: bold;
        color: #333;
      }

      input[type="text"],
      input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        border-radius: 28px;
      }

      input[type="submit"] {
        background-color: #ff5f6d;
        color: white;
        padding: 15px 20px;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
        margin-left: 45%;
      }

      input[type="submit"]:hover {
        background-color: #ff3c4e;
      }
      .background {
        position: fixed;
        top: -50vmin;
        left: -50vmin;
        width: 90vmin;
        height: 90vmin;
        border-radius: 47% 53% 61% 39% / 45% 51% 49% 55%;
        background-color: #ff5f6d;
      }
      .background::after {
        content: "";
        position: inherit;
        right: -50vmin;
        bottom: -55vmin;
        width: inherit;
        height: inherit;
        border-radius: inherit;
        background-color: #ff5f6d;
      }
    </style>
  </head>
  <body>
    <h1>TEAM 15 Project</h1>
    <div class="background"></div>
    <div class="container">
      <h2>Registration Form</h2>
      <form action="connect.php" method="POST">
        <label for="Name">Name:</label><br />
        <input type="text" name="Name" id="Name" required /><br />

        <label for="Age">Age:</label><br />
        <input type="number" name="Age" id="Age" required /><br />

        <label for="Id">ID:</label><br />
        <input type="text" name="Id" id="Id" required /><br />

        <label for="CGPA">CGPA:</label><br />
        <input type="text" name="CGPA" id="CGPA" required /><br />

        <label for="Relationship">Relationship:</label><br />
        <input
          type="text"
          name="Relationship"
          id="Relationship"
          required
        /><br />

        <input type="submit" name="submit" id="submit" value="Submit" />
      </form>
    </div>
  </body>
</html>
