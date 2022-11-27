// INÍCIO DO SCRIPT
// By FLávio Conca

// Carregar e Descarregar Loader na Home
const concluirCarregamento = setTimeout(fecharDivLoading, 3000);
function fecharDivLoading() {
  document.getElementById('loadingIntro').style.display = 'none';
}

console.log("DEU BOM!")