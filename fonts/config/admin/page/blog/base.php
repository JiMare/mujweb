<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800">Blog</h1>
        <a class="d-inline-block btn btn-sm btn-primary shadow-sm" href="?stranka=blog&akce=clanek">
            <i class="fas fa-plus fa-sm text-white-50"></i>
            Přidat Článek
        </a>
</div>

<div>
    <table class="table table-striped table-hover">
        <tr>
            <th>Název</th>
            <th>Autor</th>
            <th>Datum</th>
            <th></th>
        </tr>
        <?php foreach ($clanky as $clanek) : ?>
        <tr>
            <td><?= $clanek["nazev"]; ?></td>
            <td><?= $clanek["autor"]; ?></td>
            <td><?= $clanek["pridano"]; ?></td>
            <td>
                <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt"></i></a>
                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>