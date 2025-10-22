let tentativas = 0;

// Recebe os valores do formulario após o click do 'submit'
document.getElementById("formulario").addEventListener("submit", function (e) {

  // Impede o comportamento padrão do envio do formulário
  e.preventDefault();

  const resposta = Number(document.getElementById("resposta").value); //Recebe a resposta
  const respostaCorreta = 45; //Indica a resposta certa
  const acertou = resposta === respostaCorreta; // Compara a respota correta ao valor informado pelo usuario

  if (acertou) { // Caso o resultado seje correto
    window.location.href = `resultado6.html?res=${resposta}&acertou=true`; // Redireciona para outra página
  } else { // Caso o resultado esteja errado
    tentativas++; // Incrementa tentativas
    if (tentativas >= 2) { // Se tentativas for ?res=${resposta}&acertou=truemenor e igual que 2
      alert("Número de tentativas esgotado.");  // Alerta para o usuário
      window.location.href = `../tela1/pag1.html`; // Redireciona para outra página
    } else { // Se tentativas for maior que 2
      alert(`Resposta incorreta. Tentativa ${tentativas} de 2.`); // Alerta para o usuário
      // Limpa os campos para nova tentativa
      document.getElementById("x").value = "";
    }
  }
});
