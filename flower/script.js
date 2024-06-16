const burger = document.querySelector ('.burger');
const navLinks = document.querySelector ('.nav-links');

//nav bar burger //
burger.addEventListener ('click', function(){
    navLinks.classList.toggle('show');
    burger.classList.toggle('toggle');
});

//slider automatic//
let index = 0;
displayImages();
function displayImages() {
  let i;
  const images = document.getElementsByClassName("image");
  for (i = 0; i < images.length; i++) {
    images[i].style.display = "none";
  }
  index++;
  if (index > images.length) {
    index = 1;
  }
  images[index-1].style.display = "block";
  setTimeout(displayImages, 4000); 
}

//slide 3d photo
function shiftLeft() {
  const boxes = document.querySelectorAll(".box");
  const tmpNode = boxes[0];
  boxes[0].className = "box move-out-from-left";

  setTimeout(function() {
      if (boxes.length > 5) {
          tmpNode.classList.add("box--hide");
          boxes[5].className = "box move-to-position5-from-left";
      }
      boxes[1].className = "box move-to-position1-from-left";
      boxes[2].className = "box move-to-position2-from-left";
      boxes[3].className = "box move-to-position3-from-left";
      boxes[4].className = "box move-to-position4-from-left";
      boxes[0].remove();

      document.querySelector(".cards__container").appendChild(tmpNode);

  }, 500);

}

//slide image kegiatan
activeslideimg();

        function activeslideimg(activeSlide = 2) {
            const slides = document.querySelectorAll(".slide");

            slides[activeSlide].classList.add("active");

            for (const slide of slides) {
                slide.addEventListener("click", () => {
                    clearActiveClasses();

                    slide.classList.add("active");
                });
            }


            function clearActiveClasses() {
                slides.forEach((slide) => {
                    slide.classList.remove("active");
                })
            }


        }
        
        const carousel = document.querySelector(".carousel"),
        firstImg = carousel.querySelectorAll("img")[0],
        arrowIcons = document.querySelectorAll(".wrapper i");
        
        let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;
        
        const showHideIcons = () => {
            // showing and hiding prev/next icon according to carousel scroll left value
            let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
            arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
            arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
        }
        
        arrowIcons.forEach(icon => {
            icon.addEventListener("click", () => {
                let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
                // if clicked icon is left, reduce width value from the carousel scroll left else add to it
                carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
                setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
            });
        });
        
        const autoSlide = () => {
            // if there is no image left to scroll then return from here
            if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;
        
            positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
            let firstImgWidth = firstImg.clientWidth + 14;
            // getting difference value that needs to add or reduce from carousel left to take middle img center
            let valDifference = firstImgWidth - positionDiff;
        
            if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
                return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
            }
            // if user is scrolling to the left
            carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
        }
        
        const dragStart = (e) => {
            // updatating global variables value on mouse down event
            isDragStart = true;
            prevPageX = e.pageX || e.touches[0].pageX;
            prevScrollLeft = carousel.scrollLeft;
        }
        
        const dragging = (e) => {
            // scrolling images/carousel to left according to mouse pointer
            if(!isDragStart) return;
            e.preventDefault();
            isDragging = true;
            carousel.classList.add("dragging");
            positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
            carousel.scrollLeft = prevScrollLeft - positionDiff;
            showHideIcons();
        }
        
        const dragStop = () => {
            isDragStart = false;
            carousel.classList.remove("dragging");
        
            if(!isDragging) return;
            isDragging = false;
            autoSlide();
        }
        
        carousel.addEventListener("mousedown", dragStart);
        carousel.addEventListener("touchstart", dragStart);
        
        document.addEventListener("mousemove", dragging);
        carousel.addEventListener("touchmove", dragging);
        
        document.addEventListener("mouseup", dragStop);
        carousel.addEventListener("touchend", dragStop);

//slide product
document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.carousel');
    const firstBox = carousel.firstElementChild.cloneNode(true);
    const lastBox = carousel.lastElementChild.cloneNode(true);

    // Append clones to the carousel
    carousel.appendChild(firstBox);
    carousel.insertBefore(lastBox, carousel.firstElementChild);

    const scrollAmount = 220;
    let isScrolling = false;

    const scrollRight = () => {
        if (isScrolling) return;
        isScrolling = true;
        carousel.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });

        setTimeout(() => {
            if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth - scrollAmount) {
                carousel.scrollLeft = carousel.firstElementChild.clientWidth;
            }
            isScrolling = false;
        }, 600); // Adjust timeout to match the scroll-behavior timing
    };

    const scrollLeft = () => {
        if (isScrolling) return;
        isScrolling = true;
        carousel.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });

        setTimeout(() => {
            if (carousel.scrollLeft <= 0) {
                carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.firstElementChild.clientWidth);
            }
            isScrolling = false;
        }, 600); // Adjust timeout to match the scroll-behavior timing
    };

    // Initialize position
    carousel.scrollLeft = carousel.firstElementChild.clientWidth;

    // Auto slide
    setInterval(scrollRight, 3000); // Slide every 3 seconds
});

//cart section
document.addEventListener('DOMContentLoaded', () => {
    const cartIcon = document.querySelector('.cart-icon');
    const cartSlideBox = document.querySelector('.cart-slide-box');
    const cartCloseButton = document.querySelector('.cart-close-button');

    cartIcon.addEventListener('click', () => {
        cartSlideBox.classList.toggle('open');
    });

    cartCloseButton.addEventListener('click', () => {
        cartSlideBox.classList.remove('open');
    });
});

// JavaScript for customer reviews

document.addEventListener("DOMContentLoaded", function() {
    const reviewForm = document.getElementById("reviewForm");
    const customerReviews = document.getElementById("customerReviews");
    const thankYouMessage = document.getElementById("thankYouMessage");

    reviewForm.addEventListener("submit", function(event) {
        event.preventDefault();

        // Get form values
        const userName = document.getElementById("userName").value;
        const userReview = document.getElementById("userReview").value;
        const userPhoto = document.getElementById("userPhoto").value;
        const userRating = document.querySelector("input[name='rating']:checked");

        if (!userRating) {
            alert("Please select a rating.");
            return;
        }

        // Create review HTML
        const reviewHTML = `
            <div class="col-md-4 mb-4">
                <div class="review-box">
                    <div class="review-content">
                        <h3>${userName}</h3>
                        <p>${userReview}</p>
                    </div>
                    <div class="review-rating">
                        ${getStars(userRating.value)}
                    </div>
                    ${userPhoto ? `<img src="${userPhoto}" alt="${userName}" class="review-photo">` : ''}
                </div>
            </div>
        `;

        // Append review to customerReviews
        customerReviews.insertAdjacentHTML('beforeend', reviewHTML);

        // Reset form
        reviewForm.reset();

        // Show thank you message
        thankYouMessage.classList.remove('d-none');
        setTimeout(function() {
            thankYouMessage.classList.add('d-none');
        }, 5000); // Hide message after 5 seconds
    });

    // Function to generate star rating HTML
    function getStars(rating) {
        let stars = '';
        for (let i = 1; i <= 5; i++) {
            if (i <= rating) {
                stars += '<span class="star checked">&#9733;</span>';
            } else {
                stars += '<span class="star">&#9733;</span>';
            }
        }
        return stars;
    }
});

// formulir pendaftaran
$(document).ready(function(){
    $('#visitForm').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: function(data){
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Thank you for booking your visit. We will contact you shortly.',
                    confirmButtonColor: '#a4133a',
                    confirmButtonText: 'Confirm on WhatsApp'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'https://wa.me/your-phone-number'; // Ganti dengan link WhatsApp yang sesuai
                    } else {
                        // Handle if user cancels
                    }
                });
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
});

// product.php
$(document).ready(function() {
    // Fungsi untuk memuat produk berdasarkan kategori
    function loadProductsByCategory(kategori) {
        $.ajax({
            url: 'load_products.php',
            type: 'GET',
            data: { kategori: kategori },
            success: function(response) {
                $('#product-container').html(response);
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error: ' + status, error);
            }
        });
    }

    // Event untuk mengatur tampilan produk berdasarkan kategori
    $('.nav-link').on('click', function(e) {
        e.preventDefault();
        var kategori = $(this).data('kategori');
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
        loadProductsByCategory(kategori);
    });

    // Memuat produk saat halaman dimuat (dengan kategori default)
    loadProductsByCategory('');
});
