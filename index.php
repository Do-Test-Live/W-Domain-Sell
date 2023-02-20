<?php
include ('config/db_config.php');

$result = 0;

if (isset($_POST['register'])){
    $domain_name = mysqli_real_escape_string($con, $_POST['domain_name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $insert_query = $con->query("INSERT INTO `sell_data`(`domain_name`, `amount`, `email`) VALUES ('$domain_name','$price','$email')");
    if($insert_query){
        $result = 1;
    }else{
        $result = 2;
    }
}
?>

<!DOCTYPE html>
<html itemscope="" itemtype="http://schema.org/WebSite">
<head>
    <link href="https://cdn3.dan.com/assets/GraphikDan-Semibold-Web-560a9afe1c7efc78932e5a841e202476c7af320d0aec9d916cc2f065243cfcfc.woff2"
          rel="preload"
          type="application/font-woff2">
    <link href="https://cdn1.dan.com/assets/GraphikDan-Regular-Web-1b23e0d886e0602443c35df66f69cf1560710913bf88b512ed9cea147fccf0b6.woff2"
          rel="preload"
          type="application/font-woff2">
    <link href="https://cdn2.dan.com/assets/GraphikDan-Bold-Web-11f7002d7b0e45f73367bf8e4f5763dc6a7f8f7d6be4f29f26650f13480a5f6a.woff2"
          rel="preload"
          type="application/font-woff2">
    <link href="https://cdn2.dan.com/assets/GraphikDan-Medium-Web-cf2e4f4feea57b2fb89e83ed56fc49bc0bf21a4f1fa20afe2e83d745c8890fc3.woff2"
          rel="preload"
          type="application/font-woff2">
    <link href="https://cdn1.dan.com/assets/GraphikDan-Light-Web-683068589a2fceaee125c3a3fd83a27a28f90ce37c099777eb89a4629d9fad3e.woff2"
          rel="preload"
          type="application/font-woff2">
    <link href="https://cdn3.dan.com/assets/public-b7f8c3a2313c7194542af3096b01fddbc0c6419710f2507925ff7fdf2d9ab50c.css" media="screen"
          rel="stylesheet"/>
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, minimum-scale=1, initial-scale=1, viewport-fit=cover" name="viewport"/>
    <title>NGT Domains</title>

    <link href="favicon.png"
          rel="icon" type="image/x-icon"/>

    <script defer="defer" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js"></script>
    <script src="https://cdn1.dan.com/assets/vendor/svg4everybody-f514fdcad5509c1d8608ad8ed6b18dc17777e467f3c0ef19b6b8e44753b288be.js"></script>
    <script src="https://cdn0.dan.com/packs/js/runtime~public/fonts-2fe2dda32aa2d2a2aa67.js"></script>
    <script src="https://cdn0.dan.com/packs/js/public/fonts-51a7ce48823de02ee10a.chunk.js"></script>

    <script src="https://cdn2.dan.com/packs/js/runtime~public/shared-1b01634fd7ca21c7761f.js"></script>
    <script src="https://cdn2.dan.com/packs/js/8-8c137601dbf187c44d1f.chunk.js"></script>
    <script src="https://cdn2.dan.com/packs/js/public/shared-d9c0eed345f681187efe.chunk.js"></script>

    <style>
        .ddl-select {
            visibility:hidden;
        }
        .ddl {
            position:relative;
            height:50px;
            width:100%;
            text-align:initial;
        }
        .ddl::after {
            content:'';
            position:absolute;
            top:25px;
            right:20px;
            width:12px;
            height:2px;
            background:#555;
            z-index:99;
            transform:rotate(-40deg);
            transition:0.5s;
        }
        .ddl::before {
            content:'';
            position:absolute;
            top:25px;
            right:28px;
            width:12px;
            height:2px;
            background:#555;
            z-index:99;
            transform:rotate(40deg);
            transition:0.5s;
        }
        .ddl.active::after{
            right:28px;
        }
        .ddl.active::before{
            right:20px;
        }
        .ddl-input {
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            cursor:pointer;
            border-radius:10px;
            padding:10px 20px;
            outline:none;
            background:#fff;
            border:1px solid #8795aa;
        }
        .ddl.active .ddl-options {
            visibility:visible;
            opacity:1;
        }
        .ddl .ddl-options {
            position:absolute;
            width:100%;
            top:55px;
            background:#fff;
            border-radius:10px;
            overflow:hidden;
            visibility:hidden;
            opacity:0;
            transition:0.25s;
            z-index: 999;
            border:1px solid #e9e9e9;
            box-shadow: 0 0 5px rgba(0,0,0,0.10);
        }
        .ddl .ddl-options > div {
            padding: 10px 20px;
            cursor:pointer;
        }
        .ddl .ddl-options > div:hover {
            background: #000000;
            color: #fff;
        }
    </style>
</head>
<body class="d-flex flex-column">
<div class="locale-banner-component">
    <div id="LocaleBanner-react-component-32810ae8-0d6c-4d8d-bf9f-e0d2b4068a02"></div>
</div>
<div itemprop="author" itemscope="" itemtype="http://schema.org/Organization" style="display:none!important;">
    <meta content="Dan.com" itemprop="name" name="author"/>
    <meta content="https://cdn0.dan.com/assets/logos/dan-456bbba14f47145716d14b594716f6270a6b8b409f9f83256127ba2ea243c26f.png"
          itemprop="logo"/>
</div>
<a name="page-top"></a>
<nav class="navbar navbar-expand-md">
    <img src="logoo.png" alt="NGT Logo" style="width: 100px;">
    <!--<button class="navbar-toggler not-the-hamburger collapsed" data-target="#mobile-nav" data-toggle="collapse"
            type="button">
        <span class="top-minus minus"></span>
        <span class="bottom-minus minus"></span>
    </button>-->
    <div class="collapse navbar-collapse" id="mobile-nav">
        <div class="mx-0 px-0 d-md-none pt-5">
            <!--<li class="nav-item py-3 border-bottom border-dark">
                <a class="nav-link menu-link px-0" href="#">Buy a domain</a>
            </li>
            <li class="nav-item py-3 border-bottom border-dark">
                <a class="nav-link menu-link px-0" href="#">Sell your domain</a>
            </li>
            <li class="nav-item dropdown py-3 border-bottom border-dark">
                <a class="nav-link menu-link px-0" data-toggle="collapse" href="#mobile-menu-learn">
                    <span>Learn</span>
                    <svg class="icon " fill="currentColor">
                        <use xlink:href='https:/packs/spritemap.svg#sprite-branded-chevron-bottom'/>
                        )
                    </svg>
                </a>
                <div class="menu mobile-menu collapse pt-4 pb-2" id="mobile-menu-learn">
                    <div class="row row-cols-2 row-cols-lg-1 row-cols-xl-2 pt-2">
                        <div class="col pb-2">
                            <a class="menu-link" href="https://dan.pr.co" rel="noreferrer, noopener" target="_blank">News</a>
                            <p class="mt-1">Learn more about the company, PR and product updates here.</p>
                        </div>
                        <div class="col pb-2">
                            <a class="menu-link" href="#">Trust &amp;Security</a>
                            <p class="mt-1">Connects you to the latest information on security</p>
                        </div>
                        <div class="col pb-2">
                            <a class="menu-link" href="#">Help center</a>
                            <p class="mt-1">Learn how to configure, and use Dan.com products</p>
                        </div>
                        <div class="col pb-2">
                            <a class="menu-link" href="#">Transaction explorer</a>
                            <p class="mt-1">Find out if a domain is under an active rent or lease contract or how many
                                owners a domain has</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown py-3 border-bottom border-dark">
                <a class="nav-link menu-link px-0" data-toggle="collapse" href="#mobile-menu-company">
                    <span>Company</span>
                    <svg class="icon " fill="currentColor">
                        <use xlink:href='https:/packs/spritemap.svg#sprite-branded-chevron-bottom'/>
                        )
                    </svg>
                </a>
                <div class="menu mobile-menu collapse pt-4 pb-2" id="mobile-menu-company">
                    <div class="row row-cols-2 row-cols-lg-1 row-cols-xl-2 pt-2">
                        <div class="col pb-2">
                            <a class="menu-link" href="#">Our story</a>
                            <p class="mt-1">We’re on a mission to make domain name trading available to everyone</p>
                        </div>
                        <div class="col pb-2">
                            <a class="menu-link" href="#">API Partnership Program</a>
                            <p class="mt-1">Use our APIs to integrate with your services</p>
                        </div>
                        <div class="col">
                            <div class="pb-2">
                                <a class="menu-link" href="#">Careers – We’re hiring!</a>
                                <p class="mt-1">At Dan.com, we work, grow and build fast. Shaking up the industry and
                                    making a splash</p>
                            </div>
                        </div>
                        <div class="col pb-2">
                            <a class="menu-link" href="#">Contact us</a>
                            <p class="mt-1">Didn’t find the information you’re looking for? Reach out to our team! Our
                                team is friendly, knowledgeable &amp;ready to assist!</p>
                        </div>
                    </div>
                </div>
            </li>-->
            <!--<li class="nav-item dropdown py-3 border-dark">
                <a class="nav-link menu-link px-0" href="https://dan.com/users/login">Login</a>
            </li>-->
        </div>
    </div>
    <div class="collapse navbar-collapse" id="desktop-nav">
        <!--<ul class="navbar-nav mr-auto">
            <li class="nav-item nav-item-pr">
                <a class="nav-link menu-link px-0" href="#">Buy a domain</a>
            </li>
            <li class="nav-item nav-item-pr">
                <a class="nav-link menu-link px-0" href="#">Sell your domain</a>
            </li>
            <li class="nav-item dropdown nav-item-pr">
                <a class="nav-link menu-link" data-offset="50%" data-toggle="dropdown" href="#" role="button">
                    Learn
                    <svg class="icon " fill="currentColor">
                        <use xlink:href='https:/packs/spritemap.svg#sprite-branded-chevron-bottom'/>
                        )
                    </svg>
                </a>
                <div class="dropdown-menu shadow-lg">
                    <div class="menu-arrow-up"></div>
                    <div class="menu container rounded-lg pt-3 pb-1">
                        <div class="row row-cols-md-1 row-cols-lg-2">
                            <div class="col pb-2">
                                <a class="menu-link" href="https://dan.pr.co" rel="noreferrer, noopener"
                                   target="_blank">News</a>
                                <p class="mt-1">Learn more about the company, PR and product updates here.</p>
                            </div>
                            <div class="col pb-2">
                                <a class="menu-link" href="#">Trust &amp;Security</a>
                                <p class="mt-1">Connects you to the latest information on security</p>
                            </div>
                            <div class="col pb-2">
                                <a class="menu-link" href="#">Help center</a>
                                <p class="mt-1">Learn how to configure, and use Dan.com products</p>
                            </div>
                            <div class="col pb-2">
                                <a class="menu-link" href="#">Transaction explorer</a>
                                <p class="mt-1">Find out if a domain is under an active rent or lease contract or how
                                    many owners a domain has</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown nav-item-pr">
                <a class="nav-link menu-link" data-display="static" data-toggle="dropdown" href="#" role="button">
                    Company
                    <svg class="icon " fill="currentColor">
                        <use xlink:href='https:/packs/spritemap.svg#sprite-branded-chevron-bottom'/>
                        )
                    </svg>
                </a>
                <div class="dropdown-menu shadow-lg">
                    <div class="menu-arrow-up"></div>
                    <div class="menu container rounded-lg pt-3 pb-1">
                        <div class="row row-cols-md-1 row-cols-lg-2">
                            <div class="col pb-2">
                                <a class="menu-link" href="#">Our story</a>
                                <p class="mt-1">We’re on a mission to make domain name trading available to everyone</p>
                            </div>
                            <div class="col pb-2">
                                <a class="menu-link" href="#">API Partnership Program</a>
                                <p class="mt-1">Use our APIs to integrate with your services</p>
                            </div>
                            <div class="col">
                                <div class="pb-2">
                                    <a class="menu-link" href="#">Careers – We’re hiring!</a>
                                    <p class="mt-1">At Dan.com, we work, grow and build fast. Shaking up the industry
                                        and making a splash</p>
                                </div>
                            </div>
                            <div class="col pb-2">
                                <a class="menu-link" href="#">Contact us</a>
                                <p class="mt-1">Didn’t find the information you’re looking for? Reach out to our team!
                                    Our team is friendly, knowledgeable &amp;ready to assist!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>-->
        <!--<div class="nav-btn-wrapper">
            <a class="btn btn-sm btn-outline-secondary my-sm-0" href="https://dan.com/users/login">
                <div class="text-nowrap">Login</div>
            </a>
        </div>-->
    </div>
</nav>
<div class="col-md-12 read-more" id="wantToKnowMoreModal">
    <h5 class="font-weight-bold">Buyer Protection Program</h5>
    <p>
    <p>
        When you buy a domain name at Dan.com, you’re automatically covered by our unique Buyer Protection Program. Read
        more about how we keep you safe on our <a href="https://dan.com/trust_and_security" target="_blank">Trust and
        Security</a>
        page.
    </p>
    <p>Next to our secure domain ownership transfer process, we strictly monitor all transactions. If anything looks
        weird, we take immediate action. And if the seller doesn &#39;t deliver on their part of the deal, we refund you
        within 24 hours.</p>
    </p><h5 class="font-weight-bold">Fast &amp;easy transfers</h5>
    <p>
    <p>98% of all domain ownership transfers are completed within 24 hours. The seller first delivers the domain to us,
        then we send you your tailored transfer instructions. Need help? Our domain ownership transfer specialists will
        assist you at no additional cost.</p>
    </p><h5 class="font-weight-bold">Hassle free payments</h5>
    <p>Pay by bank wire and get a 1% discount or use one of the most popular payment options available through our
        payment processor, Adyen. Adyen is the payment platform of choice for many leading tech companies like Uber
        &amp;eBay.</p>
</div>
<div class="content flex-grow-1">
    <div class="parked-domains--show h-100">
        <div class="parked-domains--templates--minimalistic--show bg-gradient-coral light-color" style="">
            <a href="#" id="scroll-to-offerbox"></a>
            <div class="container-xl">
                <div class="main">
                    <div class="parked-domains--templates--minimalistic--offerbox">
                        <div class="offer-box elevate p4" id="offerbox-main">
                            <div class="parking_title">
                                Please <h1 class='text-bold auto-shrink'>Choose
                            </h1>
                                The Domain Name
                            </div>
                            <?php
                            if($result == 1){
                                ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> Your request is submitted.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php
                            }elseif ($result == 2){
                                ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Sorry!</strong> Something went wrong.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php
                            }
                            ?>

                            <div class="purchasing-option minimalistic" data-auto-select="true"
                                 data-url="https://dan.com/buy-domain/ngt.ai/offers/new?utm_campaign=MakeOffer&amp;utm_medium=cta&amp;utm_source=dan.com"
                                 data-vat="0" id="makeOffer">
                                <h5 class="mb-2">Make an offer</h5>
                                <div class="offer-input">
                                    <p class="vat">
                                    <form accept-charset="UTF-8" action="#" method="post"
                                          class="simple_form new_public_domains_offer">
                                        <select class="ddl-select" id="list" name="domain_name">
                                            <option value="" selected>Select Domain</option>
                                            <?php
                                            $fetch_data = $con->query("select * from domain_list");
                                            if($fetch_data){
                                                while($data = mysqli_fetch_assoc($fetch_data)){
                                                    ?>
                                                    <option value="<?php echo $data['domain_name'];?>"><?php echo $data['domain_name'];?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>

                                        <div class="form-group integer required public_domains_offer_bid" style="margin-top: 25px;">
                                            <input autocomplete="off" class="form-control required"
                                                   type="number" placeholder="Amount HKD" name="price"/>
                                            <input autocomplete="off" class="form-control required" type="email" placeholder="Email" name="email" style="margin-top: 25px;"/>

                                        </div>
                                        <div class="row text-center" style="align-items: center; justify-content: center;">
                                            <div class="next-button">
                                                <button class="btn btn-success" type="submit" name="register">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    </p></div>
                            </div>
                            <hr>
                            <ul class="checkmarks">
                                <li>
                                    <svg class="icon " fill="currentColor">
                                        <use xlink:href='https:/packs/spritemap.svg#sprite-check-mark'/>
                                        )
                                    </svg>
                                    <b class="free">Free</b>
                                    Ownership transfer
                                </li>
                                <li>
                                    <svg class="icon " fill="currentColor">
                                        <use xlink:href='https:/packs/spritemap.svg#sprite-check-mark'/>
                                        )
                                    </svg>
                                    <b class="free">Free</b>
                                    Transaction support
                                </li>
                                <li>
                                    <svg class="icon " fill="currentColor">
                                        <use xlink:href='https:/packs/spritemap.svg#sprite-check-mark'/>
                                        )
                                    </svg>
                                    Secure payments
                                </li>
                            </ul>
                            <div class="background-image payment-logos"></div>
                            </hr></div>
                    </div>
                    <div class="parked-domains--templates--minimalistic--sections--info">
                        <div class="domain-seller mb-4">
                            <div class="avatar">
                                <div class="avatar-wrapper">
                                    <span class="avatar-default bg-17 avatar-md">NGT</span>
                                </div>
                            </div>
                            <div class="description">
                                <h5>Domain seller</h5>
                            </div>
                        </div>
                        <div class="line mb-4"></div>
                        <div class="how-does-this-work accordion" id="accordionMinimalistic">
                            <h5>How does this work?</h5>
                            <div aria-controls="collapseOne" aria-expanded="false" class="accordion-section"
                                 data-target="#collapseOne" data-toggle="collapse">
                                <div class="toggle" id="headingOne">
                                    <div class="toggle-header">
                                        <svg class="icon " fill="currentColor">
                                            <use xlink:href='https:/packs/spritemap.svg#sprite-cart'/>
                                            )
                                        </svg>
                                        <h4>Buyer Protection Program</h4>
                                    </div>
                                    <img class="icon minimalistic-chevron-icon"
                                         src="https://cdn3.dan.com/assets/svg-icons/minimalistic_chevron-fabadd7d825c7319a140fea8d5e422a0e117f906d4cadff2dfa17d4938b2d3a6.svg"/>
                                </div>
                                <div aria-labelledby="headingOne" class="collapse" data-parent="#accordionMinimalistic"
                                     id="collapseOne">
                                    <p>
                                    <p>
                                        When you buy a domain name at Dan.com, you’re automatically covered by our
                                        unique Buyer Protection Program. Read more about how we keep you safe on our <a
                                            href="https://dan.com/trust_and_security" target="_blank">Trust and
                                        Security</a>
                                        page.
                                    </p>
                                    <p>Next to our secure domain ownership transfer process, we strictly monitor all
                                        transactions. If anything looks weird, we take immediate action. And if the
                                        seller doesn &#39;t deliver on their part of the deal, we refund you within 24
                                        hours.</p>
                                    </p></div>
                            </div>
                            <div aria-controls="collapseTwo" aria-expanded="false" class="accordion-section"
                                 data-target="#collapseTwo" data-toggle="collapse">
                                <div class="toggle" id="headingTwo">
                                    <div class="toggle-header">
                                        <svg class="icon " fill="currentColor">
                                            <use xlink:href='https:/packs/spritemap.svg#sprite-clock'/>
                                            )
                                        </svg>
                                        <h4>Fast &amp;easy transfers</h4>
                                    </div>
                                    <img class="icon minimalistic-chevron-icon"
                                         src="https://cdn3.dan.com/assets/svg-icons/minimalistic_chevron-fabadd7d825c7319a140fea8d5e422a0e117f906d4cadff2dfa17d4938b2d3a6.svg"/>
                                </div>
                                <div aria-labelledby="headingTwo" class="collapse" data-parent="#accordionMinimalistic"
                                     id="collapseTwo">
                                    <p>
                                    <p>98% of all domain ownership transfers are completed within 24 hours. The seller
                                        first delivers the domain to us, then we send you your tailored transfer
                                        instructions. Need help? Our domain ownership transfer specialists will assist
                                        you at no additional cost.</p>
                                    </p></div>
                            </div>
                            <div aria-controls="collapseThree" aria-expanded="false" class="accordion-section"
                                 data-target="#collapseThree" data-toggle="collapse">
                                <div class="toggle" id="headingThree">
                                    <div class="toggle-header">
                                        <svg class="icon " fill="currentColor">
                                            <use xlink:href='https:/packs/spritemap.svg#sprite-cash'/>
                                            )
                                        </svg>
                                        <h4>Hassle free payments</h4>
                                    </div>
                                    <img class="icon minimalistic-chevron-icon"
                                         src="https://cdn3.dan.com/assets/svg-icons/minimalistic_chevron-fabadd7d825c7319a140fea8d5e422a0e117f906d4cadff2dfa17d4938b2d3a6.svg"/>
                                </div>
                                <div aria-labelledby="headingThree" class="collapse"
                                     data-parent="#accordionMinimalistic" id="collapseThree">
                                    <p>Pay by bank wire and get a 1% discount or use one of the most popular payment
                                        options available through our payment processor, Adyen. Adyen is the payment
                                        platform of choice for many leading tech companies like Uber &amp;eBay.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn1.dan.com/assets/public/i18n-bb2da241bfcbf784d15a84f03ef6ff7eef33b2c695b6821a6750b29c30faa75e.js"></script>
        <script src="https://cdn2.dan.com/packs/js/runtime~public/product-c65bfa3764bffa252c98.js"></script>
        <script src="https://cdn0.dan.com/packs/js/3-316465271ff922f9ddad.chunk.js"></script>
        <script src="https://cdn3.dan.com/packs/js/7-9f8a80ab64a86933eed5.chunk.js"></script>
        <script src="https://cdn0.dan.com/packs/js/public/product-277f3d3e06cbf343975b.chunk.js"></script>
    </div>
</div>
<svg class="defs">
    <defs>
        <clipPath clipPathUnits="objectBoundingBox" id="squircle">
            <path d="M .5 0 C .1 0 0 .1 0 .5 0 .9 .1 1 .5 1 .9 1 1 .9 1 .5 1 .1 .9 0 .5 0 Z" fill="#f00"/>
        </clipPath>
    </defs>
</svg>


<script>
    $(function () {
        $(".ddl-select").each(function () {
            $(this).hide();
            var $select = $(this);
            var _id = $(this).attr("id");
            var wrapper = document.createElement("div");
            wrapper.setAttribute("class", "ddl ddl_" + _id);

            var input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("class", "ddl-input");
            input.setAttribute("id", "ddl_" + _id);
            input.setAttribute("readonly", "readonly");
            input.setAttribute(
                "placeholder",
                $(this)[0].options[$(this)[0].selectedIndex].innerText
            );

            $(this).before(wrapper);
            var $ddl = $(".ddl_" + _id);
            $ddl.append(input);
            $ddl.append("<div class='ddl-options ddl-options-" + _id + "'></div>");
            var $ddl_input = $("#ddl_" + _id);
            var $ops_list = $(".ddl-options-" + _id);
            var $ops = $(this)[0].options;
            for (var i = 0; i < $ops.length; i++) {
                $ops_list.append(
                    "<div data-value='" +
                    $ops[i].value +
                    "'>" +
                    $ops[i].innerText +
                    "</div>"
                );
            }

            $ddl_input.click(function () {
                $ddl.toggleClass("active");
            });
            $ddl_input.blur(function () {
                $ddl.removeClass("active");
            });
            $ops_list.find("div").click(function () {
                $select.val($(this).data("value")).trigger("change");
                $ddl_input.val($(this).text());
                $ddl.removeClass("active");
            });
        });
    });

</script>
</body>
</html>
