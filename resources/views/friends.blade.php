<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA.Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOGA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/style-initial.css">
    <link rel="stylesheet" href="./assets/css/friends.css">
    
</head>
<body>
    <!--Este é o header-->
    <header>
        <div class="header_e">
            <img src="../img/logo.png" alt="" class="logo">
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
                <li><a href="#"><i class="fa-solid fa-user-plus"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-bell"></i></a></li>
                <li><img src="../img/user.png" alt="" class="perfil" onclick="toggleMenu()"></li>
            </ul>
            
            <div class="submenu-wrap" id="subMenu"> 
                <div class="submenu">
                    <div class="user_info">
                        <img src="../img/user.png" alt="">
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
            <li><a href="../pages/home.html"><img src="../img/icons/home.png" alt="">Início</a></li>
            <li><a href="#"><img src="../img/icons/user.png" alt="">Meu Perfil</a></li>
            <li><a href="#"><img src="../img/icons/bell.png" alt="">Notificação</a></li>
            <li><a href="../pages/chat.html"><img src="../img/icons/messages.png" alt="">Mensagens</a></li>
            <li><a href="#"><img src="../img/icons/users.png" alt="">Grupos</a></li>
            <li><a href="#"><img src="../img/icons/following.png" alt="">Amigos</a></li>
            <li><a href="#"><img src="../img/icons/calendar-day.png" alt="">Eventos</a></li>
        </ul>
        <ul class="pub">
            <li><a href="../pages/saved.html"><img src="../img/icons/bookmark.png" alt="">Publicidades Salvas</a></li>
        </ul>
    </div>

    <div class="main_mid">
        <div class="search-friends">
            <input type="text" id="searchInput" placeholder="Pesquisar...">
            <div class="friends-list">
                <!--  perfil encontrado -->
                <div class="friend-profile">
                    <div class="friend-photo">
                        <img src="../img/stories/s3.jpg" alt="Friend Photo">
                    </div>
                    <div class="friend-info">
                        <div class="friend-name">Jucel Paulo</div>
                        <button class="friend-request-btn">Adicionar</button>
                    </div>
                </div>

                <div class="friend-profile">
                    <div class="friend-photo">
                        <img src="../img/stories/s2.jpg" alt="Friend Photo">
                    </div>
                    <div class="friend-info">
                        <div class="friend-name">Estefânio Dias</div>
                        <button class="friend-request-btn">Adicionar</button>
                    </div>
                </div>

                <div class="friend-profile">
                    <div class="friend-photo">
                        <img src="../img/stories/s1.jpg" alt="Friend Photo">
                    </div>
                    <div class="friend-info">
                        <div class="friend-name">Tonilson Dias</div>
                        <button class="friend-request-btn">Adicionar</button>
                    </div>
                </div>
            
                <div class="friend-profile">
                    <div class="friend-photo">
                        <img src="../img/stories/s2.jpg" alt="Friend Photo">
                    </div>
                    <div class="friend-info">
                        <div class="friend-name">Jucel Paulo</div>
                        <button class="friend-request-btn">Adicionar</button>
                    </div>
                </div>

                <div class="friend-profile">
                    <div class="friend-photo">
                        <img src="../img/stories/s5.jpg" alt="Friend Photo">
                    </div>
                    <div class="friend-info">
                        <div class="friend-name">Estefânio Dias</div>
                        <button class="friend-request-btn">Adicionar</button>
                    </div>
                </div>

                <div class="friend-profile">
                    <div class="friend-photo">
                        <img src="../img/stories/s6.jpg" alt="Friend Photo">
                    </div>
                    <div class="friend-info">
                        <div class="friend-name">Tonilson Dias</div>
                        <button class="friend-request-btn">Adicionar</button>
                    </div>
                </div>
                <div class="friend-profile">
                    <div class="friend-photo">
                        <img src="../img/stories/s1.jpg" alt="Friend Photo">
                    </div>
                    <div class="friend-info">
                        <div class="friend-name">Jucel Paulo</div>
                        <button class="friend-request-btn">Adicionar</button>
                    </div>
                </div>

                <div class="friend-profile">
                    <div class="friend-photo">
                        <img src="../img/stories/s2.jpg" alt="Friend Photo">
                    </div>
                    <div class="friend-info">
                        <div class="friend-name">Estefânio Dias</div>
                        <button class="friend-request-btn">Adicionar</button>
                    </div>
                </div>

                <div class="friend-profile">
                    <div class="friend-photo">
                        <img src="../img/stories/s3.jpg" alt="Friend Photo">
                    </div>
                    <div class="friend-info">
                        <div class="friend-name">Tonilson Dias</div>
                        <button class="friend-request-btn">Adicionar</button>
                    </div>
                </div>
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
                <img src="../img/user0.png" alt="">
                <span></span>
            </div>
            <p>Nome de Outro Alguém</p>
        </div>
        <div class="single_cont">
            <div class="user">
                <img src="../img/user0.png" alt="">
                <span></span>
            </div>
            <p>Nome de Outro Alguém</p>
        </div>
        <div class="single_cont">
            <div class="user">
                <img src="../img/user0.png" alt="">
                <span></span>
            </div>
            <p>Nome de Outro Alguém</p>
        </div>
        <div class="single_cont">
            <div class="user">
                <img src="../img/user0.png" alt="">
                <span></span>
            </div>
            <p>Nome de Outro Alguém</p>
        </div>
        <div class="single_cont">
            <div class="user">
                <img src="../img/user0.png" alt="">
                <span></span>
            </div>
            <p>Nome de Outro Alguém</p>
        </div>
        <div class="single_cont">
            <div class="user">
                <img src="../img/user0.png" alt="">
                <span></span>
            </div>
            <p>Nome de Outro Alguém</p>
        </div> 
        <div class="single_cont">
            <div class="user">
                <img src="../img/user0.png" alt="">
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