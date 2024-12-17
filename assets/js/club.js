const tableclub = document.querySelector(".tableclub")
const formclub = document.querySelector(".formclub")
const newclub = document.querySelector(".newclub")
console.log(tableclub);
console.log(formclub);

newclub.addEventListener('click',()=>{
    formclub.classList.toggle('hidden')
    tableclub.classList.toggle('hidden')
})