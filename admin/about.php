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
                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
              />
            </svg>
            <span>LOGIN</span>
          </a>
        </li>
        <li>
          <a class="nav_link" href="home.php">
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
    <?php include '../php_files/welcome.php';?>
    <!-- -------------------------------------ABOUT SECTION---------------------------------------------------------- -->
    <section class="parent">
      <section class="about-section" id="about">
        <div class="about">
          <h1 class="line">ABOUT <span>ME</span></h1>
          <aside class="about-left">
            <img src="../images/bob.jpg" alt="photo" />
          </aside>
          <aside class="about-right">
            <h2>Personal Information</h2>
            <ul class="left-this">
              <li>First Name: <span>Dikshan</span></li>
              <li>Age: <span>20</span></li>
              <li>Nation: <span>Nepal</span></li>
              <li>Phone: <span>9819109573</span></li>
            </ul>
            <ul class="right-this">
              <li>Last Name: <span>Gurung</span></li>
              <li>DOB: <span>2058/09/25</span></li>
              <li>City: <span>Pokhara</span></li>
              <li>Email: <span>dxngrg2058@gmail.com</span></li>
            </ul>
            <button href="#" class="download">
              Download<svg
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
            </button>
          </aside>
        </div>
      </section>
      <!-----------------------------------Skills section----------------------------------------->
      <section class="skills">
        <h1 class="line"><span>My</span> Skills</h1>
        <aside class="left">
          <h2 class="exp">My Journey and skills.</h2>
          <p>
            I currenty design and develop website and games for personal use
            only.I am on my journey to become an indie game developer.I intend
            to learn and implement AI on games to make the games more immersive
            and enjoyable for players.My aim is to learn more about AI and games
            embracing the challenges it brings and grow as a developer and
            person.
          </p>
          <div class="btn more">Read more</div>
        </aside>
        <aside class="right">
          <div class="content">
            <div class="marginp">
              <span class="start">HTML</span>
              <span class="end he">75%</span>
            </div>
            <div class="lines hl"></div>
          </div>
          <div class="content">
            <div class="marginp">
              <span class="start">CSS</span>
              <span class="end ce">70%</span>
            </div>
            <div class="lines cl"></div>
          </div>
          <div class="content">
            <div class="marginp">
              <span class="start">JS</span>
              <span class="end je">45%</span>
            </div>
            <div class="lines jl"></div>
          </div>
          <div class="content">
            <div class="marginp">
              <span class="start">C# unity</span>
              <span class="end pe">55%</span>
            </div>
            <div class="lines pl"></div>
          </div>
        </aside>
      </section>
      <script src="../js_docs/logreg.js"></script>
    </section>
  </body>
</html>
