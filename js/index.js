"use strict"

function formSignInSubmit(event){
    if(new Date(localStorage.getItem('signInEndTime'))>new Date()){
        event.preventDefault();
        document.querySelector("#wait").classList.add("active")
        document.querySelector("#invalid").classList.remove("active")
    } else {
        localStorage.removeItem('signInError')
        localStorage.removeItem('signInEndTime')
    }
}

function formAppointmentSubmit(event){
    if(new Date(localStorage.getItem('appointmentEndTime'))>new Date()){
        event.preventDefault();
        document.querySelector("#wait").classList.add("active")
    } else {
        localStorage.removeItem('appointmentEndTime')
    }
}

// gallery slider
const gallerySliderPrevBtn = document.querySelector("section.mainGallery .container .btns button.prev")
const gallerySliderNextBtn = document.querySelector("section.mainGallery .container .btns button.next")

gallerySliderPrevBtn.addEventListener("click",function(){gallerySlider("-")})
gallerySliderNextBtn.addEventListener("click",function(){gallerySlider("+")})

function gallerySlider(action) {
    console.log(action)
}