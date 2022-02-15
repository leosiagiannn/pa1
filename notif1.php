<!-- Add New -->
<?php
$id_akun = $_SESSION['id_akun'];
$AllNotif = query("SELECT * FROM notifikasi WHERE id_akun = '$id_akun'");
?>
<div class="modal fade" id="notif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Notifikasi</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <table style="width:100%;text-align:center; color:black;" border="0">
                        <td><strong>Judul</strong></td>
                        <td><strong>Isi</strong></td>
                        <?php foreach ($AllNotif as $notif) { ?>
                        <tr>
                            <div class="col-md-4">
                                <td><?= $notif['judul_notifikasi']; ?></td>
                            </div>
                            <div class="col-md-8">
                                <td><?= $notif['notifikasi'] ?></td>
                            </div>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>