﻿<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>WebLibrairie | Panier</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
   <link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>

    <?php include_once('Fonctions.php'); ?>
</head>
<body>
	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		
		<!-- Header -->
        <header id="wn__header" class="oth-page header__area header__absolute sticky__header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="images/logo/logo.png" alt="logo images">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <nav class="mainmenu__nav">
                            <ul class="meninmenu d-flex justify-content-start">
                                <li class="drop with--one--item"><a href="index.php">Accueil</a></li>

                                <li class="drop"><a href="shop-grid.php?categorie=Tout">Livres</a>
                                    <div class="megamenu mega03">
                                        <ul class="item item03">
                                            <li class="title">Catégories</li>
                                            <li><a href="shop-grid.php?categorie=Biographie">Biographie</a></li>
                                            <li><a href="shop-grid.php?categorie=Business">Business </a></li>
                                            <li><a href="shop-grid.php?categorie=Cuisine">Cuisine</a></li>
                                            <li><a href="shop-grid.php?categorie=Bien">Bien-être</a></li>
                                            <li><a href="shop-grid.php?categorie=Histoire">Histoire </a></li>
                                        </ul>
                                        <ul class="item item03">
                                            <li class="title">Les favoris</li>
                                            <li><a href="shop-grid.php?categorie=Mystérieux">Mystérieux</a></li>
                                            <li><a href="shop-grid.php?categorie=Religion">Religion</a></li>
                                            <li><a href="shop-grid.php?categorie=Roman">Roman</a></li>
                                            <li><a href="shop-grid.php?categorie=Fiction">Fiction/Fantasy</a></li>
                                            <li><a href="shop-grid.php?categorie=Mangas">Mangas</a></li>
                                        </ul>
                                        <ul class="item item03">
                                            <li class="title">Collections</li>
                                            <li><a href="shop-grid.php?categorie=Science">Science </a></li>
                                            <li><a href="shop-grid.php?categorie=Fiction">Fiction/Fantasy</a></li>
                                            <li><a href="shop-grid.php?categorie=Développement">Développement personnel</a></li>
                                            <li><a href="shop-grid.php?categorie=BD">BD</a></li>
                                            <li><a href="shop-grid.php?categorie=Humour">Humour</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="drop"><a href="shop-grid.php?categorie=Enfants">Enfants</a>
                                    <div class="megamenu mega02">
                                        <ul class="item item02">
                                            <li class="title">Les favoris</li>
                                            <li><a href="shop-grid.php?categorie=Biographie">Harry Potter</a></li>
                                            <li><a href="shop-grid.php?categorie=Biographie">Harry Potter</a></li>
                                            <li><a href="shop-grid.php?categorie=Biographie">Harry Potter</a></li>
                                            <li><a href="shop-grid.php?categorie=Biographie">Harry Potter</a></li>
                                            <li><a href="shop-grid.php?categorie=Biographie">Harry Potter</a></li>
                                        </ul>
                                        <ul class="item item02">
                                            <li class="title">Pour les plus petits</li>
                                            <li><a href="shop-grid.php?categorie=Biographie">Livre animé</a></li>
                                            <li><a href="shop-grid.php?categorie=Biographie">Livre effaçable</a></li>
                                            <li><a href="shop-grid.php?categorie=Biographie">Comte</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="drop"><a href="blog.html">Blog</a>
                                    <div class="megamenu dropdown">
                                        <ul class="item item01">
                                            <li><a href="blog.html">Blog Page</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                        <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                            <li class="shop_search"><a class="search__active" href="#"></a></li>
                            <?php if(!isset($_SESSION['Usercompte'])): ?>
                            <li class="wishlist"><a href="wishlist.php"></a></li>
                            <li class="shopcart"><a class="cartbox_active" href=""></a>
                                <div class="block-minicart minicart__active">
                                    <div class="minicart-content-wrapper">
                                        <div class="micart__close">
                                            <span>Fermer</span>
                                        </div>
                                        <div class="mini_action cart">
                                            <a class="cart__btn" href="my-account.php">Se connecter</a>
                                        </div>
                                    </div>
                                </div>
                                <?php else: ?>
                                <?php $getNbLivre = getNbArticlePanier(); ?>
                                <?php $nbLivre = $getNbLivre->fetch(); ?>
                                <?php $getNbWishListe = getNbArticleWishliste(); ?>
                                <?php $nbWishListe = $getNbWishListe->fetch(); ?>
                            <li class="wishlist"><a href="wishlist.php"><span id="alertWishlist" class="product_qun"><?php echo $nbWishListe[0]; ?></span></a></li>
                            <li class="shopcart"><a class="cartbox_active" href=""><span id="alertPanier" class="product_qun"><?php echo $nbLivre[0]; ?></span></a>
                                <div id="divPanier" class="block-minicart minicart__active">
                                    <div class="minicart-content-wrapper">
                                        <div class="micart__close">
                                            <span>Fermer</span>
                                        </div>
                                        <div class="items-total d-flex justify-content-between">
                                            <span><?php echo $nbLivre[0]; ?><?php if($nbLivre[0] > 1){ echo " articles"; }else{ echo " article"; } ?> </span>
                                            <span>Total</span>
                                        </div>
                                        <div class="total_amount text-right">
                                            <?php $prixTotal = afficherPrixTotal(); ?>
                                            <?php foreach($prixTotal as $data): ?>
                                                <?php if($data['PRIX_TOTAL'] == null): ?>
                                                    <span><?php echo 0;?> €</span>
                                                <?php else: ?>
                                                    <span><?php echo $data['PRIX_TOTAL'];?> €</span>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="mini_action checkout">
                                            <a class="checkout__btn" href="cart.php">Acheter</a>
                                        </div>
                                        <div class="single__items">
                                            <div class="miniproduct">
                                                <?php $nb_liens=0; $compteur = 0; $article = afficherPanier(); ?>
                                                <?php foreach($article as $data): ?>
                                                    <?php if($compteur < 3):?>
                                                        <?php $compteur++; $nb_liens++; ?>
                                                        <div hidden><input id="idLivre_<?php echo $nb_liens ?>" name="idLivre_<?php echo $nb_liens ?>" type="hidden" value="<?php echo $data['ID'] ?>"></div>
                                                        <div class="item01 d-flex" id="div_<?php echo $nb_liens ?>">
                                                            <div class="thumb">
                                                                <a href="single-product.php?livre=<?php echo $data['ID'] ?> "><img src="<?php echo $data['SOURCE'];?>"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h6><a href="single-product.php?livre=<?php echo $data['ID'] ?> "><?php echo $data['TITRE'];?></a></h6>
                                                                <span class="prize"><?php echo $data['PRIX_UNITAIRE'];?>0€</span>
                                                                <div class="product_prize d-flex justify-content-between">
                                                                    <span class="qun">Quantité:
                                                                        <?php if ($data['NB_PRODUIT'] < 10){
                                                                            echo "0".$data['NB_PRODUIT'];
                                                                        }
                                                                        else{
                                                                            echo $data['NB_PRODUIT'];
                                                                        }?></span>
                                                                    <ul class="d-flex justify-content-end">
                                                                        <li><a onclick="del('idLivre_<?php echo $nb_liens ?>', 'div_<?php echo $nb_liens ?>');" href="#"><i class="zmdi zmdi-delete"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php else: ?>
                                                        <a href="cart.php"><p class='forget_pass'> Voir le reste</p></a>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                <script>
                                                    //Permet la suppression d'une ligne
                                                    function del(idLivre, idligne) {
                                                        var id_livre = $('#'+ idLivre).val();
                                                        $.ajax({
                                                            url : 'Ajax/ajaxPopUPPanierDelete.php',
                                                            type : 'POST',
                                                            data : 'id=' + id_livre,
                                                            dataType : 'html',
                                                            success : function(code_html, statut){

                                                            }
                                                        });
                                                        $('#'+idligne).remove();
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <div class="mini_action cart">
                                            <a class="cart__btn" href="cart.php">Aller au panier</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </li>
                            <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                                <div class="searchbar__content setting__block">
                                    <div class="content-inner">
                                        <div class="switcher-currency">
                                            <strong class="label switcher-label">
                                                <span>Mon Compte</span>
                                            </strong>
                                            <div class="switcher-options">
                                                <div class="switcher-currency-trigger">
                                                    <div class="setting__menu">
                                                        <?php if(!isset($_SESSION['Usercompte'])): ?>
                                                            <span><a href="my-account.php">S'identifier / S'inscrire</a></span>
                                                        <?php else: ?>
                                                            <span><a href="MonCompte.php">Mon compte</a></span>
                                                            <span><a href="wishlist.php">Ma Wishlist</a></span>
                                                            <?php if($_SESSION['Typecompte'] == 'ADM'): ?>
                                                                <span><a href="Administration.php">Administration</a></span>
                                                            <?php endif; ?>
                                                            <span><a href="Deconnexion.php">Déconnexion</a></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
		<!-- //Header -->
		<!-- Start Search Popup -->
        <div class="brown--color box-search-content search_active block-bg close__top">
            <form id="search_mini_form" class="minisearch" action="" method="post">
                <div class="field__search">
                    <input name="recherche" type="text" placeholder="Chercher un titre ...">
                    <div class="action">
                        <a href="#"><button type="submit" value="" name="rechercher" style="all: unset; background-color: transparent; border-color: transparent;"><i class="zmdi zmdi-search"></i></button></a>
                    </div>
                    <?php if(isset($_POST['rechercher'])):?>
                        <?php $_SESSION['titre'] = $_POST['recherche']; ?>
                        <?php echo '<script>document.location.replace("shop-grid-r.php");</script>'; ?>
                    <?php endif; ?>
                </div>
            </form>
            <div class="close__wrap">
                <span>fermer</span>
            </div>
        </div>
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--3" style="padding-top: 45px; padding-bottom: 45px;"></div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <?php $livre = afficherPanier80x100(); ?>
        <?php $AucunLivre = $livre->rowCount(); ?>
        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <?php if($AucunLivre < 1):?>
                    <h5 style="margin-left: 38%;">Pas de livre dans vôtre panier </h5>
                <?php else:?>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                            <form action="#">
                                <div id="tablePanier" class="table-content wnro__table table-responsive">
                                    <table>
                                        <thead>
                                            <tr class="title-top">
                                                <th class="product-thumbnail">Image</th>
                                                <th class="product-name">Titre</th>
                                                <th class="product-price">Prix</th>
                                                <th class="product-quantity">Quantité</th>
                                                <th class="product-subtotal">Total</th>
                                                <th class="product-remove">Supprimé</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $compteur = 0; ?>
                                        <?php foreach($livre as $data): ?>
                                            <?php $compteur++; ?>
                                            <tr id="idTr_<?php echo $compteur ?>">
                                                <td hidden><input id="idL_<?php echo $compteur ?>" value="<?= $data['ID'] ?>"></td>
                                                <td class="product-thumbnail"><a href="single-product.php?livre=<?php echo $data['ID'] ?>"><img src="<?= $data['SOURCE']; ?>" alt="product img"></a></td>
                                                <td class="product-name"><a href="single-product.php?livre=<?php echo $data['ID'] ?>"><?= $data['TITRE']; ?></a></td>
                                                <td class="product-price"><span class="amount"><?= $data['PRIX_UNITAIRE']; ?>0€</span></td>
                                                <td class="product-quantity"><input onclick="save(this.id, <?= $data['ID'] ?>, true, 'prixCalculer_<?php echo $compteur ?>');" id="nbProduit_<?php echo $compteur ?>" type="number" value="<?= $data['NB_PRODUIT']; ?>"></td>
                                                <td class="product-subtotal"><p id="prixCalculer_<?php echo $compteur ?>"><?= $data['PRIXCALCULER']; ?>€</p></td>
                                                <td class="product-remove"><a onclick="del('idL_<?php echo $compteur; ?>', 'idTr_<?php echo $compteur; ?>');" href="#">X</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                            <div class="cartbox__btn">
                                <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                    <li style="margin-left: 87%;"><a id="commander" href="ApresCommande.php">Commander</a></li>
                                </ul>
                            </div>
                        <script>
                            $('#commander').click(function () {
                                $.ajax({
                                    url : 'Ajax/ajaxValiderCommande.php',
                                    type : 'POST',
                                    dataType : 'html',
                                    success : function(code_html, statut){
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Total</li>
                                    <li>Livraison</li>
                                </ul>
                                <ul class="cart__total__tk">
                                    <?php $prixTotal = afficherPrixTotal(); ?>
                                    <?php foreach($prixTotal as $data): ?>
                                        <?php if($data['PRIX_TOTAL'] == null): ?>
                                            <li id="PrixTotal"><?php echo 0;?> €</li>
                                        <?php else: ?>
                                            <li id="PrixTotal"><?php echo $data['PRIX_TOTAL'];?> €</li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <li>5.90€</li>
                                </ul>
                            </div>
                            <div class="cart__total__amount">
                                <span>Grand Total</span>
                                <?php $prixTotal = afficherPrixTotal(); ?>
                                <?php foreach($prixTotal as $data): ?>
                                    <?php if($data['PRIX_TOTAL'] == null): ?>
                                        <span id="PrixTotalL"><?php echo 0;?> €</span>
                                    <?php else: ?>
                                        <span id="PrixTotalL"><?php echo $data['PRIX_TOTAL'] + 5.90;?>0€</span>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>  
        </div>

        <!-- cart-main-area end -->
		<!-- Footer Area -->
        <footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
            <div class="footer-static-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer__widget footer__menu">
                                <div class="ft__logo">
                                    <a href="index.php">
                                        <img src="images/logo/3.png" alt="logo">
                                    </a>
                                    <p>“Un beau livre, c'est celui qui sème à foison les points d'interrogation.”<span style="font-size: 70%;"> Jean Cocteau</span></p>
                                </div>
                                <div class="footer__content">
                                    <ul class="social__net social__net--2 d-flex justify-content-center">
                                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                        <li><a href="#"><i class="bi bi-google"></i></a></li>
                                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                        <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                        <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                                    </ul>
                                    <ul class="mainmenu d-flex justify-content-center">
                                        <li><a href="shop-grid.php?categorie=Best">Best Seller</a></li>
                                        <li><a href="shop-grid.php?categorie=Tout">Livres</a></li>
                                        <?php if(isset($_SESSION['Usercompte'])): ?>
                                            <li><a href="wishlist.php">Wishlist</a></li>
                                        <?php else: ?>
                                            <li><a href="my-account.php">Wishlist</a></li>
                                        <?php endif; ?>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright__wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="copyright">
                                <div class="copy__right__inner text-left">
                                    <p>By Barrios Fabien</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="payment text-right">
                                <img src="images/icons/payment.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!-- //Footer Area -->

	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
    <script>
        function save(idInput, IdLivre, bool, prix){
            var id_sel = $('#'+idInput);
            var valeurDiv = id_sel.val();
            $(document).mouseup(function (e){
                if (!id_sel.is(e.target)&& id_sel.has(e.target).length === 0){
                    var valeurDivSortie = id_sel.val();
                    if(valeurDivSortie != valeurDiv || valeurDivSortie == null){
                        if(bool == true){
                            var nbProduit = $('#'+idInput).val();
                            var idL = IdLivre;
                            $.ajax({
                                url : 'Ajax/ajaxAjouterNbProduitPanier.php',
                                type : 'POST',
                                data : 'nb=' + nbProduit + '&idl=' + idL,
                                dataType : 'html',
                                success : function(code_html, statut){
                                    $('#'+prix).text(code_html + '€');
                                    bool = false;
                                    $.ajax({
                                        url : 'Ajax/ajaxTotalPanier.php',
                                        type : 'POST',
                                        dataType : 'html',
                                        success : function(code_html1, statut){
                                            var totalL = parseFloat(code_html1) + 5.90;
                                            $('#PrixTotal').text(code_html1 + '€');
                                            $('#PrixTotalL').text(totalL + '0€');
                                        }
                                    });
                                }
                            });
                        }
                    }
                }
            });
        }
    </script>
    <script type="text/javascript" src="refresh.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
</body>
</html>