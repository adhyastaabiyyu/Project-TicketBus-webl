<?php
	require_once '../models/db.php';

	if (isset($_GET['idk'])) {
		$delete = mysqli_query($conn, "DELETE FROM tiket WHERE id_tiket = '".$_GET['idk']."'");
?>
		<script type="text/javascript">
			window.alert("Dihapus!");location.href="/tiketbusmvc/views/rute-admin.php/.";
		</script>
<?php
	}
?>