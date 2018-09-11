<style>
#about-content{
  text-align: left;
  margin-top: 5%;
}
#about-content p{
  font-size: 17px;
  line-height: 1.5;
}
#about-content span{
  font-size: 150%;
  font-weight: 600;
  padding: 5px;
  border-bottom: 2px solid #e17055;

}
</style>
<div id="about-content">
  <?php 
  $id = isset($_GET['id']) ? $_GET['id'] : '';
  if ($id != '') {
    $query = mysqli_query($con, "SELECT * FROM facilities WHERE id='$id' " );
    while ($row = mysqli_fetch_assoc($query)) {
      $title = $row['name'];
      $image = $row['file_path'];
      $content = $row['content'];

      $res ="<div><span>$title</span></div>
      <img src='$image' class='img-fluid my-4' alt=''>
      $content";

      echo $res;
    }
  }else{
    $query = mysqli_query($con, "SELECT * FROM facilities ORDER BY id DESC");
  while ($row = mysqli_fetch_assoc($query)) {
    $id = $row['id'];
    $title = $row['name'];
    $image = $row['file_path'];
    $content = $row['content'];
    $content = substr($content,0, 80);

    $res ="<div class='row news-list py-5'>
    <div class='col-lg-4'>
    <div class='news-img'>
    <img src='$image' class='img-fluid' alt=''>
    </div> 
    </div>
    <div class='col-lg-8'>
    <b>".ucwords($title)."</b>
    <p> $content ...</p>
    <a href='".url_for('/pages?url=facilities&id='.$id.'')."' class='btn btn-sm btn-outline-danger'>Read More</a>
    </div>
    </div>";

    echo $res;
  }
  }
  
  ?>
</div>









