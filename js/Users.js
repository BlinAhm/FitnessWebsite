//Insert
var insert = document.getElementById('insertBtn');
var userInputs = document.querySelectorAll(".userInputs");
var insertForm = document.getElementById('insertForm');

//Edit
var edit = document.getElementById('editBtn');
var editID = document.querySelector(".id");
var editForm = document.getElementById('editForm');

//Update
var next = document.getElementById('next');
var updateInputs = document.querySelectorAll(".updateInputs");
var updateForm = document.getElementById('updateForm');

//Exit buttons
var insertExit = document.getElementsByClassName("close")[0];
var editExit = document.getElementsByClassName("close")[1];
var updateExit = document.getElementsByClassName("close")[2];

//Database Buttons
insert.onclick = function(event) {
  insertForm.style.display = "block";
  event.preventDefault();
}
edit.onclick = function(event) {
  editForm.style.display = "block";
  event.preventDefault();
}
next.onclick = function(event) {
  editForm.style.display = "none";
  updateForm.style.display = "block";
  event.preventDefault();
}

//Exit functions
insertExit.onclick = function() {
    for (let index = 0; index < userInputs.length; index++) {
      userInputs[index].value = '';
    }
    insertForm.style.display = "none";
}
editExit.onclick = function() {
  editID.value = '';
  editForm.style.display = "none";
}
updateExit.onclick = function() {
  for (let index = 0; index < updateInputs.length; index++) {
    updateInputs[index].value = '';
    updateForm.style.display = "none";
  }
}

window.onclick = function(event) {
  if (event.target == insertForm || event.target == editForm || event.target == updateForm) {
    insertForm.style.display = "none";
    editForm.style.display = "none";
    updateForm.style.display = "none";
  }
}