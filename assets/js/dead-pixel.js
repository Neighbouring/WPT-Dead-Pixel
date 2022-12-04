// INÍCIO DO SCRIPT
// By FLávio Conca

// Carregar e Descarregar Loader na Home
const concluirCarregamento = setTimeout(fecharDivLoading, 1500);
function fecharDivLoading() {
  document.getElementById('loadingIntro').style.display = 'none';
}
console.log("PRELOAD 💀 DEAD PIXEL - Carregado!")

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
  window.scrollBy(0, window.innerHeight);
}