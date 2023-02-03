<?php

require 'Work.php';
require 'MainInfo.php';

$info = new MainInfo("Томас", "Дукорский", "Профессиональный кот", "Дукора", "Беларусь", "tomas@cat.by", "+375447654321");

$firstWork = new Work("Бои без правил", DateTime::createFromFormat('d.m.Y', '01.02.2021'), null, "Lorem ipsum dolor sit 
         amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
         minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
         dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
         cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
$secondWork = new Work("Звукооператор", DateTime::createFromFormat('d.m.Y', '16.07.2019'), DateTime::createFromFormat('d.m.Y', '19.01.2021'), "Vitae tempus 
         quam pellentesque nec nam aliquam sem et. Euismod lacinia at quis risus sed vulputate. Etiam non quam lacus 
         suspendisse faucibus interdum posuere lorem ipsum. Varius vel pharetra vel turpis nunc eget lorem. Mauris 
         rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Lectus urna duis convallis 
         convallis tellus id. Risus nec feugiat in fermentum posuere urna nec tincidunt praesent. Iaculis urna id 
         volutpat lacus. Facilisis mauris sit amet massa vitae tortor. Id diam vel quam elementum. Sit amet porttitor 
         eget dolor morbi. Dis parturient montes nascetur ridiculus. Elit sed vulputate mi sit amet mauris. Enim neque 
         volutpat ac tincidunt vitae.");
$thirdWork = new Work("Спринтер", DateTime::createFromFormat('d.m.Y', '10.03.2016'), DateTime::createFromFormat('d.m.Y', '15.07.2019'), "Vulputate sapien nec 
         sagittis aliquam malesuada. At erat pellentesque adipiscing commodo elit at imperdiet. Consequat id porta nibh 
         venenatis cras sed felis eget. Tristique senectus et netus et malesuada fames ac. Sagittis vitae et leo duis ut
         diam quam. Vulputate ut pharetra sit amet. Eget aliquet nibh praesent tristique magna. Morbi quis commodo odio 
         aenean. Scelerisque felis imperdiet proin fermentum. Porta non pulvinar neque laoreet suspendisse interdum. 
         Auctor urna nunc id cursus metus aliquam eleifend mi in.");

$arrayWork = array($firstWork, $secondWork, $thirdWork);

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html, body, h1, h2, h3, h4, h5, h6 {
            font-family: 'Jost', sans-serif;
        }
    </style>
</head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">

        <!-- Left Column -->
        <div class="w3-third">

            <div class="w3-white w3-text-grey w3-card-4">
                <div class="w3-display-container">
                    <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp"
                         style="width:100%" alt="Avatar">
                    <div class="w3-display-bottomleft w3-container w3-text-black">
                        <h2><?= "{$info->getFirstname()} {$info->getLastname()}" ?></h2>
                    </div>
                </div>
                <div class="w3-container">
                    <p>
                        <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $info->getProfession() ?>
                    </p>
                    <p>
                        <i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?= "{$info->getCity()}, {$info->getCountry()}" ?>
                    </p>
                    <p>
                        <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $info->getEmail() ?>
                    </p>
                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $info->getPhone() ?>
                    </p>
                    <hr>

                    <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b>
                    </p>
                    <p>Adobe Photoshop</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
                    </div>
                    <p>Photography</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                            <div class="w3-center w3-text-white">80%</div>
                        </div>
                    </div>
                    <p>Illustrator</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
                    </div>
                    <p>Media</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
                    </div>
                    <br>

                    <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
                    </p>
                    <p>Английский</p>
                    <div class="w3-light-grey w3-round-xlarge">
                        <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
                    </div>
                    <p>Испанский</p>
                    <div class="w3-light-grey w3-round-xlarge">
                        <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
                    </div>
                    <p>Немецкий</p>
                    <div class="w3-light-grey w3-round-xlarge">
                        <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
                    </div>
                    <br>
                </div>
            </div>
            <br>

            <!-- End Left Column -->
        </div>

        <!-- Right Column -->
        <div class="w3-twothird">

            <div class="w3-container w3-card w3-white w3-margin-bottom">
                <h2 class="w3-text-grey w3-padding-16"><i
                            class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>

                <?php foreach ($arrayWork as $work) : ?>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b><?= $work->getNameWork() ?> </b></h5>
                        <h6 class="w3-text-teal"><i
                                    class="fa fa-calendar fa-fw w3-margin-right"></i><?= $work->getStartDate() ?> -
                            <?php if ($work->getEndDate() != null) :
                                echo $work->getEndDate();
                            else : ?>
                                <span class="w3-tag w3-teal w3-round">Current</span>
                            <?php endif; ?>
                        </h6>
                        <p><?= $work->getDescription() ?></p>
                        <hr>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="w3-container w3-card w3-white">
                <h2 class="w3-text-grey w3-padding-16"><i
                            class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>gb.ru</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
                    <p>Web Development! All I need to know in one place</p>
                    <hr>
                </div>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>London Business School</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
                    <p>Master Degree</p>
                    <hr>
                </div>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>School of Coding</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
                    <p>Bachelor Degree</p><br>
                </div>
            </div>

            <!-- End Right Column -->
        </div>

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
</footer>

</body>
</html>
