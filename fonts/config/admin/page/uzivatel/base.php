<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800">Uživatelé</h1>
</div>

<div>
    <table class="table table-striped table-hover">
        <tr>
            <th>Přezdívka</th>
            <th>Email</th>
            <th>Administrátor</th>
        </tr>
        <?php foreach($uzivatele as $uzivatel) : ?>
            <tr>
                <td><?= $uzivatel->vratPrezdivku(); ?></td>
                <td><?= $uzivatel->vratEmail(); ?></td>
                <td>
                    <a href="#" class="btn btn-sm btn-primary">
                    <?php if($uzivatel->jeAdministrator()) : ?>
                        <i class="fa fa-check-square"></i>
                    <?php else : ?>
                        <i class="fa fa-square"></i>
                    <?php endif; ?>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>