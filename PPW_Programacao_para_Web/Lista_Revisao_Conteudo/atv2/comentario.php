<!-- Página de Comentários Local (Sem Persistência).
Autor: Camilli Vitória Salvaro Honorato
Data: Março, 2025 -->

<!DOCTYPE html>
<link rel="stylesheet" href="comentario.css">
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários</title>
</head>
<body>
    <div class="container">
        <h2>Deixe seu comentário</h2>
        <form method="POST">
            <textarea name="comment" placeholder="Escreva seu comentário: " required style="resize: none"></textarea>
            <br>
            <button type="submit" id="btn">Enviar</button>
        </form>
        <div class="comments">
            <h3>Comentários:</h3>
            <?php
                session_start();
                if (!isset($_SESSION['comments'])) {
                    $_SESSION['comments'] = [];
                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['comment'])) {
                    $_SESSION['comments'][] = htmlspecialchars($_POST['comment']);
                }
                foreach (array_reverse($_SESSION['comments']) as $comment) {
                    echo "<div class='comment'>" . nl2br($comment) . "</div>";
                }
            ?>
        </div>
    </div>
</body>
</html>