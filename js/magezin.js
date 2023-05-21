const tabsBtn1 = document.querySelectorAll('tabs-btn1');
const tabbtn = document.querySelectorAll('tab-btn');
const changeClass = el => {
    for (let i = 0; i< tabsBtn1.children.length; i++) {
      tabsBtn1.children[i].classList.remove('active');
    }
       el.classList.add('active');
}

tabsBtn1.addEventListener('click', e => {
    const currTab = e.target.dataset.btn;
    changeClass(e.target);
    for(let i = 0; i < contents.children.length; i++){
        contents.children[i].classList.remove('active');
        if(contents.children[i].dataset.content == currTab){
            contents.children[i].classList.add('active');
        }
    }
})