<?php include 'economyData.php'; ?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Wirtschaftsentwicklung</title>
    <style>
        h1 {
            margin: 50px 0;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .container {
            margin: 50px;
        }

        table, th, td {
            padding: 5px;
            border: 1px solid black;
            border-collapse: collapse;

        }

        table {
            margin-bottom: 70px;
        }

    </style>
</head>
<body>
<div class="container">
    <h1>Wirtschaftsentwicklung</h1>
    <div>
        <h2>Die Wertschöpfung</h2>
        <table>
            <tr>
                <th></th>
                <?php foreach ($years as $year): ?>
                    <th><?php echo $year; ?></th>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th>Gesamte Sektoren</th>
                <?php foreach ($addedValue as $value): ?>
                    <td><?php echo $value; ?></td>
                <?php endforeach; ?>
            </tr>
        </table>
    </div>
    <div>
        <h2>Die relativen Anteile der Sektoren</h2>
        <table>
            <tr>
                <th>Sektor</th>
                <?php foreach ($years as $year): ?>
                    <th><?php echo $year; ?></th>
                <?php endforeach; ?>
            </tr>

            <?php foreach ($relProportionData as $key => $values): ?>
                <tr>
                    <td><?php echo $key; ?></td>
                    <?php foreach ($values as $value): ?>
                        <td align="right"><?php echo $value . "%"; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
    <div>
        <h2>Die indizierte Entwicklung der jeweiligen Sektoren (1970 = 100)</h2>
        <table>
            <tr>
                <th>Sektor</th>
                <?php foreach ($years as $year): ?>
                    <th><?php echo $year; ?></th>
                <?php endforeach; ?>
            </tr>

            <?php foreach ($relDevelopmentData as $key => $values): ?>
                <tr>
                    <td><?php echo $key; ?></td>

                    <?php foreach ($values as $value): ?>
                        <td align="right"><?php echo $value; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

</body>
</html>
