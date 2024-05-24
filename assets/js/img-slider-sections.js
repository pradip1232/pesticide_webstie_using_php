    // List of image paths
    const images = [
        "/assets/Images/image6.png",
        "/assets/Images/image7.png",
        "/assets/Images/image8.png",
        "/assets/Images/image9.png",
        "/assets/Images/image10.png",
        "/assets/Images/image11.png",
      ];
  
      // Variable to store the index of the active image
      let activeImageIndex = 0;
  
      // Function to generate image elements and update active class
      function generateImages() {
        const imageSection = document.getElementById("imageSection");
        imageSection.innerHTML = ""; // Clear existing images
  
        images.forEach((image, index) => {
          const img = document.createElement("img");
          img.src = image;
          img.classList.add("img-fluid");
          if (index === activeImageIndex) {
            img.classList.add("active");
          }
          imageSection.appendChild(img);
        });
      }
  
      // Function to handle scroll event
      function handleScroll(event) {
        const delta = event.deltaY;
  
        if (delta > 0) {
          // Scrolling down, show next image
          activeImageIndex = Math.min(activeImageIndex + 1, images.length - 1);
        } else {
          // Scrolling up
          if (activeImageIndex === 0 && window.scrollY === 0) {
            // Reached the first image and scrolled to the top
            $("html, body").animate(
              {
                scrollTop: $("#aboveSection").offset().top,
              },
              1000
            ); // Adjust scroll speed as needed
            return;
          }
          // Show previous image
          activeImageIndex = Math.max(activeImageIndex - 1, 0);
        }
  
        // Update images
        updateImages();
      }
  
      // Function to update active image
      function updateImages() {
        const imageSection = document.getElementById("imageSection");
        const images = imageSection.querySelectorAll("img");
  
        images.forEach((img, index) => {
          if (index === activeImageIndex) {
            img.classList.add("active");
          } else {
            img.classList.remove("active");
          }
        });
      }
  
      // Listen for scroll events
      window.addEventListener("wheel", handleScroll);
  
      // Generate images and update active class
      generateImages();

      
// -------------------page4 js--------------------------
document.addEventListener("DOMContentLoaded", function() {
    
    const rightSection = document.getElementById('rightSection');

    
    const buttons = document.querySelectorAll('.button');
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            
            rightSection.style.backgroundImage = `url('${this.getAttribute('data-image')}')`;
        });
    });
});
