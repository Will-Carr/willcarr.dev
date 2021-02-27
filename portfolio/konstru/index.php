<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#17a2b8" />
  <meta name="keywords" content="willcarr.dev, will carr, william carr, carr, web, website, software, developer, engineer, full-stack, full stack, frontend, front-end, front end, backend, back-end, back end, portfolio, github, linkedin, konstru, thornton tomasetti">
  <meta name="description" content="Will Carr contributed to Konstru over the summers of 2017 and 2018.">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="/portfolio/style.css">


  <title>Will Carr: Konstru</title>
  <link href="/images/favicon.png" rel="icon" type="image/jpeg" />
</head>

<body>

  <div class="container-fluid">
    <div class="row">

      <?php $active_page = "portfolio"; include "{$_SERVER['DOCUMENT_ROOT']}/includes/sidebar.php"; ?>

      <!-- MAIN CONTENT -->
      <div id="main" class="col-12 col-md-9">

        <h1 id="konstru-title" class="display-4">Konstru</h1>

        <a href="https://konstru.com/" class="text-muted min-link">
          <h2 id="konstru-link" class="display-6">konstru.com</h2>
        </a>

        <picture>
          <source type="image/webp" srcset="/images/konstru.webp">
          <source type="image/jp2" srcset="/images/konstru.jp2">
          <source type="image/jxr" srcset="/images/konstru.jxr">
          <img class="img img-fluid rounded-lg border border-info portfolio-img-lg" src="/images/konstru.png" alt="Konstru Website" />
        </picture>

        <p>Konstru is a structure modeling streamlining web application originally developed by Thornton Tomasetti, a large, multinational engineering company. In the world of structural engineering, there are many independent applications
          developed for a single, specific purpose. For each of these, a unique model must be created by the engineer tailored to the software’s needs. Konstru does this work for the engineer, allowing them to spend more of their time
          actually designing buildings. Over the summers of 2017 and 2018, I worked to develop this web application with other members of the Thornton Tomasetti team.</p>
        <p>In summary, I contributed to developing:</p>
        <ul>
          <li>A responsive and reactive front-end</li>
          <li>Visualizations of the model and of the building</li>
          <li>Creating an API for the app to query</li>
          <li>Maintaining the cloud services of the application</li>
          <li>Creating a portable, web-independent solution of the software</li>
        </ul>

        <div class="technologies">
          <h4>Technologies Used:</h4>
          <span class="badge badge-pill badge-info">HTML</span>
          <span class="badge badge-pill badge-info">CSS</span>
          <span class="badge badge-pill badge-info">SCSS</span>
          <span class="badge badge-pill badge-info">Express</span>
          <span class="badge badge-pill badge-info">Node</span>
          <span class="badge badge-pill badge-info">SQL</span>
          <span class="badge badge-pill badge-info">Mongo</span>
          <span class="badge badge-pill badge-info">Javascript</span>
          <span class="badge badge-pill badge-info">Typescript</span>
          <span class="badge badge-pill badge-info">Angular</span>
          <span class="badge badge-pill badge-info">Redis</span>
          <span class="badge badge-pill badge-info">Docker</span>
          <span class="badge badge-pill badge-info">Google Cloud</span>
        </div>

        <div class="mt-4 d-flex justify-content-between flex-wrap">
          <a href="/portfolio/asterisk/" class="btn btn-clear mr-md-2 d-flex justify-content-between">
            <?php include "{$_SERVER['DOCUMENT_ROOT']}/includes/left-arrow.php"; ?>
            <span class="ml-1 arrow-text">Asterisk</span>
          </a>
          <a href="/portfolio/bullseye-redevelopment/" class="btn btn-clear d-flex justify-content-between">
            <span class="mr-1 arrow-text">Bullseye Redevelopment</span>
            <?php include "{$_SERVER['DOCUMENT_ROOT']}/includes/right-arrow.php"; ?>
          </a>
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
