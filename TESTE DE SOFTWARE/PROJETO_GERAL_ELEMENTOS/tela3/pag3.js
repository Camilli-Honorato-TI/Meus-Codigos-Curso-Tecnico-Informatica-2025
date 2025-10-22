let tentativas = 0; // Declara a variavel tentativas

// Recebe os valores do formulario após o click do 'submit'
document.getElementById("formulario").addEventListener("submit", function (e) {

  // Impede o comportamento padrão do envio do formulário
  e.preventDefault();

  //Recebe valor de X
  const x = Number(document.getElementById("x").value);
  const resultado = Math.pow(Math.sqrt(x), 2); //Faz o calculo com o valor de X.
  const esperado = 7; //Indica o valor esperado
  const epsilon = 0.0001; // Margem de erro

  const acertou = Math.abs(resultado - esperado) < epsilon; //Verifica se o resultado possa estar dentro de uma margem de erro aceitavel

  if (acertou) { // Caso o resultado seje correto
    window.location.href = `resultado3.html?res=${resultado}&acertou=true`; // Redireciona para outra página
  } else { // Caso o resultado esteja errado
    tentativas++; // Incrementa tentativas
    if (tentativas >= 3) { // Se tentativas for menor que 3
      alert("Número de tentativas esgotado.");  // Alerta para o usuário
      window.location.href = `resultado3.html?res=${resultado}&acertou=false`; // Redireciona para outra página
    } else { // Se tentativas for maior que 3
      alert(`Resposta incorreta. Tentativa ${tentativas} de 3.`); // Alerta para o usuário
      // Limpa os campos para nova tentativa
      document.getElementById("x").value = "";
    }
  }
});
