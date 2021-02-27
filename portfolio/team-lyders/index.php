<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#17a2b8" />
  <meta name="keywords" content="willcarr.dev, will carr, william carr, carr, web, website, software, developer, engineer, full-stack, full stack, frontend, front-end, front end, backend, back-end, back end, portfolio, github, linkedin, team lyders, teamlyders, perfect tacos, perfecttacos">
  <meta name="description" content="Will Carr contributed to Team Lyders' site in 2019 and 2020.">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="/portfolio/style.css">

  <title>Will Carr: Team Lyders</title>
  <link href="/images/favicon.png" rel="icon" type="image/jpeg" />
</head>

<body>

  <div class="container-fluid">
    <div class="row">

      <?php $active_page = "portfolio"; include "{$_SERVER['DOCUMENT_ROOT']}/includes/sidebar.php"; ?>

      <!-- MAIN CONTENT -->
      <div id="main" class="col-12 col-md-9">

        <h1 id="team-lyders-title" class="display-4">Team Lyders</h1>

        <a href="https://teamlyders.com" class="text-muted min-link">
          <h2 id="team-lyders-link" class="display-6">teamlyders.com</h2>
        </a>

        <picture>
          <source type="image/webp" srcset="/images/teamlyders.webp">
          <source type="image/jp2" srcset="/images/teamlyders.jp2">
          <source type="image/jxr" srcset="/images/teamlyders.jxr">
          <img class="img img-fluid rounded-lg border border-info portfolio-img-lg" src="/images/teamlyders.png" alt="Team Lyders Website" />
        </picture>

        <p>Team Lyders is the brand of the largest privately owned franchisee of Yum Brands. They currently own approximately 200 Taco Bell and Arby’s restaurants throughout the Midwest and Canada.</p>
        <p>Between the springs of 2019 and 2020, I worked to redevelop the web systems for the company. With the ease of use of the new system, the stores can focus on selling food and pleasing customers, and the corporate office can focus on expansion and profit.</p>
        <p>In summary, what I contributed to developing and maintaining was:</p>
        <ul>
          <li>A responsive front-end</li>
          <li>A streamlined user experience</li>
          <li>Administration of tens of millions of rows of data</li>
          <li>Performance increases, in some cases up to 10x faster</li>
          <li>Automated alerting and notification systems</li>
          <li>Introduction of version management solutions</li>
          <li>Generated reports about the stores, employees, applicants, and financials for the corporate office and field leaders to utilize</li>
          <li>Systems that stores use to create tickets for maintenance issues</li>
          <li>Forms and approval systems for HR and Payroll to complete about individual employees, including promotions, vacation/sick leave, wage changes, store transfers, mileage reimbursements, terminations, payroll deductions, and direct deposits</li>
          <li>Methods to analyze store security to minimize losses</li>
          <li>Solutions to ease the process of paying employees and completing taxes</li>
          <li>Means of evaluating employees and rewarding them when applicable</li>
          <li>Access of essential company resources</li>
        </ul>

        <div class="technologies">
          <h4>Technologies Used:</h4>
          <span class="badge badge-pill badge-info">HTML</span>
          <span class="badge badge-pill badge-info">CSS</span>
          <span class="badge badge-pill badge-info">PHP</span>
          <span class="badge badge-pill badge-info">MySQL</span>
          <span class="badge badge-pill badge-info">MSSQL</span>
          <span class="badge badge-pill badge-info">Javascript</span>
          <span class="badge badge-pill badge-info">jQuery</span>
          <span class="badge badge-pill badge-info">Leaflet</span>
          <span class="badge badge-pill badge-info">Angular.js</span>
        </div>

        <div class="mt-4 d-flex justify-content-between flex-wrap">
          <a href="/portfolio/will-carr-dev/" class="btn btn-clear mr-md-2 d-flex justify-content-between">
            <?php include "{$_SERVER['DOCUMENT_ROOT']}/includes/left-arrow.php"; ?>
            <span class="ml-1 arrow-text">WillCarr.dev</span>
          </a>
          <a href="/portfolio/asterisk/" class="btn btn-clear d-flex justify-content-between">
            <span class="mr-1 arrow-text">Asterisk</span>
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
