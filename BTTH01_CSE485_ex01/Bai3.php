<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $arrs = array("PHP", "HTML", "CSS", "JS");
?>

<table border="1">
  <thead>
    <tr>
      <th>Tên khóa học</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($arrs as $i) { ?>
      <tr>
        <td><?php echo $i; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

</body>
</html>