document.addEventListener("DOMContentLoaded", () => {
  const cube = document.getElementById("chefs-cube");

  if (!cube) {
    return;
  }

  const faces = cube.querySelectorAll(".chef-face");
  const totalFaces = faces.length;
  let currentIndex = 0;
  let isRotating = false;

  // Set initial rotation for each face
  function setFacePositions() {
    faces.forEach((face, i) => {
      const angle = (360 / totalFaces) * i;
      face.style.transform = `rotateY(${angle}deg) translateZ(300px)`;
    });
  }

  setFacePositions();

  // Rotate for 2s, settle for 3s, then rotate again
  function rotateNext() {
    if (isRotating) {
      return;
    }

    isRotating = true;

    // Set transition to 2s for rotation
    cube.style.transition = "transform 2s ease";

    currentIndex = (currentIndex + 1) % totalFaces;
    const angle = -(360 / totalFaces) * currentIndex;
    cube.style.transform = `rotateY(${angle}deg)`;

    // After 2s rotation completes, settle for 3s
    setTimeout(() => {
      isRotating = false;
    }, 2000);
  }

  // Start rotation cycle: rotate 2s + settle 3s = 5s total
  setInterval(rotateNext, 5000);
});