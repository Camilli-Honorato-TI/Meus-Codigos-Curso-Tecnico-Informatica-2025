let tentativas = 0; // Declara a variavel tentativas

// Recebe os valores do formulario após o click do 'submit'
document.getElementById("formulario").addEventListener("submit", function (e) {

  // Impede o comportamento padrão do envio do formulário
  e.preventDefault();

  const x = Number(document.getElementById("x").value);
  const y = Number(document.getElementById("y").value);
  const z = Number(document.getElementById("z").value);
  const resultado = x + y - z;
  const acertou = (resultado === 10);

  if (acertou) { // Caso o resultado seje correto
    window.location.href = `resultado1.html?res=${resultado}&acertou=true`; // Redireciona para outra página
  } else { // Caso o resultado esteja errado
    tentativas++; // Incrementa tentativas
    if (tentativas >= 3) { // Se tentativas for menor que 3
      alert("Sistema bloqueado!")
      return;
    } else { // Se tentativas for maior que 3
      alert(`Resposta incorreta. Tentativa ${tentativas} de 3.`); // Alerta para o usuário
      // Limpa os campos para nova tentativa
      document.getElementById("x").value = "";
      document.getElementById("y").value = "";
      document.getElementById("z").value = "";
    }
  }
});
