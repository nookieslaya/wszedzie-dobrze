const mainMenu = () => {

    window.addEventListener("scroll", function () {
        const header = document.querySelector("header")
        const submenu = document.querySelector(".sub-menu")
        header.classList.toggle('sticky', window.scrollY > 0);
        submenu.classList.toggle('sticky', window.scrollY > 0);
    })

    const menu = document.querySelector('.menu')
    const menuBtn = document.querySelector('.menu-btn')
    const closeBtn = document.querySelector('.close-btn')

    console.log(closeBtn)

    closeBtn.addEventListener('click', function () {
            menu.classList.remove('active')
        }
    )
    menuBtn.addEventListener('click', function () {
        menu.classList.add('active')
    })

}


export default mainMenu;