export default function textareaModule() {
    var txtArea = document.querySelector('.inputBoxjs textarea');
    var txtIp = document.querySelector('.inputBoxjss input');
    var span = document.querySelector('.inputBoxjs span');
    var span2 = document.querySelector('.inputBoxjss span');
    if(txtArea) {
        txtArea.addEventListener('change', ()=> {
            if(txtArea.getAttribute('value') !== "") {
                span.classList.toggle('active')
            }
        })
    }
    if(txtIp) {
        txtIp.addEventListener('change', ()=> {
            if(txtIp.getAttribute('value') !== "") {
                span2.classList.toggle('active')
            }
        })
    }


    var txtAreas = document.querySelector('.inputBoxjsx textarea');
    var txtIps = document.querySelector('.inputBoxjssx input');
    var spans = document.querySelector('.inputBoxjsx span');
    var span2s = document.querySelector('.inputBoxjssx span');
    if(txtAreas) {
        txtAreas.addEventListener('change', ()=> {
            if(txtAreas.getAttribute('value') !== "") {
                spans.classList.toggle('active')
            }
        })
    }
    if(txtIps) {
        txtIps.addEventListener('change', ()=> {
            if(txtIps.getAttribute('value') !== "") {
                span2s.classList.toggle('active')
            }
        })
    }
}