

const body = document.querySelector("body"),
nav = document.querySelector("nav"),
modeToggle = document.querySelector(".dark-light"),
searchToggle = document.querySelector(".searchToggle"),
sidebarOpen = document.querySelector(".sidebarOpen"),
siderbarClose = document.querySelector(".siderbarClose");

if (window.matchMedia && 
  window.matchMedia('(prefers-color-scheme: dark)').matches) {
    console.log("Dark")
    body.classList.toggle("dark")
    if(!body.classList.contains("dark")){
      localStorage.setItem("mode" , "light-mode");
  }else{
      localStorage.setItem("mode" , "dark-mode");
  }
}
else{
  console.log("Light");
}


// let getMode = localStorage.getItem("mode");
//     if(getMode && getMode === "dark-mode"){
//       body.classList.add("dark");
//     }

// modeToggle.addEventListener("click" , () =>{
//   modeToggle.classList.toggle("active");


// });

//   searchToggle.addEventListener("click" , () =>{
//   searchToggle.classList.toggle("active");
// });

