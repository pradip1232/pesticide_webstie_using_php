function showContent(element) {
    
    const contents = element.closest('.card-body').querySelector('.contents');
    if (contents) {
        contents.style.display = 'block'; 
        element.style.display = 'none'; 
    }
}


function hideContent(element) {

    const contents = element.closest('.card-body').querySelector('.contents');
    if (contents) {
        contents.style.display = 'none'; 
        element.style.display = 'block'; 
    }
}


function redirectnewpage(){
    window.location.href = 'product-categories.php';
}