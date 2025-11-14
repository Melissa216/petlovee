<?php include 'header.php'; ?>
<h2>Detalhes do Pet</h2>
<p><strong>Nome:</strong> <?= $this->pet->name ?></p>
<p><strong>Tipo:</strong> <?= $this->pet->type ?></p>
<p><strong>Idade:</strong> <?= $this->pet->age ?></p>
<p><strong>Descrição:</strong> <?= $this->pet->description ?></p>
<?php include 'footer.php'; ?>