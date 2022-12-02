

<style>
  #asd,#exampleModalLongTitle,#labelresume,#resume{
            color:black;

          }
          .sem{
        font-size: 24px;
        color:black;
          }

#text{
    color:black;
}
</style>
<!-- Modal -->

<?php
?>
<div class="modal fade" id="seminar_view{{$sem->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <span class="sem">  <img src="images/logo_peso.png" style="width:50px;height:50px;">{{$sem->SeminarTitle}}</span>
     <hr>

      <div class="modal-body">
         
      <label for="" id="text">Description:</label>
                        <p>{{$sem->SeminarDescription}}</p>

                 <label for="" id="text">Requirements:</label>
                 <p>{{$sem->SeminarRequirements}}</p>

                 <label for="" id="text">Slots:</label>
                <p>{{$sem->SeminarSlots}}</p>
            
           
            <label for="" id="text">Training Duration:</label>
            <p>{{$sem->DateStart}} - {{$sem->DateEnd}}</p>
            
      </div>

      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary">Yes</button> -->
        <!-- <a class="btn btn-primary" href="#" onclick="myFunction()">Yes</a> -->
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>

    <!-- <script>
        function myFunction() {
            $('.modal').modal('hide');
        }
    </script> -->
