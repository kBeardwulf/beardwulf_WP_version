<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kevin Burdloff — Portfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    :root {
      --ink: #0f0e0c;
      --cream: #f5f0e8;
      --accent: #d45f2e;
      --accent2: #2e6ed4;
      --muted: #7a7468;
      --card-bg: #ffffff;
      --border: #e0d9cf;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--cream);
      color: var(--ink);
      overflow-x: hidden;
    }

    h1, h2, h3, h4, .syne { font-family: 'Syne', sans-serif; }

    /* ─── HEADER ─── */
    header {
      position: fixed; top: 0; left: 0; right: 0; z-index: 100;
      background: rgba(245, 240, 232, 0.92);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid var(--border);
    }
    .header-inner {
      max-width: 1280px; margin: 0 auto;
      padding: 0 2rem;
      height: 68px;
      display: flex; align-items: center; justify-content: space-between;
    }
    .logo {
      font-family: 'Syne', sans-serif;
      font-weight: 800; font-size: 1.3rem;
      letter-spacing: -0.03em;
      color: var(--ink);
      display: flex; align-items: center; gap: 0.5rem;
      text-decoration: none;
    }
    .logo-dot { width: 8px; height: 8px; background: var(--accent); border-radius: 50%; display: inline-block; }
    nav { display: flex; align-items: center; gap: 0.5rem; }
    .nav-link {
      font-family: 'DM Sans', sans-serif;
      font-size: 0.875rem; font-weight: 500;
      color: var(--muted);
      text-decoration: none;
      padding: 0.4rem 0.9rem;
      border-radius: 999px;
      transition: all 0.2s;
    }
    .nav-link:hover { color: var(--ink); background: rgba(15,14,12,0.06); }
    .nav-cta {
      background: var(--ink);
      color: var(--cream) !important;
      padding: 0.45rem 1.2rem !important;
      font-weight: 600;
    }
    .nav-cta:hover { background: var(--accent) !important; color: #fff !important; }

    /* ─── HERO ─── */
    .hero {
      min-height: 100vh;
      display: flex; align-items: center;
      padding-top: 68px;
      position: relative;
      overflow: hidden;
    }
    .hero-bg-grid {
      position: absolute; inset: 0;
      background-image:
        linear-gradient(var(--border) 1px, transparent 1px),
        linear-gradient(90deg, var(--border) 1px, transparent 1px);
      background-size: 48px 48px;
      opacity: 0.5;
    }
    .hero-blob {
      position: absolute;
      width: 600px; height: 600px;
      right: -100px; top: 50%;
      transform: translateY(-50%);
      background: radial-gradient(ellipse, rgba(212,95,46,0.12) 0%, transparent 70%);
      pointer-events: none;
    }
    .hero-inner {
      position: relative; z-index: 2;
      max-width: 1280px; margin: 0 auto;
      padding: 4rem 2rem;
      display: grid; grid-template-columns: 1fr 1fr;
      gap: 4rem; align-items: center;
    }
    .hero-tag {
      display: inline-flex; align-items: center; gap: 0.5rem;
      font-size: 0.75rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase;
      color: var(--accent);
      border: 1px solid rgba(212,95,46,0.3);
      padding: 0.3rem 0.8rem; border-radius: 999px;
      margin-bottom: 1.5rem;
    }
    .hero h1 {
      font-size: clamp(2.8rem, 5vw, 4.5rem);
      font-weight: 800;
      line-height: 1.05;
      letter-spacing: -0.03em;
      margin-bottom: 1.5rem;
    }
    .hero h1 em { font-style: normal; color: var(--accent); }
    .hero-sub {
      font-size: 1.05rem;
      color: var(--muted);
      line-height: 1.7;
      max-width: 480px;
      margin-bottom: 2.5rem;
    }
    .hero-actions { display: flex; gap: 1rem; flex-wrap: wrap; }
    .btn-primary {
      background: var(--ink); color: var(--cream);
      padding: 0.8rem 2rem; border-radius: 999px;
      font-family: 'Syne', sans-serif; font-weight: 600; font-size: 0.9rem;
      text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;
      transition: all 0.25s; border: 2px solid var(--ink);
    }
    .btn-primary:hover { background: var(--accent); border-color: var(--accent); }
    .btn-secondary {
      background: transparent; color: var(--ink);
      padding: 0.8rem 2rem; border-radius: 999px;
      font-family: 'Syne', sans-serif; font-weight: 600; font-size: 0.9rem;
      text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;
      border: 2px solid var(--border);
      transition: all 0.25s;
    }
    .btn-secondary:hover { border-color: var(--ink); }
    .hero-visual {
      position: relative;
      display: flex; align-items: center; justify-content: center;
    }
    .hero-card {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-radius: 24px;
      padding: 2.5rem;
      box-shadow: 0 32px 64px rgba(15,14,12,0.08);
      width: 100%; max-width: 420px;
      position: relative;
    }
    .hero-card-avatar {
      width: 80px; height: 80px;
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      border-radius: 20px;
      margin-bottom: 1.5rem;
      display: flex; align-items: center; justify-content: center;
      font-size: 2rem; color: white;
    }
    .hero-card h3 {
      font-size: 1.3rem; font-weight: 700; margin-bottom: 0.3rem;
    }
    .hero-card p { font-size: 0.85rem; color: var(--muted); margin-bottom: 1.5rem; }
    .skill-tags { display: flex; flex-wrap: wrap; gap: 0.4rem; }
    .skill-tag {
      font-size: 0.72rem; font-weight: 600; letter-spacing: 0.05em;
      padding: 0.25rem 0.65rem; border-radius: 999px;
      border: 1px solid var(--border);
      color: var(--muted);
      transition: all 0.2s;
    }
    .skill-tag:hover { border-color: var(--accent); color: var(--accent); }
    .hero-stats {
      display: grid; grid-template-columns: 1fr 1fr;
      gap: 1rem; margin-top: 1.5rem;
      padding-top: 1.5rem;
      border-top: 1px solid var(--border);
    }
    .stat-num {
      font-family: 'Syne', sans-serif; font-weight: 800; font-size: 1.6rem; color: var(--ink);
    }
    .stat-label { font-size: 0.75rem; color: var(--muted); }

    /* ─── SECTION GENERIC ─── */
    section { padding: 6rem 2rem; }
    .section-inner { max-width: 1280px; margin: 0 auto; }
    .section-eyebrow {
      font-size: 0.72rem; font-weight: 700; letter-spacing: 0.15em; text-transform: uppercase;
      color: var(--accent); margin-bottom: 0.75rem; display: block;
    }
    .section-title {
      font-size: clamp(2rem, 3.5vw, 3rem);
      font-weight: 800; letter-spacing: -0.03em;
      line-height: 1.1; margin-bottom: 1rem;
    }
    .section-desc { font-size: 1rem; color: var(--muted); max-width: 560px; line-height: 1.7; }

    /* ─── COMPÉTENCES ─── */
    #competences { background: var(--ink); color: var(--cream); }
    #competences .section-eyebrow { color: var(--accent); }
    #competences .section-title { color: var(--cream); }
    #competences .section-desc { color: rgba(245,240,232,0.6); }
    .skills-grid {
      display: grid; grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem; margin-top: 3.5rem;
    }
    .skill-card {
      background: rgba(245,240,232,0.05);
      border: 1px solid rgba(245,240,232,0.1);
      border-radius: 20px; padding: 2rem;
      transition: all 0.3s;
    }
    .skill-card:hover {
      background: rgba(245,240,232,0.08);
      border-color: rgba(212,95,46,0.4);
      transform: translateY(-4px);
    }
    .skill-card-icon {
      width: 48px; height: 48px; border-radius: 12px;
      display: flex; align-items: center; justify-content: center;
      font-size: 1.4rem; margin-bottom: 1.2rem;
    }
    .icon-web { background: rgba(46,110,212,0.2); color: #5b9bd5; }
    .icon-design { background: rgba(212,95,46,0.2); color: var(--accent); }
    .icon-event { background: rgba(100,180,100,0.15); color: #7bc47b; }
    .skill-card h3 {
      font-size: 1.1rem; font-weight: 700; margin-bottom: 1rem; color: var(--cream);
    }
    .skill-pills { display: flex; flex-wrap: wrap; gap: 0.4rem; }
    .skill-pill {
      font-size: 0.72rem; font-weight: 500;
      padding: 0.28rem 0.7rem; border-radius: 999px;
      background: rgba(245,240,232,0.08);
      color: rgba(245,240,232,0.7);
      border: 1px solid rgba(245,240,232,0.1);
    }

    /* ─── MÉTHODE ─── */
    #methode { background: var(--cream); }
    .steps-grid {
      display: grid; grid-template-columns: repeat(4, 1fr);
      gap: 1.5rem; margin-top: 3.5rem;
      position: relative;
    }
    .steps-grid::before {
      content: '';
      position: absolute;
      top: 40px; left: calc(12.5% + 24px); right: calc(12.5% + 24px);
      height: 2px;
      background: repeating-linear-gradient(90deg, var(--border) 0, var(--border) 8px, transparent 8px, transparent 16px);
    }
    .step-card {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-radius: 20px; padding: 2rem 1.5rem;
      text-align: center;
      position: relative;
      transition: all 0.3s;
    }
    .step-card:hover { box-shadow: 0 16px 40px rgba(15,14,12,0.08); transform: translateY(-4px); }
    .step-num {
      width: 48px; height: 48px; border-radius: 50%;
      background: var(--ink); color: var(--cream);
      font-family: 'Syne', sans-serif; font-weight: 800; font-size: 1rem;
      display: flex; align-items: center; justify-content: center;
      margin: 0 auto 1.2rem; position: relative; z-index: 2;
    }
    .step-card:nth-child(2) .step-num { background: var(--accent); }
    .step-card:nth-child(3) .step-num { background: var(--accent2); }
    .step-card:nth-child(4) .step-num { background: #2ab87a; }
    .step-icon { font-size: 1.5rem; margin-bottom: 0.75rem; }
    .step-card h3 { font-size: 1rem; font-weight: 700; margin-bottom: 0.5rem; }
    .step-card p { font-size: 0.85rem; color: var(--muted); line-height: 1.6; }

    /* ─── PROJETS ─── */
    #projets { background: #faf7f2; }
    .projects-grid {
      display: grid; grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem; margin-top: 3.5rem;
    }
    .project-card {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-radius: 20px; overflow: hidden;
      transition: all 0.3s;
    }
    .project-card:hover { box-shadow: 0 20px 48px rgba(15,14,12,0.1); transform: translateY(-4px); }
    .project-thumb {
      height: 200px;
      display: flex; align-items: center; justify-content: center;
      font-size: 3rem; letter-spacing: -0.05em; font-family: 'Syne', sans-serif; font-weight: 800;
      color: rgba(255,255,255,0.4);
    }
    .project-card:nth-child(1) .project-thumb { background: linear-gradient(135deg, #1a1a2e, #16213e); }
    .project-card:nth-child(2) .project-thumb { background: linear-gradient(135deg, #2d1b1b, #4a2020); }
    .project-card:nth-child(3) .project-thumb { background: linear-gradient(135deg, #1b2d1b, #204a20); }
    .project-body { padding: 1.5rem; }
    .project-type {
      font-size: 0.7rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;
      color: var(--accent); margin-bottom: 0.5rem;
    }
    .project-body h3 { font-size: 1.1rem; font-weight: 700; margin-bottom: 0.5rem; }
    .project-body p { font-size: 0.85rem; color: var(--muted); line-height: 1.6; }
    .project-tags { display: flex; flex-wrap: wrap; gap: 0.3rem; margin-top: 1rem; }
    .project-tag {
      font-size: 0.7rem; padding: 0.2rem 0.6rem; border-radius: 999px;
      background: rgba(15,14,12,0.05); color: var(--muted);
    }

    /* ─── À PROPOS ─── */
    #apropos { background: var(--cream); }
    .apropos-inner {
      display: grid; grid-template-columns: 1fr 1fr;
      gap: 5rem; align-items: center;
    }
    .apropos-image {
      aspect-ratio: 3/4; border-radius: 28px;
      background: linear-gradient(160deg, #e8e0d5, #d4c9b8);
      display: flex; align-items: center; justify-content: center;
      font-size: 5rem; color: rgba(15,14,12,0.15);
      position: relative; overflow: hidden;
    }
    .apropos-image::after {
      content: ''; position: absolute;
      bottom: 0; left: 0; right: 0; height: 40%;
      background: linear-gradient(transparent, rgba(15,14,12,0.05));
    }
    .apropos-content .section-eyebrow { margin-bottom: 0.75rem; }
    .apropos-content .section-title { margin-bottom: 1.2rem; }
    .apropos-body { font-size: 1rem; color: var(--muted); line-height: 1.8; margin-bottom: 2rem; }
    .values-list { display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 2.5rem; }
    .value-item {
      display: flex; align-items: center; gap: 0.75rem;
      font-size: 0.9rem; font-weight: 500;
    }
    .value-icon {
      width: 28px; height: 28px; border-radius: 8px;
      background: rgba(212,95,46,0.1); color: var(--accent);
      display: flex; align-items: center; justify-content: center;
      font-size: 0.75rem; flex-shrink: 0;
    }

    /* ─── CONTACT ─── */
    #contact { background: var(--ink); color: var(--cream); }
    .contact-inner {
      display: grid; grid-template-columns: 1fr 1fr;
      gap: 5rem; align-items: center;
    }
    .contact-left .section-eyebrow { color: var(--accent); }
    .contact-left .section-title { color: var(--cream); margin-bottom: 1rem; }
    .contact-left p { color: rgba(245,240,232,0.6); line-height: 1.7; font-size: 1rem; margin-bottom: 2rem; }
    .contact-info { display: flex; flex-direction: column; gap: 1rem; }
    .contact-item {
      display: flex; align-items: center; gap: 1rem;
      font-size: 0.9rem;
    }
    .contact-item-icon {
      width: 40px; height: 40px; border-radius: 12px;
      background: rgba(245,240,232,0.08); color: var(--accent);
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }
    .contact-item a, .contact-item span {
      color: rgba(245,240,232,0.8);
      text-decoration: none;
    }
    .contact-item a:hover { color: var(--accent); }
    .contact-form {
      background: rgba(245,240,232,0.05);
      border: 1px solid rgba(245,240,232,0.1);
      border-radius: 24px; padding: 2.5rem;
    }
    .form-group { margin-bottom: 1.2rem; }
    .form-group label {
      display: block; font-size: 0.78rem; font-weight: 600; letter-spacing: 0.05em;
      color: rgba(245,240,232,0.5); margin-bottom: 0.4rem; text-transform: uppercase;
    }
    .form-group input, .form-group textarea, .form-group select {
      width: 100%; background: rgba(245,240,232,0.08);
      border: 1px solid rgba(245,240,232,0.12);
      border-radius: 12px; padding: 0.75rem 1rem;
      color: var(--cream); font-family: 'DM Sans', sans-serif; font-size: 0.9rem;
      outline: none; transition: border-color 0.2s;
    }
    .form-group input:focus, .form-group textarea:focus, .form-group select:focus {
      border-color: var(--accent);
    }
    .form-group textarea { resize: vertical; min-height: 120px; }
    .form-group select option { background: #1a1916; }
    .btn-submit {
      width: 100%; background: var(--accent); color: white;
      padding: 0.9rem; border-radius: 999px; border: none;
      font-family: 'Syne', sans-serif; font-weight: 700; font-size: 0.95rem;
      cursor: pointer; transition: all 0.25s; display: flex; align-items: center; justify-content: center; gap: 0.5rem;
    }
    .btn-submit:hover { background: #c24e20; transform: translateY(-2px); }

    /* ─── FOOTER ─── */
    footer {
      background: #0a0908;
      color: rgba(245,240,232,0.6);
      padding: 4rem 2rem 2rem;
    }
    .footer-inner { max-width: 1280px; margin: 0 auto; }
    .footer-top {
      display: grid; grid-template-columns: 2fr 1fr 1fr 1fr;
      gap: 3rem; padding-bottom: 3rem;
      border-bottom: 1px solid rgba(245,240,232,0.08);
    }
    .footer-brand .logo { color: var(--cream); margin-bottom: 1rem; display: inline-flex; }
    .footer-brand p { font-size: 0.85rem; line-height: 1.7; max-width: 260px; }
    .footer-social { display: flex; gap: 0.75rem; margin-top: 1.5rem; }
    .social-icon {
      width: 36px; height: 36px; border-radius: 10px;
      background: rgba(245,240,232,0.06);
      border: 1px solid rgba(245,240,232,0.1);
      display: flex; align-items: center; justify-content: center;
      color: rgba(245,240,232,0.6); font-size: 0.9rem;
      text-decoration: none; transition: all 0.2s;
    }
    .social-icon:hover { background: var(--accent); border-color: var(--accent); color: white; }
    .footer-col h4 {
      font-family: 'Syne', sans-serif; font-size: 0.8rem; font-weight: 700;
      letter-spacing: 0.1em; text-transform: uppercase;
      color: var(--cream); margin-bottom: 1.2rem;
    }
    .footer-links { list-style: none; display: flex; flex-direction: column; gap: 0.6rem; }
    .footer-links a {
      font-size: 0.85rem; color: rgba(245,240,232,0.5);
      text-decoration: none; transition: color 0.2s;
    }
    .footer-links a:hover { color: var(--accent); }
    .footer-bottom {
      display: flex; align-items: center; justify-content: space-between;
      padding-top: 2rem; flex-wrap: wrap; gap: 1rem;
      font-size: 0.78rem;
    }
    .footer-bottom-links { display: flex; gap: 1.5rem; }
    .footer-bottom-links a {
      color: rgba(245,240,232,0.4); text-decoration: none; transition: color 0.2s;
    }
    .footer-bottom-links a:hover { color: var(--cream); }

    /* ─── DIVIDER ─── */
    .divider {
      height: 1px; background: var(--border);
      max-width: 1280px; margin: 0 auto;
    }

    /* ─── SCROLL ANIMATIONS ─── */
    .reveal {
      opacity: 0;
      transform: translateY(24px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .reveal.visible { opacity: 1; transform: translateY(0); }
    .reveal-delay-1 { transition-delay: 0.1s; }
    .reveal-delay-2 { transition-delay: 0.2s; }
    .reveal-delay-3 { transition-delay: 0.3s; }
    .reveal-delay-4 { transition-delay: 0.4s; }

    /* ─── RESPONSIVE ─── */
    @media (max-width: 1024px) {
      .skills-grid { grid-template-columns: 1fr 1fr; }
      .steps-grid { grid-template-columns: 1fr 1fr; }
      .steps-grid::before { display: none; }
      .projects-grid { grid-template-columns: 1fr 1fr; }
      .footer-top { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 768px) {
      .hero-inner { grid-template-columns: 1fr; }
      .hero-visual { display: none; }
      .skills-grid { grid-template-columns: 1fr; }
      .steps-grid { grid-template-columns: 1fr 1fr; }
      .projects-grid { grid-template-columns: 1fr; }
      .apropos-inner { grid-template-columns: 1fr; }
      .contact-inner { grid-template-columns: 1fr; }
      .footer-top { grid-template-columns: 1fr; }
      nav .nav-link:not(.nav-cta) { display: none; }
    }
  </style>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: { accent: '#d45f2e', ink: '#0f0e0c', cream: '#f5f0e8' }
        }
      }
    }
  </script>
</head>
<body>

<!-- ════════════════════════════════════════════
     HEADER
════════════════════════════════════════════ -->
<header>
  <div class="header-inner">
    <a href="#" class="logo">
      KB<span class="logo-dot"></span>
    </a>
    <nav>
      <a href="#competences" class="nav-link">Compétences</a>
      <a href="#projets" class="nav-link">Projets</a>
      <a href="#apropos" class="nav-link">À propos</a>
      <a href="#contact" class="nav-link nav-cta">Contact</a>
    </nav>
  </div>
</header>


<!-- ════════════════════════════════════════════
     HERO
════════════════════════════════════════════ -->
<section class="hero" id="accueil">
  <div class="hero-bg-grid"></div>
  <div class="hero-blob"></div>
  <div class="hero-inner">
    <div class="hero-text">
      <span class="hero-tag">
        <span style="width:6px;height:6px;background:var(--accent);border-radius:50%;display:inline-block;"></span>
        Disponible pour de nouveaux projets
      </span>
      <h1>Créer, <em>concevoir</em>,<br>donner vie à vos idées.</h1>
      <p class="hero-sub">
        Développeur web, graphiste et organisateur d'événements polyvalent — je combine technique et créativité pour donner une identité forte à vos projets, du pixel au présentiel.
      </p>
      <div class="hero-actions">
        <a href="#projets" class="btn-primary">
          Voir mes projets <i class="fa-solid fa-arrow-right"></i>
        </a>
        <a href="#contact" class="btn-secondary">
          Me contacter <i class="fa-regular fa-envelope"></i>
        </a>
      </div>
    </div>

    <div class="hero-visual">
      <div class="hero-card">
        <div class="hero-card-avatar">
          <i class="fa-solid fa-user"></i>
        </div>
        <h3>Kevin Burdloff</h3>
        <p>Développeur · Graphiste · Événementiel</p>
        <div class="skill-tags">
          <span class="skill-tag">HTML / CSS</span>
          <span class="skill-tag">PHP</span>
          <span class="skill-tag">JavaScript</span>
          <span class="skill-tag">Tailwind</span>
          <span class="skill-tag">Figma</span>
          <span class="skill-tag">Photoshop</span>
          <span class="skill-tag">Illustrator</span>
          <span class="skill-tag">InDesign</span>
          <span class="skill-tag">Affinity</span>
          <span class="skill-tag">Notion</span>
        </div>
        <div class="hero-stats">
          <div>
            <div class="stat-num">7<span style="color:var(--accent);">+</span></div>
            <div class="stat-label">Ans d'expérience événementielle</div>
          </div>
          <div>
            <div class="stat-num">1K<span style="color:var(--accent);">+</span></div>
            <div class="stat-label">Participants à mes événements</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     COMPÉTENCES
════════════════════════════════════════════ -->
<section id="competences">
  <div class="section-inner">
    <span class="section-eyebrow reveal">Savoir-faire</span>
    <h2 class="section-title reveal" style="color:var(--cream);">Mes domaines<br>d'expertise</h2>
    <p class="section-desc reveal">Trois univers complémentaires qui me permettent d'aborder vos projets avec une vision à 360°, de la conception à la réalisation.</p>

    <div class="skills-grid">
      <div class="skill-card reveal">
        <div class="skill-card-icon icon-web"><i class="fa-solid fa-code"></i></div>
        <h3>Développement Web</h3>
        <p class="skill-pill" style="background:none;border:none;color:rgba(245,240,232,0.5);font-size:0.82rem;padding:0;margin-bottom:1rem;line-height:1.6;">
          De la maquette au déploiement, je construis des interfaces web modernes, performantes et accessibles.
        </p>
        <div class="skill-pills">
          <span class="skill-pill">HTML5</span>
          <span class="skill-pill">CSS3</span>
          <span class="skill-pill">JavaScript</span>
          <span class="skill-pill">PHP</span>
          <span class="skill-pill">SQL</span>
          <span class="skill-pill">Bootstrap</span>
          <span class="skill-pill">Tailwind CSS</span>
          <span class="skill-pill">WordPress</span>
        </div>
      </div>

      <div class="skill-card reveal reveal-delay-1">
        <div class="skill-card-icon icon-design"><i class="fa-solid fa-pen-nib"></i></div>
        <h3>Graphisme & Design</h3>
        <p class="skill-pill" style="background:none;border:none;color:rgba(245,240,232,0.5);font-size:0.82rem;padding:0;margin-bottom:1rem;line-height:1.6;">
          Identités visuelles, maquettes, illustrations — je maîtrise la suite des outils de création professionnels.
        </p>
        <div class="skill-pills">
          <span class="skill-pill">Figma</span>
          <span class="skill-pill">Adobe Photoshop</span>
          <span class="skill-pill">Illustrator</span>
          <span class="skill-pill">InDesign</span>
          <span class="skill-pill">Affinity Suite</span>
          <span class="skill-pill">Clip Studio Paint</span>
        </div>
      </div>

      <div class="skill-card reveal reveal-delay-2">
        <div class="skill-card-icon icon-event"><i class="fa-solid fa-calendar-star"></i></div>
        <h3>Événementiel</h3>
        <p class="skill-pill" style="background:none;border:none;color:rgba(245,240,232,0.5);font-size:0.82rem;padding:0;margin-bottom:1rem;line-height:1.6;">
          7 ans de création d'événements à travers la France, de petits stands à des conventions de 1000+ participants.
        </p>
        <div class="skill-pills">
          <span class="skill-pill">Notion</span>
          <span class="skill-pill">Discord</span>
          <span class="skill-pill">Gestion de projet</span>
          <span class="skill-pill">Grande autonomie</span>
          <span class="skill-pill">Adaptabilité</span>
          <span class="skill-pill">Management</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     MÉTHODE DE TRAVAIL
════════════════════════════════════════════ -->
<section id="methode">
  <div class="section-inner">
    <span class="section-eyebrow reveal">Process</span>
    <h2 class="section-title reveal">Comment je travaille</h2>
    <p class="section-desc reveal">Une méthode structurée en 4 étapes pour garantir des projets livrés dans les délais, conformes à vos attentes, et sans mauvaise surprise.</p>

    <div class="steps-grid">
      <div class="step-card reveal">
        <div class="step-num">01</div>
        <div class="step-icon">💬</div>
        <h3>Prise de contact</h3>
        <p>On discute de vos besoins, objectifs et contraintes. C'est l'étape clé pour poser des bases solides et définir ensemble le périmètre du projet.</p>
      </div>
      <div class="step-card reveal reveal-delay-1">
        <div class="step-num">02</div>
        <div class="step-icon">✏️</div>
        <h3>Ébauches</h3>
        <p>Je réalise des maquettes et premières propositions. On affine ensemble la direction créative avant de passer à la phase de production.</p>
      </div>
      <div class="step-card reveal reveal-delay-2">
        <div class="step-num">03</div>
        <div class="step-icon">📦</div>
        <h3>Remise du projet</h3>
        <p>Le projet finalisé vous est livré accompagné de tous les fichiers sources, documentations et explications nécessaires à sa prise en main.</p>
      </div>
      <div class="step-card reveal reveal-delay-3">
        <div class="step-num">04</div>
        <div class="step-icon">✅</div>
        <h3>Validation</h3>
        <p>Phase d'ajustements et de retouches finales selon vos retours. Le projet est validé lorsque vous êtes pleinement satisfait du résultat.</p>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     PROJETS (placeholder)
════════════════════════════════════════════ -->
<section id="projets">
  <div class="section-inner">
    <span class="section-eyebrow reveal">Réalisations</span>
    <h2 class="section-title reveal">Quelques projets</h2>
    <p class="section-desc reveal">Un aperçu de mes travaux récents en développement web, graphisme et organisation d'événements.</p>

    <div class="projects-grid">
      <div class="project-card reveal">
        <div class="project-thumb">WEB</div>
        <div class="project-body">
          <div class="project-type">Développement Web</div>
          <h3>Nom du projet</h3>
          <p>Courte description du projet, de ses enjeux et de la solution apportée. Remplacer par vos vraies réalisations.</p>
          <div class="project-tags">
            <span class="project-tag">WordPress</span>
            <span class="project-tag">PHP</span>
            <span class="project-tag">Tailwind</span>
          </div>
        </div>
      </div>
      <div class="project-card reveal reveal-delay-1">
        <div class="project-thumb">DESIGN</div>
        <div class="project-body">
          <div class="project-type">Identité visuelle</div>
          <h3>Nom du projet</h3>
          <p>Courte description du projet de branding ou de création graphique. Remplacer par vos vraies réalisations.</p>
          <div class="project-tags">
            <span class="project-tag">Illustrator</span>
            <span class="project-tag">Figma</span>
          </div>
        </div>
      </div>
      <div class="project-card reveal reveal-delay-2">
        <div class="project-thumb">EVENT</div>
        <div class="project-body">
          <div class="project-type">Événementiel</div>
          <h3>Nom de l'événement</h3>
          <p>Description d'un événement organisé, sa portée, le nombre de participants, les outils utilisés.</p>
          <div class="project-tags">
            <span class="project-tag">Notion</span>
            <span class="project-tag">Discord</span>
            <span class="project-tag">1000+ personnes</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     À PROPOS
════════════════════════════════════════════ -->
<section id="apropos">
  <div class="section-inner">
    <div class="apropos-inner">
      <div class="apropos-image reveal">
        <i class="fa-regular fa-image"></i>
        <span style="position:absolute;bottom:1.5rem;left:1.5rem;font-size:0.75rem;font-family:'DM Sans',sans-serif;color:rgba(15,14,12,0.35);">Photo à ajouter</span>
      </div>
      <div class="apropos-content">
        <span class="section-eyebrow reveal">À propos</span>
        <h2 class="section-title reveal">Polyvalent<br>par passion.</h2>
        <p class="apropos-body reveal">
          Passionné par la création sous toutes ses formes, j'ai développé au fil des années une expertise rare qui croise le développement web, le design graphique et l'organisation d'événements. Cette combinaison me permet de comprendre vos projets dans leur globalité et de vous accompagner sur plusieurs fronts.
        </p>
        <p class="apropos-body reveal" style="margin-top:-1rem;">
          Avec 7 ans d'expérience dans l'événementiel, j'ai appris à travailler sous pression, à m'adapter rapidement et à piloter des projets complexes de A à Z — des compétences que j'applique aussi bien à la création de sites web qu'aux projets graphiques.
        </p>
        <div class="values-list reveal">
          <div class="value-item">
            <div class="value-icon"><i class="fa-solid fa-bolt fa-xs"></i></div>
            <span>Grande autonomie et réactivité</span>
          </div>
          <div class="value-item">
            <div class="value-icon"><i class="fa-solid fa-shuffle fa-xs"></i></div>
            <span>Adaptabilité dans tous les environnements</span>
          </div>
          <div class="value-item">
            <div class="value-icon"><i class="fa-solid fa-handshake fa-xs"></i></div>
            <span>Communication transparente et régulière</span>
          </div>
          <div class="value-item">
            <div class="value-icon"><i class="fa-solid fa-award fa-xs"></i></div>
            <span>Exigence sur la qualité rendue</span>
          </div>
        </div>
        <a href="#contact" class="btn-primary reveal">
          Travaillons ensemble <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     CONTACT
════════════════════════════════════════════ -->
<section id="contact">
  <div class="section-inner">
    <div class="contact-inner">
      <div class="contact-left reveal">
        <span class="section-eyebrow">Contact</span>
        <h2 class="section-title">Parlons de votre projet.</h2>
        <p>Une idée, une question, un projet à concrétiser ? N'hésitez pas à me contacter — je réponds généralement sous 24h.</p>
        <div class="contact-info">
          <div class="contact-item">
            <div class="contact-item-icon"><i class="fa-regular fa-envelope"></i></div>
            <div>
              <div style="font-size:0.72rem;color:rgba(245,240,232,0.4);text-transform:uppercase;letter-spacing:0.08em;margin-bottom:0.2rem;">Email</div>
              <a href="mailto:burdloffkevin@gmail.com">burdloffkevin@gmail.com</a>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item-icon"><i class="fa-brands fa-linkedin"></i></div>
            <div>
              <div style="font-size:0.72rem;color:rgba(245,240,232,0.4);text-transform:uppercase;letter-spacing:0.08em;margin-bottom:0.2rem;">LinkedIn</div>
              <a href="#">Votre profil LinkedIn</a>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item-icon"><i class="fa-solid fa-location-dot"></i></div>
            <div>
              <div style="font-size:0.72rem;color:rgba(245,240,232,0.4);text-transform:uppercase;letter-spacing:0.08em;margin-bottom:0.2rem;">Disponibilité</div>
              <span>France — Télétravail & présentiel</span>
            </div>
          </div>
        </div>
      </div>

      <div class="contact-form reveal reveal-delay-1">
        <h3 style="font-size:1.1rem;font-weight:700;color:var(--cream);margin-bottom:1.5rem;">Envoyer un message</h3>
        <div class="form-group">
          <label>Votre nom</label>
          <input type="text" placeholder="Jean Dupont" />
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" placeholder="jean@exemple.fr" />
        </div>
        <div class="form-group">
          <label>Type de projet</label>
          <select>
            <option>Développement web</option>
            <option>Design graphique</option>
            <option>Événementiel</option>
            <option>Plusieurs domaines</option>
            <option>Autre</option>
          </select>
        </div>
        <div class="form-group">
          <label>Votre message</label>
          <textarea placeholder="Décrivez votre projet en quelques lignes..."></textarea>
        </div>
        <button class="btn-submit">
          Envoyer <i class="fa-solid fa-paper-plane"></i>
        </button>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     FOOTER
════════════════════════════════════════════ -->
<footer>
  <div class="footer-inner">
    <div class="footer-top">
      <div class="footer-brand">
        <a href="#" class="logo">KB<span class="logo-dot"></span></a>
        <p>Développeur web, graphiste et organisateur d'événements basé en France. Disponible pour des missions freelance et des collaborations.</p>
        <div class="footer-social">
          <a href="#" class="social-icon" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="social-icon" title="Twitter / X"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="#" class="social-icon" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" class="social-icon" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#" class="social-icon" title="GitHub"><i class="fa-brands fa-github"></i></a>
        </div>
      </div>

      <div class="footer-col">
        <h4>Navigation</h4>
        <ul class="footer-links">
          <li><a href="#accueil">Accueil</a></li>
          <li><a href="#competences">Compétences</a></li>
          <li><a href="#methode">Ma méthode</a></li>
          <li><a href="#projets">Projets</a></li>
          <li><a href="#apropos">À propos</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Services</h4>
        <ul class="footer-links">
          <li><a href="#">Développement WordPress</a></li>
          <li><a href="#">Intégration HTML/CSS</a></li>
          <li><a href="#">Identité visuelle</a></li>
          <li><a href="#">Maquettage Figma</a></li>
          <li><a href="#">Organisation d'événements</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Contact</h4>
        <ul class="footer-links">
          <li><a href="mailto:burdloffkevin@gmail.com">burdloffkevin@gmail.com</a></li>
          <li><a href="#">LinkedIn</a></li>
          <li><a href="#contact">Formulaire de contact</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <span>© 2025 Kevin Burdloff — Tous droits réservés.</span>
      <div class="footer-bottom-links">
        <a href="#">Mentions légales</a>
        <a href="#">Politique de confidentialité</a>
        <a href="#">Plan du site</a>
      </div>
    </div>
  </div>
</footer>


<!-- ════════════════════════════════════════════
     JS — Scroll reveal
════════════════════════════════════════════ -->
<script>
  const reveals = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); } });
  }, { threshold: 0.1 });
  reveals.forEach(el => observer.observe(el));

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
</script>

</body>
</html>