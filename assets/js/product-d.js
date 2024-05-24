$(document).ready(function() {

    $('.slideshow-thumbnails').hover(function() { changeSlide($(this)); });
  
    $(document).mousemove(function(e) {
      var x = e.clientX; var y = e.clientY;
      
      var x = e.clientX; var y = e.clientY;
  
      var imgx1 = $('.slideshow-items.active').offset().left;
      var imgx2 = $('.slideshow-items.active').outerWidth() + imgx1;
      var imgy1 = $('.slideshow-items.active').offset().top;
      var imgy2 = $('.slideshow-items.active').outerHeight() + imgy1;
  
      if ( x > imgx1 && x < imgx2 && y > imgy1 && y < imgy2 ) {
        $('#lens').show(); $('#result').show();
        imageZoom( $('.slideshow-items.active'), $('#result'), $('#lens') );
      } else {
        $('#lens').hide(); $('#result').hide();
      }
  
    });
    
  });
  
  function imageZoom(img, result, lens) {

    // Set the width and height of the result and lens elements
    result.width(img.innerWidth());
    result.height(img.innerHeight());
    lens.width(img.innerWidth() / 2);
    lens.height(img.innerHeight() / 2);

    // Offset the result element from the image
    // Here, I'm setting it to be 20 pixels to the right of the image
    result.offset({
        top: img.offset().top,
        left: img.offset().left + img.outerWidth() + 50 // Adjust this value as needed
    });

    // Calculate the ratio for background size
    var cx = img.innerWidth() / lens.innerWidth();
    var cy = img.innerHeight() / lens.innerHeight();

    // Set background image and size for result element
    result.css('backgroundImage', 'url(' + img.attr('src') + ')');
    result.css('backgroundSize', img.width() * cx + 'px ' + img.height() * cy + 'px');

    // Event listeners for moving the lens
    lens.mousemove(function (e) { moveLens(e); });
    img.mousemove(function (e) { moveLens(e); });
    lens.on('touchmove', function () { moveLens(); })
    img.on('touchmove', function () { moveLens(); })

    // Function to move the lens
    function moveLens(e) {
        var x = e.clientX - lens.outerWidth() / 2;
        var y = e.clientY - lens.outerHeight() / 2;
        if (x > img.outerWidth() + img.offset().left - lens.outerWidth()) { x = img.outerWidth() + img.offset().left - lens.outerWidth(); }
        if (x < img.offset().left) { x = img.offset().left; }
        if (y > img.outerHeight() + img.offset().top - lens.outerHeight()) { y = img.outerHeight() + img.offset().top - lens.outerHeight(); }
        if (y < img.offset().top) { y = img.offset().top; }
        lens.offset({ top: y, left: x });
        result.css('backgroundPosition', '-' + (x - img.offset().left) * cx + 'px -' + (y - img.offset().top) * cy + 'px');
    }
}

  
  function changeSlide(elm) {
    $('.slideshow-items').removeClass('active');
    $('.slideshow-items').eq( elm.index() ).addClass('active');
    $('.slideshow-thumbnails').removeClass('active');
    $('.slideshow-thumbnails').eq( elm.index() ).addClass('active');
  }
  

  function increaseValue(button, limit) {
    const numberInput = button.parentElement.querySelector('.number');
    var value = parseInt(numberInput.innerHTML, 10);
    if(isNaN(value)) value = 0;
    if(limit && value >= limit) return;
    numberInput.innerHTML = value+1;
  }
  
  
  function decreaseValue(button) {
    const numberInput = button.parentElement.querySelector('.number');
    var value = parseInt(numberInput.innerHTML, 10);
    if(isNaN(value)) value = 0;  
    if(value < 1) return;
    numberInput.innerHTML = value-1;
  }
  function toggleDetails(topic) {
    var details = document.querySelectorAll('.details-example');
    details.forEach(function(detail) {
        var summary = detail.querySelector('summary');
        var detailTopic = summary.textContent.toLowerCase().trim();
        if (detailTopic === topic.toLowerCase().trim()) {
            detail.open = !detail.open;
        }
    });
}
