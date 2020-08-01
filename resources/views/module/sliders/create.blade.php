@extends('master')

@section('content')

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Slider</h1>
                        </div>
                        <form class="user" enctype="multipart/form-data" method="POST"
                            action="{{ route('sliders.store') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Tiêu đề"
                                    name="title">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Vị trí"
                                    name="location">
                            </div>
                            <div class="form-group">
                                @include('module.images.model-slide')
                            </div>
                            <input type="submit" value="Create" class="btn btn-primary btn-user btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        function removeAccents(str) {
            var AccentsMap = [
                "aàảãáạăằẳẵắặâầẩẫấậ",
                "AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬ",
                "dđ", "DĐ",
                "eèẻẽéẹêềểễếệ",
                "EÈẺẼÉẸÊỀỂỄẾỆ",
                "iìỉĩíị",
                "IÌỈĨÍỊ",
                "oòỏõóọôồổỗốộơờởỡớợ",
                "OÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢ",
                "uùủũúụưừửữứự",
                "UÙỦŨÚỤƯỪỬỮỨỰ",
                "yỳỷỹýỵ",
                "YỲỶỸÝỴ"
            ];
            for (var i = 0; i < AccentsMap.length; i++) {
                var re = new RegExp('[' + AccentsMap[i].substr(1) + ']', 'g');
                var char = AccentsMap[i][0];
                str = str.replace(re, char);
            }
            return str;
        }
        $('[name="location"]').on('change', function () {
            const that = $(this);
            const val = removeAccents(that.val())
            const replateVal = val.trim().replace(/\s+/g, "-").toLowerCase();
            that.val(replateVal)
        })
    })

</script>

@endsection
