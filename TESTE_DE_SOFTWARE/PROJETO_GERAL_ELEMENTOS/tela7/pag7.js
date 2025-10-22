let tentativas = 0;

// Recebe os valores do formulario após o click do 'submit'
document.getElementById("formulario").addEventListener("submit", function (e) {

  // Impede o comportamento padrão do envio do formulário
  e.preventDefault();

  const x = Number(document.getElementById("x").value); //Recebe X
  const respostaCorreta = 100; //Indica a resposta certa
  const acertou = (x === respostaCorreta); // Compara a respota correta ao valor informado pelo usuario

  if (acertou) { // Caso o resultado seje correto
    window.location.href = `resultado7.html?res=${x}&acertou=true` // Redireciona para outra página
  } else { // Caso o resultado esteja errado
    tentativas++; // Incrementa tentativas
    if (tentativas >= 3) { // Se tentativas for menor que 3
      alert("Número de tentativas esgotado.");  // Alerta para o usuário
      window.location.href = `../tela1/pag1.html`; // Redireciona para outra página
    } else { // Se tentativas for maior que 3
      alert(`Resposta incorreta. Tentativa ${tentativas} de 3.`); // Alerta para o usuário
      // Limpa os campos para nova tentativa
      document.getElementById("x").value = "";
    }
  }
  
});
