// Solicita ao usuário que informe quantas letras tem seu nome
// Usamos o Number(), pois o sem ele o valor recebido sera String
let numeros = Number(prompt("Informe quantas letras tem seu nome: "));

// Inicializa uma variável para armazenar o nome, começando vazia
let nome = ""; 

// Estrutura de repetição que irá executar enquanto i for menor ou igual ao número informado
for (let i = 1; i <= numeros; i++) { 
    // Solicita ao usuário que digite a letra correspondente à posição atual (i)
    let letra = prompt("Digite a letra " + i + "ª do seu nome:"); 

    // Adiciona a letra digitada à variável nome (concatenação)
    nome += letra; 
}

// Mostra uma mensagem final com o nome completo digitado pelo usuário
alert("Seu nome é: " + nome);

// Redireciona o usuário para outra página ("../tela1/pag1.html")
window.location.href = "../tela1/pag1.html";
