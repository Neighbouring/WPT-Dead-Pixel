// INÍCIO DO SCRIPT
// By Flávio Conca
// Neighbouring
//
// https://neighbouring.com.br


// SNACKBAR
// Verifica Conexão
window.ononline = (event) => {
  snackbarOnline();
};
// Conexão Perida
window.onoffline = (event) => {
  snackbarOffline();
};
// Função Snackbar / Toast Message
function snackbarOnline() {
  console.log(" 👌🏽 Conexão estabelecida! ");
  var x = document.getElementById("sbOnline");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
function snackbarOffline() {
  console.log(" 🦖 Conexão perdida! ");
  var x = document.getElementById("sbOffline");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}



// PRELOADER
// Carregar e Descarregar
const concluirCarregamento = setTimeout(fecharDivLoading, 1500);
function fecharDivLoading() {
  document.getElementById('loadingIntro').style.display = 'none';
}
console.log("PRELOAD 💀 DEAD PIXEL - Carregado!")



// SCROLL DOWN
// Ação ao clicar em Ficha Técnica
function coordenadaMouse(){
// function coordenadaMouse(event){
  // console.log("X = " + event.clientX + "<br>Y = " + event.clientY);
  // console.log("X = " + event.clientX);
  // console.log("Y = " + event.clientY);
  // window.scroll({
  //   top: event.clientX - 800,
  //   left: 0,
  //   behavior: 'smooth'
  // });

  // Scroll 100px a partir da coordenada do clique
  // window.scrollBy(0, window.innerHeight);
  // window.scrollBy(0, window.innerHeight - window.innerHeight+100);
  window.scrollBy(0, window.innerHeight-800);
}



// MENU
// Carregar Modal Institucional
document.getElementById("menu-item-43").addEventListener("click", modalAbrir);



// BLOCK SCROLL
// Desativar Scroll
function desativaScroll() {
  // Registra posição atual da tela
  document.body.classList.add("block-scroll");
}
// Reativar Scroll
function ativaScroll() {
  document.body.classList.remove("block-scroll");
}



// MODAL
// Abrir
function modalAbrir() {
  document.getElementById("modalInstitucional").style.display = 'block';
  document.getElementById("btnFechar").style.display = 'block';
  desativaScroll();
}
// Fechar
function modalFechar() {
  document.getElementById("modalInstitucional").style.display = 'none';
  document.getElementById("btnFechar").style.display = 'none';
  ativaScroll();
}