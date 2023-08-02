const editForm = document.querySelector(".editForm");
const adminSection = document.querySelector(".admin");
const editBtn = document.querySelectorAll(".editBtn");

function dispalyedit(e) {
    e.target.nextElementSibling.classList.remove("hidden");
    e.target.nextElementSibling.classList.add("block");


}
for (let index = 0; index < editBtn.length; index++) {
    editBtn[index].addEventListener("click", dispalyedit);
}