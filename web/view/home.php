<!doctype html>
<html  lang="en">

<head>

    <meta charset="utf-8">
    <title> Home | </title>

    <link rel="stylesheet" type="text/css" href="./../css/stylesheet.css" media="screen">
   
</head>

<body>

<h1>Welcome to My Repository </h1>

    <div id=" wrapper">


        <header>

        </header>
       
        <nav>
            <?php
        require("./../common/navigation.php");
        ?>
        </nav>

        <main>

            <h2> This is a little bit about my home country. </h2>
            
           <img src="/images/citadelle.jpg">
            <figcaption id="picture-name"> Citadelle Laferrière, Haiti </figcaption>
            <div class="description"> 
            <p>The Citadelle Laferrière is a mountaintop fortress, located
     on the northern coast of Haiti - on the top of mountain Bonnet a L&rsquo;Eveque.</p>

          <p>Depicted on local currency, stamps and postcards, this
            amazing structure has become the symbol of Haiti&rsquo;s power and independence. It
            was built in the beginning of the 19th century by one of the leaders of Haiti&rsquo;s
             slave revolution.</p>

         <p>The Citadelle Laferrière is also known simply as the
             Citadelle or as Citadelle Henri Christophe in the honor of its creator.</p>
          <p> Visit this link <a href="http://www.citadellelaferriere.com">Citadelle Laferrière </a> to learn more </p> 
</div>
            
        </main>
      
        <footer>
        <?php
        require("./../common/footer.php");
        ?>
        </footer>
    </div>
</body>

</html>

