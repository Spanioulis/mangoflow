import "./plugins/contentful-paint";
import "./plugins/hamburger";

document.addEventListener("DOMContentLoaded", function () {
  if (document.querySelector(".swiper")) {
    import("./plugins/swiper")
      .then((module) => {
        if (module && module.initSwiper) {
          module.initSwiper();
        } else {
          console.error("initSwiper function not found in Swiper module.");
        }
      })
      .catch((err) => {
        console.error("Error loading Swiper module:", err);
      });
  } else {
    console.log("Swiper element not found.");
  }

  if (document.querySelector(".export-index")) {
    import("./plugins/export-index")
      .then((module) => {
        if (module && module.exportIndex) {
          module.exportIndex();
        } else {
          console.error("hola function not found in export-index module.");
        }
      })
      .catch((err) => {
        console.error("Error loading Hola module:", err);
      });
  } else {
    console.log("No se exportan las funciones.");
  }
});
