let tentativas = 0; // Declara a variavel tentativas

// Recebe os valores do formulario após o click do 'submit'
document.getElementById("formulario").addEventListener("submit", function (e) {

  // Impede o comportamento padrão do envio do formulário
  e.preventDefault();
  
  //Recebe o valor de X e Y
  const x = Number(document.getElementById("x").value);
  const y = Number(document.getElementById("y").value);
  //Faz a operação
  const resultado = (x * y) / 100;
  //Indica o valor esperado
  const esperado = 5;
  //Fala a diferença que é aceitavel
  const epsilon = 0.0001;

  //Verifica se a diferença é aceitavel
  const acertou = Math.abs(resultado - esperado) < epsilon;

  if (acertou) { // Caso o resultado seje correto
    window.location.href = `resultado4.html?res=${resultado}&acertou=true`; // Redireciona para outra página
  } else { // Caso o resultado esteja errado
    tentativas++; // Incrementa tentativas
    if (tentativas >= 3) { // Se tentativas for menor que 3
      alert("Número de tentativas esgotado.");  // Alerta para o usuário
      window.location.href = `../tela1/pag1.html`; // Redireciona para outra página
    } else { // Se tentativas for maior que 3
      alert(`Resposta incorreta. Tentativa ${tentativas} de 3.`); // Alerta para o usuário
      // Limpa os campos para nova tentativa
      document.getElementById("x").value = "";
      document.getElementById("y").value = "";
    }
  }

});
