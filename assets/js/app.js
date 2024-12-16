const ajoute = document.querySelector('.ajou')
const form = document.querySelector(".form")
const table = document.querySelector(".tables")
const select = document.querySelector(".select")
const formPlay =document.querySelector(".formPlay")
const formGK =document.querySelector(".formGK")
// ajou.addEventListener("click", ()=>{
//     form.classList.toggle('hidden')
//     table.classList.remove("hidden")
// })

select.addEventListener("change", ()=>{
    if (select.value == "GK") {
        formPlay.classList.add('hidden')
        formGK.classList.remove("hidden")
    }
    else{
        formPlay.classList.remove('hidden')
        formGK.classList.add("hidden")
    }
})
