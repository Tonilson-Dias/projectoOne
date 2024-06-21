<?php ?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA.Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOGA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/style-initial.css">
</head>
<body>
    <!--Este é o header-->
    <header>
        <div class="header_e">
            <img src="./assets/img/logo.png" alt="" class="logo">
            <div class="pesquisa">
                <i class="ic_pesquisa fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Pesquisar">
            </div>
        </div>
        <div class="header_m">
            <ul>
               
              
            </ul>
        </div>
        <div class="header_d">
            <ul>
                <li><a href="../pages/friends.html"><i class="fa-solid fa-user-plus"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-bell"></i></a></li>
                <li><img src="./assets/img/user.png" alt="" class="perfil" onclick="toggleMenu()"></li>
            </ul>
            
            <div class="submenu-wrap" id="subMenu"> 
                <div class="submenu">
                    <div class="user_info">
                        <img src="./assets/img/user.png" alt="">
                        <h3>User Name</h3>
                    </div>
                    <hr>

                    <a href="#" class="submenu-link">
                        <i class="fa-regular fa-user"></i>
                        <p>Editar Perfil</p>
                        <span></span>
                    </a>
                        
                    <a href="#" class="submenu-link">
                        <i class="fa-solid fa-gear"></i>
                        <p>Definição de Privacidade</p>
                        <span></span>
                    </a>
                        
                    <a href="#" class="submenu-link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <p>Sair</p>
                        <span></span>
                    </a>
                </div>
            </div>
            
        </div>
    </header>

<!--O PRINCIPAL AREA-->
<div class="main">
    <div class="main_left">
        <ul>
            <li><a href="../pages/home.html"><img src="./assets/img/home.png" alt="">Início</a></li>
            <li><a href="../pages/profile.html"><img src="./assets/img/usericon.png" alt="">Meu Perfil</a></li>
            <li><a href="#"><img src="./assets/img/bell.png" alt="">Notificação</a></li>
            <li><a href="../pages/chat.html"><img src="./assets/img/messages.png" alt="">Mensagens</a></li>
            <li><a href="#"><img src="./assets/img/users.png" alt="">Grupos</a></li>
            <li><a href="../pages/friends.html"><img src="./assets/img//following.png" alt="">Amigos</a></li>
            <li><a href="#"><img src="./assets/img/calendar-day.png" alt="">Eventos</a></li>
        </ul>
        <ul class="pub">
            <li><a href="../pages/saved.html"><img src="./assets/img/bookmark.png" alt="">Publicidades Salvas</a></li>
        </ul>
    </div>

    <div class="main_mid">
        <div class="story">
            <a href="#"></a>
            <!--AREA da MINHA HISTORIA-->
            <div class="stories">

                <div class="story_img mystory">
                    <img src="./assets/img/s1.jpg" alt="">
                    <div class="white">
                        <span class="plus">+</span>
                        <small>Adicionar Estado</small>
                    </div>
                </div>
                <div class="story_img">
                    <img src="./assets/img/s2.jpg" alt="">
                    <span class="circle">
                        <img src="./assets/img/s2.jpg" alt="">
                    </span>
                    <span class="name">Nome de Alguém</span>
                </div>
                <div class="story_img">
                    <img src="./assets/img/s3.jpg" alt="">
                    <span class="circle">
                        <img src="./assets/img/s3.jpg" alt="">
                    </span>
                    <span class="name">Outro Alguém</span>
                </div>
                <div class="story_img">
                    <img src="./assets/img/s4.jpg" alt="">
                    <span class="circle">
                        <img src="./assets/img/s4.jpg" alt="">
                    </span>
                     <span class="name">Mais Alguém</span>
                </div>
                <div class="story_img">
                    <img src="./assets/img/s5.jpg" alt="">
                    <span class="circle">
                        <img src="./assets/img/s5.jpg" alt="">
                    </span>
                    <span class="name">Alguém Mais</span>
                </div>
                <div class="story_img">
                    <img src="./assets/img/s6.jpg" alt="">
                    <span class="circle">
                        <img src="./assets/img/s6.jpg" alt="">
                    </span>
                    <span class="name">Útimo Alguém</span>
                </div>


            </div>
        </div>
    <!--POST-->
    <div class="mypost">
        <div class="row">
            <img src="#" alt="">
            <input type="text" placeholder="Partilhe seus pensamentos">
            <button style="width: 50%/2+8; margin-left:5px; border:1 ; border-radius:14px" > publicar</button>

        </div>
        <ul>
            <li><a href="#"> <img src="./assets/img/picture.png" alt="">Galeria</a></li>
            <li><a href="#"> <img src="./assets/img/face-smile-hearts.png" alt="">Actividade</a></li>
        </ul>
    </div>

    <!--POST DE OUTROS-->
    <div class="post">
        <div class="post_del">
            <div>
                <img src="./assets/img/s4.jpg" alt="">
            </div>
             <div>
                <h5>Nome da Pessoa</h5>
                <span>3dias </span>
            </div>
        </div>
        <p>Esta é a área onde ficará descrição da publicação</p>
        <div class="post_img">
            <img src="./assets/img/s1.jpg" alt="">
        </div>

        <div class="post_react">
            <ul>
            <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
            <li><a href="#"><i class="fa-solid fa-comment"></i></a></li>
            <li><a href="#"><i class="fa-solid fa-share"></i></a></li>
            </ul>
        </div>

        


    </div>

    <div class="post">
        <div class="post_del">
            <div>
                <img src="./assets/img/s2.jpg" alt="">
            </div>
             <div>
                <h5>Nome da Pessoa</h5>
                <span>3dias </span>
            </div>
        </div>
        <p>Esta é a área onde ficará descrição da publicação</p>
        <div class="post_img">
            <img src="./assets/img/s6.jpg" alt="">
        </div>

        <div class="post_react">
            <ul>
            <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
            <li><a href="#"><i class="fa-solid fa-comment"></i></a></li>
            <li><a href="#"><i class="fa-solid fa-share"></i></a></li>
            </ul>
        </div>

        


    </div>
    <div class="post">
        <div class="post_del">
            <div>
                <img src="./assets/img/s1.jpg" alt="">
            </div>
             <div>
                <h5>Nome da Pessoa</h5>
                <span>3dias </span>
            </div>
        </div>
        <p>Esta é a área onde ficará descrição da publicação</p>
        <div class="post_img">
            <img src="./assets/img/s5.jpg" alt="">
        </div>

        <div class="post_react">
            <ul>
            <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
            <li><a href="#"><i class="fa-solid fa-comment"></i></a></li>
            <li><a href="#"><i class="fa-solid fa-share"></i></a></li>
            </ul>
        </div>

        


    </div>
   
    <!---->

</div>

<!--POST-->
    <div class="main_right">
     <div class="container">
        <div class="contacts">
            <div class="heading">
                <br>
                <h5> Contactos</h5>
                <!--<div class="pesquisa">
                    <i class="ic_pesquisa fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Pesquisar">
                </div>-->
            </div>
        </div> 
        <div class="single_cont">
            <div class="user">
                <img src="./assets/img/user0.png" alt="">
                <span></span>
            </div>
            <p>Tonilson Dias</p>
        </div>
        <div class="single_cont">
            <div class="user">
                <img src="./assets/img/user0.png" alt="">
                <span></span>
            </div>
            <p>Neto</p>
        </div>
        <div class="single_cont">
            <div class="user">
                <img src="./assets/img/user0.png" alt="">
                <span></span>
            </div>
            <p>Nome de Outro Alguém</p>
        </div>
        <div class="single_cont">
            <div class="user">
                <img src="./assets/img/user0.png" alt="">
                <span></span>
            </div>
            <p>Nome de Outro Alguém</p>
        </div>
        <div class="single_cont">
            <div class="user">
                <img src="./assets/img/user0.png" alt="">
                <span></span>
            </div>
            <p>Nome de Outro Alguém</p>
        </div>
        <div class="single_cont">
            <div class="user">
                <img src="./assets/img/user0.png" alt="">
                <span></span>
            </div>
            <p>Nome de Outro Alguém</p>
        </div> 
        <div class="single_cont">
            <div class="user">
                <img src="./assets/img/user0.png" alt="">
                <span></span>
            </div>
            <p>Nome de Outro Alguém</p>
        </div>  
    
        <div class="event"> <h5>Eventos</h5>
            <ul>

            </ul>
        </div>

    </div>
    </div>

</div>

    <script src="./assets/js/jquery-3.7.1.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(
            function(){
            $('.owl-carousel').owlCarousel({
                items:5,
                nav:true,
                mouseDrag: false

                });
        })


        <!--DROP-->
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open");
        }
    </script>
</body>
</html>