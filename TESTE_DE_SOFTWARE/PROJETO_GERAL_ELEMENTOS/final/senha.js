// Declaração da variável "senha", inicialmente vazia
let senha = "";

// Declaração da variável "tentativas", que contará quantas vezes o usuário errou a senha
let tentativas = 0;

// Inícia um laço de repetição que permite até 3 tentativas
while (tentativas < 3) {
  // Solicita ao usuário que digite a senha
  senha = prompt("Informe sua senha:");

  // Verifica se a senha digitada é igual a "arroz"
  if (senha === "arroz") {
    // Se a senha estiver correta, mostra mensagem de acesso autorizado
    alert("Acesso autorizado");
    window.location.href="certificado.html"; //Defireciona para outra página
    break;
  } else {
    // Se a senha estiver incorreta, mostra mensagem de acesso negado
    alert("Acesso negado");
    // Incrementa o número de tentativas
    tentativas++;
  }
}

// Após sair do laço, verifica se a senha ainda está errada e se o número de tentativas foi maior ou igual que 3
if (senha !== "arroz" && tentativas >= 3) {
  // Se as condições forem verdadeiras, informa que o acesso está bloqueado
  alert("Tentativas esgotadas. Acesso bloqueado.");
}
