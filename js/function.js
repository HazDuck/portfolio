document.getElementById('hamMenu').addEventListener('click', () => {
    if (document.getElementById('dropDownNav').style.display === 'block') {
        document.getElementById('dropDownNav').style.display = ''
    } else if (document.getElementById('dropDownNav').style.display === '') {
        document.getElementById('dropDownNav').style.display = 'block'
    }
})

let items = document.querySelectorAll('.dropDownOptions')

items.forEach((item) => {
    item.addEventListener('click', () =>
        document.getElementById('dropDownNav').style.display = '')
})



