<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= !$pageTitle ? "Challenge" : "Challenge-".$pageTitle ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    
    <div class="menu">   
        <a href="emplois">Emplois</a>
        <a href="cours">Cours</a>          
        <a href="exos">Exercices</a>
        <a href="td">TD</a>
    </div>    
    

    <?= $content ?>

    <aside>
        <div class="title">News</div>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum autem nam, vero facilis corrupti reiciendis, 
            ullam accusamus reprehenderit illum commodi obcaecati. Tempore quod natus fugit provident quam eveniet sunt omnis.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus nesciunt at, sapiente a, neque quibusdam error
            aut natus provident reiciendis excepturi aperiam laborum ab in, laboriosam libero dicta architecto ullam?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur eum nulla quisquam sunt minima, corrupti porro, 
            labore alias dolorum quis quam facilis nesciunt sed adipisci. In ea tenetur incidunt ducimus?
        </p>
    </aside>
    
</body>
</html>