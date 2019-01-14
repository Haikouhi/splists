<!-- Modal -->
<div class="modal fade" id="formList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


        <form action="board.php" method="POST">

            <div class="modal-body">
                <label for="listTitle">Titre</label>
                <input id="listTitle" class="form-control" type="text" name="list-title" placeholder="Title de la nouevlle liste..." autofocus>
            </div>
       
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

        </form>    
    </div>
  </div>
</div>