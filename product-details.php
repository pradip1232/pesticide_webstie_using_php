<style>
      .pc-navbar {
            height: 130px;
            background-color: white;
            position: -webkit-sticky; /* For Safari */
            position: sticky;
            top: 0;
            z-index: 1000; /* Ensure it stays above other content */
            box-shadow: 0 4px 2px -2px gray; /* Adds a bottom shadow */
        }

    /* Example content to enable scrolling */
    .content {
        height: 2000px;
        /* Make the page long enough to scroll */
        background: linear-gradient(to bottom, #f0f0f0, #333);
        /* Just for visual */
    }
</style>

<section class="pc-navbar">
    <?php
    include ("includes/haeder.php");
    include ("includes/navbar.php");
    ?>
</section>
  <link rel="stylesheet" href="assets/Css/product-d.css">

<div class="container-fluid mt-4 mb-9" style="top:4rem;margin-bottom:10rem;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="productdetails">
                <div class="row">
                    <div class="col-md-6 ">
                        <div id='lens'></div>

                        <div class="mb-3" id='slideshow-items-container'>

                            <img class='slideshow-items active' src='assets/Images/main.png'>
                            <img class='slideshow-items' src='assets/Images/images/img1.jpeg'>
                            <img class='slideshow-items' src='assets/Images/images/img2.jpeg'>
                            <img class='slideshow-items' src='assets/Images/images/img3.jpeg'>

                        </div>

                        <div id='result'></div>

                        <div class="thumbnail ms-4">
                            <img class='slideshow-thumbnails active' src='/main.png'>
                            <img class='slideshow-thumbnails' src='assets/Images/images/img1.jpeg'>
                            <img class='slideshow-thumbnails' src='assets/Images/images/img2.jpeg'>
                            <img class='slideshow-thumbnails' src='assets/Images/images/img3.jpeg'>
                        </div>

                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="producttext ">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center "><span class="ml-1">Sunfield Agro</span>
                                </div>
                            </div>
                            <div class=" mb-3"> <span class="brand" style="font-size: xx-large;font-weight: 700;color:rgb(139, 248, 112);">Orion</span>
                                <div class="rating">
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span class="review-no">5 Reviews</span>
                                    </div>

                                </div>
                                <div class="price d-flex flex-row align-items-center mt-3"> <span class="act-price">₹00.0</span>
                                </div>
                            </div>
                            <div class="Pack">
                                <p class="about" style="margin-bottom: 0;">Packaging</p>
                                <button type="button" class="featuredBtn active" id="btnOne">
                                    1L
                                </button>
                                <button type="button" class="featuredBtn" id="btnTwo">
                                    2L
                                </button>
                                <button type="button" class="featuredBtn" id="btnThree">
                                    3L
                                </button>
                            </div>
                            <div class="col-lg-2 mt-2">
                                <p style="margin-bottom: 0;">Quantity</p>
                                <div class="quantity-field">
                                    <button class="value-button decrease-button" onclick="decreaseValue(this)" title="Azalt">-</button>
                                    <div class="number">0</div>
                                    <button class="value-button increase-button" onclick="increaseValue(this, 5)" title="Arrtr">+
                                    </button>
                                </div>
                            </div>

                            <div class="cart mt-4 align-items-center"> <button class="btn1 mr-2 px-4 mb-1">Add to
                                    cart</button>
                                <button class="btn  mr-2 px-4">Buy it Now</button>
                            </div>
                            <div class="description mt-4">
                                <div class="description-section border-bottom ">
                                    <h6 class="section-title" onclick="toggleContent('benefits')">Benefits <i class="bii bi-caret-down-fill"></i></h6>
                                    <p class="section-content" id="benefitsContent" style="display: none;">Lorem
                                        ipsum dolor sit amet consectetur adipisicing elit. Ducimus eum dicta vitae
                                        unde distinctio sunt, magni est nihil delectus officia, ab voluptatum illum
                                        enim molestiae iusto aperiam nam culpa deleniti!</p>
                                </div>
                                <div class="description-section border-bottom ">
                                    <h6 class="section-title" onclick="toggleContent('description')">Description<i class="bii bi-caret-down-fill"></i></h6>
                                    <p class="section-content" id="descriptionContent" style="display: none;">Lorem
                                        ipsum dolor sit amet consectetur adipisicing elit. Ducimus eum dicta vitae
                                        unde distinctio sunt, magni est nihil delectus officia, ab voluptatum illum
                                        enim molestiae iusto aperiam nam culpa deleniti!</p>
                                </div>
                                <div class="description-section border-bottom ">
                                    <h6 class="section-title" onclick="toggleContent('ingredients')">Ingredients<i class="bii bi-caret-down-fill"></i></h6>
                                    <p class="section-content" id="ingredientsContent" style="display: none;">Lorem
                                        ipsum dolor sit amet consectetur adipisicing elit. Ducimus eum dicta vitae
                                        unde distinctio sunt, magni est nihil delectus officia, ab voluptatum illum
                                        enim molestiae iusto aperiam nam culpa deleniti!</p>
                                </div>
                                <div class="description-section border-bottom ">
                                    <h6 class="section-title" onclick="toggleContent('howtouse')">How To Use<i class="bii bi-caret-down-fill"></i></h6>
                                    <p class="section-content" id="howtouseContent" style="display: none;">Lorem
                                        ipsum dolor sit amet consectetur adipisicing elit. Ducimus eum dicta vitae
                                        unde distinctio sunt, magni est nihil delectus officia, ab voluptatum illum
                                        enim molestiae iusto aperiam nam culpa deleniti!</p>
                                </div>
                                <div class="description-section border-bottom ">
                                    <h6 class="section-title" onclick="toggleContent('legal')">Legal Information<i class="bii bi-caret-down-fill"></i></h6>
                                    <p class="section-content" id="legalContent" style="display: none;">Lorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Ducimus eum dicta vitae unde
                                        distinctio sunt, magni est nihil delectus officia, ab voluptatum illum enim
                                        molestiae iusto aperiam nam culpa deleniti!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleContent(sectionId) {
            var content = document.getElementById(sectionId + 'Content');
            if (content.style.display === "none") {
                content.style.display = "block";
            } else {
                content.style.display = "none";
            }
        }
    </script>
</div>
<script src="assets/js/product-d.js"></script>


<?php
include("includes/footer.php");

?>