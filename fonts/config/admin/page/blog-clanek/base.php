<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-4 text-gray-800">Blog - přidat článek</h1>
</div>

<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?stranka=blog">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nový článek</li>
        </ol>
    </nav>
</div>

<div>
    <form method="post">
    <div class="form-group">
        <label for="nazev">Název</label>
        <input name="nazev" type="text" class="form-control" id="nazev" required>
    </div>
    <div class="form-group">
        <label for="perex">Perex</label>
        <input name="perex" type="text" class="form-control" id="perex" required>
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <textarea name="text" type="text" class="form-control" id="text" rows="7" required></textarea>
    </div>
    <div class="form-group">
        <label for="obrazek">Obrazek</label>
        <input name="obrazek" type="text" class="form-control" id="obrazek" required>
    </div>
        <button type="submit" class="btn btn-primary">Přidat článek</button>
    </form>
</div>