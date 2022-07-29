export default function listItemModule() {
    const listItems = document.querySelectorAll('.list-item')
    if (listItems) {
        listItems.forEach(item => {
            var imgPro = item.querySelectorAll('.img-pro');
            imgPro[0].classList.add('active');
            var btnColor = item.querySelectorAll('.btn-color');
            for (let i = 0; i < btnColor.length; i++) {
                const element = btnColor[i];
                element.addEventListener('click', () => {
                    imgPro.forEach(item => {
                        item.classList.remove('active')
                    })
                    imgPro[i].classList.add('active')
                })
            }
        })

    }

}