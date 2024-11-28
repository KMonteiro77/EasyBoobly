function displayMenu(){
    var dispayPerfilUser = document.querySelector(".menu-user-opcoes");
    if(dispayPerfilUser.style.display === "none") {
        dispayPerfilUser.style.display = "block"
    } else {
        dispayPerfilUser.style.display = "none"
    }
} // Faz o menu de opções do user aparecer e sumir // tem uma class no css que diz o primeiro display do menu