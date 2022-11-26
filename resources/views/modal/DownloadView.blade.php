

<style>
  #asd,#exampleModalLongTitle,#labelresume,#resume{
            color:black;

          }

</style>
<!-- Modal -->

<?php
?>
<div class="modal fade" id="download_view{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class='bx bx-download'></i> <b>Download</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4>{{$data->CompanyName}}</b> (<i>{{$data->JobTitle}}</i>)</h4>
          <br>
            <!-- <label for="" id="asd">ID:</label>
            <p id="asd">{{$data->id}}</p> -->
            <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "peso_db";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // $sql = "SELECT * FROM applications WHERE id = '{{$data->id}}'";
  // $result = mysqli_query($conn, $sql);

  // if (mysqli_num_rows($result) > 0) {
  // while($row = mysqli_fetch_assoc($result)) {

    // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " ".$row["email"]. " ". "<br>";
//   }
// } else {
//   echo "0 results";
// }
// "SELECT COUNT(*) FROM applications WHERE JobID = '{{$data->id}}'"
 $res = mysqli_query($conn, "SELECT * FROM applications WHERE JobID = '$data->id'");
 $rowcount = mysqli_num_rows( $res );
 echo "Number of submitted applications: " ."<b>". $rowcount;

  mysqli_close($conn);
?><br>
<br>
            <p>Are you sure you want to <b><i>download</i></b>  the submitted application/s?</p>

      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary">Yes</button> -->
        <a class="btn btn-primary" href="{{ url ('/download',$data->id)}}" onclick="myFunction()">Yes</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>

    <script>
        function myFunction() {
            $('.modal').modal('hide');
        }
    </script>
