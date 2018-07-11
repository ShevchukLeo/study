<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type", content="text/html"; charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>JETRO</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <a href="" class="logo-link">
            <span class="part1">JET</span>
            <span class="part2">RO</span>
        </a>
<?php
$array_menu = array(
    ["link"=>"HOME", "href"=>"/home/"],
    ["link"=>"ABOUT US", "href"=>"/about us/"],
    ["link"=>"BLOG", "href"=>"/blog/"],
    ["link"=>"PORTFOLIO", "href"=>"/portfolio/"],
    ["link"=>"CONTACT US", "href"=>"/contact us/"]
);
?>
        <nav>
            <ul>
                <li><a href='<?=$array_menu [0] ["href"]?>'><?=$array_menu [0] ["link"]?></a></li>
                <li><a href='<?=$array_menu [1] ["href"]?>'><?=$array_menu [1] ["link"]?></a></li>
                <li><a href='<?=$array_menu [2] ["href"]?>'><?=$array_menu [2] ["link"]?></a></li>
                <li><a href='<?=$array_menu [3] ["href"]?>'><?=$array_menu [3] ["link"]?></a></li>
                <li><a href='<?=$array_menu [4] ["href"]?>'><?=$array_menu [3] ["link"]?></a></li>
            </ul>
        </nav>
    </header>
    <pol>
        <div id="pol">
        </div>
    </pol>
    <block1>
        <div id="block1">
            <a href="#"><img src="images/img1.png" width="920" height="386"></a>
        </div>
    </block1>
    <div id="blocks">
        <div id="block2">
            <a href="#"><img src="images/b21.png" width="141" height="140"></a>
            <a href="#"><img src="images/b22.png" width="141" height="140"></a>
            <a href="#"><img src="images/b23.png" width="141" height="140"></a>
            <a href="#"><img src="images/b24.png" width="141" height="140"></a>
            <a href="#"><img src="images/b25.png" width="141" height="140"></a>
            <b href="#"><img src="images/b26.png" width="141" height="140"></b>
        </div>
        <block3>
            <div id="block3">
                <div id="column1">
                    <a href="#"><img src="images/b31.png" width="50" height="50"></a>
                    <h1>CHECK OUT MY LATEST PORTFOLIO ITEMS</h1>
                    <p>Maecenas ipsum metus, semper  henrerit  varius mattis, congue  sit amet tellus.
                        Aliquam ullamcorper dui sed magna posue re ut elementum enim  rutrum.
                        Nam mi erat, porta id ultrices nec, pellentesque vel nunc.
                        Cras varius fermentum iaculis.
                        Aenean sodales nibh non lectus tempor a interdum justo ultricies</p>
                    <button type="submit">MORE</button>
                </div>
                <div id="column2">
                <a href="#"><img src="images/b32.png" width="50" height="50"></a>
                <h1>OFFER TOP NOTCH QUALITY WORK & SERVICES</h1>
                    <p>Maecenas ipsum metus, semper  henrerit  varius mattis, congue  sit amet tellus.
                        Aliquam ullamcorper dui sed magna posue re ut elementum enim  rutrum.
                        Nam mi erat, porta id ultrices nec, pellentesque vel nunc.
                        Cras varius fermentum iaculis.
                        Aenean sodales nibh non lectus tempor a interdum justo ultricies</p>
                    <button type="submit">MORE</button>
                </div>
                <div id="column3">
                <a href="#"><img src="images/b33.png" width="50" height="50"></a>
                <h1>FOLLOW ME  ON TWITTER FACEBOOK & PRINTEREST</h1>
                    <p>Maecenas ipsum metus, semper  henrerit  varius mattis, congue  sit amet tellus.
                        Aliquam ullamcorper dui sed magna posue re ut elementum enim  rutrum.
                        Nam mi erat, porta id ultrices nec, pellentesque vel nunc.
                        Cras varius fermentum iaculis.
                        Aenean sodales nibh non lectus tempor a interdum justo ultricies</p>
                    <button type="submit">MORE</button>
                </div>
            </div>
        </block3>
        <div id="block4">
            <h1>RECENT WORKS</h1>
        </div>
        <div id="block5">
            <a href="#"><img src="images/b41.png" width="215" height="215"></a>
            <a href="#"><img src="images/b42.png" width="215" height="215"></a>
            <a href="#"><img src="images/b43.png" width="215" height="215"></a>
            <b href="#"><img src="images/b44.png" width="215" height="215"></b>
        </div>
    </div>
    <footer>
        <div id="footer">
            <div id="about-us">
                <hf>ABOUT JETRO</hf>
                <p>Lorem ispum dolor sit amet? malorum recteque reprehendunt ea vel. Urbanitas adolescens vim te? per a tritani aperiri.
                Adhuc invenire convenire his ea. Id  mei vitae  denique,  in eam commodo veritus desputando.</p>
                <p>Pro et erant delicata, eu vim essent imperdiet accomodare, dictas deseruisse ius an. Solet everti difinitionem id ius,
                sonet oporteat cu vim.</p>
            </div>
            <div id="twitterf">
                <hf>TWITTER WIDGET</hf>
                <div>
                    <p>
                        <span >@pixelmater</span>
                        <span> What an awesome design with great functionality :)</span>
                    </p>
                </div>
                    <time datetime="2012-10-23"><a href="#">about 1 hour ago</a></time>
                <div>
                    <author name="@designdude"><a href="#">@designdude</a>
                    <p>What an awesome design with great functionality :)</p></author>
                </div>
                <time datetime="2012-10-23"><a href="#">about 2 hour ago</a></time>
                <div>
                    <p>Follow</p>
                    <author name="@pixelmater"><a href="#">@pixelmater</a></author>
                </div>
            </div>
            <div id="social">
                <hf>CONTACT US</hf>
                <p>Lorem ipsum dolor sir amet, malorum recteque reprehendunt ea vel.
                Urbanitas adolescens vim te, per at tritani aperiri.</p>
                <div>
                    <p>information@jetro.com</br>1.222.333.4444</p>
                </div>
                
               
                <a href="http://plus.google.com/" class="social-icon google-plus"></a>
            </div>
        </div>
    </footer>
</body>
</html>