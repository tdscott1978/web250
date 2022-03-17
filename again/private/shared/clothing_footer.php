<footer> 
       <hr>
       <br>
       
       <div >
         <a class= "icon" href="https://github.com/tdscott1978/web250">
            <img src="<?php echo url_for('/images/gitHub-white.png'); ?>" alt="Github icon">
         </a>
         
         <a class="icon" href="https://www.freecodecamp.org/tscott1978">
            <img src="<?php echo url_for('/images/fcc_primary_small.png'); ?>" alt="fcc logo">
         </a>
         <a class="icon" href="https://www.codecademy.com/profiles/tscott33">
            <img src="<?php echo url_for('/images/ccwhite.png'); ?>" alt="cc logo">
         </a>
         <a class="icon" href="https://jsfiddle.net/user/tdscott1978/fiddles/">
            <img src="<?php echo url_for('/images/jsfiddle.png" alt="jsfiddle logo'); ?>" 
         </a>
         <a class="icon"href="https://www.linkedin.com/in/terrellscottdesign/">
            <img src="<?php echo url_for('/images/LI-In-Bug.png" alt="linkedin icon'); ?>" 
         </a>
         </div>
         
         
     
       <br/>Designed by &copy; <?php echo date('Y'); ?> Terrell Scott
       <br>
       <br>
       <a href="http://validator.w3.org/check?uri=https://tdscott1978.github.io/web215/contract.html" style = "text-decoration: none">
          <img class="icon" src="<?php echo url_for('/images/valid_html5.gif'); ?>" alt="Validate HTML" />
       </a>
       <!-- you may need to change the name of your image link to match the one you 
       uploaded -->
			 <a class="icon" href="http://jigsaw.w3.org/css-validator/validator?uri=https://tdscott1978.github.io/web250/contract.html" style = "text-decoration: none">
         <img src="<?php echo url_for('/images/vcss-blue.gif'); ?>" alt="Validate CSS" />
       </a>
      
    </footer>
</body>
</html>
    
</body>
</html>

<?php 
db_disconnect($db);

?>