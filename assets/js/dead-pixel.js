// INÍCIO DO SCRIPT
// By FLávio Conca

// Carregar e Descarregar Loader na Home
const concluirCarregamento = setTimeout(fecharDivLoading, 1500);
function fecharDivLoading() {
  document.getElementById('loadingIntro').style.display = 'none';
}

console.log("DEU BOM!")




function coordenadaMouse(event){

  // console.log("X = " + event.clientX + "<br>Y = " + event.clientY);
  console.log("X = " + event.clientX + "<br>Y = " + event.clientY);
  }