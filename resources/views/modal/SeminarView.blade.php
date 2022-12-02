

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
    font-weight: bold;
}

#parag{
  text-align: justify;
}

.btn2{
  width: 20%;
  background-color: #ff3333;
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  font-size: 14px;
  margin: 2px 2px;
  cursor: pointer;
  border-radius: 10px;

}

#add{
	float: right;
}

</style>
<!-- Modal -->

<?php
?>
<div class="modal fade" id="seminar_view{{$sem->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <span class="sem" id="imga"> <img src="images/ccc.png" style="width:50px;height:50px;" id="imga"> {{$sem->SeminarTitle}}</span>
     <hr>

      <div class="modal-body">
         
     <b> <label for="" id="text">Description:</label> </b>
                        <p id="parag">{{$sem->SeminarDescription}}</p>

                 <label for="" id="text">Requirements:</label>
                 <p id="parag">{{$sem->SeminarRequirements}}</p>

                 <label for="" id="text">Slots:</label>
                <p>{{$sem->SeminarSlots}}</p>
            
           
            <label for="" id="text">Training Duration:</label>
            <p>{{$sem->DateStart}} - {{$sem->DateEnd}}</p>
            
      </div>
      <section>
        <button type="button" class="btn2 btn-danger" id="add"  data-dismiss="modal">Close</button>
      </section>
        
    </div>
  </div>
</div>
        <!-- <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script> -->

    <!-- <script>
        function myFunction() {
            $('.modal').modal('hide');
        }
    </script> -->
