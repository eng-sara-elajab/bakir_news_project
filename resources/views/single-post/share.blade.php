<div class="modal-header" id="divColor">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title viewT" >Share Post</h4>
</div>
<br>

<div class="modal-padding">
    <form action="{{route('single-post.shared')}}" method="GET">
        @csrf
        <div class="form-body">
            <select name="shared_on">
                <option value="facebook">Facebook</option>
                <option value="twitter">Twitter</option>
                <option value="whatsapp">WhatsApp</option>
            </select>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Share</button>
        </div>
    </form>
</div>
