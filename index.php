<?php 
 include_once("./partials/header.php");

 $text = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed reiciendis aliquam facilis quam minima quasi neque nisi, rerum nostrum error odio optio atque minus ducimus? Placeat ratione, ab omnis sequi dolore eveniet illo perspiciatis cum, doloribus eaque, minima blanditiis expedita laudantium ut nesciunt. Minima fugit laboriosam corrupti, unde est officiis incidunt dolorum reprehenderit vero error vel rem labore blanditiis velit debitis delectus earum eligendi non similique quos pariatur? Adipisci animi odio corporis. Magnam maxime esse distinctio iure sed delectus pariatur molestias maiores ullam recusandae earum error, ut amet doloribus in aliquam iste aspernatur, soluta expedita quae explicabo itaque! Nostrum, repellat!";


?>

<main id="home" class="customContainer flex-grow">
    
        <?php 
            for($i = 0; $i < 20; $i++){
                echo "<p>$text<p/>";
            }
        ?>
    
</main>

<?php include_once("./partials/footer.php"); ?>
