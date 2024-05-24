const data = [

  {
    id: 1,
    name: "Liquid Organic Fertilizers",
    img: "/images/img1.jpeg",
    amt: 1599,
    seller: "none",
    catagory: "Liquid Organic Fertilizers",
  },

  {
    id: 2,
    name: "Liquid Organic Fertilizers",
    img: "/images/img2.jpeg",
    amt: 1300,
    seller: "none",
    catagory: "Liquid Organic Fertilizers",
  },

  {
    id: 3,
    name: "Bio Fertilizers",
    img: "/images/img3.jpeg",
    amt: 2799,
    seller: "none",
    catagory: "Bio Fertilizers",
  },
  {
    id: 4,
    name: "Bio Perticides",
    img: "/images/img4.jpeg",
    amt: 9270,
    seller: "none",
    catagory: "Bio Perticides",
  },
  {
    id: 5,
    name: "Bio Perticides",
    img: "/images/img1.jpeg",
    amt: 12999,
    seller: "none",
    catagory: "Bio Perticides",
  },

  {
    id: 6,
    name: "Bio Kit",
    img: "/images/img2.jpeg",
    amt: 3999,
    seller: "none",
    catagory: "Bio Kit",
  },

  {
    id: 7,
    name: "Granule Fertilizer",
    img: "/images/img2.jpeg",
    amt: 15999,
    seller: "none",
    catagory: "Granule Fertilizer",
  },
  {
    id: 8,
    name: "NPK Fertilizers",
    img: "/images/img3.jpeg",
    amt: 6249,
    seller: "none",
    catagory: "NPK Fertilizers",
  },
  {
    id: 9,
    name: "Micronutrient",
    img: "/images/img4.jpeg",
    amt: 9799,
    seller: "none",
    catagory: "Micronutrient",
  },

  {
    id: 10,
    name: "Soil Coordinator",
    img: "/images/img2.jpeg",
    amt: 12799,
    seller: "none",
    catagory: "Soil Coordinator",
  },
];

const productsContainer = document.querySelector(".products7");
const categoryList = document.querySelector(".category-list");

function displayProducts(products) {
  if (products.length > 0) {
    const productDetails = products.map(product => `
        <div class="product">
          <div class="img">
            <img src="${product.img}" alt="${product.name}" />
          </div>
          <div class="product-details">
            <span class="name">${product.name}</span>
            <span class="amt">Rs.${product.amt}</span>
            <span class="seller">${product.seller} ${products.bi}</span>
          </div>
        </div>`
    ).join("");

    productsContainer.innerHTML = productDetails;
  } else {
    productsContainer.innerHTML = "<h3>No Products Available</h3>";
  }
}

function setCategories() {
  const allCategories = data.map(product => product.catagory);
  const categories = ["All", ...new Set(allCategories)];

  categoryList.innerHTML = categories.map(category => `
      <li><input type="checkbox" name="category" value="${category}" /> ${category}</li>`).join("");

  categoryList.addEventListener("change", (e) => {
    const checkedCategories = Array.from(categoryList.querySelectorAll('input[name="category"]:checked')).map(input => input.value);
    if (checkedCategories.length === 0 || checkedCategories.includes("All")) {
      displayProducts(data);
    } else {
      const filteredProducts = data.filter(product => checkedCategories.includes(product.catagory));
      displayProducts(filteredProducts);
    }
  });
}
const txtSearch = document.querySelector("#txtSearch");
txtSearch.addEventListener("keyup", (e) => {
  const value = e.target.value.toLowerCase().trim();
  if (value) {
    displayProducts(data.filter((product) => product.name.toLowerCase().indexOf(value) !== -1));
  } else {
    displayProducts(data);
  }
});

displayProducts(data);
setCategories();






function displayProducts(products) {
  if (products.length > 0) {
    const productDetails = products.map(product => `
        <a href="product-details.php?id=${product.id}" class="product"> <!-- Add this anchor tag -->
          <div class="img">
            <img src="${product.img}" alt="${product.name}" />
          </div>
          <div class="product-details">
            <span class="name">${product.name}</span>
            <span class="amt">Rs.${product.amt}</span>
            <span class="seller">${product.seller} ${products.bi}</span>
          </div>
        </a>`
    ).join("");

    productsContainer.innerHTML = productDetails;
  } else {
    productsContainer.innerHTML = "<h3>No Products Available</h3>";
  }
}
