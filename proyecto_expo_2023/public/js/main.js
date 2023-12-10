const buttonToShowHide = document.getElementById("ver");
const hiddenListElement = document.querySelector(".list2_link");
const arrowIcon = document.querySelector(".arrow");

const toggleVisibility = () => {
  if (hiddenListElement.style.opacity === "0") {
    showElement();
  } else {
    hideElement();
  }
};

const showElement = () => {
  hiddenListElement.style.opacity = "1";
  hiddenListElement.style.visibility = "visible";
  arrowIcon.style.transform = "rotate(180deg)";
};

const hideElement = () => {
  hiddenListElement.style.opacity = "0";
  hiddenListElement.style.visibility = "hidden";
  arrowIcon.style.transform = "rotate(0)";
};

buttonToShowHide.addEventListener("click", toggleVisibility);