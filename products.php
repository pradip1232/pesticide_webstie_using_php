<?php
include ("includes/haeder.php");
include ("includes/navbar.php");
?>
<link rel="stylesheet" href="assets/Css/hp.css">

<section id="image">
    <img class="img-fluid" src="assets/Images/main.png" alt="...">
    <div class="content col-lg-8">
        <p id="content1">PRODUCT CATEGORY</p>
        <p>Home-Product Category</p>
    </div>
</section>

<section class="full mt-5 justify-content-center product-categ4" >
    <div class="container">

    
    <div class="containe-cate ">
        <div class="card bg-transparent" style="width: 18rem; cursor:pointer;" onclick="redirectnewpage()">
            <img src="assets/Images/images/img1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title fw-bold" onmouseover="showContent(this)" onmouseout="hideContent(this)">Liquid
                    Organic Fertilizer</p>
                <p class="card-text contents" style="font-size: 12px !important;">Liquid organic fertilizers are
                    nutrient-rich solutions made from natural organic sources such as compost, manure, or plant
                    extracts. These fertilizers provide essential nutrients to plants in a liquid form, allowing for
                    quicker absorption and utilization. They promote soil health, enhance microbial activity, and
                    contribute to sustainable agriculture practices. Liquid organic fertilizers are convenient for
                    application and offer a balanced and environmentally friendly approach to nourishing plants.</p>
            </div>
        </div>


        <div class="card bg-transparent" style="width: 18rem;">
            <img src="assets/Images/images/img2.jpeg" class="card-img-top" alt="...">
            <div class="card-body ">
                <p class="card-title1 fw-bold" onmouseover="showContent(this)" onmouseout="hideContent(this)">Bio
                    Fertilizer</p>
                <p class="card-text contents">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
                    praesentium aut nobis!</p>
            </div>
        </div>

        <div class="card bg-transparent" style="width: 18rem;">
            <img src="assets/Images/images/img3.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title fw-bold" onmouseover="showContent(this)" onmouseout="hideContent(this)">
                    Granules Fertilizer</p>
                <p class="card-text contents">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
                    praesentium aut nobis!</p>
            </div>
        </div>
        <div class="card bg-transparent" style="width: 18rem;">
            <img src="assets/Images/images/img4.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title1 fw-bold" onmouseover="showContent(this)" onmouseout="hideContent(this)">NPK
                    Fertilizer</p>
                <p class="card-text contents">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
                    praesentium aut nobis!</p>
            </div>
        </div>
    </div>





    <script>
        function redirectnewpage() {
            window.location.href = 'product-categories.php';
        }
    </script>

    <div class="containe-cate">
        <div class="card bg-transparent" style="width: 18rem;">
            <img src="assets/Images/images/img1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title fw-bold" onmouseover="showContent(this)" onmouseout="hideContent(this)">Liquid
                    Organic Fertilizer</p>
                <p class="card-text contents">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
                    praesentium aut nobis!</p>
            </div>
        </div>

        <div class="card bg-transparent" style="width: 18rem;">
            <img src="assets/Images/images/img1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title1 fw-bold" onmouseover="showContent(this)" onmouseout="hideContent(this)">Bio
                    Fertilizer</p>
                <p class="card-text contents">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
                    praesentium aut nobis!</p>
            </div>
        </div>

        <div class="card bg-transparent" style="width: 18rem;">
            <img src="assets/Images/images/img1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title fw-bold" onmouseover="showContent(this)" onmouseout="hideContent(this)">
                    Granules Fertilizer</p>
                <p class="card-text contents">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
                    praesentium aut nobis!</p>
            </div>
        </div>
        <div class="card bg-transparent" style="width: 18rem;">
            <img src="assets/Images/images/img1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title1 fw-bold" onmouseover="showContent(this)" onmouseout="hideContent(this)">NPK
                    Fertilizer</p>
                <p class="card-text contents">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique
                    praesentium aut nobis!</p>
            </div>
        </div>
    </div>
    </div>
</section>



<?php
include ("includes/footer.php")
    ?>

<script src="assets/js/hp.js"></script>