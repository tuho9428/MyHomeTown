// Open topnav
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

// Open the sidenav
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
  }
  
  // Close/hide the sidenav
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

  


