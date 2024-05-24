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
<link rel="stylesheet" href="assets/Css/product/product.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<section class="mt-2 product-40-area" style="height:50vh;">
    <div class="container">
        <div class="heading32 text-center">
            <div class="h2">PRODUCTS</div>
            <div class="homeproduct">Home-Product Category-Product</div>
        </div>
    </div>
</section>
<section class="product-categories7">

    <div class="container17">
        <div class="sidebar7">
            <div class="logo">Search By Category</div>
            <input type="text" id="txtSearch" placeholder="Search Product..." />
            <h3>Category</h3>
            <ul class="category-list">

            </ul>
        </div>
        <div class="content7" style="height:200vh;">
            <div class="products7"></div>
        </div>
    </div>

</section>


<section class="pc-footer d-none" >
<?php
include ("includes/footer.php")
    ?>
</section>