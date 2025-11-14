<?php include 'header.php'; ?>
<h2>Adicionar Novo Pet</h2>
<form method="post">
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="type">Tipo:</label>
    <input type="text" id="type" name="type" required><br>
    <label for="age">Idade:</label>
    <input type="number" id="age" name="age" required><br>
    <label for="description">Descrição:</label>
    <textarea id="description" name="description" required></textarea><br>
    <input type="submit" value="Adicionar">
</form>
<?php include 'footer.php'; ?>