<?php
$year = date('Y');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Portfolio of Patrick Andre C. Sarania, Web Developer.">
  <title>Patrick Andre C. Sarania — Web Developer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root {
      --ink: #f3f5f4;
      --muted: #a3afad;
      --bg: #0b1112;
      --surface: #111a1b;
      --line: rgba(215, 237, 230, .12);
      --accent: #9ce8ca;
      --accent-dark: #10231d;
    }

    * {
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
      scroll-padding-top: 100px;
    }

    body {
      margin: 0;
      color: var(--ink);
      background: var(--bg);
      font-family: Manrope, sans-serif;
      overflow-x: hidden;
    }

    body:before {
      content: "";
      position: fixed;
      inset: 0;
      z-index: -3;
      background: radial-gradient(ellipse at 75% 6%, rgba(80, 151, 126, .13), transparent 34rem), radial-gradient(ellipse at 8% 42%, rgba(55, 103, 92, .1), transparent 32rem), var(--bg);
    }

    .grid {
      position: fixed;
      inset: 0;
      z-index: -2;
      opacity: .13;
      background-image: linear-gradient(var(--line) 1px, transparent 1px), linear-gradient(90deg, var(--line) 1px, transparent 1px);
      background-size: 72px 72px;
      mask-image: linear-gradient(#000, transparent 78%);
      pointer-events: none;
    }

    .shell {
      width: min(1160px, calc(100% - 56px));
      margin: auto;
    }

    nav {
      height: 82px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      top: 0;
      z-index: 5;
      border-bottom: 1px solid transparent;
      transition: background .3s, border-color .3s;
    }

    .logo {
      font: 600 11px "DM Mono", monospace;
      color: var(--ink);
      text-decoration: none;
      letter-spacing: .1em;
    }

    .links {
      display: flex;
      align-items: center;
      gap: 34px;
    }

    .links a,
    .eyebrow {
      color: var(--muted);
      text-decoration: none;
      font: 500 10px "DM Mono", monospace;
      text-transform: uppercase;
      letter-spacing: .15em;
    }

    .links a {
      padding: 10px 0;
      transition: color .2s;
    }

    .links a:hover,
    .links a:focus-visible {
      color: var(--accent);
    }

    .menu {
      display: none;
      background: var(--surface);
      color: var(--ink);
      border: 1px solid var(--line);
      border-radius: 9px;
      width: 42px;
      height: 42px;
      font-size: 20px;
      cursor: pointer;
    }

    .hero {
      min-height: min(760px, calc(100svh - 82px));
      display: grid;
      grid-template-columns: 1.05fr .95fr;
      align-items: center;
      gap: 36px;
      position: relative;
      padding: 70px 0 100px;
    }

    .hero-copy {
      position: relative;
      z-index: 1;
      animation: rise-in .8s both;
    }

    .eyebrow {
      display: flex;
      gap: 12px;
      align-items: center;
      margin: 0 0 25px;
    }

    .pulse {
      width: 7px;
      height: 7px;
      flex: 0 0 7px;
      border-radius: 50%;
      background: var(--accent);
      box-shadow: 0 0 15px rgba(156, 232, 202, .75);
      animation: pulse 2.4s ease-in-out infinite;
    }

    h1 {
      font-size: clamp(3.8rem, 8vw, 7.2rem);
      line-height: .94;
      letter-spacing: -.085em;
      margin: 0;
      max-width: 760px;
    }

    h1 em {
      font-style: normal;
      color: var(--accent);
      background: linear-gradient(110deg, var(--accent) 25%, #e4fff2 48%, var(--accent) 70%);
      background-size: 220% 100%;
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: shimmer 7s ease-in-out infinite;
    }

    .intro {
      color: var(--muted);
      font-size: clamp(1rem, 1.35vw, 1.12rem);
      line-height: 1.85;
      max-width: 510px;
      margin: 27px 0 32px;
    }

    .button {
      display: inline-flex;
      align-items: center;
      gap: 20px;
      color: #10201a;
      background: var(--accent);
      padding: 15px 19px;
      border: 1px solid var(--accent);
      border-radius: 7px;
      font-weight: 800;
      font-size: 12px;
      text-decoration: none;
      transition: transform .25s, background .25s, box-shadow .25s;
    }

    .button:hover {
      transform: translateY(-3px);
      background: #b8f4dc;
      box-shadow: 0 12px 34px rgba(99, 197, 158, .18);
    }

    .button:focus-visible,
    .menu:focus-visible,
    .logo:focus-visible,
    .project:focus-visible {
      outline: 2px solid var(--accent);
      outline-offset: 4px;
    }

    .button span {
      font-size: 18px;
      line-height: 10px;
    }

    .hero-art {
      min-height: 470px;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      animation: rise-in .9s .12s both;
    }

    .orb {
      position: relative;
      width: min(27rem, 78vw);
      aspect-ratio: 1;
      border-radius: 50%;
      background: radial-gradient(circle at 48% 47%, rgba(156, 232, 202, .2), transparent 48%), radial-gradient(circle at 47% 47%, rgba(44, 119, 94, .32), rgba(11, 17, 18, 0) 69%);
      filter: drop-shadow(0 0 60px rgba(84, 194, 149, .14));
      animation: float 8s ease-in-out infinite;
    }

    .orb:before,
    .orb:after {
      content: "";
      position: absolute;
      inset: 9%;
      border: 1px solid rgba(156, 232, 202, .32);
      border-radius: 50%;
      transform: rotate(-30deg) scaleY(.42);
      animation: orbit 24s linear infinite;
    }

    .orb:after {
      inset: 19%;
      transform: rotate(52deg) scaleY(.46);
      border-color: rgba(156, 232, 202, .18);
      animation: orbit-reverse 32s linear infinite;
    }

    .tag-orbit {
      position: absolute;
      top: 50%;
      left: 50%;
      width: min(34rem, 100%);
      aspect-ratio: 1;
      transform: translate(-50%, -50%);
      animation: label-orbit 36s linear infinite;
      pointer-events: none;
    }

    .tag-orbit:before {
      content: "";
      position: absolute;
      inset: 6%;
      border: 1px solid rgba(156, 232, 202, .13);
      border-radius: 50%;
      transform: scaleY(.62);
    }

    .tag-point {
      position: absolute;
    }

    .tag-point.one {
      top: 5%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .tag-point.two {
      top: 61%;
      right: 0;
      transform: translateY(-50%);
    }

    .tag-point.three {
      bottom: 7%;
      left: 14%;
      transform: translate(-50%, 50%);
    }

    .tag {
      display: block;
      padding: 12px 14px;
      background: rgba(17, 26, 27, .9);
      border: 1px solid var(--line);
      border-radius: 7px;
      backdrop-filter: blur(12px);
      font: 10px "DM Mono", monospace;
      color: var(--ink);
      letter-spacing: .08em;
      white-space: nowrap;
      box-shadow: 0 12px 35px rgba(0, 0, 0, .2);
      animation: label-counter-orbit 36s linear infinite;
    }

    .tag.three {
      color: var(--accent);
    }

    .scroll-note {
      position: absolute;
      bottom: 26px;
      left: 0;
      font: 9px "DM Mono", monospace;
      color: var(--muted);
      letter-spacing: .18em;
      writing-mode: vertical-rl;
    }

    section {
      padding: 105px 0;
      position: relative;
    }

    .section-head {
      display: flex;
      justify-content: space-between;
      align-items: end;
      margin-bottom: 38px;
    }

    h2 {
      font-size: clamp(2.5rem, 5vw, 4.4rem);
      margin: 12px 0 0;
      line-height: .98;
      letter-spacing: -.07em;
    }

    .section-number {
      font: 10px "DM Mono", monospace;
      color: var(--accent);
      letter-spacing: .14em;
    }

    .about {
      display: grid;
      grid-template-columns: .9fr 1.3fr;
      gap: 12%;
      padding-top: 80px;
      padding-bottom: 95px;
      border-top: 1px solid var(--line);
    }

    .about p {
      color: #c3ceca;
      font-size: clamp(1.2rem, 2vw, 1.65rem);
      letter-spacing: -.035em;
      line-height: 1.65;
      margin: 0;
    }

    .about p strong {
      color: var(--accent);
      font-weight: 600;
    }

    .facts {
      display: flex;
      flex-wrap: wrap;
      gap: 9px;
      margin-top: 30px;
    }

    .fact {
      padding: 10px 12px;
      border: 1px solid var(--line);
      border-radius: 5px;
      color: var(--muted);
      font: 9px "DM Mono", monospace;
      letter-spacing: .06em;
    }

    #work {
      border-top: 1px solid var(--line);
    }

    .projects {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 14px;
    }

    .project {
      min-height: 315px;
      padding: 26px;
      border: 1px solid var(--line);
      border-radius: 10px;
      background: linear-gradient(145deg, rgba(31, 53, 48, .84), rgba(16, 25, 26, .95));
      overflow: hidden;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      text-decoration: none;
      color: inherit;
      position: relative;
      isolation: isolate;
      transition: transform .35s, border-color .35s, background .35s;
    }

    .project:nth-child(2) {
      background: linear-gradient(145deg, rgba(28, 48, 57, .9), rgba(16, 25, 26, .96));
    }

    .project:nth-child(3) {
      background: linear-gradient(145deg, rgba(52, 47, 39, .72), rgba(16, 25, 26, .96));
    }

    .project:nth-child(4) {
      background: linear-gradient(145deg, rgba(39, 46, 53, .9), rgba(16, 25, 26, .96));
    }

    .project:hover {
      transform: translateY(-5px);
      border-color: rgba(156, 232, 202, .48);
    }

    .project:before {
      content: "";
      width: 230px;
      height: 230px;
      border: 1px solid rgba(156, 232, 202, .12);
      border-radius: 50%;
      position: absolute;
      top: -108px;
      right: -65px;
      z-index: -1;
      transition: transform .5s, border-color .5s;
    }

    .project:hover:before {
      transform: scale(1.16);
      border-color: rgba(156, 232, 202, .4);
    }

    .project small {
      font: 9px "DM Mono", monospace;
      color: var(--accent);
      letter-spacing: .14em;
    }

    .project h3 {
      margin: 14px 0 9px;
      font-size: clamp(1.5rem, 2.5vw, 2rem);
      letter-spacing: -.05em;
    }

    .project p {
      margin: 0;
      color: #aab8b4;
      line-height: 1.7;
      font-size: .88rem;
      max-width: 320px;
    }

    .project .arrow {
      font-size: 26px;
      color: var(--accent);
      align-self: flex-end;
      transition: transform .25s;
    }

    .project:hover .arrow {
      transform: translate(3px, -3px);
    }

    .experience {
      border-top: 1px solid var(--line);
    }

    .job {
      display: grid;
      grid-template-columns: 1.3fr 1.1fr 1fr auto;
      gap: 20px;
      padding: 24px 12px;
      border-bottom: 1px solid var(--line);
      align-items: center;
      transition: padding .25s, background .25s;
    }

    .job:hover {
      padding-left: 20px;
      background: rgba(255, 255, 255, .025);
    }

    .job h3,
    .job p {
      margin: 0;
    }

    .job h3 {
      font-size: .95rem;
    }

    .job p {
      color: var(--muted);
      font-size: .82rem;
    }

    .job time {
      font: 10px "DM Mono", monospace;
      color: var(--accent);
      white-space: nowrap;
    }

    .contact {
      text-align: center;
      padding: 125px 0 100px;
      border-top: 1px solid var(--line);
    }

    .contact .eyebrow {
      justify-content: center;
    }

    .contact h2 {
      font-size: clamp(3.2rem, 7vw, 6.5rem);
      max-width: 900px;
      margin: 15px auto 25px;
    }

    .contact h2 span {
      color: var(--accent);
    }

    .contact .intro {
      margin: 0 auto 30px;
    }

    footer {
      display: flex;
      border-top: 1px solid var(--line);
      padding: 22px 0;
      justify-content: space-between;
      gap: 14px;
      color: var(--muted);
      font: 9px "DM Mono", monospace;
      letter-spacing: .04em;
    }

    .reveal {
      transition: opacity .7s ease, transform .7s cubic-bezier(.2, .8, .2, 1);
    }

    .reveal.show {
      opacity: 1;
      transform: none;
    }

    .projects .project:nth-child(2) {
      transition-delay: .08s;
    }

    .projects .project:nth-child(3) {
      transition-delay: .16s;
    }

    .projects .project:nth-child(4) {
      transition-delay: .24s;
    }

    .js .hero-copy .eyebrow,
    .js .hero-copy h1,
    .js .hero-copy .intro,
    .js .hero-copy .button {
      opacity: 0;
      transform: translateY(16px);
    }

    .js .hero-copy.show .eyebrow,
    .js .hero-copy.show h1,
    .js .hero-copy.show .intro,
    .js .hero-copy.show .button {
      animation: content-rise .65s cubic-bezier(.2, .8, .2, 1) forwards;
    }

    .js .hero-copy.show h1 {
      animation-delay: .08s;
    }

    .js .hero-copy.show .intro {
      animation-delay: .16s;
    }

    .js .hero-copy.show .button {
      animation-delay: .24s;
    }

    @keyframes rise-in {
      from {
        opacity: 0;
        transform: translateY(18px)
      }

      to {
        opacity: 1;
        transform: translateY(0)
      }
    }

    @keyframes content-rise {
      to {
        opacity: 1;
        transform: translateY(0)
      }
    }

    @keyframes float {
      50% {
        transform: translateY(-12px)
      }
    }

    @keyframes pulse {
      50% {
        opacity: .45;
        transform: scale(.8)
      }
    }

    @keyframes orbit {
      to {
        transform: rotate(calc(330deg + var(--morph-turn, 0deg))) scaleY(.42)
      }
    }

    @keyframes orbit-reverse {
      to {
        transform: rotate(calc(-308deg - var(--morph-turn, 0deg))) scaleY(.46)
      }
    }

    @keyframes label-orbit {
      to {
        transform: translate(-50%, -50%) rotate(360deg)
      }
    }

    @keyframes label-counter-orbit {
      to {
        transform: rotate(-360deg)
      }
    }

    @keyframes shimmer {

      50%,
      100% {
        background-position: 100% 0
      }
    }

    @media(max-width:760px) {
      .shell {
        width: min(100% - 36px, 600px);
      }

      nav {
        height: 72px;
      }

      .logo {
        font-size: 9px;
      }

      .links {
        display: none;
        position: absolute;
        top: calc(100% + 8px);
        right: 0;
        left: 0;
        padding: 12px;
        flex-direction: column;
        align-items: stretch;
        gap: 2px;
        background: rgba(17, 26, 27, .97);
        border: 1px solid var(--line);
        border-radius: 9px;
        box-shadow: 0 18px 40px rgba(0, 0, 0, .28);
      }

      .links.open {
        display: flex;
      }

      .links a {
        padding: 13px 10px;
      }

      .menu {
        display: block;
      }

      .hero {
        min-height: auto;
        grid-template-columns: 1fr;
        gap: 0;
        padding: 70px 0 68px;
      }

      h1 {
        font-size: clamp(3.5rem, 15vw, 6rem);
      }

      .hero-art {
        min-height: 290px;
      }

      .orb {
        width: min(20rem, 75vw);
      }

      .scroll-note {
        display: none;
      }

      section {
        padding: 76px 0;
      }

      .about {
        grid-template-columns: 1fr;
        gap: 30px;
        padding-top: 70px;
        padding-bottom: 70px;
      }

      .projects {
        grid-template-columns: 1fr;
      }

      .project {
        min-height: 275px;
      }

      .projects .project:nth-child(n) {
        transition-delay: 0s;
      }

      .section-head {
        margin-bottom: 28px;
        gap: 20px;
      }

      .section-head>.eyebrow {
        text-align: right;
      }

      .job {
        grid-template-columns: 1fr auto;
        gap: 8px 14px;
        padding: 20px 8px;
      }

      .job p {
        grid-column: 1;
      }

      .job time {
        grid-column: 2;
        grid-row: 1 / span 2;
      }

      .contact {
        padding: 85px 0 70px;
      }

      footer {
        flex-direction: column;
        align-items: flex-start;
      }
    }

    @media(max-width:400px) {
      .logo {
        font-size: 8px;
        letter-spacing: .06em;
      }

      .hero .eyebrow {
        font-size: 9px;
        letter-spacing: .1em;
      }

      .tag {
        font-size: 8px;
        padding: 10px;
      }

      .section-head>.eyebrow {
        display: none;
      }
    }

    @media(prefers-reduced-motion:reduce) {

      *,
      *::before,
      *::after {
        animation-duration: .01ms !important;
        animation-iteration-count: 1 !important;
        scroll-behavior: auto !important;
        transition-duration: .01ms !important;
      }

      .reveal {
        opacity: 1;
        transform: none;
      }
    }

    .js .reveal {
      opacity: 0;
      transform: translateY(22px);
    }

    .js .reveal.show {
      opacity: 1;
      transform: none;
    }

    @media(prefers-reduced-motion:reduce) {

      .js .reveal,
      .js .hero-copy .eyebrow,
      .js .hero-copy h1,
      .js .hero-copy .intro,
      .js .hero-copy .button {
        opacity: 1;
        transform: none;
        animation: none;
      }
    }
  </style>
</head>

<body>
  <div class="grid"></div>
  <div class="shell">
    <nav><a class="logo" href="#top">PATRICK ANDRE C. SARANIA</a>
      <div class="links" id="site-links"><a href="#about">About</a><a href="#work">Selected work</a><a href="#contact">Contact</a></div><button class="menu" aria-label="Open menu" aria-controls="site-links" aria-expanded="false">☰</button>
    </nav>
    <main id="top">
      <section class="hero">
        <div class="hero-copy reveal">
          <div class="eyebrow"><i class="pulse"></i> Available for select projects — 2026</div>
          <h1>I make digital <em>ideas</em> feel alive.</h1>
          <p class="intro">Independent web developer crafting memorable interfaces and brand experiences at the intersection of design, motion and technology.</p><a class="button" href="#work">Explore my work <span>↘</span></a>
        </div>
        <div class="hero-art">
          <div class="orb"></div>
          <div class="tag-orbit">
            <div class="tag-point one"><span class="tag">✦ CREATIVE CODE</span></div>
            <div class="tag-point two"><span class="tag">01 / DIGITAL FUTURES</span></div>
            <div class="tag-point three"><span class="tag">SYSTEMS + STORIES</span></div>
          </div>
        </div>
        <div class="scroll-note">SCROLL TO DISCOVER ↓</div>
      </section>
      <section id="about" class="about reveal">
        <div>
          <div class="section-number">01 — ABOUT</div>
          <h2>Human touch,<br>digital pulse.</h2>
        </div>
        <div>
          <p>I’m Patrick Andre C. Sarania, a web developer who turns ambitious ideas into <strong>experiences people want to stay in.</strong> I care about sharp thinking, useful beauty, and the tiny details that make a product feel inevitable.</p>
          <div class="facts"><span class="fact">BASED IN NEW YORK</span><span class="fact">8+ YEARS EXPERIENCE</span><span class="fact">WORKING GLOBALLY</span></div>
        </div>
      </section>
      <section id="work">
        <div class="section-head reveal">
          <div>
            <div class="section-number">02 — SELECTED WORK</div>
            <h2>Signals from the studio.</h2>
          </div><span class="eyebrow">2023 — 2026</span>
        </div>
        <div class="projects">
          <a class="project reveal" href="#contact">
            <div><small>BRAND PLATFORM / 2026</small>
              <h3>Nova Industries</h3>
              <p>Building a speculative identity for a new generation of material science.</p>
            </div>
            <div class="arrow">↗</div>
          </a>
          <a class="project reveal" href="#contact">
            <div><small>WEB EXPERIENCE / 2025</small>
              <h3>Afterlight</h3>
              <p>An immersive digital home for a boundary-pushing architecture practice.</p>
            </div>
            <div class="arrow">↗</div>
          </a>
          <a class="project reveal" href="#contact">
            <div><small>PRODUCT DESIGN / 2025</small>
              <h3>Orbit Finance</h3>
              <p>Making financial clarity feel as effortless as a conversation.</p>
            </div>
            <div class="arrow">↗</div>
          </a>
          <a class="project reveal" href="#contact">
            <div><small>CAMPAIGN / 2024</small>
              <h3>Kinfolk Earth</h3>
              <p>A vivid, hopeful campaign designed to inspire collective action.</p>
            </div>
            <div class="arrow">↗</div>
          </a>
        </div>
      </section>
      <section class="reveal">
        <div class="section-head">
          <div>
            <div class="section-number">03 — EXPERIENCE</div>
            <h2>A few places I’ve helped shape.</h2>
          </div>
        </div>
        <div class="experience">
          <div class="job">
            <h3>Independent Studio</h3>
            <p>Creative Director & Developer</p>
            <p>Global / Remote</p><time>2022 — NOW</time>
          </div>
          <div class="job">
            <h3>Monument</h3>
            <p>Senior Digital Designer</p>
            <p>New York, NY</p><time>2020 — 2022</time>
          </div>
          <div class="job">
            <h3>Studio Current</h3>
            <p>Interaction Designer</p>
            <p>Brooklyn, NY</p><time>2018 — 2020</time>
          </div>
        </div>
      </section>
      <section id="contact" class="contact reveal">
        <div class="eyebrow" style="justify-content:center">04 — LET'S CONNECT</div>
        <h2>Have an idea with <span>energy?</span></h2>
        <p class="intro" style="margin:0 auto 30px">I’m always keen to hear about ambitious projects, kind people, and strange new possibilities.</p><a class="button" href="mailto:pa.sarania@spamast.edu.ph">pa.sarania@spamast.edu.ph <span>↗</span></a>
      </section>
    </main>
    <footer><span>© <?= $year ?> PATRICK ANDRE C. SARANIA</span><span>DESIGNED WITH INTENT / BUILT WITH CURIOSITY</span><span>NYC · 40.7128° N</span></footer>
  </div>
  <script>
    document.documentElement.classList.add('js');
    const menuButton = document.querySelector('.menu');
    const links = document.querySelector('.links');
    menuButton.addEventListener('click', () => {
      const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
      menuButton.setAttribute('aria-expanded', String(!isOpen));
      menuButton.setAttribute('aria-label', isOpen ? 'Open menu' : 'Close menu');
      links.classList.toggle('open', !isOpen)
    });
    links.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
      menuButton.setAttribute('aria-expanded', 'false');
      menuButton.setAttribute('aria-label', 'Open menu');
      links.classList.remove('open')
    }));
    if ('IntersectionObserver' in window) {
      const observer = new IntersectionObserver(entries => entries.forEach(entry => entry.target.classList.toggle('show', entry.isIntersecting)), {
        threshold: .12
      });
      document.querySelectorAll('.reveal').forEach(element => observer.observe(element))
    } else {
      document.querySelectorAll('.reveal').forEach(element => element.classList.add('show'))
    }
    const orb = document.querySelector('.orb');
    const hero = document.querySelector('.hero');
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    let morphFrame = 0;
    const updateOrbMorph = () => {
      morphFrame = 0;
      if (reduceMotion.matches) return;
      const progress = Math.max(0, Math.min(1, window.scrollY / hero.offsetHeight));
      const shift = progress * 12;
      orb.style.borderRadius = `${50-shift}% ${50+shift}% ${50-shift*.65}% ${50+shift*.65}% / ${50+shift*.8}% ${50-shift*.8}% ${50+shift*.5}% ${50-shift*.5}%`;
      orb.style.setProperty('--morph-turn', `${progress*55}deg`)
    };
    const requestOrbMorph = () => {
      if (!morphFrame) morphFrame = window.requestAnimationFrame(updateOrbMorph)
    };
    window.addEventListener('scroll', requestOrbMorph, {
      passive: true
    });
    window.addEventListener('resize', requestOrbMorph);
    reduceMotion.addEventListener('change', requestOrbMorph);
    updateOrbMorph();
  </script>
</body>

</html>