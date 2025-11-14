<?php include 'header.php'; ?>
<h2>Pets Disponíveis</h2>
<ul>
<?php foreach ($pets as $pet): ?>
    <li><a href="index.php?action=view&id=<?= $pet['id'] ?>"><?= $pet['name'] ?> (<?= $pet['type'] ?>)</a></li>
<?php endforeach; ?>
</ul>
<?php include 'footer.php'; ?>