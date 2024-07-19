let slide = document.querySelectorAll(".slide");
console.log(slide.length);
currentIndex = 0;
// slide[currentIndex].style.display = "block";
function slideShow(){
    for(let i = 0; i < slide.length; i++){
        slide[i].style.display = "none"
    }
    currentIndex++;
    if(currentIndex > slide.length -1 ){
        currentIndex = 0;
    }
    slide[currentIndex].style.display = "block"
}
slideShow()

const interval = setInterval(slideShow, 2000)