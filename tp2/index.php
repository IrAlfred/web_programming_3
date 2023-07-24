    <?php
        $page="index";
        $title = "Accueil UAC"; 
        ob_start();
    ?>
    <div id="poster"></div>
    <div class="jumbotron">
        Lorem ipsum dolor sit amet consectetur adipisicing elit
    </div>
    <div class="trois_card">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam corrupti minus itaque rerum. Culpa quasi rem, in architecto error ad ea, saepe dicta provident iure similique at autem, magni optio.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis dolore vitae unde velit voluptate laudantium deleniti quisquam? Labore corrupti culpa modi ratione, vel quibusdam eum? Incidunt eos totam earum doloribus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, fugiat labore dolores voluptatibus tempora, impedit ea, quam explicabo laboriosam odio vero? Atque amet sunt inventore aut minus libero? Totam, officiis.</p>
    </div>
    <div>
        <p id="one">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim aliquam nihil, ipsa, quos error et eligendi provident atque minus porro ducimus officiis maiores natus unde nulla odio sapiente deleniti nisi aspernatur ex saepe a fugiat culpa eius. Nemo amet vitae doloremque reiciendis error, deleniti quibusdam similique fugiat dicta dignissimos neque nisi consectetur nobis? Consectetur fugiat animi minima officia voluptatem, odio cumque, vel numquam sed nam consequuntur inventore et accusamus! Soluta a quos maiores, enim, quas veritatis et natus ad, unde odit illum nemo rem ipsam facere? Vero porro sed totam rem. Tempore, dolorem sit odit ad esse, quo modi iusto, aut quam ea minus sapiente nobis. At porro necessitatibus iure culpa, non assumenda eum sint incidunt totam quae placeat, esse doloremque delectus reprehenderit amet similique. Libero, at dolorem nemo </p>
    </div>
    <div class="trois_card">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, facere? Distinctio deserunt quasi fugit? Qui debitis reprehenderit id tempore harum odio minus corporis, atque earum quidem ullam quaerat recusandae a.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi vel obcaecati sint eaque a officia voluptates. Vitae voluptatem fuga quod eum, blanditiis repudiandae veniam. Ea reprehenderit iusto minus hic fugiat.</p>
    </div>
    <p><a href="images.zip" download>Cliquer ici pour télécharger les images du projet</a></p>
    <?php
        $page_content = ob_get_clean();
        require("template.php");
    ?>