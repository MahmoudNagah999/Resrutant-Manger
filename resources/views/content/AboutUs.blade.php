@extends('layouts.app')
@section('title','About Us')
@section('content')
  <body class="AboutBody" >
      <div class="AboutBox">
        <div class="container">
          <h1 class="AboutH1">The official website for Paris Saint-Germain club restaurant</h1>
          <hr>
          <br>
          <br>
          <p>During the Napoleonic era the Palais-Royal, the colonnaded, tree-lined area adjacent the Louvre, became the site of many of the finest restaurants in Paris. The menu of the Véry, a leading restaurant of the era, listed a dozen soups, two dozen fish dishes, 15 beef entrées, 20 mutton entrées, and scores of side dishes. The novelist Honoré de Balzac often dined at the Véry, consuming prodigious quantities of oysters, fish, meat dishes, fruits, wines, and liqueurs. It was a favourite haunt of gourmet-author Grimod de la Reynière, who considered it the finest restaurant in France.</p>
          <p>During the Napoleonic era the Palais-Royal, the colonnaded, tree-lined area adjacent the Louvre, became the site of many of the finest restaurants in Paris. The menu of the Véry, a leading restaurant of the era, listed a dozen soups, two dozen fish dishes, 15 beef entrées, 20 mutton entrées, and scores of side dishes. The novelist Honoré de Balzac often dined at the Véry, consuming prodigious quantities of oysters, fish, meat dishes, fruits, wines, and liqueurs. It was a favourite haunt of gourmet-author Grimod de la Reynière, who considered it the finest restaurant in France.</p>
          <div class="row">
              <div class="column col-xs-6">
                <img src="../images/Gallary1.jpg" alt="Hall 1" onclick="myFunction(this);">
              </div>
              <div class="column col-xs-6">
                <img src="../images/Gallary2.jpg" alt="Hall 2" onclick="myFunction(this);">
              </div>
              <div class="column col-xs-6">
                <img src="../images/Gallary3.jpg" alt="Hall 3" onclick="myFunction(this);">
              </div>
              <div class="column col-xs-6">
                <img src="../images/2.jpg" alt="Hall 4" onclick="myFunction(this);">
              </div>
              <div class="column col-xs-6">
                <img src="../images/home1.jpg" alt="Hall 5" onclick="myFunction(this);">
              </div>
              <div class="column col-xs-6">
                <img src="../images/Gallary5.jpg" alt="Hall 6" onclick="myFunction(this);">
              </div>
            </div>
            
            <!-- The expanding image container -->
            <div class="ImageContainer">
              <!-- Close the image -->
              <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
            
              <!-- Expanded image -->
              <img id="expandedImg" style="width:100%">
            
              <!-- Image text -->
              <div id="imgtext"></div>
            </div>    
        </div>
          
      </div>
    </div>
     

      <script>
          function myFunction(imgs) {
          // Get the expanded image
          var expandImg = document.getElementById("expandedImg");
          // Get the image text
          var imgText = document.getElementById("imgtext");
          // Use the same src in the expanded image as the image being clicked on from the grid
          expandImg.src = imgs.src;
          // Use the value of the alt attribute of the clickable image as text inside the expanded image
          imgText.innerHTML = imgs.alt;
          // Show the container element (hidden with CSS)
          expandImg.parentElement.style.display = "block";
        }
      </script>
     
    
@endsection
</body>