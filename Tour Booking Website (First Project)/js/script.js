let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");
let videoBtn = document.querySelectorAll('.vid-btn');

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
};

window.onscroll = () => {
  menu.classList.remove("fa-times");
  navbar.classList.remove("active");
};

//swiper for home section starts


videoBtn.forEach(btn =>{
  btn.addEventListener('click', ()=>{
    document.querySelector('.controls .active').classList.remove('active');
    btn.classList.add('active');
    let src = btn.getAttribute('data-src');
    document.querySelector('#video-slider').src = src;
  });
});


//swiper for home section ends




//swiper for reviews starts

var swiper = new Swiper(".myReviews", {
  loop:true,
  autoHeight:true,
  grabCursor:true,
  spaceBetween: 20,
  autoplay: {
    delay: 3000,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  breakpoints:{
    640: {
      slidesPerView: 1,
    },

    768: {
      slidesPerView: 2,
    },

    1024: {
      slidesPerView: 3,
    },
  },
});

//swiper for reviews Ends


// script for packages load more button
let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
  let boxes = [...document.querySelectorAll('.packages .box-container .box')];
  for (var i = currentItem; i < currentItem + 3; i++){
    boxes[i].style.display = 'inline-block';
  };
  currentItem += 3;
  if(currentItem >= boxes.length){
    loadMoreBtn.style.display = 'none';
  }
}




