<?php
include 'libraries.php';

$mhs = new Mahasiswa();
$data = $mhs->ShowDataStudents();
$pol = new polymorphism();
$pol_data = $pol->ShowDataStudents();
include 'header.php';
include 'navbar.php';
?>
    <div class="container">
        <h1>Polymorphism</h1>
        <hr>
        <h2>Ini adalah method atau function ShowDataStudents() di class Mahasiswa</h2>
        <?php if (is_array($data) && count($data) > 0) { ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Signature</th>
                        <th>Number Phone</th>
                        <th>User ID</th>
                        <th>Student Class ID</th>
                        <th>Deleted At</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row) { ?>
                        <tr>
                            <td><?php echo ($row['id']); ?></td>
                            <td><?php echo ($row['nim']); ?></td>
                            <td><?php echo ($row['name']); ?></td>
                            <td><?php echo ($row['addressess']); ?></td>
                            <td><?php echo ($row['signature']); ?></td>
                            <td><?php echo ($row['number_phone']); ?></td>
                            <td><?php echo ($row['user_id']); ?></td>
                            <td><?php echo ($row['student_class_id']); ?></td>
                            <td><?php echo "null"; ?></td>
                            <td><?php echo ($row['created_at']); ?></td>
                            <td><?php echo ($row['updated_at']); ?></td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p>Data Kosong.</p>
        <?php }; ?>
    </div>
    <div class="container">
    <h2>Ini adalah method atau function ShowDataStudents() di class Polymorphism</h2>
    <p>Disini data student yang di tampilkan, hanya student yang memiliki address "Binangun"</p>
        <?php if (is_array($pol_data) && count($pol_data) > 0) { ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Signature</th>
                        <th>Number Phone</th>
                        <th>User ID</th>
                        <th>Student Class ID</th>
                        <th>Deleted At</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pol_data as $row) { ?>
                        <tr>
                            <td><?php echo ($row['id']); ?></td>
                            <td><?php echo ($row['nim']); ?></td>
                            <td><?php echo ($row['name']); ?></td>
                            <td><?php echo ($row['addressess']); ?></td>
                            <td><?php echo ($row['signature']); ?></td>
                            <td><?php echo ($row['number_phone']); ?></td>
                            <td><?php echo ($row['user_id']); ?></td>
                            <td><?php echo ($row['student_class_id']); ?></td>
                            <td><?php echo "null"; ?></td>
                            <td><?php echo ($row['created_at']); ?></td>
                            <td><?php echo ($row['updated_at']); ?></td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p>Data Kosong.</p>
        <?php }; ?>
    </div>
    <?php
include 'footer.php';
    ?>