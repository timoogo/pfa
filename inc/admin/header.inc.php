<header>
    <div id="logo">
        <a href="index.php"><img src="ressources/medias/images/South_Park_sign_logo.png" alt="projet" id="logo" title="logo projet"></a>
    </div>

    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"> </span> </label>
    <ul class="menu_burger">
        <li> <a href="index.php">Accueil</a></li>
        <li> <a href="contact.php">Contact</a></li>
        <li> <a href="connexion.php">Espace admin</a></li>
        <li> <a href="/pfa/blog/blog.php">Blog</a></li>
    </ul>

</header>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>      
<script>  
    function reload_extract(){
         $( "#random_extract_container" ).load(window.location.href + " #random_extract_container" );
        }
</script>

<body>
    <?php include 'inc/tracker.php'; 

    
    ?>
