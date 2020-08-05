<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#imagesModal">
    Chọn ảnh
</button>
<br>
<input type="hidden" name="image_id" value="{{$id ?? ''}}">

<img id="view-image" src="{{ $img ?? '' }}" width="200" class="mt-2">
<!-- Modal -->
<div class="m-auto  modal fade bd-example-modal-lg" id="imagesModal" tabindex="-1" role="dialog"
    aria-labelledby="imagesModalLabel" aria-hidden="true">
    <div class="modal-dialog m-auto w-75 mw-100" role="document">
        <div class="modal-content">


            <div class="card shadow mb-4">
                <!-- DataTales Example -->

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Danh sách</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($images as $item)
                        <div style="cursor: pointer" class="col-3 image" data-dismiss="modal" aria-label="Close">
                            <img class="w-100 mw-100" src="{{ route('asset.show', $item->name) }}"
                                alt="{{ $item->name }}" data-id="{{ $item->id }}">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        $('.col-3.image').on('click', function () {
            const self = $(this);
            const src = self.find('img').attr('src');
            const id = self.find('img').attr('data-id');
            $('[name="image_id"]').val(id);
            $('#view-image').attr('src', src);
        })
    })

</script>
