<style>
table {
    /* border-collapse: collapse; */
}

table, th, td {
    border: 1px solid black;
}
</style>

<?php 
$file = fopen('liiga17-18.csv','r'); // Avataan tiedosto
$keys = fgetcsv($file, 0)      // Otetaan ensimmäinen rivi, jossa otsikot
?>

<!-- Taulukko alkaa tästä -->
<table>
    <thead>
        <tr>
            <?php
            foreach ($keys as $key) {
                echo "<td>$key</td>";
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <!-- Käydään läpi loput rivit ja tulostetaan taulukko -->
        <?php while (!feof($file)): ?>
            <?php $row = fgetcsv($file, 0, ','); ?>
            <tr>
                <td><?php echo $row['0']; ?></td>
                <td><?php echo $row['1']; ?></td>
                <td><?php echo $row['2']; ?></td>
                <td><?php echo $row['3']; ?></td>
                <td><?php echo $row['4']; ?></td>
                <td><?php echo $row['5']; ?></td>
                <td><?php echo $row['6']; ?></td>
                <td><?php echo $row['7']; ?></td>
                <td><?php echo $row['8']; ?></td>
                <td><?php echo $row['9']; ?></td>
                <td><?php echo $row['10']; ?></td>
                <td><?php echo $row['11']; ?></td>
            </tr>        
        <?php endwhile; ?>
    </tbody>
</table>
<?php fclose($file); ?>
