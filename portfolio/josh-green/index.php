<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#17a2b8" />
  <meta name="keywords" content="willcarr.dev, will carr, william carr, carr, web, website, software, developer, engineer, full-stack, full stack, frontend, front-end, front end, backend, back-end, back end, portfolio, github, linkedin, josh green, jgreen">
  <meta name="description" content="Will Carr developed Josh Green's portfolio during the winter of 2021, and continues to maintain it.">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="/portfolio/style.css">

  <title>Will Carr: Josh Green's Portfolio</title>
  <link href="/images/favicon.png" rel="icon" type="image/jpeg" />
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <?php $active_page = "portfolio"; include "{$_SERVER['DOCUMENT_ROOT']}/includes/sidebar.php"; ?>

      <div id="main" class="col-12 col-md-9">
        <h1 id="josh-green-title" class="display-4">Josh Green's Portfolio</h1>

        <a href="https://jgreen.me" target="_blank" class="text-muted min-link">
          <h2 id="josh-green-link" class="display-6">jgreen.me</h2>
        </a>

        <picture>
          <source type="image/webp" srcset="/images/joshgreen.webp">
          <source type="image/jp2" srcset="/images/joshgreen.jp2">
          <source type="image/jxr" srcset="/images/joshgreen.jxr">
          <img class="img img-fluid rounded-lg border border-info portfolio-img-lg" src="/images/joshgreen.png" alt="Josh Green's Website" />
        </picture>

        <p>jgreen.me is the personal website of UX Designer Josh Green.</p>
        <p>Over the winter of 2021, I worked to develop a portfolio for Josh Green. Josh designed the site and experience, while I implemented it. I continue to maintain the website.</p>
        <p>In summary, what I developed was:</p>
        <ul>
          <li>A responsive front-end</li>
          <li>Animations to enhance the user experience</li>
          <li>Distinct view modes that the user can toggle between</li>
          <li>Web accessible solutions for those with and without disabilities</li>
          <li>SEO optimization</li>
        </ul>

        <div class="technologies">
          <h4>Technologies Used:</h4>
          <span class="badge badge-pill badge-info">HTML</span>
          <span class="badge badge-pill badge-info">CSS</span>
          <span class="badge badge-pill badge-info">Javascript</span>
        </div>

        <div id="project-links">
          <div class="mt-4 d-flex justify-content-between flex-wrap">
            <a href="/portfolio/konstru/" class="btn btn-clear mr-md-2 d-flex justify-content-between">
              <?php include "{$_SERVER['DOCUMENT_ROOT']}/includes/left-arrow.php"; ?>
              <span class="ml-1 arrow-text">Konstru</span>
            </a>
            <a href="/portfolio/will-carr-dev/" class="btn btn-clear d-flex justify-content-between">
              <span class="mr-1 arrow-text">This Site</span>
              <?php include "{$_SERVER['DOCUMENT_ROOT']}/includes/right-arrow.php"; ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="/scripts/index.js"></script>
</body>
</html>
