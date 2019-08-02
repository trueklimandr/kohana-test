<?php if (!isset($data['users'])) {?>
    <h2>No data</h2>
<?php } else { ?>
    <div class="row">
        <div class="col-md-3">
            <h2>Filter:</h2>
            <div class="input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="NamesSelectAge">Max Age</label>
                </div>
                <select class="custom-select" id="NamesSelectAge">
                    <?php foreach ($data['filter']['ages'] as $age) { ?>
                        <option value="<?= $age ?>"<?php if (isset($data['filter']['maxAge']) && $data['filter']['maxAge'] == $age) {?> selected<?php }?>>
                            <?= $age ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="NamesSelectLetter">First Letter</label>
                </div>
                <select class="custom-select" id="NamesSelectLetter">
                    <option value="">All</option>
                    <?php foreach ($data['filter']['letters'] as $letter) { ?>
                        <option value="<?= $letter ?>"<?php if (isset($data['filter']['firstLetter']) && $data['filter']['firstLetter'] == $letter) {?> selected<?php }?>>
                            <?= $letter ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Name Count</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data['users'] as $user) {?>
                    <tr>
                        <td><?= $user['first_name']?></td>
                        <td><?= $user['count']?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php } ?>
