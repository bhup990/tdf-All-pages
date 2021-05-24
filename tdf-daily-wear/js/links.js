
// Get the modal
var modal = $("#myModal");
var modalImg = modal.find(".modal-img");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = $(".myImg");
var captionBox = $("#caption");

img.click(function() {
    modalImg.attr('src', $(this).attr('src'));
    captionBox.text( $(this).attr('alt'));
    modal.show();
});

// Get the elements that closes the modal
var modalCloser = $(".close");

// When the user clicks on the close element, close the modal
modalCloser.click(function() {
    modal.hide();
});


// Dropdown JS
// Get the button, and when the user clicks on it, execute myFunction
document.getElementById("myBtn").onclick = function() {myFunction()};

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {

  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");

    for (let i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
// Dropdown JS
