
const verElement = document.getElementById("ver");
const list2LinkElement = document.querySelector(".list2_link");
const arrow = document.querySelector(".arrow");




verElement.addEventListener("click", function() {
  if (list2LinkElement.style.opacity === "0") {
    list2LinkElement.style.opacity = "1";
    list2LinkElement.style.visibility = "visible";
    arrow.style.transform ="rotate(180deg)"
  } else {
    list2LinkElement.style.opacity = "0";
    list2LinkElement.style.visibility = "hidden";
    arrow.style.transform ="rotate(0)"
  }
});
