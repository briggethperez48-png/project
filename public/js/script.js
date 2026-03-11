var swiper = new Swiper(".mySwiper",{
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect:{
        rotate:25,
        strech:0,
        depth:300,
        modifier:2,
        slideShadows:true,
    },
    loop:true,
});