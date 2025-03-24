<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: black;
      }
      .form {
        width: 50%;
        height: 500px;
        background-color: rgb(0, 170, 255);

        border-radius: 10px;
      }
      .iflove {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: 300ms all ease-in;
      }
      .images {
        width: 50%;
        height: 300px;
        background: url(https://img.freepik.com/free-vector/cute-panda-with-love-heart-cartoon-vector-icon-illustration-animal-love-icon-concept-isolated-flat_138676-8539.jpg);
        background-position: center;
        background-size: cover;
        margin: auto;
        margin-top: 20px;
        border-radius: 20px;
      }
      input {
        width: 150px;
        height: 50px;
        font-size: 16px;
        color: #fff;
        font-weight: bold;
        border: 1px solid #fff;
        border-radius: 10px;
      }
      .buttons {
        display: flex;
        justify-content: space-around;
      }
      .button_no,
      .button_yes {
        width: 170px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .button_yes input {
        background-color: green;
      }
      .button_no input {
        background-color: red;
      }
      .button_no {
        transition: 200ms all linear;
      }
      .text {
        font-size: 20px;
        color: #fff;
      }
      .yeslove {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        display: none;
        transition: 300ms all ease-in;
      }
      .yeslove img {
        width: 400px;
        height: 400px;
        margin-top: 30px;
        border-radius: 10px;
      }
    </style>
  </head>

  <body>
    <div class="form">
      <div class="iflove">
        <div class="images"></div>
        <div class="text">Beni Seviyor Musun?</div>
        <div class="buttons">
          <div class="button_yes">
            <input type="submit" value="Evet" />
          </div>
          <div class="button_no">
            <input type="submit" value="Hayır " />
          </div>
        </div>
      </div>
      <!-- yes love -->
      <div class="yeslove">
        <img
          src="https://i.pinimg.com/originals/de/46/43/de464394011b723e287ba183ebb48d60.gif"
          alt=""
        />
        <div class="text">Bende seni çok seviyorum</div>
      </div>
    </div>
    <script>
      let button = document.querySelector(".button_no");
      button.addEventListener("mouseover", () => {
        button.style.position = "absolute";
        const maxWidth = window.innerWidth - button.offsetWidth;
        const maxHeight = window.innerHeight - button.offsetHeight;
        const startX = Math.random() * maxWidth;
        const startY = Math.random() * maxHeight;

        button.style.left = `${startX}px`;
        button.style.top = `${startY}px`;
      });
      let button_yes = document.querySelector(".button_yes");
      let iflove = document.querySelector(".iflove");
      let yeslove = document.querySelector(".yeslove");
      button_yes.addEventListener("click", () => {
        iflove.style.display = "none";
        yeslove.style.display = "flex";
      });
    </script>
  </body>
</html>
