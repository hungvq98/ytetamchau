export default function ScrollTopModule() {
    const scrollTopBtn = document.querySelector('.moveToTop');

    if (scrollTopBtn) {
        const toggleClass = () => {
            pageYOffset >= 300 ? scrollTopBtn.classList.add('active') : scrollTopBtn.classList.remove('active');
        };
        const scrollTop = () => {
            console.log("true")
            if (pageYOffset > 0) {
                $(window).scrollTop(0);
            }
        };
        document.addEventListener('DOMContentLoaded', toggleClass);
        window.addEventListener('scroll', toggleClass);
        scrollTopBtn.addEventListener('click', scrollTop);  
    }
}
