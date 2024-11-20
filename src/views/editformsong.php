<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ExamenArnau</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/datatables.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>

<div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">WEBAMP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
  </div>
  <script src="/js/bootstrap.bundle.min.js"></script>
  <script src="/js/jquery-3.7.1.min.js"></script>
  <script src="/js/datatables.js"></script>
  <script src="/js/main.js"></script>

    <!-- id_song | song_name | artist   | duration | song_path -->

    <!-- Formulario para añadir canciones -->
    <div class="container mt-4">
        <h2>Editar canciones</h2>
        <form action="" id="editSongForm" method="post" enctype="multipart/form-data">
            <input type="text" hidden name="song_id" value="<?= $_GET['id'] ?>">
            <div class="form-floating mb-3">
                <input type="text" name="song_name" value="<?= $songs['song_name'] ?>" class="form-control" id="song_name" placeholder="505">
                <label for="song_name">Nombre de la canción</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="artist" value="<?= $songs['artist'] ?>" class="form-control" id="artist" placeholder="Artic Monkeys">
                <label for="artist">Artista</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" accept="audio/*" class="form-control" id="song">
                <label for="song">Seleccionar una nueva canción</label>
                <?php if (!empty($songs['song_path'])): ?>
                    <small class="form-text text-muted">
                        Canción actual:
                        <a name="song" href="<?= $songs['song_path'] ?>" target="_blank"><?= basename($songs['song_path']) ?></a>
                    </small>
                <?php endif; ?>
            </div>
            <button class="btn btn-primary mt-3" type="submit">Guardar Cambios</button>
        </form>
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/datatables.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>