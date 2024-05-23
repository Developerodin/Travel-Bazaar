document.addEventListener("DOMContentLoaded", function () {
    const paths = [
      { id: "IN", name: "India", imagePath: "assets/img/IN.png" },
      { name: "Australia", imagePath: "assets/img/AS.png", class: "Australia" },
    ];
  
    const imageContainer = document.getElementById("imageContainer");
  
    const indiaMap = document.getElementById("IN");
    indiaMap.addEventListener("mouseover", function (event) {
      const hoveredPathId = event.target.getAttribute("id");
      const hoveredPathData = paths.find((path) => path.id === hoveredPathId);
  
      if (hoveredPathData) {
        const { imagePath } = hoveredPathData;
        imageContainer.innerHTML = `<img src="${imagePath}" alt="${hoveredPathData.name}">`;
        imageContainer.classList.remove("hidden");
      }
    });
  
    indiaMap.addEventListener("mouseout", function () {
      imageContainer.classList.add("hidden");
    });
  
    document.querySelectorAll(".Australia").forEach((element) => {
      element.addEventListener("mouseover", function (event) {
        const hoveredPathClass = event.target.getAttribute("class");
        const hoveredPathData = paths.find(
          (path) => path.class === hoveredPathClass
        );
  
        if (hoveredPathData) {
          const { imagePath } = hoveredPathData;
          imageContainer.innerHTML = `<img src="${imagePath}" alt="${hoveredPathData.name}">`;
          imageContainer.classList.remove("hidden");
        }
      });
  
      element.addEventListener("mouseout", function () {
        imageContainer.classList.add("hidden");
      });
    });
  });
  
  const countryPaths = document.querySelectorAll(".country");
  countryPaths.forEach((path) => {
    path.classList.add("polka-dot-pattern");
  });
  