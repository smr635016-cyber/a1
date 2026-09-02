<?php
// HerbSnackFern - Homepage
$current_year = date('Y');
$page_title = "HerbSnackFern — Artisanal Botanical Snacks, Herb Crisps & Plant-Forward Kitchen";
$page_desc = "Explore whole-food herbal seed crackers, dehydrated garden greens, botanical energy clusters, and mindful tisane pairings at HerbSnackFern.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
  <link rel="canonical" href="https://herbsnackfern.com/">
  
  <!-- Open Graph Meta -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://herbsnackfern.com/">
  <meta property="og:image" content="https://herbsnackfern.com/assets/images/hero-botanical-pantry.jpg">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="assets/css/styles.css">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-0LY0HY7L01');
  </script>
</head>
<body>

  <div class="reading-progress-bar" aria-hidden="true"></div>

  <!-- Top Announcement Bar -->
  <aside class="announcement-bar">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
      <span>🌿 Welcome to HerbSnackFern — Artisanal plant-forward snacking and botanical kitchen crafts.</span>
      <div class="meta-contact">
        <span>📍 181 Mercer Street, New York, NY 10012</span>
        <a href="tel:+18887775845">📞 +1-888-777-5845</a>
      </div>
    </div>
  </aside>

  <!-- Site Header -->
  <header class="site-header">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo" aria-label="HerbSnackFern Homepage">
          <div class="logo-leaf-icon">🌱</div>
          <div class="logo-text-group">
            <span class="logo-title">HerbSnackFern</span>
            <span class="logo-tagline">Botanical Kitchen</span>
          </div>
        </a>

        <nav class="nav-menu" aria-label="Main Navigation">
          <a href="index.php" class="nav-link active">Home</a>
          <a href="about.html" class="nav-link">Our Kitchen</a>
          <a href="blog.html" class="nav-link">Culinary Guides</a>
          <a href="#matrix" class="nav-link">Pairing Matrix</a>
          <a href="contact.html" class="nav-link">Contact</a>
        </nav>

        <div class="nav-actions">
          <button class="theme-toggle-btn" aria-label="Toggle Botanical Theme" title="Switch Theme">☼</button>
          <a href="blog.html" class="btn btn-terracotta" style="padding: 0.55rem 1.1rem; font-size: 0.85rem;">View Recipes</a>
          <button class="mobile-menu-btn" aria-label="Open Navigation Menu">☰</button>
        </div>
      </div>
    </div>
  </header>

  <main id="main-content">
    
    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <div class="hero-grid">
          <div class="hero-content">
            <span class="section-eyebrow">Plant-Forward Culinary Craft</span>
            <h1 class="hero-heading">Nourishment Rooted in Garden Herbs & Whole Seeds</h1>
            <p class="hero-lead">
              HerbSnackFern is a dedicated culinary guild celebrating the craft of savory botanical seed crisps, dehydrated garden greens, wild herb spreads, and mindful tisane pairings.
            </p>
            <div class="hero-ctas">
              <a href="blog.html" class="btn btn-primary">Explore Botanical Guides</a>
              <a href="#matrix" class="btn btn-outline">Explore Pairing Matrix</a>
            </div>
            
            <div class="hero-metrics">
              <div class="metric-item">
                <div class="metric-num">6+</div>
                <div class="metric-label">Master Kitchen Guides</div>
              </div>
              <div class="metric-item">
                <div class="metric-num">100%</div>
                <div class="metric-label">Whole Plant Sourced</div>
              </div>
              <div class="metric-item">
                <div class="metric-num">Zero</div>
                <div class="metric-label">Refined Additives</div>
              </div>
            </div>
          </div>

          <div class="hero-visual-card">
            <img src="assets/images/hero-botanical-pantry.jpg" alt="Artisanal herbal crackers, fresh rosemary sprigs, linen, and terracotta bowl" width="1200" height="800">
            <div class="hero-floating-badge">
              <p style="font-family: var(--font-serif); font-size: 0.95rem; font-style: italic; margin-bottom: 0.35rem;">"Elevating simple garden herbs into nutrient-dense, extraordinary crunch."</p>
              <span style="font-size: 0.75rem; color: var(--accent-wheat); text-transform: uppercase; letter-spacing: 0.08em;">— HerbSnackFern Kitchen Desk</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Core Botanical Pillars -->
    <section class="section-py">
      <div class="container">
        <div class="section-header text-center" style="max-width: 750px; margin: 0 auto 3.5rem;">
          <span class="section-eyebrow">The Botanical Method</span>
          <h2 class="section-title">The Four Pillars of Plant-Forward Snacking</h2>
          <p class="section-subtitle" style="margin: 0 auto;">
            Reimagining between-meal nourishment with nutrient-dense seeds, low-temperature dehydration, and vibrant culinary herbs.
          </p>
        </div>

        <div class="feature-pillars-grid">
          <div class="pillar-card">
            <div class="pillar-icon">🌾</div>
            <h3 class="pillar-title">Chia & Flax Hydro-Binding</h3>
            <p class="pillar-desc">
              Harnessing natural mucilage from hydrated whole seeds to create shatteringly crisp grain-free crackers without refined starches or binders.
            </p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon">☀️</div>
            <h3 class="pillar-title">Low-Temp Dehydration</h3>
            <p class="pillar-desc">
              Preserving delicate volatile herb oils, live enzymes, and vibrant chlorophyll by drying garden greens at gentle culinary temperatures.
            </p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon">🌿</div>
            <h3 class="pillar-title">Garden Herb Infusion</h3>
            <p class="pillar-desc">
              Layering woodsy rosemary, pungent thyme, savory wild garlic, and mineral-dense nettle to deliver complex, satisfying savory depth.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Masterclasses -->
    <section class="section-py" style="background: var(--bg-surface-alt); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
      <div class="container">
        <div class="section-header" style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 1rem;">
          <div>
            <span class="section-eyebrow">Kitchen Masterclasses</span>
            <h2 class="section-title" style="margin-bottom: 0.5rem;">Featured Culinary Guides</h2>
            <p class="section-subtitle">Detailed step-by-step masterclasses for the mindful plant-forward cook.</p>
          </div>
          <a href="blog.html" class="btn btn-outline" style="border-color: var(--accent-terracotta); color: var(--accent-terracotta-dark);">View All 6 Guides &rarr;</a>
        </div>

        <div class="blog-grid">
          
          <!-- Card 1 -->
          <article class="blog-card" data-category="crisps">
            <div class="blog-card-media">
              <img src="assets/images/blog-seed-crackers.jpg" alt="Golden rosemary flax seed crackers on baking board" width="1200" height="800" loading="lazy">
              <span class="badge badge-terracotta blog-card-badge">Seed Crisps</span>
            </div>
            <div class="blog-card-body">
              <div class="blog-meta-row">
                <span>11 Min Read</span>
                <span class="blog-meta-dot">•</span>
                <span>Baking & Dehydrating</span>
              </div>
              <h3 class="blog-card-title">
                <a href="blog/the-art-of-herbal-seed-crackers-and-crisps.html">The Art of Herbal Seed Crackers and Crisps: Science, Seeds, and Crunch</a>
              </h3>
              <p class="blog-card-excerpt">
                A masterclass on crafting gluten-free multi-seed crisps with rosemary and sea salt, exploring seed mucilage gel binding and moisture control.
              </p>
              <div class="blog-card-footer">
                <span>By HerbSnackFern</span>
                <a href="blog/the-art-of-herbal-seed-crackers-and-crisps.html" class="read-more-link">Read Guide &rarr;</a>
              </div>
            </div>
          </article>

          <!-- Card 2 -->
          <article class="blog-card" data-category="clusters">
            <div class="blog-card-media">
              <img src="assets/images/blog-energy-clusters.jpg" alt="Nut, date, and herb energy clusters on a wooden platter" width="1200" height="800" loading="lazy">
              <span class="badge badge-forest blog-card-badge">Energy Clusters</span>
            </div>
            <div class="blog-card-body">
              <div class="blog-meta-row">
                <span>10 Min Read</span>
                <span class="blog-meta-dot">•</span>
                <span>Whole Food Bites</span>
              </div>
              <h3 class="blog-card-title">
                <a href="blog/botanical-snack-bites-herbal-energy-clusters.html">Botanical Snack Bites & Herbal Energy Clusters: Sustained Plant Nutrition</a>
              </h3>
              <p class="blog-card-excerpt">
                Formulating dense, non-glycemic spiking snack clusters using whole Medjool dates, sprouted almonds, and culinary adaptogenic herbs.
              </p>
              <div class="blog-card-footer">
                <span>By HerbSnackFern</span>
                <a href="blog/botanical-snack-bites-herbal-energy-clusters.html" class="read-more-link">Read Guide &rarr;</a>
              </div>
            </div>
          </article>

          <!-- Card 3 -->
          <article class="blog-card" data-category="greens">
            <div class="blog-card-media">
              <img src="assets/images/blog-garden-greens.jpg" alt="Crispy dehydrated garden greens and kale in a ceramic bowl" width="1200" height="800" loading="lazy">
              <span class="badge badge-terracotta blog-card-badge">Garden Greens</span>
            </div>
            <div class="blog-card-body">
              <div class="blog-meta-row">
                <span>12 Min Read</span>
                <span class="blog-meta-dot">•</span>
                <span>Dehydration Craft</span>
              </div>
              <h3 class="blog-card-title">
                <a href="blog/foraging-and-drying-garden-greens-for-crisps.html">Foraging & Dehydrating Garden Greens: Transforming Leaves into Crisps</a>
              </h3>
              <p class="blog-card-excerpt">
                Turning garden kale, sorrel, dandelion greens, and ostrich fern fiddleheads into shatteringly crisp savory snacks with nutritional yeast.
              </p>
              <div class="blog-card-footer">
                <span>By HerbSnackFern</span>
                <a href="blog/foraging-and-drying-garden-greens-for-crisps.html" class="read-more-link">Read Guide &rarr;</a>
              </div>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- Interactive Botanical Pairing Matrix -->
    <section id="matrix" class="section-py">
      <div class="container">
        <div class="pairing-matrix-box">
          <div class="matrix-grid">
            <div>
              <span class="section-eyebrow">Interactive Kitchen Tool</span>
              <h2 style="font-size: 2rem; margin-bottom: 0.75rem;">Botanical Snack & Tisane Pairing Matrix</h2>
              <p style="color: var(--text-muted); font-size: 0.98rem; margin-bottom: 1.5rem;">
                Match savory herb-infused snacks with complementary hot botanical tisanes to create a restorative afternoon sensory ritual.
              </p>

              <div class="form-group" style="margin-bottom: 1rem;">
                <label for="pairingSnackSelect">Select Botanical Snack Type:</label>
                <select id="pairingSnackSelect" class="form-control">
                  <option value="crackers" selected>Rosemary & Sea Salt Multi-Seed Crisps</option>
                  <option value="clusters">Cardamom Date & Adaptogenic Energy Clusters</option>
                  <option value="greens">Garlic-Herb Dehydrated Dandelion & Kale Crisps</option>
                  <option value="dips">Walnut-Basil Pesto & Fresh Herb Dip Platter</option>
                </select>
              </div>
            </div>

            <div class="matrix-output-card">
              <span style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--accent-terracotta); font-weight: 700;">Recommended Herbal Pairing</span>
              <div id="pairingTisaneOutput" class="matrix-output-title">🫖 Lemon Verbena & Roasted Dandelion Tisane</div>
              <div id="pairingProfileOutput" style="font-size: 0.9rem; font-weight: 600; color: var(--accent-forest); margin-bottom: 0.75rem;">
                Profile: Earthy, mineral-rich, bright citrus undertones
              </div>
              <p id="pairingNotesOutput" style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">
                The woodsy pine notes of rosemary and sea salt in seed crisps balance harmoniously against the grounding roasted dandelion root and crisp lemon verbena top-notes.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Kitchen Ethos Section -->
    <section class="section-py" style="background: var(--bg-surface); border-top: 1px solid var(--border-subtle);">
      <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
          <div>
            <span class="section-eyebrow">Mindful Nourishment</span>
            <h2 style="font-size: 2.2rem; margin-bottom: 1.25rem;">Honoring the Earth’s Botanical Pantry</h2>
            <p style="font-family: var(--font-serif); font-size: 1.15rem; line-height: 1.75; color: var(--text-muted);">
              Commercial snacking is dominated by ultra-processed starches, inflammatory seed oils, and artificial flavor enhancers. We advocate for a return to kitchen simplicity.
            </p>
            <p style="font-size: 0.98rem; color: var(--text-muted); line-height: 1.7;">
              By combining whole pumpkin, sunflower, and chia seeds with fresh garden herbs and gentle air dehydration, we create foods that deliver profound flavor, genuine satiety, and vibrant cellular nutrition.
            </p>
            <div style="margin-top: 2rem;">
              <a href="about.html" class="btn btn-primary">Read Our Kitchen Story</a>
            </div>
          </div>

          <div style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--border-subtle);">
            <img src="assets/images/about-botanical-kitchen.jpg" alt="Culinary herb garden, mortar & pestle, and fresh greens on a rustic wooden table" width="1200" height="800" loading="lazy">
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        
        <!-- Col 1: Brand -->
        <div class="footer-brand">
          <div class="brand-logo" style="margin-bottom: 1rem;">
            <div class="logo-leaf-icon">🌱</div>
            <div class="logo-text-group">
              <span class="logo-title">HerbSnackFern</span>
              <span class="logo-tagline">Botanical Kitchen</span>
            </div>
          </div>
          <p class="footer-desc">
            An independent culinary platform dedicated to plant-forward snack crafting, herbal seed crisps, garden green dehydration, and whole-food pantry arts.
          </p>
        </div>

        <!-- Col 2: Navigation -->
        <div>
          <h4 class="footer-heading">Navigation</h4>
          <ul class="footer-links">
            <li><a href="index.php">Kitchen Sanctuary</a></li>
            <li><a href="about.html">About HerbSnackFern</a></li>
            <li><a href="blog.html">Culinary Guides Index</a></li>
            <li><a href="#matrix">Pairing Matrix Engine</a></li>
            <li><a href="contact.html">Contact Kitchen Desk</a></li>
          </ul>
        </div>

        <!-- Col 3: Legal & Trust -->
        <div>
          <h4 class="footer-heading">Trust & Policies</h4>
          <ul class="footer-links">
            <li><a href="privacy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms & Conditions</a></li>
            <li><a href="disclaimer.html">Culinary Disclaimer</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
          </ul>
        </div>

        <!-- Col 4: Contact -->
        <div>
          <h4 class="footer-heading">Culinary Desk</h4>
          <p class="footer-contact-text">
            <strong>Address:</strong><br>
            181 Mercer Street,<br>
            New York, NY 10012,<br>
            United States
          </p>
          <p class="footer-contact-text">
            <strong>Inquiries:</strong><br>
            <a href="tel:+18887775845" style="color: var(--accent-wheat);">+1-888-777-5845</a>
          </p>
        </div>

      </div>

      <div class="footer-bottom">
        <div>
          &copy; <?php echo $current_year; ?> HerbSnackFern. All rights reserved. Crafted with whole-food integrity.
        </div>
        <div class="footer-bottom-links">
          <a href="privacy.html">Privacy</a>
          <a href="terms.html">Terms</a>
          <a href="disclaimer.html">Disclaimer</a>
          <a href="cookies.html">Cookies</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="assets/js/main.js"></script>
</body>
</html>
