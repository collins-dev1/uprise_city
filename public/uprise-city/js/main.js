/* =========================================================
   UPRISE CITY — main.js
   Shared behaviour across every page.
   ========================================================= */
(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", function () {
    initHeader();
    initMobileNav();
    initDropdowns();
    initActiveLink();
    initCountdown();
    initFAQ();
    initBioModals();
    initGalleryFilter();
    initForms();
    initFooterYear();
  });

  /* ---------- Sticky header shadow ---------- */
  function initHeader() {
    var header = document.querySelector(".site-header");
    if (!header) return;
    var onScroll = function () {
      header.classList.toggle("is-scrolled", window.scrollY > 12);
    };
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
  }

  /* ---------- Mobile nav toggle ---------- */
  function initMobileNav() {
    var toggle = document.querySelector(".nav-toggle");
    var nav = document.querySelector(".nav-main");
    if (!toggle || !nav) return;
    toggle.addEventListener("click", function () {
      var isOpen = nav.classList.toggle("is-open");
      toggle.classList.toggle("is-active", isOpen);
      toggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
      document.body.style.overflow = isOpen ? "hidden" : "";
    });
    // close menu when a plain link is tapped
    nav.querySelectorAll("a").forEach(function (a) {
      a.addEventListener("click", function () {
        if (window.innerWidth <= 980) {
          nav.classList.remove("is-open");
          toggle.classList.remove("is-active");
          document.body.style.overflow = "";
        }
      });
    });
  }

  /* ---------- Dropdown (About Us / Global Wealth Conference) ---------- */
  function initDropdowns() {
    var items = document.querySelectorAll(".has-dropdown");
    items.forEach(function (item) {
      var link = item.querySelector(":scope > .nav-link");
      if (!link) return;
      link.addEventListener("click", function (e) {
        if (window.innerWidth <= 980) {
          e.preventDefault();
          var willOpen = !item.classList.contains("is-open");
          items.forEach(function (i) { i.classList.remove("is-open"); });
          if (willOpen) item.classList.add("is-open");
        }
      });
    });
    document.addEventListener("click", function (e) {
      if (window.innerWidth > 980 && !e.target.closest(".has-dropdown")) {
        items.forEach(function (i) { i.classList.remove("is-open"); });
      }
    });
  }

  /* ---------- Highlight current page in nav ---------- */
  function initActiveLink() {
    var path = window.location.pathname.split("/").pop() || "index.html";
    document.querySelectorAll(".nav-main a").forEach(function (a) {
      var href = a.getAttribute("href");
      if (!href) return;
      if (href === path || (path === "" && href === "index.html")) {
        a.classList.add("is-active");
        var parentDropdown = a.closest(".has-dropdown");
        if (parentDropdown) {
          var parentLink = parentDropdown.querySelector(":scope > .nav-link");
          if (parentLink) parentLink.classList.add("is-active");
        }
      }
    });
  }

  /* ---------- Countdown to the conference ---------- */
  function initCountdown() {
    var el = document.querySelector("[data-countdown]");
    if (!el) return;
    var target = new Date(el.getAttribute("data-countdown")).getTime();
    var dEl = el.querySelector("[data-c-days]");
    var hEl = el.querySelector("[data-c-hours]");
    var mEl = el.querySelector("[data-c-mins]");
    var sEl = el.querySelector("[data-c-secs]");

    function tick() {
      var now = Date.now();
      var diff = Math.max(0, target - now);
      var days = Math.floor(diff / 86400000);
      var hours = Math.floor((diff % 86400000) / 3600000);
      var mins = Math.floor((diff % 3600000) / 60000);
      var secs = Math.floor((diff % 60000) / 1000);
      if (dEl) dEl.textContent = String(days).padStart(2, "0");
      if (hEl) hEl.textContent = String(hours).padStart(2, "0");
      if (mEl) mEl.textContent = String(mins).padStart(2, "0");
      if (sEl) sEl.textContent = String(secs).padStart(2, "0");
    }
    tick();
    setInterval(tick, 1000);
  }

  /* ---------- FAQ accordion ---------- */
  function initFAQ() {
    document.querySelectorAll(".faq-item").forEach(function (item) {
      var q = item.querySelector(".faq-q");
      if (!q) return;
      q.addEventListener("click", function () {
        var isOpen = item.classList.contains("is-open");
        item.parentElement.querySelectorAll(".faq-item").forEach(function (i) {
          i.classList.remove("is-open");
        });
        if (!isOpen) item.classList.add("is-open");
      });
    });
  }

  /* ---------- Bio modal (officials & speakers) ---------- */
  function initBioModals() {
    var overlay = document.querySelector("[data-modal-overlay]");
    if (!overlay) return;
    var modal = overlay.querySelector(".modal");
    var closeBtn = overlay.querySelector(".modal-close");

    document.querySelectorAll("[data-bio-trigger]").forEach(function (card) {
      card.addEventListener("click", function () {
        var source = document.getElementById(card.getAttribute("data-bio-trigger"));
        if (!source) return;
        modal.innerHTML =
          '<button class="modal-close" type="button" data-modal-close aria-label="Close">&times;</button>' +
          source.innerHTML;
        overlay.classList.add("is-open");
        document.body.style.overflow = "hidden";
        overlay.querySelector("[data-modal-close]").addEventListener("click", closeModal);
      });
      card.setAttribute("tabindex", "0");
      card.setAttribute("role", "button");
      card.addEventListener("keypress", function (e) {
        if (e.key === "Enter" || e.key === " ") card.click();
      });
    });

    function closeModal() {
      overlay.classList.remove("is-open");
      document.body.style.overflow = "";
    }
    overlay.addEventListener("click", function (e) {
      if (e.target === overlay) closeModal();
    });
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") closeModal();
    });
    if (closeBtn) closeBtn.addEventListener("click", closeModal);
  }

  /* ---------- Gallery year/category filter ---------- */
  function initGalleryFilter() {
    var bar = document.querySelector(".filter-bar");
    if (!bar) return;
    var buttons = bar.querySelectorAll(".filter-btn");
    var items = document.querySelectorAll(".gallery-item");
    buttons.forEach(function (btn) {
      btn.addEventListener("click", function () {
        buttons.forEach(function (b) { b.classList.remove("is-active"); });
        btn.classList.add("is-active");
        var filter = btn.getAttribute("data-filter");
        items.forEach(function (item) {
          var show = filter === "all" || item.getAttribute("data-cat") === filter;
          item.classList.toggle("is-hidden", !show);
        });
      });
    });
  }

  /* ---------- Front-end form handling (contact form) ---------- */
  function initForms() {
    document.querySelectorAll("[data-ajax-form]").forEach(function (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        var success = form.parentElement.querySelector(".form-success");
        if (success) {
          success.classList.add("is-visible");
          success.setAttribute("tabindex", "-1");
          success.focus();
        }
        form.reset();
      });
    });
  }

  /* ---------- Footer year ---------- */
  function initFooterYear() {
    document.querySelectorAll("[data-year]").forEach(function (el) {
      el.textContent = new Date().getFullYear();
    });
  }
})();
