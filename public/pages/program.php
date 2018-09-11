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
  padding-bottom: 5px;
  border-bottom: 2px solid #e17055;
}
#about-content .program-image{
  margin: 3% 0;
  text-align: center;
  padding-bottom: 2%;
  border-bottom: 2px solid #dcdcdc;
}
</style>


<?php 
$prog_id = isset($_GET['id']) ? $_GET['id'] : '0';

viewProgram($con, $prog_id);

?>







