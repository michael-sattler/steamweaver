<?php
/**
 * Steamweaver Microventures — marketing homepage.
 * Standalone static-ish page; does not use the SaaS app config/login scaffold.
 */

$ventures = json_decode(file_get_contents(__DIR__ . '/assets/data/portfolio.json'), true);
$ventures = array_filter($ventures, fn($v) => $v['stage'] !== 'Stealth');

$stageOrder = ['Live' => 0, 'Beta' => 1, 'Waitlist' => 2, 'Building' => 3, 'Concept' => 4, 'Stealth' => 5];
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
      <img src="/assets/images/logo_2-horiz.png" alt="Steamweaver Microventures" class="sw-brand-logo" style="max-height: 60px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#solution">How It Works</a></li>
        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="#who">Who It's For</a></li>
        <li class="nav-item"><a class="btn sw-btn-outline btn-md ms-2" href="#contact">Get more information</a></li>
      </ul>
    </div>
  </div>
</nav>

<header id="top" class="sw-hero">
  <div class="sw-hero-overlay"></div>
  <div class="container sw-hero-content text-center">
    <img src="/assets/images/logo_2-square.png" alt="Steamweaver Microventures" class="sw-hero-logo">
    <h1 class="sw-h1">Building viable businesses,<br>one microventure at a time.</h1>
    <p class="sw-lead">Steamweaver is a scalable framework for generating, validating, and operating businesses with a technology focus. So entrepreneurs can focus on creativity and growth instead of gruntwork.</p>
    <div class="sw-hero-ctas">
      <a href="#portfolio" class="btn sw-btn-primary btn-md">See the Portfolio</a>
      <a href="#contact" class="btn sw-btn-outline btn-md">Start a Venture</a>
    </div>
  </div>
</header>

<section class="sw-section sw-section-alt">
  <div class="container">
    <div class="row g-5 align-items-start">
      <div class="col-md-6">
        <p class="sw-tag">The Problem</p>
        <h2 class="sw-h2">Most people start a business once.<br>And they do it the hard way.</h2>
        <p class="sw-body">Most founders starting a new business have never done it before, so they reinvent the wheel and make it up as they go along ... and <strong>make avoidable mistakes</strong> and <strong>get bogged down with the grunt work</strong> ... a major distraction from the important work of creation and growth.</p>
      </div>
      <div class="col-md-6">
        <p class="sw-tag">The Solution</p>
        <h2 class="sw-h2">One framework. Every venture launches faster.</h2>
        <p class="sw-body">Steamweaver Microventures offers a comprehensive framework that simplifies
          developing, validating, and launching your company. Structured resources, standardized processes, veteram human guidance, and a proven roadmap that 
          lets founders focus on what matters most: <strong>turning ideas into reality.</strong></p>
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
          ['icon' => 'fa-arrow-up-right-dots', 'title' => 'Concept Articulation', 'body' => 'Experienced guidance for shaping a business idea into a viable proposition.'],
          ['icon' => 'fa-ruler-combined', 'title' => 'Bulletproof Business Creation', 'body' => 'Time-tested templates, workflows, and best practices for rapid venture creation.'],
          ['icon' => 'fa-bullhorn', 'title' => 'Scientific Market Validation', 'body' => 'A proven process for validating a business idea before investing time and resources.'],
          ['icon' => 'fa-screwdriver-wrench', 'title' => 'Hands-On Product Development', 'body' => 'Product development, coding, and CTO services for getting your product to market.'],
          ['icon' => 'fa-user-tie', 'title' => 'Professional Guidance', 'body' => 'Experienced entrperenurial coaching and support on tap, without hiring a team.'],
          ['icon' => 'fa-arrows-spin', 'title' => 'Fold-In Existing Projects', 'body' => 'Leverage shortcuts and existing resources to bring a project into the portfolio.'],
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
          ['n' => '03', 'title' => 'Build', 'body' => 'Get your product built quickly with product development, coding, and technology services.'],
          ['n' => '04', 'title' => 'Launch & Iterate', 'body' => 'Start learning what works and what doesn\'t, and iterate quickly.'],
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
          $tag = $v['url'] ? 'a' : 'div';
          $style = '';
          if (!empty($v['bg'])) { $style .= '--sw-card-bg:' . htmlspecialchars($v['bg']) . ';'; }
          if (!empty($v['text'])) { $style .= '--sw-card-text:' . htmlspecialchars($v['text']) . ';'; }
          if (!empty($v['border'])) { $style .= '--sw-card-border:' . htmlspecialchars($v['border']) . ';'; }
          if (!empty($v['background-image'])) {
//            $style .= "background-image: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url('" . htmlspecialchars($v['background-image']) . "');background-size:cover;background-position:center;";
            $style .= "background-image: url('" . htmlspecialchars($v['background-image']) . "');background-size:cover;background-position:center;";
          }
      ?>
        <div class="col-12 col-lg-6">
          <<?= $tag ?>
            <?php if ($v['url']): ?>href="<?= htmlspecialchars($v['url']) ?>" target="_blank" rel="noopener"<?php endif; ?>
            class="sw-venture-card h-100"
            <?php if ($style): ?>style="<?= $style ?>"<?php endif; ?>
          >
            <div class="sw-venture-logo-col">
              <?php if (!empty($v['logo'])): ?>
                <img src="<?= htmlspecialchars($v['logo']) ?>" alt="<?= htmlspecialchars($v['name']) ?> logo" class="sw-venture-logo">
              <?php else: ?>
                <span class="sw-venture-logo-fallback"><?= htmlspecialchars($v['name']) ?></span>
              <?php endif; ?>
            </div>
            <div class="sw-venture-content-col">
              <span class="sw-stage-badge float-end <?= $stageClass ?>"><?= htmlspecialchars($v['stage']) ?></span>
              <h3 class="sw-h3 d-none"><?= htmlspecialchars($v['name']) ?></h3>
              <p class="sw-body sw-venture-tagline"><?= htmlspecialchars($v['tagline']) ?></p>
              <div class="btn" style="background-color: transparent; color: <?= htmlspecialchars($v['text']) ?>; border-color: <?= htmlspecialchars($v['text']) ?>;">Learn More</div>
            </div>
          </<?= $tag ?>>
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
          <h3 class="sw-h3">Entrepeneurs</h3>
          <p class="sw-body">Looking to augment their skills with proven frameworks and best practices without multiplying their
            administrative burden.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="sw-who-card h-100">
          <i class="fa-solid fa-store sw-feature-icon"></i>
          <h3 class="sw-h3">Small Business Owners</h3>
          <p class="sw-body">Seeking efficient product and technology frameworks to use the latest technologies to augment their business.
            well.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="sw-who-card h-100">
          <i class="fa-solid fa-handshake sw-feature-icon"></i>
          <h3 class="sw-h3">Collaborators & Partners</h3>
          <p class="sw-body">Interested in launching ventures with a framework that handles the
            grunt work and gets you to market quickly.</p>
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
      Microventures is partnering to build a portfolio of low-risk ventures designed to generate compounding
      revenue over time.</p>
    <button type="button" class="btn sw-btn-primary btn-md mt-3" data-bs-toggle="collapse" data-bs-target="#contactForm" aria-expanded="false" aria-controls="contactForm">
    Find out how Steamweaver might help you
    </button>

    <div class="collapse mt-4" id="contactForm">
      <div class="sw-contact-panel mx-auto text-start">
        <div id="contactSuccess" class="sw-contact-success text-center d-none" aria-live="polite">
          <p class="sw-h3 mb-2">Thanks for reaching out!</p>
          <p class="sw-body-light mb-4">We received your message and will be in touch soon.</p>
          <a href="https://meetings.hubspot.com/sattler" class="btn sw-btn-primary btn-md" target="_blank" rel="noopener">Book a free consultation</a>
        </div>

        <form id="contactFormEl" class="sw-contact-form" novalidate>
          <div class="mb-3">
            <h3 class="sw-h3">Get the free comprehensive guide to launching a business with Steamweaver</h3>
            <label for="contactName" class="form-label sw-contact-label">Name</label>
            <input type="text" class="form-control sw-contact-input" id="contactName" name="name" required autocomplete="name" maxlength="200">
          </div>
          <div class="mb-3">
            <label for="contactEmail" class="form-label sw-contact-label">Email</label>
            <input type="email" class="form-control sw-contact-input" id="contactEmail" name="email" required autocomplete="email">
          </div>
          <div id="contactError" class="alert alert-danger d-none mb-3" role="alert"></div>
          <div class="text-center">
            <button type="submit" class="btn sw-btn-primary btn-md" id="contactSubmit">Get the guide</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</section>

<footer class="sw-footer text-center">
  <div class="container">
    <img src="/assets/images/logo_2-square.png" alt="Steamweaver Microventures" class="sw-footer-logo">
    <p class="sw-footer-muted">&copy; <?= date('Y') ?> Steamweaver Microventures. All rights reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
(function () {
  var form = document.getElementById('contactFormEl');
  var success = document.getElementById('contactSuccess');
  var errorBox = document.getElementById('contactError');
  var submitBtn = document.getElementById('contactSubmit');
  if (!form) return;

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    errorBox.classList.add('d-none');
    errorBox.textContent = '';

    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    submitBtn.disabled = true;
    submitBtn.textContent = 'Sending…';

    fetch('/api/contact', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        name: document.getElementById('contactName').value.trim(),
        email: document.getElementById('contactEmail').value.trim()
      })
    })
      .then(function (res) { return res.json().then(function (data) { return { ok: res.ok, data: data }; }); })
      .then(function (result) {
        if (!result.ok || !result.data.ok) {
          throw new Error(result.data.error || 'Something went wrong. Please try again.');
        }
        form.classList.add('d-none');
        success.classList.remove('d-none');
      })
      .catch(function (err) {
        errorBox.textContent = err.message;
        errorBox.classList.remove('d-none');
        submitBtn.disabled = false;
        submitBtn.textContent = 'Send Message';
      });
  });
})();
</script>
</body>
</html>
