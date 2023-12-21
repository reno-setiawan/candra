document.addEventListener("DOMContentLoaded", function () {
  const loadingOverlay = document.getElementById("loadingOverlay");

  window.addEventListener("beforeunload", function () {
    loadingOverlay.style.display = "flex";
  });

  window.addEventListener("load", function () {
    setTimeout(function () {
      loadingOverlay.style.display = "none";
    }, 500); // Delay for a smooth transition
  });
});
