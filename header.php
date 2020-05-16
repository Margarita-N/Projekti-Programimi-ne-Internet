<header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <h1 class="contominant" style="font-family: aclonica;margin-top:8px;">BiblioTech</h1>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                           
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">BALLINA</a>
                                </li>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="game.php">ARGETOHU</a>
                                </li>
                              <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        KATEGORITE
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="kategorite.php"> 
                                            
                                            
                                        </a>
                                        <a class="dropdown-item" href="#">BIOGRAFI</a>
                                        <a class="dropdown-item" href="#">SHKENCA SOCIALE & PSIKOLOGJIKE</a>
                                        <a class="dropdown-item" href="#">LETERSI SHQIPTARE</a>
                                        <a class="dropdown-item" href="#">FILOZOFI & SOCIOLOGJI</a>
                                        <a class="dropdown-item" href="#">HISTORI</a>
                                        <a class="dropdown-item" href="#">EKONOMI & BIZNES</a>
                                        <a class="dropdown-item" href="#">LIBRA PER FEMIJE</a>
                                        <a class="dropdown-item" href="#">LIBRA RELIGJIOZ</a>
                                        <a class="dropdown-item" href="#">FANTAZI</a>
                                    </div>
                                </li>
                             <li class="nav-item dropdown">
                                    <a class="nav-link " href="ngjarje.php" 
                                        role="button"  aria-haspopup="true" aria-expanded="false">
                                        NGJARJE
                                    </a>
                                   
                                </li>
                                <?php if(!isset($_SESSION['user'])){
                                    echo '<li class="nav-item dropdown">
                                    <a class="nav-link" href="login.php" 
                                        >
                                        LOG IN
                                    </a>';
                                    }
                                ?>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="kontakt.html">KONTAKT</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <?php 
                                    if(isset($_SESSION['user'])){
                                        echo '<a class="nav-link dropdown-toggle" href="cart.php" id="navbarDropdown_3"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    '.$_SESSION['user']->getName().'
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                                    <a class="dropdown-item" href="cart.php">SHPORTA</a>
                                                    <a class="dropdown-item" href="logout.php">LOG OUT</a>';
                                                    if($_SESSION['user']->getStatus()=='admin'){
                                                        echo '<a class="dropdown-item" href="AdminMain.php">MANAGE</a></div>';
                                                    }
                                                    else{
                                                        echo '</div>';
                                                    }
                                                }
                                    ?>
                                    
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="d-flex">
                            <div class="mr-auto">
                                <a href="cart.php" class="nav-item nav-link active" style="color:#2b2d2f">
                                <?php 
                                    if(isset($_SESSION['user'])){
                                    echo '<i class="fas fa-shopping-cart"></i>Shporta';
                                    }
                                    else{
                                        echo "";
                                    }
                               ?>
                            <?php
                            if(isset($_SESSION['user'])){
                                if (isset($_SESSION['cart'])){
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                                }else{
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                                }
                            }
                            else{
                                echo "";
                            }
                          ?>
                         </a> 
						
                            </div> -->
                           <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here" onkeyup="searchBooks()">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
                <div id="search-box">
                    
                </div>
            </div>
        </div>
    </header>
