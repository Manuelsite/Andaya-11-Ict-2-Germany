<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>home</title>
  </head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#">Germany</a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="culture.php">Cultute</a></li>
        <li><a href="delicacy.html">Delicacy</a></li>
        <li><a href="tourist.html">Tourist Spot</a></li>
        <li><a href="berlin.html">Map</a></li>
      </ul>
    </nav>
    <div class="container">
      <div class="container__left">
        <h1>Germany Culture</h1>
        <div class="container__btn">
        </div>
      </div> 
      <div class="container__right">
        <div class="images">
          <img src="./otherimg/1.jpeg" alt="tent-1" class="tent-1" />
          <img src="./otherimg/2.jpeg" alt="tent-2" class="tent-2" />
        </div>
        <div class="content">
          <h2>What is the culture of Germany?</h2>
      <p>Considered a country of thinkers, poets, and, nowadays, businesspeople,<b> German culture and people are, to a large extent, all about reason and logic.</b> Germany shares a lot of culture and tradition with neighboring countries, especially the Germanic-speaking Austria and Switzerland.<p>

<p> An important thing to know about German culture is that <b>residents are expected to respect order and structure.</b> It’s important to be on time, not just for work but for social events too, and to follow rules that are in place for the greater good of everybody who lives there.</p>

<p>German culture has been shaped over thousands of years. It was<b> originally a pagan country,</b> and then an<b> important seat of the Holy Roman Empire.</b> It was also the<b> birthplace of the Protestant reformation.</b> Today, Christians, Catholics, and Muslims coexist happily in Germany.</p>
        </div>
      </div>

<style>
@import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap");

:root {
  --primary-color: #f3eae5;
  --text-dark: #2c2724;
  --white: #ffffff;
  --max-width: 1200px;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.btn {
  outline: none;
  border: none;
  transition: 0.3s;
  cursor: pointer;
}

img {
  display: flex;
  width: 100%;
}

a {
  text-decoration: none;
  transition: 0.3s;
}

body {
  font-family: "Montserrat", sans-serif;
}

nav {
  position: fixed;
  isolation: isolate;
  width: 100%;
  z-index: 9;
}

.nav__header {
  padding: 1rem;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: var(--text-dark);
}

.nav__logo a {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--white);
}

.nav__menu__btn {
  font-size: 1.5rem;
  color: var(--white);
  cursor: pointer;
}

.nav__links {
  position: absolute;
  top: 60px;
  left: 0;
  width: 100%;
  padding: 2rem;
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 2rem;
  background-color: var(--text-dark);
  transition: 0.5s;
  z-index: -1;
  transform: translateY(-100%);
}

.nav__links.open {
  transform: translateY(0);
}

.nav__links a {
  font-weight: 600;
  color: var(--primary-color);
}

.nav__links a:hover {
  color: var(--white);
}

.nav__btns {
  display: none;
}

.container {
  max-width: var(--max-width);
  margin: auto;
  padding: 5rem 0;
  position: relative;
  isolation: isolate;
  display: grid;
  gap: 2rem;
  overflow: hidden;
}

.container__left {
  padding-inline: 1rem;
  text-align: center;
}

.container__left h1 {
  margin-bottom: 2rem;
  font-size: 2rem;
  font-weight: 700;
  line-height: 4.5rem;
  color: var(--text-dark);
}

.container__left .btn {
  padding: 1rem 2rem;
  letter-spacing: 2px;
  color: var(--white);
  background-color: var(--text-dark);
  border-radius: 5rem;
}

.container__left .btn:hover {
  color: var(--text-dark);
  background-color: var(--primary-color);
}

.container__right {
  position: relative;
  isolation: isolate;
  display: grid;
  gap: 2rem;
}

.container__right::before {
  position: absolute;
  content: "";
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 0;
  transform-origin: left;
  height: 100%;
  background-color: var(--primary-color);
  border-radius: 1rem;
  z-index: -1;

  animation: show 0.75s 1.25s ease-in-out forwards;
}

@keyframes show {
  0% {
    width: 0;
  }
  100% {
    width: calc(100% - 2rem);
  }
}

.images {
  display: flex;
  align-items: center;
  justify-content: center;
}

.tent-1 {
  max-width: 300px;
  transform: translateX(1rem);
  border-radius: 1rem;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
}

.tent-2 {
  max-width: 180px;
  transform: translateX(-1rem);
  border-radius: 1rem;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
}

.content {
  padding-block: 0 5rem;
  padding-inline: 2rem;
}

.content h4 {
  margin-bottom: 1rem;
  font-size: 1rem;
  font-weight: 500;
  color: var(--text-dark);
}

.content h2 {
  margin-bottom: 0.5rem;
  font-size: 1.3rem;
  font-weight: 700;
  letter-spacing: 2px;
  color: var(--text-dark);
}

.content h3 {
  margin-bottom: 1rem;
  font-size: 1rem;
  font-weight: 600;
  color: var(--text-dark);
}

.content p {
  line-height: 1.75rem;
  color: var(--text-dark);
}

.location {
  position: absolute;
  left: 1rem;
  bottom: 1rem;
  padding: 1rem 2rem 1rem 1rem;
  border-radius: 1rem;
  display: flex;
  align-items: center;
  gap: 1rem;
  font-size: 0.9rem;
  font-weight: 600;
  color: var(--text-dark);
  background-color: var(--primary-color);
  border: 10px solid var(--white);
  border-bottom: none;
}

.location span {
  padding: 5px 10px;
  font-size: 1.5rem;
  color: var(--text-dark);
  background-color: var(--white);
  border-radius: 10px;
}

.socials {
  position: absolute;
  bottom: 1rem;
  right: 1rem;
  display: flex;
  align-items: center;
  gap: 10px;
}

.socials a {
  font-size: 1.25rem;
  color: var(--text-dark);
}

@media (width > 768px) {
  .nav {
    position: static;
    padding: 2rem 1rem;
    max-width: var(--max-width);
    margin-inline: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
  }

  .nav__header {
    flex: 1;
    padding: 0;
    background-color: transparent;
  }

  .nav__logo a {
    color: var(--text-dark);
  }

  .nav__menu__btn {
    display: none;
  }

  .nav__links {
    position: static;
    padding: 0;
    flex-direction: row;
    background-color: transparent;
    transform: none;
  }

  .nav__links a,
  .nav__links a:hover {
    color: var(--text-dark);
  }

  .nav__btns {
    flex: 1;
    display: flex;
    align-items: center;
    gap: 1rem;
  }

  .nav__btns .btn {
    font-size: 1.5rem;
    color: var(--text-dark);
    background-color: transparent;
  }

  .container {
    grid-template-columns: 2fr 3fr;
    align-items: center;
    padding: 2rem 0;
  }

  .container__left {
    text-align: left;
  }
}

@media (width > 1024px) {
  .container__right {
    grid-template-columns: 1fr 2fr;
    align-items: center;
  }

  .container__right::before {
    bottom: unset;
    top: 0;
    height: 90%;
  }

  .images {
    flex-direction: column;
  }

  .tent-1 {
    width: calc(100% + 10rem);
    max-width: 325px;
    transform: translate(-2rem, 2rem);
  }

  .tent-2 {
    max-width: 200px;
    transform: translate(4rem, -1rem);
  }

  .content {
    padding-block: 5rem;
    text-align: left;
    max-width: auto;
    margin-inline-start: unset;
  }
}
</style>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
  </body>
</html>