const first = document.getElementById("first");
const second = document.getElementById("second");
const third = document.getElementById("third");
const forth = document.getElementById("forth");
const fifth = document.getElementById("fifth");
const sections = document.querySelectorAll("section > div");

function showSection(index) {
  sections.forEach((sec, i) => {
    sec.classList.toggle("active", i === index);
  });
}

first.addEventListener("click", () => showSection(0));
second.addEventListener("click", () => showSection(1));
third.addEventListener("click", () => showSection(2));
forth.addEventListener("click", () => showSection(3));
fifth.addEventListener("click", () => showSection(4));
