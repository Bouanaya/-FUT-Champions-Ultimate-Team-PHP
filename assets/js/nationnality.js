const tablenationality = document.querySelector(".tablenationality")
const formnationality = document.querySelector(".formnationality")
const newnationality = document.querySelector(".newnationality")
newnationality.addEventListener('click',()=>{
    formnationality.classList.toggle('hidden')
    tablenationality.classList.toggle('hidden')
})