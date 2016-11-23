

<a data-toggle="tooltip" data-placement="left" title="" 
   data-original-title="View Detail" href="index.php?action=<?= $type ?>_detail&id_<?= $type ?>=<?= $row['id_'.$type  ] ?>">
    <i class="fa fa-eye"></i>
</a>
<a data-toggle="tooltip" data-placement="left" title="" 
   data-original-title="Edit"  
   href="index.php?action=<?= $type ?>_edit&id_<?= $type ?>=<?= $row['id_'.$type ] ?>">
    <i class="fa fa-edit"></i>
</a>
<a href="#" data-toggle="tooltip" data-placement="left" title="" 
   data-original-title="Delete" 
   onclick="confirmDelete('index.php?action=<?= $type ?>_delete&id_<?= $type ?>=<?= $row[ 'id_'.$type ] ?>', '<?= $type ?>')">
    <i class="fa fa-trash-o"></i>
</a>