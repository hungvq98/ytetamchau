export default function toTopModule () {
    var btnTop = document.querySelector('.btnTopjs')
    if(window.scrollY == 0) {
        btnTop.classList.add('disable')
    }
    window.addEventListener('scroll',()=> {
        if(window.scrollY > 0) {
            btnTop.classList.remove('disable')
        }else {
            btnTop.classList.add('disable')
        }
    })
}