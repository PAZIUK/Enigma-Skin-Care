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
if(document.querySelector("section.mainGallery")){
    const gallerySliderPrevBtn = document.querySelector("section.mainGallery .container .btns button.prev")
    const gallerySliderNextBtn = document.querySelector("section.mainGallery .container .btns button.next")
    const gallerySliderBlock = document.querySelector("section.mainGallery .container .gallerySliderBlock")
    const gallerySliderBlockSlides = document.querySelectorAll("section.mainGallery .container .gallerySliderBlock .slide")

    gallerySliderPrevBtn.addEventListener("click",function(){if(this.classList.contains("able")){gallerySlider("-")}})
    gallerySliderNextBtn.addEventListener("click",function(){if(this.classList.contains("able")){gallerySlider("+")}})

    initGallerySlider()
    checkGallerySliderBtns()

    function gallerySlider(action) {
        let activeSlide = +gallerySliderBlock.querySelector(".slide.active").getAttribute("slide");

        gallerySliderBlockSlides.forEach(item=>{
            item.classList.remove(...item.classList);
            item.classList.add("slide")
        })

        if(action=="+"){
            activeSlide += 1
            let nextSlide = gallerySliderBlock.querySelector(`.slide[slide='${activeSlide}']`)
            if(nextSlide){
                nextSlide.classList.add("active")
            }
            initGallerySlider()
            checkGallerySliderBtns()
        } else if(action=="-"){
            activeSlide -= 1
            let prevSlide = gallerySliderBlock.querySelector(`.slide[slide='${activeSlide}']`)
            if(prevSlide){
                prevSlide.classList.add("active")
            }
            initGallerySlider()
            checkGallerySliderBtns()
        }
    }
    function checkGallerySliderBtns(){
        let activeSlide = +gallerySliderBlock.querySelector(".slide.active").getAttribute("slide");

        let nextSlideN = activeSlide + 1
        let prevSlideN = activeSlide - 1

        let prevSlide = gallerySliderBlock.querySelector(`.slide[slide='${prevSlideN}']`)
        let nextSlide = gallerySliderBlock.querySelector(`.slide[slide='${nextSlideN}']`)
        
        if(!nextSlide){
            gallerySliderNextBtn.classList.add("disable")
            gallerySliderNextBtn.classList.remove("able")
        } else {
            gallerySliderNextBtn.classList.remove("disable")
            gallerySliderNextBtn.classList.add("able")
        }
        if(!prevSlide){
            gallerySliderPrevBtn.classList.add("disable")
            gallerySliderPrevBtn.classList.remove("able")
        } else {
            gallerySliderPrevBtn.classList.remove("disable")
            gallerySliderPrevBtn.classList.add("able")
        }
    }
    function initGallerySlider(){
        let activeSlide = +gallerySliderBlock.querySelector(".slide.active").getAttribute("slide");

        let prevSlide = gallerySliderBlock.querySelector(`.slide[slide='${activeSlide-1}']`)
        if(prevSlide){prevSlide.classList.add("prev")}

        let afterPrevSlide = gallerySliderBlock.querySelector(`.slide[slide='${activeSlide-2}']`)
        if(afterPrevSlide){afterPrevSlide.classList.add("afterPrev")}
        
        if(activeSlide-2>=1){
            for (let i = activeSlide-3; i >= 1; i--) {
                gallerySliderBlock.querySelector(`.slide[slide='${i}']`).classList.add("otherPrev")
            }
        }

        let nextSlide = gallerySliderBlock.querySelector(`.slide[slide='${activeSlide+1}']`)
        if(nextSlide){nextSlide.classList.add("next")}

        let afterNextSlide = gallerySliderBlock.querySelector(`.slide[slide='${activeSlide+2}']`)
        if(afterNextSlide){afterNextSlide.classList.add("afterNext")}
        
        if(activeSlide+3<=gallerySliderBlockSlides.length){
            for (let i = activeSlide+3; i <= gallerySliderBlockSlides.length; i++) {
                gallerySliderBlock.querySelector(`.slide[slide='${i}']`).classList.add("otherNext")
            }
        }
    }
}