

<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Giriş balı</th>
        <th scope="col">İmtahan balı</th>
        <th scope="col">Tesdiq</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $students_key){ ?>
        <tr>
            <th scope="row">1</th>
            <td><?php echo $students_key->s_name; ?> <?php echo $students_key->s_surname; ?> <?php echo $students_key->s_patronimic; ?></td>
            <td>
                <input class="entrance_score_<?php echo $students_key->c_id; ?>" type="text">
            </td>
            <td>
                <input class="exam_score_<?php echo $students_key->c_id; ?>" type="text">
            </td>
            <td>
                <button type="button" data-studentId="<?php echo $students_key->c_id; ?>" class="btn btn-success sendScore">Send</button>
            </td>
        </tr>
    <?php } ?>


    </tbody>