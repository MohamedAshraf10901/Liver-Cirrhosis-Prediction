//=========================
// Testimonials Code
//=========================
const divOne = document.getElementById("one"),
  divTwo = document.getElementById("two"),
  divThree = document.getElementById("three"),
  divFour = document.getElementById("four");

let arrowUp = document.getElementById("up"),
  arrowDown = document.getElementById("down");

//=========================
// Down Btn Code
//=========================
function goDown() {
  if (divOne.classList.contains("active")) {
    divOne.classList.remove("active"),
      (divOne.style.top = "150%"),
      divTwo.classList.add("active"),
      (divTwo.style.top = "50%");
    arrowUp.style.opacity = "1";
  } else if (divTwo.classList.contains("active")) {
    divTwo.classList.remove("active"),
      (divTwo.style.top = "150%"),
      divThree.classList.add("active"),
      (divThree.style.top = "50%");
  } else if (divThree.classList.contains("active")) {
    divThree.classList.remove("active"),
      (divThree.style.top = "150%"),
      divFour.classList.add("active"),
      (divFour.style.top = "50%");
    arrowDown.style.opacity = "0";
  }
}
//=========================
// Up Btn Code
//=========================
function goUp() {
  if (divFour.classList.contains("active")) {
    divFour.classList.remove("active"),
      (divFour.style.top = "-50%"),
      divThree.classList.add("active"),
      (divThree.style.top = "50%");
    arrowDown.style.opacity = "1";
  } else if (divThree.classList.contains("active")) {
    divThree.classList.remove("active"),
      (divThree.style.top = "-50%"),
      divTwo.classList.add("active"),
      (divTwo.style.top = "50%");
  } else if (divTwo.classList.contains("active")) {
    divTwo.classList.remove("active"),
      (divTwo.style.top = "-50%"),
      divOne.classList.add("active"),
      (divOne.style.top = "50%");
    arrowUp.style.opacity = "0";
  }
}

//=========================
// Fixed Header Code
//=========================
const sections = document.querySelectorAll("section[id]");

function scrollActive() {
  const scrollY = window.pageYOffset;

  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 50;
    sectionId = current.getAttribute("id");
    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document
        .querySelector(".links a[href*=" + sectionId + "]")
        .classList.add("active");
    } else {
      document
        .querySelector(".links a[href*=" + sectionId + "]")
        .classList.remove("active");
    }
  });
}
window.addEventListener("scroll", scrollActive);

//========================================================
// Signup Page Code
//========================================================

//=========================
// Test isNumber Code
//=========================
function isNumber(evt) {
  var ch = String.fromCharCode(evt.which);

  if (!/[0-9]/.test(ch)) {
    evt.preventDefault();
  }
}
//=========================
// Lock icon Code
// Check Password Code
//=========================
// const locks = document.querySelectorAll(".lock"),
//   pass = document.querySelectorAll(".pass");

// function typePass() {
//   if (pass[0].value == 0) {
//     locks[0].classList.remove("none"), locks[1].classList.add("none");
//     pass[0].style.color = "var(--whi-color)";
//   } else {
//     locks[0].classList.add("none"), locks[1].classList.remove("none");
//     pass[0].style.color = "var(--six-color)";
//   }
//   if (pass[1].value == 0) {
//     locks[2].classList.remove("none"), locks[3].classList.add("none");
//     pass[1].style.color = "var(--whi-color)";
//   } else {
//     locks[2].classList.add("none"), locks[3].classList.remove("none");
//     pass[1].style.color = "var(--six-color)";
//   }
//   let errorP = document.querySelector(".alertPass");
//   if (pass[0].value != pass[1].value) {
//     errorP.classList.remove("off");
//   } else {
//     errorP.classList.add("off");
//   }
// }
// function blurColor() {
//   (pass[0].style.color = "var(--whi-color)"),
//     (pass[1].style.color = "var(--whi-color)");
// }
// function focusColor() {
//   (pass[0].style.color = "var(--six-color)"),
//     (pass[1].style.color = "var(--six-color)");
// }

//=========================
// Choose Gender Code
//=========================
const gender = document.querySelectorAll(".boxGender");

gender[0].addEventListener("click", function () {
  if (gender[1].classList.contains("active")) {
    gender[1].classList.remove("active");
    gender[0].classList.add("active");
  }
});
gender[1].addEventListener("click", function () {
  if (gender[0].classList.contains("active")) {
    gender[0].classList.remove("active");
    gender[1].classList.add("active");
  }
});

// const divTest = document.querySelectorAll(".testSection"),
//   testAllSection = document.querySelector(".testAllSection");

// var n = 3,
//   count = 0;
// testAllSection.onclick = function () {
//   if (count == 3) {
//     (divTest[0].style.top = "50%"),
//       (divTest[1].style.top = "-50%"),
//       (divTest[2].style.top = "-50%");
//     divTest[3].style.top = "-50%";
//     divTest[0].classList.add("active");
//     count = 0;
//     arrowDown.style.opacity = "1";
//     arrowUp.style.opacity = "0";
//   } else if (divOne.classList.contains("active")) {
//     count = 0;
//     divTest[count].classList.remove("active"),
//       (divTest[count].style.top = "150%"),
//       divTest[count + 1].classList.add("active"),
//       (divTest[count + 1].style.top = "50%");
//     count++;
//     arrowUp.style.opacity = "1";
//   } else if (divTwo.classList.contains("active")) {
//     divTest[count].classList.remove("active"),
//       (divTest[count].style.top = "150%"),
//       divTest[count + 1].classList.add("active"),
//       (divTest[count + 1].style.top = "50%");
//     count++;
//   } else if (divThree.classList.contains("active")) {
//     divTest[count].classList.remove("active"),
//       (divTest[count].style.top = "150%"),
//       divTest[count + 1].classList.add("active"),
//       (divTest[count + 1].style.top = "50%");
//     count++;
//     arrowDown.style.opacity = "0";
//   }
// };
// for (let i = 0; n > i; i++) {

// }
// if(divFour.classList.contains("active")){
//     divTest[i].classList.remove("active"),
//     (divTest[i].style.top = "150%"),
//     divTest[i + 1].classList.add("active"),
//     (divTest[i + 1].style.top = "50%");
//     arrowDown.style.opacity = "0";
//   }
