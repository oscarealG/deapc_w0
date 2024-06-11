<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_catalogo.css">
</head>
<body>
    <h1>Gestão de eventos</h1>
    <p>Bem vindo</p>
    <hr>
    <div class="container">
        <?php 
        $db = new SQLite3('evento.sqlite');
        if (!$db) {
            echo "error";
        }
        $col = "*";
        $lista = $db->query("SELECT $col FROM produtos");
        while ($row = $lista->fetchArray(SQLITE3_ASSOC)) {
            $id = $row['id']; // Supondo que existe uma coluna 'id' na tabela 'produtos'
            echo '<a href="evento.php?id=' . $id . '">';
            echo '<div class="event-card">';
            // Adicione a imagem do evento aqui
            echo '<img src="path_to_event_image.jpg" alt="Imagem do evento">';
            echo '<div class="event-details">';
            echo '<h2>' . $row['Evento'] . '</h2>';
            echo '<p>Categoria: ' . $row['Categoria'] . '</p>';
            echo '<p>Data: ' . $row['Data'] . '</p>';
            echo '<p>Local: ' . $row['Local'] . '</p>';
            echo '<p>Artista: ' . $row['Artista'] . '</p>';
            echo '<p>Preço: ' . $row['Preço'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</a>';
        }
        $db->close();
        ?>
    </div>
    <hr>
</body>
</html>

