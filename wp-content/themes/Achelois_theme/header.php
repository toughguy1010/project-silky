<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACHELIOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- <link rel="stylesheet" href="./assest/css/homepage.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <?php wp_head();?>
</head>

<body>
    <div class="wrapper">
        <!-- Header start -->
        <nav class="navbar navbar-expand-lg header ">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active dropdown-btn" aria-current="page" href="shop">Shop</a>
                    <div class="dorpdown-menu">
                        <div class="dropdown-item mt-2">
                            <div class="dropdown-item-title">Ready to wear</div>
                            <div class="arrow">
                                <div class="dropdown-item-arrowright"></div>
                            </div>
                            <div class="child-item mt-2">
                                <a href="/detail_product.php" class="child-item-content">All dress</a>
                                <div class="child-item-content mt-1">Dress</div>
                                <div class="child-item-content mt-1">Top</div>
                                <div class="child-item-content mt-1">Bottom</div>
                                <div class="child-item-content mt-1">Acessories</div>
                            </div>
                        </div>
                        <div class="dropdown-item mt-1">Night Wear</div>
                        <div class="dropdown-item mt-1">
                            <div class="dropdown-item-title">Exclusive</div>
                            <div class="arrow">
                                <div class="dropdown-item-arrowright"></div>
                            </div>
                            <div class="child-item mt-2">
                                <div class="child-item-content">All dress</div>
                                <div class="child-item-content mt-1">Dress</div>
                                <div class="child-item-content mt-1">Top</div>
                                <div class="child-item-content mt-1">Bottom</div>
                                <div class="child-item-content mt-1">Acessories</div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Collection</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Contact US</a>
                </li>
            </ul>
            <div class="logo">
            <img src="<?php echo get_template_directory_uri() . '/assest/img/Group 66.png'; ?>"  class="logo-img" />
            
            </div>
            <div class="header-feature">
                <div class="header-btn  me-4 align-items-center language">
                    <div class="eng-language d-flex align-items-center">
                        <div class="languae me-2">Eng</div>
                        <i class="droplanguagebtn"></i>
                    </div>
                    <div class="vie-language">
                        <div class="languae">Vie</div>
                    </div>
                </div>
                <div class="header-btn me-5 register-btn">
                    Register
                </div>
                <div class="header-btn search-btn">
                    <input type="text" placeholder="Search" class="search-input input-group">
                    <img src="<?php echo get_template_directory_uri() . '/assest/img/lWgaSg.tif.png'; ?>"  class="search-icon" />
            
                </div>
                <div class="header-btn">
                    <img src="<?php echo get_template_directory_uri() . '/assest/img/Group 67.png'; ?>"  class="bag-icon" />
                    
                </div>
            </div>
        </nav>

        <!-- Header end -->