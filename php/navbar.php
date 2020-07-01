<?php $content = (isset($_GET['content']) ? $_GET['content'] : false); ?>
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> Laptops.org
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
            <li class="<?php if ($content == 'home') echo 'active' ?>">
            <a href="./index.php?content=home">Home</a></li>
          <li class="<?php if ($content == 'informatie') echo 'active' ?>">
            <a href="index.php?content=informatie">Informatie</a></li>
          <li class="<?php if ($content == 'shop') echo 'active' ?>">
            <a href="index.php?content=shop">Laptops</a></li>
          <li class="<?php if ($content == 'contact') echo 'active' ?>">
            <a href="index.php?content=contact">Contact</a></li>
          <li class="<?php if ($content == 'faq') echo 'active' ?>">
            <a href="index.php?content=faq">FAQ</a></li>
          <li class="<?php if ($content == 'inloggen') echo 'active' ?>">
            <a href="index.php?content=login">Inloggen</a></li>
                <a href="index.php?content=winkelwagen" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> 
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>






