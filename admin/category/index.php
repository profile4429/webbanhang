
<?php
    

    $title = 'Quan Li Danh Muc';
    $baseUrl = '../';
    require_once'..\layouts\header.php';
    require_once'form_save.php';
        $id = $name = ''; 

    if(isset($_GET['id'])){
      $id = getGet('id');
      $sql = "select *from category where id=$id";
      $data = executeResult($sql,true);
      if($data != null){
        $name = $data['name'];
      }
    }

    $sql = "select *from category";
     $data = executeResult($sql);

?>


<div class="row">
  
  <div class="col-md-12">
    
<h1>Quan Li Danh Muc San Pham</h1>
  </div>
  <div class="col-md-6">
    <form method="post" action="index.php" onsubmit="return validateForm();">
          <div class="form-group">
          <label for="usr" style="font-weight: bold;">Tên danh mục</label>
          <input required="true" type="text" class="form-control" id="usr" name="name" value="<?=$name?>">
          <input type="text" name="id" value="<?=$id?>" hidden="true">
        </div>
        <button class="btn btn-success">Add</button>
      </form>

  </div>
  <div class="col-md-6 table-responsive">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>STT</th>
          <th>Tên danh mục</th>
        
        </tr>
      </thead>
<tbody>
  <?php
  $index = 0;
foreach ($data as $item) {
  echo '<tr>
          <th>'.(++$index).'</th>
          <td>'.$item['name'].'</td>
          <td style="width: 50px;">
           <a href="?id='.$item['id'].'">
           <button class="btn btn-warning">Sửa</button>
           </a>
          </td>
          <td style="width: 50px">

          <button onclick="deleteCategory('.$item['id'].')" class="btn btn-danger">Xóa</button>
         
          </td>
        </tr>
        ';
}


  ?>


</tbody>


    </table>
    
  </div>
  
</div>

<script type="text/javascript">
  function deleteCategory(id){

    $_post('form_api.php',{
        'id':id,
        'action':'delete'
       },function(data){
        ;if (data != null $$ data != '') {
          alert(data);
          return;
        }
        location.reload();
       })

  }

</script>

<?php 
     require_once'..\layouts\footer.php';
 ?>