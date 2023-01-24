<!-- Modal -->
<div class="modal fade" id="seminar_edit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Details</h5>
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
                <input type="text" class="form-control" name="Title" id="Title" placeholder="" value="{{$data->SeminarTitle}}" value="{{old('SeminarTitle', $data->SeminarTitle)}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Description:</b></label>
                <textarea class="form-control" name="Description" id="Description" cols="10" rows="5">{{$data->SeminarDescription}}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Requirements:</b></label>
                <textarea class="form-control" name="Requirements" id="Requirements" cols="10" rows="5">{{$data->SeminarRequirements}}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label id="headlabel" for="inputEmail4"><b>Start:</b></label>
                <input type="date" class="form-control" name="Start" id="Start" placeholder="" value="{{$data->DateStart1}}" required>
            </div>
            <div class="form-group col-md-4">
                <label id="headlabel" for="inputEmail4"><b>Up to:</b></label>
                <input type="date" class="form-control" name="End" id="End" placeholder="" value="{{$data->DateEnd1}}" required>
            </div>
            <div class="form-group col-md-4">
                <label id="headlabel" for="inputEmail4"><b>Slots:</b></label>
                <input type="number" class="form-control" name="Slots" id="Slots" placeholder="" value="{{$data->SeminarSlots}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Status:</b></label>
               <select name="Status" id="Status" class="form-control">
                @if($data->Status == "New")
                    <option value="New" selected>New</option>
                    <option value="Expired">Expired</option>
                @else
                    <option value="New">New</option>
                    <option value="Expired" selected>Expired</option>
                @endif
               </select>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="myFunction()">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
