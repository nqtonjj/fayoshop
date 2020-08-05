<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#imagesModal">
    Chọn Slides
</button>
<div id="view-image">
    <input type="hidden" name="image_id[]">
</div>
<!-- Modal -->
<div class="m-auto  modal fade bd-example-modal-lg" id="imagesModal" tabindex="-1" role="dialog"
    aria-labelledby="imagesModalLabel" aria-hidden="true">
    <div class="modal-dialog m-auto w-75 mw-100" role="document">
        <div class="modal-content">


            <div class="card shadow mb-4">
                <!-- DataTales Example -->

                <div class="card-header py-3 d-flex">
                    <h6 class="m-0 font-weight-bold text-primary">Danh sách</h6>
                    <div style="flex-grow: 1"></div>
                    <button data-dismiss="modal" aria-label="Close" id="choose_image">Chọn ảnh</button>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- Lấy data từ app\Providers\AppServiceProvider --}}
                        @foreach ($slides as $item)
                        <div style="cursor: pointer" class="col-3 image">
                            <img class="w-100 mw-100" src="{{ route('asset.show', $item->image['name']) }}"
                                alt="{{ $item->name }}" data-id="{{ $item->id }}">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .image.active {
        border: 1px solid #000;
    }

</style>

<script>
    const images = [];
    $(function () {
        $('.col-3.image').on('click', function () {
            const self = $(this);
            self.toggleClass('active');
            const src = self.find('img').attr('src');
            const id = self.find('img').attr('data-id');
            if (self.hasClass('active')) {
                images.push({
                    src: src,
                    id: id
                })
            } else {
                const index = images.findIndex(o => o.id === id);
                images.splice(index, 1);
            }
        })
        $('#choose_image').on('click', function () {
                $('#view-image').empty();
                $.each(images, function (i, el) {
                    $('#view-image').append(`<img src="${el.src}" width="200" class="m-2" />`)
                    $('#view-image').append(`<input type="hidden" name="image_id[]" value="${el.id}" />`)
                })
            })
    })

</script>
