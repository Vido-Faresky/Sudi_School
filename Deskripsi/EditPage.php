<?php
require_once '../actions/assignments/edit-assignments.php';
require_once '../actions/assignments/lesson-name.php';

$subjects = [];
$categories = [];

$subRes = $connection->query("SELECT id, name FROM subjects");
while ($row = $subRes->fetch_assoc()) {
  $subjects[$row['id']] = $row['name'];
}

$catRes = $connection->query("SELECT id, name FROM category");
while ($row = $catRes->fetch_assoc()) {
  $categories[$row['id']] = $row['name'];
}

$id = $_GET['id'] ?? 0;
$result = $connection->query("SELECT * FROM assignments WHERE id = $id");
$assignment = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Tugas</title>
  <link rel="icon" href="../Foto/Logo Sudi School.png" type="png">
  <link rel="stylesheet" type="text/css" href="Homepage.css">
  <link rel="stylesheet" type="text/css" href="Deskripsi.css">
</head>

<body>

  <div class="Header">
    <header>
      <a href="../landing/index2.php"><img style="width: 130px; margin-left: 130px;" src="../Foto/Logo Sudi School.png"
          alt="Logo Sudi School"></a>
      <Input class="Header-Input" type="textt" placeholder="Temukan Pelajaran, Tugas, Ulangan..."></Input>
      <button class="Header-Search">
        <img style="width: 40px; margin-top: 2px;" src="../Foto/Search.png" alt="Search">
      </button>
      <div class="Masukk">
        <a class="Masuk" style="margin-left: 1600px;" onclick="return confirm('Are you sure to logout from this app?')"
          href="../actions/users/logout.php">Logout</a>
      </div>
    </header>
  </div>

  <p class="label">Edit Tugas</p>

  <div class="Daff" id="Daff">

    <form method="POST" action="../actions/assignments/edit-assignments.php" onsubmit="return validateForm()">
      <input type="hidden" name="id" value="<?= $assignment['id'] ?>">

      <div class="dropdown">
        <button name="subject" type="button" class="dropdown-button" onclick="toggleDropdown(event)">
          <span id="dropdownLabels"><?= $labels ?? 'Pilih Pelajaran' ?></span>
          <img style="width: 20px;" src="../Foto/Dropdown.png" alt="arrow" class="arrow-icon">
        </button>
        <div id="dropdownMenuu" style="display: none;" class="dropdown-content">
          <?php foreach ($subjects as $id => $name): ?>
            <a href="javascript:void(0)" onclick="selectSubject('<?= htmlspecialchars($name) ?>', <?= $id ?>, event)">
              <?= htmlspecialchars($name) ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <input type="hidden" id="subjectInput" name="subject" value="<?= $assignment['subject_id'] ?>">

      <div class="pwc">
        <label>Keterangan</label>
        <textarea id="password" name="description" placeholder="Keterangan Tugas" required><?= htmlspecialchars($assignment['description']) ?></textarea>
      </div>

      <div class="pwc">
        <label>Deadline</label>
        <input id="konfir" type="date" name="due_date" value="<?= $assignment['due_date'] ?>" required />
      </div>

      <div class="dropdown">
        <button name="category" type="button" class="dropdown-button" onclick="toggleDropdown(event)">
          <span id="dropdownLabel"><?= $labelss ?? 'Pilih Category' ?></span>
          <img style="width: 20px;" src="../Foto/Dropdown.png" alt="arrow" class="arrow-icon">
        </button>
        <div id="dropdownMenu" style="display: none;" class="dropdown-content">
          <?php foreach ($categories as $id => $name): ?>
            <a href="javascript:void(0)" onclick="selectCategory('<?= htmlspecialchars($name) ?>', <?= $id ?>, event)">
              <?= htmlspecialchars($name) ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <input type="hidden" id="categoryInput" name="category" value="<?= $assignment['category_id'] ?>">

      <button type="submit" name="update" class="Daftar">Update</button>
    </form>

  </div>

  <script src="Dropdown.js"></script>

</body>