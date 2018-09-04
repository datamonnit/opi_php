<style>
table {
    /* border-collapse: collapse; */
}

table, th, td {
    border: 1px solid black;
}

th::first-letter {
    text-transform: uppercase;
}
</style>

<?php 
/* Map Rows and Loop Through Them */
$rows   = array_map('str_getcsv', file('liiga17-18.csv'));
$headers = array_shift($rows);
$csv    = array();
foreach($rows as $row) {
    $csv[] = array_combine($headers, $row);
}
?>

<!-- Taulukko alkaa tästä -->
<table>
    <thead>
        <tr>
            <?php
            foreach ($headers as $header) {
                echo "<th>$header</th>";
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <!-- Käydään läpi loput rivit ja tulostetaan taulukko -->
        <?php foreach ($csv as $key => $row): ?>
            <tr>
                <td><?php echo $row['joukkue']; ?></td>
                <td><?php echo $row['ottelut']; ?></td>
                <td><?php echo $row['voitot']; ?></td>
                <td><?php echo $row['tasapelit']; ?></td>
                <td><?php echo $row['häviöt']; ?></td>
                <td><?php echo $row['tm']; ?></td>
                <td><?php echo $row['pm']; ?></td>
                <td><?php echo $row['lp']; ?></td>
                <td><?php echo $row['pisteet']; ?></td>
                <td><?php echo $row['p/o']; ?></td>
                <td><?php echo $row['yv%']; ?></td>
                <td><?php echo $row['av%']; ?></td>
            </tr>        
        <?php endforeach; ?>
    </tbody>
</table>