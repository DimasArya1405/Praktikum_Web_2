<?php
include 'libraries.php';

$mhs = new Mahasiswa();
$dosen = new Kelas();
$data = $mhs->ShowDataStudents();
$data_class = $dosen->ShowDataStudents();
include 'header.php';
include 'navbar.php';
?>
    <div class="container">
        <h1>Menampilkan semua data</h1><hr>
        <H2>Ini adalah data semua student</H2>
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
        <h2>Ini adalah data semua student classes</h2>
        <?php if (is_array($data) && count($data) > 0) { ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Academic Year</th>
                        <th>Study Program ID</th>
                        <th>Deleted At</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_class as $row) { ?>
                        <tr>
                            <td><?php echo ($row['id']); ?></td>
                            <td><?php echo ($row['name']); ?></td>
                            <td><?php echo ($row['academic_year']); ?></td>
                            <td><?php echo ($row['study_program_id']); ?></td>
                            <td><?php echo ($row['deleted_at']); ?></td>
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