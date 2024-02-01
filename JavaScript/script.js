// Add JavaScript code here if needed

// Example: Interactive navigation highlighting
document.addEventListener('DOMContentLoaded', function () {
    // Get the current page URL
    const currentPage = window.location.href;

    // Get all navigation links
    const navLinks = document.querySelectorAll('nav a');

    // Loop through each link
    navLinks.forEach(link => {
        // Check if the link's href matches the current page URL
        if (link.href === currentPage) {
            // Add a class for highlighting
            link.classList.add('current-page');
        }
    });
});



function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

/* Open the sidenav */
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
  }
  
  /* Close/hide the sidenav */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
      var span = document.getElementById("scroll-span");
  
      // Show or hide the span based on scroll position
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          span.style.display = "block";
      } else {
          span.style.display = "none";
      }
  }

  document.getElementById('submitForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission
    
    // Display a successful message
    alert('Your form has been successfully submitted!');
    
    // Reset the form to clear old inputs
    this.reset();
});

  


