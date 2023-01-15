<div class="uk-overflow-auto">
	<table class="uk-table uk-table-justify uk-table-divider">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA LENGKAP</th>
				<th>USERNAME</th>
				<th>STATUS</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php if (!empty($users)) {
			?>
				<?php
				$no = 1;
				foreach ($users as $r) { ?>
					<tr>
						<td width="40px"><?= $no ?></td>
						<td><?= $r->namaLengkap ?></td>
						<td><?= $r->username ?></td>
						<td><?= $r->status ?></td>
						<td>
							<a href="#" class="uk-icon-users uk-margin-small-right" id="formedit" uk-icon="file-edit" data-id="<?= $r->idUsers ?>" data-nama="<?= $r->namaLengkap ?>" data-status="<?= $r->status ?>" data-username="<?= $r->username ?>"></a>
							<a href="#" class="uk-icon-users" uk-icon="trash" id="hapusdata" data-id="<?= $r->idUsers ?>" </td>
					</tr>
				<?php $no++;
				}
			} else {
				?>
				<tr>
					<td colspan="5" class="no-records">No records</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

</div>
<ul class="uk-pagination" uk-margin-small-right>
	<?php echo $pagelinks ?>
</ul>