const editForm = document.querySelector(".editForm");
const eForm = document.querySelector(".eForm");
const adminSection = document.querySelectorAll(".adminSection , .side-nav ");
const editBtn = document.querySelectorAll(".editBtn");
const closeBtn = document.querySelectorAll(".closeBtn");
console.log(adminSection)
function dispalyedit(e) {
    e.target.nextElementSibling.classList.remove("hidden");
    e.target.nextElementSibling.classList.add("block","z-10","flex","justify-center","items-center");
   
}
function closeEdit(e) {
    e.target.parentElement.parentElement.parentElement.classList.remove("block")
    e.target.parentElement.parentElement.parentElement.classList.add("hidden")
    
    // editForm.classList.remove("block");
}

for (let index = 0; index < editBtn.length; index++) {
    editBtn[index].addEventListener("click", dispalyedit);
}
for (let index = 0; index < editBtn.length; index++) {
    closeBtn[index].addEventListener("click", closeEdit);
}