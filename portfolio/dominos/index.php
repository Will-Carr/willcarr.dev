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
        <h1 id="dominos-title" class="display-4">Domino's Pizza</h1>

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
        <p>Between March of 2020 and 2021, I contributed to the front-end technologies of the company. Over that time, I worked with product owners, business associates, designers, architects, and other developers to deliver finished products.</p>
        <p>In summary, what I contributed to developing and maintaining was:</p>
        <ul>
          <li>Responsive front-ends</li>
          <li>Streamlined user experiences</li>
          <li>Handling of Server-Sent Events to continually receive and display data</li>
          <li>Usage of the Storage API (IndexedDB and local storage) to persist user data across multiple sessions</li>
          <li>Updating CDNs to serve version-specific content</li>
          <li>Level AAA WCAG compliant accessibility</li>
          <li>Internationalization of content</li>
          <li>Feature flag implementation through LaunchDarkly</li>
          <li>Crash and bug reporting through Raygun</li>
          <li>User monitoring through Raygun</li>
          <li>Robust payment handling</li>
          <li>Dev-server implementation to mock backend interactions</li>
          <li>Contributing to the growth of the company's near-half billion dollars in yearly profit</li>
        </ul>

        <div class="technologies">
          <h4>Technologies Used:</h4>
          <span class="badge badge-pill badge-info">HTML</span>
          <span class="badge badge-pill badge-info">CSS</span>
          <span class="badge badge-pill badge-info">PostCSS</span>
          <span class="badge badge-pill badge-info">JavaScript</span>
          <span class="badge badge-pill badge-info">TypeScript</span>
          <span class="badge badge-pill badge-info">React</span>
          <span class="badge badge-pill badge-info">Grunt</span>
          <span class="badge badge-pill badge-info">Gulp</span>
          <span class="badge badge-pill badge-info">Node</span>
          <span class="badge badge-pill badge-info">Express</span>
          <span class="badge badge-pill badge-info">Git</span>
          <span class="badge badge-pill badge-info">i18next</span>
          <span class="badge badge-pill badge-info">SSEs</span>
          <span class="badge badge-pill badge-info">Raygun</span>
          <span class="badge badge-pill badge-info">LaunchDarkly</span>
          <span class="badge badge-pill badge-info">Storage API</span>
          <span class="badge badge-pill badge-info">Google Maps API</span>
          <span class="badge badge-pill badge-info">Jest</span>
          <span class="badge badge-pill badge-info">Backbone.js</span>
        </div>

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
