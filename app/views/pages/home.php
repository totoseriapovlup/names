<h1>Home</h1>
<form action="/process.php" method="post">
    <label for="input-name">Name</label>
    <input type="text" name="name" id="input-name"/>
    <label for="input-gender-male">Male</label>
    <input type="radio" name="gender" value="boys" id="input-gender-male"/>
    <label for="input-gender-female">Female</label>
    <input type="radio" name="gender" value="girls" id="input-gender-female"/>
    <input type="submit"/>
</form>
<section id="names">
    <table>
        <thead>
            <tr>
                <th>Male</th>
                <th>Female</th>
            </tr>
        </thead>
        <tbody>
            <?php if($size > 0):?>
                <?php for ($i = 0; $i < $size; $i++):?>
                <tr>
                    <td><?= isset($names['boys'][$i]) ? $names['boys'][$i] : '' ?></td>
                    <td><?= isset($names['girls'][$i]) ? $names['girls'][$i] : '' ?></td>
                </tr>
                <?php endfor;?>
            <?php endif; ?>
        </tbody>
    </table>
</section>