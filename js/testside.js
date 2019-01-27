    function openNav() {
      document.getElementById("new_sidebar").style.display= "none";
      document.getElementById("mySidebar").style.display= "block";
    }
    
    function closeNav() {
      document.getElementById("new_sidebar").style.display= "block";
      document.getElementById("mySidebar").style.display= "none";
    }
    function on(){
            document.getElementById("down").style.display = "none";
            document.getElementById("sub").style.display = "block";
    }
    function off(){
            document.getElementById("down").style.display = "block";
            document.getElementById("sub").style.display = "none";
    }
    function on_new(){
            document.getElementById("down_new").style.display = "none";
            document.getElementById("new_sub").style.display = "block";
    }
    function off_new(){
            document.getElementById("down_new").style.display = "block";
            document.getElementById("new_sub").style.display = "none";
        }