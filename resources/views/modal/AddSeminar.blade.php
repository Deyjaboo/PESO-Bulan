

<style>
  #asd,#exampleModalLongTitle,#labelresume,#resume,#headlabel{
            color:black;

          }

          .btn0{
  background-color: RoyalBlue;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 0.5rem;
}
.btn0:hover {      background-color: #008CBA;      color: white; }
.btn1:hover {      background-color:  #ff4d4d;      color: white; }
.btn1{
  background-color: #ff3333;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 0.5rem;
}

</style>
<!-- Modal -->

<?php
?>
<div class="modal fade" id="add_seminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><b>Add Trainings</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="form" action="add_seminar" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}
      <div class="modal-body">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Title:</b></label>
                <input type="text" class="form-control" name="SeminarTitle" id="SeminarTitle" placeholder="" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Description:</b></label>
                <textarea class="form-control" name="SeminarDescription" id="SeminarDescription" cols="10" rows="5" required></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Requirements:</b></label>
                <textarea class="form-control" name="SeminarRequirements" id="SeminarRequirements"  cols="10" rows="5" required></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label id="headlabel" for="inputEmail4"><b>Starting Date:</b></label>
                <input type="date" class="form-control" name="DateStart" id="DateStart" placeholder="" required>
            </div>
            <div class="form-group col-md-4">
                <label id="headlabel" for="inputEmail4"><b>Up to:</b></label>
                <input type="date" class="form-control" name="DateEnd" id="DateEnd" placeholder="" required>
            </div>
            <div class="form-group col-md-4">
                <label id="headlabel" for="inputEmail4"><b>Slots:</b></label>
                <input type="number" class="form-control" name="Slots" id="Slots" placeholder="" required>
            </div>
        </div>
      
      </div>

      
      <div class="modal-footer">
        <button type="submit" class="btn0">Add</button>
        <button type="button" class="btn1" data-dismiss="modal" onclick="myFunction()">Cancel</button>
      </div>
    </div>
  </div>
</div>

</form>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>

  <script>
        function myFunction() {
          document.getElementById("SeminarTitle").value =""
          document.getElementById("SeminarDescription").value =""
          document.getElementById("SeminarRequirements").value =""
          document.getElementById("DateStart").value =""
          document.getElementById("DateEnd").value =""
          document.getElementById("Slots").value =""
        }
    </script>
