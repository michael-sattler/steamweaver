<?php
/**
 * Steamweaver Microventures — marketing homepage.
 * Standalone static-ish page; does not use the SaaS app config/login scaffold.
 */

$ventures = [
    ['name' => 'Fantasy Football Hawaii', 'url' => 'https://fantasyfootballhawaii.com', 'stage' => 'Live', 'tagline' => 'Fantasy football leagues built for Hawaii\'s local fan community.'],
    ['name' => 'Product Market Forge', 'url' => 'https://productmarketforge.com', 'stage' => 'Building', 'tagline' => 'A workbench for stress-testing and validating product ideas before you build them.'],
    ['name' => 'Circle Magnet', 'url' => 'https://circlemagnet.net', 'stage' => 'Concept', 'tagline' => 'Community-building tools that pull like-minded people into shared circles.'],
    ['name' => 'The Founders School', 'url' => 'https://thefounderschool.info', 'stage' => 'Building', 'tagline' => 'Practical, no-fluff lessons for first-time founders.'],
    ['name' => 'The Founders Guild', 'url' => 'https://thefoundersguild.org', 'stage' => 'Concept', 'tagline' => 'A guild connecting founders for mentorship, accountability, and mutual support.'],
    ['name' => 'My Amanuensis', 'url' => 'https://myamanuensis.com', 'stage' => 'Beta', 'tagline' => 'An AI writing assistant that helps you capture and organize your ideas.'],
    ['name' => 'Steamlands Fiction Press', 'url' => 'https://steamlandsfictionpress.com', 'stage' => 'Live', 'tagline' => 'A small press publishing steampunk and speculative fiction.'],
    ['name' => 'Vernian Sea', 'url' => 'https://verniansea.com', 'stage' => 'Concept', 'tagline' => 'A Jules Verne-inspired adventure fiction universe.'],
    ['name' => 'System Governor', 'url' => 'https://systemgovernor.com', 'stage' => 'Concept', 'tagline' => 'Frameworks and tooling for governing complex systems and organizations.'],
    ['name' => 'Boston Sojourner Society', 'url' => 'https://bostonsojournersociety.com', 'stage' => 'Concept', 'tagline' => 'A travel society and community for sojourners exploring Boston.'],
    ['name' => 'Cedric', 'url' => 'https://cedric.com', 'stage' => 'Concept', 'tagline' => 'A personal brand platform built around a singular name.'],
    ['name' => 'Slotly', 'url' => 'https://slotly.com', 'stage' => 'Building', 'tagline' => 'Dead-simple scheduling that slots right into your day.'],
    ['name' => 'Huddle.ai', 'url' => 'https://huddle.ai', 'stage' => 'Building', 'tagline' => 'An AI-powered assistant for meetings and team collaboration.'],
    ['name' => 'Unicapress', 'url' => 'https://unicapress.com', 'stage' => 'Concept', 'tagline' => 'A boutique press publishing distinctive, singular voices.'],
    ['name' => 'Consilium', 'url' => 'https://consilium.org', 'stage' => 'Concept', 'tagline' => 'An advisory council and knowledge-sharing platform for founders.'],
    ['name' => 'Konohiki', 'url' => 'https://konohiki.com', 'stage' => 'Concept', 'tagline' => 'A Hawaiian-rooted brand centered on stewardship and resource management.'],
    ['name' => 'Hundred Bets Fund', 'url' => 'https://hundredbetsfund.com', 'stage' => 'Concept', 'tagline' => 'A fund built around many small, shared-stake wagers.'],
    ['name' => 'Overwatch', 'url' => 'https://overwatch.com', 'stage' => 'Concept', 'tagline' => 'A monitoring and oversight brand for keeping watch over what matters.'],
];

$stageOrder = ['Live' => 0, 'Beta' => 1, 'Building' => 2, 'Concept' => 3];
usort($ventures, fn($a, $b) => $stageOrder[$a['stage']] <=> $stageOrder[$b['stage']]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Steamweaver Microventures — Building businesses, one microventure at a time</title>
<meta name="description" content="Steamweaver Microventures is a scalable framework for generating, validating, and operating small online businesses — legal, financial, and operational infrastructure included.">
<link rel="icon" href="/assets/images/logo_2-square.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/site.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sw-navbar fixed-top">
  <div class="container">
    <a class="navbar-brand sw-brand d-flex align-items-center" href="#top">
      <span class="sw-brand-mark"></span> Steamweaver
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#solution">How It Works</a></li>
        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="#who">Who It's For</a></li>
        <li class="nav-item"><a class="btn sw-btn-outline ms-2" href="#contact">Get in Touch</a></li>
      </ul>
    </div>
  </div>
</nav>

<header id="top" class="sw-hero">
  <div class="sw-hero-overlay"></div>
  <div class="container sw-hero-content text-center">
    <img src="/assets/images/logo_2-square.png" alt="Steamweaver Microventures" class="sw-hero-logo">
    <h1 class="sw-h1">Building businesses,<br>one microventure at a time.</h1>
    <p class="sw-lead">A scalable framework for generating, validating, and operating small online
      businesses — legal, financial, and operational infrastructure included, so founders can focus
      on creativity and growth instead of paperwork.</p>
    <div class="sw-hero-ctas">
      <a href="#portfolio" class="btn sw-btn-primary btn-lg">See the Portfolio</a>
      <a href="#contact" class="btn sw-btn-outline btn-lg">Start a Venture</a>
    </div>
  </div>
</header>

<section class="sw-section sw-section-alt">
  <div class="container">
    <div class="row g-5 align-items-start">
      <div class="col-md-6">
        <p class="sw-tag">The Problem</p>
        <h2 class="sw-h2">Launching one business is easy. Launching a dozen is a logistics nightmare.</h2>
        <p class="sw-body">Doing the legal, financial, and operational work once, by hand, is manageable.
          Doing it over and over for every new idea becomes a barrier to speed and innovation —
          leading to missed opportunities and wasted resources, especially for founders trying to
          diversify their portfolio of ventures.</p>
      </div>
      <div class="col-md-6">
        <p class="sw-tag">The Solution</p>
        <h2 class="sw-h2">One framework. Every venture launches faster.</h2>
        <p class="sw-body">Steamweaver Microventures offers a comprehensive framework that simplifies
          developing and managing multiple ventures. Structured resources and standardized processes
          let founders focus on creativity and growth — turning ideas into reality with greater
          efficiency and confidence.</p>
      </div>
    </div>
  </div>
</section>

<section id="solution" class="sw-section">
  <div class="container">
    <p class="sw-tag text-center">The Product</p>
    <h2 class="sw-h2 text-center mb-5">What Steamweaver provides</h2>
    <div class="row g-4">
      <?php
      $features = [
          ['icon' => 'fa-scale-balanced', 'title' => 'Legal & Financial Infrastructure', 'body' => 'LLC formation and a dedicated bank account for each venture.'],
          ['icon' => 'fa-layer-group', 'title' => 'Consolidated Subscriptions', 'body' => 'One set of essential third-party services, shared across the portfolio.'],
          ['icon' => 'fa-ruler-combined', 'title' => 'Standardized Development', 'body' => 'Templates and processes built for rapid, repeatable execution.'],
          ['icon' => 'fa-credit-card', 'title' => 'Integrated Payments', 'body' => 'Payment mechanisms ready to go from day one.'],
          ['icon' => 'fa-headset', 'title' => 'Specialist Access', 'body' => 'Legal and accounting support on tap, without hiring a team.'],
          ['icon' => 'fa-arrows-spin', 'title' => 'Fold-In Existing Projects', 'body' => 'Bring an existing project into the portfolio quickly.'],
      ];
      foreach ($features as $f): ?>
        <div class="col-md-4">
          <div class="sw-feature-card h-100">
            <i class="fa-solid <?= $f['icon'] ?> sw-feature-icon"></i>
            <h3 class="sw-h3"><?= htmlspecialchars($f['title']) ?></h3>
            <p class="sw-body"><?= htmlspecialchars($f['body']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sw-section sw-section-dark">
  <div class="container">
    <p class="sw-tag text-center">How It Works</p>
    <h2 class="sw-h2 text-center mb-5">From concept to launch, on rails</h2>
    <div class="row g-4 text-center">
      <?php
      $steps = [
          ['n' => '01', 'title' => 'Generate', 'body' => 'New business ideas are shaped using proven templates and resources.'],
          ['n' => '02', 'title' => 'Validate', 'body' => 'Each idea is tested for a viable premise before serious investment.'],
          ['n' => '03', 'title' => 'Structure', 'body' => 'LLC formation, payment processing, and third-party services are set up.'],
          ['n' => '04', 'title' => 'Launch & Operate', 'body' => 'Steamweaver handles the operational details while founders build.'],
      ];
      foreach ($steps as $s): ?>
        <div class="col-md-3">
          <div class="sw-step">
            <div class="sw-step-num"><?= $s['n'] ?></div>
            <h3 class="sw-h3"><?= htmlspecialchars($s['title']) ?></h3>
            <p class="sw-body-light"><?= htmlspecialchars($s['body']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="portfolio" class="sw-section sw-section-alt">
  <div class="container">
    <p class="sw-tag text-center">Proof in Motion</p>
    <h2 class="sw-h2 text-center">The Microventure Portfolio</h2>
    <p class="sw-body text-center sw-section-intro mx-auto">Right now Steamweaver is helping bring
      these ventures to market — at every stage from early concept to live and earning. Each one is
      a real, working example of the framework in action.</p>
    <div class="row g-4 mt-3">
      <?php foreach ($ventures as $v):
          $stageClass = 'sw-stage-' . strtolower($v['stage']);
      ?>
        <div class="col-sm-6 col-lg-4">
          <a href="<?= htmlspecialchars($v['url']) ?>" target="_blank" rel="noopener" class="sw-venture-card h-100">
            <span class="sw-stage-badge <?= $stageClass ?>"><?= htmlspecialchars($v['stage']) ?></span>
            <h3 class="sw-h3"><?= htmlspecialchars($v['name']) ?></h3>
            <p class="sw-body"><?= htmlspecialchars($v['tagline']) ?></p>
            <span class="sw-venture-link">Visit site <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="who" class="sw-section">
  <div class="container">
    <p class="sw-tag text-center">Who It's For</p>
    <h2 class="sw-h2 text-center mb-5">Built for people who launch, not just plan</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="sw-who-card h-100">
          <i class="fa-solid fa-chart-line sw-feature-icon"></i>
          <h3 class="sw-h3">Entrepreneurs</h3>
          <p class="sw-body">Looking to diversify their business portfolio without multiplying their
            administrative burden.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="sw-who-card h-100">
          <i class="fa-solid fa-store sw-feature-icon"></i>
          <h3 class="sw-h3">Small Business Owners</h3>
          <p class="sw-body">Seeking efficient operational frameworks to run more than one venture
            well.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="sw-who-card h-100">
          <i class="fa-solid fa-handshake sw-feature-icon"></i>
          <h3 class="sw-h3">Collaborators & Partners</h3>
          <p class="sw-body">Interested in launching ventures alongside a framework that handles the
            logistics.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="sw-section sw-section-dark text-center">
  <div class="container">
    <p class="sw-tag">Why You, Why Now</p>
    <h2 class="sw-h2">The cost of launching online businesses has never been lower.</h2>
    <p class="sw-body-light sw-section-intro mx-auto">Advances in technology and the availability of
      affordable tools have opened up new possibilities for aspiring entrepreneurs. Steamweaver
      Microventures is building a portfolio of low-risk ventures designed to generate compounding
      revenue over time.</p>
    <a href="mailto:michael.sattler360@gmail.com" class="btn sw-btn-primary btn-lg mt-3">Get in Touch</a>
  </div>
</section>

<footer class="sw-footer text-center">
  <div class="container">
    <img src="/assets/images/logo_2-square.png" alt="Steamweaver Microventures" class="sw-footer-logo">
    <p class="sw-footer-muted">&copy; <?= date('Y') ?> Steamweaver Microventures. All rights reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
