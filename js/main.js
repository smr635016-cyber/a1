document.addEventListener('DOMContentLoaded', function () {
  var toggle = document.querySelector('.menu-toggle');
  var links = document.querySelector('.nav-links');
  if (toggle && links) {
    toggle.addEventListener('click', function () {
      var isOpen = links.classList.toggle('open');
      toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
  }

  // Duplicate the tag strip content once so the CSS marquee loop is seamless.
  var track = document.querySelector('.tag-track');
  if (track) {
    track.innerHTML += track.innerHTML;
  }

  var form = document.querySelector('.contact-form');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var note = form.querySelector('.form-note');
      if (note) {
        note.textContent = "Thanks — your message has been noted. Our team will call or email you back shortly.";
        note.style.color = '#1E5B62';
      }
      form.reset();
    });
  }
});
