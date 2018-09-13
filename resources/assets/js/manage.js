const accordians = document.getElementsByClassName('has-submenu')
const adminSlideoutButton = document.getElementById('admin-slideout-button')

adminSlideoutButton.onclick = function(){
  this.classList.toggle('is-active')
  document.getElementById('admin-side-menu').classList.toggle('is-active')
}



for (var i = 0; i < accordians.length; i++) {
  if (accordians[i].classList.contains('is-active')) {
    const submenu = accordians[i].nextElementSibling
    submenu.style.maxHeight = submenu.scrollHeight + "px"
    submenu.style.marginTop = "0.75em"
    submenu.style.marginBottom = "0.75em"
  }


  accordians[i].onclick = function () {
    this.classList.toggle('is-active')
    const submenu = this.nextElementSibling
    if (submenu.style.maxHeight) {
      submenu.style.maxHeight = null
      submenu.style.marginTop = null
      submenu.style.marginBottom = null
    } else {
      submenu.style.maxHeight = submenu.scrollHeight + "px"
      submenu.style.marginTop = "0.75em"
      submenu.style.marginBottom = "0.75em"
    }
  }
}
