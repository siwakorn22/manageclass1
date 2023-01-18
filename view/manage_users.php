<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">

<h1 class="text-center">ข้อมูลสมาชิกในระบบ</h1>
<hr>

<table class="table table-striped table-hover">
    <thead>
        
        <tr>
        <th>id</th>
        <th>ชื่อ</th>
        
        <th>แก้ไข</th>
        <th>delete</th>
    </tr>  
    </thead>


<tbody>

           <?php 
          foreach ($rs2 as $rs){
           ?>
    <tr>
    <td><?php echo $rs['teacher_id'];?></td>
        <td><?php echo $rs['teacher_name'];?></td>
        <td><a href="edit_form.php?id= <?php echo $row['teacher_id']; ?>" class="btn btn-primary">Edit</a></td></td>
        <td> <a href="../controller/delete_id.php?id1= <?php echo $rs["teacher_id"]; ?>" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">Delete</a></td>
        <td> <input type="checkbox"name="idcheckbox[]"value="<?php echo $row['id'];?>"></td>  
       
    </tr>
    <?php }?>
</tbody>
</table>

<a href=""class="btn btn-primary">บันทึกข้อมูล</a>
<input type="submit"value="ลบข้อมูล"class="btn btn-danger">




</div>
</body>

</html>