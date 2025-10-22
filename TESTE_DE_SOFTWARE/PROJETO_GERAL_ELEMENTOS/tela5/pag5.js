let tentativas = 0; // Declara a variavel tentativas

// Recebe os valores do formulario após o click do 'submit'
document.getElementById("formulario").addEventListener("submit", function (e) {

  // Impede o comportamento padrão do envio do formulário
  e.preventDefault();

  //Recebe valor de X
  const x = Number(document.getElementById("x").value);
  // Calcula o valor correto de x
  const resultadoEsquerda = 36 * Math.pow(2, 2); // 36 × 4 = 144
  const xCorreto = Math.pow(resultadoEsquerda, 2); // 144² = 20736(Resultado)

  // Verifica se o valor está correto (com margem de erro pequena)
  const epsilon = 0.01;
  const acertou = Math.abs(x - xCorreto) < epsilon;

if (acertou) { // Caso o resultado seje correto
    window.location.href = `resultado5.html?res=${x}&acertou=true`; // Redireciona para outra página
  } else { // Caso o resultado esteja errado
    tentativas++; // Incrementa tentativas
    if (tentativas >= 2) { // Se tentativas for menor e igual que 2
      alert("Número de tentativas esgotado.");  // Alerta para o usuário
      window.location.href = `../tela1/pag1.html`; // Redireciona para outra página
    } else { // Se tentativas for maior que 2
      alert(`Resposta incorreta. Tentativa ${tentativas} de 2.`); // Alerta para o usuário
      // Limpa os campos para nova tentativa
      document.getElementById("x").value = "";
    }
  }
});
