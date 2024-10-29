<table width="100%" cellpadding="5" cellspacing="0" class="wp-list-table widefat fixed pages">
	<thead>
		<tr>
			<th class="manage-column">ID</th>
			<th class="manage-column">Slider Name</th>
                        <th class="manage-column">Short Code</th>
			<th class="manage-column">Edit</th>
			<th class="manage-column">Manage Slider</th>
			<th class="manage-column">Delete</th>
	</thead>

	<tfoot>
		<tr>
			<th class="manage-column">ID</th>
			<th class="manage-column">Slider Name</th>
                        <th class="manage-column">Short Code</th>
			<th class="manage-column">Edit</th>
			<th class="manage-column">Manage Slider</th>
			<th class="manage-column">Delete</th>
		</tr>
	</tfoot>

	<tbody id="the-list">
	<?php
	$i = 0;
	foreach($loop->posts as $row) {
	?>
	<tr class="type-page hentry<?php echo ($i%2==0) ? ' alternate' : ''; ?>">
		<td><?php echo $row->ID; ?></td>
		<td><?php echo $row->post_title; ?></td>
                <td>
                    <input type='text' value='[awslider id="<?php echo $row->ID; ?>"]' style='width: 150px;' readonly='readonly' onclick='this.select();' />
                </td>
		<td><a href="javascript: void(0);" onclick="aw_edit_slider('<?php echo $row->ID; ?>');">Edit</a></td>
		<td><a href="admin.php?page=awesliders&act=manage&id=<?php echo $row->ID; ?>">Manage</a></td>
		<td><a href="javascript: void(0);" onclick="aw_delete_slider('<?php echo $row->ID; ?>');">Delete</a></td>
	</tr>
	<?php
		$i++;
	}
	?>
	</tbody>
</table>
