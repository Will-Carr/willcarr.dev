<div id="sidebar-background" class="col-12 col-md-3 vh-100 position-fixed bg-info"></div>
<div id="background" class="vh-100 vw-100 position-fixed"></div>
<div id="main-background" class="col-12 col-md-9 vh-100 position-fixed bg-light"></div>

<!-- LARGE SCREEN SIDEBAR -->
<div id="sidebar" class="col-3 d-none d-md-flex flex-column justify-content-between">

  <div>
    <picture>
      <source type="image/webp" srcset="/images/headshot.webp">
      <source type="image/jp2" srcset="/images/headshot.jp2">
      <source type="image/jxr" srcset="/images/headshot.jxr">
      <img id="headshot" class="d-block rounded-circle w-75 mx-auto mt-4" src="/images/headshot.png" alt="Headshot" />
    </picture>

    <h2 class="sidebar-text text-center mt-4">Will Carr</h2>
    <h4 class="sidebar-text text-center">Full-Stack Developer</h4>

    <div id="links" class="mx-4 mt-4">
      <div id="cur-page-carat"></div>
      <div class="mt-2">
        <div<?= $active_page == "home" ? " class='active-page'" : ""; ?>><a class="link" href="/">Home</a></div>
        <div class="mt-2<?= $active_page == "portfolio" ? " active-page" : ""; ?>"><a class="link" href="/portfolio/">Portfolio</a></div>
        <div class="mt-2<?= $active_page == "skills" ? " active-page" : ""; ?>"><a class="link" href="/skills/">Skills</a></div>
        <div class="mt-2<?= $active_page == "contact" ? " active-page" : ""; ?>"><a class="link" href="/contact/">Contact Me</a></div>
      </div>
    </div>
  </div>

  <div class="icons m-4">
    <a class="mr-2" href="mailto:will@willcarr.dev">
      <span class="sr-only">Email will@willcarr.dev</span>
      <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z" />
        </svg>
    </a>
    <a class="mr-1" href="https://github.com/Will-Carr">
      <span class="sr-only">Go to Will Carr's Github</span>
      <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z" />
        </svg>
    </a>
    <a href="https://www.linkedin.com/in/will-carr/">
      <span class="sr-only">Go to Will Carr's LinkedIn</span>
      <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M365 1414h231v-694h-231v694zm246-908q-1-52-36-86t-93-34-94.5 34-36.5 86q0 51 35.5 85.5t92.5 34.5h1q59 0 95-34.5t36-85.5zm585 908h231v-398q0-154-73-233t-193-79q-136 0-209 117h2v-101h-231q3 66 0 694h231v-388q0-38 7-56 15-35 45-59.5t74-24.5q116 0 116 157v371zm468-998v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z" />
        </svg>
    </a>
  </div>

</div>


<!-- SMALL SCREEN COLLAPSE NAVBAR -->
<nav class="navbar navbar-dark bg-info col-12 d-md-none">
  <p class="navbar-brand"></p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav mr-auto mt-2">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/portfolio/">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/skills/">Skills</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact/">Contact Me</a>
      </li>
      <li class="nav-item">
        <div class="icons d-flex">
          <a class="nav-link mr-2" href="mailto:will@willcarr.dev">
            <span class="sr-only">Email will@willcarr.dev</span>
            <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z" />
              </svg>
          </a>
          <a class="nav-link mr-1" href="https://github.com/Will-Carr">
            <span class="sr-only">Go to Will Carr's Github</span>
            <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z" />
              </svg>
          </a>
          <a class="nav-link" href="https://www.linkedin.com/in/will-carr/">
            <span class="sr-only">Go to Will Carr's LinkedIn</span>
            <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M365 1414h231v-694h-231v694zm246-908q-1-52-36-86t-93-34-94.5 34-36.5 86q0 51 35.5 85.5t92.5 34.5h1q59 0 95-34.5t36-85.5zm585 908h231v-398q0-154-73-233t-193-79q-136 0-209 117h2v-101h-231q3 66 0 694h231v-388q0-38 7-56 15-35 45-59.5t74-24.5q116 0 116 157v371zm468-998v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z" />
              </svg>
          </a>
        </div>
      </li>
    </ul>
  </div>
</nav>
