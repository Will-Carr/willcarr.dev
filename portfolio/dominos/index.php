<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#17a2b8" />
  <meta name="keywords" content="willcarr.dev, will carr, william carr, carr, web, website, software, developer, engineer, full-stack, full stack, frontend, front-end, front end, backend, back-end, back end, portfolio, github, linkedin, dominos, domino's">
  <meta name="description" content="Will Carr has contributed to Domino's technology since the winter of 2020.">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="/portfolio/style.css">

  <title>Will Carr: Domino's</title>
  <link href="/images/favicon.png" rel="icon" type="image/jpeg" />
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <?php $active_page = "portfolio"; include "{$_SERVER['DOCUMENT_ROOT']}/includes/sidebar.php"; ?>

      <div id="main" class="col-12 col-md-9">
        <h1 id="dominos-title" class="display-4">Domino's</h1>

        <a href="https://dominos.com" target="_blank" class="text-muted min-link">
          <h2 id="dominos-link" class="display-6">dominos.com</h2>
        </a>

        <picture>
          <source type="image/webp" srcset="/images/dominos.webp">
          <source type="image/jp2" srcset="/images/dominos.jp2">
          <source type="image/jxr" srcset="/images/dominos.jxr">
          <img class="img img-fluid rounded-lg border border-info portfolio-img-lg" src="/images/dominos.png" alt="Domino's Pizza" />
        </picture>

        <p>Domino's is a multinational restaurant chain, specializing in pizza, pasta, and chicken in more than 17,000 locations worldwide.</p>
        <p>Since the winter of 2020, I have contributed to both the customer and internal-facing front-end technologies of the company.</p>

        <div id="project-links">
          <div class="mt-4 d-flex justify-content-between flex-wrap">
            <a href="/portfolio/degaetano-carr/" class="btn btn-clear mr-md-2 d-flex justify-content-between">
              <?php include "{$_SERVER['DOCUMENT_ROOT']}/includes/left-arrow.php"; ?>
              <span class="ml-1 arrow-text">DeGaetano & Carr</span>
            </a>
            <a href="/portfolio/team-lyders/" class="btn btn-clear d-flex justify-content-between">
              <span class="mr-1 arrow-text">Team Lyders</span>
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
