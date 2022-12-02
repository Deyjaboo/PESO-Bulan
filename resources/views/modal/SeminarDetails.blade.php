<!-- Modal -->
<div class="modal fade" id="seminar_details{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Training/Seminar Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ route ('edit_seminar' , $data->id) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="modal-body">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Title:</b></label>
                <p>{{$data->SeminarTitle}}</p>
                <!-- <input type="text" class="form-control" name="Title" id="Title" placeholder="" value="{{$data->SeminarTitle}}" required> -->
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Description:</b></label>
                <p>{{$data->SeminarDescription}}</p>
                <!-- <textarea class="form-control" name="Description" id="Description" cols="10" rows="5">{{$data->SeminarDescription}}</textarea> -->
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Requirements:</b></label>
                <p>{{$data->SeminarRequirements}}</p>
                <!-- <textarea class="form-control" name="Requirements" id="Requirements" cols="10" rows="5">{{$data->SeminarRequirements}}</textarea> -->
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label id="headlabel" for="inputEmail4"><b>Start:</b></label>
                <p>{{$data->DateStart}}</p>
                <!-- <input type="date" class="form-control" name="Start" id="Start" placeholder="" value="{{$data->DateStart1}}" required> -->
            </div>
            <div class="form-group col-md-4">
                <label id="headlabel" for="inputEmail4"><b>Up to:</b></label>
                <p>{{$data->DateEnd}}</p>
                <!-- <input type="date" class="form-control" name="End" id="End" placeholder="" value="{{$data->DateEnd1}}" required> -->
            </div>
            <div class="form-group col-md-4">
                <label id="headlabel" for="inputEmail4"><b>Slots:</b></label>
                <p>{{$data->SeminarSlots}}</p>
                <!-- <input type="number" class="form-control" name="Slots" id="Slots" placeholder="" value="{{$data->SeminarSlots}}" required> -->
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
            @if($data->Status == "New")
                <label for="inputEmail4"><b>Status:</b><i id="headlabel1"> {{$data->Status}}</i></label>
            @else
                <label for="inputEmail4"><b>Status:</b><i id="headlabel2"> {{$data->Status}}</i></label>
            @endif
               <!-- <select name="Status" id="Status" class="form-control">
                @if($data->Status == "New")
                    <option value="New" selected>New</option>
                    <option value="Expired">Expired</option>
                @else
                    <option value="New">New</option>
                    <option value="Expired" selected>Expired</option>
                @endif
               </select> -->
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <!-- <button type="submit" class="btn btn-primary">Save</button> -->
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
<style>
    #headlabel1{
        color: blue;
    }
    #headlabel2{
        color: red;
    }
</style>