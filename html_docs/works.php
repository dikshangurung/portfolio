
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css_docs/style.css" rel="stylesheet" />
    <title>Website</title>
  </head>
  <body>
    <!-----------------------------------Nav section----------------------------------------->
    <nav>
      <img src="../images/logo2.png" alt="logo" class="logo" />
      <ul>
        <li class="login">
          <a class="nav_link">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
              />
            </svg>
            <span>LOGIN</span>
          </a>
        </li>
        <li>
          <a class="nav_link" href="../index.php">
            <svg
              width="24"
              height="24"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
              class="transform transition-transform duration-500 ease-in-out"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
              />
            </svg>
            <span>HOME</span>
          </a>
        </li>
        <li>
          <a class="nav_link" href="about.php">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
              />
            </svg>
            <span>ABOUT</span>
          </a>
        </li>
        <li>
          <a class="nav_link" href="works.php">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
              />
            </svg>
            <span>WORKS</span>
          </a>
        </li>
        <li>
          <a class="nav_link" href="contacts.php">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
              />
            </svg>
            <span>CONTACT</span>
          </a>
        </li>
      </ul>
    </nav>
    
    <!-- /*---------------------------------Game--------------------------------------------------------------------- -->
    <section class="game-section" id="works">
      <div class="game">
        <h1 class="line">My <span>Games</span></h1>
        <div class="left">
          <div class="carousel_images">
            <ul>
              <li class="carousel">
                <h2>WEST HEIST</h2>
                <p>
                  Inspired by plant v zombie,I created weist heist.It is one of
                  my many projects that I had made through my journey of
                  learning 2d unity game development.The game is still on
                  developing phase so, more content will be added later.There
                  are pirates in the game that intend to loot bank. We as a
                  player are given 2 heros to defend our bank.Bank continously
                  generates money that can be funded to spwan heros of our
                  desire.<br />Our heros consists of a rouge pirate and a
                  knight.
                </p>
                <div class="btn play">Play demo</div>
                <div class="btn download">
                  Download
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"
                    />
                  </svg>
                </div>
              </li>

              <li class="carousel">
                <h2>Dice Game</h2>
                <p>
                  Dice game is a simple game made with Html,Css and
                  Javascript.It is originally designed by Jonas
                  Schmedtmann(online teacher,developer,udemy instructor).I have
                  coded this game on the basis of desgin he laid out.All of the
                  assets used while making this game is taken from him.I have
                  only coded it on Html,Css,Jss putting the pieces together.
                </p>
                <div class="btn play">Play demo</div>
                <div class="btn download">
                  Download
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"
                    />
                  </svg>
                </div>
              </li>
              <li class="carousel">
                <h2>Space war</h2>
                <p>
                  Space war is a game where we play as a space police, where our
                  mission is to defeat the ship of evil general Darth
                  Vader(#Star Wars) and protect the space.It is one of a game
                  that I was originally designed by Rick(udemy C# mentor),which
                  I later redesigned giving it my own twist and story to the
                  game.During this gane I learned many important game concept
                  like path finding and advanced level design.This is under
                  maintenance because my previous unity project was corrupted
                  due to unknown reason.The screenshot posted is taken at early
                  stage of the game development.I will be updating it once it
                  find my code.
                </p>
                <div class="btn play">Play demo</div>
                <div class="btn download">
                  Download
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"
                    />
                  </svg>
                </div>
              </li>
              <li class="carousel"></li>
            </ul>
            <div class="dash one"></div>
            <div class="dash two"></div>
            <div class="dash three"></div>
            <div class="dash four"></div>
            <div class="circle cleft">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15 19l-7-7 7-7"
                />
              </svg>
            </div>
            <div class="circle cright">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-----------------------------------------------Project section ------------------------------>
    <section class="projects">
      <h1 class="line"><span>College</span> Projects</h1>
      <ul class="project-container">
        <li>
          <span>Hero</span>
          <div class="project-img">
            <img
              src="../images/1.jpg"
              href="./Lab/Lab 2/index.html"
              alt="pallets"
              class="one"
            />
          </div>
        </li>
        <li>
          <span>Button</span>
          <div class="project-img">
            <img src="../images/2.jpg" alt="pallets" class="two" />
          </div>
        </li>
        <li>
          <span>404 Error</span>
          <div class="project-img">
            <img src="../images/3.jpg" alt="pallets" class="three" />
          </div>
        </li>
        <li>
          <span>Pallets</span>
          <div class="project-img">
            <img src="../images/4.jpg" alt="pallets" class="four" />
          </div>
        </li>
        <li>
          <span>Table</span>
          <div class="project-img">
            <img src="../images/5.jpg" alt="pallets" class="five" />
          </div>
        </li>
        <li>
          <span>Portfolio</span>
          <div class="project-img">
            <img src="../images/7.jpg" alt="pallets" class="six" />
          </div>
        </li>
      </ul>
    </section>
    <script src="../js_docs/scriptok.js"></script>
    <?php include '../php_files/welcome.php';?>
  </body>
</html>
