import "./plugins/contentful-paint";
import "./plugins/hamburger";

document.addEventListener("DOMContentLoaded", function () {
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
