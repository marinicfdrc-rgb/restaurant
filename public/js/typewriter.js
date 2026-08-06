document.addEventListener("DOMContentLoaded", () => {
  const title = document.getElementById("typewriter-title");

  if (!title) {
    return;
  }

  const text = "Ratatouille";
  const cursor = title.querySelector(".typewriter-cursor");
  let index = 0;
  let cursorVisible = true;

  // Blink cursor via JS
  setInterval(() => {
    cursorVisible = !cursorVisible;
    cursor.style.opacity = cursorVisible ? "1" : "0";
  }, 400);

  function type() {
    if (index < text.length) {
      title.insertBefore(
        document.createTextNode(text.charAt(index)),
        cursor
      );
      index++;
      setTimeout(type, 120);
    }
  }

  setTimeout(type, 500);
});