/**
 * HERBSNACKFERN — Main Client Scripts
 * Interactive Botanical Pairing Matrix, Dehydration Calculator, Theme Switcher & Filters
 */

document.addEventListener('DOMContentLoaded', () => {
  initMobileNav();
  initThemeSwitcher();
  initReadingProgressBar();
  initFontSizeAdjuster();
  initPairingMatrix();
  initBlogFilter();
  initContactForm();
});

// Mobile Nav Toggle
function initMobileNav() {
  const toggleBtn = document.querySelector('.mobile-menu-btn');
  const navMenu = document.querySelector('.nav-menu');
  if (!toggleBtn || !navMenu) return;

  toggleBtn.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    const isExpanded = navMenu.classList.contains('active');
    toggleBtn.setAttribute('aria-expanded', isExpanded);
    toggleBtn.innerHTML = isExpanded ? '✕' : '☰';
  });

  document.addEventListener('click', (e) => {
    if (!navMenu.contains(e.target) && !toggleBtn.contains(e.target) && navMenu.classList.contains('active')) {
      navMenu.classList.remove('active');
      toggleBtn.innerHTML = '☰';
    }
  });
}

// Botanical Theme Switcher
function initThemeSwitcher() {
  const themeBtn = document.querySelector('.theme-toggle-btn');
  if (!themeBtn) return;

  const savedTheme = localStorage.getItem('hsf_theme') || 'light';
  applyTheme(savedTheme);

  themeBtn.addEventListener('click', () => {
    const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
    const nextTheme = currentTheme === 'light' ? 'dark' : 'light';
    applyTheme(nextTheme);
    localStorage.setItem('hsf_theme', nextTheme);
  });

  function applyTheme(theme) {
    if (theme === 'light') {
      document.documentElement.removeAttribute('data-theme');
      themeBtn.innerHTML = '☼';
      themeBtn.setAttribute('title', 'Switch to Botanical Dark Mode');
    } else {
      document.documentElement.setAttribute('data-theme', 'dark');
      themeBtn.innerHTML = '☽';
      themeBtn.setAttribute('title', 'Switch to Botanical Light Mode');
    }
  }
}

// Reading Progress Bar
function initReadingProgressBar() {
  const progressBar = document.querySelector('.reading-progress-bar');
  if (!progressBar) return;

  window.addEventListener('scroll', () => {
    const winScroll = document.documentElement.scrollTop || document.body.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled = height > 0 ? (winScroll / height) * 100 : 0;
    progressBar.style.width = scrolled + '%';
  }, { passive: true });
}

// In-Article Font Scaler
function initFontSizeAdjuster() {
  const articleBody = document.querySelector('.article-body');
  const decreaseBtn = document.querySelector('.font-dec');
  const resetBtn = document.querySelector('.font-reset');
  const increaseBtn = document.querySelector('.font-inc');
  if (!articleBody || !decreaseBtn) return;

  let currentScale = 1.15;

  decreaseBtn.addEventListener('click', () => {
    if (currentScale > 1.0) {
      currentScale -= 0.08;
      articleBody.style.fontSize = `${currentScale}rem`;
    }
  });

  if (resetBtn) {
    resetBtn.addEventListener('click', () => {
      currentScale = 1.15;
      articleBody.style.fontSize = `${currentScale}rem`;
    });
  }

  increaseBtn.addEventListener('click', () => {
    if (currentScale < 1.45) {
      currentScale += 0.08;
      articleBody.style.fontSize = `${currentScale}rem`;
    }
  });
}

// Interactive Botanical Snack & Tisane Pairing Engine
function initPairingMatrix() {
  const snackSelect = document.getElementById('pairingSnackSelect');
  const notesOutput = document.getElementById('pairingNotesOutput');
  const tisaneOutput = document.getElementById('pairingTisaneOutput');
  const profileOutput = document.getElementById('pairingProfileOutput');

  if (!snackSelect || !tisaneOutput) return;

  const pairings = {
    crackers: {
      tisane: "🫖 Lemon Verbena & Roasted Dandelion Tisane",
      profile: "Earthy, mineral-rich, bright citrus undertones",
      notes: "The woodsy pine notes of rosemary and sea salt in seed crisps balance harmoniously against the grounding roasted dandelion root and crisp lemon verbena top-notes."
    },
    clusters: {
      tisane: "🫖 Ceylon Cinnamon & Holy Basil (Tulsi) Infusion",
      profile: "Warm spiced, grounding, gentle adaptogenic sweetness",
      notes: "Spicy cardamom and warming cinnamon in botanical date-nut clusters are elevated by the aromatic, clove-like nuances of holy basil."
    },
    greens: {
      tisane: "🫖 Wild Peppermint & Nettle Leaf Tisane",
      profile: "Cooling menthol, grassy, crisp clean palate cleanser",
      notes: "The savory, garlic-herb umami of dehydrated garden crisps is refreshed by the brisk cooling menthol of peppermint and iron-rich nettle."
    },
    dips: {
      tisane: "🫖 Chamomile Blossom & Lemon Thyme Infusion",
      profile: "Floral, delicate honey aroma, gentle herbal warmth",
      notes: "Rich walnut-basil and sunflower pesto fats are effortlessly cut by the gentle floral honey notes of whole chamomile flowers."
    }
  };

  function updatePairing() {
    const val = snackSelect.value || 'crackers';
    const data = pairings[val] || pairings.crackers;

    if (tisaneOutput) tisaneOutput.innerText = data.tisane;
    if (profileOutput) profileOutput.innerText = `Profile: ${data.profile}`;
    if (notesOutput) notesOutput.innerText = data.notes;
  }

  snackSelect.addEventListener('change', updatePairing);
  updatePairing();
}

// Blog Filter & Search
function initBlogFilter() {
  const filterBtns = document.querySelectorAll('.filter-btn');
  const searchInput = document.getElementById('blogSearchInput');
  const blogCards = document.querySelectorAll('.blog-card');

  if (!filterBtns.length && !searchInput) return;

  let activeCategory = 'all';
  let searchTerm = '';

  function applyFilters() {
    blogCards.forEach(card => {
      const cardCategory = card.getAttribute('data-category') || '';
      const cardTitle = (card.querySelector('.blog-card-title')?.innerText || '').toLowerCase();
      const cardExcerpt = (card.querySelector('.blog-card-excerpt')?.innerText || '').toLowerCase();

      const matchesCat = activeCategory === 'all' || cardCategory.toLowerCase() === activeCategory.toLowerCase();
      const matchesSearch = !searchTerm || cardTitle.includes(searchTerm) || cardExcerpt.includes(searchTerm);

      if (matchesCat && matchesSearch) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  }

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      activeCategory = btn.getAttribute('data-filter') || 'all';
      applyFilters();
    });
  });

  if (searchInput) {
    searchInput.addEventListener('input', (e) => {
      searchTerm = e.target.value.toLowerCase().trim();
      applyFilters();
    });
  }
}

// Contact Form Feedback
function initContactForm() {
  const form = document.getElementById('hsfContactForm');
  const statusMsg = document.getElementById('contactStatusMsg');
  if (!form) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (statusMsg) {
      statusMsg.innerHTML = '<div style="padding: 1rem; background: #eef5f0; color: #1c3d2c; border-radius: 6px; font-weight: 600; margin-top: 1rem; border: 1px solid #c4dfcd;">Thank you for contacting HerbSnackFern. Your culinary inquiry has been received by our kitchen desk.</div>';
      form.reset();
    }
  });
}
